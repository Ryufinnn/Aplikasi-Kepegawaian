<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_report where id_report='$id'";
	$hasil=mysql_query($view);
	if($data_report=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_report_script.php">
<h1 align="left">DATA REPORT</h1><hr />
<table width="766">
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td>ID Report</td>
    <td><input class="field" type="text" name="id_report" value="<?php echo $data_report[0]; ?>" readonly="true"></td>
    </label></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td><select name="tgl" id="tgl">
    <?
	$dr=$datareport[1];
	$arr=split ("-",$dr);
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
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $data_report[2]; ?>"/></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input class="field" type="text" name="nama" value="<?php echo $data_report[3]; ?>" /></td>
  </tr>
  <tr>
    <td>Jumlah Yang Dihasilkan</td>
    <td><input class="field" type="text" name="jumlah" value="<?php echo $data_report[3]; ?>"/></td>
  </tr>
  <tr>
    <td>ID Jenis</td>
     <td><input class="field" type="text" name="id_jenis" value="<?php echo $data_report[4]; ?>" /></td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td>KG
    <select name="jenis">
          <option value="robusta">Robusta</option>
          <option value="arabica">Arabica</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Upah Per/Kg</td>
     <td>Rp<input class="field" type="text" name="upah" value="<?php echo $data_report[5]; ?>"/></td>
    </tr>
     <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Ubah" />
    </td>
  </tr>
  <?php } ?>
</table>
