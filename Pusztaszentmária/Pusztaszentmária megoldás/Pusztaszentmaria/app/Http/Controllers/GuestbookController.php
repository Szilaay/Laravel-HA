<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function getGuestbook()
    {
        $guestbook = Guestbook::orderBy('date', 'desc')->get();

        return view('guestbook', ['guestbook' => $guestbook]);
    }

    public function addGuestbook(){
        
    }
}
