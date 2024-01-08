<title>Lihat Absensi</title>
<?php
	include "koneksi.php";
	$perintah = "select * from data_absensi order by nip";
	$view = mysql_query($perintah);
?>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">VIEW ABSENSI</div></td>
  </tr>
  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485">
        <input type="text" name="textfield" id="textfield" />
    </td>
  </tr>
</table>
<table width="914" border="1">
  <tr>
  	<td width="74"><div align="center">TANGGAL</div></td>
    <td width="172"><div align="center">NIP</div></td>
    <td width="163"><div align="center">JAM_MASUK</div></td>
    <td width="66"><div align="center">JAM_KELUAR</div></td>
    <td width="142"><div align="center">KETERANGAN</div></td>
    <td width="192"><div align="center">EDIT</div></td>
  </tr>
<?php
				while($dataabsen=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $dataabsen[0]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $dataabsen[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $dataabsen[2]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $dataabsen[3]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $dataabsen[4]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_absen.php?id=<?php echo $dataabsen[1]; ?>">update</a>	
					<a href="delete_absen.php?id=<?php echo $dataabsen[1]; ?>">delete</a>
				</td>																						
</tr>
 <?php } ?>
  <tr>
    <td><input class="button" type="submit" value="Print" /></td>
    </tr>
</table>