-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2023 at 12:50 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db.websellsshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `giay_xlsx___sheet1`
--

DROP TABLE IF EXISTS `giay_xlsx___sheet1`;
CREATE TABLE IF NOT EXISTS `giay_xlsx___sheet1` (
  `COL 1` varchar(9) DEFAULT NULL,
  `COL 2` varchar(15) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL,
  `COL 4` varchar(10) DEFAULT NULL,
  `COL 5` int DEFAULT NULL,
  `COL 6` varchar(8) DEFAULT NULL,
  `COL 7` varchar(8) DEFAULT NULL,
  `COL 8` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `giay_xlsx___sheet1`
--

INSERT INTO `giay_xlsx___sheet1` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`) VALUES
('adidas100', 'adidas xinh xiu', 'adidas', 'jd_100.jpg', 100000, 'việt nam', 'thể thao', 1),
('jobdan100', 'jobdan lịch lãm', 'jobdan', 'jd_100.jpg', 100000, 'việt nam', 'thể thao', 2);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `tensp` varchar(50) NOT NULL,
  `soluong` int NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `kichco` int NOT NULL,
  `giaban` int NOT NULL,
  `username` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`tensp`, `soluong`, `mausac`, `kichco`, `giaban`, `username`, `id`) VALUES
('convan  thoi trang nam', 3, 'trắng', 41, 0, 'a', 35),
('convan  thoi trang nam', 3, 'trắng', 41, 0, 'a', 32),
('convan  thoi trang nam', 3, 'trắng', 41, 0, 'a', 33),
('convan  thoi trang nam', 3, 'trắng', 41, 0, 'a', 34);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonsell`
--

DROP TABLE IF EXISTS `hoadonsell`;
CREATE TABLE IF NOT EXISTS `hoadonsell` (
  `madonmua` int NOT NULL AUTO_INCREMENT,
  `magiay` text NOT NULL,
  `tengiay` varchar(50) NOT NULL,
  `soluong` int NOT NULL,
  `kichco` int NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `giaban` int NOT NULL,
  PRIMARY KEY (`madonmua`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hoadonsell`
--

INSERT INTO `hoadonsell` (`madonmua`, `magiay`, `tengiay`, `soluong`, `kichco`, `mausac`, `username`, `giaban`) VALUES
(7, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0),
(8, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0),
(9, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0),
(10, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0),
(14, 'af250', 'airfor nam tinh lịch lãm', 15, 42, 'đen', 'a', 0),
(15, 'cv290', 'convan  thoi trang nam', 1, 42, 'đen', 'a', 0),
(18, 'cv290', 'convan  thoi trang nam', 2, 42, 'đen', 'a', 0),
(19, 'cv290', 'convan  thoi trang nam', 2, 42, 'đen', 'a', 0),
(20, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(21, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(22, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(23, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(24, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(25, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(26, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(27, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(28, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(29, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(30, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(31, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(32, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(33, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(34, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(35, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(36, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(37, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(38, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(39, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(40, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(41, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(42, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(43, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(44, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(45, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(46, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(47, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0),
(48, 'cv290', 'convan  thoi trang nam', 3, 41, 'trắng', 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonselled`
--

DROP TABLE IF EXISTS `hoadonselled`;
CREATE TABLE IF NOT EXISTS `hoadonselled` (
  `madonmua` int NOT NULL,
  `magiay` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tengiay` varchar(50) NOT NULL,
  `soluong` int NOT NULL,
  `kichco` int NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `giaban` int NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hoadonselled`
--

INSERT INTO `hoadonselled` (`madonmua`, `magiay`, `tengiay`, `soluong`, `kichco`, `mausac`, `username`, `giaban`, `ngayban`, `tongtien`) VALUES
(2, 'af150', 'airforce xinh xiu', 2, 40, 'đen', 'a', 20150000, '0000-00-00', 300000),
(2, 'af150', 'airforce xinh xiu', 2, 40, 'đen', 'a', 20150000, '0000-00-00', 300000),
(2, 'af150', 'airforce xinh xiu', 2, 40, 'đen', 'a', 20150000, '0000-00-00', 300000),
(2, 'af150', 'airforce xinh xiu', 2, 40, 'đen', 'a', 20150000, '0000-00-00', 300000),
(2, 'af150', 'airforce xinh xiu', 2, 40, 'đen', 'a', 20150000, '0000-00-00', 300000),
(0, 'af150', 'airfocrce xinh xiu', 3, 40, 'đen', 'a', 150000, '2023-11-29', 450000),
(0, '[value-2]', '[value-3]', 0, 0, '[value-6]', '[value-7]', 0, '2023-12-30', 0),
(0, '[value-2]', '[value-3]', 0, 0, '[value-6]', '[value-7]', 0, '2023-11-14', 100000),
(3, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0, '0000-00-00', 0),
(13, 'cv290', 'convan  thoi trang nam', 1, 42, 'đen', 'a', 0, '0000-00-00', 0),
(12, 'af250', 'airfor nam tinh lịch lãm', 1, 42, 'đen', 'a', 0, '0000-00-00', 0),
(11, 'cv290', 'convan  thoi trang nam', 1, 42, 'xám', 'a', 0, '0000-00-00', 0),
(16, 'af250', 'airfor nam tinh lịch lãm', 15, 42, 'đen', 'a', 0, '0000-00-00', 0),
(17, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0, '0000-00-00', 0),
(4, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0, '0000-00-00', 0),
(5, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0, '2023-12-01', 0),
(6, 'cv290', 'convan  thoi trang nam', 1, 41, 'trắng', 'a', 0, '2023-12-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khohang`
--

DROP TABLE IF EXISTS `khohang`;
CREATE TABLE IF NOT EXISTS `khohang` (
  `masp` text NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `thuonghieu` text NOT NULL,
  `anhgiay` text NOT NULL,
  `giaban` int NOT NULL,
  `nuocsx` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `theloai` varchar(30) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tensp`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khohang`
--

INSERT INTO `khohang` (`masp`, `tensp`, `thuonghieu`, `anhgiay`, `giaban`, `nuocsx`, `theloai`, `id`) VALUES
('af150', 'airforce xinh xiu', 'airforce', '1_airforce_150.jpg', 250000, 'việt nam', 'thể thao', 1),
('af168', 'airforce hot trend', 'airforce', '2_airforce_168.jpg', 168000, 'Việt nam', 'đi chơi', 2),
('af179', 'airforce thời trang', 'airforce', '3_airforce_179.jpg', 179000, 'mỹ', 'đi tiệc', 3),
('af250', 'airforce trắng đen', 'airforce', '4_airforce_250.jpg', 250000, 'việt nam', 'thể thao', 4),
('af315', 'airforce thời trang hot', 'airforce', '5_airforce_315.jpg', 315000, 'mỹ', 'đi chơi', 5),
('af325', 'airforce lịch lãm', 'airforce', '6_airforce_325.jpg', 325000, 'việt nam', 'thể thao', 6),
('af465', 'airforce xinh đẹp', 'airforce', '7_airforce_465.jpg', 465000, 'china', 'đi tiệc', 7),
('af490', 'airforce cao cấp', 'airforce', '8_airforce_490.jpg', 490000, 'janpan', 'thể thao', 8),
('af169', 'airforce xinh tươi', 'airforce', '9_airforce_169.jpg', 169000, 'janpan', 'đi chơi', 9),
('af265', 'airforce đẹp', 'airforce', '10_airforce_265.jpg', 265000, 'china', 'đi tiệc', 10),
('af359', 'airforce lông chuột', 'airforce', '11_airforce_359.jpg', 359000, 'china', 'đi chơi', 11),
('af389', 'airforce nâu', 'airforce', '12_airforce_389.jpg', 389000, 'janpan', 'đi tiệc', 12),
('af250', 'airfor nam tinh lịch lãm', 'airforce', '4_airforce_250.jpg', 10000, 'đi chơi', 'Việt Nam', 1),
(' cv290 ', 'convan  thoi trang nam', ' convan', '', 200000, ' đi chơi', ' Việt Nam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khosoluong`
--

DROP TABLE IF EXISTS `khosoluong`;
CREATE TABLE IF NOT EXISTS `khosoluong` (
  `tensp` varchar(50) NOT NULL,
  `color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `size` int NOT NULL,
  `soluong` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khosoluong`
--

INSERT INTO `khosoluong` (`tensp`, `color`, `size`, `soluong`, `id`) VALUES
('convan  thoi trang nam', 'trắng', 41, 5, 12),
('airfor nam tinh lịch lãm', 'trắng ', 41, 10, 9),
('convan  thoi trang nam', 'xám', 42, 6, 13),
('convan  thoi trang nam', 'đen', 42, 5, 14);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `numberphone` int NOT NULL,
  `site` varchar(50) NOT NULL,
  `identify` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `fullname`, `numberphone`, `site`, `identify`) VALUES
('a', 'a', 'a', 1, 'a', 1),
('aa', 'a', 'a', 0, 'a', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
