<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 14px; }
-->
</style>
<body onload="javascript:window:print()">
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

<h3 align="center"> Laporan Data Pegawai </h3>

<?php
include('koneksi.php');
?>
<table width="100%" border="1" align="center" class="tbls">
<tr>
<td width="41" bgcolor="#0099FF"><div align="center" class="style2"><strong>No</strong></div></td>
    <td width="79" bgcolor="#0099FF"><div align="center" class="style2"><strong>NIP</strong></div></td>
    <td width="145" bgcolor="#0099FF"><div align="center" class="style2"><strong>Nama Pegawai</strong></div></td>
	<td width="165" bgcolor="#0099FF"><div align="center" class="style2"><strong>TTL</strong></div></td>
        <td width="160" bgcolor="#0099FF"><div align="center" class="style2"><strong>Agama</strong></div></td>
    <td width="237" bgcolor="#0099FF"><div align="center" class="style2"><strong>No Telp</strong></div></td>
    <td width="237" bgcolor="#0099FF"><div align="center" class="style2"><strong>Alamat</strong></div></td>
   
	<td width="160" bgcolor="#0099FF"><div align="center" class="style2"><strong>Status</strong></div></td>
	<td width="138" bgcolor="#0099FF"><div align="center" class="style2"><strong>Pendidikan</strong></div></td>
	 <td width="134" bgcolor="#0099FF"><div align="center" class="style2"><strong>Jenis Kelamin</strong></div></td>
	<td width="143" bgcolor="#0099FF"><div align="center" class="style2"><strong>Jabatan</strong></div></td>
</tr>
<?php 
if(isset($_POST[idx])){
 $sql=mysql_query("select * from pegawai_tetap where nip like '%$_POST[idx]%' or nama like '$_POST[idx]' order by nip"); 
 $no=1;
}
else{
	$sql=mysql_query("select * from pegawai_tetap  order by nip"); 
	$no=1;
}
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			<td>
			  <div align="center" class="style2"><?php echo $no; ?> </div></td>
			 
				
				<td>
					<span class="style2"><?php echo $re[nip] ?></span> </td>
				<td>
					<span class="style2"><?php echo $re[nama] ?></span> </td>
				<td>	
					<span class="style2"><?php echo $re[tempat_lahir]?> / <?php echo $re[tanggal_lahir]?>		</span></td>
                <td>
					<span class="style2"><?php echo $re[agama] ?></span> </td>
		 <td>
					<span class="style2"><?php echo $re[no_telp] ?></span> </td>
 		<td>
					<span class="style2"><?php echo $re[alamat] ?></span> </td>
				<td>
			  <div align="center" class="style2"><?php echo $re[status] ?>			</div></td>
					<td>
			  <div align="center" class="style2"><?php echo $re[pendidikan] ?>			</div></td>
					<td>
			  <div align="center" class="style2"><?php echo $re[jenis_kelamin] ?>			</div></td>
                                        <td>
					<span class="style2"><?php echo $re[jabatan] ?></span> </td>
			</tr><?php $no++;}
	 
	?>  
            
			
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