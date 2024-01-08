<?php
include "koneksi.php"; 
$tanggal=$_POST['tanggal'];
$id_karir = $_POST['id_karir'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$id_jabatan = $_POST['id_jabatan'];
$jabatan = $_POST['jabatan'];
$golongan = $_POST['golongan'];
$gapok = $_POST['gaji_pokok'];
$keterangan = $_POST['keterangan'];
if (!$koneksi)
  {
  die('Tidak Bisa Koneksi : ' . mysql_error());
  }
  
  mysql_select_db("penggajian", $koneksi);
  
$sql="INSERT into jenjang_karir set
 (tanggal, id_karir, nip, nama, id_jabatan, jabatan, golongan, gaji_pokok, keterangan) VALUES ('$tanggal','$_POST[id_karir]','$_POST[nip]','$_POST[nama]','$_POST[id_jabatan]','$_POST[jabatan]','$_POST[golongan]','$_POST[gaji_pokok]','$_POST[keterangan]')";

if (!mysql_query($sql,$koneksi))
  
  {
  die('Kesalahan Akses : ' . mysql_error());
  }
  
echo "Data berhasil disimpan";
mysql_close($koneksi)
?>