<?php
/**PHP DOC
 *@author: Diego Rivera
 *@version: 1.0
 *Archivo de rutas para nuestra aplicación web
 *
 */

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\subjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');

Route::get('privacy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('cookies', [LegalController::class, 'cookies'])->name('cookies');
Route::resource('subjects', subjectController::class)->except('edit', 'update');
