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

    public function KlippekData(Request $req){
        $req -> validate([
            'eloado' => 'required',
            'cim' => 'required',
            'youtube' => 'required|url'
        ], [
            'eloado.required' => 'Adja meg az előadót.',
            'cim.required' => 'Adja meg a címet.',
            'youtube.required' => 'Adja meg az URL-t.',
            'youtube.url' => 'Valós URL-t adjon meg.'
        ]);

        $data = new klippek;

        $data -> eloado     = $req -> eloado;
        $data -> cim        = $req -> cim;
        $data -> hossz      = sprintf('00:%02d:%02d', $req -> perc, $req -> mp);
        $data -> youtube    = $req -> youtube;

        $data -> Save();

        return redirect('/klippek');
    }
}
