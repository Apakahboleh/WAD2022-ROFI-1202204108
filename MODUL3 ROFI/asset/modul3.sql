-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2022 pada 06.20
-- Versi server: 8.0.31
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_rofi_table`
--

CREATE TABLE `showroom_rofi_table` (
  `id_mobil` int NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `showroom_rofi_table`
--

INSERT INTO `showroom_rofi_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(17, 'Limosin', 'Udin', 'Limosin Calculus', '2022-11-11', 'Keren', '2.png', 'Lunas'),
(19, 'BMW', '', 'BMW M100', '2022-11-08', 'Sangat Keren', '1.png', 'Lunas'),
(28, 'Supra', 'Rofi', 'Supra R-15', '2022-11-22', 'sangat keren dan menawan jadi ingin memilikinya', '6377e2405ef6d.4.jpg', 'Lunas'),
(29, 'Mercedes', 'Urdi burjo', 'Mercedes Saturnus', '2022-11-01', 'Sangat cantik juga ganteng', '6377ca9035a4e.mercedes-old.jpg', 'Lunas'),
(30, 'Jeep', 'Lala', 'Katana', '2022-11-02', 'Bekas tapi sangar', '637866ae7cde8.jimny.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_rofi_table`
--
ALTER TABLE `showroom_rofi_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_rofi_table`
--
ALTER TABLE `showroom_rofi_table`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
