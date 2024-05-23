<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use App\Http\Requests\StorependaftaranRequest;
use App\Http\Requests\UpdatependaftaranRequest;
use App\Models\pasien;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $daftar_pasien = pendaftaran::all();
        $data = pendaftaran::all();
        // $data = DB::table('pasiens')
        //         ->join('pendaftarans', 'pasiens.id_rm', '=', 'pendaftarans.id_rm')
        //         ->get();
        return view('loket.pendaftaran.pendaftaran')->with('data', $data);
    }

    public function datapasien()
    {
        $data = pendaftaran::all();
        return view('loket.daftar_passien.daftar_pasien')->with('pasien', $data);
    }

    public function periksa()
    {
        $data = pendaftaran::Where('chekin', 'Sudah Checkin')->get();
        return view('dokter.rekammedis.rekammedis')->with('pasien', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loket.pendaftaran-pasien.pendaftaran-pasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HttpRequest $request)
    {
        $data = $request->validate([
            'namapasien'=>'required',
            'poly'=>'required',
            'gejala'=>'required',
            'tgl_pemeriksaan'=>'required',
            'checkin'=>'required'
        ]);
        pendaftaran::create([
            'nama'=>$data['namapasien'],
            'poly'=>$data['poly'],
            'gejala'=>$data['gejala'],
            'tgl_periksa'=>$data['tgl_pemeriksaan'],
            'chekin'=>$data['checkin']
        ]);

        return redirect('/pendaftaran-pasien')->with('Data Pasien Berhasil Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_rm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HttpRequest $request, $id_rm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pendaftaran $pendaftaran)
    {
        //
    }
}
