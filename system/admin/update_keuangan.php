<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>

<form method="post" action="">
<br />
<?php
include"koneksi.php";
	$rr=mysql_query("select * from keuangan where nip='$_GET[id]'");
		$dd=mysql_fetch_array($rr);
		
 ?>

<table width="521" border="0" align="center" id="rpt">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Update Data User </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="nip_hrd" size="50" value="<?php echo $dd[nip] ?>"></td>
  </tr>
  <tr>
    <td width="162">Password</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="hidden" name="password" size="50"  value="<?php echo $dd[password] ?>" />
    <input type="password" name="password2" size="50"  value="<?php echo $dd[password] ?>" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nama_hrd" size="50"  value="<?php echo $dd[nama_keuangan] ?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><textarea name="alamat_hrd"><?php echo $dd[alamat_keuangan] ?></textarea></td>
  </tr>
  <tr>
    <td>Hp </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="hp_hrd" size="20"   value="<?php echo $dd[hp_keuangan] ?>">  </tr>
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
if($_POST[tgll]>$dt){
	echo"<script>window.alert('Maaf Tanggal Jangan Lebih dari tanggal Sekarang')</script>";
}
else{
	$kl=mysql_query("update keuangan set 
					nip='$_POST[nip_hrd]',
					password='$_POST[password]',
					nama_keuangan='$_POST[nama_hrd]',
					alamat_keuangan='$_POST[alamat_hrd]',
					
					hp_keuangan='$_POST[hp_hrd]',
					
					hak_akses='$_POST[level]' where 
						nip='$_GET[id]'");
	$ks=mysql_query("update user set 
					nip='$_POST[nip_hrd]',
					password='$_POST[password]',
					hak_akses='$_POST[level]' where nip='$_GET[id]'");
	echo"<script>window.alert('Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=keuangan' />";
	}
}
?>