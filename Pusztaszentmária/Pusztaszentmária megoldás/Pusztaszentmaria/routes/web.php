<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\GuestbookController;

use App\Models\Guestbook;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::get('/news', [NewsController::class, 'getNews']);

Route::get('/guestbook', [GuestbookController::class, 'getGuestbook']);



