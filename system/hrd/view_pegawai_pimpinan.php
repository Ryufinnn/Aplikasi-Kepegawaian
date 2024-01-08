<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
<style type="text/css">
<!--
.style2 {font-size: 11px}
-->
</style>
</head>
<body>
<h3 align="center">Laporan Data Pegawai </h3>
<hr />

<br>
<?php
include('koneksi.php');
?>
<table width="100%" border="0" align="center" class="tbls">
<tr>
<td width="37" bgcolor="#0099FF"><div align="center"><strong>No</strong></div></td>
    <td width="57" bgcolor="#0099FF"><div align="center"><strong>Nip</strong></div></td>
    <td width="199" bgcolor="#0099FF"><div align="center"><strong>Nama Pegawai</strong></div></td>
	<td width="199" bgcolor="#0099FF"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="158" bgcolor="#0099FF"><div align="center"><strong>TTL</strong></div></td>
    <td width="226" bgcolor="#0099FF"><div align="center"><strong>No Telp</strong></div></td>
 <td width="226" bgcolor="#0099FF"><div align="center"><strong>Alamat</strong></div></td>
   
	<td width="152" bgcolor="#0099FF"><div align="center"><strong>Status</strong></div></td>
	<td width="129" bgcolor="#0099FF"><div align="center"><strong>Pendidikan</strong></div></td>
	 <td width="122" bgcolor="#0099FF"><div align="center"><strong>Jenis Kelamin</strong></div></td>
  
</tr>
<?php 
if(isset($_POST[idx])){
 $sql=mysql_query("select * from pegawai_tetap where nip like '%$_POST[idx]%' or nama like '$_POST[idx]' order by nip"); 
}
else{
	$sql=mysql_query("select * from pegawai_tetap  order by nip"); 
	$no=1;
}
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			<td>
					<div align="center"><span class="style2"><?php echo $no; ?></span> </div></td>
				<td>
					<span class="style2"><?php echo $re[nip] ?></span> </td>
				<td>
					<span class="style2"><?php echo $re[nama] ?></span> </td>
					<td>
					<span class="style2"><?php echo $re[jabatan] ?></span> </td>
				<td>	
					<span class="style2"><?php echo $re[tempat_lahir]?> / <?php echo $re[tanggal_lahir]?>		</span></td>
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
                														
			</tr><?php $no++;}
	
	?>  
            
			
</table>
<br/>
<table width="100%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="cetak_pegawai.php" target="_blank">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Print</span>      
      </span>
</a></div>
    </td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$del=mysql_query("delete from pegawai_tetap where nip='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=pegawai&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>