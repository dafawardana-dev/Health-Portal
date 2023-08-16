<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokters extends Model
{    
    use HasFactory;
    protected $table = 'dokters';
    protected $primaryKey = 'id';    
    protected $fillable = [
        'id',
        'nama_dokter',
        'alamat',
        'no_hp',
        'umur',
        'jenis_kelamin',
        'spesialis'
    ];
}