-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2016 at 02:41 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `masuk` varchar(20) NOT NULL,
  `absen` varchar(20) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `jabatan`, `masuk`, `absen`, `tgl`) VALUES
('1', 'Emeldi', 'Direktur', '26', '4', '2016-06-14'),
('2', 'Seswa Marlina', 'Kepala Administrasi', '26', '0', '2016-06-14'),
('3', 'Ramilis', 'Administrasi', '26', '0', '2016-06-14'),
('4', 'Rahma Qadarsih', 'Administrasi', '26', '0', '2016-06-14'),
('5', 'Gustina Ningsih', 'Administrasi', '26', '0', '2016-06-14'),
('6', 'Wendi Saputra', 'Kepala Teknik Tamban', '26', '0', '2016-06-14'),
('7', 'Jeffry Hibatullah', 'Kepala Teknik Tamban', '26', '0', '2016-06-14'),
('1', 'Emeldi', 'Direktur', '21', '5', '2016-07-25'),
('2', 'Seswa Marlina', 'Kepala Administrasi', '21', '5', '2016-07-25'),
('3', 'Ramilis', 'Administrasi', '21', '5', '2016-07-25'),
('4', 'Rahma Qadarsih', 'Administrasi', '21', '5', '2016-07-25'),
('5', 'Gustina Ningsih', 'Administrasi', '21', '5', '2016-07-25'),
('6', 'Wendi Saputra', 'Kepala Teknik Tamban', '21', '5', '2016-07-25'),
('7', 'Jeffry Hibatullah', 'Kepala Teknik Tamban', '21', '5', '2016-07-25'),
('1', 'Emeldi', 'Direktur', '26', '0', '2016-05-26'),
('2', 'Seswa Marlina', 'Kepala Administrasi', '26', '0', '2016-05-26'),
('3', 'Ramilis', 'Administrasi', '26', '0', '2016-05-26'),
('4', 'Rahma Qadarsih', 'Administrasi', '26', '0', '2016-05-26'),
('5', 'Gustina Ningsih', 'Administrasi', '26', '0', '2016-05-26'),
('6', 'Wendi Saputra', 'Kepala Teknik Tamban', '26', '0', '2016-05-26'),
('7', 'Jeffry Hibatullah', 'Kepala Teknik Tamban', '26', '0', '2016-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_gaji`
--

CREATE TABLE IF NOT EXISTS `daftar_gaji` (
  `id_gaji` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gaji` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `absen` int(11) NOT NULL,
  `gaji_bersih` int(11) NOT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `daftar_gaji`
--

INSERT INTO `daftar_gaji` (`id_gaji`, `tanggal`, `nip`, `nama`, `jabatan`, `gaji`, `tunjangan`, `absen`, `gaji_bersih`) VALUES
(59, '2016-07-23', '19650816', 'Afriteza Yuhendrica', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(60, '2016-07-23', '19650817', 'Andre Lesmana', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(61, '2016-07-23', '19650818', 'M. Amrizal', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(58, '2016-07-23', '19650815', 'Wendri Winata', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(57, '2016-07-23', '19650814', 'Indra Mulyadi', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(56, '2016-07-23', '19650811', 'Afrizon', 'Security', 1200000, 0, 0, 1200000),
(55, '2016-07-23', '19650813', 'Yogi Rifenta', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(54, '2016-07-23', '19650810', 'Afrizal', 'Security', 1200000, 0, 0, 1200000),
(53, '2016-07-23', '19650809', 'Budi Setiawan', 'Quality Control', 1400000, 0, 0, 1400000),
(52, '2016-07-23', '19650806', 'Wendi Saputra', 'Kepala Teknik Tambang', 4000000, 0, 50000, 3950000),
(51, '2016-07-23', '19650808', 'Robert Gunawan', 'Quality Control', 1400000, 0, 0, 1400000),
(50, '2016-07-23', '19650807', 'Jeffry Hibatullah', 'Kepala Teknik Tambang', 4000000, 0, 50000, 3950000),
(49, '2016-07-23', '19650802', 'Seswa Marlina', 'Kepala Administrasi', 2000000, 0, 25000, 1975000),
(48, '2016-07-23', '19650805', 'Gustina Ningsih', 'Administrasi', 1800000, 0, 22500, 1777500),
(47, '2016-07-23', '19650803', 'Ramilis', 'Administrasi', 1800000, 0, 22500, 1777500),
(45, '2016-07-23', '19650801', 'Emeldi', 'Direktur', 10000000, 0, 125000, 9875000),
(46, '2016-07-23', '19650804', 'Rahma Qadarsih', 'Administrasi', 1800000, 0, 22500, 1777500),
(62, '2016-07-23', '19650819', 'Edwar Otovia', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(63, '2016-07-23', '19650820', 'Novian Anggi Kurinia', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(64, '2016-07-23', '19650821', 'Andri Septahardi', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(65, '2016-07-23', '19650822', 'Atra Yuni Suprion', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(66, '2016-07-23', '19650823', 'Syamsibil Khairi', 'Electrics Man', 1400000, 0, 0, 1400000),
(67, '2016-07-23', '19650824', 'Firman Syarif', 'Electrics Man', 1400000, 0, 0, 1400000),
(68, '2016-07-23', '19650825', 'Ismed', 'Operator', 1900000, 0, 0, 1900000),
(69, '2016-07-23', '19650826', 'Nasrul', 'Pengawas Alat Berat', 1400000, 0, 0, 1400000),
(70, '2016-07-23', '19650827', 'Rusli Afendi', 'Pengawas Tambang', 1500000, 0, 0, 1500000),
(71, '2016-07-23', '19650829', 'Randi Yufrian', 'Pengawas Alat Berat', 1400000, 0, 0, 1400000),
(72, '2016-07-24', '19650830', 'Refo Oktapriadi', 'Pengawas Alat Berat', 1400000, 0, 0, 1400000),
(73, '2016-07-24', '19650831', 'Satria Nopel', 'Pengawas Alat Berat', 1400000, 0, 0, 1400000),
(74, '2016-06-14', '19650801', 'Emeldi', 'Direktur', 10000000, 10000000, 0, 20000000),
(75, '2016-06-14', '19650802', 'Seswa Marlina', 'Kepala Administrasi', 2000000, 2000000, 0, 4000000),
(76, '2016-06-14', '19650803', 'Ramilis', 'Administrasi', 1800000, 1800000, 0, 3200000),
(78, '2016-06-14', '19650804', 'Rahma Qadarsih', 'Administrasi', 1800000, 1800000, 0, 3200000),
(79, '2016-06-14', '19650805', 'Gustina Ningsih', 'Administrasi', 1800000, 1800000, 0, 3200000),
(80, '2016-07-24', '19650806', 'Wendi Saputra', 'Kepala Teknik Tambang', 4000000, 0, 0, 4000000),
(81, '2016-06-14', '19650807', 'Jeffry Hibatullah', 'Kepala Teknik Tambang', 4000000, 4000000, 0, 8000000),
(82, '2016-06-14', '19650808', 'Robert Gunawan', 'Quality Control', 1400000, 1400000, 0, 2800000),
(83, '2016-06-14', '19650809', 'Budi Setiawan', 'Quality Control', 1400000, 1400000, 0, 2800000),
(84, '2016-07-24', '19650810', 'Afrizal', 'Security', 1200000, 0, 0, 1200000),
(85, '2016-06-14', '19650811', 'Afrizon', 'Security', 1200000, 1200000, 0, 2400000),
(86, '2016-06-14', '19650813', 'Yogi Rifenta', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(87, '2016-06-14', '19650814', 'Indra Mulyadi', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(88, '2016-06-14', '19650815', 'Wendri Winata', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(89, '2016-06-14', '19650817', 'Andre Lesmana', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(90, '2016-06-14', '19650818', 'M. Amrizal', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(91, '2016-06-14', '19650819', 'Edwar Otovia', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(92, '2016-06-14', '19650820', 'Novian Anggi Kurinia', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(93, '2016-06-14', '19650821', 'Andri Septahardi', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(94, '2016-06-14', '19650822', 'Atra Yuni Suprion', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(95, '2016-06-14', '19650823', 'Syamsibil Khairi', 'Electrics Man', 1400000, 1400000, 0, 2800000),
(96, '2016-06-14', '19650824', 'Firman Syarif', 'Electrics Man', 1400000, 1400000, 0, 2800000),
(97, '2016-06-14', '19650825', 'Ismed', 'Operator', 1900000, 1900000, 0, 3800000),
(98, '2016-06-14', '19650826', 'Nasrul', 'Pengawas Alat Berat', 1400000, 1400000, 0, 2800000),
(99, '2016-06-14', '19650827', 'Rusli Afendi', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(100, '2016-06-14', '19650828', 'Siroen', 'Pengawas Tambang', 1500000, 1500000, 0, 3000000),
(101, '2016-06-14', '19650829', 'Randi Yufrian', 'Pengawas Alat Berat', 1400000, 1400000, 0, 2800000),
(102, '2016-06-14', '19650830', 'Refo Oktapriadi', 'Pengawas Alat Berat', 1400000, 1400000, 0, 2800000),
(106, '2016-10-10', '123', 'Ferri Achmad E', 'Direktur', 10000000, 1000000, 100000, 10900000),
(105, '2016-07-28', '19650801', 'Emeldi', 'Direktur', 10000000, 0, 100000, 9900000);

-- --------------------------------------------------------

--
-- Table structure for table `hrd`
--

CREATE TABLE IF NOT EXISTS `hrd` (
  `nip` varchar(15) NOT NULL,
  `nama_hrd` varchar(50) NOT NULL,
  `alamat_hrd` text NOT NULL,
  `telp_hrd` varchar(15) NOT NULL,
  `hp_hrd` varchar(12) NOT NULL,
  `email_hrd` varchar(50) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd`
--

INSERT INTO `hrd` (`nip`, `nama_hrd`, `alamat_hrd`, `telp_hrd`, `hp_hrd`, `email_hrd`) VALUES
('12345', 'feri', 'medan', '123456', '12345678', 'aazroelmw@gmail.com'),
('2083053', 'asrul', 'sidempuan', '', '085222338367', 'aazroelmw@gmail.com'),
('123', 'ana', 'bandung', '0617877180', '085276988033', 'ygygyg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(6) NOT NULL AUTO_INCREMENT,
  `kd_jabatan` varchar(20) NOT NULL,
  `nama_jabatan` varchar(25) DEFAULT NULL,
  `gaji_pokok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `kd_jabatan`, `nama_jabatan`, `gaji_pokok`) VALUES
(1, '101', 'Direktur', 10000000),
(2, '102', 'Kepala Administrasi', 2000000),
(4, '103', 'Administrasi', 1800000),
(5, '104', 'Kepala Teknik Tambang', 4000000),
(6, '105', 'Quality Control', 1400000),
(7, '106', 'Security', 1200000),
(8, '107', 'Pengawas Tambang', 1500000),
(9, '108', 'Electrics Man', 1400000),
(13, '109', 'Operator', 1900000),
(14, '110', 'Pengawas Alat Berat', 1400000),
(15, '111', 'Drivers', 1300000);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
  `nip` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_keuangan` varchar(50) NOT NULL,
  `alamat_keuangan` text NOT NULL,
  `hp_keuangan` varchar(12) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`nip`, `password`, `nama_keuangan`, `alamat_keuangan`, `hp_keuangan`, `hak_akses`) VALUES
('pimpinan', '12345', 'Emeldi', 'Jl.Talawi', '082170216655', 'admin'),
('admin', 'admin', 'Gustina Ningsih', 'Talawi', '08228309828', 'HRD'),
('operator', '12345', 'Rahma Qadarsih', 'Jl.Talawi', '08228309828', 'keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_tetap`
--

CREATE TABLE IF NOT EXISTS `pegawai_tetap` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jmlAnak` int(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_tetap`
--

INSERT INTO `pegawai_tetap` (`nip`, `nama`, `tanggal_lahir`, `tempat_lahir`, `agama`, `no_telp`, `alamat`, `status`, `jmlAnak`, `jenis_kelamin`, `pendidikan`, `jabatan`) VALUES
('19650801', 'Emeldi', '14-02-1957', 'Talawi', 'Islam', '082283098282', 'Jl. Talawi', 'kawin', 0, 'pria', 'S1', 'Direktur'),
('19650802', 'Seswa Marlina', '14-03-1982', 'Sawahlunto', 'Islam', '082278093031', 'Jl.Sawahlunto', 'lajang', 0, 'Perempuan', 'S1', 'Kepala Administrasi'),
('19650806', 'Wendi Saputra', '10-10-1991', 'Talawi', 'Islam', '082283098284', 'Jl. Talawi', 'lajang', 0, 'Laki-Laki', 'DIPLOMA', 'Kepala Teknik Tambang'),
('19650805', 'Gustina Ningsih', '02-11-1993', 'Talawi', 'Islam', '081266543570', 'Jl. Talawi', 'lajang', 0, 'Perempuan', 'S1', 'Administrasi'),
('19650803', 'Ramilis', '03-09-1972', 'Sapan', 'Islam', '082170216544', 'Sapan', 'kawin', 0, 'Laki-Laki', 'S1', 'Administrasi'),
('19650804', 'Rahma Qadarsih', '11-10-1992', 'Talawi', 'Islam', '081266543576', 'Jl. Talawi', 'lajang', 0, 'Perempuan', 'DIPLOMA', 'Administrasi'),
('19650807', 'Jeffry Hibatullah', '10-10-1992', 'Solok', 'Islam', '081266543574', 'Solok', 'lajang', 0, 'Laki-Laki', 'S1', 'Kepala Teknik Tambang'),
('19650808', 'Robert Gunawan', '11-10-1990', 'Sawahlunto', 'Islam', '082283097889', 'Tigo Tumpuak', 'lajang', 0, 'Laki-Laki', 'S1', 'Quality Control'),
('19650809', 'Budi Setiawan', '13-01-1987', 'Padang', 'Islam', '082174557890', 'Sapan', 'kawin', 0, 'Laki-Laki', 'S1', 'Quality Control'),
('19650810', 'Afrizal', '02-09-1970', 'Talawi', 'Islam', '082174557892', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'SMA', 'Security'),
('19650811', 'Afrizon', '10-02-1990', 'Sawahlunto', 'Islam', '08283895678', 'Jl. Talawi', 'lajang', 0, 'Laki-Laki', 'DIPLOMA', 'Security'),
('19650813', 'Yogi Rifenta', '03-02-1970', 'Talawi', 'Islam', '081266543567', 'Jl.Sawahlunto', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650814', 'Indra Mulyadi', '01-10-1975', 'Sawahlunto', 'Islam', '083182344576', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650815', 'Wendri Winata', '21-10-1978', 'Talawi', 'Islam', '082283098288', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650816', 'Afriteza Yuhendrica', '28-04-1975', 'Talawi', 'Islam', '082174557889', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650817', 'Andre Lesmana', '18-10-1977', 'Sawahlunto', 'Islam', '081266543576', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650818', 'M. Amrizal', '10-07-1981', 'Kolok', 'Islam', '083182344535', 'Kolok', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650819', 'Edwar Otovia', '23-09-1982', 'Talawi', 'Islam', '081266543535', 'Kolok', 'kawin', 0, 'Laki-Laki', 'S1', 'Pengawas Tambang'),
('19650820', 'Novian Anggi Kuriniawan', '25-01-1979', 'Batusangkar', 'Islam', '082283098281', 'Jl. Talawi', 'lajang', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650821', 'Andri Septahardi', '13-10-1982', 'Padang', 'Islam', '081266543534', 'Jl. Talawi', 'lajang', 0, 'Laki-Laki', 'SMA', 'Pengawas Tambang'),
('19650822', 'Atra Yuni Suprion', '12-12-1975', 'Talawi', 'Islam', '082283098231', 'Jl. Talawi', 'lajang', 0, 'Laki-Laki', 'SMA', 'Pengawas Tambang'),
('19650823', 'Syamsibil Khairi', '11-04-1978', 'Padang', 'Islam', '081266543512', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Electrics Man'),
('19650824', 'Firman Syarif', '15-02-1985', 'Sawahlunto', 'Islam', '082278093031', 'Jl.Sawahlunto', 'kawin', 0, 'Laki-Laki', 'SMA', 'Electrics Man'),
('19650825', 'Ismed', '27-10-1978', 'Talawi', 'Islam', '082174517778', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'SMA', 'Operator'),
('19650826', 'Nasrul', '10-11-1975', 'Talawi', 'Islam', '082174568990', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'SMA', 'Pengawas Alat Berat'),
('19650827', 'Rusli Afendi', '03-01-1982', 'Sapan', 'Islam', '082283679078', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'SMA', 'Pengawas Tambang'),
('19650828', 'Siroen', '10-05-1981', 'Kolok', 'Islam', '081266543456', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Tambang'),
('19650829', 'Randi Yufrian', '17-10-1975', 'Sawahlunto', 'Islam', '081266487612', 'Jl. Talawi', 'lajang', 0, 'Laki-Laki', 'SMA', 'Pengawas Alat Berat'),
('19650830', 'Refo Oktapriadi', '12-02-1975', 'Talawi', 'Islam', '082283679087', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'SMA', 'Pengawas Alat Berat'),
('19650831', 'Satria Nopel', '18-02-1981', 'Padang', 'Islam', '082174567765', 'Jl. Talawi', 'kawin', 0, 'Laki-Laki', 'DIPLOMA', 'Pengawas Alat Berat'),
('19650841', 'Edi Marlian', '1978-06-11', 'Padang', 'Islam', '082278093031', 'Sawahlunto', 'lajang', 0, 'Laki-Laki', 'SMA', 'Drivers'),
('909', 'Afri Yusron', '2016-07-21', 'Padang', 'Islam', '083182667788', 'Jl.Berok Raya No 21 A', 'lajang', 0, 'Laki-Laki', 'S1', 'Direktur'),
('ui', 'Iskandar Gunawan', '2016-07-28', 'Padang', 'Islam', '083182667788', 'Jl.Berok Raya No 21 A', 'lajang', 0, 'Laki-Laki', 'DIPLOMA', 'Direktur'),
('123', 'Ferri Achmad E', '27 Mei 199', 'Padang', 'Islam', '82170214495', 'Jl. Berok Raya No 40', 'Kawin', 0, 'Laki-Laki', 'S1', 'Direktur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nip` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('mandor','HRD','keuangan','admin') NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `password`, `hak_akses`) VALUES
('pimpinan', '12345', 'admin'),
('admin', 'admin', 'HRD'),
('operator', '12345', 'keuangan');
