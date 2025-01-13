-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2025 at 05:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci,
  `judul_foto` text COLLATE utf8mb4_general_ci,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `judul_foto`, `tanggal`) VALUES
(1, 'WhatsApp Image 2024-01-24 at 16.29.07_3ec1dfb1.jpg', 'Pembuat web', '2024-01-24'),
(2, '638e63eaef5a1.jpg', 'berita kesehatan', '2024-01-24'),
(3, 'WhatsApp Image 2024-01-24 at 16.29.07_cfda6310.jpg', 'orang paling ganteng', '2024-01-24'),
(5, 'polisi-di-kubu-raya-kalbar-mengganjal-bus-pakai-sepeda-motor_169.jpeg', 'Berita Lalu Lintas', '2024-01-24'),
(6, 'WhatsApp Image 2024-01-24 at 17.39.24_f5bfd989.jpg', 'Agak Narsis dikit yaa pa meskipun web nya ga bagus bagus banget', '2024-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kesehatan`
--

CREATE TABLE `tbl_kesehatan` (
  `id_kes` int NOT NULL,
  `foto_kes` text COLLATE utf8mb4_general_ci,
  `judul` text COLLATE utf8mb4_general_ci,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `tanggal` date NOT NULL,
  `kategori` text COLLATE utf8mb4_general_ci,
  `pelihat` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kesehatan`
--

INSERT INTO `tbl_kesehatan` (`id_kes`, `foto_kes`, `judul`, `deskripsi`, `tanggal`, `kategori`, `pelihat`) VALUES
(7, '638e63eaef5a1.jpg', 'Berita Lorem', '<p class=\"MsoNormal\">Menteri Kesehatan Budi Gunadi Sadikin turut mendampingi\r\nPresiden Joko Widodo melakukan kunjungan kerja di RSUD Kota Salatiga, Jawa\r\nTengah pada Senin (22/1).<o:p></o:p></p><p class=\"MsoNormal\">Dalam kunjungannya, Presiden berkeliling untuk melihat\r\nsejumlah fasilitas kesehatan hingga sesekali berbincang singkat dengan para\r\npasien yang berobat di RSUD Kota Salatiga. Presiden juga meninjau pelayanan\r\nJaminan Kesehatan Nasional-Kartu Indonesia Sehat (JKN-KIS) di rumah sakit\r\ntersebut.<o:p></o:p></p><p class=\"MsoNormal\">Usai melakukan kunjungan, Presiden memuji pelayanan rumah\r\nsakit yang tidak memungut biaya dan tidak menerapkan pembatasan kuota layanan\r\nrawat inap bagi peserta JKN-KIS.<o:p></o:p></p><p class=\"MsoNormal\">“Kartu Indonesia Sehat atau KIS sudah diberikan kepada\r\nkurang lebih 96 juta dan yang ikut BPJS sekarang ini sudah 267 juta orang,\r\nsudah 95 persen lebih sedikit. Yang saya tanyakan tadi apakah ada pungutan,\r\n(jawabannya) tidak ada. Pasien nginap dibatasi juga tidak ada. Saya kira ini\r\nbagus,” kata Presiden<o:p></o:p></p><p class=\"MsoNormal\">Meski masih ada kekurangan, Presiden menilai secara\r\nkeseluruhan pelayanan kesehatan di RSUD Kota Salatiga sudah bagus. Masyarakat\r\njuga sangat terbantu dengan adanya JKN.<o:p></o:p></p><p class=\"MsoNormal\">“Saya sudah cek beberapa, apakah ada pungutan, tidak ada.\r\nSaya kira ini sangat bagus. Saya kira semakin ke sini pelayanan terus\r\ndiperbaiki,” kata Presiden.<o:p></o:p></p><p helvetica=\"\" neue\",=\"\" helvetica,=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-optical-sizing:=\"\" inherit;=\"\" font-kerning:=\"\" font-feature-settings:=\"\" font-variation-settings:=\"\" vertical-align:=\"\" baseline;=\"\" text-rendering:=\"\" optimizelegibility;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\" style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\">Indah, salah satu pengunjung yang menemani ayahnya berobat\r\ndi RSUD Kota Salatiga, menyebut telah merasakan manfaat dari program JKN.\r\nKeberadaan JKN, lanjutnya, sudah membantu ayahnya melakukan sejumlah operasi\r\ndengan menjamin pembiayaannya. Ia pun berharap, program JKN dapat terus\r\ndilanjutkan.<o:p></o:p></p>', '2024-01-24', 'Berita Kesehatan', 6),
(8, 'WhatsApp Image 2024-01-24 at 16.29.07_cfda6310.jpg', 'Ngoding membuat diri menjadi sehat', '<p class=\"MsoNormal\">It is a long established fact that a reader will be\r\ndistracted by the readable content of a page when looking at its layout. The\r\npoint of using Lorem Ipsum is that it has a more-or-less normal distribution of\r\nletters, as opposed to using \'Content here, content here\', making it look like\r\nreadable English. Many desktop publishing packages and web page editors now use\r\nLorem Ipsum as their default model text, and a search for \'lorem ipsum\' will\r\nuncover many web sites still in their infancy. Various versions have evolved\r\nover the years, sometimes by accident, sometimes on purpose (injected humour\r\nand the like).<o:p></o:p></p>', '2024-01-24', 'Berita Kesehatan', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lalin`
--

CREATE TABLE `tbl_lalin` (
  `id_lalin` int NOT NULL,
  `foto_lalin` text COLLATE utf8mb4_general_ci,
  `judul` text COLLATE utf8mb4_general_ci,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `tanggal` date NOT NULL,
  `kategori` text COLLATE utf8mb4_general_ci,
  `pelihat` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lalin`
--

INSERT INTO `tbl_lalin` (`id_lalin`, `foto_lalin`, `judul`, `deskripsi`, `tanggal`, `kategori`, `pelihat`) VALUES
(4, 'download.jpg', 'Kronologi Kecelakaan Beruntun 5 Kendaraan di Jalur Puncak Bogor', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">Salah satu saksi mata sekaligus korban selamat, Yasril menceritakan detik-detik terjadinya kecelakaan tersebut. Kecelakaan itu terjadi ketika Yasril sedang berada di dalam bengkel velg miliknya sekira pukul 11.00 WIB siang.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">\"Saya lagi di dalam, lagi masang ban,\" kata Yasril di lokasi, Selasa.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">Lalu, Yasril mendengar suara benturan keras dari arah jalan. Sontak dirinya keluar dan melihat truk boks melaju kencang dari arah Puncak menuju Jakarta.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">\"Ada suara benturan aja saya dengar itu terus keluar. Itu mobilnya (truk boks) blong rem kayaknya,\" ungkapnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">Truk boks itu menabrak beberapa kendaraan hingga warung makan dan bengkelnya. Beruntung, dengan cepat Yasril berusaha menghindar keluar.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">\"Seandainya kita gak lari keluar 2 detik aja kebawa (ketabrak). Yang pegawai warung itu yang satu orang kakinya terpotong,\" tuturnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: roboto300; font-size: 18px; color: rgb(67, 67, 67);\">Dalam kejadian ini, dirinya mengalami kerugian sekitar Rp150 juta karena tokonya dan barang-barang velg termasuk mesin press ban rusak parah.</p>', '2024-01-24', 'Berita Lalu Lintas', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `nama` text COLLATE utf8mb4_general_ci,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `userfile` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `username`, `password`, `userfile`) VALUES
(9, 'rendhi', 'rendhirichardo2@gmail.com', 'rendhi', '$2y$10$k/Kbel.gXSAyQkHFJfD7KuwauG63yz4bs3nN2vZ0B8Z5amopFlZ56', 'WhatsApp Image 2024-01-24 at 17.39.24_f5bfd989.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_kesehatan`
--
ALTER TABLE `tbl_kesehatan`
  ADD PRIMARY KEY (`id_kes`);

--
-- Indexes for table `tbl_lalin`
--
ALTER TABLE `tbl_lalin`
  ADD PRIMARY KEY (`id_lalin`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kesehatan`
--
ALTER TABLE `tbl_kesehatan`
  MODIFY `id_kes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_lalin`
--
ALTER TABLE `tbl_lalin`
  MODIFY `id_lalin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
