<?php
	include "koneksi.php";
	$sql= "DELETE FROM daftar_gaji WHERE id_gaji='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_gaji.php\";</script>");
?>