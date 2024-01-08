<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
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
function slcjabatan(a1,a2,a3,a4){
  $('input[name=id_jabatan]').val(a1);
  $('input[name=jabatan]').val(a2);
  $('input[name=golongan]').val(a3);
  $('input[name=gaji]').val(a4);
  tb_remove(); // hilangkan dialog thickbox
}

</script>
<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<?php
include"koneksi.php";
	$ii=mysql_query("select * from jenjang_karir where id_karir='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
<form method="post" action="">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <p class="style1">Jenjang Karir</p>
      </div></td>  
  </tr>
  <tr>
<td>TANGGAL</td>
<td>:</td>
    <td><input name="tanggal" type="text" id="tanggal" size="20" />
      <input name="tanggal" type="button" id="tanggal" onClick="return showCalendar('tanggal','y-mm-d');" value="..." /></td>
</tr>
  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485"><a href="popup/pegawai.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <input class="field" type="text" name="nip" value="<?php echo $kk[nip]; ?>" readonly /></a></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input name="nama" type="text" readonly /></td>
  </tr>
 <tr>
    <td>Id Jabatan</td>
    <td>:</td>
    <td><a href="popup/jabatan.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <input name="id_jabatan" type="text" value="<?php echo $kk[id_jabatan]; ?>" /></a></td>
  </tr>
 <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><input name="jabatan" type="text" /></td>
  </tr>
 <tr>
    <td>Golongan</td>
    <td>:</td>
    <td><input name="golongan" type="text" value="<?php echo $kk[golongan]; ?>" /></td>
  </tr>
  <tr>
    <td>Gaji Pokok</td>
    <td>Rp</td>
    <td>
        <input type="text" name="gaji" id="gaji" value="<?php echo $kk[gaji_pokok]; ?>"/>    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input name="keterangan" type="text" value="<?php echo $kk[keterangan]; ?>"/></td>
  </tr>
 <tr>
    <td colspan="2" align="right">&nbsp;</td>
    <td><input class="button" type="submit" name="submit" value="Simpan" />      <input class="button" type="reset" value="Batal" /></td>
 </table>
</form>
<?php
if(isset($_POST[submit])) {
include"koneksi.php";
$sq=mysql_query("update jenjang_karir set
							nip='$_POST[nip]',
							id_jabatan='$_POST[id_jabatan]',
							golongan='$_POST[golongan]',
							gaji_pokok='$_POST[gaji]',
							tanggal='$_POST[tanggal]',
							keterangan='$_POST[keterangan]'
							where id_karir='$_GET[id]'");
				
							echo"<script>window.alert('Berhasil')</script>";
							echo"<meta http-equiv='refresh' content='0;URL=?page=ubahjenjangkarir' />";
}
?>