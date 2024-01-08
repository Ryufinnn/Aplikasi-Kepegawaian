<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">LAPORAN DATA ABSENSI</div></td>
  </tr>
  <tr>
  <td>Periode:</td>
  <td>
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
  <td>s/d</td>
  <select name="thn" id="thn">
          <option selected="selected">yyyy</option>
          <?
            for ($i=1980; $i<=2010; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
      </select></td>
  </tr>
    <table width="871" border="1">
    <td width="147"><div align="center">Tanggal</div></td>
    <td width="141"><div align="center">Nip</div></td>
    <td width="150"><div align="center">Nama</div></td>
    <td width="255"><div align="center">Keterangan</div></td>
   </tr>
   <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Cetak" />
    </td> 
    </tr>
</table>
</body>
</html>