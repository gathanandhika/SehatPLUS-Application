@extends('apoteker.layouts.main')

@section('content')
<!-- Main content -->
{{-- Data Pasien --}}
<div class="box-body">
    <div class="row">
       <div class="col-md-6">
          <label>Id Rekam Medis</label>
          <div class="form-group">
             <input type="text" readonly class="form-control active" name="id_rm" value="">
          </div>
       </div>
       <div class="col-md-6">
          <label>Nama Pasien</label>
          <div class="form-group">
             <input type="text" readonly class="form-control active" name="nama_pasien" value="">

          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-6">
          <label>Jenis Kelamin</label>
          <div class="form-group">
             <input type="text" readonly class="form-control active" name="jk" value="">
          </div>
       </div>
       <div class="col-md-6">
          <label>Tanggal Lahir</label>
          <div class="form-group">
             <input type="text" readonly class="form-control active" name="ttl" value="">
          </div>
       </div>
   </div>
   <div class="form-group">
       <label for="keluhan">Keluhan</label>
       <textarea class="form-control" id="keluhan" rows="3" readonly></textarea>
   </div>
 </div>
<br>
{{-- Resep Obat --}}
 <div class="box box-primary">
    <div class="box-body">
        <table class="table table-responsive table-striped" id="table">
            <thead>
                <tr>
                <th style="border-radius: 0 0.5em 0 0">Nama Obat</th>
                <th style="border-radius: 0 0.5em 0 0">Jenis Obat</th>
                <th style="border-radius: 0 0.5em 0 0">Dosis</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tbody>
        </table>
    </div>

 </div><br>
 @endsection
