<?php

namespace App\Http\Controllers;

use App\Models\Dokters;
use Illuminate\Http\Request;

class DoktersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view data
        $data = Dokters::all();
        return view('layouts.dokters.index', ['dataDokter' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dokters.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Dokters;
        $data->nama_dokter = $request->nama_dokter;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->umur = $request->umur;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->spesialis = $request->spesialis;
        $data->save();
        return redirect('/dokters');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokters  $dokters
     * @return \Illuminate\Http\Response
     */
    public function show(Dokters $dokters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokters  $dokters
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dokters::find($id);
        return view('layouts.dokters.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokters  $dokters
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request, $id)
    {
        $data = Dokters::find($id);
        $data->nama_dokter = $request->nama_dokter;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->umur = $request->umur;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->spesialis = $request->spesialis;
        $data->save();
        return redirect('/dokters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokters  $dokters
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        $data = Dokters::find($id);
        $data->delete();
        return redirect('/dokters');
    }
}