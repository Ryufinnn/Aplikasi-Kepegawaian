<?php
	include "koneksi.php";
	$sql= "DELETE FROM data_produksi WHERE id_jenis='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_produksi.php\";</script>");
?>