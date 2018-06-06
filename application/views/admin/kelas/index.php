<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kelas</a></li>
        <li><a href="#">kelas</a></li>
      </ol>
    </section> -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-building-o">&nbsp;</i>Data Kelas</h3>
            </div>
            <!-- /.box-header -->
          <div class="box-body">
              <div style="padding-bottom: 10px">
              <a style="margin-bottom:3px" href="<?php echo base_url(); ?>Admin/Kelas/tambah" class="btn bg-orange no-radius dropdown-toggle"><i class="fa fa-plus"></i> Tambah Kelas </a>
              </div>
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
                  <th>Nama Kelas</th>
                  <th>Wali</th>
                  <th>Pendamping 1</th>
                  <th>Pendamping 2</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                   <?php foreach ($kelas as $data) { ?>
                <tr>
                  <td><?php echo $data->Nama_Kelas ?></td>
                  <td><?php echo $data->Nama_Wali ?></td>
                  <td><?php echo $data->Nama_Pendamping1 ?></td>
                  <td><?php echo $data->Nama_Pendamping2 ?></td>
                  <td>
                    <a class=" btn btn-success" href="<?php echo base_url(); ?>Admin/Kelas/show/<?php echo $data->Id_Kelas ?>/<?php echo $data->Nama_Kelas ?>"><span class="fa fa-eye"></span></a>
                    <a class="btn btn-info" href="<?php echo base_url(); ?>Admin/Kelas/edit/<?php echo $data->Id_Kelas ?>"><span class="fa fa-pencil-square-o"></span></a>
                    <a onclick='hapus("<?= $data->Id_Kelas?>")' class="btn btn-danger" href="#"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                <?php } ?>
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
                    window.location.href = "<?php echo base_url(); ?>Admin/Kelas/hapus/" + id;
                  }
                });
            }
        }
 
    </script> 