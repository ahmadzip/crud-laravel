<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa', compact('data'));
    }

    public function tambah()
    {
        return view('tambah');
    }


    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required'
        ]);
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $data = Mahasiswa::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required'
        ]);
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect('/mahasiswa');
    }

}
