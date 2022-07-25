-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descrip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_keywords`, `meta_descrip`, `created_at`, `updated_at`) VALUES
(3, 'Electronics', 'electronics', 'All kinds of electronics items are here.', 0, 1, '1657797508.png', 'Electronics', 'electronics items', 'Good quality.\r\nSuper saving offers.', '2022-07-12 03:48:36', '2022-07-14 05:48:28'),
(4, 'Household', 'household', 'All kinds of household items are here.', 0, 1, '1657797520.png', 'Household', 'household items', 'Very low prices.\r\nGood quality.', '2022-07-12 03:50:28', '2022-07-14 05:48:40'),
(5, 'Clothes', 'clothes', 'All kinds of womens wear, mens wear and children wear are here.', 0, 1, '1657797530.png', 'Clothes', 'clothes\r\nwomen wear\r\nmens wear', 'Good materials.\r\nLow prices.\r\nLots of varieties.', '2022-07-12 03:53:54', '2022-07-14 05:48:50'),
(6, 'Jewellery', 'jewellery', 'All kinds of jewellery are here.', 0, 1, '1657797540.png', 'Jewellery', 'jewellery', 'Unique designs.\r\nAffordable prices.', '2022-07-12 03:58:12', '2022-07-14 05:49:00'),
(7, 'Toys', 'toys', 'All kinds of toys are here.', 0, 1, '1657797550.png', 'Toys', 'soft toys\r\nhard toys\r\ntoys', 'With good quality and material.\r\nHappy prices.\r\nRefundable.', '2022-07-12 04:16:56', '2022-07-14 05:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_07_11_084452_create_categories_table', 2),
(6, '2022_07_12_041022_create_categories_table', 3),
(7, '2022_07_12_100455_create_products_table', 4),
(8, '2022_07_15_102311_create_carts_table', 5),
(9, '2022_07_18_110052_create_carts_tabel', 6),
(10, '2022_07_18_112616_create_carts_table', 7),
(11, '2022_07_18_113057_create_carts_table', 8),
(12, '2022_07_20_083824_create_carts_table', 9),
(13, '2022_07_21_105252_create_orders_table', 10),
(14, '2022_07_21_105658_create_oredr_items_table', 10),
(15, '2022_07_21_114323_create_orders_table', 11),
(16, '2022_07_22_034532_create_orders_table', 12),
(17, '2022_07_22_034930_create_order_items_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `total_price`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(1, '2', 'Anand', 'Patel', 'anand@gmail.com', '9999988888', '5, Green Villa', 'Modhera Road', 'Mehsana', 'Gujarat', 'India', '384002', '20000', 0, NULL, 'hello2761', '2022-07-25 00:56:13', '2022-07-25 00:56:13'),
(2, '3', 'Zalak', 'Patel', 'zalak@gmail.com', '9988776655', '35, Apartment', 'Randeja', 'Gandhinagar', 'Gujarat', 'India', '382026', '99', 0, NULL, 'hello8959', '2022-07-25 00:58:30', '2022-07-25 00:58:30'),
(3, '4', 'Ayati', 'Patel', 'ayati@gmail.com', '9999988888', '5, Green Villa', 'Modhera Road', 'Mehsana', 'Gujarat', 'India', '384002', '18499', 0, NULL, 'hello1854', '2022-07-25 01:05:09', '2022-07-25 01:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '8', '1', '20000', '2022-07-25 00:56:13', '2022-07-25 00:56:13'),
(2, '2', '2', '1', '99', '2022-07-25 00:58:30', '2022-07-25 00:58:30'),
(3, '3', '1', '1', '18499', '2022-07-25 01:05:09', '2022-07-25 01:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mi TV 32 inch', 'mi tv 32 inch', '80 cm (32\")\r\nSmart TV, Android 11 OS\r\n12 Months Warranty', 'Quad-Core Processor \r\nDolby Audio Sound \r\nWi-Fi Support', '24999', '18499', '1657782427.jpg', '7', '18', 1, 1, 'Mi TV 32 inch', '32 inch\r\nSmart TV', 'Enjoy the amazing features by getting the Redmi 80cm (32 Inch) HD Ready LED Android Smart TV', '2022-07-12 22:34:17', '2022-07-25 01:05:09'),
(2, 4, 'Window cleaner', 'window cleaner', 'Window Groove Frame Cleaning Brush', 'Track Cleaning Brushes \r\nDust Cleaner Tool for All Corners Edges and Gaps \r\nMulticolour', '199', '99', '1657782439.jpg', '1', '0', 1, 1, 'Window cleaner', 'Dust Cleaner Tool', 'Get it Jul 19 - 21 FREE Delivery', '2022-07-12 22:38:24', '2022-07-25 00:58:30'),
(4, 6, 'Earring', 'earring', 'Pastel Green & Pink Meenakari Lotus Design Layered Chandbali Earring', 'Plating: Gold\r\nSegment: Ethnic\r\nOccasion: Wedding', '3292', '494', '1657782482.jpg', '3', '0', 1, 1, 'Earring', 'Pastel Green & Pink', 'Pastel green and pink meenakari lotus design layered chandbali earrings.', '2022-07-12 22:48:52', '2022-07-25 00:51:13'),
(5, 7, 'Soft Toys', 'soft toys', 'Bolt Soft Toys Cartoon Characters Plush For Kids', 'Cartoon Characters Plush\r\nFor Kids\r\nBest Soft Toy Big Size - 35 Cm', '289', '289', '1657782491.jpg', '8', '0', 1, 1, 'Soft Toys', 'Cartoon Characters Plush', 'Bolt Soft Toys Cartoon Characters Plush For Kids', '2022-07-12 22:52:07', '2022-07-14 01:38:11'),
(7, 5, 'Shirts', 'shirts', 'Plain Cotton Solid Shirts Combo', 'Fabric	Carbon Cotton\r\nNeck	Classic Collar\r\nPattern	Solid\r\nSleeve	Full-Sleeves\r\nFit	Regular-fit', '3998', '1998', '1657782801.jpg', '0', '18', 1, 1, 'Shirts', 'Plain Cotton Solid Shirts Combo', 'Plain Cotton Solid Shirts Combo', '2022-07-14 01:43:21', '2022-07-21 04:59:41'),
(8, 5, 'Lehenga choli', 'lehenga choli', 'Pink lehenga.', 'Color: Pink\r\nMaterial: Net\r\nOccasions: Wedding', '24999', '20000', '1658477773.jpg', '4', '0', 1, 1, 'Lehenga choli', 'Lehenga choli\r\nWedding season\r\nPink Color', 'Lehenga choli\r\nWedding season\r\nPink Color', '2022-07-22 02:46:13', '2022-07-25 00:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niyati', 'niyati@gmail.com', NULL, '$2y$10$cfRkRPF8kNnxVS8uakmbmOraWsBIEokErGi1boIQoXkza.Ij37nj.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-07-25 00:54:05', '2022-07-25 00:54:05'),
(2, 'Anand', 'anand@gmail.com', NULL, '$2y$10$C7GHYtSyS65VUSdc4Y36p.Wow8ARjF1oDxAFGTv6b.CBjr0T2qzse', 'Patel', '9999988888', '5, Green Villa', 'Modhera Road', 'Mehsana', 'Gujarat', 'India', '384002', 0, NULL, '2022-07-25 00:55:03', '2022-07-25 00:56:13'),
(3, 'Zalak', 'zalak@gmail.com', NULL, '$2y$10$S/ccsxVG7I384cAjc1xKje27MqaHpHYm3nSYi6yWoFH7Q1ecqh1TC', 'Patel', '9988776655', '35, Apartment', 'Randeja', 'Gandhinagar', 'Gujarat', 'India', '382026', 0, NULL, '2022-07-25 00:57:10', '2022-07-25 00:58:30'),
(4, 'Ayati', 'ayati@gmail.com', NULL, '$2y$10$Sfh9pABAq25653Nc0Jz2ke7QFLjG9GzQsEgD4Ofuau.V85r51axsS', 'Patel', '9999988888', '5, Green Villa', 'Modhera Road', 'Mehsana', 'Gujarat', 'India', '384002', 0, NULL, '2022-07-25 01:03:44', '2022-07-25 01:05:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
