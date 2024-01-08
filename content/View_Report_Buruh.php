<title>Lihat Report</title>
<?php
	include "koneksi.php";
	$perintah = "select * from data_report order by id_report";
	$view = mysql_query($perintah);
?>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">VIEW REPORT BURUH</div></td>
  </tr>

  <tr>
    <td width="241">NIP</td>
    <td width="18">:</td>
    <td width="485"><form id="form1" name="form1" method="post" action="">
      <label>
        <input type="text" name="textfield" id="textfield" />
        </label>
    </form>
    </td>
  </tr>
</table>
<table width="914" border="1">
  <tr>
  	<td width="74"><div align="center">TANGGAL</div></td>
    <td width="59"><div align="center">NIP</div></td>
    <td width="172"><div align="center">NAMA</div></td>
    <td width="163"><div align="center">JUMLAH YANG DIHASILKAN</div></td>
    <td width="66"><div align="center">JENIS</div></td>
    <td width="142"><div align="center">UPAH PER/KG</div></td>
    <td width="192"><div align="center">EDIT</div></td>
  </tr>
<?php
				while($datareport=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datareport[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datareport[2]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datareport[3]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datareport[4]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datareport[6]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datareport[7]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_report.php?id=<?php echo $datareport[0]; ?>">update</a>	
					<a href="delete_report.php?id=<?php echo $datareport[0]; ?>">delete</a>
				</td>																						
</tr>
<?php } ?>
  <tr>
    <td><input class="button" type="submit" value="Print" /></td>
    </tr>
</table>