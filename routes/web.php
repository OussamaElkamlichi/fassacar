<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clientViewsController;

// Route::get('/', function () {
//     return view('landing');
// });


Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
