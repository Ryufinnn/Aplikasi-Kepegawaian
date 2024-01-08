<?php
	include "koneksi.php";
	$sql= "DELETE FROM data_report WHERE id_report='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_report.php\";</script>");
?>