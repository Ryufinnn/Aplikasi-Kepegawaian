<?php
include "koneksi.php"; 
$id_posisi = $_POST['id_posisi'];
$nip= $_POST['nip'];
$nama = $_POST['nama'];
$id_departemen = $_POST['id_departemen'];
$departemen = $_POST['departemen'];
$keterangan = $_POST['keterangan'];
$masa_kerja = $_POST['Masa_kerja'];
if (!$koneksi)
  {
  die('Tidak Bisa Koneksi : ' . mysql_error());
  }
  
  mysql_select_db("penggajian", $koneksi);
  
$sql="INSERT posisi (id_posisi, nip, id_departemen, keterangan, masa_kerja) VALUES ('$_POST[id_posisi]','$_POST[nip]','$_POST[id_departemen]','$_POST[keterangan]','$_POST[Masa_kerja]')";

if (!mysql_query($sql,$koneksi))
  
  {
  die('Kesalahan Akses : ' . mysql_error());
  }
  
echo "Data berhasil disimpan";
mysql_close($koneksi)
?>