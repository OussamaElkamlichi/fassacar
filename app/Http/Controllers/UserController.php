<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class UserController extends Controller
{

    public function stat() 
    {
        
        $cars = car::count();
        $totalusers = User::count();
        return view('admin.dashboard', compact('cars','totalusers'));
    }


}
