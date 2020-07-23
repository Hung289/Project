-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2020 lúc 03:23 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_sem1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `content`, `banner`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Luxury Hotel', 'dưd', 'hero-bg-2.jpg', 0, 0, '2020-06-30 15:00:34', '2020-06-30 15:00:34'),
(4, 'Hotel View', 'dêd', 'cat-03.jpg', 0, 0, '2020-07-02 01:24:47', '2020-07-02 01:24:47'),
(5, 'Luxyry Hotel & Room Service Agency', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, consectetur iure dolore eveniet adipisci, totam repellendus quia, esse cumque dolorem, eum impedit quam! Blanditiis quasi, debitis eaque dolorem aspernatur ducimus.', 'cat-02.jpg', 0, 0, '2020-07-02 01:54:23', '2020-07-02 01:54:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `content`, `title`, `status`, `category_blog_id`, `user_id`, `created_at`, `updated_at`, `new`) VALUES
(17, 'Blog1', 'dddddddddddddddddddddddddttttttttttttttttttttttttttttttttttt<br>hyyyyyyyyyyyyyyyyyy<br>nnnnnnnnnnnnnnnnnnnn<br>ggggggggggggggggg', 'ưdwdưdwdwddddddddddddddddddd', 0, 7, 44, '2020-07-20 04:52:31', '2020-07-20 04:52:31', 0),
(18, 'Blog thứ 2', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>dddddddddddddddddddddddddddddddd<br>fffffffffffffffffffffffffffffffffffffffffffffffffffffffffff<br>ggggggggggggggggggggggggggggggggggggg<br>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj<br>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'Tiêu đề blog thứ 2', 0, 7, 50, '2020-07-22 06:47:03', '2020-07-22 06:47:03', 0),
(19, 'Blog thứ 3', 'ooooooooooooooooooooooooooooooooooooooo<br>llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll<br>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj<br>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>gggggggggggggggggggggggggggggggggggggggg', 'Đây là blog thứ 3', 0, 8, 50, '2020-07-22 07:13:26', '2020-07-22 07:13:26', 0),
(20, 'Blog thứ 4', 'ccccccccccccccccccccccccccccccccccccccccccccc<br>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv<br>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb<br>nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn<br>mmmmmmmmmmmmmmmmmmmmmmmmmmmm<br>yyyyyyyyyyyyyyyyyyyyyyyyyyyyyy<br>ttttttttttttttttttttttttttttttttttttttttttttt', 'Đây là blog thứ 4', 0, 8, 50, '2020-07-22 07:15:52', '2020-07-22 07:17:37', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_images`
--

INSERT INTO `blog_images` (`id`, `image`, `blog_id`, `created_at`, `updated_at`) VALUES
(23, 'unnamed.jpg', 17, '2020-07-20 04:52:31', '2020-07-20 04:52:31'),
(24, 'gird-01.jpg', 18, '2020-07-22 06:47:03', '2020-07-22 06:47:03'),
(25, 'gird-06.jpg', 19, '2020-07-22 07:13:26', '2020-07-22 07:13:26'),
(26, 'gird-09.jpg', 20, '2020-07-22 07:15:52', '2020-07-22 07:15:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Khách sạn bình yên112', '01.png', '2020-06-30 03:30:09', '2020-06-30 04:53:25'),
(2, 'Nhà nghỉ 1', '02.png', '2020-06-30 04:54:44', '2020-06-30 04:54:44'),
(4, 'Nhà nghỉ Sóng gió', '03.png', '2020-06-30 07:18:14', '2020-06-30 07:18:14'),
(5, 'nhà nghỉ bão bùng', '04.png', '2020-06-30 07:19:27', '2020-06-30 07:19:27'),
(6, 'nhà nghỉ số 5', '05.png', '2020-06-30 07:36:16', '2020-06-30 07:36:16'),
(7, 'Nhà nghỉ số 6', '06.png', '2020-06-30 07:36:30', '2020-06-30 07:36:30'),
(8, 'thương hiệu', '14.jpg', '2020-06-30 14:12:56', '2020-06-30 14:12:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_blogs`
--

CREATE TABLE `category_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_blogs`
--

INSERT INTO `category_blogs` (`id`, `name`, `slug`, `image`, `description`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Luxury Room', 'luxury-room', 'cat-01.jpg', '<p>Đ&acirc;y l&agrave; danh mục blog&nbsp;Luxury Room</p>', 0, 1, '2020-06-22 07:16:41', '2020-06-22 07:16:41'),
(8, 'Couple Room', 'couple-room', 'cat-02.jpg', '<p>Đ&acirc;y l&agrave; danh mục dịch vụ&nbsp;Couple Room</p>', 0, 1, '2020-06-22 07:17:10', '2020-06-22 07:17:10'),
(9, 'Hotel Views', 'hotel-views', 'cat-03.jpg', '<p>Đ&acirc;y l&agrave; danh mục&nbsp;Hotel Views</p>', 0, 1, '2020-06-22 07:17:50', '2020-06-22 07:17:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_rooms`
--

CREATE TABLE `category_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_rooms`
--

INSERT INTO `category_rooms` (`id`, `name`, `slug`, `image`, `description`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Luxury Room', 'luxury-room', 'cat-01.jpg', '<p>Đ&acirc;y l&agrave; danh mục Luxury Room</p>', 0, 1, '2020-06-22 06:56:14', '2020-06-22 06:56:14'),
(12, 'Couple Room', 'couple-room', 'cat-02.jpg', '<p>Đ&acirc;y l&agrave; danh mục Couple Room</p>', 0, 1, '2020-06-22 06:56:42', '2020-06-22 06:56:42'),
(18, 'Hotel View', 'hotel-view', 'cat-03.jpg', 'cccc', 0, 0, '2020-07-01 04:34:54', '2020-07-01 04:34:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_services`
--

CREATE TABLE `category_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_services`
--

INSERT INTO `category_services` (`id`, `name`, `slug`, `image`, `image_hover`, `description`, `ordering`, `status`, `created_at`, `updated_at`, `banner_service`, `link_video_service`) VALUES
(6, 'Rooms & Appartment', 'rooms-appartment', '01.png', '01-hover.png', '<p>Đ&acirc;y l&agrave; damh mục&nbsp;Rooms &amp; Appartment</p>', 0, 1, '2020-06-22 07:00:20', '2020-06-22 07:00:20', 'Three-Bedroom-Balcony-Apartment-resize~three-bedroom-balcony-apartment.jpg', 'https://www.youtube.com/embed/HUyPZXS2w8Y'),
(7, 'Food & Restaurant', 'food-restaurant', '02.png', '02-hover.png', '<p>Đ&acirc;y l&agrave;&nbsp; danh mục&nbsp;Food &amp; Restaurant</p>', 0, 1, '2020-06-22 07:02:17', '2020-06-22 07:02:17', 'food-cta.jpg', 'https://www.youtube.com/embed/767xPIjTm2A'),
(8, 'Spa & Fitness', 'spa-fitness', '03.png', '03-hover.png', '<p>Đ&acirc;y l&agrave; danh mục&nbsp;Spa &amp; Fitness</p>', 0, 1, '2020-06-22 07:02:51', '2020-06-22 07:02:51', 'Spa_fitnes_1.jpg', 'https://www.youtube.com/embed/N3e8UXMdqOM'),
(9, 'Sports & Gaming', 'sports-gaming', '04.png', '04-hover.png', '<p>Đ&acirc;y l&agrave; danh mục&nbsp;Sports &amp; Gaming</p>', 0, 1, '2020-06-22 07:03:20', '2020-06-22 07:03:20', 'gaming_1.jpeg', 'https://www.youtube.com/embed/bioiaThZRJA'),
(10, 'Event & Party', 'event-party', '05.png', '05-hover.png', '<p>Đ&acirc;y l&agrave; danh mục&nbsp;Event &amp; Party</p>', 0, 1, '2020-06-22 07:03:42', '2020-06-22 07:03:42', 'party_event.jpg', 'https://www.youtube.com/embed/JXRN_LkCa_o'),
(11, 'GYM & Yoga', 'gym-yoga', '06.png', '06-hover.png', '<p>Đ&acirc;y l&agrave; danh mục&nbsp;GYM &amp; Yoga</p>', 0, 1, '2020-06-22 07:04:04', '2020-06-22 07:04:04', 'bmw_headlights_lights_137326_3840x2400.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qGRU3sRbaYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'danh mục dịch vụ số 1', 'danh-muc-dich-vu-so-1', '2.jpg', 'screenshot_1592882837.png', 'csscscsc', 0, 1, '2020-06-27 02:16:02', '2020-07-21 01:58:32', 'camera_photographer_smoke_126548_3840x2160.jpg', 'https://www.youtube.com/embed/-vtBgNxMyZI'),
(15, 'test', 'test', '1.jpg', '2.jpg', 'đwdwdddddddddđ', 0, 1, '2020-07-20 09:43:39', '2020-07-20 16:31:06', '2.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qGRU3sRbaYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_blogs`
--

CREATE TABLE `comment_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment_blogs`
--

INSERT INTO `comment_blogs` (`id`, `user_id`, `blog_id`, `comment`, `parent`, `created_at`, `updated_at`) VALUES
(8, 44, 17, 'ggtgt', 0, '2020-07-20 04:53:00', '2020-07-20 04:53:00'),
(9, 44, 17, 'gtgt', 8, '2020-07-20 04:53:09', '2020-07-20 04:53:09'),
(10, 50, 18, 'ffe', 0, '2020-07-22 07:38:58', '2020-07-22 07:38:58'),
(11, 50, 18, 'vdvdv', 10, '2020-07-22 07:39:14', '2020-07-22 07:39:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(92, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đw', '0923112', 'đư', '2020-07-11 08:35:39', '2020-07-11 08:35:39'),
(93, 'qưeqweqwq', '0', 'pppp@gmail.com', 'fefe', '0923112', 'feff', '2020-07-11 08:42:37', '2020-07-11 08:42:37'),
(94, 'qưeqweqwq', '0', 'pppp@gmail.com', 'fefe', '0923112', 'feff', '2020-07-11 08:43:10', '2020-07-11 08:43:10'),
(95, 'qưeqweqwq', '0', 'pppp@gmail.com', 'fefe', '0923112', 'feff', '2020-07-11 08:43:58', '2020-07-11 08:43:58'),
(96, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:44:25', '2020-07-11 08:44:25'),
(97, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:44:33', '2020-07-11 08:44:33'),
(98, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:45:07', '2020-07-11 08:45:07'),
(99, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:45:17', '2020-07-11 08:45:17'),
(100, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:46:30', '2020-07-11 08:46:30'),
(101, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:46:45', '2020-07-11 08:46:45'),
(102, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đw', '2020-07-11 08:46:53', '2020-07-11 08:46:53'),
(103, 'qưeqweqwq', '0', 'pppp@gmail.com', 'wdwd', '0923112', 'đwdwdwd', '2020-07-11 08:48:18', '2020-07-11 08:48:18'),
(104, 'qưeqweqwq', '0', 'pppp@gmail.com', 'wdwd', '0923112', 'đwdwdwd', '2020-07-11 08:51:23', '2020-07-11 08:51:23'),
(105, 'qưeqweqwq', '0', 'pppp@gmail.com', 'wdwd', '0923112', 'đwdwdwd', '2020-07-11 08:51:36', '2020-07-11 08:51:36'),
(106, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đư', '0923112', 'dưd', '2020-07-11 08:52:07', '2020-07-11 08:52:07'),
(107, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đư', '0923112', 'dưd', '2020-07-11 08:52:45', '2020-07-11 08:52:45'),
(108, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 08:57:04', '2020-07-11 08:57:04'),
(109, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 08:57:40', '2020-07-11 08:57:40'),
(110, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 08:57:54', '2020-07-11 08:57:54'),
(111, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 08:58:37', '2020-07-11 08:58:37'),
(112, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 08:58:47', '2020-07-11 08:58:47'),
(113, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 08:59:04', '2020-07-11 08:59:04'),
(114, 'qưeqweqwq', '0', 'pppp@gmail.com', 'dư', '0923112', 'ưddw', '2020-07-11 09:03:40', '2020-07-11 09:03:40'),
(115, 'qưeqweqwq', '0', 'pppp@gmail.com', 'đwd', '0923112', 'đwdwd', '2020-07-11 09:04:18', '2020-07-11 09:04:18'),
(116, 'qưeqweqwq', '0', 'pppp@gmail.com', 'ffefef', '0923112', 'fefefeef', '2020-07-11 09:08:38', '2020-07-11 09:08:38'),
(117, 'qưeqweqwq', '0', 'pppp@gmail.com', 'êfe', '0923112', 'fefefef', '2020-07-11 09:09:34', '2020-07-11 09:09:34'),
(118, 'nguoi dung moi', '0', 'gggg@gmail.com', 'cdc', '093169525812', 'cdc', '2020-07-11 11:53:00', '2020-07-11 11:53:00'),
(119, 'nguoi dung moi', '0', 'gggg@gmail.com', 'cdc', '093169525812', 'cdc', '2020-07-11 11:55:11', '2020-07-11 11:55:11'),
(120, 'nguoi dung moi', '0', 'gggg@gmail.com', 'cdc', '093169525812', 'cdc', '2020-07-11 12:17:39', '2020-07-11 12:17:39'),
(121, 'nguoi dung moi', '0', 'gggg@gmail.com', 'cdc', '093169525812', 'cdc', '2020-07-11 12:18:16', '2020-07-11 12:18:16'),
(122, 'nguoi dung moi', '0', 'gggg@gmail.com', 'cdc', '093169525812', 'cdc', '2020-07-11 12:18:39', '2020-07-11 12:18:39'),
(123, 'nguoi dung moi', '0', 'gggg@gmail.com', 'cdc', '093169525812', 'cdc', '2020-07-11 12:19:14', '2020-07-11 12:19:14'),
(124, 'nguoi dung moi', '0', 'gggg@gmail.com', 'fef', '093169525812', 'fefe', '2020-07-11 13:28:13', '2020-07-11 13:28:13'),
(125, 'nguoi dung moi', '0', 'gggg@gmail.com', 'fef', '093169525812', 'fefe', '2020-07-11 13:39:14', '2020-07-11 13:39:14'),
(126, 'nguoi dung moi', '0', 'gggg@gmail.com', 'đư', '093169525812', 'dưdw', '2020-07-11 13:42:07', '2020-07-11 13:42:07'),
(127, 'nguoi dung moi', '0', 'gggg@gmail.com', 'đư', '093169525812', 'dưdw', '2020-07-11 13:43:12', '2020-07-11 13:43:12'),
(128, 'nguoi dung moi', '0', 'gggg@gmail.com', 'ề', '093169525812', 'fef', '2020-07-11 13:48:17', '2020-07-11 13:48:17'),
(129, 'Hưng đepzai', '0', 'nthung2896@gmail.com', 'thái bình', '0921695258', 'tôi đến sớm đó', '2020-07-11 13:52:36', '2020-07-11 13:52:36'),
(130, 'hùheufheuf', '0', 'Hoangminh1894@gmail.com', 'ddwwdwd', '093029302', 'đwdwdwdwdw', '2020-07-11 15:16:14', '2020-07-11 15:16:14'),
(131, 'hùheufheuf', '0', 'Hoangminh1894@gmail.com', 'Khương trùng', '4543523452', 'fefeef', '2020-07-12 04:02:47', '2020-07-12 04:02:47'),
(132, 'hung pro 01', '0', 'nthung2896@gmail.com', 'Thị trấn Hưng Hà, huyện Hưng Hà, Thái Bình', '0912121222', 'đwww', '2020-07-12 10:13:54', '2020-07-12 10:13:54'),
(133, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đwdwdw', '0912121222', 'đwdwdwdwdw', '2020-07-12 10:20:31', '2020-07-12 10:20:31'),
(134, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đwd', '0912121222', 'đwdwdwdwd', '2020-07-12 13:14:38', '2020-07-12 13:14:38'),
(135, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đe', '0912121222', 'đê', '2020-07-14 03:24:09', '2020-07-14 03:24:09'),
(136, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đe', '0912121222', 'đê', '2020-07-14 03:24:48', '2020-07-14 03:24:48'),
(137, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đwd', '0912121222', 'đwdw', '2020-07-14 04:30:15', '2020-07-14 04:30:15'),
(138, 'hung pro 01', '0', 'nthung2896@gmail.com', 'êfefeff', '0912121222', 'feefef', '2020-07-14 04:37:29', '2020-07-14 04:37:29'),
(139, 'hung pro 01', '0', 'nthung2896@gmail.com', 'alo', '0912121222', 'ưqewqeqw', '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(140, 'hung pro 01', '0', 'nthung2896@gmail.com', 'ưdwd', '0912121222', 'đwdwdw', '2020-07-17 04:40:56', '2020-07-17 04:40:56'),
(141, 'hung pro 01', '0', 'nthung2896@gmail.com', 'gtgtgtgt', '0912121222', 'jujuju', '2020-07-17 14:36:36', '2020-07-17 14:36:36'),
(142, 'hung pro 01', '0', 'nthung2896@gmail.com', 'èefe', '0912121222', 'fefefeef', '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(143, 'hung pro 01', '0', 'nthung2896@gmail.com', 'yyjyj', '0912121222', 'jyjy', '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(144, 'hung pro 01', '0', 'nthung2896@gmail.com', 'frfr', '0912121222', 'ffrfr', '2020-07-18 04:02:08', '2020-07-18 04:02:08'),
(145, 'hung pro 01', '0', 'nthung2896@gmail.com', 'frfr', '0912121222', 'ffrfr', '2020-07-18 04:02:46', '2020-07-18 04:02:46'),
(146, 'hung pro 01', '0', 'nthung2896@gmail.com', 'ffrf', '0912121222', 'frfrfrfr', '2020-07-20 15:04:07', '2020-07-20 15:04:07'),
(147, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đw', '0912121222', 'đwd', '2020-07-21 08:49:15', '2020-07-21 08:49:15'),
(148, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đe', '0912121222', 'đê', '2020-07-21 14:34:07', '2020-07-21 14:34:07'),
(149, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đe', '0912121222', 'đê', '2020-07-21 14:36:55', '2020-07-21 14:36:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_18_154610_create_category_rooms_table', 2),
(4, '2020_06_18_205909_create_rooms_table', 3),
(7, '2020_06_18_225828_create_room_images_table', 4),
(8, '2020_06_19_104553_create_category_services_table', 5),
(9, '2020_06_20_094231_create_services_table', 6),
(16, '2020_06_21_092614_create_category_blogs_table', 7),
(20, '2020_06_21_161136_create_blogs_table', 8),
(21, '2020_06_21_165732_create_blog_images_table', 8),
(23, '2020_06_22_154911_add_attribute_new_into_services_table', 9),
(24, '2020_06_23_231248_create_customer_table', 10),
(32, '2020_06_24_151248_create_orders_table', 11),
(33, '2020_06_25_113140_create_order_details_table', 11),
(34, '2020_06_27_230015_create_review_rooms_table', 12),
(35, '2020_06_29_091330_create_comment_blogs_table', 13),
(37, '2020_06_29_135652_create_room_stars_table', 14),
(38, '2020_06_30_085506_create_brands_table', 15),
(39, '2020_06_30_152806_add_attribute_brand_id_into_rooms_table', 16),
(42, '2020_06_30_210805_create_banners_table', 17),
(43, '2020_07_02_092216_add_attribute_new_into_blogs_table', 18),
(46, '2020_07_06_153451_create_order_detail_services_table', 19),
(47, '2020_07_09_135512_create_roles_table', 20),
(48, '2020_07_09_141911_create_user_roles_table', 20),
(49, '2020_07_11_103656_add_attribute_guest_into_rooms_table', 21),
(50, '2020_07_20_155520_add_attribute_link_into_category_services_table', 22),
(52, '2020_07_21_105055_add_attribute_status_into_review_rooms_table', 23),
(55, '2020_07_21_203737_create_reset_passwords_table', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_price` double NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `total_price`, `payment`, `note`, `user_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(52, 369, '1', 'đê', 44, 135, '2020-07-14 03:24:09', '2020-07-14 03:24:09'),
(53, 369, '1', 'đê', 44, 136, '2020-07-14 03:24:48', '2020-07-14 03:24:48'),
(54, 861, '0', 'đwdw', 44, 137, '2020-07-14 04:30:15', '2020-07-14 04:30:15'),
(55, 123, '1', 'feefef', 44, 138, '2020-07-14 04:37:29', '2020-07-14 04:37:29'),
(56, 944, '1', 'ưqewqeqw', 44, 139, '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(57, 305, '0', 'đwdwdw', 44, 140, '2020-07-17 04:40:56', '2020-07-17 04:40:56'),
(58, 182, '0', 'jujuju', 44, 141, '2020-07-17 14:36:36', '2020-07-17 14:36:36'),
(59, 1637, '0', 'fefefeef', 44, 142, '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(60, 624, '1', 'jyjy', 44, 143, '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(61, 123, '0', 'ffrfr', 44, 144, '2020-07-18 04:02:08', '2020-07-18 04:02:08'),
(62, 123, '0', 'ffrfr', 44, 145, '2020-07-18 04:02:46', '2020-07-18 04:02:46'),
(63, 207, '1', 'frfrfrfr', 44, 146, '2020-07-20 15:04:07', '2020-07-20 15:04:07'),
(64, 1804, '0', 'đwd', 44, 147, '2020-07-21 08:49:15', '2020-07-21 08:49:15'),
(65, 123, '0', 'đê', 44, 148, '2020-07-21 14:34:07', '2020-07-21 14:34:07'),
(66, 123, '0', 'đê', 44, 149, '2020-07-21 14:36:55', '2020-07-21 14:36:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `room_id`, `from_date`, `to_date`, `created_at`, `updated_at`) VALUES
(72, 52, 32, '2020-07-28', '2020-07-31', '2020-07-14 03:24:09', '2020-07-14 03:24:09'),
(74, 54, 33, '2020-07-15', '2020-07-22', '2020-07-14 04:30:15', '2020-07-14 04:30:15'),
(75, 55, 33, '2020-07-30', '2020-07-31', '2020-07-14 04:37:29', '2020-07-14 04:37:29'),
(76, 56, 34, '2020-07-01', '2020-07-03', '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(77, 56, 32, '2020-07-01', '2020-07-03', '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(78, 56, 33, '2020-07-01', '2020-07-03', '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(79, 57, 32, '2020-07-04', '2020-07-05', '2020-07-17 04:40:56', '2020-07-17 04:40:56'),
(80, 57, 33, '2020-07-04', '2020-07-05', '2020-07-17 04:40:56', '2020-07-17 04:40:56'),
(81, 58, 32, '2020-07-06', '2020-07-07', '2020-07-17 14:36:36', '2020-07-17 14:36:36'),
(82, 59, 32, '2020-07-08', '2020-07-09', '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(83, 59, 34, '2020-07-22', '2020-07-24', '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(84, 60, 32, '2020-07-10', '2020-07-11', '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(85, 60, 33, '2020-07-06', '2020-07-07', '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(86, 60, 34, '2020-07-04', '2020-07-05', '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(87, 61, 32, '2020-07-12', '2020-07-13', '2020-07-18 04:02:08', '2020-07-18 04:02:08'),
(88, 62, 32, '2020-07-12', '2020-07-13', '2020-07-18 04:02:46', '2020-07-18 04:02:46'),
(89, 63, 32, '2020-07-14', '2020-07-15', '2020-07-20 15:04:07', '2020-07-20 15:04:07'),
(90, 64, 32, '2020-07-16', '2020-07-17', '2020-07-21 08:49:15', '2020-07-21 08:49:15'),
(91, 64, 34, '2020-07-06', '2020-07-07', '2020-07-21 08:49:15', '2020-07-21 08:49:15'),
(92, 65, 33, '2020-07-08', '2020-07-09', '2020-07-21 14:34:07', '2020-07-21 14:34:07'),
(93, 66, 33, '2020-07-08', '2020-07-09', '2020-07-21 14:36:55', '2020-07-21 14:36:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail_services`
--

CREATE TABLE `order_detail_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `quantity_service` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail_services`
--

INSERT INTO `order_detail_services` (`id`, `order_detail_id`, `service_id`, `quantity_service`, `created_at`, `updated_at`) VALUES
(43, 76, 3, 1, '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(44, 77, 3, 1, '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(45, 78, 4, 1, '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(46, 78, 3, 1, '2020-07-15 15:45:44', '2020-07-15 15:45:44'),
(47, 79, 3, 1, '2020-07-17 04:40:56', '2020-07-17 04:40:56'),
(48, 81, 3, 1, '2020-07-17 14:36:36', '2020-07-17 14:36:36'),
(49, 82, 8, 1, '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(50, 83, 9, 13, '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(51, 83, 12, 5, '2020-07-18 03:51:34', '2020-07-18 03:51:34'),
(52, 84, 3, 1, '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(53, 85, 3, 2, '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(54, 86, 11, 1, '2020-07-18 03:56:20', '2020-07-18 03:56:20'),
(55, 89, 28, 4, '2020-07-20 15:04:07', '2020-07-20 15:04:07'),
(56, 90, 5, 16, '2020-07-21 08:49:15', '2020-07-21 08:49:15'),
(57, 91, 19, 1, '2020-07-21 08:49:15', '2020-07-21 08:49:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reset_passwords`
--

CREATE TABLE `reset_passwords` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reset_passwords`
--

INSERT INTO `reset_passwords` (`email`, `token`, `created_at`, `updated_at`) VALUES
('nthung2896@gmail.com', 'M3VYVDGYHXbT9worpXsk1VbhCNEfOT8ZvyAO3JbLKQGsYTPYT6IUnilBUxdT', '2020-07-21 14:16:17', '2020-07-21 14:16:17'),
('nthung2896@gmail.com', '4c64tH4pqNJAC0EjBDol1lT91zcq5UvF2h2zgEpOAuqGZ8pWGVsnKilQiCVV', '2020-07-21 14:16:37', '2020-07-21 14:16:37'),
('nthung2896@gmail.com', 'vOw0LFrN8Dltys40sHjBQ2RHhB9HpMRuD36xNsSvwIFimMRimF0j4vsdb4Jo', '2020-07-21 14:21:09', '2020-07-21 14:21:09'),
('nthung2896@gmail.com', 'beXWj7lKQvuqYNl8rAJbHKg3ce6Cs4o9LfAzvYjOoH22NwXbdeJbNfxh0xqg', '2020-07-21 14:37:34', '2020-07-21 14:37:34'),
('nthung2896@gmail.com', 'vsuym9moDlrGiqLroNSRSN34h26hrKWspkB6xM6TL8NExMbAJ30yYCzgRG0L', '2020-07-21 14:40:25', '2020-07-21 14:40:25'),
('nthung2896@gmail.com', 'tKOrbGuqPcmQhxhuGEDGIDoeYIYOTC9zlr9B6006sfUTABySwOMjyOG3H9kh', '2020-07-21 14:53:50', '2020-07-21 14:53:50'),
('nthung2896@gmail.com', 'PJGw33BAekzg90zE0cem2gXuilQdp2VkWhOWvDWkYql3s1GMa0aK05PRaG41', '2020-07-21 15:07:35', '2020-07-21 15:07:35'),
('nthung2896@gmail.com', 'ewnuC5mXfk4UIMjO0R8zszjJmVQiGHeXvoHTuIbdJJd6qBsBSVF4yL2A1pwO', '2020-07-21 15:14:31', '2020-07-21 15:14:31'),
('nthung2896@gmail.com', 'pDJr4Jc7PTe3iaZP36jx1k5vMwQmVEUafsVRihiNPz4jh39GqKXRw4sSeDGq', '2020-07-21 15:18:26', '2020-07-21 15:18:26'),
('nthung2896@gmail.com', 'x02FVAZhP5fKJn2MECaOSpb5jeVafEPkme5fOdV2FC9T5q2bZg0EnO5z47Lb', '2020-07-21 15:34:28', '2020-07-21 15:34:28'),
('nthung2896@gmail.com', 'mXAMglj8MYrNcjV0vAAwNz55s5Nm0nuyp2GNRzr0SCwnDoqFNF5Z1PrxI8kP', '2020-07-21 15:34:40', '2020-07-21 15:34:40'),
('nthung2896@gmail.com', '8z0OndnoIvQMwTlL4LxWRdbcTvGd0bTOYNcYohstBGnfvzGF17qOT9dLfIHj', '2020-07-21 16:03:02', '2020-07-21 16:03:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review_rooms`
--

CREATE TABLE `review_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review_rooms`
--

INSERT INTO `review_rooms` (`id`, `user_id`, `room_id`, `parent`, `content`, `created_at`, `updated_at`, `status`) VALUES
(406, 44, 33, 0, 'oko', '2020-07-14 04:29:10', '2020-07-21 14:02:17', 0),
(407, 44, 32, 0, '123123', '2020-07-18 03:37:29', '2020-07-21 14:02:16', 0),
(408, 44, 32, 0, 'ẻwerw', '2020-07-18 03:37:40', '2020-07-21 14:02:16', 0),
(409, 44, 32, 408, 'êf', '2020-07-20 02:59:48', '2020-07-21 14:02:15', 0),
(410, 44, 32, 407, 'đw', '2020-07-20 02:59:52', '2020-07-21 07:25:06', 0),
(411, 44, 32, 408, 'fwfwf', '2020-07-20 03:00:01', '2020-07-21 14:02:18', 0),
(412, 44, 32, 407, 'đwd', '2020-07-20 03:00:04', '2020-07-21 14:02:13', 0),
(413, 44, 32, 407, 'đw', '2020-07-20 03:00:08', '2020-07-21 14:02:12', 0),
(414, 44, 32, 407, '1212', '2020-07-20 03:00:12', '2020-07-21 07:33:52', 0),
(415, 44, 32, 0, 'cscscscs', '2020-07-20 03:00:19', '2020-07-21 14:02:11', 0),
(416, 44, 32, 415, 'cscc', '2020-07-20 03:00:23', '2020-07-21 14:02:10', 0),
(417, 44, 34, 0, 'fefe', '2020-07-21 04:01:35', '2020-07-21 14:02:09', 0),
(418, 44, 33, 0, 'blo123', '2020-07-21 07:01:24', '2020-07-21 07:01:24', 0),
(419, 44, 33, 0, 'blo123', '2020-07-21 07:01:24', '2020-07-21 07:01:24', 0),
(420, 44, 32, 0, 'Bình luận này có status = 0 nên là được hiện lên', '2020-07-21 07:47:27', '2020-07-21 14:02:22', 0),
(421, 44, 32, 0, 'Bình luận này có status = 1 nên là không được hiện lên', '2020-07-21 07:47:49', '2020-07-21 14:02:23', 0),
(422, 50, 32, 421, 'êf', '2020-07-22 07:41:23', '2020-07-22 07:41:23', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(11, 'Quyền Tối Cao', '[\"admin.index\",\"admin.file\",\"admin.user.index\",\"admin.user.create\",\"admin.user.store\",\"admin.user.show\",\"admin.user.edit\",\"admin.user.update\",\"admin.user.destroy\",\"admin.categoryRoom.index\",\"admin.categoryRoom.create\",\"admin.categoryRoom.store\",\"admin.categoryRoom.show\",\"admin.categoryRoom.edit\",\"admin.categoryRoom.update\",\"admin.categoryRoom.destroy\",\"admin.categoryService.index\",\"admin.categoryService.create\",\"admin.categoryService.store\",\"admin.categoryService.show\",\"admin.categoryService.edit\",\"admin.categoryService.update\",\"admin.categoryService.destroy\",\"admin.categoryBlog.index\",\"admin.categoryBlog.create\",\"admin.categoryBlog.store\",\"admin.categoryBlog.show\",\"admin.categoryBlog.edit\",\"admin.categoryBlog.update\",\"admin.categoryBlog.destroy\",\"admin.room.index\",\"admin.room.create\",\"admin.room.store\",\"admin.room.show\",\"admin.room.edit\",\"admin.room.update\",\"admin.room.destroy\",\"admin.service.index\",\"admin.service.create\",\"admin.service.store\",\"admin.service.show\",\"admin.service.edit\",\"admin.service.update\",\"admin.service.destroy\",\"admin.blog.index\",\"admin.blog.create\",\"admin.blog.store\",\"admin.blog.show\",\"admin.blog.edit\",\"admin.blog.update\",\"admin.blog.destroy\",\"admin.brand.index\",\"admin.brand.create\",\"admin.brand.store\",\"admin.brand.show\",\"admin.brand.edit\",\"admin.brand.update\",\"admin.brand.destroy\",\"admin.banner.index\",\"admin.banner.create\",\"admin.banner.store\",\"admin.banner.show\",\"admin.banner.edit\",\"admin.banner.update\",\"admin.banner.destroy\",\"admin.role.index\",\"admin.role.create\",\"admin.role.store\",\"admin.role.show\",\"admin.role.edit\",\"admin.role.update\",\"admin.role.destroy\",\"admin.order.index\",\"admin.order.create\",\"admin.order.store\",\"admin.order.show\",\"admin.order.edit\",\"admin.order.update\",\"admin.order.destroy\",\"admin.reviewRoom.index\",\"admin.reviewRoom.create\",\"admin.reviewRoom.store\",\"admin.reviewRoom.show\",\"admin.reviewRoom.edit\",\"admin.reviewRoom.update\",\"admin.reviewRoom.destroy\",\"admin.reviewRoom2.update\",\"admin.searchBlog\",\"admin.searchCateBlog\",\"admin.searchRoom\",\"admin.searchCateRoom\",\"admin.searchUser\",\"admin.searchCateService\",\"admin.searchService\",\"admin.searchBrand\",\"admin.searchBanner\"]', NULL, NULL),
(12, 'Quyền admin đối tác', '[\"admin.index\",\"admin.room.create\",\"admin.room.store\",\"admin.room.show\",\"admin.room.edit\",\"admin.room.update\",\"admin.room.destroy\",\"admin.room.indexAdmin\",\"admin.getEditAdminPartner\",\"admin.postEditAdminPartner\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` tinyint(4) NOT NULL,
  `area` int(11) NOT NULL,
  `priceNight` double(8,2) NOT NULL,
  `priceWeekends` double(8,2) NOT NULL,
  `priceWeekly` double(8,2) NOT NULL,
  `priceClearFee` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `description` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gym` tinyint(4) NOT NULL,
  `Laundry` tinyint(4) NOT NULL,
  `tvCable` tinyint(4) NOT NULL,
  `wifi` tinyint(4) NOT NULL,
  `FreeParking` tinyint(4) NOT NULL,
  `Security` tinyint(4) NOT NULL,
  `category_room_id` int(10) UNSIGNED NOT NULL,
  `user_room_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `guest` int(11) NOT NULL,
  `adult` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `location`, `bed`, `bath`, `area`, `priceNight`, `priceWeekends`, `priceWeekly`, `priceClearFee`, `status`, `description`, `gym`, `Laundry`, `tvCable`, `wifi`, `FreeParking`, `Security`, `category_room_id`, `user_room_id`, `created_at`, `updated_at`, `brand_id`, `guest`, `adult`) VALUES
(32, 'phòng Số 1', 'Quảng Ninh', 2, 2, 56, 123.00, 123.00, 123.00, 123.00, 0, 'đwdwdwđwdwdđw', 1, 1, 1, 1, 1, 1, 11, 44, '2020-07-13 08:34:12', '2020-07-13 08:34:12', 2, 2, 2),
(33, 'admin 2 thêm mới', 'Đà nẵng', 2, 2, 56, 123.00, 123.00, 123.00, 123.00, 0, 'đwdwd', 1, 1, 1, 1, 1, 1, 12, 45, '2020-07-13 15:06:47', '2020-07-13 15:06:47', 5, 2, 2),
(34, 'Phòng Kaka thêm mới', 'Vũng Tàu', 2, 2, 56, 123.00, 123.00, 123.00, 123.00, 0, 'wdwdw', 1, 0, 1, 1, 1, 0, 12, 7, '2020-07-14 13:55:10', '2020-07-14 13:55:10', 4, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_images`
--

CREATE TABLE `room_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room_images`
--

INSERT INTO `room_images` (`id`, `image`, `room_id`, `created_at`, `updated_at`) VALUES
(117, '06.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(118, '10 - Copy.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(119, '10.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(120, '11.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(121, '12.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(122, '13.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(123, '14.jpg', 32, '2020-07-13 08:34:12', '2020-07-13 08:34:12'),
(124, '01.jpg', 33, '2020-07-13 15:06:47', '2020-07-13 15:06:47'),
(125, '02.jpg', 33, '2020-07-13 15:06:47', '2020-07-13 15:06:47'),
(126, '03.jpg', 33, '2020-07-13 15:06:47', '2020-07-13 15:06:47'),
(127, '04.jpg', 33, '2020-07-13 15:06:47', '2020-07-13 15:06:47'),
(128, '05.jpg', 33, '2020-07-13 15:06:47', '2020-07-13 15:06:47'),
(129, '06.jpg', 33, '2020-07-13 15:06:47', '2020-07-13 15:06:47'),
(130, '06.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10'),
(131, '10 - Copy.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10'),
(132, '10.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10'),
(133, '11.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10'),
(134, '12.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10'),
(135, '13.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10'),
(136, '14.jpg', 34, '2020-07-14 13:55:10', '2020-07-14 13:55:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_stars`
--

CREATE TABLE `room_stars` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `starAcao` int(11) DEFAULT NULL,
  `starDes` int(11) DEFAULT NULL,
  `starTran` int(11) DEFAULT NULL,
  `starOver` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room_stars`
--

INSERT INTO `room_stars` (`id`, `user_id`, `room_id`, `starAcao`, `starDes`, `starTran`, `starOver`, `created_at`, `updated_at`) VALUES
(198, 44, 33, NULL, 4, NULL, NULL, '2020-07-14 04:29:06', '2020-07-14 04:29:06'),
(199, 55, 32, 5, NULL, NULL, NULL, '2020-07-14 09:05:23', '2020-07-14 09:05:23'),
(200, 55, 32, NULL, 4, NULL, NULL, '2020-07-14 09:05:31', '2020-07-14 09:05:31'),
(201, 55, 32, NULL, NULL, 5, NULL, '2020-07-14 09:41:10', '2020-07-14 09:41:10'),
(202, 55, 32, NULL, 5, NULL, NULL, '2020-07-14 09:41:10', '2020-07-14 09:41:10'),
(203, 55, 32, NULL, NULL, NULL, 5, '2020-07-14 09:41:10', '2020-07-14 09:41:10'),
(204, 55, 32, NULL, NULL, 4, NULL, '2020-07-14 09:41:24', '2020-07-14 09:41:24'),
(205, 55, 32, NULL, NULL, NULL, 5, '2020-07-14 09:41:28', '2020-07-14 09:41:28'),
(206, 55, 32, NULL, 5, NULL, NULL, '2020-07-14 09:42:29', '2020-07-14 09:42:29'),
(207, 55, 32, 5, NULL, NULL, NULL, '2020-07-14 09:42:32', '2020-07-14 09:42:32'),
(208, 55, 32, 4, NULL, NULL, NULL, '2020-07-14 09:42:36', '2020-07-14 09:42:36'),
(209, 44, 32, NULL, NULL, NULL, 5, '2020-07-20 02:59:26', '2020-07-20 02:59:26'),
(210, 44, 32, NULL, NULL, 5, NULL, '2020-07-20 02:59:29', '2020-07-20 02:59:29'),
(211, 44, 32, NULL, 5, NULL, NULL, '2020-07-20 02:59:33', '2020-07-20 02:59:33'),
(212, 44, 32, 5, NULL, NULL, NULL, '2020-07-20 02:59:36', '2020-07-20 02:59:36'),
(213, 44, 32, NULL, 1, NULL, NULL, '2020-07-21 07:57:56', '2020-07-21 07:57:56'),
(214, 44, 32, 5, NULL, NULL, NULL, '2020-07-21 07:57:59', '2020-07-21 07:57:59'),
(215, 44, 32, NULL, NULL, 5, NULL, '2020-07-21 07:58:03', '2020-07-21 07:58:03'),
(216, 44, 32, NULL, NULL, NULL, 5, '2020-07-21 07:58:06', '2020-07-21 07:58:06'),
(217, 44, 32, NULL, 5, NULL, NULL, '2020-07-21 08:01:02', '2020-07-21 08:01:02'),
(218, 44, 32, NULL, NULL, 5, NULL, '2020-07-21 08:01:16', '2020-07-21 08:01:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_service_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `description`, `status`, `image`, `category_service_id`, `created_at`, `updated_at`, `new`) VALUES
(3, 'London Mashroom', 59.00, '<p>đasdasdasdasdsadadsdadwdw</p>', 0, '01.jpg', 7, '2020-06-22 07:30:00', '2020-06-22 07:30:00', 0),
(4, 'Special Hot Burger', 29.00, '<p>fefefeefef</p>', 0, '02.jpg', 7, '2020-06-22 07:30:22', '2020-06-22 07:30:22', 1),
(5, 'Italian Supper Pizza', 69.00, '<p>adwdwdwdwdwdwdwdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>', 0, '03.jpg', 7, '2020-06-22 07:30:45', '2020-06-22 08:22:31', 0),
(6, 'Vegetables Burgers', 38.00, '<p>đwwwdwđ</p>', 0, '06.jpg', 7, '2020-06-22 07:32:17', '2020-06-22 07:32:17', 1),
(8, 'Đồ ăn 2', 61.00, '<p>Đ&acirc;y l&agrave; đồ ăn 2</p>', 0, '09.jpg', 7, '2020-06-22 07:33:15', '2020-06-22 07:33:15', 1),
(9, 'Đồ ăn 4', 39.00, '<p>Đ&acirc;y l&agrave; đồ ăn 4</p>', 0, '11.jpg', 7, '2020-06-22 07:34:51', '2020-06-22 07:34:51', 0),
(10, 'Đồ ăn 5', 27.00, '<p>Đ&acirc;y l&agrave; đồ ăn 5</p>', 0, '10.jpg', 7, '2020-06-22 07:35:19', '2020-06-22 07:35:19', 0),
(11, 'cái dịch vụ của spa', 78.00, '<p>cscscscscsc</p>', 0, '10.jpg', 8, '2020-06-22 10:00:44', '2020-06-22 10:00:44', 0),
(12, 'Đây là dịch vụ spa 2', 140.00, '<p>Đ&acirc;y l&agrave; dịch vụ spa 2</p>', 0, '11.jpg', 8, '2020-06-22 13:01:43', '2020-06-22 13:01:43', 0),
(13, 'sport1', 110.00, '<p>Đ&acirc;y l&agrave; soprt 1</p>', 0, '02.jpg', 9, '2020-06-22 13:02:51', '2020-06-22 13:02:51', 0),
(14, 'Gaming 1', 222.00, '<p>Đ&acirc;y l&agrave; gaming 1</p>', 0, '10.jpg', 9, '2020-06-22 13:03:16', '2020-06-22 13:03:16', 0),
(15, 'đât là tên dịch vụ 1', 123.00, 'cdcdcc', 0, '2.jpg', 10, '2020-06-27 13:43:19', '2020-06-27 13:43:19', 0),
(16, 'Spa 123', 34.00, 'Đây là spa', 0, 'unnamed.jpg', 8, '2020-07-20 02:39:03', '2020-07-20 02:39:03', 0),
(17, 'Spa 2', 45.00, 'fefefefef', 0, 'images.jpg', 8, '2020-07-20 02:43:57', '2020-07-20 02:43:57', 0),
(18, 'spa3', 32.00, 'r3r', 0, 'mat-trai-cua-viec-hoc-nghe-spa-mien-phi-theo-hinh-thuc-vua-hoc-vua-lam-1.png', 8, '2020-07-20 02:50:25', '2020-07-20 02:50:25', 0),
(19, 'spa4', 454.00, 'r4rr4', 0, 'mat-trai-cua-viec-hoc-nghe-spa-mien-phi-theo-hinh-thuc-vua-hoc-vua-lam-1.png', 8, '2020-07-20 02:51:01', '2020-07-20 02:51:01', 0),
(20, 'spa 5', 32.00, 'fef', 0, 'mat-trai-cua-viec-hoc-nghe-spa-mien-phi-theo-hinh-thuc-vua-hoc-vua-lam-1.png', 8, '2020-07-20 02:52:07', '2020-07-20 02:52:07', 0),
(21, 'spa 6', 34.00, 'fefee', 0, 'mat-trai-cua-viec-hoc-nghe-spa-mien-phi-theo-hinh-thuc-vua-hoc-vua-lam-1.png', 8, '2020-07-20 02:55:53', '2020-07-20 02:55:53', 0),
(22, 'hưng', 34.00, '43', 0, 'unnamed.jpg', 8, '2020-07-20 03:06:27', '2020-07-20 03:06:27', 0),
(23, 'đwdw', 32.00, 'ffrf', 0, 'unnamed.jpg', 8, '2020-07-20 03:21:21', '2020-07-20 03:21:21', 0),
(24, 'Dịch vụ Room & Apartment 1', 12.00, 'Đây là dịch vụ thứ nhất', 0, 'room_apartment_1.jpg', 6, '2020-07-20 13:29:41', '2020-07-20 13:29:41', 0),
(25, 'Dịch vụ Room & Apartment 2', 14.00, 'đeedededede', 0, 'room_apartment_2.jpg', 6, '2020-07-20 13:38:18', '2020-07-20 13:38:18', 0),
(26, 'Dịch vụ Room & Apartment 3', 15.00, 'Đây là dịch vụ 3', 0, 'room_apartment_3.jpg', 6, '2020-07-20 13:39:18', '2020-07-20 13:39:18', 0),
(27, 'Dịch vụ Room & Apartment 4', 16.00, 'Đây là dịch vụ 4', 0, 'room_apartment_4.jpg', 6, '2020-07-20 13:41:55', '2020-07-20 13:41:55', 0),
(28, 'game 1', 21.00, 'Đây là game 1', 0, 'game_2.jpg', 9, '2020-07-20 14:52:48', '2020-07-20 14:52:48', 0),
(29, 'game 2', 18.00, 'Đây là game 2', 0, 'gaming_1.jpg', 9, '2020-07-20 14:53:33', '2020-07-20 14:53:33', 0),
(30, 'sport 1', 15.00, 'Đây là sport 1', 0, 'sport_1.jpg', 9, '2020-07-20 14:54:01', '2020-07-20 14:54:01', 0),
(31, 'sport 2', 23.00, 'Đây là sport 2', 0, 'sport_2.jpg', 9, '2020-07-20 14:54:23', '2020-07-20 14:54:23', 0),
(32, 'sport 3', 19.00, 'Đây là sport 3', 0, 'sport_3.jpg', 9, '2020-07-20 14:55:14', '2020-07-20 14:55:14', 0),
(33, 'party_1', 18.00, 'Đây là party 1', 0, 'party_1.jpg', 10, '2020-07-20 15:40:40', '2020-07-20 15:40:40', 0),
(34, 'party_2', 21.00, 'Đây là party 2', 0, 'party_2.jpg', 10, '2020-07-20 15:41:06', '2020-07-20 15:41:06', 0),
(35, 'party_3', 22.00, 'Đây là party 3', 0, 'party_3.jpg', 10, '2020-07-20 15:41:31', '2020-07-20 15:41:31', 0),
(36, 'party_4', 23.00, 'Đây là party_4', 0, 'party_4.jpg', 10, '2020-07-20 15:41:54', '2020-07-20 15:41:54', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `level`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Nguyễn Thành Hưng11121', 'hhh@gmail.com', NULL, NULL, '$2y$10$IToNL9dyBcOuOkQVfk5TkOGqqHpHul9vZxkqIy/6MPz30/PLJu1JS', 2, 'blog-breadcrumb.jpg', NULL, '2020-06-22 04:17:15', '2020-07-07 07:58:02'),
(7, 'hung123123', 'kaka@gmail.com', '12341321312', NULL, '$2y$10$ZWD.TxYNo7.db0C2WzLtaOW/1WoU9Yrr/zoVdsD5AFEdfeiWirGju', 1, '12.jpg', NULL, '2020-06-26 13:29:39', '2020-07-14 14:44:30'),
(39, 'hùheufheuf', 'Hoangminh1894@gmail.com', NULL, NULL, '$2y$10$Fo5ufWzZZalz7bZj3dCXWOUbOv55g8MLaKvWiIB4.j8xh11s8YgHG', 2, 'WIN_20191209_23_51_43_Pro.jpg', NULL, '2020-07-11 15:15:09', '2020-07-12 01:57:26'),
(44, 'hung pro 01', 'nthung2896@gmail.com', '0912121222', NULL, '$2y$10$.cWHvmdroPcJjEnI7FiRS.wJKCdWTnjMM03nabaHIRqrWBjwvmBq6', 0, 'WIN_20191212_16_39_15_Pro.jpg', NULL, '2020-07-12 02:09:46', '2020-07-21 15:54:55'),
(45, 'hung12312323', 'zzz@gmail.com', '74845673354', NULL, '$2y$10$aBJTaibNqtVUzWV0sCx7Xefq5UdT4HNU3UGr8vPuyWSl8zLxR4j4C', 1, '12.jpg', NULL, '2020-07-13 15:00:49', '2020-07-14 07:39:31'),
(50, 'pro 02', 'kaka123@gmail.com', '012345123', NULL, '$2y$10$7hREaidsUuLfqq5l14YoHOK3jpP73BL10rO6NoZCeFg/Q09EdByva', 0, '12.jpg', NULL, '2020-07-14 07:05:59', '2020-07-14 07:05:59'),
(51, '123123', '123123231@gmail.com', '1231231312', NULL, '$2y$10$BxASj.33u5Dv17bCeYVkbOXrLIKLFj4WJ6r9CKulzVY6y0JGclhlS', 0, '11.jpg', NULL, '2020-07-14 07:15:26', '2020-07-14 07:39:04'),
(52, 'sqsqsq', 'dd@gmail.com', '3232311', NULL, '$2y$10$aOFcrzjkLJKALo62poK7..maAzKSwkWek9Ug10BoLCZl3ho3DA7ze', 1, '12.jpg', NULL, '2020-07-14 07:21:30', '2020-07-14 07:21:30'),
(53, 'fff', 'ttt@gmail.com', '2312311111', NULL, '$2y$10$JcviSS6J/IKK6A4LdYqMwuSJ3GTP2uwDAX4HgA5MeaZgaF2OPMSUW', 0, '10 - Copy.jpg', NULL, '2020-07-14 07:22:02', '2020-07-14 07:22:02'),
(54, 'áda', 'hh@gmail.com', '123123111', NULL, '$2y$10$CXxbLpuR3qZhvRL/DKDOqOO.KvbZrarxpce5I/2EanI.NK3B/LRH.', 0, '12.jpg', NULL, '2020-07-14 07:22:53', '2020-07-14 08:35:51'),
(55, 'lol123', 'hh2@gmail.com', '1231231112123', NULL, '$2y$10$X5Vogr56D16IM0Jbf9KteOQFXzMcV34ChxeUKlk6R7ssJlO5Fj4ia', 0, '13.jpg', NULL, '2020-07-14 07:23:27', '2020-07-14 13:43:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(7, 12),
(44, 11),
(45, 11),
(45, 12),
(50, 11),
(50, 12),
(51, 11),
(52, 12),
(54, 11),
(55, 11);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_name_unique` (`name`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_name_unique` (`name`),
  ADD KEY `blogs_category_blog_id_foreign` (`category_blog_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_images_blog_id_foreign` (`blog_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Chỉ mục cho bảng `category_blogs`
--
ALTER TABLE `category_blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_blogs_name_unique` (`name`),
  ADD UNIQUE KEY `category_blogs_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `category_rooms`
--
ALTER TABLE `category_rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_rooms_name_unique` (`name`),
  ADD UNIQUE KEY `category_rooms_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `category_services`
--
ALTER TABLE `category_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_services_name_unique` (`name`),
  ADD UNIQUE KEY `category_services_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `comment_blogs`
--
ALTER TABLE `comment_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_blogs_user_id_foreign` (`user_id`),
  ADD KEY `comment_blogs_blog_id_foreign` (`blog_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_room_id_foreign` (`room_id`);

--
-- Chỉ mục cho bảng `order_detail_services`
--
ALTER TABLE `order_detail_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_services_order_detail_id_foreign` (`order_detail_id`),
  ADD KEY `order_detail_services_service_id_foreign` (`service_id`);

--
-- Chỉ mục cho bảng `reset_passwords`
--
ALTER TABLE `reset_passwords`
  ADD KEY `reset_passwords_email_index` (`email`);

--
-- Chỉ mục cho bảng `review_rooms`
--
ALTER TABLE `review_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_rooms_user_id_foreign` (`user_id`),
  ADD KEY `review_rooms_room_id_foreign` (`room_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_name_unique` (`name`),
  ADD KEY `rooms_category_room_id_foreign` (`category_room_id`),
  ADD KEY `rooms_user_room_id_foreign` (`user_room_id`);

--
-- Chỉ mục cho bảng `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_images_room_id_foreign` (`room_id`);

--
-- Chỉ mục cho bảng `room_stars`
--
ALTER TABLE `room_stars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_stars_user_id_foreign` (`user_id`),
  ADD KEY `room_stars_room_id_foreign` (`room_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_name_unique` (`name`),
  ADD KEY `services_category_service_id_foreign` (`category_service_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `category_rooms`
--
ALTER TABLE `category_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `category_services`
--
ALTER TABLE `category_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comment_blogs`
--
ALTER TABLE `comment_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `order_detail_services`
--
ALTER TABLE `order_detail_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `review_rooms`
--
ALTER TABLE `review_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=423;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `room_stars`
--
ALTER TABLE `room_stars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_blog_id_foreign` FOREIGN KEY (`category_blog_id`) REFERENCES `category_blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `blog_images`
--
ALTER TABLE `blog_images`
  ADD CONSTRAINT `blog_images_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comment_blogs`
--
ALTER TABLE `comment_blogs`
  ADD CONSTRAINT `comment_blogs_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail_services`
--
ALTER TABLE `order_detail_services`
  ADD CONSTRAINT `order_detail_services_order_detail_id_foreign` FOREIGN KEY (`order_detail_id`) REFERENCES `order_details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `review_rooms`
--
ALTER TABLE `review_rooms`
  ADD CONSTRAINT `review_rooms_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_rooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_category_room_id_foreign` FOREIGN KEY (`category_room_id`) REFERENCES `category_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rooms_user_room_id_foreign` FOREIGN KEY (`user_room_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `room_stars`
--
ALTER TABLE `room_stars`
  ADD CONSTRAINT `room_stars_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `room_stars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_service_id_foreign` FOREIGN KEY (`category_service_id`) REFERENCES `category_services` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
