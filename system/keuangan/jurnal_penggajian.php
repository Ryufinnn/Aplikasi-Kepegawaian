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

<?php
if($_GET[ssi]=="Print"){
?>
<body onload="javascript:window.print();">
<?php } else{echo"<body>";} ?>
<h2>&nbsp;&nbsp;&nbsp;Jurnal Penggajian <?php echo $_GET[ssi] ?><br>
    &nbsp;&nbsp;
	<?php 
	if($_GET[stts]=="Tetap"){echo"Pegawai Tetap";} 
	 else if($_GET[stts]=="Kontrak"){echo"Pegawai Kontrak";} 
	 else if($_GET[stts]=="Buruh"){echo"Buruh";}
	else{echo"Pegawai Tetap";}?>
	</h2>

<?php

//Jika semuanya masih kosong
if($_GET[stts]=="" and $_GET[bulan]=="" and $_GET[tahun]=="" and $_GET[nip]==""){
	$jg=mysql_query("select * from daftar_gaji where status_pgw = 'Tetap'");
	$bns=mysql_query("select sum(bonus) as bonus from daftar_gaji where status_pgw = 'Tetap'");
	$tunis=mysql_query("select sum(tunj_istri) as tunj_istri from daftar_gaji where status_pgw = 'Tetap'");
	$tunak=mysql_query("select sum(tunj_anak) as tunj_anak from daftar_gaji where status_pgw = 'Tetap'");
	$pot=mysql_query("select sum(potongan) as potongan from daftar_gaji where status_pgw = 'Tetap'");
	
	$umkn=mysql_query("select sum(uang_makan) as uang_makan from daftar_gaji where status_pgw = 'Tetap'");
	$ulemb=mysql_query("select sum(uang_lembur) as uang_lembur from daftar_gaji where status_pgw = 'Tetap'");
	$utrans=mysql_query("select sum(uang_transport) as uang_transport from daftar_gaji where status_pgw = 'Tetap'");
	$tunkes=mysql_query("select sum(tunj_kesehatan) as tunj_kesehatan from daftar_gaji where status_pgw = 'Tetap'");
	$tunkec=mysql_query("select sum(tunj_kecelakaan) as tunj_kecelakaan from daftar_gaji where status_pgw = 'Tetap'");
	$tunjhrt=mysql_query("select sum(tunj_hari_tua) as tunj_hari_tua from daftar_gaji where status_pgw = 'Tetap'");
	$tunhrraya=mysql_query("select sum(tunj_hari_raya) as tunj_hari_raya from daftar_gaji where status_pgw = 'Tetap'");
	$tunkem=mysql_query("select sum(tunj_kematian) as tunj_kematian from daftar_gaji where status_pgw = 'Tetap'");
	$gator=mysql_query("select sum(gaji_kotor) as gaji_kotor from daftar_gaji where status_pgw = 'Tetap'");
	
	$umk=mysql_fetch_array($umkn);
	$ulem=mysql_fetch_array($ulemb);
	$utr=mysql_fetch_array($utrans);
	$tunk=mysql_fetch_array($tunkes);
	$tunke=mysql_fetch_array($tunkec);
	$tunj=mysql_fetch_array($tunjhrt);
	$tunh=mysql_fetch_array($tunhrraya);
	$tunkem=mysql_fetch_array($tunkem);
	$ttlain=$umk[uang_makan]+$ulem[uang_lembur]+$utr[uang_transport]+$tunk[tunj_kesehatan]+$tunke[tunj_kecelakaan]+$tunj[tunj_hari_tua]+$tunh[tunj_hari_raya]+$tunkem[tunj_kematian];
}

