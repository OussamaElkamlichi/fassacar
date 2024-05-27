<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Validation\Rule; 

class CarController extends Controller
{
  
  

   public function create(Request $request){
    
    $transmissionOptions = Car::getTransmissionOptions();
    $fuelOptions = Car::getFuelOptions();
  
    // dd($request);
try{
    $request->validate([
        'seats' => ['nullable', 'integer', 'min:1'],
        'transmission' => ['nullable', 'string', 'in:automatic,manual'],
        'doors' => ['nullable', 'integer', 'min:1'],
        'fuel' => ['nullable', 'string', 'in:petrol,gasual'],
        'description' => ['nullable', 'string'],
        'model' => ['required', 'string', 'max:255'],
        'body_type' => ['nullable', 'string', 'max:255'],
        'year' => ['nullable', 'integer', 'min:1886'], // Cars were invented around 1886
        'type' => ['required', 'string', 'max:255'],
        'color' => ['required', 'string', 'max:255'],
        'luggage' => ['nullable', 'integer', 'min:0'],
        'available' => ['nullable', 'boolean'],
        'price' => ['nullable', 'numeric', 'min:0'],
    ]);
    
    // $user = auth()->user();



    Car::create([
        'seats' => $request->seats,
        'transmission' => $request->transmission,
        'doors' => $request->doors,
        'fuel' => $request->fuel,
        'description' => $request->description,
        'model' => $request->model,
        'body_type' => $request->body_type,
        'year' => $request->year,
        'type' => $request->type,
        'color' => $request->color,
        'luggage' => $request->luggage,
        'available' => $request->available,
        'price' => $request->price,
    ]);
    

        return redirect()->route('dash.show');

}catch(\Exception $e) {
    dd($e->getMessage());


}
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
        'description'=>['nullable', 'string'],
        'model'=>['required', 'string', 'max:255'],
        'year'=>['nullable', 'integer', 'digits:4'],
        'type'=>['required', 'string', 'max:255'],
        'color'=>['required', 'string', 'max:255'],
        'available'=>['nullable', 'boolean'],
        'price' => ['nullable', 'integer', 'min:0'],

    ]);

    $user = auth()->user();

    $car = car::findOrFail($id);


    $request->update([

        'seats' => $request->seats,
        'transmission'=> $request->transmission,
        'doors'=> $request->doors,
        'description'=> $request->mpg,
        'model'=> $request->model,
        'year'=> $request->year,
        'type'=> $request->type,
        'color'=> $request->color,
        'available'=> $request->available,
        'price'=> $request->price,


    ]);

    redirect()->route('dashboard');


  }


}
