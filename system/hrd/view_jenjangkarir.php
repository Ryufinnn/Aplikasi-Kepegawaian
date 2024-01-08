<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left">Data Jenjang Karir </h1>
<hr />
<?php
include('koneksi.php');
?>
<table width="100%" border="0" align="center" class="tbls">
<tr>
    <td width="128"><div align="center"><strong>Tanggal</strong></div></td>
    <td width="125"><div align="center"><strong>ID Jabatan</strong></div></td>
	<td width="128"><div align="center"><strong>NIP</strong></div></td>
    <td width="125"><div align="center"><strong>Gaji Pokok</strong></div></td>
	<td width="128"><div align="center"><strong>Golongan</strong></div></td>
    <td width="125"><div align="center"><strong>Keterangan</strong></div></td>
    <td width="233"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from jenjang_karir"); 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<?php echo $re[tanggal] ?>			</td>
				<td>	
					<?php echo $re[id_jabatan] ?>		</td>
				<td>
					<?php echo $re[nip] ?>			</td>
				<td>	
					<?php echo $re[gaji_pokok] ?>		</td>
				<td>
					<?php echo $re[golongan] ?>			</td>
				<td>	
					<?php echo $re[keterangan] ?>		</td>
                <td align="center">
					<a href="?page=ubahjenjangkarir&id=<?php echo $re[id_karir]; ?>">Update</a>	
					<a href="?page=viewjenjangkarir&id=<?php echo $re[id_karir]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr><?php }
	 $sql=mysql_query("select * from jenjang_karir"); 
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
<a class="Button" href="?page=jenjangkarir">
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
	$dil=mysql_query("delete from jenjang_karir where id_karir='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=viewjenjangkarir&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>