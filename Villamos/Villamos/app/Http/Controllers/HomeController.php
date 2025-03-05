<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        //make a database query to get all the routes from the database and pass them to the view file.

        $routes = Home::all();
        return view('welcome', ['routes' => $routes]);
    }
}
