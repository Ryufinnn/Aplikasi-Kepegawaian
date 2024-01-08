<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left">Data Human Data Resource </h1>
<hr />
<?php
include('koneksi.php');
?>
<table width="80%" border="0" align="center" class="tbls">
<tr>
    <td width="27"><div align="center"><strong>NIP</strong></div></td>
    <td width="40"><div align="center"><strong>Nama</strong></div></td>
    <td width="48"><div align="center"><strong>Alamat</strong></div></td>
    <td width="113"><div align="center"><strong>No. Telepon </strong></div></td>
    <td width="127"><div align="center"><strong>No. Handphone </strong></div></td>
    <td width="51"><div align="center"><strong>Email</strong></div></td>
    <td width="109"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from hrd"); 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<?php echo $re[nip] ?>				</td>
				<td>
					<?php echo $re[nama_hrd] ?>			</td>
				<td>	
					<?php echo $re[alamat_hrd] ?>		</td>
                <td>
					<?php echo $re[telp_hrd] ?>			</td>
                <td>
					<?php echo $re[hp_hrd] ?>			</td>
				<td>
					<?php echo $re[email_hrd] ?>			</td>
                <td align="center">
					<a href="update_hrd.php?id=<?php echo $data[0]; ?>">Update</a>	
					<a href="?page=HRD&id=<?php echo $re[nip]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr>
		<?php }?>  
</table>
<br/>
<table width="82%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="?page=t_hrd">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Input Data</span>      
      </span>
</a></div>
    </td>
  </tr>
</table>
<br/>
<br/>
<?php
if(isset($_GET[id])){
	$del=mysql_query("delete from hrd where nip='$_GET[id]'");
	$dil=mysql_query("delete from user where nip='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=HRD&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>