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
<h1 align="left">Ubah Data Absensi</h1><hr />
<?php
include"koneksi.php";
	$ii=mysql_query("select * from data_absensi where id_absensi='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
<form method="post" action="">
<table width="766" class="tbls" >
<tr>
<td>TANGGAL</td>
    <td>
    <!--<select name="tgl" id="tgl">
      <option selected="selected">dd</option>
      <?
            for ($i=1; $i<=31; $i++)
                {?>
      <option value="<? echo($i);?>"> <? echo ($i); ?></option>
      <? } ?>
    </select>
        <select name="bln" id="bln">
          <option selected="selected">mm</option>
          <?
            for ($i=1; $i<=12; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
        </select>
        <select name="thn" id="thn">
          <option selected="selected">yyyy</option>
          <?
            for ($i=1980; $i<=2010; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
      </select>-->
      <?php echo date("Y-m-d"); ?>
      <input name="tgl" type="hidden" id="tgl" value="<?php echo $kk[tanggal]; ?>"></td>
</tr>
  <tr>
    <td width="241">Nip</td>
    <td width="485"><a href="popup/pegawai.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <input name="nip" type="text" class="field" value="<?php echo $kk[nip] ?>" readonly /></a></td>
  </tr>
  <tr>
    <td>Jam Masuk</td>
    <td>
    	<input name="jam_masuk" type="text" class="field" value="<?php echo $kk[jam_masuk] ?>" />
    </td>
  </tr>
  <tr>
    <td>Jam Keluar</td>
    <td>
    <input name="jam_keluar" type="text" class="field" value="<?php echo $kk[jam_keluar] ?>" />
    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>
      <input name="keterangan" type="radio" value="1">
      Alpha
      <input name="keterangan" type="radio" value="2">
      Sakit
      <input name="keterangan" type="radio" value="3">
      Izin 
      <input name="keterangan" type="radio" value="4">
      Cuti
      <input name="keterangan" type="radio" value="0" checked="checked">
      Hadir
      <input name="keterangan" type="radio" value="5">
      Lembur
      </tr>
	 <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Simpan" name="xx" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php include"koneksi.php";
if(isset($_POST[xx])){
	$KK=mysql_query("update data_absensi set
						tanggal='$_POST[tgl]',
						nip='$_POST[nip]',
						jam_masuk='$_POST[jam_masuk]',
						jam_keluar='$_POST[jam_keluar]',
						keterangan='$_POST[keterangan]' where id_absensi='$_GET[id]'");
}
 ?> 