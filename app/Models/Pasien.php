<?php

namespace App\Models;

use App\Models\Dokters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',        
        'nama_pasien',        
        'alamat',
        'no_hp',
        'umur',
        'jenis_kelamin',
        'poli',
        'id_dokter'
    ];
    
    public function dokters()
    {
        return $this->belongsTo(Dokters::class, 'id_dokter', 'id');
    }
}