<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kontinens;
use App\Models\Orszagok;

class KontinensekController extends Controller
{
    public function getDataById($kontinens_id){
        $data_find = Kontinens::Find($kontinens_id);
        $data = Kontinens::orderBy('nev', 'asc')->get();
        $country_count = Orszagok::where('kontinens_id', $kontinens_id)->count();
        return view('kontinensek', [
            'data' => $data,
            'data_find' => $data_find,
            'country_count' => $country_count
        ]);
    }
}
