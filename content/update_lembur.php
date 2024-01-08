<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from lembur where id_lembur='$id'";
	$hasil=mysql_query($view);
	if($datalembur=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_lembur_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">DATA LEMBUR</div></td>
  </tr>
  <tr>
    <td>Id_Lembur</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_lembur" value="<?php echo $datalembur[0]; ?>" readonly="true"/></td>
  </tr>
  <tr>
    <td>TANGGAL</td>
    <td>:</td>
    <td>
    <select name="tgl" id="tgl">
    <?
	$dl=$data[1];
	$arr=split ("-",$dl);
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
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $datalembur[2]; ?>"/></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td><input class="field" type="text" name="nama" value="<?php echo $datalembur[3]; ?>"/></td>
  </tr>
  <tr>
    <td>ID_DEPARTEMEN</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_departemen" value="<?php echo $datalembur[4]; ?>"/></td>
  </tr>
  <tr>
    <td>DEPARTEMEN</td>
    <td>:</td>
    <td><input class="field" type="text" name="departemen" value="<?php echo $datalembur[5]; ?>"/></td>
  </tr>
  <tr>
    <td>JAM MULAI</td>
    <td>:</td>
    <td><input class="field" type="text" name="jam_mulai" value="<?php echo $datalembur[6]; ?>"/></td>
  </tr>
  <tr>
    <td>JAM SELESAI</td>
    <td>:</td>
    <td><input class="field" type="text" name="jam_selesai" value="<?php echo $datalembur[7]; ?>"/></td>
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
