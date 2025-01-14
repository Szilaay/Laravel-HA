<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelepulesController;

Route::get('/', [TelepulesController::class, 'Welcome']);
Route::get('/all', [TelepulesController::class, 'All']);
Route::get('/abc', [TelepulesController::class, 'Abc']);
Route::get('/abc/{p}', [TelepulesController::class, 'AbcPara']);
Route::get('/telepules/{id}', [TelepulesController::class, 'Adatlap']);
Route::get('/varos', [TelepulesController::class, 'Varosok']);
Route::get('/nagykozseg', [TelepulesController::class, 'Nagykozseg']);
Route::get('/kozseg', [TelepulesController::class, 'Kozseg']);