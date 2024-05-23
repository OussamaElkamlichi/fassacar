<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
  
   

   public function create(Request $request){

       $request->validate([
        'seats'=>['nullable', 'integer', 'min:1'],
        'transmission '=>['nullable', 'string', 'max:255'],
        'doors'=>['nullable', 'integer', 'min:1'],
        'mpg'=> ['nullable', 'numeric', 'min:0'],
        'description'=>['nullable', 'string'],
        'trips'=>['nullable', 'integer', 'min:0'],
        'make'=>['nullable', 'string', 'max:255'],
        'model'=>['required', 'string', 'max:255'],
        'year'=>['nullable', 'integer', 'digits:4'],
        'features'=>['nullable', 'array'],
        'type'=>['required', 'string', 'max:255'],
        'color'=>['required', 'string', 'max:255'],
        'icense_plate'=>['nullable', 'string', 'max:255'],
        'available'=>['nullable', 'boolean'],

       ]);
        
       $user = auth()->user();
       
        Car::create([
            'seats' => $request->seats,
            'transmission'=> $request->transmission,
            'doors'=> $request->doors,
            'mpg'=> $request->mpg,
            'description'=> $request->mpg,
            'trips'=> $request->trips,
            'make'=> $request->make,
            'model'=> $request->model,
            'year'=> $request->year,
            'features'=> $request->features,
            'type'=> $request->type,
            'color'=> $request->color,
            'license_plate'=> $request->license_plate,
            'available'=> $request->available,
        ]);

        return redirect()->route('dash.show');
   }



   public function delete(Car $car){
       $car->delete();

   }

   public function edit($id){
      $car = car::findOrFail($id);
       return view('editform');

   }

  public function update(Request $request, $id){

    $request->validate([
        'seats'=>['nullable', 'integer', 'min:1'],
        'transmission '=>['nullable', 'string', 'max:255'],
        'doors'=>['nullable', 'integer', 'min:1'],
        'mpg'=> ['nullable', 'numeric', 'min:0'],
        'description'=>['nullable', 'string'],
        'trips'=>['nullable', 'integer', 'min:0'],
        'make'=>['nullable', 'string', 'max:255'],
        'model'=>['required', 'string', 'max:255'],
        'year'=>['nullable', 'integer', 'digits:4'],
        'features'=>['nullable', 'array'],
        'type'=>['required', 'string', 'max:255'],
        'color'=>['required', 'string', 'max:255'],
        'icense_plate'=>['nullable', 'string', 'max:255'],
        'available'=>['nullable', 'boolean'],
    ]);

    $user = auth()->user();

    $car = car::findOrFail($id);


    $request->update([

        'seats' => $request->seats,
        'transmission'=> $request->transmission,
        'doors'=> $request->doors,
        'mpg'=> $request->mpg,
        'description'=> $request->mpg,
        'trips'=> $request->trips,
        'make'=> $request->make,
        'model'=> $request->model,
        'year'=> $request->year,
        'features'=> $request->features,
        'type'=> $request->type,
        'color'=> $request->color,
        'license_plate'=> $request->license_plate,
        'available'=> $request->available,



    ]);

    redirect()->route('dashboard');


  }


}
