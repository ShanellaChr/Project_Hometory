<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\ResetPasswordController;

// HOMEPAGE
Route::get('/', function () {
    return view('homePage');
})->middleware('auth');

// LOGIN & SIGN UP
// Route::get('/login', function () {
//     return view('loginPage');
// });

// Route::get('/signup', function () {
//     return view('signUpPage');
// });

// Menampilkan form login dan signup
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginShow');

Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::middleware(['auth'])->group(function () {
    Route::get('/myInventory', [ItemController::class, 'index'])->name('item.index');
    Route::get('/admin', [ArticleController::class, 'adminIndex'])->name('admin');
});


// MY INVENTORY
Route::get('/myInventory', [ItemController::class, 'index'])->name('item.index');

Route::get('/myInventory/expiredItemPage', [ItemController::class, 'expiredItems'])->name('item.expired');

Route::delete('/myInventory/expiredItemPage/delete/{id}', [ItemController::class, 'deleteExpiration'])->name('item.expiredDelete');

Route::get('/myInventory/add', [ItemController::class, 'create'])->name('item.create'); // tambah item baru

Route::post('/myInventory/store', [ItemController::class, 'store'])->name('item.store'); // simpan item baru

Route::get('/myInventory/{slug}', [ItemController::class, 'show'])->name('item.detail');

Route::get('/myInventory/{slug}/edit', [ItemController::class, 'edit'])->name('item.edit'); // edit item

Route::put('/myInventory/{slug}/update', [ItemController::class, 'update'])->name('item.update'); // update item

Route::delete('/myInventory/{slug}/delete', [ItemController::class, 'destroy'])->name('item.delete'); // delete item

// CALENDAR
Route::get('/calendar', [CalendarController::class, 'show'])->name('calendar.show');
Route::get('/calendar/{month}/{year}/{selected_date}', [CalendarController::class, 'show'])->name('calendar.show.date');

// STATISTIC
Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic.page');

// WISHLIST
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

// Route::get('/cruditempage', function () {
//     return view('myInventory.crudItemPage');
// })->name('crudItemPage');

// ARTICLE
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.detail');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

// PROFILE
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login')->with('success', 'Logged out successfully.');
})->name('logout');

// Reset Password
Route::get('/reset', [ResetPasswordController::class, 'showRequestForm'])->name('password.request');
Route::post('/reset', [ResetPasswordController::class, 'sendResetCode'])->name('password.sendCode');

Route::get('/reset/verify', [ResetPasswordController::class, 'showVerifyForm'])->name('password.verify');
Route::post('/reset/verify', [ResetPasswordController::class, 'verifyResetCode'])->name('password.verifyCode');

Route::get('/reset/new-password', [ResetPasswordController::class, 'showNewPasswordForm'])->name('password.new');
Route::post('/reset/new-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');

// ADMIN
Route::delete('/admin/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/addarticle', function () {
    return view('admin.crudArticlePage');
})->name('admin.addArticle');
