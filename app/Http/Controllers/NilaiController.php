<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Biodata_Siswa;
use App\Pelajaran;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('nilai',['nilai' => $nilai]);
    }

    public function tambah()
    {
        $biodata_siswa = Biodata_Siswa::all();
        $pelajaran = Pelajaran::all();
        return view ('tambahnilai', compact('biodata_siswa','pelajaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nilai = new Nilai([
            'no_induk_siswa' => request('no_induk_siswa'),
            'slug' => str_slug(request('nama_pelajaran')),
            'nama_pelajaran' => $request->get('nama_pelajaran'),
            'nilai_uh' => $request->get('nilai_uh'),
            'nilai_uts' => $request->get('nilai_uts'),
            'nilai_uas' => $request->get('nilai_uas')
        ]);
        $nilai->save();

        return redirect('/nilai')->with('Success', 'Data Telah Tersimpan!');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('editnilai', ['nilai' => $nilai]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk_siswa' => 'required',
            'nama_pelajaran' => 'required'
        ]);

        $nilai = Nilai::find($id);
        $nilai->no_induk_siswa = $request->get('no_induk_siswa');
        $nilai->nama_pelajaran = $request->get('nama_pelajaran');
        $nilai->nilai_uh = $request->get('nilai_uh');
        $nilai->nilai_uts = $request->get('nilai_uts');
        $nilai->nilai_uas = $request->get('nilai_uas');
        $nilai->save();
        return redirect('/nilai');
    }

    public function delete($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect('/nilai');
    }

    public function lihat()
    {
        $nilai = Nilai::all();
        return view('lihatnilai',['nilai' => $nilai]);
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
