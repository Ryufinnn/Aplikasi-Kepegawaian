<?php
	include "koneksi.php";
	$sql= "DELETE FROM data_absensi WHERE nip='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"View_Absensi.php\";</script>");
?>