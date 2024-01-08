
<form method="post" action="" enctype="multipart/form-data">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <h1>Input Produksi</h1><hr />
    </div></td>
  </tr>
  <tr>
    <td width="241" align="left" valign="middle">NAMA</td>
    <td width="18" align="left" valign="middle">:</td>
    <td width="485" align="left" valign="middle"><input class="field" type="text" name="nama_jenis" /></td>
  </tr>
  <tr>
    <td align="left" valign="middle">HARGA PER/KG</td>
    <td align="left" valign="middle">:Rp</td>
    <td align="left" valign="middle"><input class="field" type="text" name="harga" /></td>
  </tr>
  <tr>
    <td colspan="3">
      <input name="smp" type="submit" value="Simpan" />
       <a href=javascript:history.go(-1)><input class="button" type="button" value="Batal" /></a>
      </td>
    </tr>

</table>
</form>
<?php
include"koneksi.php";
if(isset($_POST[smp])){
	$uu=mysql_query("insert into data_produksi set
					
					nama_jenis='$_POST[nama_jenis]',
					harga='$harga'");
	if($uu){
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=produksi' />";
	}
	else{echo"<script>window.alert('Gagal')</script>";}
}

?>