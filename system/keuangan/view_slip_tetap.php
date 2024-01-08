<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title></head>
<body>
<br>
<h2>Data Slip Gaji Pegawai Tetap
  <div align="right">
  <div class="sidebar_search" align="right">
<form action="" method="post">
<input type="text" name="idx" id="idx" class="search_input" value="Cari Nama atau Kode" onClick="this.value=''" />
<input type="image" class="search_submit" src="images/search.png" />
</form>
</div>
</div>
</h2>
<?php
include('koneksi.php');
include('inc/fungsi.php');
?>
<table width="100%" border="0" align="center" class="tbls">
  <tr>
    <td width="62"><div align="center"><strong>NIP</strong></div></td>
    <td width="231"><div align="center"><strong>Nama Pegawai</strong></div></td>
    <td width="191"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="165"><div align="center"><strong>Tanggal Gajian</strong></div></td>
    <td width="133"><div align="center"><strong>Gaji Pokok</strong></div></td>
    <td width="156"><div align="center"><strong>Gaji Bersih </strong></div></td>
    <td width="246"><div align="center"><strong>Aksi </strong></div></td>
  </tr>
  <?php 
 $sql=mysql_query("select * from slip_gaji where stts_pgw='Tetap'"); 
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
    <td><?php echo $re[tgl_slip_gaji] ?> </td>
    <td><?php echo "Rp. ".format_rupiah($jbt[gaji_pokok]); ?> </td>
    <td><?php echo "Rp. ".format_rupiah($re[gaji_bersih]); ?> </td>
    <td align="center">
<!--	<a href="?page=u-slip&amp;id=<?php echo $re[id_slip]; ?>&io=Tetap">Update</a>
-->	 <a href="?page=slip-T&amp;id=<?php echo $re[id_slip]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a> </td>
  </tr>
  <?php }
	 $sql=mysql_query("select * from slip_gaji where stts_pgw='Tetap'"); 
		$re=mysql_num_rows($sql);
		if($re==0){
	?>
  <tr align="left" valign="top">
    <td colspan="7"><div align="center">Maaf Data Belum Data</div></td>
  </tr>
  <?php } ?>
</table>
<br/>
<table width="100%" border="0" align="center">
  <tr>
    <td>
<!--    <div align="right"> 
<a class="Button" href="?page=d-gaji">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Input Data</span>      
      </span>
</a></div>
-->    </td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$del=mysql_query("delete from slip_gaji where id_slip='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=slip-T&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>