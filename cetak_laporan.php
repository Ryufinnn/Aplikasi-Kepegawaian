<body onLoad="javascript:window:print()">
<?php
include('koneksi.php');
include('inc/fungsi.php');
//query
$sql=mysql_query("select * from daftar_gaji
where tanggal like '$_POST[bln]%' order by id_gaji asc") or die
(mysql_error());
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



	   <p align="center">Bulan : <?php echo bln_indonesia($_POST[bln]);?></p>
<table width="100%" border="1" align="center" class="tbls">

  <tr>
    <td width="62" bgcolor="#00CCFF"><div align="center"><strong>NIP</strong></div></td>
    <td width="231" bgcolor="#00CCFF"><div align="center"><strong>Nama Pegawai </strong></div></td>
    
    <td width="191" bgcolor="#00CCFF"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="133" bgcolor="#00CCFF"><div align="center"><strong>Gaji Pokok</strong></div></td>
	<td width="165" bgcolor="#00CCFF"><div align="center"><strong>Tunjangan</strong></div></td>
	
	<td width="165" bgcolor="#00CCFF"><div align="center"><strong>Potongan Absen</strong></div></td>
    <td width="156" bgcolor="#00CCFF"><div align="center"><strong>Total Gaji</strong></div></td>
    
  </tr>
  <?php 
 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		
		  ?>
  <tr align="left" valign="top">
    <td><?php echo $re[nip] ?> </td>
    <td><?php echo $re[nama] ?> </td>
    <td><?php echo $re[jabatan] ?> </td>

    <td><?php echo "Rp. ".format_rupiah($re[gaji]); ?> </td>
	   
	   <td><?php echo "Rp. ".format_rupiah($re[tunjangan]); ?> </td>
	   <td><?php echo "Rp. ".format_rupiah($re[absen]); ?> </td>
	    
    <td><?php echo "Rp. ".format_rupiah($re[gaji_bersih]); ?> </td>
   
  </tr>
  <?php }
	
	?>
  
</table>
<br>
<br>
<br>
	<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="50%" bgcolor="#FFFFFF">
							  
								<p align="center">Diketahui,
								
								<br/>
								Kepala Administrasi
								<br/>
								<br/>
								<br/><br/>
								Seswa Marilina<br/>
								Nip : 19650802
								</td><td width="50%" bgcolor="#FFFFFF"><div align="center">Dibuat, <?php $tgl = date('d M Y');
echo "Sawahlunto, $tgl";?>
  <br/>Administrasi
  <br/><br/>
								<br/><br/>
								  Gustina Ningsih<br/>
								  Nip : 19650805
								  
								  </div></td>
</tr></table>