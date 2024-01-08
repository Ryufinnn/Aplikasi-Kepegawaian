<?php
include("koneksi.php");
if (!$koneksi)
  {
  die('Tidak Bisa Koneksi : ' . mysql_error());
  }
  
  mysql_select_db("penggajian", $koneksi);
  
$sql="INSERT INTO data_produksi (id_jenis, nama_jenis, harga) VALUES ('$_POST[id_jenis]','$_POST[nama_jenis]','$_POST[harga]')";

if (!mysql_query($sql,$koneksi))
  
  {
  die('Kesalahan Akses : ' . mysql_error());
  }
  
echo "Data berhasil disimpan";
mysql_close($koneksi)
?>