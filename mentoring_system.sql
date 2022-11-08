-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 07, 2022 at 05:30 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentoring_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `desc`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Calculus', 'Calculus course', 'https://i.ytimg.com/vi/WsQQvHm4lSw/maxresdefault.jpg', '20.00', '2022-10-31 22:42:50', '2022-11-07 05:11:05'),
(2, 'Linear Algebra', 'Some description about the course add', 'http://localhost:8000/storage/courses/101219-Yhc1pL35GG.png', '30.00', '2022-10-31 22:42:50', '2022-11-07 05:12:19'),
(3, 'Discrete Maths', 'Discreate maths description', 'http://localhost:8000/storage/courses/101338-YV6gvBL8F8.png', '40.00', '2022-11-07 05:13:38', '2022-11-07 05:13:38');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_04_155358_create_roles_table', 1),
(6, '2022_11_05_060355_create_courses_table', 2),
(7, '2022_11_05_072748_create_teacher_courses_table', 3),
(8, '2022_11_06_073030_create_user_additionals_table', 4),
(9, '2022_11_06_103522_create_student_teacher_appointments_table', 5),
(10, '2022_11_06_162241_create_teacher_course_materials_table', 6),
(11, '2022_11_06_214731_create_teacher_course_queries_table', 7),
(12, '2022_11_06_214948_create_teacher_course_feedback_table', 7);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('super_admin','teacher','student') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super_admin', '2022-11-04 11:10:33', '2022-11-04 11:10:33'),
(2, 'Teacher', 'teacher', '2022-11-04 11:10:33', '2022-11-04 11:10:33'),
(3, 'Student', 'student', '2022-11-04 11:10:33', '2022-11-04 11:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_teacher_appointments`
--

CREATE TABLE `student_teacher_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `status` enum('Pending','Accepted','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_teacher_appointments`
--

INSERT INTO `student_teacher_appointments` (`id`, `student_id`, `teacher_id`, `course_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 8, 1, '2022-11-09', 'Accepted', NULL, '2022-11-06 08:53:16'),
(2, 3, 8, 2, '2022-11-23', 'Accepted', NULL, '2022-11-06 10:03:26'),
(3, 7, 8, 1, '2022-11-09', 'Accepted', NULL, '2022-11-06 10:04:30'),
(4, 7, 8, 1, '2022-11-09', 'Rejected', NULL, '2022-11-06 10:07:38'),
(5, 7, 8, 2, '2022-11-17', 'Accepted', NULL, '2022-11-06 10:07:42'),
(6, 7, 8, 1, '2022-11-09', 'Accepted', NULL, '2022-11-06 13:46:01'),
(7, 3, 8, 2, '2022-11-16', 'Accepted', NULL, '2022-11-07 12:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 8, 1, '2022-11-05 02:36:17', '2022-11-05 02:36:17'),
(2, 8, 2, '2022-11-05 02:36:17', '2022-11-05 02:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course_feedback`
--

CREATE TABLE `teacher_course_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `feedback_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course_materials`
--

CREATE TABLE `teacher_course_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_course_materials`
--

INSERT INTO `teacher_course_materials` (`id`, `type`, `content`, `teacher_course_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'http://localhost:8000/storage/files/170647-MA0U4gLcHg.png', 1, '2022-11-06 12:06:47', '2022-11-06 12:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course_queries`
--

CREATE TABLE `teacher_course_queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_course_queries`
--

INSERT INTO `teacher_course_queries` (`id`, `student_id`, `question`, `teacher_course_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'First query', 1, '2022-11-06 17:22:54', '2022-11-06 17:22:54'),
(2, 3, 'Second query', 1, '2022-11-06 17:23:38', '2022-11-06 17:23:38'),
(3, 7, 'Some query', 2, '2022-11-07 05:20:48', '2022-11-07 05:20:48'),
(4, 8, 'Ok umer we will do it', 2, '2022-11-07 05:21:51', '2022-11-07 05:21:51');

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
  `gender` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription` enum('free','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `subscription`, `is_active`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$tnVvTnlhcyeYe/9h2lZddetF7njWCo59m.9vpeqsAh.vC6bGOhQvq', 'M', 'free', '1', 1, NULL, '2022-11-04 11:25:39', '2022-11-04 11:25:39'),
(2, 'Teacher', 'teacher@gmail.com', NULL, '$2y$10$P2xTr0Yt1RvR3tQ9QkK2euzY6CRBJk56tfGB2jw7njFIPjCWRX2zq', 'M', 'free', '1', 2, NULL, '2022-11-04 11:25:39', '2022-11-04 11:25:39'),
(3, 'Student', 'student@gmail.com', NULL, '$2y$10$6ghYXLuHWTiUOnIIwiUw0.LVBD6US13y6bK6NRqx96OxObNM1JU1m', 'M', 'free', '1', 3, NULL, '2022-11-04 11:25:39', '2022-11-04 11:25:39'),
(6, 'Umer Sohail', 'admin@gmail.com', NULL, '$2y$10$IcDh8jgM84Fa.DW9DJ/cxO8IUECqN/eSfxzRqG.THiOWqCXU4s2ma', 'M', 'free', '1', 2, NULL, '2022-11-04 15:24:16', '2022-11-07 05:43:35'),
(7, 'Umer Sohail', 'admin1@gmail.com', NULL, '$2y$10$.FpM15zo5au7JD3Y91j86eEN6mbUc7hIkyDc.L1FfKgIkqF.ORiiq', 'M', 'free', '1', 3, NULL, '2022-11-04 17:07:01', '2022-11-04 17:07:01'),
(8, 'Test Teacher', 'testteacher@gmail.com', NULL, '$2a$12$oD227WYZGja8xXho5Hw0zujnCwCP2Wk8Swpeef3OL6U6ZJcEtNc0K', 'M', 'free', '1', 2, NULL, '2022-11-05 02:36:17', '2022-11-05 02:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_additionals`
--

CREATE TABLE `user_additionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` longtext COLLATE utf8mb4_unicode_ci,
  `about_me` longtext COLLATE utf8mb4_unicode_ci,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_per_hour` decimal(10,2) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_additionals`
--

INSERT INTO `user_additionals` (`id`, `profile_image`, `about_me`, `date_of_birth`, `blood_group`, `mobile`, `address`, `city`, `state`, `postal_code`, `country`, `headline`, `teacher_per_hour`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-11-06 04:17:46', '2022-11-06 04:17:46'),
(2, 'http://localhost:8000/images/095334-ya1i4r5mTu.jpeg', 'I am student of bscs', '2002-02-13', 'AB-', '+91132131212123231', 'na1234', 'Lahore', 'Punjab', NULL, 'Pakistan', 'Student of BSCS', NULL, 3, '2022-11-06 04:30:27', '2022-11-06 04:53:34'),
(3, NULL, 'Some info about test teacher', '2000-03-15', 'A', '+9121233213123', 'na1234', 'Lahore', 'Punjab', '54000', 'Pakistan', 'Test teacher headline', '20.00', 8, '2022-11-06 10:11:20', '2022-11-06 10:15:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_teacher_appointments`
--
ALTER TABLE `student_teacher_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_course_feedback`
--
ALTER TABLE `teacher_course_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_course_materials`
--
ALTER TABLE `teacher_course_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_course_queries`
--
ALTER TABLE `teacher_course_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_additionals`
--
ALTER TABLE `user_additionals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_teacher_appointments`
--
ALTER TABLE `student_teacher_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_course_feedback`
--
ALTER TABLE `teacher_course_feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_course_materials`
--
ALTER TABLE `teacher_course_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_course_queries`
--
ALTER TABLE `teacher_course_queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_additionals`
--
ALTER TABLE `user_additionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
