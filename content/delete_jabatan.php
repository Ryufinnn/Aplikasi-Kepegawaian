<?php
	include "koneksi.php";
	$sql= "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_jabatan.php\";</script>");
?>