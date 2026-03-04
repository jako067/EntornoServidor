<?php

use App\Http\Controllers\Api\GameApiController;
use App\Http\Controllers\Api\TeamApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('game',GameApiController::class);

Route::apiResource('team',TeamApiController::class);

