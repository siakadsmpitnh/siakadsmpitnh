<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Mapel/update">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_mapel" class="form-control" value="<?php echo $mapel->Nama_Mapel ?>" id="inputEmail3" placeholder="Nama Mata Pelajaran">
                    <input type="hidden" name="id_mapel" class="form-control" value="<?php echo $mapel->Id_Mapel ?>" id="inputEmail3" placeholder="">
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
