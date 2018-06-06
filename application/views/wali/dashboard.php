<section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
            <div class="box-header callout callout-success">
             <h3 class="box-title">
             <i class="fa fa-building-o"> &nbsp;<b>Data Siswa Kelas <?php echo $kelas ?> Tahun Akademik <?php echo $tahun ?></b>

             </i></h3>
            </div>
                 <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th style="text-align: center;">No</th>
                          <th style="text-align: center;">Nama Siswa</th>
                          <th style="text-align: center;">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=0; foreach ($siswa as $data) { $no++; ?>
                      <tr>
                        <td style="text-align: center;"><?php echo $no; ?></td>
                        <td><?php echo $data->Nama_Siswa ?></td>
                        <td align="center">
                          <a href="<?php echo base_url(); ?>Wali/Dashboard/lihat/<?php echo $data->NIPD ?>" class="btn btn-success"><i>Lihat Nilai</i>
                          </a>
                           <a href="<?php echo base_url(); ?>Wali/Dashboard/cetak1/<?php echo $data->NIPD ?>" class="btn btn-warning"><i>Cetak Laporan</i>
                           </a>
                          </a>
                        </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
           </div>
       </div>
    </div>
</section>
