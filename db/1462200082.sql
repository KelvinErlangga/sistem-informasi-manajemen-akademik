-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 10:18 AM
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
-- Database: `1462200082`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int NOT NULL,
  `tanggal_publish` date DEFAULT NULL,
  `penulis` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul_berita` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi_berita` text COLLATE utf8mb4_general_ci,
  `status_artikel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `tanggal_publish`, `penulis`, `judul_berita`, `isi_berita`, `status_artikel`, `gambar`) VALUES
(26, '2024-04-20', 'Kelvin Erlangga', 'KRTMI 2023', 'asdasdasdasdasdasdasdasdasd', 'Selesai', 'IMG_20230512_163412.jpg'),
(27, '2024-04-26', 'Kelvin Erlangga', 'KRTMI 2024', 'asdasdasdasdasdsdasd', 'Belum dimulai', 'IMG_20230512_163443.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cln_mahasiswa`
--

CREATE TABLE `tbl_cln_mahasiswa` (
  `id_daftar` int NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `nama_pendaftar` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jns_kelamin` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_mhs` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lulusan_sekolah` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tahun_ajaran` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(120) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelurahan` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kecamatan` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kota` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `provinsi` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cln_mahasiswa`
--

INSERT INTO `tbl_cln_mahasiswa` (`id_daftar`, `tanggal_daftar`, `nama_pendaftar`, `jns_kelamin`, `status_mhs`, `lulusan_sekolah`, `tahun_ajaran`, `tgl_lahir`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `email`, `website`) VALUES
(1462200001, '2024-04-15', 'Kelvin Erlangga', 'Laki-laki', 'Belum Menikah', 'SMAN 1 SUKODADI', '2022/2023', '2003-08-03', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL),
(1462200002, '2024-04-15', 'Kelvin Erlangga', 'Laki-laki', 'Belum Menikah', 'SMAN 1 SUKODADI', '2022/2023', '2003-08-03', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL),
(1462200003, '2024-04-14', 'Daniel Kurnia Putra', 'Laki-laki', '', 'SMAN 1 SUKODADI', '2023/2024', '2024-04-20', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL),
(1462200004, '2024-04-14', 'Daniel Kurnia Putra', 'Laki-laki', '', 'SMAN 1 SUKODADI', '2023/2024', '2024-04-13', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL),
(1462200005, '2024-04-14', 'Daniel Kurnia Putra', 'Laki-laki', '', 'SMKN 1 SIDOARJO', '2022/2023', '2024-04-14', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL),
(1462200021, '2024-04-17', 'Kelvin Erlangga', 'Laki-laki', 'Belum Menikah', 'SMAN 1 SUKODADI', '2022/2023', '2003-08-03', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL),
(1462200022, '2024-04-17', 'Ervanda Ainun Arman', 'Laki-laki', 'Belum Menikah', 'SMAN 1 SUKODADI', '2022/2023', '2024-04-17', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', 'kelvinerlanggaa@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int NOT NULL,
  `id_berita_kampus` int DEFAULT NULL,
  `tanggal_komentar` datetime DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi_komentar` text COLLATE utf8mb4_general_ci,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_berita_kampus`, `tanggal_komentar`, `status`, `nama`, `isi_komentar`, `email`, `website`) VALUES
(5, 28, '2024-04-17 23:55:47', NULL, 'siapa ya', 'coba komentar ah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhsiswa`
--

CREATE TABLE `tbl_mhsiswa` (
  `nim` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mahasiswa` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jns_kelamin` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_mhs` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jurusan` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lulusan_sekolah` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tahun_ajaran` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelurahan` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kecamatan` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kota` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `provinsi` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mhsiswa`
--

INSERT INTO `tbl_mhsiswa` (`nim`, `nama_mahasiswa`, `jns_kelamin`, `tgl_lahir`, `status_mhs`, `jurusan`, `lulusan_sekolah`, `tahun_ajaran`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `telp`, `email`, `website`) VALUES
('1462200001', 'Ervanda Ainun Arman', 'L', '2003-08-03', 'Belum Menikah', 'Teknik Informatika', 'SMAN 1 SUKODADI', '2022/2023', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', '082244806395', 'ervandaa@gmail.com', NULL),
('1462200003', 'Daniel Kurnia Putra', 'L', '2000-07-12', 'Belum Menikah', 'Teknik Informatika', 'SMA Negeri 2', '2022/2023', 'Mahasiswa', 'Jl. Contoh No. 2', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '087654321098', 'danielll@gmail.com', NULL),
('1462200004', 'Cahya Putri', 'P', '1998-02-20', 'Aktif', 'Administrasi Negara', 'SMA Negeri 3', '2021/2022', 'Mahasiswa', 'Jl. Contoh No. 3', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '089876543210', 'cahya.putri@example.com', NULL),
('1462200005', 'Budi Susanto', 'L', '2001-10-05', 'Aktif', 'Ilmu Hukum', 'SMA Negeri 4', '2024/2025', 'Mahasiswa', 'Jl. Contoh No. 4', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '081234567890', 'budi.susanto@example.com', NULL),
('1462200006', 'Siti Rahayu', 'P', '1999-12-18', 'Aktif', 'Psikologi', 'SMA Negeri 5', '2022/2023', 'Mahasiswa', 'Jl. Contoh No. 5', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '087654321098', 'siti.rahayu@example.com', NULL),
('1462200007', 'Eko Prasetyo', 'L', '2000-04-30', 'Aktif', 'Sastra Inggris', 'SMA Negeri 6', '2021/2022', 'Mahasiswa', 'Jl. Contoh No. 6', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '089876543210', 'eko.prasetyo@example.com', NULL),
('1462200008', 'Rini Wulandari', 'P', '1998-09-08', 'Aktif', 'Teknik Industri', 'SMA Negeri 7', '2023/2024', 'Mahasiswa', 'Jl. Contoh No. 7', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '081234567890', 'rini.wulandari@example.com', NULL),
('1462200009', 'Agus Santoso', 'L', '1997-06-15', 'Aktif', 'Administrasi Bisnis', 'SMA Negeri 8', '2022/2023', 'Mahasiswa', 'Jl. Contoh No. 8', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '087654321098', 'agus.santoso@example.com', NULL),
('1462200010', 'Dina Fitriani', 'P', '2002-03-22', 'Aktif', 'Manajemen', 'SMA Negeri 9', '2021/2022', 'Mahasiswa', 'Jl. Contoh No. 9', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '089876543210', 'dina.fitriani@example.com', NULL),
('1462200011', 'Rudi Hartono', 'L', '1999-08-05', 'Aktif', 'Teknologi Listrik', 'SMA Negeri 10', '2024/2025', 'Mahasiswa', 'Jl. Contoh No. 10', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '081234567890', 'rudi.hartono@example.com', NULL),
('1462200012', 'Sari Susanti', 'P', '2001-01-17', 'Aktif', 'Administrasi Publik', 'SMA Negeri 11', '2023/2024', 'Mahasiswa', 'Jl. Contoh No. 11', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '087654321098', 'sari.susanti@example.com', NULL),
('1462200013', 'Anto Wijaya', 'L', '1998-07-30', 'Aktif', 'Ilmu Komunikasi', 'SMA Negeri 12', '2022/2023', 'Mahasiswa', 'Jl. Contoh No. 12', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '089876543210', 'anto.wijaya@example.com', NULL),
('1462200014', 'Dewi Cahyani', 'P', '2000-04-12', 'Aktif', 'Akuntansi', 'SMA Negeri 13', '2021/2022', 'Mahasiswa', 'Jl. Contoh No. 13', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '081234567890', 'dewi.cahyani@example.com', NULL),
('1462200015', 'Bambang Prasetyo', 'L', '1997-11-25', 'Aktif', 'Sastra Jepang', 'SMA Negeri 14', '2024/2025', 'Mahasiswa', 'Jl. Contoh No. 14', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '087654321098', 'bambang.prasetyo@example.com', NULL),
('1462200016', 'Rina Kurniawan', 'P', '1999-09-02', 'Aktif', 'Teknik Mesin', 'SMA Negeri 15', '2023/2024', 'Mahasiswa', 'Jl. Contoh No. 15', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '089876543210', 'rina.kurniawan@example.com', NULL),
('1462200017', 'Agus Hidayat', 'L', '2002-02-10', 'Aktif', 'Ilmu Ekonomi', 'SMA Negeri 16', '2022/2023', 'Mahasiswa', 'Jl. Contoh No. 16', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '081234567890', 'agus.hidayat@example.com', NULL),
('1462200018', 'Siti Fitri', 'P', '1998-10-20', 'Aktif', 'Teknik Arsitektur', 'SMA Negeri 17', '2021/2022', 'Mahasiswa', 'Jl. Contoh No. 17', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '087654321098', 'siti.fitri@example.com', NULL),
('1462200019', 'Eko Surya', 'L', '2001-03-15', 'Aktif', 'Ilmu Hukum', 'SMA Negeri 18', '2024/2025', 'Mahasiswa', 'Jl. Contoh No. 18', 'Contoh Kelurahan', 'Contoh Kecamatan', 'Contoh Kota', 'Contoh Provinsi', '089876543210', 'eko.surya@example.com', NULL),
('1462200021', 'Kelvin Erlangga', 'L', '2003-08-03', 'Belum Menikah', 'Teknik Informatika', 'SMAN 1 SUKODADI', '2022/2023', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', '082244806395', 'kelvinerlanggaa@gmail.com', NULL),
('1462200022', 'Ervanda Ainun Arman', 'L', '2024-04-17', 'Belum Menikah', 'Teknik Informatika', 'SMAN 1 SUKODADI', '2022/2023', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', '082244806395', 'kelvinerlanggaa@gmail.com', NULL),
('1462200023', 'Kelvin Erlangga Satriagung', 'L', '2003-08-03', 'Belum Menikah', 'Teknik Informatika', 'SMAN 1 SUKODADI', '2022/2023', 'pelajar', 'Jl. Wiguna Selatan 1 No. 47', 'gunung anyar', 'gunung anyar', 'Surabaya', 'Jawa timur', '082244806395', 'kelvinerlanggaa@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_mahasiswa`
--

CREATE TABLE `tbl_nilai_mahasiswa` (
  `id_nilai` int NOT NULL,
  `nim` int DEFAULT NULL,
  `mata_kuliah` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nilai_mahasiswa` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dosen_mata_kuliah` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nilai_mahasiswa`
--

INSERT INTO `tbl_nilai_mahasiswa` (`id_nilai`, `nim`, `mata_kuliah`, `nilai_mahasiswa`, `dosen_mata_kuliah`) VALUES
(8, 1462200004, 'PENGEMBANGAN APLIKASI WEB', '90', 'Ahmad Habib, S.Kom.,MM'),
(9, 1462200004, 'REKAYASA DAN PROYEK PERANGKAT LUNAK', '100', 'Ahmad Habib, S.Kom.,MM'),
(11, 1462200021, 'ADMINISTRASI JARINGAN', '95', 'Anang Pramono, S.Kom.,MM'),
(12, 1462200021, 'REKAYASA DAN PROYEK PERANGKAT LUNAK', '100', 'Ahmad Habib, S.Kom.,MM'),
(13, 1462200021, 'KECERDASAN KOMPUTASIONAL', '87', 'Ahmad Habib, S.Kom.,MM'),
(14, 1462200021, 'GRAFIKA KOMPUTER', '83', 'Anang Pramono, S.Kom.,MM'),
(16, 1462200022, 'PENGEMBANGAN APLIKASI WEB', '100', 'Ahmad Habib, S.Kom.,MM'),
(30, 1462200021, 'BAHASA INGGRIS', '90', 'Ahmad Habib, S.Kom.,MM'),
(31, 1462200001, 'PENGEMBANGAN APLIKASI WEB', '100', 'Ahmad Habib, S.Kom.,MM'),
(32, 1462200002, 'PENGEMBANGAN APLIKASI WEB', '100', 'Ahmad Habib, S.Kom.,MM'),
(33, 1462200021, 'PENGEMBANGAN APLIKASI WEB', '100', 'Ahmad Habib, S.Kom.,MM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`, `role`) VALUES
(1, 'kelvin', 'b2c6de510d584484d74c9aa9f8fa9f04', '2', 'Publik'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Admin'),
(24, '1462200002', '8fdef69ab12f71238ed45d0f4710be95', '2', 'Mahasiswa'),
(28, '1462200003', '6bd43712f10e2e5647a2c10f635ab5c0', '2', 'Mahasiswa'),
(29, '1462200004', '7e5c4dd2bb4f26d0d1ea24356e3033ac', '2', 'Mahasiswa'),
(30, '1462200004', '42ce9b5e04cb6f304202d023ee555eba', '2', 'Mahasiswa'),
(31, '1462200005', '42ce9b5e04cb6f304202d023ee555eba', '2', 'Mahasiswa'),
(32, '1462200004', 'cb1c0256df1b0dda6763c1d66fb65669', '2', 'Mahasiswa'),
(33, '1462200004', '4352b340dfe8f217ae0e463af49fdfc3', '2', 'Mahasiswa'),
(34, '1462200005', 'cb1c0256df1b0dda6763c1d66fb65669', '2', 'Mahasiswa'),
(35, '1462200001', 'af0b49cddc6e4781fd7eb797b8c70e96', '2', 'Mahasiswa'),
(36, '1462200002', 'af0b49cddc6e4781fd7eb797b8c70e96', '2', 'Mahasiswa'),
(37, '1462200001', 'af0b49cddc6e4781fd7eb797b8c70e96', '2', 'Mahasiswa'),
(38, '1462200021', 'af0b49cddc6e4781fd7eb797b8c70e96', '2', 'Mahasiswa'),
(39, '1462200022', 'efa24924c5ec7bf16bbfbdb3b276607c', '2', 'Mahasiswa'),
(40, '1462200023', 'af0b49cddc6e4781fd7eb797b8c70e96', '2', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profile`
--

CREATE TABLE `tbl_user_profile` (
  `id_user` int NOT NULL,
  `nama` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelurahan` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kecamatan` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kota` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `provinsi` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telp` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_cln_mahasiswa`
--
ALTER TABLE `tbl_cln_mahasiswa`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_nilai_mahasiswa`
--
ALTER TABLE `tbl_nilai_mahasiswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_cln_mahasiswa`
--
ALTER TABLE `tbl_cln_mahasiswa`
  MODIFY `id_daftar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1462200023;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_nilai_mahasiswa`
--
ALTER TABLE `tbl_nilai_mahasiswa`
  MODIFY `id_nilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
