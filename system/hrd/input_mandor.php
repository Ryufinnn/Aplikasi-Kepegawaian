<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>

<form method="post" action="">
<br />
<table width="521" border="0" align="center" id="rpt">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Tambah Data Mandor </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="nip_mandor" size="50"></td>
  </tr>
  <tr>
    <td width="162">Password</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="password" name="password" size="50" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nama_mandor" size="50"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><textarea name="alamat_mandor"></textarea></td>
  </tr>
  <tr>
    <td>Telepon / Hp </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="telp_mandor" size="15"> / <input type="text" name="hp_mandor" size="20">  </tr>
  <tr>
    <td>Email</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="email_mandor" size="50"></td>
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
	$kl=mysql_query("insert into mandor set 
					nip='$_POST[nip_mandor]',
					nama_mandor='$_POST[nama_mandor]',
					alamat_mandor='$_POST[alamat_mandor]',
					telp_mandor='$_POST[telp_mandor]',
					hp_mandor='$_POST[hp_mandor]',
					email_mandor='$_POST[email_mandor]'");
	$ks=mysql_query("insert into user set 
					nip='$_POST[nip_mandor]',
					password='$_POST[password]',
					hak_akses='mandor'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=mandor' />";
	}
}
?>