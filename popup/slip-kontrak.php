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
   function slcslipTetap(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12,pg13,pg14,pg15,pg16,pg17,pg18,pg19,pg20,pg21){
	   window.parent.slcslipTetap(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12,pg13,pg14,pg15,pg16,pg17,pg18,pg19,pg20,pg21);
	   window.parent.tb_remove();
   }
  </script>
  <form id="form1" name="form1" method="post" action="">
    <div align="right">
      <input type="text" name="cari" id="cari" />
      <input type="submit" name="g" value="Go" />
    </div>
  </form><hr />
<div class="kop_header"><span class="style3">Data Gaji Pegawai Kontrak</span> <br> 
  <br>
</div>
<table id="rpt" border="0" cellpadding="1" cellspacing="1" width="100%">
  <tbody>
   
    <tr>
      <td width='18%'><div align="center"><strong>Nip</strong></div></td>
      <td width='32%'><div align="center"><strong>Nama Pegawai </strong></div></td>
      <td width='21%'><div align="center"><strong> Jabatan </strong></div></td>
      <td width='15%'><div align="center"><strong>Departemen </strong></div></td>
      <td width='14%'><div align="center"><strong>Gaji Kotor </strong></div></td>
    </tr>
<?php
include"../koneksi.php";
include"../inc/fungsi.php";
if(isset($_POST[g])){
	$z=mysql_query("select * from pegawai_kontrak where nip like '%$_POST[cari]%'  order by nip asc");
	
	
}
else{
	$z=mysql_query("select * from pegawai_kontrak order by nip asc");
}		$row=mysql_num_rows($z);
		while($k=mysql_fetch_array($z)){
		$no++;
	$jbt=mysql_query("select * from jabatan where id_jabatan='$k[id_jabatan]'");
		$p=mysql_fetch_array($jbt);
	$dpt=mysql_query("select * from departemen where id_departemen='$k[id_departemen]'");
		$dp=mysql_fetch_array($dpt);
		$tnjhrTua=$p[gaji_pokok] * 3.7 /100;
		$tnjkecl=$p[gaji_pokok] * 0.89 /100;
		$tnjkmtian=$p[gaji_pokok] * 0.38 /100;
		$tnjkesehtn=$p[gaji_pokok] * 6.7 /100;
		$totlsh=$p[gaji_pokok]+$tnjhrTua+$tnjkecl+$tnjkmtian+$tnjkesehtn;
		$dt1=date(m);
		$dt2=date(Y);
	$dgaji=mysql_query("select * from daftar_gaji where nip='$k[nip]' and month(tanggal)='$dt1' and year(tanggal)='$dt2'");
	$ckgaji=mysql_num_rows($dgaji);
	$tgj=mysql_fetch_array($dgaji);
	$pph21=mysql_query("select * from pph_21 where nip='$k[nip]' and month(tgl_pph)='$dt1' and year(tgl_pph)='$dt2'");
	$ckpph=mysql_num_rows($pph21);
	$pph=mysql_fetch_array($pph21);
	if($ckgaji==0){}else{
	 ?>
    <tr>
      <td><div align="center">
	<a href="javascript:slcslipTetap('<?php echo $k[nip];?>','<?php echo $k[nama];?>','<?php echo $k[id_jabatan];?>','<?php echo $p[nama_jabatan];?>','<?php echo $k[id_departemen];?>','<?php echo $dp[nama_departemen];?>','<?php echo $p[gaji_pokok];?>','<?php echo $tgj[tunj_hari_tua];?>','<?php echo $tgj[tunj_kecelakaan];?>','<?php echo $tgj[tunj_kematian];?>','<?php echo $tgj[tunj_kesehatan];?>','<?php echo $tgj[uang_makan];?>','<?php echo $tgj[uang_lembur];?>','<?php echo $tgj[uang_transport];?>','<?php echo $tgj[tunj_hari_raya];?>','<?php echo $tgj[potongan];?>','<?php if($ckpph==0){echo"0";}else{echo"$pph[pph_sebulan]";}?>','<?php echo $tgj[tunj_istri];?>','<?php echo $tgj[tunj_anak];?>','<?php echo $pph[id_pph];?>','<?php echo $tgj[bonus];?>')">
		  <?php echo $k[nip];?>  </a>
	  </div></td>
      <td><div align="center">
		  <?php echo $k["nama"];?>
		  </div></td>
      <td><div align="center"> <?php echo $p["nama_jabatan"];?> </div></td>
      <td><div align="center"> <?php echo $dp["nama_departemen"];?> </div></td>
      <td><div align="center"><?php echo format_rupiah($tgj["gaji_kotor"]);?></div></td>
    </tr>
<?php }if($row>0){}else{ if(!isset($_POST[g])){}else{ ?>

<?php }}}
?>
  </tbody>
</table>
