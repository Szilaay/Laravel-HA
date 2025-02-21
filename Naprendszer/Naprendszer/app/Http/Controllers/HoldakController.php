<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holdak;
use App\Models\Bolygok;

class HoldakController extends Controller
{
    public function getData()
    {
        $bolygok = Bolygok::has('holdak')->get();
        return view('holdak', ['bolygok' => $bolygok]);
    }

    public function getHoldakByBolygokId($bolygok_id)
    {
        $bolygok = Bolygok::has('holdak')->get();
        $bolygok_data = Bolygok::with('holdak')->find($bolygok_id);
        return view('holdak', ['bolygok' => $bolygok, 'bolygok_data' => $bolygok_data]);
    }
    
    public function edit($holdak_id)
    {
        $hold = Holdak::find($holdak_id);
        return view('edit', ['hold' => $hold]);
    }

    public function confirmEdit(Request $req){
        $req -> validate([
            'hold_nev' => 'required',
            'hold_leiras' => 'required',
        ], [
            'hold_nev.required' => 'A hold neve kötelező',
            'hold_leiras.required' => 'A felfedezése kötelező',
        ]);

        $hold = Holdak::find($req -> holdak_id);
        $hold->nev = $req->hold_nev;

        $hold->felfedezes = $req->hold_leiras;

        $hold->save();

        return redirect('/holdak');
    }
}
