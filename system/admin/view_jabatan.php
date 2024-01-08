<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>

</head>
<body>
<h1 align="left">Data Jabatan </h1>
<hr />
<?php
include('koneksi.php');
?>
<table width="80%" border="0" align="center" class="tbls">
<tr>
    <td width="200"><div align="center"><strong>Nama Jabatan</strong></div></td>
    <td width="200"><div align="center"><strong>Gaji Pokok</strong></div></td>
    <td width="200"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from jabatan order by id_jabatan ASC"); 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<div align="left"><?php echo $re[nama_jabatan] ?>				</div></td>
				<td>	
					<div align="left">Rp.<?php echo $re[gaji_pokok] ?>		</div></td>
                <td align="center">
					<a href="?page=updatejabatan&id=<?php echo $re[id_jabatan]; ?>">Update</a>	
					<a href="?page=viewjabatan&id=<?php echo $re[id_jabatan]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">Delete</a>				</td>															
			</tr>
		<?php }?>  
</table>
<br/>
<table width="82%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="?page=jabatan">
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
	$dil=mysql_query("delete from jabatan where id_jabatan='$_GET[id]'");
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=viewjabatan&ok' />";
}

?>

<p>&nbsp;</p>
</body>
</html>