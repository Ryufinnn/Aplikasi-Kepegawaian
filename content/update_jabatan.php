<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from jabatan where id_jabatan='$id'";
	$hasil=mysql_query($view);
	if($jabatan=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_jabatan_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">JABATAN</div></td>
  
  </tr>
  <tr>
    <td>ID_JABATAN</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_jabatan" value="<?php echo $jabatan[0]; ?>" readonly="true"></td>
  </tr>
  <tr>
    <td width="241">NAMA JABATAN</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nama_jabatan" value="<?php echo $jabatan[1]; ?>"/></td>
  </tr>
  <tr>
    <td>GOLONGAN</td>
    <td>:</td>
    <td><input class="field" type="text" name="golongan" value="<?php echo $jabatan[2]; ?>"/></td>
  </tr>
   <tr>
    <td>GAJI POKOK</td>
    <td>:</td>
    <td><input class="field" type="text" name="gaji_pokok" value="<?php echo $jabatan[3]; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Ubah" />
    </td>
  </tr>
<?php } ?>
</table>
</form>

