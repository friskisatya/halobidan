-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 11:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

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
(1, 'Friski satya nugraha', 'Amd.Keb', 'Jakarta', '123123123', '2020-01-01', '12345.png'),
(2, 'Deny', 'Amd.Kom', 'Cimahi', '123123123', '2018-01-01', 'mike.jpg');

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
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_klinik`
--

INSERT INTO `t_klinik` (`id_klinik`, `nama_klinik`, `alamat_klinik`, `telp_klinik`, `keterangan`, `tentang`, `status`) VALUES
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
-- Table structure for table `t_maaping_screening`
--

CREATE TABLE `t_maaping_screening` (
  `skor` int(11) NOT NULL,
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

INSERT INTO `t_maaping_screening` (`skor`, `kel_resiko`, `rujukan`, `tempat`, `penolong`, `perawatan`, `pencegahan`) VALUES
(5, 'RENDAH', 'TIDAK', 'BPM', 'BIDAN', 'BIDAN', 'BAKSOKUDA'),
(6, 'TINGGI', 'YA', 'PONED/RS', 'BIDAN/DOKTER', 'BIDAN/DOKTER', 'BAKSOKUDA + PERSIAPAN PENDONOR DARAH'),
(12, 'SANGAT TINGGI', 'YA', 'RS', 'DOKTER', 'DOKTER', 'BAKSOKUDA + PERSIAPAN TINDAKAN OPERASI');

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
-- Table structure for table `t_screening_user_history`
--

CREATE TABLE `t_screening_user_history` (
  `user_id` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `riwayat_screening` date NOT NULL,
  `screening_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `t_maaping_screening`
--
ALTER TABLE `t_maaping_screening`
  ADD PRIMARY KEY (`skor`);

--
-- Indexes for table `t_screening`
--
ALTER TABLE `t_screening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_screening_user_history`
--
ALTER TABLE `t_screening_user_history`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `t_survei`
--
ALTER TABLE `t_survei`
  ADD PRIMARY KEY (`id_survei`);

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
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

--
-- AUTO_INCREMENT for table `t_survei`
--
ALTER TABLE `t_survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
