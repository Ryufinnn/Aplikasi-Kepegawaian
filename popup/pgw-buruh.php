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
   function slcpgwburuh(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8){
	   window.parent.slcpgwburuh(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8);
	   window.parent.tb_remove();
   }
  </script>
  <form id="form1" name="form1" method="post" action="">
    <div align="right">
      <input type="text" name="cari" id="cari" />
      <input type="submit" name="g" value="Go" />
    </div>
  </form><hr />
<div class="kop_header"><span class="style3">Data Pegawai Buruh</span> <br> 
  <br>
</div>
<table id="rpt" border="0" cellpadding="1" cellspacing="1" width="100%">
  <tbody>
   
    <tr>
      <td width='17%'><div align="center"><strong>Nip</strong></div></td>
      <td width='27%'><div align="center"><strong>Nama Pegawai </strong></div></td>
      <td width='14%'><div align="center"><strong>Departemen </strong></div></td>
    </tr>
<?php
include"../koneksi.php";
if(isset($_POST[g])){
	$z=mysql_query("select * from data_buruh where nip like '%$_POST[cari]%'  order by nip asc");
	$row=mysql_num_rows($zb);
}
else{
	$z=mysql_query("select * from data_buruh order by nip asc");
}		
		while($k=mysql_fetch_array($z)){
		$no++;
	$jbt=mysql_query("select * from jabatan where id_jabatan='$k[id_jabatan]'");
		$p=mysql_fetch_array($jbt);
	$dpt=mysql_query("select * from departemen where id_departemen='$k[id_departemen]'");
		$dp=mysql_fetch_array($dpt);
		$m=date(m);
	$lmb=mysql_query("select sum(totalUph) as totalUph from data_lembur where nip='$k[nip]' and bulan='$m'");
		$lm=mysql_fetch_array($lmb);
	
 ?>
    <tr>
      <td><div align="center">
	<a href="javascript:slcpgwburuh('<?php echo $k[nip];?>','<?php echo $k[nama];?>','<?php echo $k[id_jabatan];?>','<?php echo $p[nama_jabatan];?>','<?php echo $k[id_departemen];?>','<?php echo $dp[nama_departemen];?>','<?php echo $p[gaji_pokok];?>','<?php echo $lm[totalUph]?>')">
		  <?php echo $k[nip];?>  </a>
	  </div></td>
      <td><div align="center">
		  <?php echo $k["nama"];?>
		  </div></td>
      <td><div align="center"> <?php echo $dp["nama_departemen"];?> </div></td>
    </tr>
<?php }if($row>0){}else{ if(!isset($_POST[g])){}else{ ?>
<tr>
      <td colspan="8"><div align="center"><span class="style4">Maaf Data Yang Dicari Tidak Ada.</span> Silahkan Cari Lagi.. </div></td>
    </tr>
<?php }} ?>
  </tbody>
</table>
