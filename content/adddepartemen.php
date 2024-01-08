<?php
include "koneksi.php"; 
$id_departemen = $_POST['id_departemen'];
$nama_departemen = $_POST['nama_departemen'];
$section = $_POST['section'];

if ($data == 0)
{
	$query = "INSERT INTO departemen(id_departemen, nama_departemen, section) 
	
	VALUES('$_POST[id_departemen]','$_POST[nama_departemen]', '$_POST[section]')";
$hasil = mysql_query($query);
}
header("location:Departemen.php");
?>