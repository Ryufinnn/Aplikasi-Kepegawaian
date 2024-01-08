<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/thickbox/thickbox.css">
<script type="text/javascript" src="js/thickbox/thickbox.js"></script>
    <script type="text/javascript">
function selectKnt(knt,knt2){
  $('input[name=nip]').val(knt);
  tb_remove(); // hilangkan dialog thickbox
}
function lmbr(){
	document.location="?page=lembur";	
}
</script>


<body>
<h1 align="left">Input Data Absensi</h1><hr />
<form method="post" action="">
<table width="766" class="tbls" >
<tr>
<td>TANGGAL </td>
    <td>
    <!--<select name="tgl" id="tgl">
      <option selected="selected">dd</option>
      <?
            for ($i=1; $i<=31; $i++)
                {?>
      <option value="<? echo($i);?>"> <? echo ($i); ?></option>
      <? } ?>
    </select>
        <select name="bln" id="bln">
          <option selected="selected">mm</option>
          <?
            for ($i=1; $i<=12; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
        </select>
        <select name="thn" id="thn">
          <option selected="selected">yyyy</option>
          <?
            for ($i=1980; $i<=2010; $i++)
                {?>
          <option value="<? echo($i);?>"> <? echo ($i); ?></option>
          <? } ?>
      </select>-->
      <?php echo date("Y-m-d"); ?>
      <input name="tgl" type="hidden" id="tgl" value="<?php echo date("Y-m-d"); ?>"></td>
</tr>
  <tr>
    <td width="241">Nip</td>
    <td width="485"><a href="popup/pegawai.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <input class="field" type="text" name="nip" readonly id="jam"/></a>
    </td>
  </tr>
 <!-- <tr>
    <td width="241">&nbsp;</td>
    <td>
    <input type="hidden" name="tx2">
	  <input type="hidden" id="d2" name="d2">
 <input type="text" id="hour" name="hour" size="1" class="time" readonly=""> :
 <input type="text" id="min" name="min" size="1" class="time" readonly=""> :
 <input type="text" id="sec" name="sec" size="1" class="time" readonly="">
    </td>
  </tr>-->
  <tr>
    <td>Jam Masuk</td>
    <td>
    
    	<input name="jam_masuk" type="text" class="field" value="09:00" readonly />
    </td>
  </tr>
  <tr>
    <td>Jam Keluar</td>
    <td> 
    <input name="jam_keluar" type="text" class="field" value="17:00" readonly />
    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>
      <input name="keterangan" type="radio" value="1">
      Alpha
      <input name="keterangan" type="radio" value="2">
      Sakit
      <input name="keterangan" type="radio" value="3">
      Izin 
      <input name="keterangan" type="radio" value="4">
      Cuti
      <input name="keterangan" type="radio" value="0" checked="checked">
      Hadir
      <input name="keterangan" type="radio" value="5" id="lembur" onClick="lmbr()">
      Lembur
      
      </tr>
	 <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Simpan" name="xx" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php include"koneksi.php";
if(isset($_POST[xx])){
	$H=date('H', time());
	$I=date('i', time());
	$hi=$H-01;
	$time="$hi:$I";
	if(empty($_POST[nip])){
		echo"<script>window.alert('Maaf Nip Masih Kosong, Tolong di isi $rt')</script>";
	}
	else{
		if($time=="10:00" and $_POST[jam_keluar]=="17:00"){
			$dnd=10000;	
		}
		elseif($time=="10:00" > "10:00" and $_POST[jam_keluar]=="17:00"){
			$dnd=10000;
		}
		elseif($time>"09:00" and $_POST[jam_keluar]=="17:00"){
			$dnd=10000;	
		}
	$KK=mysql_query("insert into data_absensi set
						tanggal='$_POST[tgl]',
						nip='$_POST[nip]',
						jam_masuk='$time',
						jam_keluar='$_POST[jam_keluar]',
						keterangan='$_POST[keterangan]',
						denda='$dnd'");
		if($KK){
			echo"<script>window.alert('Berhasil')</script>";	
		}
		else{
			echo"<script>window.alert('Gagal')</script>";
		}
	}
}
 ?> 