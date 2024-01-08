<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">Hitung PPh 21</div></td>
  
  </tr>
  <tr>
    <td>ID_PAJAK</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="241">TANGGAL</td>
    <td width="18">:</td>
    <td width="485">
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
  <tr>
    <td>ID_GAJI</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PTKP</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PKP</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>JUMLAH</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</body>
</html>
