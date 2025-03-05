<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class VillamosController extends Controller
{
    public function Jaratok()
    {
        $result = Home::all();
        return view('jaratok', ['result' => $result]);
    }
}
