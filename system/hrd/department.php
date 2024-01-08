<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table width="766">
  <tr>
    <td colspan="3"><div align="center">DEPARTEMEN</div></td>
  
  </tr>
  <tr>
    <td width="241">NAMA DEPARTEMEN</td>
    <td width="18">:</td>
    <td width="485"><input class="field" type="text" name="nama_departemen" /></td>
  </tr>
  <tr>
    <td>SECTION</td>
    <td>:</td>
    <td><input class="field" type="text" name="section" /></td>
  </tr>
 <tr>
    <td colspan="2" align="right">
    <input class="button" name="submit" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST[submit])) {
include"koneksi.php";
$sq=mysql_query("insert into departemen set
							nama_departemen='$_POST[nama_departemen]',
							section='$_POST[section]'");
				
							echo"<script>window.alert('Berhasil')</script>";
							echo"<meta http-equiv='refresh' content='0;URL=?page=viewdepartment' />";
}
?>