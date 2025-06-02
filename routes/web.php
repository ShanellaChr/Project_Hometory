<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/calendar', function () {
    return view('calendar.calendarPage');
});

Route::get('/statistic', function () {
    return view('statistic.statisticPage');
});

Route::get('/wishlist', function () {
    return view('wishlist.wishlistPage');
});

Route::get('/article', function () {
    return view('article.articlePage');
});

Route::get('/profile', function () {
    return view('profileUser.profilePage');
});

Route::get('/reset', function () {
    return view('resetPasswordPage');
});