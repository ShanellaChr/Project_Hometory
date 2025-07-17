<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\ExpirationDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    // Show all items
    public function index(Request $request)
    {
        $query = Item::with(['category', 'subCategory', 'expirationDates']);

        // Filter berdasarkan kategori jika tersedia
        if ($request->filled('category')) {
            $category = Categories::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        // Filter berdasarkan pencarian
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        // Ambil semua item lalu sort manual berdasarkan tanggal expired terdekat
        $items = $query->get()->sortBy(function ($item) {
            return optional($item->expirationDates->sortBy('expiration_date')->first())->expiration_date;
        });

        // Paginate manual (9 item per halaman)
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 9;
        $pagedItems = new LengthAwarePaginator(
            $items->forPage($currentPage, $perPage)->values(), // values() untuk reset key
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );


        return view('myInventory.myInventoryPage', [
            'items' => $pagedItems,
            'selectedCategory' => $request->category
        ]);
    }

    // Show form to add/create new item
    public function create()
    {
        $mode = 'create';
        return view('myInventory.crudItemPage', compact('mode'));
    }

    // Store the new item created to storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required',
            'subcategory' => 'required',
            'location' => 'required|string|max:255',
            'note' => 'nullable|string',
            'date' => 'required|array',
            'date.*' => 'required|date',
            'qty' => 'required|array',
            'qty.*' => 'required|integer|min:1',
        ]);

        // Simpan item baru
        $item = Item::create([
            'name' => $request->name,
            'category_id' => Categories::where('category', $request->category)->first()->id,
            'subcategory_id' => Subcategories::where('subcategory', $request->subcategory)->first()->id,
            'location' => $request->location,
            'note' => $request->note,
            'user_id' => Auth::id(),
        ]);

        // Simpan semua tanggal exp
        foreach ($request->date as $index => $date) {
            $item->expirationDates()->create([
                'expiration_date' => $date,
                'qty' => $request->qty[$index] ?? 1,
            ]);
        }

        // $this->updateStatistics($item);
        app(\App\Http\Controllers\StatisticController::class)->updateStatisticForSingleItem($item);

        return redirect()->route('item.index')->with('success', 'Item added successfully.');
    }

    // Show item detail by slug
    public function show(string $slug)
    {
        $item = Item::with(['category', 'subCategory', 'expirationDates'])->where('slug', $slug)->firstOrFail();
        return view('myInventory.itemDetailPage', compact('item'));
    }

    public function edit(string $slug)
    {
        $item = Item::with('category', 'subcategory', 'expirationDates')->where('slug', $slug)->firstOrFail();
        $mode = 'edit';
        return view('myInventory.crudItemPage', compact('item', 'mode'));
    }

    public function update(Request $request, string $slug)
    {
        $item = Item::where('slug', $slug)->firstOrFail();

        // Simpan kategori lama
        $originalCategoryId = $item->category_id;

        // Simpan kategori lama
        $originalCategoryId = $item->category_id;

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'subcategory' => 'required|string',
            'location' => 'required|string',
            'note' => 'nullable|string',
            'date' => 'required|array',
            'date.*' => 'required|date',
            'qty' => 'required|array',
            'qty.*' => 'required|integer|min:1',
        ]);

        $item->update([
            'name' => $validated['name'],
            'category_id' => Categories::where('category', $validated['category'])->first()->id,
            'subcategory_id' => Subcategories::where('subcategory', $validated['subcategory'])->first()->id,
            'location' => $validated['location'],
            'note' => $validated['note'],
        ]);

        // Hapus semua tanggal exp lama
        $item->expirationDates()->delete();

        // Tambahkan tanggal exp baru
        foreach ($validated['date'] as $index => $expDate) {
            $item->expirationDates()->create([
                'expiration_date' => $expDate,
                'qty' => $validated['qty'][$index] ?? 1,
            ]);
        }

        // $this->updateStatistics($item, $originalCategoryId);
        app(\App\Http\Controllers\StatisticController::class)->updateStatisticForSingleItem($item);

        return redirect()->route('item.detail', ['slug' => $item->slug])->with('success', 'Item updated successfully.');
    }

    public function destroy(string $slug)
    {
        $item = Item::where('slug', $slug)->firstOrFail();

        $currentMonth = Carbon::now()->startOfMonth();
        $deletedQty = $item->expirationDates()->sum('qty'); // hitung dulu sebelum delete

        $item->expirationDates()->delete();

        // Hapus item-nya
        $item->delete();

        Statistic::where([
            'user_id' => Auth::id(),
            'category_id' => $item->category_id,
            'month_year' => $currentMonth->format('Y-m-d'),
        ])->decrement('total_items', $deletedQty);

        return redirect()->route('item.index')->with('success', 'Item berhasil dihapus.');
    }

    public function expiredItems()
    {
        $today = Carbon::today();

        // Ambil semua expiration date yang sudah lewat
        $expiredDates = ExpirationDate::with('item.category', 'item.subCategory')
            ->whereDate('expiration_date', '<', $today)
            ->orderBy('expiration_date', 'asc')
            ->get();

        return view('myInventory.expiredItemPage', compact('expiredDates'));
    }

    public function deleteExpiration($id)
    {
        $exp = ExpirationDate::findOrFail($id);
        $item = $exp->item;

        if ($item->user_id !== Auth::id()) {
            abort(403);
        }

        $currentMonth = Carbon::now()->startOfMonth();

        $deletedQty = $exp->qty;
        $exp->delete();

        // Cek apakah item masih punya expiration date
        if ($item->expirationDates()->count() === 0) {
            $categoryId = $item->category_id;
            $item->delete();

            // Kurangi statistik bulan saat ini
            Statistic::where([
                'user_id' => Auth::id(),
                'category_id' => $categoryId,
                'month_year' => $currentMonth->format('Y-m-d'),
            ])->decrement('total_items', $deletedQty);

            return redirect()->route('item.expired')->with('success', 'Item and expiration date deleted.');
        }

        Statistic::where([
            'user_id' => Auth::id(),
            'category_id' => $item->category_id,
            'month_year' => $currentMonth->format('Y-m-d'),
        ])->decrement('total_items', $deletedQty);

        return redirect()->route('item.expired')->with('success', 'Expiration date deleted.');
    }

    private function updateStatistics(Item $item, $originalCategoryId = null)
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $userId = $item->user_id;

        // Total qty dari item ini
        $currentTotalQty = $item->expirationDates()->sum('qty');

        // Jika kategori berubah, kita perlu update dua kategori: yang lama dan yang baru
        if ($originalCategoryId && $originalCategoryId != $item->category_id) {
            // Kurangi dari kategori lama
            Statistic::where([
                'user_id' => $userId,
                'category_id' => $originalCategoryId,
                'month_year' => $currentMonth->format('Y-m-d'),
            ])->decrement('total_items', $currentTotalQty);

            // Tambahkan ke kategori baru
            Statistic::updateOrCreate(
                [
                    'user_id' => $userId,
                    'category_id' => $item->category_id,
                    'month_year' => $currentMonth->format('Y-m-d'),
                ],
                [
                    'total_items' => DB::raw("total_items + {$currentTotalQty}")
                ]
            );
        } else {
            // Jika kategori tetap, hanya update qty-nya
            Statistic::updateOrCreate(
                [
                    'user_id' => $userId,
                    'category_id' => $item->category_id,
                    'month_year' => $currentMonth->format('Y-m-d'),
                ],
                [
                    'total_items' => $currentTotalQty
                ]
            );
        }
    }
}
