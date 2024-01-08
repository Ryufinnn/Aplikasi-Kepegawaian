<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>

<body>
<h1 align="left">DATA BURUH</h1>

 <form name="Input Data buruh" action="" method="post" enctype="multipart/form-data">
<table width="766">
  <tr>
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input class="field" type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
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
    </td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><input class="field" type="text" name="tempat_lahir" /></td>
  </tr>
  <tr>
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
  <tr>
  	<td>No Telp</td>
    <td><input class="field" type="text" name="noTelp" /></td>
  <tr>
    <td>Alamat</td>
    <td><input class="field" type="text" name="alamat" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="radio" name="status" value="Lajang" /> Lajang
      <input type="radio" name="status" value="Kawin" /> Kawin
      <input type="radio" name="status" value="DudaJanda"  /> Duda/Janda</td>
  </tr>
  <tr>
    <td>Kota</td>
    <td><input class="field" type="text" name="kota" /></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="JK" value="Pria" />
      Pria
      <input type="radio" name="JK" value="Wanita" />
      Wanita</td>
  </tr>
  <tr>
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
     <tr>
    <td>ID Departemen</td>
    <td><input class="field" type="text" name="id_departemen" /></td>
  </tr>
  <tr>
    <td>Departemen</td> 
    <td><input class="field" type="text" name="departemen" /></td>
  </tr>
  <tr>
    <td>Status Kepegawaian</td>
    <td><input type="radio" name="status_pegawai" value="Tetap" />
      Tetap
      <input type="radio" name="status_pegawai" value="Kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="Buruh"  />
      Buruh</td>
  </tr>
  <tr>
    <td>Masa Kerja</td>
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
    <td>Foto</td> 
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Simpan" name="smp" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
$bln=$_POST['bln'];
$tgl=$_POST['tgl'];
$thn=$_POST['thn'];
$foto = $_FILES['foto']['name'];
$tanggal="$thn/$bln/$tgl";
if(isset($_POST[smp])){
	$uu=mysql_query("insert into data_buruh set
					nip='$_POST[nip]',
					nama='$_POST[nama]',
					Tanggal_lahir='$tanggal',
					Tempat_lahir='$_POST[tempat_lahir]',
					Agama='$_POST[agama]',
					No_Telp='$_POST[noTelp]',
					Alamat='$_POST[alamat]',
					Status='$_POST[status]',
					Kota='$_POST[kota]',
					Jenis_Kelamin='$_POST[JK]',
					Pendidikan='$_POST[Pendidikan]',
					id_departemen='$_POST[id_departemen]',
					status_departemen='$_POST[departemen]',
					id_jabatan='-',
					status_pegawai='$_POST[status_pegawai]',
					masa_kerja='$_POST[Masa_kerja]',
					foto='$foto'");
	if($uu){echo"<script>window.alert('Berhasil')</script>";}
	else{echo"<script>window.alert('Gagal')</script>";}
}

?>