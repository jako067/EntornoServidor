<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;

Route::resource('/space', SpaceController::class);

Route::get('/customer/book', [CustomerController::class,'book'])  //Las rutas más específicas van antes
->name('customer.book');
Route::post('/customer/book', [CustomerController::class,'book'])  //Esta no está completada
->name('customer.book');

Route::resource('/customer', CustomerController::class);


