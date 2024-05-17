<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientViewsController extends Controller
{
    public function showHome()
    {
        return view('Client_Pages.HomePage');
    }
}
