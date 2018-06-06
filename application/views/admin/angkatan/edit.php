<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tahun Angkatan</a></li>
        <li><a href="#">Edit</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Tahun Angkatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Angkatan/update">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                  <div class="col-sm-10">
                    <input type="text" name="tahun" class="form-control" value="<?php echo $angkatan->Tahun_Angkatan ?>" id="inputEmail3" placeholder="Tahun Angkatan">
                    <input type="hidden" name="id_angkatan" class="form-control" value="<?php echo $angkatan->Id_Angkatan ?>" id="inputEmail3" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-danger" href="<?= base_url('Admin/Mapel')?>">Batal</a>
                <button type="submit" class="btn btn-info pull-right">Ubah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
