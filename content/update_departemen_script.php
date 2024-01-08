<?php
	$id = $_GET['id'];
	include "koneksi.php";
	$sql= "UPDATE departemen SET nama_departemen='$_POST[nama_departemen]', section='$_POST[section]' where id_departemen='$_POST[id_departemen]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_departemen.php\";</script>";
?>