<?php
	include "koneksi.php";
	$nip=$_POST['nip'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE data_buruh SET nama='$_POST[nama]', Tanggal_lahir='$tanggal', Tempat_lahir='$_POST[tempat_lahir]', Agama='$_POST[agama]', No_Telp='$_POST[noTelp]', Alamat='$_POST[alamat]', Status='$_POST[status]', Kota='$_POST[kota]', Jenis_Kelamin='$_POST[JK]', Pendidikan='$_POST[Pendidikan]', id_departemen='$_POST[id_departemen]', nama_departemen='$_POST[departemen]', status_pegawai='$_POST[status_pegawai]', masa_kerja='$_POST[Masa_kerja]' where nip='$_POST[nip]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_buruh.php\";</script>";
?>