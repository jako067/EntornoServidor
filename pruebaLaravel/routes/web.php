<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return 'proyecto laravel Diego <br> <a href="'.route('saludo',['name'=>'Rick']).'">Rick</a>' ;
});

Route::get('datetime', function(){
    return date('d/m/y h:i:s');

});

Route::redirect('date','datetime');

Route::get('/juegos/highercard', function(){
    return "Aqui se mostrará el higher card";

});
Route::get('/juegos/blackjack', function(){
    return "Aquí se mostrará el blackJack";

});
Route::get('donde-estamos', function(){
    return "Aquí se mostrará donde estamos";

});
Route::get('greet/{name}', function(string $name){
    return "Hola". $name;

})->name('saludo');