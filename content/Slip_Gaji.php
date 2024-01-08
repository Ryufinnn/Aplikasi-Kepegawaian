<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">Slip Gaji</div></td>
  
  </tr>
  <tr>
    <td>ID_GAJI</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="241">TANGGAL</td>
    <td>:</td>
    <td>
    <select name="tanggal_buka">
      <option selected="selected">dd</option>
      <?
            for ($i=1; $i<=31; $i++)
                {?>
      <option value="<? echo($i);?>"> <? echo ($i); ?></option>
      <? } ?>
    </select>
        <select name="select">
          <option selected="selected">mm</option>
          <?
            for ($i=1; $i<=12; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
        </select>
        <select name="select">
          <option selected="selected">yyyy</option>
          <?
            for ($i=1980; $i<=2010; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
      </select></td>
      </tr>
</td>
  </tr>
  <tr>
    <td>NIP</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ID_JABATAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>JABATAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ID_DEPARTEMEN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>DEPARTEMEN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>SECTION</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>GAJI POKOK</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>LEMBUR</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>UANG MAKAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TRANSPORTASI</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TUNJANGAN HARI RAYA</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TUNJANGAN HARI TUA</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TUNJANGAN KECELAKAAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TUNJANGAN KEMATIAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TUNJANGAN KESEHATAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>POTONGAN</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td>PPh 21</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
    <td>GAJI BERSIH</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
