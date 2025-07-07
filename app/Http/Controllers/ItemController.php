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

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

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

        return view('myInventory.myInventoryPage', ['items' => $pagedItems]);
    }

    // Filter category
    public function filterByCategory($slug)
    {
        $category = Categories::where('slug', $slug)->firstOrFail();

        $items = Item::with(['category', 'subCategory', 'expirationDates'])
            ->where('category_id', $category->id)
            ->paginate(9);

        return view('myInventory.myInventoryPage', compact('items'));
    }

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

    // Show item detail by slug (for now, its by id)
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
