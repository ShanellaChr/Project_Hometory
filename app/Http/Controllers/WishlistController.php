<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Wishlist;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    // public function index()
    // {
    //     $wishlists = Wishlist::with('category')->where('user_id', auth()->id())->get();
    //     return view('wishlist.index', compact('wishlists'));
    // }
    public function index()
    {
        $wishlists = Wishlist::with('category')->get();

        return view('wishlist.wishlistPage', compact('wishlists'));
    }
    public function create()
    {
        $categories = Categories::all();
        return view('wishlist.addWishlistPage', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        // Simpan data ke database
        Wishlist::create([
            'items_name' => $request->name,
            'category_id' => $request->category,
            'items_description' => $request->description,
            // 'user_id' => auth()->id(), // sesuaikan jika pakai auth, kalau tidak bisa hardcode sementara
            'user_id' => 1, // Contoh hardcode user_id
        ]);
        return redirect()->route('wishlist');
    }

    public function edit($id)
    {
        $wishlist = Wishlist::findOrFail($id); // Ambil data berdasarkan ID
        $categories = Categories::all(); // Jika ingin ambil dari database
        return view('wishlist.updateWishlistPage', compact('wishlist', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $wishlist = Wishlist::findOrFail($id);
        $wishlist->items_name = $request->name;
        $wishlist->category_id = $request->category_id;
        $wishlist->items_description = $request->description;
        $wishlist->save();

        return redirect()->route('wishlist')->with('success', 'Wishlist updated successfully.');
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->route('wishlist')->with('success', 'Wishlist deleted successfully.');
    }

    public function redirect($id)
    {
        return redirect()->route('wishlist.edit', ['id' => $id]);
    }

    public function check($id)
    {
        $wishlist = Wishlist::findOrFail($id);

        // Hapus wishlist (karena dianggap sudah selesai)
        $wishlist->delete();

        // Redirect ke halaman tujuan (pastikan route ini ADA di web.php)
        return redirect()->route('crudItemPage')->with('success', 'Wishlist item marked as completed.');
    }

    public function crudPage()
    {
        return view('cruditempage'); // sesuaikan nama view-nya
    }
}
