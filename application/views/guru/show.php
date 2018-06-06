<div class="content-wrapper">
    <section class="content">
      <div class="row">
   <div class="col-md-12">
          <!-- Horizontal Form -->
         <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">INPUT NILAI</h3>
            </div>
            <div class="box-body table-responsive">
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
            <table id="example1" class="table table-bordered table-striped responsive">
                <thead>
                <tr>
                  <th style="width: 10px">NO</th>
                  <th style="text-align: center;">Nama Siswa</th>
                  <th style="text-align: center;">NH1</th>
                  <th style="text-align: center;">NH2</th>
                  <th style="text-align: center;">NH3</th>
                  <th style="text-align: center;">NH4</th>
                  <th style="text-align: center;">Rata-Rata NH</th>
                  <th style="text-align: center;">UK1</th>
                  <th style="text-align: center;">UK2</th>
                  <th style="text-align: center;">UK3</th>
                  <th style="text-align: center;">UK4</th>
                  <th style="text-align: center;">Rata-Rata UK</th>
                  <th style="text-align: center;">UTS</th>
                  <th style="text-align: center;">UAS(P)</th>
                  <th style="text-align: center;">UAS(T)</th>
                  <th style="text-align: center;">Rata-Rata</th>
                  <th style="text-align: center;">Nilai Akhir</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                   <?php $no=0; foreach ($siswa as $data) { $no++ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data->Nama_Siswa ?></td>
                  <td style="text-align: center;"><?php echo $data->NH1 ?></td>
                  <td style="text-align: center;"><?php echo $data->NH2 ?></td>
                  <td style="text-align: center;"><?php echo $data->NH3 ?></td>
                  <td style="text-align: center;"><?php echo $data->NH4 ?></td>
                  <td style="text-align: center;"><?php
                    $NH4 = $data->NH4;
                    $NH3 = $data->NH3;
                    $NH2 = $data->NH2;
                    $NH1 = $data->NH1;

                    if ($data->NH4=='0') {
                        $RTNH = ($NH1+$NH2+$NH3)/3;
                    }
                    elseif ($data->NH3=='0') {
                        $RTNH = ($NH1 + $NH2 )/2;
                    }
                    elseif ($data->NH2=='0') {
                        $RTNH = $NH1;
                    }
                    else {
                        $RTNH = ($NH1 + $NH2 + $NH3 + $NH4)/4;
                    } 
                    echo round($RTNH,1);
                  ?></td>
                  <td style="text-align: center;"><?php echo $data->UK1 ?></td>
                  <td style="text-align: center;"><?php echo $data->UK2 ?></td>
                  <td style="text-align: center;"><?php echo $data->UK3 ?></td>
                  <td style="text-align: center;"><?php echo $data->UK4 ?></td>
                  <td style="text-align: center;">
                    <?php
                    $UK4 = $data->UK4;
                    $UK3 = $data->UK3;
                    $UK2 = $data->UK2;
                    $UK1 = $data->UK1;

                    if ($data->UK4=='0') {
                        $RTUK = ($UK1+$UK2+$UK3)/3;
                    }
                    elseif ($data->UK3=='0') {
                        $RTUK = ($UK1 + $UK2 )/2;
                    }
                    elseif ($data->UK2=='0') {
                        $RTUK = $UK1;
                    }else {
                        $RTUK = ($UK1 + $UK2 + $UK3 + $UK4)/4;
                    } 
                    
                    echo round($RTUK,1);
                  ?>
                  </td>
                  <td style="text-align: center;"><?php echo $data->UTS ?></td>
                  <td style="text-align: center;"><?php echo $data->UASP ?></td>
                  <td style="text-align: center;"><?php echo $data->UAST ?></td>
                  <td style="text-align: center;">
                    <?php
                    $UAST = $data->UAST;
                    $UASP = $data->UASP;
                    $RTUAS = ($UAST+$UASP)/2; 
                    echo round($RTUAS,1);
                  ?>
                  </td>
                  <td>
                    <?php
                    $NH4 = $data->NH4;
                    $NH3 = $data->NH3;
                    $NH2 = $data->NH2;
                    $NH1 = $data->NH1;

                    if ($data->NH4=='0') {
                        $RTNH = ($NH1+$NH2+$NH3)/3;
                    }
                    elseif ($data->NH3=='0') {
                        $RTNH = ($NH1 + $NH2 )/2;
                    }
                    
                    elseif ($data->NH2=='0') {
                        $RTNH = $NH1;
                    }
                    else {
                        $RTNH = ($NH1 + $NH2 + $NH3 + $NH4)/4;
                    } 
                    $UK4 = $data->UK4;
                    $UK3 = $data->UK3;
                    $UK2 = $data->UK2;
                    $UK1 = $data->UK1;


                    if ($data->UK4=='0') {
                        $RTUK = ($UK1+$UK2+$UK3)/3;
                    }
                    elseif ($data->UK3=='0') {
                        $RTUK = ($UK1 + $UK2 )/2;
                    }
                    elseif ($data->UK2=='0') {
                        $RTUK = $UK1;
                    }
                    else {
                        $RTUK = ($UK1 + $UK2 + $UK3 + $UK4)/4;
                    } 
                    $UTS = $data->UTS;
                    $UAST = $data->UAST;
                    $UASP = $data->UASP;
                    $RTUAS = ($UAST+$UASP)/2; 

                    $Hasil = ($RTNH+ ($RTUK*4) + $RTUAS + $UTS)/7;

                    echo round($Hasil,1);

                  ?>
                  </td>
                  <td> <a class="btn btn-info" href="<?php echo base_url(); ?>Guru/Dashboard/edit/<?php echo $data->Id_Nilai ?>"><i class="fa fa-edit"></i></a>
                    <a onclick='hapus("<?= $data->Id_Nilai?>")' class="btn btn-danger" href="#"><span class="fa fa-trash"></span></a></td>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.3.5/sweetalert2.all.min.js" type="text/javascript"></script>
 <script>
        function hapus(id=null) {
            if(id!=null) {
                swal({
                  title : "Apakah anda yakin ingin menghapus?",
                  text : "Data tidak akan kembali lagi.",
                  type : "warning",
                  showCancelButton : true,
                  confirmButtonColor : "#DD6B55",
                  confirmButtonText : "Ya",
                  cancelButtonText : "Batal",
                  closeOnConfirm : false,
                  closeOnCancel : true
                    }).then((result) => {
                  if (result.value) {
                    window.location.href = "<?php echo base_url(); ?>Guru/Dashboard/hapus/" + id;
                  }
                });
            }
        }
 
  </script> 