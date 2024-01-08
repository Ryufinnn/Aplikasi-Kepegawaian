<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from pegawai_tetap where nip='$id'";
	$hasil=mysql_query($view);
	if($datapegawai=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_pegawai_script.php">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">DATA PEGAWAI</div></td>
  </tr>
  <tr>
    <td width="241">Nip</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $datapegawai[0]; ?>" readonly="true" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input class="field" type="text" name="nama" value="<?php echo $datapegawai[1]; ?>"/></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td></td>
    <td>
    <select name="tgl" id="tgl">
    <?
	$dp=$datapegawai[2];
	$arr=split ("-",$dp);
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
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input class="field" type="text" name="tempat_lahir" value="<?php echo $datapegawai[3]; ?>"/></td>
  </tr>
  <tr>
    <td>agama</td>
    <td>:</td>
     <td><input type="radio" name="agama" value="islam" />
      Islam
      <input type="radio" name="agama" value="kristen"/>
      Kristen
      <input type="radio" name="agama" value="katolik"  />
      Katolik
      <input type="radio" name="agama" value="hindu" />
      Hindu
      <input type="radio" name="agama" value="budha" />
      Budha    </td>
  </tr>
  <tr>
  	<td>No Telp</td>
    <td>:</td>
    <td><input class="field" type="text" name="no_telp" value="<?php echo $datapegawai[5]; ?>"/></td>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input class="field" type="text" name="alamat" value="<?php echo $datapegawai[6]; ?>"/></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><input type="radio" name="status" value="lajang" />
      Lajang
      <input type="radio" name="status" value="kawin" />
      Kawin
      <input type="radio" name="status" value="duda"  />
      Duda/Janda</td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>:</td>
    <td><input class="field" type="text" name="kota" value="<?php echo $datapegawai[8]; ?>"/></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jenis_kelamin" value="pria" />
      Pria
      <input type="radio" name="jenis_kelamin" value="wanita" />
      Wanita</td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
     <td>
    <select name="Pendidikan">
          <option>SMA</option>
          <option>DIPLOMA</option>
        <option>S1</option>
          <option>S2</option>
       </select>    </td>
  </tr>
  <tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_jabatan" value="<?php echo $datapegawai[11]; ?>"/></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><input class="field" type="text" name="jabatan" value="<?php echo $datapegawai[12]; ?>"/></td>
  </tr>
  <tr>
    <td>Id_Departemen</td>
    <td>:</td>
    <td><input class="field" type="text" name="id_departemen" value="<?php echo $datapegawai[13]; ?>"/></td>
  </tr>
  <tr>
    <td>Departemen</td>
    <td>:</td>
    <td><input class="field" type="text" name="departemen" value="<?php echo $datapegawai[14]; ?>"/></td>
  </tr>
  <tr>
    <td>Status Pegawai</td>
    <td>:</td>
    <td><input type="radio" name="status_pegawai" value="tetap" />
      Tetap
      <input type="radio" name="status_pegawai" value="kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="buruh" />
      Buruh</td>
  </tr>
  <tr>
    <td>Masa Kerja</td>
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
    <td>Npwp</td>
    <td>:</td>
    <td><input class="field" type="text" name="npwp" value="<?php echo $datapegawai[17]; ?>"/></td>
  </tr>
  <tr>
    <td>No Rekening</td>
    <td>:</td>
    <td><input class="field" type="text" name="no_rekening" value="<?php echo $datapegawai[18]; ?>"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><input class="field" type="text" name="email" value="<?php echo $datapegawai[19]; ?>"/></td>
  </tr>
	<tr>
    <td>Foto</td>
    <td>:</td>
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td colspan="7" align="right">
    <input class="button" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />    </td>
  </tr>
  <?php } ?>
</table>
</form>

