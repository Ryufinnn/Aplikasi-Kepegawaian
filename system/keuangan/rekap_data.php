<div align="center"><strong>REKAP DATA PENJUALAN</strong><br />
</div>
<form id="form1" name="form1" method="post" action="?page=L-spt-T&amp;proses=cetak">
Tampil Data :
<select name="tgl1" id="tgl1">
<option> 01 </option>
<option> 02 </option>
<option> 03 </option>
<option> 04 </option>
<option> 05 </option>
<option> 06 </option>
<option> 07 </option>
<option> 08 </option>
<option> 09 </option>
<option> 10 </option>
<option> 11 </option>
<option> 12 </option>
<option> 13 </option>
<option> 14 </option>
<option> 15 </option>
<option> 16 </option>
<option> 17 </option>
<option> 18 </option>
<option> 19 </option>
<option> 20 </option>
<option> 21 </option>
<option> 22 </option>
<option> 23 </option>
<option> 24 </option>
<option> 25 </option>
<option> 26 </option>
<option> 27 </option>
<option> 28 </option>
<option> 29 </option>
<option> 30 </option>
<option> 31 </option>

</select>
<select name="bln1" id="bln1">
<option value="01" > Januari </option>
<option value="02" > Februari </option>
<option value="03" > Maret </option>
<option value="04" > April </option>
<option value="05" > Mei </option>
<option value="06" > Juni </option>
<option value="07" > Juli </option>
<option value="08" > Agustus </option>
<option value="09" > September </option>
<option value="10" > Oktober </option>
<option value="11" > Nopember </option>
<option value="12" > Desember </option>

</select>
<select name="thn1" id="thn1">
<? for($i=2010;$i<=date("Y");$i++){ ?>
<option><?=$i?></option>
<? } ?>
</select>
S.d
<select name="tgl2" id="tgl2">
<option> 01 </option>
<option> 02 </option>
<option> 03 </option>
<option> 04 </option>
<option> 05 </option>
<option> 06 </option>
<option> 07 </option>
<option> 08 </option>
<option> 09 </option>
<option> 10 </option>
<option> 11 </option>
<option> 12 </option>
<option> 13 </option>
<option> 14 </option>
<option> 15 </option>
<option> 16 </option>
<option> 17 </option>
<option> 18 </option>
<option> 19 </option>
<option> 20 </option>
<option> 21 </option>
<option> 22 </option>
<option> 23 </option>
<option> 24 </option>
<option> 25 </option>
<option> 26 </option>
<option> 27 </option>
<option> 28 </option>
<option> 29 </option>
<option> 30 </option>
<option> 31 </option>
</select>
<select name="bln2" id="select2">
<option value="01" > Januari </option>
<option value="02" > Februari </option>
<option value="03" > Maret </option>
<option value="04" > April </option>
<option value="05" > Mei </option>
<option value="06" > Juni </option>
<option value="07" > Juli </option>
<option value="08" > Agustus </option>
<option value="09" > September </option>
<option value="10" > Oktober </option>
<option value="11" > Nopember </option>
<option value="12" > Desember </option>
</select>
<select name="thn2" id="select3">
<? for($i=2010;$i<=date("Y");$i++){ ?>
<option>
<?=$i?>
</option>
<? } ?>
</select>
<input type="submit" name="Submit" value="Tampilkan" />
</form>

<?
include('koneksi.php');
include('inc/fungsi.php');
$proses=$_GET['proses'];
$tgl1=$_POST['tgl1'];
$bln1=$_POST['bln1'];
$thn1=$_POST['thn1'];
$tgl2=$_POST['tgl2'];
$bln2=$_POST['bln2'];
$thn2=$_POST['thn2'];
if($proses=='cetak'){
?>
<table width="488" border="0" cellpadding="3" cellspacing="1" bgcolor="#33CCFF">
<tr>
    <td width="62"><div align="center"><strong>NIP</strong></div></td>
    <td width="231"><div align="center"><strong>Nama Pegawai</strong></div></td>
    <td width="191"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="165"><div align="center"><strong>Tanggal Gajian</strong></div></td>
    <td width="133"><div align="center"><strong>Gaji Pokok</strong></div></td>
    <td width="156"><div align="center"><strong>Total Gaji</strong></div></td>
    <td width="246"><div align="center"><strong>Aksi </strong></div></td>
  </tr>
  <?php
   $sql=mysql_query("select * from daftar_gaji where status_pgw='Tetap'"); 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		  ?>
  <tr align="left" valign="top">
    <td><?php echo $re[nip] ?> </td>
    <td><?php echo $nma[nama] ?> </td>
    <td><?php echo $jbt[nama_jabatan] ?> </td>
    <td><?php echo $re[tanggal] ?> </td>
    <td><?php echo "Rp. ".format_rupiah($jbt[gaji_pokok]); ?> </td>
    <td><?php echo "Rp. ".format_rupiah($re[gaji_kotor]); ?> </td>
    <td align="center">
	<a href="?page=u-gaji&amp;id=<?php echo $re[id_gaji]; ?>&io=Tetap">Update</a>
	 <a href="?page=gaji-T&amp;id=<?php echo $re[id_gaji]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a> </td>
  </tr>
  <?php }
	 $sql=mysql_query("select * from daftar_gaji WHERE tanggal >= '$thn1-$bln1-$tgl1' AND tanggal <= '$thn2-$bln2-$tgl2'"); 
		$re=mysql_num_rows($sql);
		if($re==0){
	?>
  <tr align="left" valign="top">
    <td colspan="7"><div align="center">Maaf Data Belum Data</div></td>
  </tr>
  <?php } ?>
<?php } ?>

