<script>
function slcpgwTetap(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12,pg13,pg14){
  $('input[name=nip]').val(pg1);
  $('input[name=nama]').val(pg2);
  $('input[name=id_jabatan]').val(pg3);
  $('input[name=jabatan]').val(pg4);
  $('input[name=id_tunj_fungsional]').val(pg5);
  $('input[name=tunj_fungsional]').val(pg6);
   $('input[name=tunjangan]').val(pg7);
  $('input[name=gaji_pokok]').val(pg8);
 
  $('input[name=hari_tua]').val(pg9);
 
  $('input[name=kesehatan]').val(pg10);
    $('input[name=iuran]').val(pg11);
	 $('input[name=pajak]').val(pg12);
	  $('input[name=iuran1]').val(pg13);
	  
   $('input[name=gaji]').val(pg14);

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

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}


//Java Script Perhitungan Tunjangan
<?php
if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") {
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
	
<?php } else{ ?>
	function startSum(){
	  interval = setInterval("Sum()",1);
	}
	function Sum(){
		var BulananTot = 0;		
		for (j = 0; j < document.formbulanan.TxtBulan.length; j++) {
			BulananTot -= document.formbulanan.TxtBulan[j].value;
		}	
		var x = document.formbulanan.harga.value;
		var xx = document.formbulanan.hargsa.value;
		
		var xxx = x * xx;
		document.formbulanan.totpro.value = xxx;
		
		var ptg2 = document.formbulanan.pot2.value; 
		
		var r4 = document.formbulanan.TxtTotal2.value;
		var r5 =  (BulananTot * -1);  
		var r6 = r5 - ptg2;
		
		document.formbulanan.TxtTotal.value =    r6; 
		document.formbulanan.TxtTotals.value =    (BulananTot * -1) ;  
		
	}
	function stopSum(){
	  clearInterval(interval);
	}
	<?php } ?>		
</script>
<script src="js/ValidationScripts.js" type="text/javascript"></script>
<style>
input{border:1px #999 solid; width:200px;}
.btn{width:100px;}
</style>
<body>
<form name="formbulanan" method="post" action="">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <h2>Data Gaji</h2>
    </div></td>
  </tr>
  <tr>
    <td width="242">Status </td>
    <td width="17"><strong>:</strong></td>
    <td width="491"><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
      <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { echo"<option value='#'> $_GET[io]</option>"; }
	  else if($_GET[io]=="Buruh") { echo"<option value='#'>$_GET[io]</option>"; }
	  else{?>
      <option value='#'>Pilih Salah Satu</option>
      <?php } ?>
      <option value="?page=d-gaji&io=Tetap">Tetap</option>
      <option value="?page=d-gaji&io=Kontrak">Kontrak</option>
     
    </select></td>
  </tr>
  <tr>
    <td width="242">Tanggal Gaji</td>
    <td width="17"><strong>:</strong></td>
    <td><input name="tanggal" type="text" id="tanggal" value="<?php echo date("Y-m-d")?>" size="20" readonly/>
      <!--<input name="tanggal" type="button" id="tanggal"  /> <a href="#" onClick="return showCalendar('tanggal','y-mm-d');"> <img src="images/calendarIcon.png" width="17" height="17" border="0" ></a>-->     </td>
  </tr>
  <tr>
    <td>Nip</td>
    <td><strong>:</strong></td>
    <td>
    <?php if($_GET[io]=="Tetap"){ ?>
    <a href="popup/pgw-tetap.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <?php } elseif($_GET[io]=="Kontrak"){  ?>
     <a href="popup/pgw-kontrak.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <?php } elseif($_GET[io]=="Buruh"){  ?>
     <a href="popup/pgw-buruh.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <?php } else{ ?> 
	<a href="popup/eror.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
	<?php } ?>
      <input type="text" name="nip"/>
    </a></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="nama" readonly /></td>
  </tr>
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
  <!--<tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td><a href="popup/jabatan1.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    </a> </td>
  </tr>
  -->
  <tr>
    <td>Golongan</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="jabatan" id="jabatan" readonly /><input type="hidden" name="id_jabatan" /></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="tunj_fungsional" id="tunj_fungsional" readonly /><input type="hidden" name="id_tunj_fungsional" /></td>
  </tr>
  
   <tr>
    <td>Tunj.Fungsional</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="tunjangan" id="TxtBulan"  onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly /></td>
  </tr>
  <?php } ?>
<!--  <tr>
    <td>Id_Departemen</td>
    <td>:</td>
    <td><a href="popup/departemen.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox"> </a> 
      </td>
  </tr>
