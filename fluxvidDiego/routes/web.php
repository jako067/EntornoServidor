<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CookFAQController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RickmortyController;
use App\Http\Controllers\StudioController;
use App\Models\Studio;

Route::resource('actors', ActorController::class);
;


Route::get('faq',  [CookFAQController::class,'faq'])
->name("FAQ");
Route::get('cookies', [CookFAQController::class,'cookies'])
->name("cookies");

Route::get('/', IndexController::class)
->name("index");

Route::resource('movies',MovieController::class);

Route::resource('studios',StudioController::class);
//Route::get('animes/addslug',[AnimeController::class,'addSlug']); Esto es solo para crear el campo Slug de la tabla
Route::resource('animes', AnimeController::class);

Route::resource('characters',CharacterController::class);

Route::get('rickmorty', [RickmortyController::class,'rickmorty'])
->name("rickmorty");

Route::post('rickmorty/search', [RickmortyController::class,'search'])
->name("rickmorty.search");

Route::get('rickmorty/{id}', [RickmortyController::class,'getCharacterById'])
->name("rickmorty.character");
