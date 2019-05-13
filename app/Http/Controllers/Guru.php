<?php

namespace App\Http\Controllers;

use App\ModelGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Guru extends Controller
{
    //
    public function index(){
        if(!Session::get('loginguru')){
            return redirect('loginguru')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('homeguru');
        }
    }

    public function login(){
        return view('loginguru');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelGuru::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('loginguru',TRUE);
                return redirect('homeguru');
            }
            else{
                return redirect('loginguru')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('loginguru')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('registerguru');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'alamat_guru' => 'required',
            'telepon_guru' => 'required|min:10',
            'jenis_kelamin_guru' => 'required',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelGuru();
        $data->name = $request->name;
        $data->alamat_guru = $request->alamat_guru;
        $data->telepon_guru = $request->telepon_guru;
        $data->jenis_kelamin_guru = $request->jenis_kelamin_guru;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('loginguru')->with('alert-success','Kamu berhasil Register');
    }
}