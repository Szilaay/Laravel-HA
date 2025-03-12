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

    public function getEtel($id){
        $etel = Etelek::find($id);
        $hozzavalok = Hozzavalok::select('hozzavalok.mennyiseg', 'alapanyagok.nev', 'alapanyagok.mennyegyseg')
                    ->join('alapanyagok', 'alapanyagok.anyagid', '=', 'hozzavalok.anyagid') 
                    ->where('hozzavalok.etelid', $id)
                    ->get();

        return view('etel', ['etel' => $etel, 'hozzavalok' => $hozzavalok]);

    }
}
