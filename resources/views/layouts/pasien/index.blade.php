@extends('layouts.master')

@section('title', 'Aplikasi Rumah Sakit')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <center>Data Pasien</center>
            </h1>
            <a href="{{route('pasien.create')}}" class="btn btn-success pull-right">+
                Tambah</a>
            <br>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 3%;">No</th>
                        <th style="width: 7%;">Nama Pasien</th>
                        <th style="width: 10%;">Alamat</th>
                        <th style="width: 5%;">No Hp</th>
                        <th style="width: 5%;">Umur</th>
                        <th style="width: 5%;">Jenis Kelamin</th>
                        <th style="width: 5%;">Poli</th>
                        <th style="width: 5%;">Dokter</th>
                        <th style="width: 8%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPasien as $data)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $data->nama_pasien}}</td>
                        <td>{{ $data->alamat}}</td>
                        <td>{{ $data->no_hp}}</td>
                        <td>{{ $data->umur}}</td>
                        <td>{{ $data->jenis_kelamin}}</td>
                        <td>{{ $data->poli}}</td>
                        <td>{{ $data->dokters->nama_dokter}}</td>                        
                        <td>
                            <form action="{{route('pasien.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('pasien.edit', $data->id)}}" class="btn btn-warning">Edit</a>
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