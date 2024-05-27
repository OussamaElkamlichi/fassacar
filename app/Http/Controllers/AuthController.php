<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cities;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function registerShow()
    {
        $cities = Cities::all();
        // dd($cities);

        return view('Auth.register',['cities' => $cities]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'adress' => 'required',
            'phone' => 'required|numeric|digits_between:10,15',
            'city' => 'required|integer',
            'username' => ['required', 'string', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Le nom complet est obligatoire.',
            'name.string' => 'Le nom doit être une chaîne de caractères.',
            'name.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'username.required' => "Le nom d'utilisateur est obligatoire.",
            'username.unique' => "Le nom d'utilisateur est déjà pris.",
            'email.required' => "L'email est obligatoire.",
            'adress.required' => "L'adresse est obligatoire.",
            'city.required' => "La ville est obligatoire.",
            'email.email' => "L'email doit être une adresse email valide.",
            'email.unique' => "L'email est déjà pris.",
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit comporter au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);

        
        $user = User::create([
            'full_name' => $request->input('name'),
            'address' => $request->input('adress'),
            'phone_number' => $request->input('phone'),
            'city' => $request->input('city'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);


        return redirect()->back()->with('success', "ajoute avec succes");

    }

}
