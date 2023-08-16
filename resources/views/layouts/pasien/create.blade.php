@extends('layouts.master')

@section('title', 'Aplikasi Rumah Sakit')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center>Membuat Data Pasien</center>
            </h1>
            <br>
            <form action="{{route('pasien.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien"
                        placeholder="Input Nama Pasien">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat Pasien">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Inpu No Handphone">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur" name="umur" placeholder="Input Umur Pasien">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                        placeholder="Input Jenis Kelamin Pasien">
                </div>
                <div class="mb-3">
                    <label for="poli" class="form-label">Poli</label>
                    <input type="text" class="form-control" id="poli" name="poli" placeholder="Iput Poli Pasien">
                </div>
                <div class="mb-3">
                    <label for="example" class="form-label">Dokter</label>
                    <select name="id_dokter" class="form-select">
                        <option selected>Pilih Dokter</option>
                        @foreach ($datadokter as $data)
                        <option value="{{$data->id}}">{{$data->nama_dokter}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('pasien.index')}}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection