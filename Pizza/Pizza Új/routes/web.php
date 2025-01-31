<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzakController;
use App\Http\Controllers\UserController;

Route::get('/', [PizzakController::class, 'Akcios']);
//Tipusútvonal adatlaphoz - ID elkapás //
Route::get('/adatlap/{id}', [PizzakController::class, 'Adatlap']);

Route::get('/all', [PizzakController::class, 'All']);
Route::get('/all/{p}', [PizzakController::class, 'AllOrder']);

Route::get('/rnd', [PizzakController::class, 'Rnd']);

Route::view('/add', 'add');                                     //Ez a megjelenítéshez kell
Route::post('/add', [PizzakController::class, 'AddData']);      //Gomb kezeléséhez kell

Route::get('/mod', [PizzakController::class, 'Mod']);

Route::get('/modositas/{id}', [PizzakController::class, 'Modositas']);
Route::post('/modositas/{id}', [PizzakController::class, 'ModositasData']); 

Route::get('/torles/{id}', [PizzakController::class, 'Torles']);

Route::get('/exit/{id}', [PizzakController::class, 'Exit']);

##

Route::view('/reg', 'reg');
Route::post('/reg', [UserController::class, 'Reg']);

Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'Login']);