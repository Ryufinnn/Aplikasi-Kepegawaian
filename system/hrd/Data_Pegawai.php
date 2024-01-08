<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.field{width:400px;}
.field:hover{border:1px #00F solid;}
.style1 {color: #FFFFFF}
</style>
</head>

<body>
<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<script>
function slcjabatan1(a1,a2){
  $('input[name=id_jabatan]').val(a1);
  $('input[name=jabatan]').val(a2);
  tb_remove(); // hilangkan dialog thickbox
}
function slctunj_fungsional1(a1,a2){
  $('input[name=id_tunj_fungsional]').val(a1);
  $('input[name=tunj_fungsional]').val(a2);
  tb_remove(); // hilangkan dialog thickbox
}

$(document).ready(function() {
	$("div#b").hide();
	$("#openb").click(function(){
		$("div#b").slideDown("slow");
	});	
	$("#closeup").click(function(){
		$("div#b").slideUp("slow");	
	});		
	$("#b2 a").click(function () {
		$("#b2 a").toggle();
	});	
});
$(document).ready(function() {
$("#closeup2").click(function(){
		$("div#b").slideDown("slow");
		//$("div#b").slideUp("slow");	
	});	
});
</script>

 <form name="Input Data Pegawai" action="" method="post" enctype="multipart/form-data">
<table width="710" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <H2>INPUT DATA PEGAWAI </H2>
    </div></td>
  </tr>
  
  <tr align="left">
    <td width="166">NIP</td>
    <td width="21"><strong>:</strong></td>
    <td width="507"><input class="field" type="text" name="nip" /></td>
  </tr>
  <tr align="left">
    <td>Nama</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="nama" /></td>
  </tr>
  <tr align="left">
    <td>Tanggal Lahir</td>
    <td><strong>:</strong></td>
    <td><input name="tanggal" type="text" id="tanggal" size="20" />
      <input name="tanggal" type="button" id="tanggal" onclick="return showCalendar('tanggal','y-mm-d');" value="..." /></td>
    </tr>

  <tr align="left">
    <td>Tempat Lahir</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="tempat_lahir" /></td>
  </tr>
  <tr align="left">
    <td>Agama</td>
    <td><strong>:</strong></td>
     <td><select name="agama" id="agama">
       <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Katolik">Hindu</option>
        <option value="Budha">Budha</option>
</select></td>
  </tr>
  <tr align="left">
  	<td>No Telp</td>
    <td><strong>:</strong></td>
    <td><input name="no_telp" type="text" class="field" maxlength="12" /></td>
  <tr align="left">
    <td>Alamat</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="text" name="alamat" /></td>
  </tr>
  <tr align="left">
    <td>Status</td>
    <td><strong>:</strong></td>
    <td><input type="radio" name="status" value="lajang" id="closeup" />
      Lajang
      <input type="radio" name="status" value="kawin" id="closeup" />
      Kawin
      <input type="radio" name="status" value="duda" id="closeup2"  />
      Duda/Janda
	 
	  </td>
  </tr>
<!--  <tr align="left" id="b">
    <td><div id="b">Jumlah Anak</div></td>
    <td><strong>:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <div id="b2">&nbsp;</div>
-->  
  <tr align="left">
    <td>Jenis Kelamin</td>
    <td><strong>:</strong></td>
    <td><input type="radio" name="jenis_kelamin" value="Laki-Laki" />
      Pria
      <input type="radio" name="jenis_kelamin" value="Perempuan" />
      Wanita</td>
  </tr>
  <tr align="left">
    <td>Pendidikan</td>
    <td><strong>:</strong></td>
     <td>
    <select name="Pendidikan">
          <option>SMA</option>
          <option>DIPLOMA</option>
        <option>S1</option>
          <option>S2</option>
       </select>    </td>
  </tr>
  <tr align="left">
    <td>Jabatan</td>
    <td><strong>:</strong></td>
    <td><input class="field" type="hidden" name="id_jabatan" />
	<a href="popup/jabatan1.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
	<input class="field" type="text" name="jabatan" /></a></td>
  </tr>
  
  
  <!--<tr align="left">
    <td>Status Pegawai</td>
    <td>:</td>
    <td><input type="radio" name="status_pegawai" value="tetap" />
      Tetap
      <input type="radio" name="status_pegawai" value="kontrak" />
      Kontrak
      <input type="radio" name="status_pegawai" value="buruh" />
      Buruh</td>
  </tr>-->
 
	
  <tr>
    <td colspan="7" align="right">
    <input class="button" type="submit" value="Simpan" name="xx" />
    <input class="button" type="reset" value="Batal" />    </td>
  </tr>
</table>
</form>
</body>
</html>
<?PHP
include"koneksi.php";

if(isset($_POST[xx])){
$upload_path = "images/post/";
			// handle aplikasi : apabila folder yang dimaksud tidak ada, maka akan dibuat
			if (!is_dir($upload_path)){
				mkdir($upload_path);
				opendir($upload_path);
			}
			$file = $_FILES['fupload']['name'];
			$tmp  = $_FILES['fupload']['tmp_name'];	
			move_uploaded_file($tmp, $upload_path.$file);
$cek=mysql_query("select * from pegawai_tetap where nip='$_POST[nip]'");
	$r=mysql_num_rows($cek);

if($r!=0){
	echo"<script>window.alert('Data Nip Telah Ada');</script>";
}

else{
$sql=mysql_query("INSERT INTO pegawai_tetap set 
									nip='$_POST[nip]', 
									nama='$_POST[nama]',
									tanggal_lahir='$_POST[tanggal]',
									tempat_lahir='$_POST[tempat_lahir]', 
									  agama='$_POST[agama]', 
									  no_telp='$_POST[no_telp]', 
									  alamat='$_POST[alamat]', 
									  status='$_POST[status]', 
									 
									  jenis_kelamin='$_POST[jenis_kelamin]', 
									  pendidikan='$_POST[Pendidikan]', 
									  jabatan='$_POST[jabatan]',
									  
									 
									  
									  jmlAnak='$_POST[jmlAnak]'
									 ");
if($sql){
	echo"<script>window.alert('Berhasil')</script>"	;
	echo"<meta http-equiv='refresh' content='0;URL=?page=d-pegawai' />";
}
else{
		echo"<script>window.alert('Gagal')</script>"	;
		}
	}

}
?>