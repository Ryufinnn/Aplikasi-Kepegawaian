<?php
include"koneksi.php";
include"inc/fungsi.php";
$mont=date(m);
$yer=date(Y);
$h=mysql_query("select * from $_GET[dt] where nip='$_GET[nid]'");
			$p=mysql_fetch_array($h);
$gj=mysql_query("select * from daftar_gaji where nip='$_GET[nid]' and month(tanggal)='$mont' and year(tanggal)='$yer'");
		$cekgaji=mysql_num_rows($gj);
			$jg=mysql_fetch_array($gj);
$jb=mysql_query("select * from jabatan where id_jabatan='$p[id_jabatan]'");
			$bj=mysql_fetch_array($jb);
		
if($jg[gaji_kotor]<50000000){
	$rp="5";
}
else if($jg[gaji_kotor]<250000000){
	$rp="15";
}
else if($jg[gaji_kotor]<500000000){
	$rp="25";
}
else if($jg[gaji_kotor]>50000000){
	$rp="30";
}
if($cekgaji==0){
	echo"<script>window.alert('Maaf Pajak Tidak dapat dilihat, Karna Pegawai Yang dimaksud Belum dapat Gaji pada $mont/$yer')</script>
	<meta http-equiv='refresh' content='0;URL=?page=pajak'>";
}
else if(1320000>$jg[gaji_kotor]){
	echo"<script>window.alert('Maaf Pegawai Yg dimaksud Tidak Kena Pajak. Terima Kasih')</script>
	<meta http-equiv='refresh' content='0;URL=?page=pajak'>";
}
else{
$ceksql2=mysql_query("select * from pph_21 where nip='$_GET[nid]' and month(tgl_pph)='$mont' and year(tgl_pph)='$yer' order by id_pph desc");
			$ceki2=mysql_num_rows($ceksql2);
			$fet2=mysql_fetch_array($ceksql2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-style: italic;
}
.style2 {
	color: #550000;
	font-weight: bold;
}
.style3 {
	color: #0000FF;
	font-weight: bold;
}
.style5 {font-size: 10px}
-->
</style>
</head>
<body>

<hr/>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" class="tbls">
    <tr>
      <td height="40" colspan="6"><div align="center" style="font-size:20px; font-weight:bold">Pajak Penghasilan Pasal 21 </div></td>
    </tr>
    <tr>
      <td width="19%" rowspan="7"><?php
		if($p[foto]==""){ ?>
          <img src="images/avatar.png" width="100%" height="111" />
          <?php }else{echo"<img src='file_upload/$p[foto]' width='100%' height='111' />";} ?>
      </td>
      <td width="3%" rowspan="8">&nbsp;</td>
      <td width="29%">Tanggal penggaajian </td>
      <td colspan="2">&nbsp;</td>
      <td width="14%"><div align="right">
          <input name="tgl_pph" type="hidden" id="tgl_pph" value="<?php echo date(Y)."-".date(m)."-25" ?>" />
          <?php echo "25/".date(m)."/".date(Y) ?></div>
          <div align="right"></div></td>
    </tr>
    <tr>
      <td>Gaji Sebulan </td>
      <td width="31%">&nbsp;</td>
      <td width="4%"><strong>Rp.</strong></td>
      <td width="14%"><div align="right"><strong><?php echo format_rupiah("$jg[gaji_kotor]"); ?></strong></div></td>
    </tr>
    <tr>
      <td colspan="4"><strong>Pengurangan</strong>
          <div align="right"></div></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;1. Biaya Jabatan </td>
      <td><?php echo $rp."%"; ?> x &nbsp;<?php echo format_rupiah("$jg[gaji_kotor]"); ?> </td>
      <td><strong>Rp.</strong></td>
      <td><div align="right">
          <?php $y=$jg[gaji_kotor]*$rp/100;echo format_rupiah("$y"); ?>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;2. Iuran Pensiun </td>
      <td>&nbsp;</td>
      <td><strong>Rp.</strong></td>
      <td><div align="right">50.000</div></td>
    </tr>
    <tr>
      <td height="30" colspan="2"><div align="center" class="style2">(<span class="style1">
          <?php $y=$jg[gaji_kotor]*$rp/100;echo"Rp. ".format_rupiah("$y"); ?>
        + Rp. 50.000</span> ) </div></td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"><strong>
        <?php $y=$jg[gaji_kotor]*$rp/100+50000; echo format_rupiah("$y"); ?>
      </strong></div></td>
    </tr>
    <tr>
      <td>Penghasilan Netto sebulan </td>
      <td><!--Rp.<span class="style2"><?php echo format_rupiah("$jg[gaji_kotor]"); ?> -</span><span class="style3"> Rp.</span><span class="style2"> <strong>
      <?php $y=$jg[gaji_kotor]*$rp/100+50000; echo format_rupiah("$y"); ?>
    -->
          </strong></span></td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"><strong><span class="">
          <input name="neto_sbulan" type="hidden" id="neto_sbulan" value="<?php $t1=$jg[gaji_kotor]-$y;echo "$t1"; ?>" />
          <?php $t1=$jg[gaji_kotor]-$y;echo format_rupiah("$t1"); ?>
      </span></strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong><?php echo $p[nama] ?></strong>
              <input type="hidden" name="nip" value="<?php echo"$_GET[nid]"; ?>" />
              <input type="hidden" name="status" value="<?php echo $jg[status_pgw] ?>" />
              <br />
        ( <?php echo $bj[nama_jabatan]; ?> )</div></td>
      <td>Penghasilan Netto Setahun <br />
        (<span class="style1"> 12 x Rp.
          <?php $t1=$jg[gaji_kotor]-$y;echo format_rupiah("$t1"); ?>
        </span>)</td>
      <td>&nbsp;</td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"><strong>
          <input name="neto_stahun" type="hidden" id="neto_stahun" value="<?php $t1=($jg[gaji_kotor]-$y) * 12;echo "$t1"; ?>" />
          <?php $t1=($jg[gaji_kotor]-$y) * 12;echo format_rupiah("$t1"); ?>
      </strong></div></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="11">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td><div align="right"></div></td>
    </tr>
    <tr>
      <td colspan="4"><strong>PTKP</strong>
          <div align="right"></div></td>
    </tr>
    <tr>
      <td>Untuk Wajib Pajak </td>
      <td>&nbsp;</td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"><strong>
          <input name="wajib_pjk" type="hidden" id="wajib_pjk" value="15840000" />
          </strong>15.840.000
        <?php $wp="15.840.000"; ?>
      </div></td>
    </tr>
    <?php 
   if($p[status]=="kawin"){
   ?>
    <tr>
      <td>Untuk Status Kawin </td>
      <td>&nbsp;</td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"><strong>
          <input name="ptkp_kawin" type="hidden" id="ptkp_kawin" value="1320000" />
          </strong>1.320.000
        <?php $wk=15840000+1320000; ?>
      </div></td>
    </tr>
    <?php }
   if($p[jmlAnak]>0){
   ?>
    <tr>
      <td> Anak </td>
      <td>&nbsp;</td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"><strong>
          <input name="ptkp_anak" type="hidden" id="ptkp_anak" value="1320000" />
          </strong>1.320.000
        <?php $wk=15840000+1320000+1320000; ?>
      </div></td>
    </tr>
    <?php } ?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Rp.</strong></td>
      <td><div align="right"> <b>
          <?php if($p[status]=="kawin"){ echo format_rupiah("$wk"); } else if($p[jmlAnak]>0) {echo format_rupiah("$wk");} else {echo"15.840.000";}?>
      </b> </div></td>
    </tr>
    <tr>
      <td height="28" colspan="3" bgcolor="#66FFFF"><div align="center"><strong><em>Penghasilan Kena Pajak Setahun </em></strong></div></td>
      <td><div align="right"><strong>
          <?php $t1=($jg[gaji_kotor]-$y) * 12 - "$wk";echo format_rupiah("$t1"); ?>
      </strong></div></td>
    </tr>
    <tr>
      <td><strong>Pph Pasal 21 setahun </strong></td>
      <td colspan="2"><span class="style5"><?php echo $rp."%"; ?> x
        <?php $t1=($jg[gaji_kotor]-$y) * 12 - "$wk";echo format_rupiah("$t1"); ?>
      </span></td>
      <td><div align="right" class="style3"> <strong>
          <input name="pph_stahun" type="hidden" id="pph_stahun" value="<?php $okl=$t1 * $rp / 100 ;echo "$okl"; ?>" />
          </strong>
              <?php $okl=$t1 * $rp / 100 ;echo format_rupiah("$okl"); ?>
      </div></td>
    </tr>
    <tr>
      <td><strong>Pph 21 sebulan </strong></td>
      <td colspan="2"><span class="style5">1/12 x Rp.
        <?php $okl=$t1 * $rp / 100 ;echo format_rupiah("$okl"); ?>
      </span></td>
      <td><div align="right" class="style3"> <strong>
          <input name="pph_sbulan" type="hidden" id="pph_sbulan" value="<?php $pphs=1/12*$okl; echo "$pphs"; ?>" />
          </strong>
              <?php $pphs=1/12*$okl; echo format_rupiah("$pphs"); ?>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td><div align="right"></div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      <td><div align="right"></div></td>
    </tr>
    <?php
		if($ceki2==0){}else{
	?>
    <tr>
      <td colspan="6"><div align="right"><blink>Terima Kasih Telah Membayar Pajak</blink></div></td>
    </tr>
    <?php }?>
    <tr>
      <td colspan="6"><div align="right">
          <input type="button" name="back" value="Kembali" onclick="javascript:window.location='?page=pajak'" />
          <?php
		if($ceki2==0){
	?>
          <input type="submit" name="simpn_pph" value="Submit" />
          <?php } else {}?>
      </div></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST[simpn_pph])){
$ceksql=mysql_query("select max(id_pph) as id_pph from pph_21 order by id_pph desc");
	$ceki=mysql_num_rows($ceksql);
	$fet=mysql_fetch_array($ceksql);
	if($ceki==0){
		$idpph="1";
	}
	else{
		$idpph=$fet[id_pph]+1;
	}
	$smp=mysql_query("insert into pph_21 set 
		nip='$_POST[nip]',
		golongan='$_POST[status]',
		tgl_pph='$_POST[tgl_pph]',
		pph_sebulan='$_POST[pph_sbulan]',
		pph_setahun='$_POST[pph_stahun]',
		netto_sebulan='$_POST[neto_sbulan]',
		netto_setahun='$_POST[neto_sbulan]'");
	$ptk=mysql_query("insert into data_ptkp set
		id_pph='$idpph',
		wajib_pajak='$_POST[wajib_pjk]',
		ptkp_kawin='$_POST[ptkp_kawin]',
		ptkp_anak='$_POST[ptkp_anak]'");
		if($smp and $ptk){
		echo"<script>window.alert('PPH 21 Berhasil Disimpan.. Terima Kasih')</script>
	<meta http-equiv='refresh' content='0;URL=?page=d-pajak&nid=$_GET[nid]&nm=$_GET[nm]&dt=$_GET[dt]&ok'>";
		}
}
?>
<p>&nbsp;</p>
</body>
</html>
<?php } ?>