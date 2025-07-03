<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\StatisticController;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/signup', function () {
    return view('signUpPage');
});

// Route::get('/myInventory', function () {
//     return view('myInventory.myInventoryPage');
// });

Route::get('/myInventory', [ItemController::class, 'index'])->name('item.index');

Route::get('/myInventory/{id}', [ItemController::class, 'show'])->name('item.detail');

// Route::get('/itemDetailPage', function () {
//     return view('myInventory.itemDetailPage');
// });

Route::get('/expiredItemPage', function () {
    return view('myInventory.expiredItemPage');
});

Route::get('/crudItemPage', function () {
    return view('myInventory.crudItemPage');
});

Route::get('/calendar', [CalendarController::class , 'show'])->name('calendar.show');

Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic.page');


Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/wishlist/{id}/redirect', function ($id) {
    // Logika redirect, contoh ke halaman edit
    return redirect()->route('wishlist.edit', ['id' => $id]);
})->name('wishlist.redirect');
Route::get('/wishlist/add', [WishlistController::class, 'create'])->name('wishlist.add');
Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist.store');
Route::get('/wishlist/{id}/edit', [WishlistController::class, 'edit'])->name('wishlist.edit');
Route::post('/wishlist/{id}/update', [WishlistController::class, 'update'])->name('wishlist.update');
Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.delete');
Route::get('/wishlist/check/{id}', [WishlistController::class, 'check'])->name('wishlist.check');
Route::get('/cruditempage', function () {
    return view('myInventory.crudItemPage'); // Nama file: resources/views/crudItemPage.blade.php
})->name('crudItemPage');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.detail');

Route::get('/profile', function () {
    return view('profileUser.profilePage');
});

Route::get('/reset', function () {
    return view('resetPassword.requestResetPage');
});

Route::get('/resetVerif', function () {
    return view('resetPassword.verifyResetPage');
});

Route::get('/resetAdd', function () {
    return view('resetPassword.addNewPasswordPage');
});

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');

Route::get('/admin', [ArticleController::class, 'adminIndex'])->name('admin');

Route::delete('/admin/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/addarticle', function () {
    return view('admin.crudArticlePage');
})->name('admin.addArticle');
