-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2025 pada 06.38
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reseller`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id_item` varchar(255) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga_item` varchar(255) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `kategori_item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id_item`, `nama_item`, `harga_item`, `tanggal_dibuat`, `kategori_item`) VALUES
('408600436', '10000 VIEWS', '15000000', '2025-02-03', 'TIKTOK VIEWS'),
('688199630', '10000 VIEWS', '5000000', '2025-02-03', 'INSTAGRAM VIEWS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_ktg` varchar(255) NOT NULL,
  `singkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_ktg`, `singkat`) VALUES
(1, 'INSTAGRAM VIEWS', 'IV'),
(3, 'TIKTOK VIEWS', 'TV'),
(4, 'SPOTIFY PREMIUM', 'SP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(255) NOT NULL,
  `item_dibeli` text NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `username_app` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `total_harga` bigint(20) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `item_dibeli`, `jumlah`, `username_app`, `link`, `nama_pembeli`, `total_harga`, `tanggal_transaksi`) VALUES
('67a19d760df5e', '688199630', 1, '@dhiraelz_', 'https://www.instagram.com/p/DCFGyyoBRGY/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', 'Dhira V2', 5000000, '2025-02-04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
