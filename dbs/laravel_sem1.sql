-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2020 lúc 05:12 AM
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
(2, 'Couple & Room Service Agency', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, consectetur iure dolore eveniet adipisci, totam repellendus quia, esse cumque dolorem, eum impedit quam! Blanditiis quasi, debitis eaque dolorem aspernatur ducimus.', 'Room3_4.jpg', 0, 0, '2020-06-30 15:00:34', '2020-07-26 03:52:07'),
(4, 'Hotel View & Room Service Agency', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, consectetur iure dolore eveniet adipisci, totam repellendus quia, esse cumque dolorem, eum impedit quam! Blanditiis quasi, debitis eaque dolorem aspernatur ducimus.', 'Room5_2.jpg', 0, 0, '2020-07-02 01:24:47', '2020-07-26 03:49:44'),
(5, 'Luxyry Hotel & Room Service Agency', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, consectetur iure dolore eveniet adipisci, totam repellendus quia, esse cumque dolorem, eum impedit quam! Blanditiis quasi, debitis eaque dolorem aspernatur ducimus.', 'Blogthu3_2.jpg', 0, 0, '2020-07-02 01:54:23', '2020-07-26 03:48:19');

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
(23, 'Hawaii Luxury Suites - Yalarent', '<div id=\"summary\" class=\"\" data-et-mouseenter=\"customGoal:BUeeZaTaTaBEKMPXLae:1\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:1\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:1\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:1\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:1\r\ncustomGoal:BUeePHOOSINEGO:1\r\ncustomGoal:BUeeHNSPVadIaCKe:1\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1\" data-et-click=\"customGoal:BUeeZaTaTaBEKMPXLae:2\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:2\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:2\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:2\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:2\r\ncustomGoal:BUeePHOOSINEGO:2\r\ncustomGoal:BUeeHNSPVadIaCKe:2\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2\">\r\n<div id=\"property_description_content\">\r\n<p>Nằm tại thành phố Eilat thuộc Vùng phía Nam của Israel, cách Bãi biển Kisuski 1 km, Hawaii Luxury Suites có WiFi miễn phí, sân chơi cho trẻ em, vườn và chỗ đỗ xe riêng miễn phí.</p>\r\n<p>Mỗi căn hộ tại đây đều được bố trí bếp với lò vi sóng và tủ lạnh, TV màn hình phẳng với truyền hình vệ tinh, tiện nghi ủi, bàn và khu vực ghế ngồi với ghế sofa. Ngoài ra, phòng còn có phòng tắm riêng đầy đủ tiện nghi với vòi sen và máy sấy tóc.</p>\r\n<p>Căn hộ cũng có sân hiên.</p>\r\n<p>Hawaii Luxury Suites cách Bãi biển Moriah 1,3 km và Bãi biển Dekel 1,5 km. Sân bay gần nhất là sân bay Eilat Ramon, cách chỗ nghỉ 21 km. Chỗ nghỉ cung cấp dịch vụ đưa đón sân bay với một khoản phụ phí.</p>\r\n</div>\r\n</div>\r\n<p class=\"hp-desc-review-highlight hp-desc-traveller-type--ph-v0\">Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm <strong>9,1</strong> cho kỳ nghỉ dành cho 2 người.</p>', 'Nằm tại thành phố Eilat thuộc Vùng phía Nam của Israel, cách Bãi biển Kisuski 1 km, Hawaii Luxury Suites có WiFi miễn phí, sân chơi cho trẻ em, vườn và chỗ đỗ xe riêng miễn phí.', 0, 18, 44, '2020-07-24 01:57:44', '2020-07-24 01:57:44', 0),
(24, 'Club Hotel Eilat - 5 Stars Superior', '<div id=\"summary\" class=\"\" data-et-mouseenter=\"customGoal:BUeeZaTaTaBEKMPXLae:1\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:1\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:1\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:1\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:1\r\ncustomGoal:BUeePHOOSINEGO:1\r\ncustomGoal:BUeeHNSPVadIaCKe:1\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1\" data-et-click=\"customGoal:BUeeZaTaTaBEKMPXLae:2\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:2\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:2\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:2\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:2\r\ncustomGoal:BUeePHOOSINEGO:2\r\ncustomGoal:BUeeHNSPVadIaCKe:2\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2\">\r\n<div id=\"property_description_content\">\r\n<p>Nằm trong bán kính chỉ 5 phút đi bộ từ biển tại thành phố Eilat, Club Hotel Eilat có khuôn viên rộng trên 4 ha bao gồm công viên nước và các khu vườn với thác nước. Nơi nghỉ còn có spa và nhà hàng.</p>\r\n<p>Các suite và studio máy lạnh tại Club Hotel có bếp nhỏ đầy đủ vật dụng và khu vực tiếp khách. Hầu hết chỗ nghỉ đều cung cấp tầm nhìn toàn cảnh ra biển, hồ bơi và khu vườn.</p>\r\n<p>Quý khách có thể thư giãn tại spa với phòng xông hơi khô, bể sục và phòng tập thể dục. Quý khách còn có thể đặt dịch vụ mát-xa tại đây. Phòng trò chơi và bóng bàn cũng được cung cấp.</p>\r\n<p>Bãi biển của thành phố Eilat cách khách sạn chỉ 70 m trong khi đầm phá và cảng đều cách đó 15 phút đi bộ.</p>\r\n</div>\r\n</div>\r\n<p class=\"geo_information\">Đây là khu vực ở Eilat mà khách yêu thích, theo các đánh giá độc lập.</p>\r\n<p class=\"hp-desc-review-highlight hp-desc-traveller-type--ph-v0\">Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm <strong>9,1</strong> cho kỳ nghỉ dành cho 2 người.</p>', '<h3 class=\"top_pick_heading\"><em>Tận hưởng dịch vụ đỉnh cao, đẳng cấp thế giới tại Club Hotel Eilat - 5 Stars Superior</em></h3>', 0, 18, 44, '2020-07-24 02:20:32', '2020-07-24 02:22:11', 0),
(25, 'Set near the marina at the northern coast of Eilat', '<p>Set near the marina at the northern coast of Eilat, the hotel Pegasus offers 2 outdoor pools, a restaurant and free parking. It is a 10-minute walk from the beach on the Red Sea, and Eilat\'s city centre.</p>\r\n<p>Pegasus hotel is designed in an elegant oriental style, each room is air conditioned and includes an LCD cable TV, fridge and tea-and-coffee maker. All rooms have a private bathroom with a shower. Some rooms overlook the pool area, and some even have a private terrace.</p>\r\n<p>The restaurant serves healthy and nutritious meals and a buffet breakfast including breads, cheese and hummus. For dinner guests can choose from the extensive menu featuring local and international cuisine and a children\'s menu.</p>\r\n<p>Adult and children\'s pools are located in the hotel’s inner courtyard and are surrounded by palm trees and sun beds.</p>', 'Set near the marina at the northern coast of Eilat, the hotel Pegasus offers 2 outdoor pools, a restaurant and free parking. It is a 10-minute walk from the beach on the Red Sea, and Eilat\'s city centre.', 0, 16, 44, '2020-07-24 02:48:25', '2020-07-24 02:48:25', 0),
(26, 'Restart Accommodations Rome', '<div id=\"summary\" class=\"\" data-et-mouseenter=\"customGoal:BUeeZaTaTaBEKMPXLae:1\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:1\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:1\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:1\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:1\r\ncustomGoal:BUeePHOOSINEGO:1\r\ncustomGoal:BUeeHNSPVadIaCKe:1\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1\" data-et-click=\"customGoal:BUeeZaTaTaBEKMPXLae:2\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:2\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:2\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:2\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:2\r\ncustomGoal:BUeePHOOSINEGO:2\r\ncustomGoal:BUeeHNSPVadIaCKe:2\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2\">\r\n<div id=\"property_description_content\">\r\n<p>Restart Accomodations Rome cung cấp các căn hộ tự phục vụ với sân hiên/ban công rộng rãi ở trung tâm thành phố Rome. Mỗi chỗ ở đều nằm ở vị trí lý tưởng, trong khoảng cách đi bộ từ Đấu trường La Mã hoặc Bậc thang Tây Ban Nha.</p>\r\n<p>Với phong cách trang trí hiện đại hoặc nội thất phong cách cổ điển, các căn hộ tại Restart đều rộng rãi và được trang trí đầy đủ tiện nghi. Tất cả các căn hộ đều có nhà bếp/bếp nhỏ, khu vực tiếp khách và 1 phòng ngủ trở lên.</p>\r\n<p>Những căn hộ ở trung tâm này hưởng kết nối giao thông tuyệt vời, vì ga tàu điện ngầm cách đó chưa đến 10 phút đi bộ. Khu vực sinh động xung quanh chật kín các nhà hàng, cửa hiệu và quán cà phê.</p>\r\n</div>\r\n</div>\r\n<p class=\"geo_information\">Đây là khu vực ở Roma mà khách yêu thích, theo các đánh giá độc lập.</p>\r\n<p class=\"hp-desc-review-highlight hp-desc-traveller-type--ph-v0\">Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm <strong>9,5</strong> cho kỳ nghỉ dành cho 2 người.</p>', 'Restart Accomodations Rome cung cấp các căn hộ tự phục vụ với sân hiên/ban công rộng rãi ở trung tâm thành phố Rome.', 0, 16, 44, '2020-07-24 03:02:04', '2020-07-24 03:02:04', 0);

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
(31, 'Blog1.jpg', 23, '2020-07-24 01:57:44', '2020-07-24 01:57:44'),
(32, 'Blog2.jpg', 23, '2020-07-24 01:57:44', '2020-07-24 01:57:44'),
(33, 'Blog3.jpg', 23, '2020-07-24 01:57:44', '2020-07-24 01:57:44'),
(34, 'Blog4.jpg', 23, '2020-07-24 01:57:44', '2020-07-24 01:57:44'),
(35, 'Blog5.jpg', 23, '2020-07-24 01:57:44', '2020-07-24 01:57:44'),
(36, 'Blog1.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(37, 'Blog2.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(38, 'Blog3.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(39, 'Blog4.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(40, 'Blog5.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(41, 'Blogthu2.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(42, 'Blogthu3.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(43, 'Blogthu4.jpg', 24, '2020-07-24 02:20:32', '2020-07-24 02:20:32'),
(44, 'Blogthu3_1.jpg', 25, '2020-07-24 02:48:25', '2020-07-24 02:48:25'),
(45, 'Blogthu3_2.jpg', 25, '2020-07-24 02:48:25', '2020-07-24 02:48:25'),
(46, 'Blogthu3_3.jpg', 25, '2020-07-24 02:48:25', '2020-07-24 02:48:25'),
(47, 'Blogthu4.jpg', 25, '2020-07-24 02:48:25', '2020-07-24 02:48:25'),
(48, 'Blogthu4_1.jpg', 26, '2020-07-24 03:02:04', '2020-07-24 03:02:04'),
(49, 'Blogthu4_2.jpg', 26, '2020-07-24 03:02:04', '2020-07-24 03:02:04'),
(50, 'Blogthu4_3.jpg', 26, '2020-07-24 03:02:04', '2020-07-24 03:02:04'),
(51, 'Blogthu4_4.jpg', 26, '2020-07-24 03:02:04', '2020-07-24 03:02:04'),
(52, 'Blogthu4_5.jpg', 26, '2020-07-24 03:02:04', '2020-07-24 03:02:04');

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
(2, 'Nhà nghỉ 1', '02.png', '2020-06-30 04:54:44', '2020-06-30 04:54:44'),
(4, 'Nhà nghỉ Sóng gió', '03.png', '2020-06-30 07:18:14', '2020-06-30 07:18:14'),
(5, 'nhà nghỉ bão bùng', '04.png', '2020-06-30 07:19:27', '2020-06-30 07:19:27');

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
(16, 'Luxury Hotel', 'luxury-hotel', 'gird-05.jpg', 'Đây là danh mục blog', 0, 1, '2020-07-24 01:42:59', '2020-07-24 01:42:59'),
(17, 'Couple Room', 'couple-room', 'gird-06.jpg', 'Đây là danh mục Couple Room', 0, 1, '2020-07-24 01:43:42', '2020-07-24 01:43:42'),
(18, 'Hotel View', 'hotel-view', 'gird-03.jpg', 'Đây là hotel view', 0, 1, '2020-07-24 01:53:24', '2020-07-24 01:53:24');

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
(6, 'Rooms & Appartment', 'rooms-appartment', '01.png', '01-hover.png', '<p>Đây là damh mục Rooms &amp; Appartment</p>', 0, 1, '2020-06-22 07:00:20', '2020-07-24 15:00:49', 'Three-Bedroom-Balcony-Apartment-resize~three-bedroom-balcony-apartment.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0y4rXoWrJlw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'Food & Restaurant', 'food-restaurant', '02.png', '02-hover.png', '<p>Đây là  danh mục Food &amp; Restaurant</p>', 0, 1, '2020-06-22 07:02:17', '2020-07-24 14:57:47', 'food-cta.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/767xPIjTm2A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Spa & Fitness', 'spa-fitness', '03.png', '03-hover.png', '<p>Đây là danh mục Spa &amp; Fitness</p>', 0, 1, '2020-06-22 07:02:51', '2020-07-24 14:36:57', 'Spa_fitnes_1.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N3e8UXMdqOM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Sports & Gaming', 'sports-gaming', '04.png', '04-hover.png', '<p>Đây là danh mục Sports &amp; Gaming</p>', 0, 1, '2020-06-22 07:03:20', '2020-07-24 14:55:02', 'gaming_1.jpeg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LkhzjNEMRzE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'Event & Party', 'event-party', '05.png', '05-hover.png', '<p>Đây là danh mục Event &amp; Party</p>', 0, 1, '2020-06-22 07:03:42', '2020-07-24 14:52:19', 'party_event.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uFAWIKVThjA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

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
(12, 44, 26, 'đwdw', 0, '2020-07-24 03:02:32', '2020-07-24 03:02:32'),
(13, 44, 26, 'grgrgrg', 12, '2020-07-24 03:02:41', '2020-07-24 03:02:41'),
(14, 39, 23, 'cscs', 0, '2020-07-26 09:19:01', '2020-07-26 09:19:01'),
(15, 39, 23, 'dwd', 14, '2020-07-26 09:20:29', '2020-07-26 09:20:29');

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
(149, 'hung pro 01', '0', 'nthung2896@gmail.com', 'đe', '0912121222', 'đê', '2020-07-21 14:36:55', '2020-07-21 14:36:55'),
(150, 'hung pro 01', '0', 'nthung2896@gmail.com', 'hh', '0912121222', 'hthth', '2020-07-23 04:11:55', '2020-07-23 04:11:55'),
(151, 'hung pro 01', '0', 'nthung2896@gmail.com', 'hh', '0912121222', 'hththgggrg', '2020-07-23 04:12:19', '2020-07-23 04:12:19'),
(152, 'hung pro 01', '0', 'nthung2896@gmail.com', 'hthth', '0912121222', 'hthththt', '2020-07-23 04:22:46', '2020-07-23 04:22:46'),
(153, 'hùheufheuf', '0', 'Hoangminh1894@gmail.com', 'hthththt', '686868656', 'hthththth', '2020-07-23 15:37:46', '2020-07-23 15:37:46'),
(154, 'hùheufheuf', '0', 'Hoangminh1894@gmail.com', '454545', '45354345', '5454545', '2020-07-23 15:41:50', '2020-07-23 15:41:50'),
(155, 'hùheufheuf', '0', 'Hoangminh1894@gmail.com', '234234', '2342342', '2342424242', '2020-07-23 15:48:35', '2020-07-23 15:48:35'),
(156, 'hung pro 01', '0', 'nthung2896@gmail.com', 'hthth', '0912121222', 'hthththt', '2020-07-24 16:32:35', '2020-07-24 16:32:35'),
(157, 'hung pro 01', '0', 'nthung2896@gmail.com', 'Thanh xuân , Hà nội', '0912121222', 'wfwf', '2020-07-25 09:34:25', '2020-07-25 09:34:25'),
(158, 'pro 02', '0', 'kaka123@gmail.com', 'sqsqsqs', '012345123', 'sqsqsqs', '2020-07-26 09:32:53', '2020-07-26 09:32:53'),
(159, 'hung pro 01', '0', 'nthung2896@gmail.com', 'grgrgrg', '0912121222', 'grgrgrg', '2020-07-29 15:44:25', '2020-07-29 15:44:25'),
(160, 'hung pro 01', '0', 'nthung2896@gmail.com', 'dưd', '0912121222', 'đwdwdw', '2020-07-29 15:51:50', '2020-07-29 15:51:50'),
(161, 'hung pro 01', '0', 'nthung2896@gmail.com', 'dưd', '0912121222', 'đwdwdw', '2020-07-29 15:52:47', '2020-07-29 15:52:47'),
(162, 'hung pro 01', '0', 'nthung2896@gmail.com', 'dưd', '0912121222', 'đwdwdw', '2020-07-29 15:54:57', '2020-07-29 15:54:57'),
(163, 'hung pro 01', '0', 'nthung2896@gmail.com', 'dưd', '0912121222', 'đwdwdw', '2020-07-29 15:55:42', '2020-07-29 15:55:42'),
(164, 'hung pro 01', '0', 'nthung2896@gmail.com', 'jijij', '0912121222', 'iijiji', '2020-07-31 01:35:47', '2020-07-31 01:35:47');

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
(55, '2020_07_21_203737_create_reset_passwords_table', 24),
(56, '2020_07_24_105301_add_attribute_content_into_rooms_table', 25),
(57, '2020_07_24_143745_add_attribute_content_into_rooms_table', 26),
(58, '2020_07_24_152208_add_attribute_status_into_rooms_table', 27),
(62, '2020_07_26_224753_create_systems_table', 28),
(64, '2020_07_27_111040_create_systems_table', 29),
(65, '2020_07_28_105521_add_attribute_brand_id_into_rooms_table', 30);

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
(74, 1641, '0', 'wfwf', 44, 157, '2020-07-25 09:34:25', '2020-07-25 09:34:25'),
(75, 825, '1', 'sqsqsqs', 50, 158, '2020-07-26 09:32:53', '2020-07-26 09:32:53'),
(76, 1068, '0', 'grgrgrg', 44, 159, '2020-07-29 15:44:25', '2020-07-29 15:44:25'),
(77, 456, '0', 'đwdwdw', 44, 160, '2020-07-29 15:51:50', '2020-07-29 15:51:50'),
(78, 456, '0', 'đwdwdw', 44, 161, '2020-07-29 15:52:47', '2020-07-29 15:52:47'),
(79, 456, '0', 'đwdwdw', 44, 162, '2020-07-29 15:54:57', '2020-07-29 15:54:57'),
(80, 456, '0', 'đwdwdw', 44, 163, '2020-07-29 15:55:42', '2020-07-29 15:55:42'),
(81, 123, '0', 'iijiji', 44, 164, '2020-07-31 01:35:47', '2020-07-31 01:35:47');

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
(103, 76, 51, '2020-07-30', '2020-08-06', '2020-07-29 15:44:25', '2020-07-29 15:44:25'),
(104, 77, 52, '2020-07-30', '2020-07-31', '2020-07-29 15:51:50', '2020-07-29 15:51:50'),
(105, 78, 52, '2020-07-30', '2020-07-31', '2020-07-29 15:52:47', '2020-07-29 15:52:47'),
(106, 79, 52, '2020-07-30', '2020-07-31', '2020-07-29 15:54:57', '2020-07-29 15:54:57'),
(107, 80, 52, '2020-07-30', '2020-07-31', '2020-07-29 15:55:42', '2020-07-29 15:55:42'),
(108, 81, 51, '2020-08-07', '2020-08-08', '2020-07-31 01:35:47', '2020-07-31 01:35:47');

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
(67, 103, 5, 3, '2020-07-29 15:44:25', '2020-07-29 15:44:25'),
(68, 104, 14, 1, '2020-07-29 15:51:50', '2020-07-29 15:51:50'),
(69, 105, 14, 1, '2020-07-29 15:52:47', '2020-07-29 15:52:47'),
(70, 106, 14, 1, '2020-07-29 15:54:57', '2020-07-29 15:54:57'),
(71, 107, 14, 1, '2020-07-29 15:55:42', '2020-07-29 15:55:42');

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
(433, 44, 51, 0, 'nhnh', '2020-07-30 01:57:23', '2020-07-30 01:57:23', 0);

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
(11, 'Quyền Tối Cao', '[\"admin.index\",\"admin.file\",\"admin.user.index\",\"admin.user.create\",\"admin.user.store\",\"admin.user.show\",\"admin.user.edit\",\"admin.user.update\",\"admin.user.destroy\",\"admin.categoryRoom.index\",\"admin.categoryRoom.create\",\"admin.categoryRoom.store\",\"admin.categoryRoom.show\",\"admin.categoryRoom.edit\",\"admin.categoryRoom.update\",\"admin.categoryRoom.destroy\",\"admin.categoryService.index\",\"admin.categoryService.create\",\"admin.categoryService.store\",\"admin.categoryService.show\",\"admin.categoryService.edit\",\"admin.categoryService.update\",\"admin.categoryService.destroy\",\"admin.categoryBlog.index\",\"admin.categoryBlog.create\",\"admin.categoryBlog.store\",\"admin.categoryBlog.show\",\"admin.categoryBlog.edit\",\"admin.categoryBlog.update\",\"admin.categoryBlog.destroy\",\"admin.room.index\",\"admin.room.create\",\"admin.room.store\",\"admin.room.show\",\"admin.room.edit\",\"admin.room.update\",\"admin.room.destroy\",\"admin.service.index\",\"admin.service.create\",\"admin.service.store\",\"admin.service.show\",\"admin.service.edit\",\"admin.service.update\",\"admin.service.destroy\",\"admin.blog.index\",\"admin.blog.create\",\"admin.blog.store\",\"admin.blog.show\",\"admin.blog.edit\",\"admin.blog.update\",\"admin.blog.destroy\",\"admin.brand.index\",\"admin.brand.create\",\"admin.brand.store\",\"admin.brand.show\",\"admin.brand.edit\",\"admin.brand.update\",\"admin.brand.destroy\",\"admin.banner.index\",\"admin.banner.create\",\"admin.banner.store\",\"admin.banner.show\",\"admin.banner.edit\",\"admin.banner.update\",\"admin.banner.destroy\",\"admin.role.index\",\"admin.role.create\",\"admin.role.store\",\"admin.role.show\",\"admin.role.edit\",\"admin.role.update\",\"admin.role.destroy\",\"admin.order.index\",\"admin.order.create\",\"admin.order.store\",\"admin.order.show\",\"admin.order.edit\",\"admin.order.update\",\"admin.order.destroy\",\"admin.reviewRoom.index\",\"admin.reviewRoom.create\",\"admin.reviewRoom.store\",\"admin.reviewRoom.show\",\"admin.reviewRoom.edit\",\"admin.reviewRoom.update\",\"admin.reviewRoom.destroy\",\"admin.system.index\",\"admin.system.create\",\"admin.system.store\",\"admin.system.show\",\"admin.system.edit\",\"admin.system.update\",\"admin.system.destroy\",\"admin.system.store3\",\"admin.system.store2\",\"admin.system.update2\",\"admin.system.update3\",\"admin.room.updateStatusRoom\",\"admin.reviewRoom2.update\",\"admin.searchBlog\",\"admin.searchCateBlog\",\"admin.searchRoom\",\"admin.searchCateRoom\",\"admin.searchUser\",\"admin.searchCateService\",\"admin.searchService\",\"admin.searchBrand\",\"admin.searchBanner\"]', NULL, NULL),
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
  `guest` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_map` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `location`, `bed`, `bath`, `area`, `priceNight`, `priceWeekends`, `priceWeekly`, `priceClearFee`, `status`, `description`, `gym`, `Laundry`, `tvCable`, `wifi`, `FreeParking`, `Security`, `category_room_id`, `user_room_id`, `created_at`, `updated_at`, `guest`, `adult`, `content`, `link_map`, `brand_id`) VALUES
(51, 'T homestay nha trang', 'Nha trang', 2, 2, 139, 123.00, 123.00, 24.00, 12.00, 0, 'Tọa lạc tại thành phố Nha Trang, cách Bãi biển Nha Trang 1 km,', 1, 1, 1, 1, 1, 1, 18, 44, '2020-07-28 04:09:43', '2020-07-28 04:09:43', 1, 3, '<div id=\"summary\" class=\"\" data-et-mouseenter=\"customGoal:BUeeZaTaTaBEKMPXLae:1\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:1\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:1\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:1\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:1\r\ncustomGoal:BUeePHOOSINEGO:1\r\ncustomGoal:BUeeHNSPVadIaCKe:1\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1\" data-et-click=\"customGoal:BUeeZaTaTaBEKMPXLae:2\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:2\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:2\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:2\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:2\r\ncustomGoal:BUeePHOOSINEGO:2\r\ncustomGoal:BUeeHNSPVadIaCKe:2\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2\">\r\n<div id=\"property_description_content\">\r\n<p><span class=\"hp-description--property-name-best-seller yellowfy_bestseller dtri\"><i class=\"bicon-acstar\" aria-hidden=\"true\"></i> Một trong những chỗ nghỉ bán chạy nhất ở Nha Trang của chúng tôi! </span>Tọa lạc tại thành phố Nha Trang, cách Bãi biển Nha Trang 1 km, T homestay nha trang cung cấp chỗ nghỉ gắn máy điều hòa với WiFi miễn phí cũng như sân hiên.</p>\r\n<p>Các điểm tham quan nổi tiếng gần homestay này gồm có Viện Hải dương học, Dinh Bảo Đại và công viên giải trí Vinpearl Land Nha Trang. Sân bay gần nhất là sân bay quốc tế Cam Ranh, nằm trong bán kính 34 km từ T homestay nha trang.</p>\r\n</div>\r\n</div>\r\n<p class=\"hp-desc-we-speak\">Chúng tôi sử dụng ngôn ngữ của bạn!</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60603.73659420441!2d109.1765962105172!3d12.267054743127789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677811cc886f%3A0x5c4bbc0aa81edcb9!2zVHAuIE5oYSBUcmFuZywgS2jDoW5oIEjDsmEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1595909316834!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2),
(52, 'Vinpearl Resort & Spa Nha Trang Bay', 'Nha trang', 2, 3, 134, 234.00, 232.00, 12.00, 523.00, 0, 'Vinpearl Nha Trang Bay Resort là resort 5 sao cung cấp các phòng máy lạnh rộng rãi với Wi-Fi miễn phí.', 1, 1, 1, 1, 1, 1, 11, 44, '2020-07-28 04:11:48', '2020-07-28 04:11:48', 2, 1, '<div id=\"summary\" class=\"\" data-et-mouseenter=\"customGoal:BUeeZaTaTaBEKMPXLae:1\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:1\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:1\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:1\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:1\r\ncustomGoal:BUeePHOOSINEGO:1\r\ncustomGoal:BUeeHNSPVadIaCKe:1\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1\" data-et-click=\"customGoal:BUeeZaTaTaBEKMPXLae:2\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:2\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:2\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:2\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:2\r\ncustomGoal:BUeePHOOSINEGO:2\r\ncustomGoal:BUeeHNSPVadIaCKe:2\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2\">\r\n<div id=\"property_description_content\">\r\n<p>Vinpearl Nha Trang Bay Resort là resort 5 sao cung cấp các phòng máy lạnh rộng rãi với Wi-Fi miễn phí. Resort tọa lạc trong khu vườn riêng tươi tốt và có hồ bơi vô cực nhìn ra bãi biển, 5 nhà hàng để khách lựa chọn ăn uống cũng như spa.</p>\r\n<p>Vinpearl Nha Trang Bay Resort nằm trong bán kính 3 km từ Dinh Bảo Đại và 3,2 km từ Viện Hải dương học. CLB chơi gôn Vinpearl Nha Trang cách đó 3 km. Cách resort 24 km là sân bay gần nhất, sân bay Nha Trang.</p>\r\n<p>Mỗi phòng nghỉ tại đây đều có TV truyền hình cáp màn hình phẳng, két an toàn, minibar, khu vực tiếp khách và phòng tắm riêng đi kèm bồn tắm, vòi sen, máy sấy tóc cùng đồ vệ sinh cá nhân miễn phí. Các biệt thự có khu vực ăn uống và tiếp khách riêng biệt, nhà bếp cũng như hồ bơi riêng.</p>\r\n<p>Du khách có thể đến quầy lễ tân 24 giờ để được cung cấp dịch vụ thu đổi ngoại tệ, đặt vé và thu xếp tour du lịch cũng như trợ giúp đặc biệt. Phòng trò chơi cũng nằm trong số các tiện nghi tại đây và du khách có thể sắp xếp các liệu pháp spa thư giãn tại Vincham Spa.</p>\r\n<p>Câu lạc bộ của resort phục vụ bữa sáng tự chọn hàng ngày và ăn uống cả ngày cũng như món canapé cùng đồ uống trước bữa tối.</p>\r\n</div>\r\n</div>\r\n<p class=\"hp-desc-review-highlight hp-desc-traveller-type--ph-v0\">Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm <strong>8,3</strong> cho kỳ nghỉ dành cho 2 người.</p>\r\n<p class=\"hp-desc-we-speak\">Chúng tôi sử dụng ngôn ngữ của bạn!</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60603.73659420441!2d109.1765962105172!3d12.267054743127789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677811cc886f%3A0x5c4bbc0aa81edcb9!2zVHAuIE5oYSBUcmFuZywgS2jDoW5oIEjDsmEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1595909316834!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4),
(53, 'Chalet Rosalie', 'Pháp', 3, 3, 145, 463.00, 456.00, 343.00, 221.00, 0, 'Featuring mountain views, Chalet Rosalie offers accommodation with a bar and a balcony,', 1, 1, 1, 1, 1, 1, 12, 44, '2020-07-28 04:14:33', '2020-07-28 04:14:33', 3, 3, '<div id=\"property_description_content\">\r\n<p>Featuring mountain views, Chalet Rosalie offers accommodation with a bar and a balcony, around 2.3 km from Morzine Ski School. This chalet provides free private parking, a shared kitchen and free WiFi.</p>\r\n<p>The chalet with a patio and garden views features 4 bedrooms, a living room, a flat-screen TV, an equipped kitchen with a dishwasher and a microwave, and 2 bathrooms with a shower.</p>\r\n<p>The chalet offers a barbecue. After a day of hiking, skiing or fishing, guests can relax in the garden or in the shared lounge area.</p>\r\n<p>The nearest airport is Meythet, 83 km from Chalet Rosalie, and the property offers a paid airport shuttle service.</p>\r\n</div>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992720.3820286526!2d2.565112062842469!3d46.58667369336759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2zUGjDoXA!5e0!3m2!1svi!2s!4v1595909603699!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 5),
(54, 'Restart Accommodations Rome', 'Roma', 2, 2, 140, 456.00, 234.00, 121.00, 32.00, 0, 'Restart Accomodations Rome cung cấp các căn hộ tự phục vụ với sân hiên/ban công rộng rãi ở trung tâm thành phố Rome.', 1, 1, 1, 1, 1, 1, 18, 44, '2020-07-28 04:18:16', '2020-07-28 04:18:16', 1, 1, '<div id=\"summary\" class=\"\" data-et-mouseenter=\"customGoal:BUeeZaTaTaBEKMPXLae:1\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:1\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:1\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:1\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:1\r\ncustomGoal:BUeePHOOSINEGO:1\r\ncustomGoal:BUeeHNSPVadIaCKe:1\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1\" data-et-click=\"customGoal:BUeeZaTaTaBEKMPXLae:2\r\ncustomGoal:BUeeHNSPMWdMOdUBMHT:2\r\ncustomGoal:BUeeHNSPdQEeWFWZTDWFC:2\r\ncustomGoal:BUeeHNSPMWdMOdUEXXO:2\r\ncustomGoal:BUeeHNSPdQEeXXaNSPRXXe:2\r\ncustomGoal:BUeePHOOSINEGO:2\r\ncustomGoal:BUeeHNSPVadIaCKe:2\r\ncustomGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2\">\r\n<div id=\"property_description_content\">\r\n<p>Restart Accomodations Rome cung cấp các căn hộ tự phục vụ với sân hiên/ban công rộng rãi ở trung tâm thành phố Rome. Mỗi chỗ ở đều nằm ở vị trí lý tưởng, trong khoảng cách đi bộ từ Đấu trường La Mã hoặc Bậc thang Tây Ban Nha.</p>\r\n<p>Với phong cách trang trí hiện đại hoặc nội thất phong cách cổ điển, các căn hộ tại Restart đều rộng rãi và được trang trí đầy đủ tiện nghi. Tất cả các căn hộ đều có nhà bếp/bếp nhỏ, khu vực tiếp khách và 1 phòng ngủ trở lên.</p>\r\n<p>Những căn hộ ở trung tâm này hưởng kết nối giao thông tuyệt vời, vì ga tàu điện ngầm cách đó chưa đến 10 phút đi bộ. Khu vực sinh động xung quanh chật kín các nhà hàng, cửa hiệu và quán cà phê.</p>\r\n</div>\r\n</div>\r\n<p class=\"geo_information\">Đây là khu vực ở Roma mà khách yêu thích, theo các đánh giá độc lập.</p>\r\n<p class=\"hp-desc-review-highlight hp-desc-traveller-type--ph-v0\">Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm <strong>9,5</strong> cho kỳ nghỉ dành cho 2 người.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7483.247212398516!2d12.491261827239573!3d41.898694758117436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6196f9928ebb%3A0xb90f770693656e38!2zUm9tYSwgw50!5e0!3m2!1svi!2s!4v1595909836156!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2),
(55, 'phòng test', '31231rgrg', 3, 2, 67, 123.00, 432.00, 123.00, 212.00, 1, 'feffe', 1, 0, 1, 1, 1, 1, 11, 44, '2020-07-30 07:38:02', '2020-07-30 07:39:04', 1, 2, 'fefefe', 'ffrf', 2);

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
(213, 'Room6_1.jpg', 51, '2020-07-28 04:09:43', '2020-07-28 04:09:43'),
(214, 'Room6_2.jpg', 51, '2020-07-28 04:09:43', '2020-07-28 04:09:43'),
(215, 'Room6_3.jpg', 51, '2020-07-28 04:09:43', '2020-07-28 04:09:43'),
(216, 'Room6_4.jpg', 51, '2020-07-28 04:09:43', '2020-07-28 04:09:43'),
(217, 'Room6_5.jpg', 51, '2020-07-28 04:09:43', '2020-07-28 04:09:43'),
(218, 'Room5_1.jpg', 52, '2020-07-28 04:11:48', '2020-07-28 04:11:48'),
(219, 'Room5_2.jpg', 52, '2020-07-28 04:11:48', '2020-07-28 04:11:48'),
(220, 'Room5_3.jpg', 52, '2020-07-28 04:11:48', '2020-07-28 04:11:48'),
(221, 'Room5_4.jpg', 52, '2020-07-28 04:11:48', '2020-07-28 04:11:48'),
(222, 'Room5_5.jpg', 52, '2020-07-28 04:11:48', '2020-07-28 04:11:48'),
(223, 'Room5_6.jpg', 52, '2020-07-28 04:11:48', '2020-07-28 04:11:48'),
(224, 'Room3_1.jpg', 53, '2020-07-28 04:14:33', '2020-07-28 04:14:33'),
(225, 'Room3_2.jpg', 53, '2020-07-28 04:14:33', '2020-07-28 04:14:33'),
(226, 'Room3_3.jpg', 53, '2020-07-28 04:14:33', '2020-07-28 04:14:33'),
(227, 'Room3_4.jpg', 53, '2020-07-28 04:14:33', '2020-07-28 04:14:33'),
(228, 'Room3_5.jpg', 53, '2020-07-28 04:14:33', '2020-07-28 04:14:33'),
(229, 'Blogthu4_1.jpg', 54, '2020-07-28 04:18:16', '2020-07-28 04:18:16'),
(230, 'Blogthu4_2.jpg', 54, '2020-07-28 04:18:16', '2020-07-28 04:18:16'),
(231, 'Blogthu4_3.jpg', 54, '2020-07-28 04:18:16', '2020-07-28 04:18:16'),
(232, 'Blogthu4_4.jpg', 54, '2020-07-28 04:18:16', '2020-07-28 04:18:16'),
(233, 'Blogthu4_5.jpg', 54, '2020-07-28 04:18:16', '2020-07-28 04:18:16'),
(234, 'Blog1.jpg', 55, '2020-07-30 07:38:02', '2020-07-30 07:38:02'),
(235, 'Blog2.jpg', 55, '2020-07-30 07:38:02', '2020-07-30 07:38:02'),
(236, 'Blog3.jpg', 55, '2020-07-30 07:38:02', '2020-07-30 07:38:02'),
(237, 'Blog4.jpg', 55, '2020-07-30 07:38:02', '2020-07-30 07:38:02'),
(238, 'Blog5.jpg', 55, '2020-07-30 07:38:02', '2020-07-30 07:38:02'),
(239, 'Blogthu2.jpg', 55, '2020-07-30 07:38:02', '2020-07-30 07:38:02');

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
(331, 44, 55, 5, NULL, NULL, NULL, '2020-07-30 07:38:35', '2020-07-30 07:38:35'),
(332, 44, 55, NULL, NULL, 1, NULL, '2020-07-30 07:38:40', '2020-07-30 07:38:40'),
(333, 44, 55, NULL, NULL, NULL, 3, '2020-07-30 07:38:50', '2020-07-30 07:38:50');

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
-- Cấu trúc bảng cho bảng `systems`
--

CREATE TABLE `systems` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `systems`
--

INSERT INTO `systems` (`id`, `key`, `data`, `label`, `created_at`, `updated_at`) VALUES
(1, 'hostline', '0931695258', 'đây là hostline', '2020-07-27 04:50:41', '2020-07-27 04:50:41'),
(3, 'iconSocial', '[\"iconsocial_03.png\",\"iconsocial_05.png\",\"iconsocial_07.png\",\"iconsocial_09.png\"]', 'iconSocial', '2020-07-27 07:24:43', '2020-07-28 01:34:51'),
(4, 'email', 'nthung2896@gmail.com', 'email', '2020-07-27 07:25:51', '2020-07-27 07:25:51'),
(5, 'address', '238 Hoàng Quốc Việt,Hà Nội', 'wd', '2020-07-27 07:26:44', '2020-07-27 17:05:16'),
(10, 'logo', '02_Home_02_03.png', 'Asvon', '2020-07-27 16:29:36', '2020-07-28 02:12:45');

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
(7, 'hung123123', 'kaka@gmail.com', '12341321312', NULL, '$2y$10$ZWD.TxYNo7.db0C2WzLtaOW/1WoU9Yrr/zoVdsD5AFEdfeiWirGju', 1, '12.jpg', NULL, '2020-06-26 13:29:39', '2020-07-14 14:44:30'),
(39, 'hùheufheuf', 'Hoangminh1894@gmail.com', NULL, NULL, '$2y$10$kDU45aFTW/wT0UdJzBtfjOH.Btd2tuSI0Gh/HNk7slMyE0oyIgX1m', 2, 'WIN_20191209_23_51_43_Pro.jpg', NULL, '2020-07-11 15:15:09', '2020-07-26 02:12:08'),
(44, 'hung pro 01', 'nthung2896@gmail.com', '0912121222', NULL, '$2y$10$.cWHvmdroPcJjEnI7FiRS.wJKCdWTnjMM03nabaHIRqrWBjwvmBq6', 0, 'WIN_20191212_16_39_15_Pro.jpg', NULL, '2020-07-12 02:09:46', '2020-07-21 15:54:55'),
(45, 'hung12312323', 'zzz@gmail.com', '74845673354', NULL, '$2y$10$aBJTaibNqtVUzWV0sCx7Xefq5UdT4HNU3UGr8vPuyWSl8zLxR4j4C', 1, '12.jpg', NULL, '2020-07-13 15:00:49', '2020-07-14 07:39:31'),
(50, 'pro 02', 'kaka123@gmail.com', '012345123', NULL, '$2y$10$7hREaidsUuLfqq5l14YoHOK3jpP73BL10rO6NoZCeFg/Q09EdByva', 0, '12.jpg', NULL, '2020-07-14 07:05:59', '2020-07-14 07:05:59'),
(51, '123123', '123123231@gmail.com', '1231231312', NULL, '$2y$10$BxASj.33u5Dv17bCeYVkbOXrLIKLFj4WJ6r9CKulzVY6y0JGclhlS', 0, '11.jpg', NULL, '2020-07-14 07:15:26', '2020-07-14 07:39:04'),
(52, 'sqsqsq', 'dd@gmail.com', '3232311', NULL, '$2y$10$aOFcrzjkLJKALo62poK7..maAzKSwkWek9Ug10BoLCZl3ho3DA7ze', 1, '12.jpg', NULL, '2020-07-14 07:21:30', '2020-07-14 07:21:30'),
(53, 'fff', 'ttt@gmail.com', '2312311111', NULL, '$2y$10$JcviSS6J/IKK6A4LdYqMwuSJ3GTP2uwDAX4HgA5MeaZgaF2OPMSUW', 0, '10 - Copy.jpg', NULL, '2020-07-14 07:22:02', '2020-07-14 07:22:02'),
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
(51, 11),
(52, 12),
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
  ADD KEY `rooms_user_room_id_foreign` (`user_room_id`),
  ADD KEY `rooms_brand_id_foreign` (`brand_id`);

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
-- Chỉ mục cho bảng `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `order_detail_services`
--
ALTER TABLE `order_detail_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `review_rooms`
--
ALTER TABLE `review_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT cho bảng `room_stars`
--
ALTER TABLE `room_stars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `systems`
--
ALTER TABLE `systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `rooms_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
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
