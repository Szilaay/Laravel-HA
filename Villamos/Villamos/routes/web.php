<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VillamosController;

Route::get('/', [HomeController::class, 'index']);

Route::get('jaratok', [VillamosController::class, 'Jaratok']);
Route::get('jarat/{id}', [VillamosController::class, 'JaratokKeres']);

Route::get('/megallo/{id}', [VillamosController::class, 'MegalloKereses']);

Route::view('/kereses', 'kereses');
Route::post('/kereses', [VillamosController::class, 'Kereses']);
