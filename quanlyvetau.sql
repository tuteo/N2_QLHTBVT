-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 08:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlyvetau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chieudi`
--

CREATE TABLE IF NOT EXISTS `chieudi` (
`id` int(3) NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chieudi`
--

INSERT INTO `chieudi` (`id`, `mota`) VALUES
(1, 'Một chiều'),
(2, 'Khứ Hồi');

-- --------------------------------------------------------

--
-- Table structure for table `gaden`
--

CREATE TABLE IF NOT EXISTS `gaden` (
`id` int(11) NOT NULL,
  `tenga` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gaden`
--

INSERT INTO `gaden` (`id`, `tenga`) VALUES
(1, 'Hà nội'),
(2, 'Sài Gòn'),
(3, 'Đà Nẵng'),
(4, 'Lạng Sơn'),
(5, 'Phủ Lí'),
(6, 'Hải Dương'),
(7, 'Vinh'),
(8, 'Hạ Long'),
(9, 'Nghệ An'),
(10, 'Biên Hòa');

-- --------------------------------------------------------

--
-- Table structure for table `gadi`
--

CREATE TABLE IF NOT EXISTS `gadi` (
`id` int(3) NOT NULL,
  `tengadi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gadi`
--

INSERT INTO `gadi` (`id`, `tengadi`) VALUES
(1, 'Hà nội'),
(2, 'Sài Gòn'),
(3, 'Đà Nẵng'),
(4, 'Lạng Sơn'),
(5, 'Phủ Lí'),
(6, 'Hải Dương'),
(7, 'Vinh'),
(8, 'Hạ Long'),
(9, 'Biên Hòa'),
(10, 'Nghệ An');

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

CREATE TABLE IF NOT EXISTS `ghe` (
`id` int(255) NOT NULL,
  `soghe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `toa_id` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ghe`
--

INSERT INTO `ghe` (`id`, `soghe`, `toa_id`) VALUES
(1, '01', ''),
(2, '02', ''),
(3, '03', ''),
(4, '04', ''),
(5, '05', ''),
(6, '06', ''),
(7, '07', ''),
(8, '08', ''),
(9, '09', ''),
(10, '10', ''),
(11, '11', ''),
(12, '12', ''),
(13, '13', ''),
(14, '14', ''),
(15, '15', ''),
(16, '16', ''),
(17, '17', ''),
(18, '18', ''),
(19, '19', ''),
(20, '20', ''),
(21, '21', ''),
(22, '22', ''),
(23, '23', ''),
(24, '24', ''),
(25, '25', ''),
(26, '26', ''),
(27, '27', ''),
(28, '28', ''),
(29, '29', ''),
(30, '30', '');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
`id` int(255) NOT NULL,
  `mahd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `makh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthuctt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
`id` int(255) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenkh`, `cmt`, `ngaysinh`, `sdt`, `email`) VALUES
(1, 'Trần Trung Đức', '16858598', '1997-08-25', '0988994223', 'trantrungduc59538@gmail.com'),
(2, 'Nguyễn Duy Hiệp', '16858598', '1997-07-14', '0954369687', 'duyhiep@gmail.com'),
(4, 'Triệu Minh Long', '168505245', '1997-08-25', '0988994223', 'minhlong@gmail.com'),
(12, 'Vu Ngoc Khanh', '168642356', '0000-00-00', '0954669964', 'khanhvuht@gmail.com'),
(13, 'Trần Trung Đức', '16858598', '0000-00-00', '0988994223', 'trantrungduc59538@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lichtrinh`
--

CREATE TABLE IF NOT EXISTS `lichtrinh` (
`id` int(255) NOT NULL,
  `malichtrinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gadi_id` int(3) NOT NULL,
  `gaden_id` int(3) DEFAULT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL,
  `khoihanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matau` int(3) DEFAULT NULL,
  `chieudi` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichtrinh`
--

INSERT INTO `lichtrinh` (`id`, `malichtrinh`, `gadi_id`, `gaden_id`, `ngaydi`, `ngayve`, `khoihanh`, `matau`, `chieudi`) VALUES
(2, 'LT01', 1, 1, '2019-05-28', '2019-05-29', '12:00 AM', 4, 1),
(3, 'LT02', 1, 2, '2019-05-28', '2019-05-29', '13:00 PM', 5, 1),
(4, 'LT03', 1, 3, '2019-05-28', '2019-06-29', '8:00 AM', 6, 1),
(5, 'LT04', 1, 4, '2019-05-28', '2019-06-29', '9:00 AM', 7, 1),
(6, 'LT05', 1, 4, '2019-05-28', '2019-05-29', '11:00 AM', 8, 1),
(7, 'LT06', 1, 6, '2019-05-28', '2019-05-29', '10:00 AM', 9, 1),
(8, 'LT07', 1, 7, '2019-05-28', '2019-05-29', '13:00 PM', 10, 1),
(9, 'LT08', 1, 8, '2019-06-28', '2019-06-29', '8:00 AM', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
`id` int(255) NOT NULL,
  `manv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tennv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `manv`, `tennv`, `ngaysinh`, `sdt`, `email`) VALUES
(1, 'NV01', 'Trần Trung Đức', '1997-08-25', '0988994223', 'admin@gmail.com'),
(2, 'NV02', 'Vũ Ngọc Khánh', '1997-07-20', '0948543696', 'khanhvuht@gmail.com'),
(3, 'NV03', 'Nguyễn Việt Hưng', '1996-02-12', '0977998553', 'viethung@gmail.com'),
(4, 'NV04', 'Triệu Minh Long', '1996-04-16', '0988356225', 'minhlong@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phieudatve`
--

CREATE TABLE IF NOT EXISTS `phieudatve` (
`id` int(3) NOT NULL,
  `khachhang_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tentoa_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lichtrinh_id` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phieudatve`
--

INSERT INTO `phieudatve` (`id`, `khachhang_id`, `tentoa_id`, `ghe_id`, `lichtrinh_id`) VALUES
(1, '6', '4', '4', 2),
(9, '12', '2', '2', 2),
(10, '13', '2', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tau`
--

CREATE TABLE IF NOT EXISTS `tau` (
`id` int(255) NOT NULL,
  `matau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tentau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noixuatphat` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tau`
--

INSERT INTO `tau` (`id`, `matau`, `tentau`, `tinhtrang`, `noixuatphat`) VALUES
(4, 'T02', 'Tàu 02', '1', 'Hà Nội'),
(5, 'T03', 'Tàu 03', '1', 'Hà Nội'),
(6, 'T04', 'Tàu 04', '0', 'Hà Nội'),
(7, 'T01', 'Tàu 01', '0', 'Hà Nội'),
(8, 'T05', 'Tàu 05', '0', 'Hà Nội'),
(9, 'T06', 'Tàu 06', '0', 'Hà Nội'),
(10, 'T07', 'Tàu 07', '0', 'Hà Nội'),
(11, 'T08', 'Tàu 08', '0', 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `toa`
--

CREATE TABLE IF NOT EXISTS `toa` (
`id` int(255) NOT NULL,
  `matoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tentoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `toa`
--

INSERT INTO `toa` (`id`, `matoa`, `tentoa`, `tinhtrang`) VALUES
(2, 'A01', 'Toa A01', 'còn chỗ'),
(3, 'A02', 'Toa A02', 'còn chỗ'),
(4, 'A03', 'Toa A03', 'còn chỗ'),
(5, 'A04', 'Toa A04', 'còn chỗ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `chieudi`
--
ALTER TABLE `chieudi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaden`
--
ALTER TABLE `gaden`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadi`
--
ALTER TABLE `gadi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghe`
--
ALTER TABLE `ghe`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phieudatve`
--
ALTER TABLE `phieudatve`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tau`
--
ALTER TABLE `tau`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toa`
--
ALTER TABLE `toa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chieudi`
--
ALTER TABLE `chieudi`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gaden`
--
ALTER TABLE `gaden`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gadi`
--
ALTER TABLE `gadi`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ghe`
--
ALTER TABLE `ghe`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `phieudatve`
--
ALTER TABLE `phieudatve`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tau`
--
ALTER TABLE `tau`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `toa`
--
ALTER TABLE `toa`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
