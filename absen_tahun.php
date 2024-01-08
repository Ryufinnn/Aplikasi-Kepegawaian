<?php
include "koneksi.php";
$bln_ini=date("Y");
?>
<h2>Laporan Absensi Tahunan</h2>
<p>Jika Anda ingin menampilkan laporan Absensi Tahunan, silahkan tentukan tahun dibawah ini.</p>
<form name="f1" method=post action="cetak_tahun.php" target="_blank">
Absensi Tahunan : <input type="year" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<br><br><br><br><br><br><br><br><br>