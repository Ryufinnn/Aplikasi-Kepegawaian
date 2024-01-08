<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_buruh where nip='$id'";
	$hasil=mysql_query($view);
	if($data=mysql_fetch_row($hasil)){
?>
<form method="post" action="update_buruh_script.php">
<table width="766">
  <tr>
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $data[0]; ?>" readonly="true" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input class="field" type="text" name="nama" value="<?php echo $data[1]; ?>"/></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>
    <select name="tgl" id="tgl">
    <?
	$dt=$data[2];
	$arr=split ("-",$dt);
	$mm=$arr[1];
	$dd=$arr[2];
	$yy=$arr[0];
	?>
      <option selected="selected" value="<?php echo $dd;?>"><?php echo $dd;?></option>
      <?
            for ($i=1; $i<=31; $i++)
                {?>
      <option value="<? echo($i);?>"> <? echo ($i); ?></option>
      <? } ?>
    </select>
        <select name="bln" id="bln" >
          <option selected="selected" <option selected="selected" value="<?php echo $mm;?>"><?php echo $mm;?></option>
          <?
            for ($i=1; $i<=12; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
        </select>
        <select name="thn" id="thn">
          <option selected="selected" value="<?php echo $yy;?>"><?php echo $yy;?></option>
          <?
            for ($i=1980; $i<=2010; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
      </select></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><input class="field" type="text" name="tempat_lahir" value="<?php echo $data[3]; ?>"/></td>
  </tr>
    <tr>
    <td>Agama</td>
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
    <td><input class="field" type="text" name="noTelp" value="<?php echo $data[5]; ?>"/></td>
   </tr>
  <tr>
    <td>Alamat</td>
    <td><input class="field" type="text" name="alamat" value="<?php echo $data[6]; ?>"/></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="radio" name="status" />
      Lajang
      <input type="radio" name="status" value="Kawin" />
      Kawin
      <input type="radio" name="status" value="DudaJanda"  />
      Duda/Janda</td>
  </tr>
  <tr>
    <td>Kota</td>
    <td><input class="field" type="text" name="kota" value="<?php echo $data[8]; ?>"/></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="JK" value="Pria" />
      Pria
      <input type="radio" name="JK" value="Wanita" />
      Wanita</td>
  </tr>
  <tr>
    <td>Pendidikan</td>
     <td>
    <select name="Pendidikan" value="<?php echo $data[10]; ?>">
          <option value="SMA">SMA</option>
          <option value="Diploma">DIPLOMA</option>
        <option value="S1">S1</option>
          <option value="S2">S2</option>
       </select>
    </td>
    </tr>
     <tr>
    <td>ID Departemen</td>
    <td><input class="field" type="text" name="id_departemen" value="<?php echo $data[11]; ?>"/></td>
  </tr>
  <tr>
    <td>Departemen</td> 
    <td><input class="field" type="text" name="departemen" value="<?php echo $data[12]; ?>"/></td>
  </tr>
  <tr>
    <td>Status Kepegawaian</td>
    <td><input type="radio" name="status_pegawai" value="Tetap"/>
      Tetap
      <input type="radio" name="status_pegawai" value="Kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="Buruh"  />
      Buruh</td>
  </tr>
  <tr>
    <td>Masa Kerja</td>
    <td>
    <select name="Masa_kerja" >
    <? for ($i=2008; $i<=2020; $i++)
	{ ?>
          <option value="<?=$i;?>"  ><?=$i; ?></option>
<?}; ?>
       </select>
    
    </td>
  </tr>
  <tr>
    <td>Foto</td> 
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
<?php } ?>
</table>
</form>