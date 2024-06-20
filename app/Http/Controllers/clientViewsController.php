<?php

namespace App\Http\Controllers;
use App\Models\Car;
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

    public function contactUs()
    {
        return view('Client_Pages.contactUs');
    }

    public function about()
    {
        return view('Client_Pages.about');
    }

    public function carlist()
    {
        return view('Client_Pages.carlist');
    } 

    public function show(){
        $cars = Car::all();
         return view('Client_Pages.carlist',compact('cars'));
    
       }
    public function details($id){
        
        $car = Car::findOrFail($id);
        // dd($car);
        return view('Client_Pages.descrptionPage',compact('car'));
    }
}
