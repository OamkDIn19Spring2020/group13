-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2020 lúc 08:58 AM
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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `firstname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `hiring_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_tr2k`
--

INSERT INTO `register_tr2k` (`id`, `username`, `password`, `type`, `firstname`, `lastname`, `telephone`, `email`, `department`, `salary`, `hiring_date`) VALUES
(1, 'admin@test', '123456', 0, 'admin', 'test', 2, 'toilavic', '1', 20000, '0000-00-00'),
(4, 'user@test', '123456', 1, 'test', 'staff', 233232, '2323', '2323', 2200, '2000-02-02'),
(5, 't18042k@gmail.com', '123456', 1, 'Thang', 'Nguyen', 1654534768, 't18042k@gmail.com', 'd', 0, '0000-00-00'),
(6, 'test@test', '123456', 1, 'test1', '22', 233232, 'toilavic', 'deewqew', 20000, '2200-02-02');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
