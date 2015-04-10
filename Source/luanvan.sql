-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2015 at 08:16 PM
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
  `NGAYKT` date DEFAULT NULL,
  `GHICHU` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `bddvmoi`
--

INSERT INTO `bddvmoi` (`DOTBD`, `NGAYBD`, `NGAYKT`, `GHICHU`) VALUES
(5, '2015-03-18', NULL, NULL),
(8, '2015-03-19', NULL, NULL),
(9, '2015-04-22', NULL, NULL),
(10, '2015-04-29', NULL, NULL);

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
  `NGUOIHD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `VIETDON` tinyint(1) NOT NULL,
  `CVCQ` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `CVDT` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `madt` int(11) NOT NULL,
  `matongiao` int(11) DEFAULT NULL,
  `maquequan` int(11) NOT NULL,
  `manoio` int(11) NOT NULL,
  `macm` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `camtinhdang`
--

INSERT INTO `camtinhdang` (`STTCTD`, `MACB`, `THANGNAM`, `HOVATEN`, `DOANVIEN`, `NGAYCONGNHANCTD`, `CHUNGNHANCTD`, `LLNHAP`, `CBTHONGQUA`, `LLCHINH`, `XACMINH`, `YKIENCUTRU`, `YKIENDOANTHE`, `GIAYGTDANGVIEN`, `GIAYGTDOANTHE`, `XETKETNAP`, `CHUYENDANGUY`, `NGUOIHD`, `VIETDON`, `CVCQ`, `CVDT`, `gioitinh`, `ngaysinh`, `madt`, `matongiao`, `maquequan`, `manoio`, `macm`) VALUES
(2, 1, '03-2015', 'Quách Hồng Vũ', 1, '2015-03-17', '2015-03-26', 1, 0, 0, 0, 1, 1, 1, 0, '0', 0, '1) Trần Quang Hiếu\r\n2) Nguyễn Văn Tình', 1, 'Giảng viên', 'Không', 0, '2015-03-10', 1, NULL, 2, 2, 0),
(3, 2, '03-2015', 'Bùi Đức Anh', 0, '2015-03-20', '2015-03-28', 1, 1, 1, 0, 1, 1, 1, 0, '0', 0, '1) Bành Văn Trướng\r\n2) Nguyễn Rắc', 0, '', '', 0, '2015-03-16', 2, NULL, 3, 3, 0),
(4, 3, '03-2015', 'Võ Hoàng Ân', 0, '2015-03-03', '2015-03-05', 1, 1, 1, 1, 1, 1, 1, 1, '1', 0, '1) Nguyễn Hoàng Phi\r\n2) Đoàn TN', 0, 'Không', 'Không', 0, '2015-03-04', 1, NULL, 4, 4, 0),
(5, 2, '03-2015', 'Hoàng Phi Phi', 1, '2015-03-04', '2015-03-14', 1, 1, 1, 0, 1, 1, 1, 1, '1', 1, '1) Đoàn Chính Thuần\r\n2) Đoàn TN', 1, 'Không', 'Bí thư nè', 0, '2015-03-15', 1, NULL, 5, 5, 0),
(6, 1, '03-2015', 'Trà Thúy Duy', 0, '2015-03-18', '2015-03-26', 1, 1, 1, 1, 1, 1, 1, 1, '1', 1, '1) Lâm Triều Anh\r\n2) Đoàn TN', 1, '', '', 0, '2015-03-04', 1, 0, 1, 1, 0),
(7, 3, '03-2015', 'Cao Hoàng Phòng', 0, '2015-03-21', '2015-03-28', 1, 1, 1, 1, 1, 1, 1, 1, '1', 1, '1) Trần Đại Phong\r\n2) Đoàn TN', 1, '', '', 0, '2015-03-09', 1, 0, 2, 2, 0),
(8, 1, '02-2015', 'Quách Ngoan Vũ', 0, '2015-03-17', '2015-03-26', 1, 0, 0, 0, 0, 0, 0, 0, '0', 0, '1) Trần Quang Hiếu2) Nguyễn Văn Tình', 0, '', '', 0, '2015-03-06', 1, 0, 3, 3, 0),
(9, 1, '03-2015', 'Hoàng Phi Hồng', 1, '2015-03-02', '2015-03-25', 1, 0, 0, 0, 1, 1, 1, 1, '1', 0, '1) Lâm Triều Tiên\r\n2) Đoàn TN', 1, 'Không', 'Bí thư nè', 1, '2015-03-27', 1, NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `caphhd`
--

CREATE TABLE IF NOT EXISTS `caphhd` (
  `MADANGVIEN` int(11) NOT NULL,
  `STTCAPHHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `caphhd`
--

INSERT INTO `caphhd` (`MADANGVIEN`, `STTCAPHHD`) VALUES
(3, 1),
(8, 1),
(9, 1),
(11, 1),
(3, 2),
(8, 2),
(3, 3),
(8, 3),
(3, 4),
(8, 4),
(3, 6),
(8, 6),
(9, 6),
(11, 6),
(9, 7),
(11, 7),
(19, 7),
(9, 8),
(11, 8),
(19, 8),
(58, 9),
(53, 10),
(58, 10),
(9, 11),
(11, 11),
(9, 12),
(11, 12),
(53, 13),
(58, 13),
(58, 15),
(3, 16),
(8, 16),
(9, 16);

-- --------------------------------------------------------

--
-- Table structure for table `capthedang`
--

