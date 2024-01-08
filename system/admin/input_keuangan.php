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
    <div align="center">Input Data User </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">Username</td>
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
    <td><input type="text" name="nama" size="50"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><textarea name="alamat_keuangan"></textarea></td>
  </tr>
  <tr>
    <td>Hp </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="hp_keuangan" size="20">  </tr>
   <tr>
    <td>Level</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><select name="level"><option value="">Silahkan dipilih</option>
	<option value="HRD">Admin</option>
	<option value="keuangan">Operator</option>
	<option value="admin">Pimpinan</option>
	</select></td>
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
$cek=mysql_query("select * from keuangan where nama_keuangan='$_POST[nama]'");
	$r=mysql_num_rows($cek);

if($r!=0){
	echo"<script>window.alert('Data Sudah Ada');</script>";
}

else{
	$kl=mysql_query("insert into keuangan set 
					nip='$_POST[nip_keuangan]',
					password='$_POST[password]',
					nama_keuangan='$_POST[nama]',
					alamat_keuangan='$_POST[alamat_keuangan]',
					
					hp_keuangan='$_POST[hp_keuangan]',
					hak_akses='$_POST[level]'");
	$ks=mysql_query("insert into user set 
					nip='$_POST[nip_keuangan]',
					password='$_POST[password]',
					hak_akses='$_POST[level]'");
		if($kl){			
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=t_keuangan' />";
		}
		else{
			}
		}
}
?>