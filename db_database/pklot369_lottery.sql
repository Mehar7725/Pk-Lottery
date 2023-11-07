-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2023 at 03:17 PM
-- Server version: 10.5.22-MariaDB-cll-lve-log
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pklot369_lottery`
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
(4, 'Easy Paisa', 'Amra Ram', '03430812655', '2023-11-06 02:47:34', '2023-11-06 02:47:34');

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
(3, '2b765a02699a1218c637ffc7bf88e69e.jpg', '2023-11-05 18:58:47', '2023-11-05 18:58:47'),
(4, 'IMG-20231103-WA0000.jpg', '2023-11-05 19:00:26', '2023-11-05 19:00:26'),
(5, 'IMG-20231103-WA0001.jpg', '2023-11-05 19:01:40', '2023-11-05 19:01:40'),
(6, 'd1c305e937910a7b0bb717778d838880.jpg', '2023-11-07 11:28:24', '2023-11-07 11:28:24'),
(7, '5550e364e34ed8195d2124a5b357f64a.jpg', '2023-11-07 11:29:03', '2023-11-07 11:29:03'),
(8, 'Commercial-beef-cattle-scaled.jpg', '2023-11-07 11:29:31', '2023-11-07 11:29:31'),
(9, 'default.jpg', '2023-11-07 11:30:39', '2023-11-07 11:30:39');

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
(1, 'Arslan', 'Ch', '3130262341213', '00000002', '8', 'Got', '123719713-vector-illustration-of-cartoon-arab-muslim-boy-with-a-goat-removebg-preview.png', '3', 'Legend ch', '03000187878', '2023-11-06', NULL, NULL, '21 chak', '300', '3000', '2024-11-06', '0', 1, 2, '2023-11-05 19:16:16', '2023-11-06 10:00:43'),
(2, 'Arslan', 'Ch', '3130262341213', '00000004', '10', 'Riksha', '5058710-middle-removebg-preview.png', '3', 'Legend ch', '03000187878', '2023-11-06', NULL, NULL, '21 chak', '1000', '30000', '2025-01-01', '10', 1, 1, '2023-11-05 19:18:11', '2023-11-06 10:01:40');

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
(1, 'Picsart_23-10-18_14-31-51-814-removebg-preview.png', 'Picsart_23-10-25_11-34-30-423.jpg', 'https://youtu.be/3755hXA7nYU?si=MNcWqie7acQ3RuAv', 'https://www.instagram.com/', 'channel/0029VaCmbd71XqueNoHSTj1w', '2023-10-31 16:12:40', '2023-11-05 19:06:57');

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
(2, 'Mubashir Ali', 'mubashir@gmail.com', '344324323', 'info not get for my lottery claim', '2023-10-25 04:39:46', '2023-10-25 04:39:46'),
(3, 'Imtiaz Ali', 'chimtiazar42@gmail.com', '3130241298399', 'No', '2023-11-06 02:22:24', '2023-11-06 02:22:24');

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
(7, '01', 'Hen', '100', 'vector-happy-white-chicken-removebg-preview.png', '2024-11-06', '500000', '500000', '20', '1200', '2023-11-05 19:09:01', '2023-11-06 10:00:24'),
(8, '02', 'Got', '300', '123719713-vector-illustration-of-cartoon-arab-muslim-boy-with-a-goat-removebg-preview.png', '2024-11-06', '500000', '499999', '15', '3000', '2023-11-05 19:10:51', '2023-11-06 10:00:43'),
(9, '03', 'Cow', '1000', 'cow-smiling-cartoon-vector-illustration_96037-417-removebg-preview.png', '2024-11-06', '50000', '50000', '10', '5000', '2023-11-05 19:12:08', '2023-11-06 10:01:06'),
(10, '04', 'Riksha', '1000', '5058710-middle-removebg-preview.png', '2025-01-01', '500000', '499999', '10', '30000', '2023-11-05 19:13:28', '2023-11-06 10:01:40');

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
(1, '3', '2023-11-05', 'Arslan', 'Ch', '3130262341213', '2023-11-06', '21 chak', '00000002', 'Got', '0', 1, '2023-11-05 19:16:16', '2023-11-05 19:17:31'),
(2, '3', '2023-11-05', 'Arslan', 'Ch', '3130262341213', '2023-11-06', '21 chak', '00000004', 'Riksha', '10', 1, '2023-11-05 19:18:11', '2023-11-05 19:18:41');

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
(1, 'Mubashir Ali', 'Mustafa', '354031234567', '2023-10-12', 'download.jpg', 'Lahore Punjab', NULL, NULL, '$2y$10$q46zpsCtboyJ33auaYcA0e7Tg1ujIWND7nghkU0gXyoAxS7DoYcgG', 2, NULL, '2023-10-25 07:56:12', '2023-10-28 11:06:23'),
(3, 'Legend ch', 'M Ramzan', '03000187878', '1988-09-12', 'IMG_20231026_203127_630.jpg', 'Lahore', NULL, NULL, '$2y$10$Sn3l7eXRxaJ4u2zNIlH6XOjKz05yXL7RLVn/1KyZAIjQCJXZCL/Ki', 1, NULL, '2023-11-05 19:03:31', '2023-11-05 19:03:31'),
(4, 'Arslan', 'Ch', '3130262341213', '2023-11-06', NULL, '21 chak', '3', NULL, NULL, 0, NULL, '2023-11-05 19:16:16', '2023-11-05 19:16:16'),
(5, 'Imtiaz Ali', 'Shokat Ali', '3130241298399', '1998-01-01', NULL, '45 chal LQP', NULL, NULL, '$2y$10$VuaYLVrnYDa8ut/fr.lwIeWlRoRl2Cziwp1kmZHaPL/dj/N1H3EFi', 1, NULL, '2023-11-06 02:12:12', '2023-11-06 02:12:12'),
(6, 'Rabia Bajwa', 'Shabir Ahmad', '3450174963588', '2005-07-12', NULL, 'Narowal', NULL, NULL, '$2y$10$dw70FL/OxQ8KzDDom53iVe1NzLi60hJbwr8kfbsfLvY9sv41ipgRW', 1, NULL, '2023-11-06 02:58:26', '2023-11-06 02:58:26'),
(7, 'Fatima Bibi', 'Hameed Ullah', '3130450655830', '2005-05-12', NULL, 'SQB', NULL, NULL, '$2y$10$UJeE1X0Aoqxom93KtJpq7OW31bT8MegjfYXqCyzftP.YQAhuous/C', 1, NULL, '2023-11-06 03:06:09', '2023-11-06 05:28:11'),
(8, 'Usman', 'Arshad', '3130274064905', '2003-12-04', NULL, '21chak', NULL, NULL, '$2y$10$6iSwDBJsqOlWFAwMinZfDeX6lLU4RWgcfrVffLr6tUMNRNP0rIQVO', 1, NULL, '2023-11-06 03:47:29', '2023-11-06 03:47:29'),
(9, 'Ahmad', 'Tanveer', '3130226482337', '2004-04-05', NULL, '31 chak LQP', NULL, NULL, '$2y$10$vRIEV0ckfKW27fjO.0z9qegGnEwhN/D3RqrzbCOTHXwbslf7b9Zj2', 1, NULL, '2023-11-06 05:31:48', '2023-11-06 05:31:48'),
(10, 'Rehman ch', 'M Iqbal', '03419713780', '2008-01-20', NULL, '21chak LQP', NULL, NULL, '$2y$10$aG1wV.wDiY9wkk.oAmR8/OFdiH6sgnIxx4lVQo/vVxXOa7KuLrRCW', 1, NULL, '2023-11-06 09:52:33', '2023-11-06 09:52:33');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buy_lotteries`
--
ALTER TABLE `buy_lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `claim_lotteries`
--
ALTER TABLE `claim_lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lotteries`
--
ALTER TABLE `lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
