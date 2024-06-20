<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cities;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
            'picture' => 'required',
            'username' => ['required', 'string', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Le nom complet est obligatoire.',
            'name.string' => 'Le nom doit être une chaîne de caractères.',
            'name.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'picture.required' => "La photo d'utilisateur est obligatoire.",
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


        $picture = $request->file('picture');
        $pictureName = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
        $pictureExtension = $picture->getClientOriginalExtension();
        $pictureFullName = $pictureName . '_' . time() . '.' . $pictureExtension;
        
        // Enregistrez le fichier dans le dossier public/pictures
        $picture->storeAs('profilPics', $pictureFullName, 'public');

        
        $user = User::create([
            'full_name' => $request->input('name'),
            'address' => $request->input('adress'),
            'picture' => $pictureFullName,
            'phone_number' => $request->input('phone'),
            'city' => $request->input('city'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), 
        ]);
    
        // Log the user in automatically
        Auth::login($user);
    
        return redirect()->route('home.show')->with('success', 'Enregistrement réussi et connexion automatique.');
    }
    

    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
    
            return redirect()->route('home.show');
        }   
        
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ]);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
