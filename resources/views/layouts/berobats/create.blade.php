@extends('layouts.master')

@section('title', 'Aplikasi Rumah Sakit')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center>Hasil Diagnosa</center>
            </h1>
            <br>
            <form action="{{route('berobats.store')}}" method="POST">
                @csrf                
                <div class="mb-3">
                    <label for="example" class="form-label">ID Pasien</label>                   
                    <select name="id_pasien" class="form-select">
                        <option selected>Pilih Pasien</option>
                        @foreach ($datapasien as $data)
                        <option value="{{$data->id}}">{{$data->nama_pasien}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="example" class="form-label">ID Dokter</label>                   
                    <select name="id_dokter" class="form-select">
                        <option selected>Pilih Dokter</option>
                        @foreach ($datadokter as $data)
                        <option value="{{$data->id}}">{{$data->nama_dokter}}</option>
                        @endforeach
                    </select>
                </div>                
                <div class="mb-3">
                    <label for="keluhan_pasien" class="form-label">Keluhan Pasien</label>
                    <input type="text" class="form-control" id="keluhan_pasien" name="keluhan_pasien" placeholder="Inpu Keluhan Pasien">
                </div>
                <div class="mb-3">
                    <label for="hasil_diagnosa" class="form-label">hasil diagnosa</label>
                    <input type="text" class="form-control" id="hasil_diagnosa" name="hasil_diagnosa" placeholder="Input hasil diagnosa Pasien">
                </div>
                    
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('berobats.index')}}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection