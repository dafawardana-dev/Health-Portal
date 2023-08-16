@extends('layouts.master')

@section('title', 'Aplikasi Rumah Sakit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center>Edit Hasil Diagnosa</center>
            </h1>
            <br>
            <form action="{{route('berobats.update', $data->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_pasien" class="form-label">ID Pasien</label>
                    <input type="text" class="form-control" id="id_pasien" name="id_pasien"
                        placeholder="Input Nama Pasien" value="{{$data->id_pasien}}">
                </div>
                <div class="mb-3">
                    <label for="id_dokter" class="form-label">Nama dokter</label>
                    <input type="text" class="form-control" id="id_dokter" name="id_dokter"
                        placeholder="Input Nama dokter" value="{{$data->id_dokter}}">
                </div>
                              
                <div class="mb-3">
                    <label for="keluhan_pasien" class="form-label">keluhan_pasien</label>
                    <input type="text" class="form-control" id="keluhan_pasien" name="keluhan_pasien" placeholder="Input Keluhan Pasien"
                        value="{{$data->keluhan_pasien}}">
                </div>
                <div class="mb-3">
                    <label for="hasil_diagnosa" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="hasil_diagnosa" name="hasil_diagnosa"
                        placeholder="Input Jenis Hasil Diagnosa" value="{{$data->hasil_diagnosa}}">
                </div>                
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('berobats.index')}}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection