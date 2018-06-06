<div class="content-wrapper">
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Guru/update">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Induk</label>
                  <div class="col-sm-10">
                    <input type="text" name="nipd" class="form-control" value="<?php echo $guru->NIP ?>" id="inputEmail3" placeholder="-" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_guru" class="form-control" value="<?php echo $guru->Nama_Guru ?>" id="inputEmail3" placeholder="-" readonly>
                    <input type="hidden" name="id_guru" class="form-control" value="<?php echo $guru->Id_Guru ?>" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_guru" class="form-control" value="<?php echo $guru->Jenis_Kelamin ?>" id="inputEmail3" placeholder="-" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kontak</label>
                  <div class="col-sm-10">
                    <input type="text" name="kontak" class="form-control" value="<?php echo $guru->Kontak ?>" id="inputEmail3" placeholder="-" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" value="<?php echo $guru->Alamat ?>" id="inputEmail3" placeholder="-" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" value="<?php echo $guru->username ?>" id="inputEmail3" placeholder="-" readonly>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-danger" href="<?= base_url('Admin/Guru')?>">Kembali</a>
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
