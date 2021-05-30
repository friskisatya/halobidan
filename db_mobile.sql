-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 02:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `status_artikel` int(11) NOT NULL,
  `img_artikel` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `status_artikel`, `img_artikel`) VALUES
(2, 'tes', 'tes', 1, ''),
(5, '123134', '2342432', 0, 'Prediksi_UI.png'),
(6, 'qweqweqwe', 'qweqweqweqwew', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `t_bidan`
--

CREATE TABLE `t_bidan` (
  `id_bidan` int(11) NOT NULL,
  `nama_bidan` varchar(500) NOT NULL,
  `gelar` varchar(2000) NOT NULL,
  `alamat_bidan` varchar(2000) NOT NULL,
  `telp_bidan` varchar(2000) NOT NULL,
  `mulai_bekerja` date DEFAULT NULL,
  `img_profile` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_bidan`
--

INSERT INTO `t_bidan` (`id_bidan`, `nama_bidan`, `gelar`, `alamat_bidan`, `telp_bidan`, `mulai_bekerja`, `img_profile`) VALUES
(10, 'Maya', 'S.Tr.Keb.', 'Jl. Cinere Raya No.30 Cinere, Kec. Cinere, Kota Depok, Jawa Barat 16514', '6281273094488', '2021-05-30', 'default-avatar.png'),
(11, 'Ani Kusniarti', 'S.Tr.Keb.', 'Jl. Raya Jakarta-Bogor, No.km.33, RT.5/RW.02, Curug, Kec. Cimanggis, Kota Depok, Jawa Barat 16453\r\n', '6281319378159', '2021-05-30', 'default-avatar1.png'),
(12, 'Rita Amelia', 'S.Tr.Keb.', 'Jl. Bambon Raya No. 7B, RT.01/RW.01, Beji Timur, Kec. Beji, Kota Depok, Jawa Barat 16422\r\n', '6281932392215', '2021-05-30', 'default-avatar2.png'),
(13, 'Eta', 'S.Tr.Keb.', 'Jl. Pemuda No.2, RT.002/RW.008, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431\r\n', '6281511194198', '2021-05-30', 'default-avatar3.png'),
(14, 'Sri Wahyuni', 'S.Tr.Keb.', 'Jl. Arjuna Raya No.1, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411\r\n', '6281380032141', '2021-05-30', 'default-avatar4.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_faq`
--

CREATE TABLE `t_faq` (
  `id_faq` int(11) NOT NULL,
  `ask` text NOT NULL,
  `question` text NOT NULL,
  `status_faq` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_faq`
--

INSERT INTO `t_faq` (`id_faq`, `ask`, `question`, `status_faq`) VALUES
(1, '1231', '122', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_fasilitas`
--

CREATE TABLE `t_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_fasilitas`
--

INSERT INTO `t_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `status`) VALUES
(1, 'Tempat Tidur', 0),
(2, 'Ruang Inkubator', 0),
(3, 'Ruang Tunggu Pasien', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_klinik`
--

CREATE TABLE `t_klinik` (
  `id_klinik` int(11) NOT NULL,
  `nama_klinik` varchar(500) NOT NULL,
  `alamat_klinik` varchar(2000) NOT NULL,
  `telp_klinik` varchar(2000) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `tentang` varchar(5000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `latitude` varchar(2000) NOT NULL,
  `longitude` varchar(2000) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_klinik`
--

INSERT INTO `t_klinik` (`id_klinik`, `nama_klinik`, `alamat_klinik`, `telp_klinik`, `keterangan`, `tentang`, `status`, `latitude`, `longitude`, `img_path`) VALUES
(21, 'Puskesmas CInere', 'Jl. Cinere Raya No.30 Cinere, Kec. Cinere, Kota Depok, Jawa Barat 16514\r\n', '0217548707', '', 'Pusat Kesehatan Masyarakat, disingkat Puskesmas, adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya.[1] Upaya kesehatan tersebut diselenggarakan dengan menitikberatkan kepada pelayanan untuk masyarakat luas guna mencapai derajat kesehatan yang optimal, tanpa mengabaikan mutu pelayanan kepada perorangan. Puskesmas dipimpin oleh seorang kepala Puskesmas yang bertanggung jawab kepada Dinas Kesehatan Kabupaten/Kota.', 0, '-6.340839569007667', '106.780060697387', 'puskesmascinere.png'),
(22, 'Puskesmas CImanggis', 'Jl. Raya Jakarta-Bogor, No.km.33, RT.5/RW.02, Curug, Kec. Cimanggis, Kota Depok, Jawa Barat 16453', '0218741072', '', 'Pusat Kesehatan Masyarakat, disingkat Puskesmas, adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya.[1] Upaya kesehatan tersebut diselenggarakan dengan menitikberatkan kepada pelayanan untuk masyarakat luas guna mencapai derajat kesehatan yang optimal, tanpa mengabaikan mutu pelayanan kepada perorangan. Puskesmas dipimpin oleh seorang kepala Puskesmas yang bertanggung jawab kepada Dinas Kesehatan Kabupaten/Kota.', 0, '-6.3829438905887255', '106.86755197904475', 'puskesmascimanggis.png'),
(23, 'Puskesmas Beji', 'Jl. Bambon Raya No. 7B, RT.01/RW.01, Beji Timur, Kec. Beji, Kota Depok, Jawa Barat 16422\r\n', '0217757033', '', 'Pusat Kesehatan Masyarakat, disingkat Puskesmas, adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya.[1] Upaya kesehatan tersebut diselenggarakan dengan menitikberatkan kepada pelayanan untuk masyarakat luas guna mencapai derajat kesehatan yang optimal, tanpa mengabaikan mutu pelayanan kepada perorangan. Puskesmas dipimpin oleh seorang kepala Puskesmas yang bertanggung jawab kepada Dinas Kesehatan Kabupaten/Kota.', 0, '-6.375616141751538', '106.82184477610838', 'puskesmasbeji.png'),
(24, 'Puskesmas Pancoran Mas', 'Jl. Pemuda No.2, RT.002/RW.008, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431\r\n', '0217520130', '', 'Pusat Kesehatan Masyarakat, disingkat Puskesmas, adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya.[1] Upaya kesehatan tersebut diselenggarakan dengan menitikberatkan kepada pelayanan untuk masyarakat luas guna mencapai derajat kesehatan yang optimal, tanpa mengabaikan mutu pelayanan kepada perorangan. Puskesmas dipimpin oleh seorang kepala Puskesmas yang bertanggung jawab kepada Dinas Kesehatan Kabupaten/Kota.', 0, '-6.401618990988125', '106.81949550892173', 'puskesmaspancoranmas.png'),
(25, 'Puskesmas Sukma Jaya', 'Jl. Arjuna Raya No.1, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411\r\n', '02177824908', '', 'Pusat Kesehatan Masyarakat, disingkat Puskesmas, adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya.[1] Upaya kesehatan tersebut diselenggarakan dengan menitikberatkan kepada pelayanan untuk masyarakat luas guna mencapai derajat kesehatan yang optimal, tanpa mengabaikan mutu pelayanan kepada perorangan. Puskesmas dipimpin oleh seorang kepala Puskesmas yang bertanggung jawab kepada Dinas Kesehatan Kabupaten/Kota.', 0, '-6.386888922111522', '106.83837506661038', 'Puskesmassukmajaya.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_klinik_anggota`
--

CREATE TABLE `t_klinik_anggota` (
  `id_klinik_anggota` int(11) NOT NULL,
  `id_klinik` int(11) NOT NULL,
  `id_bidan` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_klinik_anggota`
--

INSERT INTO `t_klinik_anggota` (`id_klinik_anggota`, `id_klinik`, `id_bidan`, `status`) VALUES
(24, 21, 10, 0),
(25, 22, 11, 0),
(26, 23, 12, 0),
(27, 24, 13, 0),
(28, 25, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_klinik_fasilitas`
--

CREATE TABLE `t_klinik_fasilitas` (
  `id_klinik_fasilitas` int(11) NOT NULL,
  `id_klinik` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_klinik_fasilitas`
--

INSERT INTO `t_klinik_fasilitas` (`id_klinik_fasilitas`, `id_klinik`, `id_fasilitas`, `status`) VALUES
(18, 21, 1, 0),
(19, 21, 2, 0),
(20, 21, 3, 0),
(21, 22, 1, 0),
(22, 22, 2, 0),
(23, 22, 3, 0),
(24, 23, 1, 0),
(25, 23, 2, 0),
(26, 23, 3, 0),
(27, 24, 1, 0),
(28, 24, 2, 0),
(29, 24, 3, 0),
(30, 25, 1, 0),
(31, 25, 2, 0),
(32, 25, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_telp` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `status_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id`, `nama`, `alamat`, `no_telp`, `email`, `password`, `status`, `location`, `status_admin`) VALUES
(1, 'friski', 'Jakarta', '081212312312', 'friskisatya@mail.com', '202cb962ac59075b964b07152d234b70', '1', 'Jakarta', 1),
(2, 'friski', '', '82130327606', 'friskisatya5@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '', 1),
(4, 'friski', '', '82130327606', 'test@mail.com', '202cb962ac59075b964b07152d234b70', '1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_tentang`
--

CREATE TABLE `t_tentang` (
  `id_tentang` int(11) NOT NULL,
  `tentang` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tentang`
--

INSERT INTO `t_tentang` (`id_tentang`, `tentang`) VALUES
(1, 'Tujuan aplikasi ini dibangun adalah untuk memenuhi tugas skripsi perkuliahan dan untuk masyarakat luas dalam ruang lingkup dikhususkan untuk ibu yang sedang mengandung agar dapat mengetahui informasi terkait fasilitas kesehatan yang terdekat                    ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `t_bidan`
--
ALTER TABLE `t_bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indexes for table `t_faq`
--
ALTER TABLE `t_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `t_klinik`
--
ALTER TABLE `t_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `t_klinik_anggota`
--
ALTER TABLE `t_klinik_anggota`
  ADD PRIMARY KEY (`id_klinik_anggota`);

--
-- Indexes for table `t_klinik_fasilitas`
--
ALTER TABLE `t_klinik_fasilitas`
  ADD PRIMARY KEY (`id_klinik_fasilitas`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tentang`
--
ALTER TABLE `t_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_bidan`
--
ALTER TABLE `t_bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_faq`
--
ALTER TABLE `t_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_klinik`
--
ALTER TABLE `t_klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_klinik_anggota`
--
ALTER TABLE `t_klinik_anggota`
  MODIFY `id_klinik_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `t_klinik_fasilitas`
--
ALTER TABLE `t_klinik_fasilitas`
  MODIFY `id_klinik_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_tentang`
--
ALTER TABLE `t_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
