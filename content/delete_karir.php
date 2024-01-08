<?php
	include "koneksi.php";
	$sql= "DELETE FROM jenjang_karir WHERE id_karir='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_karir.php\";</script>");
?>