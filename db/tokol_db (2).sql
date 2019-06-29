-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 06:17 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokol_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(2) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `nasabah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `no_rek`, `nasabah`) VALUES
(1, 'Mandiri', '12345678987', 'Fauzan Indra Pramana'),
(3, 'BNI', '1324569871254', 'Fauzan Indra Pramana'),
(4, 'BTN', '132654897564123', 'Fauzan Indra Pramana');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode` varchar(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `kode` int(10) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `kd_cus` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `model` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `harga` varchar(10) NOT NULL,
  `no_surat_jalan` int(11) NOT NULL,
  `tgl_kirim` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_terima` datetime NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Menuggu Konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_kon` int(6) NOT NULL,
  `nopo` varchar(20) NOT NULL,
  `jenis` int(11) NOT NULL DEFAULT '1',
  `kd_cus` varchar(20) NOT NULL,
  `bayar_via` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `nopo` int(11) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `kode` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `color` varchar(10) NOT NULL,
  `size` varchar(4) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `no_surat_jalan` int(20) NOT NULL,
  `tgl_terima` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Menuggu Pembayaran'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(1, 'Kaos Gambar 1', 'T-Shirt', 50000, 'Mantab', 60, 'gambar_produk/baju8.jpg'),
(2, 'Kaos Gambar 2', 'T-Shirt', 60000, 'Mantul', 60, 'gambar_produk/baju10.jpg'),
(3, 'Kaos Gambar 3', 'T-Shirt', 65000, 'Mantul', 60, 'gambar_produk/baju16.JPG'),
(4, 'Kaos Gambar 4', 'T-Shirt', 50000, 'Mantul', 60, 'gambar_produk/baju11.jpg'),
(5, 'Kaos Gambar 5', 'T-Shirt', 70000, 'Mantul', 60, 'gambar_produk/baju12.jpg'),
(6, 'Kaos Gambar 6', 'T-Shirt', 70000, 'Mantul', 60, 'gambar_produk/smile_skull_lady.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk_stock`
--

CREATE TABLE `produk_stock` (
  `id_stock` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `stock_warna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_stock`
--

INSERT INTO `produk_stock` (`id_stock`, `id_produk`, `warna`, `ukuran`, `stock_warna`) VALUES
(1, 1, 'Hitam', 'S', 10),
(2, 1, 'Hitam', 'M', 10),
(3, 1, 'Hitam', 'L', 10),
(4, 1, 'Biru', 'S', 10),
(5, 1, 'Biru', 'M', 10),
(6, 1, 'Biru', 'L', 10),
(7, 2, 'Putih', 'S', 10),
(8, 2, 'Putih', 'M', 10),
(9, 2, 'Putih', 'L', 10),
(10, 2, 'Hitam', 'S', 10),
(11, 2, 'Hitam', 'M', 10),
(12, 2, 'Hitam', 'L', 10),
(13, 3, 'Hitam', 'S', 10),
(14, 3, 'Hitam', 'M', 10),
(15, 3, 'Hitam', 'L', 10),
(16, 3, 'Putih', 'S', 10),
(17, 3, 'Putih', 'M', 10),
(18, 3, 'Putih', 'L', 10),
(19, 4, 'Merah', 'S', 10),
(20, 4, 'Merah', 'M', 10),
(21, 4, 'Merah', 'L', 10),
(22, 4, 'Hitam', 'S', 10),
(23, 4, 'Hitam', 'M', 10),
(24, 4, 'Hitam', 'L', 10),
(25, 5, 'Hitam', 'S', 10),
(26, 5, 'Hitam', 'M', 10),
(27, 5, 'Hitam', 'L', 10),
(28, 5, 'Putih', 'S', 10),
(29, 5, 'Putih', 'M', 10),
(30, 5, 'Putih', 'L', 10),
(31, 6, 'Abu - Abu', 'S', 10),
(32, 6, 'Abu - Abu', 'M', 10),
(33, 6, 'Abu - Abu', 'L', 10),
(34, 6, 'Hitam', 'S', 10),
(35, 6, 'Hitam', 'M', 10),
(36, 6, 'Hitam', 'L', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kd_cus`, `nama`, `alamat`, `no_telp`, `username`, `password`, `role`, `gambar`) VALUES
(1, '1', 'admin', 'admin', '123123', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'gambar_admin/mandom.jpg'),
(3, '3', 'user', 'asd', '2132', 'user', '12dea96fec20593566ab75692c9949596833adc9', 2, '../admin/gambar_customer/Android_Studio_icon.svg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_kon`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`nopo`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `produk_stock`
--
ALTER TABLE `produk_stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_kon` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `nopo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produk_stock`
--
ALTER TABLE `produk_stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
