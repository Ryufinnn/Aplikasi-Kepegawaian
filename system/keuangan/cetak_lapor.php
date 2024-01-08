<?php
include "koneksi.php";
$bln_ini=date("Y-m");
?>
<h2>Laporan Gaji Bulanan</h2>
<p>Jika Anda ingin menampilkan laporan Gaji Per Bulan, silahkan tentukan bulan dibawah ini.</p>
<form name="f1" method=post action="cetak_laporan.php" target="_blank">
Gaji Bulan : <input type="month" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<br><br><br><br><br><br><br><br><br>