-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`admin_id`, `username`, `password`, `admin_status`) VALUES
(2, 'hungadmin', '201105', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table_dangky`
--

CREATE TABLE `table_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_danhmuc`
--

CREATE TABLE `table_danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_danhmuc`
--

INSERT INTO `table_danhmuc` (`id`, `tendanhmuc`, `thutu`) VALUES
(14, ' Cafe ', 0),
(15, ' Tra Sua ', 0),
(16, ' Nuoc Giai Khat ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_giohang`
--

CREATE TABLE `table_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_giohang_chitiet`
--

CREATE TABLE `table_giohang_chitiet` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_sanpham`
--

CREATE TABLE `table_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_sanpham`
--

INSERT INTO `table_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `gia`, `soluong`, `hinh`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(28, 'PHINDI CHOCO ', ' 032 ', ' 34.000 ', 1, ' phindichoco.jpg ', ' PhinDi Choco ', 1, 14),
(29, 'PHINDI SỮA ĐÁ ', ' 034 ', ' 25.000 ', 1, ' phindisuada.jpg ', ' PHINDI SUADA ', 1, 14),
(30, 'PHINDI ĐEN ĐÁ ', ' 036 ', ' 25.000 ', 1, ' phindidenda.jpg ', ' PHINDI ĐEN ĐÁ ', 1, 14),
(31, 'BẠC XỈU ', ' 038 ', ' 25.000 ', 1, ' bacxiu.jpg ', ' Bạc xỉu ', 1, 14),
(32, 'PHINDI KEM SỮA ', ' 040 ', ' 34.000 ', 1, ' phindikemsua.jpg ', ' PHINDI KEM SUA ', 1, 14),
(33, 'TRÀ SỮA MATCHA ', ' 050 ', ' 34.000 ', 1, ' trasuamatcha.jpg ', ' MATCHA ', 1, 15),
(34, 'TRÀ SỮA TRUYỀN THỐNG ', ' 051 ', ' 25.000 ', 1, ' trasuatruyenthong.jpg ', ' TRÀ SỮA TRUYỀN THỐNG ', 1, 15),
(36, 'SỮA TƯƠI TRÂN CHÂU ', ' 052 ', ' 34.000 ', 1, ' SUATUOITRANCHAU.jpg ', ' TRÂN CHÂU ĐƯỜNG ĐEN ', 1, 15),
(37, 'MONSTER ', ' 061 ', ' 34.000 ', 1, ' monster.jpg ', ' nước giải khát ', 1, 16),
(38, 'MONSTER 2 ', ' 062 ', ' 34.000 ', 1, ' monster1.jpg ', ' nước giải khát ', 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `table_dangky`
--
ALTER TABLE `table_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `table_danhmuc`
--
ALTER TABLE `table_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_giohang`
--
ALTER TABLE `table_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `table_giohang_chitiet`
--
ALTER TABLE `table_giohang_chitiet`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Indexes for table `table_sanpham`
--
ALTER TABLE `table_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_dangky`
--
ALTER TABLE `table_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `table_danhmuc`
--
ALTER TABLE `table_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table_giohang`
--
ALTER TABLE `table_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_giohang_chitiet`
--
ALTER TABLE `table_giohang_chitiet`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `table_sanpham`
--
ALTER TABLE `table_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