-->  
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
   <tr>
    <td>Gaji pokok</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="gaji_pokok" id="TxtBulan"  onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly /></td>
  </tr>
  <?php } ?>
   <!-- zz -->
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
  
  
  <tr>
    <td>Tunjangan Hari Tua</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="hari_tua" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();"readonly onKeyPress="return numbersOnly(event, false);"/></td>
  </tr>
  <tr>
    <td>Tunjangan Kesehatan</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="kesehatan" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly/></td>
  </tr>
   <tr>
    <td>Iuran Wajib Pegawai</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="iuran" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly/></td>
  </tr>
  <tr>
    <td>Potongan Pajak Pph</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="pajak" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly/></td>
  </tr>
   <tr>
    <td>Total Gaji Bersih</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="iuran1" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly/></td>
  </tr>
  <?php } ?>
  <!-- zz -->
  
  <?php if($_GET[io]=="Buruh") { ?>
  <tr>
    <td>Jenis</td>
    <td><strong>:</strong></td>
    <td><a href="popup/produk.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
	<input type="text" name="jenis" id="jenis" readonly=""/></a>
	  <input type="hidden" name="id_jenis" /></td>
  </tr>
  <tr>
    <td>Harga per unit</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="harga" id="harga"  onFocus="startSum();" onBlur="stopSum()" onKeyPress="return numbersOnly(event, false);"  readonly=""/></td>
  </tr>
  <tr>
    <td>Jumlah Produksi</td>
    <td><strong>KG</strong></td>
    <td><input name="jumlah" type="text" id="hargsa" size="1"  onFocus="startSum();" onBlur="stopSum()" onKeyPress="return numbersOnly(event, false);"  /></td>
  </tr>
  <tr>
    <td><strong>Total Produksi </strong></td>
    <td><strong>Rp</strong></td>
    <td><input name="totpro" type="text"  size="1" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);"  readonly="" ></td>
  </tr>

  <?php } ?>
  
   
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
  
  <?php } else if($_GET[io]=="Buruh") { ?>
  <tr>
    <td><strong>Total Upah</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="TxtTotal" id="upah"/>
	 <input type="hidden" name="TxtTotal2"/>
	</td>
  </tr>
  <?php }?>
  <td colspan="3" align="right"><input class="button" name="smpgaji" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" /></td>
</table>
</form>
</body>
</html>
<?php
include"koneksi.php";
	if($_GET[io]=="Tetap" and isset($_POST[smpgaji])){
		$cek=mysql_query("select * from daftar_gaji where nip='$_POST[nip]' and tanggal='$_POST[tanggal]'");
			$r=mysql_num_rows($cek);
		if($r!=0){
				echo"<script>window.alert('Pegawai Dengan Nip ($_POST[nip]) Sudah Gajian');</script>";
		}
		else{
		$sql=mysql_query("insert into daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_jabatan='$_POST[id_jabatan]',
				id_tunj_fungsional='$_POST[id_tunj_fungsional]',
				nama='$_POST[nama]',
				jabatan='$_POST[jabatan]',
				tunj_fungsional='$_POST[tunj_fungsional]',
				uang_lembur='$_POST[gaji_pokok]',
				
				tunj_hari_tua='$_POST[hari_tua]',
				tunj_kecelakaan='$_POST[tunjangan]',
				tunj_kesehatan='$_POST[kesehatan]',
				tunj_kematian='$_POST[iuran]',
				tunj_hari_raya='$_POST[pajak]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				gaji_kotor='$_POST[iuran1]',
				status_pgw='$_GET[io]'
				");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal');</script>";
			}
		}
	}
	else if($_GET[io]=="Kontrak" and isset($_POST[smpgaji])){
		$sql=mysql_query("insert into daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_jabatan='$_POST[id_jabatan]',
				nama='$_POST[nama]',
				jabatan='$_POST[jabatan]',
				uang_lembur='$_POST[gaji_pokok]',
				
				tunj_hari_tua='$_POST[hari_tua]',
				tunj_kecelakaan='$_POST[tunjangan]',
				tunj_kesehatan='$_POST[kesehatan]',
				tunj_kematian='$_POST[kematian]',
				tunj_hari_raya='$_POST[hari_raya]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				gaji_kotor='$_POST[TxtTotal]',
				status_pgw='$_GET[io]'");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal');</script>";
		}
	}
	else if($_GET[io]=="Buruh" and isset($_POST[smpgaji])){
		$sql=mysql_query("insert into daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_departemen='$_POST[id_departemen]',
				uang_lembur='$_POST[lembur]',
				uang_makan='$_POST[makan]',
				uang_transport='$_POST[transportasi]',
				tunj_hari_raya='$_POST[hari_raya]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				total_upah='$_POST[TxtTotal]',
				status_pgw='$_GET[io]'");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal');</script>";
		}
	}
?>