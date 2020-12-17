-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 06.14
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
(78, '2020-12-01 09:01:07', 'hidayat', 'mahasiswa'),
(79, '2020-12-01 09:01:20', 'rachmat', 'mahasiswa'),
(80, '2020-12-01 09:01:32', 'resa', 'mahasiswa'),
(81, '2020-12-01 09:01:35', 'widya', 'mahasiswa'),
(82, '2020-12-01 09:01:48', 'tama', 'mahasiswa'),
(83, '2020-12-01 09:01:56', 'anawati', 'mahasiswa'),
(84, '2020-12-01 09:02:20', 'diana', 'mahasiswa'),
(85, '2020-12-01 09:03:43', 'garda', 'mahasiswa'),
(86, '2020-12-01 09:05:09', 'fara', 'mahasiswa'),
(87, '2020-12-01 09:19:37', 'riansyah', 'mahasiswa'),
(88, '2020-12-01 09:54:49', 'pragus', 'mahasiswa'),
(89, '2020-12-01 09:55:03', 'adi', 'mahasiswa'),
(96, '2020-12-01 15:52:01', 'fajar', 'mahasiswa'),
(97, '2020-12-01 15:52:14', 'liza', 'mahasiswa'),
(98, '2020-12-01 15:52:23', 'putri', 'mahasiswa'),
(99, '2020-12-01 15:52:34', 'rangga', 'mahasiswa'),
(100, '2020-12-01 15:52:47', 'tessha', 'mahasiswa'),
(102, '2020-12-02 08:53:41', 'resa', 'mahasiswa'),
(103, '2020-12-02 08:53:48', 'widya', 'mahasiswa'),
(104, '2020-12-02 08:53:55', 'anawati', 'mahasiswa'),
(105, '2020-12-02 08:54:05', 'rachmat', 'mahasiswa'),
(106, '2020-12-02 08:54:35', 'hidayat', 'mahasiswa'),
(107, '2020-12-02 08:56:18', 'liza', 'mahasiswa'),
(108, '2020-12-02 08:56:23', 'diana', 'mahasiswa'),
(109, '2020-12-02 08:57:04', 'putri', 'mahasiswa'),
(110, '2020-12-02 08:57:20', 'tessha', 'mahasiswa'),
(111, '2020-12-02 09:05:10', 'fara', 'mahasiswa'),
(112, '2020-12-02 09:06:28', 'fajar', 'mahasiswa'),
(113, '2020-12-02 09:06:38', 'rangga', 'mahasiswa'),
(114, '2020-12-02 09:16:16', 'riansyah', 'mahasiswa'),
(115, '2020-12-02 09:35:10', 'tama', 'mahasiswa'),
(116, '2020-12-02 09:41:24', 'garda', 'mahasiswa'),
(117, '2020-12-02 09:45:21', 'adi', 'mahasiswa'),
(118, '2020-12-02 09:45:33', 'pragus', 'mahasiswa'),
(119, '2020-12-03 08:32:17', 'rachmat', 'mahasiswa'),
(120, '2020-12-03 08:33:24', 'widya', 'mahasiswa'),
(121, '2020-12-03 08:34:28', 'anawati', 'mahasiswa'),
(122, '2020-12-03 08:34:48', 'resa', 'mahasiswa'),
(123, '2020-12-03 08:35:57', 'liza', 'mahasiswa'),
(124, '2020-12-03 08:36:48', 'adi', 'mahasiswa'),
(125, '2020-12-03 08:38:01', 'tama', 'mahasiswa'),
(126, '2020-12-03 08:39:50', 'hidayat', 'mahasiswa'),
(127, '2020-12-03 08:40:48', 'putri', 'mahasiswa'),
(128, '2020-12-03 08:41:58', 'rangga', 'mahasiswa'),
(129, '2020-12-03 08:42:11', 'fajar', 'mahasiswa'),
(130, '2020-12-03 08:45:23', 'riansyah', 'mahasiswa'),
(131, '2020-12-03 08:46:59', 'fara', 'mahasiswa'),
(132, '2020-12-03 08:47:24', 'diana', 'mahasiswa'),
(134, '2020-12-03 08:59:19', 'garda', 'mahasiswa'),
(135, '2020-12-03 08:59:32', 'tessha', 'mahasiswa'),
(136, '2020-12-04 08:48:01', 'anawati', 'mahasiswa'),
(137, '2020-12-04 08:48:08', 'widya', 'mahasiswa'),
(138, '2020-12-04 08:48:26', 'resa', 'mahasiswa'),
(139, '2020-12-04 08:48:35', 'liza', 'mahasiswa'),
(140, '2020-12-04 08:49:05', 'tama', 'mahasiswa'),
(141, '2020-12-04 08:49:41', 'rachmat', 'mahasiswa'),
(142, '2020-12-04 08:55:44', 'tessha', 'mahasiswa'),
(143, '2020-12-04 08:55:55', 'rangga', 'mahasiswa'),
(144, '2020-12-04 08:56:06', 'fajar', 'mahasiswa'),
(145, '2020-12-04 08:56:13', 'putri', 'mahasiswa'),
(146, '2020-12-04 08:57:18', 'hidayat', 'mahasiswa'),
(147, '2020-12-04 08:57:27', 'garda', 'mahasiswa'),
(148, '2020-12-04 08:58:30', 'diana', 'mahasiswa'),
(149, '2020-12-04 08:58:45', 'fara', 'mahasiswa'),
(150, '2020-12-04 09:15:05', 'riansyah', 'mahasiswa'),
(151, '2020-12-04 09:42:40', 'adi', 'mahasiswa'),
(152, '2020-12-04 09:42:51', 'pragus', 'mahasiswa'),
(153, '2020-12-07 08:24:22', 'liza', 'mahasiswa'),
(154, '2020-12-07 08:24:37', 'rachmat', 'mahasiswa'),
(155, '2020-12-07 08:24:56', 'putri', 'mahasiswa'),
(156, '2020-12-07 08:34:36', 'resa', 'mahasiswa'),
(157, '2020-12-07 08:34:43', 'widya', 'mahasiswa'),
(158, '2020-12-07 08:37:55', 'anawati', 'mahasiswa'),
(159, '2020-12-07 08:41:09', 'hidayat', 'mahasiswa'),
(160, '2020-12-07 08:57:03', 'tessha', 'mahasiswa'),
(161, '2020-12-07 08:58:49', 'diana', 'mahasiswa'),
(162, '2020-12-07 09:01:05', 'fajar', 'mahasiswa'),
(163, '2020-12-07 09:01:15', 'rangga', 'mahasiswa'),
(164, '2020-12-07 09:05:54', 'adi', 'mahasiswa'),
(165, '2020-12-07 09:06:50', 'tama', 'mahasiswa'),
(166, '2020-12-07 09:15:59', 'garda', 'mahasiswa'),
(167, '2020-12-07 09:17:01', 'riansyah', 'mahasiswa'),
(168, '2020-12-07 09:23:20', 'fara', 'mahasiswa'),
(172, '2020-12-07 16:48:03', 'rachmat', 'mahasiswa'),
(173, '2020-12-08 08:54:54', 'diana', 'mahasiswa'),
(174, '2020-12-08 08:55:08', 'anawati', 'mahasiswa'),
(175, '2020-12-08 08:55:12', 'resa', 'mahasiswa'),
(176, '2020-12-08 08:55:16', 'fara', 'mahasiswa'),
(177, '2020-12-08 08:55:21', 'widya', 'mahasiswa'),
(178, '2020-12-08 08:55:29', 'hidayat', 'mahasiswa'),
(179, '2020-12-08 08:55:39', 'liza', 'mahasiswa'),
(180, '2020-12-08 08:55:46', 'rachmat', 'mahasiswa'),
(181, '2020-12-08 08:56:02', 'tessha', 'mahasiswa'),
(182, '2020-12-08 08:56:11', 'tama', 'mahasiswa'),
(183, '2020-12-08 08:56:20', 'putri', 'mahasiswa'),
(184, '2020-12-08 09:00:00', 'rangga', 'mahasiswa'),
(185, '2020-12-08 09:00:08', 'fajar', 'mahasiswa'),
(186, '2020-12-08 09:00:35', 'garda', 'mahasiswa'),
(187, '2020-12-08 09:11:17', 'riansyah', 'mahasiswa'),
(188, '2020-12-08 09:49:51', 'adi', 'mahasiswa'),
(189, '2020-12-08 09:50:04', 'pragus', 'mahasiswa'),
(190, '2020-12-10 08:45:35', 'anawati', 'mahasiswa'),
(191, '2020-12-10 08:45:45', 'hidayat', 'mahasiswa'),
(192, '2020-12-10 08:45:52', 'liza', 'mahasiswa'),
(193, '2020-12-10 08:46:01', 'rachmat', 'mahasiswa'),
(194, '2020-12-10 08:46:08', 'putri', 'mahasiswa'),
(195, '2020-12-10 08:47:12', 'tama', 'mahasiswa'),
(196, '2020-12-10 08:50:05', 'widya', 'mahasiswa'),
(197, '2020-12-10 08:52:26', 'diana', 'mahasiswa'),
(198, '2020-12-10 08:53:16', 'rangga', 'mahasiswa'),
(199, '2020-12-10 08:53:33', 'fajar', 'mahasiswa'),
(200, '2020-12-10 08:55:15', 'tessha', 'mahasiswa'),
(201, '2020-12-10 08:57:05', 'resa', 'mahasiswa'),
(202, '2020-12-10 08:59:40', 'garda', 'mahasiswa'),
(203, '2020-12-10 09:07:19', 'riansyah', 'mahasiswa'),
(204, '2020-12-10 09:20:23', 'fara', 'mahasiswa'),
(205, '2020-12-11 08:56:29', 'liza', 'mahasiswa'),
(206, '2020-12-11 08:56:36', 'putri', 'mahasiswa'),
(207, '2020-12-11 08:56:43', 'widya', 'mahasiswa'),
(208, '2020-12-11 08:56:47', 'tama', 'mahasiswa'),
(209, '2020-12-11 08:57:08', 'resa', 'mahasiswa'),
(210, '2020-12-11 08:57:20', 'anawati', 'mahasiswa'),
(211, '2020-12-11 08:57:24', 'fara', 'mahasiswa'),
(213, '2020-12-11 08:57:39', 'rachmat', 'mahasiswa'),
(214, '2020-12-11 08:57:45', 'rangga', 'mahasiswa'),
(215, '2020-12-11 08:57:52', 'tessha', 'mahasiswa'),
(216, '2020-12-11 08:59:21', 'riansyah', 'mahasiswa'),
(217, '2020-12-11 09:01:05', 'garda', 'mahasiswa'),
(218, '2020-12-11 09:01:16', 'hidayat', 'mahasiswa'),
(219, '2020-12-11 09:01:41', 'diana', 'mahasiswa'),
(220, '2020-12-11 09:45:16', 'fajar', 'mahasiswa'),
(221, '2020-12-14 08:26:16', 'rachmat', 'mahasiswa'),
(222, '2020-12-14 08:42:05', 'liza', 'mahasiswa'),
(223, '2020-12-14 08:44:07', 'hidayat', 'mahasiswa'),
(224, '2020-12-14 08:44:14', 'anawati', 'mahasiswa'),
(225, '2020-12-14 08:46:02', 'widya', 'mahasiswa'),
(226, '2020-12-14 08:46:10', 'fara', 'mahasiswa'),
(227, '2020-12-14 08:48:03', 'resa', 'mahasiswa'),
(228, '2020-12-14 08:50:37', 'rangga', 'mahasiswa'),
(229, '2020-12-14 08:50:45', 'fajar', 'mahasiswa'),
(230, '2020-12-14 08:54:01', 'tessha', 'mahasiswa'),
(231, '2020-12-14 08:56:28', 'diana', 'mahasiswa'),
(232, '2020-12-14 08:59:14', 'putri', 'mahasiswa'),
(233, '2020-12-14 09:04:55', 'garda', 'mahasiswa'),
(234, '2020-12-14 09:10:46', 'riansyah', 'mahasiswa'),
(238, '2020-12-14 09:23:49', 'tama', 'mahasiswa'),
(276, '2020-12-14 10:47:14', 'adi', 'mahasiswa'),
(277, '2020-12-14 10:47:27', 'pragus', 'mahasiswa'),
(297, '2020-12-14 14:20:23', 'liza', 'mahasiswa'),
(298, '2020-12-15 08:42:58', 'rachmat', 'mahasiswa'),
(299, '2020-12-15 08:43:10', 'widya', 'mahasiswa'),
(300, '2020-12-15 08:43:21', 'resa', 'mahasiswa'),
(301, '2020-12-15 08:46:31', 'fara', 'mahasiswa'),
(302, '2020-12-15 08:50:22', 'putri', 'mahasiswa'),
(303, '2020-12-15 08:50:33', 'liza', 'mahasiswa'),
(304, '2020-12-15 08:50:44', 'anawati', 'mahasiswa'),
(305, '2020-12-15 08:54:50', 'fajar', 'mahasiswa'),
(306, '2020-12-15 08:54:57', 'rangga', 'mahasiswa'),
(307, '2020-12-15 08:57:02', 'diana', 'mahasiswa'),
(308, '2020-12-15 08:58:38', 'tessha', 'mahasiswa'),
(309, '2020-12-15 09:05:59', 'garda', 'mahasiswa'),
(310, '2020-12-15 09:11:55', 'hidayat', 'mahasiswa'),
(311, '2020-12-15 09:12:05', 'tama', 'mahasiswa'),
(312, '2020-12-15 09:19:20', 'riansyah', 'mahasiswa'),
(313, '2020-12-15 10:04:45', 'pragus', 'mahasiswa'),
(314, '2020-12-15 10:05:53', 'adi', 'mahasiswa'),
(315, '2020-12-16 08:54:35', 'anawati', 'mahasiswa'),
(316, '2020-12-16 08:54:46', 'resa', 'mahasiswa'),
(317, '2020-12-16 08:54:53', 'widya', 'mahasiswa'),
(318, '2020-12-16 08:55:04', 'fajar', 'mahasiswa'),
(319, '2020-12-16 08:55:12', 'putri', 'mahasiswa'),
(320, '2020-12-16 08:55:18', 'liza', 'mahasiswa'),
(321, '2020-12-16 08:55:28', 'rachmat', 'mahasiswa'),
(322, '2020-12-16 08:55:38', 'fara', 'mahasiswa'),
(323, '2020-12-16 08:55:47', 'diana', 'mahasiswa'),
(324, '2020-12-16 08:55:54', 'tessha', 'mahasiswa'),
(325, '2020-12-16 08:57:19', 'garda', 'mahasiswa'),
(326, '2020-12-16 09:00:19', 'hidayat', 'mahasiswa'),
(327, '2020-12-16 09:04:24', 'tama', 'mahasiswa'),
(328, '2020-12-16 08:59:21', 'rangga', 'mahasiswa'),
(329, '2020-12-16 09:19:00', 'adi', 'mahasiswa'),
(330, '2020-12-16 09:19:11', 'pragus', 'mahasiswa'),
(331, '2020-12-16 09:26:48', 'riansyah', 'mahasiswa'),
(332, '2020-12-17 08:50:49', 'resa', 'mahasiswa'),
(333, '2020-12-17 08:51:00', 'widya', 'mahasiswa'),
(334, '2020-12-17 08:51:12', 'liza', 'mahasiswa'),
(335, '2020-12-17 08:51:19', 'anawati', 'mahasiswa'),
(336, '2020-12-17 08:51:26', 'fara', 'mahasiswa'),
(337, '2020-12-17 08:52:31', 'diana', 'mahasiswa'),
(338, '2020-12-17 08:53:22', 'putri', 'mahasiswa'),
(339, '2020-12-17 08:53:32', 'tessha', 'mahasiswa'),
(340, '2020-12-17 08:54:21', 'rachmat', 'mahasiswa'),
(341, '2020-12-17 08:54:41', 'rangga', 'mahasiswa'),
(342, '2020-12-17 08:55:42', 'fajar', 'mahasiswa'),
(343, '2020-12-17 08:57:54', 'hidayat', 'mahasiswa'),
(344, '2020-12-17 09:25:18', 'riansyah', 'mahasiswa'),
(345, '2020-12-17 09:30:01', 'tama', 'mahasiswa'),
(347, '2020-12-17 12:13:29', 'adi', 'mahasiswa'),
(348, '2020-12-17 12:13:40', 'pragus', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_out`
--

CREATE TABLE `history_out` (
  `id_out` int(11) NOT NULL,
  `date_out` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `level_user` enum('mahasiswa','dosen','tata_usaha','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 'rachmat', 'rachmat', '2020-11-19 15:17:14', 'admin', 1, 0, '3311801036', 'mahasiswa'),
(16, 'tama', 'tama', '2020-11-20 06:47:28', 'admin', 1, 0, '3311801090', 'mahasiswa'),
(17, 'resa', 'resa', '2020-11-20 08:45:53', 'admin', 1, 0, '3311801056', 'mahasiswa'),
(20, 'fara', 'fara', '2020-11-21 01:04:56', 'admin', 1, 0, '3311801039', 'mahasiswa'),
(21, 'mustanir', 'mustanir', '2020-11-30 03:59:48', 'admin', 1, 0, '120240', 'tata_usaha'),
(22, 'hidayat', 'hidayat', '2020-11-30 05:50:33', 'admin', 1, 0, '3311801098', 'mahasiswa'),
(26, 'anawati', 'anawati', '2020-11-30 05:54:33', 'admin', 1, 0, '123213123', 'mahasiswa'),
(27, 'pragus', 'pragus', '2020-11-30 05:58:10', 'admin', 1, 0, '32121', 'mahasiswa'),
(28, 'garda', 'garda', '2020-11-30 05:59:01', 'admin', 1, 0, '213132', 'mahasiswa'),
(29, 'riansyah', 'riansyah', '2020-11-30 06:01:43', 'admin', 1, 0, '2132133', 'mahasiswa'),
(30, 'widya', 'widya', '2020-12-01 01:52:16', 'admin', 1, 0, '321212', 'mahasiswa'),
(31, 'diana', 'diana', '2020-12-01 01:53:35', 'admin', 1, 0, '12321', 'mahasiswa'),
(32, 'garda', 'garda', '2020-12-01 01:55:19', 'admin', 1, 0, '342423', 'mahasiswa'),
(33, 'adi', 'adi', '2020-12-01 01:55:37', 'admin', 1, 0, '5464564', 'mahasiswa'),
(34, 'fajar', 'fajar', '2020-12-01 08:44:36', 'admin', 1, 0, '2133213', 'mahasiswa'),
(35, 'rangga', 'rangga', '2020-12-01 08:44:48', 'admin', 1, 0, '213213213', 'mahasiswa'),
(36, 'liza', 'liza', '2020-12-01 08:44:58', 'admin', 1, 0, '123213124', 'mahasiswa'),
(37, 'putri', 'putri', '2020-12-01 08:45:13', 'admin', 1, 0, '213214342', 'mahasiswa'),
(38, 'tessha', 'tessha', '2020-12-01 08:45:34', 'admin', 1, 0, '4534453', 'mahasiswa'),
(41, 'nina', 'nina', '2020-12-07 05:10:35', 'admin', 1, 0, '213213121', 'tata_usaha');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_in`
--
ALTER TABLE `history_in`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `history_out`
--
ALTER TABLE `history_out`
  ADD PRIMARY KEY (`id_out`);

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
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT untuk tabel `history_out`
--
ALTER TABLE `history_out`
  MODIFY `id_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
