<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use App\Models\Dokters;
use App\Models\Pasien;
use Illuminate\Http\Request;

class BerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $data = Berobat::all();
        return view('layouts.berobats.index', ['dataBerobat' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datadokter = Dokters::all();        
        $datapasien = Pasien::all();        
        return view('layouts.berobats.create', compact('datadokter','datapasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Berobat;
        $data->id_pasien = $request->id_pasien;
        $data->id_dokter = $request->id_dokter;
        $data->keluhan_pasien = $request->keluhan_pasien;
        $data->hasil_diagnosa = $request->hasil_diagnosa;
        $data->save();
        return redirect('/berobats');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
    public function show(Berobat $berobat)
    {
        //show data
        $data = Berobat::find($berobat->id);
        return view('layouts.berobats.show', ['dataBerobat' => $data]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        //show data
        $data = Berobat::find($id);
        return view('layouts.berobats.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request, $id)
    {
        $data = Berobat::find($id);
        $data->id_pasien = $request->id_pasien;
        $data->id_dokter = $request->id_dokter;
        $data->keluhan_pasien = $request->keluhan_pasien;
        $data->hasil_diagnosa = $request->hasil_diagnosa;
        $data->save();
        return redirect('/berobats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        $data = Berobat::find($id);
        $data->delete();
        return redirect('/berobats');
    }
}