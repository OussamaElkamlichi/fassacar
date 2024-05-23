<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\clientViewsController;

Route::get('/404', function () {
    return view('404');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
Route::get('/details', [clientViewsController::class,'showArticleDescription'])->name('article.description');
Route::get('/booking', [clientViewsController::class,'showBooking'])->name('booking.show');
Route::get('/contactUs', [clientViewsController::class,'contactUs'])->name('contactUs.show');
Route::get('/about', [clientViewsController::class,'about'])->name('about.show');
Route::get('/carlist', [clientViewsController::class,'carlist'])->name('carlist.show');




/*
|--------------------------------------------------------------------------
| Authentification
|--------------------------------------------------------------------------
*/
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

