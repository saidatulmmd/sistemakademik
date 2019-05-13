<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelajaran;

class PelajaranController extends Controller
{
    public function index()
    {
        $pelajaran = Pelajaran::all();
        return view('pelajaran',['pelajaran' => $pelajaran]);
    }

    public function tambah()
    {
        return view ('tambahpelajaran');
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
            'nama_pelajaran' => 'required',
            'pengajar' => 'required'
        ]);

        $pelajaran = new Pelajaran([
            'nama_pelajaran' => $request->get('nama_pelajaran'),
            'pengajar' => $request->get('pengajar')
        ]);
        $pelajaran->save();

        return redirect('/pelajaran')->with('Success', 'Data Telah Tersimpan!');
    }

    public function edit($id)
    {
        $pelajaran = Pelajaran::find($id);
        return view('editpelajaran', ['pelajaran' => $pelajaran]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelajaran' => 'required',
            'pengajar' => 'required'
        ]);

        $pelajaran = Pelajaran::find($id);
        $pelajaran->nama_pelajaran = $request->get('nama_pelajaran');
        $pelajaran->pengajar = $request->get('pengajar');
        $pelajaran->save();
        return redirect('/pelajaran');
    }

    public function delete($id)
    {
        $pelajaran = Pelajaran::find($id);
        $pelajaran->delete();
        return redirect('/pelajaran');
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
