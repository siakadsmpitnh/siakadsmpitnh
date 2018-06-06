<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Kelas/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_kelas" class="form-control" value="<?php echo $kelas->Nama_Kelas ?>" id="inputEmail3" placeholder="nama kelas">
                    <input type="hidden" name="id_kelas" class="form-control" value="<?php echo $kelas->Id_Kelas ?>" id="inputEmail3" placeholder="nama kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Wali</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="nama_wali" style="width: 100%;">
                      <?php foreach($guru as $waliku){
                            //if(!in_array($lok['id_lokasi'],$label_post)){
                            if($waliku->Nama_Guru !=$walisaja){
                              ?>
                              <option value="<?php echo $waliku->Nama_Guru ?>"><?php echo $waliku->Nama_Guru ?></option>
                              <?php } else { ?>
                              <option selected="selected" value="<?php echo $waliku->Nama_Guru ?>"><?php echo $waliku->Nama_Guru ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pendamping 1</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="Nama_Pendamping1" style="width: 100%;">
                      <?php foreach($guru as $waliku){
                            //if(!in_array($lok['id_lokasi'],$label_post)){
                            if($waliku->Nama_Guru !=$pendamping1ku){
                              ?>
                              <option value="<?php echo $waliku->Nama_Guru ?>"><?php echo $waliku->Nama_Guru ?></option>
                              <?php } else { ?>
                              <option selected="selected" value="<?php echo $waliku->Nama_Guru ?>"><?php echo $waliku->Nama_Guru ?></option>
                              <?php } } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pendamping 2</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="Nama_Pendamping2" style="width: 100%;">
                      <?php foreach($guru as $waliku){
                            //if(!in_array($lok['id_lokasi'],$label_post)){
                            if($waliku->Nama_Guru !=$pendamping2ku){
                              ?>
                              <option value="<?php echo $waliku->Nama_Guru ?>"><?php echo $waliku->Nama_Guru ?></option>
                              <?php } else { ?>
                              <option selected="selected" value="<?php echo $waliku->Nama_Guru ?>"><?php echo $waliku->Nama_Guru ?></option>
                              <?php } } ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-danger" href="<?= base_url('Admin/Kelas')?>">Batal</a>
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
