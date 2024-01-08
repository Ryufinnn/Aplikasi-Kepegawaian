<?php
	include "koneksi.php";
	$id_lembur=$_POST['id_lembur'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE lembur SET tanggal='$tanggal', nip='$_POST[nip]', nama='$_POST[nama]', id_departemen='$_POST[id_departemen]', nama_departemen='$_POST[departemen]', jam_mulai='$_POST[jam_mulai]', jam_selesai='$_POST[jam_selesai]' where id_lembur='$_POST[id_lembur]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_lembur.php\";</script>";
?>