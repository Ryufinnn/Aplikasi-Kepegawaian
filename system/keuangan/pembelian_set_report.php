<?php
include "koneksi.php";
$bln_ini=date("Y-m");
?>
<h2>Laporan Slip Gaji Bulanan</h2>
<p>Jika Anda ingin menampilkan laporan Slip Gaji Per Bulan, silahkan tentukan bulan dibawah ini.</p>
<form name="f1" method=post action="?page=cari_laporan">
Gaji Bulan : <input type="month" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<br><br><br><br><br><br><br><br><br>