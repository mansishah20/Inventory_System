-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patanjali`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_masters`
--

CREATE TABLE `category_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_masters`
--

INSERT INTO `category_masters` (`id`, `cname`, `created_at`, `updated_at`) VALUES
(1, 'Natural health care', '2021-05-31 12:25:29', '2021-06-15 08:05:59'),
(2, 'Natural Food Products', '2021-05-31 12:26:16', '2021-05-31 12:26:16'),
(3, 'Medicine', '2021-05-31 12:26:51', '2021-05-31 12:26:51'),
(4, 'Herbal Home Care', '2021-05-31 12:27:37', '2021-05-31 12:27:37'),
(5, 'Natural Process Care', '2021-06-09 18:30:00', '2021-06-09 18:30:00'),
(6, 'Fit India Category', '2021-06-09 18:30:00', '2021-06-09 18:30:00'),
(8, 'Patanjali Publication', '2021-06-15 00:00:41', '2021-06-15 00:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inward_registers`
--

CREATE TABLE `inward_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itemid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `expiredate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inward_registers`
--

INSERT INTO `inward_registers` (`id`, `itemid`, `pid`, `uid`, `quantity`, `price`, `expiredate`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 4000, 350, '0000-00-00 00:00:00', '2021-06-09 18:30:00', '2021-06-09 18:30:00'),
(2, 5, 1, 2, 5000, 20, '2021-06-29 18:30:00', '2021-06-01 18:30:00', '2021-06-01 18:30:00'),
(3, 6, 2, 2, 44343, 590, '2021-06-29 18:30:00', '2021-06-11 22:38:32', '2021-06-11 22:38:32'),
(4, 9, 1, 3, 4, 340, '2021-06-29 18:30:00', '2021-06-11 22:44:43', '2021-06-11 22:44:43'),
(5, 7, 2, 4, 7, 450, '2021-06-29 18:30:00', '2021-06-11 22:45:46', '2021-06-11 22:45:46'),
(6, 9, 2, 2, 8, 340, '2021-06-28 18:30:00', '2021-06-12 01:07:58', '2021-06-12 01:07:58'),
(7, 10, 2, 1, 20, 450, '2021-06-29 18:30:00', '2021-06-13 08:24:25', '2021-06-13 08:24:25'),
(8, 10, 1, 1, 20, 350, '2021-06-29 18:30:00', '2021-06-13 08:25:58', '2021-06-13 08:25:58'),
(9, 10, 1, 1, 20, 350, '2021-06-29 18:30:00', '2021-06-13 08:25:59', '2021-06-13 08:25:59'),
(10, 10, 2, 1, 20, 310, '2021-06-29 18:30:00', '2021-06-14 04:07:40', '2021-06-14 04:07:40'),
(11, 10, 1, 1, 40, 310, '2021-06-29 18:30:00', '2021-06-14 04:13:22', '2021-06-14 04:13:22'),
(12, 10, 1, 1, 40, 310, '2021-06-29 18:30:00', '2021-06-14 04:13:23', '2021-06-14 04:13:23'),
(13, 10, 1, 2, 10, 310, '2021-06-30 18:30:00', '2021-06-14 04:13:56', '2021-06-14 04:13:56'),
(14, 10, 2, 3, 20, 310, '2021-07-02 18:30:00', '2021-06-14 04:16:06', '2021-06-14 04:16:06'),
(15, 10, 2, 3, 30, 310, '2021-07-09 18:30:00', '2021-06-14 04:18:25', '2021-06-14 04:18:25'),
(16, 10, 2, 2, 20, 310, '2021-07-09 18:30:00', '2021-06-15 00:02:27', '2021-06-15 00:02:27'),
(17, 10, 2, 2, 20, 310, '2021-07-09 18:30:00', '2021-06-15 00:02:28', '2021-06-15 00:02:28'),
(18, 10, 2, 1, 20, 310, '2021-07-09 18:30:00', '2021-06-15 00:03:11', '2021-06-15 00:03:11'),
(19, 10, 2, 1, 20, 310, '2021-07-09 18:30:00', '2021-06-15 07:06:33', '2021-06-15 07:06:33'),
(20, 5, 2, 5, 200, 320, '2021-07-09 18:30:00', '2021-06-15 10:18:54', '2021-06-15 10:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `item_masters`
--

CREATE TABLE `item_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catid` int(11) NOT NULL,
  `iname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentstock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minstock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_masters`
--

INSERT INTO `item_masters` (`id`, `catid`, `iname`, `currentstock`, `minstock`, `image`, `mrp`, `created_at`, `updated_at`) VALUES
(2, 1, 'Fruit beverage', '1400', '50', '1623654624.png', 112, '2021-05-31 12:40:06', '2021-06-14 01:40:24'),
(4, 1, 'Moosli pak', '4000', '100', '1623654692.jpeg', 350, '2021-06-09 18:30:00', '2021-06-14 01:41:32'),
(5, 1, 'Amla amrit', '5170', '100', '1623654747.png', 20, '2021-06-09 18:30:00', '2021-06-15 10:19:26'),
(6, 2, 'Oats', '5000', '100', '1623654883.png', 40, '2021-06-09 18:30:00', '2021-06-14 01:44:43'),
(7, 2, 'Poha', '6007', '100', '1623654931.jpeg', 70, '2021-06-09 18:30:00', '2021-06-14 01:45:31'),
(8, 2, 'Sugar', '3000', '100', '1623654978.jpeg', 50, '2021-06-09 18:30:00', '2021-06-14 01:46:18'),
(9, 3, 'Divya churna', '6012', '100', '1623655033.jpeg', 50, '2021-06-09 18:30:00', '2021-06-14 01:47:13'),
(10, 3, 'Divya Makar Dhvaj', '7160', '1000', '1623655084.png', 80, '2021-06-09 18:30:00', '2021-06-15 07:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_31_104144_create_user_masters_table', 1),
(5, '2021_05_31_104541_create_item_masters_table', 1),
(6, '2021_05_31_105259_create_category_masters_table', 1),
(7, '2021_05_31_111054_create_inward_registers_table', 1),
(8, '2021_05_31_112325_create_place_masters_table', 1),
(9, '2021_05_31_112815_create_outward_registers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outward_registers`
--

CREATE TABLE `outward_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expiredate` date NOT NULL,
  `uid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outward_registers`
--

INSERT INTO `outward_registers` (`id`, `expiredate`, `uid`, `quantity`, `created_at`, `updated_at`, `itemid`) VALUES
(3, '2021-06-30', 2, 10, '2021-06-12 06:41:27', '2021-06-12 06:41:27', 10),
(4, '2021-06-30', 3, 20, '2021-06-12 06:44:25', '2021-06-12 06:44:25', 10),
(5, '2021-07-09', 2, 10, '2021-06-14 04:14:47', '2021-06-14 04:14:47', 10),
(6, '2021-07-08', 1, 10, '2021-06-14 04:18:53', '2021-06-14 04:18:53', 10),
(7, '2021-07-09', 1, 40, '2021-06-15 00:06:15', '2021-06-15 00:06:15', 10),
(8, '2021-07-10', 1, 40, '2021-06-15 07:07:07', '2021-06-15 07:07:07', 10),
(9, '2021-07-10', 5, 30, '2021-06-15 10:19:26', '2021-06-15 10:19:26', 5);

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
-- Table structure for table `place_masters`
--

CREATE TABLE `place_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_masters`
--

INSERT INTO `place_masters` (`id`, `landmark`, `location`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Near SMVS mandir', 'Upasna circle,Surendranagar', 275211232, '2021-05-31 12:34:14', '2021-06-11 12:26:47'),
(2, 'Near Ajramar Tower', 'Taki chock, Surendranagr', 275499877, '2021-05-31 12:36:13', '2021-05-31 12:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_masters`
--

CREATE TABLE `user_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ucontact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_masters`
--

INSERT INTO `user_masters` (`id`, `uname`, `uemail`, `upassword`, `ucontact`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'Princy Shah', 'princy@gmail.com', 'Princy@123', '9999999990', 'Admin', '2021-05-31 12:29:38', '2021-06-15 07:10:20'),
(2, 'Mansi shah', 'mansi@gmail.com', 'Mansi@123', '8888888880', 'Admin', '2021-05-31 12:30:26', '2021-05-31 12:30:26'),
(3, 'Ansh shah', 'ansh@gmail.com', 'Ansh@123', '7777777770', 'Admin', '2021-05-31 12:31:52', '2021-05-31 12:31:52'),
(4, 'Abhi shah', 'abhi@gmail.com', 'Abhi@123', '6666666660', 'Admin', '2021-05-31 12:33:06', '2021-05-31 12:33:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_masters`
--
ALTER TABLE `category_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inward_registers`
--
ALTER TABLE `inward_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_masters`
--
ALTER TABLE `item_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outward_registers`
--
ALTER TABLE `outward_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_masters`
--
ALTER TABLE `place_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_masters`
--
ALTER TABLE `user_masters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_masters`
--
ALTER TABLE `category_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inward_registers`
--
ALTER TABLE `inward_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `item_masters`
--
ALTER TABLE `item_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `outward_registers`
--
ALTER TABLE `outward_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `place_masters`
--
ALTER TABLE `place_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_masters`
--
ALTER TABLE `user_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
