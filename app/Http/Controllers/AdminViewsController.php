<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class AdminViewsController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');
   }
  
   public function create_form(){
         
    $transmissionOptions = Car::getTransmissionOptions();
    $fuelOptions = Car::getFuelOptions();

    return view('admin.create', compact('transmissionOptions', 'fuelOptions'));


   }
}
