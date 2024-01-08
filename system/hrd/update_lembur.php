<style type="text/css">
.tbls tr td div {
	font-size: 18px;
	font-weight: bold;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/thickbox/thickbox.css">
<script type="text/javascript" src="js/thickbox/thickbox.js"></script>
    <script type="text/javascript">
function selectKnt(knt,knt2){
  $('input[name=nip]').val(knt);
  $('input[name=nama]').val(knt2);
  tb_remove(); // hilangkan dialog thickbox
}
function slclembur(a1,a2){
  $('input[name=nama_departemen]').val(a1);
  $('input[name=section]').val(a2);
  tb_remove(); // hilangkan dialog thickbox
}
</script>

<body>
<?php
include"koneksi.php";
	$ii=mysql_query("select * from data_lembur where id_lembur='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
<form method="post" action="">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">DATA LEMBUR</div></td>
  </tr>
  <tr>
    <td>TANGGAL</td>
    <td>:</td>
    <td><input name="tgl" type="hidden" id="tgl" value="<?php echo date("Y-m-d"); ?>"><?php echo date("Y-m-d"); ?></td>
  </tr>
  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485"><a href="popup/pegawai.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <input class="field" type="text" name="nip" readonly  value="<?php echo $kk[nip]?>"/></a></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td><input class="field" type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>NAMA DEPARTEMEN</td>
    <td>:</td>
    <td><a href="popup/datalembur.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox"><input class="field" type="text" name="nama_departemen" value="<?php echo $kk[nama_departemen]?>"/></a></td>
  </tr>
  <tr>
    <td>SECTION</td>
    <td>:</td>
    <td><input class="field" type="text" name="section" /></td>
  </tr>
  <tr>
    <td>JAM MULAI</td>
    <td>:</td>
    <td><input class="field" type="text" name="jam_mulai" value="<?php echo $kk[jam_mulai]?>"/></td>
  </tr>
  <tr>
    <td>JAM SELESAI</td>
    <td>:</td>
    <td><input class="field" type="text" name="jam_selesai" value="<?php echo $kk[jam_selesai]?>"/></td>
  </tr>
  <tr>
    <td>KETERANGAN</td>
    <td>:</td>
    <td><input class="field" type="text" name="ket" value="<?php echo $kk[keterangan]?>"/></td>
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
	$KK=mysql_query("update data_lembur set
						tanggal='$_POST[tgl]',
						nip='$_POST[nip]',
						nama_departemen='$_POST[nama_departemen]',
						jam_mulai='$_POST[jam_mulai]',
						jam_selesai='$_POST[jam_selesai]',
						keterangan='$_POST[ket]'
						where id_lembur='$_GET[id]'");
}
 ?> 