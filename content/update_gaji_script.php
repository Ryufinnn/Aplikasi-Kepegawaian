<?php
	include "koneksi.php";
	$id_gaji=$_POST['id_gaji'];
	$bln=$_POST['bln'];
	$tgl=$_POST['tgl'];
	$thn=$_POST['thn'];
	$tanggal="$thn/$bln/$tgl";
	$sql= "UPDATE daftar_gaji SET tanggal='$tanggal', nip='$_POST[nip]', nama='$_POST[nama]', id_jabatan='$_POST[id_jabatan]', nama_jabatan='$_POST[jabatan]', gaji_pokok='$_POST[gaji_pokok]', id_departemen='$_POST[id_departemen]', nama_departemen='$_POST[departemen]', uang_lembur='$_POST[lembur]', uang_makan='$_POST[makan]', uang_transport='$_POST[transportasi]', tunj_istri='$_POST[istri]', tunj_anak='$_POST[anak]', tunj_hari_tua='$_POST[hari_tua]', tunj_kecelakaan='$_POST[kecelakaan]', tunj_kesehetan='$_POST[kesehatan]', tunj_kematian='$_POST[kematian]', tunj_hari_raya='$_POST[hari_raya]', jumlah_produksi='$_POST[jumlah]', jenis='$_POST[jenis]', harga_per_unit='$_POST[harga]', bonus='$_POST[bonus]', potongan='$_POST[potongan]', gaji_kotor='$_POST[gaji]', total_upah='$_POST[upah]' where id_gaji='$_POST[id_gaji]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil di update.'); </script>");
	echo "<script>window.location=\"view_gaji.php\";</script>";
?>