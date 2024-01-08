<?php
include('../koneksi.php');
include ('../php/php_upload_function.php');
$bln=$_POST['bln'];
$tgl=$_POST['tgl'];
$thn=$_POST['thn'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$agama = $_POST['agama'];
$no_telp = $_POST['noTelp'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$kota = $_POST['kota'];
$jk = $_POST['JK'];
$pendidikan = $_POST['Pendidikan'];
$id_departemen = $_POST['id_departemen'];
$departemen = $_POST['departemen'];
$status_pegawai = $_POST['status_pegawai'];
$masa_kerja = $_POST['Masa_kerja'];
$foto = $_FILES['foto'];
$tanggal="$thn/$bln/$tgl";

// Mengupload Foto
$upload = upload($foto,"../","foto_buruh");


//		INI MASUKIN KE DATABASE
$sql="INSERT INTO data_buruh (nip, nama, Tanggal_lahir, Tempat_lahir, Agama, No_Telp, Alamat, Status, Kota, Jenis_Kelamin, Pendidikan, id_departemen, nama_departemen, status_pegawai, masa_kerja,foto) VALUES ('$_POST[nip]','$_POST[nama]','$tanggal','$_POST[tempat_lahir]','$_POST[agama]','$_POST[noTelp]','$_POST[alamat]','$_POST[status]','$_POST[kota]','$_POST[JK]','$_POST[Pendidikan]','$_POST[id_departemen]','$_POST[departemen]','$_POST[status_pegawai]','$_POST[Masa_kerja]','$upload')";
if (!mysql_query($sql,$koneksi)){
  die('Kesalahan Akses : ' . mysql_error());
}
  
echo "Data berhasil disimpan";
mysql_close($koneksi)

?>