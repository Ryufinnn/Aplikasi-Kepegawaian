<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left">Data User</h1>
<hr />
<?php
include('koneksi.php');
?>
<table width="80%" border="0" align="center" class="tbls">
<tr>
 <td width="37" bgcolor="#0099FF"><div align="center"><strong>No</strong></div></td>
    <td width="107"><div align="center"><strong>Username</strong></div></td>
    <td width="126"><div align="center"><strong>Nama</strong></div></td>
    <td width="127"><div align="center"><strong>Alamat</strong></div></td>
   
    <td width="127"><div align="center"><strong>No. Handphone </strong></div></td>
	<td width="81"><div align="center"><strong>Level</strong></div></td>
    <td width="174"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from keuangan"); 
 $no=1;
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
			<td>
					<div align="center"><span class="style2"><?php echo $no; ?></span> </div></td>
				<td>
					<?php echo $re[nip] ?>				</td>
				<td>
					<?php echo $re[nama_keuangan] ?>			</td>
				<td>	
					<?php echo $re[alamat_keuangan] ?>		</td>
                
                <td>
					<?php echo $re[hp_keuangan] ?>			</td>
					<?php $na=$re[hak_akses] ;

if ($na == HRD  )
{
$nh = 'Admin' ;
}
else if ($na == keuangan )
{
$nh = 'Operator' ;
}
else if ($na == admin )
{
$nh = 'Pimpinan' ;
}


?>
					<td>
					<?php echo $nh ?>			</td>
                <td align="center">
					<a href="?page=u-keuangan&id=<?php echo $re[nip]; ?>">Update</a>	
					<a href="?page=keuangan&id=<?php echo $re[nip]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr>
		<?php $no++;}?>  
</table>
<br>
<table width="80%" border="0" align="center">
  <tr>
    <td>    <div align="right"> 
<a class="Button" href="?page=t_keuangan">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Input Data</span> 
      </span>
     </a> <a class="Button" href="cetak_user.php" target="_blank">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>        
      </span>
</a></div>
</td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$del=mysql_query("delete from keuangan where nip='$_GET[id]'");
	$dil=mysql_query("delete from user where nip='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=keuangan&ok' />";
}

?></body>
</html>