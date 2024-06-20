<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AdminViewsController;
use App\Http\Controllers\clientViewsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocaleController;

Route::get('/404', function () {
    return view('404');
});



Route::get('/', [clientViewsController::class, 'showHome'])->name('home.show');
Route::get('/details', [clientViewsController::class, 'showArticleDescription'])->name('article.description');
Route::get('/booking', [clientViewsController::class, 'showBooking'])->name('booking.show');
Route::get('/contactUs', [clientViewsController::class, 'contactUs'])->name('contactUs.show');
Route::get('/about', [clientViewsController::class, 'about'])->name('about.show');
Route::get('/carlist', [clientViewsController::class, 'show'])->name('carlist.show');
Route::get('/myAccount', [clientViewsController::class, 'myAccount'])->name('myAccount.show');



/*
|--------------------------------------------------------------------------
| Authentification
|--------------------------------------------------------------------------
*/
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', [AuthController::class, 'registerShow'])->name('register.show');

Route::get('auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])->name('redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('callback');

Route::get('auth/{provider}/user', [SocialController::class, 'index']);




/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [AdminViewsController::class, 'dashboard'])->name('dash.show');
Route::get('/create', [AdminViewsController::class, 'create_form'])->name('create.form');
Route::post('/create', [CarController::class, 'create'])->name('create');

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('reservations/create/{car}', [ReservationController::class, 'create'])->name('reservations.create');
Route::get('/test-insert', [ReservationController::class, 'testInsert']);


Route::get('/', [clientViewsController::class, 'showHome'])->name('home.show');
Route::get('/details', [clientViewsController::class, 'showArticleDescription'])->name('article.description');
Route::get('/booking', [clientViewsController::class, 'showBooking'])->name('booking.show');
Route::get('/contactUs', [clientViewsController::class, 'contactUs'])->name('contactUs.show');
Route::get('/about', [clientViewsController::class, 'about'])->name('about.show');
Route::get('/carlist', [clientViewsController::class, 'carlist'])->name('carlist.show');
// Route::get('lang/{locale}', 'App\Http\Controllers\LanguageController@switch')->name('lang.switch');
// Route::get('/{locale}/register', [clientViewsController::class, 'showRegistrationForm'])->name('register');

Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// Registration form route
// Route::get('/your-route', [LanguageController::class, 'yourMethod'])->name('your.route.name');

Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
Route::get('/map', [clientViewsController::class, 'showMap'])->name('account.map');


// =======
//     use App\Http\Controllers\clientViewsController;
//     use App\Http\Controllers\LanguageController;
//     use App\Http\Controllers\LocaleController;
//     use App\Http\Controllers\Auth\RegisterController;


//     use Illuminate\Support\Facades\App;

//     Route::get('/404', function () {
//         return view('404');
//     });
//     Route::get('/login', function () {
//         return view('auth.login');
//     });
//     // Route::get('/register', function () {
//     //     return view('auth.register');
//     // });
//     Route::get('/register', function () {
//         App::setLocale('es'); // Set the locale to Spanish ('es')

//         // Your route logic...

//         return view('auth.register'); // Render the register view
//     });

//     Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
//     Route::get('/details', [clientViewsController::class,'showArticleDescription'])->name('article.description');
//     Route::get('/booking', [clientViewsController::class,'showBooking'])->name('booking.show');
//     Route::get('/contactUs', [clientViewsController::class,'contactUs'])->name('contactUs.show');
//     Route::get('/about', [clientViewsController::class,'about'])->name('about.show');
//     Route::get('/carlist', [clientViewsController::class,'carlist'])->name('carlist.show');
//     Route::get('lang/{locale}', 'App\Http\Controllers\LanguageController@switch')->name('lang.switch');
//     Route::get('/{locale}/register', [clientViewsController::class, 'showRegistrationForm'])->name('register');

//     Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

//     // Registration form route
//     Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//     Route::get('/your-route', [LanguageController::class, 'yourMethod'])->name('your.route.name');

//     Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
//     Route::get('/map', [clientViewsController::class, 'showMap'])->name('account.map');
// >>>>>>> b1b9ac071621ebbaa57c02ede0871cc1d928ffc4
