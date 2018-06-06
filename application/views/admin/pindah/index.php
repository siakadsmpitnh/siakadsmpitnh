<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <h1>
        Pindah Kelas
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pindah Kelas</a></li>
        <li><a href="#">Tambah</a></li>
      </ol>
    </section> -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-building-o">&nbsp;</i>Pindah Kelas</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Pindah/update">
              <div class="box-body">
                 <?php
            $pesan_sks = $this->session->flashdata('pesan_sks');
            $pesan_ggl = $this->session->flashdata('pesan_ggl');
            ?>
            <?php if (! empty($pesan_sks)) : ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="glyphicon glyphicon-ok"></i> Berhasil!</h4>
              <?php echo $pesan_sks ;?>
            </div>
            <?php endif ?>
            <?php if (! empty($pesan_ggl)) : ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
              <?php echo $pesan_ggl ;?>
            </div>
            <?php endif ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"  style="text-align: left;">Kelas Sebelum</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="kelas_sebelum" style="width: 100%;">
                      <?php foreach($kelas as $data){?>
                              <option value="<?php echo $data->Nama_Kelas ?>"><?php echo $data->Nama_Kelas ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"  style="text-align: left;">Kelas Sesudah</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="kelas_sesudah" style="width: 100%;">
                      <?php foreach($kelas as $data){?>
                              <option value="<?php echo $data->Nama_Kelas ?>"><?php echo $data->Nama_Kelas ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
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
