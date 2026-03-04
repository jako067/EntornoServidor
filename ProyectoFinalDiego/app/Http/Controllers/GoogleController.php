<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    function redirect()
    {
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account'])
            ->redirect();
        /*return Socialite::driver('google')->redirect();*/
    }

    function callback()
    {
        $user_google = Socialite::driver('google')->user();
        $user = User::where('email', $user_google->email)->first();

        if ($user) {
            $user->google_id = $user_google->id;
            $user->save();
        } else {
            $user = new User();
            $user->username = $user_google->name;
            $user->name = $user_google->name;
            $user->email = $user_google->email;
            $user->google_id = $user_google->id;
            $user->save();
        }

        Auth::login($user);
        return redirect()->route('users.account');
    }
}
