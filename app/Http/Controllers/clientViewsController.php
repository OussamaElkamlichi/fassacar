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
    public function showAccountDashboard()
    {
        return view('Client_Pages.accountdashboard');
    }
    public function showAccountBooking()
    {
        return view('Client_Pages.accountBooking');
    }

    public function showAccountProfile()
    {
        return view('Client_Pages.accountProfile');
    }

    public function showAccountFavourite()
    {
        return view('Client_Pages.accountFavourite');
    }

    public function showMap()
    {
        return view('Client_Pages.map');
    }
}
