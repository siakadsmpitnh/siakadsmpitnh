<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">SISWA KELAS <?php echo $kelas ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIPD</th>
                  <th>Nama</th>
                </tr>
                </thead>
                <tbody>
                   <?php foreach ($siswa as $data) { ?>
                <tr>
                  <td><?php echo $data->NIPD ?></td>
                  <td><?php echo $data->Nama_Siswa ?></td>
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