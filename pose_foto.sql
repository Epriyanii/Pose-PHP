-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 07.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pose_foto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_ktegori` varchar(3) DEFAULT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_ktegori`, `nama_kategori`) VALUES
('001', 'Solo'),
('002', 'Pose (BG)'),
('003', 'Pose (GG)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pose`
--

CREATE TABLE `pose` (
  `id_pose` varchar(4) DEFAULT NULL,
  `id_kategori` varchar(3) NOT NULL,
  `judul_pose` varchar(50) NOT NULL,
  `gambar_pose` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pose`
--

INSERT INTO `pose` (`id_pose`, `id_kategori`, `judul_pose`, `gambar_pose`) VALUES
('PS01', '001', 'Girl Pose', 0x67616c657279372e6a7067),
('PS02', '002', 'Girl Boy', 0x67616c657279352e6a7067),
('PS03', '003', 'Friend Girl', 0x67616c65727933312e6a7067),
('PS01', '', 'Girl Biduan', ''),
('PS04', '004', 'Girl', 0x67616c65727932372e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `phone` varchar(20) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `tanggal_kunjungan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`phone`, `nama_user`, `tanggal_kunjungan`) VALUES
('37884732', 'Epriyani', '29 September 2022');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vdatapose`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vdatapose` (
`id_pose` varchar(4)
,`id_kategori` varchar(3)
,`judul_pose` varchar(50)
,`gambar_pose` mediumblob
,`id_ktegori` varchar(3)
,`nama_kategori` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vdatapose`
--
DROP TABLE IF EXISTS `vdatapose`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdatapose`  AS SELECT `pose`.`id_pose` AS `id_pose`, `pose`.`id_kategori` AS `id_kategori`, `pose`.`judul_pose` AS `judul_pose`, `pose`.`gambar_pose` AS `gambar_pose`, `kategori`.`id_ktegori` AS `id_ktegori`, `kategori`.`nama_kategori` AS `nama_kategori` FROM (`pose` join `kategori` on(`kategori`.`id_ktegori` = `pose`.`id_kategori`))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
