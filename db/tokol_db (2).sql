-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 05:44 PM
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
  `status` varchar(20) NOT NULL DEFAULT 'Menuggu Konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`kode`, `tanggal`, `kd_cus`, `nama`, `size`, `color`, `model`, `gambar`, `harga`, `status`) VALUES
(3, '', '3', 'bambang', 'S', 'dark blue', 'long', '1554969925_tmp_logo_lacika_sakti.png', '', 'Menuggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_kon` int(6) NOT NULL,
  `nopo` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `bayar_via` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(10) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_kon`, `nopo`, `kd_cus`, `bayar_via`, `tanggal`, `jumlah`, `bukti_transfer`, `status`) VALUES
(6, '6', '3', 'Mandiri', '2019-06-09 03:14:18', 213123, '../admin/bukti_transfer/43-431732_clipart-royalty-free-stock-six-rainbow-circular-arrows.png', 'Bayar'),
(7, '7', '3', 'BNI', '2019-06-12 03:40:30', 213123, '../admin/bukti_transfer/about.png', 'Bayar'),
(8, '8', '3', 'BNI', '2019-06-12 18:53:08', 213123, '../admin/bukti_transfer/a3MqEXEn_700w_0.jpg', 'Bayar');

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

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`nopo`, `kd_cus`, `kode`, `id_stock`, `tanggal`, `color`, `size`, `qty`, `total`, `tgl_kirim`, `no_surat_jalan`, `tgl_terima`, `status`) VALUES
(6, '3', 30, 20, '2019-06-08 20:11:00', 'hitam', 'S', 1, 213123, '2019-06-11 04:08:38', 12323, '0000-00-00 00:00:00', 'Barang Diterima'),
(7, '3', 30, 17, '2019-06-11 20:40:08', 'asadas', 'L', 1, 213123, '2019-06-12 04:12:27', 2222, '0000-00-00 00:00:00', 'Barang Diterima'),
(8, '3', 30, 17, '2019-06-12 11:52:55', 'asadas', 'L', 1, 213123, '2019-06-12 19:23:50', 22222, '0000-00-00 00:00:00', 'Barang Diterima');

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
(5, 'Cool', 'T-Shirt', 95000, 'Cotton Combed 30s, Black Color, DTG Printing', 4, 'gambar_produk/baju8.jpg'),
(6, 'Devil Wings', 'T-Shirt', 105000, 'Cotton Combed 30s, Black Color, DTG Printing', 5, 'gambar_produk/baju9.jpg'),
(7, 'Scream', 'T-Shirt', 100000, 'Cotton Combed 30s, White Color, DTG Printing', 4, 'gambar_produk/baju10.jpg'),
(8, 'Black Dragon', 'T-Shirt', 110000, 'Cotton Combed 30s, Red Color, DTG Printing', 1, 'gambar_produk/baju11.jpg'),
(9, 'Galaxy', 'T-Shirt', 120000, 'Cotton Combed 30s, Black Color, DTG Printing', 8, 'gambar_produk/baju12.jpg'),
(10, 'Japan', 'T-Shirt', 110000, 'Cotton Combed 30s, Black Color, DTG Printing', 6, 'gambar_produk/baju14.JPG'),
(30, '2312dasdas', 'Sweater', 213123, 'asdasd', 12, 'gambar_produk/acinstr.png');

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
(17, 30, 'asadas', 'L', 19),
(18, 30, 'asdasdsd', 'S', 2),
(19, 30, 'hitam', 'L', 2),
(20, 30, 'hitam', 'S', 2);

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
(1, '1', 'admin', 'admin', '123123', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, ''),
(3, '3', 'user', 'asd', '2132', 'user', '12dea96fec20593566ab75692c9949596833adc9', 2, '../admin/gambar_customer/Android_Studio_icon.svg.png'),
(5, '5', 'asd', 'asd', '213', 'asd', 'f10e2821bbbea527ea02200352313bc059445190', 2, 'gambar_customer/acinstr.png');

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
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_kon` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `nopo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `produk_stock`
--
ALTER TABLE `produk_stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
