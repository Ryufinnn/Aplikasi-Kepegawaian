<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 
//koneksi ke db mysql
 mysql_connect("localhost","root","");
 mysql_select_db("penggajian");
 
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=4; $i<=$baris; $i++) {
 //membaca data nip (kolom ke-1)
 $nip = $data->val($i,1);
 //membaca data nama depan (kolom ke-2)
 $nama = $data->val($i,2);
 //membaca data nama belakang (kolom ke-3)
 $tanggal = $data->val($i,3);
 //membaca data  (kolom ke-4)
 $tempat = $data->val($i,4);
 //membaca data (kolom ke-5)
 $agama = $data->val($i,5);
 //membaca data (kolom ke-5)
 $notelp = $data->val($i,6);
 //membaca data (kolom ke-5)
 $alamat = $data->val($i,7);
 //membaca data (kolom ke-5)
 $status = $data->val($i,8);
 //membaca data (kolom ke-5)
 $jml = $data->val($i,9);
 //membaca data (kolom ke-5)
 $jk = $data->val($i,10);
 //membaca data (kolom ke-5)
 $pend = $data->val($i,11);
 //membaca data (kolom ke-5)
 $jabatan = $data->val($i,12);
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO pegawai_tetap values ('$nip','$nama','$tanggal','$tempat','$agama','$notelp','$alamat','$status','$jml','$jk','$pend','$jabatan')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal
 if($hasil) $sukses++;
 else $gagal++;
 
}
 //tampilkan report hasil import
 echo "<h3> Proses Import Data Pegawai Selesai</h3>";
 echo "<p>Jumlah data sukses diimport : ".$sukses."<br><br>";
 echo "Jumlah data gagal diimport : ".$gagal."<p>";
 echo"<br><br><br><br><br><br><br><br><br><br><br>";
 
?>