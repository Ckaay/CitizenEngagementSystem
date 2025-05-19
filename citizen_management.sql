-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 10:52 PM
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
-- Database: `citizen_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `complaint_details` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feedback` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `tracking_id`, `full_name`, `address`, `category`, `complaint_details`, `email`, `phone`, `status`, `created_at`, `updated_at`, `feedback`) VALUES
(1, '68289F14D33E1', 'Grant Blair', 'In ut commodo ration', 'Water & Sanitation', 'Eu doloribus maiores', 'rimifizo@mailinator.com', '0785120223', 'pending', '2025-05-17 12:37:08', '2025-05-17 12:37:08', ''),
(2, '6828E6EC2B144', 'Tate Mccarty', 'Aut expedita ea dolo', 'Education', 'Soluta ab qui offici', 'tace@mailinator.com', '0785120223', 'pending', '2025-05-17 17:43:40', '2025-05-17 17:43:40', ''),
(3, '6829692252FFF', 'Patience Ryan', 'Exercitation ut cumq', 'Telecommunication', 'Laborum autem est a', 'bogipetiz@mailinator.com', '0785120223', 'rejected', '2025-05-18 02:59:14', '2025-05-18 09:43:08', ''),
(4, '682981937B4EE', 'Karly Cherry', 'Voluptates magna mag', 'Healthcare Services', 'Sit alias irure aut', 'vabo@mailinator.com', '0785120223', 'pending', '2025-05-18 04:43:31', '2025-05-18 04:43:31', ''),
(5, '6829B52DB38AA', 'Quynn Doyle', 'Est ea corrupti asp', 'Healthcare Services', 'Error numquam eius e', 'lohujekiri@mailinator.com', '0785120223', 'resolved', '2025-05-18 08:23:41', '2025-05-18 08:49:00', ''),
(6, '6829BBA0DE3CD', 'Ck Christian', 'Kigali Rwanda', 'Healthcare Services', 'my complaint', 'ckelchristian@gmail.com', '078512023', 'rejected', '2025-05-18 08:51:12', '2025-05-18 16:56:05', 'the system shows the updates'),
(7, '6829E23B27622', 'Shana Mendez', 'Rerum ut enim reicie', 'Water & Sanitation', 'Voluptas veritatis d', 'bumiz@mailinator.com', '0785120223', 'pending', '2025-05-18 11:35:55', '2025-05-18 11:35:55', NULL),
(8, '6829E34BF0AB1', 'Shana Mendez', 'Rerum ut enim reicie', 'Water & Sanitation', 'Voluptas veritatis d', 'bumiz@mailinator.com', '0785120223', 'pending', '2025-05-18 11:40:27', '2025-05-18 11:40:27', NULL),
(9, '6829E4019AF6B', 'Kennan Noel', 'Eos culpa consectet', 'Healthcare Services', 'Dolor qui minim est', 'gyginuza@mailinator.com', '0785120223', 'pending', '2025-05-18 11:43:29', '2025-05-18 11:43:29', NULL),
(10, '6829E46936FF7', 'Wing Simon', 'Debitis impedit com', 'Housing & Urban Planning', 'Aute qui corrupti r', 'nitapeto@mailinator.com', '0785120223', 'pending', '2025-05-18 11:45:13', '2025-05-18 11:45:13', NULL),
(11, '6829E4CA5B3B5', 'Nola Mullins', 'Voluptatem sit ut i', 'Telecommunication', 'Labore laborum Aute', 'mehab@mailinator.com', '0785120223', 'pending', '2025-05-18 11:46:50', '2025-05-18 11:46:50', NULL),
(12, '6829E50AF31D9', 'Ck Christian', 'Kigali Rwanda', 'Electricity & Power', 'something wrong , mr mugisha clain a problem,.....', 'ckelchristian@gmail.com', '0785120223', 'resolved', '2025-05-18 11:47:54', '2025-05-18 17:05:28', 'We already solved the complaint'),
(13, '682A0BA967AFA', 'Maite Dejesus', 'Quod qui nisi cumque', 'Public Offices', 'Eveniet veritatis b', 'ckelchristian@gmail.com', '0785120223', 'pending', '2025-05-18 14:32:41', '2025-05-18 14:32:41', NULL),
(14, '682A3019EF6CF', 'ck software', 'kigali rwanda', 'Healthcare Services', 'problem related with local community', 'cksoftwareindustry@gmail.com', '0785120223', 'pending', '2025-05-18 17:08:09', '2025-05-18 17:08:09', NULL),
(15, '682A310A60A5A', 'Ck Christian', 'Rusizi Gihundwe', 'Education', 'problem related with the user system', 'ckelchristian@gmail.com', '0785120223', 'pending', '2025-05-18 17:12:10', '2025-05-18 17:12:10', NULL),
(16, '682A316A37D68', 'Ck Christian', 'Rusizi Gihundwe', 'Home', 'problem with my wife', 'ckelchristian@gmail.com', '0785120223', 'pending', '2025-05-18 17:13:46', '2025-05-18 17:13:46', NULL),
(17, '682A31DA41476', 'Ck Christian', 'Rusizi Gihundwe', 'Public Safety', 'my problem related with the user system', 'ckelchristian@gmail.com', '0785120223', 'pending', '2025-05-18 17:15:38', '2025-05-18 17:15:38', NULL),
(18, '682A33C4D32FB', 'Ck Christian', 'Rusizi Gihundwe', 'Education', 'complaints details', 'ckelchristian@gmail.com', '0785120223', 'pending', '2025-05-18 17:23:48', '2025-05-18 17:23:48', NULL);

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
(1, '2025_05_17_143529_create_sessions_table', 1),
(2, '2025_05_17_143529_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Jf0qWcI2oV5zgmWQf2CPm69utjhzjC1epDfjtdxi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidmJGS0trZkQ5MFZMZk9ZUFRIRm9LUWZ0bXJYWHVFa09sbzNsWWtrdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoibG9jYWxlIjtzOjI6InJ3Ijt9', 1747600970),
('zIB37729PHwZ9k5nrwFrSLfpzXjebnwtMcN7gnBk', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSjVpYzFCZHFmUktjcDFOeWhNMXVTYk1hMFZvVGpWaENJZTBwSGp6YiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MTI6Im90cF92ZXJpZmllZCI7YjoxO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo2OiJsb2NhbGUiO3M6MjoicnciO30=', 1747596314);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'christian', 'tonny@gmail.com', NULL, '$2y$12$G.ie23E.Tgm7zlAwKnNJLe/DSyKK07/74/pl/HcA3lgdGf9c/KiMa', 'SuperUser', NULL, NULL, '2025-05-17 13:03:30', 'active'),
(2, 'munezero', 'ckelchristian@gmail.com', NULL, '$2y$12$xuqCFfM4CCdCp4CV0jAuROr7C.OQROlJ0nZ6lnE2cLdAhWieRs1by', 'AgencyUser', NULL, NULL, '2025-05-17 13:07:22', 'active'),
(4, 'KWIBUKA Cadeau de diew', 'cadeauchrick@gmail.com', NULL, '$2y$12$ZPtc0bjsyYz7sV/gbkD5PuL7K.xcqLd2wm2WHtQzbTjHgJSj8lVVm', 'AgencyUser', NULL, '2025-05-18 07:29:29', '2025-05-18 07:29:48', 'active'),
(5, 'CK SOFTWARE', 'cksoftwareindustry@gmail.com', NULL, '$2y$12$gD/cujaGFvX6xt7GsF17G.j2UKcb5KyGAvVw1SediKXXCwaTL0cLy', 'AgencyUser', NULL, '2025-05-18 07:30:27', '2025-05-18 07:30:27', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `complaints_tracking_id_unique` (`tracking_id`),
  ADD KEY `complaints_tracking_id_index` (`tracking_id`),
  ADD KEY `complaints_status_index` (`status`),
  ADD KEY `complaints_category_index` (`category`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
