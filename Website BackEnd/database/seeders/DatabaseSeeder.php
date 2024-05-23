<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Obat;
use App\Models\pasien;
use App\Models\pendaftaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Ravel',
            'no_hp' => '0973648351',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '0973648361',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '0973648352',
            'password' => Hash::make('password'),
            'role' => 'loket'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '0973648353',
            'password' => Hash::make('password'),
            'role' => 'dokter'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '0973648354',
            'password' => Hash::make('password'),
            'role' => 'apoteker'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '0973648355',
            'password' => Hash::make('password'),
            'role' => 'kasir'
        ]);

        pasien::create([
            'nama' => 'Ravel',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => Carbon::create('2002', '01', '01'),
            'no_hp' => '0897687576'
        ]);

        pendaftaran::create([
            'nama' => 'Ravel',
            'poly' => 'apa aja',
            'gejala' => 'jatuh dari tangga',
            'tgl_periksa' => Carbon::create('2024', '01', '12'),
            'chekin' => 'sudah chekin'
        ]);

        Obat::create([
            'nama_obat' => 'paracetamol',
            'harga' => 20000
        ]);
    }
}
