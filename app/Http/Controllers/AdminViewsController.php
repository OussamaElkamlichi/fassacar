<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewsController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');
   }
  
   public function create_form(){
         
         return view('admin.create_form');

   }
}
