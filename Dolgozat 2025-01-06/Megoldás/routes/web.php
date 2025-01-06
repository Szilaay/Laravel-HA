<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzaloncukorController;

Route::get('/', [SzaloncukorController::class, 'Szaloncukor']);
Route::post('/', [SzaloncukorController::class, 'SzaloncukorData']);

