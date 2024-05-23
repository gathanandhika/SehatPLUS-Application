@extends('kasir.layouts.main')

@section('content')
<section class="content">
    <!-- left column -->
    <!-- general form elements -->

    <form action="../../assets/database/transaksi/config_addtransaksi.php" method="post">
       <div class="box box-primary">
          <div class="box-header with-border">
             <h3 class="box-title">Data Transaksi</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

          <div class="box-body">
             <div class="row">
                <div class="col-md-6">
                   <label>Id Rekammedis</label>
                   <div class="input-group">
                      <input required type="text" id="idrekammedis" name="idrekammedis" class="form-control">
                      <input required type="hidden" id="idpasien" name="idpasien" class="form-control">
                      <input required type="hidden" id="idpemilik" name="idpemilik" class="form-control">
                      <span class="input-group-btn">
                         <button style="margin-left: 5px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalrekammedis">Cari</button>
                      </span>
                   </div>
                </div>
                <div class="col-md-6">
                   <label>Nama Pasien</label>
                   <div class="form-group">
                      <input type="text" readonly id="nama_pasien" class="form-control active" name="nama_pasien">
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-md-6">
                   <label>Jenis Kelamin</label>
                   <div class="form-group">
                      <input type="text" readonly id="jk" class="form-control active" name="jk">
                   </div>
                </div>
                <div class="col-md-6">
                   <label>Tanggal Lahir</label>
                   <div class="form-group">
                      <input type="text" readonly id="ttl" class="form-control active" name="ttl">
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-md-6">
                   <label>Tanggal Pemeriksaan</label>
                   <div class="form-group">
                      <input type="text" id="tgl_periksa" readonly class="form-control active" name="tgl_periksa">
                   </div>
                </div>
                <div class="col-md-6">
                   <label>Total Tagihan</label>
                   <div class="form-group">
                      <input type="text" id="tagihan" readonly class="form-control active" name="tagihan">
                   </div>
                </div>
             </div>
             <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
       </div><br>
    </form>
</div>
</section>
<!-- /.content -->
@endsection
