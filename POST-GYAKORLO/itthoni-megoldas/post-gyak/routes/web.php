<?php

use App\Http\Controllers\AutokController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanulokController;
use App\Http\Controllers\KlippekController;
use App\Http\Controllers\SzineszekController;

#Tanulók hozzáadása
Route::get('/', [TanulokController::class, 'Tanulok']);
Route::post('/', [TanulokController::class, 'TanulokData']);

#Klippek
Route::get('/klippek', [KlippekController::class, 'Klippek']);
Route::post('/klippek', [KlippekController::class, 'KlippekData']);

#Autok
Route::get('/autok', [AutokController::class, 'Autok']);
Route::post('/autok', [AutokController::class, 'AutokData']);

#Szineszek
Route::get('/szinesz', [SzineszekController::class, 'Szinesz']);
Route::post('/szinesz', [SzineszekController::class, 'SzineszData']);