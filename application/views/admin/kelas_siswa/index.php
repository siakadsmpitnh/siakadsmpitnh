<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kelas Siswa</a></li>
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
               <h3 class="box-title"><i class="fa fa-building-o">&nbsp;</i> Tambah Kelas Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Kelas_Siswa/add">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pilih Siswa</label>
                  <div class="col-sm-10">
                   <select class="form-control select2" name="nama" style="width: 100%;">
                      <?php foreach($siswa as $data){?>
                              <option value="<?php echo $data->NIPD ?>">[<?php echo $data->NIPD ?>]&nbsp;&nbsp;<?php echo $data->Nama_Siswa ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pilih Kelas</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="kelas" style="width: 100%;">
                      <?php foreach($kelas as $data){?>
                              <option value="<?php echo $data->Nama_Kelas ?>"><?php echo $data->Nama_Kelas ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div style="text-align: center;">
                <button type="submit" class="btn btn-info" style="text-align: center;">Tambahkan</button>
              </div>
              <!-- /.box-footer -->
            </form>
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
                  <th>NIPD</th>
                  <th style="text-align: center;">Nama Siswa</th>
                  <th style="text-align: center;">Kelas</th>
                  <th style="text-align: center;">Pilihan</th>
                </tr>
                </thead>
                <tbody>
                   <?php $no=0; foreach ($kelas_siswa as $data) { $no++ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data->nip ?></td>
                  <td><?php echo $data->nama ?></td>
                  <td style="text-align: center;"><?php echo $data->Kelas_Siswa ?></td>
                  <td style="text-align: center;">
                    <!-- <a class=" btn btn-success" href="<?php echo base_url(); ?>Admin/Siswa/show/<?php echo $data->Id_Siswa ?>"><span class="fa fa-eye"></span></a>
                    <a class="btn btn-info" href="<?php echo base_url(); ?>Admin/Siswa/edit/<?php echo $data->Id_Siswa ?>"><span class="fa fa-pencil-square-o"></span></a> -->
                    <a onclick='hapus("<?= $data->Id_Siswa?>")' class="btn btn-danger" href="#"><span class="fa fa-trash"></span></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.3.5/sweetalert2.all.min.js" type="text/javascript"></script>
 <script>
        function hapus(id=null) {
            if(id!=null) {
                swal({
                  title : "Apakah anda yakin ingin menghapus?",
                  text : "Data tidak akan kembali lagi.",
                  type : "warning",
                  showCancelButton : true,
                  confirmButtonColor : "#DD6B55",
                  confirmButtonText : "Ya",
                  cancelButtonText : "Batal",
                  closeOnConfirm : false,
                  closeOnCancel : true
                    }).then((result) => {
                  if (result.value) {
                    window.location.href = "<?php echo base_url(); ?>Admin/Siswa/hapus/" + id;
                  }
                });
            }
        }
 
  </script> 