<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_produksi where id_jenis='$id'";
	$hasil=mysql_query($view);
	if($dataproduksi=mysql_fetch_row($hasil)){
?>
<form method="post" action="" enctype="multipart/form-data">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <h1>Produksi</h1><hr />
    </div></td>
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
      <input name="simp" type="submit" value="ubah" />
       <a href=javascript:history.go(-1)><input class="button" type="button" value="Batal" /></a>
      </td>
    </tr>
    <?php } ?>
</table>
</form>
<?php
include"koneksi.php";

if(isset($_POST[simp])){

	$kl=mysql_query("update data_produksi set 
					nama_jenis='$_POST[nama_jenis]',
					harga='$_POST[harga]'
					where id_jenis='$_GET[id]'");
	if ($kl){
	echo"<script>window.alert('Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=produksi' />";
	}
	else
	{
		echo"<script>window.alert('Gagal di Ubah'):history.back(0)</script>";
	
		}
	}
?>