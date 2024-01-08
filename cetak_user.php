<body onLoad="javascript:window:print()">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan</title>
<style type="text/css">
<!--
.style2 {font-size: 15px}
-->
</style>
</head>
<body>
 <p class="style1" align="center">SISTEM INFORMASI KEPEGAWAIAN <br> PT. DASRAT SARANA ARANG SEJATI</p>
	   <hr>
<h3 align="center"> Data User </h3>

<?php
include('koneksi.php');
?>
<table width="80%" border="1" align="center" class="tbls">
<tr>
<td width="37" bgcolor="#0099FF"><div align="center"><strong>No</strong></div></td>
<td width="200"bgcolor="#0099FF"><div align="center"><strong>Username</strong></div></td>
    <td width="250"bgcolor="#0099FF"><div align="center"><strong>Nama </strong></div></td>
    <td width="200"bgcolor="#0099FF"><div align="center"><strong>Alamat</strong></div></td>
    <td width="200"bgcolor="#0099FF"><div align="center"><strong>No. Telephone</strong></div></td>
    <td width="200"bgcolor="#0099FF"><div align="center"><strong>No. Hp</strong></div></td>
    <td width="200"bgcolor="#0099FF"><div align="center"><strong>Level</strong></div></td>
   
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from keuangan order by nip ASC"); 
 $no=1;
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			<td>
					<div align="center"><span class="style2"><?php echo $no; ?></span> </div></td>
					<td>
					<div align="left"><?php echo $re[nip] ?>				</div></td>
				<td>
					<div align="left"><?php echo $re[nama_keuangan] ?>				</div></td>
				<td>	
					<div align="left"><?php echo $re[alamat_keuangan] ?></div></td>
				<td>	
					<div align="left"><?php echo $re[telp_keuangan] ?></div></td>
				<td>	
					<div align="left"><?php echo $re[hp_keuangan] ?></div></td>
				<td>	
					<div align="left"><?php echo $re[hak_akses] ?></div></td>                											
			
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
								Administrasi
								<br/>
								<br/>
								<br/><br/>
								Seswa Marilina<br/>
								Nip : 19650807
								</td><td width="50%" bgcolor="#FFFFFF"><div align="center"> <?php $tgl = date('d M Y');
echo "Sawahlunto, $tgl";?><br/>Dibuat,
  <br/>Administrasi
  <br/><br/>
								<br/><br/>
								  Gustina Ningsih<br/>
								  Nip : 19650808
								  
								  </div></td>
</tr></table>


<p>&nbsp;</p>
</body>
</html>