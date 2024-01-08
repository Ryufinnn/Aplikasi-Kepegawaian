<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">LAPORAN REPORT BURUH</div></td>
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
</table>
<table width="914" border="1">
  <tr>
  	<td width="74"><div align="center">TANGGAL</div></td>
    <td width="59"><div align="center">NIP</div></td>
    <td width="172"><div align="center">NAMA</div></td>
    <td width="146"><div align="center">JUMLAH YANG DIHASILKAN</div></td>
    <td width="83"><div align="center">JENIS</div></td>
    <td width="142"><div align="center">UPAH PER/KG</div></td>
    <td width="192"><div align="center">TOTAL</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
