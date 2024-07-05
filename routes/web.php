<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientViewsController;

Route::get('/404', function () {
    return view('404');
});


Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
Route::get('/details', [clientViewsController::class,'showArticleDescription'])->name('article.description');
Route::get('/accountdashboard', [clientViewsController::class, 'showAccountDashboard'])->name('account.dashboard');
Route::get('/accountBooking', [clientViewsController::class, 'showAccountBooking'])->name('account.booking');
Route::get('/accountprofile', [clientViewsController::class, 'showAccountProfile'])->name('account.profile');
Route::get('/accountfavourite', [clientViewsController::class, 'showAccountFavourite'])->name('account.favourite');
Route::get('/map', [clientViewsController::class, 'showMap'])->name('account.map');

