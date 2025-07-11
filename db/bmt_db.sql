-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 08:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `pass_admin` varchar(120) NOT NULL,
  `level_admin` enum('Administrator','Petugas','Kepala') NOT NULL,
  `alamat_admin` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `username`, `pass_admin`, `level_admin`, `alamat_admin`, `no_hp`) VALUES
(7, 'Administrator', 'admink@gmail.com', 'adminku@gmail.com', '775a4d891fc48132d02b44a08ed12b2e', 'Administrator', '  Alamat', '234234234'),
(8, 'Bambang', 'bambang@gmail.com', 'bambang@gmail.com', 'aec2c054fb79c656b380c000aa5eff0b', 'Petugas', ' Alamatttttt', '08983434'),
(9, 'Muklish', 'muklish@gmail.com', 'muklish@gmail.com', 'c9eedd2954a89932d749b8a54e0f94dd', 'Kepala', 'Alamat Mukhlis', '2343534534');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp_rumah` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `status_kawin` enum('Belum Menikah','Menikah','Janda','Duda') NOT NULL,
  `email_anggota` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `pass_anggota` varchar(110) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `nama_panggilan`, `nik`, `alamat`, `telp_rumah`, `no_hp`, `pekerjaan`, `jenis_kelamin`, `status_kawin`, `email_anggota`, `username`, `pass_anggota`, `tgl_daftar`) VALUES
('615-001-3101', 'Arif Budiansyah, S.Kom', 'Arif', '1234567891234567', 'Jakabaring', '07116868', '0817223232', 'Freelancer', 'Laki-laki', 'Belum Menikah', 'arif@gmail.com', 'arif@gmail.com', '5aa4fa2507963b0323d3f6c10d0d7921', '2019-07-01'),
('615-002-3101', 'Angga Karlianto', 'Lianto', '9876543210987654', 'Alamat Angga Karlianto', '', '089923232', 'Mahasiswa', 'Laki-laki', 'Belum Menikah', 'angga@gmail.com', 'angga@gmail.com', 'b4d37fca921c81b04be21f0967f9d045', '2019-07-02'),
('615-003-3101', 'Amir Khan', 'Amir', '897685939123948', 'Alamat Amir Khan', '071213123', '0899434334', 'Karyawan', 'Laki-laki', 'Menikah', 'amir@gmail.com', 'amir@gmail.com', '980393342c482e45e3675a5f7d047160', '2019-07-03'),
('615-004-3101', 'Wawan Arianto', 'Wanto', '1234321234567879', 'sadfasdfsadf', '938453', '08983434', 'Kerjaan', 'Laki-laki', 'Belum Menikah', 'wanto@gmail.com', 'wanto@gmail.com', '0f642409081efbbada1a37a6382456dc', '2019-07-04'),
('615-005-3101', 'Burhanudin Aljauji', 'Aji', '54645767342334578', 'Alamat Burhannn', '9234234234', '2423423423', 'Freelancer', 'Laki-laki', 'Menikah', 'burhan@gmail.com', 'burhan@gmail.com', '48a3fdf12afafb57dbcc029d0c197e05', '2019-07-05'),
('615-006-3101', 'Maman Abdurahman', 'Maman', '3244563432345367', 'Alamat Maman', '234234234', '23423423', 'Freelancer', 'Laki-laki', 'Belum Menikah', 'maman@gmail.com', 'maman@gmail.com', '0ddeee27d290035f9d3b238b8ee02671', '2019-07-06'),
('615-007-3101', 'Salahuddin Al Ayubi', 'Ayub', '9834738291039239', 'Alamadsfsaf', '234234', '2342343', 'Kerjaan', 'Laki-laki', 'Belum Menikah', 'ayub@gmail.com', 'ayub@gmail.com', 'cf64186bee063acce41c3b4fa7f29667', '2019-07-07'),
('615-008-3101', 'Hamudin', 'Udin', '1234321234567870', 'Alamat Aalamasdfasdf', '09234324', '093284029342', 'Kerjaan', 'Laki-laki', 'Belum Menikah', 'mudin@gmail.com', 'mudin@gmail.com', '8c68b9747cc3ba3fcd23f0218b2b53ff', '2019-08-04'),
('615-009-3101', 'Samsudin', 'Sam', '1234321234567878', 'sgfdsgsdfgsd', '2342342', '546456456', 'Kerjaan', 'Laki-laki', 'Belum Menikah', 'sam@gmail.com', 'sam@gmail.com', '8cdd21051a8dd11a0e3dc8300f36d31d', '2019-08-25'),
('615-010-3101', 'Muh Amin', 'Amin', '1234567891234570', 'adasd', '234234', '2342343', 'Kerjaan', 'Laki-laki', 'Belum Menikah', 'amin@gmail.com', 'amin@gmail.com', '27647ec40069ff8584e66b381a910574', '2019-08-25'),
('615-011-3101', 'Juri', 'juri', '9879249238573295', 'khkjfasfasf9u', '0980932545', '987252354', 'jhfdasf', 'Laki-laki', 'Belum Menikah', 'juri@gmail.com', 'juri@gmail.com', '8bce6d91ba95f94f7beac243839f5781', '2020-02-20'),
('615-012-3101', 'Vina', 'vivi', '7235492549145928', 'hasfgsakjhfd', '9872342', '869872354235', 'hagfsjhsdaf', 'Perempuan', 'Belum Menikah', 'vina@gmail.com', 'vina@gmail.com', '0df936d8623b3211e2f68d20629a87be', '2020-02-20'),
('615-013-3101', 'ANDRE WICAKSONO', 'ANDRE', '3511121131141150', 'Jember', '0897987897', '05689998989', 'Wiraswasta', 'Laki-laki', 'Menikah', 'andre76@gmail.com', 'andre76@gmail.com', '1514521e4f9b0eed6db2ade7849fe5ca', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `foto_gallery` varchar(80) NOT NULL,
  `judul_gallery` varchar(100) NOT NULL,
  `caption_gallery` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `foto_gallery`, `judul_gallery`, `caption_gallery`) VALUES
(1, 'cat_birthday.jpg', 'Bakti Sosial Panti Asuhan', 'BTM Mitra Khazanah Palembang mengadakan Bakti Sosial di Pantu Asuhan'),
(2, 'download.jpg', 'Rapat Anggota', 'Rapat Anggota'),
(3, 'download.jpg', 'Rapat Pengurus', 'Rapat Pengurus');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` int(11) NOT NULL,
  `jenis_produk` varchar(120) NOT NULL,
  `desk_jenis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `jenis_produk`, `desk_jenis`) VALUES
(1, 'Anggota', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>\r\n'),
(2, 'Pembiayaan', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore'),
(3, 'Tabungan', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore');

-- --------------------------------------------------------

--
-- Table structure for table `kas_bmt`
--

CREATE TABLE `kas_bmt` (
  `id_kas_bmt` int(11) NOT NULL,
  `jenis_kas` enum('Masuk','Keluar') NOT NULL,
  `jumlah_masuk` decimal(20,3) NOT NULL,
  `jumlah_keluar` decimal(20,3) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_bmt`
