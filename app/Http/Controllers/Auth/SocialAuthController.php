<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\NormalUser;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    public function handleProviderCallback($provider)
    {
        $social_user = Socialite::driver($provider)->user(); 
        if ($user = User::where('email', $social_user->email)->first()) { 
            return $this->authAndRedirect($user);
        } else {  
            if ($provider == "facebook") {
                $user = User::create([
                    'name' => $social_user->name,
                    'email' => $social_user->email,
                ]);

                NormalUser::create([
                    'user_id' => $user->id
                ]);
            } else {
                $user = User::create([
                    'name' => $social_user->user['given_name'],
                    'email' => $social_user->email,
                ]);

                NormalUser::create([
                    'user_id' => $user->id,
                    'last_name' => $social_user->user['family_name']
                ]);   
            }

            return $this->authAndRedirect($user);
        }
    }

    public function authAndRedirect($user)
    {
        Auth::login($user);

        return redirect()->to('/');
    }
}