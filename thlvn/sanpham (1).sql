-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2023 at 12:49 PM
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
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` text NOT NULL,
  `soluong` int NOT NULL,
  `hinh_sp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tentacgia` text NOT NULL,
  `gia` text NOT NULL,
  `chitiet` text NOT NULL,
  `theloai` int NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `theloai` (`theloai`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `soluong`, `hinh_sp`, `tentacgia`, `gia`, `chitiet`, `theloai`) VALUES
(1, 'Sách giáo khoa', 0, 'images/sach1.jpg', 'Nguyễn Khoa Điềm', '20000', 'Sách cho cấp 3', 1),
(2, 'Sach', 0, 'images/sach2.jpg', '113', '111', 'adfn', 1),
(3, 'Sách lịch sử', 0, 'images/sach3.jpg', 'Nguyễn Văn A', '50000', 'Sách về lịch sử Việt Nam', 1),
(4, 'Tiểu thuyết', 2, 'images/333.jpg', 'Kim Thanh', '80000', 'Tiểu thuyết tình yêu', 2),
(5, 'Sách kỹ năng sống', 10, 'images/sach4.jpg', 'Nguyễn Văn B', '35000', 'Sách hướng dẫn kỹ năng sống', 1),
(6, 'Truyện tranh', 8, 'images/sg1.jpg', 'Trần Thanh', '60000', 'Truyện tranh hài hước', 3),
(7, 'Sách kinh tế', 4, 'images/sgk4.jpg', 'Lê Thị C', '45000', 'Sách về kinh tế học', 2),
(8, 'Văn học cổ điển', 2, 'images/sgk3.jpg', 'Phạm Văn D', '70000', 'Tác phẩm văn học cổ điển', 4),
(9, 'Sách tham khảo', 6, 'images/SGK.jpg', 'Lê Văn E', '55000', 'Sách tham khảo cho học sinh', 1),
(10, 'Sách khoa học', 3, 'images/sgk1.jpg', 'Nguyễn Thị F', '90000', 'Sách khoa học tổng quát', 5),
(11, 'Tiểu thuyết lịch sử', 1, NULL, 'Trần Văn G', '75000', 'Tiểu thuyết lịch sử Việt Nam', 2),
(12, 'Sách ngoại ngữ', 4, 'images/888.jpg', 'Lê Văn H', '60000', 'Sách học ngoại ngữ', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`theloai`) REFERENCES `theloai` (`id_theloai`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
