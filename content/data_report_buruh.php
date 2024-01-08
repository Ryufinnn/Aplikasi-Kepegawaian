<body>
<h1 align="left">DATA REPORT</h1><hr />
<form method="post" action="addreport.php">
<table width="766">
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td>ID Report</td>
    <td><input class="field" type="text" name="id_report" /></td>
    </label></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td><select name="tgl" id="tgl">
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
    <td width="485"><input class="field" type="text" name="nip" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input class="field" type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Jumlah Yang Dihasilkan</td>
    <td><input class="field" type="text" name="jumlah" /></td>
  </tr>
  <tr>
    <td>ID Jenis</td>
     <td><input class="field" type="text" name="id_jenis" /></td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td>
    <select name="jenis">
          <option value="robusta">Robusta</option>
          <option value="arabica">Arabica</option>
    </select> /KG
    </td>
  </tr>
  <tr>
    <td>Upah Per/Kg</td>
     <td>Rp<input class="field" type="text" name="upah" /></td>
    </tr>
     <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
