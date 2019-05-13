<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admin',['admin' => $admin]);
    }

    public function tambah()
    {
        return view ('tambahadmin');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $admin = new Admin([
            'name' => $request->get('name'),
            'alamat_admin' => $request->get('alamat_admin'),
            'telepon_admin' => $request->get('telepon_admin'),
            'jenis_kelamin_admin' => $request->get('jenis_kelamin_admin')
        ]);
        $admin->save();

        return redirect('/admin')->with('Success', 'Data Telah Tersimpan!');
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('editadmin', ['admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $admin = Admin::find($id);
        $admin->name = $request->get('name');
        $admin->alamat_admin = $request->get('alamat_admin');
        $admin->telepon_admin = $request->get('telepon_admin');
        $admin->jenis_kelamin_admin = $request->get('jenis_kelamin_admin');
        $admin->save();
        return redirect('/admin');
    }

    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin');
    }
}