--

INSERT INTO `kas_bmt` (`id_kas_bmt`, `jenis_kas`, `jumlah_masuk`, `jumlah_keluar`, `keterangan`, `tgl_transaksi`) VALUES
(77, 'Masuk', '250000000.000', '0.000', 'Saldo Awal', '2019-11-03'),
(78, 'Keluar', '0.000', '3500000.000', 'Pembiayaan Murabahah (Pembelian Barang Dagangan/Kendaraan/lain-lain)  Anggota : Arif Budiansyah, S.Kom', '2019-11-03'),
(79, 'Keluar', '0.000', '2500000.000', 'Pembiayaan Mudharabah (Modal Kerja) Anggota : Amir Khan', '2019-11-03'),
(80, 'Masuk', '1281250.000', '0.000', 'Setor Angsuran Pembiayaan Mudharabah (Modal Kerja) Anggota Amir Khan', '2019-11-03'),
(81, 'Masuk', '1793750.000', '0.000', 'Setor Angsuran Pembiayaan Murabahah (Pembelian Barang Dagangan/Kendaraan/lain-lain) Anggota : Arif Budiansyah, S.Kom', '2019-12-03'),
(82, 'Keluar', '0.000', '2000000.000', 'Pembiayaan Qardul Hasan (Dana Kebajikan) Anggota : Wawan Arianto', '2019-11-03'),
(83, 'Masuk', '1793750.000', '0.000', 'Setor Angsuran Pembiayaan Murabahah (Pembelian Barang Dagangan/Kendaraan/lain-lain) Anggota : Arif Budiansyah, S.Kom', '2019-12-03'),
(84, 'Keluar', '0.000', '450000.000', 'Pembiayaan Qardul Hasan (Dana Kebajikan) Anggota : Burhanudin Aljauji', '2019-11-03'),
(85, 'Masuk', '461250.000', '0.000', 'Setor Angsuran Pembiayaan Qardul Hasan (Dana Kebajikan) Anggota : Burhanudin Aljauji', '2019-12-03'),
(86, 'Masuk', '1281250.000', '0.000', 'Setor Angsuran Pembiayaan Mudharabah (Modal Kerja) Anggota : Amir Khan', '2019-12-03'),
(87, 'Keluar', '0.000', '5000000.000', 'Pembiayaan Hawalah (Pengalihan Hutang) Anggota : Hamudin', '2019-11-03'),
(88, 'Keluar', '0.000', '350000.000', 'Pembiayaan Mudharabah (Modal Kerja) Anggota : Samsudin', '2019-11-03'),
(89, 'Keluar', '0.000', '200000.000', 'Pembiayaan Qardul Hasan (Dana Kebajikan) Nasabah : ', '2019-11-03'),
(90, 'Keluar', '0.000', '5000000.000', 'Pembiayaan Hawalah (Pengalihan Hutang) Anggota : Hamudin', '2020-01-05'),
(91, 'Masuk', '50000.000', '0.000', 'Setor Angsuran Pembiayaan Hawalah (Pengalihan Hutang) Anggota : Hamudin', '2020-01-30'),
(92, 'Masuk', '0.000', '0.000', 'Setor Angsuran Pembiayaan Hawalah (Pengalihan Hutang) Anggota : Hamudin', '0000-00-00'),
(93, 'Masuk', '119583.333', '0.000', 'Setor Angsuran Pembiayaan Mudharabah (Modal Kerja) Anggota : Samsudin', '2019-12-03'),
(94, 'Masuk', '119583.333', '0.000', 'Setor Angsuran Pembiayaan Mudharabah (Modal Kerja) Anggota : Samsudin', '2020-01-03'),
(95, 'Masuk', '1708333.333', '0.000', 'Setor Angsuran Pembiayaan Hawalah (Pengalihan Hutang) Anggota : Hamudin', '2019-12-03'),
(96, 'Masuk', '1025000.000', '0.000', 'Setor Angsuran Pembiayaan Qardul Hasan (Dana Kebajikan) Anggota : Wawan Arianto', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi_web`
--

CREATE TABLE `konfigurasi_web` (
  `id_konfigurasi` int(11) NOT NULL,
  `link_fb` varchar(250) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `link_ig` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi_singkat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi_web`
--

INSERT INTO `konfigurasi_web` (`id_konfigurasi`, `link_fb`, `no_wa`, `link_ig`, `alamat`, `deskripsi_singkat`) VALUES
(1, 'www.facebook.com/bmt', '089923838', 'www.instagram.com/bmt', 'Jl. Soedirman Rt. 004 Rw.002 No.4302 Kec. Ilir Timur 1 Kel. 20 Ilir 3 Palembang, Sumsel', 'BMT MITRA NU TERPERCAYA');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` varchar(20) NOT NULL,
  `nm_lengkap` varchar(100) NOT NULL,
  `nm_panggilan` varchar(50) NOT NULL,
  `nik_nasabah` varchar(20) NOT NULL,
  `almt` text NOT NULL,
  `tel_rumah` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `kerjaan` varchar(100) NOT NULL,
  `j_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `sts_kawin` enum('Belum Menikah','Menikah','Janda','Duda') NOT NULL,
  `email_nasabah` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `pass_nasabah` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nm_lengkap`, `nm_panggilan`, `nik_nasabah`, `almt`, `tel_rumah`, `nohp`, `kerjaan`, `j_kelamin`, `sts_kawin`, `email_nasabah`, `username`, `pass_nasabah`) VALUES
('715-001-3101', 'Budiansyah Arif, S.Kom', 'Budi Do', '7676898765654343', 'Jakabaring jee', '08343434', '08392323', 'FLRR', 'Laki-laki', 'Belum Menikah', 'budi@gmail.com', 'budi@gmail.com', 'b835a4946ff95ed9b83e2665cb27dd8f'),
('715-002-3101', 'Budiman Syarifudin', 'Syarif', '4356346729123456', 'sdasfdas', '234234', '234234', 'FLRR', 'Laki-laki', 'Menikah', 'syarif@gmail.com', 'syarif@gmail.com', '078d370058e430a65e93b086276b604f'),
('715-003-3101', 'ANDRE WICAKSONO', 'ANDRE', '3511121131141150', 'Jember', '0897987897', '05689998989', 'Wiraswasta', 'Laki-laki', 'Menikah', 'andre76@gmail.com', 'andre76@gmail.com', '310355d59148166239d2143a081a4004');

-- --------------------------------------------------------

--
-- Table structure for table `pembiayaan_anggota`
--

CREATE TABLE `pembiayaan_anggota` (
  `id_pembiayaan` varchar(20) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_pembiayaan` decimal(10,3) NOT NULL,
  `tgl_pembiayaan` date NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `bayar_perbulan` decimal(10,3) NOT NULL,
  `total_bayar` decimal(10,3) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status_pembiayaan` enum('Belum Lunas','Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembiayaan_anggota`
--

INSERT INTO `pembiayaan_anggota` (`id_pembiayaan`, `id_anggota`, `id_produk`, `jumlah_pembiayaan`, `tgl_pembiayaan`, `jangka_waktu`, `bayar_perbulan`, `total_bayar`, `tgl_selesai`, `status_pembiayaan`) VALUES
('Pemb-001', '615-001-3101', 9, '3500000.000', '2019-11-03', 2, '1793750.000', '3587500.000', '2020-01-03', 'Lunas'),
('Pemb-002', '615-003-3101', 12, '2500000.000', '2019-11-03', 2, '1281250.000', '2562500.000', '2020-01-03', 'Lunas'),
('Pemb-003', '615-004-3101', 13, '2000000.000', '2019-11-03', 2, '1025000.000', '2050000.000', '2020-01-03', 'Belum Lunas'),
('Pemb-004', '615-005-3101', 13, '450000.000', '2019-11-03', 1, '461250.000', '461250.000', '2019-12-03', 'Lunas'),
('Pemb-005', '615-008-3101', 10, '5000000.000', '2019-11-03', 3, '1708333.333', '5125000.000', '2020-02-03', 'Belum Lunas'),
('Pemb-006', '615-009-3101', 12, '350000.000', '2019-11-03', 3, '119583.333', '358750.000', '2020-02-03', 'Belum Lunas'),
('Pemb-007', '615-008-3101', 10, '5000000.000', '2020-01-05', 4, '1281250.000', '5125000.000', '2020-05-05', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pembiayaan_nasabah`
--

CREATE TABLE `pembiayaan_nasabah` (
  `id_pembiayaan` varchar(20) NOT NULL,
  `id_nasabah` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_pembiayaan` decimal(10,3) NOT NULL,
  `tgl_pembiayaan` date NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `bayar_perbulan` decimal(10,3) NOT NULL,
  `total_bayar` decimal(10,3) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status_pembayaran` enum('Belum Lunas','Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembiayaan_nasabah`
--

INSERT INTO `pembiayaan_nasabah` (`id_pembiayaan`, `id_nasabah`, `id_produk`, `jumlah_pembiayaan`, `tgl_pembiayaan`, `jangka_waktu`, `bayar_perbulan`, `total_bayar`, `tgl_selesai`, `status_pembayaran`) VALUES
('Pembn-001', '715-002-3101', 13, '200000.000', '2019-11-03', 1, '205000.000', '205000.000', '2019-12-03', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama_pengurus` varchar(100) NOT NULL,
  `poto_pengurus` varchar(100) NOT NULL,
  `jabatan_pengurus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama_pengurus`, `poto_pengurus`, `jabatan_pengurus`) VALUES
(9, 'M. Wahid Alqorni, S.Kom', 'ewq.jpg', 'Pimpinan'),
(10, 'M. Wahid Alqorni', 'cat_birthday.jpg', 'Wakil Pimpinan'),
(11, 'M. Wahid Alqorni', 'Cat_020015.jpg', 'Wakil Pimpinan 2'),
(12, 'M. Wahid Alqorni', 'flying-cat-fight.jpg', 'Skretaris');

-- --------------------------------------------------------

--
-- Table structure for table `produk_bmt`
--

CREATE TABLE `produk_bmt` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(120) NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `desk_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_bmt`
--

INSERT INTO `produk_bmt` (`id_produk`, `nama_produk`, `id_jenis_produk`, `desk_produk`) VALUES
(1, 'Simpanan Arisan', 3, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</p>\r\n\r\n<p><strong>Persyatatan :</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n</ul>\r\n'),
(2, 'Simpanan Berjangka 12 bln', 3, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</p>\r\n\r\n<p><strong>Persyatatan :</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n</ul>\r\n'),
(3, 'Simpanan Pelajar', 3, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</p>\r\n\r\n<p><strong>Persyatatan :</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n</ul>\r\n'),
(5, 'Sisuka Jaka Qurban', 3, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</p>\r\n\r\n<p><strong>Persyatatan :</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n	<li>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor</li>\r\n</ul>\r\n'),
(6, 'Tabungan Maslahah', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(7, 'Simpanan Wajib Anggota', 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus auctor elementum. Mauris sit amet bibendum erat. Integer elementum lacus nunc, at dapibus leo vulputate eget. Nunc pharetra porttitor arcu, vitae pretium dolor tristique sed. Cras dignissim ipsum fringilla, dignissim diam et, vehicula elit. Donec nec aliquet turpis, eget tempus mauris. Ut mi odio, ultricies quis massa ut, cursus pharetra quam. Vestibulum quis enim vitae nisi pellentesque rutrum non a lorem. Vestibulum congue eros nunc, in pretium risus mattis vel. Nullam vulputate dolor non tempor egestas. Nunc in dolor sit amet elit placerat imperdiet. Praesent imperdiet pretium nibh, tristique molestie nisi imperdiet quis. Nam congue laoreet interdum. Vivamus nec eros vel ex fringilla accumsan a et tortor. Nam dignissim pellentesque magna ac semper.</p>\r\n'),
(8, 'Simpanan Pokok', 1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n'),
(9, 'Murabahah (Pembelian Barang Dagangan/Kendaraan/lain-lain)', 2, '<p>Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor</p>\r\n'),
(10, 'Hawalah (Pengalihan Hutang)', 2, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem</p>\r\n'),
(11, 'Ijarah (Biaya pendidikan/Rumah Sakit/Sewa Toko)', 2, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem</p>\r\n'),
(12, 'Mudharabah (Modal Kerja)', 2, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem</p>\r\n'),
(13, 'Qardul Hasan (Dana Kebajikan)', 2, '<p>Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor&nbsp;Lorem</p>\r\n'),
(14, 'Idul Fitri', 3, '<p>Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor&nbsp;Lorem Ipsum Dolor</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `sejarah`, `visi_misi`) VALUES
(1, '<p><strong>A.&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>KENAPA BMT MITRA NU BERDIRI ?</strong></p>\r\n\r\n<p>BMT MITRA NU lahir berangkat dari sebuah keprihatinan atas kondisi masyarakat Sumenep pada umumnya dan masyarakat kecamatan Gapura pada khususnya dimana kesejahteraan mereka tidak ada peningkatan secara signifikan. Padahal etos kerja mereka &nbsp;cukup &nbsp;&nbsp;tinggi &nbsp;&nbsp;hal &nbsp;&nbsp;ini sesuai &nbsp;&nbsp;dengan &nbsp;&nbsp;lagu &nbsp;&nbsp;&nbsp;madura&nbsp;<em>asapok angen abantal ombek</em>&nbsp;( berselimut angin dan berbantal ombak).</p>\r\n\r\n<p>Adalah Masyarakat kecamatan Gapura Kab. Sumenep termasuk pekerja keras, suami istri saling bahu membahu untuk memenuhi kebutuhan hidup, akan tetapi kerja keras mereka tidak mampu meningkatkan taraf hidupnya. Hal inilah yang membuat Nahdlatul Ulama prihatin. Oleh karenanya, pada tahun 2003 Pengurus MWC. NU Gapura memberikan tugas kepada Lembaga Perekonomian yang waktu itu bertindak sebagai Ketua Lembaga Perekonomian adalah Masyudi. Berangkat dari kesepakatan bersama, akhirnya Lembaga Perekonomian mencanangkan Program Penguatan Ekonomi Kerakyatan untuk Kesejahteraan Masyarakat yang Mardhatillah. &nbsp;Sudah barang tentu keninginan tersebut diperlukan adanya upaya secara&nbsp;<em>konkret, sistematis, dan terpadu</em>&nbsp;guna mengatasi berbagai masalah&nbsp; ekonomi warga.</p>\r\n\r\n<p>Untuk mewujudkan program tersebut, serangkaian upaya telah dilakukan oleh Lembaga Perekononomian MWC NU Gapura, diawali dengan pelatihan kewirausahaan ( 08-10 April 2003), Bincang Bersama Alumni Pelatihan guna merumuskan Model Penguatan Ekonomi Kerakyatan ( 13 Juni 2003 ), Temu Usaha (21 Nop. 2003), Lokakarya Tanaman Alternatif selain Tembakau (13 Mei 2004 ) dan Lokakarya Perencanaan Pembentukan BUMNU ( Badan Usaha Milik NU ) .</p>\r\n\r\n<p>Dari Lokakarya tersebut akhirnya ditemukan bahwa persoalan yang sedang dihadapi oleh masyarakat kecil adalah lemahnya Akses permodalan, lemahnya Pemasaran, dan lemahnya penguasaan Tekhnologi. Selanjutnya peserta lokakarya sepakat bahwa&nbsp; yang perlu pertama kali dientaskan adalah penguatan modal bagi usaha kecil dan mikro yang selama ini kurang mendapatkan akses permodalan dan dikuasai oleh para pemodal besar atau praktek rentener yang cenderung mencekik usaha mereka.&nbsp;</p>\r\n\r\n<p>Masyudi, selaku ketua Lembaga perekonomian NU kala itu, menawarkan gagasan untuk mendirikan Baitul Maal wat Tamwil (BMT), sebagai lembaga keuangan mikro syariah yang bergerak di bidang usaha simpan pinjam bagi anggotanya. Gagasan ini berangkat dari sebuah keprihatinan semakin merajelelanya peraktek rentenir. Informasi yang diterima Masyudi saat itu, sebanyak 3.311 pedagang kecil di wilayah Kecamatan Gapura dan sekitarnya terjerat praktik rentenir maupun &quot;bank harian&quot;, dengan tingkat bunga hingga 50 persen dalam sebulan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada awalnya para peserta lokakarya dan Pengurus MWC NU Gapura keberatan dengan gagasan ketua lembaga perekonomian untuk mendirikan BMT. Keberatan mereka bukan tanpa alasan, salah satu alasan mendasar bagi mereka karena trauma masa lalu yang seringkali dibentuk lembaga keuangan, ujung-ujungnya uang mereka disalah gunakan.&nbsp; Akhirnya pada tanggal 01 Juni 2004 Pengurus MWC NU bersama &ndash; sama dengan&nbsp; peserta lokakarya menyepakati gagasan untuk mendirikan sebuah usaha simpan pinjam &nbsp;&nbsp;pola syari&rsquo;ah yang &nbsp;diberi nama BMT ( Baitul Maal wa Tamwil ).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada awalnya para peserta lokakarya dan Pengurus MWC NU Gapura keberatan dengan gagasan ketua lembaga perekonomian untuk mendirikan BMT. Keberatan mereka bukan tanpa alasan, salah satu alasan mendasar bagi mereka karena trauma masa lalu yang seringkali dibentuk lembaga keuangan, ujung-ujungnya uang mereka disalah gunakan.&nbsp; Akhirnya pada tanggal 01 Juni 2004 Pengurus MWC NU bersama &ndash; sama dengan&nbsp; peserta lokakarya menyepakati gagasan untuk mendirikan sebuah usaha simpan pinjam &nbsp;&nbsp;pola syari&rsquo;ah yang &nbsp;diberi nama BMT&nbsp;NU ( Baitul Maal wa Tamwil Nahdlatul Ulama).&nbsp; Hanya saja, berdasarkan Keputusan Rapat Pengurus MWC NU Gapura pada tanggal 29 April 2007 yang bertempat di Mushollah KH. Dahlan Gapura Barat nama BMT Nahdlatul Ulama dirubah menjadi BMT Nuansa Umat yang di singkat dengan BMT NU. Perubahan nama tersebut berdasarkan masukan dari Notaris serta pejabat Dinas Koperasi dan UMKM Kab. Sumenep, bahwa Nama Nahdlatul Ulama tidak boleh digunakan oleh lembaga lain tanpa adanya idzin tertulis dari Pengurus Besar Nahdlatul Ulama..&nbsp;</p>\r\n', '<p><span style=\"font-size:14px\"><strong>VISI : </strong></span>Terwujudnya BMT MITRA NU yang Jujur, Amanah, dan Profesional sehingga Anggun dalam Layanan, Unggul dalam Kinerja menuju terbentuknya 100 Kantor Cabang Pada Tahun 2026 untuk Kemandirian dan Kesejahteraan Anggota&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>MISI :</strong></span></p>\r\n\r\n<p>Memberikan layanan prima, bina usaha dan solusi kepada anggota sebagai pilihan utamaMenerapkan dan mengembangkan nilai-nilai</p>\r\n\r\n<p>syariah secara murni dan konsekuen sehingga menjadi acuan tata kelola usaha yang profesional dan amanah</p>\r\n\r\n<p>Mewujudkan pertumbuhan dan keuntungan yang berkesinambungan menuju berdirinya 100 kantor cabang pada tahun 2026</p>\r\n\r\n<p>Mengutamakan penghimpunan dana atas dasar ta&rsquo;awun dan penyaluran pembiayaan pada segment UMKM baik secara Perseorangan maupun berbasis jamaah</p>\r\n\r\n<p>Mewujudkan penghimpunan dan penyaluran zakat, infaq, shodaqah, dan waqaf</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_anggota`
--

CREATE TABLE `simpanan_anggota` (
  `id_simpanan_anggota` int(11) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `periode_bulan` varchar(15) NOT NULL,
  `periode_tahun` varchar(5) NOT NULL,
  `Tglsetor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan_anggota`
--

INSERT INTO `simpanan_anggota` (`id_simpanan_anggota`, `id_anggota`, `id_produk`, `jumlah`, `periode_bulan`, `periode_tahun`, `Tglsetor`) VALUES
(1, '615-001-3101', 7, 10000, 'Agustus', '2019', '2019-08-04'),
(2, '615-002-3101', 7, 10000, 'Agustus', '2019', '2019-08-04'),
(3, '615-003-3101', 7, 10000, 'Agustus', '2019', '2019-08-04'),
(4, '615-004-3101', 7, 10000, 'Agustus', '2019', '2019-08-25'),
(5, '615-009-3101', 8, 50000, '', '', '2019-08-25'),
(6, '615-001-3101', 8, 50000, '', '', '2019-07-01'),
(7, '615-002-3101', 8, 50000, '', '', '2019-07-02'),
(8, '615-003-3101', 8, 50000, '', '', '2019-08-03'),
(9, '615-004-3101', 8, 50000, '', '', '2019-07-04'),
(10, '615-005-3101', 8, 50000, '', '', '2019-07-05'),
(11, '615-006-3101', 8, 50000, '', '', '2019-07-06'),
(12, '615-007-3101', 8, 50000, '', '', '2019-07-07'),
(13, '615-008-3101', 8, 50000, '', '', '2019-07-08'),
(14, '615-010-3101', 8, 50000, '', '', '2019-08-25'),
(15, '615-001-3101', 3, 50000, 'Agustus', '', '2019-08-25'),
(16, '615-001-3101', 5, 60000, 'Agustus', '', '2019-08-25'),
(17, '615-002-3101', 1, 200000, '', '', '2019-08-25'),
(19, '615-005-3101', 7, 10000, 'Agustus', '2019', '2019-08-28'),
(20, '615-001-3101', 7, 10000, 'September', '2019', '2019-09-03'),
(21, '615-011-3101', 8, 50000, '', '', '2020-02-20'),
(22, '615-012-3101', 8, 50000, '', '', '2020-02-20'),
(23, '615-011-3101', 7, 10000, 'Januari', '2020', '2020-02-20'),
(24, '615-013-3101', 8, 50000, '', '', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_pokok`
--

CREATE TABLE `simpanan_pokok` (
  `id_simpanan_pokok` int(11) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `jumlah_pokok` int(11) NOT NULL,
  `tglsetor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan_pokok`
--

INSERT INTO `simpanan_pokok` (`id_simpanan_pokok`, `id_anggota`, `jumlah_pokok`, `tglsetor`) VALUES
(1, '615-001-3101', 50000, '2019-07-01'),
(2, '615-002-3101', 50000, '2019-07-02'),
(3, '615-003-3101', 50000, '2019-07-03'),
(4, '615-004-3101', 50000, '2019-07-04'),
(5, '615-005-3101', 50000, '2019-07-05'),
(6, '615-006-3101', 50000, '2019-07-06'),
(7, '615-007-3101', 50000, '2019-07-07'),
(8, '615-008-3101', 50000, '2019-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_utama`
--

CREATE TABLE `simpanan_utama` (
  `id_simpanan_utama` int(11) NOT NULL,
  `total_simpanan` decimal(10,3) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabungan_anggota`
--

CREATE TABLE `tabungan_anggota` (
  `id_tabungan` int(11) NOT NULL,
  `rek_tabungan` varchar(20) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `nominal_tarik` int(11) NOT NULL,
  `status` enum('Setor','Tarik') NOT NULL,
  `tgl_setor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan_anggota`
--

INSERT INTO `tabungan_anggota` (`id_tabungan`, `rek_tabungan`, `id_anggota`, `id_produk`, `nominal`, `nominal_tarik`, `status`, `tgl_setor`) VALUES
(4, '415-003-2104', '615-003-3101', 6, 200000, 0, 'Setor', '2019-07-30'),
(5, '415-004-2104', '615-004-3101', 6, 100000, 0, 'Setor', '2019-07-30'),
(6, '415-005-2104', '615-005-3101', 6, 500000, 0, 'Setor', '2019-07-30'),
(7, '415-006-2104', '615-006-3101', 6, 300000, 0, 'Setor', '2019-07-30'),
(17, '415-005-2104', '615-005-3101', 6, 500000, 0, 'Setor', '2019-07-31'),
(18, '415-007-2104', '615-007-3101', 6, 300000, 0, 'Setor', '2019-07-31'),
(21, '415-007-2104', '615-007-3101', 6, 100000, 0, 'Setor', '2019-07-31'),
(25, '415-008-2104', '615-001-3101', 6, 250000, 0, 'Setor', '2019-07-31'),
(26, '415-008-2104', '615-001-3101', 6, 0, 100000, 'Tarik', '2019-07-31'),
(27, '415-008-2104', '615-001-3101', 6, 250000, 0, 'Setor', '2019-07-31'),
(28, '415-008-2104', '615-001-3101', 6, 150000, 0, 'Setor', '2019-07-31'),
(29, '415-008-2104', '615-001-3101', 6, 100000, 0, 'Setor', '2019-08-10'),
(32, '415-003-2104', '615-003-3101', 6, 50000, 0, 'Setor', '2022-03-22'),
(33, '415-009-2104', '615-013-3101', 2, 50000, 0, 'Setor', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan_nasabah`
--

CREATE TABLE `tabungan_nasabah` (
  `id_tabungan` int(11) NOT NULL,
  `rek_tabungan` varchar(20) NOT NULL,
  `id_nasabah` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `nominal_tarik` int(11) NOT NULL,
  `status` enum('Setor','Tarik') NOT NULL,
  `tgl_setor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total_tabungan_anggota`
--

CREATE TABLE `total_tabungan_anggota` (
  `id_total_tabungan_anggota` int(11) NOT NULL,
  `rek_tabungan` varchar(20) NOT NULL,
  `total_simpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_tabungan_anggota`
--

INSERT INTO `total_tabungan_anggota` (`id_total_tabungan_anggota`, `rek_tabungan`, `total_simpanan`) VALUES
(3, '415-003-2104', 250000),
(4, '415-004-2104', 100000),
(5, '415-005-2104', 1000000),
(6, '415-006-2104', 300000),
(7, '415-007-2104', 400000),
(8, '415-008-2104', 650000),
(9, '415-009-2104', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `total_tabungan_nasabah`
--

CREATE TABLE `total_tabungan_nasabah` (
  `id_total_tabungan_nasabah` int(11) NOT NULL,
  `rek_tabungan` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_pembiayaan_anggota`
--

CREATE TABLE `tr_pembiayaan_anggota` (
  `id_tr_pembiayaan` int(11) NOT NULL,
  `id_pembiayaan` varchar(20) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `setor_bayar` decimal(10,3) NOT NULL,
  `keterangan_setor` text NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_pembiayaan_anggota`
--

INSERT INTO `tr_pembiayaan_anggota` (`id_tr_pembiayaan`, `id_pembiayaan`, `id_anggota`, `setor_bayar`, `keterangan_setor`, `tgl_bayar`) VALUES
(28, 'Pemb-002', '615-003-3101', '1281250.000', 'Termin I', '2019-11-03'),
(29, 'Pemb-001', '615-001-3101', '1793750.000', 'Termin I', '2019-12-03'),
(30, 'Pemb-001', '615-001-3101', '1793750.000', 'Termin I', '2019-12-03'),
(31, 'Pemb-004', '615-005-3101', '461250.000', 'Termin I', '2019-12-03'),
(32, 'Pemb-002', '615-003-3101', '1281250.000', 'Lunas', '2019-12-03'),
(33, 'Pemb-007', '615-008-3101', '50000.000', '-', '2020-01-30'),
(34, 'Pemb-007', '615-008-3101', '0.000', '', '0000-00-00'),
(35, 'Pemb-006', '615-009-3101', '119583.333', 'Setor Bulan Desember 2019', '2019-12-03'),
(36, 'Pemb-006', '615-009-3101', '119583.333', 'Setor Bulan Januari 2020', '2020-01-03'),
(37, 'Pemb-005', '615-008-3101', '1708333.333', 'Setor Bulan Desember 2019', '2019-12-03'),
(38, 'Pemb-003', '615-004-3101', '1025000.000', 'Setoran', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `tr_pembiayaan_nasabah`
--

CREATE TABLE `tr_pembiayaan_nasabah` (
  `id_tr_pembiayaan` int(11) NOT NULL,
  `id_pembiayaan` varchar(20) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `setor_bayar` decimal(10,3) NOT NULL,
  `keterangan_setor` text NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_pembiayaan_nasabah`
--

INSERT INTO `tr_pembiayaan_nasabah` (`id_tr_pembiayaan`, `id_pembiayaan`, `id_anggota`, `setor_bayar`, `keterangan_setor`, `tgl_bayar`) VALUES
(7, 'Pembn-001', '', '1025000.000', 'Termin I', '2019-10-05'),
(8, 'Pembn-001', '', '1025000.000', 'Termin II LUNAS', '2019-11-05'),
(9, 'Pembn-002', '', '1281250.000', 'Termin I', '2019-10-05'),
(10, 'Pembn-002', '', '1281250.000', 'Termin II LUNAS', '2019-11-05'),
(11, 'Pembn-003', '', '51250.000', 'r', '2019-10-05'),
(12, 'Pembn-003', '', '51250.000', 'g', '2019-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indexes for table `kas_bmt`
--
ALTER TABLE `kas_bmt`
  ADD PRIMARY KEY (`id_kas_bmt`);

--
-- Indexes for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `pembiayaan_anggota`
--
ALTER TABLE `pembiayaan_anggota`
  ADD PRIMARY KEY (`id_pembiayaan`);

--
-- Indexes for table `pembiayaan_nasabah`
--
ALTER TABLE `pembiayaan_nasabah`
  ADD PRIMARY KEY (`id_pembiayaan`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `produk_bmt`
--
ALTER TABLE `produk_bmt`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`),
  ADD KEY `id_jenis_produk_2` (`id_jenis_produk`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `simpanan_anggota`
--
ALTER TABLE `simpanan_anggota`
  ADD PRIMARY KEY (`id_simpanan_anggota`);

--
-- Indexes for table `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  ADD PRIMARY KEY (`id_simpanan_pokok`);

--
-- Indexes for table `simpanan_utama`
--
ALTER TABLE `simpanan_utama`
  ADD PRIMARY KEY (`id_simpanan_utama`);

--
-- Indexes for table `tabungan_anggota`
--
ALTER TABLE `tabungan_anggota`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tabungan_nasabah`
--
ALTER TABLE `tabungan_nasabah`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- Indexes for table `total_tabungan_anggota`
--
ALTER TABLE `total_tabungan_anggota`
  ADD PRIMARY KEY (`id_total_tabungan_anggota`),
  ADD KEY `id_anggota` (`rek_tabungan`);

--
-- Indexes for table `total_tabungan_nasabah`
--
ALTER TABLE `total_tabungan_nasabah`
  ADD PRIMARY KEY (`id_total_tabungan_nasabah`),
  ADD KEY `id_nasabah` (`rek_tabungan`);

--
-- Indexes for table `tr_pembiayaan_anggota`
--
ALTER TABLE `tr_pembiayaan_anggota`
  ADD PRIMARY KEY (`id_tr_pembiayaan`);

--
-- Indexes for table `tr_pembiayaan_nasabah`
--
ALTER TABLE `tr_pembiayaan_nasabah`
  ADD PRIMARY KEY (`id_tr_pembiayaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kas_bmt`
--
ALTER TABLE `kas_bmt`
  MODIFY `id_kas_bmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk_bmt`
--
ALTER TABLE `produk_bmt`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `simpanan_anggota`
--
ALTER TABLE `simpanan_anggota`
  MODIFY `id_simpanan_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  MODIFY `id_simpanan_pokok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `simpanan_utama`
--
ALTER TABLE `simpanan_utama`
  MODIFY `id_simpanan_utama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabungan_anggota`
--
ALTER TABLE `tabungan_anggota`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tabungan_nasabah`
--
ALTER TABLE `tabungan_nasabah`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `total_tabungan_anggota`
--
ALTER TABLE `total_tabungan_anggota`
  MODIFY `id_total_tabungan_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `total_tabungan_nasabah`
--
ALTER TABLE `total_tabungan_nasabah`
  MODIFY `id_total_tabungan_nasabah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_pembiayaan_anggota`
--
ALTER TABLE `tr_pembiayaan_anggota`
  MODIFY `id_tr_pembiayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tr_pembiayaan_nasabah`
--
ALTER TABLE `tr_pembiayaan_nasabah`
  MODIFY `id_tr_pembiayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk_bmt`
--
ALTER TABLE `produk_bmt`
  ADD CONSTRAINT `produk_bmt_ibfk_1` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id_jenis_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabungan_anggota`
--
ALTER TABLE `tabungan_anggota`
  ADD CONSTRAINT `tabungan_anggota_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabungan_anggota_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk_bmt` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabungan_nasabah`
--
ALTER TABLE `tabungan_nasabah`
  ADD CONSTRAINT `tabungan_nasabah_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk_bmt` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabungan_nasabah_ibfk_3` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabah` (`id_nasabah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
