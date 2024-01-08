<?php
session_register("spadmin");
include"koneksi.php";
if(isset($_GET[act])){
	$uu=mysql_query("select * from user where nip='$_POST[nip]' and password='$_POST[password]'");
		$aha=mysql_fetch_array($uu);
	if($aha[hak_akses]=="admin"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=uadmin.php\">";
	}
	else if($aha[hak_akses]=="HRD"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=uhrd.php\">";
	}
	else if($aha[hak_akses]=="mandor"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=umandor.php\">";
	}
	else if($aha[hak_akses]=="keuangan"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=ukeuangan.php\">";
	}
	else{
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
		echo"<script>window.alert('Gagal')</script>";
	}
}
?>