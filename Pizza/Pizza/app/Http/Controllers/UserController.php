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
        $req->validate([
            'name'                  =>  'required|unique:user,name',
            'email'                 =>  'required|email|unique:user,email',
            'password'              =>  ['required', 'confirmed', Password::min(8)->letters()->numbers()->mixedCase()],
            'password_confirmation' => 'required'
        ],[
            'name.required'                  => 'Kötelező megadni a nevet',
            'name.unique'                    => 'Ez a név már foglalt',
            'email.required'                 => 'Kötelező megadni az e-mailt',
            'email.unique'                   => 'Ez az email cím már foglalt',
            'email.email'                    => 'Valid e-mail formátumot adjon meg',
            'password.required'              => 'Kötelező jelszót megadni',
            'password.confirmed'             => 'A két jelszó nem egyezik meg',
            'password.*'                     => 'Nem elég erős a jelszava',
            'password_confirmation.required' => 'Kötelező jelszót megadni'
        ]);

        $data           = new User;
        $data->name     = $req->name;
        $data->email    = $req->email;
        $data->password = $req->password;
        $data->active   = '1';
        $data->Save();

        return redirect('/reg')->withErrors([
            'sv'    => 'Sikeresen regisztráltál a '.$req->name.' névvel'
        ]);
    }

    public function Login(Request $req){
        $req->validate([
            'credentials'   => 'required',
            'password'      => 'required'
        ],[
            'credentials.required'  => 'Kötelező kitölteni',
            'password.required'     => 'Kötelező kitölteni'
        ]);

        if(Auth::attempt(['name' => $req->credentials, 'password' => $req->password, 'active' => '1'])){
            return redirect('/')->withErrors([
                'sv'    => 'Sikeresen belépett!'
            ]);
        } else if(Auth::attempt(['email' => $req->credentials, 'password' => $req->password, 'active' => '1'])){
            return redirect('/')->withErrors([
                'sv'    => 'Sikeresen belépett!'
            ]);
        } else {
            return redirect('/login')->withErrors([
                'sv'    => 'Nem sikerült belépnie'
            ]);
        }
    }

    public function Profil(){
        return Auth::check() ? view('profil') : redirect('/login');
    }

    public function Logout(){
        Auth::logout();
        return redirect('/')->withErrors([
            'sv'    => 'Sikeresen kijelentkezett'
        ]);
    }

    public function NewPass(){
        return Auth::check() ? view('newpass') : redirect('/login');
    }

    public function NewPassData(Request $req){
        $req->validate([
            'password'              =>  ['required', 'confirmed', Password::min(8)->letters()->numbers()->mixedCase()],
            'password_confirmation' => 'required'
        ],[
            'password.required'              => 'Kötelező jelszót megadni',
            'password.confirmed'             => 'A két jelszó nem egyezik meg',
            'password.*'                     => 'Nem elég erős a jelszava',
            'password_confirmation.required' => 'Kötelező jelszót megadni'
        ]);

        $user           = User::find(Auth::id());
        $user->password = Hash::make($req->password);
        $user->Save();

        return redirect('/')->withErrors([
            'sv'    => 'Sikeresen megváltoztatta a jelszavát'
        ]);
    }

    public function Deactivate(){
        return Auth::check() ? view('deactivation') : redirect('/login');
    }

    public function DeactivateData(Request $req){
        $user = Auth::user();
        $user -> active = '0';
        $user -> save();
        Auth::logout();

        return redirect('/')->withErrors([
            'sv'    => 'Sikeresen deaktiválta a fiókját'
        ]);
    }
}
