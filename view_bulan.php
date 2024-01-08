
<?php
include('koneksi.php');
include('inc/fungsi.php');
//query
$sql=mysql_query("select * from absen
where tanggal like '$_POST[bln]%' order by kode asc") or die
(mysql_error());
?>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
 <p class="style1" align="center">SISTEM INFORMASI KEPEGAWAIAN <br> PT. DASRAT SARANA ARANG SEJATI</p>
	   <hr>
	   <p align="center"> <form name="f1" method=post action="cetak_harian.php"><input name="bln" type="text" value="<?php echo "$_POST[bln]";?>" ></p>
<table width="100%" border="1" align="center" class="tbls">

  <tr>
   <td width="37" ><div align="center"><strong>No</strong></div></td>
    <td width="126"><div align="center"><strong>Kode Absensi</strong></div></td>
    <td width="127"><div align="center"><strong>NIP</strong></div></td>
	
    <td width="159"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="127"><div align="center"><strong>Bulan </strong></div></td>
    <td width="119"><div align="center"><strong>Tahun</strong></div></td>
	<td width="81"><div align="center"><strong>Hadir</strong></div></td>
	<td width="81"><div align="center"><strong>Absen</strong></div></td>
	<td width="81"><div align="center"><strong>Sakit</strong></div></td>
  </tr>
  <?php 
 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		$nm3=mysql_query("select * from tunj_fungsional where id_tunj_fungsional='$re[id_tunj_fungsional]'");
		$fg=mysql_fetch_array($nm3);
		 $no=1;
		  ?>
  <tr align="left" valign="top">
   <td>
					<div align="center"><?php echo $no; ?></span> </div></td>
					<td>
					<?php echo $re[kode] ?>			</td>
				<td>
					<?php echo $re[nip] ?>			</td>
					
				<td>	
					<?php echo $re[jabatan] ?>		</td>
                <td>
					<?php echo $re[bulan] ?>			</td>
                <td>
					<?php echo $re[tahun] ?>			</td>
				<td>
					<?php echo $re[hadir] ?>			</td>
										<td>
					<?php echo $re[absen] ?>			</td>
					<td>
					<?php echo $re[sakit] ?>			</td>
                														
			</tr>
		
 
  <?php $no++;}?>  
</table>

<br>
<br>
<br>
	<br>
<table width="80%" border="0" align="center">
  <tr>
    <td>   <input type="submit" name="simpan" value="Print"></form>
</td>
  </tr>
</table>