<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
Route::get('shop', ShopController::class)->name('shop');

Route::resource('players',  PlayerController::class);

Route::get('events/likedisllike/{event}',  [EventController::class,'likeDislike'])->name('events.likeDislike');

Route::resource('events',  EventController::class);
Route::resource('messages',  MessageController::class);


Route::get('events/delete',  [EventController::class,'delete'])->name('events.delete');

Route::get('legal/privacity',  [LegalController::class,'privacity'])->name('legal.privacity');
Route::get('legal/usage',  [LegalController::class,'usage'])->name('legal.usage');


Route::get('signup',[LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup',[LoginController::class, 'signup'])->name('signup');
Route::get('login',[LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login',[LoginController::class, 'login'])->name('login');

Route::get('logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('account',[UserController::class, 'account'])->name('users.account')->middleware('auth');

Route::get('users/list',[UserController::class,'list'])->name('users.list');

