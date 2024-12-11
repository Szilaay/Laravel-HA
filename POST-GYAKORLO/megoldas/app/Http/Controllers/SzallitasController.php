<?php

namespace App\Http\Controllers;

use App\Models\szallitas;
use Illuminate\Http\Request;

class SzallitasController extends Controller
{
    public function Szallitas(){
        return view("szallitas", [
            "result" => szallitas::all()
        ]);
    }

    public function SzallitasData(Request $req){
        $req -> validate([
            'nev' => 'required',
            'irszam' => 'required|numeric|min:1000|max:9999',
            'varos' => 'required',
            'utca' => 'required',
            'hazszam'=> 'required',
            'telszam' => 'required|numeric|digits:7'
        ],[
            'nev.required' => 'Adjon meg egy nevet',
            'irszam.required' => 'Adjon meg egy irányítószámot',
            'irszam.numeric' => 'Az irányítószám csak szám lehet',
            'irszam.min' => 'A legkisebb irányítószám 1000',
            'irszam.max' => 'A legnagyobb irányítószám 9999',
            'varos.required' => 'Adjon meg egy várost',
            'utca.required' => 'Adjon meg egy utcát',
            'hazszam.required' => 'Adja meg a házszámot',
            'telszam.required' => 'Adjon meg egy telefonszámot',
            'telszam.numeric' => 'A telszám csak szám lehet',
            'telszam.digits' => 'Maximum 7 karakter lehet.'
        ]);

        $data = new szallitas;

        $data -> nev            = $req -> nev;
        $data -> irsz           = $req -> irszam;
        $data -> varos          = $req -> varos;
        $data -> utca           = $req -> utca;
        $data -> hazszam        = $req -> hazszam;
        $data -> emelet         = $req -> emelet;
        $data -> ajto           = $req -> ajto;
        $data -> tel            = "+".$req -> telszamkorzet.$req -> telszam;
        $data -> erintesmentes  = $req -> has('erintesmentes') ? 'i' : 'n';

        $data -> Save();

        return redirect('/szallitas');
    }
}
