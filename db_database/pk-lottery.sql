-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 07:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pk-lottery`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `holder_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `account_name`, `holder_name`, `account_number`, `created_at`, `updated_at`) VALUES
(1, 'EasyPysa', 'Mubashir Ali', '30001234567', '2023-11-01 04:58:23', '2023-11-01 05:34:05'),
(3, 'JazzCash', 'Mian Bishi', '30001134567', '2023-11-01 05:36:18', '2023-11-01 05:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'car_concept_threedimensional_133624_1366x768.jpg', '2023-11-03 13:33:38', '2023-11-03 13:33:38'),
(2, '3.jpg', '2023-11-03 13:33:47', '2023-11-03 13:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `buy_lotteries`
--

CREATE TABLE `buy_lotteries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `lottery_code` varchar(255) DEFAULT NULL,
  `lottery_id` varchar(255) DEFAULT NULL,
  `lottery_name` varchar(255) DEFAULT NULL,
  `lottery_image` varchar(255) DEFAULT NULL,
  `reffral_id` varchar(255) DEFAULT NULL,
  `reffral_name` varchar(255) DEFAULT NULL,
  `reffral_cnic` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `transaction_image` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `shipping_fee` varchar(255) DEFAULT NULL,
  `claim_date_time` date DEFAULT NULL,
  `partner_commission` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `payment_type` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_lotteries`
--

INSERT INTO `buy_lotteries` (`id`, `name`, `father_name`, `cnic`, `lottery_code`, `lottery_id`, `lottery_name`, `lottery_image`, `reffral_id`, `reffral_name`, `reffral_cnic`, `dob`, `transaction_image`, `transaction_id`, `address`, `price`, `shipping_fee`, `claim_date_time`, `partner_commission`, `status`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 'Mubashir Ali', 'Mustafa', '1234567892', '11', '2', 'Mining Minner', 'miner1.jpg', '2', 'Raza', '354031547852', '1994-11-12', 'buttons.png', '1199345621', 'Karachi', '400', NULL, '2023-11-01', '35', 1, 0, '2023-11-01 03:49:48', '2023-11-01 03:49:48'),
(2, 'Mubashir Ali', 'Mustafa', '1234567892', '002', '3', 'Laptop 11th generation', 'download (4).jpg', '2', 'Raza', '354031547852', '1994-12-11', 'buttons.png', '12345677442', 'Sargodah', '36000', NULL, '2023-11-01', '23', 2, 0, '2023-11-01 03:53:29', '2023-11-01 04:22:55'),
(3, 'Raza', 'Shehbaz', '3450678345672', '004', '5', 'Imported Makeup Kit', 'Fuji_Dash_Beauty_1x._SY304_CB432774351_.jpg', '2', 'Raza', '354031547852', '1989-07-07', 'buttons.png', '112211233432431', 'Lahore, Punjab', '19900', NULL, '2023-10-31', '24', 5, 0, '2023-11-01 03:59:42', '2023-11-01 04:25:46'),
(4, 'Abrar', 'Sabir', '12341234123', '004', '5', 'Imported Car Model', 'car_concept_threedimensional_133624_1366x768.jpg', '2', 'Raza', '354031547852', '1999-09-05', NULL, NULL, 'Multan', '19900', '4500', '2023-10-31', '24', 3, 1, '2023-11-03 09:09:46', '2023-11-05 13:16:05'),
(5, 'Zain', 'Goraya', '56454123276', '003', '4', 'Iphone Air port 2.0', '61f1YfTkTDL._AC_SX522_.jpg', '2', 'Raza', '354031547852', '1998-01-17', 'car_concept_threedimensional_133624_1366x768.jpg', '34556623363', 'Lahore Punjab', '1450', NULL, NULL, '17', 5, 0, '2023-11-03 09:11:27', '2023-11-03 10:15:32'),
(6, 'Mian', 'G', '8634556883', '003', '4', 'Iphone Air port 2.0', '61f1YfTkTDL._AC_SX522_.jpg', '2', 'Raza', '354031547852', '1997-01-04', NULL, NULL, 'Karachi', '1450', NULL, NULL, '0', 2, 2, '2023-11-03 09:12:23', '2023-11-03 10:15:28'),
(7, 'Faiz', 'Ahmed', '34543242332', '11', '2', 'Mining Minner', 'miner1.jpg', '2', 'Raza', '354031547852', '2005-05-12', NULL, NULL, 'Karachi', '400', NULL, NULL, '0', 1, 2, '2023-11-03 12:26:48', '2023-11-03 12:26:48'),
(8, 'Umair', 'Raza', '65342145678967', '003', '4', 'Iphone Air port 2.0', '61f1YfTkTDL._AC_SX522_.jpg', '2', 'Raza', '354031547852', '1999-11-12', NULL, NULL, 'Lahore, Punjab', '1450', '500', NULL, '17', 1, 1, '2023-11-05 13:23:23', '2023-11-05 13:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `claim_lotteries`
--

CREATE TABLE `claim_lotteries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buy_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `lottery_code` varchar(255) DEFAULT NULL,
  `lottery_id` varchar(255) DEFAULT NULL,
  `lottery_name` varchar(255) DEFAULT NULL,
  `lottery_image` varchar(255) DEFAULT NULL,
  `reffral_id` varchar(255) DEFAULT NULL,
  `reffral_name` varchar(255) DEFAULT NULL,
  `reffral_cnic` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `transaction_image` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `payment_type` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `claim_lotteries`
--

INSERT INTO `claim_lotteries` (`id`, `buy_id`, `name`, `father_name`, `cnic`, `lottery_code`, `lottery_id`, `lottery_name`, `lottery_image`, `reffral_id`, `reffral_name`, `reffral_cnic`, `dob`, `transaction_image`, `transaction_id`, `address`, `price`, `status`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, '2', 'Mubashir Ali', 'Mustafa', '1234567892', '002', '3', 'Laptop 11th generation', 'download (4).jpg', '2', 'Raza', '354031547852', '1994-12-11', 'buttons.png', '34342343', 'Sargodah', '36000', 1, 0, '2023-11-01 04:19:48', '2023-11-01 04:22:55'),
(2, '3', 'Raza', 'Shehbaz', '3450678345672', '004', '5', 'Imported Makeup Kit', 'Fuji_Dash_Beauty_1x._SY304_CB432774351_.jpg', '2', 'Raza', '354031547852', '1989-07-07', 'buttons.png', '1122434211121', 'Lahore, Punjab', '19900', 2, 0, '2023-11-01 04:25:26', '2023-11-01 04:25:46'),
(3, '6', 'Mian', 'G', '8634556883', '003', '4', 'Iphone Air port 2.0', '61f1YfTkTDL._AC_SX522_.jpg', '2', 'Raza', '354031547852', '1997-01-04', NULL, NULL, 'Karachi', '1450', 1, 1, '2023-11-03 10:14:22', '2023-11-03 10:15:28'),
(4, '5', 'Zain', 'Goraya', '56454123276', '003', '4', 'Iphone Air port 2.0', '61f1YfTkTDL._AC_SX522_.jpg', '2', 'Raza', '354031547852', '1998-01-17', 'car_concept_threedimensional_133624_1366x768.jpg', '454355423323', 'Lahore Punjab', '1450', 2, 0, '2023-11-03 10:15:17', '2023-11-03 10:15:32'),
(5, '4', 'Abrar', 'Sabir', '12341234123', '004', '5', 'Imported Car Model', 'car_concept_threedimensional_133624_1366x768.jpg', '2', 'Raza', '354031547852', '1999-09-05', NULL, NULL, 'Multan', '4500', 0, 2, '2023-11-05 13:16:05', '2023-11-05 13:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `add` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `logo`, `add`, `facebook`, `instagram`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'car-card.png', 'https://www.facebook.com/', 'https://www.instagram.com/', '923012345678', '2023-10-31 16:12:40', '2023-10-31 16:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `msg` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `cnic`, `msg`, `created_at`, `updated_at`) VALUES
(2, 'Mubashir Ali', 'mubashir@gmail.com', '344324323', 'info not get for my lottery claim', '2023-10-25 04:39:46', '2023-10-25 04:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lotteries`
--

CREATE TABLE `lotteries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `claim_date_time` date DEFAULT NULL,
  `total_lotteries` varchar(255) DEFAULT NULL,
  `remain_lotteries` varchar(255) DEFAULT NULL,
  `partner_commission` varchar(255) DEFAULT NULL,
  `shipping_fee` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lotteries`
--

INSERT INTO `lotteries` (`id`, `code`, `name`, `price`, `image`, `claim_date_time`, `total_lotteries`, `remain_lotteries`, `partner_commission`, `shipping_fee`, `created_at`, `updated_at`) VALUES
(1, '15', 'Oppo F21 Pro', '380', 'oppo.jpg', '2023-10-30', '800', '799', '20', NULL, '2023-10-25 14:57:55', '2023-10-28 06:16:13'),
(2, '11', 'Mining Minner', '400', 'miner1.jpg', '2023-10-29', '147', '143', '35', NULL, '2023-10-25 15:00:56', '2023-11-03 12:26:48'),
(3, '002', 'Laptop 11th generation', '36000', 'download (4).jpg', '2023-11-01', '37', '36', '23', '12000', '2023-11-01 03:46:18', '2023-11-05 13:02:32'),
(4, '003', 'Iphone Air port 2.0', '1450', '61f1YfTkTDL._AC_SX522_.jpg', '2023-11-10', '84', '81', '17', '500', '2023-11-01 03:47:17', '2023-11-05 13:23:23'),
(5, '004', 'Imported Car Model', '19900', 'car_concept_threedimensional_133624_1366x768.jpg', '2023-10-31', '14', '12', '24', '4500', '2023-11-01 03:48:03', '2023-11-05 13:02:59'),
(6, '005', 'Laptop Dell 11th generation, core i9, 32Gb RAM, 1Tb SSD Hard', '55000', 'download (5).jpg', '2023-12-10', '5', '5', '38', '25000', '2023-11-01 03:57:49', '2023-11-05 13:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_25_091253_create_contacts_table', 1),
(6, '2023_10_25_194003_create_lotteries_table', 2),
(7, '2023_10_26_074137_create_winners_table', 3),
(8, '2023_10_28_180145_create_buy_lotteries_table', 4),
(9, '2023_10_31_194658_create_company_details_table', 5),
(10, '2023_11_01_073351_create_claim_lotteries_table', 6),
(11, '2023_11_01_093912_create_account_details_table', 7),
(12, '2023_11_03_170908_create_partner_commissions_table', 8),
(13, '2023_11_03_171231_create_adds_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partner_commissions`
--

CREATE TABLE `partner_commissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lottery_code` varchar(255) DEFAULT NULL,
  `lottery_name` varchar(255) DEFAULT NULL,
  `commission` varchar(255) DEFAULT NULL,
  `status` tinyint(255) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_commissions`
--

INSERT INTO `partner_commissions` (`id`, `partner_id`, `date`, `name`, `father_name`, `cnic`, `dob`, `address`, `lottery_code`, `lottery_name`, `commission`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '2023-11-03', 'Raza', 'Shehbaz', '354031547852', '2004-05-13', 'Multan', '11', 'Mining Minner', '0', 1, '2023-11-03 12:26:48', '2023-11-03 13:03:42'),
(2, '2', '2023-11-05', 'Umair', 'Raza', '65342145678967', '1999-11-12', 'Lahore, Punjab', '003', 'Iphone Air port 2.0', '17', 0, '2023-11-05 13:23:23', '2023-11-05 13:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `reffral_id` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `father_name`, `cnic`, `dob`, `profile`, `address`, `reffral_id`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mubashir Ali', 'Mustafa', '354031234567', '2023-10-12', 'download.jpg', 'Lahore Punjab', NULL, NULL, '$2y$10$q46zpsCtboyJ33auaYcA0e7Tg1ujIWND7nghkU0gXyoAxS7DoYcgG', 2, NULL, '2023-10-25 02:56:12', '2023-10-28 06:06:23'),
(2, 'Raza', 'Shehbaz', '354031547852', '2004-05-13', 'wallpaperflare.com_wallpaper (3).jpg', 'Multan', NULL, NULL, '$2y$10$c6SCwT6gxGBDsiL1uFSB1epyoPiHgP7YtqNfGwbgAC9fGvfhT2hj2', 1, NULL, '2023-10-25 02:57:31', '2023-10-28 10:39:19'),
(3, 'Mubashir Ali', 'Mustafa', '1234567892', '1994-11-12', NULL, 'Karachi', '2', NULL, NULL, 0, NULL, '2023-11-01 03:49:47', '2023-11-01 03:49:47'),
(4, 'Raza', 'Shehbaz', '3450678345672', '1989-07-07', NULL, 'Lahore, Punjab', '2', NULL, NULL, 0, NULL, '2023-11-01 03:59:42', '2023-11-01 03:59:42'),
(5, 'Abrar', 'Sabir', '12341234123', '1999-09-05', NULL, 'Multan', '2', NULL, NULL, 0, NULL, '2023-11-03 09:09:46', '2023-11-03 09:09:46'),
(6, 'Zain', 'Goraya', '56454123276', '1998-01-17', NULL, 'Lahore Punjab', '2', NULL, NULL, 0, NULL, '2023-11-03 09:11:27', '2023-11-03 09:11:27'),
(7, 'Mian', 'G', '8634556883', '1997-01-04', NULL, 'Karachi', '2', NULL, NULL, 0, NULL, '2023-11-03 09:12:23', '2023-11-03 09:12:23'),
(8, 'Faiz', 'Ahmed', '34543242332', '2005-05-12', NULL, 'Karachi', '2', NULL, NULL, 0, NULL, '2023-11-03 12:26:48', '2023-11-03 12:26:48'),
(9, 'Umair', 'Raza', '65342145678967', '1999-11-12', NULL, 'Lahore, Punjab', '2', NULL, NULL, 0, NULL, '2023-11-05 13:23:23', '2023-11-05 13:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `winner_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `code`, `number`, `price`, `winner_name`, `image`, `address`, `created_at`, `updated_at`) VALUES
(1, '07', 'A349sd2', '760', 'Ali Raza', 'download (1).jpg', 'Islamabad', '2023-10-26 02:56:52', '2023-10-26 03:12:48'),
(2, '09', 'lg548', '1380', 'Mian Raza', 'download (3).jpg', 'Lahore Punjab', '2023-10-26 02:57:47', '2023-10-26 02:57:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_lotteries`
--
ALTER TABLE `buy_lotteries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buy_lotteries_transaction_id_unique` (`transaction_id`);

--
-- Indexes for table `claim_lotteries`
--
ALTER TABLE `claim_lotteries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `claim_lotteries_transaction_id_unique` (`transaction_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lotteries`
--
ALTER TABLE `lotteries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lotteries_code_unique` (`code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_commissions`
--
ALTER TABLE `partner_commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cnic_unique` (`cnic`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `winners_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buy_lotteries`
--
ALTER TABLE `buy_lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `claim_lotteries`
--
ALTER TABLE `claim_lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lotteries`
--
ALTER TABLE `lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `partner_commissions`
--
ALTER TABLE `partner_commissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
