<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use App\Models\Dokters;
use Illuminate\Http\Request;

use App\Models\Pasien;
class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        return view('layouts.pasien.index', ['dataPasien' => $data]);
    }

    public function create()
    {
        
        $datadokter = Dokters::all();        
        return view('layouts.pasien.create', compact('datadokter'));
        
    }

    // function store
    public function store(Request $request)
    {
        $data = new Pasien;
        $data->nama_pasien = $request->nama_pasien;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->umur = $request->umur;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->poli = $request->poli;
        $data->id_dokter = $request->id_dokter;
        $data->save();
        return redirect('/pasien');
    } 
        
    //function edit
    public function edit($id)
    {
        $data = Pasien::find($id);
        return view('layouts.pasien.edit', compact('data'));
    }

    //function update
    public function update(Request $request, $id)
    {
        $data = Pasien::find($id);
        $data->nama_pasien = $request->nama_pasien;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->umur = $request->umur;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->poli = $request->poli;
        $data->id_dokter = $request->id_dokter;
        $data->save();
        return redirect('/pasien');
    }

    //function delete
    public function destroy($id)
    {
        $data = Pasien::find($id);
        $data->delete();
        return redirect('/pasien');
    }
}