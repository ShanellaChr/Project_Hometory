<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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

    // Filter category
    // public function filterByCategory($slug)
    // {
    //     $category = Categories::where('slug', $slug)->firstOrFail();

    //     $items = Item::with(['category', 'subCategory', 'expirationDates'])
    //         ->where('category_id', $category->id)
    //         ->paginate(9);

    //     return view('myInventory.myInventoryPage', compact('items'));
    // }

    // Show form to add/create new item
    public function create()
    {
        //
    }

    // Store the new item created to storage
    public function store(Request $request)
    {
        //
    }

    // Show item detail by slug
    public function show(string $slug)
    {
        $item = Item::with(['category', 'subCategory', 'expirationDates'])->where('slug', $slug)->firstOrFail();
        return view('myInventory.itemDetailPage', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
