<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>

<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/thickbox/thickbox.css">
<script type="text/javascript" src="js/thickbox/thickbox.js"></script>
    <script type="text/javascript">
function slcdept(a1){
  $('input[name=id_departemen]').val(a1);
  tb_remove(); // hilangkan dialog thickbox
}
</script>

<body>
<h1 align="left">DATA BURUH</h1><hr />

 <form name="Input Data buruh" action="" method="post" enctype="multipart/form-data">
<table width="766" align="left" class="tbls"> 
  <tr align="left" valign="middle">
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" /></td>
  </tr>
  <tr align="left">
    <td>Nama</td>
    <td><input class="field" type="text" name="nama" /></td>
  </tr>
  <tr align="left">
    <td>Tanggal Lahir</td>
    <td>
    <input name="tanggal" type="text" id="tanggal" size="20">
        <input name="tanggal" type="button" id="tanggal" onClick="return showCalendar('tanggal','y-mm-d');" value="..."></td>
   
  </tr>
  <tr align="left">
    <td>Tempat Lahir</td>
    <td><input class="field" type="text" name="tempat_lahir" /></td>
  </tr>
  <tr align="left">
    <td>Agama</td> 
     <td><input type="radio" name="agama" value="Islam" />
      Islam
      <input type="radio" name="agama" value="Kristen" />
      Kristen
      <input type="radio" name="agama" value="Katolik"  />
      Katolik
      <input type="radio" name="agama" value="Hindu" />
      Hindu
      <input type="radio" name="agama"  value="Budha"/>
      Budha
    </td>
  </tr>
  <tr align="left">
  	<td>No Telp</td>
    <td><input class="field" type="text" name="noTelp" /></td>
  <tr align="left">
    <td>Alamat</td>
    <td><input class="field" type="text" name="alamat" /></td>
  </tr>
  <tr align="left">
    <td>Status</td>
    <td><input type="radio" name="status" value="Lajang" /> Lajang
      <input type="radio" name="status" value="Kawin" /> Kawin
      <input type="radio" name="status" value="DudaJanda"  /> Duda/Janda</td>
  </tr>
  <tr align="left">
    <td>Kota</td>
    <td><input class="field" type="text" name="kota" /></td>
  </tr>
  <tr align="left">
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="JK" value="Pria" />
      Pria
      <input type="radio" name="JK" value="Wanita" />
      Wanita</td>
  </tr>
  <tr align="left">
    <td>Pendidikan</td>
     <td>
    <select name="Pendidikan">
          <option value="SMA">SMA</option>
          <option value="Diploma">DIPLOMA</option>
        <option value="S1">S1</option>
          <option value="S2">S2</option>
       </select>
    </td>
    </tr>
     <tr align="left">
    <td>ID Departemen</td>
    <td><a href="popup/departemen.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox"><input class="field" type="text" name="id_departemen" /></a></td>
  </tr>
  
  <tr align="left">
    <td>Status Kepegawaian</td>
    <td><input type="radio" name="status_pegawai" value="Tetap" />
      Tetap
      <input type="radio" name="status_pegawai" value="Kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="Buruh"  />
      Buruh</td>
  </tr>
  <tr align="left">
    <td>Masa Kerja</td>
    <td>
    <input name="Masa_kerja" type="text" id="Masa_kerja" size="20">
        <input name="Masa_kerja" type="button" id="Masa_kerja" onClick="return showCalendar('Masa_kerja','y-mm-d');" value="...">
    
    </td>
  </tr>
  <tr align="left">
    <td>Foto</td> 
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr align="left">
    <td colspan="2">
    <input class="button" type="submit" value="Simpan" name="smp" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>

</form>
</body>
</html>
<?php
include"koneksi.php";

//$foto = $_FILES['foto']['name'];

if(isset($_POST[smp])){
$nm_file=$_FILES["foto"]["name"];
$fil_size=$_FILES["foto"]["size"];
$tempat=$_FILES["foto"]["tmp_name"];
$ty=$_FILES["foto"]["type"];

	$uu=mysql_query("insert into data_buruh set
					nip='$_POST[nip]',
					nama='$_POST[nama]',
					Tanggal_lahir='$_POST[tanggal]',
					Tempat_lahir='$_POST[tempat_lahir]',
					Agama='$_POST[agama]',
					No_Telp='$_POST[noTelp]',
					Alamat='$_POST[alamat]',
					Status='$_POST[status]',
					Kota='$_POST[kota]',
					Jenis_Kelamin='$_POST[JK]',
					Pendidikan='$_POST[Pendidikan]',
					id_departemen='$_POST[id_departemen]',
					status_pegawai='$_POST[status_pegawai]',
					masa_kerja='$_POST[Masa_kerja]',
					foto='$nm_file'");

	if($uu){
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=buruh' />";
		$direktori = "file_upload/$nm_file";
 move_uploaded_file($tempat,"$direktori");}
	else{echo"<script>window.alert('Gagal')</script>";}
}

?>