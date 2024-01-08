
<body>
<h1 align="left">DATA ABSENSI</h1><hr />
<form method="post" action="adddataabsensi.php">
<table width="766">
<tr>
<td>TANGGAL</td>
    <td>
    <select name="tgl" id="tgl">
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
    <td>Jam Masuk</td>
    <td>
    	<input class="field" type="text" name="jam_masuk" />
    </td>
  </tr>
  <tr>
    <td>Jam Keluar</td>
    <td>
    <input class="field" type="text" name="jam_keluar" />
    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>
      <input name="keterangan" type="radio" value="1">
      Alpha
      <input name="keterangan" type="radio" value="2">
      Sakit
      <input name="keterangan" type="radio" value="3">
      Izin 
      <input name="keterangan" type="radio" value="4">
      Cuti
      <input name="keterangan" type="radio" value="0" checked="checked">
      Hadir
      <input name="keterangan" type="radio" value="5">
      Lembur
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
