<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
<style type="text/css">
.tbls tr td {
	text-align: center;
}
</style>
</head>
<body>
<h1 align="left">Data Absensi Pegawai </h1>
<hr />
<?php
include('koneksi.php');
?>
<table width="80%" border="0" align="center" class="tbls">
<tr>
    <td width="93"><div align="center"><strong>NIP</strong></div></td>
    <td width="93"><strong>Tanggal</strong></td>
    <td width="184"><div align="center"><strong>Jam Masuk</strong></div></td>
    <td width="110"><div align="center"><strong>Jam Keluar</strong></div></td>
    <td width="79"><div align="center"><strong>Keterangan</strong></div></td>
    <td width="256"><div align="center"><strong>Aksi</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from data_absensi"); 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<?php echo $re[nip] ?>				</td>
				<td><?php echo $re[nip] ?></td>
				<td>
					<?php echo $re[jam_masuk] ?>			</td>
				<td>	
					<?php echo $re[jam_keluar] ?>		</td>
                <td>
					<?php echo $re[keterangan] ?>			</td>
                <td align="center">
					<a href="?page=u-absensi&id=<?php echo $re[id_absensi]; ?>">Update</a>	
					<a href="?page=absensi&id=<?php echo $re[id_absensi]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr><?php } 
		 $sql=mysql_query("select * from data_absensi"); 
		  	$re=mysql_num_rows($sql);
			if($re==0){ ?>

			<tr align="left" valign="top">
			  <td colspan="6">Maaf Data Tidak Ada</td>
          </tr>
		  <?php } ?>
</table>
<br/>
<table width="82%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="?page=absen">
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
	$del=mysql_query("delete from data_absensi where id_absensi='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=absensi&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>