<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Validation\Rules\Password;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Reg(Request $req){
        $req -> validate([
            'name' => 'required|unique:user,name',
            'email' => 'required|email|unique:user,email',

            'password' => ['required', 'confirmed', Password::min(8) -> letters() -> numbers() -> mixedCase()],
            'password_confirmation' => 'required'
        ],[
            'name.required' => 'A név megadása kötelező!',
            'name.unique' => 'A név foglalt!',

            'email.required' => 'Az email megadása kötelező!',
            'email.email' => 'Az email formátuma nem megfelelő!',
            'email.unique' => 'Az email foglalt!',

            'password.required' => 'A jelszó megadása kötelező!',
            'password.confirmed' => 'A jelszavak nem egyeznek!',
            'password.min' => 'A jelszó minimum 8 karakter!',
            'password.letters' => 'A jelszó tartalmazzon betűket!',
            'password.numbers' => 'A jelszó tartalmazzon számokat!',
            'password.mixed' => 'A jelszó tartalmazzon nagy és kisbetűket!',

            'password_confirmation.required' => 'A jelszó megerősítése kötelező!'
        ]);

        $data = new User;

        $data -> name = $req -> name;
        $data -> email = $req -> email;
        $data -> password = Hash::make($req -> password);

        $data -> active = '1';

        $data -> save();

        return redirect('/reg') -> withErrors([
            'sv' => 'Sikeres regisztráció!'
        ]);
    }

    public function Login(Request $req){
        $req->validate([
            'name'      => 'required',
            'password'  => 'required'
        ],[
            'name.required'     => 'Nem lehet üres!',
            'password.required' => 'Nem lehet üres!'
        ]);

        if(Auth::attempt(['name' => $req->name, 'password' => $req->password])){
            # Ha belépett
            return view('welcome',[
                'success' => 'Sikeres belépés!' .$req->name
            ]);
        } else {
            # Ha nem tudott belépni
            return redirect('/login');/*->withErrors(['msg', 'Nem sikerült']);*/
        }
    }
}
