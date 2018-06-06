<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Nilai <?php echo $data->Nama_Siswa ?>( <?php echo $data->Nama_Mapel ?>)</h3>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Input/save">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" value="<?php echo $data->Nama_Siswa ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh1" class="form-control" id="inputEmail3" value="<?php echo $data->NH1 ?>">
                    <input type="hidden" name="id" class="form-control" id="inputEmail3" value="<?php echo $data->Id_Nilai ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh2" class="form-control" value="<?php echo $data->NH2 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh3" class="form-control" id="inputEmail3" value="<?php echo $data->NH3 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai Harian 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="nh4" class="form-control" id="inputEmail3" value="<?php echo $data->NH4 ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk1" class="form-control" id="inputEmail3" value="<?php echo $data->UK1 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk2" class="form-control" id="inputEmail3" value="<?php echo $data->UK2 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk3" class="form-control" id="inputEmail3" value="<?php echo $data->UK3 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UKD 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="uk4" class="form-control" id="inputEmail3" value="<?php echo $data->UK4 ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UTS</label>
                  <div class="col-sm-10">
                    <input type="text" name="uts" class="form-control" id="inputEmail3" value="<?php echo $data->UTS ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UAS Tertulis</label>
                  <div class="col-sm-10">
                    <input type="text" name="uast" class="form-control" id="inputEmail3" value="<?php echo $data->UAST ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left;">Nilai UAS Praktek</label>
                  <div class="col-sm-10">
                    <input type="text" name="uasp" class="form-control" id="inputEmail3" value="<?php echo $data->UASP ?>">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
                <a class="btn btn-danger" href="<?= base_url('Admin/Input')?>">Batal</a>
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
