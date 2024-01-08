<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from jenjang_karir where id_karir='$id'";
	$hasil=mysql_query($view);
	if($datakarir=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_karir_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">
      <p>Jenjang_Karir</p>
      </div></td>  
  </tr>
  <tr>
<td>TANGGAL</td>
<td>:</td>
    <td>
    <select name="tgl" id="tgl">
     <?
	$dk=$datakarir[0];
	$arr=split ("-",$dk);
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
    <td width="241">Id_Karir</td>
    <td width="18">:</td>
    <td width="485"><input name="id_karir" type="text" value="<?php echo $datakarir[1]; ?>" readonly="true"/></td>
  </tr>
  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485"><input name="nip" type="text" value="<?php echo $datakarir[2]; ?>"/></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input name="nama" type="text" value="<?php echo $datakarir[3]; ?>"/></td>
  </tr>
 <tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td><input name="id_jabatan" type="text" value="<?php echo $datakarir[4]; ?>"/></td>
  </tr>
 <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><input name="jabatan" type="text" value="<?php echo $datakarir[5]; ?>"/></td>
  </tr>
 <tr>
    <td>Golongan</td>
    <td>:</td>
    <td>
    <select name="golongan">
          <option value="satu">I</option>
          <option value="dua">II</option>
        <option value="tiga">III</option>
       </select>
    </td>
  </tr>
  <tr>
    <td>Gaji_Pokok</td>
    <td>Rp</td>
    <td>
        <input name="gaji" type="text" value="<?php echo $datakarir[7]; ?>"/></td>
    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input name="keterangan" type="text" value="<?php echo $datakarir[8]; ?>"/></td>
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