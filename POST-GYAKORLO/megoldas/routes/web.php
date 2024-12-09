<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanulokController;
use App\Http\Controllers\KlippekController;


#Tanulók hozzáadása
Route::get('/', [TanulokController::class, 'Tanulok']);
Route::post('/', [TanulokController::class, 'TanulokData']);

#Klippek
Route::get('/klippek', [KlippekController::class, 'Klippek']);
Route::post('/klippek', [KlippekController::class, 'KlippekData']);