
<body>
<form method="post" action="addjabatan.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">JABATAN</div></td>
  
  </tr>
  <tr>
    <td>ID_JABATAN</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_jabatan" /></td>
  </tr>
  <tr>
    <td width="241">NAMA JABATAN</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nama_jabatan" /></td>
  </tr>
  <tr>
    <td>GOLONGAN</td>
    <td>:</td>
    <td>
    <select name="golongan">
          <option value="satu">I</option>
          <option value="dua">II</option>
        <option value="tiga">III</option>
       </select>
    </td>
  </tr>
   <tr>
    <td>GAJI POKOK</td>
    <td>Rp</td>
    <td><input class="field" type="text" name="gaji_pokok" /></td>
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
