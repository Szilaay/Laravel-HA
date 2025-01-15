<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Főoldal
Route::view('/', 'welcome');

#Regisztráció
Route::view('/register', 'register');
Route::post('/register', [UserController::class, 'RegData']);

#Bejelentkezés
Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'Login']);