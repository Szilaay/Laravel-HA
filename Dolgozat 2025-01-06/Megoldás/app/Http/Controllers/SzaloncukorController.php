<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\szaloncukor;

class SzaloncukorController extends Controller
{
    public function Szaloncukor(){
        return view('welcome', [
            'result' => szaloncukor::all()
        ]);
    }

    public function SzaloncukorData(Request $req){
        $req -> validate([
            'marka' => 'required',
            'iz' => 'required',
            'suly' => 'required|numeric|min:100',
            'ar' => 'required|numeric|min:100',
        ], [
            'marka.required' => 'A márka megadása kötelező!',
            'iz.required' => 'Az íz megadása kötelező!',
            'suly.required' => 'A súly megadása kötelező!',
            'suly.min' => 'Minimum súly 100g!',
            'ar.required' => 'Az ár megadása kötelező!',
            'ar.min' => 'Minimum ár 100Ft!',
        ]);

        $data = new szaloncukor;
        $data -> marka = $req -> marka;
        $data -> iz = $req -> iz;
        $data -> suly = $req -> suly;
        $data -> ar = $req -> ar;
        $data -> plusz18  = $req -> has('plusz18') ? '1' : '0';

        $data -> save();

        return redirect('/');
    }
}