CREATE TABLE IF NOT EXISTS `capthedang` (
  `MADANGVIEN` int(11) NOT NULL,
  `STTCAPTHE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `capthedang`
--

INSERT INTO `capthedang` (`MADANGVIEN`, `STTCAPTHE`) VALUES
(9, 1),
(11, 1),
(19, 1),
(58, 1),
(66, 1),
(9, 2),
(11, 2),
(58, 2),
(66, 2),
(58, 3),
(66, 3),
(58, 6),
(66, 6),
(58, 7),
(66, 7),
(9, 8),
(11, 8),
(3, 9),
(8, 9),
(9, 9),
(8, 10),
(16, 10),
(18, 10),
(21, 10),
(58, 11),
(58, 12),
(58, 13),
(66, 13),
(58, 15),
(66, 15);

-- --------------------------------------------------------

--
-- Table structure for table `chibo`
--

CREATE TABLE IF NOT EXISTS `chibo` (
`MACB` int(11) NOT NULL,
  `TENCB` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chibo`
--

INSERT INTO `chibo` (`MACB`, `TENCB`) VALUES
(1, 'Chi bộ Sinh viên'),
(2, 'Chi bộ Công nghệ phần mềm'),
(3, 'Chi bộ hệ thống thông tin'),
(4, 'Chi bộ Mạng máy tính và Truyền thông'),
(5, 'Khoa học máy tính');

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
(71, 1),
(76, 1),
(58, 2),
(76, 2),
(58, 3),
(76, 3),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cvden`
--

INSERT INTO `cvden` (`STTCVDEN`, `NGAY`, `TENCVDEN`, `NOIGOIDEN`, `TAPHSLUU`, `GHICHUCVDEN`, `SOCV`) VALUES
(2, '0000-00-00', 'Công văn 1', 'Đảng bộ trường', '1', '', 1),
(3, '2015-03-12', 'Công Văn 2', 'Đảng bộ trường', '1', 'Ghi chú', 2),
(4, '2012-03-12', 'Công Văn 3', 'Đảng bộ trường', '1', 'Ghi chú', 3),
(5, '2010-03-12', 'Công Văn 4', 'Đảng bộ trường', '1', 'Ghi chú', 4),
(6, '2015-03-12', 'Công văn 3', 'Đảng bộ trường', '1', 'Gửi lên web', 3),
(7, '2015-04-02', 'Công văn 5', 'Đảng ủy trường', '2', 'Không', 10),
(8, '2015-04-02', 'Công văn 6', 'Đảng ủy trường', '2', 'Không', 6);

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
  `SOTIEN` int(11) NOT NULL,
  `HSLUONGTHANG` float NOT NULL,
  `HSPCCVTHANG` float NOT NULL,
  `HSPCTNTHANG` float NOT NULL,
  `HSVKTHANG` float NOT NULL,
  `TRUYTHUTHANG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `dangphi`
--

INSERT INTO `dangphi` (`THANGNAM`, `MADANGVIEN`, `SOTIEN`, `HSLUONGTHANG`, `HSPCCVTHANG`, `HSPCTNTHANG`, `HSVKTHANG`, `TRUYTHUTHANG`) VALUES
('01-2015', 9, 20, 3, 0, 0, 0, 0),
('01-2015', 11, 30, 3.2, 0, 0, 0, 1000),
('01-2015', 19, 0, 4.34, 0, 0, 0, 1000),
('02-2015', 9, 20, 3, 0, 0, 0, 2000),
('02-2015', 11, 30, 3.2, 0, 0, 0, 3000),
('02-2015', 19, 0, 4.34, 0, 0, 0, 0),
('03-2015', 9, 20, 3, 0, 0, 0, 1000),
('03-2015', 11, 30, 3.2, 0, 0, 0, 1500),
('03-2015', 19, 0, 4.34, 0, 0, 0, 0),
('04-2015', 9, 10, 3, 0, 0, 0, 1000),
('04-2015', 11, 20, 3.2, 0, 0, 0, 2000),
('04-2015', 19, 30, 4.34, 0, 0, 0, 3000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=77 ;

--
-- Dumping data for table `dangvien`
--

INSERT INTO `dangvien` (`MADANGVIEN`, `MANV`, `MAPX`, `PHU_MAPX`, `PHU_MAPX3`, `MADT`, `MANN`, `MAHOCVI`, `MACM`, `MATRINHDOVH`, `MATONGIAO`, `MAHOCHAM`, `PHU_MAPX2`, `HOTENKHAISINH`, `HOTENSUDUNG`, `BIDANH`, `GIOITINH`, `NGAYSINH`, `CMND`, `THAMGIACM`, `SUCKHOE`, `GDLIETSI`, `COCONGCM`, `NGUOIGT1`, `CVNGUOIGT1`, `NGUOIGT2`, `CVNGUOIGT2`, `HINHANH`, `EMAIL`, `SDT`, `XOA`) VALUES
(3, NULL, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, 'Nguyễn Hồng Nhung', 'Nguyễn Hồng Nhung', '', 0, '2015-03-17', 111111111, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Phó bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '2.jpg', 'nhung@nhung.com', '01667666181', 0),
(8, NULL, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, 'Bùi Văn Chung', 'Bùi Văn Chung', '', 1, '2015-03-04', 111111222, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Phó bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'avatar1.jpg', 'nhung@nhung.com', '01667666181', 0),
(9, NULL, 1, 2, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Tạ Quang Thắng Nè', 'Tạ Quang Thắng Nè', '', 1, '2015-03-01', 987645671, NULL, 'Tốt', 0, 0, 'Võ Huỳnh Trâm', 'Ủy viên BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'Penguins.jpg', '', '', 0),
(11, NULL, 1, 3, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Trần Tinh Tinh', 'Trần Tinh Tinh', '', 1, '2015-03-02', 123456789, NULL, 'Tốt', 0, 0, 'Tạ Quang Thắng Nè', 'Ủy viên BCH Đảng ủy', 'Công Đoàn Khoa CNTT&TT', '', 'Chrysanthemum.jpg', '', '', 0),
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
(58, 1, 3, 3, 3, 2, 1, 1, 1, 1, 2, 1, NULL, 'Nguyễn Chí Tâm', 'Nguyễn Chí Tâm', 'Bò', 1, '1993-01-18', 361212130, '0000-00-00', 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Võ Tấn Tài', 'Bí thư đoàn khoa', '2.jpg', 'nam@gmail.com', '01678114111', 0),
(59, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Nguyễn Hoài Nam', 'Nguyễn Hoài Nam', '', 1, '2015-03-24', 123333333, NULL, 'Tốt', 0, 0, 'Trần Hoài Niệm', 'Bí thư Đảng bộ', 'Đoàn TNCSHCM Khoa CNTT&TT', '', '1.jpg', '', '', 0),
(66, 1, 3, 3, 3, 3, 2, 3, 1, 1, 2, 1, 1, 'Nguyễn Quí Nghĩa', 'Nguyễn Quí Nghĩa', '', 1, '2015-03-24', 365431231, NULL, 'Khá', NULL, NULL, 'Nguyễn Văn A', 'Bí thư BCH Đảng ủy', 'Công Đoàn Khoa CNTT&TT', '', '2.jpg', 'nguyenchitam1993@gmail.com', '01658000057', 0),
(67, NULL, 10, 10, 10, 1, 2, 1, 1, 1, NULL, NULL, 1, 'Bùi Anh Tú', 'Bùi Anh Tú', '', 1, '1990-11-25', 365952222, NULL, 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', NULL, 'tu@gmail.com', '01678114111', 0),
(68, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Bùi Anh Tuấn', 'Bùi Anh Tuấn', '', 1, '2015-04-29', 123452124, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'untitled (1).png', '', '', 0),
(69, NULL, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 'Bùi Anh Tuấn', 'Bùi Anh Tuấn', '', 1, '2015-04-29', 123452126, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'repeat-background1.jpg', '', '', 0),
(71, 1, 10, 10, 10, 1, 1, NULL, 1, 1, NULL, 1, 2, 'Nguyễn Văn Tình', 'Nguyễn Văn Tình', '', 1, '2015-04-19', 123333335, NULL, 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'avatar2.jpg', 'tinh@gmail.com', '01678114111', 0),
(72, 1, 10, 10, 10, 1, 1, NULL, 1, 1, NULL, 1, 2, 'Nguyễn Văn Lê', 'Nguyễn Văn Lê', '', 1, '2015-04-19', 123333339, NULL, 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'user2-160x160.jpg', 'tinh@gmail.com', '01678114111', 0),
(73, 1, 10, 10, 10, 1, 1, NULL, 1, 1, NULL, 1, 2, 'Nguyễn Văn Lê', 'Nguyễn Văn Lê', '', 1, '2015-04-19', 123333340, NULL, 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'user2-160x160.jpg', 'tinh@gmail.com', '01678114111', 0),
(74, NULL, 10, 10, 10, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Nguyễn Hồng Như', 'Nguyễn Hồng Như', '', 1, '2015-04-29', 123333350, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'user1-128x128.jpg', 'nam@gmail.com', '01667666181', 0),
(75, NULL, 10, 10, 10, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Nguyễn Hồng Như', 'Nguyễn Hồng Như', '', 1, '2015-04-29', 123333351, NULL, 'Tốt', 0, 0, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'user1-128x128.jpg', 'nam@gmail.com', '01667666181', 0),
(76, NULL, 9, 9, 9, 1, 1, NULL, NULL, 1, NULL, NULL, 1, 'Nguyễn Văn Đô', 'Nguyễn Văn Đô', '', 1, '2015-04-22', 365641827, NULL, 'Tốt', 1, 1, 'Võ Tấn Tài', 'Bí thư BCH Đảng ủy', 'Đoàn TNCSHCM Khoa CNTT&TT', '', 'user8-128x128.jpg', 'do@gmail.com', '01678114111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dantoc`
--

CREATE TABLE IF NOT EXISTS `dantoc` (
`MADT` int(11) NOT NULL,
  `TENDT` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dantoc`
--

INSERT INTO `dantoc` (`MADT`, `TENDT`) VALUES
(1, 'Kinh'),
(2, 'Khme'),
(3, 'Hoa'),
(4, 'Chăm');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `dinuocngoai`
--

INSERT INTO `dinuocngoai` (`STT`, `MADANGVIEN`, `QUOCGIA`, `LYDODI`, `NGAYDI`, `NGAYVE`) VALUES
(1, 56, 'Mỹ', 'Học', '2015-03-25', '2015-03-24'),
(2, 57, 'Mỹ', 'Học', '2015-03-25', '2015-03-24'),
(59, 58, 'Mỹ', 'Học', '2015-03-25', '2015-03-24'),
(60, 58, 'Anh', 'Học', '2015-03-25', '2015-03-24'),
(61, 71, 'Campuchia', 'Không có', '2015-04-21', '2015-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `doantncshcm`
--

CREATE TABLE IF NOT EXISTS `doantncshcm` (
`STTVAODOAN` int(11) NOT NULL,
  `NGAYVAODOAN` date NOT NULL,
  `NOIVAODOAN` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MADANGVIEN` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `doantncshcm`
--

INSERT INTO `doantncshcm` (`STTVAODOAN`, `NGAYVAODOAN`, `NOIVAODOAN`, `MADANGVIEN`) VALUES
(2, '2015-03-24', 'Trường THCS Mang Thít', 58),
(3, '2015-03-03', 'asdasd', 56),
(4, '2015-03-24', 'Trường THPT XXX', 66),
(5, '2015-04-22', 'Trường THCS Không biết', 71),
(6, '2009-02-10', 'Trường THCS Trà Ôn', 76);

-- --------------------------------------------------------

--
-- Table structure for table `dscaphhd`
--

CREATE TABLE IF NOT EXISTS `dscaphhd` (
`STTCAPHHD` int(11) NOT NULL,
  `LOAICAPHHD` int(11) NOT NULL,
  `DOTCAPHHD` date NOT NULL,
  `CAPLAI` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `dscaphhd`
--

INSERT INTO `dscaphhd` (`STTCAPHHD`, `LOAICAPHHD`, `DOTCAPHHD`, `CAPLAI`) VALUES
(1, 1, '2015-03-19', 0),
(2, 1, '2015-03-20', 0),
(3, 2, '2015-03-21', 0),
(4, 2, '2015-03-28', 0),
(5, 2, '2015-03-28', 0),
(6, 3, '2015-03-31', 0),
(7, 1, '2015-03-17', 0),
(8, 3, '2015-03-17', 0),
(9, 2, '2015-03-19', 1),
(10, 1, '2015-03-26', 1),
(11, 1, '2015-04-22', 0),
(12, 2, '2015-04-22', 0),
(13, 1, '2015-04-29', 1),
(14, 2, '2015-04-29', 1),
(15, 2, '2015-04-22', 1),
(16, 3, '2015-04-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dscapthedang`
--

CREATE TABLE IF NOT EXISTS `dscapthedang` (
`STTCAPTHE` int(11) NOT NULL,
  `LOAICAPTHE` int(11) NOT NULL,
  `DOTCAPTHE` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `dscapthedang`
--

INSERT INTO `dscapthedang` (`STTCAPTHE`, `LOAICAPTHE`, `DOTCAPTHE`) VALUES
(1, 1, '2015-03-25'),
(2, 1, '2015-03-26'),
(3, 1, '1970-01-01'),
(4, 2, '2015-03-25'),
(5, 2, '2015-03-26'),
(6, 2, '2015-03-27'),
(7, 3, '2015-03-28'),
(8, 1, '2015-04-24'),
(9, 1, '2015-04-29'),
(10, 1, '2015-04-30'),
(11, 2, '2015-04-30'),
(12, 2, '1970-01-01'),
(13, 3, '1970-01-01'),
(14, 3, '2015-08-04'),
(15, 3, '2015-04-30');

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
(1, 1, 67, NULL, NULL),
(1, 2, 11, NULL, NULL),
(1, 3, 59, NULL, NULL),
(1, 4, 16, NULL, NULL),
(1, 4, 36, NULL, NULL),
(1, 8, 8, NULL, NULL),
(1, 8, 9, NULL, NULL),
(1, 8, 15, NULL, NULL),
(1, 8, 19, NULL, NULL),
(1, 8, 66, NULL, NULL),
(1, 8, 67, NULL, NULL),
(2, 1, 8, NULL, NULL),
(2, 1, 67, NULL, NULL),
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
  `NGAYCAPHH` date NOT NULL,
  `SOHHD` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=69 ;

--
-- Dumping data for table `huyhieudang`
--

INSERT INTO `huyhieudang` (`MAHH`, `MADANGVIEN`, `TENHH`, `NGAYCAPHH`, `SOHHD`) VALUES
(1, 53, '30 năm tuổi đảng', '2015-03-25', 0),
(66, 58, '30 năm tuổi đảng', '2018-11-03', 0),
(67, 58, '40 năm tuổi đảng', '2011-11-03', 0),
(68, 71, '30 năm tuổi đảng', '2015-04-22', 0);

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

--
-- Dumping data for table `khenthuongcb`
--

INSERT INTO `khenthuongcb` (`MAHTKT`, `MACB`, `NAM`, `LYDOKTCB`) VALUES
(1, 1, 2015, 'Chi bộ hoàn thành xuất sắc nhiệm vụ được giao'),
(1, 2, 2015, 'Chi bộ trong sạch vững mạnh'),
(2, 2, 2015, 'Chi bộ trong sạch vững mạnh');

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
(3, 1, 2014, '2014-06-10', 'dabf'),
(8, 1, 1999, '1999-11-25', 'Đảng ủy'),
(9, 2, 2015, '2015-04-28', 'Đảng ủy'),
(11, 1, 2015, '2015-12-05', 'Đảng ủy'),
(19, 1, 2015, '2015-08-19', 'Đảng ủy'),
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
(58, 1, 2015, '2015-03-31', 'Đảng ủy nè'),
(67, 1, 2015, '2015-04-22', 'Đảng ủy'),
(69, 1, 2014, '2014-01-08', 'Đảng ủy'),
(69, 2, 2015, '2015-04-29', 'Đảng ủy'),
(71, 2, 2015, '2015-04-29', 'Đảng ủy'),
(72, 2, 2015, '2015-04-29', 'Đảng ủy'),
(73, 2, 2015, '2015-04-30', 'Đảng ủy'),
(74, 1, 2015, '2015-04-01', 'Đảng ủy'),
(75, 1, 2015, '2015-04-01', 'Đảng ủy'),
(75, 2, 2015, '2015-04-22', 'Đảng ủy'),
(76, 1, 2015, '2015-04-01', 'Đảng ủy'),
(76, 2, 2015, '2015-04-01', 'Đảng ủy');

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
(9, 2, 2015, 'Không đi họp'),
(11, 1, 2015, 'Không đi họp'),
(53, 1, 2015, 'Không đi họp'),
(55, 1, 0, 'Không đi họp'),
(56, 1, 0, 'Không đi họp'),
(58, 1, 1970, 'Không đi họp'),
(58, 1, 2015, 'Không đi họp'),
(71, 1, 2015, 'Không đi họp'),
(76, 1, 2015, 'Không đi họp'),
(76, 2, 2015, 'Không đi họp nhiều lần');

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
(3, 9, 2, NULL, 1, '100000CTF', '1970-01-01', '2015-03-02', 'Hệ thống thông tin', NULL, '1', 4, 0.5, 0.1, 0.05, ''),
(8, 9, 2, NULL, 1, '100001CTF', '2015-01-07', '2015-03-10', 'Mạng máy tính và truyền thông', NULL, '1', 3, 0.6, 0.02, 0.05, ''),
(9, 10, 3, NULL, 1, '100002CTF', '1970-01-01', '2015-03-23', 'Công nghệ phần mềm', NULL, '1', 3, 0, 0, 0, ''),
(11, 10, 3, NULL, 1, '100003CTF', '1970-01-01', '2015-03-24', 'Hệ thống thông tin', NULL, '1', 3.2, 0, 0, 0, ''),
(13, NULL, 4, NULL, 1, '100004CTF', '1970-01-01', '2015-03-16', 'Mạng máy tính và truyền thông', NULL, '1', 4.4, 0, 0, 0, ''),
(15, 9, 4, NULL, 1, '100005CTF', '1970-01-01', '2015-03-16', 'Mạng máy tính và truyền thông', NULL, '1', 4.74, 0, 0, 0, ''),
(16, 9, 4, NULL, 1, '100006CTF', '1970-01-01', '2015-03-23', 'Hệ thống thông tin', NULL, '1', 5.08, 0, 0, 0, ''),
(18, 9, 4, NULL, 1, '100007CTF', '0000-00-00', '2015-03-30', 'Công nghệ phần mềm', NULL, '1', 5.42, 0, 0, 0, ''),
(19, 9, 3, NULL, 1, '100008CTF', '0000-00-00', '2015-03-17', 'Công nghệ phần mềm', NULL, '1', 4.34, 0, 0, 0, ''),
(20, 9, 1, NULL, 1, '100009CTF', '0000-00-00', '2015-03-17', 'Công nghệ phần mềm', NULL, '1', 2.34, 0, 0, 0, ''),
(21, 9, 1, NULL, 1, '100010CTF', '0000-00-00', '2015-03-03', 'Công nghệ phần mềm', NULL, '1', 2.67, 0, 0, 0, ''),
(22, 8, 1, NULL, 1, '100011CTF', '0000-00-00', '2015-03-23', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(23, 8, 1, NULL, 1, '100012CTF', '0000-00-00', '2015-03-23', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(25, 8, 1, NULL, 1, '100013CTF', '0000-00-00', '2015-03-10', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(26, 8, 1, NULL, 1, '100014CTF', '0000-00-00', '2015-03-16', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(29, 8, 1, NULL, 1, '100015CTF', '0000-00-00', '2015-03-18', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(30, 8, 1, NULL, 1, '100016CTF', '0000-00-00', '2015-03-25', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(32, 8, 1, NULL, 1, '100017CTF', '0000-00-00', '2015-03-27', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(33, 8, 1, NULL, 1, '100018CTF', '0000-00-00', '2015-03-05', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(34, 8, 1, NULL, 1, '100019CTF', '0000-00-00', '2015-03-05', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(36, 8, 1, NULL, 1, '100020CTF', '0000-00-00', '2015-03-06', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(37, 8, 1, NULL, 1, '100021CTF', '0000-00-00', '2015-03-05', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(38, 8, 1, NULL, 1, '100022CTF', '0000-00-00', '2015-03-02', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(39, 8, 1, NULL, 1, '100023CTF', '0000-00-00', '2015-03-03', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(41, 8, 1, NULL, 1, '100024CTF', '0000-00-00', '2015-03-16', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(43, 8, 1, NULL, 1, '100025CTF', '0000-00-00', '2015-03-15', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(44, 8, 1, NULL, 1, '100026CTF', '0000-00-00', '2015-03-24', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(45, 8, 1, NULL, 1, '100027CTF', '0000-00-00', '2015-03-29', 'Hệ thống thông tin', NULL, '1', NULL, NULL, NULL, NULL, ''),
(46, 8, 1, NULL, 1, '100028CTF', '0000-00-00', '2015-03-23', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(47, 8, 1, NULL, 1, '100029CTF', '0000-00-00', '2015-03-03', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, ''),
(51, NULL, 1, NULL, 1, '100030CTF', '0000-00-00', '2015-03-25', 'Công nghệ phần mềm', '2015-03-10', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(52, NULL, 1, NULL, 1, '100031CTF', '0000-00-00', '2015-03-25', 'Công nghệ phần mềm', '2015-03-10', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(53, NULL, 1, NULL, 1, '100032CTF', '0000-00-00', '2015-03-25', 'Công nghệ phần mềm', '2015-03-10', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(55, NULL, 1, NULL, 1, '100033CTF', '0000-00-00', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(56, NULL, 1, NULL, 1, '100034CTF', '0000-00-00', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(57, NULL, 1, NULL, 1, '100035CTF', '0000-00-00', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(58, NULL, 1, NULL, 1, '123123CTF', '2015-03-31', '1970-01-01', 'Công nghệ phần mềm', '2015-04-01', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(59, NULL, 1, NULL, 1, '123124AG', '1970-01-01', '1970-01-01', 'Mạng máy tính và truyền thông', '1970-01-01', '1', NULL, NULL, NULL, NULL, ''),
(66, NULL, 1, NULL, 1, '100123CTF', '2015-03-25', '2015-03-31', 'Hệ thống thông tin', '2015-04-01', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(67, NULL, 5, NULL, 1, '123133CTF', '1970-01-01', '2015-04-01', 'Chi bộ hồi đó', NULL, '2', NULL, NULL, NULL, NULL, ''),
(68, NULL, 1, NULL, 1, '', '1970-01-01', '2015-04-21', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(69, NULL, 1, NULL, 1, '', '1970-01-01', '2015-04-21', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(71, NULL, 1, NULL, 1, '123111CTF', '1970-01-01', '2015-04-01', 'Công nghệ phần mềm', '2015-04-30', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(72, NULL, 1, NULL, 1, '123111CTF', '1970-01-01', '2015-04-01', 'Công nghệ phần mềm', '2015-04-30', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(73, NULL, 1, NULL, 1, '123111CTF', '1970-01-01', '2015-04-01', 'Công nghệ phần mềm', '2015-04-30', '1', NULL, NULL, NULL, NULL, 'Công nghệ phần mềm'),
(74, NULL, 1, NULL, 1, '', '1970-01-01', '2015-04-29', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(75, NULL, 1, NULL, 1, '', '1970-01-01', '2015-04-29', 'Công nghệ phần mềm', NULL, '1', NULL, NULL, NULL, NULL, ''),
(76, NULL, 4, NULL, 1, '', '1970-01-01', '2014-11-04', 'Mạng máy tính và truyền thông', NULL, '1', NULL, NULL, NULL, NULL, '');

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
('2015-03-22'),
('2015-03-31'),
('2015-04-01'),
('2015-04-02'),
('2015-04-07'),
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
  `TONGSOUVBCH` int(11) DEFAULT NULL,
  `SLCOMAT` int(11) DEFAULT NULL,
  `SLVANGMAT` int(11) DEFAULT NULL,
  `LYDOVANG` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CHUTRI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CVCHUTRI` varchar(100) CHARACTER SET utf8 NOT NULL,
  `THUKY` varchar(100) CHARACTER SET utf8 NOT NULL,
  `UUKHUYETDIEM` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `SLTANTHANH` int(11) NOT NULL,
  `SLKTANTHANH` int(11) NOT NULL,
  `LYDOKTANTHANH` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NQDU` tinyint(1) NOT NULL,
  `SODANGVIEN` int(11) DEFAULT NULL,
  `SODVCT` int(11) DEFAULT NULL,
  `SODVDB` int(11) DEFAULT NULL,
  `SODVCTCO` int(11) DEFAULT NULL,
  `SODVDBCO` int(11) DEFAULT NULL,
  `SODVCO` int(11) DEFAULT NULL,
  `SODVVANG` int(11) DEFAULT NULL,
  `SODVCTVANG` int(11) DEFAULT NULL,
  `SODVDBVANG` int(11) DEFAULT NULL,
  `NOINHAN` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `NGUOILAP` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `CVNGUOILAP` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `LYDODVVANG` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `STTCTD` int(11) NOT NULL,
  `LOAINQ` tinyint(1) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nghiquyet`
--

INSERT INTO `nghiquyet` (`SONQ`, `NGAY`, `MACB`, `TONGSOUVBCH`, `SLCOMAT`, `SLVANGMAT`, `LYDOVANG`, `CHUTRI`, `CVCHUTRI`, `THUKY`, `UUKHUYETDIEM`, `SLTANTHANH`, `SLKTANTHANH`, `LYDOKTANTHANH`, `NQDU`, `SODANGVIEN`, `SODVCT`, `SODVDB`, `SODVCTCO`, `SODVDBCO`, `SODVCO`, `SODVVANG`, `SODVCTVANG`, `SODVDBVANG`, `NOINHAN`, `NGUOILAP`, `CVNGUOILAP`, `LYDODVVANG`, `STTCTD`, `LOAINQ`, `MADANGVIEN`) VALUES
(2, '2015-03-22', 3, NULL, NULL, NULL, NULL, 'Đoàn Hòa Minh', 'Phó bí thư Đảng ủy', 'Huỳnh Kim Hoa', '<p><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">[Intro] (x4)&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">(La la la la la)&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">[Verse 1]&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Uh, tell ''em where I''m from&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Finger on the pump make the sixth straight jump from SoCal&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Hollywood to the slums&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Chronic smoke get burnt by the California sun&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">On the west side, east coast where you at?&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Just got to New York like a gnat on a jet&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">To London, to Brazil, to Quebec&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Like the whole damn world took effect to Ferg&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;">Tell ''em&nbsp;</span><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><br style="box-sizing: border-box; color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px; background-color: #f6f6f6;" /><span style="color: #333333; font-family: Roboto, ''segoe ui'', Helvetica, Arial, sans-serif; f', 25, 0, 'Không', 0, 30, 20, 10, 20, 5, 25, 5, 0, 5, '<p>- Lưu văn ph&ograve;ng Đảng ủy</p>\r\n<p>- Lưu chi bộ</p>', 'Đoàn Hòa Minh', 'Bí thư Đảng ủy', 'Bận công tác khác', 4, 0, 0),
(3, '2015-03-22', NULL, 30, 20, 10, 'Bận công tác khác', 'Đoàn Hòa Minh', 'Phó bí thư Đảng ủy', 'Huỳnh Kim Hoa', '<p>Intro] (x4)</p>\r\n<p>(La la la la la)</p>\r\n<p>[Verse 1] Uh, tell ''em where I''m from Finger on the pump</p>\r\n<p>make the sixth straight jump from SoCal Hollywood to the slu</p>\r\n<p>ms Chronic smoke get burnt by the California sun On the west side</p>\r\n<p>, east coast where you at? Just got to New York like a gnat on a jet To</p>\r\n<p>London, to Brazil, to Quebec Like the whole damn world took effect to</p>\r\n<p>Tell ''em [Pre-Hook] Lay back, slow down Better represent when we to</p>\r\n<p>your town Lay back, slow down Whatchu represent when we come to y</p>\r\n<p>our town Say, get in with the business I''ma be there in a minute I just b</p>\r\n<p>ooked a pilot''s ticket Thinking Russia need a visit I''ma run it to the limit</p>\r\n<p>be on my way to Venice [Hook 1] L.A. got the people saying (la la la la la</p>\r\n<p>) Brooklyn saying (la la la la la) Hacienda saying (la la la la la) Vegas sai</p>\r\n<p>ng (la la la la la) Rio saying (la la la la la) Tokyo saying (la la la la la) Do</p>\r\n<p>wn under saying (la la la la la) Miami saying (la la la la la)&nbsp;</p>', 25, 0, 'Không', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>- Lưu văn ph&ograve;ng Đảng ủy</p>\r\n<p>&nbsp;</p>', 'Đoàn Hòa Minh', 'Bí thư Đảng ủy', NULL, 2, 0, 0);

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
(8, 1, 'Cha Nhung', 'xã Hựu Thành, huyện Trà Ôn, tỉnh Vĩnh Long', 'Cha', 'Làm ruộng', 'Bình thường', '1984-05-21'),
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
(66, 2, 'Mẹ 1', 'Cần Thơ', 'Mẹ', 'Buôn bán', 'Bình thường', '1972-03-04'),
(71, 1, 'Cha Tình', 'Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Cha', 'Buôn bán', 'Bình thường', '2015-04-28'),
(76, 1, 'Cha Đô', 'An Thạnh, Châu Đốc, An Giang', 'Cha', 'Buôn bán', 'Bình thường', '1970-04-18'),
(76, 2, 'Mẹ Đô', 'An Thạnh, Châu Đốc, An Giang', 'Mẹ', 'Buôn bán', 'Bình thường', '1970-04-18');

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

--
-- Dumping data for table `phanloaicb`
--

INSERT INTO `phanloaicb` (`NAM`, `MACB`, `MUCPLCB`) VALUES
(2014, 1, '2'),
(2015, 1, '1'),
(2015, 2, '1'),
(2015, 3, '1'),
(2015, 4, '1'),
(2015, 5, '2');

-- --------------------------------------------------------

--
-- Table structure for table `phanloaidv`
--

CREATE TABLE IF NOT EXISTS `phanloaidv` (
  `MADANGVIEN` int(11) NOT NULL,
  `NAM` int(11) NOT NULL,
  `MUCPLDV` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `phanloaidv`
--

INSERT INTO `phanloaidv` (`MADANGVIEN`, `NAM`, `MUCPLDV`) VALUES
(3, 2015, '1'),
(8, 2015, '1'),
(9, 2014, '1'),
(9, 2015, '2'),
(11, 2014, '3'),
(11, 2015, '3'),
(15, 2015, '2'),
(16, 2015, '2'),
(18, 2015, '2'),
(19, 2014, '1'),
(19, 2015, '1'),
(20, 2015, '3'),
(21, 2015, '2'),
(22, 2015, '2'),
(23, 2015, '3'),
(25, 2015, '2'),
(26, 2015, '3'),
(29, 2015, '1'),
(30, 2015, '2'),
(32, 2015, '2'),
(33, 2015, '2'),
(34, 2015, '2'),
(36, 2015, '2'),
(37, 2015, '2'),
(38, 2015, '2'),
(39, 2015, '3'),
(41, 2015, '1'),
(43, 2015, '3'),
(44, 2015, '4'),
(45, 2015, '1'),
(46, 2015, '3'),
(47, 2015, '1'),
(51, 2015, '4'),
(52, 2015, '1'),
(53, 2015, '2'),
(55, 2015, '1'),
(56, 2015, '2'),
(57, 2015, '3'),
(58, 2015, '4'),
(59, 2015, '2'),
(66, 2015, '4');

-- --------------------------------------------------------

--
-- Table structure for table `phuongxa`
--

CREATE TABLE IF NOT EXISTS `phuongxa` (
`MAPX` int(11) NOT NULL,
  `MAQH` int(11) NOT NULL,
  `TENPX` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `phuongxa`
--

INSERT INTO `phuongxa` (`MAPX`, `MAQH`, `TENPX`) VALUES
(1, 1, 'Phường Hưng Lợi'),
(2, 1, 'Phường Xuân Khánh'),
(3, 2, 'Phường 1'),
(4, 3, 'Xã Mỹ Hòa'),
(5, 2, 'Phường 2'),
(6, 4, 'Xã Mỹ An'),
(7, 5, 'Xã Sơn Tịnh'),
(8, 6, 'Xã Thạnh Phú'),
(9, 7, 'Xã Vĩnh Thạnh'),
(10, 8, 'Xã Phong Thạnh'),
(11, 3, 'Xã Hựu Thành');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE IF NOT EXISTS `quanhuyen` (
`MAQH` int(11) NOT NULL,
  `MATT` int(11) NOT NULL,
  `TENQH` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`MAQH`, `MATT`, `TENQH`) VALUES
(1, 1, 'Quận Ninh Kiều'),
(2, 2, 'Thị xã Ngã Năm'),
(3, 3, 'Huyện Trà Ôn'),
(4, 3, 'Huyện Mang Thít'),
(5, 4, 'Huyện Chợ Lách'),
(6, 2, 'Huyện Mỹ Xuyên'),
(7, 5, 'TP Vị Thanh'),
(8, 6, 'Huyện Giá Rai');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=83 ;

--
-- Dumping data for table `quatrinhct`
--

INSERT INTO `quatrinhct` (`STTQT`, `MADANGVIEN`, `LAMCV`, `DONVI`, `NGAYNHANCV`, `NGAYHETCV`) VALUES
(1, 55, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-03-18', '2015-03-24'),
(3, 57, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-03-18', '2015-03-24'),
(77, 58, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-03-18', '2015-03-24'),
(78, 58, 'Dọn rác', 'Khoa CNTT&TT', '2015-03-01', '2015-03-03'),
(79, 58, 'Lao công', 'Khoa CNTT&TT', '2015-03-01', '2015-03-31'),
(80, 71, 'Bí thư', 'Lớp kỹ thuật phần mềm 2', '2015-04-29', '2015-04-29'),
(81, 76, 'Công nhân ', 'Công ty A', '2015-04-01', '2015-04-01'),
(82, 76, 'Giám đốc', 'Công ty B', '2015-04-02', '2015-04-02');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `quatrinhdt`
--

INSERT INTO `quatrinhdt` (`STTDT`, `MADANGVIEN`, `TENTRUONG`, `NGANHHOC`, `NAMDB`, `NAMKT`, `HINHTHUCHOC`, `VB_CC`) VALUES
(1, 56, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(2, 57, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(59, 58, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(60, 58, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(61, 71, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(62, 76, 'Đại học Cần Thơ', 'Kỹ thuật phần mềm', '2011', '2015', 'Chính quy', 'Kỹ sư công nghệ thông tin'),
(63, 76, 'Đại học Cần Thơ', 'Kinh tế', '2011', '2015', 'Chính quy', 'Cử nhân kinh tế');

-- --------------------------------------------------------

--
-- Table structure for table `quyetdinh`
--

CREATE TABLE IF NOT EXISTS `quyetdinh` (
`SOQD` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `TENQD` varchar(500) CHARACTER SET utf8 NOT NULL,
  `CACQD` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `NOINHAN` varchar(300) CHARACTER SET utf8 NOT NULL,
  `NGUOIKYQD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CVNGUOIKYQD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `QDDU` tinyint(1) NOT NULL,
  `CACCANCU` varchar(5000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quyetdinh`
--

INSERT INTO `quyetdinh` (`SOQD`, `NGAY`, `TENQD`, `CACQD`, `NOINHAN`, `NGUOIKYQD`, `CVNGUOIKYQD`, `QDDU`, `CACCANCU`) VALUES
(1, '2015-03-22', '<p>Về việc khen thưởng Đảng vi&ecirc;n</p>', '<p>Điều 1: Tặng giấy khen cho 08 đảng vi&ecirc;n xếp loại "Ho&agrave;n th&agrave;nh xuất sắc nhiệm vụ" năm 2014:</p>\r\n<p style="padding-left: 30px;">1. Đ/c Đo&agrave;n H&ograve;a Minh, Chi bộ Khoa học m&aacute;y t&iacute;nh.</p>\r\n<p style="padding-left: 30px;">2. Đ/c Nguyễn Văn Linh, Chi bộ C&ocirc;ng nghệ phần mềm</p>\r\n<p style="padding-left: 30px;">3. Đ/c Trần Cao Đệ, Chi bộ C&ocirc;ng nghệ th&ocirc;ng tin</p>\r\n<p style="padding-left: 30px;">4. Đ/c Huỳnh Xu&acirc;n Hiệp, chi bộ C&ocirc;ng nghệ phần mềm</p>\r\n<p style="padding-left: 30px;">5. Đ/c Phan Tấn T&agrave;i, Chi bộ Hệ thống th&ocirc;ng tin</p>\r\n<p style="padding-left: 30px;">6. Đ/c V&otilde; Huỳnh Tr&acirc;m, Chi bộ C&ocirc;ng nghệ phần mềm</p>\r\n<p style="padding-left: 30px;">7. Đ/c Trần Minh T&acirc;n, Chi bộ&nbsp;Sinh Vi&ecirc;n</p>\r\n<p style="padding-left: 30px;">8. Đ/c Phan Thanh T&acirc;m, Chi bộ &nbsp;Văn ph&ograve;ng.</p>\r\n<p>Điều 2: Mức tiền thưởng k&egrave;m theo giấy khen l&agrave; 345.000 đồng/giấy khen, tr&iacute;ch từ quỹ đảng ph&iacute; của Đảng bộ.</p>\r\n<p>Điều 3: C&aacute;c chi bộ trực thuộc v&agrave; đảng vi&ecirc;n c&oacute; t&ecirc;n chịu tr&aacute;ch nhiệm thi h&agrave;nh Quyết định n&agrave;y.</p>', '<p>- Như điều 3</p>\r\n<p>- Đảng ủy trường (để b&aacute;o c&aacute;o)</p>\r\n<p>- Lưu Đảng ủy</p>', 'PHAN TẤN TÀI', 'P. BÍ THƯ', 0, '<p>- Căn cứ Quy định số 45 - QĐ/TW ng&agrave;y 01/11/2011 của Ban chấp h&agrave;nh Trung ương về "thi h&agrave;nh điều lệ Đảng"</p>\r\n<p>- Căn cứ Hướng dẫn số 37 - HD/VPTW, ng&agrave;y 20/12/2010 của Văn ph2ong Trung ương đảng hướng dẫn "về mức tiền thưởng c&aacute;c h&igrave;nh thức khen thưởng tổ chức đảng v&agrave; đảng vi&ecirc;n"; Quy định số 06-QĐ/TƯm ng&agrave;y 17/10/2012 của Th&agrave;nh ủy Cần Thơ về "khen thưởng tổ chức đảng v&agrave; đảng vi&ecirc;n";</p>\r\n<p>- Căn cứ Hướng dẫn số 17-HD/ĐU ng&agrave;y 04/11/2014 của Đảng ủy Trường Đại học Cần Thơ về việc "Kiểm điểm tập thể, c&aacute; nh&acirc;n v&agrave; đ&aacute;nh gi&aacute; , ph&acirc;n loại chất lượng cơ sơ đảng, đảng vi&ecirc;n năm 2014.</p>\r\n<p>- Căn cứ kết quả xếp loại chất lượng đảng vi&ecirc;n năm 2014.</p>');

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
('admin', NULL, 'admin'),
('chibocnpm', 2, 'chibocnpm'),
('chibohttt', 3, 'chibohttt'),
('chibokhmt', 5, 'chibokhmt'),
('chibommttt', 4, 'chibommttt'),
('chibosinhvien', 1, 'chibosinhvien');

-- --------------------------------------------------------

--
-- Table structure for table `thangnam`
--

CREATE TABLE IF NOT EXISTS `thangnam` (
  `THANGNAM` varchar(7) CHARACTER SET utf8 NOT NULL,
  `STTLUONGCB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `thangnam`
--

INSERT INTO `thangnam` (`THANGNAM`, `STTLUONGCB`) VALUES
('01-2015', NULL),
('02-2015', NULL),
('03-2015', NULL),
('04-2015', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thedv`
--

CREATE TABLE IF NOT EXISTS `thedv` (
`MATHE` int(11) NOT NULL,
  `MADANGVIEN` int(11) NOT NULL,
  `NGAYCAPTHE` date DEFAULT NULL,
  `SOTHE` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `thedv`
--

INSERT INTO `thedv` (`MATHE`, `MADANGVIEN`, `NGAYCAPTHE`, `SOTHE`) VALUES
(2, 58, '0000-00-00', '123123123'),
(3, 66, NULL, '12345678'),
(4, 71, '2015-04-15', '12312313');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE IF NOT EXISTS `thongbao` (
`STTTB` int(11) NOT NULL,
  `NGAY` date NOT NULL,
  `TENTB` varchar(200) CHARACTER SET utf8 NOT NULL,
  `NOIDUNG` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `MACB` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`STTTB`, `NGAY`, `TENTB`, `NOIDUNG`, `MACB`) VALUES
(1, '2015-03-31', 'Thông báo 1', '<p>123123123123khaskjdha</p><p>sd</p><p>&nbsp;</p><p><a href="C:\\Users\\ChiTamPoPo\\Downloads\\Documents\\MaSV_1111334.pdf" target="_blank">đ&iacute;nh k&egrave;m</a></p>', 0),
(2, '2015-04-01', 'Thông báo 2', '<p><strong><em>Trường Đại học Kiến Tr&uacute;c TP.Hồ Ch&iacute; Minh được chọn 05 hồ sơ dự tuyển Hạng mục "Nghị lực" v&agrave; 02 hồ sơ dự truyển Hạng mục "Triển vọng"&nbsp; cho giải thưởng Kova lần thứ 13 năm 2015.</em></strong></p>\r\n<p>Theo th&ocirc;ng b&aacute;o của ph&ograve;ng Đ&agrave;o tạo v&agrave; C&ocirc;ng t&aacute;c sinh vi&ecirc;n, c&aacute;c sinh vi&ecirc;n được x&eacute;t chọn trao Giải thưởng Kova được mời dự lễ trao Giải thưởng Kova 2015 v&agrave;o th&aacute;ng 11/2015 tại TP.Hồ Ch&iacute; Minh.Mỗi suất học bổng trị gi&aacute; 8.000.000 đồng.</p>\r\n<p><img src="http://uah.edu.vn/datafiles_kientruc/setmulti/1tintuc/thongbao/2015/kova2015.jpg" alt="" width="490" height="149" /></p>\r\n<p>Xem chi tiết th&ocirc;ng b&aacute;o <a title="Tệp đ&iacute;nh k&egrave;m" href="http://uah.edu.vn/datafiles_kientruc/setmulti/1tintuc/thongbao/2015/kova2015.pdf" target="_blank">TẠI Đ&Acirc;Y</a></p>', 0),
(3, '2015-04-01', 'Thông báo mở lớp Bồi dưỡng lý luận chính trị dành cho đảng viên mới kết nạp và Lịch học', '<p>- &nbsp;Thực hiện kế hoạch c&ocirc;ng t&aacute;c năm 2015 của Đảng ủy Trường ĐHCT, Ban Thường vụ Đảng ủy tổ chức lớp Bồi dưỡng l&yacute; luận ch&iacute;nh trị<span class="apple-converted-space">&nbsp;</span>d&agrave;nh cho đảng vi&ecirc;n mới kết nạp, đ&acirc;y l&agrave; thủ tục bắt buộc trong quy tr&igrave;nh x&eacute;t chuyển đảng ch&iacute;nh thức cho đảng vi&ecirc;n dự bị&nbsp;(<a href="http://cpv.ctu.edu.vn/tintuc_sukien/thongbao/Thong%20bao%20mo%20lop%20boi%20duong%20Dang%20vien%20moi%20(03_2015).doc" target="_blank">xem file đ&iacute;nh k&egrave;m</a>).</p>\r\n<p>-<a href="http://cpv.ctu.edu.vn/tintuc_sukien/thongbao/Lich%20giang%20Lop%20DVM%20Moi%2004_2015_Final.xls" target="_blank"> Lịch học Lớp bồi dưỡng Đảng vi&ecirc;n mới đợt 04/2015</a>.</p>', 0),
(4, '2015-04-01', 'Thư mời tham dự Hội nghị Tổng kết năm 2014, triển khai Nghị quyết nhiệm vụ năm 2015', '<p style="text-align: center;"><strong>THƯ MỜI</strong></p>\r\n<p style="text-align: center;"><strong>Tham dự Hội nghị Tổng kết c&ocirc;ng t&aacute;c năm 2014</strong></p>\r\n<p style="text-align: center;"><strong>Triển khai nhiệm vụ năm 2015</strong></p>\r\n<p style="text-align: center;">&nbsp;K&iacute;nh gửi: Đảng ủy, Ban Gi&aacute;m hiệu,</p>\r\n<p style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;C&aacute;c cơ quan của Đảng ủy v&agrave; c&aacute;c tổ chức đảng, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; L&atilde;nh đạo c&aacute;c đơn vị v&agrave; đo&agrave;n thể trực thuộc Trường.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p>Thực hiện Quy chế l&agrave;m việc của Đảng ủy Trường Đại học Cần Thơ nhiệm kỳ 2010-2015, Ban Thường vụ Đảng ủy tổ chức Hội nghị Tổng kết c&ocirc;ng t&aacute;c năm 2014, triển khai Nghị quyết nhiệm vụ năm 2015.</p>\r\n<p><u>Th&agrave;nh phần</u>:</p>\r\n<p>+ C&aacute;c đ/c Đảng ủy vi&ecirc;n trường v&agrave; Ban Gi&aacute;m hiệu,</p>\r\n<p>+ Đ/c B&iacute; thư đảng bộ, chi bộ cơ sở v&agrave; chi bộ trực thuộc đảng bộ cơ sở (nếu đ/c B&iacute; thư vắng th&igrave; cử đ/c Ph&oacute; B&iacute; thư đi dự),</p>\r\n<p>+ C&aacute;c đ/c l&agrave; thủ trưởng c&aacute;c đơn vị trực thuộc Trường,</p>\r\n<p>+ C&aacute;c đ/c l&agrave; th&agrave;nh vi&ecirc;n c&aacute;c cơ quan tham mưu, gi&uacute;p việc của Đảng ủy trường <em>(Ban Tuy&ecirc;n gi&aacute;o, Ban Tổ chức, Ủy ban Kiểm tra, Ban Chuy&ecirc;n m&ocirc;n, Ban D&acirc;n vận, Bộ phận gi&uacute;p việc Ban Thường vụ Đảng ủy về tiếp tục đẩy mạnh việc học tập v&agrave; l&agrave;m theo tấm gương đạo đức Hồ Ch&iacute; Minh, Tổ Cộng t&aacute;c vi&ecirc;n dư luận x&atilde; hội, Ban Chỉ đạo 94ĐHCT)</em>,</p>\r\n<p>+ C&aacute;c đ/c l&agrave; B&aacute;o c&aacute;o vi&ecirc;n của Đảng ủy trường,</p>\r\n<p><u>Thời gian</u>: <strong>L&uacute;c 13 giờ 30, ng&agrave;y 13/01/2015.</strong></p>\r\n<p><u>Địa điểm</u>: Hội trường II, Khu Hiệu Bộ - ĐHCT.</p>\r\n<p>Đề nghị c&aacute;c đồng ch&iacute; sắp xếp thời gian tham dự đầy đủ v&agrave; đ&uacute;ng giờ, nhờ ph&ograve;ng Kế hoạch &ndash; Tổng hợp l&ecirc;n lịch c&ocirc;ng t&aacute;c tuần v&agrave; bố tr&iacute; Hội trường.</p>\r\n<p style="text-align: center; padding-left: 450px;">&nbsp;Tr&acirc;n trọng.</p>\r\n<p style="text-align: center; padding-left: 450px;"><strong>T/M BAN THƯỜNG VỤ</strong></p>\r\n<p style="text-align: center; padding-left: 450px;">B&Iacute; THƯ</p>\r\n<p style="text-align: center; padding-left: 450px;"><strong>&nbsp;</strong>Đ&atilde; k&yacute;</p>\r\n<p style="text-align: center; padding-left: 480px;"><strong>Trần Thị Thanh Hiền</strong></p>\r\n<p>Văn bản phục vụ Hội nghị (sẽ chuyển qua Email)</p>', 0),
(5, '2015-04-01', 'Kế hoạch thực hiện Chỉ thị số 36-CT/TW ngày 30/5/2014 của Bộ Chính trị về đại hội đảng bộ các cấp ti', '<p>-&nbsp;<a href="http://123.30.190.43:8080/tiengviet/tulieuvankien/vankiendang/details.asp?topic=191&amp;subtopic=305&amp;leader_topic=985&amp;id=BT1291459101" target="_blank">Hướng dẫn số 26-HD/TW</a>, ng&agrave;y 18/8/2014 của Ban Tổ chức Trung ương "<em>Về c&ocirc;ng t&aacute;c nh&acirc;n sự cấp ủy tại đại hội đảng bộ c&aacute;c cấp&nbsp;tiến tới Đại hội đại biểu to&agrave;n quốc lần thứ XII của Đảng</em>"</p>\r\n<p>&nbsp;</p>\r\n<p><a href="http://cpv.ctu.edu.vn/DH2015-2020/VAN%20BAN%20CHI%20DAO%20DH/KH_79-TU_Thuc%20hien%20CT36TW%20DH%20Dang%20bo%20cac%20cap.pdf" target="_blank">- Kế hoạch số 79-KH/TU</a>, ng&agrave;y 09/9/2014 của Th&agrave;nh ủy Cần Thơ về "<em>Thực hiện Chỉ thị số 36-CT/TW ng&agrave;y 30/5/2014 của Bộ Ch&iacute;nh trị về đại hội đảng bộ c&aacute;c cấp tiến tới Đại hội đại biểu to&agrave;n quốc lần thứ XII của Đảng</em>"</p>\r\n<p>&nbsp;</p>\r\n<p><a href="http://cpv.ctu.edu.vn/DH2015-2020/VAN%20BAN%20CHI%20DAO%20DH/HD_09-TU_Cong%20tac%20nhan%20su%20cap%20uy%20NK2015-2020.pdf" target="_blank">- Hướng dẫn số 09-HD/TU</a>,&nbsp;ng&agrave;y 09/9/2014 của Th&agrave;nh ủy Cần Thơ hướng dẫn về&nbsp;"<em>C&ocirc;ng t&aacute;c nh&acirc;n sự cấp ủy tại đại hội đảng bộ c&aacute;c cấp nhiệm kỳ 2015-2020</em>"</p>\r\n<p>&nbsp;</p>\r\n<p><a href="http://cpv.ctu.edu.vn/DH2015-2020/VAN%20BAN%20CHI%20DAO%20DH/HD_14-BTCTU_Thi%20diem%20DHDBCS%20truc%20tiep%20bau%20BTV-BT-PBT%20cap%20uy.pdf" target="_blank">- Hướng dẫn số 14-HD/BTCTU</a>,&nbsp;ng&agrave;y 06/10/2014 của Ban Tổ chức Th&agrave;nh ủy Cần Thơ hướng dẫn về&nbsp;"<em>Thực hiện th&iacute; điểm chủ trương đại hội đảng bộ cơ sở trực tiếp bầu ban thường vụ, b&iacute; thư, ph&oacute; b&iacute; thư cấp ủy</em>"</p>\r\n<p>&nbsp;</p>\r\n<p><a href="http://cpv.ctu.edu.vn/DH2015-2020/KH%2017-KH_DU%20ke%20hoach%20to%20chuc%20dai%20hoi%20nhiem%20ky%202015-2020_Final.pdf" target="_blank">- Kế hoạch số 17-KH/ĐU</a>, ng&agrave;y 14/10/2014 của Đảng ủy trường Đại học Cần Thơ về "<em>Thực hiện Chỉ thị số 36-CT/TW ng&agrave;y 30/5/2014 của Bộ Ch&iacute;nh trị về đại hội đảng bộ c&aacute;c cấp tiến tới Đại hội đại biểu to&agrave;n quốc lần thứ XII của Đảng</em>"</p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;c biểu mẫu:</strong> (đang thực hiện)</p>\r\n<p>+&nbsp;Mẫu 01: B&aacute;o c&aacute;o ch&iacute;nh trị</p>\r\n<p>+ Mẫu 02: B&aacute;o c&aacute;o kiểm điểm của cấp ủy</p>\r\n<p>+ Mẫu 03: Nghị quyết của Đại hội</p>\r\n<p>+ Mẫu 04: Bi&ecirc;n bản Đại hội</p>\r\n<p>+ Mẫu 05: Danh s&aacute;ch nh&acirc;n sự do Cấp ủy nhiệm kỳ 2010-2015 chuẩn bị.</p>\r\n<p>+ Mẫu 06A: Phiếu bầu c&oacute; số dư</p>\r\n<p>+ Mẫu 06B: Phiếu bầu kh&ocirc;ng c&oacute; số dư</p>\r\n<p>+ Mẫu 07: Bi&ecirc;n bản kiểm phiếu</p>\r\n<p>+ Quy chế l&agrave;m việc của Đại hội.</p>\r\n<p>+ Kịch bản đại hội (tham khảo).</p>', 0),
(6, '2015-04-01', 'Báo cáo thực hiện nhiệm vụ 9 tháng đầu năm 2014 và Chương trình công tác Quý 4/2014 của Đảng ủy trường', '<p>-&nbsp;<a href="http://cpv.ctu.edu.vn/Kehoach_Baocao/BC%20Thuc%20hien%20nhiem%20vu%209%20thang%20dau%20nam%202014_Final.pdf" target="_blank">B&aacute;o c&aacute;o số 124-BC/ĐU</a>, ng&agrave;y 14/10/2014 của Đảng ủy trường về "Thực hiện nhiệm vụ 9 th&aacute;ng đầu năm 2014"</p>\r\n<p>-&nbsp;<a href="http://cpv.ctu.edu.vn/Kehoach_Baocao/Ctr%20Cong%20tac%20Quy%204_2014_Final.pdf" target="_blank">Chương tr&igrave;nh số 14-CTr/ĐU</a>,&nbsp;ng&agrave;y 14/10/2014 của Đảng ủy trường về&nbsp;"C&ocirc;ng t&aacute;c Qu&yacute; 4 năm 2014"</p>', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MATT`, `TENTT`) VALUES
(1, 'TP Cần Thơ'),
(2, 'Tỉnh Sóc Trăng'),
(3, 'Tĩnh Vĩnh Long'),
(4, 'Tinh Bến Tre'),
(5, 'Tỉnh Hậu Giang'),
(6, 'Tỉnh Bạc Liêu');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `xuatnhapngu`
--

INSERT INTO `xuatnhapngu` (`STTXNN`, `MADANGVIEN`, `NGAYNHAPNGU`, `NGAYXUATNGU`) VALUES
(3, 59, '1970-01-01', '1970-01-01'),
(4, 58, '2015-03-01', '2015-03-03'),
(5, 66, '2015-03-25', '2015-03-24'),
(6, 68, '1970-01-01', '1970-01-01'),
(7, 69, '1970-01-01', '1970-01-01'),
(8, 71, '1970-01-01', '1970-01-01'),
(9, 76, '1970-01-01', '1970-01-01');

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
 ADD PRIMARY KEY (`THANGNAM`,`MADANGVIEN`);

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
-- AUTO_INCREMENT for table `bddvmoi`
--
ALTER TABLE `bddvmoi`
MODIFY `DOTBD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `camtinhdang`
--
ALTER TABLE `camtinhdang`
MODIFY `STTCTD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chibo`
--
ALTER TABLE `chibo`
MODIFY `MACB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
MODIFY `STTCVDEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cvdi`
--
ALTER TABLE `cvdi`
MODIFY `SOCVDI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dangvien`
--
ALTER TABLE `dangvien`
MODIFY `MADANGVIEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `dantoc`
--
ALTER TABLE `dantoc`
MODIFY `MADT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dinuocngoai`
--
ALTER TABLE `dinuocngoai`
MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `doantncshcm`
--
ALTER TABLE `doantncshcm`
MODIFY `STTVAODOAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dscaphhd`
--
ALTER TABLE `dscaphhd`
MODIFY `STTCAPHHD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dscapthedang`
--
ALTER TABLE `dscapthedang`
MODIFY `STTCAPTHE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
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
MODIFY `MAHH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
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
MODIFY `SONQ` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `MAPX` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
MODIFY `MAQH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quatrinhct`
--
ALTER TABLE `quatrinhct`
MODIFY `STTQT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `quatrinhdt`
--
ALTER TABLE `quatrinhdt`
MODIFY `STTDT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `quyetdinh`
--
ALTER TABLE `quyetdinh`
MODIFY `SOQD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rakhoidang`
--
ALTER TABLE `rakhoidang`
MODIFY `STTRKD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thedv`
--
ALTER TABLE `thedv`
MODIFY `MATHE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
MODIFY `STTTB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `thuongbinh`
--
ALTER TABLE `thuongbinh`
MODIFY `STTTBINH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
MODIFY `MATT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
MODIFY `STTXNN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
