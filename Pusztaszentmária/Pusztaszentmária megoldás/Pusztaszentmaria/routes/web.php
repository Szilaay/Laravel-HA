<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\GuestbookController;

use App\Http\Controllers\UserController;
use App\Models\Guestbook;
use Illuminate\Support\Facades\Route;

#Főoldal
Route::view('/', 'welcome');

#Újság
Route::get('/news', [NewsController::class, 'getNews']);

#Vendégkönyv
Route::get('/guestbook', [GuestbookController::class, 'getGuestbook']);
Route::post('/guestbook', [GuestbookController::class, 'addGuestbook']);

#Autentikáció
Route::get('/login', [UserController::class, 'getLogin']);
Route::post('/login', [UserController::class, 'Login']);

Route::get('/register', [UserController::class, 'getRegister']);
Route::post('/register', [UserController::class, 'Register']);

Route::get('/logout', [UserController::class, 'Logout']);

Route::get('/profil', [UserController::class, 'getProfile']);
Route::post('/profil', [UserController::class, 'newPass']);



