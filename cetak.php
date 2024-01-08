<body onLoad="javascript:window:print()">
<?php
include "koneksi.php"; 
include('inc/fungsi.php');
$page=$_GET[page];
$update=$_GET[update];
$act=$_GET[act];
$sql=mysql_query("select * from daftar_gaji where id_gaji='$_GET[id]'");
$r=mysql_fetch_array($sql);


?>
 <div align="center">
  <style type="text/css">
<!--
.style2 {font-size: 15px}
-->
</style>
  </head>
  <body>
  <img src="images/1.JPG" width="70%" height="100">
</div>

	   
	  
<div class="content_title_01">
  <h2 align="center">SLIP GAJI  </h2>
</div>
<div class='view'>
<table class='view' width='80%'>

<tr><td> NIP</td><td>: <?echo"$r[nip]";?></td></tr> 
<tr><td>Nama </td><td>: <?echo $r[nama];?></td></tr>
<tr><td>  Jabatan </td><td>: <?echo $r[jabatan];?></td></tr>	
<tr><td> Gaji Pokok</td><td>: <?php echo "Rp. ".format_rupiah($r[gaji]); ?></td></tr>	

<tr><td> Tunjangan</td><td>: <?php echo "Rp. ".format_rupiah($r[tunjangan]); ?></td></tr>
<tr><td> Potongan Absensi</td><td>: <?php echo "Rp. ".format_rupiah($r[absen]); ?></td></tr>
<tr><td> Total Gaji</td><td>: <?php echo "Rp. ".format_rupiah($r[gaji_bersih]); ?></td></tr>			   
</table>  
<br>
<br>
<br>
	<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="50%" bgcolor="#FFFFFF">
							  
								<p align="center"><br/>Diketahui,
								
								<br/>
								Kepala Administrasi
								<br/>
								<br/>
								<br/><br/>
								Seswa Marilina<br/>
								Nip : 19650802
								</td><td width="50%" bgcolor="#FFFFFF"><div align="center"> <?php $tgl = date('d M Y');
echo "Sawahlunto, $tgl";?><br/>Dibuat,
  <br/>Administrasi
  <br/><br/>
								<br/><br/>
								  Gustina Ningsih<br/>
								  Nip : 19650805
								  
								  </div></td>
</tr></table>
</div>	                           

