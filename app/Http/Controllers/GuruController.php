<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru',['guru' => $guru]);
    }

    public function tambah()
    {
        return view ('tambahguru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $guru = new Guru([
            'name' => $request->get('name'),
            'alamat_guru' => $request->get('alamat_guru'),
            'telepon_guru' => $request->get('telepon_guru'),
            'jenis_kelamin_guru' => $request->get('jenis_kelamin_guru')            
        ]);
        $guru->save();

        return redirect('/guru')->with('Success', 'Data Telah Tersimpan!');
    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('editguru', ['guru' => $guru]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $guru = Guru::find($id);
        $guru->name = $request->get('name');
        $guru->alamat_guru = $request->get('alamat_guru');
        $guru->telepon_guru = $request->get('telepon_guru');
        $guru->jenis_kelamin_guru = $request->get('jenis_kelamin_guru');
        $guru->save();
        return redirect('/guru');
    }

    public function delete($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }

    public function lihat()
    {
        $guru = Guru::all();
        return view('lihatguru',['guru' => $guru]);
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
}
