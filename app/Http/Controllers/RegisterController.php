<?php

namespace App\Http\Controllers;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //index
    public function index()
    {
        return view('layouts.register.index');
    }

    //function store
    public function store(Request $request)
    {
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        //flashing data
        // $request->session()->flash('success', 'Data berhasil ditambahkan');
        return redirect('/login')->with('success', 'Data berhasil ditambahkan');
    }    
}