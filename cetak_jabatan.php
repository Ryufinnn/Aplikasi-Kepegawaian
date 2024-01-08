<body onLoad="javascript:window:print()">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan</title>
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

<h3 align="center"> Laporan Data Jabatan </h3>

<?php
include('koneksi.php');
?>
<table width="80%" border="1" align="center" class="tbls">
<tr>
<td width="37" bgcolor="#0099FF"><div align="center"><strong>No</strong></div></td>
<td width="171"bgcolor="#0099FF"><div align="center"><strong>Kode Jabatan</strong></div></td>
    <td width="200"bgcolor="#0099FF"><div align="center"><strong>Nama Jabatan</strong></div></td>
<td width="200"bgcolor="#0099FF"><div align="center"><strong>Gaji Pokok</strong></div></td>
   
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from jabatan order by id_jabatan ASC"); 
 $no=1;
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			<td>
					<div align="center"><span class="style2"><?php echo $no; ?></span> </div></td>
					<td>
					<div align="left"><?php echo $re[kd_jabatan] ?>				</div></td>
				<td>
					<div align="left"><?php echo $re[nama_jabatan] ?>				</div></td>
<td>
					<div align="left"><?php echo $re[gaji_pokok] ?>				</div></td>
                														
			</tr>
		<?php $no++;}?>  
</table>
<br/>
<br/>
<br/>
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


<p>&nbsp;</p>
</body>
</html>