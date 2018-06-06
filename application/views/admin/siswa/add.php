<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Siswa/add">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">NIPD</label>
                  <div class="col-sm-10">
                    <input type="text" name="nipd" class="form-control" id="inputEmail3" placeholder="NIPD" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">NISN</label>
                  <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control" id="inputEmail3" placeholder="NISN">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Tahun Angkatan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="tahun" style="width: 100%;">
                        <option value="" selected disabled>--Pilih Angkatan--</option>
                      <?php foreach($tahun as $angkatan){?>
                              <option value="<?php echo $angkatan->Tahun_Angkatan ?>"><?php echo $angkatan->Tahun_Angkatan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Jenis Kelamin</label>
                  <div class="col-sm-10">
                     <select name="jenis_kelamin" class="form-control" required>
                          <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">TTL</label>
                  <div class="col-sm-6">
                    <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <input type="text" name="tempat" class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                  </div>
                </div>
                  <div class="col-sm-4">
                    <div class="input-group date">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                        <input type="text" name="tanggal" class="form-control pull-right" id="datepicker" placeholder="Masukkan Tanggal Lahir">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Alamat</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Masukkan Alamat">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-danger" href="<?= base_url('Admin/Siswa')?>">Batal</a>
                <button type="submit" class="btn btn-info pull-right">Tambahkan</button>
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
