<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_produksi where id_jenis='$id'";
	$hasil=mysql_query($view);
	if($dataproduksi=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_produksi_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">Produksi</div></td>
  </tr>
  <tr>
    <td>ID_JENIS</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_jenis" value="<?php echo $dataproduksi[0]; ?>" readonly="true"/></td>
  </tr>
  <tr>
    <td width="241">NAMA</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nama_jenis" value="<?php echo $dataproduksi[1]; ?>"/></td>
  </tr>
  <tr>
    <td>HARGA PER/KG</td>
    <td>:Rp</td>
    <td><input class="field" type="text" name="harga" value="<?php echo $dataproduksi[2]; ?>"/></td>
  </tr>
  <tr>
    <td colspan="3">
      <input name="submit" type="submit" value="ubah" /></td>
    </tr>
    <?php } ?>
</table>
</form>