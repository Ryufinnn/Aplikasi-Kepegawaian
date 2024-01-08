<?php
	include "koneksi.php";
	$nip=$_POST['nip'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE pegawai_tetap SET nama='$_POST[nama]', tanggal_lahir='$tanggal', tempat_lahir='$_POST[tempat_lahir]', agama='$_POST[agama]', no_telp='$_POST[no_telp]', alamat='$_POST[alamat]', status='$_POST[status]', kota='$_POST[kota]', jenis_kelamin='$_POST[jenis_kelamin]', pendidikan='$_POST[Pendidikan]', id_jabatan='$_POST[id_jabatan]', nama_jabatan='$_POST[jabatan]', id_departemen='$_POST[id_departemen]', nama_departemen='$_POST[departemen]', status_pegawai='$_POST[status_pegawai]', npwp='$_POST[npwp]', no_rekening='$_POST[no_rekening]', email='$_POST[email]', masa_kerja='$_POST[Masa_kerja]' where nip='$_POST[nip]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_pegawai.php\";</script>";
?>