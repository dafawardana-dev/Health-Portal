<?php

namespace App\Models;

use App\Models\Dokters;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    use HasFactory;
    protected $table = 'berobats';
    protected $primaryKey = 'id';    
    protected $fillable = [
        'id',
        'id_pasien',
        'id_dokter',
        'keluhan_pasien',
        'hasil_diagnosa'
    ];

    public function pasiens()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien', 'id');
    }
        
    public function dokters()
    {
        return $this->belongsTo(Dokters::class, 'id_dokter', 'id');
    }
}