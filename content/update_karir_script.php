<?php
	include "koneksi.php";
	$id_karir=$_POST['id_karir'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE jenjang_karir SET tanggal='$tanggal', nip='$_POST[nip]', nama='$_POST[nama]', id_jabatan='$_POST[id_jabatan]', jabatan='$_POST[jabatan]', golongan='$_POST[golongan]', gaji_pokok='$_POST[gaji]', keterangan='$_POST[keterangan]' where id_karir='$_POST[id_karir]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_karir.php\";</script>";
?>