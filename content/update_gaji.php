<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from daftar_gaji where id_gaji='$id'";
	$hasil=mysql_query($view);
	if($datagaji=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_gaji_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">Data_Gaji</div></td>
  </tr>
  <tr>
    <td>Id_Gaji</td>
    <td>:</td>
    <td>
        <input type="text" name="id_gaji" value="<?php echo $datagaji[0]; ?>" readonly="true"/>
    </td>
  </tr>
  <tr>
    <td width="242">Tanggal</td>
    <td width="17">:</td>
    <td width="491">
    <select name="tgl" id="tgl">
    <?
	$dg=$data[1];
	$arr=split ("-",$dg);
	$mm=$arr[1];
	$dd=$arr[2];
	$yy=$arr[0];
	?>
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
        <input type="text" name="nip" value="<?php echo $datagaji[2]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td>
        <input type="text" name="nama" value="<?php echo $datagaji[3]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td>
            <input type="text" name="id_jabatan" value="<?php echo $datagaji[4]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>
    <input type="text" name="jabatan" id="jabatan" value="<?php echo $datagaji[5]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Gaji pokok</td>
    <td>Rp</td>
      <td>
        <input type="text" name="gaji_pokok" id="gaji_pokok" value="<?php echo $datagaji[6]; ?>"/>
      </td>
  </tr>

  <tr>
    <td>Id_Departemen</td>
    <td>:</td>
    <td>
    <input type="text" name="id_departemen" id="id_departemen" value="<?php echo $datagaji[7]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Departemen</td>
    <td>:</td>
    <td>
        <input type="text" name="departemen" id="departemen" value="<?php echo $datagaji[8]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Lembur</td>
    <td>:</td>
    <td>
        <input type="text" name="lembur" id="lembur" value="<?php echo $datagaji[9]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Uang Makan</td>
    <td>Rp</td>
    <td>
        <input type="text" name="makan" id="makan" value="<?php echo $datagaji[10]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Transportasi</td>
    <td>Rp</td>
    <td>
        <input type="text" name="transportasi" id="transportasi" value="<?php echo $datagaji[11]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Istri</td>
    <td>Rp</td>
    <td>
        <input type="text" name="istri" id="istri" value="<?php echo $datagaji[12]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Anak</td>
    <td>Rp</td>
    <td>
        <input type="text" name="anak" id="anak" value="<?php echo $datagaji[13]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Hari Tua</td>
    <td>Rp</td>
    <td>
        <input type="text" name="hari_tua" id="hari_tua" value="<?php echo $datagaji[14]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Kecelakaan</td>
    <td>Rp</td>
    <td> 
        <input type="text" name="kecelakaan" id="kecelakaan" value="<?php echo $datagaji[15]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Kesehatan</td>
    <td>Rp</td>
    <td>
        <input type="text" name="kesehatan" id="kesehatan" value="<?php echo $datagaji[16]; ?>"/>
     </td>
  </tr>
  <tr>
    <td>Tunjangan Kematian</td>
    <td>Rp</td>
    <td>
         <input type="text" name="kematian" id="kematian" value="<?php echo $datagaji[17]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Tunjangan Hari Raya</td>
    <td>Rp</td>
    <td>
        <input type="text" name="hari_raya" id="hari_raya" value="<?php echo $datagaji[18]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Jumlah Produksi</td>
    <td>KG</td>
    <td>
        <input type="text" name="jumlah" id="jumlah" value="<?php echo $datagaji[19]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td>:</td>
    <td>
    <input type="text" name="jenis" id="jenis" value="<?php echo $datagaji[20]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Harga per unit</td>
    <td>Rp</td>
    <td>
    <input type="text" name="harga" id="harga" value="<?php echo $datagaji[21]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Bonus</td>
    <td>Rp</td>
    <td>
    <input type="text" name="bonus" id="bonus" value="<?php echo $datagaji[22]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Potongan</td>
    <td>Rp</td>
    <td>
        <input type="text" name="potongan" id="potongan" value="<?php echo $datagaji[23]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Gaji Kotor</td>
    <td>Rp</td>
    <td>
        <input type="text" name="gaji" id="gaji" value="<?php echo $datagaji[24]; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Total Upah</td>
    <td>Rp</td>
    <td>
        <input type="text" name="upah" id="upah" value="<?php echo $datagaji[25]; ?>"/>
    </td>
  </tr>
  <td colspan="3" align="right">
    <input class="button" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
   <?php } ?>
</table>
</body>
</html>