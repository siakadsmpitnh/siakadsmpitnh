<section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
            <div class="box-header callout callout-success">
             <h3 class="box-title"><i class="fa fa-building-o">&nbsp;</i>Daftar Kelas Ajar </h3>
           </div>
         <table id="example3" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>Nama Mata Pelajaran</th>
                  <th>Nama Kelas</th>
                  <th>Nilai</th>
                  <th>Cetak</th>
                </tr>
            </thead>
              <tbody>
                <?php foreach ($data_kelas as $data) {?>
                <tr>
                <td><?php echo $data->Nama_Mapel ?></td>
                <td><?php echo $data->Nama_Kelas ?></td>
                <td align="center">
                 <a href="<?php echo base_url(); ?>Guru/Dashboard/tambah/<?php echo $data->Id_Kelas ?>/<?php echo $data->Id_Mapel ?>/<?php echo $data->Id_Guru ?>" class="btn btn-info"><i>Input Nilai</i>
                 </a>
                  <a href="<?php echo base_url(); ?>Guru/Dashboard/show/<?php echo $data->Id_Kelas ?>" class="btn btn-success"><i>Lihat Nilai</i>
                  </a>
                </td>
                <td>
                  <a href="<?php echo base_url(); ?>Guru/Dashboard/cetak_nh/<?php echo $data->Id_Kelas ?>/<?php echo $data->Id_Mapel ?>" class="btn btn-warning"><i>Nilai Harian</i>
                 </a>
                   <a href="<?php echo base_url(); ?>Guru/Dashboard/cetak_uk/<?php echo $data->Id_Kelas ?>/<?php echo $data->Id_Mapel ?>" class="btn btn-warning"><i>Nilai UKD</i>
                 </a>
                  </a>
                   <a href="<?php echo base_url(); ?>Guru/Dashboard/cetak_uts/<?php echo $data->Id_Kelas ?>/<?php echo $data->Id_Mapel ?>" class="btn btn-warning"><i>Nilai UTS</i>
                 </a>
                  <a href="<?php echo base_url(); ?>Guru/Dashboard/cetak_akhir/<?php echo $data->Id_Kelas ?>/<?php echo $data->Id_Mapel ?>" class="btn btn-warning"><i>Nilai Akhir</i>
                 </a>
                </td>
                </tr>
              <?php } ?>
        </table>





     </div>
   </div>
 </div>
</section>