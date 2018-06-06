
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
            <td width='250'></td>
            <td><img src="<?php echo base_url(); ?>assets/logo.png" height='80'></td>
            <td width='20'></td>
           <td>
              <b>Sekolah Menengah Pertama Islam Terpadu Nur Hidayah</b><br>
              Jl. Kahuripan Utara Sumber Banjarsari Kota Surakarta , Jawa Tengah 57138<br>
              Telp. (0271)-743416 Email: smpit@nurhidayah.sch.id Website: SMPIT Nur Hidayah
            </td>
          </tr>
        </table>
        <hr><br><br>
        <div align='center'><h3>Laporan Nilai Ujian Tengah Semester</h3></div>
<table>
         <tr width='100'>
            <td width='100'></td>
            <td width='100'></td>
            <td width='100'></td>
            <td width='100'><b>Nama Siswa</b></td>
            <td width='5'>:</td>
            <td><?php echo $siswa ?></td>
          </tr>
          <tr valign='top'>
            <td width='100'></td>
            <td width='100'></td>
            <td width='100'></td>
            <td width='100'><b>Tahun Ajaran</b></td>
            <td width='5'>:</td>
            <td><?php echo $tahun1 ?></td>
          </tr>
          
</table>
<br>
<br>
  <table cellpadding=0 cellspacing=0>
       <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='100'>&nbsp;&nbsp;</th>
            <th align='center' width='100'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'>Nama Mapel</th>
            <th align='center' width='100' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'>Nilai Akhir </th>
          </tr>
          <?php foreach ($anak as $data) { ?>
          <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='100'>&nbsp;&nbsp;</th>
            <th align='center' width='100'>&nbsp;&nbsp;</th>
            <th align='center' width='100' style='border:1px solid #000; padding: 2px;'><?php echo $data->Nama_Mapel ?></th>
            <th align='center' width='100' style='border:1px solid #000; padding: 2px;'><?php
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
      	<?php } ?>
  </table>

   <p>&nbsp;</p>
        <br>
        <br>
        <br>
        <br>
        <br>
      <table>
          <tr>
              <td width='700'></td>
              <td align='center'>Paraf Wali<p>&nbsp;</p><br><br><br><?php echo $wali ?><br><br>
              NIY.<b></b></td>
          </tr>
      </table>
<br>

<br>



</body>
</html>
