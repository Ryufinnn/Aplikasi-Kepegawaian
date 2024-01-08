<body>
<form method="post" action="addposisi.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">POSISI</div></td>
  </tr>
  <tr>
    <td>ID_POSISI</td>
    <td>:</td>
    <td>
        <input type="text" name="id_posisi" id="id_posisi">
    </td>
  </tr>
  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485">
        <input type="text" name="nip" id="nip">
    </td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td>
        <input type="text" name="nama" id="nama">
    </td>
  </tr>
  <tr>
    <td>ID_DEPARTEMEN</td>
    <td>:</td>
    <td>
        <input type="text" name="id_departemen" id="id_departemen">
        </td>
  </tr>
  <tr>
    <td>DEPARTEMEN</td>
    <td>:</td>
    <td><input type="text" name="departemen" id="departemen">
    </td>
  </tr>
  <tr>
    <td>KETERANGAN</td>
    <td>:</td>
    <td>
        <input type="text" name="keterangan" id="keterangan">
        </td>
  </tr>
   <tr>
    <td>MASA KERJA</td>
    <td>:</td>
    <td>
    <select name="Masa_kerja">
    <? for ($i=2008; $i<=2020; $i++)
	{ ?>
          <option value="<?=$i;?>"  ><?=$i; ?></option>
<?}; ?>
       </select>
    
    </td>
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
