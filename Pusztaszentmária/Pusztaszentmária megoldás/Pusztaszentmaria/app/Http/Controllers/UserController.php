<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class UserController extends Controller
{
    public function getLogin(){
    
        return view('User_Interface.login');
    }

    public function Login(Request $req){
        $req -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Az email megadása kötelező!',
            'email.email' => 'Az email formátuma nem megfelelő!',

            'password.required' => 'A jelszó megadása kötelező!'
        ]);

        if(Auth::attempt(['email' => $req -> email, 'password' => $req -> password])){
            return redirect('/')->with('success', 'Sikeres bejelentkezés!');
        } else {
            return back() -> with('error', 'Hibás email vagy jelszó!');
        }
    }

    public function getRegister(){
        return view('User_Interface.register');
    }

    public function Register(Request $req){
        $req -> validate([
            'nev' => 'required|unique:user,nev',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Password::min(8) -> numbers() -> letters() -> mixedCase()],
            'password_confirmation' => 'required'
        ],[
            'nev.required' => 'A név megadása kötelező!',
            'nev.unique' => 'A név már foglalt!',

            'email.required' => 'Az email megadása kötelező!',
            'email.email' => 'Az email formátuma nem megfelelő!',

            'password.required' => 'A jelszó megadása kötelező!',
            'password.confirmed' => 'A jelszavak nem egyeznek!',
            'password.min' => 'A jelszó minimum 8 karakter hosszú legyen!',
            'password.numbers' => 'A jelszó tartalmazzon számot!',
            'password.letters' => 'A jelszó tartalmazzon kisbetűt!',
            'password.mixed' => 'A jelszó tartalmazzon nagybetűt!',

            'password_confirmation.required' => 'A jelszó megerősítése kötelező!'
        ]);

        $data = new User;

        $data -> nev = $req -> nev;
        $data -> email = $req -> email;
        $data -> password = Hash::make($req -> password);

        $data -> save();

        return redirect('/')->with('success', 'Sikeres regisztráció!');
    }

    #Account actions
    
    public function Logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Sikeres kijelentkezés!');
    }

    public function getProfile(){
        if(Auth::check()){
            return view('User_Interface.profil');
        } else {
            return redirect('/')->with('error', 'Előbb jelentkezz be!');
        }
    }

    public function newPass(Request $req){
        $req -> validate([
            'old_password' => 'required',
            'password' => ['required', 'confirmed', Password::min(8) -> numbers() -> letters() -> mixedCase()],
            'password_confirmation' => 'required'
        ], [
            'old_password.required' => 'A régi jelszó megadása kötelező!',

            'password.required' => 'Az új jelszó megadása kötelező!',
            'password.confirmed' => 'Az új jelszavak nem egyeznek!',
            'password.min' => 'Az új jelszó minimum 8 karakter hosszú legyen!',
            'password.numbers' => 'Az új jelszó tartalmazzon számot!',
            'password.letters' => 'Az új jelszó tartalmazzon kisbetűt!',
            'password.mixed' => 'Az új jelszó tartalmazzon nagybetűt!',

            'password_confirmation.required' => 'Az új jelszó megerősítése kötelező!'
        ]);

        $user = Auth::user();

        if (Hash::check($req->old_password, $user->password)) {
            if ($req->old_password === $req->password) {
                return back()->with('error', 'Az új jelszó nem lehet ugyanaz, mint a régi jelszó!');
            }
        
            $user->password = Hash::make($req->password);
            $user->save();
        
            return redirect('/profil')->with('success', 'Sikeres jelszóváltoztatás!');
        } else {
            return back()->with('error', 'Hibás régi jelszó!');
        }
    }
}
