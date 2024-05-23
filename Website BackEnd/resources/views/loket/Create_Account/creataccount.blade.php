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
             <form action="../../assets/database/pendaftaran/config_tambahpendaftaran.php" method="post">

                <div class="box-body">
                   <div class="row">
                    <div class="col-md-6">
                        <label for="id_rm" class="form-label">Id Rekammedis Pasien</label>
                        <select name="id_rm" class="form-control">
                           <option value="Jantan">Jantan</option>
                           <option value="Betina">Betina</option>
                        </select>
                     </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control text-capitalize" name="password" autocomplete="off" required />
                     </div>
                   </div>
                <!-- /.box-body -->

                <div class="box-footer">
                   <button type="submit" class="btn btn-primary">Buat Akun</button>
                   {{-- <a href="../pendaftaran/listpendaftaran.php" class=" btn btn-danger" role="button" title="Batal"> Batal</a> --}}
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
