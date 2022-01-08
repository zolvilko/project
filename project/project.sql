-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2022 pada 08.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `satuan`, `id_jenis`, `id_supplier`, `harga`, `stok`) VALUES
(1, 'cl021', 'Celengan', 'buah', 1, 2, 10000, 12),
(2, 'ob12', 'Obeng', 'buah', 9, 3, 20000, 43),
(3, '111', '111', '', 5, 3, 0, 0),
(6, 'scfsdf', 'asdsa', 'sdsada', 13, 0, 131231, 222);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jenis`, `keterangan`) VALUES
(4, 'Bahan Sembako', 'Berlokasi dekat dengan pemukiman penduduk, toko kelontong sudah pasti menjual barang-barang sembako seperti beras, tepung terigu, minyak, gula, telur, dan beberapa barang pokok lainnya. Sembako yang dijual di toko kelontong bisa dalam bentuk eceran maupun sudah dalam bentuk kemasan yang lebih praktis.'),
(5, 'Kebutuhan rumah tangga', 'Barang kebutuhan sehari-hari lainnya yang dijual di toko kelontong adalah kebutuhan rumah tangga seperti sabun mandi, shampo, pasta gigi, sikat gigi, sabun pencuci piring, deterjen, hingga barang-barang perlengkapan rumah seperti sapu, ember dan gayung. Selain sembako, barang kebutuhan rumah tangga juga jadi barang yang cukup banyak dibeli di toko kelontong'),
(6, 'Alat tulis', 'Sejumlah toko kelontong biasanya juga menyediakan berbagai macam alat tulis untuk menunjang kebutuhan sehari-hari. Alat-alat tulis yang biasanya dijual adalah barang-barang yang cukup umum seperti buku tulis, pulpen, pensil, penggaris, lem, kertas kado, dan gunting.'),
(7, 'Obat-obatan', 'Yang tak kalah penting untuk dijual toko kelontong adalah obat-obatan. Meski tidak selengkap apotek, namun setidaknya toko kelontong menyediakan obat-obatan ringan yang tidak memerlukan resep dokter seperti obat sakit kepala, obat penurun demam, obat pusing, minyak angin, koyo, dan lain sebagainya. Menyediakan obat-obatan membuat toko kelontong bisa jadi alternatif pertama pelanggan saat membutuhkan karena lokasinya yang dekat dengan rumah.'),
(8, 'Jajanan dan makanan ringan  ', 'Selain ibu rumah tangga, toko kelontong juga sering didatangi oleh anak-anak karena menjual berbagai macam jajanan dan makanan ringan seperti cemilan, permen, wafer, coklat, dan biskuit. Untuk itu, cara menata rak makanan ringan juga perlu diperhatikan agar semakin menarik minat pembeli anak-anak. '),
(9, 'Gas Elpiji', 'Kebutuhan rumah tangga yang tidak kalah penting adalah gas elpiji. Masyarakat Indonesia, terutama kota-kota besar sudah hampir seluruhnya menggunakan gas elpiji untuk keperluan memasak. Untuk itu, tidak ada salahnya jika toko kelontong menyediakan gas elpiji sebagai alternatif pembelian selain pelanggan harus pergi ke pasar.'),
(10, 'Air mineral', 'Air mineral jadi kebutuhan lain yang tidak kalah penting untuk masyarakat. Toko kelontong bisa menjual air mineral dalam berbagai ukuran, mulai dari gelas, botol, hingga galon. SRC sendiri saat ini sudah memiliki produk air mineral ES.ER.CE dengan harga yang bersahabat dan juga kualitas yang baik. Kini sudah tersedia di sejumlah Toko Kelontong SRC. '),
(11, 'Perlengkapan bayi ', 'Toko kelontong biasa menyediakan produk-produk perlengkapan bayi seperti popok. Sampo bayi, sabun bayi hingga minyak telon. Hal ini disebabkan beberapa perlengkapan bayi ini cukup sering dicari pelanggan dalam penjualannya. '),
(12, 'Produk pembayaran digital', 'Sudah bukan jadi hal yang aneh lagi ketika toko kelontong menyediakan produk pembayaran digital. Toko Kelontong SRC memiliki produk Pojok Bayar, yang di mana jadi keunggulan Toko Kelontong Masa Kini dalam memenuhi kebutuhan masyarakat seperti membeli pulsa, token listrik, internet, BPJS, PDAM, hingga tiket perjalanan pesawat. '),
(13, 'Lain-lain', 'Kategori lain-lain merupakan daftar barang toko kelontong yang tidak termasuk sembilan jenis di atas seperti obat nyamuk, tissue, tusuk gigi, tali rafia, dan lainnya. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `born` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `name`, `born`, `email`, `gender`, `address`, `created_at`) VALUES
(1, 2222, 'sdfdsfds', '0000-00-00', 'asdsad', 1, 'sdcasdas', '2021-12-03 08:46:34'),
(2, 332, 'dsfsdf', '0000-00-00', 'asdasd', 1, 'sadasd', '2021-12-03 08:47:30'),
(3, 222, 'sdfsdf', '0000-00-00', 'asdasd', 1, 'sadasda', '2021-12-03 08:58:55'),
(21, 12122, 'asasd', '2022-01-04', 'asdasd', 2, 'asdasd', '2022-01-08 02:53:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `notelp`, `email`, `alamat`) VALUES
(3, 'PT Jaya Utama Santikah', '628161485213', '-', 'SMART MARKET blok b no. 8 Jl. Daan mogot km 19 Batu Ceper , Jakarta Barat, Jakarta, Indonesia'),
(4, 'CV Surya Agro Nusantara', '082283097703', '-', 'Jl. Tuanku Sasak, Simpang Empat, Lingkuang Aua, Pasaman, Pasaman Barat, Pasaman Barat, Sumatera Bara'),
(5, ' PT Globalindo Mega Aroma ', '-', 'Globalindo@global.com', 'Jl. HOS Cokroaminoto No.100, Kel. Belakang Tangsi, Kec. Padang Barat, Kota Padang, Sumatera Barat, I'),
(6, 'PT Berkah Laksamana Chengho', '-', 'Chengho@Chengho.com', 'Jl. Raya Jatinegara Barat No.197, RT.1/RW.3, Bali Mester, East Jakarta City, Jakarta, Indonesia, Jak'),
(7, 'CV Istana Selang', '-', '-', 'Jalan Semarang No 31, Surabaya, Jawa Timur, Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `name`, `email`, `comment`, `created_at`) VALUES
(1, 'dani', 'dani@gmail.com', 'dani adalaha mahsiswa disini', '2021-12-03 08:04:00'),
(2, 'cika', 'cika@yahoo.com', 'cika adalah mahasiswi di fakultas teknik', '2021-12-03 08:04:12'),
(3, 'zain', 'zain@gmail.com', 'Zain adalah mahasiswan pindahan', '2021-12-03 08:04:45'),
(4, 'zol vilko', 'zolvilko76@gmail.com', 'Zol mahasiswa baru', '2021-12-03 08:15:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
