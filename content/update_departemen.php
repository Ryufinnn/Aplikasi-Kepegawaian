<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from departemen where id_departemen='$id'";
	$hasil=mysql_query($view);
	if($departemen=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_departemen_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">DEPARTEMEN</div></td>
  
  </tr>
  <tr>
    <td>ID_DEPARTEMEN</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_departemen" value="<?php echo $departemen[0]; ?>" readonly="true"></td>
  </tr>
  <tr>
    <td width="241">NAMA DEPARTEMEN</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nama_departemen" value="<?php echo $departemen[1]; ?>"/></td>
  </tr>
  <tr>
    <td>SECTION</td>
    <td>:</td>
    <td><input class="field" type="text" name="section" value="<?php echo $departemen[2]; ?>"/></td>
  </tr>
 <tr>
    <td colspan="3">
      <input name="submit" type="submit" value="ubah" /></td>
    </tr>
  <?php } ?>
</table>
</form>
