<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>
<?php
if(isset($_GET[simp])){

if(empty($_POST[nip_admin])){
		echo"<div class='status warning'>
        	<p><img SRC='images/icon_warning.png' alt='Warning' /><span> Peringatan!</span> NIP Masih Kosong.</p></div>";
}
else if(empty($_POST[password])){
		echo"<div class='status warning'>
        	<p><img SRC='images/icon_warning.png' alt='Warning' /><span> Peringatan!</span> Password Masih Kosong.</p></div>";
}
else if(empty($_POST[password2])){
		echo"<div class='status warning'>
        	<p><img SRC='images/icon_warning.png' alt='Warning' /><span> Peringatan!</span> Password Baru Masih Kosong.</p></div>";
}
else{

if(empty($_POST[password2])){
		$sq=mysql_query("update user set
							nip='$_POST[nip_admin]'
							where nip='$_SESSION[spadmin]'");
		}
else{
		$sq=mysql_query("update user set
							nip='$_POST[nip_admin]',
							password='$_POST[password2]'
							where nip='$_SESSION[spadmin]'");


		}
				if($sq){
					echo"
					<div class='status success'><p><img SRC='images/icon_success.png' alt='Success' /> <span>Berhasil!</span> Data Telah Tersimpan.
					</p></div><meta http-equiv='refresh' content='0;URL=?page=settingadmin'>";
			}
				else{
					echo"<div class='status error'><p><img SRC='images/icon_error.png' alt='Error' /><span>GAGAL!</span> Ada Kesalahan Penyimpanan.</p>
        </div>";
		}
	}
}
$yy=mysql_query("select * from user where hak_akses='admin'");
	$ty=mysql_fetch_array($yy);
?>
<form method="post" action="">
<br />
<table width="521" border="0" align="center" id="rpt">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Setting Admin </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input name="nip_admin" type="text" id="nip_admin" size="50" value="<?php echo $ty[nip] ?>"></td>
  </tr>
  <tr>
    <td width="162">Password Lama </td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input name="password" type="password" id="password" size="50" value="<?php echo $ty[password] ?>" /></td>
  </tr>
  <tr>
    <td>Password Baru </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input name="password2" type="text" id="password2" size="50" value="<?php echo $_POST[password2] ?>"></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right"><input type="submit" name="simp" value="Simpan"></div></td>
  </tr>
  </table>
</form>