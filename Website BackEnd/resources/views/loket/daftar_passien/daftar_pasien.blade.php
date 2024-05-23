@extends('loket.layouts.main')

@section('content')
<section class="content">
    <div class="row">
       <div class="col-xs-12">


          <div class="box">

             <div class="box-header">
                <div class="row" style="padding-top: 0px;">
                   <div class="col-md-5"></div>
                   <div class="col-md-4">
                      <h3>DAFTAR PASIEN</h3>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6"></div>
                   <div class="col-md-6">
                      <a href="tambahpendaftaran.php" style="margin-left: 540px;" class="btn btn-sm btn-success" role="button" title="Tambah"> Tambah</a>
                   </div>
                </div>
             </div>
             <!-- /.box-header -->
             <div class="box-body">
                <table class="table table-responsive table-striped">
                   <thead>
                      <tr>
                         <th style="border-radius: 0.5em 0 0 0">No</th>
                         <th>Id Rekammedis</th>
                         <th>Poly</th>
                         <th>Nama Pasien</th>
                         <th>Gejala</th>
                         <th style="border-radius: 0 0.5em 0 0">Tanggal Periksa</th>
                         <th style="border-radius: 0 0.5em 0 0">Status</th>
                      </tr>
                   </thead>
                   <tbody>
                        @foreach ($pasien as $data)
                        <tr class="odd">
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $data->id_rm }} </td>
                            <td> {{ $data->poly }} </td>
                            <td> {{ $data->nama }} </td>
                            <td> {{ $data->gejala }} </td>
                            <td> {{ $data->tgl_periksa }} </td>
                            <td> {{ $data->chekin }} </td>
                        </tr>
                        @endforeach
                   </tbody>
                </table>
             </div>
             <!-- /.box-body -->
          </div>
          <!-- /.box -->
       </div>
       <!-- /.col -->
    </div>
    <!-- /.row -->
 </section>
@endsection
