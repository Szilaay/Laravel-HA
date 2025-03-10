<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etelek;
use App\Models\Hozzavalok;
use App\Models\Alapanyagok;

class EtelController extends Controller
{
    public function getIndex(){
        $etelek = Etelek::orderBy('nev')->get();
        

        return view('welcome', ['etelek' => $etelek]);
    }
}
