<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata_Siswa;

class Biodata_SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata_siswa = Biodata_Siswa::all();
        return view('biodata_siswa',['biodata_siswa' => $biodata_siswa]);
    }

    public function tambah()
    {
        return view ('tambahbiodata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_induk_siswa' => 'required',
            'name' => 'required'
        ]);

        $biodata_siswa = new Biodata_Siswa([
            'no_induk_siswa' => $request->get('no_induk_siswa'),
            'name' => $request->get('name'),
            'tempat_lahir_siswa' => $request->get('tempat_lahir_siswa'),
            'tanggal_lahir_siswa' => $request->get('tanggal_lahir_siswa'),
            'jenis_kelamin_siswa' => $request->get('jenis_kelamin_siswa'),
            'agama_siswa' => $request->get('agama_siswa'),
            'hobi_siswa' => $request->get('hobi_siswa'),
            'alamat_siswa' => $request->get('alamat_siswa'),
            'no_telepon_siswa' => $request->get('no_telepon_siswa'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $biodata_siswa->save();

        return redirect('/biodata_siswa')->with('Success', 'Data Telah Tersimpan!');
    }

    public function edit($id)
    {
        $biodata_siswa = Biodata_Siswa::find($id);
        return view('editbiodata', ['biodata_siswa' => $biodata_siswa]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk_siswa' => 'required',
            'name' => 'required'
        ]);

        $biodata_siswa = Biodata_Siswa::find($id);
        $biodata_siswa->no_induk_siswa = $request->get('no_induk_siswa');
        $biodata_siswa->name = $request->get('name');
        $biodata_siswa->tempat_lahir_siswa = $request->get('tempat_lahir_siswa');
        $biodata_siswa->tanggal_lahir_siswa = $request->get('tanggal_lahir_siswa');
        $biodata_siswa->jenis_kelamin_siswa = $request->get('jenis_kelamin_siswa');
        $biodata_siswa->agama_siswa = $request->get('agama_siswa');
        $biodata_siswa->hobi_siswa = $request->get('hobi_siswa');
        $biodata_siswa->alamat_siswa = $request->get('alamat_siswa');
        $biodata_siswa->no_telepon_siswa = $request->get('no_telepon_siswa');
        $biodata_siswa->email = $request->get('email');
        $biodata_siswa->password = $request->get('password');
        $biodata_siswa->save();
        return redirect('/biodata_siswa');
    }

    public function delete($id)
    {
        $biodata_siswa = Biodata_Siswa::find($id);
        $biodata_siswa->delete();
        return redirect('/biodata_siswa');
    }

    public function lihat()
    {
        $biodata_siswa = Biodata_Siswa::all();
        return view('lihatbiodata',['biodata_siswa' => $biodata_siswa]);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
