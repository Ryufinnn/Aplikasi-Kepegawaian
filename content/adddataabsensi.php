<?php
include("koneksi.php");
$bln=$_POST['bln'];
$tgl=$_POST['tgl'];
$thn=$_POST['thn'];
$tanggal="$thn/$bln/$tgl";
if (!$koneksi)
  {
  die('Tidak Bisa Koneksi : ' . mysql_error());
  }
  
  mysql_select_db("penggajian", $koneksi);
  
$sql="INSERT INTO data_absensi (tanggal, nip, jam_masuk, jam_keluar, keterangan) VALUES ('$tanggal','$_POST[nip]','$_POST[jam_masuk]','$_POST[jam_keluar]','$_POST[keterangan]')";

if (!mysql_query($sql,$koneksi))
  
  {
  die('Kesalahan Akses : ' . mysql_error());
  }
  
echo "Data berhasil disimpan";
mysql_close($koneksi)
?>