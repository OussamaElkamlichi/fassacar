<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientViewsController;

Route::get('/404', function () {
    return view('404');
});


Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
Route::get('/details', [clientViewsController::class,'showArticleDescription'])->name('article.description');
Route::get('/booking', [clientViewsController::class,'showBooking'])->name('booking.show');
