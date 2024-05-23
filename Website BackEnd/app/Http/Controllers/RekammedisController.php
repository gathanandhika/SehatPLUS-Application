<?php

namespace App\Http\Controllers;

use App\Models\rekammedis;
use App\Http\Requests\StorerekammedisRequest;
use App\Http\Requests\UpdaterekammedisRequest;
use App\Models\pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;

class RekammedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_rm)
    {
        $data = pendaftaran::findOrFail($id_rm);
        dd($data);
        // return view('dokter.periksa.periksa', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_rm' => 'required',
            'poly' => 'required',
            'tgl_periksa' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'suhu' => 'required',
            'tekanan_darah' => 'required',
            'detak_jantung' => 'required',
            'diagnosa' => 'required',
            'namaobat' => 'required',
            'dosis' => 'required',
        ]);

        rekammedis::create([
            'id_rm' => $data['id_rm'],
            'poly' => $data['poly'],
            'tgl_periksa' => $data['tgl_periksa'],
            'bb' => $data['bb'],
            'tb' => $data['tb'],
            'suhu' => $data['suhu'],
            'tekanan_darah' => $data['tekanan_darah'],
            'detak_jantung' => $data['detak_jantung'],
            'diagnosa' => $data['diagnosa'],
            'obat' => $data['namaobat'],
            'dosis' => $data['dosis'],
        ]);

        return redirect('/dokter')->with('Data Rekammedis Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(rekammedis $rekammedis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rekammedis $rekammedis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterekammedisRequest $request, rekammedis $rekammedis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rekammedis $rekammedis)
    {
        //
    }
}
