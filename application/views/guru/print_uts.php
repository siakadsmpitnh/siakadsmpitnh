
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
            <td width='100'><b>Mata Pelajaran</b></td>
            <td width='5'>:</td>
            <td><?php echo $mapel1 ?></td>
          </tr>
          <tr valign='top'>
            <td width='100'></td>
            <td width='100'></td>
            <td width='100'></td>
            <td width='100'><b>Kelas</b></td>
            <td width='5'>:</td>
            <td><?php echo $kelas1 ?></td>
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
            <th align='center' width='100' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'>NIPD</th>
            <th align='center' width='200' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'>Nama Siswa</th>
            <th align='center' width='100' style='border:1px solid #000; background-color: #9CCC68; padding: 2px;'>UTS </th>
          </tr>
          <?php foreach ($data1 as $data) { ?>
          <tr>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='50'>&nbsp;&nbsp;</th>
            <th width='100'>&nbsp;&nbsp;</th>
            <th align='center' width='200' style='border:1px solid #000; padding: 2px;'><?php echo $data->NIPD ?></th>
            <th align='center' width='100' style='border:1px solid #000; padding: 2px;'><?php echo $data->Nama_Siswa ?></th>
            <th align='center' width='100' style='border:1px solid #000; padding: 2px;'><?php echo $data->UTS ?></th>
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
              <td align='center'>Paraf Guru<p>&nbsp;</p><br><br><br><?php echo $gurunya ?><br><br>
              NIY.<b></b></td>
          </tr>
      </table>
<br>

<br>



</body>
</html>
