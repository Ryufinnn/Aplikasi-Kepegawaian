<title>Lihat Departemen</title>
<?php
	include "koneksi.php";
	$perintah = "select * from departemen order by id_departemen";
	$view = mysql_query($perintah);
?>
<table border="1" align="center">
<td colspan="4" align="center">VIEW DEPARTEMEN</td>
<tr align="center">
            <td bgcolor="#999999">Id_Departemen</td>
			<td bgcolor="#999999">Nama_Departemen</td>
			<td bgcolor="#999999">Section</td>
            <td bgcolor="#999999">Edit</td>						
</tr>
<?php
				while($datadepartemen=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datadepartemen[0]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datadepartemen[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datadepartemen[2]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_departemen.php?id=<?php echo $datadepartemen[0]; ?>">update</a>	
					<a href="delete_departemen.php?id=<?php echo $datadepartemen[0]; ?>">delete</a>
				</td>																						
</tr>
<?php } ?>
</table>