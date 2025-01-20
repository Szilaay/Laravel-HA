<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

#Főoldal
Route::view('/', 'welcome');

#Reg
Route::get('/reg', [UserController::class, 'Reg']);
Route::post('/reg', [UserController::class, 'RegData']);

#Login
Route::get('/login', [UserController::class, 'Login']);
Route::post('/login', [UserController::class, 'LoginData']);

#logout
Route::get('/logout', [UserController::class, 'Logout']);

#mypage
Route::get('/mypage', [UserController::class, 'Mypage']);

#newpass
Route::get('/newpass', [UserController::class, 'Newpass']);
Route::post('/newpass', [UserController::class, 'NewpassData']);

#delete
Route::get('/del', [UserController::class, 'Delete']);
Route::post('/del', [UserController::class, 'DeleteData']);