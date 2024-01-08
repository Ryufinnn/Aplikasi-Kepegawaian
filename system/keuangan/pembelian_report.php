<?php
include('koneksi.php');
include('inc/fungsi.php');
//query
$sql=mysql_query("select * from daftar_gaji
where tanggal like '$_POST[bln]%' order by id_gaji asc") or die
(mysql_error());
?>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	font-size: 12px;
	font-weight: bold;
}
.style3 {font-size: 12px}
-->
</style>

<table width="87%" border="0" align="center" class="tbls">
<tr>
    <td colspan="13"><div align="center">
      <p class="style1">LAPORAN SLIP GAJI  </p>
      <p>Bulan : <?php echo bln_indonesia($_POST[bln]);?></p>
    </div></td>
  </tr>
  <tr>
    <td width="69" bgcolor="#00CCFF"><div align="center" class="style2">NIP</div></td>
    <td width="204" bgcolor="#00CCFF"><div align="center" class="style2">Nama Pegawai </div></td>
    
    <td width="160" bgcolor="#00CCFF"><div align="center" class="style2">Jabatan</div></td>
    <td width="138" bgcolor="#00CCFF"><div align="center" class="style2">Gaji Pokok</div></td>
	\
	<td width="150" bgcolor="#00CCFF"><div align="center" class="style2">Tunjangan</div></td>
	<td width="110" bgcolor="#00CCFF"><div align="center" class="style2">Potongan Absen</div></td>
    <td width="138" bgcolor="#00CCFF"><div align="center" class="style2">Total Gaji</div></td>
    <td width="143" bgcolor="#00CCFF"><div align="center" class="style2">Aksi </div></td>
  </tr>
  <?php 
 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		
		  ?>
  <tr align="left" valign="top">
    <td><span class="style3"><?php echo $re[nip] ?></span> </td>
    <td><span class="style3"><?php echo $re[nama] ?></span> </td>
    <td><span class="style3"><?php echo $re[jabatan] ?></span> </td>
   
    <td><span class="style3"><?php echo "Rp. ".format_rupiah($re[gaji]); ?></span> </td>
	   <td><span class="style3"><?php echo "Rp. ".format_rupiah($re[tunjangan]); ?></span> </td>
	   <td><span class="style3"><?php echo "Rp. ".format_rupiah($re[absen]); ?></span> </td>
	  
    <td><span class="style3"><?php echo "Rp. ".format_rupiah($re[gaji_bersih]); ?></span> </td>
    <td align="center">
	  <span class="style3"><a href="cetak.php?id=<?php echo $re[id_gaji];?>" target="_blank">Cetak Slip</a>
	  <a href="?page=gaji-T&amp;id=<?php echo $re[id_gaji]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a> </span></td>
  </tr>
  <?php }
	
	?>
  
</table>


