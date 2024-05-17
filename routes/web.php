<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Auth.login');
});


Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
