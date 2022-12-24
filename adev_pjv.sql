-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2022 at 12:02 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adev_pjv`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Consequuntur omnis e', 'Ad et fugit non eli', 'consequuntur-omnis-e', 'Etiam est felis, dictum at pulvinar id, dignissim in sem. Pellentesque luctus sapien ac euismod facilisis. Donec ac tristique ex. Phasellus tincidunt vehicula commodo. Mauris eget sapien ligula. Donec lectus lacus, malesuada vel auctor vitae, pretium ut arcu. Vivamus non sodales est, vel dapibus tellus. Duis ut faucibus ante.', '<p>Etiam est felis, dictum at pulvinar id, dignissim in sem. Pellentesque luctus sapien ac euismod facilisis. Donec ac tristique ex. Phasellus tincidunt vehicula commodo. Mauris eget sapien ligula. Donec lectus lacus, malesuada vel auctor vitae, pretium ut arcu. Vivamus non sodales est, vel dapibus tellus. Duis ut faucibus ante.</p>\r\n<p>&nbsp;</p>\r\n<p>Donec facilisis pharetra fermentum. Nullam convallis sollicitudin mi eu tincidunt. Mauris ut laoreet neque. Cras tristique neque ut dolor hendrerit, sed aliquet justo volutpat. Maecenas vel leo ligula. Sed sit amet iaculis nisl, pulvinar iaculis mi. Nullam dapibus nisl massa, sit amet iaculis neque sodales non.</p>', 'images/award/list/zkhw4k9ClgAX2KfRzVM1qX2KNMkDLnqXOojsS0xH.png', 1, '2022-11-17 19:05:13', '2022-12-11 21:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `award_settings`
--

CREATE TABLE `award_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_settings`
--

INSERT INTO `award_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nihil dicta quisquam', 'Omnis vitae non pari', 'nihil-dicta-quisquam', '<p>swerwe</p>', '<p>werwe</p>', 'images/award/setting/WPBwgTbr0OufkiIJC9Xo4eeJ03UegB6ID2R1Q2mT.png', 'Nisi dolor tempore', '<p>werwe</p>', NULL, NULL, '2022-11-17 19:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Delectus tenetur cu', 'Laborum enim nostrud', 'delectus-tenetur-cu', 'asd', '<p>asdasd</p>', 'images/blog/list/essvojiZpQj45477yJ9rl7nywrl1UGHS0VEplncB.jpg', 'Est omnis mollit dic', '<p>asdas</p>', 1, '2022-11-17 19:39:28', '2022-12-14 18:35:19'),
(2, 'Autem aspernatur acc', 'Labore est dolores t', 'autem-aspernatur-acc', 'Dolor irure veniam', NULL, 'images/blog/list/cYWixbKjoxp5kbfJt9UlnV7F4XWUC9l4xfuLGqyg.jpg', 'Quasi deserunt assum', NULL, 1, '2022-12-14 18:46:23', '2022-12-14 18:46:23'),
(3, 'Optio voluptatibus', 'Cum aliquid dolore u', 'optio-voluptatibus', 'Qui non do consequun', NULL, 'images/blog/list/Psdd6gdUWlM7e6iFeku3ubQZcmEdFjNWvdYu5EMZ.jpg', 'Cumque ducimus vel', NULL, 1, '2022-12-14 18:46:35', '2022-12-14 18:46:35'),
(4, 'A aut sit dolores e', 'Adipisci laudantium', 'a-aut-sit-dolores-e', 'Incididunt distincti', NULL, 'images/blog/list/noRlzcR7aikL7p0xDuLKYMwzDrD5Vyq1rfLDks4z.jpg', 'Voluptas explicabo', NULL, 1, '2022-12-14 18:46:54', '2022-12-14 18:46:54'),
(5, 'Rerum quia ut aut el', 'Omnis quis Nam ut do', 'rerum-quia-ut-aut-el', 'Dignissimos dolorem', NULL, 'images/blog/list/1CSFgzt4RPh8CNLL0m6RHxCVXnab92l2R309Eykj.jpg', 'Eligendi laboris ear', NULL, 1, '2022-12-14 18:47:08', '2022-12-14 18:47:08'),
(6, 'Occaecat praesentium', 'Laboris quod illo la', 'occaecat-praesentium', 'Voluptates quia qui', NULL, 'images/blog/list/PxSIymNK4wS4zhb00xTr4xO6FHTeVWjq5k2HqLgV.jpg', 'Omnis quibusdam et m', NULL, 1, '2022-12-14 18:47:23', '2022-12-14 18:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_settings`
--

CREATE TABLE `blog_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_settings`
--

INSERT INTO `blog_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Exercitation in sint', 'Iure incididunt adip', 'exercitation-in-sint', 'asd', '<p>asdasd</p>', 'images/blog/setting/e2eyBuWCom9iO4aATaQLKHWVz5YUeje6lPZQep6C.jpg', 'Facilis sit accusam', '<p>asdas</p>', NULL, NULL, '2022-12-14 18:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tenetur veniam repr', 'Omnis tempore offic', 'tenetur-veniam-repr', 'Etiam est felis, dictum at pulvinar id, dignissim in sem. Pellentesque luctus sapien ac euismod facilisis. Donec ac tristique ex. Phasellus tincidunt vehicula commodo. Mauris eget sapien ligula.', '<p>Donec lectus lacus, malesuada vel auctor vitae, pretium ut arcu. Vivamus non sodales est, vel dapibus tellus. Duis ut faucibus ante. Donec facilisis pharetra fermentum. Nullam convallis sollicitudin mi eu tincidunt. Mauris ut laoreet neque. Cras tristique neque ut dolor hendrerit, sed aliquet justo volutpat. Maecenas vel leo ligula. Sed sit amet iaculis nisl, pulvinar iaculis mi. Nullam dapibus nisl massa, sit amet iaculis neque sodales non.</p>', 'images/career/list/LLx0sxkwUWYgUZJIzu8KJuBEnYanYF5QESQu1IzM.png', 1, '2022-11-17 19:06:41', '2022-12-11 23:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `career_settings`
--

CREATE TABLE `career_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_settings`
--

INSERT INTO `career_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Minima in quisquam c', 'Soluta aut qui nemo', 'minima-in-quisquam-c', '<p>asd</p>', '<p>asd</p>', 'images/career/setting/DGDHluZDaMR4u5JuCWAjvb74AWpHoxHqUPTNi6Fd.png', 'Et inventore officii', '<p>asd</p>', NULL, NULL, '2022-11-17 19:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Default', 'default', 1, '2022-12-05 17:55:56', '2022-12-05 17:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_settings`
--

CREATE TABLE `contact_us_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_settings`
--

INSERT INTO `contact_us_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `phone_no`, `phone_icon`, `address_text`, `address_icon`, `email_text`, `email_icon`, `whatsapp_no`, `whatsapp_text`, `whatsapp_icon`, `general_text`, `general_email`, `media_text`, `media_email`, `google_map`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Get In Touch', NULL, 'get-in-touch', NULL, NULL, 'images/contactus/setting/2Qj21wlra0vhpGsspkxEQteYHqEpxF1ba1b6cGHI.jpg', 'Aute nihil voluptate', NULL, '+1 (176) 731-4417', 'images/contactus/setting/aJR2Z5FHSq4POnIvJz1ixPZdQzxOZcJTy4oPM8Tx.png', 'Set in the Pecatu district of Uluwatu, 900 yards from Nyang Nyang Beach, 1.4 miles from Nunggalan Beach and 1.6 miles from Suluban Beach.', 'images/contactus/setting/uMkT5vIgzUgKeIheod3VwZ9Zz3QqS4o3RWUwXA8a.png', 'cyzobohyso@mailinator.com', 'images/contactus/setting/YqCFoXKl6arY4UMv9oWWcTITXygOb8lp0zQ7N90p.png', 'Do velit irure cumq', NULL, 'images/contactus/setting/z5eW2GjpukL4mvVVJLLAaYo68mO8dHJhQtjganfA.png', 'Sapiente quis pariat', 'guryruxaly@mailinator.com', 'Eum eos voluptate ut', 'vijy@mailinator.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19732.80105663574!2d115.093741!3d-8.837301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82cc528e4e7bd43d!2sMandala%20Airlines%20PK-RII!5e1!3m2!1sen!2sus!4v1667971356357!5m2!1sen!2sus\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, '2022-12-06 00:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pax` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `price`, `pax`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Id quisquam sed ut', 'Repudiandae fugiat n', 'id-quisquam-sed-ut', '<p>asdasd</p>', '<p>asdasd</p>', '5', 'Incididunt quod non', 1, '2022-11-17 18:37:57', '2022-11-17 18:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `experience_images`
--

CREATE TABLE `experience_images` (
  `id` bigint UNSIGNED NOT NULL,
  `experience_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_images`
--

INSERT INTO `experience_images` (`id`, `experience_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'asdasd', 'images/experience/image/xidH5tloFgJIMYIPNg24xiM0eEIeUQ3jpMoVJkoD.png', NULL, '2022-11-17 18:38:25', '2022-11-17 18:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `experience_settings`
--

CREATE TABLE `experience_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_settings`
--

INSERT INTO `experience_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Optio quos non aliq', 'Corporis maiores vol', 'optio-quos-non-aliq', '<p>qwqwe</p>', '<p>qweqwe</p>', 'images/experience/setting/0LaibLyeTI9o3MRTWQfR5Rlo7JwbwlbL6PvVY9rz.png', 'Nam aute ex doloribu', '<p>qweqwe</p>', NULL, NULL, '2022-11-17 18:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Coffee Tea Making Facilities', NULL, 1, '2022-11-28 00:33:07', '2022-11-28 00:33:07'),
(3, 'Deluxe hand made-made terazzo bath tub', NULL, 1, '2022-11-28 00:33:14', '2022-11-28 00:33:14'),
(4, 'Minibar', NULL, 1, '2022-11-28 00:33:20', '2022-11-28 00:33:20'),
(5, 'Cotton Bathrobes & Slippers', NULL, 1, '2022-11-28 00:33:25', '2022-11-28 00:33:25'),
(6, 'Luxurious Toiletries', NULL, 1, '2022-11-28 00:33:32', '2022-11-28 00:33:32'),
(7, 'Home Audio & Visual System', NULL, 1, '2022-11-28 00:33:38', '2022-11-28 00:33:38'),
(8, 'King Size', NULL, 1, '2022-11-28 00:33:44', '2022-11-28 00:33:44'),
(9, 'Safety Box', NULL, 1, '2022-11-28 00:33:50', '2022-11-28 00:33:50'),
(10, 'Hair Dryer', NULL, 1, '2022-11-28 00:33:55', '2022-11-28 00:33:55'),
(11, 'Wireless Internet', NULL, 1, '2022-11-28 00:34:01', '2022-11-28 00:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `category_id`, `title`, `thumbnail_image`, `original_image`, `status`, `created_at`, `updated_at`) VALUES
(20, 2, 'Saepe irure voluptat', 'thumbnail_images/gallery/thumbnail_image/wpTB4qkdDDpiv5BjV73rb9OTO9vOirpWtaNZAZ5v.jpg', NULL, 1, '2022-12-05 18:46:20', '2022-12-05 18:46:20'),
(19, 2, 'Veniam anim omnis N', 'thumbnail_images/gallery/thumbnail_image/TWrrYJ3q4MibUNl2wEa0FafkvhPMn5DhZY13PoNM.jpg', NULL, 1, '2022-12-05 18:45:58', '2022-12-05 18:45:58'),
(18, 2, 'Ut ullam atque conse', 'thumbnail_images/gallery/thumbnail_image/6xrQle8mbd2ilAgreQKsKjgM59rrGuKopfB7edQh.jpg', NULL, 1, '2022-12-05 18:45:39', '2022-12-05 18:45:39'),
(17, 2, 'kjhgf', 'thumbnail_images/gallery/thumbnail_image/TL618xvLrszlXrK8mPKaENETZrM7KQfjtsEuiIHZ.jpg', NULL, 1, '2022-12-05 18:45:27', '2022-12-05 18:45:27'),
(16, 2, 'zxcvbn', 'thumbnail_images/gallery/thumbnail_image/CYlSHZiiFnjbpZXhWSOh3ppBmg6GwUqFLIhNcb0D.jpg', NULL, 1, '2022-12-05 18:45:19', '2022-12-05 18:45:19'),
(15, 2, 'vjbn', 'thumbnail_images/gallery/thumbnail_image/E9FCIiQbOYz2Z9hbEHwaXmFvkxFyjZMsrNjB1I7k.jpg', NULL, 1, '2022-12-05 18:45:11', '2022-12-05 18:45:11'),
(14, 2, 'dfghj', 'thumbnail_images/gallery/thumbnail_image/sr0fl8KuTqqOUiLWIlYsaovdtybujKDL7eWOQJ7K.jpg', NULL, 1, '2022-12-05 18:45:00', '2022-12-05 18:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_settings`
--

CREATE TABLE `gallery_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_settings`
--

INSERT INTO `gallery_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gallery', NULL, 'gallery', 'Donec nec finibus libero, quis sagittis ipsum. Etiam at rutrum felis, et ultrices felis. Nunc vitae condimentum nisi. Nulla blandit ultricies lacinia. Aenean facilisis fermentum quam quis congu', '<p>Donec nec finibus libero, quis sagittis ipsum. Etiam at rutrum felis, et ultrices felis. Nunc vitae condimentum nisi. Nulla blandit ultricies lacinia. Aenean facilisis fermentum quam quis congue. Nulla in risus ultricies magna molestie vestibulum. Maecenas non vestibulum ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pharetra dui sit amet orci suscipit molestie vel quis eros. Maecenas at tortor malesuada, ornare elit ac, gravida lectus.</p>', 'images/gallery/setting/rvo0naxhEvK2CVyEqpuY8ZhAiG4yoLtFNrgplV2s.jpg', NULL, NULL, NULL, NULL, '2022-12-06 00:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_settings`
--

INSERT INTO `home_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `image`, `title1`, `excerpt1`, `title2`, `excerpt2`, `image1`, `image2`, `image3`, `title3`, `excerpt3`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Private Jet Villa', 'By Hanging Gardens', 'private-jet-villa', 'The Private Jet Villa by Hanging Gardens Air stands majestically on top of the Nyang Nyang Beach Cliff, Uluwatu, overlooking the majestic view of the Indian Ocean.', '<p>The Private Jet Villa by Hanging Gardens Air stands majestically on top of the Nyang Nyang Beach Cliff, Uluwatu, overlooking the majestic view of the Indian Ocean. This unique luxury Villa offers an exceptionally luxurious accommodation experience... in a plane!</p>', 'images/home/setting/NXo6imfhOGSE9ronK5LzLiHNsNfdVqModJkXrkQh.jpg', 'A Villa Like No Other', 'The unique accommodation experience will surpass all expectation and knows no bounds of excellence.', 'Villa Highlights InPlane and Al Fresco', 'The living and dining areas lead out on to the jet wings and over the cliff with magnificent sea views, fully equipped kitchen and bar and many more.', 'images/home/setting/j0MH7LSY3jPnrf5zLaj3sExLpkZIj3u9QTC4wJkQ.jpg', 'images/home/setting/7NkmWMkcPAVINQyVmmiZMkklUCFTSBxrokaAHu0I.jpg', 'images/home/setting/rGya1XVYPoJXeQAeoT7vxeU4LQKxEDJuXDD8eJt9.jpg', 'Exclusively Yours', 'Nowhere else do the wonders of the planet’s most incredible locations fuse so intimately with the warm feeling of home.', NULL, NULL, '2022-12-06 00:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider2s`
--

CREATE TABLE `home_slider2s` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slider2s`
--

INSERT INTO `home_slider2s` (`id`, `page_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(15, 1, NULL, 'images/home/slider2/chen7ub4MIXLt0X9RMb5chncsEkWsJXLrafLw13f.jpg', NULL, '2022-11-28 00:23:42', '2022-11-28 00:23:42'),
(14, 1, NULL, 'images/home/slider2/Mvs25aZ7pQwrxla3z1c6Px6m8VOKV1sYODpsymRB.jpg', NULL, '2022-11-28 00:20:00', '2022-11-28 00:20:00'),
(13, 1, NULL, 'images/home/slider2/Pb94pOzq41mEWynwI31si0PBmzs9zvzBug3aulsO.jpg', NULL, '2022-11-28 00:19:36', '2022-11-28 00:19:36'),
(12, 1, NULL, 'images/home/slider2/QNvaoYHNTE0ZOj33HPH4DHKIaVWXmDY33OxKLVgd.jpg', NULL, '2022-11-28 00:19:10', '2022-11-28 00:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_18_154001_create_villa_settings_table', 1),
(6, '2022_10_18_154031_create_villas_table', 1),
(7, '2022_10_18_154044_create_villa_features_table', 1),
(8, '2022_10_18_154052_create_villa_images_table', 1),
(9, '2022_10_22_034528_create_features_table', 1),
(10, '2022_10_23_143028_create_experiences_table', 1),
(11, '2022_10_23_143120_create_experience_images_table', 1),
(12, '2022_10_23_143205_create_experience_settings_table', 1),
(13, '2022_10_24_094204_create_spas_table', 1),
(14, '2022_10_24_094339_create_spa_settings_table', 1),
(15, '2022_10_24_094347_create_spa_images_table', 1),
(16, '2022_10_25_160031_create_restaurants_table', 1),
(17, '2022_10_25_160121_create_restaurant_settings_table', 1),
(18, '2022_10_25_160155_create_restaurant_images_table', 1),
(19, '2022_10_26_082907_create_weddings_table', 1),
(20, '2022_10_26_083145_create_wedding_settings_table', 1),
(21, '2022_10_26_131214_create_galleries_table', 1),
(22, '2022_10_26_131514_create_categories_table', 1),
(23, '2022_10_26_131604_create_gallery_settings_table', 1),
(24, '2022_10_29_015431_create_contact_us_settings_table', 1),
(25, '2022_10_29_080054_create_pages_table', 1),
(26, '2022_10_29_171750_create_award_settings_table', 1),
(27, '2022_10_29_171807_create_awards_table', 1),
(28, '2022_10_29_180338_create_press_room_settings_table', 1),
(29, '2022_10_29_180352_create_press_rooms_table', 1),
(30, '2022_10_30_001334_create_career_settings_table', 1),
(31, '2022_10_30_001344_create_careers_table', 1),
(32, '2022_10_30_010149_create_blog_settings_table', 1),
(33, '2022_10_30_010206_create_blogs_table', 1),
(34, '2022_11_24_015940_create_home_settings_table', 2),
(35, '2022_11_24_021008_create_home_sliders_table', 2),
(36, '2022_11_24_021020_create_home_slider2s_table', 2),
(37, '2022_12_05_060711_create_wedding_images_table', 3),
(38, '2022_12_08_025100_create_settings_table', 4),
(39, '2022_12_19_051241_create_offers_table', 4),
(40, '2022_12_19_051743_create_offer_settings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `price`, `image`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aut dolor reiciendis', 'Ea nesciunt adipisi', 'aut-dolor-reiciendis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam urna turpis, eleifend nec faucibus a, pharetra eu ante. Aliquam at elit nibh. Praesent efficitur sem vitae ex tristique gravida.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam urna turpis, eleifend nec faucibus a, pharetra eu ante. Aliquam at elit nibh. Praesent efficitur sem vitae ex tristique gravida. Vestibulum eros lorem, varius eget nibh at, tincidunt varius nisi. In hendrerit libero eu nulla convallis, vitae pharetra magna porttitor. Quisque congue commodo eros, sed molestie massa ultrices a. Ut eget arcu sed ipsum blandit cursus. Sed leo lectus, pulvinar a velit nec, maximus ornare eros. Aenean pharetra quam eu erat faucibus, in semper urna aliquam. In ornare dui non dignissim interdum. Duis nulla elit, vehicula quis dictum ac, fermentum sed enim. Sed congue arcu ligula, vel commodo metus egestas sit amet.</p>', 'USD 400++ / Night', 'images/offer/list/QGxjRrUqst9VVO9UW18cIZ8epHX6YfHJlHbBhBb4.jpg', 'INQUIRE NOW', 'https://wa.me/628113800988', 1, '2022-12-23 19:36:06', '2022-12-23 19:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `offer_settings`
--

CREATE TABLE `offer_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_settings`
--

INSERT INTO `offer_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ipsum adipisicing ip', 'Voluptates ad aut et', 'ipsum-adipisicing-ip', 'Maiores corrupti ve', NULL, 'images/offer/setting/23Uk2Au1aDzirE5ICmJTcrxnTxppb2mbQIWQFgmd.jpg', 'Adipisci magnam mini', 'Quod deserunt alias', NULL, NULL, '2022-12-23 18:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Terms & Conditions', NULL, 'terms-conditions', 'Private Jet Villa by Hanging Gardens has a 24-hour check in policy, meaning you can check-in anytime and the checkout will be after 24 hours from the checked in time. in short, no fixed time for check-in and check-out.', '<p><strong>24-hour Arrival and Departure Times</strong></p>\r\n<p>Private Jet Villa by Hanging Gardens has a 24-hour check in policy, meaning you can check-in anytime and the checkout will be after 24 hours from the checked in time. in short, no fixed time for check-in and check-out.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Registered Paying guest</strong></p>\r\n<p>Only the specified number of paying guests listed in the Booking Agreement at the time of booking may reside on the premises. The number of registered paying guests given at the time of the booking is the maximum number of guests allowed. If an additional number of Lessee are staying at the Property, it is the absolute discretion of the villa manager or the representative to ask the extra guest to vacate the premises. Otherwise, each additional guest will be charged a published rate of $5000 USD per night. No camping is permitted in the grounds or gardens.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Minimum Stay Requirements</strong></p>\r\n<p>There is a minimum 2 night&rsquo;s stay requirement for most of the year. For Peak Seasons (Christmas &amp; New Year), the minimum stay is 3 nights.&nbsp;For holidays such as Easter and Chinese New Year, the minimum stay is 2 nights.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Weddings and Events</strong></p>\r\n<p>Weddings or events are allowed at the Property. To this Terms and Conditions, an \'event\' shall hereby be defined as any gathering within the premises of the Property that exceeds its maximum occupancy. If you take it upon yourself to host additional visitors while staying at the Property, you will be held responsible for any additional costs associated, each additional non-staying guest will be charged a published rate of $1000 USD per day when there is over 20% specified number of guests listed in the Booking Agreement.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Payment Requirements and Cancellation Policies</strong></p>\r\n<p>Booking the Property less than six months prior to arrival date, a non-refundable deposit of at least 50% of the total amount is due within 5 calendar days upon booking.</p>\r\n<p>&nbsp;</p>\r\n<p>All cancellations made by the Lessee are subject to penalties below:</p>\r\n<p>&nbsp;</p>\r\n<p>A 25% of total booking fee charge is applicable if cancelled up to 6 months in advance, 75% charge if cancelled up to 3 months in advance and after three months 100% All full payment is due 45 days prior to the arrival date.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Security Deposit</strong></p>\r\n<p>A security deposit is required by the guest prior to the arrival date.</p>\r\n<p>&nbsp;</p>\r\n<p>The security deposit will be authorized on credit card 48 hours before arrival or can be paid by bank transfer 10 days before arrival. The security deposit will be released or returned to the Lessee within 48 hours after check-out.</p>\r\n<p>&nbsp;</p>\r\n<p>If the Property incurred damages or any breakages during the stay of the guests, the costs will be deducted from the security deposit. This excludes normal and acceptable wear and tear.</p>\r\n<p>&nbsp;</p>\r\n<p>The condition of the Property will be judged at the sole discretion of the manager or the&nbsp;representative of the Property. If the value of damages or breakages exceeds the amount of&nbsp;security deposit, the guest will be held liable to pay the outstanding amount to the management as soon as possible</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Amendments</strong></p>\r\n<p>Any amendments made to the reservation dates after confirmation are a breach of the agreement and is a forfeit of the Booking Agreement. All payments made are subject to the cancellation conditions stated in article 7 of these terms and conditions.</p>\r\n<p>&nbsp;</p>\r\n<p>In the unlikely event that the management is unable to accommodate the guest at the Property&nbsp;booked by the guest for any reason (including the sale of the Property and force majeure), the Manager reserves the right to transfer the guest and their party to an alternative Property of the similar type and value, in consultation with the guest. If the price of the substituted Property is less than the original booking, the difference will be reimbursed to the guest. If the price of the substituted Property is higher than the original booking, the difference may be charged to the guest If, however, after considerable effort by the manager, no alternative of similar type and value is available and/or no agreement can be reached between the manager and the guest, then either the manager or the guest may opt to cancel the booking and this Booking Agreement. In that event, the manager will refund the guest of the whole amount based on unconsumed booking, without further compensation.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Guest Insurance</strong></p>\r\n<p>Guests are advused to have both liability and comprehensive travel insurance that provides&nbsp;coverage, including, but not limited to, cancellation, loss and damage to baggage and other&nbsp;Property, and flight delays. Guests are also advised to carry health coverage that includes but is not limited to evacuation and repatriation. The company shall not be held liable to you and your party for all claims, including any accidents related to the use of the Property, facilities or locally procured third party services such as watercraft, water sports, jeep or motorbike rental etc.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Force Majeure</strong></p>\r\n<p>In the event of incidents such as fires, floods, civil disturbances, severe weather, Acts of God, and any other type of delay, inconvenience, or expenses caused directly or indirectly by events outside of the manager\'s control, the company shall not be held responsible.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Complaints</strong></p>\r\n<p>Any problems or complaints that occur during the booking period should be discussed first with the Villa Manager (Captain). If the staff is unable to quickly resolve the issue, please consult the manager of the Property, who will rectify the situation to the best of their professional ability. The manager cannot be held liable for issues such as interruptions to water supply, electricity, Internet connection, cable TV, or breakdowns of lifts or pool filtration systems. The manager will do everything within reasonable expectation to avoid complaints in the first place, and when staying in a less developed and remote resort location, the infrastructure, local standards, and conditions are typically less developed than in urban environments. In case of complaints, guests should do it&nbsp;by writing to the manager within 24 hours when the issue occurred. Complaints made after<br>checkout will not be considered.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Conduct and Behavior</strong></p>\r\n<p>When booking the Property, the manager maintains responsibility for the appropriate behavior of the guests. If any guest behaves in an inappropriate manner, the manager, or their representative, at their absolute discretion, may ask the offending party to leave the premises. In this case, no refund shall be claimed by the guest. In addition, the manager of the Property or representatives of the manager reserve the right to enter the premises at a reasonable time to gain access to complete repairs, perform maintenance.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Social Corporate Responsibility</strong></p>\r\n<p>Unlawful possession, use or consumption of any illegal substances is prohibited in the Property. Unlawful behavior is also prohibited. The Police will be contacted immediately if there is any violation. No refunds shall be made in these circumstances.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Property Staff</strong></p>\r\n<p>Staff service is included in your stay at the Property from 7 am to 10 pm. On occasion, and with prior notice, they are also available for late-night special events or early morning breakfast (Extra hours can be charged at the discretion of the Property policy). At your own discretion, a tip may be given upon departure.<br>Additional services such as babysitting, and drivers can be arranged in advance and are subject to availability. Asking staff to look after minor children is not allowed. The guest must allow staff such<br>as pool maintenance workers and gardeners access to the grounds in order to complete their<br>work.</p>\r\n<p>&nbsp;</p>\r\n<p>Should there be a request for change or addition of staff, there will be an extra charge of US$ 75 for each staff per night.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>No Pets</strong></p>\r\n<p>Guests are not allowed to bring pets in the Property and on surrounding properties. Please note that the estate may have local cats. If you are allergic to or do not like cats, please inform the Property manager who will make sure to keep them away during your stay.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>No Smoking</strong></p>\r\n<p>Smoking is NOT permitted inside the JET. Smoking is only allowed outside on the grounds, where an ashtray can be provided by the Property Manager. Shishas and Hookah are prohibited in the Property.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Noise</strong></p>\r\n<p>Noise must be kept at a reasonable minimum level, especially from 11 pm to 8 am while guests<br>are sleeping.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Food and Beverages</strong></p>\r\n<p>All booking include breakfast. All other Food and chef service, Lunch, Dinner, and Snacks is la carte and charged accordingly. All additional food and beverages purchased on behalf of the Lessee are charged at a price of cost-plus a 25% surcharge that covers food preparation, transportation, time involved in the shopping and cooking process, and the use of the kitchen.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Linens and Towels</strong></p>\r\n<p>Linens and towels are provided by the Property and due to our eco-friendly Save the Planet policy, linens are changed every two days, more often if necessary. Towels are replaced after placement in the towel basket. Additional charges may apply if more frequent changes are needed. Items such as bedding, washing, or clothing articles should not be hung where it is visible. Laundry of personal clothing by a third party can be arranged at the lessee&rsquo;s cost, the Lessor shall not be held liable for any loss or damage by the third party.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Transfers</strong></p>\r\n<p>Any transfers may be arranged through our Villa Manager.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Owner&rsquo;s Insurance</strong></p>\r\n<p>The guest must not do or allow anything to be done that may cause the Property\'s insurance against loss or damage by fire to become void or cause insurance premiums to be raised.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Due Care and Supervision/Indemnity</strong></p>\r\n<p>It is understood that the guest is responsible and liable for the safety and well-being of guests and third parties while staying at the Property. The guests are required to take due care during their stay and take precautions such as supervision of children in the gardens, near the entrance, and near or in the pool. All children must be always under the direct supervision of an adult. No guests are permitted to enter the Jet while they are wet from swimming, as floors may become slippery. Damages or injuries resulting from the above-mentioned scenarios are the responsibility of the guests. The guests indemnifies and holds the manager harmless and free of liability resulting from such claims that result as consequences of accidents leading to injury or loss of life.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Valuables</strong></p>\r\n<p>Valuable items such as passports, cell phones, cameras, cash, or jewelry should be stored in a safety deposit box provided in the Property. Neither the Lessor nor the staff can be held<br>responsible for any valuables left behind, lost, or damaged.</p>\r\n<p><br><strong>Artwork</strong></p>\r\n<p>Guest must be aware that each Property contains precious contemporary and antique pieces of<br>art unique to the Property and must take care to avoid causing any damage to them. Guest shall be held liable for any artwork or antiques damaged during the booking period and the costs will be set off against the security deposit. If damages exceed the security deposit, the guest is liable for the remaining damages and must compensate the manager for the difference in cost.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Jurisdiction</strong></p>\r\n<p>Any contract that is made will be with the acceptance by both parties of these terms and<br>conditions, which are governed by Indonesian law, and both parties will submit to the exclusive jurisdiction of the Indonesian courts</p>', 'images/page/list/DSzEWpkhKu7NyZuk2HMeLJG5jeTWdNvaiXyNFpr1.jpg', NULL, NULL, 1, '2022-12-07 20:11:43', '2022-12-07 20:31:15'),
(1, 'Story', NULL, 'story', NULL, '<p>Private Jet Villa is the world\'s first villa in the luxury segment, &nbsp;constructed from an aircraft fuselage and located on a cliff at an altitude of 150 m above sea level, on the island of the gods, Bali. Board the aircraft by stairs over the wing straight into the living room with a private bar, a cozy sofa and a huge glass portal using smart glass technology with remote control,that changes the transparency of the glass and a gorgeous view opens up. This will be the &nbsp;\"wow effect\" from every second of being in this unique villa.</p>', 'images/page/list/mKLcD4blep0xPwuSAlxmGXQVZLjOKuczGvYZTkeA.jpg', NULL, NULL, 1, '2022-12-07 20:15:28', '2022-12-07 20:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_rooms`
--

CREATE TABLE `press_rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_rooms`
--

INSERT INTO `press_rooms` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Quam labore debitis', 'Magna vel consequat', 'quam-labore-debitis', '<p>asdasd</p>', '<p>asdasd</p>', 'images/pressroom/list/DTKHc7QxtmK3uyDrRZ8HTR5POEuCanjqnwcnEABY.png', 1, '2022-11-17 19:05:59', '2022-11-17 19:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `press_room_settings`
--

CREATE TABLE `press_room_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_room_settings`
--

INSERT INTO `press_room_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dolore ut harum quib', 'Quo officiis tenetur', 'dolore-ut-harum-quib', '<p>asdasd</p>', '<p>asd</p>', 'images/pressroom/setting/AL065FrTuUz9PJvBauFQETM6wJi36j6LH2l3LKSS.png', 'Nisi debitis do vero', '<p>asd</p>', NULL, NULL, '2022-11-17 19:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `price`, `image`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Romantic Candle Light Dinner', NULL, 'romantic-candle-light-dinner', '<p>Under the stars, a private water bale floats above our iconic pool, decorated with beautiful drapes, setting the scene for a memorable evening.</p>', '<p>Bali\'s night skies make for an ideal setting for relaxing and falling in love once again...</p>\r\n<p>&nbsp;</p>\r\n<p>Under the stars, a private water bale floats above our iconic pool, decorated with beautiful drapes, setting the scene for a memorable evening.</p>\r\n<p>&nbsp;</p>\r\n<p>Throughout the night, you\'re surrounded by frangipani candles, listening to the rhythmic sounds of the jungle while viewing the nearby ancient temple. A bespoke and magical experience!</p>', 'USD 400++ per Couple', 'images/restaurant/list/6sTV5oFHOVgF8VshnGH7WNwwcqAJMFWPAXzhTnF2.jpg', 'BOOK NOW', 'https://google.com', 1, '2022-12-05 23:33:06', '2022-12-18 20:36:20'),
(5, 'Picnic', NULL, 'picnic', '<p>Enjoy a delicious gourmet picnic lunch served on our riverside Bale, at a stunning spot where the Balinese jungle meets the rushing waters of the Ayung River.</p>', '<p>Enjoy a delicious gourmet picnic lunch served on our riverside Bale, at a stunning spot where the Balinese jungle meets the rushing waters of the Ayung River.</p>\r\n<p>&nbsp;</p>\r\n<p>Relax and sink into plush cushions as your private waiter serves a menu to delight your palate, whilst the stunning views and the rhythmic sounds of the jungle and river stimulate your senses.</p>', 'USD 150++  Per Package', 'images/restaurant/list/6ol8EvPtY1Ud94fvVEP3BGdHyvmaMMs6zzu8HtFH.jpg', 'BOOK NOW', 'https://google.com', 1, '2022-12-05 23:48:05', '2022-12-18 20:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_images`
--

CREATE TABLE `restaurant_images` (
  `id` bigint UNSIGNED NOT NULL,
  `restaurant_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_images`
--

INSERT INTO `restaurant_images` (`id`, `restaurant_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, NULL, 'images/restaurant/image/YzVFphbHmb9wVOOhL0c31UTskB7WALwWL1LqrUsY.jpg', 1, '2022-12-05 23:28:05', '2022-12-05 23:28:05'),
(8, 1, NULL, 'images/restaurant/image/tPvmnW7fdj7CpRCsLMUdqtNWdfCPYu8V7RQZG1TF.jpg', 1, '2022-12-05 23:27:58', '2022-12-05 23:27:58'),
(7, 1, NULL, 'images/restaurant/image/TufGibAtO322URRvJa26zAfDSmxBQTyhR00VjYWa.jpg', 1, '2022-12-05 23:27:50', '2022-12-05 23:27:50'),
(6, 1, NULL, 'images/restaurant/image/Zyr4WB4RAByN7kRZM507xVU8RZYfYBD1s8GlCmiS.jpg', 1, '2022-12-05 23:27:41', '2022-12-05 23:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_settings`
--

CREATE TABLE `restaurant_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `operating_hour` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_settings`
--

INSERT INTO `restaurant_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `operating_hour`, `cuisine`, `contact_email`, `contact_phone`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Private In Villa Dining', NULL, 'private-in-villa-dining', 'Start your day in a refreshing way. Our breakfast service will fulfill your need of good breakfast and Instagram-able pictures.', '<p>Start your day in a refreshing way. Our breakfast service will fulfill your need of good breakfast and Instagram-able pictures. Make your day even sweeter with the accompaniment of our high tea service. To close your perfectly romantic day, celebrate your romantic moment with a perfect gourmet dining.</p>\r\n<p>&nbsp;</p>\r\n<p>Choose from a sharing al fresco dining moment with our BBQ Package, Or experience the feast of Balinese Royals, or an even more romantic candle light dinner accompanied by the relaxing flickers of candle light, we will create you a moment and memory that will last for a lifetime. A Wine menu with a selection of top quality champagne, red, white, and ros&eacute; wine.</p>', 'images/restaurant/setting/tpptqrCN0K4y8EXPRvtl3LnDuP99a777GjsljfhT.jpg', 'Corrupti sapiente i', 'Duis sapien odio, bibendum in ipsum at, convallis porttitor lorem. Mauris porttitor enim in commodo laoreet. Curabitur id auctor magna. Vestibulum lorem mi, scelerisque vel vestibulum ut, blandit consectetur massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Explicabo Eligendi', 'Quia et sed deserunt', 'sexureg@mailinator.com', '+1 (591) 205-9704', 'Ut sunt nisi velit', 'In culpa sed molliti', NULL, NULL, '2022-12-18 20:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spas`
--

CREATE TABLE `spas` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spas`
--

INSERT INTO `spas` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Quis officia dolorum', 'Sunt ipsa non labo', 'quis-officia-dolorum', '<p>asdasd</p>', '<p>asdasd</p>', '364', 'images/spa/list/P36BPAhvsrAfwLd5hMMaLn9AO7gr7UcDDQrYAHS7.png', 1, '2022-11-17 18:39:06', '2022-11-17 18:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `spa_images`
--

CREATE TABLE `spa_images` (
  `id` bigint UNSIGNED NOT NULL,
  `spa_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spa_images`
--

INSERT INTO `spa_images` (`id`, `spa_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'seefsdf', 'images/spa/image/NMpO4gA76XOIjFY6PIX8DQo74wAbSmpNdlNCJlmz.png', 1, '2022-11-17 18:39:45', '2022-11-17 18:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `spa_settings`
--

CREATE TABLE `spa_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `operating_hour` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_rules` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spa_settings`
--

INSERT INTO `spa_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `operating_hour`, `booking_rules`, `contact_email`, `contact_phone`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Reprehenderit est c', 'Quas itaque fugiat q', 'reprehenderit-est-c', '<p>asdasd</p>', '<p>asd</p>', 'images/spa/setting/UAFPjz6peUMJw5GG31n7sipIqpmjrt1NR6KliLvc.png', 'Labore aliquip neque', '<p>asdas</p>', 'Ut proident in corp', 'Consectetur tempore', 'xaxedygoko@mailinator.com', '+1 (302) 503-9957', 'Dolorum velit velit', 'Excepturi minus fugi', NULL, NULL, '2022-11-17 18:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$pbKcvNkyWlNRC1cV5P4FOO646BUXcF2HBTq9hOZjv4z.7YIZ7HUum', NULL, '2022-11-16 19:06:48', '2022-11-16 19:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `villas`
--

CREATE TABLE `villas` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villas`
--

INSERT INTO `villas` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `image`, `meta_title`, `meta_description`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The Villa', NULL, 'the-villa', NULL, '<p>The aircraft has two bedrooms, both equipped with walk-in closets and the finest Egyptian cotton for bed linen and the most exclusive amenities.</p>\r\n<p>The cockpit has been converted into a double bathroom and jacuzzi and additional portholes looking \"overboard\" to fantastic and breathtaking ocean views.</p>', 'images/villa/list/TtId1q3D7Mq1VO9ddNh6xhrWlRap2bQxuZEgZF23.jpg', 'images/villa/list/8WWnPBEj896994ntG7OIaS9BipnHbdcON5iJdgIt.jpg', 'Et quis distinctio', '<p>The aircraft has two bedrooms, both equipped with walk-in closets and the finest Egyptian cotton for bed linen and the most exclusive amenities.</p>', NULL, NULL, 1, '2022-11-16 23:48:34', '2022-12-23 19:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `villa_features`
--

CREATE TABLE `villa_features` (
  `id` bigint UNSIGNED NOT NULL,
  `villa_id` int DEFAULT NULL,
  `feature_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villa_features`
--

INSERT INTO `villa_features` (`id`, `villa_id`, `feature_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2022-11-17 00:43:59', '2022-11-17 00:43:59'),
(2, 1, 2, NULL, '2022-11-28 00:34:15', '2022-11-28 00:34:15'),
(3, 1, 3, NULL, '2022-11-28 00:34:19', '2022-11-28 00:34:19'),
(4, 1, 4, NULL, '2022-11-28 00:34:23', '2022-11-28 00:34:23'),
(5, 1, 5, NULL, '2022-11-28 00:34:27', '2022-11-28 00:34:27'),
(6, 1, 6, NULL, '2022-11-28 00:34:31', '2022-11-28 00:34:31'),
(7, 1, 7, NULL, '2022-11-28 00:34:35', '2022-11-28 00:34:35'),
(8, 1, 8, NULL, '2022-11-28 00:34:38', '2022-11-28 00:34:38'),
(9, 1, 9, NULL, '2022-11-28 00:34:43', '2022-11-28 00:34:43'),
(10, 1, 10, NULL, '2022-11-28 00:34:47', '2022-11-28 00:34:47'),
(11, 1, 11, NULL, '2022-11-28 00:34:51', '2022-11-28 00:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `villa_images`
--

CREATE TABLE `villa_images` (
  `id` bigint UNSIGNED NOT NULL,
  `villa_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villa_images`
--

INSERT INTO `villa_images` (`id`, `villa_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'images/villa/image/TA3BHCztIL1cbwdnT8wYnGcqqlKjOzVbQwWTVx19.jpg', NULL, '2022-11-27 23:16:32', '2022-11-27 23:16:32'),
(7, 1, NULL, 'images/villa/image/DkUx8QTwMAZJw8bcuvHFNUyvCqLTpPQdcfIUxPWX.jpg', NULL, '2022-11-27 23:16:11', '2022-11-27 23:16:11'),
(8, 1, NULL, 'images/villa/image/uQNiBPomofHW6P7h5hat65y1BPkoVqjRIh1souTL.jpg', NULL, '2022-11-27 23:16:19', '2022-11-27 23:16:19'),
(5, 2, 'bnm', 'images/villa/image/bInkwlUHHMpOtleViYV4AVKcUWS2zpedYST9lAnV.png', NULL, '2022-11-24 22:39:24', '2022-11-24 22:39:24'),
(9, 1, NULL, 'images/villa/image/nNUiGmRStVR4MM9aD6yK8rNN9aOTVc5lBCyk7FhP.jpg', NULL, '2022-11-27 23:16:26', '2022-11-27 23:16:26'),
(11, 1, NULL, 'images/villa/image/FGn2mXZvI7bl8ONUkRXGbgsIiSdIwwH1QuG3vgNJ.jpg', NULL, '2022-11-27 23:16:43', '2022-11-27 23:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `villa_settings`
--

CREATE TABLE `villa_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villa_settings`
--

INSERT INTO `villa_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The Villa', NULL, 'the-villa', 'The aircraft has two bedrooms, both equipped with walk-in closets and the finest Egyptian cotton for bed linen and the most exclusive amenities.', '<p>The aircraft has two bedrooms, both equipped with walk-in closets and the finest Egyptian cotton for bed linen and the most exclusive amenities.</p>\r\n<p>&nbsp;</p>\r\n<p>The cockpit has been converted into a double bathroom and jacuzzi and additional portholes looking \"overboard\" to fantastic and breathtaking ocean views.</p>', 'images/villa/setting/8YzFv4nygkDGkHLK76rzqarbWtMhRqntFl3zw6Fv.jpg', 'Blanditiis neque qui', 'ASasdasd', NULL, NULL, '2022-12-06 00:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `weddings`
--

CREATE TABLE `weddings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weddings`
--

INSERT INTO `weddings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `price`, `image`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The Intimate Wedding', NULL, 'the-intimate-wedding', '<p>Spend your special day intimately at a stunning riverside where the Balinese jungle meets the rushing waters of the holy Ayung River.</p>', '<p>Spend your special day intimately at a stunning riverside where the Balinese jungle meets the rushing waters of the holy Ayung River.</p>', 'USD 9999++', 'images/wedding/list/dVfcs6TuoCdGBiPS7ujouGTqTjSEhvvv9lP5c9bd.jpg', 'INQUIRE NOW', 'https://google.com', 1, '2022-11-17 18:50:19', '2022-12-18 20:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_images`
--

CREATE TABLE `wedding_images` (
  `id` bigint UNSIGNED NOT NULL,
  `wedding_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_images`
--

INSERT INTO `wedding_images` (`id`, `wedding_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, NULL, 'images/wedding/image/h3kKREVyJr5xrerqR2S003c6io4d6GyfMzCitniV.jpg', 1, '2022-12-04 22:30:07', '2022-12-04 22:30:07'),
(4, 1, NULL, 'images/wedding/image/vU4XiqcTBeLoaOpQZl35FVNizQhaE5TdNK6wB2cz.jpg', 1, '2022-12-04 22:30:01', '2022-12-04 22:30:01'),
(6, 1, NULL, 'images/wedding/image/YnpuIhDJtV3EAja4zDH5vTVlG0YcFxqiwFH6zq2i.jpg', 1, '2022-12-04 22:30:17', '2022-12-04 22:30:17'),
(7, 1, NULL, 'images/wedding/image/J1OITdurWrEMEciGBQdvXbk4oalKvKyqEK0320W8.jpg', 1, '2022-12-04 22:30:30', '2022-12-04 22:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_settings`
--

CREATE TABLE `wedding_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_settings`
--

INSERT INTO `wedding_settings` (`id`, `title`, `subtitle`, `slug`, `excerpt`, `description`, `banner_image`, `meta_title`, `meta_description`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The Wedding', NULL, 'the-wedding', 'Sed vulputate justo ante, id auctor diam porta in. In eros magna, molestie eu libero nec, sollicitudin aliquam libero. Sed ac lorem volutpat dui posuere sollicitudin sit amet sit amet sapien.', '<p>Sed vulputate justo ante, id auctor diam porta in. In eros magna, molestie eu libero nec, sollicitudin aliquam libero. Sed ac lorem volutpat dui posuere sollicitudin sit amet sit amet sapien.</p>', 'images/wedding/setting/adjuusXUsvCvAxW8f1LoHAtGpTz4Acs137tEGPwf.jpg', 'Qui soluta in corpor', '<p>erwer</p>', 'Ipsa animi ut amet', 'Ut quia rerum dolor', NULL, NULL, '2022-12-06 00:32:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_settings`
--
ALTER TABLE `award_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_settings`
--
ALTER TABLE `career_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_settings`
--
ALTER TABLE `contact_us_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_images`
--
ALTER TABLE `experience_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_settings`
--
ALTER TABLE `experience_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_settings`
--
ALTER TABLE `gallery_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider2s`
--
ALTER TABLE `home_slider2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_settings`
--
ALTER TABLE `offer_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `press_rooms`
--
ALTER TABLE `press_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_room_settings`
--
ALTER TABLE `press_room_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_images`
--
ALTER TABLE `restaurant_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_settings`
--
ALTER TABLE `restaurant_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spas`
--
ALTER TABLE `spas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_images`
--
ALTER TABLE `spa_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa_settings`
--
ALTER TABLE `spa_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `villas`
--
ALTER TABLE `villas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villa_features`
--
ALTER TABLE `villa_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villa_images`
--
ALTER TABLE `villa_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villa_settings`
--
ALTER TABLE `villa_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddings`
--
ALTER TABLE `weddings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_images`
--
ALTER TABLE `wedding_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_settings`
--
ALTER TABLE `wedding_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `award_settings`
--
ALTER TABLE `award_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_settings`
--
ALTER TABLE `career_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us_settings`
--
ALTER TABLE `contact_us_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience_images`
--
ALTER TABLE `experience_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience_settings`
--
ALTER TABLE `experience_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gallery_settings`
--
ALTER TABLE `gallery_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_slider2s`
--
ALTER TABLE `home_slider2s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_settings`
--
ALTER TABLE `offer_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `press_rooms`
--
ALTER TABLE `press_rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `press_room_settings`
--
ALTER TABLE `press_room_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurant_images`
--
ALTER TABLE `restaurant_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurant_settings`
--
ALTER TABLE `restaurant_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spas`
--
ALTER TABLE `spas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spa_images`
--
ALTER TABLE `spa_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spa_settings`
--
ALTER TABLE `spa_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `villas`
--
ALTER TABLE `villas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `villa_features`
--
ALTER TABLE `villa_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `villa_images`
--
ALTER TABLE `villa_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `villa_settings`
--
ALTER TABLE `villa_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weddings`
--
ALTER TABLE `weddings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding_images`
--
ALTER TABLE `wedding_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wedding_settings`
--
ALTER TABLE `wedding_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
