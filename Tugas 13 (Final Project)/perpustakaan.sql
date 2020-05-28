-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 15.07
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Agus', 'admin3', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `jenis`, `penulis`, `stok`) VALUES
('E001', 'Ekonomi Industri', 'Ekonomi', 'Muhammad Teguh', 13),
('E002', 'Ekonomi Manajerial', 'Ekonomi', 'Henry Faizal Noor', 5),
('E004', 'Teori Ekonomi Makro', 'Ekonomi', 'Bayu Pransutoko, S.E., MM.', 3),
('H001', 'Pengantar Ilmu Hukum', 'Hukum', 'Bergas Prana Jaya', 5),
('I002', 'Basis Data Dasar', 'Ilmu Komputer', 'Adyanata Lubis, S.kom,.M.Kom', 4),
('I003', 'Pemrograman C++', 'Ilmu Komputer', 'Budi Raharjo', 5),
('I004', 'Pemrograman Database Dengan Delphi 7', 'Ilmu Komputer', 'Abdul Kadir', 6),
('I005', 'Pengantar Aplikasi Komputer', 'Ilmu Komputer', 'Yenny Iskandar, S.E., S.Kom., MM.', 7),
('I006', 'Statistika 1 untuk Teknik Informatika', 'Ilmu Komputer', 'Irwan Budi Santoso, S.Si., M.Kom', 7),
('K001', 'Anatomi Klinik', 'Kedokteran', 'Richard S. Snell', 4),
('K002', 'Fisiologi Manusia', 'Kedokteran', 'Lauralee Sherwood', 3),
('P001', 'Bertanam Hidroponik Untuk Pemula', 'Pertanian', 'Puput Alviani', 9),
('P002', 'Pertanian PostModern', 'Pertanian', 'Dika Supyandi', 4),
('W001', 'Dimensi Pariwisata Berkelanjutan', 'Pariwisata', 'Drs. Usman Chamdani', 5),
('W002', 'Pengantar Ilmu Pariwisata', 'Pariwisata', 'Prof.Dr, I Gde Pitana, M.sc', 6),
('W003', 'Pariwisata dan Perhotelan', 'Pariwisata', 'Bagyono', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'admin123'),
(2, 'superadmin', 'super2'),
(5, 'rani12', 'rani12'),
(7, 'admin3', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `id_buku` varchar(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_user`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(7, 'rani12', 'E004', '2020-05-29', '2020-05-31'),
(8, 'rani12', 'E004', '2020-05-29', '2020-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` char(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` char(5) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nim`, `nama`, `username`, `password`, `email`, `jk`, `alamat`) VALUES
(1, 1708561017, 'Yulia alami', 'yulia', 'yulia12', 'yuliaalami@gmail.com', 'p', 'nusa dua'),
(3, 1708561015, 'Dela Yuliana', 'dela28', 'dela287', 'delayuliana287@gmail.com', 'p', 'bukit'),
(4, 1708561016, 'Rania', 'rani12', 'rani12', 'rania12@gmail.com', 'p', 'Bukit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
