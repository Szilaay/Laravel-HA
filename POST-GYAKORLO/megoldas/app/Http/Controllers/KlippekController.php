<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\klippek;

class KlippekController extends Controller
{
    public function Klippek(){
        return view("klippek", [
            "result" => Klippek::all()
        ]);
    }

    public function KlippekData(){
        
    }
}
