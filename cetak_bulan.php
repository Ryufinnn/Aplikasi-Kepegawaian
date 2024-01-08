<body onLoad="javascript:window:print()">
<?php
include('koneksi.php');
include('inc/fungsi.php');
//query
$sql=mysql_query("select * from absensi
where tgl like '$_POST[bln]%' order by id asc") or die
(mysql_error());
 $no=1;
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
   <td width="37" bgcolor="#0099FF"><div align="center"><strong>No</strong></div></td>
    <td width="126"bgcolor="#0099FF"><div align="center"><strong>ID Absensi</strong></div></td>
    <td width="127"bgcolor="#0099FF"><div align="center"><strong>Nama</strong></div></td>
	
    <td width="159"bgcolor="#0099FF"><div align="center"><strong>Jabatan</strong></div></td>
   
	<td width="81"bgcolor="#0099FF"><div align="center"><strong>Hadir</strong></div></td>
	<td width="81"bgcolor="#0099FF"><div align="center"><strong>Absen</strong></div></td>
  </tr>
  <?php 
 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		
		
		 
		  ?>
  <tr align="left" valign="top">
   <td>
					<div align="center"><?echo$no;?></span> </div></td>
					<td>
					<?php echo $re[id] ?>			</td>
				<td>
					<?php echo $re[nama] ?>			</td>
					
				<td>	
					<?php echo $re[jabatan] ?>		</td>
                <td>
					<?php echo $re[masuk] ?>			</td>
                <td>
					<?php echo $re[absen] ?>			</td>
				
				
                														
			</tr>
		
 
  <? $no++;
  
  }?>  
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