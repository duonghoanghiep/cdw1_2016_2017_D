-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 03, 2017 lúc 12:08 SA
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
CREATE DATABASE IF NOT EXISTS `dev_laravel_fau` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dev_laravel_fau`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `faq_id` int(50) NOT NULL,
  `faq_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `faq_nd` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_title`, `faq_nd`) VALUES
(1, '123213', '111111111111'),
(2, 'eqwwqe', 'qwqwqweqwe'),
(4, '3123123', '12321312');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '{"_superadmin":1}', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(2, 'editor', '{"_user-editor":1,"_group-editor":1}', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(3, 'base admin', '{"_user-editor":1}', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lists`
--

DROP TABLE IF EXISTS `lists`;
CREATE TABLE `lists` (
  `list_id` int(50) NOT NULL,
  `list_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_area` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_sqrt` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_room` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_year` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_bed` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_hit` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_money` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `list_img` varchar(251) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
(2, '2014_02_19_095545_create_users_table', 1),
(3, '2014_02_19_095623_create_user_groups_table', 1),
(4, '2014_02_19_095637_create_groups_table', 1),
(5, '2014_02_19_160516_create_permission_table', 1),
(6, '2014_02_26_165011_create_user_profile_table', 1),
(7, '2014_05_06_122145_create_profile_field_types', 1),
(8, '2014_05_06_122155_create_profile_field', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`id`, `description`, `permission`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '_superadmin', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(2, 'user editor', '_user-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(3, 'group editor', '_group-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(4, 'permission editor', '_permission-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(5, 'profile type editor', '_profile-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `product_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_nd` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(251) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
CREATE TABLE `profile_field` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `profile_field_type_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
CREATE TABLE `profile_field_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `samples`
--

DROP TABLE IF EXISTS `samples`;
CREATE TABLE `samples` (
  `sample_id` int(50) NOT NULL,
  `sample_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `samples`
--

INSERT INTO `samples` (`sample_id`, `sample_name`) VALUES
(2, 'minhtrong'),
(4, 'aaaaaaaaaaaaaa'),
(5, '213213213123132113');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `says`
--

DROP TABLE IF EXISTS `says`;
CREATE TABLE `says` (
  `say_id` int(50) NOT NULL,
  `say_img` varchar(251) COLLATE utf8_unicode_ci NOT NULL,
  `say_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `say_cv` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `say_say` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `service_id` int(50) NOT NULL,
  `service_icon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`service_id`, `service_icon`) VALUES
(312, '123123'),
(313, 'wewqeweq');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `slide_id` int(50) NOT NULL,
  `slide_img` varchar(251) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `banned`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$8OWc3y5qDAPGkd/G/vr1Je4pYtqlDKRt4SJonbiXKb6vA.AaJVZPK', NULL, 1, 0, NULL, NULL, '2017-03-02 17:05:10', '$2y$10$.KPjz6WqD4TAYhwvaOHqU.smS.Cr9w7lccujb2JKXJkRDJ5BPugri', NULL, 0, '2017-02-16 19:07:34', '2017-03-02 17:05:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE `user_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `code`, `vat`, `first_name`, `last_name`, `phone`, `state`, `city`, `country`, `zip`, `address`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-16 19:07:34', '2017-02-16 19:07:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Chỉ mục cho bảng `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`list_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `profile_field`
--
ALTER TABLE `profile_field`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  ADD KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`);

--
-- Chỉ mục cho bảng `profile_field_type`
--
ALTER TABLE `profile_field_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`sample_id`);

--
-- Chỉ mục cho bảng `says`
--
ALTER TABLE `says`
  ADD PRIMARY KEY (`say_id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_activation_code_index` (`activation_code`),
  ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Chỉ mục cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Chỉ mục cho bảng `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profile_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `lists`
--
ALTER TABLE `lists`
  MODIFY `list_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `profile_field`
--
ALTER TABLE `profile_field`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `profile_field_type`
--
ALTER TABLE `profile_field_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `samples`
--
ALTER TABLE `samples`
  MODIFY `sample_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `says`
--
ALTER TABLE `says`
  MODIFY `say_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;
--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
