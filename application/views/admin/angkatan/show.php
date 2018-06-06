<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">DATA Siswa Angkatan <?php echo $Tahun ?></h3>
            </div>
            <!-- /.box-header -->
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
                  <th style="text-align: center;width: 10px">NIPD</th>
                  <th>Tahun Angkatan</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                   <?php $no=0; foreach ($Siswa as $data) { $no++ ?>
                <tr>
                  <td><?php echo $data->NIPD ?></td>
                  <td><?php echo $data->Nama_Siswa ?></td>
                  <td>
                    <a class=" btn btn-success" href="<?php echo base_url(); ?>Admin/Siswa/show/<?php echo $data->Id_Siswa ?>"><span class="fa fa-eye"></span></a>
                    <a class="btn btn-info" href="<?php echo base_url(); ?>Admin/Siswa/edit/<?php echo $data->Id_Siswa ?>"><span class="fa fa-pencil-square-o"></span></a>
                    <a onclick='hapus("<?= $data->Id_Siswa?>")' class="btn btn-danger" href="#"><span class="fa fa-trash"></span></a>
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
                    window.location.href = "<?php echo base_url(); ?>Admin/Siswa/hapus/" + id;
                  }
                });
            }
        }
 
    </script> 