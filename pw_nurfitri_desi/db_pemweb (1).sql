-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2023 pada 17.19
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
-- Database: `db_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi_pemweb`
--

CREATE TABLE `tb_registrasi_pemweb` (
  `id_saja` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_registrasi_pemweb`
--

INSERT INTO `tb_registrasi_pemweb` (`id_saja`, `username`, `email`, `password`) VALUES
(99, 'USER', 'nurdesi715@gmail.com', '$2y$10$9r6GrktYn8f7nk16lbZjheDt1lW0/zNw8Bo8lfKxA46udiYEpn04C'),
(100, 'ADMIN', 'nurdesi716@gmial.com', '$2y$10$S9An/z6JQcTh1yr/Kf8Wwe5Tf9a648mRIB7ZPel5NyViv9PRmUgH6'),
(101, 'DESI', 'nurdesi715@gmail.com', '$2y$10$Lh1l6GNgWB1kJE3IcIz8terZMgw.4AteMRJn2wPK1B1/tSAjC4VoO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_registrasi_pemweb`
--
ALTER TABLE `tb_registrasi_pemweb`
  ADD PRIMARY KEY (`id_saja`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi_pemweb`
--
ALTER TABLE `tb_registrasi_pemweb`
  MODIFY `id_saja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
