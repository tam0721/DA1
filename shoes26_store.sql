-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2022 lúc 07:58 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes26_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngay_bl` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
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
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(10) NOT NULL,
  `ma_tk` int(10) NOT NULL,
  `ngay_dat` date NOT NULL,
  `nguoi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nhan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `trang_thai_tt` tinyint(1) NOT NULL,
  `trang_thai_gh` tinyint(1) NOT NULL DEFAULT 0,
  `ghi_chu_kh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu_ad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` double(10,0) NOT NULL,
  `img` varchar(250) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `size` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id`, `ma_hh`, `name`, `price`, `img`, `so_luong`, `size`) VALUES
(115, 112, 'VANS VN0A5', 83, 'vans VN0A5KRDBZW.jpg', 2, 39),
(116, 103, 'Vans Classic Slip On ', 57, 'vans-classic-slipon.jpg', 2, 38),
(117, 106, 'Jordan Series Mid', 99, 'Jordan Series Mid.jpg', 1, 35),
(119, 104, 'ADIDAS HYPERTURF', 167, 'adidas-HYPERTURF.jpg', 1, 44),
(120, 101, 'Ralph Sampson', 100, 'puma-Ralph Sampson.jpg', 1, 43),
(121, 103, '', 0, '', 1, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
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
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `name`, `price_old`, `price_new`, `img`, `mota`, `iddm`, `luotxem`, `trang_thai`, `special`) VALUES
(101, 'Ralph Sampson', 1.899, 0.00, 'puma-Ralph Sampson.jpg', 'Giày Puma Ralph Samspon Lo là một trong mẫu giày Classic huyền thoại của Puma. Được làm bằng da mềm mại, cao cấp, sang trọng, đế giày cực kỳ bền đẹp. Đây là một mẫu giày tuyệt vời dành để đi học, đi làm, đi chơi...', 38, 3, 1, 0),
(103, 'Vans Classic Slip On ', 6.785, 0.00, 'vans-classic-slipon.jpg', 'VANS SLIP-ON với ưu điểm lớn phần đế giày được thiết kế bằng chất liệu cao su lưu hoá, cùng phần Upper đệm thun có thể dễ dàng tùy chỉnh, tiện lợi và linh động hơn trong việc sử dụng sản phẩm. Đối với siêu phẩm VANS SLIP-ON, VANS cần gắn liền với một họa tiết đỉnh cao làm nên tên tuổi của nó - có lẽ ai cũng biết đó chính là Checkerboard. ', 39, 10, 1, 0),
(104, 'ADIDAS HYPERTURF', 3.199, 0.00, 'adidas-HYPERTURF.jpg', 'Bạn không cần phải đi đâu xa để tìm kiếm sự phiêu lưu. Chỉ cần bước ra khỏi cửa trước của bạn và lạc vào sự sôi động của thành phố. Trên đôi chân của mình, bạn sẽ muốn có đôi giày adidas Hyperturf này. Chúng được thiết kế theo phong cách chắc chắn của giày dép ngoài trời, với sự kết hợp bền bỉ giữa da lộn, nubuck và vải ripstop phía trên. Dưới chân bạn có lớp đệm Adiprene+ hấp thụ sốc và FORMOTION để đảm bảo sự thoải mái. Bây giờ là lúc để đi lang thang.\r\n', 37, 7, 1, 0),
(105, 'Puma RS-X', 2.139, 0.00, 'puma-RS-X.jpg', 'Mẫu Sneaker Puma RSX là một trong những thiết kế huyền thoại của Puma. Đây là mẫu giày Chunky được đánh giá là xuất sắc nhất của hãng, thu hút được sự yêu thích của đông đảo giới trẻ. Đây thực sự là mẫu giày đã góp phần làm nên tên tuổi của Puma như hiện tại.', 38, 5, 1, 1),
(106, 'Jordan Series Mid', 4.379, 0.00, 'Jordan Series Mid.jpg', 'Cổ điển kết hợp hiện đại trong cách tiếp cận mới mẻ này với một sản phẩm thiết yếu của Thương hiệu Jordan. Da bền và da lộn được gia cố bằng chất liệu tổng hợp nhẹ để hỗ trợ thêm. Hình bóng midtop mang tính biểu tượng trở nên thoáng khí hơn bao giờ hết với lót giày đục lỗ. Thêm vào đó, những thông điệp đầy cảm hứng liên quan đến câu chuyện gốc của MJ được đưa vào thiết kế, tăng thêm ý nghĩa cho mỗi bước đi.\r\n', 36, 6, 1, 0),
(112, 'VANS VN0A5', 890.000, 0.00, 'vans VN0A5KRDBZW.jpg', 'Vans VN0A5KRDBZW thuộc dòng Authentic Collage Black/White mới nhất trong bộ sưu tập của thương hiệu Vans', 39, 2, 1, 0),
(113, 'SuperStart', 2.145, 0.00, 'superstart1.jpg', 'Suốt hơn 50 năm, đôi sneaker adidas Superstar luôn là lựa chọn hàng đầu của các huyền thoại thể thao và thời trang đường phố, kết nối các nhà kiến tạo đến từ mọi nền văn hóa.', 37, 12, 1, 0),
(114, 'LeBron 19', 4.413, 0.00, 'le19.webp', 'Hệ thống đệm được trang bị lại kết hợp Max Air có thể nhìn thấy được với bộ phận Zoom Air dày, nhạy dưới bàn chân trước. Max Air giúp tiêu tan lực tác động, trong khi Zoom Air giúp đẩy bạn xuống sân. Phần dưới của giày được thiết kế trông giống như các van và ống tạo nên hoạt động bên trong của nó.', 36, 24, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinh_anh`
--

