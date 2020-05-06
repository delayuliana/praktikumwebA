-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 16.38
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
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `jenis`, `penulis`) VALUES
('E001', 'Ekonomi Industri', 'Ekonomi', 'Muhammad Teguh'),
('E002', 'Ekonomi Manajerial', 'Ekonomi', 'Henry Faizal Noor'),
('E003', 'Pengantar Ekonomi Syariah', 'Ekonomi', 'Dr. H. Abdul Ghofur, M.Ag.'),
('E004', 'Teori Ekonomi Makro', 'Ekonomi', 'Bayu Pransutoko, S.E., MM.'),
('H001', 'Pengantar Ilmu Hukum', 'Hukum', 'Bergas Prana Jaya'),
('I001', 'Bahasa C', 'Ilmu Komputer', 'Singgih Satrio Wibowo'),
('I002', 'Basis Data Dasar', 'Ilmu Komputer', 'Adyanata Lubis, S.kom,.M.Kom'),
('I003', 'Pemrograman C++', 'Ilmu Komputer', 'Budi Raharjo'),
('I004', 'Pemrograman Database Dengan Delphi 7', 'Ilmu Komputer', 'Abdul Kadir'),
('I005', 'Pengantar Aplikasi Komputer', 'Ilmu Komputer', 'Yenny Iskandar, S.E., S.Kom., MM.'),
('I006', 'Statistika 1 untuk Teknik Informatika', 'Ilmu Komputer', 'Irwan Budi Santoso, S.Si., M.Kom'),
('K001', 'Anatomi Klinik', 'Kedokteran', 'Richard S. Snell'),
('K002', 'Fisiologi Manusia', 'Kedokteran', 'Lauralee Sherwood'),
('P001', 'Bertanam Hidroponik Untuk Pemula', 'Pertanian', 'Puput Alviani'),
('P002', 'Pertanian PostModern', 'Pertanian', 'Dika Supyandi'),
('W001', 'Dimensi Pariwisata Berkelanjutan', 'Pariwisata', 'Drs. Usman Chamdani'),
('W002', 'Pengantar Ilmu Pariwisata', 'Pariwisata', 'Prof.Dr, I Gde Pitana, M.sc'),
('W003', 'Pariwisata dan Perhotelan', 'Pariwisata', 'Bagyono');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
