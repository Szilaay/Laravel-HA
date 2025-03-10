<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EtelController;

Route::get('/', [EtelController::class, 'getIndex']);

Route::get('/etel/{id}', [EtelController::class, 'getEtel']);

Route::view('/kereses', 'kereses');
Route::post('/kereses', [EtelController::class, 'Kereses']);