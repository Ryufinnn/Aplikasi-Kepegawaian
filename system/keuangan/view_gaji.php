<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title></head>
<body>
<br>
<h2>Data Gaji Buruh
  <div align="right">
  <div class="sidebar_search" align="right">
<form action="" method="post">
<input type="text" name="idx" id="idx" class="search_input" value="Cari Nama atau Kode" onClick="this.value=''" />
<input type="image" class="search_submit" src="images/search.png" />
</form>
</div>
</div>
</h2>
<?php
include('koneksi.php');
?>

<table width="100%" border="0" align="center" class="tbls">
<tr>
    <td width="62"><div align="center"><strong>NIP</strong></div></td>
    <td width="231"><div align="center"><strong>Jumlah Produksi </strong></div></td>
    <td width="191"><div align="center"><strong>Uang Lembur </strong></div></td>
    <td width="165"><div align="center"><strong>Tanggal </strong></div></td>
    <td width="133"><div align="center"><strong>Bonus</strong></div></td>
	<td width="156"><div align="center"><strong>Total Upah </strong></div></td>
    <td width="246"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from daftar_gaji"); 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<?php echo $re[nip] ?>				</td>
				<td>
					<?php echo $re[jumlah_produksi] ?>			</td>
				<td>	
					<?php echo $re[uang_lembur] ?>		</td>
                <td>
					<?php echo $re[tanggal] ?>			</td>
				<td>
					<?php echo $re[bonus] ?>			</td>
				<td>
					<?php echo $re[total_upah] ?>			</td>
                <td align="center">
					<a href="?page=u-pegawai&id=<?php echo $re[nip]; ?>">Update</a>	
					<a href="?page=pegawai&id=<?php echo $re[nip]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr><?php }
	 $sql=mysql_query("select * from daftar_gaji"); 
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
<!--    <div align="right"> 
<a class="Button" href="?page=d-gaji">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Input Data</span>      
      </span>
</a></div>
-->    </td>
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