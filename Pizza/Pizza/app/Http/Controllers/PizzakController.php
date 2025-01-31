<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizzak;
use Illuminate\Support\Facades\Auth;

class PizzakController extends Controller
{
    public function Akcios(){
        return view('welcome', [
            'result' => pizzak::where('akcios',1)
                                ->get()
        ]);
    }

    public function Adatlap($id){
        //Ez csak akkor működő method ha a Primary key id, különben a modellben át kell a Primary key-t
        return view('adatlap', [
            'result' => pizzak::find($id)
        ]);
    }

    public function Rnd(){
        //$rnd = rand(1,20);
        $rnd = Pizzak::inRandomOrder()->first();
        return view('adatlap', [
            'result' => pizzak::find($rnd->id)
        ]);
    }

    public function All(){
        return view('all', [
            'result' => pizzak::all()           // SELECT * FROM pizzak
            // 'result' => pizzak::select('*')->get()
        ]);
    }

    public function AllOrder($p){
        switch($p){
            case 'nevnov':
                $sv = pizzak::orderBy('nev')->get();
            break;
            case 'nevcsok':
                $sv = pizzak::orderBy('nev', 'DESC')->get();
            break;
            case 'arnov':
                $sv = pizzak::orderBy('ar')->get();
            break;
            case 'arcsok':
                $sv = pizzak::orderBy('ar', 'DESC')->get();
            break;
        }

        return view('all', [
            'result' => $sv
        ]);
    }

    public function Add(){
        if(Auth::check()){
            return view('add');
        } else {
            return redirect('/login');
        }
    }
    
    public function AddData(Request $req){
        if(Auth::check()){
                    ##1. validálás
        $req->validate([
            'nev'       => 'required|unique:pizzak,nev|max:25',
            'feltet'    => 'required',
            'ar'        => 'required|numeric|min:1500|max:10000'
        ],[
            'nev.required'      => 'Nevet kötelező megadni!',
            'feltet.required'   => 'Feltéteket kötelező megadni!',
            'ar.required'       => 'Árat kötelező megadni!',
            'nev.unique'        => 'Ilyen pizza már van!',
            'nev.max'           => 'Túl hosszú a név! (max 25 karakter)',
            'ar.numeric'        => 'Csak számot adhat meg!',
            'ar.min'            => 'Minimum ár 1500 Ft!',
            'ar.max'            => 'Maximum ár 10 000 Ft!',
        ]);

        ##2. Adatbázisba írás
        $data           = new pizzak;
        $data->nev      = $req->nev;
        $data->feltet   = $req->feltet;
        $data->ar       = $req->ar;
        if($req->has('akcios')){
            $data->akcios = 1;
        } else {
            $data->akcios = 0;
        }
        $data->Save();

        ##3. Visszajelzés a felhasználónak
        return view('success', [
            'msg'   => 'Sikeresen felvetted: '.$req->nev
        ]);
        } else {
            return redirect('/login');
        }
    }

    public function Mod(){
        if(Auth::check()){ 
            return view('mod', [
                'result' => pizzak::all()

            ]);
        } else {
            return redirect('/login');
        }
    }

    public function Modositas($id){
        if(Auth::check()){
            return view('modositas', [
                'result' => pizzak::find($id)
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function ModositasData(Request $req){
        if(Auth::check()){
            $req->validate([
                'feltet'    => 'required',
                'ar'        => 'required|numeric|min:1500|max:10000'
            ],[
                'feltet.required'   => 'Feltéteket kötelező megadni!',
                'ar.required'       => 'Árat kötelező megadni!',
                'ar.numeric'        => 'Csak számot adhat meg!',
                'ar.min'            => 'Minimum ár 1500 Ft!',
                'ar.max'            => 'Maximum ár 10 000 Ft!',
            ]);
    
            $data           = pizzak::find($req->id);
            #$data->nev      = $req->nev;
            $data->feltet   = $req->feltet;
            $data->ar       = $req->ar;
            if($req->has('akcios')){
                $data->akcios = 1;
            } else {
                $data->akcios = 0;
            }
            $data->Save();
    
            return view('success', [
                'msg'   => 'Sikeresen módosítottad: '.$data->nev
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function Torles($id){
        return view('torles', [
            'result'    => pizzak::find($id)
        ]);
    }

    public function Exit($id){
        $data   = pizzak::find($id);
        $data->Delete(); 
        return view('success', [
            'msg'   => 'Sikeresen törölted '.$data->nev.' pizzát'
        ]);
    }
}
