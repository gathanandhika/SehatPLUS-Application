<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ([
        'id_rm',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_hp'
    ]);

    public function pendaftaran(){
        return $this->hasMany(pendaftaran::class);
    }
    public function rekammedis(){
        return $this->hasMany(pendaftaran::class);
    }
}
