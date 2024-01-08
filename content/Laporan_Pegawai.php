<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">LAPORAN PEGAWAI</div></td>
  
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
  
</table>
<table width="1400" border="1">
  <tr>
    <td width="72"><div align="center">Nama</div></td>
    <td width="87"><div align="center">Tanggal lahir</div></td>
    <td width="76"><div align="center">Tempat</div></td>
    <td width="82"><div align="center">Alamat</div></td>
    <td width="99"><div align="center">Jenis Kelamin</div></td>
    <td width="79"><div align="center">Agama</div></td>
    <td width="78"><div align="center">Pendidikan</div></td>
    <td width="107"><div align="center">Jabatan</div></td>
    <td width="69"><div align="center">Golongan</div></td>
    <td width="96"><div align="center">Departemen</div></td>
    <td width="72"><div align="center">NPWP</div></td>
    <td width="63"><div align="center">Status</div></td>
    <td width="96"><div align="center">Status Pegawai</div></td>
    <td width="99"><div align="center">No Rekening</div></td>
    <td width="131"><div align="center">EMAIL</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
