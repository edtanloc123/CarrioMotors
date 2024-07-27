-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 23, 2022 lúc 05:29 PM
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
-- Cơ sở dữ liệu: `carproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'Admin 1', '111111', 'admin1@gmail.com', 1),
(2, 'Admin 2', '222222', 'admin2@gmail.com', 1),
(3, 'User 1', '111111', 'user1@gmail.com', 2),
(4, 'User 2', '222222', 'user2@gmail.com', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(250) NOT NULL,
  `companyname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `brandname`, `companyname`) VALUES
(1, 'VinFast', 'VinGroup'),
(2, 'Mazda', 'Toyo Kogyo Co'),
(3, 'Lamborghini', 'Audi AG '),
(4, 'Mercedes-benz', 'Mercedes-benz'),
(5, 'Ford', 'Ford'),
(6, 'Hyundai', 'Hyundai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carline`
--

CREATE TABLE `carline` (
  `id` int(11) NOT NULL,
  `carlinename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `carline`
--

INSERT INTO `carline` (`id`, `carlinename`) VALUES
(1, 'Roadster'),
(2, 'Supercar\r\n'),
(3, 'Cabriolet'),
(4, 'Minivan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `accountid` int(11) NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date DEFAULT NULL,
  `otoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `accountid`, `updated_at`, `created_at`, `otoid`) VALUES
(21, 'test', 2, '2022-09-06', '2022-09-06', 3),
(22, 'test', 2, '2022-09-06', '2022-09-06', 3),
(23, 'test1', 2, '2022-09-06', '2022-09-06', 1),
(24, 'test 2', 2, '2022-09-15', '2022-09-15', 1),
(25, 'acbbb', 2, '2022-09-15', '2022-09-15', 2),
(26, 'test3', 2, '2022-09-16', '2022-09-16', 1),
(27, 'test4', 2, '2022-09-16', '2022-09-16', 1),
(28, 'test5', 2, '2022-09-16', '2022-09-16', 1),
(29, 'test6', 2, '2022-09-16', '2022-09-16', 1),
(30, '123', 2, '2022-09-19', '2022-09-19', 1),
(31, 'abc', 2, '2022-09-23', '2022-09-23', 1),
(32, 'good', 2, '2022-09-23', '2022-09-23', 1),
(33, 'nice', 2, '2022-09-23', '2022-09-23', 1),
(34, 'very good', 2, '2022-09-23', '2022-09-23', 1),
(35, 'nice', 2, '2022-09-23', '2022-09-23', 1),
(36, 'good car', 2, '2022-09-23', '2022-09-23', 1),
(37, 'nice car', 2, '2022-09-23', '2022-09-23', 1),
(38, 'good car', 2, '2022-09-23', '2022-09-23', 1),
(39, 'good carr broo', 2, '2022-09-23', '2022-09-23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oto`
--

CREATE TABLE `oto` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `yearofmanufacture` int(11) NOT NULL,
  `origin` varchar(250) NOT NULL,
  `engine` varchar(250) NOT NULL,
  `wattage` varchar(250) NOT NULL,
  `fuelcapacity` varchar(250) NOT NULL,
  `segmentid` int(11) NOT NULL,
  `carlineid` int(11) NOT NULL,
  `showroomid` int(11) NOT NULL,
  `brandid` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oto`
--

INSERT INTO `oto` (`id`, `name`, `quantity`, `price`, `yearofmanufacture`, `origin`, `engine`, `wattage`, `fuelcapacity`, `segmentid`, `carlineid`, `showroomid`, `brandid`, `photo`) VALUES
(1, 'VinFast', 100, 1.508, 2021, 'Việt Nam', 'N20', '98/6.200', 'GASOLINE', 1, 4, 1, 1, 'vinfast1.png'),
(2, 'Mazda', 100, 1.408, 2019, 'Japan', 'Skyactiv', '110/6000', 'GASOLINE', 2, 3, 2, 2, 'mazda1.png'),
(3, 'Lamborghini', 100, 13.3, 2017, 'Sant\' Agata Bolognese', 'V12', '544kW', '\r\nGASOLINE', 1, 2, 3, 3, 'lamborghini1.png'),
(4, ' mercedes-benz', 100, 1.2, 2020, '\r\nGermany', 'SUV', '270 - 410 kW', '\r\nGASOLINE', 3, 1, 2, 4, 'mercedes1.png'),
(5, 'Ford', 100, 1.2, 2017, '\r\nUSA', '2.0L', '270 - 410 kW', '\r\nGASOLINE', 1, 1, 3, 5, 'ford1.png'),
(6, 'Hyundai', 100, 1.2, 2017, '\r\nKorea', 'SUV', '270 - 410 kW', '\r\nGASOLINE', 4, 1, 2, 6, 'hyundai1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `otoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `photo`
--

INSERT INTO `photo` (`id`, `name`, `otoid`) VALUES
(5, 'vinfast1.png', 1),
(6, 'vinfast2.png', 1),
(7, 'vinfast3.png', 1),
(8, 'vinfast4.png', 1),
(9, 'vinfast5.png', 1),
(10, 'vinfast6.png', 1),
(12, 'vinfast7.png', 1),
(13, 'mazda1.png', 2),
(14, 'mazda2.png', 2),
(15, 'mazda3.png', 2),
(16, 'mazda4.png', 2),
(17, 'mazda5.png', 2),
(18, 'mazda6.png', 2),
(19, 'mazda7.png', 2),
(21, 'lamborghini1.png', 3),
(22, 'lamborghini2.png', 3),
(23, 'lamborghini3.png', 3),
(24, 'lamborghini4.png', 3),
(25, 'lamborghini5.png', 3),
(26, 'lamborghini6.png', 3),
(27, 'lamborghini7.png', 3),
(28, 'ford1.png', 5),
(29, 'ford2.png', 5),
(30, 'ford3.png', 5),
(31, 'ford4.png', 5),
(32, 'ford5.png', 5),
(33, 'ford6.png', 5),
(34, 'ford7.png', 5),
(35, 'mercedes1.png', 4),
(36, 'mercedes2.png', 4),
(37, 'mercedes3.png', 4),
(38, 'mercedes4.png', 4),
(39, 'mercedes5.png', 4),
(40, 'mercedes6.png', 4),
(41, 'hyundai1.png', 6),
(42, 'hyundai2.png', 6),
(43, 'hyundai3.png', 6),
(44, 'hyundai4.png', 6),
(45, 'hyundai5.png', 6),
(46, 'hyundai6.png', 6),
(47, 'hyundai7.png', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_account`
--

CREATE TABLE `role_account` (
  `id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `accountid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role_account`
--

INSERT INTO `role_account` (`id`, `roleid`, `accountid`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 1, 2),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `segment`
--

CREATE TABLE `segment` (
  `id` int(11) NOT NULL,
  `segmentname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `segment`
--

INSERT INTO `segment` (`id`, `segmentname`) VALUES
(1, 'Phân khúc hạng A'),
(2, 'Phân khúc hạng B'),
(3, 'Phân khúc hạng C'),
(4, 'Phân khúc hạng D');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showroom`
--

CREATE TABLE `showroom` (
  `id` int(11) NOT NULL,
  `showroomname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `showroom`
--

INSERT INTO `showroom` (`id`, `showroomname`, `address`) VALUES
(1, 'Showroom1', '828 Sư Vạn Hạnh,Q10'),
(2, 'Showroom2', '142 Tôn Thất Tùng,Phường Bến Thành,Q1'),
(3, 'Showroom3', '32 Trường Sơn,Quận Tân Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warrantypolicy`
--

CREATE TABLE `warrantypolicy` (
  `id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `brandid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `warrantypolicy`
--

INSERT INTO `warrantypolicy` (`id`, `content`, `brandid`) VALUES
(1, 'Content 1', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carline`
--
ALTER TABLE `carline`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AccountId` (`accountid`),
  ADD KEY `otoid` (`otoid`);

--
-- Chỉ mục cho bảng `oto`
--
ALTER TABLE `oto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BrandId` (`brandid`),
  ADD KEY `CarLineId` (`carlineid`),
  ADD KEY `SegmentId` (`segmentid`),
  ADD KEY `ShowroomId` (`showroomid`);

--
-- Chỉ mục cho bảng `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `OtoId` (`otoid`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_account`
--
ALTER TABLE `role_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AccountId` (`accountid`),
  ADD KEY `RoleId` (`roleid`);

--
-- Chỉ mục cho bảng `segment`
--
ALTER TABLE `segment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `warrantypolicy`
--
ALTER TABLE `warrantypolicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BrandId` (`brandid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `carline`
--
ALTER TABLE `carline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `oto`
--
ALTER TABLE `oto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `role_account`
--
ALTER TABLE `role_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `segment`
--
ALTER TABLE `segment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `showroom`
--
ALTER TABLE `showroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `warrantypolicy`
--
ALTER TABLE `warrantypolicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`accountid`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`otoid`) REFERENCES `oto` (`id`);

--
-- Các ràng buộc cho bảng `oto`
--
ALTER TABLE `oto`
  ADD CONSTRAINT `oto_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `oto_ibfk_2` FOREIGN KEY (`carlineid`) REFERENCES `carline` (`id`),
  ADD CONSTRAINT `oto_ibfk_3` FOREIGN KEY (`segmentid`) REFERENCES `segment` (`id`),
  ADD CONSTRAINT `oto_ibfk_4` FOREIGN KEY (`showroomid`) REFERENCES `showroom` (`id`);

--
-- Các ràng buộc cho bảng `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`otoid`) REFERENCES `oto` (`id`);

--
-- Các ràng buộc cho bảng `role_account`
--
ALTER TABLE `role_account`
  ADD CONSTRAINT `role_account_ibfk_1` FOREIGN KEY (`accountid`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `role_account_ibfk_2` FOREIGN KEY (`roleid`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `warrantypolicy`
--
ALTER TABLE `warrantypolicy`
  ADD CONSTRAINT `warrantypolicy_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
