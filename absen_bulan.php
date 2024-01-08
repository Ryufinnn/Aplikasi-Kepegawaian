<?php
include "koneksi.php";
$bln_ini=date("Y-m");
?>
<h2>Laporan Absensi Bulanan</h2>
<p>Jika Anda ingin menampilkan laporan Absensi Bulanan, silahkan tentukan bulan dibawah ini.</p>
<form name="f1" method=post action="cetak_bulan.php" target="_blank" >
Absensi Bulan : <input type="month" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<br><br><br><br><br><br><br><br><br>