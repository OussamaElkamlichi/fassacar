<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Set the locale in the session
        session(['locale' => $locale]);

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function yourMethod(Request $request)
    {
        // Get the 'locale' parameter from the request, default to 'es' if not provided
        $locale = $request->input('locale', 'es');

        // Set the application's locale based on the 'locale' parameter
        app()->setLocale($locale);

        // Your controller logic here...
    }

}

