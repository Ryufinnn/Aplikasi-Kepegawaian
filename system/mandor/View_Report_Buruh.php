<title>Lihat Report</title>
<form id="form1" name="form1" method="post" action="">
<?php
	include "koneksi.php";
	$perintah = "select * from data_report order by id_report";
	$view = mysql_query($perintah);
?>
  <tr>
    <td colspan="3">
	<div align="center">
      <h1>VIEW REPORT BURUH</h1><hr />
    </div></td>
  </tr>

  <tr>
    <td width="96">
	<div align="right">
  <div class="sidebar_search" align="right">
<form action="" method="post">
<input type="text" name="idx" id="idx" class="search_input" value="Cari Nama atau Kode" onClick="this.value=''" />
<input type="image" class="search_submit" src="images/search.png" />
</form>
</div>
</div>
	</td>
    <td width="4">:</td>
    <td width="554">
  </td>
  </tr>
<table width="914" align="center" class="tbls">
  <tr>
  	<td width="75"><div align="center">TANGGAL</div></td>
    <td width="59"><div align="center">NIP</div></td>
    <td width="165"><div align="center">JUMLAH YANG DIHASILKAN</div></td>
    <td width="106"><div align="center">UPAH PER/KG</div></td>
    <td width="236"><div align="center">EDIT</div></td>
  </tr>
<?php
				while($datareport=mysql_fetch_row($view)){?>
<tr>
				<td bgcolor="#CCCCCC"><?php echo $datareport[1]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datareport[2]; ?></td>
				<td bgcolor="#CCCCCC"><?php echo $datareport[3]; ?></td>
                <td bgcolor="#CCCCCC"><?php echo $datareport[5]; ?></td>
                
				<td align="center" bgcolor="#CCCCCC">
					<a href="?page=u-report&id=<?php echo $datareport[0]; ?>">update</a>	
					<a href="?page=report&id=<?php echo $datareport[0]; ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')">delete</a>
				</td>																						
</tr>
<?php } ?>
  
</table>
<a class="Button" href="?page=i-report"><span class="btn"><span class="t">

</span></span></a>
<table width="20%" border="0" align="center">
  <tr>
    <td><div align="right"> 
  <a href="popup/print-rpt-produksi.php?width=550&amp;height=400&amp;TB_iframe=true" class="thickbox Button">
    <span class="btn">
      <span class="l"></span>
      <span class="r"></span>
      <span class="t">
        Print</span>      
      </span>
</a></div>
    </td>
    <td><div align="right"> 
  <a class="Button" href="?page=i-report">
    <span class="btn">
      <span class="l"></span>
      <span class="r"></span>
      <span class="t">
        Input Data</span>      
      </span>
</a></div>
    </td>
  </tr>
</table>
</form>
<?php if(isset($_GET[id])){$kl=mysql_query("delete from data_report where id_report='$_GET[id]'");
	echo"<meta http-equiv='refresh' content='0;URL=?page=report' />";} ?>

