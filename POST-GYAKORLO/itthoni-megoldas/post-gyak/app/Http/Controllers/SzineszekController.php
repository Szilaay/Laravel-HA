<?php

namespace App\Http\Controllers;

use App\Models\szineszek;
use Illuminate\Http\Request;

class SzineszekController extends Controller
{
    public function Szinesz(){
        return view("szinesz", [
            "result" => szineszek::all()
        ]);
    }

    public function SzineszData(Request $req){
        $req -> validate([
            'nev' => 'required',
            'szuletes' => 'required|date|after:1900-01-01|before_or_equal:today',
            'nemzet' => 'required'
        ],[
            'nev.required' => 'Adja meg a nevet.',
            'szuletes.required' => 'Adjon meg egy születési évet.',
            'szuletes.after' => 'A születési év nem lehet korábbi mint 1900. 01. 01.',
            'szuletes.before_or_equal' => 'A születési év nem lehet későbbi, mint a mai nap.',
            'nemzet.required' => 'Adjon meg egy nemzetiséget.'
        ]);

        $data = new szineszek;

        $data -> nev        = $req -> nev;
        $data -> szuletes   = $req -> szuletes;
        $data -> nemzet     = $req -> nemzet;
        $data -> oscar_dij  = $req -> has('oscar_dij') ? 'i' : 'n';

        $data -> save();
        return redirect('/szinesz');
    }
}
