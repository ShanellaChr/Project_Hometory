<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        // Hardcoded wishlist items
        $wishlists = [
            [
                'id' => 1,
                'name' => 'Dettol Liquid Soap',
                'description' => 'Wangi sakura, yang warna merah, yang ukuran 250 ml',
                'category' => 'Personal Care',
            ],
            [
                'id' => 2,
                'name' => 'Citato chips',
                'description' => 'Yang rasa ayam panggang, yang warna merah, yang ukuran party size',
                'category' => 'Foods',
            ],
            [
                'id' => 3,
                'name' => 'Vitamin D',
                'description' => 'Yang merek blackmore, yang 10000mg, yang ada extra minyak ikan pausnya',
                'category' => 'Health Supplies',
            ],
        ];

        // Map kategori ke warna class
        $categoryColors = [
            'Personal Care' => 'pinkcategory',
            'Foods' => 'merahtuacategory',
            'Beverages' => 'birucategory',
            'Kitchen Needs' => 'coklatcategory',
            'Household Essentials' => 'ijocategory',
            'Health Supplies' => 'merahcategory',
        ];

        // Tambahkan class warna ke item
        foreach ($wishlists as &$item) {
            $item['category_class'] = $categoryColors[$item['category']] ?? 'pinkcategory';
        }

        return view('wishlist.wishlistPage', compact('wishlists'));
    }
}
