-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2018 at 07:08 PM
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
  `programs_id` int(10) UNSIGNED NOT NULL,
  `modules_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `programs_id`, `modules_id`, `title`, `slug`, `video`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'AngularJS tutorial - What is AngularJS', 'angularjs-tutorial-what-is-angularjs', 'https://www.youtube.com/embed/FXv92nEprOM', '<p>What is AngularJS</p>\r\n\r\n<p>AngularJS is a JavaScript framework that helps build applications that run in a web browser.</p>\r\n\r\n<p>Who developed AngularJS Google is the company that developed AngularJS.</p>\r\n\r\n<p>AngularJS is an open source project, which means it can be be freely used, changed, and shared by anyone.</p>\r\n\r\n<p>AngularJS is an excellent framework for building both Single Page Applications (SPA) and Line of Business Applications. Many companies are using Angular today, and there are many public facing web sites that are built with angular.</p>', '1', '2018-08-16 04:29:26', '2018-08-16 05:47:07'),
(2, 1, 2, 'AngularJS filters', 'angularjs-filters', 'https://www.youtube.com/embed/Y2Few_nkze0', '<p>Angular filters for formatting data lowercase - Formats all characters to lowercase uppercase - Formats all characters to uppercase number - Formats a number as text. Includes comma as thousands separator and the number of decimal places can be specified currency - Formats a number as a currency. $ is default. Custom currency and decimal places can be specified date - Formats date to a string based on the requested format</p>', '1', '2018-08-16 05:42:08', '2018-08-16 05:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `chapters_uploads`
--

CREATE TABLE `chapters_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `programs_id` int(10) UNSIGNED NOT NULL,
  `modules_id` int(10) UNSIGNED NOT NULL,
  `chapters_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `programs_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(18, '2018_08_01_102806_create_programs_table', 4),
