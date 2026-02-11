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
    $generatedName = $request->file('photo')->store('user/photos','public');

    $user->username = $request->input('username');
    $user->name =$request->input('name');
    $user->email=$request->input('email');
    $user->password = Hash::make($request->get('password'));

    $user->rol=$request->input('rol');
    $user->date=$request->input('date');
    $user->photo=$generatedName;

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
    public function destroy(){

        Auth::user()->delete();
        return redirect()->route('index');
    }

}
