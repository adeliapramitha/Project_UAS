-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 18.18
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `jk_admin` enum('L','P') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('ADMIN','SUPER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jk_admin`, `username`, `password`, `level`) VALUES
(1, 'Adelia', 'P', 'admin1', '123', 'SUPER'),
(4, 'Salma', 'P', 'salma', '123', 'ADMIN'),
(5, 'Nathan', 'L', 'dearnathan', '1234', 'ADMIN'),
(8, 'Shawn Mendes', 'L', 'shawnmendes', '123', 'SUPER'),
(10, 'Olivia R', 'P', 'oliviar', '1234', 'ADMIN'),
(11, 'Rich Brian', 'L', 'richbr', '123', 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id_kwitansi` int(11) NOT NULL,
  `tgl_kwt` date NOT NULL DEFAULT current_timestamp(),
  `dari` varchar(255) NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `terbilang` varchar(255) NOT NULL,
  `penerima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kwitansi`
--

INSERT INTO `kwitansi` (`id_kwitansi`, `tgl_kwt`, `dari`, `untuk`, `jumlah`, `terbilang`, `penerima`) VALUES
(2, '2022-01-13', 'Anisa', 'Sewa Sepeda Polygon - CTB', 'Rp 210.000', 'Dua Ratus Sepuluh Ribu Rupiah', 'Adm- Salma'),
(3, '2022-01-14', 'Bayu', 'Sewa Sepeda Polygon - CTB', 'Rp 490.000', 'Empat Ratus Sembilan Puluh Ribu Rupiah', 'Adm - Nathan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepeda`
--

CREATE TABLE `sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `merk` enum('Wimcycle','Polygon','United','Jieyang','Pacific','Avand') NOT NULL,
  `jenis` enum('Hybrid','Lipat','Gunung','Fixie','CTB') NOT NULL,
  `harga` double NOT NULL,
  `s_sepeda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sepeda`
--

INSERT INTO `sepeda` (`id_sepeda`, `merk`, `jenis`, `harga`, `s_sepeda`) VALUES
(1, 'Polygon', 'CTB', 30000, 'Tersedia'),
(2, 'United', 'Gunung', 35000, 'Tersedia'),
(4, 'Jieyang', 'Hybrid', 27000, 'Tidak Tersedia'),
(6, 'Pacific', 'Lipat', 25000, 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_sepeda` int(11) NOT NULL,
  `nama_sewa` varchar(90) NOT NULL,
  `ktp` varchar(25) NOT NULL,
  `jk_sewa` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `telp_sewa` varchar(13) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(11) NOT NULL,
  `harga_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_sepeda`, `nama_sewa`, `ktp`, `jk_sewa`, `alamat`, `telp_sewa`, `tgl_sewa`, `tgl_kembali`, `lama`, `harga_total`) VALUES
(46, 1, 'Anisa', '13243593724624627', 'P', 'Jalan Merbabu', '089876543214', '2022-01-13', '2022-01-20', 7, 210000),
(49, 6, 'Nana', '876521468906542', 'P', 'Jalan Kediri', '012345678908', '2022-01-14', '2022-01-17', 3, 75000),
(50, 2, 'Bayu', '98665545434', 'L', 'Jalan Kandangan', '0864314690754', '2022-01-22', '2022-02-05', 14, 490000),
(51, 4, 'Lily', '8762123242424', 'P', 'Jalan Brantas', '012345678777', '2022-01-14', '2022-01-31', 17, 459000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indeks untuk tabel `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id_kwitansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
