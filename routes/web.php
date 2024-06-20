<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\clientViewsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminViewsController;

Route::get('/404', function () {
    return view('404');
});
Route::get('/login', function () {
    return view('auth.login')->name('login');
});
Route::get('/register', function () {
    return view('auth.register')->name('register');
});
// Route::get('/dashboard', function () {
//     return view('admin.dashboard')->name('dash');
// });
// Route::get('/create', function () {
//     return view('admin.create')->name('create');
// });


Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
// Route::get('/details', [clientViewsController::class,'showArticleDescription'])->name('article.description');
Route::get('/booking', [clientViewsController::class,'showBooking'])->name('booking.show');
Route::get('/contactUs', [clientViewsController::class,'contactUs'])->name('contactUs.show');
Route::get('/about', [clientViewsController::class,'about'])->name('about.show');
Route::get('/carlist', [clientViewsController::class,'show'])->name('carlist.show');



/*
|--------------------------------------------------------------------------
| Authentification
|--------------------------------------------------------------------------
*/
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [AdminViewsController::class,'dashboard'])->name('dash.show');
Route::get('/create', [AdminViewsController::class,'create_form'])->name('create.form');
Route::post('/create', [CarController::class,'create'])->name('create');
Route::get('/details/{id}', [clientViewsController::class,'details'])->name('details');
Route::get('/adminCarlist', [CarController::class,'adminCarlistshow'])->name('car.list');
Route::delete('/adminCarlist/{car}', [CarController::class, 'delete'])->name('deleteAd');
Route::get('/dashboard', [UserController::class,'stat'])->name('dash.stat');       
Route::get('/car/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/car/{id}/update', [CarController::class, 'update'])->name('car.update');