INSERT INTO `hinh_anh` (`id`, `ma_hh`, `img`) VALUES
(18, 114, 'le19-2.webp'),
(19, 114, 'le19-3.webp'),
(20, 114, 'le19-4.webp'),
(21, 114, 'le19-3.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(36, 'NIKE'),
(37, 'ADIDAS'),
(38, 'PUMA'),
(39, 'VANS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_giam_gia`
--

CREATE TABLE `ma_giam_gia` (
  `ma_gg` varchar(255) NOT NULL,
  `ngay_bd` date NOT NULL,
  `ngay_kt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
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
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_tk`, `img`, `ho_ten`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(128, '', 'Admin', 'admin', '123', '', 'Thôn 1, Lộc Ngãi, Bảo Lâm, Lâm Đồng', '0383383053', 1),
(191, '', 'bé Duy', 'ntd', '456', 'ng.tanduy261203@gmail.com', 'Thới An, Quận 12', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydang` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `name`, `img`, `mota`, `ngaydang`) VALUES
(26, 'Tết độc thân không đơn độc - Chương trình ưu đãi \"MUA 1 TẶNG 1\" cực hấp dẫn, xem ngay!', 'blog1.jpg', 'Tết độc thân không sợ đơn độc, AVASport tặng bạn cơn mưa ưu đãi \"MUA 1 TẶNG 1\" siêu hấp dẫn. Mua một sản phẩm bất kỳ bạn sẽ được tặng kèm theo một sản phẩm cực chất lượng. Xem ngay bài viết dưới đây để biết thêm thông tin chi tiết!', ' 02 Dec, 22'),
(28, '[24/12-30/1] Tuần lễ adidas siêu sale cực khủng lên đến 50%, nhanh tay chốt đơn!', 'blog3.jpg', 'Nhân dịp tuần lễ adidas, Z-MHON giảm giá nhiều mặt hàng như giày dép, quần áo, phụ kiện thể thao lên đến 50%, nhanh tay chốt đơn sản phẩm chính hãng cùng với mức giá siêu hời ngay nhé!', ' 02 Dec, 22'),
(29, '[9/12 - 25/12]Tuần lễ Puma - Siêu sale cực sốc lên đến 50%, mua ngày kẻo lỡ!', 'blog4.jpg', 'Z-MHON xin đem đến các bạn chương trình ưu đãi lên đến 50% từ thương hiệu Puma. Các mặt hàng thể thao Puma chính hãng và chất lượng tuyệt vời đang chờ bạn sở hữu, hãy thêm vào giỏ hàng ngay nào!', ' 02 Dec, 22'),
(30, 'Cách phơi giày trắng không bị ố vàng đơn giản, hiệu quả bất ngờ', 'blog5.jpg', 'Hiện tượng giày trắng bị ố vàng khi phơi rất thường xuyên xảy ra và gây ảnh hưởng đến tính thẩm mỹ của giày. Cùng Z-MHON xem ngay bài viết hướng dẫn cách phơi giày trắng không bị ố vàng nhé!', ' 02 Dec, 22'),
(31, '11 mẹo khử mùi hôi dép cao su cực đơn giản và hiệu quả', 'blog7.jpg', 'Dép, đặc biệt là dép cao su có mùi hăng nồng khi mới mua về, gây khó chịu khiến nhiều người phải tìm cách loại bỏ. Tuy nhiên, không phải ai cũng biết cách thực hiện hoặc làm không đúng cách mùi hôi vẫn còn bám lại. Nếu bạn vẫn còn băn khoăn, hãy tham khảo', ' 02 Dec, 22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bl_hh` (`idpro`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_ctdh`),
  ADD KEY `fk_ctdh_dh` (`ma_dh`),
  ADD KEY `fk_ctdh_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `fk_dh_tk` (`ma_tk`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giohang_sanpham` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hh_lh` (`iddm`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ha_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  ADD PRIMARY KEY (`ma_gg`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_tk`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_ctdh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_tk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1952;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_bl_hh` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ctdh_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `fk_dh_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hh_lh` FOREIGN KEY (`iddm`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_ha_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
