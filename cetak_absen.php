<body onload="javascript:window:print()">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<titleCetak Laporan</title>
</head>
<body>
<p class="style1" align="center">SISTEM INFORMASI KEPEGAWAIAN <br> PT. DASRAT SARANA ARANG SEJATI</p>
	   <hr>
<h3 align="center">Laporan Data Absensi </h3>

<?php
include('koneksi.php');
?>
<table width="80%" border="1" align="center" class="tbls">
<tr>
    <td width="37" ><div align="center"><strong>No</strong></div></td>
    <td width="126"><div align="center"><strong>Kode Absensi</strong></div></td>
    <td width="127"><div align="center"><strong>NIP</strong></div></td>
    <td width="159"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="127"><div align="center"><strong>Bulan </strong></div></td>
    <td width="119"><div align="center"><strong>Tahun</strong></div></td>
	<td width="81"><div align="center"><strong>Hadir</strong></div></td>
	<td width="81"><div align="center"><strong>Absen</strong></div></td>
	<td width="81"><div align="center"><strong>Sakit</strong></div></td>
   
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from absen"); 
 $no=1;
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			
				<td>
					<div align="center"><span class="style2"><?php echo $no; ?></span> </div></td>
					<td>
					<?php echo $re[kode] ?>			</td>
				<td>
					<?php echo $re[nip] ?>			</td>
				<td>	
					<?php echo $re[jabatan] ?>		</td>
                <td>
					<?php echo $re[bulan] ?>			</td>
                <td>
					<?php echo $re[tahun] ?>			</td>
				<td>
					<?php echo $re[hadir] ?>			</td>
										<td>
					<?php echo $re[absen] ?>			</td>
					<td>
					<?php echo $re[sakit] ?>			</td>
               													
			</tr>
		<?php $no++;}?>  
</table>
<br>

<br/>
<br/>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="50%" bgcolor="#FFFFFF">
							  
								<p align="center">Diketahui
								<br/>
								<br/>
								<br/>
								<br/>
								Seswa Marilina<br/>
	</td><td width="50%" bgcolor="#FFFFFF"><div align="center">Dibuat
  <br/>
  <br/><br/>
								<br/>
								  Gustina Ningsih<br/>
								  </div></td>
</tr></table>
</body>
</html>