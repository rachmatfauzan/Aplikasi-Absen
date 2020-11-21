-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2020 pada 04.11
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_in`
--

CREATE TABLE `history_in` (
  `id_masuk` int(11) NOT NULL,
  `date_masuk` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `level_user` enum('mahasiswa','dosen','tata_usaha','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_in`
--

INSERT INTO `history_in` (`id_masuk`, `date_masuk`, `username`, `level_user`) VALUES
(39, '2020-11-21 08:27:42', 'fara', 'mahasiswa'),
(40, '2020-11-21 08:28:08', 'aji', 'dosen'),
(41, '2020-11-21 08:28:25', 'dini', 'tata_usaha'),
(42, '2020-11-21 09:49:45', 'fara', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createBy` varchar(10) NOT NULL,
  `IsActive` int(10) NOT NULL,
  `IsLogin` int(10) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `level_user` enum('mahasiswa','dosen','tata_usaha','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `createDate`, `createBy`, `IsActive`, `IsLogin`, `nim`, `level_user`) VALUES
(5, 'ilham', 'ilham', '2020-11-19 14:18:38', 'admin', 1, 0, '3311801037', 'dosen'),
(6, 'rachmat', 'rachmat', '2020-11-19 15:17:14', 'admin', 1, 0, '3311801036', 'mahasiswa'),
(7, 'supardi', 'supardi', '2020-11-19 16:00:01', 'admin', 1, 0, '098020', 'tata_usaha'),
(16, 'tama', 'tama', '2020-11-20 06:47:28', 'admin', 1, 0, '3311801090', 'mahasiswa'),
(17, 'resa', 'resa', '2020-11-20 08:45:53', 'admin', 1, 0, '3311801056', 'mahasiswa'),
(18, 'dini', 'dini', '2020-11-20 09:24:05', 'admin', 1, 0, '3311801032', 'tata_usaha'),
(19, 'aji', 'aji', '2020-11-20 09:27:33', 'admin', 1, 0, '31212112', 'dosen'),
(20, 'fara', 'fara', '2020-11-21 01:04:56', 'admin', 1, 0, '3311801039', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_in`
--
ALTER TABLE `history_in`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_in`
--
ALTER TABLE `history_in`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
