-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2020 lúc 10:42 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loginphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_tr2k`
--

CREATE TABLE `register_tr2k` (
  `id` int(10) NOT NULL,
  `username` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_tr2k`
--

INSERT INTO `register_tr2k` (`id`, `username`, `password`) VALUES
(8, 'test@gmail.com', '123456'),
(9, 't18042k@gmail.com', '123456'),
(10, 'admin@gmail.com', '123456'),
(11, 't18042k2@gmail.com', '123456'),
(12, 't18042k222@gmail.com', '22'),
(13, 'admm@gmail.com', '123'),
(14, 'admmh@gmail.com', '1'),
(15, 'admintest@gmail.com', '123'),
(16, 'adminb@gmial.com', '12'),
(17, 'ters@gmail.com', '123456'),
(18, 'testadmin1@gmail.com', '123456'),
(19, 'test222@gmail.com', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `register_tr2k`
--
ALTER TABLE `register_tr2k`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `register_tr2k`
--
ALTER TABLE `register_tr2k`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
