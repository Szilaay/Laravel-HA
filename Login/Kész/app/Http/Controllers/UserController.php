<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function Reg(){
        if(Auth::check()){
            return redirect('/');
        }
        else{
            return view('reg');
        }
    }

    public function Login(){
        if(Auth::check()){
            return redirect('/');
        }
        else{
            return view('login');
        }
    }



    public function RegData(Request $req){
        $req->validate([
            'name'                           => 'required|unique:user,name',
            'password'                       => ['required', 'confirmed', Password::min(8) -> numbers() -> letters() -> mixedCase()],
            'password_confirmation'          => 'required',
            'bio'                            => 'required|min:10'
        ],[
            'name.required'                  => 'Kötelező megadni!',
            'name.unique'                    => 'Ez a usernév már foglalt!',
            'password.required'              => 'Kötelező megadni!',
            'password.confirmed'             => 'A két jelszó nem egyezik!',
            'password.min'                   => 'A jelszó min 8 karakter legyen!',
            'password.numbers'               => 'A jelszó tartalmazzon legalább egy számot!',
            'password.letters'               => 'A jelszó tartalmazzon legalább egy betűt!',
            'password.mixed'                 => 'A jelszó tartalmazzon kis és nagybetűt',
            'password_confirmation.required' => 'Kötelező megadni!',
            'bio.required'                   => 'Kötelező megadni!',
            'bio.min'                        => 'Írjál többet magadról!'
        ]);

        $data = new User;
        $data->name = $req->name;
        $data->password = Hash::make($req->password);
        $data->bio = $req->bio;
        $data->Save();
        return view('welcome',[
            'success' => 'Sikeres regisztráció!'
        ]);
    }

    public function LoginData(Request $req){
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

    public function Logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function Mypage(){
    if(Auth::check()){
        return view('/mypage');
        }
        else{
            return view('/');
        }
    }

    ##Új jelszó
    public function Newpass(){
        if(Auth::check()){
            return view('newpass');
        }
        else{
            return redirect('/login');
        }
    }

    public function NewpassData(Request $req){
        $req->validate([
            'old_password'                       => 'required',
            'new_password'                       => ['required', 'confirmed', Password::min(8) -> numbers() -> letters() -> mixedCase()],
            'new_password_confirmation'          => 'required',
        ],[
            
            'old_password.required'              => 'Kötelező megadni!',

            'new_password.required'              => 'Kötelező megadni!',
            'new_password.confirmed'             => 'A két jelszó nem egyezik!',
            'new_password.min'                   => 'A jelszó min 8 karakter legyen!',
            'new_password.numbers'               => 'A jelszó tartalmazzon legalább egy számot!',
            'new_password.letters'               => 'A jelszó tartalmazzon legalább egy betűt!',
            'new_password.mixed'                 => 'A jelszó tartalmazzon kis és nagybetűt',
            'new_password_confirmation.required' => 'Kötelező megadni!',
        ]);

        $user = Auth::user();

        if(Hash::check($req->old_password, $user->password)){
            $user->password = Hash::make($req->new_password);
            $user->save();
            return view('welcome',[
                'success' => 'Sikeres jelszóváltoztatás!'
            ]);
        } else {
            return redirect('/newpass');
        }
    }

    ##Felhasználó törlése

    public function Delete(){
        if(Auth::check()){
            return view('del');
        }
        else{
            return redirect('/login');
        }
    }

    public function DeleteData(Request $req){
        $req->validate([
            'password' => 'required'
        ],[
            'password.required' => 'Kötelező megadni!'
        ]);

        $user = Auth::user();

        if(Hash::check($req->password, $user->password)){
            Auth::logout();
            $user->delete();
            return view('/reg');
        } else {
            return redirect('/del');
        }
    }
}
