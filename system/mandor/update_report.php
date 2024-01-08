<?php 
	$id = $_GET['id'];
	include "koneksi.php"; 
	$view="select * from data_report where id_report='$id'";
	$hasil=mysql_query($view);
	if($data_report=mysql_fetch_row($hasil)){
?>

<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<form method="post" action="">
<h1 align="left">DATA REPORT</h1><hr />
<table width="766" class="tbls">
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr align="left" valign="middle">
    <td>ID Report</td>
    <td><input class="field" type="text" name="id_report" value="<?php echo $data_report[0]; ?>" readonly="true"></td>
    </label></td>
  </tr>
  <tr align="left" valign="middle">
    <td>Tanggal</td>
  <td><input name="tanggal" type="text" id="tanggal" size="20">
        <input name="tanggal" type="button" id="tanggal" onClick="return showCalendar('tanggal','y-mm-d');" value="..."></td>
  </tr>
  <tr align="left" valign="middle">
    <td width="241">Nip</td>
    <td width="485"><input class="field" type="text" name="nip" value="<?php echo $data_report[2]; ?>"/></td>
  </tr>
  
  <tr align="left" valign="middle">
    <td>Jumlah Yang Dihasilkan</td>
    <td><input class="field" type="text" name="jumlah" value="<?php echo $data_report[3]; ?>"/>
    KG</td>
  </tr>
  <tr align="left" valign="middle">
   <td>ID Jenis</td>
    <td><input class="field" type="text" name="id_jenis" value="<?php echo $data_report[4]; ?>" /></td>
  </tr>
  
  <tr align="left" valign="middle">
   <td>Upah Per/Kg</td>
    <td>Rp<input class="field" type="text" name="upah" value="<?php echo $data_report[5]; ?>"/></td>
    </tr>
     <tr>
    <td colspan="2" align="right">
    <input class="button" type="submit" value="Ubah" name="simp" />
    </td>
  </tr>
  <?php } ?>
</table>
<?php
include "koneksi.php";

if(isset($_POST[simp])){

	$kl=mysql_query("update data_report set 
					nip='$_POST[nip]',
					tanggal='$_POST[tanggal]',
					jumlah='$_POST[jumlah]',
					id_jenis='$_POST[id_jenis]',
					upah='$_POST[upah]'
						where id_report = '$_GET[id]'
					");
	echo"<script>window.alert('Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=report' />";
	}

?>