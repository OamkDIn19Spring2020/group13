-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2020 lúc 11:23 PM
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
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_firstName` varchar(50) NOT NULL,
  `Customer_lastName` varchar(50) NOT NULL,
  `Customer_TCno` varchar(50) NOT NULL,
  `Customer_country` varchar(50) NOT NULL,
  `Customer_telephone` varchar(50) NOT NULL,
  `Customer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `hiring_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalCode` int(11) NOT NULL,
  `fullName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_tr2k`
--

INSERT INTO `register_tr2k` (`id`, `username`, `password`, `type`, `firstname`, `lastname`, `telephone`, `email`, `department`, `salary`, `hiring_date`, `address`, `postalCode`, `fullName`) VALUES
(1, 'admin@test', '123456', 0, 'admin', 'test', 2, 'toilavic', '1', 20000, '0000-00-00', 'Oulu', 999, 'Vic'),
(4, 'user@test', '123456', 1, 'test', 'staff', 233232, '2323', '2323', 2200, '2000-02-02', '', 0, '0'),
(5, 't18042k@gmail.com', '123456', 1, 'Thang', 'Nguyen', 1654534768, 't18042k@gmail.com', 'd', 0, '0000-00-00', '', 0, '0'),
(6, 'test@test', '123456', 1, 'test1', '22', 233232, 'toilavic', 'deewqew', 20000, '2200-02-02', '', 0, '0'),
(7, 'newss186', '123456', 1, 'Thang', 'Nguyen', 1654534768, 't18042k@gmail.com', 'asdsa', 0, '0000-00-00', 'ADSS', 65000, 'Thang Nguyen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reservation`
--

CREATE TABLE `reservation` (
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `checkin_date` varchar(50) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `reservation_date` varchar(50) NOT NULL,
  `reservation_price` float NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(14, 'Vic', 'OAMK', 'Oulu', '90130', 'Finland'),
(15, 'Vic', 'OAMK', 'Oulu', '90130', 'Finland');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Chỉ mục cho bảng `register_tr2k`
--
ALTER TABLE `register_tr2k`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `register_tr2k`
--
ALTER TABLE `register_tr2k`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`Customer_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
