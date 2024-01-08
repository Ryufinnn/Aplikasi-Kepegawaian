<title>Lihat Jabatan</title>
<?php
	include "koneksi.php";
	$perintah = "select * from jabatan order by id_jabatan";
	$view = mysql_query($perintah);
?>
<table border="1" align="center">
<td colspan="4" align="center">VIEW JABATAN</td>
<tr align="center">
            <td bgcolor="#999999">Id_Jabatan</td>
			<td bgcolor="#999999">Nama_Jabatan</td>
			<td bgcolor="#999999">Golongan</td>
            <td bgcolor="#999999">Gaji_Pokok</td>
            <td bgcolor="#999999">Edit</td>						
</tr>
<?php
				while($datajabatan=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datajabatan[0]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datajabatan[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datajabatan[2]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datajabatan[3]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_jabatan.php?id=<?php echo $datajabatan[0]; ?>">update</a>	
					<a href="delete_jabatan.php?id=<?php echo $datajabatan[0]; ?>">delete</a>
				</td>																						
</tr>
<?php } ?>
</table>