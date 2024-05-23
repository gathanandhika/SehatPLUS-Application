@extends('loket.layouts.main')

@section('content')
<section class="content">
    <div class="row">
       <!-- left column -->
       <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
             <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Pasien</h3>
             </div>
             <!-- /.box-header -->
             <!-- form start -->
             <form action="{{ url('daftar') }}" method="POST">
                @csrf
                <div class="box-body">
                   <div class="row">
                      <div class="col-md-6">
                         <label for="namapasien" class="form-label">Nama Pasien</label>
                         <input type="text" class="form-control text-capitalize" name="namapasien" autocomplete="off" required />
                      </div>

                      <div class="col-md-6">
                        <label for="poly" class="form-label">Poly</label>
                        <select name="poly" class="form-control">
                           <option value="Umum">Umum</option>
                           <option value="KIA">KIA</option>
                           <option value="Gigi">Gigi</option>
                           <option value="THT">THT</option>
                        </select>
                     </div>
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                        <label for="gejala" class="form-label">gejala</label>
                        <input type="text" class="form-control text-capitalize" name="gejala" autocomplete="off" required />
                     </div>
                     <div class="col-md-6">
                        <label for="tgl_pemeriksaan" class="form-label">Tanggal Pemeriksaan</label>
                        <input type="date" class="form-control text-capitalize" name="tgl_pemeriksaan" autocomplete="off" required />
                     </div>
                   </div>
                   <div class="row">
                        <div class="col-md-6">
                            <label for="checkin" class="form-label">Status</label>
                            <select name="checkin" class="form-control">
                            <option value="Sudah Checkin">Sudah Checkin</option>
                            <option value="Belum Checkin">Belum Checkin</option>
                            </select>
                        </div>
                   </div>
                    {{-- <div class="form-group">
                        <label for="alamat">Status</label>
                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                    </div> --}}
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <a href="../pendaftaran/listpendaftaran.php" class=" btn btn-danger" role="button" title="Batal"> Batal</a>
                </div>
             </form>
          </div>

       </div>
       <!--/.col (left) -->
       <!-- right column -->

       <!--/.col (right) -->
    </div>
    <!-- /.row -->
 </section>
 @endsection
