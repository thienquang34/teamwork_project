
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon_chitiet`
--

CREATE TABLE `hoadon_chitiet` (
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon_chitiet`
--

INSERT INTO `hoadon_chitiet` (`mahd`, `masp`, `soluong`, `dongia`) VALUES
(1126, 39, 1, 420000),
(13232, 14, 6, 420000),
(29061, 14, 2, 420000),
(64843, 21, 1, 350000),
(64843, 30, 1, 480000),
(79306, 30, 1, 480000),
(81976, 29, 1, 480000),
(94299, 14, 2, 420000),
(98065, 14, 2, 420000),
(98193, 41, 1, 280000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `mahd` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_mua` timestamp NULL DEFAULT current_timestamp(),
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`mahd`, `email`, `ngay_mua`, `tinh_trang`) VALUES
(1126, 'toando9x.dn@gmail.com', '2021-02-01 20:16:27', 'Đã xác nhận'),
(13232, 'toando9x.dn@gmail.com', '2021-01-31 07:57:22', 'Hủy'),
(29061, 'toando9x.dn@gmail.com', '2021-01-11 07:56:32', 'Hủy'),
(64843, 'toando9x.dn@gmail.com', '2021-01-31 00:34:43', 'Hủy'),
(79306, 'toando9x.dn@gmail.com', '2021-01-31 00:34:33', 'Hủy'),
(81976, 'toando9x.dn@gmail.com', '2020-12-28 08:12:08', 'Hủy'),
(94299, 'minh@gmail.com', '2021-03-11 02:03:58', 'Chưa xử lý'),
(98065, 'toando9x.dn@gmail.com', '2020-12-28 07:39:48', 'Hủy'),
(98193, 'toando9x.dn@gmail.com', '2021-02-01 04:39:09', 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_1_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_2_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_3_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_4_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_5_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_6_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_7_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `title`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `sub_7`, `sub_1_link`, `sub_2_link`, `sub_3_link`, `sub_4_link`, `sub_5_link`, `sub_6_link`, `sub_7_link`) VALUES
(3, 'DANH MỤC', 'Áo sơ mi ', 'Áo khoác ', 'Áo thun ', 'Quần jean', 'Quần kaki', 'Quần lửng', 'Giày', '?menu=somi', '?menu=khoac', '?menu=thun', '?menu=jean', '?menu=kaki', '?menu=lung', '?menu=giay');

-- --------------------------------------------------------

--
-- Table structure for table `quan_tri`
--

CREATE TABLE `quan_tri` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quyen_truy_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quan_tri`
--

INSERT INTO `quan_tri` (`id`, `name`, `pass`, `quyen_truy_cap`) VALUES
(6, 'admin2', '202cb962ac59075b964b07152d234b70', 1),
(7, 'nhanvien1', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img1` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_bat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mua_nhieu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`masp`, `tensp`, `giasp`, `soluong`, `img`, `img1`, `img2`, `img3`, `loaisp`, `noi_bat`, `mua_nhieu`) VALUES
(14, 'Áo Sơ Mi Nam Dài Tay Cổ Spread Form Fitted', 420000, 8, 'somi1.jpg', 'somi2.jpg', 'somi3.jpg', 'somi4.jpg', 'somi', 'co', 7),
(15, 'Áo Sơ Mi Nam Tay Dài form Slim fit', 395000, 1, 'somi5.jpg', 'somi6.jpg', 'somi7.jpg', 'somi8.jpg', 'somi', 'co', 3),
(16, 'Áo khoác jean nam form Looser', 650000, 120, 'khoac1.jpg', 'khoac2.jpg', 'khoac3.jpg', 'khoac4.jpg', 'khoac', '', 0),
(17, 'Áo khoác nam 1 lớp form Regular', 585000, 100, 'khoac5.jpg', 'khoac6.jpg', 'khoac7.jpg', 'khoac8.jpg', 'khoac', '', 0),
(18, 'Áo khoác jean form Loose ', 680000, 90, 'khoac9.jpg', 'khoac10.jpg', 'khoac11.jpg', 'khoac12.jpg', 'khoac', '', 0),
(19, 'Áo khoác jean form Loose', 650000, 10, 'khoac13.jpg', 'khoac14.jpg', 'khoac15.jpg', 'khoac16.jpg', 'khoac', '', 0),
(20, 'Áo sơ mi tay dài cotton nẹp rời form regular', 390000, 9, 'somi9.jpg', 'somi10.jpg', 'somi11.jpg', 'somi12.jpg', 'somi', '', 0),
(21, 'Áo sơ mi tay dài nẹp rời form slim fit', 350000, 6, 'somi13.jpg', 'somi14.jpg', 'somi15.jpg', 'somi16.jpg', 'somi', '', 0),
(22, 'Áo Thun Nam Tay Dài có túi form Regular', 350000, 10, 'thun1.jpg', 'thun2.jpg', 'thun3.jpg', 'thun4.jpg', 'thun', '', 0),
(23, 'Áo Thun Nam Tay Dài form Fitted', 260000, 10, 'thun5.jpg', 'thun6.jpg', 'thun7.jpg', 'thun8.jpg', 'thun', '', 0),
(24, 'Áo Thun Nam Tay Dài Nỉ Print', 380000, 100, 'thun9.jpg', 'thun10.jpg', 'thun11.jpg', 'thun12.jpg', 'thun', '', 0),
(25, 'Áo thun nam tay ngắn, rã thân form LOOSE', 350000, 10, 'thun13.jpg', 'thun14.jpg', 'thun15.jpg', 'thun16.jpg', 'thun', '', 0),
(26, 'Quần jean nam trơn form skinny', 480000, 2, 'jean1.jpg', 'jean2.jpg', 'jean3.jpg', 'jean4.jpg', 'jean', '', 40),
(29, 'Quần jeans nam rách gối form Slim Crop', 480000, 7, 'jean5.jpg', 'jean6.jpg', 'jean7.jpg', 'jean8.jpg', 'jean', 'co', 7),
(30, 'Quần jean trơn form straight crop', 480000, 12, 'jean9.jpg', 'jean10.jpg', 'jean11.jpg', 'jean12.jpg', 'jean', '', 100),
(31, 'Quần jeans form loose', 480000, 4, 'jean13.jpg', 'jean14.jpg', 'jean15.jpg', 'jean16.jpg', 'jean', '', 0),
(32, 'Quần jean trơn form slim', 450000, 10, 'jean17.jpg', 'jean18.jpg', 'jean19.jpg', 'jean20.jpg', 'jean', '', 0),
(33, 'Quần jean trơn form loose', 480000, 6, 'jean29.jpg', 'jean30.jpg', 'jean31.jpg', 'jean32.jpg', 'jean', '', 0),
(34, 'Quần jean rách gối form slim ', 480000, 6, 'jean25.jpg', 'jean26.jpg', 'jean27.jpg', 'jean28.jpg', 'jean', '', 0),
(35, 'Quần jean trơn form skinny', 450000, 9, 'jean21.jpg', 'jean22.jpg', 'jean23.jpg', 'jean24.jpg', 'jean', '', 0),
(37, 'Quần jean nam rách cotton form slim crop', 520000, 11, 'jean37.jpg', 'jean38.jpg', 'jean39.jpg', 'jean40.jpg', 'jean', '', 0),
(38, 'Quần kaki nam form slim crop', 450000, 10, 'kaki1.jpg', 'kaki2.jpg', 'kaki3.jpg', 'kaki4.jpg', 'kaki', '', 0),
(39, 'Quần kaki nam trơn form slim fit', 420000, 1, 'kaki5.jpg', 'kaki6.jpg', 'kaki7.jpg', 'kaki8.jpg', 'kaki', 'co', 0),
(40, 'Quần short nam form Slimfit', 350000, 3, 'lung1.jpg', 'lung2.jpg', 'lung3.jpg', 'lung4.jpg', 'lung', 'co', 77),
(41, 'Quần bơi nam Print form Swimshort', 280000, 4, 'lung5.jpg', 'lung6.jpg', 'lung7.jpg', 'lung8.jpg', 'lung', '', 0),
(43, 'Giày Nam Slip On Da Lộn', 690000, 5, 'giay5.jpg', 'giay6.jpg', 'giay7.jpg', 'giay8.jpg', 'giay', '', 1),
(44, 'THUN CỔ CAO', 500, 1, 'jean13.jpg', '', '', '', 'thun', NULL, NULL),
(45, 'THUN CỔ THẤP', 500000, 10, 'jean3.jpg', 'jean8.jpg', 'thun12.jpg', 'thun15.jpg', 'thun', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `name`, `note`) VALUES
(11, '12.jpg', 'active'),
(12, '13.jpg', NULL),
(13, '14.jpg', NULL),
(16, 'fmstyle.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanh_vien`
--

INSERT INTO `thanh_vien` (`id`, `email`, `password`, `hoten`, `sdt`, `diachi`) VALUES
(6, 'toando9x.dn@gmail.com', '202cb962ac59075b964b07152d234b70', 'Thanh Toàn', 905155133, '49 cao thắng'),
(7, 'tuyen@gmail.com', '202cb962ac59075b964b07152d234b70', 'Tuyên Nguyễn', 123404576, 'Thái Bình'),
(8, 'm2@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Mi', 865364085, 'Hà Nam'),
(9, 'minh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Minh', 865364082, 'Hà Nam');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinsp`
--

CREATE TABLE `thongtinsp` (
  `id` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `mota1` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota3` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota4` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota5` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinsp`
--

INSERT INTO `thongtinsp` (`id`, `masp`, `mota1`, `mota2`, `mota3`, `mota4`, `mota5`) VALUES
(1, 14, 'Chất liệu: 100% cotton', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí'),
(2, 15, 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí'),
(3, 16, 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí'),
(5, 17, 'Chất liệu: 100% cotton', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí'),
(6, 18, 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí'),
(33, 19, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(34, 20, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(35, 21, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(36, 22, 'Chất liệu: 100% cotton', '', '', '', ''),
(37, 23, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(38, 24, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(39, 25, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(40, 26, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(41, 29, 'Chất liệu: 100% cotton', '', '', '', ''),
(42, 30, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(43, 31, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(44, 32, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(45, 33, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(46, 34, NULL, 'Chất liệu: 100% cotton', NULL, NULL, NULL),
(47, 35, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(49, 37, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(50, 38, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(51, 39, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(52, 40, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(53, 41, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(55, 43, 'Chất liệu: 100% cotton', NULL, NULL, NULL, NULL),
(56, 44, 'đen trắng', '', '', '', ''),
(57, 45, 'đen trắng', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ ...', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ ...', 'Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ ...', 'Hàng mới về');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD PRIMARY KEY (`mahd`,`masp`),
  ADD KEY `masp` (`masp`),
  ADD KEY `mahd` (`mahd`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quan_tri`
--
ALTER TABLE `quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quan_tri`
--
ALTER TABLE `quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `thongtinsp`
--
ALTER TABLE `thongtinsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD CONSTRAINT `hoadon_chitiet_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`masp`),
  ADD CONSTRAINT `hoadon_chitiet_ibfk_2` FOREIGN KEY (`mahd`) REFERENCES `hoa_don` (`mahd`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`email`) REFERENCES `thanh_vien` (`email`);

--
-- Constraints for table `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD CONSTRAINT `thongtinsp_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
