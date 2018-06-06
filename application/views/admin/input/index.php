<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kelas Guru</a></li>
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
              <h3 class="box-title"><i class="fa fa-table">&nbsp;</i>Input Nilai</h3>
            </div>
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">NO</th>
                  <th style="text-align: center;">Nama Guru</th>
                  <th style="text-align: center;">Nama Mata Pelajaran</th>
                  <th style="text-align: center;">Kelas</th>
                  <th style="text-align: center;">Pilihan</th>
                </tr>
                </thead>
                <tbody>
                   <?php $no=0; foreach ($kelas_guru as $data) { $no++ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data->Nama_Guru ?></td>
                  <td style="text-align: center;"><?php echo $data->Nama_Mapel ?></td>
                  <td style="text-align: center;"><?php echo $data->Nama_Kelas   ?></td>
                  <td style="text-align: center;">
                  <a href="<?php echo base_url(); ?>Admin/Input/tambah/<?php echo $data->Id_Kelas ?>/<?php echo $data->Id_Mapel ?>/<?php echo $data->Id_Guru ?>" class="btn btn-info"><i>Input Nilai</i></a>
                  <a href="<?php echo base_url(); ?>Admin/Input/show/<?php echo $data->Id_Kelas ?>" class="btn btn-success"><i>Lihat Nilai</i></a></a>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>