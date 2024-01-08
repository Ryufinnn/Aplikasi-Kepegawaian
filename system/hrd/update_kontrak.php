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
	$ii=mysql_query("select * from pegawai_kontrak where nip='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
 <form name="Input Data Pegawai" action="" method="post" enctype="multipart/form-data">
<table width="710" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <H2>INPUT DATA GURU HONORER</H2></div></td>
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
  <tr>
    <td>Tanggal Lahir</td>
    <td></td>
    <td>
    <select name="tgl" id="tgl">
      <option selected="selected">dd</option>
      <?
            for ($i=1; $i<=31; $i++)
                {?>
      <option value="<? echo($i);?>"> <? echo ($i); ?></option>
      <? } ?>
    </select>
        <select name="bln" id="bln">
          <option selected="selected">mm</option>
          <?
            for ($i=1; $i<=12; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
        </select>
        <select name="thn" id="thn">
          <option selected="selected">yyyy</option>
          <?
            for ($i=1980; $i<=2010; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
      </select></td>
    </tr>

  <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input name="tempat_lahir" type="text" class="field" value="<?php echo "$kk[tempat_lahir]" ?>" /></td>
  </tr>
  <tr>
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
      <input type="radio" name="status" value="duda"  />
      Duda/Janda</td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>:</td>
    <td><input name="kota" type="text" class="field" value="<?php echo "$kk[kota]" ?>" /></td>
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
    <select name="Pendidikan">
          <option>SMA</option>
          <option>DIPLOMA</option>
        <option>S1</option>
          <option>S2</option>
       </select>    </td>
  </tr>
  <tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td><input name="id_jabatan" type="text" class="field" value="<?php echo "$kk[id_jabatan]" ?>" /></td>
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
    <td>Masa Kerja</td>
    <td>:</td>
    <td>
    <select name="Masa_kerja">
    <? for ($i=2008; $i<=2020; $i++)
	{ ?>
          <option value="<?=$i;?>"  ><?=$i; ?></option>
<?}; ?>
       </select>
   </td>
  </tr>
  <tr>
    <td>Npwp</td>
    <td>:</td>
    <td><input name="npwp" type="text" class="field" value="<?php echo "$kk[npwp]" ?>" /></td>
  </tr>
  <tr>
    <td>No Rekening</td>
    <td>:</td>
    <td><input name="no_rekening" type="text" class="field" value="<?php echo "$kk[no_rekening]" ?>" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><input name="email" type="text" class="field" value="<?php echo "$kk[email]" ?>" /></td>
  </tr>
	<tr>
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
$sql=mysql_query("update pegawai_kontrak set 
									nip='$_POST[nip]', 
									nama='$_POST[nama]',
									tanggal_lahir='$tanggal',
									tempat_lahir='$_POST[tempat_lahir]', 
									  agama='$_POST[agama]', 
									  no_telp='$_POST[no_telp]', 
									  alamat='$_POST[alamat]', 
									  status='$_POST[status]', 
									  kota='$_POST[kota]', 
									  jenis_kelamin='$_POST[jenis_kelamin]', 
									  pendidikan='$_POST[Pendidikan]', 
									  id_jabatan='$_POST[id_jabatan]', 
									  
									  status_pegawai='kontrak', 
									  npwp='$_POST[npwp]', 
									  no_rekening='$_POST[no_rekening]', 
									  email='$_POST[email]', 
									  masa_kerja='$_POST[Masa_kerja]',
									  foto='$upload' where nip='$_GET[id]'");
if($sql){
	echo"<script>window.alert('Berhasil');history.back(1)</script>"	;
		echo"<meta http-equiv='refresh' content='0;URL=?page=kontrak' />";

}
else{
		echo"<script>window.alert('Gagal')</script>"	;
		}
	}


?>