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
<?php
include"koneksi.php";
	$ii=mysql_query("select * from pegawai_tetap where nip='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
 <form name="Input Data Pegawai" action="" method="post" enctype="multipart/form-data">
<table width="710" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <H2>UPDATE DATA PEGAWAI</H2></div></td>
  </tr>
  <tr>
    <td width="166">Nip</td>
    <td width="21">:</td>
    <td width="507"><input name="nip" type="text" class="field" value="<?php echo "$kk[nip]" ?>" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input name="nama" type="text" class="field" value="<?php echo "$kk[nama]" ?>" /></td>
  </tr>
   <tr align="left">
    <td>Tanggal Lahir</td>
    <td><strong>:</strong></td>
    <td><input name="tanggal" type="text" id="tanggal" size="20" />
      <input name="tanggal" type="button" id="tanggal" onclick="return showCalendar('tanggal','y-mm-d');" value="<?php echo "$kk[tanggal_lahir]" ?>" /></td>
    </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input name="tempat_lahir" type="text" class="field" value="<?php echo "$kk[tempat_lahir]" ?>" /></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
     <td><input name="agama" type="text" class="field" value="<?php echo "$kk[agama]" ?>" /></td>
  </tr>
  <tr>
  	<td>No Telp</td>
    <td>:</td>
    <td><input name="no_telp" type="text" class="field" value="<?php echo "$kk[no_telp]" ?>" /></td>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input name="alamat" type="text" class="field" value="<?php echo "$kk[alamat]" ?>" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><input type="radio" name="status" value="lajang" />
      Lajang
      <input type="radio" name="status" value="kawin" />
      Kawin
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jenis_kelamin" value="pria" />
      Pria
      <input type="radio" name="jenis_kelamin" value="wanita" />
      Wanita</td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
     <td>
   <input name="pendidikan" type="text" class="field" value="<?php echo "$kk[pendidikan]" ?>" />  </td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><input name="id_jabatan" type="text" class="field" value="<?php echo "$kk[jabatan]" ?>" /></td>
  </tr>
  
  
  <!--<tr>
    <td>Status Pegawai</td>
    <td>:</td>
    <td><input type="radio" name="status_pegawai" value="tetap" />
      Tetap
      <input type="radio" name="status_pegawai" value="kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="buruh" />
      Buruh</td>
  </tr>-->
  
  
	
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
$upload_path = "images/post/";
			// handle aplikasi : apabila folder yang dimaksud tidak ada, maka akan dibuat
			if (!is_dir($upload_path)){
				mkdir($upload_path);
				opendir($upload_path);
			}
			$file = $_FILES['fupload']['name'];
			$tmp  = $_FILES['fupload']['tmp_name'];	
			move_uploaded_file($tmp, $upload_path.$file);
$sql=mysql_query("update pegawai_tetap set 
									nip='$_POST[nip]', 
									nama='$_POST[nama]',
									tanggal_lahir='$_POST[tanggal]',
									tempat_lahir='$_POST[tempat_lahir]', 
									  agama='$_POST[agama]', 
									  no_telp='$_POST[no_telp]', 
									  alamat='$_POST[alamat]', 
									  status='$_POST[status]', 
									   
									  jenis_kelamin='$_POST[jenis_kelamin]', 
									  pendidikan='$_POST[Pendidikan]', 
									  jabatan='$_POST[id_jabatan]' 
									   
									   where nip='$_GET[id]'");
if($sql){
	echo"<script>window.alert('Berhasil');history.back(1)</script>"	;
		echo"<meta http-equiv='refresh' content='0;URL=?page=pegawai' />";

}
else{
		echo"<script>window.alert('Gagal')</script>"	;
		}
	}


?>