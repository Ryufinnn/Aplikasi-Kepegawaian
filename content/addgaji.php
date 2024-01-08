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
  
$sql="INSERT INTO daftar_gaji (id_gaji, tanggal, nip, nama, id_jabatan, nama_jabatan, gaji_pokok, id_departemen, nama_departemen, uang_lembur, uang_makan, uang_transport, tunj_istri, tunj_anak, tunj_hari_tua, tunj_kecelakaan, tunj_kesehatan, tunj_kematian, tunj_hari_raya, jumlah_produksi, jenis, harga_per_unit, bonus, potongan, gaji_kotor, total_upah) VALUES ('$_POST[id_gaji]','$tanggal','$_POST[nip]','$_POST[nama]','$_POST[id_jabatan]','$_POST[jabatan]','$_POST[gaji_pokok]','$_POST[id_departemen]','$_POST[departemen]','$_POST[lembur]','$_POST[makan]','$_POST[transportasi]','$_POST[istri]','$_POST[anak]','$_POST[hari_tua]','$_POST[kecelakaan]','$_POST[kesehatan]','$_POST[kematian]','$_POST[hari_raya]','$_POST[jumlah]','$_POST[jenis]','$_POST[harga]','$_POST[bonus]','$_POST[potongan]','$_POST[gaji]','$_POST[upah]')";

if (!mysql_query($sql,$koneksi))
  
  {
  die('Kesalahan Akses : ' . mysql_error());
  }
  
echo "Data berhasil disimpan";
mysql_close($koneksi)
?>