<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telepules;

class TelepulesController extends Controller
{
    public function Welcome(){
        return view('Welcome', [
            'varos' => telepules::where('jogallas','város')
                                ->orwhere('jogallas', 'LIKE', 'megyeszékhely%')
                                ->orwhere('jogallas', 'főváros')
                                ->orwhere('jogallas', 'megyei jogú város')
                                ->count('jogallas'),
            'nagykozseg' => telepules::where('jogallas', 'nagyközség')
                                    ->count('jogallas'),
            'kozseg' => telepules::where('jogallas', 'község')
                                    ->count('jogallas'),
        ]);
    }

    public function All(){
        return view('All', [
            'result' => telepules::select('id', 'helyseg', 'jogallas', 'megye', 'jaras')
                                ->paginate(100)
        ]);
    }

    public function Abc(){
        return view('Abc', [
            'abc' => telepules::selectRaw('substr(helyseg, 1, 1) as Betu')
                                ->distinct()
                                ->get(),
            'default' => 'A',
            'result' => telepules::select('id', 'helyseg', 'jogallas', 'megye', 'jaras')
                                ->where('helyseg', 'LIKE', 'A%')
                                ->paginate(100),
            'sv' => 1           
        ]);
    }

    public function AbcPara($p){
        return view('Abc', [
            'abc' => telepules::selectRaw('substr(helyseg, 1, 1) as Betu')
                                ->distinct()
                                ->get(),
            'default' => $p,
            'result' => telepules::select('id', 'helyseg', 'jogallas', 'megye', 'jaras')
                                ->where('helyseg', 'LIKE', $p.'%')
                                ->paginate(100),
            'sv' => 1  
        ]);
    }

    public function Adatlap($id){
        return view('Adatlap', [
            'result' => telepules::find($id),
            'prev' => telepules::select('id')
                                ->where('id', '<', $id)
                                ->orderBy('id', 'DESC')
                                ->first(),
            'next' => telepules::select('id')
                                ->where('id', '>', $id)
                                ->first(),
            'first' => telepules::select('id')
                                ->first(),
            'last' => telepules::select('id')
                                ->orderBy('id', 'DESC')
                                ->first()
        ]);
    }

    public function Varosok(){
        return view('Telepules', [
            'darab' => telepules::where('jogallas','város')
                                ->orwhere('jogallas', 'LIKE', 'megyeszékhely%')
                                ->orwhere('jogallas', 'főváros')
                                ->orwhere('jogallas', 'megyei jogú város')
                                ->count('jogallas'),
            'result' => telepules::where('jogallas','város')
                                ->orwhere('jogallas', 'LIKE', 'megyeszékhely%')
                                ->orwhere('jogallas', 'főváros')
                                ->orwhere('jogallas', 'megyei jogú város')
                                ->paginate(100),
            'sv' => 1,
            'title' => 'Városok'
        ]);
    }

    public function Nagykozseg(){
        return view('Telepules', [
            'darab' => telepules::where('jogallas','nagyközség')
                                ->count('jogallas'),
            'result' => telepules::where('jogallas','nagyközség')
                                ->paginate(100),
            'sv' => 1,
            'title' => 'Nagyközség'
        ]);
    }

    public function Kozseg(){
        return view('Telepules', [
            'darab' => telepules::where('jogallas','község')
                                ->count('jogallas'),
            'result' => telepules::where('jogallas','község')
                                ->paginate(100),
            'sv' => 1,
            'title' => 'Község'
        ]);
    }
}
