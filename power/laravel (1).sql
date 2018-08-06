-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2018 at 07:28 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.1.19-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `module_id`, `title`, `slug`, `description`, `active`, `created_at`, `updated_at`) VALUES
(7, 3, 'AngularJS + Laravel + ngInfiniteScroll - Scroll infinito com dados via API', 'angularjs-laravel-nginfinitescroll-scroll-infinito-com-dados-via-api', 'AngularJS + Laravel + ngInfiniteScroll - Scroll infinito com dados via API', '1', '2018-08-06 07:10:44', '2018-08-06 07:10:44'),
(8, 3, 'fgvcm  ghv', 'fgvcm-ghv', ',mghbm,', '1', '2018-08-06 07:13:18', '2018-08-06 07:13:18'),
(9, 3, 'm gh m,', 'm-gh-m', 'fgm gh', '1', '2018-08-06 07:15:59', '2018-08-06 07:15:59'),
(10, 3, 'ghkmgh ,b,mkh', 'ghkmgh-bmkh', 'hbj ,nhj', '0', '2018-08-06 07:17:07', '2018-08-06 07:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `chapters_uploads`
--

CREATE TABLE `chapters_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapters_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters_uploads`
--

INSERT INTO `chapters_uploads` (`id`, `chapters_id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 7, '//www.youtube.com/embed/FXv92nEprOM', 'video', '2018-08-06 07:10:44', '2018-08-06 07:10:44'),
(2, 7, '15335592335b6841c1e5126.png', 'image', '2018-08-06 07:10:44', '2018-08-06 07:10:44'),
(3, 8, '//www.youtube.com/embed/FXv92nEprOM', 'video', '2018-08-06 07:13:18', '2018-08-06 07:13:18'),
(4, 8, '15335593465b684232e4221.png', 'image', '2018-08-06 07:13:18', '2018-08-06 07:13:18'),
(5, 10, '15335596235b684347a82e5.pdf', 'file', '2018-08-06 07:17:07', '2018-08-06 07:17:07');

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2018_07_31_120809_create_roles_table', 2),
(5, '2014_10_12_000000_create_users_table', 3),
(6, '2018_08_01_102806_create_programs_table', 4),
(7, '2018_08_02_125746_create_modules_table', 5),
(8, '2018_08_03_130714_create_chapters_table', 6),
(9, '2018_08_06_122522_create_chapter_uploads_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `program_id`, `title`, `slug`, `description`, `active`, `created_at`, `updated_at`) VALUES
(3, 3, 'Caucasian/Whitef  mgyjh,hj', 'caucasianwhitef-mgyjhhj', 'gfhkm gvbn m,ghjmngh', '0', '2018-08-03 02:07:11', '2018-08-03 04:27:17'),
(5, 3, 'ghmv ghvmnjb ghmnjytfg', 'ghmv-ghvmnjb-ghmnjytfg', 'm ghvm ghjmrtfj', '1', '2018-08-03 02:08:14', '2018-08-03 02:08:14'),
(6, 3, 'cvn vjnghm', 'cvn-vjnghm', 'ghkmghmk', '1', '2018-08-03 04:25:47', '2018-08-03 04:25:47'),
(8, 3, 'gjfgmj ghvm', 'gjfgmj-ghvm', 'ghvmghm', '1', '2018-08-03 04:26:39', '2018-08-03 04:26:39');

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `slug`, `description`, `short_video`, `video`, `price`, `active`, `created_at`, `updated_at`) VALUES
(3, 'SOCIAL MEDIA SECRETS', 'social-media-secrets', 'Know how magicians never reveal their secrets? Well we’re not f*&king magicians. Get ready to learn all our “magical” strategies for making a living as a YouTuber.\r\n\r\nStep 1: Find your passions and interests. Step 2: Throw them into a blender. Step 3: Out comes a perfect channel idea that’s primed for success. (Blender sold separately.)', 'http:/google.com', 'http:/google.com', '56.00', '0', '2018-08-02 00:36:11', '2018-08-02 06:36:28'),
(4, 'gfjn gb', 'gfjn-gb', 'gfjhn', '', '', '56.00', '1', '2018-08-02 00:36:19', '2018-08-02 00:36:19'),
(5, 'gfjhgf', 'gfjhgf', 'gfjhnfgj', '', '', '65.00', '1', '2018-08-02 00:36:27', '2018-08-02 00:36:27'),
(6, 'fgnhfg', 'fgnhfg', 'gfjnh', '', '', '56.00', '1', '2018-08-02 00:36:34', '2018-08-02 00:36:34'),
(7, 'gj', 'gj', 'y', 'http:/google.com', 'http:/google.com', '657.00', '1', '2018-08-02 02:36:12', '2018-08-02 02:36:12'),
(8, 'ghkghkgh, mbmn gvhbn', 'ghkghkgh-mbmn-gvhbn', 'rfgcvm gvhmj  nghvm', 'http:/google.com', 'http:/google.com', '6786.00', '0', '2018-08-03 04:27:44', '2018-08-03 04:27:44'),
(9, 'hgmn nghv mbgh', 'hgmn-nghv-mbgh', 'fgcvmb ghmk gvhjm', 'http:/google.com', 'http:/google.com', '657.00', '0', '2018-08-03 23:44:58', '2018-08-03 23:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-07-31 18:30:00', '2018-07-31 18:30:00'),
(2, 'User', '2018-07-31 18:30:00', '2018-07-31 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `fname`, `lname`, `email`, `password`, `verify_code`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gurpreet', 'Singh', 'admin@gmail.com', '$2y$10$yDPGIFMZUIwFcSrcitDSpuuO5H2EjEPyBSE1EwP0waNna1l4XpL0a', NULL, '0', 'rFuj7GifpQIwE1LGUMrEOkwzPfwJKi51INc3aZHMBDO9SeL6xo2JPZJiYyKE', '2018-08-01 05:04:07', '2018-08-01 05:04:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chapters_slug_unique` (`slug`),
  ADD KEY `chapters_module_id_foreign` (`module_id`);

--
-- Indexes for table `chapters_uploads`
--
ALTER TABLE `chapters_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapter_uploads_chapter_id_foreign` (`chapters_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_slug_unique` (`slug`),
  ADD KEY `modules_program_id_foreign` (`program_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `chapters_uploads`
--
ALTER TABLE `chapters_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`);

--
-- Constraints for table `chapters_uploads`
--
ALTER TABLE `chapters_uploads`
  ADD CONSTRAINT `chapter_uploads_chapter_id_foreign` FOREIGN KEY (`chapters_id`) REFERENCES `chapters` (`id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
