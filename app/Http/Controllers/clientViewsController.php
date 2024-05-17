<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientViewsController extends Controller
{
    public function showHome()
    {
        return view('Client_Pages.HomePage');
    }

    public function showArticleDescription()
    {
        return view('Client_Pages.descrptionPage');
    }

    public function showBooking()
    {
        return view('Client_Pages.booking');
    }
}
