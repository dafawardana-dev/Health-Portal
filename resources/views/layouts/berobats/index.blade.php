@extends('layouts.master')

@section('title', 'Aplikasi Pendaftaran Pasien')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center>Hasil Diagnosa</center>
            </h1>
            <a href="{{route('berobats.create')}}" class="btn btn-success pull-right">+
                Tambah</a>
            <br>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 3%;">No</th>
                        <th style="width: 7%;">ID Pasien</th>
                        <th style="width: 10%;">ID Dokter</th>
                        <th style="width: 5%;">Keluhan Pasien</th>
                        <th style="width: 5%;">Hasil Diagnosa</th>                        
                        <th style="width: 8%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataBerobat as $data)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $data->id_pasien}}</td>
                        <td>{{ $data->dokters->nama_dokter}}</td>
                        <td>{{ $data->keluhan_pasien}}</td>
                        <td>{{ $data->hasil_diagnosa}}</td>                        
                        <td>
                            <form action="{{route('berobats.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('berobats.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin Ingin Menghapus Data ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection