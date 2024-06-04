<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str; // Assurez-vous que cette ligne est incluse
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        // Utiliser Str::random() pour générer une chaîne aléatoire
        session(['oauth_state' => Str::random(40)]);

        return Socialite::driver($provider)->stateless(false)->redirect();
    }

    public function callback($provider)
    {
        try {
            $provider_user = Socialite::driver($provider)->stateless(false)->user();

            $user = User::where([
                'provider' => $provider,
                'provider_id' => $provider_user->id
            ])->first();

            if (!$user) {
                $user = User::create([
                    'full_name' => $provider_user->getName(),
                    'email' => $provider_user->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $provider_user->getId(),
                    'password' => Hash::make(Str::random(16)), 
                ]);
            }

            // Connecter l'utilisateur
            Auth::login($user, true);

            return redirect()->route('home.show');

        } catch (Throwable $e) {
            // dd($e->getMessage());
            return redirect('/login');
        }
    }
}
