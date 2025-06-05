<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\WishlistController;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/signup', function () {
    return view('signUpPage');
});

Route::get('/myInventory', function () {
    return view('myInventory.myInventoryPage');
});

Route::get('/calendar', [CalendarController::class , 'show'])->name('calendar.show');

Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic.page');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::get('/wishlist/add', function () {
    return view('wishlist.AddWishlistPage');
})->name('wishlist.add');

Route::get('/wishlist/update', function () {
    return view('wishlist.UpdateWishlistPage');
})->name('wishlist.update');

Route::get('/article', function () {
    return view('article.articlePage');
});

Route::get('/profile', function () {
    return view('profileUser.profilePage');
});

Route::get('/reset', function () {
    return view('resetPasswordPage');
});

Route::get('/admin', function () {
    return view('admin.dashboardAdminPage');
});