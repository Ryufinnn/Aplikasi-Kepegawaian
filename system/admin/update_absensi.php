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
	$rr=mysql_query("select * from absen where kode='$_GET[id]'");
		$dd=mysql_fetch_array($rr);
		
 ?>

<table width="521" border="0" align="center" id="rpt">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Ubah Absen </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">Kode Absensi</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="kode" size="50" value="<?php echo $dd[kode] ?>"></td>
  </tr>
  <tr>
    <td width="162">Nip</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nip" size="50"  value="<?php echo $dd[nip] ?>" />
   </td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="jabatan" size="50"  value="<?php echo $dd[jabatan] ?>"></td>
  </tr>
  <tr>
    <td>Bulan</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="bulan" size="50"  value="<?php echo $dd[bulan] ?>"></td>
  </tr>
  <tr>
    <td>Tahun </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="tahun" size="15"   value="<?php echo $dd[tahun] ?>"> </tr>
  <tr>
    <td>Hadir</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="hadir" size="50"   value="<?php echo $dd[hadir] ?>"></td>
  </tr>
   <tr>
    <td>Absen</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="absen" size="50"   value="<?php echo $dd[absen] ?>"></td>
  </tr>
  <tr>
    <td>Sakit</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="sakit" size="50"   value="<?php echo $dd[sakit] ?>"></td>
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
	$kl=mysql_query("update absen set 
					kode='$_POST[kode]',
					nip='$_POST[nip]',
					jabatan='$_POST[jabatan]',
					bulan='$_POST[bulan]',
					tahun='$_POST[tahun]',
					hadir='$_POST[hadir]',
					absen='$_POST[absen]',
					sakit='$_POST[sakit]' where 
						kode='$_GET[id]'");
	
	echo"<script>window.alert('Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=absensi' />";
	}
}
?>