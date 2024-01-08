<style>
.kop_header{
	border:1px solid #333;
	color:#FFFFFF;
	font-weight:bold;
	font-size:12px;
	padding:8px;
	padding-bottom:0px;
	text-align:center;
	background-color:#60c8f2;
	margin:0px;
	margin-bottom:0px;
	margin-top:5px;
-moz-border-radius-topleft:   5px;       /* round corner, fallback for Firefox 1-3.0 */
/* -moz-border-radius-topleft:   20px 10px;   elliptical border since Firefox 3.5 */
-webkit-border-top-left-radius: 5px 5px;  /* Safari/WebKit */
 border-top-left-radius: 5px 5px;  /* Opera; future browsers with CSS3 support */
-moz-border-radius-topright:   5px;       /* round corner, fallback for Firefox 1-3.0 */
/* -moz-border-radius-topleft:   20px 10px;   elliptical border since Firefox 3.5 */
-webkit-border-top-right-radius: 5px 5px;  /* Safari/WebKit */
 border-top-right-radius: 5px 5px;  /* Opera; future browsers with CSS3 support */
 font-family: Arial, Helvetica, sans-serif;
}
#rpt {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	background:#aaaaaa;


}
#rpt th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color:#000000;
	font-style:normal;
	font-weight: bold;
	background-color: #e4ecea;
	text-align:center;
	padding:5px;
	background-image: url(images/th.png);
	background-repeat: repeat-x;
	background-position: left top;
}

#rpt td {
	padding-bottom:3px;
	empty-cells: show;
	background:#ffffff;
	font-size: 11px;
	padding:5px;
	text-align:left;
}
#rpt tr a{
	background-color:#fff;
}
#rpt tr a:hover{
	background-color:#f4f4f4;
}
#rpt td.pinggir{
	background-image: url(images/td.png);
	background-repeat: repeat-y;
	background-position: right top;
	text-align:center;
}

.rpt {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	background:#aaaaaa;


}
.rpt th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color:#000000;
	font-style:normal;
	font-weight: bold;
	background-color: #50B7E0;
	text-align:center;
	padding:5px;
	background-image: url(images/th.png);
	background-repeat: repeat-x;
	background-position: left top;
}

.rpt td {
	padding-bottom:3px;
	empty-cells: show;
	background:#ffffff;
	font-size: 11px;
	padding:5px;
	text-align:left;
}
.rpt tr a{
	background-color:#fff;
}
.rpt tr a:hover{
	background-color:#f4f4f4;
}
.rpt td.pinggir{
	background-image: url(images/td.png);
	background-repeat: repeat-y;
	background-position: right top;
	text-align:center;
}
.style3 {color: #111111}
.style4 {color: #DD0000}
</style>
  <script language="javascript">
   function slcproduk(a1,a2,a3,a4){
	   window.parent.slcproduk(a1,a2,a3,a4);
	   window.parent.tb_remove();
   }
  </script>
  <form id="form1" name="form1" method="post" action="">
    <div align="right">
      <select name="cr" id="select">
        <option value="mandor">Mandor</option>
        <option value="keuangan">Keuangan</option>
        <option value="hrd">HRD</option>
      </select>
      <input type="submit" name="g" value="Go" />
    </div>
  </form><hr />
<div class="kop_header"><span class="style3">Data Produk </span> <br> 
  <br>
</div>
<table id="rpt" border="0" cellpadding="1" cellspacing="1" width="100%">
  <tbody>
   
    <tr>
      <td width='17%'><div align="center"><strong>ID Poduk </strong></div></td>
      <td width='55%'><div align="center"><strong>Nama Produk</strong></div></td>
	  <td width='55%'><div align="center"><strong>Harga Produk</strong></div></td>
    </tr>
<?php
include"../koneksi.php";
	$z=mysql_query("select * from data_produksi order by id_jenis asc");	
		while($k=mysql_fetch_array($z)){
		$no++;

 ?>
    <tr>
      <td><div align="center">
	<a href="javascript:slcproduk('<?php echo $k[id_jenis];?>','<?php echo $k[nama_jenis];?>','<?php echo $k[harga];?>','')">
		  <?php echo $k[id_jenis];?>  </a>
	  </div></td>
      <td><div align="center">
		  <?php echo $k["nama_jenis"];?>
		  </div></td>
		<td><div align="center">
		  <?php echo $k["harga"];?>
		  </div></td>
    </tr>
<?php }if($row>0){}else{ if(!isset($_POST[g])){}else{ ?>
<tr>
      <td colspan="3"><div align="center"><span class="style4">Maaf Data Yang Dicari Tidak Ada.</span> Silahkan Cari Lagi.. </div></td>
    </tr>
<?php }} ?>
  </tbody>
</table>
