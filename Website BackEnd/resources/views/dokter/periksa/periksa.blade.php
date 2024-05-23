@extends('dokter.layouts.main')

@section('content')
<!-- Main content -->
<section class="content">
    <!-- left column -->
    <!-- general form elements -->
    <div class="box box-primary">
       <div class="box-header with-border">
          <h3 class="box-title">Pemeriksaan</h3>
       </div>
       <!-- /.box-header -->
       <!-- form start -->
       <form action="/periksa{{ $data->id_rm }}">
        @method('put')
        @csrf
        {{-- Data Pasien --}}
           <div class="box-body">
              <div class="row">
                 <div class="col-md-6">
                    <label>Id Rekam Medis</label>
                    <div class="form-group">
                       <input type="text" readonly class="form-control active @error('id_rm') is-invalid @enderror" name="id_rm" value="{{ old('id_rm', $data->id_rm) }}">
                       @error('id_rm')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                       <input type="hidden" hidden class="form-control active @error('poly') is-invalid @enderror" name="poly" value="{{ old('poly', $data->poly) }}">
                       @error('poly')
                            <div class="invalid-feedback"> {{ $message }} </div>
                       @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <label>Nama Pasien</label>
                    <div class="form-group">
                       <input type="text" readonly class="form-control active @error('nama') is-invalid @enderror" name="nama_pasien" value="{{ old('nama', $data->nama) }}">
                       @error('nama')
                            <div class="invalid-feedback"> {{ $message }} </div>
                       @enderror
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                    <label>Gejala</label>
                    <div class="form-group">
                       <input type="text" readonly class="form-control active @error('gejala') is-invalid @enderror" name="gejala" value="{{ old('gejala', $data->gejala) }}">
                       @error('gejala')
                            <div class="invalid-feedback"> {{ $message }} </div>
                       @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <label>Tanggal Lahir</label>
                    <div class="form-group">
                       <input type="text" readonly class="form-control active @error('tgl_periksa') is-invalid @enderror" name="tgl_periksa" value="{{ old('tgl_periksa', $data->tgl_periksa) }}">
                       @error('tgl_periksa')
                            <div class="invalid-feedback"> {{ $message }} </div>
                       @enderror
                       <input type="hidden" readonly class="form-control active" name="tgl_periksa" value="">
                    </div>
                 </div>
             </div>
             <div class="form-group">
                 <label for="keluhan">Keluhan</label>
                 <textarea class="form-control" id="keluhan" rows="3" readonly></textarea>
             </div>
           </div>

     {{-- Pemeriksaan --}}
     </div><br>
     <div class="box box-primary">
        <div class="box-body">
           <form action="../../assets/database/rekammedis/config_addrekammedis.php" method="post">
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                       <label>Berat Badan</label>
                       <input type="text" class="form-control active" name="bb">
                    </div>
                 </div>
                 <div class="col-md-6">
                    <label>Tinggi Badan</label>
                    <div class="form-group">
                       <input type="text" class="form-control active" name="tb">
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                       <label>Suhu</label>
                       <input type="number" class="form-control active" name="suhu">
                    </div>
                 </div>
                 <div class="col-md-6">
                    <label>Tekanan Darah</label>
                    <div class="form-group">
                       <input type="number" class="form-control active" name="tekanan_darah">
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                       <label>Detak Jantung</label>
                       <input type="text" class="form-control active" name="detak_jantung">
                    </div>
                 </div>
                 <div class="col-md-6">
                    <label>Diagnosa</label>
                    <div class="form-group">
                       <input type="text" class="form-control active" name="diagnosa">
                    </div>
                 </div>
              </div>
              <br>
              <br>

              {{-- pemeriksaan khusus --}}
              <div class="row">
                 <div class="col-md-12">
                    <h4 class="box-title">Tindakan Khusus</h4>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="namaobat" class="form-label">Jenis Tindakan</label>
                          <select name="jeniskelaminpemilik" class="form-control" id="namaobat">
                             <option value="Laki-laki">Suntik</option>
                             <option value="Perempuan">Pemberian Obat</option>
                          </select>
                    </div>
                 </div>

                 {{-- Resep Obat --}}
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="jenisobat" class="form-label">Jenis Obat</label>
                          <select name="jeniskelaminpemilik" class="form-control" id="jenisobat">
                             <option value="Laki-laki">Paracetamol</option>
                             <option value="Perempuan">mkad</option>
                          </select>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                       <label for="dosis" class="form-label">Dosis</label>
                          <input type="text" class="form-control active" name="dosis" id="dosis">
                    </div>
                 </div>
                 <div class="col-md-3">
                    <div class="form-group">
                       <input type="button" id="submit" value="Tambah">
                    </div>
                 </div>
              </div>
              <table class="table table-responsive table-striped" id="table">
                 <tr>
                    <th style="border-radius: 0 0.5em 0 0">Nama Obat</th>
                    <th style="border-radius: 0 0.5em 0 0">Jenis Obat</th>
                    <th style="border-radius: 0 0.5em 0 0">Dosis</th>
                    <th style="border-radius: 0 0.5em 0 0">Aksi</th>
                 </tr>
              </table>
        </div>
        <div class="box-footer">
           <button type="submit" class="btn btn-primary">Simpan</button>
           <a href="../pendaftaran/listpendaftaran.php" class=" btn btn-danger" role="button" title="Batal"> Batal</a>
        </div>
        </form>
     </div><br>
     <div class="box box-primary">
        <div class="box-header with-border">
           <h3 class="box-title">Resep Obat</h3>
        </div>
        <div class="box-body">
           <form action="../../assets/database/rekammedis/config_addresepobat.php">
              <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                       <label>Obat</label>
                       <select class="form-control select2" id="id_obat" name="idobat" onchange="changeValue(this.value)" style="width: 100%;">
                          <option selected="selected">Pilih Obat</option>
                       </select>
                    </div>
                 </div>
                 <div class="col-md-3">

                    <div class="form-group">
                       <label>Harga</label>
                       <input type="number" id="hargaobat" readonly class="form-control" name="hargaobat">
                    </div>
                 </div>
                 <div class="col-md-3">

                    <div class="form-group">
                       <label>Jumlah</label>
                       <input type="number" onkeyup="" id="jumlah" class="form-control" name="jumlah">
                    </div>
                 </div>
                 <div class="col-md-3">

                    <div class="form-group">
                       <label>Sub Total</label>
                       <input type="number" readonly class="form-control" name="subtotal" id="subtotal">
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-4"></div>
                 <div class="col-md-2"></div>
                 <div class="col-md-4"> <button id="inputdetail" style="margin-left: 290px;" class="btn btn-primary">Tambah Obat</button></div>
              </div>
           </form>
           <br>
           <table class="table table-responsive table-striped">
              <thead>
                 <tr>
                    <th style="border-radius: 0.5em 0 0 0">No</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th style="border-radius: 0 0.5em 0 0">Harga</th>
                    <th style="border-radius: 0 0.5em 0 0">Action</th>
                 </tr>
              </thead>
              <tbody>
                    <tr>
                       <td>1</td>
                       <td>2</td>
                       <td>3</td>
                       <td>4</td>
                       <td> <a href="#" data-toggle="modal" data-target="#ModalUbahDetail" id="" class="ubahdetail btn btn-sm btn-success" role="button" title="Ubah"> <i class="fa fa-pencil"> </i> Ubah</a> <a href="#" data-toggle="modal" data-target="#ModalHapusDetail" id="" class="hapusdetail btn btn-sm btn-danger" role="button" title="Hapus"> <i class="fa fa-trash"> </i> Hapus</a></td>
                    </tr>
              </tbody>
              <tfoot>
              </tfoot>
           </table>
        </div>
       </form>
    </div>

 </section>
 <!-- /.content -->
@endsection
