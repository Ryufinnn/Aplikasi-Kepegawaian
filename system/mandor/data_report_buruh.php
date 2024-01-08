
<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
    <script type="text/javascript">
function slcproduk(a1,a2,a3){
  $('input[name=id_jenis]').val(a1);
  $('input[name=napro]').val(a2);
  $('input[name=hapro]').val(a3);
  tb_remove(); // hilangkan dialog thickbox
}
</script>

<body>
<h1 align="left">DATA REPORT</h1><hr />
<form method="post" action="" enctype="multipart/form-data">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"></td>
  </tr>
  
  <tr align="left" valign="middle">
    <td>Tanggal</td>
    <td><input name="tgl" type="text" id="tgl" size="20">
        <input name="tgl" type="button" id="tgl" onClick="return showCalendar('tgl','y-mm-d');" value="..."></td>
  </tr>
  <tr align="left" valign="middle">
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" /></td>
  </tr>
  
  <tr align="left" valign="middle">
    <td>Jumlah Yang Dihasilkan</td>
    <td><input class="field" type="text" name="jumlah" />
      /KG </td>
  </tr>
  <tr align="left" valign="middle">
    <td>ID Produk</td>
     <td><a href="popup/produk.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox"><input class="field" type="text" name="id_jenis" /></a></td>
  </tr>
  <tr align="left" valign="middle">
    <td>Nama Produk</td>
     <td><input class="field" type="text" name="napro" /></td>
  </tr>
  <tr align="left" valign="middle">
    <td>Harga Produk</td>
     <td><input class="field" type="text" name="hapro" /></td>
  </tr>
  <tr align="left" valign="middle">
    <td>Upah Per/Kg</td>
    <td>Rp<input class="field" type="text" name="upah" /></td>
  </tr>
     <tr>
    <td colspan="2" align="right">
    <input class="simp" type="submit" value="Simpan" name="simp" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
include "koneksi.php";

if(isset($_POST[simp])){
	$uu=mysql_query("insert into data_report set
					nip='$_POST[nip]',
					tanggal='$_POST[tgl]',
					jumlah='$_POST[jumlah]',
					id_jenis='$_POST[id_jenis]',
					upah='$_POST[upah]'");
	if($uu){
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=report' />";
	}
	else{echo"<script>window.alert('Gagal')</script>";}
}

?>