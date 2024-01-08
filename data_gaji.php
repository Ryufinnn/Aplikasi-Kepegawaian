
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
-->
</style>
 <p class="style1" align="center">Data Gaji </p>
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
    <td width="216" bgcolor="#0099FF"><div align="center"><strong>Edit</strong></div></td>
  </tr>
  <?php 
 
		 while($re=mysql_fetch_array($sql)){
	$nm=mysql_query("select * from pegawai_tetap where nip='$re[nip]'");
		$nma=mysql_fetch_array($nm);
	$nm2=mysql_query("select * from jabatan where id_jabatan='$re[id_jabatan]'");
		$jbt=mysql_fetch_array($nm2);
		
		  ?>
  <tr align="left" valign="top">
    <td><?php echo $re[nip] ?> </td>
    <td><?php echo $re[nama] ?> </td>
    <td><?php echo $re[jabatan] ?> </td>

    <td><?php echo "Rp. ".format_rupiah($re[gaji]); ?> </td>
	   
	   <td><?php echo "Rp. ".format_rupiah($re[tunjangan]); ?> </td>
	   <td><?php echo "Rp. ".format_rupiah($re[absen]); ?> </td>
	    
    <td><?php echo "Rp. ".format_rupiah($re[gaji_bersih]); ?> </td>
   <td align="center">
					<a href="?page=u-gaji&id=<?php echo $re[id_gaji]; ?>">Update</a>	
					<a href="?page=data_gaji&id=<?php echo $re[id_gaji]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>
  </tr>
  <?php }
	
	?>
  <tr align="left" valign="top">
  </tr>
  
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
  <a class="Button" href="?page=d-gaji" target="_blank">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
        <span class="t">Input Data </span></span>
		 </span>
</a></div>
    </td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$dil=mysql_query("delete from daftar_gaji where id_gaji='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=data_gaji&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>