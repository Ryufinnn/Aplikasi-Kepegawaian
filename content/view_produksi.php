<title>Lihat Produksi</title>
<?php
	include "koneksi.php";
	$perintah = "select * from data_produksi order by id_jenis";
	$view = mysql_query($perintah);
?>
<table border="1" align="center">
<td colspan="4" align="center">VIEW PRODUKSI</td>
<tr align="center">
            <td bgcolor="#999999">Id_Jenis</td>
			<td bgcolor="#999999">Nama_Jenis</td>
			<td bgcolor="#999999">Harga</td>
            <td bgcolor="#999999">Edit</td>						
</tr>
<?php
				while($dataproduksi=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $dataproduksi[0]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $dataproduksi[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $dataproduksi[2]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_produksi.php?id=<?php echo $dataproduksi[0]; ?>">update</a>	
					<a href="delete_produksi.php?id=<?php echo $dataproduksi[0]; ?>">delete</a>
				</td>																						
</tr>
<?php } ?>
</table>