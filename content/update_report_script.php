<?php
	include "koneksi.php";
	$id_report=$_POST['id_report'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE data_report SET tanggal='$tanggal', nip='$_POST[nip]', nama_buruh='$_POST[nama]', jumlah='$_POST[jumlah]', id_jenis='$_POST[id_jenis]', upah='$_POST[upah]' where id_jenis='$_POST[id_jenis]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"View_Report_Buruh.php\";</script>";
?>