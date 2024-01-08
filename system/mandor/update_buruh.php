<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_buruh where nip='$id'";
	$hasil=mysql_query($view);
	if($data=mysql_fetch_row($hasil)){
?>

<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>

<form method="post" action="" enctype="multipart/form-data">
  <h2>Update Buruh </h2>
  <table width="766" class="tbls">
  <tr>
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $data[0]; ?>" readonly="true" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input class="field" type="text" name="nama" value="<?php echo $data[1]; ?>"/></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>
    <input name="tanggal_lahir" type="text" id="tanggal_lahir" size="20">
      <input name="tanggal_lahir" type="button" id="tanggal_lahir" onClick="return showCalendar('tanggal_lahir','y-mm-d');" value="..."></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><input class="field" type="text" name="tempat_lahir" value="<?php echo $data[3]; ?>"/></td>
  </tr>
    <tr>
    <td>Agama</td>
     <td><input type="radio" name="agama" value="islam" />
      Islam
      <input type="radio" name="agama" value="kristen"/>
      Kristen
      <input type="radio" name="agama" value="katolik"  />
      Katolik
      <input type="radio" name="agama" value="hindu" />
      Hindu
      <input type="radio" name="agama" value="budha" />
      Budha    </td>
  </tr>
  <tr>
  	<td>No Telp</td>
    <td><input class="field" type="text" name="noTelp" value="<?php echo $data[5]; ?>"/></td>
   </tr>
  <tr>
    <td>Alamat</td>
    <td><input class="field" type="text" name="alamat" value="<?php echo $data[6]; ?>"/></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="radio" name="status" />
      Lajang
      <input type="radio" name="status" value="Kawin" />
      Kawin
      <input type="radio" name="status" value="DudaJanda"  />
      Duda/Janda</td>
  </tr>
  <tr>
    <td>Kota</td>
    <td><input class="field" type="text" name="kota" value="<?php echo $data[8]; ?>"/></td>
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
    <select name="Pendidikan" value="<?php echo $data[10]; ?>">
          <option value="SMA">SMA</option>
          <option value="Diploma">DIPLOMA</option>
        <option value="S1">S1</option>
          <option value="S2">S2</option>
       </select>
    </td>
    </tr>
     <tr>
    <td>ID Departemen</td>
    <td><input class="field" type="text" name="id_departemen" value="<?php echo $data[11]; ?>"/></td>
  </tr>
  
  <tr>
    <td>Status Kepegawaian</td>
    <td><input type="radio" name="status_pegawai" value="Tetap"/>
      Tetap
      <input type="radio" name="status_pegawai" value="Kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="Buruh"  />
      Buruh</td>
  </tr>
  <tr>
    <td>Masa Kerja</td>
    <td>
    <input name="Masa_kerja" type="text" id="Masa_kerja" size="20">
    <input name="Masa_kerja" type="button" id="Masa_kerja" onClick="return showCalendar('Masa_kerja','y-mm-d');" value="...">
    
    </td>
  </tr>
  <tr>
    <td height="32">Foto</td> 
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    <input name="simp" type="submit" class="submit" id="smp" value="Simpan" />
    <a href=javascript:history.go(-1)><input class="button" type="button" value="Batal" /></a>
    </td>
  </tr>
<?php } ?>
</table>
</form>
<?php
include"koneksi.php";

$foto = $_FILES['foto']['name'];

if(isset($_POST[simp])){


$kl=mysql_query("update data_buruh set 
					
					nama='$_POST[nama]',
					Tanggal_lahir='$_POST[tanggal_lahir]',
					Tempat_lahir='$_POST[tempat_lahir]',
					Agama='$_POST[agama]',
					No_Telp='$_POST[noTelp]',
					Alamat='$_POST[alamat]',
					Status='$_POST[status]',
					Kota='$_POST[kota]',
					Jenis_Kelamin='$_POST[JK]',
					Pendidikan='$_POST[Pendidikan]',
					id_departemen='$_POST[id_departemen]',
					status_pegawai='$_POST[departemen]',
					status_pegawai='$_POST[status_pegawai]',
					masa_kerja='$_POST[Masa_kerja]',
					foto='$foto' 
					where 
						nip='$_GET[id]'");
	
	if ($kl){
	echo"<script>window.alert('Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=buruh' />";
	}
	else
	{
		echo"<script>window.alert('Gagal di Ubah'):history.back(0)</script>";
	
		}
	}

?>