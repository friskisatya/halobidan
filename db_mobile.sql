-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 08:14 AM
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
(1, 'Friski satya nugraha', 'Amd.Keb', 'Jakarta', '123123123', '2020-01-01', '12345.png'),
(2, 'Deny', 'Amd.Kom', 'Cimahi', '123123123', '2018-01-01', 'mike.jpg');

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
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_klinik`
--

INSERT INTO `t_klinik` (`id_klinik`, `nama_klinik`, `alamat_klinik`, `telp_klinik`, `keterangan`, `tentang`, `status`) VALUES
(1, 'Klinik Mitra Parahiyangan', 'Jl. Prof. Eyckman No.28, Pasteur, Kec. Sukajadi, Kota\r\n                            Bandung, Jawa Barat 40161, Indonesia', '123123123', 'Tes', 'Klinik Pratama Kemayoran hadir di pusat ibukota Jakarta sejak tahun 2012.                 Dengan mengusung konsep “one stop service clinic”, Klinik Kemayoran menawarkan perawatan lengkap dari                 ujung rambut sampai ujung kaki. Selain itu, klinik kemayoran juga didukung oleh tenaga medis dan staff                 yang bersertifikasi, serta alat-alat dan obat-obatan yang aman.', 0),
(2, 'Klink Kemayoran', 'Jl. Garuda No.26 B, RT.1/RW.2, Kemayoran, Kec. Kemayoran,\r\n                            Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10620, Indonesia', '123123123', 'Test', '', 0);

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
(1, 1, 1, 0),
(2, 1, 2, 0),
(4, 2, 2, 0);

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
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 0);

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
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id`, `nama`, `alamat`, `no_telp`, `email`, `password`, `status`, `location`) VALUES
(1, 'friski', 'Jakarta', '081212312312', 'friskisatya@mail.com', '202cb962ac59075b964b07152d234b70', '1', 'Jakarta'),
(2, 'friski', '', '82130327606', 'friskisatya5@gmail.com', '202cb962ac59075b964b07152d234b70', '1', ''),
(4, 'friski', '', '82130327606', 'test@mail.com', '202cb962ac59075b964b07152d234b70', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_bidan`
--
ALTER TABLE `t_bidan`
  ADD PRIMARY KEY (`id_bidan`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_bidan`
--
ALTER TABLE `t_bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_klinik`
--
ALTER TABLE `t_klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_klinik_anggota`
--
ALTER TABLE `t_klinik_anggota`
  MODIFY `id_klinik_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_klinik_fasilitas`
--
ALTER TABLE `t_klinik_fasilitas`
  MODIFY `id_klinik_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
