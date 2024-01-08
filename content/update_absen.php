<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_absensi where nip='$id'";
	$hasil=mysql_query($view);
	if($dataabsen=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_absen_script.php">
<table width="766">
<tr>
<td>TANGGAL</td>
    <td>
    <select name="tgl" id="tgl">
    <?
	$da=$data[0];
	$arr=split ("-",$da);
	$mm=$arr[1];
	$dd=$arr[2];
	$yy=$arr[0];
	?>
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
      </select></td>
</tr>
  <tr>
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $dataabsen[1]; ?>" readonly="true"/></td>
  </tr>
  <tr>
    <td>Jam Masuk</td>
    <td>
    	<input class="field" type="text" name="jam_masuk" value="<?php echo $dataabsen[2]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Jam Keluar</td>
    <td>
    <input class="field" type="text" name="jam_keluar" value="<?php echo $dataabsen[3]; ?>"/>
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
    <input class="button" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
 <?php } ?>
</table>
</form>
</body>
</html>
