<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>

</head>
<body>
<h3 align="left">Laporan Data Jabatan </h3>
<hr />
<?php
include('koneksi.php');
?>
<table width="80%" border="0" align="center" class="tbls">
<tr>
<td width="45" bgcolor="#0099FF"><div align="center"><strong>No</strong></div></td>
<td width="171"><div align="center"><strong>Kode Jabatan</strong></div></td>
    <td width="200"><div align="center"><strong>Nama Jabatan</strong></div></td>
    <td width="200"><div align="center"><strong>Gaji Pokok</strong></div></td>
    
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
<table width="82%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="cetak_jabatan.php" target="_blank">
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
	$dil=mysql_query("delete from jabatan where id_jabatan='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=viewjabatan&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>