<?php

namespace App\Http\Controllers;

use App\ModelSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Siswa extends Controller
{
    //
    public function index(){
        if(!Session::get('loginsiswa')){
            return redirect('loginsiswa')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('homesiswa');
        }
    }

    public function login(){
        return view('loginsiswa');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelSiswa::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('loginsiswa',TRUE);
                return redirect('homesiswa');
            }
            else{
                return redirect('loginsiswa')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('loginsiswa')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('registersiswa');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'no_induk_siswa' => 'required|min:4',
            'tempat_lahir_siswa' => 'required|min:4',
            'tanggal_lahir_siswa' => 'required',
            'jenis_kelamin_siswa' => 'required',
            'agama_siswa' => 'required|min:4',
            'hobi_siswa' => 'required|min:4',
            'alamat_siswa' => 'required|min:4',
            'no_telepon_siswa' => 'required|min:4',
            'slug' => 'required',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelSiswa();
        $data->name = $request->name;
        $data->no_induk_siswa = $request->no_induk_siswa;
        $data->tempat_lahir_siswa = $request->tempat_lahir_siswa;
        $data->tanggal_lahir_siswa = $request->tanggal_lahir_siswa;
        $data->jenis_kelamin_siswa = $request->jenis_kelamin_siswa;
        $data->agama_siswa = $request->agama_siswa;
        $data->hobi_siswa = $request->hobi_siswa;
        $data->alamat_siswa = $request->alamat_siswa;
        $data->no_telepon_siswa = $request->no_telepon_siswa;
        $data->slug = $request->slug;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('loginsiswa')->with('alert-success','Kamu berhasil Register');
    }
}