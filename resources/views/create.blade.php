@extends('layout.index')
@section('title','Create Product')
 
@section('content')
<div class="my-5">
    <div class="container mx-auto max-w-xl shadow py-4 px-10">
        @if (session()->has('error'))
        <div class="bg-red-500 text-black px-4 py-2">
            {{session('error')}}
        </div>
        @endif
        <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Kembali</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Tambah Data Mahasiswa</h1>
            <form action="" method="POST">
                @csrf
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Nim</label>
                    <input type="text" name="nim" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('nim')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Nama</label>
                    <input type="text" name="nama" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('nama')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Alamat</label>
                    <input type="text" name="alamat" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('alamat')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">No HP</label>
                    <input type="text" name="nohp" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('nohp')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Motivasi Kuliah</label>
                    <input type="text" name="motivasikuliah" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('motivasikuliah')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection