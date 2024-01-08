<body onLoad="javascript:window:print()">
<?php
include "koneksi.php"; 
include('inc/fungsi.php');
$page=$_GET[page];
$update=$_GET[update];
$act=$_GET[act];
$sql=mysql_query("select * from daftar_gaji where id_gaji='$_GET[id]'");
$r=mysql_fetch_array($sql);
$nm3=mysql_query("select * from tunj_fungsional where id_tunj_fungsional='$re[id_tunj_fungsional]'");
		$fg=mysql_fetch_array($nm3);

?>
<div class="content_title_01">
  <h2 align="center">SLIP GAJI GURU SMA 13 PADANG </h2>
</div>
<div class='view'>
<table class='view' width='80%'>

<tr><td> NIP</td><td>: <?echo"$r[nip]";?></td></tr> 
<tr><td>Nama </td><td>: <?echo $r[nama];?></td></tr>
<tr><td>  Jabatan </td><td>: <?echo $r[jabatan];?></td></tr>
<tr><td> Jabatan Fungsional</td><td>: <?echo$fg[nama_tunjangan];?></td></tr>	
<tr><td> Gaji Pokok</td><td>: <?php echo "Rp. ".format_rupiah($r[uang_lembur]); ?></td></tr>	
<tr><td> Tunjangan Fungsional</td><td>: <?php echo "Rp. ".format_rupiah($r[tunj_fungsional]); ?></td></tr>	
<tr><td> Tunjangan Hari Tua</td><td>: <?php echo "Rp. ".format_rupiah($r[tunj_hari_tua]); ?> </td></tr>
<tr><td> Tunjangan Kesehatan</td><td>: <?php echo "Rp. ".format_rupiah($r[tunj_kesehatan]); ?></td></tr>	
<tr><td> Potongan</td><td>: <?php echo "Rp. ".format_rupiah($r[potongan]); ?></td></tr>
<tr><td> Total Gaji</td><td>: <?php echo "Rp. ".format_rupiah($r[gaji_kotor]); ?></td></tr>			   
</table>  
</div>	                           

