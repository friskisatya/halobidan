-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 05:36 PM
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
  `status_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `status_artikel`) VALUES
(2, 'tes', 'tes', 1);

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
  `status_admin` int(11) NOT NULL,
  `tempat_lahir` varchar(2000) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `bln_kehamilan` int(11) NOT NULL,
  `agama` varchar(2000) NOT NULL,
  `pendidikan_terakhir` varchar(2000) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `pekerjaan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id`, `nama`, `alamat`, `no_telp`, `email`, `password`, `status`, `location`, `status_admin`, `tempat_lahir`, `tgl_lahir`, `bln_kehamilan`, `agama`, `pendidikan_terakhir`, `gol_darah`, `pekerjaan`) VALUES
(1, 'friski', 'Jakarta', '081212312312', 'friskisatya@mail.com', '202cb962ac59075b964b07152d234b70', '1', 'Jakarta', 1, '', NULL, 0, '', '', '', ''),
(2, 'friski', '', '82130327606', 'friskisatya5@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '', 1, '', NULL, 0, '', '', '', ''),
(4, 'friski', '', '82130327606', 'test@mail.com', '202cb962ac59075b964b07152d234b70', '1', '', 0, '', '1998-06-08', 1, 'Islam', 'SMP', 'A', 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `t_maaping_screening`
--

CREATE TABLE `t_maaping_screening` (
  `skor` int(11) NOT NULL,
  `skor_akhir` int(11) NOT NULL,
  `kel_resiko` varchar(100) NOT NULL,
  `rujukan` varchar(5) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `penolong` varchar(100) NOT NULL,
  `perawatan` varchar(100) NOT NULL,
  `pencegahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_maaping_screening`
--

INSERT INTO `t_maaping_screening` (`skor`, `skor_akhir`, `kel_resiko`, `rujukan`, `tempat`, `penolong`, `perawatan`, `pencegahan`) VALUES
(0, 5, 'RENDAH', 'TIDAK', 'BPM', 'BIDAN', 'BIDAN', 'BAKSOKUDA'),
(6, 11, 'TINGGI', 'YA', 'PONED/RS', 'BIDAN/DOKTER', 'BIDAN/DOKTER', 'BAKSOKUDA + PERSIAPAN PENDONOR DARAH'),
(12, 99999, 'SANGAT TINGGI', 'YA', 'RS', 'DOKTER', 'DOKTER', 'BAKSOKUDA + PERSIAPAN TINDAKAN OPERASI');

-- --------------------------------------------------------

--
-- Table structure for table `t_riwayat_checkup`
--

CREATE TABLE `t_riwayat_checkup` (
  `id` int(11) NOT NULL,
  `tgl_checkup` date NOT NULL,
  `email` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_riwayat_checkup`
--

