<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orszagok;
use App\Models\Kontinens;

class OrszagokController extends Controller
{
    public function getDataById($id)
    {
        $data = Kontinens::select('kontinens.nev', 'kontinens.kontinens_id')
        ->join('orszag', 'kontinens.kontinens_id', 'orszag.kontinens_id')
        ->distinct()
        ->orderBy('kontinens.nev', 'asc')
        ->get();

        $data_find = Kontinens::Find($id);
        $country = Orszagok::where('kontinens_id', $id)->orderBy('nev', 'asc')->get();

        $orszag = Orszagok::find($id);
        return view('orszagok', [
            'data' => $data,
            'orszag' => $orszag,
            'data_find' => $data_find,
            'country' => $country,
        ]);
    }
}
