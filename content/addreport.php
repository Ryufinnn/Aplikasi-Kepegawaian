<?php
include("koneksi.php");
$id_report = $_POST['id_report'];
$bln=$_POST['bln'];
$tgl=$_POST['tgl'];
$thn=$_POST['thn'];
$tanggal="$thn/$bln/$tgl";
$nip = $_POST['nip']; 
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$id_jenis = $_POST['id_jenis'];
$jenis = $_POST['jenis'];
$upah = $_POST['upah'];
if (!$koneksi)
  {
  die('Tidak Bisa Koneksi : ' . mysql_error());
  }
  
  mysql_select_db("penggajian", $koneksi);
  
$mysql="INSERT INTO data_report(id_report, tanggal, nip, nama_buruh, jumlah, id_jenis, jenis, upah)
VALUES ('$_POST[id_report]','$tanggal','$_POST[nip]','$_POST[nama]','$_POST[jumlah]','$_POST[id_jenis]','$_POST[jenis]','$_POST[upah]')";
$hasil=mysql_query($mysql);
header ("location:data_report_buruh.php");
?>