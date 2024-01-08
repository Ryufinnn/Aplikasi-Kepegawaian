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
    <div align="center">Input Data Jabatan </div>
    </span></td>
  </tr>
   <tr>
    <td width="162">Id Jabatan</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="kode" size="50" /></td>
  </tr>
  <tr>
    <td width="162">Jabatan</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="najab" size="50"></td>
  </tr>
 <tr>
    <td>Gaji Pokok</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="gapok" size="50"></td>
  </tr>
 
  <tr>
    <td colspan="3"><div align="right"><input type="submit" name="simp" value="simpan"></div></td>
  </tr>
  </table>
  <br><br><br><br><br><br><br><br><br>
</form>
<?php
if(isset($_POST[simp])){
$dt=date("Y-m-d");
include('koneksi.php');
$cek=mysql_query("select * from jabatan where kd_jabatan='$_POST[kode]'");
	$r=mysql_num_rows($cek);

if($r!=0){
	echo"<script>window.alert('Data Sudah Ada');</script>";
}

else{
	$kl=mysql_query("insert into jabatan set 
	kd_jabatan='$_POST[kode]',
					nama_jabatan='$_POST[najab]',
					
					gaji_pokok='$_POST[gapok]'");
		if($kl){
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=jabatan' />";
		}
		else{}
	}
}
?>