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
    <div align="center">Tambah Data Keuangan </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="nip_keuangan" size="50"></td>
  </tr>
  <tr>
    <td width="162">Password</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="password" name="password" size="50" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nama_keuangan" size="50"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><textarea name="alamat_keuangan"></textarea></td>
  </tr>
  <tr>
    <td>Telepon / Hp </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="telp_keuangan" size="15"> / <input type="text" name="hp_keuangan" size="20">  </tr>
  <tr>
    <td>Email</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="email_keuangan" size="50"></td>
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
	$kl=mysql_query("insert into keuangan set 
					nip='$_POST[nip_keuangan]',
					nama_keuangan='$_POST[nama_keuangan]',
					alamat_keuangan='$_POST[alamat_keuangan]',
					telp_keuangan='$_POST[telp_keuangan]',
					hp_keuangan='$_POST[hp_keuangan]',
					email_keuangan='$_POST[email_keuangan]'");
	$ks=mysql_query("insert into user set 
					nip='$_POST[nip_keuangan]',
					password='$_POST[password]',
					hak_akses='keuangan'");
		if($kl){			
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=keuangan' />";
		}
		else{
			
		}
}
?>