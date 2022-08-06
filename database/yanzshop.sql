-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 10:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yanzshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `information` varchar(2000) NOT NULL,
  `pembayaran` varchar(200) NOT NULL,
  `pengiriman` varchar(200) NOT NULL,
  `img_pembayaran` varchar(200) NOT NULL,
  `img_pengiriman` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`information`, `pembayaran`, `pengiriman`, `img_pembayaran`, `img_pengiriman`) VALUES
('Yanz shop belanja murah meriah hanya disini dengan harga yang pantastis.', 'Dana', 'COD', 'dana.jpg', 'cod.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$v8G1zNSC.r7ytqUjdjyHR.8rfJilQW6hjxHxAlmiJwNpYQkGqInX.');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `img_barang` varchar(200) NOT NULL,
  `info_barang` varchar(1000) NOT NULL,
  `kategori_barang` varchar(200) NOT NULL,
  `harga_barang` varchar(200) NOT NULL,
  `hargadiskon_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `img_barang`, `info_barang`, `kategori_barang`, `harga_barang`, `hargadiskon_barang`) VALUES
(1, 'Baju lengan pendek pria', 'baju.png', 'Baju pria lengan pendek\nsize tersedia xxl, xl, l, m.', 'pakaian', '75000', '15000'),
(2, 'Celana jeans pria', 'jeans.jpg', 'celana jeans pria \r\nsize tersedia xxl, xl, l, m.', 'pakaian', '80000', '25000'),
(3, 'Sepatu snikers', 'sep.jpg', 'Sepatu snikers untuk pria dan wanita\r\ntersedia ukuran 38, 39, 40, 41, 42.', 'alas kaki', '90000', '34000'),
(4, 'celana lepis pria', 'lepis.jpg', 'Celana lepis pria bahan katun lembut tersedia ukuran xl l.', 'Pakaian', '80000', '25000'),
(5, 'laptop Asus ROG', 'laptop.jpg', 'Laptop asus ROG ram12gb ssd512 intel core i9 cocok untuk semua kalangan.', 'Gadget', '6000000', '300000'),
(6, 'Handphone oppo f11', '62e63a905387e.jpg', 'hp oppo f11 ram 8/128 \r\ndiskon besar besaran', 'gadget', '5000000', '250000'),
(7, 'TV Samsung led 40 in', '62e63bb79821e.jpg', 'Tv samsung led 40 in murah meria ', 'elektronik', '2000000', '1500000'),
(8, 'Kulkas sharp dua pintu', '62e63c0873fdb.jpg', 'Kulkas sharp dua pintu diskon murah meriah', 'furniture', '3500000', '1500000'),
(9, 'Sepatu Newbasket', '62e63ffded3e2.jpg', 'sepatu newbasket cocok untuk pria dan wanita tersedia ukuran 39, 40,41,42.', 'alas kaki', '80000', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `address` varchar(200) NOT NULL,
  `nophone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Pakaian'),
(2, 'Gadget'),
(3, 'Elektronik'),
(4, 'Furniture'),
(5, 'Alas kaki');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `massage` varchar(2000) NOT NULL,
  `tanggal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`id`, `nama`, `email`, `massage`, `tanggal`) VALUES
(7, 'joko', 'joko@gmail.com', 'hai yanzshop', '31.07.22'),
(8, 'udin', 'udin123@gmail.com', 'hai terimakasih yanz shop', '05.08.22'),
(9, 'ahmad', 'ahmad32@gmail.com', 'bro terimaksih barang nya sudah sampai', '05.08.22'),
(10, 'puadi', 'puadi45@gmail.com', 'makasih bang', '05.08.22');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `img_pesanan` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `barang_pesanan` varchar(200) NOT NULL,
  `nama_penerima` varchar(200) NOT NULL,
  `alamat_penerima` varchar(200) NOT NULL,
  `nomor_penerima` varchar(16) NOT NULL,
  `jumlah_pesanan` varchar(10000) NOT NULL,
  `harga_pesanan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `img_pesanan`, `status`, `barang_pesanan`, `nama_penerima`, `alamat_penerima`, `nomor_penerima`, `jumlah_pesanan`, `harga_pesanan`) VALUES
(4, 'laptop.jpg', 'proses', 'laptop Asus ROG', 'Udin', 'jl.rego km 04', '6282111952532', '2', 3000000),
(5, 'sep.jpg', 'done', 'Sepatu snikers', 'yayas', 'kp kaungcaang rt 01 rw 03', '6283119132953', '10', 34000),
(6, '62e63bb79821e.jpg', 'proses', 'TV Samsung led 40 in', 'bolang', 'kp sukamenak rt02 rw 09', '6285880001572', '5', 1500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
