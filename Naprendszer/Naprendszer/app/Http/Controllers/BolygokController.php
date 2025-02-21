<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolygok;

class BolygokController extends Controller
{
    public function getData()
    {
        $bolygok = Bolygok::all();
        return view('bolygok', ['bolygok' => $bolygok]);
    }

    public function getDataById($bolygok_id)
    {
        $bolygok = Bolygok::all();
        $bolygok_data = Bolygok::find($bolygok_id);
        return view('bolygok', ['bolygok' => $bolygok, 'bolygok_data' => $bolygok_data]);
    }
}
