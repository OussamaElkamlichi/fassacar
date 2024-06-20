<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function index($provider)
    {
        try {
            $user = Auth::user();

            // Utilisez userFromToken pour récupérer les informations utilisateur à partir du jeton
            $provider_user = Socialite::driver($provider)->userFromToken($user->provider_token);

            dd($provider_user);

        } catch (\Exception $e) {
            // Gérer les exceptions et vérifier si le jeton est expiré ou invalide
            if ($e->getCode() == 401) {
                dd($e->getMessage());   
                // Jeton invalide ou expiré, redirigez l'utilisateur pour réauthentification
            }

            // Gérer les autres exceptions
            dd($e->getMessage());
        }
    }
}
