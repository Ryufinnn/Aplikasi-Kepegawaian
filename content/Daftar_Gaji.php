<body>
<form method="post" action="addgaji.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">Data_Gaji</div></td>
  </tr>
  <tr>
    <td>Id_Gaji</td>
    <td>:</td>
    <td>
        <input type="text" name="id_gaji"/>
    </td>
  </tr>
  <tr>
    <td width="242">Tanggal</td>
    <td width="17">:</td>
    <td width="491">
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
    <td>Nip</td>
    <td>:</td>
    <td>
        <input type="text" name="nip"/>
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td>
        <input type="text" name="nama" />
    </td>
  </tr>
  <tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td>
            <input type="text" name="id_jabatan" />
    </td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>
    <input type="text" name="jabatan" id="jabatan" />
    </td>
  </tr>
  <tr>
    <td>Gaji pokok</td>
    <td>Rp</td>
      <td>
        <input type="text" name="gaji_pokok" id="gaji_pokok" />
      </td>
  </tr>

  <tr>
    <td>Id_Departemen</td>
    <td>:</td>
    <td>
    <input type="text" name="id_departemen" id="id_departemen"/>
    </td>
  </tr>
  <tr>
    <td>Departemen</td>
    <td>:</td>
    <td>
        <input type="text" name="departemen" id="departemen"/>
    </td>
  </tr>
  <tr>
    <td>Lembur</td>
    <td>:</td>
    <td>
        <input type="text" name="lembur" id="lembur"/>
    </td>
  </tr>
  <tr>
    <td>Uang Makan</td>
    <td>Rp</td>
    <td>
        <input type="text" name="makan" id="makan" />
    </td>
  </tr>
  <tr>
    <td>Transportasi</td>
    <td>Rp</td>
    <td>
        <input type="text" name="transportasi" id="transportasi" />
    </td>
  </tr>
  <tr>
    <td>Tunjangan Istri</td>
    <td>Rp</td>
    <td>
        <input type="text" name="istri" id="istri" />
    </td>
  </tr>
  <tr>
    <td>Tunjangan Anak</td>
    <td>Rp</td>
    <td>
        <input type="text" name="anak" id="anak"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Hari Tua</td>
    <td>Rp</td>
    <td>
        <input type="text" name="hari_tua" id="hari_tua" />
    </td>
  </tr>
  <tr>
    <td>Tunjangan Kecelakaan</td>
    <td>Rp</td>
    <td> 
        <input type="text" name="kecelakaan" id="kecelakaan"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Kesehatan</td>
    <td>Rp</td>
    <td>
        <input type="text" name="kesehatan" id="kesehatan"/>
     </td>
  </tr>
  <tr>
    <td>Tunjangan Kematian</td>
    <td>Rp</td>
    <td>
         <input type="text" name="kematian" id="kematian"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Hari Raya</td>
    <td>Rp</td>
    <td>
        <input type="text" name="hari_raya" id="hari_raya"/>
    </td>
  </tr>
  <tr>
    <td>Jumlah Produksi</td>
    <td>KG</td>
    <td>
        <input type="text" name="jumlah" id="jumlah"/>
    </td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td>:</td>
    <td>
    <input type="text" name="jenis" id="jenis"/>
    </td>
  </tr>
  <tr>
    <td>Harga per unit</td>
    <td>Rp</td>
    <td>
    <input type="text" name="harga" id="harga"/>
    </td>
  </tr>
  <tr>
    <td>Bonus</td>
    <td>Rp</td>
    <td>
    <input type="text" name="bonus" id="bonus" />
    </td>
  </tr>
  <tr>
    <td>Potongan</td>
    <td>Rp</td>
    <td>
        <input type="text" name="potongan" id="potongan"/>
    </td>
  </tr>
  <tr>
    <td>Gaji Kotor</td>
    <td>Rp</td>
    <td>
        <input type="text" name="gaji" id="gaji"/>
    </td>
  </tr>
  <tr>
    <td>Total Upah</td>
    <td>Rp</td>
    <td>
        <input type="text" name="upah" id="upah"/>
    </td>
  </tr>
  <td colspan="3" align="right">
    <input class="button" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
</table>
</body>
</html>