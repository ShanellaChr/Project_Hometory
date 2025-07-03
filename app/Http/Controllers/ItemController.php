<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Show all items
    public function index()
    {
        $items = Item::with(['category', 'subCategory', 'expirationDates'])->get();

        // Urutkan berdasarkan tanggal expired terdekat
        $items = $items->sortBy(function ($item) {
            return optional($item->expirationDates->sortBy('expiration_date')->first())->expiration_date;
        });

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
    public function show(string $id)
    {
        $item = Item::where('id', $id)->firstOrFail();
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
