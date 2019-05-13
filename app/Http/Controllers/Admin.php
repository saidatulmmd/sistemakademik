<?php

namespace App\Http\Controllers;

use App\ModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Admin extends Controller
{
    //
    public function index(){
        if(!Session::get('loginadmin')){
            return redirect('loginadmin')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('homeadmin');
        }
    }

    public function login(){
        return view('loginadmin');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelAdmin::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('loginadmin',TRUE);
                return redirect('homeadmin');
            }
            else{
                return redirect('loginadmin')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('loginadmin')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('registeradmin');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'alamat_admin' => 'required',
            'telepon_admin' => 'required|min:10',
            'jenis_kelamin_admin' => 'required',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelAdmin();
        $data->name = $request->name;
        $data->alamat_admin = $request->alamat_admin;
        $data->telepon_admin = $request->telepon_admin;
        $data->jenis_kelamin_admin = $request->jenis_kelamin_admin;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('loginadmin')->with('alert-success','Kamu berhasil Register');
    }

}