<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h3 align="left">Laporan Data Absensi </h3>
<hr />
<?php
include('koneksi.php');
?>
<table width="80%" border="0" align="center" class="tbls">
<tr>
    
    <td width="126"><div align="center"><strong>Kode Absensi</strong></div></td>
    <td width="127"><div align="center"><strong>NIP</strong></div></td>
    <td width="159"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="127"><div align="center"><strong>Bulan </strong></div></td>
    <td width="119"><div align="center"><strong>Tahun</strong></div></td>
	<td width="81"><div align="center"><strong>Hadir</strong></div></td>
	<td width="81"><div align="center"><strong>Absen</strong></div></td>
	<td width="81"><div align="center"><strong>Sakit</strong></div></td>

</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from absen"); 
 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			
				
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
		<?php }?>  
</table>
<br>
<table width="80%" border="0" align="center">
  <tr>
    <td>    <div align="right"> 
<a class="Button" href="?page=t_absensi">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Print</span>      
      </span>
</a></div>
</td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$del=mysql_query("delete from absen where kode='$_GET[id]'");
	
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=absensi&ok' />";
}

?></body>
</html>