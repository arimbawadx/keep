-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2022 at 02:36 PM
-- Server version: 10.3.36-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nihywmvx_keep`
--

-- --------------------------------------------------------

--
-- Table structure for table `keeps`
--

CREATE TABLE `keeps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keeps`
--

INSERT INTO `keeps` (`id`, `user_id`, `title`, `description`, `card_color`, `created_at`, `updated_at`) VALUES
(16, 3, 'Toko online gratis', 'https://www.tokotalk.com/template-desain-website/?utm_source=FBIG&utm_medium=paid-social&utm_campaign=PF%3AFBIG_OB%3ACONVERSION_ST%3AALWAYS-ON_CA%3ATEMPLATE-RS&utm_content=FO%3AIMA_TY%3ACAR_AD%3ATEMPLATE-DESIGN-FASHION&utm_term=BROAD&fbclid=PAAaZUPbSY0uXnbRzuFiOxPcSwrkRslC3ZvHcjJ-zNQv3Gzj0cW5tQ9AO8jd0', 'secondary', '2021-10-26 11:06:07', '2021-10-26 11:06:31'),
(22, 3, 'make sidebar bs4', 'https://bootstrapious.com/p/bootstrap-sidebar', 'success', '2021-10-30 03:58:21', '2021-10-30 03:58:21'),
(23, 3, NULL, 'https://docs.laravel-excel.com/3.1/imports/basics.html', 'secondary', '2021-10-31 00:38:36', '2021-10-31 00:38:36'),
(25, 3, NULL, 'CS294617857\r\nDEV1592363217', 'primary', '2021-10-31 04:32:28', '2021-11-04 15:54:49'),
(28, 3, 'setting sublime', '{\r\n	\"always_show_minimap_viewport\": true,\r\n	\"bold_folder_labels\": true,\r\n	\"color_scheme\": \"Packages/Theme - Brogrammer/brogrammer.tmTheme\",\r\n	\"font_face\": \"Fira Code\",\r\n	\"font_options\":\r\n	[\r\n		\"Source Code Pro\",\r\n		\"gray_antialias\",\r\n		\"subpixel_antialias\"\r\n	],\r\n	\"font_size\": 8,\r\n	\"gravity_org_label_size\": true,\r\n	\"gravity_selected_tab_bold\": true,\r\n	\"gravity_sidebar_header\": true,\r\n	\"gravity_tab_height_short\": true,\r\n	\"gravity_tab_height_tall\": true,\r\n	\"gravity_title_bar\": true,\r\n	\"ignored_packages\":\r\n	[\r\n		\"Vintage\",\r\n	],\r\n	\"indent_guide_options\":\r\n	[\r\n		\"draw_normal\",\r\n		\"draw_active\"\r\n	],\r\n	\"line_padding_bottom\": 3,\r\n	\"line_padding_top\": 3,\r\n	\"overlay_scroll_bars\": \"enabled\",\r\n	\"theme\": \"OneDarkMaterial.sublime-theme\",\r\n}', 'secondary', '2021-11-12 15:52:27', '2021-11-12 15:52:49'),
(52, 1, NULL, 'CUS1901525609', 'primary', '2022-02-03 10:33:42', '2022-02-03 10:33:42'),
(53, 4, 'JOB', '1. List Menu ( Up di Apk)\r\n2. Video Reels Visit\r\n3. Laporan print + Materai\r\n4. Up berkas yudisium', 'secondary', '2022-02-16 04:33:12', '2022-02-16 04:33:12'),
(54, 5, 'daftar utang cg', 'draka - liuqt 25+ pasmal 20 + 10 +30', 'primary', '2022-06-20 05:05:59', '2022-08-30 15:09:54'),
(55, 1, NULL, 'https://eppsi.id/hasil/1659676404Fou6WJ', 'danger', '2022-08-08 02:24:28', '2022-08-08 02:24:28');

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
(1, '12021_10_25_212718_create_users_table', 1),
(2, '2021_10_25_212542_create_keeps_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `created_at`, `updated_at`) VALUES
(1, 'arimbawadx', '2021-10-25 14:36:36', '2021-10-25 14:36:36'),
(2, 'test', '2021-10-25 15:05:54', '2021-10-25 15:05:54'),
(3, '051199', '2021-10-26 10:39:49', '2021-10-26 10:39:49'),
(4, 'Opi', '2021-10-31 14:00:31', '2021-10-31 14:00:31'),
(5, 'dika', '2021-10-31 14:07:26', '2021-10-31 14:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keeps`
--
ALTER TABLE `keeps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keeps_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keeps`
--
ALTER TABLE `keeps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keeps`
--
ALTER TABLE `keeps`
  ADD CONSTRAINT `keeps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