//Jika Nip ke isi dan tahun, bulan masih kosong
elseif(!empty($_GET[stts]) and $_GET[bulan]=="" and $_GET[tahun]=="" and !empty($_GET[nip])){
	$jg=mysql_query("select * from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$bns=mysql_query("select sum(bonus) as bonus from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunis=mysql_query("select sum(tunj_istri) as tunj_istri from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunak=mysql_query("select sum(tunj_anak) as tunj_anak from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$pot=mysql_query("select sum(potongan) as potongan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	
	$umkn=mysql_query("select sum(uang_makan) as uang_makan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$ulemb=mysql_query("select sum(uang_lembur) as uang_lembur from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$utrans=mysql_query("select sum(uang_transport) as uang_transport from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunkes=mysql_query("select sum(tunj_kesehatan) as tunj_kesehatan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunkec=mysql_query("select sum(tunj_kecelakaan) as tunj_kecelakaan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunjhrt=mysql_query("select sum(tunj_hari_tua) as tunj_hari_tua from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunhrraya=mysql_query("select sum(tunj_hari_raya) as tunj_hari_raya from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$tunkem=mysql_query("select sum(tunj_kematian) as tunj_kematian from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	$gator=mysql_query("select sum(gaji_kotor) as gaji_kotor from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%'");
	
	$umk=mysql_fetch_array($umkn);
	$ulem=mysql_fetch_array($ulemb);
	$utr=mysql_fetch_array($utrans);
	$tunk=mysql_fetch_array($tunkes);
	$tunke=mysql_fetch_array($tunkec);
	$tunj=mysql_fetch_array($tunjhrt);
	$tunh=mysql_fetch_array($tunhrraya);
	$tunkem=mysql_fetch_array($tunkem);
	$ttlain=$umk[uang_makan]+$ulem[uang_lembur]+$utr[uang_transport]+$tunk[tunj_kesehatan]+$tunke[tunj_kecelakaan]+$tunj[tunj_hari_tua]+$tunh[tunj_hari_raya]+$tunkem[tunj_kematian];
}

//Jika Bulan ke isi dan Tahun Kosong Maka Tahun Akan dilihat dengan tahun sekarang, dan Nip Masih Kosong

elseif(!empty($_GET[stts]) and !empty($_GET[bulan]) and empty($_GET[tahun]) and empty($_GET[nip])){
$yr=date(Y);
	$jg=mysql_query("select * from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$bns=mysql_query("select sum(bonus) as bonus from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunis=mysql_query("select sum(tunj_istri) as tunj_istri from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunak=mysql_query("select sum(tunj_anak) as tunj_anak from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$pot=mysql_query("select sum(potongan) as potongan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	
	$umkn=mysql_query("select sum(uang_makan) as uang_makan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$ulemb=mysql_query("select sum(uang_lembur) as uang_lembur from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$utrans=mysql_query("select sum(uang_transport) as uang_transport from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunkes=mysql_query("select sum(tunj_kesehatan) as tunj_kesehatan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunkec=mysql_query("select sum(tunj_kecelakaan) as tunj_kecelakaan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunjhrt=mysql_query("select sum(tunj_hari_tua) as tunj_hari_tua from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunhrraya=mysql_query("select sum(tunj_hari_raya) as tunj_hari_raya from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$tunkem=mysql_query("select sum(tunj_kematian) as tunj_kematian from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	$gator=mysql_query("select sum(gaji_kotor) as gaji_kotor from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$_GET[bulan]' and year(tanggal)='$yr'");
	
	$umk=mysql_fetch_array($umkn);
	$ulem=mysql_fetch_array($ulemb);
	$utr=mysql_fetch_array($utrans);
	$tunk=mysql_fetch_array($tunkes);
	$tunke=mysql_fetch_array($tunkec);
	$tunj=mysql_fetch_array($tunjhrt);
	$tunh=mysql_fetch_array($tunhrraya);
	$tunkem=mysql_fetch_array($tunkem);
	$ttlain=$umk[uang_makan]+$ulem[uang_lembur]+$utr[uang_transport]+$tunk[tunj_kesehatan]+$tunke[tunj_kecelakaan]+$tunj[tunj_hari_tua]+$tunh[tunj_hari_raya]+$tunkem[tunj_kematian];
}

//Jika Tahun ke isi dan bulan Kosong Maka bulan Akan dilihat dengan bulan sekarang, dan Nip Masih Kosong
elseif(!empty($_GET[stts]) and empty($_GET[bulan]) and !empty($_GET[tahun]) and empty($_GET[nip])){
$bl=date(m);
	$jg=mysql_query("select * from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$bns=mysql_query("select sum(bonus) as bonus from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunis=mysql_query("select sum(tunj_istri) as tunj_istri from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunak=mysql_query("select sum(tunj_anak) as tunj_anak from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$pot=mysql_query("select sum(potongan) as potongan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	
	$umkn=mysql_query("select sum(uang_makan) as uang_makan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$ulemb=mysql_query("select sum(uang_lembur) as uang_lembur from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$utrans=mysql_query("select sum(uang_transport) as uang_transport from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunkes=mysql_query("select sum(tunj_kesehatan) as tunj_kesehatan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunkec=mysql_query("select sum(tunj_kecelakaan) as tunj_kecelakaan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunjhrt=mysql_query("select sum(tunj_hari_tua) as tunj_hari_tua from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunhrraya=mysql_query("select sum(tunj_hari_raya) as tunj_hari_raya from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunkem=mysql_query("select sum(tunj_kematian) as tunj_kematian from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$gator=mysql_query("select sum(gaji_kotor) as gaji_kotor from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	
	$umk=mysql_fetch_array($umkn);
	$ulem=mysql_fetch_array($ulemb);
	$utr=mysql_fetch_array($utrans);
	$tunk=mysql_fetch_array($tunkes);
	$tunke=mysql_fetch_array($tunkec);
	$tunj=mysql_fetch_array($tunjhrt);
	$tunh=mysql_fetch_array($tunhrraya);
	$tunkem=mysql_fetch_array($tunkem);
	$ttlain=$umk[uang_makan]+$ulem[uang_lembur]+$utr[uang_transport]+$tunk[tunj_kesehatan]+$tunke[tunj_kecelakaan]+$tunj[tunj_hari_tua]+$tunh[tunj_hari_raya]+$tunkem[tunj_kematian];
}
//Jika Tahun ke isi dan bulan Kosong Maka bulan Akan dilihat dengan bulan sekarang, dan Nip diisi
elseif(!empty($_GET[stts]) and empty($_GET[bulan]) and !empty($_GET[tahun]) and !empty($_GET[nip])){
$bl=date(m);
	$jg=mysql_query("select * from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$bns=mysql_query("select sum(bonus) as bonus from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunis=mysql_query("select sum(tunj_istri) as tunj_istri from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunak=mysql_query("select sum(tunj_anak) as tunj_anak from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$pot=mysql_query("select sum(potongan) as potongan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	
	$umkn=mysql_query("select sum(uang_makan) as uang_makan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$ulemb=mysql_query("select sum(uang_lembur) as uang_lembur from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$utrans=mysql_query("select sum(uang_transport) as uang_transport from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunkes=mysql_query("select sum(tunj_kesehatan) as tunj_kesehatan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunkec=mysql_query("select sum(tunj_kecelakaan) as tunj_kecelakaan from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunjhrt=mysql_query("select sum(tunj_hari_tua) as tunj_hari_tua from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunhrraya=mysql_query("select sum(tunj_hari_raya) as tunj_hari_raya from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$tunkem=mysql_query("select sum(tunj_kematian) as tunj_kematian from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	$gator=mysql_query("select sum(gaji_kotor) as gaji_kotor from daftar_gaji where status_pgw = '$_GET[stts]' and nip like '%$_GET[nip]%' and month(tanggal)='$bl' and year(tanggal)='$_GET[tahun]'");
	
	$umk=mysql_fetch_array($umkn);
	$ulem=mysql_fetch_array($ulemb);
	$utr=mysql_fetch_array($utrans);
	$tunk=mysql_fetch_array($tunkes);
	$tunke=mysql_fetch_array($tunkec);
	$tunj=mysql_fetch_array($tunjhrt);
	$tunh=mysql_fetch_array($tunhrraya);
	$tunkem=mysql_fetch_array($tunkem);
	$ttlain=$umk[uang_makan]+$ulem[uang_lembur]+$utr[uang_transport]+$tunk[tunj_kesehatan]+$tunke[tunj_kecelakaan]+$tunj[tunj_hari_tua]+$tunh[tunj_hari_raya]+$tunkem[tunj_kematian];
}

else{
	$jg=mysql_query("select * from daftar_gaji where status_pgw = '$_GET[stts]'");
	$bns=mysql_query("select sum(bonus) as bonus from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunis=mysql_query("select sum(tunj_istri) as tunj_istri from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunak=mysql_query("select sum(tunj_anak) as tunj_anak from daftar_gaji where status_pgw = '$_GET[stts]'");
	$pot=mysql_query("select sum(potongan) as potongan from daftar_gaji where status_pgw = '$_GET[stts]'");
	
	$umkn=mysql_query("select sum(uang_makan) as uang_makan from daftar_gaji where status_pgw = '$_GET[stts]'");
	$ulemb=mysql_query("select sum(uang_lembur) as uang_lembur from daftar_gaji where status_pgw = '$_GET[stts]'");
	$utrans=mysql_query("select sum(uang_transport) as uang_transport from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunkes=mysql_query("select sum(tunj_kesehatan) as tunj_kesehatan from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunkec=mysql_query("select sum(tunj_kecelakaan) as tunj_kecelakaan from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunjhrt=mysql_query("select sum(tunj_hari_tua) as tunj_hari_tua from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunhrraya=mysql_query("select sum(tunj_hari_raya) as tunj_hari_raya from daftar_gaji where status_pgw = '$_GET[stts]'");
	$tunkem=mysql_query("select sum(tunj_kematian) as tunj_kematian from daftar_gaji where status_pgw = '$_GET[stts]'");
	$gator=mysql_query("select sum(gaji_kotor) as gaji_kotor from daftar_gaji where status_pgw = '$_GET[stts]'");
	
	$umk=mysql_fetch_array($umkn);
	$ulem=mysql_fetch_array($ulemb);
	$utr=mysql_fetch_array($utrans);
	$tunk=mysql_fetch_array($tunkes);
	$tunke=mysql_fetch_array($tunkec);
	$tunj=mysql_fetch_array($tunjhrt);
	$tunh=mysql_fetch_array($tunhrraya);
	$tunkem=mysql_fetch_array($tunkem);
	$ttlain=$umk[uang_makan]+$ulem[uang_lembur]+$utr[uang_transport]+$tunk[tunj_kesehatan]+$tunke[tunj_kecelakaan]+$tunj[tunj_hari_tua]+$tunh[tunj_hari_raya]+$tunkem[tunj_kematian];
}
if($_GET[stts]=="Tetap"){
	$tbl="pegawai_tetap";
}
else if($_GET[stts]=="Kontrak"){
	$tbl="pegawai_kontrak";
}
else if($_GET[stts]=="Buruh"){
	$tbl="data_buruh";
}
else{
	$tbl="pegawai_tetap";
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="124%" border="0" bgcolor="#BBBBBB">
    <tr>
      <td width="46" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>No</strong></div></td>
      <td width="104" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Tanggal</strong></div></td>
      <td width="58" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Nip</strong></div></td>
      <td width="193" rowspan="2" bgcolor="#97E6FF"><div align="center"><strong>Nama</strong></div></td>
      <td height="23" colspan="5" bgcolor="#97E6FF"><div align="center"><strong>Debet</strong></div></td>
      <td height="23" colspan="3" bgcolor="#97E6FF"><div align="center"><strong>Data Gaji </strong></div></td>
    </tr>
    <tr>
      <td width="99" bgcolor="#97E6FF"><div align="center"><strong>Bonus</strong></div></td>
      <td width="94" bgcolor="#97E6FF"><div align="center"><strong>Tunj. Istri</strong></div></td>
      <td width="113" bgcolor="#97E6FF"><div align="center"><strong>Tunj. Anak </strong></div></td>
      <td width="81" bgcolor="#97E6FF"><div align="center"><strong>Potongan</strong></div></td>
      <td width="102" bgcolor="#97E6FF"><div align="center"><strong>Lain - Lain </strong></div></td>
      <td width="84" bgcolor="#97E6FF"><div align="center"><strong>Gaji Pokok </strong></div></td>
      <td width="70" bgcolor="#97E6FF"><div align="center"><strong>Gaji Kotor </strong></div></td>
      <td width="95" bgcolor="#97E6FF"><div align="center"><strong>Gaji Bersih </strong></div></td>
    </tr>
<?php 
$warna1 = "#FFDDDD";   // baris genap berwarna hijau tua 
$warna2 = "#FFFFFF";   // baris ganjil berwarna hijau muda
$warna  = $warna1;     // warna default
$u=0;
while($gj=mysql_fetch_array($jg)){ 
if($warna == $warna1){
  $warna = $warna2;
} 
else {
  $warna = $warna1;
}
$nm=mysql_query("select * from $tbl where nip='$gj[nip]'");
		$nma=mysql_fetch_array($nm);
		
$nm2=mysql_query("select * from jabatan where id_jabatan='$gj[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		
$slip=mysql_query("select * from slip_gaji where nip='$gj[nip]' and tgl_slip_gaji='$gj[tanggal]'");
		$slp=mysql_fetch_array($slip);
$sslip=mysql_query("select sum(gaji_bersih) as gaji_bersih from slip_gaji where tgl_slip_gaji='$gj[tanggal]'");
		$sslp=mysql_fetch_array($sslip);
		
		$gapok[$u]=$jbt[gaji_pokok];	
		$tgapok = $tgapok+$gapok[$u];
		 $no++;
?>
    <tr bgcolor="<?php echo $warna ?>">
      <td >
	  <center><?php echo $no; ?></center></td>
	  
      <td ><center><?php echo $gj[tanggal]; ?></center></td>
      
	  <td ><center><?php echo $gj[nip]; ?></center></td>
      <td ><center><?php echo $nma[nama]; ?></center></td>
      <td ><div align="right"><?php echo format_rupiah($gj[bonus]); ?></div></td>
      <td ><div align="right"><?php echo format_rupiah($gj[tunj_istri]); ?></div></td>
      <td ><div align="right"><?php echo format_rupiah($gj[tunj_anak]); ?></div></td>
      <td ><div align="right"><?php echo format_rupiah($gj[potongan]); ?></div></td>
      <td ><div align="right"><?php echo format_rupiah($gj[tunj_kesehatan]+$gj[tunj_kecelakaan]+$gj[tunj_kematian]+$gj[tunj_hari_tua]+$gj[tunj_hari_raya]+$gj[uang_transport]+$gj[uang_makan]+$gj[uang_lembur]); ?></div></td>
      <td ><div align="right"><?php echo format_rupiah($jbt[gaji_pokok]); ?></div></td>
      <td ><div align="right"><?php echo format_rupiah($gj[gaji_kotor]); ?></div></td>
      <td ><div align="right">
        <div align="right"><?php echo format_rupiah($slp[gaji_bersih]); ?></div>
      </div></td>
    </tr>
<?php } ?>
    <tr>
      <td colspan="4" bgcolor="#97E6FF"><div align="center">Total</div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php $bons=mysql_fetch_array($bns); echo format_rupiah($bons['bonus']); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php $tnis=mysql_fetch_array($tunis); echo format_rupiah($tnis['tunj_istri']); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php $tnak=mysql_fetch_array($tunak); echo format_rupiah($tnak['tunj_anak']); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php $poto=mysql_fetch_array($pot); echo format_rupiah($poto['potongan']); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php echo format_rupiah($ttlain); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php echo format_rupiah($tgapok); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php $tgator=mysql_fetch_array($gator); echo format_rupiah($tgator['gaji_kotor']); ?>
      </strong></div></td>
      <td bgcolor="#97E6FF"><div align="right"><strong>
        <?php echo format_rupiah($sslp['gaji_bersih']); ?>
      </strong></div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
