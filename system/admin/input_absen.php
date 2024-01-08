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
    <div align="center">Tambah Absen </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">Kode Absensi</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="kode" size="50"></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nip" size="50" /></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="jabatan" size="50"></td>
  </tr>
  <tr>
    <td>Bulan</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><select name="bulan"><option>----Pilih Bulan----</option>
	<option value="Januari">Januari</option>
	<option value="Februari">Februari</option>
	<option value="Maret">Maret</option>
	<option value="April">April</option>
	<option value="Mei">Mei</option>
	<option value="Juni">Juni</option>
	<option value="Juli">Juli</option>
	<option value="Agustus">Agustus</option>
	<option value="September">September</option>
	<option value="Oktober">Oktober</option>
	<option value="November">November</option>
	<option value="Desember">Desember</option></select></td>
  </tr>
  <tr>
    <td>Tahun </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><select name="tahun"><option>----Pilih Tahun----</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>
	<option value="2015">2015</option>
	<option value="2016">2016</option>
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	</select>  </tr>
  <tr>
    <td>Hadir</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="hadir" size="50"></td>
  </tr>
   <tr>
    <td>Absen</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="absen" size="50"></td>
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
	$kl=mysql_query("insert into absen set 
					kode='$_POST[kode]',
					nip='$_POST[nip]',
					jabatan='$_POST[jabatan]',
					bulan='$_POST[bulan]',
					tahun='$_POST[tahun]',
					hadir='$_POST[hadir]',
					absen='$_POST[absen]',;
	
		if($kl){			
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=absensi' />";
		}
		else{
			
		}
}
?>