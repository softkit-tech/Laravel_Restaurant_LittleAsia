-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 05:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Brackfast', '1', '2020-12-01 13:21:20', '2020-12-01 13:21:20'),
(8, 'Lunch', '1', '2020-12-01 13:21:35', '2020-12-01 13:21:35'),
(9, 'Dinner', '1', '2020-12-01 13:21:42', '2020-12-01 13:21:42'),
(10, 'Buffet', '1', '2020-12-01 13:21:53', '2020-12-01 13:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'shakir ahmed', 'admin@gmail.com', 'ssssssssssssssssss', '2020-12-02 11:04:34', '2020-12-02 11:04:34'),
(2, 'shakir ahmed', 'shakir@gmail.com', 'shakir ahmed', '2020-12-03 09:01:41', '2020-12-03 09:01:41');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `menu_name`, `image`, `details`, `menu_price`, `menu_discount`, `created_at`, `updated_at`) VALUES
(4, '8', 'chichken chilli onion', '1606953990.jpg', 'It\'s a very delicious curry and Bangladeshi people like this curry very much', '250', '240', '2020-12-03 08:06:31', '2020-12-03 08:06:31'),
(5, '8', 'Burger', '1606954044.jpg', 'gftfyjg jhgjgjh', '180', '160', '2020-12-03 08:07:24', '2020-12-03 08:07:24'),
(6, '7', 'Choumen', '1606954116.jpg', 'gfuyguygjg hhgghggf', '90', '80', '2020-12-03 08:08:36', '2020-12-03 08:08:36'),
(7, '8', 'chicken suslic', '1606954164.jpg', 'gguftyfuy hghfgufv', '140', '120', '2020-12-03 08:09:24', '2020-12-03 08:09:24'),
(8, '7', 'chicken fry', '1606954463.jpg', 'gfu gfdtrs', '50', '40', '2020-12-03 08:14:23', '2020-12-03 08:14:23'),
(9, '9', 'beef kalia', '1606954642.jpg', 'hhgygutf hguyttf', '430', '400', '2020-12-03 08:17:22', '2020-12-03 08:17:22'),
(10, '9', 'Mutton curry', '1606954867.jpg', 'gygy gvhgfyg', '540', '520', '2020-12-03 08:21:07', '2020-12-03 08:21:07'),
(11, '10', 'prawn fry', '1606954928.jpg', 'gygyg hgffyghg', '320', '300', '2020-12-03 08:22:08', '2020-12-03 08:22:08'),
(12, '10', 'chinese vegetable', '1606955069.jpg', 'jhhuhuj bsdhfuhj', '80', '70', '2020-12-03 08:24:29', '2020-12-03 08:24:29'),
(13, '10', 'borhani', '1606955240.jpg', 'dfdfdf fgds', '30', '25', '2020-12-03 08:27:20', '2020-12-03 08:27:20'),
(14, '10', 'Water', '1606955285.jpg', 'hhgtftuf gfuyfuf', '25', '20', '2020-12-03 08:28:05', '2020-12-03 08:28:05'),
(15, '10', 'salad', '1606955321.jpg', 'hgy hvgjgfyv', '15', '10', '2020-12-03 08:28:41', '2020-12-03 08:28:41'),
(16, '10', 'fish curry', '1606955358.jpg', 'hguyftuf hguyfyfv', '280', '260', '2020-12-03 08:29:18', '2020-12-03 08:29:18'),
(17, '10', 'fish fry', '1606955471.jpg', 'gyggg hgfgff', '320', '300', '2020-12-03 08:31:11', '2020-12-03 08:31:11'),
(18, '9', 'fish with chilli onion', '1606955562.jpg', 'gftftf jhgffvg', '280', '240', '2020-12-03 08:32:42', '2020-12-03 08:32:42'),
(19, '7', 'kolija vuna', '1606955632.jpg', 'gfytrft jvtf', '140', '100', '2020-12-03 08:33:52', '2020-12-03 08:33:52'),
(20, '7', 'french fry', '1606955735.jpg', 'hvyfyu guyftyv', '120', '100', '2020-12-03 08:35:35', '2020-12-03 08:35:35');

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
(4, '2020_11_30_043919_create_categories_table', 2),
(5, '2020_12_01_043053_create_menus_table', 3),
(6, '2020_12_01_193629_create_sliders_table', 4),
(7, '2020_12_01_205600_create_teams_table', 5),
(8, '2020_12_02_020118_create_reservations_table', 6),
(9, '2020_12_02_025048_create_contacts_table', 7),
(10, '2020_12_02_044822_create_newlaters_table', 8),
(11, '2020_12_02_225103_create_socials_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newlaters`
--

CREATE TABLE `newlaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newlaters`
--

INSERT INTO `newlaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'admin@gmail.com', '2020-12-03 06:15:58', '2020-12-03 06:15:58'),
(3, 'phpdeveloper.shakir@gmail.com', '2020-12-03 06:35:42', '2020-12-03 06:35:42'),
(5, 'adnan@gmail.com', '2020-12-03 10:00:04', '2020-12-03 10:00:04');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `InputName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InputPhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InputEmail1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InputNumberPerson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InputDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InputTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MESSAGE` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `InputName`, `InputPhoneNumber`, `InputEmail1`, `InputNumberPerson`, `InputDate`, `InputTime`, `MESSAGE`, `Type`, `created_at`, `updated_at`) VALUES
(2, 'test', '01740125203', 'shakir@gmail.com', '2', '2020-12-10', '12pm', 'aaaaaaaaaaaaaaaaaaaaaaa', 'PertyReservision', '2020-12-03 03:42:09', '2020-12-03 03:42:09'),
(3, 'shakira hmed', '01738737', 'khanalauddin1996@gmail.com', '122', '2020-12-02', '2 pm', 'dddddddddddddddddddddddddddddd', 'PertyReservision', '2020-12-03 08:56:29', '2020-12-03 08:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Welcome To VoJon', '1606854875.jpg', 'Welcome To VoJonWelcome To VoJonWelcome To VoJonWelcome To VoJonWelcome To VoJon', '2020-12-02 04:07:50', '2020-12-02 04:34:35'),
(4, 'web developer', '1606866347.jpg', 'web developerweb developerweb developerweb developer', '2020-12-02 07:45:47', '2020-12-02 07:45:47'),
(5, 'laravel developer', '1606866366.jpg', 'laravel developerlaravel developerlaravel developerlaravel developer', '2020-12-02 07:46:06', '2020-12-02 07:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(2, 'fa fa-youtube', 'https://www.youtube.com/watch?v=RyoBz9ZtPuY', '2020-12-03 07:22:40', '2020-12-03 07:22:40'),
(3, 'fa fa-linkedin', 'https://www.facebook.com/profile.php?id=100008997065132', '2020-12-03 07:23:15', '2020-12-03 07:23:15'),
(4, 'fa fa-instagram', 'https://www.youtube.com/watch?v=iXMqV5BBHf4&t=930s', '2020-12-03 07:23:30', '2020-12-03 07:23:30'),
(5, 'fa fa-google-plus', 'https://www.youtube.com/watch?v=RyoBz9ZtPuY', '2020-12-03 07:23:48', '2020-12-03 07:23:48'),
(6, 'fa fa-twitter', 'https://www.youtube.com/watch?v=iXMqV5BBHf4&t=930s', '2020-12-03 07:24:03', '2020-12-03 07:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `designation`, `link`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Shakir ahmed', 'project Manager', 'https://www.facebook.com/profile.php?id=100008997065132', '1606956199.jpg', '2020-12-03 08:43:19', '2020-12-03 08:43:19'),
(5, 'Alauddin Khan', 'Web Developer', 'https://www.facebook.com/mdalauddin.khan.165', '1606956367.jpg', '2020-12-03 08:46:07', '2020-12-03 08:46:07'),
(6, 'Adnan Khan', 'Web Developer', 'https://www.facebook.com/zooel5555', '1606956513.jpg', '2020-12-03 08:48:34', '2020-12-03 08:48:34');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$4Xm2EkPHTITWZBJZD1/zYuBw.btCpE01Ai0uqV87CntlTh/TPu9eq', NULL, '2020-11-30 11:48:03', '2020-11-30 11:48:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newlaters`
--
ALTER TABLE `newlaters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newlaters_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newlaters`
--
ALTER TABLE `newlaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