INSERT INTO `t_riwayat_checkup` (`id`, `tgl_checkup`, `email`) VALUES
(1, '2021-06-01', 'test@mail.com'),
(2, '2021-06-02', 'test@mail.com'),
(3, '2021-06-03', 'test@mail.com'),
(4, '2021-06-04', 'test@mail.com'),
(5, '2021-06-04', 'test@mail.com'),
(6, '2021-06-09', 'test@mail.com'),
(7, '2021-06-09', 'test@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_screening`
--

CREATE TABLE `t_screening` (
  `id` int(11) NOT NULL,
  `pertanyaan_screening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_screening`
--

INSERT INTO `t_screening` (`id`, `pertanyaan_screening`) VALUES
(1, 'Hamil pertama terlalu muda/tua(<17 th. ≥ 35 th)'),
(2, 'Hamil pertama terlalu lambat ( 3 tahun)'),
(3, 'Anak terkecil >10 tahun'),
(4, 'Anak terkecil < 2 tahun'),
(5, 'Punya anak lebih dari 4'),
(6, 'Hamil pada usia > 35 tahun'),
(7, 'Tinggi badan < 145 cm'),
(8, 'Pernah gagal hamil'),
(9, 'Pernah melahirkan dengan tindakan( vacum, forcep)'),
(10, 'Pernah melahirkan dengan Operasi Caesar'),
(11, 'ibu hamil dengan Anemia'),
(12, 'Ibu hamil dengan Diabetes Malitus'),
(13, 'Ibu hamil dengan  Malaria'),
(14, 'Ibu  hamil dengan Penyakit Jantung'),
(15, 'Ibu hamil dengan  HIV AIDS'),
(16, 'Ibu hamil dengan Tuberkolusa Paru'),
(17, 'Bengkak pada muka/tungkai'),
(18, 'Kelainan letak janin'),
(19, 'Hamil dengan Gemeli/Kembar'),
(20, 'Hamil Kembar Air (polihidramnion)'),
(21, 'Hamil dengan riwayat IUFD'),
(22, 'Kehamilan Post term( lebih bulan)'),
(23, 'Perdarahan saat hamil'),
(24, 'Kejang kejang pada hamil 7 bulan'),
(25, 'Hamil dengan COVID-19');

-- --------------------------------------------------------

--
-- Table structure for table `t_screening_history`
--

CREATE TABLE `t_screening_history` (
  `id_screening_history` int(11) NOT NULL,
  `user_id` varchar(2000) NOT NULL,
  `tanggal_screening` date DEFAULT NULL,
  `total_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_screening_history`
--

INSERT INTO `t_screening_history` (`id_screening_history`, `user_id`, `tanggal_screening`, `total_score`) VALUES
(11, 'test@mail.com', '2021-06-03', 98),
(12, 'test@mail.com', '2021-06-03', 98),
(13, 'test@mail.com', '2021-06-03', 98),
(14, 'test@mail.com', '2021-06-03', 98),
(15, 'test@mail.com', '2021-06-03', 98),
(16, 'test@mail.com', '2021-06-03', 98);

-- --------------------------------------------------------

--
-- Table structure for table `t_screening_history_detail`
--

CREATE TABLE `t_screening_history_detail` (
  `id_screening_history_detail` int(11) NOT NULL,
  `id_screening_history` int(11) NOT NULL,
  `id_screening` int(11) NOT NULL,
  `jawaban` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_screening_history_detail`
--

INSERT INTO `t_screening_history_detail` (`id_screening_history_detail`, `id_screening_history`, `id_screening`, `jawaban`) VALUES
(126, 11, 1, 'Y'),
(127, 11, 2, 'Y'),
(128, 11, 3, 'Y'),
(129, 11, 4, 'Y'),
(130, 11, 5, 'Y'),
(131, 11, 6, 'Y'),
(132, 11, 7, 'Y'),
(133, 11, 8, 'Y'),
(134, 11, 9, 'Y'),
(135, 11, 10, 'Y'),
(136, 11, 11, 'Y'),
(137, 11, 12, 'Y'),
(138, 11, 13, 'Y'),
(139, 11, 14, 'Y'),
(140, 11, 15, 'Y'),
(141, 11, 16, 'Y'),
(142, 11, 17, 'Y'),
(143, 11, 18, 'Y'),
(144, 11, 19, 'Y'),
(145, 11, 20, 'Y'),
(146, 11, 21, 'Y'),
(147, 11, 22, 'Y'),
(148, 11, 23, 'Y'),
(149, 11, 24, 'Y'),
(150, 11, 25, 'N'),
(151, 16, 1, 'N'),
(152, 16, 2, 'Y'),
(153, 16, 3, 'Y'),
(154, 16, 4, 'Y'),
(155, 16, 5, 'Y'),
(156, 16, 6, 'Y'),
(157, 16, 7, 'Y'),
(158, 16, 8, 'Y'),
(159, 16, 9, 'Y'),
(160, 16, 10, 'Y'),
(161, 16, 11, 'Y'),
(162, 16, 12, 'Y'),
(163, 16, 13, 'Y'),
(164, 16, 14, 'Y'),
(165, 16, 15, 'Y'),
(166, 16, 16, 'Y'),
(167, 16, 17, 'Y'),
(168, 16, 18, 'Y'),
(169, 16, 19, 'Y'),
(170, 16, 20, 'Y'),
(171, 16, 21, 'Y'),
(172, 16, 22, 'Y'),
(173, 16, 23, 'Y'),
(174, 16, 24, 'Y'),
(175, 16, 25, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `t_survei`
--

CREATE TABLE `t_survei` (
  `id_survei` int(11) NOT NULL,
  `head` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_survei`
--

INSERT INTO `t_survei` (`id_survei`, `head`, `body`) VALUES
(1, 'pengukuran tinggi badan cukup satu kali', 'Bila tinggi badan < 145cm, maka faktor risiko panggul sempit, kemungkinan sulit melahirkan secara normal'),
(2, 'penimbangan berat badan setiap kali periksa', 'sejak bulan ke-4 pertambahan BB paling sedikit 1 Kg/Bulan'),
(3, 'Pengukuran Lingkar Lengan Atas (LiLA)', 'Bila < 23,5 cm menunjukan ibu hamil menderita kurang energi kronis (ibu hamil KEK) dan beresiko melahirkan bayi berat lahir rendah (BBLR)'),
(4, 'Pengukuran tinggi rahim', 'Pengukuran Tinggi rahim berguna untuk melihat pertumbuhan janin apakah sesuai dengan usia kehamilan'),
(5, 'Penentuan letak janin(presentasi janin) dan penghitungan denyut jantung janin', 'Apabila trimster III bagian bawah janin bukan kepala atau kepala belum masuk panggul, kemungkinan ada kelainan letak atau ada masalah lain. bila denyut jantung janin kurang dari 120 kali/menit atau lebih dari 160 kali/menit menunjukan ada tanda GAWAT JANIN,SEGERA DI RUJUK'),
(6, 'Penentuan status Imunisasi Tetanus Toksoid(TT)', 'oleh petugas untuk selanjutnya bilamana diperlukan mendapatkan suntikan tetanus toksoid sesuai anjuran petugas kesehatan untuk mencegah tetanus pada Ibu dan Bayi'),
(7, 'Pemberian Tablet tambah darah', 'Ibu hamil sejak awal kehamilan minum 1 tablet tambah darah setiap hari minimal selama 90 hari. tablet tambah darah diminum pada malam hari untuk mengurangi rasa mual'),
(8, 'tes Laboratorium', '1. Tes Golongan Darah, Untuk mempersiapkan donor bagi ibu hamil bila di perlukan.\r\n2.Tes Hemoglobin, untuk mengetahui apakah  ibu kekurangan darah (Anemia)\r\n3.Tes pemeriksaan urine (Air Kencing)\r\n4.Tes pemeriksaan darah lainnya, seperti HIV dan sifilis, sementara pemeriksaan malaria di lakukan di daerah endemis'),
(9, 'konseling atau penjelasan', 'Tenaga kesehatan memberi penjelasan mengenai perawatan kehamilan, pencegahan kelainan bawaan, persalinan dan inisiasi menyusu dini (IMD),nifas perawatan bayi baru lahir, ASI eksklusif, Keluarga berencana dan imunisasi pada bayi'),
(10, 'Tata laksana atau mendapatkan pengobatan', 'Jika ibu mempunyai masalah kesehatan pada saat hamil'),
(11, 'Perawatan Sehari -hari', 'Makan Beragam Makanan secara proporsional dengan pola gizi seimbang dan 1 porsi lebih banyak daripada sebelum hamil'),
(12, 'Istirahat yang cukup', '1.tidur malam paling sedikit 6-7 jam dan usahakan siangnya tidur/ berbaring 1-2 jam\r\n2.posisi tidur sebaiknya miring ke kiri\r\n3.pada daerah endermis malaria gunakan kelambu berinsektisida\r\n4. bersama dengan suami lakukan rangsangan/ stimulasi pada janin dengan sering mengelus-elus perut ibu dan ajak janin bicara sejak usia kandungan 4 bulan'),
(13, 'Menjaga Kebersihan Diri', '1.Cuci tangan dengan sabun dan air bersih mengalir sebelum makan, setelah buang air besar dan buang air kecil\r\n2.menyikat gigi secara benar dan teratur minimal setelah sarapan dan sebelum tidur.\r\n3.mandi 2 kali sehari\r\n4.bersihkan payudara dan daerah kemaluan.\r\n5.ganti pakaian dan pakaian dalam setiap hari\r\n6.periksalah gigi ke fasilitas kesehatan pada saat periksa kehamilan'),
(14, 'boleh melakukan hubungan suami istri selama hamil', 'tanyakan ke petugas kesehatan cara yang aman'),
(15, 'Aktivitas Fisik', '1.Ibu hamil yang sehat dapat melakukan aktivitas fisik sehari- hari dengan memperhatikan kondisi ibu dan keamanan janin yang dikandungnya\r\n2.suami membantu istrinya yang sedang hamil untuk melakukan pekerjaan sehari-hari\r\n3.ikut senam ibu hamil sesuai dengan anjuran petugas kesehatan'),
(16, 'Yang harus dihindari Ibu hamil selama hamil', '1.Kerja berat\r\n2.Merokok atau terpapar asap rokok\r\n3.minum minuman bersoda, beralkohol, dan jamu\r\n4.tidur terlentang > 10 menit pada masa hamil tua\r\n5.Ibu hamil minum obat tanpa resep dokter\r\n6.Stress berlebihan'),
(17, 'Persiapan Melahirkan', '1.tanyakan kepada bidan atau dokter tanggal perkiraan persalinan\r\n2.suami atau keluarga mendampingi ibu saat periksa kehamilan\r\n3.persiapkan tabungan atau dana cadangan untuk biaya persalinan dan biaya lainnya\r\n4.siapkan kartu jaminan kesehatan nasional\r\n5.rencanakan melahirkan ditolong oleh dokter atau bidan di fasilitas kesehatan\r\n6.siapkan ktp,KK,dan keperluan lain untuk ibu dan bayi yang akan lahir\r\n7.siapkan lebih dari 1 orang yang memiliki golongan darah yang sama dan bersedia menjadi pendonor jika di perlukan\r\n8.suami,keluarga dan masyarakat menyiapkan kendaraan jika sewaktu waktu di perlukan\r\n9.pastikan ibu hamil dan keluarga menyepakati amanat persalinan dalam stiker P4K\r\n10.berencana ikut KB setelah bersalin\r\n'),
(18, 'Tanda Bahaya Pada kehamilan', 'Segera bawa ibu hamil ke fasilitas kesehatan bila di jumpai keluhan atau tanda tanda seperti :\r\n1.muntah terus dan tak mau makan\r\n2.demam tinggi\r\n3.bengkak kaki,tangan,dan wajah atau sakit kepala di sertai kejang\r\n4.janin dirasakan kurang bergerak dibanding sebelumnya\r\n5.pendarahan pada hamil muda dan hamil tua\r\n6.air ketuban keluar sebelum waktunya'),
(19, 'masalah lain pada masa kehamilan', 'Apabila mengalami keluhan seperti ini, segera bawa ibu hamil ke fasilitas kesehatan didampingi suami atau keluarga\r\n1.demam,mengigil dan berkeringat. bila ibu berada di daerah endermis malaria,menujukan adanya gejala malaria\r\n2.terasa sakit pada saat kencing atau keluar keputihan atau gatal-gatal di daerah kemaluan\r\n3.batuk lama (lebih dari 2 minggu)\r\n4.jantung berdebar-debar atau nyeri di dada\r\n5.diare berulang\r\n6.sulit tidur dan cemas berlebihan'),
(20, 'Tanda Awal Persalinan', '1.Perut mulas-mulas yang teratur, timbulnya semakin sering dan semakin lama\r\n2.keluar lendir bercampur darah dari jalan lahir atau keluar cairan ketuban dari jalan lahir\r\njika muncul salah satu tanda di atas ini, suami atau keluarga SEGERA BAWA ibu hamil ke fasilitas kesehatan');

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
-- Indexes for table `t_maaping_screening`
--
ALTER TABLE `t_maaping_screening`
  ADD PRIMARY KEY (`skor`);

--
-- Indexes for table `t_riwayat_checkup`
--
ALTER TABLE `t_riwayat_checkup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_screening`
--
ALTER TABLE `t_screening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_screening_history`
--
ALTER TABLE `t_screening_history`
  ADD PRIMARY KEY (`id_screening_history`);

--
-- Indexes for table `t_screening_history_detail`
--
ALTER TABLE `t_screening_history_detail`
  ADD PRIMARY KEY (`id_screening_history_detail`);

--
-- Indexes for table `t_survei`
--
ALTER TABLE `t_survei`
  ADD PRIMARY KEY (`id_survei`);

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `t_riwayat_checkup`
--
ALTER TABLE `t_riwayat_checkup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_screening`
--
ALTER TABLE `t_screening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `t_screening_history`
--
ALTER TABLE `t_screening_history`
  MODIFY `id_screening_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_screening_history_detail`
--
ALTER TABLE `t_screening_history_detail`
  MODIFY `id_screening_history_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `t_survei`
--
ALTER TABLE `t_survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_tentang`
--
ALTER TABLE `t_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
