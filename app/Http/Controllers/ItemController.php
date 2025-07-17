<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\ExpirationDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        return redirect()->route('item.detail', ['slug' => $item->slug])->with('success', 'Item updated successfully.');
    }

    public function destroy(string $slug)
    {
        $item = Item::where('slug', $slug)->firstOrFail();

        // Hapus semua exp date terkait
        $item->expirationDates()->delete();

        // Hapus item-nya
        $item->delete();

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

        // Hapus expiration date yang dimaksud
        $exp->delete();

        // Cek apakah item masih punya expiration date
        if ($item->expirationDates()->count() === 0) {
            $item->delete();
            return redirect()->route('item.expired')->with('success', 'Item and expiration date deleted.');
        }

        return redirect()->route('item.expired')->with('success', 'Expiration date deleted.');
    }
}
