<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">INPUT NILAI SISWA KELAS <?php echo $kelas ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Guru/Dashboard/savedata">
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
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">NIPD</label>
                  <div class="col-sm-10">
                   <select class="form-control select2" name="nipd" style="width: 100%;">
                      <?php foreach($siswa as $data){?>
                              <option value="<?php echo $data->NIPD ?>">[<?php echo $data->NIPD ?>] <?php echo $data->Nama_Siswa ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh1" class="form-control" id="inputEmail3" placeholder="Nilai Harian 1">
                    <input type="hidden" name="kelas" class="form-control" id="inputEmail3" value="<?php echo $kelas ?>">
                    <input type="hidden" name="guru" class="form-control" id="inputEmail3" value="<?php echo $guru ?>">
                    <input type="hidden" name="mapel" class="form-control" id="inputEmail3" value="<?php echo $mapel ?>">
                    <input type="hidden" name="kelas_id" class="form-control" id="inputEmail3" value="<?php echo $kelas_id ?>">
                    <input type="hidden" name="guru_id" class="form-control" id="inputEmail3" value="<?php echo $guru_id ?>">
                    <input type="hidden" name="mapel_id" class="form-control" id="inputEmail3" value="<?php echo $mapel_id ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh2" class="form-control" id="inputEmail3" placeholder="Nilai Harian 2">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh3" class="form-control" id="inputEmail3" placeholder="Nilai Harian 3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh4" class="form-control" id="inputEmail3" placeholder="Nilai Harian 4">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk1" class="form-control" id="inputEmail3" placeholder="Nilai UKD 1">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk2" class="form-control" id="inputEmail3" placeholder="Nilai UKD 2">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk3" class="form-control" id="inputEmail3" placeholder="Nilai UKD 3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk4" class="form-control" id="inputEmail3" placeholder="Nilai UKD 4">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UTS</label>
                  <div class="col-sm-10">
                    <input type="text" name="uts" class="form-control" id="inputEmail3" placeholder="Nilai UTS">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UAS Tertulis</label>
                  <div class="col-sm-10">
                    <input type="text" name="uast" class="form-control" id="inputEmail3" placeholder="Nilai UAS Tertulis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UAS Praktek</label>
                  <div class="col-sm-10">
                    <input type="text" name="uasp" class="form-control" id="inputEmail3" placeholder="Nilai UAS Praktek">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambahkan</button>
                <a class="btn btn-danger" href="<?= base_url('Guru/Dashboard')?>">Kembali</a>
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
