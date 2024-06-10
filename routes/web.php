    <?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\clientViewsController;
    use App\Http\Controllers\LanguageController;
    use App\Http\Controllers\LocaleController;
    use App\Http\Controllers\Auth\RegisterController;


    use Illuminate\Support\Facades\App;

    Route::get('/404', function () {
        return view('404');
    });
    Route::get('/login', function () {
        return view('auth.login');
    });
    // Route::get('/register', function () {
    //     return view('auth.register');
    // });
    Route::get('/register', function () {
        App::setLocale('es'); // Set the locale to Spanish ('es')

        // Your route logic...

        return view('auth.register'); // Render the register view
    });

    Route::get('/', [clientViewsController::class,'showHome'])->name('home.show');
    Route::get('/details', [clientViewsController::class,'showArticleDescription'])->name('article.description');
    Route::get('/booking', [clientViewsController::class,'showBooking'])->name('booking.show');
    Route::get('/contactUs', [clientViewsController::class,'contactUs'])->name('contactUs.show');
    Route::get('/about', [clientViewsController::class,'about'])->name('about.show');
    Route::get('/carlist', [clientViewsController::class,'carlist'])->name('carlist.show');
    Route::get('lang/{locale}', 'App\Http\Controllers\LanguageController@switch')->name('lang.switch');
    Route::get('/{locale}/register', [clientViewsController::class, 'showRegistrationForm'])->name('register');

    Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

    // Registration form route
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::get('/your-route', [LanguageController::class, 'yourMethod'])->name('your.route.name');

    Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
    Route::get('/map', [clientViewsController::class, 'showMap'])->name('account.map');
