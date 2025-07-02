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

Route::get('/wishlist/add', function () {
    return view('wishlist.AddWishlistPage');
})->name('wishlist.add');

Route::get('/wishlist/update', function () {
    return view('wishlist.UpdateWishlistPage');
})->name('wishlist.update');

Route::get('/wishlist/{id}/redirect', [WishlistController::class, 'redirect'])->name('wishlist.redirect');

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

Route::get('/admin', function () {
    return view('admin.dashboardAdminPage');
})->name('admin');

Route::get('/addarticle', function () {
    return view('admin.crudArticlePage');
})->name('admin.addArticle');
