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
        'image' => ['required', 'file'], 
    ]);

    // $user = auth()->user();

    $imageName = null;

    if ($request->hasFile('image')) {
        $imageFile = $request->file('image');

        $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('images'), $imageName);
    }


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
        'image' => $imageName, 
    ]);


        return redirect()->route('dash.stat');

}catch(\Exception $e) {
    dd($e->getMessage());


}
   }



   public function delete(Car $car){
     // $me = auth::user();
        // if($me->user_type == 'admin')
        // {

        // }
       $car->delete();
       return redirect()->route('car.list'); 

   }

   public function edit($id){
    $transmissionOptions = Car::getTransmissionOptions();
    $fuelOptions = Car::getFuelOptions();

      $car = car::findOrFail($id);
       return view('admin.editform' , compact('car','transmissionOptions','fuelOptions'));

   }

  public function update(Request $request, $id){



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

    $car = car::findOrFail($id);

//   dd($request);
    $car->update([

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
  
  return  redirect()->route('car.list');


  }


  public function adminCarlistshow(){

       $cars = car::all();
       return view('admin.adminCarslist', compact('cars'));

  }

//  public function stat(){

//     $cars = Car::count();
//     return view('admin.dashboard', compact('cars'));
//  }


}
