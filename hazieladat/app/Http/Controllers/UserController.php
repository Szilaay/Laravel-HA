<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function RegData(Request $req){
        $req->validate([
            'name' => 'required|unique:user,name',
            'password' => ['required', 'confirmed', Password::min(8) -> numbers() -> letters() -> mixedCase()],
            'password_confirmation' => 'required',
            'bio' => 'required|min:10',
        ],[
            'name.required' => 'A név megadása kötelező!',
            'name.unique' => 'Ez a név már foglalt!',

            'password.required' => 'A jelszó megadása kötelező!',
            'password.confirmed' => 'A jelszavak nem egyeznek!',
            'password.min' => 'A jelszó legalább 8 karakter hosszú legyen!',
            'password.numbers' => 'A jelszó tartalmazzon legalább egy számot!',
            'password.letters' => 'A jelszó tartalmazzon legalább egy betűt!',
            'password.mixed' => 'A jelszó tartalmazzon legalább egy nagybetűt és egy kisbetűt!',

            'password_confirmation.required' => 'A jelszó megerősítése kötelező!',

            'bio.required' => 'A bemutatkozás megadása kötelező!',
            'bio.min' => 'A bemutatkozás legalább 10 karakter hosszú legyen!',
        ]);

        $data = new User;

        $data->name = $req->name;
        $data->password = Hash::make($req->password);
        $data->bio = $req->bio;

        $data->save();

        return redirect('/')->with('success', 'Sikeres regisztráció!');
    }

    public function Login(Request $req){
        $req->validate([
            'name' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'A név megadása kötelező!',
            'password.required' => 'A jelszó megadása kötelező!',
        ]);

        if(Auth::attempt(['name' => $req->name, 'password' => $req->password])){
            return redirect('/');
        }else{
            return redirect('/login');
        }



    }
}
