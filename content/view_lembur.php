<title>Lihat Lembur</title>
<?php
	include "koneksi.php";
	$perintah = "select * from lembur order by id_lembur";
	$view = mysql_query($perintah);
?>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">VIEW LEMBUR</div></td>
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
    <td width="172"><div align="center">NAMA</div></td>
    <td width="172"><div align="center">DEPARTEMEN</div></td>
    <td width="163"><div align="center">JAM_MULAI</div></td>
    <td width="66"><div align="center">JAM_SELESAI</div></td>
    <td width="192"><div align="center">EDIT</div></td>
  </tr>
<?php
				while($datalembur=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datalembur[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datalembur[3]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datalembur[5]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datalembur[6]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datalembur[7]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_lembur.php?id=<?php echo $datalembur[0]; ?>">update</a>	
					<a href="delete_lembur.php?id=<?php echo $datalembur[0]; ?>">delete</a>
				</td>																						
</tr>
 <?php } ?>
  <tr>
    <td><input class="button" type="submit" value="Print" /></td>
    </tr>
</table>