<?php
include "koneksi.php";
$bln_ini=date("Y-m-d");
?>
<h2>Laporan Absensi Harian</h2>
<p>Jika Anda ingin menampilkan laporan Absensi Harian, silahkan tentukan tanggal dibawah ini.</p>
<form name="f1" method=post action="cetak_harian.php" target="_blank">
Absensi Harian : <input type="date" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<br><br><br><br><br><br><br><br><br>