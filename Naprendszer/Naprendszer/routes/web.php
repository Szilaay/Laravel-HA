<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BolygokController;
use App\Http\Controllers\HoldakController;

Route::view('/', 'welcome');

Route::get('/bolygok', [BolygokController::class, 'getData']);
Route::get('/bolygok/{bolygok_id}', [BolygokController::class, 'getDataById']);

Route::get('/holdak', [HoldakController::class, 'getData']);
Route::get('/holdak/{bolygok_id}', [HoldakController::class, 'getHoldakByBolygokId']);

Route::get('/holdak/{holdak_id}/edit', [HoldakController::class, 'edit']);
Route::post('/holdak/{holdak_id}/edit', [HoldakController::class, 'confirmEdit']);