-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2015 at 03:41 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `luanvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bddvmoi`
--

CREATE TABLE IF NOT EXISTS `bddvmoi` (
  `DOTBD` int(11) NOT NULL,
  `NGAYBD` date NOT NULL,
  `NGAYKT` date NOT NULL,
  `GHICHU` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `camtinhdang`
--

CREATE TABLE IF NOT EXISTS `camtinhdang` (
`STTCTD` int(11) NOT NULL,
  `MACB` int(11) NOT NULL,
  `THANGNAM` varchar(7) CHARACTER SET utf8 NOT NULL,
  `HOVATEN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `DOANVIEN` tinyint(1) DEFAULT NULL,
  `NGAYCONGNHANCTD` date NOT NULL,
  `CHUNGNHANCTD` date DEFAULT NULL,
  `LLNHAP` tinyint(1) DEFAULT NULL,
  `CBTHONGQUA` tinyint(1) DEFAULT NULL,
  `LLCHINH` tinyint(1) DEFAULT NULL,
  `XACMINH` tinyint(1) DEFAULT NULL,
  `YKIENCUTRU` tinyint(1) DEFAULT NULL,
  `YKIENDOANTHE` tinyint(1) DEFAULT NULL,
  `GIAYGTDANGVIEN` tinyint(1) DEFAULT NULL,
  `GIAYGTDOANTHE` tinyint(1) DEFAULT NULL,
  `XETKETNAP` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `CHUYENDANGUY` tinyint(1) DEFAULT NULL,
  `NGUOIHD` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `caphhd`
--

CREATE TABLE IF NOT EXISTS `caphhd` (
  `MADANGVIEN` int(11) NOT NULL,
  `STTCAPHHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `capthedang`
--

CREATE TABLE IF NOT EXISTS `capthedang` (
  `MADANGVIEN` int(11) NOT NULL,
  `STTCAPTHE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chibo`
--

CREATE TABLE IF NOT EXISTS `chibo` (
`MACB` int(11) NOT NULL,
  `TENCB` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `chibo`
--

INSERT INTO `chibo` (`MACB`, `TENCB`) VALUES
(1, 'Chi bộ Sinh viên'),
(2, 'Chi bộ Công nghệ phần mềm'),
(3, 'Chi bộ hệ thống thông tin'),
(4, 'Chi bộ Mạng máy tính và Truyền thông');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE IF NOT EXISTS `chucvu` (
`MACV` int(11) NOT NULL,
  `TENCV` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MACV`, `TENCV`) VALUES
(1, 'Bí thư Chi bộ'),
(2, 'Bí thư Đảng ủy'),
(3, 'Ủy viên ban chấp hành'),
(4, 'Chi ủy'),
(7, 'Phó Bí thư Đảng bộ'),
(8, 'Phó bí thư chi bộ');

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmon`
--

CREATE TABLE IF NOT EXISTS `chuyenmon` (
`MACM` int(11) NOT NULL,
  `TENCM` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chuyenmon`
--

INSERT INTO `chuyenmon` (`MACM`, `TENCM`) VALUES
(1, 'Kỹ sư CNTT'),
(2, 'Giảng viên CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `co_tdnn`
--

CREATE TABLE IF NOT EXISTS `co_tdnn` (
  `MADANGVIEN` int(11) NOT NULL,
  `MANGOAINGU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `co_tdnn`
--

INSERT INTO `co_tdnn` (`MADANGVIEN`, `MANGOAINGU`) VALUES
(53, 1),
(55, 1),
(57, 1),
(58, 1),
(58, 2),
(58, 3),
(57, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cvden`
--

CREATE TABLE IF NOT EXISTS `cvden` (
`STTCVDEN` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `TENCVDEN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NOIGOIDEN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `TAPHSLUU` varchar(20) CHARACTER SET utf8 NOT NULL,
  `GHICHUCVDEN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `SOCV` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cvden`
--

INSERT INTO `cvden` (`STTCVDEN`, `NGAY`, `TENCVDEN`, `NOIGOIDEN`, `TAPHSLUU`, `GHICHUCVDEN`, `SOCV`) VALUES
(2, '0000-00-00', 'Công văn 1', 'Đảng bộ trường', '1', '', 1),
(3, '2015-03-12', 'Công Văn 2', 'Đảng bộ trường', '1', 'Ghi chú', 2),
(4, '2012-03-12', 'Công Văn 3', 'Đảng bộ trường', '1', 'Ghi chú', 3),
(5, '2010-03-12', 'Công Văn 4', 'Đảng bộ trường', '1', 'Ghi chú', 4),
(6, '2015-03-12', 'Công văn 3', 'Đảng bộ trường', '1', 'Gửi lên web', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cvdi`
--

CREATE TABLE IF NOT EXISTS `cvdi` (
`SOCVDI` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `TENCVDI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGAYGOI` date NOT NULL,
  `NOIGOIDI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `GHICHUCVDI` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `NGUOIGOICV` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cvdi`
--

INSERT INTO `cvdi` (`SOCVDI`, `NGAY`, `TENCVDI`, `NGAYGOI`, `NOIGOIDI`, `GHICHUCVDI`, `NGUOIGOICV`) VALUES
(1, '1970-01-01', 'Công văn đi 1', '2015-03-12', 'Đảng bộ trường Đại học Cần Thơ', 'Khẩn', 'Đoàn Hòa Minh'),
(2, '2015-03-12', 'Công văn đi 2', '2015-12-03', 'Đảng bộ trường Đại học Cần Thơ', 'Khẩn', 'Đoàn Hòa Minh');

-- --------------------------------------------------------

--
-- Table structure for table `dangphi`
--

CREATE TABLE IF NOT EXISTS `dangphi` (
  `THANGNAM` varchar(7) CHARACTER SET utf8 NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `SOTIEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangvien`
--

CREATE TABLE IF NOT EXISTS `dangvien` (
`MADANGVIEN` int(11) NOT NULL,
  `MANV` int(11) DEFAULT NULL,
  `MAPX` int(11) NOT NULL,
  `PHU_MAPX` int(11) NOT NULL,
  `PHU_MAPX3` int(11) NOT NULL,
  `MADT` int(11) NOT NULL,
  `MANN` int(11) NOT NULL,
  `MAHOCVI` int(11) DEFAULT NULL,
  `MACM` int(11) DEFAULT NULL,
  `MATRINHDOVH` int(11) NOT NULL,
  `MATONGIAO` int(11) DEFAULT NULL,
  `MAHOCHAM` int(11) DEFAULT NULL,
  `PHU_MAPX2` int(11) DEFAULT NULL,
  `HOTENKHAISINH` varchar(100) CHARACTER SET utf8 NOT NULL,
  `HOTENSUDUNG` varchar(100) CHARACTER SET utf8 NOT NULL,
  `BIDANH` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `GIOITINH` tinyint(1) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `CMND` int(11) NOT NULL,
  `THAMGIACM` date DEFAULT NULL,
  `SUCKHOE` varchar(10) CHARACTER SET utf8 NOT NULL,
  `GDLIETSI` tinyint(1) DEFAULT NULL,
  `COCONGCM` tinyint(1) DEFAULT NULL,
  `NGUOIGT1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CVNGUOIGT1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGUOIGT2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CVNGUOIGT2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `HINHANH` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `XOA` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=67 ;

--
-- Dumping data for table `dangvien`
--

INSERT INTO `dangvien` (`MADANGVIEN`, `MANV`, `MAPX`, `PHU_MAPX`, `PHU_MAPX3`, `MADT`, `MANN`, `MAHOCVI`, `MACM`, `MATRINHDOVH`, `MATONGIAO`, `MAHOCHAM`, `PHU_MAPX2`, `HOTENKHAISINH`, `HOTENSUDUNG`, `BIDANH`, `GIOITINH`, `NGAYSINH`, `CMND`, `THAMGIACM`, `SUCKHOE`, `GDLIETSI`, `COCONGCM`, `NGUOIGT1`, `CVNGUOIGT1`, `NGUOIGT2`, `CVNGUOIGT2`, `HINHANH`, `EMAIL`, `SDT`, `XOA`) VALUES
(3, NULL, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, 'Nguyễn Hồng Nhung', 'Nguyễn Hồng Nhung', '', 0, '2015-03-17', 111111111, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Phó bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '2.jpg', 'nhung@nhung.com', '01667666181', 0),
(8, NULL, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, 'Bùi Văn Chung', 'Bùi Văn Chung', '', 1, '2015-03-11', 111111222, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Phó bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'avatar1.jpg', 'nhung@nhung.com', '01667666181', 0),
(9, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Tạ Quang Thắng', 'Tạ Quang Thắng', '', 1, '2015-03-01', 987645671, NULL, 'Tốt', 0, 0, 'Võ Huỳnh Trâm', 'Ủy viên BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'Penguins.jpg', '', '', 0),
(11, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Trần Tinh Tinh', 'Trần Tinh Tinh', '', 1, '2015-03-02', 123456789, NULL, 'Tốt', 0, 0, 'Tạ Quang Thắng', 'Ủy viên BCH Đảng ủy', 'Công Đoàn Khoa CNTT&TT', '', 'Chrysanthemum.jpg', '', '', 0),
(13, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn An An', 'Nguyễn An An', '', 1, '2015-03-10', 123422332, NULL, 'Tốt', 0, 0, 'Tạ Quang Thắng', 'Ủy viên BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'Desert.jpg', '', '', 1),
(15, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Trần Bình Minh', 'Trần Bình Minh', '', 1, '2015-03-23', 123433332, NULL, 'Tốt', 0, 0, 'Trần Minh Chiến', 'Ủy viên BCH Đảng ủy', 'Tạ Quang Thắng', 'Ủy viên BCH Đảng ủy', 'Hydrangeas.jpg', '', '', 0),
(16, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Lê Cam Quýt', 'Lê Cam Quýt', '', 1, '2015-03-29', 123412126, NULL, 'Tốt', 0, 0, 'Trần Minh Chiến', 'Ủy viên BCH Đảng ủy', 'Tạ Quang Thắng', 'Ủy viên BCH Đảng ủy', 'Jellyfish.jpg', '', '', 0),
(18, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Trần Văn Nam', 'Trần Văn Nam', '', 1, '2015-03-24', 123123123, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(19, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Nguyễn Hồng Phúc', 'Nguyễn Hồng Phúc', '', 1, '2015-03-23', 123123124, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(20, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Đường Trường Sơn', 'Đường Trường Sơn', '', 1, '2015-03-01', 123123125, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(21, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Tạ Viết Quang', 'Tạ Viết Quang', '', 1, '2015-03-31', 123123126, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(22, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Nguyễn Duy Khánh', 'Nguyễn Duy Khánh', '', 1, '2015-03-24', 123123127, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(23, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Trần Quang Khải', 'Trần Quang Khải', '', 1, '2015-03-10', 123123128, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(25, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Nguyễn Kim Thủy', 'Nguyễn Kim Thủy', '', 0, '2015-03-02', 123123129, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(26, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Thái Bá Dũng', 'Thái Bá Dũng', '', 1, '2015-03-24', 123123130, NULL, '', NULL, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '4P3m161zWzWaaK0zLBHv.JPG', 'nam@gmail.com', '01678114111', 0),
(29, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Lan Anh', 'Nguyễn Lan Anh', '', 1, '2015-03-04', 121212111, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(30, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Đỗ Hữu Trí', 'Đỗ Hữu Trí', '', 1, '2015-03-10', 121212112, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(32, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Hồ Sơn Lâm', 'Hồ Sơn Lâm', '', 1, '2015-03-11', 123452234, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(33, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Lê Thanh Hà', 'Lê Thanh Hà', '', 1, '2015-03-09', 123452125, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(34, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Lê Hồng Sơn', 'Lê Hồng Sơn', '', 1, '0000-00-00', 123123333, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(36, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Dương Kim Thoa', 'Dương Kim Thoa', '', 0, '2015-03-25', 123123456, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(37, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Quốc Tiệp', 'Nguyễn Quốc Tiệp', '', 1, '2015-03-30', 123123457, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(38, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Thị Trợ', 'Nguyễn Thị Trợ', '', 0, '2015-03-31', 123123458, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(39, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Văn Hậu', 'Nguyễn Văn Hậu', '', 1, '2015-03-03', 123123459, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(41, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Phan Song Ngân', 'Phan Song Ngân', '', 0, '2015-03-09', 123123460, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(43, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Vũ Hoàng Giang', 'Vũ Hoàng Giang', '', 1, '2015-03-10', 123451222, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(44, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Triệu Đình Nam', 'Triệu Đình Nam', '', 1, '2015-03-25', 36595100, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(45, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Anh Đức', 'Nguyễn Anh Đức', '', 1, '2015-03-04', 36595101, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(46, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Trần Văn Nghĩa', 'Trần Văn Nghĩa', '', 1, '2015-03-13', 123123200, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(47, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Trần Bảo Ngọc', 'Trần Bảo Ngọc', '', 0, '2015-03-02', 123123201, NULL, '', NULL, NULL, '', '', '', '', '4P3m161zWzWaaK0zLBHv.JPG', '', '', 0),
(51, 1, 2, 2, 2, 1, 2, 1, 1, 1, NULL, 1, NULL, 'Nguyễn Quốc Thái', 'Nguyễn Quốc Thái', '', 1, '2015-03-24', 365951213, NULL, 'Tốt', 0, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', 'Bí thư đoàn khoa', 'tải xuống.jpg', 'an@gmail.com', '01600000000', 0),
(52, 1, 2, 2, 2, 1, 2, 1, 1, 1, NULL, 1, NULL, 'Vương Thị Ngọc Lan', 'Vương Thị Ngọc Lan', '', 0, '2015-03-24', 365951214, NULL, 'Tốt', 0, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', 'Bí thư đoàn khoa', 'tải xuống.jpg', 'an@gmail.com', '01600000000', 0),
(53, 1, 2, 2, 2, 1, 2, 1, 1, 1, NULL, 1, NULL, 'Phạm Lan Thi', 'Phạm Lan Thi', '', 0, '2015-03-24', 365951215, NULL, 'Tốt', 0, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', 'Bí thư đoàn khoa', 'tải xuống.jpg', 'an@gmail.com', '01600000000', 0),
(55, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, NULL, 'Nguyễn Thị Bình', 'Nguyễn Thị Bình', '', 0, '1970-01-01', 361212126, NULL, 'Tốt', 0, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', 'Bí thư đoàn khoa', 'tải xuống.jpg', 'nam@gmail.com', '01678114111', 0),
(56, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, NULL, 'Trần Mai Hoa', 'Trần Mai Hoa', '', 0, '1970-01-01', 361212127, NULL, 'Tốt', 0, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', 'Bí thư đoàn khoa', 'tải xuống.jpg', 'nam@gmail.com', '01678114111', 0),
(57, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, NULL, 'Nguyễn Ánh Chính', 'Nguyễn Ánh Chính', '', 1, '1970-01-01', 361212128, NULL, 'Tốt', 0, NULL, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', 'Bí thư đoàn khoa', 'tải xuống.jpg', 'nam@gmail.com', '01678114111', 0),
(58, 1, 3, 3, 3, 2, 1, 1, 1, 1, 2, 1, NULL, 'Nguyễn Chí Tâm', 'Nguyễn Chí Tâm', 'Bò', 1, '1970-01-01', 361212130, '0000-00-00', 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Võ Tấn Tài', 'Bí thư đoàn khoa', '2.jpg', 'nam@gmail.com', '01678114111', 0),
(59, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Hoài Nam', 'Nguyễn Hoài Nam', '', 1, '2015-03-24', 123333333, NULL, '', NULL, NULL, '', '', '', '', '1.jpg', '', '', 0),
(66, 1, 3, 3, 3, 3, 2, 3, 1, 1, 2, 1, 1, 'Nguyễn Quí Nghĩa', 'Nguyễn Quí Nghĩa', '', 1, '2015-03-24', 365431231, NULL, 'Khá', NULL, NULL, 'Nguyễn Văn A', 'Bí thư BCH Đảng ủy', 'Công Đoàn Khoa CNTT&TT', '', '2.jpg', 'nguyenchitam1993@gmail.com', '01658000057', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dantoc`
--

CREATE TABLE IF NOT EXISTS `dantoc` (
`MADT` int(11) NOT NULL,
  `TENDT` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dantoc`
--

INSERT INTO `dantoc` (`MADT`, `TENDT`) VALUES
(1, 'Kinh'),
(2, 'Khme'),
(3, 'Hoa');

-- --------------------------------------------------------

--
-- Table structure for table `dinuocngoai`
--

CREATE TABLE IF NOT EXISTS `dinuocngoai` (
`STT` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `QUOCGIA` varchar(20) CHARACTER SET utf8 NOT NULL,
  `LYDODI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGAYDI` date NOT NULL,
  `NGAYVE` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `dinuocngoai`
--

INSERT INTO `dinuocngoai` (`STT`, `MADANGVIEN`, `QUOCGIA`, `LYDODI`, `NGAYDI`, `NGAYVE`) VALUES
(1, 56, 'Mỹ', 'Học', '2015-03-25', '2015-03-24'),
(2, 57, 'Mỹ', 'Học', '2015-03-25', '2015-03-24'),
(57, 58, 'Mỹ', 'Học', '2015-03-25', '2015-03-24'),
(58, 58, 'Anh', 'Học', '2015-03-25', '2015-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `doantncshcm`
--

CREATE TABLE IF NOT EXISTS `doantncshcm` (
`STTVAODOAN` int(11) NOT NULL,
  `NGAYVAODOAN` date NOT NULL,
  `NOIVAODOAN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MADANGVIEN` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doantncshcm`
--

INSERT INTO `doantncshcm` (`STTVAODOAN`, `NGAYVAODOAN`, `NOIVAODOAN`, `MADANGVIEN`) VALUES
(2, '2015-03-24', 'Trường THCS Mang Thít', 58),
(3, '2015-03-03', 'asdasd', 56),
(4, '2015-03-24', 'Trường THPT XXX', 66);

-- --------------------------------------------------------

--
-- Table structure for table `dscaphhd`
--

CREATE TABLE IF NOT EXISTS `dscaphhd` (
`STTCAPHHD` int(11) NOT NULL,
  `LOAICAPHHD` int(11) NOT NULL,
  `DOTCAPHHD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dscapthedang`
--

CREATE TABLE IF NOT EXISTS `dscapthedang` (
`STTCAPTHE` int(11) NOT NULL,
  `LOAICAPTHE` int(11) NOT NULL,
  `DOTCAPTHE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `giucv`
--

CREATE TABLE IF NOT EXISTS `giucv` (
  `MANHIEMKY` int(11) NOT NULL,
  `MACV` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `NGAYGIUCV` date DEFAULT NULL,
  `NGAYTHOICV` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `giucv`
--

INSERT INTO `giucv` (`MANHIEMKY`, `MACV`, `MADANGVIEN`, `NGAYGIUCV`, `NGAYTHOICV`) VALUES
(1, 1, 3, NULL, NULL),
(1, 1, 11, NULL, NULL),
(1, 1, 13, NULL, NULL),
(1, 1, 58, NULL, NULL),
(1, 3, 59, NULL, NULL),
(1, 4, 16, NULL, NULL),
(1, 8, 8, NULL, NULL),
(1, 8, 9, NULL, NULL),
(1, 8, 15, NULL, NULL),
(1, 8, 66, NULL, NULL),
(2, 1, 8, NULL, NULL),
(2, 8, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hinhthuckl`
--

CREATE TABLE IF NOT EXISTS `hinhthuckl` (
`MAHTKL` int(11) NOT NULL,
  `TENHTKL` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hinhthuckl`
--

INSERT INTO `hinhthuckl` (`MAHTKL`, `TENHTKL`) VALUES
(1, 'Khiển trách'),
(2, 'Cảnh cáo');

-- --------------------------------------------------------

--
-- Table structure for table `hinhthuckt`
--

CREATE TABLE IF NOT EXISTS `hinhthuckt` (
`MAHTKT` int(11) NOT NULL,
  `TENHTKT` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hinhthuckt`
--

INSERT INTO `hinhthuckt` (`MAHTKT`, `TENHTKT`) VALUES
(1, 'Biểu dương'),
(2, 'Tặng giấy khen');

-- --------------------------------------------------------

--
-- Table structure for table `hocham`
--

CREATE TABLE IF NOT EXISTS `hocham` (
`MAHOCHAM` int(11) NOT NULL,
  `TENHOCHAM` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hocham`
--

INSERT INTO `hocham` (`MAHOCHAM`, `TENHOCHAM`) VALUES
(1, 'Phó giáo sư'),
(2, 'Giáo sư');

-- --------------------------------------------------------

--
-- Table structure for table `hocvi`
--

CREATE TABLE IF NOT EXISTS `hocvi` (
`MAHOCVI` int(11) NOT NULL,
  `TENHOCVI` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hocvi`
--

INSERT INTO `hocvi` (`MAHOCVI`, `TENHOCVI`) VALUES
(1, 'Tiến sĩ'),
(2, 'Thạc sĩ'),
(3, 'Tiến sĩ khoa học');

-- --------------------------------------------------------

--
-- Table structure for table `huyhieudang`
--

CREATE TABLE IF NOT EXISTS `huyhieudang` (
`MAHH` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `TENHH` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGAYCAPHH` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `huyhieudang`
--

INSERT INTO `huyhieudang` (`MAHH`, `MADANGVIEN`, `TENHH`, `NGAYCAPHH`) VALUES
(1, 53, '30 năm tuổi đảng', '2015-03-25'),
(64, 58, '30 năm tuổi đảng', '2015-03-18'),
(65, 58, '40 năm tuổi Đảng', '2015-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `khenthuongcb`
--

CREATE TABLE IF NOT EXISTS `khenthuongcb` (
  `MAHTKT` int(11) NOT NULL,
  `MACB` int(11) NOT NULL,
  `NAM` int(11) NOT NULL,
  `LYDOKTCB` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khenthuongdv`
--

CREATE TABLE IF NOT EXISTS `khenthuongdv` (
  `MADANGVIEN` int(11) NOT NULL,
  `MAHTKT` int(11) NOT NULL,
  `NAM` int(11) NOT NULL,
  `NGAYLAPKT` date NOT NULL,
  `CAPQUYETDINH` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khenthuongdv`
--

INSERT INTO `khenthuongdv` (`MADANGVIEN`, `MAHTKT`, `NAM`, `NGAYLAPKT`, `CAPQUYETDINH`) VALUES
(3, 1, 1970, '1970-01-01', 'dabf'),
(8, 1, 1999, '1999-11-25', 'Đảng ủy'),
(19, 1, 2015, '0000-00-00', 'Đảng ủy'),
(21, 1, 2015, '0000-00-00', 'Đảng ủy'),
(23, 1, 2015, '0000-00-00', 'Đảng ủy'),
(25, 1, 2015, '0000-00-00', 'Đảng ủy'),
(26, 1, 2015, '0000-00-00', 'Đảng ủy'),
(51, 1, 2015, '2015-03-25', 'dabf'),
(52, 1, 2015, '2015-03-25', 'dabf'),
(53, 1, 2015, '2015-03-25', 'dabf'),
(55, 1, 0, '1970-01-01', 'Đảng ủy'),
(56, 1, 0, '1970-01-01', 'Đảng ủy'),
(58, 1, 2014, '2014-06-10', 'Đảng ủy'),
(58, 1, 2015, '2015-03-31', 'Đảng ủy nè');

-- --------------------------------------------------------

--
-- Table structure for table `kyluat`
--

CREATE TABLE IF NOT EXISTS `kyluat` (
  `MADANGVIEN` int(11) NOT NULL,
  `MAHTKL` int(11) NOT NULL,
  `NAM` int(11) NOT NULL,
  `LYDOKLDV` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `kyluat`
--

INSERT INTO `kyluat` (`MADANGVIEN`, `MAHTKL`, `NAM`, `LYDOKLDV`) VALUES
(53, 1, 2015, 'Không đi họp'),
(55, 1, 0, 'Không đi họp'),
(56, 1, 0, 'Không đi họp'),
(58, 1, 1970, 'Không đi họp'),
(58, 1, 2015, 'Không đi họp');

-- --------------------------------------------------------

--
-- Table structure for table `luongcb`
--

CREATE TABLE IF NOT EXISTS `luongcb` (
`STTLUONGCB` int(11) NOT NULL,
  `LUONGCB` int(11) DEFAULT NULL,
  `DAXOA` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `luongcb`
--

INSERT INTO `luongcb` (`STTLUONGCB`, `LUONGCB`, `DAXOA`) VALUES
(1, 1150000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lylich`
--

CREATE TABLE IF NOT EXISTS `lylich` (
  `MADANGVIEN` int(11) NOT NULL,
  `DOTBD` int(11) DEFAULT NULL,
  `MACB` int(11) NOT NULL,
  `STTVAODOAN` int(11) DEFAULT NULL,
  `MATRINHDOCT` int(11) NOT NULL,
  `SOLL` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `MIENCT_SHD` date DEFAULT NULL,
  `NGAYVAODANG` date DEFAULT NULL,
  `CBVAODANG` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `NGAYVAODANGCHINHTHUC` date DEFAULT NULL,
  `NGHENGHIEPTRUOCKHIVAODANG` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `HSLUONG` float DEFAULT NULL,
  `HSCHUCVU` float DEFAULT NULL,
  `HSTHAMNIEN` float DEFAULT NULL,
  `HSVUOTKHUNG` float DEFAULT NULL,
  `CBVAODANGCHINHTHUC` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `lylich`
--

INSERT INTO `lylich` (`MADANGVIEN`, `DOTBD`, `MACB`, `STTVAODOAN`, `MATRINHDOCT`, `SOLL`, `MIENCT_SHD`, `NGAYVAODANG`, `CBVAODANG`, `NGAYVAODANGCHINHTHUC`, `NGHENGHIEPTRUOCKHIVAODANG`, `HSLUONG`, `HSCHUCVU`, `HSTHAMNIEN`, `HSVUOTKHUNG`, `CBVAODANGCHINHTHUC`) VALUES
(3, NULL, 2, NULL, 1, '100000CTF', '1970-01-01', '2015-03-02', 'Hệ thống thông tin', NULL, '1', 3, 0.5, 0.01, 0.05, ''),
(8, NULL, 2, NULL, 1, '100001CTF', '1970-01-01', '2015-03-10', 'Mạng máy tính và truyền thông', NULL, '1', 3, 0.6, 0.02, 0.05, ''),
(9, NULL, 3, NULL, 1, '100002CTF', '1970-01-01', '2015-03-23', 'Công nghệ phần mềm', NULL, '1', 3, 0, 0, 0, ''),
(11, NULL, 3, NULL, 1, '100003CTF', '1970-01-01', '2015-03-24', 'Hệ thống thông tin', NULL, '1', 3.2, 0, 0, 0, ''),
(13, NULL, 4, NULL, 1, '100004CTF', '1970-01-01', '2015-03-16', 'Mạng máy tính và truyền thông', NULL, '1', 4.4, 0, 0, 0, ''),
(15, NULL, 4, NULL, 1, '100005CTF', '1970-01-01', '2015-03-16', 'Mạng máy tính và truyền thông', NULL, '1', 4.74, 0, 0, 0, ''),
(16, NULL, 4, NULL, 1, '100006CTF', '1970-01-01', '2015-03-23', 'Hệ thống thông tin', NULL, '1', 5.08, 0, 0, 0, ''),
(18, NULL, 4, NULL, 1, '100007CTF', '0000-00-00', '2015-03-30', 'Công nghệ phần mềm', NULL, '1', 5.42, 0, 0, 0, ''),
(19, NULL, 3, NULL, 1, '100008CTF', '0000-00-00', '2015-03-17', 'Công nghệ phần mềm', NULL, '1', 4.34, 0, 0, 0, ''),
(20, NULL, 1, NULL, 1, '100009CTF', '0000-00-00', '2015-03-17', 'Công nghệ phần mềm', NULL, '1', 2.34, 0, 0, 0, ''),
(21, NULL, 1, NULL, 1, '100010CTF', '0000-00-00', '2015-03-03', 'Công nghệ phần mềm', NULL, '1', 2.67, 0, 0, 0, ''),
(22, NULL, 1, NULL, 1, '100011CTF', '0000-00-00', '2015-03-23', 'Công nghệ phần mềm', NULL, '1', 3.33, 0, 0, 0, ''),
(23, NULL, 1, NULL, 1, '100012CTF', '0000-00-00', '2015-03-23', 'Công nghệ phần mềm', NULL, '1', 3.66, 0, 0, 0, ''),
(25, NULL, 1, NULL, 1, '100013CTF', '0000-00-00', '2015-03-10', 'Công nghệ phần mềm', NULL, '1', 3.99, 0, 0, 0, ''),
(26, NULL, 1, NULL, 1, '100014CTF', '0000-00-00', '2015-03-16', 'Công nghệ phần mềm', NULL, '1', 2.41, 0, 0, 0, ''),
(29, NULL, 1, NULL, 1, '100015CTF', '0000-00-00', '2015-03-18', 'Hệ thống thông tin', NULL, '1', 2.72, 0, 0, 0, ''),
(30, NULL, 1, NULL, 1, '100016CTF', '0000-00-00', '2015-03-25', 'Mạng máy tính và truyền thông', NULL, '1', 4.89, 0, 0, 0, ''),
(32, NULL, 1, NULL, 1, '100017CTF', '0000-00-00', '2015-03-27', 'Hệ thống thông tin', NULL, '1', 1.86, 0, 0, 0, ''),
(33, NULL, 1, NULL, 1, '100018CTF', '0000-00-00', '2015-03-05', 'Mạng máy tính và truyền thông', NULL, '1', 2.06, 0, 0, 0, ''),
(34, NULL, 1, NULL, 1, '100019CTF', '0000-00-00', '2015-03-05', 'Hệ thống thông tin', NULL, '1', 2.25, 0, 0, 0, ''),
(36, NULL, 1, NULL, 1, '100020CTF', '0000-00-00', '2015-03-06', 'Mạng máy tính và truyền thông', NULL, '1', 2.95, 0, 0, 0, ''),
(37, NULL, 1, NULL, 1, '100021CTF', '0000-00-00', '2015-03-05', 'Hệ thống thông tin', NULL, '1', 3.13, 0, 0, 0, ''),
(38, NULL, 1, NULL, 1, '100022CTF', '0000-00-00', '2015-03-02', 'Mạng máy tính và truyền thông', NULL, '1', 3.49, 0, 0, 0, ''),
(39, NULL, 1, NULL, 1, '100023CTF', '0000-00-00', '2015-03-03', 'Hệ thống thông tin', NULL, '1', 3.85, 0, 0, 0, ''),
(41, NULL, 1, NULL, 1, '100024CTF', '0000-00-00', '2015-03-16', 'Mạng máy tính và truyền thông', NULL, '1', 4.03, 0, 0, 0, ''),
(43, NULL, 1, NULL, 1, '100025CTF', '0000-00-00', '2015-03-15', 'Hệ thống thông tin', NULL, '1', 3.67, 0, 0, 0, ''),
(44, NULL, 1, NULL, 1, '100026CTF', '0000-00-00', '2015-03-24', 'Mạng máy tính và truyền thông', NULL, '1', 2.37, 0, 0, 0, ''),
(45, NULL, 1, NULL, 1, '100027CTF', '0000-00-00', '2015-03-29', 'Hệ thống thông tin', NULL, '1', 2.04, 0, 0, 0, ''),
(46, NULL, 1, NULL, 1, '100028CTF', '0000-00-00', '2015-03-23', 'Mạng máy tính và truyền thông', NULL, '1', 1.68, 0, 0, 0, ''),
(47, NULL, 1, NULL, 1, '100029CTF', '0000-00-00', '2015-03-03', 'Mạng máy tính và truyền thông', NULL, '1', 3.3, 0, 0, 0, ''),
(51, NULL, 1, NULL, 1, '100030CTF', '0000-00-00', '2015-03-25', 'Công nghệ phần mềm', '2015-03-10', '1', 4, 0, 0, 0, 'Công nghệ phần mềm'),
(52, NULL, 1, NULL, 1, '100031CTF', '0000-00-00', '2015-03-25', 'Công nghệ phần mềm', '2015-03-10', '1', 4, 0, 0, 0, 'Công nghệ phần mềm'),
(53, NULL, 1, NULL, 1, '100032CTF', '0000-00-00', '2015-03-25', 'Công nghệ phần mềm', '2015-03-10', '1', 4, 0, 0, 0, 'Công nghệ phần mềm'),
(55, NULL, 1, NULL, 1, '100033CTF', '0000-00-00', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', 3, 0, 0, 0, 'Công nghệ phần mềm'),
(56, NULL, 1, NULL, 1, '100034CTF', '0000-00-00', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', 3, 0, 0, 0, 'Công nghệ phần mềm'),
(57, NULL, 1, NULL, 1, '100035CTF', '0000-00-00', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', 3, 0, 0, 0, 'Công nghệ phần mềm'),
(58, NULL, 1, NULL, 1, '123123CTF', '2015-03-31', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', 3, 0, 0, 0, 'Công nghệ phần mềm'),
(59, NULL, 1, NULL, 1, '', '1970-01-01', '1970-01-01', 'Mạng máy tính và truyền thông', '1970-01-01', '1', 3.3, 0, 0, 0, ''),
(66, NULL, 1, NULL, 1, '100123CTF', '2015-03-25', '2015-03-31', 'Hệ thống thông tin', '2015-04-01', '1', 4, 0, 0, 0, 'Công nghệ phần mềm');

-- --------------------------------------------------------

--
-- Table structure for table `nam`
--

CREATE TABLE IF NOT EXISTS `nam` (
  `NAM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nam`
--

INSERT INTO `nam` (`NAM`) VALUES
(0),
(1970),
(1999),
(2013),
(2014),
(2015);

-- --------------------------------------------------------

--
-- Table structure for table `ngay`
--

CREATE TABLE IF NOT EXISTS `ngay` (
  `NGAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `ngay`
--

INSERT INTO `ngay` (`NGAY`) VALUES
('0000-00-00'),
('1970-01-01'),
('2010-03-12'),
('2012-03-12'),
('2015-03-12'),
('2015-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `nghenghiep`
--

CREATE TABLE IF NOT EXISTS `nghenghiep` (
`MANN` int(11) NOT NULL,
  `TENNN` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nghenghiep`
--

INSERT INTO `nghenghiep` (`MANN`, `TENNN`) VALUES
(1, 'Sinh viên'),
(2, 'Giảng viên'),
(3, 'Buôn bán'),
(4, 'Nhân viên'),
(5, 'Công nhân');

-- --------------------------------------------------------

--
-- Table structure for table `nghiepvu`
--

CREATE TABLE IF NOT EXISTS `nghiepvu` (
`MANV` int(11) NOT NULL,
  `TENNV` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nghiepvu`
--

INSERT INTO `nghiepvu` (`MANV`, `TENNV`) VALUES
(1, 'Sư phạm'),
(2, 'Kinh tế'),
(3, 'Thư ký'),
(4, 'Kế toán');

-- --------------------------------------------------------

--
-- Table structure for table `nghiquyet`
--

CREATE TABLE IF NOT EXISTS `nghiquyet` (
`SONQ` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `MACB` int(11) DEFAULT NULL,
  `TONGSOUVBCH` int(11) NOT NULL,
  `SLCOMAT` int(11) NOT NULL,
  `SLVANGMAT` int(11) NOT NULL,
  `LYDOVANG` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CHUTRI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CVCHUTRI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `THUKY` varchar(100) CHARACTER SET utf8 NOT NULL,
  `UUDIEM` varchar(500) CHARACTER SET utf8 NOT NULL,
  `KHUYETDIEM` varchar(500) CHARACTER SET utf8 NOT NULL,
  `SLTANTHANH` int(11) NOT NULL,
  `SLKTANTHANH` int(11) NOT NULL,
  `LYDOKTANTHANH` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NQDU` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ngoaingu`
--

CREATE TABLE IF NOT EXISTS `ngoaingu` (
`MANGOAINGU` int(11) NOT NULL,
  `TENNGOAINGU` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ngoaingu`
--

INSERT INTO `ngoaingu` (`MANGOAINGU`, `TENNGOAINGU`) VALUES
(1, 'Tiếng Anh A'),
(2, 'Tiếng Anh TOEIC'),
(3, 'Tiếng Anh B'),
(4, 'Tiếng Anh C'),
(5, 'Tiếng Nhật N1');

-- --------------------------------------------------------

--
-- Table structure for table `nguoithannt`
--

CREATE TABLE IF NOT EXISTS `nguoithannt` (
  `MADANGVIEN` int(11) NOT NULL,
  `STTNT` int(11) NOT NULL,
  `TENNT` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NOICUTRU` varchar(100) CHARACTER SET utf8 NOT NULL,
  `QUANHE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGHENGHIEP` varchar(100) CHARACTER SET utf8 NOT NULL,
  `DACDIEMCT` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `NGAYSINHNT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nguoithannt`
--

INSERT INTO `nguoithannt` (`MADANGVIEN`, `STTNT`, `TENNT`, `NOICUTRU`, `QUANHE`, `NGHENGHIEP`, `DACDIEMCT`, `NGAYSINHNT`) VALUES
(3, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(37, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(38, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(39, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(41, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(43, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(44, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(45, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(46, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(47, 1, 'Nguyễn Văn Sinh', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(56, 1, 'Cha Nam', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(57, 1, 'Cha Nam', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(58, 1, 'Cha Nam', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(58, 2, 'Cha Nam ne', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-02'),
(66, 1, 'Cha 1', 'Cần Thơ', 'Cha', 'Buôn bán', 'Bình thường', '1970-03-04'),
(66, 2, 'Mẹ 1', 'Cần Thơ', 'Mẹ', 'Buôn bán', 'Bình thường', '1972-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `nhiemky`
--

CREATE TABLE IF NOT EXISTS `nhiemky` (
`MANHIEMKY` int(11) NOT NULL,
  `TUNAM` varchar(4) CHARACTER SET utf8 NOT NULL,
  `DENNAM` varchar(4) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nhiemky`
--

INSERT INTO `nhiemky` (`MANHIEMKY`, `TUNAM`, `DENNAM`) VALUES
(1, '2013', '2015'),
(2, '2011', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `phanloaicb`
--

CREATE TABLE IF NOT EXISTS `phanloaicb` (
  `NAM` int(11) NOT NULL,
  `MACB` int(11) NOT NULL,
  `MUCPLCB` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloaidv`
--

CREATE TABLE IF NOT EXISTS `phanloaidv` (
  `MADANGVIEN` int(11) NOT NULL,
  `NAM` int(11) NOT NULL,
  `MUCPLDV` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phuongxa`
--

CREATE TABLE IF NOT EXISTS `phuongxa` (
`MAPX` int(11) NOT NULL,
  `MAQH` int(11) NOT NULL,
  `TENPX` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `phuongxa`
--

INSERT INTO `phuongxa` (`MAPX`, `MAQH`, `TENPX`) VALUES
(1, 1, 'Hưng Lợi'),
(2, 1, 'Xuân Khánh'),
(3, 2, 'Phường 1'),
(4, 3, 'Chuồng Gấu'),
(5, 2, 'Phường 2');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE IF NOT EXISTS `quanhuyen` (
`MAQH` int(11) NOT NULL,
  `MATT` int(11) NOT NULL,
  `TENQH` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`MAQH`, `MATT`, `TENQH`) VALUES
(1, 1, 'Ninh Kiều'),
(2, 2, 'Ngã Năm'),
(3, 3, 'Trà Ôn');

-- --------------------------------------------------------

--
-- Table structure for table `quatrinhct`
--

CREATE TABLE IF NOT EXISTS `quatrinhct` (
`STTQT` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `LAMCV` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DONVI` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `NGAYNHANCV` date DEFAULT NULL,
  `NGAYHETCV` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=77 ;

--
-- Dumping data for table `quatrinhct`
--

INSERT INTO `quatrinhct` (`STTQT`, `MADANGVIEN`, `LAMCV`, `DONVI`, `NGAYNHANCV`, `NGAYHETCV`) VALUES
(1, 55, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-03-18', '2015-03-24'),
(3, 57, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-03-18', '2015-03-24'),
(74, 58, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-03-18', '2015-03-24'),
(75, 58, 'Dọn rác', 'Khoa CNTT&TT', '2015-03-01', '2015-03-03'),
(76, 58, 'Lao công', 'Khoa CNTT&TT', '2015-03-01', '2015-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `quatrinhdt`
--

CREATE TABLE IF NOT EXISTS `quatrinhdt` (
`STTDT` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `TENTRUONG` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGANHHOC` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NAMDB` varchar(4) CHARACTER SET utf8 NOT NULL,
  `NAMKT` varchar(4) CHARACTER SET utf8 NOT NULL,
  `HINHTHUCHOC` varchar(100) CHARACTER SET utf8 NOT NULL,
  `VB_CC` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `quatrinhdt`
--

INSERT INTO `quatrinhdt` (`STTDT`, `MADANGVIEN`, `TENTRUONG`, `NGANHHOC`, `NAMDB`, `NAMKT`, `HINHTHUCHOC`, `VB_CC`) VALUES
(1, 56, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(2, 57, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(57, 58, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(58, 58, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `quyetdinh`
--

CREATE TABLE IF NOT EXISTS `quyetdinh` (
`SOQD` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `TENQD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CACQD` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `NOINHAN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NGUOIKYQD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CVNGUOIKYQD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `QDDU` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rakhoidang`
--

CREATE TABLE IF NOT EXISTS `rakhoidang` (
`STTRKD` int(11) NOT NULL,
  `MADANGVIEN` int(11) DEFAULT NULL,
  `NGAYRA` date NOT NULL,
  `HINHTHUCRA` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `TENTAIKHOAN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MACB` int(11) DEFAULT NULL,
  `MATKHAU` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TENTAIKHOAN`, `MACB`, `MATKHAU`) VALUES
('', 2, 'chibocongnghephanmem'),
('chibohttt', 3, 'chibohttt'),
('chibommttt', 4, 'chibommttt'),
('chibosinhvien', 1, 'chibosinhvien');

-- --------------------------------------------------------

--
-- Table structure for table `thangnam`
--

CREATE TABLE IF NOT EXISTS `thangnam` (
  `THANGNAM` varchar(7) CHARACTER SET utf8 NOT NULL,
  `STTLUONGCB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thedv`
--

CREATE TABLE IF NOT EXISTS `thedv` (
`MATHE` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `NGAYCAPTHE` date DEFAULT NULL,
  `SOTHE` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `thedv`
--

INSERT INTO `thedv` (`MATHE`, `MADANGVIEN`, `NGAYCAPTHE`, `SOTHE`) VALUES
(2, 58, '0000-00-00', '123123123'),
(3, 66, NULL, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE IF NOT EXISTS `thongbao` (
`STTTB` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `TENTB` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NOIDUNG` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thuongbinh`
--

CREATE TABLE IF NOT EXISTS `thuongbinh` (
`STTTBINH` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `LOAITB` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `thuongbinh`
--

INSERT INTO `thuongbinh` (`STTTBINH`, `MADANGVIEN`, `LOAITB`) VALUES
(2, 58, '2'),
(3, 66, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE IF NOT EXISTS `tinhthanh` (
`MATT` int(11) NOT NULL,
  `TENTT` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MATT`, `TENTT`) VALUES
(1, 'Cần Thơ'),
(2, 'Sóc Trăng'),
(3, 'Vĩnh Long');

-- --------------------------------------------------------

--
-- Table structure for table `tongiao`
--

CREATE TABLE IF NOT EXISTS `tongiao` (
`MATONGIAO` int(11) NOT NULL,
  `TENTONGIAO` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tongiao`
--

INSERT INTO `tongiao` (`MATONGIAO`, `TENTONGIAO`) VALUES
(1, 'Phật giáo'),
(2, 'Thiên chúa giáo'),
(3, 'Đạo Hòa Hảo');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdoct`
--

CREATE TABLE IF NOT EXISTS `trinhdoct` (
`MATRINHDOCT` int(11) NOT NULL,
  `TENTRINHDOCT` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trinhdoct`
--

INSERT INTO `trinhdoct` (`MATRINHDOCT`, `TENTRINHDOCT`) VALUES
(1, 'Sơ cấp'),
(2, 'Trung Cấp'),
(3, 'Cao Cấp');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdovh`
--

CREATE TABLE IF NOT EXISTS `trinhdovh` (
`MATRINHDOVH` int(11) NOT NULL,
  `TENTRINHDOVH` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trinhdovh`
--

INSERT INTO `trinhdovh` (`MATRINHDOVH`, `TENTRINHDOVH`) VALUES
(1, '12/12');

-- --------------------------------------------------------

--
-- Table structure for table `tutran`
--

CREATE TABLE IF NOT EXISTS `tutran` (
`STTTUTRAN` int(11) NOT NULL,
  `MADANGVIEN` int(11) DEFAULT NULL,
  `NGAYTUTRAN` date NOT NULL,
  `LYDOTUTRAN` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tutran`
--

INSERT INTO `tutran` (`STTTUTRAN`, `MADANGVIEN`, `NGAYTUTRAN`, `LYDOTUTRAN`) VALUES
(2, 58, '2015-03-31', 'Bệnh'),
(3, 66, '2015-03-24', 'Bệnh');

-- --------------------------------------------------------

--
-- Table structure for table `xuatnhapngu`
--

CREATE TABLE IF NOT EXISTS `xuatnhapngu` (
`STTXNN` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `NGAYNHAPNGU` date NOT NULL,
  `NGAYXUATNGU` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `xuatnhapngu`
--

INSERT INTO `xuatnhapngu` (`STTXNN`, `MADANGVIEN`, `NGAYNHAPNGU`, `NGAYXUATNGU`) VALUES
(3, 59, '1970-01-01', '1970-01-01'),
(4, 58, '2015-03-01', '2015-03-03'),
(5, 66, '2015-03-25', '2015-03-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bddvmoi`
--
ALTER TABLE `bddvmoi`
 ADD PRIMARY KEY (`DOTBD`);

--
-- Indexes for table `camtinhdang`
--
ALTER TABLE `camtinhdang`
 ADD PRIMARY KEY (`STTCTD`), ADD KEY `FK_CTD_CHIBO` (`MACB`), ADD KEY `FK_CTD_THANGNAM` (`THANGNAM`);

--
-- Indexes for table `caphhd`
--
ALTER TABLE `caphhd`
 ADD PRIMARY KEY (`MADANGVIEN`,`STTCAPHHD`), ADD KEY `FK_CAPHHD` (`STTCAPHHD`);

--
-- Indexes for table `capthedang`
--
ALTER TABLE `capthedang`
 ADD PRIMARY KEY (`MADANGVIEN`,`STTCAPTHE`), ADD KEY `FK_CAPTHEDANG` (`STTCAPTHE`);

--
-- Indexes for table `chibo`
--
ALTER TABLE `chibo`
 ADD PRIMARY KEY (`MACB`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
 ADD PRIMARY KEY (`MACV`);

--
-- Indexes for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
 ADD PRIMARY KEY (`MACM`);

--
-- Indexes for table `co_tdnn`
--
ALTER TABLE `co_tdnn`
 ADD PRIMARY KEY (`MADANGVIEN`,`MANGOAINGU`), ADD KEY `FK_CO_TDNN2` (`MANGOAINGU`);

--
-- Indexes for table `cvden`
--
ALTER TABLE `cvden`
 ADD PRIMARY KEY (`STTCVDEN`), ADD KEY `FK_NGAY_CVDEN` (`NGAY`);

--
-- Indexes for table `cvdi`
--
ALTER TABLE `cvdi`
 ADD PRIMARY KEY (`SOCVDI`), ADD KEY `FK_NGAY_CVDI` (`NGAY`);

--
-- Indexes for table `dangphi`
--
ALTER TABLE `dangphi`
 ADD PRIMARY KEY (`THANGNAM`), ADD KEY `FK_DONGDANGPHI` (`MADANGVIEN`);

--
-- Indexes for table `dangvien`
--
ALTER TABLE `dangvien`
 ADD PRIMARY KEY (`MADANGVIEN`), ADD KEY `FK_CO_CM` (`MACM`), ADD KEY `FK_CO_HH` (`MAHOCHAM`), ADD KEY `FK_CO_HV` (`MAHOCVI`), ADD KEY `FK_CO_NN` (`MANN`), ADD KEY `FK_CO_NOISINH` (`MAPX`), ADD KEY `FK_CO_NV` (`MANV`), ADD KEY `FK_CO_QUEQUAN` (`PHU_MAPX`), ADD KEY `FK_CO_TDVH` (`MATRINHDOVH`), ADD KEY `FK_CO_TG` (`MATONGIAO`), ADD KEY `FK_NOI_TAMTRU` (`PHU_MAPX2`), ADD KEY `FK_NOI_THUONGTRU` (`PHU_MAPX3`), ADD KEY `FK_THUOC_DT` (`MADT`);

--
-- Indexes for table `dantoc`
--
ALTER TABLE `dantoc`
 ADD PRIMARY KEY (`MADT`);

--
-- Indexes for table `dinuocngoai`
--
ALTER TABLE `dinuocngoai`
 ADD PRIMARY KEY (`STT`), ADD KEY `FK_DI_NN` (`MADANGVIEN`);

--
-- Indexes for table `doantncshcm`
--
ALTER TABLE `doantncshcm`
 ADD PRIMARY KEY (`STTVAODOAN`);

--
-- Indexes for table `dscaphhd`
--
ALTER TABLE `dscaphhd`
 ADD PRIMARY KEY (`STTCAPHHD`);

--
-- Indexes for table `dscapthedang`
--
ALTER TABLE `dscapthedang`
 ADD PRIMARY KEY (`STTCAPTHE`);

--
-- Indexes for table `giucv`
--
ALTER TABLE `giucv`
 ADD PRIMARY KEY (`MANHIEMKY`,`MACV`,`MADANGVIEN`), ADD KEY `FK_CV_GCVD` (`MACV`), ADD KEY `FK_DV_GCVD` (`MADANGVIEN`);

--
-- Indexes for table `hinhthuckl`
--
ALTER TABLE `hinhthuckl`
 ADD PRIMARY KEY (`MAHTKL`);

--
-- Indexes for table `hinhthuckt`
--
ALTER TABLE `hinhthuckt`
 ADD PRIMARY KEY (`MAHTKT`);

--
-- Indexes for table `hocham`
--
ALTER TABLE `hocham`
 ADD PRIMARY KEY (`MAHOCHAM`);

--
-- Indexes for table `hocvi`
--
ALTER TABLE `hocvi`
 ADD PRIMARY KEY (`MAHOCVI`);

--
-- Indexes for table `huyhieudang`
--
ALTER TABLE `huyhieudang`
 ADD PRIMARY KEY (`MAHH`), ADD KEY `FK_HH_CUA_DV` (`MADANGVIEN`);

--
-- Indexes for table `khenthuongcb`
--
ALTER TABLE `khenthuongcb`
 ADD PRIMARY KEY (`MAHTKT`,`MACB`,`NAM`), ADD KEY `FK_KTCB` (`MACB`), ADD KEY `FK_NAM_KTCB` (`NAM`);

--
-- Indexes for table `khenthuongdv`
--
ALTER TABLE `khenthuongdv`
 ADD PRIMARY KEY (`MADANGVIEN`,`MAHTKT`,`NAM`), ADD KEY `FK_DV_HTKT` (`MAHTKT`), ADD KEY `FK_NAM_KTDV` (`NAM`);

--
-- Indexes for table `kyluat`
--
ALTER TABLE `kyluat`
 ADD PRIMARY KEY (`MADANGVIEN`,`MAHTKL`,`NAM`), ADD KEY `FK_DV_HTKL` (`MAHTKL`), ADD KEY `FK_NAM_KYLUAT` (`NAM`);

--
-- Indexes for table `luongcb`
--
ALTER TABLE `luongcb`
 ADD PRIMARY KEY (`STTLUONGCB`);

--
-- Indexes for table `lylich`
--
ALTER TABLE `lylich`
 ADD PRIMARY KEY (`MADANGVIEN`), ADD KEY `FK_BD_CHO` (`DOTBD`), ADD KEY `FK_CO_TDCT` (`MATRINHDOCT`), ADD KEY `FK_THUOC_CB` (`MACB`), ADD KEY `FK_VAODOAN` (`STTVAODOAN`);

--
-- Indexes for table `nam`
--
ALTER TABLE `nam`
 ADD PRIMARY KEY (`NAM`);

--
-- Indexes for table `ngay`
--
ALTER TABLE `ngay`
 ADD PRIMARY KEY (`NGAY`);

--
-- Indexes for table `nghenghiep`
--
ALTER TABLE `nghenghiep`
 ADD PRIMARY KEY (`MANN`);

--
-- Indexes for table `nghiepvu`
--
ALTER TABLE `nghiepvu`
 ADD PRIMARY KEY (`MANV`);

--
-- Indexes for table `nghiquyet`
--
ALTER TABLE `nghiquyet`
 ADD PRIMARY KEY (`SONQ`), ADD KEY `FK_CO_NQ` (`MACB`), ADD KEY `FK_NGAY_LAP_NQ` (`NGAY`);

--
-- Indexes for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
 ADD PRIMARY KEY (`MANGOAINGU`);

--
-- Indexes for table `nguoithannt`
--
ALTER TABLE `nguoithannt`
 ADD PRIMARY KEY (`MADANGVIEN`,`STTNT`);

--
-- Indexes for table `nhiemky`
--
ALTER TABLE `nhiemky`
 ADD PRIMARY KEY (`MANHIEMKY`);

--
-- Indexes for table `phanloaicb`
--
ALTER TABLE `phanloaicb`
 ADD PRIMARY KEY (`NAM`,`MACB`), ADD KEY `FK_PLCB` (`MACB`);

--
-- Indexes for table `phanloaidv`
--
ALTER TABLE `phanloaidv`
 ADD PRIMARY KEY (`MADANGVIEN`,`NAM`), ADD KEY `FK_NAM_PL_DV` (`NAM`);

--
-- Indexes for table `phuongxa`
--
ALTER TABLE `phuongxa`
 ADD PRIMARY KEY (`MAPX`), ADD KEY `FK_CO_PX` (`MAQH`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
 ADD PRIMARY KEY (`MAQH`), ADD KEY `FK_CO_QH` (`MATT`);

--
-- Indexes for table `quatrinhct`
--
ALTER TABLE `quatrinhct`
 ADD PRIMARY KEY (`STTQT`), ADD KEY `FK_CONGTAC` (`MADANGVIEN`);

--
-- Indexes for table `quatrinhdt`
--
ALTER TABLE `quatrinhdt`
 ADD PRIMARY KEY (`STTDT`), ADD KEY `FK_DAOTAO` (`MADANGVIEN`);

--
-- Indexes for table `quyetdinh`
--
ALTER TABLE `quyetdinh`
 ADD PRIMARY KEY (`SOQD`), ADD KEY `FK_NGAY_LAP_QD` (`NGAY`);

--
-- Indexes for table `rakhoidang`
--
ALTER TABLE `rakhoidang`
 ADD PRIMARY KEY (`STTRKD`), ADD KEY `FK_DV_RAKHOIDANG` (`MADANGVIEN`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
 ADD PRIMARY KEY (`TENTAIKHOAN`), ADD KEY `FK_CO_TK` (`MACB`);

--
-- Indexes for table `thangnam`
--
ALTER TABLE `thangnam`
 ADD PRIMARY KEY (`THANGNAM`), ADD KEY `FK_CO_LUONGCB` (`STTLUONGCB`);

--
-- Indexes for table `thedv`
--
ALTER TABLE `thedv`
 ADD PRIMARY KEY (`MATHE`), ADD KEY `FK_CUA_DV` (`MADANGVIEN`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
 ADD PRIMARY KEY (`STTTB`), ADD KEY `FK_NGAY_TB` (`NGAY`);

--
-- Indexes for table `thuongbinh`
--
ALTER TABLE `thuongbinh`
 ADD PRIMARY KEY (`STTTBINH`), ADD KEY `FK_DV_TB` (`MADANGVIEN`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
 ADD PRIMARY KEY (`MATT`);

--
-- Indexes for table `tongiao`
--
ALTER TABLE `tongiao`
 ADD PRIMARY KEY (`MATONGIAO`);

--
-- Indexes for table `trinhdoct`
--
ALTER TABLE `trinhdoct`
 ADD PRIMARY KEY (`MATRINHDOCT`);

--
-- Indexes for table `trinhdovh`
--
ALTER TABLE `trinhdovh`
 ADD PRIMARY KEY (`MATRINHDOVH`);

--
-- Indexes for table `tutran`
--
ALTER TABLE `tutran`
 ADD PRIMARY KEY (`STTTUTRAN`), ADD KEY `FK_DV_TUTRAN` (`MADANGVIEN`);

--
-- Indexes for table `xuatnhapngu`
--
ALTER TABLE `xuatnhapngu`
 ADD PRIMARY KEY (`STTXNN`), ADD KEY `FK_DV_XNN` (`MADANGVIEN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camtinhdang`
--
ALTER TABLE `camtinhdang`
MODIFY `STTCTD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chibo`
--
ALTER TABLE `chibo`
MODIFY `MACB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
MODIFY `MACV` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
MODIFY `MACM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cvden`
--
ALTER TABLE `cvden`
MODIFY `STTCVDEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cvdi`
--
ALTER TABLE `cvdi`
MODIFY `SOCVDI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dangvien`
--
ALTER TABLE `dangvien`
MODIFY `MADANGVIEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `dantoc`
--
ALTER TABLE `dantoc`
MODIFY `MADT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dinuocngoai`
--
ALTER TABLE `dinuocngoai`
MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `doantncshcm`
--
ALTER TABLE `doantncshcm`
MODIFY `STTVAODOAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dscaphhd`
--
ALTER TABLE `dscaphhd`
MODIFY `STTCAPHHD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dscapthedang`
--
ALTER TABLE `dscapthedang`
MODIFY `STTCAPTHE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hinhthuckl`
--
ALTER TABLE `hinhthuckl`
MODIFY `MAHTKL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hinhthuckt`
--
ALTER TABLE `hinhthuckt`
MODIFY `MAHTKT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hocham`
--
ALTER TABLE `hocham`
MODIFY `MAHOCHAM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hocvi`
--
ALTER TABLE `hocvi`
MODIFY `MAHOCVI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `huyhieudang`
--
ALTER TABLE `huyhieudang`
MODIFY `MAHH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `luongcb`
--
ALTER TABLE `luongcb`
MODIFY `STTLUONGCB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nghenghiep`
--
ALTER TABLE `nghenghiep`
MODIFY `MANN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nghiepvu`
--
ALTER TABLE `nghiepvu`
MODIFY `MANV` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nghiquyet`
--
ALTER TABLE `nghiquyet`
MODIFY `SONQ` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
MODIFY `MANGOAINGU` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nhiemky`
--
ALTER TABLE `nhiemky`
MODIFY `MANHIEMKY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phuongxa`
--
ALTER TABLE `phuongxa`
MODIFY `MAPX` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
MODIFY `MAQH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quatrinhct`
--
ALTER TABLE `quatrinhct`
MODIFY `STTQT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `quatrinhdt`
--
ALTER TABLE `quatrinhdt`
MODIFY `STTDT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `quyetdinh`
--
ALTER TABLE `quyetdinh`
MODIFY `SOQD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rakhoidang`
--
ALTER TABLE `rakhoidang`
MODIFY `STTRKD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thedv`
--
ALTER TABLE `thedv`
MODIFY `MATHE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
MODIFY `STTTB` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thuongbinh`
--
ALTER TABLE `thuongbinh`
MODIFY `STTTBINH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
MODIFY `MATT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tongiao`
--
ALTER TABLE `tongiao`
MODIFY `MATONGIAO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trinhdoct`
--
ALTER TABLE `trinhdoct`
MODIFY `MATRINHDOCT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trinhdovh`
--
ALTER TABLE `trinhdovh`
MODIFY `MATRINHDOVH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutran`
--
ALTER TABLE `tutran`
MODIFY `STTTUTRAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `xuatnhapngu`
--
ALTER TABLE `xuatnhapngu`
MODIFY `STTXNN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `camtinhdang`
--
ALTER TABLE `camtinhdang`
ADD CONSTRAINT `FK_CTD_CHIBO` FOREIGN KEY (`MACB`) REFERENCES `chibo` (`MACB`),
ADD CONSTRAINT `FK_CTD_THANGNAM` FOREIGN KEY (`THANGNAM`) REFERENCES `thangnam` (`THANGNAM`);

--
-- Constraints for table `caphhd`
--
ALTER TABLE `caphhd`
ADD CONSTRAINT `FK_CAPHHD` FOREIGN KEY (`STTCAPHHD`) REFERENCES `dscaphhd` (`STTCAPHHD`),
ADD CONSTRAINT `FK_CAPHHD2` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `capthedang`
--
ALTER TABLE `capthedang`
ADD CONSTRAINT `FK_CAPTHEDANG` FOREIGN KEY (`STTCAPTHE`) REFERENCES `dscapthedang` (`STTCAPTHE`),
ADD CONSTRAINT `FK_CAPTHEDANG2` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `co_tdnn`
--
ALTER TABLE `co_tdnn`
ADD CONSTRAINT `FK_CO_TDNN` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`),
ADD CONSTRAINT `FK_CO_TDNN2` FOREIGN KEY (`MANGOAINGU`) REFERENCES `ngoaingu` (`MANGOAINGU`);

--
-- Constraints for table `cvden`
--
ALTER TABLE `cvden`
ADD CONSTRAINT `FK_NGAY_CVDEN` FOREIGN KEY (`NGAY`) REFERENCES `ngay` (`NGAY`);

--
-- Constraints for table `cvdi`
--
ALTER TABLE `cvdi`
ADD CONSTRAINT `FK_NGAY_CVDI` FOREIGN KEY (`NGAY`) REFERENCES `ngay` (`NGAY`);

--
-- Constraints for table `dangphi`
--
ALTER TABLE `dangphi`
ADD CONSTRAINT `FK_CUA_THANGNAM` FOREIGN KEY (`THANGNAM`) REFERENCES `thangnam` (`THANGNAM`),
ADD CONSTRAINT `FK_DONGDANGPHI` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`);

--
-- Constraints for table `dangvien`
--
ALTER TABLE `dangvien`
ADD CONSTRAINT `FK_CO_CM` FOREIGN KEY (`MACM`) REFERENCES `chuyenmon` (`MACM`),
ADD CONSTRAINT `FK_CO_HH` FOREIGN KEY (`MAHOCHAM`) REFERENCES `hocham` (`MAHOCHAM`),
ADD CONSTRAINT `FK_CO_HV` FOREIGN KEY (`MAHOCVI`) REFERENCES `hocvi` (`MAHOCVI`),
ADD CONSTRAINT `FK_CO_NN` FOREIGN KEY (`MANN`) REFERENCES `nghenghiep` (`MANN`),
ADD CONSTRAINT `FK_CO_NOISINH` FOREIGN KEY (`MAPX`) REFERENCES `phuongxa` (`MAPX`),
ADD CONSTRAINT `FK_CO_NV` FOREIGN KEY (`MANV`) REFERENCES `nghiepvu` (`MANV`),
ADD CONSTRAINT `FK_CO_QUEQUAN` FOREIGN KEY (`PHU_MAPX`) REFERENCES `phuongxa` (`MAPX`),
ADD CONSTRAINT `FK_CO_TDVH` FOREIGN KEY (`MATRINHDOVH`) REFERENCES `trinhdovh` (`MATRINHDOVH`),
ADD CONSTRAINT `FK_CO_TG` FOREIGN KEY (`MATONGIAO`) REFERENCES `tongiao` (`MATONGIAO`),
ADD CONSTRAINT `FK_NOI_TAMTRU` FOREIGN KEY (`PHU_MAPX2`) REFERENCES `phuongxa` (`MAPX`),
ADD CONSTRAINT `FK_NOI_THUONGTRU` FOREIGN KEY (`PHU_MAPX3`) REFERENCES `phuongxa` (`MAPX`),
ADD CONSTRAINT `FK_THUOC_DT` FOREIGN KEY (`MADT`) REFERENCES `dantoc` (`MADT`);

--
-- Constraints for table `dinuocngoai`
--
ALTER TABLE `dinuocngoai`
ADD CONSTRAINT `FK_DI_NN` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`);

--
-- Constraints for table `giucv`
--
ALTER TABLE `giucv`
ADD CONSTRAINT `FK_CV_GCVD` FOREIGN KEY (`MACV`) REFERENCES `chucvu` (`MACV`),
ADD CONSTRAINT `FK_DV_GCVD` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`),
ADD CONSTRAINT `FK_NK_GCVD` FOREIGN KEY (`MANHIEMKY`) REFERENCES `nhiemky` (`MANHIEMKY`);

--
-- Constraints for table `huyhieudang`
--
ALTER TABLE `huyhieudang`
ADD CONSTRAINT `FK_HH_CUA_DV` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `khenthuongcb`
--
ALTER TABLE `khenthuongcb`
ADD CONSTRAINT `FK_CB_HTKT` FOREIGN KEY (`MAHTKT`) REFERENCES `hinhthuckt` (`MAHTKT`),
ADD CONSTRAINT `FK_KTCB` FOREIGN KEY (`MACB`) REFERENCES `chibo` (`MACB`),
ADD CONSTRAINT `FK_NAM_KTCB` FOREIGN KEY (`NAM`) REFERENCES `nam` (`NAM`);

--
-- Constraints for table `khenthuongdv`
--
ALTER TABLE `khenthuongdv`
ADD CONSTRAINT `FK_DV_HTKT` FOREIGN KEY (`MAHTKT`) REFERENCES `hinhthuckt` (`MAHTKT`),
ADD CONSTRAINT `FK_KHENTHUONGDV` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`),
ADD CONSTRAINT `FK_NAM_KTDV` FOREIGN KEY (`NAM`) REFERENCES `nam` (`NAM`);

--
-- Constraints for table `kyluat`
--
ALTER TABLE `kyluat`
ADD CONSTRAINT `FK_BI_KL` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`),
ADD CONSTRAINT `FK_DV_HTKL` FOREIGN KEY (`MAHTKL`) REFERENCES `hinhthuckl` (`MAHTKL`),
ADD CONSTRAINT `FK_NAM_KYLUAT` FOREIGN KEY (`NAM`) REFERENCES `nam` (`NAM`);

--
-- Constraints for table `lylich`
--
ALTER TABLE `lylich`
ADD CONSTRAINT `FK_BD_CHO` FOREIGN KEY (`DOTBD`) REFERENCES `bddvmoi` (`DOTBD`),
ADD CONSTRAINT `FK_CO_LL` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`),
ADD CONSTRAINT `FK_CO_TDCT` FOREIGN KEY (`MATRINHDOCT`) REFERENCES `trinhdoct` (`MATRINHDOCT`),
ADD CONSTRAINT `FK_THUOC_CB` FOREIGN KEY (`MACB`) REFERENCES `chibo` (`MACB`),
ADD CONSTRAINT `FK_VAODOAN` FOREIGN KEY (`STTVAODOAN`) REFERENCES `doantncshcm` (`STTVAODOAN`);

--
-- Constraints for table `nghiquyet`
--
ALTER TABLE `nghiquyet`
ADD CONSTRAINT `FK_CO_NQ` FOREIGN KEY (`MACB`) REFERENCES `chibo` (`MACB`),
ADD CONSTRAINT `FK_NGAY_LAP_NQ` FOREIGN KEY (`NGAY`) REFERENCES `ngay` (`NGAY`);

--
-- Constraints for table `nguoithannt`
--
ALTER TABLE `nguoithannt`
ADD CONSTRAINT `FK_CO_NT` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`);

--
-- Constraints for table `phanloaicb`
--
ALTER TABLE `phanloaicb`
ADD CONSTRAINT `FK_NAM_PLCB` FOREIGN KEY (`NAM`) REFERENCES `nam` (`NAM`),
ADD CONSTRAINT `FK_PLCB` FOREIGN KEY (`MACB`) REFERENCES `chibo` (`MACB`);

--
-- Constraints for table `phanloaidv`
--
ALTER TABLE `phanloaidv`
ADD CONSTRAINT `FK_DV_PL` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`),
ADD CONSTRAINT `FK_NAM_PL_DV` FOREIGN KEY (`NAM`) REFERENCES `nam` (`NAM`);

--
-- Constraints for table `phuongxa`
--
ALTER TABLE `phuongxa`
ADD CONSTRAINT `FK_CO_PX` FOREIGN KEY (`MAQH`) REFERENCES `quanhuyen` (`MAQH`);

--
-- Constraints for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
ADD CONSTRAINT `FK_CO_QH` FOREIGN KEY (`MATT`) REFERENCES `tinhthanh` (`MATT`);

--
-- Constraints for table `quatrinhct`
--
ALTER TABLE `quatrinhct`
ADD CONSTRAINT `FK_CONGTAC` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `quatrinhdt`
--
ALTER TABLE `quatrinhdt`
ADD CONSTRAINT `FK_DAOTAO` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `quyetdinh`
--
ALTER TABLE `quyetdinh`
ADD CONSTRAINT `FK_NGAY_LAP_QD` FOREIGN KEY (`NGAY`) REFERENCES `ngay` (`NGAY`);

--
-- Constraints for table `rakhoidang`
--
ALTER TABLE `rakhoidang`
ADD CONSTRAINT `FK_DV_RAKHOIDANG` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
ADD CONSTRAINT `FK_CO_TK` FOREIGN KEY (`MACB`) REFERENCES `chibo` (`MACB`);

--
-- Constraints for table `thangnam`
--
ALTER TABLE `thangnam`
ADD CONSTRAINT `FK_CO_LUONGCB` FOREIGN KEY (`STTLUONGCB`) REFERENCES `luongcb` (`STTLUONGCB`);

--
-- Constraints for table `thedv`
--
ALTER TABLE `thedv`
ADD CONSTRAINT `FK_CUA_DV` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
ADD CONSTRAINT `FK_NGAY_TB` FOREIGN KEY (`NGAY`) REFERENCES `ngay` (`NGAY`);

--
-- Constraints for table `thuongbinh`
--
ALTER TABLE `thuongbinh`
ADD CONSTRAINT `FK_DV_TB` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`);

--
-- Constraints for table `tutran`
--
ALTER TABLE `tutran`
ADD CONSTRAINT `FK_DV_TUTRAN` FOREIGN KEY (`MADANGVIEN`) REFERENCES `lylich` (`MADANGVIEN`);

--
-- Constraints for table `xuatnhapngu`
--
ALTER TABLE `xuatnhapngu`
ADD CONSTRAINT `FK_DV_XNN` FOREIGN KEY (`MADANGVIEN`) REFERENCES `dangvien` (`MADANGVIEN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
