<?php
	$id = $_GET['id'];
	include "koneksi.php";
	$sql= "UPDATE jabatan SET nama_jabatan='$_POST[nama_jabatan]', golongan='$_POST[golongan]', gaji_pokok='$_POST[gaji_pokok]' where id_jabatan='$_POST[id_jabatan]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_jabatan.php\";</script>";
?>