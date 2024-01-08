<script>
function slcpgwTetap(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12){
  $('input[name=nip]').val(pg1);
  $('input[name=nama]').val(pg2);
  $('input[name=id_jabatan]').val(pg3);
  $('input[name=jabatan]').val(pg4);
  $('input[name=id_departemen]').val(pg5);
  $('input[name=departemen]').val(pg6);
  $('input[name=gaji_pokok]').val(pg7);
  $('input[name=hari_tua]').val(pg8);
  $('input[name=kecelakaan]').val(pg9);
  $('input[name=kesehatan]').val(pg10);
  $('input[name=kematian]').val(pg11);
   $('input[name=gaji]').val(pg12);

  tb_remove(); // hilangkan dialog thickbox
}
function slcpgwburuh(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12){
  $('input[name=nip]').val(pg1);
  $('input[name=nama]').val(pg2);
  $('input[name=id_jabatan]').val(pg3);
  $('input[name=jabatan]').val(pg4);
  $('input[name=id_departemen]').val(pg5);
  $('input[name=departemen]').val(pg6);
  $('input[name=gaji_pokok]').val(pg7);
  $('input[name=lembur]').val(pg8);
  $('input[name=upah]').val(pg8);



  tb_remove(); // hilangkan dialog thickbox
}
 function slcproduk(a1,a2,a3,a4){
	 $('input[name=id_jenis]').val(a1);
	 $('input[name=jenis]').val(a2);
	 $('input[name=harga]').val(a3);
	 $('input[name=jumlah]').val(a4);
  tb_remove(); // hilangkan dialog thickbox
 }
</script>
<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<script type="text/javascript">
<!--

//Java Script Perhitungan Tunjangan
<?php
include"koneksi.php";


?>

function startSum(){
	  interval = setInterval("Sum()",1);
	}
	function Sum(){
		var BulananTot = 0;		
		for (j = 0; j < document.formbulanan.TxtBulan.length; j++) {
			BulananTot -= document.formbulanan.TxtBulan[j].value;
		}	
		var ptg2 = document.formbulanan.pot2.value; 
		
		var r4 = document.formbulanan.TxtTotal2.value;
		var r5 =  (BulananTot * -1);  
		var r6 = r5 - ptg2;
		
		document.formbulanan.TxtTotal.value =    r6; 
		
	}
	function stopSum(){
	  clearInterval(interval);
	}
	
</script>

<script src="js/ValidationScripts.js" type="text/javascript"></script>
<style>
input{border:1px #999 solid; width:200px;}
.btn{width:100px;}
</style>
<body>
<?php

	$query=mysql_query("select * from daftar_gaji where id_gaji='$_GET[id]'");
		$gj=mysql_fetch_array($query);
	
	
?>
<form name="formbulanan" method="post" action="./aksi.php?page=gaji&act=update">
 <input type="hidden" name="id" value="<?php echo $gj[id_gaji] ?>">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <h2>Data_Gaji</h2>
    </div></td>
  </tr>
  
  <tr>
    <td width="242">Tanggal Gaji</td>
    <td width="17"><strong>:</strong></td>
    <td><input name="tanggal" type="text" id="tanggal" value="<?php echo $gj[tanggal] ?>" size="20" />
      <!--<input name="tanggal" type="button" id="tanggal"  /> <a href="#" onClick="return showCalendar('tanggal','y-mm-d');"> <img src="images/calendarIcon.png" width="17" height="17" border="0" ></a>-->     </td>
  </tr>
  <tr>
    <td>Nip</td>
    <td><strong>:</strong></td>
    <td>
   
      <input type="text" name="nip" id="nip" value="<?php echo $gj[nip] ?>"/>
    </a></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="nama" id="nama" value="<?php echo $gj[nama] ?>" /></td>
  </tr>
  
  <!--<tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td><a href="popup/jabatan1.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    </a> </td>
  </tr>
  -->

<!--  <tr>
    <td>Id_Departemen</td>
    <td>:</td>
    <td><a href="popup/departemen.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox"> </a> 
      </td>
  </tr>
-->  <tr>
    <td>Jabatan</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="departemen" id="departemen"  readonly value="<?php echo $gj[jabatan] ?>"/>
	</td>
  </tr>
 
 
  <tr>
    <td>Gaji Pokok</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="lembur" value="<?php echo $gj[uang_lembur] ?>"  /></td>
  </tr>
  
    <!-- zz -->
    <!-- zz -->
  <tr>
    <td>Tunjangan</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="hari_raya" id="hari_raya" value="<?php echo $gj[bonus] ?>"  /></td>
  </tr>
 
  
  <tr>
    <td>Potongan</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="potongan" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[potongan] ?>" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" /></td>
  </tr>
  
  <tr>
    <td><strong>Total Gaji</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="TxtTotal" id="gaji" value="<?php echo $gj[gaji_kotor] ?>"/></td>
  </tr>
  <td colspan="3" align="right"><input class="button" name="smpgaji" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" /></td>
</table>
</form>
</body>
</html>
<?php
	if(isset($_POST[smpgaji])){
		
		$sql=mysql_query("update daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_jabatan='$_POST[id_jabatan]',
				id_departemen='$_POST[id_departemen]',
				uang_lembur='$_POST[lembur]',
				uang_makan='$_POST[makan]',
				uang_transport='$_POST[transportasi]',
				tunj_istri='$_POST[istri]',
				tunj_anak='$_POST[anak]',
				tunj_hari_tua='$_POST[hari_tua]',
				tunj_kecelakaan='$_POST[kecelakaan]',
				tunj_kesehatan='$_POST[kesehatan]',
				tunj_kematian='$_POST[kematian]',
				tunj_hari_raya='$_POST[hari_raya]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				gaji_kotor='$_POST[TxtTotal]'
				where id_gaji='$_GET[id]'
				");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal cok');</script>";
			}
		}
		
?>