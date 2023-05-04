-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2019 at 12:51 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_nainggroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `vision` longtext COLLATE utf8mb4_unicode_ci,
  `mission` longtext COLLATE utf8mb4_unicode_ci,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `interior` longtext COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogimages`
--

CREATE TABLE `blogimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogcategory_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureimage` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_dates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `affordable_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `room_id`, `name`, `email`, `phone`, `meeting_dates`, `dos`, `affordable_time`, `location`, `created_at`, `updated_at`) VALUES
(17, 12, 3, 'Si Thu San', 'sithusan@gmail.com', '09345677121', '2019-02-23', 'Hello', '5 Hours', 'Naing Group Head Office', '2019-02-21 21:48:53', '2019-02-21 21:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `bookingusers`
--

CREATE TABLE `bookingusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `featureimage` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `title`, `description`, `featureimage`, `created_at`, `updated_at`) VALUES
(1, 'Hello', 'Hello World', '/uploads/business/2019/2/1550225741_eJQqPS.jpg', '2019-02-15 09:42:09', '2019-02-15 10:15:41'),
(2, 'Hola', 'Description', '/uploads/business/2019/2/1550223810_lZzk5Q.jpg', '2019-02-15 09:43:30', '2019-02-15 09:43:30'),
(3, 'Hello', 'Hello', '/uploads/business/2019/2/1550223833_9uGNwF.jpg', '2019-02-15 09:43:45', '2019-02-15 09:43:53'),
(4, 'Hello', 'Hello', '/uploads/business/2019/2/1550225600_FdmEsz.jpg', '2019-02-15 10:13:20', '2019-02-15 10:13:20'),
(5, 'Hello', 'Hola', '/uploads/business/2019/2/1550225762_PzqvT2.jpg', '2019-02-15 10:16:02', '2019-02-15 10:16:02'),
(6, 'hello', 'hello world', '/uploads/business/2019/2/1550468122_HMeqRm.jpg', '2019-02-18 05:35:22', '2019-02-18 05:35:22'),
(7, 'Hello', 'Hola', '/uploads/business/2019/2/1550469122_4JIsAF.jpg', '2019-02-18 05:52:02', '2019-02-18 05:52:02'),
(8, 'Hello', 'Hello World', '/uploads/business/2019/2/1550472764_tNSZI8.jpg', '2019-02-18 06:52:44', '2019-02-18 06:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `businessimages`
--

CREATE TABLE `businessimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businessimages`
--

INSERT INTO `businessimages` (`id`, `business_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '/uploads/business/2019/2/1550223730_kvHoKU.jpg', '2019-02-15 09:42:10', '2019-02-15 09:42:10'),
(2, 2, '/uploads/business/2019/2/1550223810_rpWl6T.jpg', '2019-02-15 09:43:30', '2019-02-15 09:43:30'),
(3, 3, '/uploads/business/2019/2/1550223825_z4lPmX.jpg', '2019-02-15 09:43:45', '2019-02-15 09:43:45'),
(4, 4, '/uploads/business/2019/2/1550225600_2IcUlj.jpg', '2019-02-15 10:13:21', '2019-02-15 10:13:21'),
(5, 5, '/uploads/business/2019/2/1550225762_G8Pkrg.jpg', '2019-02-15 10:16:02', '2019-02-15 10:16:02'),
(6, 5, '/uploads/business/2019/2/1550465193_9OPV4v.jpg', '2019-02-18 04:46:33', '2019-02-18 04:46:33'),
(7, 5, '/uploads/business/2019/2/1550465201_usQt0C.jpg', '2019-02-18 04:46:41', '2019-02-18 04:46:41'),
(8, 5, '/uploads/business/2019/2/1550465208_wK5Fzv.jpg', '2019-02-18 04:46:48', '2019-02-18 04:46:48'),
(9, 5, '/uploads/business/2019/2/1550465217_mVIbYK.jpg', '2019-02-18 04:46:57', '2019-02-18 04:46:57'),
(10, 5, '/uploads/business/2019/2/1550465231_sXLPCn.jpg', '2019-02-18 04:47:11', '2019-02-18 04:47:11'),
(11, 4, '/uploads/business/2019/2/1550465777_YfS2EM.jpg', '2019-02-18 04:56:17', '2019-02-18 04:56:17'),
(12, 4, '/uploads/business/2019/2/1550465786_89BhKU.jpg', '2019-02-18 04:56:26', '2019-02-18 04:56:26'),
(13, 6, '/uploads/business/2019/2/1550468122_i8G3K0.jpg', '2019-02-18 05:35:22', '2019-02-18 05:35:22'),
(14, 7, '/uploads/business/2019/2/1550469122_yLVczK.jpg', '2019-02-18 05:52:02', '2019-02-18 05:52:02'),
(15, 8, '/uploads/business/2019/2/1550472764_UZ8ApX.jpg', '2019-02-18 06:52:44', '2019-02-18 06:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cacheautoDeskAuth', 'O:8:\"stdClass\":3:{s:12:\"access_token\";s:446:\"eyJhbGciOiJIUzI1NiIsImtpZCI6Imp3dF9zeW1tZXRyaWNfa2V5In0.eyJjbGllbnRfaWQiOiJFcU1KQTRMZklUcUxRWk5uaHNoaGVLNFN1WHFWQjNFVCIsImV4cCI6MTU1MTk3MDMxOSwic2NvcGUiOlsiZGF0YTpyZWFkIiwiZGF0YTp3cml0ZSIsImRhdGE6Y3JlYXRlIiwiYnVja2V0OnJlYWQiLCJidWNrZXQ6Y3JlYXRlIl0sImF1ZCI6Imh0dHBzOi8vYXV0b2Rlc2suY29tL2F1ZC9qd3RleHA2MCIsImp0aSI6Ilo4Ukt0T1RSU09qT3hvdUM0YlIyVVhyN1hPOVRWQzQxMUZTU3BPUFRQVWo1eWtGamM5d3QzRTRmaTd5RlUzeksifQ.Hz0zf4HbuZ47IKW25jS-nMGba7soEuthID0N5U6Q5y4\";s:10:\"token_type\";s:6:\"Bearer\";s:10:\"expires_in\";i:3599;}', 1551970318),
('laravel_cacheframework/schedule-e2ce8b71a72204dbe779ee50ed5988a1324f2f12', 'b:1;', 1552284612);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Yangon', '2019-01-31 08:54:55', '2019-01-31 08:54:55'),
(2, 'Mandalay', '2019-01-31 08:55:03', '2019-01-31 08:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csrimages`
--

CREATE TABLE `csrimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `csr_id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csrs`
--

CREATE TABLE `csrs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `featureimage` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `floor_plans`
--

CREATE TABLE `floor_plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `floor_plans` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floor_plans`
--

INSERT INTO `floor_plans` (`id`, `room_id`, `floor_plans`, `created_at`, `updated_at`) VALUES
(4, 138, '/uploads/floorplan/2019/2/1549426438_dUOqtR.jpg', '2019-02-06 04:13:58', '2019-02-06 04:13:58'),
(6, 3, '/uploads/floorplan/2019/2/1549428310_bWQDL2.jpg', '2019-02-06 04:45:10', '2019-02-06 04:45:10'),
(7, 17, '/uploads/floorplan/2019/2/1549428462_M7eNFv.jpg', '2019-02-06 04:47:42', '2019-02-06 04:47:42'),
(9, 26, '/uploads/floorplan/2019/2/1549436464_CMzKN3.jpg', '2019-02-06 04:49:00', '2019-02-06 07:01:04'),
(10, 38, '/uploads/floorplan/2019/2/1549428581_A1G3kc.jpg', '2019-02-06 04:49:41', '2019-02-06 04:49:41'),
(11, 45, '/uploads/floorplan/2019/2/1549428620_NFyeqd.jpg', '2019-02-06 04:50:20', '2019-02-06 04:50:20'),
(12, 47, '/uploads/floorplan/2019/2/1549428669_AIOJuH.jpg', '2019-02-06 04:51:09', '2019-02-06 04:51:09'),
(13, 73, '/uploads/floorplan/2019/2/1549428712_TANMyP.jpg', '2019-02-06 04:51:52', '2019-02-06 04:51:52'),
(14, 82, '/uploads/floorplan/2019/2/1549428752_eMLdgD.jpg', '2019-02-06 04:52:32', '2019-02-06 04:52:32'),
(15, 82, '/uploads/floorplan/2019/2/1549428762_ta5kun.jpg', '2019-02-06 04:52:42', '2019-02-06 04:52:42'),
(17, 91, '/uploads/floorplan/2019/2/1549428799_mpWMPh.jpg', '2019-02-06 04:53:19', '2019-02-06 04:53:19'),
(18, 111, '/uploads/floorplan/2019/2/1549428833_9Z62P1.jpg', '2019-02-06 04:53:53', '2019-02-06 04:53:53'),
(20, 117, '/uploads/floorplan/2019/2/1549428936_793vdA.jpg', '2019-02-06 04:55:36', '2019-02-06 04:55:36'),
(21, 116, '/uploads/floorplan/2019/2/1549429345_X63Hed.jpg', '2019-02-06 05:02:25', '2019-02-06 05:02:25'),
(22, 118, '/uploads/floorplan/2019/2/1549429389_Fj9HlJ.jpg', '2019-02-06 05:03:09', '2019-02-06 05:03:09'),
(23, 119, '/uploads/floorplan/2019/2/1549429409_cpyF9a.jpg', '2019-02-06 05:03:29', '2019-02-06 05:03:29'),
(24, 3, '/uploads/floorplan/2019/2/1549429472_1chFL7.jpg', '2019-02-06 05:04:32', '2019-02-06 05:04:32'),
(25, 119, '/uploads/floorplan/2019/2/1549435882_m9vdD7.jpg', '2019-02-06 06:51:22', '2019-02-06 06:51:22'),
(26, 118, '/uploads/floorplan/2019/2/1549435922_lseANS.jpg', '2019-02-06 06:52:02', '2019-02-06 06:52:02'),
(27, 117, '/uploads/floorplan/2019/2/1549435953_m5U6Es.jpg', '2019-02-06 06:52:33', '2019-02-06 06:52:33'),
(28, 116, '/uploads/floorplan/2019/2/1549435984_lakdQU.jpg', '2019-02-06 06:53:04', '2019-02-06 06:53:04'),
(29, 91, '/uploads/floorplan/2019/2/1549436084_jyXN0l.jpg', '2019-02-06 06:54:44', '2019-02-06 06:54:44'),
(30, 92, '/uploads/floorplan/2019/2/1549436111_MODpaP.jpg', '2019-02-06 06:55:11', '2019-02-06 06:55:11'),
(32, 92, '/uploads/floorplan/2019/2/1549436171_izKs6V.jpg', '2019-02-06 06:56:11', '2019-02-06 06:56:11'),
(33, 73, '/uploads/floorplan/2019/2/1549436258_GL30Q2.jpg', '2019-02-06 06:57:38', '2019-02-06 06:57:38'),
(34, 45, '/uploads/floorplan/2019/2/1549436302_htJqlU.jpg', '2019-02-06 06:58:22', '2019-02-06 06:58:22'),
(35, 47, '/uploads/floorplan/2019/2/1549436328_9fAGvi.jpg', '2019-02-06 06:58:48', '2019-02-06 06:58:48'),
(36, 38, '/uploads/floorplan/2019/2/1549436383_DAs3Zq.jpg', '2019-02-06 06:59:43', '2019-02-06 06:59:43'),
(37, 26, '/uploads/floorplan/2019/2/1549436436_ywPCiT.jpg', '2019-02-06 07:00:36', '2019-02-06 07:00:36'),
(38, 29, '/uploads/floorplan/2019/2/1549436502_LOYtEi.jpg', '2019-02-06 07:01:42', '2019-02-06 07:01:42'),
(39, 29, '/uploads/floorplan/2019/2/1549436520_HNSZxa.jpg', '2019-02-06 07:02:00', '2019-02-06 07:02:00'),
(40, 17, '/uploads/floorplan/2019/2/1549436559_F1PKv8.jpg', '2019-02-06 07:02:39', '2019-02-06 07:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeslides`
--

CREATE TABLE `homeslides` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeslides`
--

INSERT INTO `homeslides` (`id`, `title1`, `title2`, `image`, `link`, `created_at`, `updated_at`) VALUES
(5, 'East Race Course Condominium', '', '/uploads/homeslides/2019/2/1550820618_HSymrX.jpg', 'https://www.facebook.com/minnpaingsoe.fizel', '2019-02-22 21:00:20', '2019-02-22 21:00:20'),
(6, 'BO MIN YAUNG', 'BUSINESS TOWER', '/uploads/homeslides/2019/2/1550820836_J2SEcf.jpg', NULL, '2019-02-22 21:03:56', '2019-02-22 21:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `indexdatas`
--

CREATE TABLE `indexdatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `project` text COLLATE utf8mb4_unicode_ci,
  `staff` text COLLATE utf8mb4_unicode_ci,
  `investment` text COLLATE utf8mb4_unicode_ci,
  `taxation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indexdatas`
--

INSERT INTO `indexdatas` (`id`, `title`, `description`, `project`, `staff`, `investment`, `taxation`, `created_at`, `updated_at`) VALUES
(1, 'Naing Group Construction', 'Our Awesome Facts', '100', '100', '100', '100', '2019-01-31 08:36:20', '2019-01-31 08:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_30_014120_create_cache_table', 1),
(4, '2018_12_10_034216_create_jobs_table', 1),
(5, '2019_01_03_163909_create_homeslides_table', 1),
(6, '2019_01_07_150258_create_whychooses_table', 1),
(7, '2019_01_07_164640_create_faqs_table', 1),
(8, '2019_01_08_124949_create_abouts_table', 1),
(9, '2019_01_08_143444_create_indexdatas_table', 1),
(10, '2019_01_09_100036_create_galleries_table', 1),
(11, '2019_01_09_103343_create_milestones_table', 1),
(12, '2019_01_09_131643_create_blogs_table', 1),
(13, '2019_01_09_142339_create_businesses_table', 1),
(14, '2019_01_09_152229_create_csrs_table', 1),
(15, '2019_01_10_113627_create_blogcategories_table', 1),
(16, '2019_01_10_115008_create_tags_table', 1),
(17, '2019_01_10_154019_make_string_blogcategory_id_blogs_table', 1),
(18, '2019_01_11_103027_create_businessimages_table', 1),
(19, '2019_01_14_141223_create_csrimages_table', 1),
(20, '2019_01_14_155150_create_teams_table', 1),
(21, '2019_01_14_232750_create_project_statuses_table', 1),
(22, '2019_01_14_232834_create_project_types_table', 1),
(23, '2019_01_14_232848_create_cities_table', 1),
(24, '2019_01_14_233738_create_projects_table', 1),
(25, '2019_01_14_234148_create_project_facilities_table', 1),
(26, '2019_01_16_081740_create_project_files_table', 1),
(27, '2019_01_16_110542_create_messages_table', 1),
(28, '2019_01_21_114331_create_room_statuses_table', 1),
(29, '2019_01_21_114359_create_room_features_table', 1),
(30, '2019_01_21_123035_create_rooms_table', 1),
(31, '2019_01_21_125818_create_room_types_table', 1),
(32, '2019_01_21_143830_create_blog_tag_pivot_table', 1),
(33, '2019_01_21_145802_create_blogimages_table', 1),
(34, '2019_01_21_145834_create_room_room_features_table', 1),
(35, '2019_01_22_102934_create_contacts_table', 1),
(36, '2019_01_23_141023_make_biography_to_team_table', 1),
(37, '2019_01_25_161204_create_project_project_facilities', 1),
(38, '2019_01_31_112830_create_emails_table', 2),
(39, '2019_02_05_152907_create_room_image_table', 2),
(40, '2019_02_06_095537_create_floor_plans_table', 3),
(41, '2019_02_06_141725_create_bookings_table', 4),
(42, '2019_02_06_143522_create_bookingusers_table', 5),
(43, '2019_02_18_160407_add_column_to_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `location` longtext COLLATE utf8mb4_unicode_ci,
  `date` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_status_id` int(10) UNSIGNED NOT NULL,
  `project_type_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `floor` int(10) UNSIGNED NOT NULL,
  `priority` int(10) UNSIGNED NOT NULL,
  `layout` int(10) UNSIGNED NOT NULL DEFAULT '4',
  `file_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No File Uploaded',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `map`, `feature_image`, `banner_image`, `project_status_id`, `project_type_id`, `city_id`, `price`, `floor`, `priority`, `layout`, `file_status`, `created_at`, `updated_at`) VALUES
(2, 'KBZ Tower', 'Description', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.4384645686796!2d96.13445311434567!3d16.804590523775342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebe0dc4076b9%3A0x4d36a7aa85e22f68!2sKBZ+Tower!5e0!3m2!1sen!2smm!4v1549431864833\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '/uploads/projects/2019/1/1548877557_nBOHKl.jpg', '/uploads/banner2019/1/1548877561_4qQTSH.jpg', 5, 1, 1, 5400, 15, 1, 4, 'Complete', '2019-01-31 09:16:01', '2019-02-06 05:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `project_facilities`
--

CREATE TABLE `project_facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_facilities`
--

INSERT INTO `project_facilities` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Adult and Kid Swimming Pool', 'fas fa-swimming-pool', '2019-01-31 08:40:29', '2019-01-31 08:43:35'),
(2, 'Gymnasium', 'fas fa-dumbbell', '2019-01-31 08:40:45', '2019-01-31 08:44:24'),
(3, 'Roof Top Restaurant', 'fas fa-utensils', '2019-01-31 08:41:17', '2019-01-31 08:45:42'),
(4, 'Roof Top Garden', 'fab fa-pagelines', '2019-01-31 08:41:35', '2019-01-31 08:47:25'),
(5, 'Luxury Cinema', 'fas fa-film', '2019-01-31 08:41:50', '2019-01-31 08:48:44'),
(6, 'Yoga Center', 'fas fa-running', '2019-01-31 08:42:04', '2019-01-31 08:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `project_files`
--

CREATE TABLE `project_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bucket_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sha1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_files`
--

INSERT INTO `project_files` (`id`, `project_id`, `title`, `bucket_key`, `object_id`, `object_key`, `sha1`, `size`, `content_type`, `location`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, NULL, 'asdf1234', 'urn:adsk.objects:os.object:asdf1234/1550464411_tXY0rH.3DS', '1550464411_tXY0rH.3DS', 'efefc8f7312e4e7e9a570193a13143a0b0152ed8', '33063848', 'application/octet-stream', 'https://developer.api.autodesk.com/oss/v2/buckets/asdf1234/objects/1550464411_tXY0rH.3DS', 'success', '2019-02-01 18:42:22', '2019-02-01 18:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `project_project_facilities`
--

CREATE TABLE `project_project_facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `project_facilities_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_project_facilities`
--

INSERT INTO `project_project_facilities` (`id`, `project_id`, `project_facilities_id`, `created_at`, `updated_at`) VALUES
(4, 2, 1, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 2, 3, NULL, NULL),
(7, 2, 4, NULL, NULL),
(8, 2, 5, NULL, NULL),
(9, 2, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_statuses`
--

CREATE TABLE `project_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_statuses`
--

INSERT INTO `project_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, '50% Completion', '2019-02-04 09:18:35', '2019-02-04 09:18:35'),
(4, '60% Completion', '2019-02-04 09:18:52', '2019-02-04 09:18:52'),
(5, '70% Completion', '2019-02-04 09:19:04', '2019-02-04 09:19:04'),
(6, '80% Completion', '2019-02-04 09:19:16', '2019-02-04 09:19:16'),
(7, '90% Completion', '2019-02-04 09:19:25', '2019-02-04 09:19:25'),
(8, 'BCC', '2019-02-04 09:19:38', '2019-02-04 09:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Condominium', '2019-01-31 08:52:38', '2019-01-31 08:52:38'),
(6, 'Affordable Housing', '2019-02-04 09:21:13', '2019-02-04 09:21:13'),
(7, 'Residentials', '2019-02-04 09:21:36', '2019-02-04 09:21:36'),
(8, 'Cluster', '2019-02-04 09:21:47', '2019-02-04 09:21:47'),
(9, 'Cluster', '2019-02-04 09:21:47', '2019-02-04 09:21:47'),
(10, 'Business Tower', '2019-02-04 09:22:05', '2019-02-04 09:22:05'),
(11, 'Mini Condominium', '2019-02-04 09:22:22', '2019-02-04 09:22:22'),
(12, '', '2019-02-21 22:59:24', '2019-02-21 22:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `width` int(10) UNSIGNED NOT NULL,
  `bedroom` int(10) UNSIGNED NOT NULL,
  `bathroom` int(10) UNSIGNED NOT NULL,
  `floor` int(10) UNSIGNED NOT NULL,
  `floor_plan` varchar(121) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `project_id`, `name`, `description`, `price`, `width`, `bedroom`, `bathroom`, `floor`, `floor_plan`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'UnitA', 'Description', 5400, 1711, 1, 1, 15, NULL, 0, '2019-02-01 06:41:45', '2019-02-21 16:24:47'),
(4, 2, 'UnitB', 'Description', 5400, 1704, 1, 1, 15, NULL, 1, '2019-02-01 06:44:23', '2019-02-01 07:17:56'),
(5, 2, 'UnitC', 'Descrption', 5400, 1787, 1, 1, 15, NULL, 1, '2019-02-01 06:45:40', '2019-02-01 07:16:53'),
(6, 2, 'UnitD', 'Description', 5400, 1504, 1, 1, 15, NULL, 1, '2019-02-01 06:48:12', '2019-02-01 07:15:57'),
(7, 2, 'UnitE', 'Description', 5400, 1504, 1, 1, 15, NULL, 1, '2019-02-01 06:49:15', '2019-02-01 07:15:26'),
(8, 2, 'Suana Room', 'Descripiton', 1, 1304, 1, 1, 15, NULL, 2, '2019-02-01 07:09:20', '2019-02-01 07:19:03'),
(9, 2, 'CM Holding and Mock Up', 'Description', 5400, 1400, 1, 1, 15, NULL, 2, '2019-02-01 07:11:08', '2019-02-01 07:39:48'),
(10, 2, 'UnitH', 'Description', 5400, 1400, 1, 1, 15, NULL, 1, '2019-02-01 07:13:10', '2019-02-01 07:13:10'),
(11, 2, 'UnitI', 'Description', 5400, 1356, 1, 1, 15, NULL, 1, '2019-02-01 07:13:44', '2019-02-01 07:13:44'),
(12, 2, 'UnitA', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:16:12', '2019-02-01 08:16:12'),
(13, 2, 'UnitB', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:16:45', '2019-02-01 08:16:45'),
(14, 2, 'UnitC', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:17:12', '2019-02-01 08:17:12'),
(15, 2, 'UnitD', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:17:38', '2019-02-01 08:17:38'),
(16, 2, 'UnitE', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:18:00', '2019-02-01 08:18:00'),
(17, 2, 'UnitF', '', 3870, 1304, 1, 1, 14, NULL, 0, '2019-02-01 08:18:54', '2019-02-01 08:18:54'),
(18, 2, 'UnitG', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:19:18', '2019-02-01 08:19:18'),
(19, 2, 'UnitH', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:19:51', '2019-02-01 08:21:05'),
(20, 2, 'UnitI', '', 1, 1, 1, 1, 14, NULL, 1, '2019-02-01 08:20:11', '2019-02-01 08:20:11'),
(21, 2, 'UnitA', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:21:58', '2019-02-01 08:21:58'),
(22, 2, 'UnitB', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:22:21', '2019-02-01 08:22:21'),
(23, 2, 'UnitC', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:22:44', '2019-02-01 08:22:44'),
(24, 2, 'UnitD', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:23:07', '2019-02-01 08:23:07'),
(25, 2, 'UnitE', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:23:39', '2019-02-01 08:23:39'),
(26, 2, 'UnitF', '', 1870, 1304, 1, 1, 13, NULL, 0, '2019-02-01 08:24:11', '2019-02-01 08:30:32'),
(27, 2, 'UnitG', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:24:45', '2019-02-01 08:24:45'),
(28, 2, 'UnitH', '', 1, 1, 1, 1, 13, NULL, 1, '2019-02-01 08:25:10', '2019-02-01 08:29:57'),
(29, 2, 'UnitI', '', 4015, 1356, 1, 1, 13, NULL, 0, '2019-02-01 08:26:04', '2019-02-01 08:26:04'),
(30, 2, 'UnitA', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:34:10', '2019-02-01 08:34:10'),
(31, 2, 'Unit B', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:34:35', '2019-02-01 08:34:35'),
(32, 2, 'UnitC', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:35:00', '2019-02-01 08:35:00'),
(33, 2, 'UnitD', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:35:22', '2019-02-01 08:35:22'),
(34, 2, 'UnitE', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:35:50', '2019-02-01 08:35:50'),
(35, 2, 'UnitF', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:36:09', '2019-02-01 08:36:09'),
(36, 2, 'UnitG', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:36:28', '2019-02-01 08:36:28'),
(37, 2, 'UnitH', '', 1, 1, 1, 1, 12, NULL, 1, '2019-02-01 08:36:51', '2019-02-01 08:36:51'),
(38, 2, 'UnitI', '', 4015, 1356, 1, 1, 12, NULL, 0, '2019-02-01 08:37:39', '2019-02-01 08:37:39'),
(39, 2, 'UnitA', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:39:09', '2019-02-01 08:39:09'),
(40, 2, 'UnitB', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:39:37', '2019-02-01 08:39:37'),
(41, 2, 'UnitC', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:40:33', '2019-02-01 08:40:33'),
(42, 2, 'UnitD', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:41:03', '2019-02-01 08:41:03'),
(43, 2, 'UnitE', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:41:24', '2019-02-01 08:41:24'),
(44, 2, 'UnitF', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:41:49', '2019-02-01 08:41:49'),
(45, 2, 'UnitG', '', 4230, 1400, 1, 1, 11, NULL, 0, '2019-02-01 08:42:38', '2019-02-01 08:42:38'),
(46, 2, 'UnitH', '', 1, 1, 1, 1, 11, NULL, 1, '2019-02-01 08:43:12', '2019-02-01 08:43:12'),
(47, 2, 'UnitI', '', 3915, 1356, 1, 1, 11, NULL, 0, '2019-02-01 08:44:10', '2019-02-01 08:44:10'),
(48, 2, 'UnitA', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:45:14', '2019-02-01 08:45:14'),
(49, 2, 'UnitB', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:45:37', '2019-02-01 08:45:37'),
(50, 2, 'UnitC', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:45:59', '2019-02-01 08:45:59'),
(51, 2, 'UnitD', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:46:19', '2019-02-01 08:46:19'),
(52, 2, 'UnitE', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:46:45', '2019-02-01 08:46:45'),
(53, 2, 'UnitF', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:47:11', '2019-02-01 08:47:11'),
(54, 2, 'UnitG', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:48:07', '2019-02-01 08:48:07'),
(55, 2, 'UnitH', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:48:49', '2019-02-01 08:48:49'),
(56, 2, 'UnitI', '', 1, 1, 1, 1, 10, NULL, 1, '2019-02-01 08:49:10', '2019-02-01 08:49:10'),
(57, 2, 'UnitA', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:51:46', '2019-02-01 08:51:46'),
(58, 2, 'UnitB', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:52:09', '2019-02-01 08:52:09'),
(59, 2, 'UnitC', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:52:31', '2019-02-01 08:52:31'),
(60, 2, 'UnitD', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:53:03', '2019-02-01 08:53:03'),
(61, 2, 'UnitE', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:53:37', '2019-02-01 08:53:37'),
(62, 2, 'UnitF', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:53:54', '2019-02-01 08:53:54'),
(63, 2, 'UnitG', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:54:14', '2019-02-01 08:56:25'),
(64, 2, 'UnitH', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:54:37', '2019-02-01 08:56:43'),
(65, 2, 'UnitI', '', 1, 1, 1, 1, 9, NULL, 1, '2019-02-01 08:57:04', '2019-02-01 08:57:04'),
(66, 2, 'UnitA', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 08:57:55', '2019-02-01 08:57:55'),
(67, 2, 'UnitB', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 08:58:19', '2019-02-01 08:58:19'),
(68, 2, 'UnitC', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 08:58:50', '2019-02-01 08:58:50'),
(69, 2, 'UnitE', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 08:59:47', '2019-02-01 08:59:47'),
(70, 2, 'UnitF', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 09:00:06', '2019-02-01 09:00:06'),
(71, 2, 'UnitG', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 09:00:35', '2019-02-01 09:00:35'),
(72, 2, 'UnitH', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 09:00:57', '2019-02-01 09:00:57'),
(73, 2, 'UnitI', '', 3915, 1, 1, 1, 8, NULL, 0, '2019-02-01 09:01:34', '2019-02-01 09:02:54'),
(74, 2, 'UnitD', '', 1, 1, 1, 1, 8, NULL, 1, '2019-02-01 09:02:28', '2019-02-01 09:02:28'),
(75, 2, 'UnitA', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:05:03', '2019-02-01 09:05:24'),
(76, 2, 'UnitB', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:05:44', '2019-02-01 09:05:44'),
(77, 2, 'UnitC', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:06:12', '2019-02-01 09:06:12'),
(78, 2, 'UnitD', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:06:30', '2019-02-01 09:06:30'),
(79, 2, 'UnitE', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:06:49', '2019-02-01 09:06:49'),
(80, 2, 'UnitF', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:07:39', '2019-02-01 09:07:39'),
(81, 2, 'UnitG', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:07:57', '2019-02-01 09:07:57'),
(82, 2, 'UnitH', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:08:21', '2019-02-01 09:08:21'),
(83, 2, 'UnitI', '', 1, 1, 1, 1, 7, NULL, 1, '2019-02-01 09:08:49', '2019-02-01 09:08:49'),
(84, 2, 'UnitA', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:09:55', '2019-02-01 09:09:55'),
(85, 2, 'UnitB', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:10:12', '2019-02-01 09:10:12'),
(86, 2, 'UnitC', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:10:57', '2019-02-01 09:10:57'),
(87, 2, 'UnitD', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:11:21', '2019-02-01 09:11:21'),
(88, 2, 'UnitE', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:11:39', '2019-02-01 09:11:39'),
(89, 2, 'UnitF', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:12:00', '2019-02-01 09:12:00'),
(90, 2, 'UnitG', '', 1, 1, 1, 1, 6, NULL, 1, '2019-02-01 09:12:26', '2019-02-01 09:12:26'),
(91, 2, 'UnitH', '', 4992, 1, 1, 1, 6, NULL, 0, '2019-02-01 09:13:38', '2019-02-01 09:13:38'),
(92, 2, 'UnitI', '', 4285, 1443, 1, 1, 6, NULL, 0, '2019-02-01 09:14:30', '2019-02-01 09:14:30'),
(93, 2, 'UnitA', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:15:27', '2019-02-01 09:15:27'),
(94, 2, 'UnitB', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:16:15', '2019-02-01 09:16:15'),
(95, 2, 'UnitC', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:16:42', '2019-02-01 09:16:42'),
(96, 2, 'UnitD', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:17:06', '2019-02-01 09:17:06'),
(97, 2, 'UnitE', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:17:26', '2019-02-01 09:17:26'),
(98, 2, 'UnitF', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:17:44', '2019-02-01 09:17:44'),
(99, 2, 'UnitG', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:18:01', '2019-02-01 09:18:01'),
(100, 2, 'UnitH', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:18:26', '2019-02-01 09:18:55'),
(101, 2, 'UnitI', '', 1, 1, 1, 1, 5, NULL, 1, '2019-02-01 09:19:34', '2019-02-01 09:19:34'),
(102, 2, 'UnitA', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:20:18', '2019-02-01 09:20:18'),
(103, 2, 'UnitB', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:20:37', '2019-02-01 09:20:37'),
(104, 2, 'UnitC', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:20:56', '2019-02-01 09:20:56'),
(105, 2, 'UnitD', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:21:18', '2019-02-01 09:21:18'),
(106, 2, 'UnitE', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:21:54', '2019-02-01 09:21:54'),
(107, 2, 'UnitF', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:22:20', '2019-02-01 09:22:20'),
(108, 2, 'UnitG', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:22:39', '2019-02-01 09:22:39'),
(109, 2, 'UnitH', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:23:06', '2019-02-01 09:23:06'),
(110, 2, 'UnitI', '', 1, 1, 1, 1, 4, NULL, 1, '2019-02-01 09:23:27', '2019-02-01 09:23:27'),
(111, 2, 'UnitA', '', 6199, 1970, 1, 1, 3, NULL, 1, '2019-02-01 09:25:45', '2019-02-01 09:25:45'),
(112, 2, 'UnitB', '', 1, 1, 1, 1, 3, NULL, 1, '2019-02-01 09:26:18', '2019-02-01 09:26:18'),
(113, 2, 'UnitC', '', 1, 1, 1, 1, 3, NULL, 1, '2019-02-01 09:26:36', '2019-02-01 09:26:36'),
(114, 2, 'UnitD', '', 1, 1, 1, 1, 3, NULL, 1, '2019-02-01 09:26:55', '2019-02-01 09:32:02'),
(115, 2, 'UnitE', '', 1, 1, 1, 1, 3, NULL, 1, '2019-02-01 09:27:16', '2019-02-01 09:27:16'),
(116, 2, 'UnitF', '', 4576, 1541, 1, 1, 3, NULL, 0, '2019-02-01 09:28:13', '2019-02-01 09:28:13'),
(117, 2, 'UnitG', '', 4520, 1522, 1, 1, 3, NULL, 0, '2019-02-01 09:29:06', '2019-02-01 09:29:06'),
(118, 2, 'UnitH', '', 4992, 1681, 1, 1, 3, NULL, 0, '2019-02-01 09:30:13', '2019-02-01 09:30:13'),
(119, 2, 'UnitI', '', 4285, 1443, 1, 1, 3, NULL, 1, '2019-02-01 09:31:08', '2019-02-01 09:31:08'),
(120, 2, 'UnitA', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:33:04', '2019-02-01 09:33:04'),
(121, 2, 'UnitB', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:33:26', '2019-02-01 09:33:26'),
(122, 2, 'UnitC', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:34:08', '2019-02-01 09:34:08'),
(123, 2, 'UnitD', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:34:32', '2019-02-01 09:34:32'),
(125, 2, 'UnitE', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:35:07', '2019-02-01 09:35:07'),
(126, 2, 'UnitF', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:35:37', '2019-02-01 09:35:37'),
(127, 2, 'UnitG', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:35:56', '2019-02-01 09:35:56'),
(128, 2, 'UnitH', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:36:24', '2019-02-01 09:36:24'),
(129, 2, 'UnitI', '', 1, 1, 1, 1, 2, NULL, 1, '2019-02-01 09:36:42', '2019-02-01 09:36:42'),
(130, 2, 'UnitA', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:43:58', '2019-02-01 09:43:58'),
(131, 2, 'UnitB', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:44:13', '2019-02-01 09:44:13'),
(132, 2, 'UnitC', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:44:28', '2019-02-01 09:44:28'),
(133, 2, 'UnitD', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:44:43', '2019-02-01 09:44:43'),
(134, 2, 'UnitE', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:45:02', '2019-02-01 09:45:02'),
(135, 2, 'UnitF', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:45:17', '2019-02-01 09:45:17'),
(136, 2, 'UnitH', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:45:33', '2019-02-01 09:45:51'),
(137, 2, 'UnitG', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:45:33', '2019-02-01 09:45:33'),
(138, 2, 'UnitI', '', 1, 1, 1, 1, 1, NULL, 1, '2019-02-01 09:46:06', '2019-02-01 09:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_room_features`
--

CREATE TABLE `rooms_room_features` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `room_feature_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms_room_features`
--

INSERT INTO `rooms_room_features` (`id`, `room_id`, `room_feature_id`, `created_at`, `updated_at`) VALUES
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'TV Console', '', '2019-02-06 05:33:51', '2019-02-06 05:33:51'),
(4, 'Kitchen Cabinet', '', '2019-02-06 05:34:18', '2019-02-06 05:34:18'),
(5, 'Kitchen Appliances', '', '2019-02-06 05:34:48', '2019-02-06 05:34:48'),
(6, 'Wadrobe', '', '2019-02-06 05:35:08', '2019-02-06 05:35:08'),
(7, 'Air-conditioning', '', '2019-02-06 05:35:37', '2019-02-06 05:35:37'),
(8, 'Hot Water Supply', '', '2019-02-06 05:35:53', '2019-02-06 05:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `room_image`
--

CREATE TABLE `room_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_image`
--

INSERT INTO `room_image` (`id`, `room_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 138, '/uploads/roomimage/2019/2/1549364308_CIA6UK.jpg', '2019-02-05 10:27:53', '2019-02-05 10:58:28'),
(2, 138, '/uploads/roomimage/2019/2/1549362598_ExdYVS.jpg', '2019-02-05 10:29:58', '2019-02-05 10:29:58'),
(4, 138, '/uploads/roomimage/2019/2/1549362646_XHs5L9.jpg', '2019-02-05 10:30:46', '2019-02-05 10:30:46'),
(10, 138, '/uploads/roomimage/2019/2/1549364522_htGuDJ.jpg', '2019-02-05 11:01:40', '2019-02-05 11:02:02'),
(11, 138, '/uploads/roomimage/2019/2/1549364538_cy9KvF.jpg', '2019-02-05 11:02:18', '2019-02-05 11:02:18'),
(15, 3, '/uploads/roomimage/2019/2/1550658963_Tb2Hvr.jpg', '2019-02-21 00:06:09', '2019-02-21 00:06:09'),
(16, 3, '/uploads/roomimage/2019/2/1550658985_I4Dk9z.jpg', '2019-02-21 00:06:28', '2019-02-21 00:06:28'),
(17, 3, '/uploads/roomimage/2019/2/1550659008_nfA0pB.jpg', '2019-02-21 00:06:51', '2019-02-21 00:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `room_statuses`
--

CREATE TABLE `room_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` longtext COLLATE utf8mb4_unicode_ci,
  `google` longtext COLLATE utf8mb4_unicode_ci,
  `twitter` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `biography` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `phone`, `status`) VALUES
(1, 'Minn Paing Soe', 'admin@gmail.com', '$2y$10$i8Y/kSP4EdKSI8WkiLE1tuVcMgGLV.GXW8XFpLmSgGulheHCgh2xO', 'admin', '6TFKe61GRlcnUcq3FGzYCvfxS4UXWyzgp8zjNzmaNNTYCMbKR9sw4sCqdAu9', '2019-01-31 07:00:00', NULL, '', 0),
(2, 'Si Thu San', 'sithusan@gmail.com', '$2y$10$GC9yQDRPg3QdmWsc77T31eq0pEUxX/SGF72SxDLb1TjbBCrcT6x0e', 'admin', 'moYsdqxy9ELTNPYfkLLRpY0pALVEE1y2gr9CVQ8IKxtxomZCtEbzP2ouk5Cd', '2019-02-06 08:46:47', '2019-02-06 08:46:47', '095672232', 0),
(12, 'Ag Wy Oo', 'ag@gmail.com', '$2y$10$OojgviG26qGEE3ftktU/4uAuZv9K5qpJK7cL8XCfSVWyByReFCygO', 'customer', 'CpzWltsHghrOfLsVXPq5JKu7CU9JnDkopwO0UQ0igLguZiVoQttHnNOCscnT', '2019-02-11 05:09:37', '2019-02-11 05:09:37', '09345677121', 0),
(38, 'Myo Thiha', 'myothiha576@gmail.com', '$2y$10$4Yw7lbeEYP4NRjo.wGgOVua5HCAx/Z.vkgtsWcw8EIl1YROz1KAa6', 'customer', 'zfif6EcKmCaibQ6yHI2MFavnGf4wCwFpdzR6c9H9iSOz50ZRMQHrOfkih5Jl', '2019-02-21 16:22:41', '2019-02-21 16:22:41', '9449249556', 0);

-- --------------------------------------------------------

--
-- Table structure for table `whychooses`
--

CREATE TABLE `whychooses` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooses`
--

INSERT INTO `whychooses` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-pencil-alt', 'INNOVATION', '', '2019-01-31 08:29:13', '2019-01-31 08:29:13'),
(2, 'fas fa-handshake', 'COMMITMENT', '', '2019-01-31 08:30:07', '2019-01-31 08:30:07'),
(3, 'fas fa-balance-scale', 'INTEGRITY', '', '2019-01-31 08:31:41', '2019-01-31 08:31:41'),
(4, 'fas fa-dumbbell', 'RESPONSIBILITY', '', '2019-01-31 08:32:42', '2019-01-31 08:32:42'),
(5, 'fas fa-key', 'SINCERITY', '', '2019-01-31 08:33:23', '2019-01-31 08:33:23'),
(6, 'fas fa-check-circle', 'HONESTY', '', '2019-01-31 08:34:49', '2019-01-31 08:34:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogimages`
--
ALTER TABLE `blogimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogimages_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tag_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `bookingusers`
--
ALTER TABLE `bookingusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businessimages`
--
ALTER TABLE `businessimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businessimages_business_id_foreign` (`business_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csrimages`
--
ALTER TABLE `csrimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `csrimages_csr_id_foreign` (`csr_id`);

--
-- Indexes for table `csrs`
--
ALTER TABLE `csrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_plans`
--
ALTER TABLE `floor_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `floor_plans_room_id_foreign` (`room_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslides`
--
ALTER TABLE `homeslides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexdatas`
--
ALTER TABLE `indexdatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_facilities`
--
ALTER TABLE `project_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_files`
--
ALTER TABLE `project_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_files_project_id_foreign` (`project_id`);

--
-- Indexes for table `project_project_facilities`
--
ALTER TABLE `project_project_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_project_facilities_project_id_foreign` (`project_id`),
  ADD KEY `project_project_facilities_project_facilities_id_foreign` (`project_facilities_id`);

--
-- Indexes for table `project_statuses`
--
ALTER TABLE `project_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_project_id_foreign` (`project_id`);

--
-- Indexes for table `rooms_room_features`
--
ALTER TABLE `rooms_room_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_room_features_room_id_foreign` (`room_id`),
  ADD KEY `rooms_room_features_room_feature_id_foreign` (`room_feature_id`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_image`
--
ALTER TABLE `room_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_image_room_id_foreign` (`room_id`);

--
-- Indexes for table `room_statuses`
--
ALTER TABLE `room_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whychooses`
--
ALTER TABLE `whychooses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogimages`
--
ALTER TABLE `blogimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookingusers`
--
ALTER TABLE `bookingusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `businessimages`
--
ALTER TABLE `businessimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csrimages`
--
ALTER TABLE `csrimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csrs`
--
ALTER TABLE `csrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floor_plans`
--
ALTER TABLE `floor_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeslides`
--
ALTER TABLE `homeslides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `indexdatas`
--
ALTER TABLE `indexdatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_facilities`
--
ALTER TABLE `project_facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_files`
--
ALTER TABLE `project_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_project_facilities`
--
ALTER TABLE `project_project_facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_statuses`
--
ALTER TABLE `project_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `rooms_room_features`
--
ALTER TABLE `rooms_room_features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_image`
--
ALTER TABLE `room_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room_statuses`
--
ALTER TABLE `room_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `whychooses`
--
ALTER TABLE `whychooses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogimages`
--
ALTER TABLE `blogimages`
  ADD CONSTRAINT `blogimages_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `businessimages`
--
ALTER TABLE `businessimages`
  ADD CONSTRAINT `businessimages_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `csrimages`
--
ALTER TABLE `csrimages`
  ADD CONSTRAINT `csrimages_csr_id_foreign` FOREIGN KEY (`csr_id`) REFERENCES `csrs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `floor_plans`
--
ALTER TABLE `floor_plans`
  ADD CONSTRAINT `floor_plans_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_files`
--
ALTER TABLE `project_files`
  ADD CONSTRAINT `project_files_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_project_facilities`
--
ALTER TABLE `project_project_facilities`
  ADD CONSTRAINT `project_project_facilities_project_facilities_id_foreign` FOREIGN KEY (`project_facilities_id`) REFERENCES `project_facilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_project_facilities_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms_room_features`
--
ALTER TABLE `rooms_room_features`
  ADD CONSTRAINT `rooms_room_features_room_feature_id_foreign` FOREIGN KEY (`room_feature_id`) REFERENCES `room_features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rooms_room_features_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `room_image`
--
ALTER TABLE `room_image`
  ADD CONSTRAINT `room_image_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
