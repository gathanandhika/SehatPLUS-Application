<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;
    protected $primarykey = 'id_rm';
    protected $fillable = ([
        'id_rm',
        'nama',
        'poly',
        'gejala',
        'tgl_periksa',
        'chekin'
    ]);

    public function pasien(){
        return $this->belongsTo(pasien::class);
    }
    public function rekammedis(){
        return $this->hasMany(pasien::class);
    }
}
