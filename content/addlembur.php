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
  
$sql="INSERT INTO lembur (id_lembur, tanggal, nip, nama, id_departemen, nama_departemen, jam_mulai, jam_selesai) VALUES ('$_POST[id_lembur]','$tanggal','$_POST[nip]','$_POST[nama]','$_POST[id_departemen]','$_POST[departemen]','$_POST[jam_mulai]','$_POST[jam_selesai]')";

if (!mysql_query($sql,$koneksi))
  
  {
  die('Kesalahan Akses : ' . mysql_error());
  }
  
echo "Data berhasil disimpan";
mysql_close($koneksi)
?>