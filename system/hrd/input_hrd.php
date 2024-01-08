<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>

<form method="post" action="">
<br />
<table width="521" border="0" align="center"  class="tbls">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Tambah Data HRD </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="nip_hrd" size="50"></td>
  </tr>
  <tr>
    <td width="162">Password</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="password" name="password" size="50" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nama_hrd" size="50"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><textarea name="alamat_hrd"></textarea></td>
  </tr>
  <tr>
    <td>Telepon / Hp </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="telp_hrd" size="15"> / <input type="text" name="hp_hrd" size="20">  </tr>
  <tr>
    <td>Email</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="email_hrd" size="50"></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right"><input type="submit" name="simp" value="simpan"></div></td>
  </tr>
  </table>
</form>
<?php
if(isset($_POST[simp])){
$dt=date("Y-m-d");
include('koneksi.php');
if($_POST[tgll]>$dt){
	echo"<script>window.alert('Maaf Tanggal Jangan Lebih dari tanggal Sekarang')</script>";
}
else{
	$kl=mysql_query("insert into hrd set 
					nip='$_POST[nip_hrd]',
					nama_hrd='$_POST[nama_hrd]',
					alamat_hrd='$_POST[alamat_hrd]',
					telp_hrd='$_POST[telp_hrd]',
					hp_hrd='$_POST[hp_hrd]',
					email_hrd='$_POST[email_hrd]'");
	$ks=mysql_query("insert into user set 
					nip='$_POST[nip_hrd]',
					password='$_POST[password]',
					hak_akses='HRD'");
		if($kl){
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=HRD' />";
		}
		else{}
	}
}
?>