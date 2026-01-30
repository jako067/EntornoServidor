<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account(){

    return view ('users.account');

    }

    public function list(){

    $users= User::get();

    if(Auth::user()->rol!='admin'){
        return redirect()->route('index');
    }

    return view('users.list',compact('users'));

    }
}
