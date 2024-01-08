<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left">LIST DATA BURUH</h1><hr />
<?php
include('koneksi.php');
$q=mysql_query("select * from data_buruh order by nip");
?>
<table width="100%" border="1" align="center">
<tr>
    <td>NIP</td>
    <td>Nama</td>
    <td>Tanggal_Lahir</td>
    <td>Agama</td>
    <td>No_Telp</td>
    <td>Masa_Kerja</td>
    <td>Edit</td>
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
					<?php  if(empty($data[14])){echo"-";}else{echo"$data[14]";}?>
				</td>
                <td align="center" bgcolor="#CCCCCC">
					<a href="update_buruh.php?id=<?php echo $data[0]; ?>">update</a>	
					<a href="delete_buruh.php?id=<?php echo $data[0]; ?>">delete</a>
				</td>															
			</tr>
		<?php
	}
?>  
</table>
<?php
@$foto=$_GET['foto'];
@$id=$_GET['id'];
if(isset($id)){
	$query = mysql_query("select * from data_buruh where nip = '$id'");
	$show = mysql_fetch_array($query);
	if($foto =='detail'){?>
<? }
}?>
</body>
</html>