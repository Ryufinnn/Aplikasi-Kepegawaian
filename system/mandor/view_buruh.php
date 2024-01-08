<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left"> DATA BURUH</h1><hr />
<div align="right">
  <div class="sidebar_search" align="right">
<form action="" method="post">
<input type="text" name="idx" id="idx" class="search_input" value="Cari Nama atau Kode" onClick="this.value=''" />
<input type="image" class="search_submit" src="images/search.png" />
</form>
</div>
</div>
<br>
<?php
include('koneksi.php');
if(isset($_POST[idx])){
	$q=mysql_query("select * from data_buruh where nip like '%$_POST[idx]%' or nama like '$_POST[idx]' order by nip");
}
else{
	$q=mysql_query("select * from data_buruh order by nip");
}
?>
<table width="100%" class="tbls" align="center">
<tr>
    <th width="7%">NIP</th>
    <th width="24%">Nama</th>
    <th width="15%">Tanggal_Lahir</th>
    <th width="11%">Agama</th>
    <th width="13%">No_Telp</th>
    <th width="15%">Masa_Kerja</th>
    <th width="15%">Aksi</th>
</tr>
<?php
	while($data=mysql_fetch_array($q)){
		?>
			<tr align="left" valign="top">
				<td>
					<?php echo $data[0]?>
				</td>
				<td>
					<?php echo $data[1]?>
				</td>
				<td>	
					<?php echo $data[2]?>
				</td>
                <td>
					<?php if(empty($data[4])){echo"-";}else{echo"$data[4]";}?>
				</td>
                <td>
					<?php  if(empty($data[5])){echo"-";}else{echo "$data[5]";}?>
				</td>
                <td>
					<?php  if(empty($data[14])){echo"-";}else{echo"$data[13]";}?>
				</td>
                <td align="center" bgcolor="#CCCCCC">
					<a href="?page=u-buruh&id=<?php echo $data[0]; ?>">update</a>	
					<a href="?page=buruh&id=<?php echo $data[0]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">delete</a>
				</td>															
			</tr>
		<?php
	}
?>  
</table>
<?php

if(isset($_GET[id])){
	$del=mysql_query("delete from data_buruh where nip='$_GET[id]'");
	
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=buruh&ok' />";
}

?>
<br/>
<table width="100%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="?page=i-buruh">
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

</body>
</html>