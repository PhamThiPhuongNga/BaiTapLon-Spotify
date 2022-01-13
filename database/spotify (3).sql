-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2022 lúc 05:30 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spotify`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `ma_ab` int(11) NOT NULL,
  `ten_ab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_ab` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nghesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`ma_ab`, `ten_ab`, `anh_ab`, `id_nghesi`) VALUES
(10, 'Chúng ta', 'https://i.scdn.co/image/ab67616d00001e02c98af859e9b24d3a6c1c72bb', 1),
(11, 'The album', 'https://i.scdn.co/image/ab67616d00001e027dd8f95320e8ef08aa121dfe', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `ma_bh` int(11) NOT NULL,
  `ten_bh` varchar(30) NOT NULL,
  `anh_bh` varchar(255) NOT NULL,
  `ngaythem` datetime NOT NULL,
  `thoiluong_bh` time NOT NULL,
  `quocgia` varchar(30) NOT NULL,
  `link_bh` varchar(255) NOT NULL,
  `ma_ab` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_nghesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`ma_bh`, `ten_bh`, `anh_bh`, `ngaythem`, `thoiluong_bh`, `quocgia`, `link_bh`, `ma_ab`, `id_category`, `id_nghesi`) VALUES
(1, 'Night Owl', 'https://images.pexels.com/photos/2264753/pexels-photo-2264753.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=250&w=250', '2022-01-03 16:11:11', '08:11:11', 'VN', 'https://files.freemusicarchive.org/storage-freemusicarchive-org/music/WFMU/Broke_For_Free/Directionless_EP/Broke_For_Free_-_01_-_Night_Owl.mp3', 1, 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `maunen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_category`, `ten`, `anh`, `maunen`) VALUES
(3, 'Bảng xếp hạng', 'https://charts-images.scdn.co/assets/locale_en/regional/weekly/region_global_default.jpg', 'rgb(141, 103, 171)'),
(6, 'Concerts', 'https://t.scdn.co/images/8cfa9cb1e43a404db76eed6ad594057c', 'rgb(30, 50, 100)'),
(7, 'Nhìn lại 2021', 'https://t.scdn.co/images/6bbcb75a98004dd3b306e0f9ca659318', 'rgb(215, 242, 125)'),
(9, 'Nghỉ lễ vui vẻ', 'https://t.scdn.co/images/8095bb75a61e4623906cb847ae87d9da.jpeg', 'rgb(140, 25, 50)'),
(13, 'Dành cho bạn', 'https://t.scdn.co/images/ea364e99656e46a096ea1df50f581efe', 'rgb(30, 50, 100)'),
(14, 'RnB', 'https://i.scdn.co/image/ab67706f000000023c5a4aaf5df054a9beeb3d82', 'rgb(220, 20, 140)'),
(15, 'Rock', 'https://i.scdn.co/image/ab67706f00000002fe6d8d1019d5b302213e3730', 'rgb(230, 30, 50)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghesi`
--

CREATE TABLE `nghesi` (
  `id_nghesi` int(11) NOT NULL,
  `ten_nghesi` varchar(255) NOT NULL,
  `anh_nghesi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nghesi`
--

INSERT INTO `nghesi` (`id_nghesi`, `ten_nghesi`, `anh_nghesi`) VALUES
(1, 'Sơn Tùng', 'https://i.scdn.co/image/ab67616100005174c48716f91b7bf3016f5b6fbe'),
(3, 'Me', 'https://t.scdn.co/images/ea364e99656e46a096ea1df50f581efe'),
(5, 'Nga Laura', ''),
(7, 'Hoàng Thùy Linh', 'denvau.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoidung` int(11) NOT NULL,
  `ten_nguoidung` varchar(50) NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `matkhau` varchar(10) NOT NULL,
  `gioitinh` varchar(30) NOT NULL,
  `quoctich` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nguoidung`, `ten_nguoidung`, `ngay`, `thang`, `nam`, `email`, `matkhau`, `gioitinh`, `quoctich`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(33, 'Nga', 3, 6, 2006, 'phamnga.bibi89@gmail.com', '$2y$10$Kw/', 'Nam', 'Việt Nam', 1, 'f62e58634d4054c90baa66c65017b0192672', '2022-01-05 19:06:29'),
(35, 'Đức Duy Nguyễn', 30, 12, 2000, 'duydev18@gmail.com', '$2y$10$fUx', 'Nam', 'Việt Nam', 0, 'fb5a7f55be37ff6cbbcc25848e0ae90f6799', ''),
(36, 'abc', 30, 10, 2000, 'dduy961@gmail.com', '$2y$10$Ozv', 'Nam', 'Việt Nam', 1, 'b7230c905b838557720874e0913b7c2a9328', '2022-01-10 02:38:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_admin`
--

CREATE TABLE `user_admin` (
  `id_ad` int(11) NOT NULL,
  `name_ad` varchar(255) NOT NULL,
  `matkhau_ad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_admin`
--

INSERT INTO `user_admin` (`id_ad`, `name_ad`, `matkhau_ad`) VALUES
(1, 'admin', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`ma_ab`),
  ADD KEY `id_nghesi` (`id_nghesi`);

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`ma_bh`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `nghesi`
--
ALTER TABLE `nghesi`
  ADD PRIMARY KEY (`id_nghesi`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`);

--
-- Chỉ mục cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `ma_ab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `ma_bh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `nghesi`
--
ALTER TABLE `nghesi`
  MODIFY `id_nghesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_nghesi`) REFERENCES `nghesi` (`id_nghesi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
