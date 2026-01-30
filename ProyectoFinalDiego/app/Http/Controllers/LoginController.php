<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signupForm(): View
    {
    return view('auth.signup');
    }

    public function signup(SignupRequest $request): RedirectResponse
    {
    $user = new User();
    $user->username = $request->get('username');
    $user->name =$request->get('name');
    $user->email=$request->get('email');
    $user->password = Hash::make($request->get('password'));

    $user->rol=$request->get('rol');
    $user->date=$request->get('date');
    $user->photo=$request->get('photo');

    $user->save();

    Auth::login($user);
    return redirect()->route('users.account');

    }


    public function loginForm()
    {
        if(Auth::viaRemember()){
            return redirect()->route('users.account',['msg'=>'Bienvenido de nuevo']);

        }
        elseif(Auth::check()){
            return redirect()->route('users.account');
        }
        else{
            return view('auth.login');
        }

    }

    public function login(Request $request)
    {
        $credentials =$request->only('username', 'password');

        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('users.account');

        }else {
            $error ="Error al acceder a la aplicacion";
            return view('auth.login', compact('error'));
        }
    }
    public function logout(Request $request):RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }

}
