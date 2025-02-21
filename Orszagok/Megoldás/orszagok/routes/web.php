<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KontinensekController;
use App\Http\Controllers\OrszagokController;

Route::view('/', 'welcome');

//Kontinensek
Route::get('/kontinensek/{id}', [KontinensekController::class, 'getDataById']);

//Orszagok
Route::get('/orszagok/{id}', [OrszagokController::class, 'getDataById']);
