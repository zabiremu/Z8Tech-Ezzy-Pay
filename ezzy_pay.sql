-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2023 at 01:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezzy_pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `converts`
--

CREATE TABLE `converts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_e_o_s`
--

CREATE TABLE `c_e_o_s` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_o_e_s`
--

CREATE TABLE `c_o_e_s` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_bonus_times`
--

CREATE TABLE `daily_bonus_times` (
  `id` bigint UNSIGNED NOT NULL,
  `daily_run_begin` datetime NOT NULL,
  `daily_run_end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_bonus_times`
--

INSERT INTO `daily_bonus_times` (`id`, `daily_run_begin`, `daily_run_end`, `created_at`, `updated_at`) VALUES
(1, '2023-09-21 01:32:05', '2023-09-20 00:00:00', '2023-09-20 19:32:05', '2023-09-20 19:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `ezzy_directories`
--

CREATE TABLE `ezzy_directories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ezzy_executives`
--

CREATE TABLE `ezzy_executives` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ezzy_leaders`
--

CREATE TABLE `ezzy_leaders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ezzy_managers`
--

CREATE TABLE `ezzy_managers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ezzy_members`
--

CREATE TABLE `ezzy_members` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ezzy_rewards`
--

CREATE TABLE `ezzy_rewards` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ezzyMember` int NOT NULL DEFAULT '0',
  `ezzLeader` int NOT NULL DEFAULT '0',
  `ezzyManger` int NOT NULL DEFAULT '0',
  `ezzyexc` int NOT NULL DEFAULT '0',
  `ezzyDrec` int NOT NULL DEFAULT '0',
  `coe` int NOT NULL DEFAULT '0',
  `ceo` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initail_step_for_ezzy_executives`
--

CREATE TABLE `initail_step_for_ezzy_executives` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initial_step_for_ezzy_leaders`
--

CREATE TABLE `initial_step_for_ezzy_leaders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initial_step_for_ezzy_mangers`
--

CREATE TABLE `initial_step_for_ezzy_mangers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initial_step_for_ranks`
--

CREATE TABLE `initial_step_for_ranks` (
  `id` bigint UNSIGNED NOT NULL,
  `master_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intial_c_e_o_s`
--

CREATE TABLE `intial_c_e_o_s` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intial_c_o_e_s`
--

CREATE TABLE `intial_c_o_e_s` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intial_ezzy_directories`
--

CREATE TABLE `intial_ezzy_directories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_one_to_fifteens`
--

CREATE TABLE `level_one_to_fifteens` (
  `id` bigint UNSIGNED NOT NULL,
  `level_1` bigint UNSIGNED DEFAULT NULL,
  `level_2` bigint UNSIGNED DEFAULT NULL,
  `level_3` bigint UNSIGNED DEFAULT NULL,
  `level_4` bigint UNSIGNED DEFAULT NULL,
  `level_5` bigint UNSIGNED DEFAULT NULL,
  `level_6` bigint UNSIGNED DEFAULT NULL,
  `level_7` bigint UNSIGNED DEFAULT NULL,
  `level_8` bigint UNSIGNED DEFAULT NULL,
  `level_9` bigint UNSIGNED DEFAULT NULL,
  `level_10` bigint UNSIGNED DEFAULT NULL,
  `level_11` bigint UNSIGNED DEFAULT NULL,
  `level_12` bigint UNSIGNED DEFAULT NULL,
  `level_13` bigint UNSIGNED DEFAULT NULL,
  `level_14` bigint UNSIGNED DEFAULT NULL,
  `level_15` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_10_112153_create_wallets_table', 1),
(7, '2023_09_10_145634_create_send_money_table', 1),
(8, '2023_09_14_092902_create_initial_step_for_ranks_table', 1),
(9, '2023_09_14_100052_create_ezzy_members_table', 1),
(10, '2023_09_14_101228_create_initial_step_for_ezzy_leaders_table', 1),
(11, '2023_09_14_105824_create_ezzy_leaders_table', 1),
(12, '2023_09_14_112047_create_initial_step_for_ezzy_mangers_table', 1),
(13, '2023_09_14_113233_create_ezzy_managers_table', 1),
(14, '2023_09_14_173957_create_ezzy_executives_table', 1),
(15, '2023_09_14_174225_create_initail_step_for_ezzy_executives_table', 1),
(16, '2023_09_14_175927_create_ezzy_directories_table', 1),
(17, '2023_09_14_175956_create_intial_ezzy_directories_table', 1),
(18, '2023_09_14_182023_create_c_o_e_s_table', 1),
(19, '2023_09_14_182034_create_intial_c_o_e_s_table', 1),
(20, '2023_09_14_184127_create_c_e_o_s_table', 1),
(21, '2023_09_14_184137_create_intial_c_e_o_s_table', 1),
(22, '2023_09_15_035911_create_ezzy_rewards_table', 1),
(23, '2023_09_15_164335_create_level_one_to_fifteens_table', 1),
(24, '2023_09_16_114027_create_settings_table', 1),
(25, '2023_09_16_134419_create_send_money_for_friends_table', 1),
(26, '2023_09_16_150447_create_converts_table', 1),
(27, '2023_09_16_154532_create_with_draws_table', 1),
(28, '2023_09_17_064152_create_transcitions_table', 1),
(29, '2023_09_20_212507_create_project_date_times_table', 1),
(30, '2023_09_20_215021_create_daily_bonus_times_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_date_times`
--

CREATE TABLE `project_date_times` (
  `id` bigint UNSIGNED NOT NULL,
  `project_date_begin` datetime NOT NULL,
  `project_date_end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_date_times`
--

INSERT INTO `project_date_times` (`id`, `project_date_begin`, `project_date_end`, `created_at`, `updated_at`) VALUES
(1, '2023-05-06 03:34:30', '2026-05-06 03:34:30', '2023-09-20 19:32:05', '2023-09-20 19:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `send_money`
--

CREATE TABLE `send_money` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `user_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tranx_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_money`
--

INSERT INTO `send_money` (`id`, `type`, `balance_type`, `user_id`, `user_number`, `send_amount`, `tranx_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nogod', NULL, 1, '01833086035', '1400', '123456789', 1, '2023-09-20 19:32:05', '2023-09-20 19:32:05'),
(2, 'Nogod', NULL, 2, '01833086035', '1400', '123456789', 1, '2023-09-20 19:32:05', '2023-09-20 19:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `send_money_for_friends`
--

CREATE TABLE `send_money_for_friends` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `master_id` bigint UNSIGNED DEFAULT NULL,
  `send_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tpin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `marquee_notice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_time_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_time_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_deposit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_transaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_exchange` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trc20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ezzy_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ezzy_leader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CEO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration` int DEFAULT NULL,
  `nogodPhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `marquee_notice`, `withdraw_time_close`, `withdraw_time_open`, `minimum_deposit`, `minimum_transaction`, `minimum_exchange`, `trc20`, `n_a`, `transaction_charge`, `decimal`, `withdraw_charge`, `maximum_withdraw`, `minimum_withdraw`, `ezzy_member`, `ezzy_leader`, `manager`, `executive`, `director`, `COE`, `CEO`, `registration`, `nogodPhoneNumber`, `created_at`, `updated_at`) VALUES
(1, 'Well come to OCEAN TOUCH.', '24 hours', '23.59', '21', '1', '1', '1', '3029255d18c261228d4aadd04fd18af8d12fe9496276ad636581d059fee9d8cf33cd95d9e6f938a42ae482f5b5eb14e886e3e4e5e508dfdc5c64d06ab2a23fcdrRuzZfKjFWM', '0', '2', '100', '500', '50', '500', '2000', '10000', '35000', '700000', '150000', '300000', 1400, '01923813381', '2023-09-20 19:32:05', '2023-09-20 19:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `transcitions`
--

CREATE TABLE `transcitions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `send_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_verified` tinyint NOT NULL DEFAULT '0',
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int NOT NULL DEFAULT '0',
  `is_users` int NOT NULL DEFAULT '1',
  `is_approved` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_no`, `t_pin`, `sponsor`, `rank`, `country`, `address`, `image`, `nid1`, `nid2`, `nid_verified`, `bank`, `email_verified_at`, `password`, `is_admin`, `is_users`, `is_approved`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super', 'admin', 'superadmin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '$2y$10$rs3GNA4TZ2QD4J7zl3H8dOmbbHy8yoD45qdVIX6YtSMkLNtRHEf3G', 1, 0, 1, NULL, '2023-09-20 19:32:05', '2023-09-20 19:32:05'),
(2, 'Jhon', 'doe', 'jhon-doe', 'user@gmail.com', NULL, NULL, 'super-admin', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '$2y$10$F3hKOTlaLt88CovQrv3w8O86Is8BLelymV/ZcXa4Q3m3cdEv0pe3S', 0, 1, 1, NULL, '2023-09-20 19:32:05', '2023-09-20 19:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `my_wallet` int DEFAULT NULL,
  `affiliate_income` int NOT NULL DEFAULT '0',
  `ezzy_return` int NOT NULL DEFAULT '0',
  `level_bonus` int NOT NULL DEFAULT '0',
  `ezzy_reward` int NOT NULL DEFAULT '0',
  `ezzy_royality` double NOT NULL DEFAULT '0',
  `group_bonus` int NOT NULL DEFAULT '0',
  `bonus` int NOT NULL DEFAULT '0',
  `booking_wallet` int DEFAULT NULL,
  `is_approved` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `my_wallet`, `affiliate_income`, `ezzy_return`, `level_bonus`, `ezzy_reward`, `ezzy_royality`, `group_bonus`, `bonus`, `booking_wallet`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-09-20 19:32:05', '2023-09-20 19:32:05'),
(2, 2, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-09-20 19:32:05', '2023-09-20 19:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `with_draws`
--

CREATE TABLE `with_draws` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `converts`
--
ALTER TABLE `converts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_e_o_s`
--
ALTER TABLE `c_e_o_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_o_e_s`
--
ALTER TABLE `c_o_e_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_bonus_times`
--
ALTER TABLE `daily_bonus_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ezzy_directories`
--
ALTER TABLE `ezzy_directories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ezzy_executives`
--
ALTER TABLE `ezzy_executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ezzy_leaders`
--
ALTER TABLE `ezzy_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ezzy_managers`
--
ALTER TABLE `ezzy_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ezzy_members`
--
ALTER TABLE `ezzy_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ezzy_rewards`
--
ALTER TABLE `ezzy_rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `initail_step_for_ezzy_executives`
--
ALTER TABLE `initail_step_for_ezzy_executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initial_step_for_ezzy_leaders`
--
ALTER TABLE `initial_step_for_ezzy_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initial_step_for_ezzy_mangers`
--
ALTER TABLE `initial_step_for_ezzy_mangers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initial_step_for_ranks`
--
ALTER TABLE `initial_step_for_ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intial_c_e_o_s`
--
ALTER TABLE `intial_c_e_o_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intial_c_o_e_s`
--
ALTER TABLE `intial_c_o_e_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intial_ezzy_directories`
--
ALTER TABLE `intial_ezzy_directories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_one_to_fifteens`
--
ALTER TABLE `level_one_to_fifteens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `project_date_times`
--
ALTER TABLE `project_date_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_money`
--
ALTER TABLE `send_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_money_for_friends`
--
ALTER TABLE `send_money_for_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transcitions`
--
ALTER TABLE `transcitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `with_draws`
--
ALTER TABLE `with_draws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `converts`
--
ALTER TABLE `converts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_e_o_s`
--
ALTER TABLE `c_e_o_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_o_e_s`
--
ALTER TABLE `c_o_e_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_bonus_times`
--
ALTER TABLE `daily_bonus_times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ezzy_directories`
--
ALTER TABLE `ezzy_directories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ezzy_executives`
--
ALTER TABLE `ezzy_executives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ezzy_leaders`
--
ALTER TABLE `ezzy_leaders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ezzy_managers`
--
ALTER TABLE `ezzy_managers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ezzy_members`
--
ALTER TABLE `ezzy_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ezzy_rewards`
--
ALTER TABLE `ezzy_rewards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initail_step_for_ezzy_executives`
--
ALTER TABLE `initail_step_for_ezzy_executives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initial_step_for_ezzy_leaders`
--
ALTER TABLE `initial_step_for_ezzy_leaders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initial_step_for_ezzy_mangers`
--
ALTER TABLE `initial_step_for_ezzy_mangers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initial_step_for_ranks`
--
ALTER TABLE `initial_step_for_ranks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intial_c_e_o_s`
--
ALTER TABLE `intial_c_e_o_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intial_c_o_e_s`
--
ALTER TABLE `intial_c_o_e_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intial_ezzy_directories`
--
ALTER TABLE `intial_ezzy_directories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level_one_to_fifteens`
--
ALTER TABLE `level_one_to_fifteens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_date_times`
--
ALTER TABLE `project_date_times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_money`
--
ALTER TABLE `send_money`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `send_money_for_friends`
--
ALTER TABLE `send_money_for_friends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transcitions`
--
ALTER TABLE `transcitions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `with_draws`
--
ALTER TABLE `with_draws`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
