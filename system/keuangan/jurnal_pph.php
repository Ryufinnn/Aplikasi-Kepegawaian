<?php 
	include"../../koneksi.php";
	include"../../inc/fungsi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2>&nbsp;&nbsp;&nbsp;Jurnal PPH 21 </h2>
<?php
if(!empty($_GET[nip]) and empty($_GET[bulan]) and empty($_GET[bulan])){
	echo"<script>window.alert('Maaf Bulan dan tahun Masih Kosong');</script>";
	$pph=mysql_query("select * from pph_21 order by id_pph");
}
else if(!empty($_GET[nip]) and !empty($_GET[bulan]) and !empty($_GET[bulan])){
	$pph=mysql_query("select * from pph_21 where nip like '%$_GET[nip]%' and year(tgl_pph)='$_GET[tahun]' and month(tgl_pph)='$_GET[bulan]' order by id_pph");
}
else{
	$pph=mysql_query("select * from pph_21 order by id_pph");
}
		
?>
<table width="100%" border="0" bgcolor="#BBBBBB" style="font-size:12px; font-family:'Times New Roman', Times, serif">
  <tr>
    <td width="35" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>No</strong></div></td>
    <td width="112" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Tanggal</strong></div></td>
    <td width="150" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Nip</strong></div></td>
    <td width="228" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Nama</strong></div></td>
    <td width="119" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Golongan</strong></div></td>
    <td bgcolor="#97E6FF"><div align="center"><strong>Debet</strong></div></td>
    <td bgcolor="#97E6FF"><div align="center"><strong>Kredit</strong></div></td>
  </tr>
  <tr>
    <td width="137" bgcolor="#97E6FF"><div align="center">PPH 21 Sebulan </div></td>
    <td width="148" bgcolor="#97E6FF"><div align="center">PPH 21 Terhutang </div></td>
  </tr>
 <?php
$warna1 = "#FFDDDD";   // baris genap berwarna hijau tua 
$warna2 = "#FFFFFF";   // baris ganjil berwarna hijau muda
$warna  = $warna1;     // warna default
 	while($tpph=mysql_fetch_array($pph)){
if($warna == $warna1){
  $warna = $warna2;
} 
else {
  $warna = $warna1;
}
if($tpph[golongan]=="Tetap"){
	$tbl="pegawai_tetap";
}
else if($tpph[golongan]=="Kontrak"){
	$tbl="pegawai_kontrak";
}
$nm=mysql_query("select * from $tbl where nip='$tpph[nip]'");
		$nma=mysql_fetch_array($nm);
		
$nm2=mysql_query("select * from jabatan where id_jabatan='$nma[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
$sm1=mysql_query("select sum(pph_sebulan) as pph_sebulan from pph_21");
		$smt=mysql_fetch_array($sm1);
$no++;
 ?>
  <tr bgcolor="<?php echo $warna ?>">
    <td ><center>
      <?php echo $no; ?>
    </center></td>
    <td ><center>
      <?php echo $tpph[tgl_pph]; ?>
    </center></td>
    <td ><center>
      <?php echo $tpph[nip]; ?>
    </center></td>
    <td ><center>
      <?php echo $nma[nama]; ?>
    </center></td>
    <td ><div align="center"><?php echo "Pegawai ".$tpph[golongan]; ?></div></td>
    <td ><div align="right"><?php echo format_rupiah($tpph[pph_sebulan]); ?></div></td>
    <td ><div align="right"><?php echo format_rupiah($tpph[pph_sebulan]); ?></div></td>
  </tr>
 <?php } ?>
  <tr>
    <td colspan="5" bgcolor="#97E6FF"><div align="center"><strong>Total</strong></div></td>
    <td bgcolor="#97E6FF"><div align="right"><strong><?php echo format_rupiah($smt[pph_sebulan]); ?></strong></div></td>
    <td bgcolor="#97E6FF"><div align="right"><strong><?php echo format_rupiah($smt[pph_sebulan]); ?></strong></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
