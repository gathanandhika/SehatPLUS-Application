<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekammedis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_rm',
        'poly',
        'tgl_periksa',
        'bb',
        'tb',
        'suhu',
        'tekanan_darah',
        'detak_jantung',
        'diagnosa',
        'obat',
        'dosis'
    ];
    public function pasien(){
        return $this->belongsTo(pasien::class);
    }
    public function pendaftaran(){
        return $this->belongsTo(pasien::class);
    }
}
