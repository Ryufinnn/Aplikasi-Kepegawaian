
<?php
include "koneksi.php"; 
$id_jabatan = $_POST['id_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];
$golongan = $_POST['golongan'];
$gaji_pokok = $_POST['gaji_pokok'];

if ($data == 0)
{
	$query = "INSERT INTO jabatan(id_jabatan, nama_jabatan, golongan, gaji_pokok) 
	
	VALUES('$_POST[id_jabatan]','$_POST[nama_jabatan]', '$_POST[golongan]', '$_POST[gaji_pokok]')";
$hasil = mysql_query($query);
}
header("location:Jabatan.php");
?>
