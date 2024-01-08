<title>Lihat Karir</title>
<?php
	include "koneksi.php";
	$perintah = "select * from jenjang_karir order by id_karir";
	$view = mysql_query($perintah);
?>
<table border="1" align="center">
<td colspan="4" align="center">VIEW KARIR</td>
<tr align="center">
            <td bgcolor="#999999">Nama</td>
			<td bgcolor="#999999">Jabatan</td>
            <td bgcolor="#999999">Golongan</td>
            <td bgcolor="#999999">Gaji Pokok</td>
            <td bgcolor="#999999">Keterangan</td>	
            <td bgcolor="#999999">Edit</td>  				
</tr>
<?php
				while($datakarir=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datakarir[3]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datakarir[5]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datakarir[6]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datakarir[7]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datakarir[8]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_karir.php?id=<?php echo $datakarir[1]; ?>">update</a>	
					<a href="delete_karir.php?id=<?php echo $datakarir[1]; ?>">delete</a>
				</td>																						
</tr>
<?php } ?>
</table>