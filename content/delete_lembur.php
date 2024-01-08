<?php
	include "koneksi.php";
	$sql= "DELETE FROM lembur WHERE id_lembur='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_lembur.php\";</script>");
?>