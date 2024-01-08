<?php
	$id = $_GET['id'];
	include "koneksi.php";
	$sql= "UPDATE data_produksi SET nama_jenis='$_POST[nama_jenis]', harga='$_POST[harga]' where id_jenis='$_POST[id_jenis]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_produksi.php\";</script>";
?>