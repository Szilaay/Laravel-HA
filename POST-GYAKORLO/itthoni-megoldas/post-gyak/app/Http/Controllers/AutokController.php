<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autok;

class AutokController extends Controller
{
    public function Autok(){
        return view("autok", [
            "result" => Autok::all()
        ]);
    }

    public function AutokData(Request $req){
        $req -> validate([
            'rendszam' => 'required|min:6|max:9',
            'marka' => 'required',
            'tipus' => 'required',
            'szin' => 'required'
        ],[
            'rendszam.required' => "Adja meg a rendszámot",
            'rendszam.min' => "Minimum 6 karakterből kell állnia.",
            "rendszam.max" => "Maximum 9 karakterből állhat.",
            "marka.required" => "Adja meg a márkát",
            "tipus.required" => "Adja meg a tipust.",
            "szin.required" => "Adjon meg egy színt."
        ]);

        $data = new autok;

        $data -> rendszam   = $req -> rendszam;
        $data -> marka      = $req -> marka;
        $data -> tipus      = $req -> evjarat;
        $data -> evjarat    = $req -> evjarat;
        $data -> szin       = $req -> szin;
        
        $data -> Save();

        return redirect('/autok');
    }
}
