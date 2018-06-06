
<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>

<h1 style="text-align: center;"></h1>

<style>

p.small{
    line-spacing : single;
}

</style>



<table>
          <tr>
            <td width='80'>&nbsp;</td>
            <td><img src="<?php echo base_url(); ?>assets/logo.png" height='80'></td>
            <td width='20'></td>
            <td>
              <b>Sekolah Menengah Pertama Islam Terpadu Nur Hidayah</b><br>
              Jl. Kahuripan Utara Sumber Banjarsari Kota Surakarta , Jawa Tengah 57138<br>
              Telp. (0271)-743416 Email: smpit@nurhidayah.sch.id Website: SMPIT Nur Hidayah
            </td>
          </tr>
        </table>


        <div align='center'><h3><hr><br>Data Nilai</h3></div>
        <br>
        <br>
        <table>
          <tr width='100'>
            <td width='100'></td>
            <td width='100'><b>Mata Pelajaran</b></td>
            <td width='5'>:</td>
            <td><?php echo $data->Nama_Mapel ?></td>
          </tr> 
          <tr width='100'>
            <td width='100'></td>
            <td width='100'><b>Nama Siswa</b></td>
            <td width='5'>:</td>
            <td><?php echo $data->Nama_Siswa ?></td>
          </tr>
          <tr valign='top'>
            <td width='100'></td>
            <td width='100'><b>Kelas</b></td>
            <td width='5'>:</td>
            <td><?php echo $data->Nama_Kelas ?></td>
          </tr>
          <tr valign='top'>
            <td width='100'></td>
            <td width='100'><b>Semester</b></td>
            <td width='5'>:</td>
            <td><?php echo $data->Tahun_Akademik ?></td>
          </tr>
        </table>

         <br>
        <br>
        <br>
        <table cellpadding=0 cellspacing=0>
          <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'></th>
            <th align='center' width='200' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'>Nilai</th>
          </tr>
        <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai Harian 1</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->NH1 ?></th>   
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai Harian 2</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->NH2 ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai Harian 3</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->NH3 ?></th>
     </tr>
      <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
             <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai Harian 4</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->NH4 ?></th>
     </tr>
      <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Rata-Rata</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php
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
                  ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai UKD 1</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UK1 ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai UKD 2</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UK2 ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai UKD 3</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UK3 ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai UKD 4</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UK4 ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Rata-Rata UKD</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php
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
                  ?></th>
     </tr>
      <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>UTS</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UTS ?></th>
     </tr>
      <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>UAS (Tertulis)</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UAST ?></th>
     </tr>
      <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>UAS (Praktek)</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->UASP ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Rata - Rata</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'> <?php
                    $UAST = $data->UAST;
                    $UASP = $data->UASP;
                    $RTUAS = ($UAST+$UASP)/2; 
                    echo round($RTUAS,1);
                  ?></th>
     </tr>
     <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'>Nilai Akhir</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php
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

                  ?></th>
     </tr>

          

</table>
<br>

<br>



</body>
</html>
