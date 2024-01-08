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
function selectKnt(knt,knt2,knt3,knt4){
  $('input[name=nip]').val(knt);
  $('input[name=nama]').val(knt2);
  $('input[name=nama_departemen]').val(knt3);
  $('input[name=section]').val(knt4);
  tb_remove(); // hilangkan dialog thickbox
}
function slclembur(a1,a2){
  $('input[name=nama_departemen]').val(a1);
  $('input[name=section]').val(a2);
  tb_remove(); // hilangkan dialog thickbox
}
function jml(){
	var jmljam = $('input[name=jml_jam]').val();
	var total = jmljam * 12500;
	var totuph = $('input[name=total_upah]').val(total);

}
</script>
<body>
<form method="post" action="">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">DATA LEMBUR</div></td>
  </tr>
  <tr>
    <td>TANGGAL</td>
    <td><strong>:</strong></td>
    <td><input name="tgl" type="hidden" id="tgl" value="<?php echo date("Y-m-d"); ?>"><?php echo date("Y-m-d"); ?></td>
  </tr>
  <tr>
    <td width="241">NIP</td>
    <td width="18"><strong>:</strong></td>
    <td width="485"><a href="popup/pgw-lembur.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <input class="field" type="text" name="nip" readonly  /></a></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="nama" readonly /></td>
  </tr>
  <tr>
    <td>NAMA DEPARTEMEN</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="nama_departemen" readonly /></td>
  </tr>
  <tr>
    <td>SECTION</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="section" readonly /></td>
  </tr>
  <tr>
    <td>JAM MULAI</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="jam_mulai" value="00:00:00"  onBlur="if(this.value=='') this.value='00:00:00';" onFocus="if(this.value=='00:00:00') this.value='';" /></td>
  </tr>
  <tr>
    <td>JAM SELESAI</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="jam_selesai" value="00:00:00"  onBlur="if(this.value=='') this.value='00:00:00';" onFocus="if(this.value=='00:00:00') this.value='';" /></td>
  </tr>
  <tr>
    <td>JUMLAH JAM</td>
    <td><strong>:</strong></td>
    <td><input name="jml_jam" type="text" class="field" id="jml_jam" size="1" maxlength="2" onKeyPress="jml()" /> 
      Jam </td>
  </tr>
  <tr>
    <td>UPAH LEMBUR</td>
    <td><strong>Rp</strong></td>
    <td><input name="uph" type="text" class="field" id="uph" value="12.500" />
      <input name="uph2" type="hidden" class="field" value="12500" /> 
      / Jam</td>
  </tr>
  <tr>
    <td>TOTAL UPAH</td>
    <td><strong>Rp</strong></td>
    <td><input name="total_upah" type="text" class="field" id="total_upah" /></td>
  </tr>
  <tr>
    <td>KETERANGAN</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="ket" /></td>
  </tr>
    <tr>
    <td colspan="3" align="right">
    <input class="button" name="submit" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />    </td>
  </tr>
</table>
</form>
</body>
</html>
<?PHP
include"koneksi.php";
if(isset($_POST[submit])){
$m=date(m);
$sql=mysql_query("INSERT INTO data_lembur set 
									tanggal='$_POST[tgl]', 
									nip='$_POST[nip]',
									jam_mulai='$_POST[jam_mulai]',
									jam_selesai='$_POST[jam_selesai]',
									nama_departemen='$_POST[nama_departemen]',
									jml_jam='$_POST[jml_jam]',
									upah_lembur='$_POST[uph2]',
									totalUph='$_POST[total_upah]',
									keterangan='$_POST[ket]',bulan='$m'");
echo"<script>window.alert('Berhasil')</script>";
							echo"<meta http-equiv='refresh' content='0;URL=?page=lembur' />";
}
?>