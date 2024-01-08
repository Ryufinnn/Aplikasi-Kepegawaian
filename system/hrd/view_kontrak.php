<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left">Data Staff Karyawan </h1>
<hr />

<br>
<?php
include('koneksi.php');
?>
<table width="100%" border="0" align="center" class="tbls">
<tr>
    <td width="60"><div align="center"><strong>NIP</strong></div></td>
    <td width="117"><div align="center"><strong>Nama</strong></div></td>
    <td width="169"><div align="center"><strong>Alamat</strong></div></td>
    <td width="144"><div align="center"><strong>No. Telepon </strong></div></td>
    <td width="206"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="233"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
if(isset($_POST[idx])){
 $sql=mysql_query("select * from pegawai_kontrak where nip like '%$_POST[idx]%' or nama like '$_POST[idx]' order by nip"); 
}
else{
	$sql=mysql_query("select * from pegawai_kontrak order by nip"); 
}
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<?php echo $re[nip] ?>				</td>
				<td>
					<?php echo $re[nama] ?>			</td>
				<td>	
					<?php echo $re[alamat] ?>		</td>
                <td>
					<?php echo $re[no_telp] ?>			</td>
				<td>
					<?php echo $re[email] ?>			</td>
                <td align="center">
					<a href="?page=u-kontrak&id=<?php echo $re[nip]; ?>">Update</a>	
					<a href="?page=kontrak&id=<?php echo $re[nip]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr><?php }
	 $sql=mysql_query("select * from pegawai_kontrak where status_pegawai='kontrak'"); 
		$re=mysql_num_rows($sql);
		if($re==0){
	?>  
            
			<tr align="left" valign="top">
			  <td colspan="7"><div align="center">Maaf Data Belum Data</div></td>
  </tr>
		<?php } ?>
</table>
<br/>
<table width="100%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="?page=d-kontrak">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Input Data</span>      
      </span>
</a></div>
    </td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$del=mysql_query("delete from pegawai_kontrak where nip='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=kontrak&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>