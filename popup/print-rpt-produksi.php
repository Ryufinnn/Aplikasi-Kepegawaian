
<title>Lihat Report</title>
<body onLoad="javascript:window.print()">
<form id="form1" name="form1" method="post" action="">
<?php
	include "../koneksi.php";
	$perintah = "select * from data_report order by id_report";
	$view = mysql_query($perintah);
?>
  <tr>
    <td colspan="3">
	<div align="center">
      <h1> <a href="" onClick="javascript:window.print()">Report Produksi </a></h1>
      <hr />
    </div></td>
  </tr>

<tr>
  <td width="96">    
<table width="559" align="center" border="1">
  <tr>
  	<td width="83" bgcolor="#DDDDDD"><div align="center">TANGGAL</div></td>
    <td width="126" bgcolor="#DDDDDD"><div align="center">NIP</div></td>
    <td width="220" bgcolor="#DDDDDD"><div align="center">JUMLAH YANG DIHASILKAN</div></td>
    <td width="102" bgcolor="#DDDDDD"><div align="center">UPAH PER/KG</div></td>
  </tr>
<?php
				while($datareport=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#FFFFFF"><?php echo $datareport[1]; ?></td>
				<td bgcolor="#FFFFFF"><?php echo $datareport[2]; ?></td>
				<td bgcolor="#FFFFFF"><?php echo $datareport[3]; ?></td>
                <td bgcolor="#FFFFFF"><?php echo $datareport[5]; ?></td>
  </tr>
<?php } ?>
</table>
<a class="Button" href=""><span class="btn"><span class="t">

</span></span></a>
</form>

</body>