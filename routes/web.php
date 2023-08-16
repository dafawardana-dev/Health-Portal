<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DoktersController;
use App\Http\Controllers\BerobatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/pasien', function () {
    //     return view('layouts.pasien.index');
    // });
    
    
Auth::routes();
//routes login 
// Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('pasien.index');
Route::get('/login',[LoginController::class, 'index']);
//route authenticate
Route::post('/login',[LoginController::class, 'authenticate'])->name('login.authenticate');

//route register
Route::get('/register',[RegisterController::class, 'index']);

//route store resiter 
Route::post('/register',[RegisterController::class, 'store'])->name('register.store');
//Melihat pasien 
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');    

//tambah data pasien
Route::get('/tambahpasien', [PasienController::class, 'create'])->name('pasien.create');    

//simpan data
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');        

//edit data
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit'); 

//update data
Route::post('/pasien/edit/{id}', [PasienController::class, 'update'])->name('pasien.update');

//delete data
Route::delete('/pasien/delete/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');

// dokter route

//view table dokter
Route::get('/dokters', [DoktersController::class, 'index'])->name('dokters.index');

Route::get('/tambahdokters', [DoktersController::class, 'create'])->name('dokters.create');    

//save data dokter 
Route::post('/dokters', [DoktersController::class, 'store'])->name('dokters.store');

Route::get('/dokters/edit/{id}', [DoktersController::class, 'edit'])->name('dokters.edit'); 

Route::post('/dokters/edit/{id}', [DoktersController::class, 'update'])->name('dokters.update');
//delete data
Route::delete('/dokters/delete/{id}', [DoktersController::class, 'destroy'])->name('dokters.destroy');


//hasil diagnosa
Route::get('/berobats', [BerobatController::class, 'index'])->name('berobats.index');

Route::get('/tambahberobats', [BerobatController::class, 'create'])->name('berobats.create');   

//save data dokter  
Route::post('/berobats', [BerobatController::class, 'store'])->name('berobats.store');

Route::get('/berobats/edit/{id}', [BerobatController::class, 'edit'])->name('berobats.edit');   

Route::post('/berobats/edit/{id}', [Ber obatController::class, 'update'])->name('berobats.update');

Route::delete('/berobats/delete/{id}', [BerobatController::class, 'destroy'])->name('berobats.destroy');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');