<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">LAPORAN DATA LEMBUR</div></td>
  
  </tr>
  <tr>
    <td>TANGGAL</td>
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
  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485">&nbsp;</td>
  </tr>
   <tr>
    <td width="241">NAMA</td>
    <td width="18">:</td>
    <td width="485">&nbsp;</td>
  </tr>
   <tr>
    <td width="241">ID_DEPARTEMEN</td>
    <td width="18">:</td>
    <td width="485">&nbsp;</td>
  </tr>
   <tr>
    <td width="241">DEPARTEMEN</td>
    <td width="18">:</td>
    <td width="485">&nbsp;</td>
  </tr>
</table>
<table width="768" border="1">
  <tr>
    <td width="84"><div align="center">Tanggal</div></td>
    <td width="197"><div align="center">Jam Mulai</div></td>
    <td width="222"><div align="center">Jam Selesai</div></td>
    <td width="237"><div align="center">Upah Lembur/Jam</div></td>
    <td width="237"><div align="center">Jumlah Jam</div></td>
    <td width="237"><div align="center">Total Upah</div></td>
    <td width="237"><div align="center">Keterangan</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
