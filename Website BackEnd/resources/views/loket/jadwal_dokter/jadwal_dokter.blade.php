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
                         <th>Nama Pasien</th>
                         <th>Jenis Hewan</th>
                         <th style="border-radius: 0 0.5em 0 0">Jenis Kelamin</th>
                         <th style="border-radius: 0 0.5em 0 0">Umur (Tahun)</th>
                         <th style="border-radius: 0 0.5em 0 0">Singalemen</th>
                         <th style="border-radius: 0 0.5em 0 0">Aksi</th>
                      </tr>
                   </thead>
                   <tbody>
                         <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                         </tr>
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
