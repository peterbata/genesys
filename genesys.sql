-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2018 at 03:24 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genesys`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `lname`, `dob`, `notes`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Lucy', 'Amaral', '1958-05-21', 'Married to Jose Duarte', '2018-01-23 21:09:06', '2018-01-23 21:13:09', 1),
(2, 'Jose', 'Duarte', '1957-04-18', 'See Lucy Amaral Contract', '2018-01-23 21:14:54', '2018-01-29 04:02:57', 1),
(7, 'Sophie', 'Guelton', '1960-02-15', 'Belongs to user Doug Atkinson', '2018-01-30 00:10:03', '2018-01-30 00:38:19', 3),
(5, 'Nathalie', 'Dupuis', '1946-06-01', 'See Anna about Free transfer', '2018-01-29 21:07:51', '2018-01-29 21:07:51', 2),
(8, 'Robert', 'Falej', '1958-09-26', 'Belongs to user Doug Atkinson', '2018-01-30 00:10:35', '2018-01-30 00:10:35', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_23_155704_create_clients_table', 1),
(4, '2018_01_29_155804_add_user_id_to_clients', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anna Varanese', 'anna@atkinsoncorp.com', '$2y$10$Ps4HzZVkyfZL0hyevgxma.6WF/0I3OXjwQcZytF4GtPb0PqLFbcP6', 's68TRBQmz0fHethNkCi0D04ij2GeZBIdubiiyK1r3dB0vBP7bQrhAfI5mptV', '2018-01-29 19:52:59', '2018-01-29 19:52:59'),
(2, 'Cynthia Mazzaferro', 'cynthia@atkinsoncorp.com', '$2y$10$Pgt.OOTbnyr0NNpokYR9T.ouWAF1BWDD9ApOyMOU1DLgqYCLTiYrm', 'I3YfkVa8nKggzNTgoH6ypaHtutTppo9aVVrW8XetfWrClcyxjClqLME8tfi4', '2018-01-29 20:33:09', '2018-01-29 20:33:09'),
(3, 'Doug Atkinson', 'doug@atkinsoncorp.com', '$2y$10$H8G.tUrw8NruZHYOmsQUuepCDYVrPECdiPOJzr6A2NdbimVvkfwYi', 'e3gLPy3fI5L4R3DrRtqup0oS1TJIE3nzUEXhMAvMOaanaOxVRvsRnog3ZyBC', '2018-01-30 00:00:39', '2018-01-30 00:00:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
