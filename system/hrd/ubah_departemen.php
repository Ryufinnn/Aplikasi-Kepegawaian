<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/thickbox/thickbox.css">
<script type="text/javascript" src="js/thickbox/thickbox.js"></script>
    <script type="text/javascript">
function selectKnt(knt,knt2){
  $('input[name=nip]').val(knt);
  tb_remove(); // hilangkan dialog thickbox
}

</script>

<body>
<h1 align="left">Ubah Data Departemen</h1><hr />
<?php
include"koneksi.php";
	$ii=mysql_query("select * from departemen where id_departemen='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
<form method="post" action="">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">DEPARTEMEN</div></td>
  
  </tr>
  <tr>
    <td width="241">NAMA DEPARTEMEN</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nama_departemen" value="<?php echo $kk[nama_departemen]?>"/></td>
  </tr>
  <tr>
    <td>SECTION</td>
    <td>:</td>
    <td><input class="field" type="text" name="section" value="<?php echo $kk[section]?>"/></td>
  </tr>
 <tr>
    <td colspan="2" align="right">
    <input class="button" name="submit" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php include"koneksi.php";
if(isset($_POST[submit])){
	$KK=mysql_query("update departemen set
						nama_departemen='$_POST[nama_departemen]',
						section='$_POST[section]'
						where id_departemen='$_GET[id]'");
}
 ?> 