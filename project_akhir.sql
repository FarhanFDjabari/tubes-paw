-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2020 pada 18.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `qr_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `user_id`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `qr_code`) VALUES
(2, 0, 'Daging Sapi', 'Daging Sapi segar', 'Meat', 28000, 5, 'dagingsapi.jpg', NULL),
(6, 0, 'Popcorn Caramel', 'Popcorn dengan rasa karamel | Berat bersih 150g', 'Snacks', 15000, 7, 'Caramel-Popcorn.jpg', NULL),
(7, 0, 'Sapu Ijuk', 'Sapu ijuk berkualitas', 'Home Tools', 25000, 11, 'sapu-ijuk.jpg', NULL),
(23, 0, 'Testing 1234', 'Ini Testing', 'Meat', 10000, 4, 'Testing_1234.png', 'Meat-Testing 1234.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `qr_code` varchar(255) DEFAULT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `qr_code`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Yudhistira Eka', 'Dirgantara V, Malang', NULL, '2020-11-28 09:14:55', '2020-11-29 09:14:55'),
(2, 'Santi Kartika', 'Jl. Mayjend Panjaitan No.250', NULL, '2020-11-28 10:38:52', '2020-11-29 10:38:52'),
(3, 'Eka', 'Jl. Veteran, Malang', NULL, '2020-11-28 11:20:51', '2020-11-29 11:20:51'),
(4, 'Kurnia', 'Malang', NULL, '2020-12-08 18:37:33', '2020-12-09 18:37:33'),
(5, 'Kurnia', 'Jl. Derkuku Utara no. 25, Tanjungrejo, Sukun, Malang', '2020-12-08 18:54:59-Kurnia-Jl. Derkuku Utara no. 25, Tanjungrejo, Sukun, Malang.png', '2020-12-08 18:54:59', '2020-12-09 18:54:59'),
(6, 'Kurnia', 'Jl. Derkuku Utara no. 25, Tanjungrejo, Sukun, Malang', '2020-12-08 18:56:20-Kurnia-Jl. Derkuku Utara no. 25, Tanjungrejo, Sukun, Malang.png', '2020-12-08 18:56:20', '2020-12-09 18:56:20'),
(7, 'Kurnia', 'Malang', '2020-12-08 18:57:36.png', '2020-12-08 18:57:36', '2020-12-09 18:57:36'),
(8, 'Kurnia', 'Malang', '2020-12-08 18:58:22.png', '2020-12-08 18:58:22', '2020-12-09 18:58:22'),
(9, 'Kurnia', 'Malang', '2020-12-08 19:00:04.png', '2020-12-08 19:00:04', '2020-12-09 19:00:04'),
(10, 'Kurnia', 'Malang', '2020-12-08 19:00:28.png', '2020-12-08 19:00:28', '2020-12-09 19:00:28'),
(11, 'Kurnia', 'Malang', '2020-12-08 19:16:46.png', '2020-12-08 19:16:46', '2020-12-09 19:16:46'),
(12, 'Kurnia', 'Malang', 'Array.png', '2020-12-08 19:20:34', '2020-12-09 19:20:34'),
(13, 'Kurnia', 'Malang', '2020-12-08 19-22-54.png', '2020-12-08 19:22:54', '2020-12-09 19:22:54'),
(14, 'Lucky', 'Malang', '2020-12-08 19-24-31.png', '2020-12-08 19:24:31', '2020-12-09 19:24:31'),
(15, 'Kurnia', 'Malang', '2020-12-08 19-25-21.png', '2020-12-08 19:25:21', '2020-12-09 19:25:21'),
(16, 'Kurnia', 'Malang', '2020-12-08 19-26-13-Kurnia-Malang.png', '2020-12-08 19:26:13', '2020-12-09 19:26:13'),
(17, 'Lucky', 'Malang', '2020-12-09 00-17-56-Lucky-Malang.png', '2020-12-09 00:17:56', '2020-12-10 00:17:56'),
(18, 'Lucky', 'Malang', '2020-12-09 00-19-00-Lucky-Malang.png', '2020-12-09 00:19:00', '2020-12-10 00:19:00'),
(19, 'Lucky', 'Malang', '2020-12-09 00-19-42-Lucky-Malang.png', '2020-12-09 00:19:42', '2020-12-10 00:19:42'),
(20, 'Lucky', 'Malang', '2020-12-09 00-21-06-Lucky-Malang.png', '2020-12-09 00:21:06', '2020-12-10 00:21:06'),
(21, 'Lucky', 'Malang', '2020-12-09 00-24-10-Lucky-Malang.png', '2020-12-09 00:24:10', '2020-12-10 00:24:10'),
(22, 'Lucky', 'Malang', '2020-12-09 00-25-35-Lucky-Malang.png', '2020-12-09 00:25:35', '2020-12-10 00:25:35'),
(23, 'Lucky', 'Malang', '2020-12-09 00-26-18-Lucky-Malang.png', '2020-12-09 00:26:18', '2020-12-10 00:26:18'),
(24, 'Lucky', 'Malang', '2020-12-09 00-26-38-Lucky-Malang.png', '2020-12-09 00:26:38', '2020-12-10 00:26:38'),
(25, 'Lucky', 'Malang', '2020-12-09 00-26-59-Lucky-Malang.png', '2020-12-09 00:26:59', '2020-12-10 00:26:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Apel Malang', 1, 30000, ''),
(2, 1, 2, 'Daging Sapi', 1, 28000, ''),
(3, 2, 6, 'Popcorn Caramel', 1, 15000, ''),
(4, 2, 2, 'Daging Sapi', 2, 28000, ''),
(5, 2, 1, 'Apel Malang', 1, 30000, ''),
(6, 2, 7, 'Sapu Ijuk', 2, 25000, ''),
(7, 3, 6, 'Popcorn Caramel', 3, 15000, ''),
(8, 4, 7, 'Sapu Ijuk', 1, 25000, ''),
(9, 5, 7, 'Sapu Ijuk', 1, 25000, ''),
(10, 7, 7, 'Sapu Ijuk', 1, 25000, ''),
(11, 11, 7, 'Sapu Ijuk', 1, 25000, ''),
(12, 12, 23, 'Testing 1234', 1, 10000, ''),
(13, 14, 23, 'Testing 1234', 1, 10000, ''),
(14, 15, 23, 'Testing 1234', 1, 10000, ''),
(15, 16, 23, 'Testing 1234', 1, 10000, ''),
(16, 17, 23, 'Testing 1234', 1, 10000, ''),
(17, 19, 23, 'Testing 1234', 1, 10000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'Farhan', 'farhan', '123', 2),
(3, 'Andre', 'andre', 'andre', 2),
(7, 'Ramdani Kurnia', 'Kurnia', '$2y$10$S91n7MzpOmNoCVOrGTJBfeK2ByQ.qGlKf5GerzSZxxs', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
