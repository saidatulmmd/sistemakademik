<?php

namespace App\Http\Controllers;

use\App\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu!');
        }
        else{
            return view('biodata_siswa');
        }
    }

    public function login(){
        return view('/login');
    }

    public function loginPost(Request $request)
    {
        $username = $request->username;
        $data = User::where('username',$username)->first();
        if(Auth::attempt($request->only('username', 'password')))
        {
            Session::put('name',$data->name);
            return redirect('index');
        }
        return redirect('biodata_siswa');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login')->with('alert','Logout Berhasil!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
