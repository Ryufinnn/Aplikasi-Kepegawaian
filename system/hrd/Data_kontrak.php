<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.field{width:400px;}
.field:hover{border:1px #00F solid;}
</style>
</head>

<body>
<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<script>
$(document).ready(function() {
	$("div#b").hide();
	$("#openb").click(function(){
		$("div#b").slideDown("slow");
	});	
	$("#closeup").click(function(){
		$("div#b").slideUp("slow");	
	});		
	$("#b2 a").click(function () {
		$("#b2 a").toggle();
	});	
});
$(document).ready(function() {
$("#closeup2").click(function(){
		$("div#b").slideDown("slow");
		//$("div#b").slideUp("slow");	
	});	
});

function slcjabatan1(a1,a2){
  $('input[name=id_jabatan]').val(a1);
  $('input[name=jabatan]').val(a2);
  tb_remove(); // hilangkan dialog thickbox
}
function slcdept(a1,a2){
  $('input[name=id_departemen]').val(a1);
  $('input[name=departemen]').val(a2);
  tb_remove(); // hilangkan dialog thickbox
}
</script>

 <form name="Input Data Pegawai" action="" method="post" enctype="multipart/form-data">
<table width="710" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <H2>INPUT DATA STAFF KARYAWAN </H2>
    </div></td>
  </tr>
  <tr align="left">
    <td width="166">Nip</td>
    <td width="21">:</td>
    <td width="507"><input class="field" type="text" name="nip" /></td>
  </tr>
  <tr align="left">
    <td>Nama</td>
    <td>:</td>
    <td><input class="field" type="text" name="nama" /></td>
  </tr>
  <tr align="left">
    <td>Tanggal Lahir</td>
    <td></td>
    <td><input name="tanggal" type="text" id="tanggal" size="20" />
      <input name="tanggal" type="button" id="tanggal" onclick="return showCalendar('tanggal','y-mm-d');" value="..." /></td>
    </tr>

  <tr align="left">
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input class="field" type="text" name="tempat_lahir" /></td>
  </tr>
  <tr align="left">
    <td>agama</td>
    <td>:</td>
     <td><select name="agama" id="agama">
       <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Katolik">Hindu</option>
        <option value="Budha">Budha</option>
</select></td>
  </tr>
  <tr align="left">
  	<td>No Telp</td>
    <td>:</td>
    <td><input class="field" type="text" name="no_telp" /></td>
  <tr align="left">
    <td>Alamat</td>
    <td>:</td>
    <td><input class="field" type="text" name="alamat" /></td>
  </tr>
  <tr align="left">
    <td>Status</td>
    <td>:</td>
    <td><input type="radio" name="status" value="lajang" id="closeup" />
      Lajang
      <input type="radio" name="status" value="kawin" id="openb" />
      Kawin
      <input type="radio" name="status" value="duda" id="closeup2"  />
      Duda/Janda
	  <div id="b">
	  <br>
	  <span class="style1">.</span>	  <br>
	  <span class="style1">.</span>
	  <input type="text" name="jmlAnak" value="Jumlah Anak" onBlur="if(this.value=='') this.value='Jumlah Anak';" onFocus="if(this.value=='Jumlah Anak') this.value='';" />
	  <br>
	  <span class="style1">.</span> </div></td>
  </tr>
  <tr align="left">
    <td>Kota</td>
    <td>:</td>
    <td><input class="field" type="text" name="kota" /></td>
  </tr>
  <tr align="left">
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jenis_kelamin" value="pria" />
      Pria
      <input type="radio" name="jenis_kelamin" value="wanita" />
      Wanita</td>
  </tr>
  <tr align="left">
    <td>Pendidikan</td>
    <td>:</td>
     <td>
    <select name="Pendidikan">
          <option>SMA</option>
          <option>DIPLOMA</option>
        <option>S1</option>
          <option>S2</option>
       </select>    </td>
  </tr>
 <tr align="left">
    <td>Jabatan</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="hidden" name="id_jabatan" />
	<a href="popup/jabatan1.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
	<input class="field" type="text" name="jabatan" /></a></td>
  </tr>
 
  <!--<tr align="left">
    <td>Status Pegawai</td>
    <td>:</td>
    <td><input type="radio" name="status_pegawai" value="tetap" />
      Tetap
      <input type="radio" name="status_pegawai" value="kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="buruh" />
      Buruh</td>
  </tr>-->
  <tr align="left">
    <td>Masa Kerja</td>
    <td>:</td>
    <td><input name="Masa_kerja" type="text" id="Masa_kerja" size="20" />
      <input name="Masa_kerja" type="button" id="Masa_kerja" onclick="return showCalendar('Masa_kerja','y-mm-d');" value="..." /></td>
  </tr>
  <tr align="left">
    <td>Npwp</td>
    <td>:</td>
    <td><input class="field" type="text" name="npwp" /></td>
  </tr>
  <tr align="left">
    <td>No Rekening</td>
    <td>:</td>
    <td><input class="field" type="text" name="no_rekening" /></td>
  </tr>
  <tr align="left">
    <td>Email</td>
    <td>:</td>
    <td><input class="field" type="text" name="email" /></td>
  </tr>
	<tr align="left">
    <td>Foto</td>
    <td>:</td>
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td colspan="7" align="right">
    <input class="button" type="submit" value="Simpan" name="xx" />
    <input class="button" type="reset" value="Batal" />    </td>
  </tr>
</table>
</form>
</body>
</html>
<?PHP
include"koneksi.php";
if(isset($_POST[xx])){
$cek=mysql_query("select * from pegawai_tetap where nip='$_POST[nip]'");
	$r=mysql_num_rows($cek);
$cek2=mysql_query("select * from pegawai_kontrak where nip='$_POST[nip]'");
	$r2=mysql_num_rows($cek2);
$cek3=mysql_query("select * from data_buruh where nip='$_POST[nip]'");
	$r3=mysql_num_rows($cek3);
if($r!=0){
	echo"<script>window.alert('Data Nip Telah Ada');</script>";
}
else if($r2!=0){
	echo"<script>window.alert('Data Nip Telah Ada');</script>";
}
else if($r3!=0){
	echo"<script>window.alert('Data Nip Telah Ada');</script>";
}
else{
$sql=mysql_query("INSERT INTO pegawai_kontrak set 
									nip='$_POST[nip]', 
									nama='$_POST[nama]',
									tanggal_lahir='$_POST[tanggal]',
									tempat_lahir='$_POST[tempat_lahir]', 
									  agama='$_POST[agama]', 
									  no_telp='$_POST[no_telp]', 
									  alamat='$_POST[alamat]', 
									  status='$_POST[status]', 
									  kota='$_POST[kota]', 
									  jenis_kelamin='$_POST[jenis_kelamin]', 
									  pendidikan='$_POST[Pendidikan]', 
									  id_jabatan='$_POST[id_jabatan]', 
									  id_departemen='$_POST[id_departemen]', 
									  status_pegawai='kontrak', 
									   jmlAnak='$_POST[jmlAnak]',
									  npwp='$_POST[npwp]', 
									  no_rekening='$_POST[no_rekening]', 
									  email='$_POST[email]', 
									  masa_kerja='$_POST[Masa_kerja]',
									  foto='$upload'");
if($sql){
	echo"<script>window.alert('Berhasil')</script>"	;
	echo"<meta http-equiv='refresh' content='0;URL=?page=kontrak' />";
}
else{
		echo"<script>window.alert('Gagal')</script>"	;
		}
	}

}
?>