-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 10, 2017 lúc 08:31 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dev_laravel_fau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts_categories`
--

DROP TABLE IF EXISTS `contacts_categories`;
CREATE TABLE `contacts_categories` (
  `contact_category_id` int(50) NOT NULL,
  `contact_category_name` varchar(255) NOT NULL,
  `contact_category_cv` varchar(255) NOT NULL,
  `contact_category_sdt` varchar(255) NOT NULL,
  `contact_category_mail` varchar(255) NOT NULL,
  `contact_category_skype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `contacts_categories`
--

INSERT INTO `contacts_categories` (`contact_category_id`, `contact_category_name`, `contact_category_cv`, `contact_category_sdt`, `contact_category_mail`, `contact_category_skype`) VALUES
(1, '1', '1', '1', '1', '12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts_categories`
--
ALTER TABLE `contacts_categories`
  ADD PRIMARY KEY (`contact_category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts_categories`
--
ALTER TABLE `contacts_categories`
  MODIFY `contact_category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
