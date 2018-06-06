<div class="content-wrapper">
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">NIPD</label>
                  <div class="col-sm-10">
                    <input type="text" name="nipd" class="form-control" id="inputEmail3" value="<?php echo $Siswa->NIPD ?>" placeholder="Belum Diisi" readonly>
                     <input type="hidden" name="id_siswa" class="form-control" id="inputEmail3" value="<?php echo $Siswa->Id_Siswa ?>" placeholder="Belum Diisi">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">NISN</label>
                  <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control" id="inputEmail3" value="<?php echo $Siswa->NISN ?>" placeholder="Belum Diisi" readonly>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" value="<?php echo $Siswa->Nama_Siswa ?>" placeholder="Belum Diisi" readonly>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Tahun Angkatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" value="<?php echo $Siswa->Tahun_Angkatan ?>" placeholder="Belum Diisi" readonly>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Jenis Kelamin</label>
                  <div class="col-sm-10">
                     <input type="text" name="nama" class="form-control" id="inputEmail3" value="<?php echo $Siswa->Jenis_Kelamin ?>" placeholder="Belum Diisi" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">TTL</label>
                  <div class="col-sm-6">
                    <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <input type="text" name="tempat" class="form-control" value="<?php echo $Siswa->Tempat_Lahir ?>" id="inputEmail3" placeholder="Belum Diisi" readonly>
                  </div>
                </div>
                  <div class="col-sm-4">
                    <div class="input-group date">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                        <input type="text" name="tanggal" class="form-control pull-right" value="<?php echo $Siswa->Tanggal_Lahir ?>" id="datepicker" placeholder="Belum Diisi" readonly>
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
                    <input type="text" name="alamat" class="form-control" value="<?php echo $Siswa->Alamat ?>" id="inputEmail3" placeholder="Belum Diisi" readonly>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-danger" href="<?= base_url('Admin/Siswa')?>">Kembali</a>
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
