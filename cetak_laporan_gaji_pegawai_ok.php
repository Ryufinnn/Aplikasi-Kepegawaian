<body onLoad="javascript:window:print()">
<?php
include('koneksi.php');
include('inc/fungsi.php');
//query
$sql=mysql_query("select * from daftar_gaji
where nip='19650801'  order by id_gaji asc") or die
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
	   
<table width="100%" border="1" align="center" class="tbls">

  <tr>
    <td width="62" bgcolor="#00CCFF"><div align="center"><strong>NIP</strong></div></td>
    <td width="231" bgcolor="#00CCFF"><div align="center"><strong>Nama Pegawai </strong></div></td>
    
    <td width="191" bgcolor="#00CCFF"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="133" bgcolor="#00CCFF"><div align="center"><strong>Gaji Pokok</strong></div></td>
	<td width="165" bgcolor="#00CCFF"><div align="center"><strong>Tunjangan</strong></div></td>
	
	<td width="165" bgcolor="#00CCFF"><div align="center"><strong>Potongan</strong></div></td>
    <td width="156" bgcolor="#00CCFF"><div align="center"><strong>Total Gaji</strong></div></td>
    
  </tr>
  <?php 
 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		$nm3=mysql_query("select * from tunj_fungsional where id_tunj_fungsional='$re[id_tunj_fungsional]'");
		$fg=mysql_fetch_array($nm3);
		  ?>
  <tr align="left" valign="top">
    <td><?php echo $re[nip] ?> </td>
    <td><?php echo $re[nama] ?> </td>
    <td><?php echo $re[jabatan] ?> </td>

    <td><?php echo "Rp. ".format_rupiah($re[uang_lembur]); ?> </td>
	   
	   <td><?php echo "Rp. ".format_rupiah($re[bonus]); ?> </td>
	   <td><?php echo "Rp. ".format_rupiah($re[potongan]); ?> </td>
	    
    <td><?php echo "Rp. ".format_rupiah($re[gaji_kotor]); ?> </td>
   
  </tr>
  <?php }
	 $sql=mysql_query("select * from daftar_gaji where status_pgw='Tetap'"); 
		$re=mysql_num_rows($sql);
		if($re==0){
	?>
  <tr align="left" valign="top">
    <td colspan="7"><div align="center">Maaf Data Belum Data</div></td>
  </tr>
  <?php } ?>
</table>

<br>
<br>
<br>
	<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="50%" bgcolor="#FFFFFF">
							  
								<p align="center">Diketahui,
								
								<br/>
								Administrasi
								<br/>
								<br/>
								<br/><br/>
								Seswa Marilina<br/>
								Nip : 19650807
								</td><td width="50%" bgcolor="#FFFFFF"><div align="center">Dibuat, <?php $tgl = date('d M Y');
echo "Sawahlunto, $tgl";?>
  <br/>Administrasi
  <br/><br/>
								<br/><br/>
								  Gustina Ningsih<br/>
								  Nip : 19650808
								  
								  </div></td>
</tr></table>