(19, '2018_08_02_125746_create_modules_table', 4),
(20, '2018_08_03_130714_create_chapters_table', 4),
(21, '2018_08_06_122522_create_chapters_uploads_table', 4),
(22, '2018_08_16_131518_create_checkout_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `programs_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `programs_id`, `title`, `slug`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Angular for beginners', 'angular-for-beginners', '<p><strong>Angular&nbsp;</strong>is a structural framework for dynamic web applications.&nbsp;<strong>Angular / Angular JS&nbsp;</strong>lets you use HTML as your template language and then extend HTML&#39;s syntax to express your application&#39;s components. Develop modern, complex, responsive and scalable web applications with Angular.</p>\r\n\r\n<p>Angular&#39;s data binding and dependency injection eliminate much of the code you would otherwise have to write.</p>\r\n\r\n<p>Angular is open source and as this area of programming work expands, so does the job market demand for programmers and web site developers experienced with Angular.</p>', '1', '2018-08-16 04:24:03', '2018-08-16 04:24:03'),
(2, 1, 'angular datatable', 'angular-datatable', '<p><a href=\"https://angular.io/\">Angular</a>&nbsp;Structural framework for dynamic web apps +&nbsp;<a href=\"https://datatables.net/\">DataTables</a>&nbsp;jQuery plug-in for complex HTML tables</p>', '1', '2018-08-16 04:25:55', '2018-08-16 04:25:55');

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
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `programs` (`id`, `title`, `slug`, `description`, `image`, `short_video`, `video`, `price`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Angular JS', 'angular-js', '<p>The code link shown in the video has changed to the following: <a href=\"https://www.youtube.com/redirect?v=i9MHigUZKEM&amp;event=video_description&amp;redir_token=Raic8osoMylS0BewnS_GoAMzFMF8MTUzNDQ4NzI2N0AxNTM0NDAwODY3&amp;q=http%3A%2F%2Fcodewithdan.me%2FAngularJsDemos\">http://codewithdan.me/AngularJsDemos</a> If you like the AngularJS in 60-ish Minutes video you&#39;ll love the AngularJS JumpStart video training course. Check it out at <a href=\"https://www.youtube.com/redirect?v=i9MHigUZKEM&amp;event=video_description&amp;redir_token=Raic8osoMylS0BewnS_GoAMzFMF8MTUzNDQ4NzI2N0AxNTM0NDAwODY3&amp;q=http%3A%2F%2Ftinyurl.com%2FAngularJSJumpStart\">http://tinyurl.com/AngularJSJumpStart</a>. For more articles and videos subscribe to my YouTube channel or visit <a href=\"https://www.youtube.com/redirect?v=i9MHigUZKEM&amp;event=video_description&amp;redir_token=Raic8osoMylS0BewnS_GoAMzFMF8MTUzNDQ4NzI2N0AxNTM0NDAwODY3&amp;q=http%3A%2F%2Fweblogs.asp.net%2Fdwahlin\">http://weblogs.asp.net/dwahlin</a>. In this video you&#39;ll learn how to get started with the AngularJS SPA framework.</p>', '11534401687.png', 'https://www.youtube.com/embed/zKkUN-mJtPQ', 'https://www.youtube.com/embed/zKkUN-mJtPQ', '20.00', '1', '2018-08-15 19:41:27', '2018-08-16 04:13:08'),
(3, 'Laravel', 'laravel', '<p>In this video I will talk about what Laravel is and also give you a demo of what we will be building. Laravel is the most popular open source PHP framework and uses the MVC (Model View Controller) design pattern. We will be covering all of the fundamentals of Laravel 5.4 in this series including.... Routing Controllers Models &amp; DB Migrations Blade Templates/Views Authentication &amp; Access Control CRUD Functionality File Uploading Much More... CODE: Complete Code For This Series <a href=\"https://www.youtube.com/redirect?redir_token=p7BTseqIcYLEQByVYeIOAQvOgbR8MTUzNDQ4ODEwNEAxNTM0NDAxNzA0&amp;v=EU7PRmCpx-0&amp;q=https%3A%2F%2Fgithub.com%2Fbradtraversy%2Flsapp&amp;event=video_description\">https://github.com/bradtraversy/lsapp</a> 10 PROJECT LARAVEL COURSE: Please use affiliate link below <a href=\"https://www.youtube.com/redirect?redir_token=p7BTseqIcYLEQByVYeIOAQvOgbR8MTUzNDQ4ODEwNEAxNTM0NDAxNzA0&amp;v=EU7PRmCpx-0&amp;q=https%3A%2F%2Fwww.eduonix.com%2Faffiliates%2Fid%2F16-10485&amp;event=video_description\">https://www.eduonix.com/affiliates/id...</a> 50% OFF: Use special code &quot;traversy&quot;</p>', '31534401844.png', 'https://www.youtube.com/embed/H3uRXvwXz1o', 'https://www.youtube.com/embed/H3uRXvwXz1o', '15.00', '1', '2018-08-15 19:44:04', '2018-08-16 03:02:47'),
(4, 'CodeIgniter', 'codeigniter', '<p>We will be building a PHP Codeigniter blog application with CRUD functionality. In this video we will install Codeigniter, setup a Pages controller, add views and routing. Code For This Application - <a href=\"https://www.youtube.com/redirect?v=I752ofYu7ag&amp;redir_token=xG5nmLDBhhscgXzgiIPTXNVWRP98MTUzNDQ4ODM3OUAxNTM0NDAxOTc5&amp;event=video_description&amp;q=https%3A%2F%2Fgithub.com%2Fbradtraversy%2Fciblog\">https://github.com/bradtraversy/ciblog</a> 10 project PHP Frameworks course - <a href=\"https://www.youtube.com/redirect?v=I752ofYu7ag&amp;redir_token=xG5nmLDBhhscgXzgiIPTXNVWRP98MTUzNDQ4ODM3OUAxNTM0NDAxOTc5&amp;event=video_description&amp;q=https%3A%2F%2Fwww.eduonix.com%2Faffiliates%2Fid%2F16-10371\">https://www.eduonix.com/affiliates/id...</a> PHP 7 Developers Guide - <a href=\"https://www.youtube.com/redirect?v=I752ofYu7ag&amp;redir_token=xG5nmLDBhhscgXzgiIPTXNVWRP98MTUzNDQ4ODM3OUAxNTM0NDAxOTc5&amp;event=video_description&amp;q=https%3A%2F%2Fwww.eduonix.com%2Faffiliates%2Fid%2F16-10399\">https://www.eduonix.com/affiliates/id...</a></p>', '41534402066.png', 'https://www.youtube.com/embed/jOKTjE6Q5QQ', 'https://www.youtube.com/embed/jOKTjE6Q5QQ', '12.00', '1', '2018-08-15 19:47:46', '2018-08-16 03:02:53'),
(5, 'Node JS', 'node-js', '<p>Yo ninjas, welcome to your very first Node JS tutorial for beginners. In this Node JS tutorial I&#39;ll introduce to what exactly Node is all about, why we&#39;d use it and the technologies you&#39;ll need to be familiar with to get started. In a nutshell, Node JS lets us run JavaScript on a computer / server, so with it we can create dynamic web applications in JavaScript from start to finish, without the need to learn another language.</p>', '51534402273.png', 'https://www.youtube.com/embed/pU9Q6oiQNd0', 'https://www.youtube.com/embed/pU9Q6oiQNd0', '30.00', '1', '2018-08-15 19:51:13', '2018-08-16 03:02:59'),
(6, 'Python', 'python', '<p>Tips: 1. Follow along as I explain to make sure you understand everything 2. Ideally, work with a friend so you can help each other when you&rsquo;re stuck 3. If you want to learn faster than I talk, I&rsquo;d recommend 1.25x or 1.5x speed :) 4. Check the outline in the comment section below if you want to skip around. 5. Download the sample files here to follow along (they are Jupyter Notebook files): <a href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.csdojo.io%2Fpython2&amp;v=AWek49wXGzI&amp;event=video_description&amp;redir_token=pLMZ7fhZJl9JXZHpcKgan2VXPBB8MTUzNDQ5MTUwM0AxNTM0NDA1MTAz\">https://www.csdojo.io/python2</a> 6. To make sure you don&rsquo;t miss my future tutorial videos, sign up to my newsletter: <a href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.csdojo.io%2Fnews&amp;v=AWek49wXGzI&amp;event=video_description&amp;redir_token=pLMZ7fhZJl9JXZHpcKgan2VXPBB8MTUzNDQ5MTUwM0AxNTM0NDA1MTAz\">https://www.csdojo.io/news</a> 7. Have fun! If anything is unclear, please let me know in a comment.</p>', '61534405325.png', 'https://www.youtube.com/embed/AWek49wXGzI', 'https://www.youtube.com/embed/AWek49wXGzI', '40.00', '1', '2018-08-16 02:12:05', '2018-08-16 02:37:49');

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
  `roles_id` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `roles_id`, `fname`, `lname`, `email`, `password`, `verify_code`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gurpreet', 'Singh', 'admin@gmail.com', '$2y$10$yDPGIFMZUIwFcSrcitDSpuuO5H2EjEPyBSE1EwP0waNna1l4XpL0a', NULL, '0', 'no33hDsDjIJg0htFGMCcm0IDwTSrU57jIoTNEVvtE6UXppC97VatBauaFwlY', '2018-08-01 05:04:07', '2018-08-01 05:04:07'),
(2, 2, 'Gurpreet', 'Singh', 'user@gmail.com', '$2y$10$pl.qMt8aSMxM4yCdpoFEKOIY1N7zlXqgcy/aLLfYKGJdvxtHqpWxa', NULL, '0', 'Hiy2CDErOYVoKUbBqUInIqk28hXzY5Cs1QdG2m1lS5TUnPbPnXYvoAr36ez7', '2018-08-07 06:09:28', '2018-08-07 06:09:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chapters_title_unique` (`title`),
  ADD KEY `chapters_programs_id_foreign` (`programs_id`),
  ADD KEY `chapters_modules_id_foreign` (`modules_id`);

--
-- Indexes for table `chapters_uploads`
--
ALTER TABLE `chapters_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_uploads_programs_id_foreign` (`programs_id`),
  ADD KEY `chapters_uploads_modules_id_foreign` (`modules_id`),
  ADD KEY `chapters_uploads_chapters_id_foreign` (`chapters_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkout_users_id_foreign` (`users_id`),
  ADD KEY `checkout_programs_id_foreign` (`programs_id`);

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
  ADD UNIQUE KEY `modules_title_unique` (`title`),
  ADD KEY `modules_programs_id_foreign` (`programs_id`);

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
  ADD UNIQUE KEY `programs_title_unique` (`title`);

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
  ADD KEY `users_role_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chapters_uploads`
--
ALTER TABLE `chapters_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_modules_id_foreign` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `chapters_programs_id_foreign` FOREIGN KEY (`programs_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `chapters_uploads`
--
ALTER TABLE `chapters_uploads`
  ADD CONSTRAINT `chapters_uploads_chapters_id_foreign` FOREIGN KEY (`chapters_id`) REFERENCES `chapters` (`id`),
  ADD CONSTRAINT `chapters_uploads_modules_id_foreign` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `chapters_uploads_programs_id_foreign` FOREIGN KEY (`programs_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_programs_id_foreign` FOREIGN KEY (`programs_id`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `checkout_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_programs_id_foreign` FOREIGN KEY (`programs_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
