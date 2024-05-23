<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RekammedisController;
use App\Models\pendaftaran;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [AuthController::class, 'index'])->name('TestLogin');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/admin', function(){
    return view('admin.dashboard.dashboard');
});

// Route::get('/loket', function(){
//     return view('loket.daftar_passien.daftar_pasien');
// });
Route::get('/loket', [PendaftaranController::class, 'index']);
Route::get('/data-pasien', [PendaftaranController::class, 'datapasien']);

Route::get('/jadwal-dokter', function(){
    return view('loket.jadwal_dokter.jadwal_dokter');
});

Route::get('/pendaftaran-pasien',[PendaftaranController::class, 'create']);
Route::post('/daftar',[PendaftaranController::class, 'store']);
Route::get('buat-akun', function(){
    return view('loket.Create_Account.creataccount');
});



Route::get('/dokter', [PendaftaranController::class, 'periksa']);
Route::get('/periksa/{$id_rm}', ['RekammedisController@create'])->name('periksa');
Route::get('/simpan-data', [RekammedisController::class, 'store']);

Route::get('/apoteker', function(){
    return view('apoteker.daftar-pasien.daftar-pasien');
});

Route::get('/resep-obat', function(){
    return view('apoteker.resepobat.resep-obat');
});

Route::get('/kasir', function(){
    return view('kasir.pembayaran.pembayaran');
});
