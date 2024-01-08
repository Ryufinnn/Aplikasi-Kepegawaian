<?php
	$pg=$_GET['page'];
	
	//Admin
	if($pg=="profil"){ include"profil.php"; }
		if($pg=="HRD"){ include"system/admin/view_hrd.php"; }
		if($pg=="uploadabsensi"){ include"absensi.php"; }
		if($pg=="proses"){ include"proses.php"; }
		if($pg=="proses_pegawai"){ include"proses_pegawai.php"; }
		if($pg=="keuangan"){ include"system/admin/view_keuangan.php"; }
		if($pg=="mandor"){ include"system/admin/view_mandor.php"; }
		if($pg=="t_hrd"){ include"system/admin/input_hrd.php"; }
		if($pg=="t_mandor"){ include"system/admin/inputp_mandor.php"; }
		if($pg=="t_keuangan"){ include"system/admin/input_keuangan.php"; }
		if($pg=="u-hrd"){ include"system/admin/update_hrd.php"; }
		if($pg=="u-mandor"){ include"system/admin/update_mandor.php"; }
		if($pg=="u-keuangan"){ include"system/admin/update_keuangan.php"; }
		if($pg=="jabatan"){ include"system/admin/input_jabatan.php"; }
		if($pg=="viewjabatan"){ include"system/admin/view_jabatan.php"; }
		if($pg=="updatejabatan"){ include"system/admin/update_jabatan.php"; }
		if($pg=="t_department")		{ include"system/hrd/department.php"; }
		if($pg=="viewdepartment")	{ include"system/hrd/view_department.php"; }
		if($pg=="ubahdepartment")	{ include"system/hrd/ubah_departemen.php"; }
		
	//HRD
		if($pg=="absen")			{ include"system/hrd/data_absensi.php"; }
		if($pg=="absensi")			{ include"system/admin/view_absen.php"; }
		if($pg=="absen_pegawai")			{ include"system/admin/view_absen_pegawai.php"; }
		if($pg=="t_absensi")			{ include"system/admin/input_absen.php"; }
		if($pg=="u_absensi")			{ include"system/admin/update_absensi.php"; }
		if($pg=="jenjangkarir")		{ include"system/hrd/jenjang_karir.php"; }
		if($pg=="viewjenjangkarir")	{ include"system/hrd/view_jenjangkarir.php"; }
		if($pg=="ubahjenjangkarir")	{ include"system/hrd/ubah_jenjang_karir.php"; }
		if($pg=="pegawai")			{ include"system/hrd/view_pegawai.php"; }
		if($pg=="pegawai_pimpinan")			{ include"system/hrd/view_pegawai_pimpinan.php"; }
		if($pg=="viewjabatanhrd_pimpinan")	{ include"system/hrd/view_jabatan_pimpinan.php"; }
		if($pg=="absensi_pimpinan")			{ include"system/admin/view_absen_pimpinan.php"; }
		if($pg=="kontrak")			{ include"system/hrd/view_kontrak.php"; }
		if($pg=="d-pegawai")		{ include"system/hrd/Data_Pegawai.php"; }
		if($pg=="d-kontrak")		{ include"system/hrd/Data_kontrak.php"; }
		if($pg=="u-pegawai")		{ include"system/hrd/update_pegawai.php"; }
		if($pg=="u-kontrak")		{ include"system/hrd/update_kontrak.php"; }
		if($pg=="u-absensi")		{ include"system/hrd/ubah_absensi.php"; }
		if($pg=="data_gaji")			{ include"data_gaji.php"; }
		if($pg=="viewlembur")		{ include"system/hrd/view_lembur.php"; }
		if($pg=="u_lembur")			{ include"system/hrd/update_lembur.php"; }
		if($pg=="viewjabatanhrd")	{ include"system/hrd/view_jabatan.php"; }
		if($pg=="u_jabatan")		{ include"system/hrd/update_jabatan.php"; }
		if($pg=="i_jabatan")		{ include"system/hrd/input_jabatan.php"; }
	//Mandor
		if($pg=="buruh"){ include"system/mandor/view_buruh.php"; }
		if($pg=="u-buruh"){ include"system/mandor/update_buruh.php"; }
		if($pg=="i-buruh"){ include"system/mandor/data_buruh.php"; }
		if($pg=="produksi"){ include"system/mandor/view_produksi.php"; }
		if($pg=="u-produksi"){ include"system/mandor/update_produksi.php"; }
		if($pg=="i-produksi"){ include"system/mandor/data_produksi.php"; }
		if($pg=="report"){ include"system/mandor/View_Report_Buruh.php"; }
		if($pg=="i-report"){ include"system/mandor/data_report_buruh.php"; }
		if($pg=="u-report"){ include"system/mandor/update_report.php"; }
		if($pg=="u-reportBrh"){ include"system/hrd/ubah_report_buruh.php"; }
		
	//Keungan
		if($pg=="gaji"){ include"system/keuangan/view_gaji_buruh.php"; }
		if($pg=="gaji-T"){ include"system/keuangan/view_gaji_tetap.php"; }
		if($pg=="gaji-K"){ include"system/keuangan/view_gaji_kontrak.php"; }
		if($pg=="d-gaji"){ include"system/keuangan/Daftar_Gaji.php"; }
		if($pg=="u-gaji"){ include"system/keuangan/updt_gaji.php"; }
		if($pg=="pajak"){ include"system/keuangan/view_pajak.php"; }
		if($pg=="d-pajak"){ include"system/keuangan/d-pajak.php"; }
		if($pg=="j-gaji"){ include"system/keuangan/jurnal_frame-penggajian.php"; }
		if($pg=="j-pph"){ include"system/keuangan/jurnal_frame-pph.php"; }
		if($pg=="gj-bersih"){ include"system/keuangan/view_slip_gaji.php"; }
		if($pg=="d-slip"){ include"system/keuangan/Daftar_slip_Gaji.php"; }
		if($pg=="slip-T"){ include"system/keuangan/view_slip_tetap.php"; }
		if($pg=="slip-K"){ include"system/keuangan/view_slip_kontrak.php"; }
		if($pg=="slip-B"){ include"system/keuangan/view_slip_buruh.php"; }
		if($pg=="u-slip"){ include"system/keuangan/updt_slip_gaji.php"; }
		if($pg=="L-spt-T"){ include"system/keuangan/rekap_data1.php"; }
		if($pg=="cetak1"){ include"system/keuangan/rekap_data.php"; }
		if($pg=="L-spt-K"){ include"system/keuangan/laporan_spt_kontrak.php"; }
			if($pg=="slip"){ include"system/keuangan/preview_registrasi.php"; }
			if($pg=="slip_K"){ include"system/keuangan/preview_registrasi1.php"; }
			if($pg=="laporan_bulanan"){ include"system/keuangan/pembelian_set_report.php"; }
			if($pg=="cari_laporan"){ include"system/keuangan/pembelian_report.php"; }
			if($pg=="cetak_laporan"){ include"system/keuangan/cetak_lapor.php"; }
			if($pg=="absen_bulan"){ include"absen_bulan.php"; }
			if($pg=="absen_harian"){ include"absen_harian.php"; }
			if($pg=="absen_tahun"){ include"absen_tahun.php"; }
			if($pg=="view_bulan"){ include"view_bulan.php"; }
			if($pg=="cetak"){ include"cetak_laporan.php"; }
			if($pg=="cetak_pegawai"){ include"cetak_laporan_pegawai.php"; }
			if($pg=="edit_profil"){ include"edit_profil.php"; }
			if($pg=="edit_operator"){ include"edit_operator.php"; }
	if($pg=="login"){ include"login.php"; }
?>