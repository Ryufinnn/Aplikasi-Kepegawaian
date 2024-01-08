<title>Lihat Produksi</title>
<?php
	include "koneksi.php";
	$perintah = "select * from data_produksi order by id_jenis";
	$view = mysql_query($perintah);
?>
<h1><span class="tbls">VIEW PRODUKSI</span>
</h1><hr />
<table width="100%" border="0" align="center" class="tbls">
<tr align="center">
            <th width="24%">Id_Jenis</th>
			<th width="36%">Nama_Jenis</th>
			<th width="17%">Harga</th>
            <th width="23%">Aksi</th>						
</tr>
<?php
				while($dataproduksi=mysql_fetch_row($view)){?>
<tr>
				<td><?php echo $dataproduksi[0]; ?></td>
				<td><?php echo $dataproduksi[1]; ?></td>
				<td><?php echo $dataproduksi[2]; ?></td>
				<td align="center">
					<a href="?page=u-produksi&id=<?php echo $dataproduksi[0]; ?>">update</a>	
					<a href="?page=produksi&id=<?php echo $dataproduksi[0]; ?>">delete</a>
				</td>																						
</tr>
<?php } ?>
</table>
<table width="77%" border="0" align="center">
  <tr>
    <td>
    <div align="right"> 
<a class="Button" href="?page=i-produksi">
     <span class="btn">
            <span class="l"></span>
            <span class="r"></span>
            <span class="t">Input Data</span>      
      </span>
</a></div>
    </td>
  </tr>
</table>
<?php

if(isset($_GET[id])){
	$del=mysql_query("delete from data_produksi where id_jenis='$_GET[id]'");
	
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=produksi&ok' />";
}

?>