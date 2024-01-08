<title>Lihat Gaji</title>
<?php
	include "koneksi.php";
	$perintah = "select * from daftar_gaji order by id_gaji";
	$view = mysql_query($perintah);
?>
<table width="766">
  <tr>
    <td colspan="3"><div align="center">VIEW GAJI</div></td>
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
    <td width="172"><div align="center">JABATAN</div></td>
    <td width="163"><div align="center">DEPARTEMEN</div></td>
    <td width="66"><div align="center">GAJI POKOK</div></td>
    <td width="192"><div align="center">LEMBUR</div></td>
    <td width="192"><div align="center">TUNJ MAKAN</div></td>
    <td width="192"><div align="center">TUNJ TRANSPORTASI</div></td>
    <td width="192"><div align="center">TUNJ ISTRI</div></td>
    <td width="192"><div align="center">TUNJ ANAK</div></td>
    <td width="192"><div align="center">TUNJ HARI TUA</div></td>
    <td width="192"><div align="center">TUNJ KECELAKAAN</div></td>
    <td width="192"><div align="center">TUNJ KESEHATAN</div></td>
    <td width="192"><div align="center">TUNJ KEMATIAN</div></td>
    <td width="192"><div align="center">TUNJ HARI RAYA</div></td>
    <td width="192"><div align="center">JUMLAH PRODUKSI</div></td>
    <td width="192"><div align="center">JENIS</div></td>
    <td width="192"><div align="center">BONUS</div></td>
    <td width="192"><div align="center">POTONGAN</div></td>
    <td width="192"><div align="center">GAJI KOTOR</div></td>
    <td width="192"><div align="center">TOTAL UPAH</div></td>
    <td width="192"><div align="center">EDIT</div></td>
    
  </tr>
<?php
				while($datagaji=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datagaji[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datagaji[3]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[5]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datagaji[8]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[6]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[9]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[10]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[11]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[12]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[13]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[14]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[15]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[16]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[17]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[18]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[19]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[20]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[22]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[23]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[24]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datagaji[25]; ?></td>
				<td align="center" bgcolor="#CCCCCC">
					<a href="update_gaji.php?id=<?php echo $datagaji[0]; ?>">update</a>	
					<a href="delete_gaji.php?id=<?php echo $datagaji[0]; ?>">delete</a>
				</td>																						
</tr>
 <?php } ?>
  <tr>
    <td><input class="button" type="submit" value="Print" /></td>
    </tr>
</table>