<?php
	include "koneksi.php";
	$nip=$_POST['nip'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE data_absensi SET tanggal='$tanggal', jam_masuk='$_POST[jam_masuk]', jam_keluar='$_POST[jam_keluar]', keterangan='$_POST[keterangan]' where nip='$_POST[nip]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"View_Absensi.php\";</script>";
?>