-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 06:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes26_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngay_bl` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `iduser`, `idpro`, `ngay_bl`) VALUES
(3, 'demo', 191, 113, '02 Dec, 22');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `ma_ctdh` int(11) NOT NULL,
  `ma_dh` int(10) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(10) NOT NULL,
  `ma_tk` int(10) NOT NULL,
  `ngay_dat` date NOT NULL,
  `nguoi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nhan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `trang_thai_tt` tinyint(1) NOT NULL,
  `trang_thai_gh` tinyint(1) NOT NULL DEFAULT 0,
  `ghi_chu_kh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu_ad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `size` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`id`, `ma_hh`, `so_luong`, `size`) VALUES
(123, 113, 1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_old` double(10,3) NOT NULL,
  `price_new` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `iddm` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1,
  `special` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `name`, `price_old`, `price_new`, `img`, `mota`, `iddm`, `luotxem`, `trang_thai`, `special`) VALUES
(101, 'Ralph Sampson', 4.998, 0.00, 'puma-Ralph Sampson.jpg', 'fdf', 38, 2, 1, 0),
(103, 'Vans Classic Slip On ', 5.599, 0.00, 'vans-classic-slipon.jpg', 'Classic Slipon', 39, 7, 1, 0),
(104, 'ADIDAS HYPERTURF', 3.199, 0.00, 'adidas-HYPERTURF.jpg', 'HYPERTURF', 37, 4, 1, 0),
(105, 'Puma RS-X', 2.135, 0.00, 'puma-RS-X.jpg', 'Mẫu Sneaker Puma RSX là một trong những thiết kế huyền thoại của Puma. Đây là mẫu giày Chunky được đánh giá là xuất sắc nhất của hãng, thu hút được sự yêu thích của đông đảo giới trẻ. Đây thực sự là mẫu giày đã góp phần làm nên tên tuổi của Puma như hiện tại.', 38, 3, 1, 1),
(106, 'Jordan Series Mid', 4.485, 0.00, 'Jordan Series Mid.jpg', 'Nike Jordan Series Mid', 36, 5, 1, 0),
(112, 'VANS VN0A5', 890.000, 0.00, 'vans VN0A5KRDBZW.jpg', 'Vans VN0A5KRDBZW thuộc dòng Authentic Collage Black/White mới nhất trong bộ sưu tập của thương hiệu Vans', 39, 2, 1, 0),
(113, 'SuperStart', 2.145, 0.00, 'superstart1.jpg', 'z', 37, 26, 1, 0),
(114, 'LeBron 19', 4.382, 0.00, 'le19.webp', 'Hệ thống đệm được trang bị lại kết hợp Max Air có thể nhìn thấy được với bộ phận Zoom Air dày, nhạy dưới bàn chân trước. Max Air giúp tiêu tan lực tác động, trong khi Zoom Air giúp đẩy bạn xuống sân. Phần dưới của giày được thiết kế trông giống như các van và ống tạo nên hoạt động bên trong của nó.', 36, 25, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`id`, `ma_hh`, `img`) VALUES
(18, 114, 'le19-2.webp'),
(19, 114, 'le19-3.webp'),
(20, 114, 'le19-4.webp'),
(21, 114, 'le19-3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(36, 'NIKE'),
(37, 'ADIDAS'),
(38, 'PUMA'),
(39, 'VANS');

-- --------------------------------------------------------

--
-- Table structure for table `ma_giam_gia`
--

CREATE TABLE `ma_giam_gia` (
  `ma_gg` varchar(255) NOT NULL,
  `ngay_bd` date NOT NULL,
  `ngay_kt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ma_tk` int(10) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_tk`, `img`, `ho_ten`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(128, '', 'Admin', 'admin', '123', '', 'Thôn 1, Lộc Ngãi, Bảo Lâm, Lâm Đồng', '0383383053', 1),
(191, '', 'bé Duy', 'ntd', '456', 'ng.tanduy261203@gmail.com', 'Thới An, Quận 12', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydang` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bl_hh` (`idpro`),
  ADD KEY `fk_bl_tk` (`iduser`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_ctdh`),
  ADD KEY `fk_ctdh_dh` (`ma_dh`),
  ADD KEY `fk_ctdh_hh` (`ma_hh`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `fk_dh_tk` (`ma_tk`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giohang_sanpham` (`ma_hh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hh_lh` (`iddm`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ha_hh` (`ma_hh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  ADD PRIMARY KEY (`ma_gg`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_tk`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_tk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1952;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_bl_hh` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bl_tk` FOREIGN KEY (`iduser`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ctdh_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `fk_dh_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hh_lh` FOREIGN KEY (`iddm`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_ha_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
