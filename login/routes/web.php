<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class )->
name('index');

Route::get('signup',[LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup',[LoginController::class, 'signup'])->name('signup');
Route::get('login',[LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login',[LoginController::class, 'login'])->name('login');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::get('account',[UserController::class, 'account'])->name('users.account')->middleware('auth');

Route::get('users/list',[UserController::class,'list'])->name('users.list')->middleware('auth');

