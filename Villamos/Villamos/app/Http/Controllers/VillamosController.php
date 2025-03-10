<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\Utvonal;
use App\Models\Megallo;

class VillamosController extends Controller
{
    public function Jaratok()
    {
        $result = Home::all();
        return view('jaratok', ['result' => $result]);
    }

    public function JaratokKeres($id)
    {
        $jarat = Home::find($id);

        $megallok = Megallo::select('utvonal.utirany', 'megallo.megallo_id', 'megallo.nev')
            ->join('utvonal', 'utvonal.megallo_id', '=', 'megallo.megallo_id')
            ->where('utvonal.jarat_id', $id)
            ->get();

        return view('jarat', [
            'jarat' => $jarat,
            'megallok' => $megallok,
            'sv1' => 1,
            'sv2' => 1,
        ]);
    }

    public function MegalloKereses($id)
    {
        $megallo = Megallo::where('megallo_id', $id)->first();

        $jaratok = Utvonal::select('jaratok.jaratok_id', 'jaratok.jaratszam', 'jaratok.hatterszin', 'jaratok.betuszin')
            ->distinct()
            ->join('jaratok', 'jaratok.jaratok_id', '=', 'utvonal.jarat_id')
            ->where('utvonal.megallo_id', $id)
            ->get();

        return view('megallo', [
            'nev' => $megallo,
            'jaratok' => $jaratok,
        ]);
    }

    public function Kereses(Request $req){
        $req -> validate([
            'search' => 'required|min:4',
        ], [
            'search.required' => 'A keresőmező nem lehet üres!',
            'search.min' => 'Legalább 4 karaktert adjon meg!',
        ]);

        $search = $req->input('search');

        $result = Megallo::where('nev', 'LIKE', "%$search%")->get();
        return view('kereses', ['result' => $result]);
    }
}
