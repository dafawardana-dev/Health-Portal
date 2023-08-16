@extends('layouts.master')

@section('title', 'Aplikasi Rumah Sakit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center>Edit Data Dokter</center>
            </h1>
            <br>
            <form action="{{route('dokters.update', $data->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="nama_dokters" name="nama_dokter"
                        placeholder="Input Nama Dokter" value="{{$data->nama_dokter}}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat Pasien"
                        value="{{$data->alamat}}">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Inpu No Handphone"
                        value="{{$data->no_hp}}">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur" name="umur" placeholder="Input Umur Pasien"
                        value="{{$data->umur}}">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                        placeholder="Input Jenis Kelamin Pasien" value="{{$data->jenis_kelamin}}">
                </div>
                <div class="mb-3">
                    <label for="spesialis" class="form-label">Spesialis</label>
                    <input type="text" class="form-control" id="spesialis" name="spesialis"
                        placeholder="Input Spesialis Dokter" value="{{$data->spesialis}}">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('dokters.index')}}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection