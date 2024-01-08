<?php
include('koneksi.php');
include ('../php/php_upload_function.php');
$bln=$_POST['bln'];
$tgl=$_POST['tgl'];
$thn=$_POST['thn'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$agama = $_POST['agama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$kota = $_POST['kota'];
$jk = $_POST['jenis_kelamin'];
$pendidikan = $_POST['Pendidikan'];
$id_jabatan = $_POST['id_jabatan'];
$jabatan = $_POST['jabatan'];
$id_departemen = $_POST['id_departemen'];
$departemen = $_POST['departemen'];
$status_pegawai = $_POST['status_pegawai'];
$masa_kerja = $_POST['Masa_kerja'];
$npwp = $_POST['npwp'];
$no_rek = $_POST['no_rekening'];
$email = $_POST['email'];
$foto = $_FILES['foto'];
$tanggal="$thn/$bln/$tgl";

// Mengupload Foto
$upload = upload($foto,"../","foto_pegawai");


//		INI MASUKIN KE DATABASE
$sql="INSERT INTO pegawai_tetap (nip, nama, tanggal_lahir, tempat_lahir, agama, no_telp, alamat, status, kota, jenis_kelamin, pendidikan, id_jabatan, nama_jabatan, id_departemen, nama_departemen, status_pegawai, npwp, no_rekening, email, masa_kerja,foto) VALUES ('$_POST[nip]','$_POST[nama]','$tanggal','$_POST[tempat_lahir]','$_POST[agama]','$_POST[no_telp]','$_POST[alamat]','$_POST[status]','$_POST[kota]','$_POST[jenis_kelamin]','$_POST[Pendidikan]','$_POST[id_jabatan]','$_POST[jabatan]','$_POST[id_departemen]','$_POST[departemen]','$_POST[status_pegawai]','$_POST[npwp]','$_POST[no_rekening]','$_POST[email]','$_POST[Masa_kerja]','$upload')";
if (!mysql_query($sql,$koneksi)){
  die('Kesalahan Akses : ' . mysql_error());
}
  
echo "Data berhasil disimpan";
mysql_close($koneksi)

?>