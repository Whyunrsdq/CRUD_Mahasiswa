<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('id', 'desc')->get();
        $total = Mahasiswa::count();
        return view ('home', compact(['mahasiswas', 'total']));
    }
    public function create()
    {
        return view ('create');
    }
    public function save(Request $request)
    {
        $validation = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'motivasikuliah' => 'required',
        ]);
        $data = Mahasiswa::create($validation);
        if ($data) {
            session()->flash('success', 'Data Mahasiswa Berhasil Ditambahkan');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('create'));
        }
    }

    public function edit($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('update', compact('mahasiswas'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        $nim = $request->nim;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $nohp = $request->nohp;
        $motivasikuliah = $request->motivasikuliah;
 
        $mahasiswas -> nim = $nim;
        $mahasiswas -> nama = $nama;
        $mahasiswas -> alamat = $alamat;
        $mahasiswas -> nohp = $nohp;
        $mahasiswas -> motivasikuliah = $motivasikuliah;
        $data = $mahasiswas->save();
        if ($data) {
            session()->flash('success', 'Data Mahasiswa Berhasil Di Update');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('update'));
        }
    }
    public function delete($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id)->delete();
        if ($mahasiswas) {
            session()->flash('success', 'Data Berhasil Di Hapus');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Product Not Delete successfully');
            return redirect(route('home'));
        }
    }
}
