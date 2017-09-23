-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2017 at 09:03 PM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.15-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gxd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 'Men', 'men', 1, 0, '2017-05-12 08:46:05', '2017-05-12 08:46:05'),
(5, 'Woman', 'woman', 1, 0, '2017-05-12 08:46:25', '2017-05-12 08:46:25'),
(6, 'Accessories', 'accessories', 1, 0, '2017-05-12 08:48:25', '2017-05-12 08:48:25'),
(7, 'Trend', 'trend', 1, 0, '2017-05-12 08:48:50', '2017-05-12 08:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `title`, `slug`, `description`, `thumbnail`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'BAG YEAR 2017', 'bag-year-2017', '<h1>ROGUEin natural pebble leather with space patchesx</h1>\r\n\r\n<p>STYLE NO. 10976</p>\r\n\r\n<p><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A1\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a3?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /></p>\r\n\r\n<p><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A2\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a8?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /></p>\r\n\r\n<p><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A3\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a91?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /></p>\r\n\r\n<p><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A4\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a92?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /></p>\r\n\r\n<h2><a href=\"http://world.coach.com/coach-rogue-in-natural-pebble-leather-with-space-patches/10976.html?dwvar_color=BPM8Y#productDescription_swatchloaddefault_10976_20BPM8Y\">DESCRIPTION</a></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Introducing a limited-edition space collection inspired by American dreamers. The Rogue is crafted of natural pebble leather and embellished with playful leather patches based on NASA and exploring the unknown. It&rsquo;s perfect for fearless travelers who believe that anything is possible.</p>\r\n', '60cd2674504f790f7b58511c7a1f57a7.png', 1, 1, '2017-05-22 08:36:33', '2017-05-23 02:55:18'),
(3, 'XXXX', 'xxxx', '<p>2312</p>\r\n', '7085d6850c42f617e0e436f11c1e4a8b.png', 1, 1, '2017-05-22 17:00:57', '2017-05-23 02:54:52'),
(4, 'Sieu nhan', 'sieu-nhan', '<p>XYAZZ</p>\r\n', '7aa7188e4eb52850994e5980cebb02e9.png', 1, 0, '2017-05-23 02:55:50', '2017-05-23 03:59:29'),
(5, 'Token 2016', 'token-2016', '<p>ABC XYZ</p>\r\n', '7aa7188e4eb52850994e5980cebb02e9.png', 1, 1, '2017-05-23 03:30:35', '2017-05-23 03:31:50'),
(6, 'Token 201623', 'token-201623', '<p>ABC XYZ</p>\r\n', '9d27399f1887a63c5c34ff67372903e7.png', 1, 0, '2017-05-23 03:31:45', '2017-05-23 03:59:36'),
(7, 'Sieu nhan X', 'sieu-nhan-x', '<p>abc xuz</p>\r\n', '60cd2674504f790f7b58511c7a1f57a7.png', 1, 0, '2017-05-23 03:33:51', '2017-05-23 03:59:46'),
(8, 'XYZ', 'xyz', '<p>ASD</p>\r\n', '7aa7188e4eb52850994e5980cebb02e9.png', 1, 0, '2017-05-23 03:36:02', '2017-05-23 04:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `image`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'Black', 'ac10453d2f663f6c80ce5f70a0729c99.jpg', '2017-05-22 07:43:29', '2017-05-22 07:43:29', 0),
(2, 'Dark brown', 'dfb3dcf95dd6c087d25523e83d8e8a92.jpg', '2017-05-22 07:45:11', '2017-05-22 07:45:11', 0),
(3, 'Mahogany', '40883783a27c19c8cf2456fa8806bc7d.jpg', '2017-05-22 07:45:55', '2017-05-22 07:51:29', 0),
(4, 'Light Brown', 'ac10453d2f663f6c80ce5f70a0729c99.jpg', '2017-05-22 07:49:18', '2017-05-22 08:00:15', 0),
(5, 'Tan', '4f0e13c035280e876d6d8fe99ef888cb.jpg', '2017-05-22 07:49:58', '2017-05-22 07:49:58', 0),
(6, 'Natural', '65e0950cf30486c890a306658e088ee0.jpg', '2017-05-22 07:50:38', '2017-05-22 07:50:38', 0),
(7, 'Chocolate', '695e721f70b78df420fa4759739fb193.jpg', '2017-05-22 07:59:27', '2017-05-22 07:59:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mr.Liem', 'duyliemapt@gmail.com', '123', 'Examining 2 of the 50 containers being detained for suspected of using transit to illegally import prohibited goods, functional forces discovered hundreds of used motorcycles, worth billions of VND.', 1, '2017-05-04 17:00:00', '2017-05-13 03:39:25'),
(2, '123', '213', '213', '123', 0, '2017-05-16 10:27:20', '2017-05-16 10:27:20'),
(3, 'huy', 'subjec@gmail.com', '213', '123abc', 0, '2017-05-16 10:48:10', '2017-05-16 10:48:10'),
(4, 'asd', 'huyvlse90085@fpt.edu.vn', 'asd', 'asd', 0, '2017-05-18 08:46:29', '2017-05-18 08:46:29'),
(5, 'sad', 'sada@gmail.com', 'asda', 'asda', 0, '2017-05-18 09:00:38', '2017-05-18 09:00:38'),
(6, 'qwe', 'qe@gmail.com', 'qe', 'qe', 0, '2017-05-18 09:03:58', '2017-05-18 09:03:58'),
(8, 'ada', 'asdasd@gmail.com', 'ad', '23', 0, '2017-05-18 09:06:41', '2017-05-18 09:06:41'),
(9, '13', '21ad@gmail.com', 'asd', '123', 0, '2017-05-18 09:06:59', '2017-05-18 09:06:59'),
(10, '213', 'w2@gmail.com', '2131', '2', 0, '2017-05-18 09:10:25', '2017-05-18 09:10:25'),
(11, '3', '123@gmail.com', '23', '23', 0, '2017-05-18 09:12:03', '2017-05-18 09:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dollar', 1, '2017-05-04 17:00:00', '2017-05-13 03:12:56'),
(2, 'VND', 1, '2017-05-04 17:00:00', '2017-05-04 17:00:00'),
(3, 'Yen japan', 1, '2017-05-05 09:56:38', '2017-05-13 03:12:39'),
(4, 'Zen', 1, '2017-05-13 03:12:32', '2017-05-13 03:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `collection_id`, `image`, `size`, `is_deleted`, `created_at`, `updated_at`) VALUES
(49, 1, NULL, 'f7770a1315c493dc2dc2f5ccb20034b0.png', '380.4 Kb', 0, '2017-05-22 08:07:57', '2017-05-22 08:07:57'),
(50, 2, NULL, '10fb15c77258a991b0028080a64fb42d.png', '1,716.4 Kb', 0, '2017-05-22 08:52:46', '2017-05-22 08:52:46'),
(51, NULL, NULL, '98e734960a67ba566c9a24da8110ca67.png', '3,224.2 Kb', 0, '2017-05-22 16:51:50', '2017-05-22 16:51:50'),
(52, NULL, NULL, '7085d6850c42f617e0e436f11c1e4a8b.png', '49.5 Kb', 0, '2017-05-22 16:52:49', '2017-05-22 16:52:49'),
(53, NULL, NULL, '2819d77595766b2ebf5431e226ea22af.png', '2,190.0 Kb', 0, '2017-05-22 16:52:49', '2017-05-22 16:52:49'),
(54, NULL, NULL, 'ad5af8551ece2a2051052d27018a5177.jpg', '72.6 Kb', 0, '2017-05-22 16:52:49', '2017-05-22 16:52:49'),
(55, 3, NULL, '351820210b263b889c6bcd005d82b256.png', '42.0 Kb', 0, '2017-05-22 16:56:36', '2017-05-22 16:56:36'),
(56, 3, NULL, 'd1f0d8a835d1b2d8095a3de31d4ff30e.jpg', '47.4 Kb', 0, '2017-05-22 16:56:36', '2017-05-22 16:56:36'),
(57, 3, NULL, '3f25f93880d0f2e6e553ea83be323cb0.jpg', '26.9 Kb', 0, '2017-05-22 16:56:36', '2017-05-22 16:56:36'),
(58, 3, NULL, 'f168e5cb5dde86503d33c1c88188441e.png', '47.3 Kb', 0, '2017-05-22 16:56:36', '2017-05-22 16:56:36'),
(59, 3, NULL, '1a318caccb57d4e6118574cba3d09060.png', '63.5 Kb', 0, '2017-05-22 16:56:37', '2017-05-22 16:56:37'),
(60, NULL, 3, '099f90b29a77615ac4a89ab02caa5df7.jpg', '34.0 Kb', 0, '2017-05-22 17:00:57', '2017-05-22 17:00:57'),
(61, NULL, 3, '7085d6850c42f617e0e436f11c1e4a8b.png', '49.5 Kb', 0, '2017-05-22 17:00:57', '2017-05-22 17:00:57'),
(62, NULL, 3, '2819d77595766b2ebf5431e226ea22af.png', '2,190.0 Kb', 0, '2017-05-22 17:00:57', '2017-05-22 17:00:57'),
(63, NULL, 3, 'ad5af8551ece2a2051052d27018a5177.jpg', '72.6 Kb', 0, '2017-05-22 17:00:57', '2017-05-22 17:00:57'),
(64, NULL, 4, '31b6f541f9673e84c30514aa47c559ba.png', '81.1 Kb', 0, '2017-05-23 02:55:50', '2017-05-23 02:55:50'),
(65, NULL, 6, 'f7770a1315c493dc2dc2f5ccb20034b0.png', '380.4 Kb', 0, '2017-05-23 03:31:46', '2017-05-23 03:31:46'),
(66, NULL, 7, 'b6e194e12b973d84a3a14d9fb40fd6d0.png', '151.6 Kb', 0, '2017-05-23 03:33:51', '2017-05-23 03:33:51'),
(67, NULL, 8, '9d27399f1887a63c5c34ff67372903e7.png', '2,867.1 Kb', 0, '2017-05-23 03:36:02', '2017-05-23 03:36:02'),
(68, NULL, 8, 'd52b9edae25428ff2fe28372ada93b6b.jpg', '251.6 Kb', 0, '2017-05-23 03:56:38', '2017-05-23 03:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `material`, `image`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'letheat', 'f7770a1315c493dc2dc2f5ccb20034b0.png', '2017-05-05 17:00:00', '2017-05-15 08:53:07', 1),
(2, 'Gxd', '57a2994df3fbbb2373a5a2bd66237014.png', '2017-05-05 19:56:51', '2017-05-05 19:58:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_24_011515_create_products_table', 1),
('2016_12_02_023343_create_oders_detail_table', 1),
('2017_05_04_154237_create_profiles_table', 1),
('2017_05_04_154547_create_subscribes_table', 1),
('2017_05_04_154635_create_contacts_table', 1),
('2017_05_04_154804_create_posts_table', 1),
('2017_05_04_155031_create_categories_table', 1),
('2017_05_04_155202_create_orders_table', 1),
('2017_05_04_155912_create_product_size_table', 1),
('2017_05_04_160002_create_sizes_table', 1),
('2017_05_04_160107_create_collections_table', 1),
('2017_05_04_160210_create_product_collection_table', 1),
('2017_05_04_160253_create_images_table', 1),
('2017_05_04_160418_create_currencies_table', 1),
('2017_05_05_075608_create_slides_table', 1),
('2017_05_05_102032_create_colors_table', 1),
('2017_05_05_102115_create_materials_table', 1),
('2017_05_05_102607_create_tags_table', 1),
('2017_05_05_103119_create_product_tag_table', 1),
('2017_05_05_104521_create_post_tag_table', 1),
('2017_01_22_190244_entrust_setup_tables', 2),
('2017_02_25_193122_add_module_column_to_permission_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oders_detail`
--

CREATE TABLE `oders_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` double NOT NULL DEFAULT '0',
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `product_id`, `title`, `slug`, `description`, `content`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(15, 1, 'Bag for men1', 'bag-for-men', 'DESCRIPTION\r\nIntroducing a limited-edition space collection inspired by American dreamers. The Rogue is crafted of natural pebble leather and embellished with playful leather patches based on NASA and exploring the unknown. It’s perfect for fearless travelers who believe that anything is possible.\r\n\r\n', '<h2><a href=\"http://world.coach.com/coach-rogue-in-natural-pebble-leather-with-space-patches/10976.html?dwvar_color=BPM8Y#productDetails_swatchloaddefault_10976_20BPM8Y\">DETAILS</a></h2>\r\n\r\n<ul>\r\n	<li>Natural pebble leather</li>\r\n	<li>Inside zip and French purse pockets</li>\r\n	<li>Zip closure, fabric and suede lining</li>\r\n	<li>Two open compartments</li>\r\n	<li>Handles with 3 1/2&quot; drop</li>\r\n	<li>Detachable straps with 10&quot; drop for shoulder wear</li>\r\n	<li>Shoulder straps can be linked together for crossbody wear</li>\r\n	<li>12 1/4&quot; (L) x 9 3/4&quot; (H) x 5 1/2&quot; (W)</li>\r\n	<li>Coach 1941 collection</li>\r\n</ul>\r\n\r\n<h1>ROGUEin natural pebble leather with space patches</h1>\r\n\r\n<p>STYLE NO. 10976</p>\r\n\r\n<p><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A1\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a3?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A2\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a8?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A3\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a91?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /><img alt=\"Rogue in Natural Pebble Leather With Space Patches - Alternate View A4\" src=\"http://s7d2.scene7.com/is/image/Coach/10976_a92?fmt=jpeg&amp;wid=256&amp;qlt=75,1&amp;op_sharpen=1&amp;resMode=bicub&amp;op_usm=0,0,0,0&amp;iccEmbed=0\" /></p>\r\n', 1, 0, '2017-05-22 08:10:05', '2017-05-22 10:03:57'),
(16, 2, 'GXY', 'gxy', 'ON AIR! \r\nCÓ EM CHỜ (OFFICIAL MV) CỦA MIN CHÍNH THỨC RA MẮT CÁC BẠN NHÉ!\r\nMV lên sóng vào hôm nay (ngày 10.05). Min và ekip tin rằng mọi người sẽ khá bất ngờ với concept MV lần này. Các fan liên tục comment thể hiện mong muốn Min và Mr.A sẽ có những cảnh vô cùng lãng mạn, nhưng thật ra Min và Mr.A mà lãng mạn kiểu sến súa thì sai lắm. Vì vậy đảm bảo khi xem MV Có em chờ, các bạn sẽ phải nhoẻn miệng cười theo chúng mình đấy nhé. Đây sẽ là “phát súng” đầu tiên của Min trong năm nay, MV Có em chờ là một trong chuỗi MV sẽ  được ra mắt liên tiếp nhau trong hè này. Hãy để Min “ám” tai phone của các bạn thật lâu nhé!', '<p>►SUSBCRIBE kênh YouTube chính thức của MIN tại: <a href=\"http://bit.ly/min_youtube\">http://bit.ly/min_youtube</a> ------------------- * MIN&#39;s Fanpage, Facebook and Instagram * <a href=\"https://www.facebook.com/min.official.min/\">https://www.facebook.com/min.official...</a> <a href=\"http://www.facebook.com/minho.bita\">http://www.facebook.com/minho.bita</a> <a href=\"http://instagram.com/minminmin0712\">http://instagram.com/minminmin0712</a> ------------------- * CREDITS * Executive Producer: MIN Production &amp; Artist Manager: RIN NGUYEN Music Producer: Khắc Hưng MV Production: THE RED TEAM Music Composer: Kai Đinh Mixing &amp; Mastering: AD Production Music Consultant: Nguyễn Trần Trung Quân</p>\r\n', 1, 0, '2017-05-22 10:10:14', '2017-05-22 10:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(7, 3, 3, '2017-05-06 17:00:00', '2017-05-06 17:00:00'),
(8, 3, 4, '2017-05-06 17:00:00', '2017-05-06 17:00:00'),
(9, 7, 3, '2017-05-17 06:30:35', '2017-05-17 06:30:35'),
(10, 10, 3, '2017-05-20 02:21:58', '2017-05-20 02:21:58'),
(11, 14, 3, '2017-05-21 14:41:17', '2017-05-21 14:41:17'),
(12, 14, 4, '2017-05-21 14:41:17', '2017-05-21 14:41:17'),
(14, 12, 10, '2017-05-22 03:37:03', '2017-05-22 03:37:03'),
(15, 13, 10, '2017-05-22 03:37:03', '2017-05-22 03:37:03'),
(16, 12, 8, '2017-05-22 03:39:48', '2017-05-22 03:39:48'),
(17, 13, 8, '2017-05-22 03:39:48', '2017-05-22 03:39:48'),
(18, 14, 8, '2017-05-22 03:39:48', '2017-05-22 03:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` double DEFAULT NULL,
  `start_day` date DEFAULT NULL,
  `end_day` date DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `price`, `discount`, `start_day`, `end_day`, `description`, `thumbnail`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 4, 'Bag men', 'bag-men', 25, 0, '2017-05-21', '2017-05-27', '<p>Introducing a limited-edition space collection inspired by American dreamers. The Rogue is crafted of natural pebble leather and embellished with playful leather patches based on NASA and exploring the unknown. It&rsquo;s perfect for fearless travelers who believe that anything is possible.</p>\r\n', 'c4a34730da74ed4556b8dfd23eff2647.png', 1, 0, '2017-05-22 08:05:34', '2017-05-22 08:05:34'),
(2, 4, 'GXY', 'gxy', 25, 5, '2017-05-21', '2017-05-27', '<p>GXY BEST DISCOUNT</p>\r\n', '7f29de041b4a20f52e2b5a003d4cdf94.png', 1, 0, '2017-05-22 08:52:46', '2017-05-22 08:52:46'),
(3, 5, 'sada', 'sada', 23, 2, '2017-05-04', '2017-05-18', '<p>213</p>\r\n', '6351958f2cada37b0b8e5a6d19c84818.jpg', 1, 0, '2017-05-22 16:56:36', '2017-05-22 16:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_collection`
--

CREATE TABLE `product_collection` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_collection`
--

INSERT INTO `product_collection` (`id`, `product_id`, `collection_id`, `created_at`, `updated_at`) VALUES
(52, 4, 9, '2017-05-13 02:12:54', '2017-05-13 02:12:54'),
(55, 4, 10, '2017-05-13 02:18:15', '2017-05-13 02:18:15'),
(56, 6, 10, '2017-05-13 02:18:15', '2017-05-13 02:18:15'),
(57, 2, 11, '2017-05-13 03:03:46', '2017-05-13 03:03:46'),
(59, 6, 12, '2017-05-13 03:04:26', '2017-05-13 03:04:26'),
(60, 7, 12, '2017-05-13 03:04:26', '2017-05-13 03:04:26'),
(62, 7, 13, '2017-05-13 03:04:48', '2017-05-13 03:04:48'),
(63, 3, 11, '2017-05-13 03:49:55', '2017-05-13 03:49:55'),
(64, 3, 12, '2017-05-13 03:49:55', '2017-05-13 03:49:55'),
(65, 1, 11, '2017-05-13 03:50:22', '2017-05-13 03:50:22'),
(66, 3, 14, '2017-05-15 08:10:27', '2017-05-15 08:10:27'),
(67, 4, 14, '2017-05-15 08:10:27', '2017-05-15 08:10:27'),
(68, 3, 15, '2017-05-15 08:12:11', '2017-05-15 08:12:11'),
(69, 4, 15, '2017-05-15 08:12:11', '2017-05-15 08:12:11'),
(77, 25, 18, '2017-05-20 03:43:40', '2017-05-20 03:43:40'),
(78, 26, 18, '2017-05-20 03:43:40', '2017-05-20 03:43:40'),
(79, 25, 19, '2017-05-20 03:47:45', '2017-05-20 03:47:45'),
(80, 26, 19, '2017-05-20 03:47:45', '2017-05-20 03:47:45'),
(81, 25, 20, '2017-05-20 03:50:57', '2017-05-20 03:50:57'),
(82, 25, 21, '2017-05-20 12:58:31', '2017-05-20 12:58:31'),
(89, 25, 22, '2017-05-20 13:26:19', '2017-05-20 13:26:19'),
(90, 26, 22, '2017-05-20 13:26:20', '2017-05-20 13:26:20'),
(92, 31, 23, '2017-05-21 14:43:03', '2017-05-21 14:43:03'),
(96, 37, 23, '2017-05-22 04:40:12', '2017-05-22 04:40:12'),
(97, 37, 24, '2017-05-22 04:40:12', '2017-05-22 04:40:12'),
(100, 38, 23, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(101, 38, 24, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(102, 30, 23, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(110, 1, 1, '2017-05-22 16:51:50', '2017-05-22 16:51:50'),
(111, 2, 1, '2017-05-22 16:51:50', '2017-05-22 16:51:50'),
(112, 1, 2, '2017-05-22 16:52:49', '2017-05-22 16:52:49'),
(113, 2, 2, '2017-05-22 16:52:49', '2017-05-22 16:52:49'),
(114, 3, 1, '2017-05-22 16:56:37', '2017-05-22 16:56:37'),
(115, 3, 2, '2017-05-22 16:56:37', '2017-05-22 16:56:37'),
(116, 1, 3, '2017-05-22 17:00:57', '2017-05-22 17:00:57'),
(117, 2, 3, '2017-05-22 17:00:57', '2017-05-22 17:00:57'),
(134, 1, 4, '2017-05-23 03:59:29', '2017-05-23 03:59:29'),
(135, 2, 4, '2017-05-23 03:59:29', '2017-05-23 03:59:29'),
(138, 1, 7, '2017-05-23 03:59:46', '2017-05-23 03:59:46'),
(139, 2, 7, '2017-05-23 03:59:46', '2017-05-23 03:59:46'),
(140, 1, 6, '2017-05-23 04:00:59', '2017-05-23 04:00:59'),
(141, 2, 6, '2017-05-23 04:00:59', '2017-05-23 04:00:59'),
(142, 1, 8, '2017-05-23 04:01:25', '2017-05-23 04:01:25'),
(143, 2, 8, '2017-05-23 04:01:25', '2017-05-23 04:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(4, 7, 2, '2017-05-07 01:33:12', '2017-05-07 01:33:12'),
(5, 7, 3, '2017-05-07 01:33:12', '2017-05-07 01:33:12'),
(18, 4, 4, '2017-05-13 04:02:35', '2017-05-13 04:02:35'),
(19, 6, 4, '2017-05-13 04:02:35', '2017-05-13 04:02:35'),
(20, 7, 4, '2017-05-13 04:02:35', '2017-05-13 04:02:35'),
(21, 27, 1, '2017-05-21 12:38:06', '2017-05-21 12:38:06'),
(24, 27, 4, '2017-05-21 12:38:06', '2017-05-21 12:38:06'),
(31, 37, 2, '2017-05-22 04:40:12', '2017-05-22 04:40:12'),
(32, 37, 3, '2017-05-22 04:40:12', '2017-05-22 04:40:12'),
(37, 38, 1, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(38, 38, 2, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(39, 30, 3, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(40, 30, 4, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(45, 1, 1, '2017-05-22 08:07:57', '2017-05-22 08:07:57'),
(46, 1, 2, '2017-05-22 08:07:57', '2017-05-22 08:07:57'),
(47, 1, 3, '2017-05-22 08:07:57', '2017-05-22 08:07:57'),
(48, 1, 4, '2017-05-22 08:07:57', '2017-05-22 08:07:57'),
(49, 2, 1, '2017-05-22 08:52:46', '2017-05-22 08:52:46'),
(50, 2, 2, '2017-05-22 08:52:46', '2017-05-22 08:52:46'),
(51, 2, 3, '2017-05-22 08:52:46', '2017-05-22 08:52:46'),
(52, 3, 2, '2017-05-22 16:56:37', '2017-05-22 16:56:37'),
(53, 3, 3, '2017-05-22 16:56:37', '2017-05-22 16:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(4, 2, 7, '2017-05-06 21:14:34', '2017-05-06 21:14:34'),
(10, 4, 6, '2017-05-07 00:09:10', '2017-05-07 00:09:10'),
(11, 4, 7, '2017-05-07 00:09:10', '2017-05-07 00:09:10'),
(13, 7, 2, '2017-05-07 01:33:12', '2017-05-07 01:33:12'),
(16, 3, 7, '2017-05-15 08:58:59', '2017-05-15 08:58:59'),
(21, 31, 9, '2017-05-22 03:39:58', '2017-05-22 03:39:58'),
(28, 31, 8, '2017-05-22 04:14:25', '2017-05-22 04:14:25'),
(29, 31, 11, '2017-05-22 04:19:06', '2017-05-22 04:19:06'),
(39, 37, 8, '2017-05-22 04:40:12', '2017-05-22 04:40:12'),
(40, 37, 10, '2017-05-22 04:40:12', '2017-05-22 04:40:12'),
(44, 31, 12, '2017-05-22 04:49:23', '2017-05-22 04:49:23'),
(49, 38, 8, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(50, 38, 10, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(51, 38, 12, '2017-05-22 04:50:40', '2017-05-22 04:50:40'),
(52, 30, 8, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(53, 30, 9, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(54, 30, 10, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(55, 30, 12, '2017-05-22 07:15:21', '2017-05-22 07:15:21'),
(57, 1, 8, '2017-05-22 08:07:57', '2017-05-22 08:07:57'),
(58, 2, 8, '2017-05-22 08:52:46', '2017-05-22 08:52:46'),
(59, 3, 9, '2017-05-22 16:56:37', '2017-05-22 16:56:37'),
(60, 3, 10, '2017-05-22 16:56:37', '2017-05-22 16:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `email`, `dob`, `address`, `phone`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(8, 9, NULL, NULL, NULL, '2017-05-19', '221 Hai Ba trung', '0944512030', 1, 1, '2017-05-24 03:09:07', '2017-05-24 03:16:55'),
(9, 10, NULL, NULL, NULL, '1222-12-13', '213 Hai ba trung', '0944512030', 1, 1, '2017-05-24 03:09:59', '2017-05-24 03:13:33'),
(10, 11, NULL, NULL, NULL, '1333-12-31', '221 Hai Ba trung', '0944512030', 1, 1, '2017-05-24 03:15:34', '2017-05-24 03:16:52'),
(11, 12, NULL, NULL, 'huy2@gmail.com', '1333-12-31', '221 Hai Ba trung1', '094451203021', 1, 0, '2017-05-24 03:17:21', '2017-05-24 07:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `type`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'Small', '2017-05-05 17:00:00', '2017-05-05 17:00:00', 0),
(2, 'Normal', '2017-05-05 17:00:00', '2017-05-05 17:00:00', 0),
(3, 'Big', '2017-05-05 20:23:57', '2017-05-05 20:24:07', 0),
(4, 'Smallest', '2017-05-07 01:41:53', '2017-05-13 04:02:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `slug`, `description`, `thumbnail`, `link`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Tokyo hot 2018', 'tokyo-hot-2018', 'TOKYO VIEW', '9d27399f1887a63c5c34ff67372903e7.png', '#', 1, 0, '2017-05-22 08:19:17', '2017-05-22 08:26:30'),
(2, 'Tokyo hot 2016', 'tokyo-hot-2016', 'HOT VKL', '7aa7188e4eb52850994e5980cebb02e9.png', '#', 1, 0, '2017-05-22 08:27:29', '2017-05-22 08:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'huyendoan1809@gmail.com', '2017-05-05 17:00:00', '2017-05-05 17:00:00'),
(2, 'huyvl@gmail.com', '2017-05-05 17:00:00', '2017-05-05 17:00:00'),
(3, 'huy1@gmail.com', '2017-05-20 02:44:33', '2017-05-20 02:44:33'),
(4, 'kim@gmail.com', '2017-05-20 02:45:00', '2017-05-20 02:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Women1', 'women1', 1, 1, '2017-05-05 17:00:00', '2017-05-21 14:55:41'),
(2, 'Men Trending', 'men-trending', 1, 1, '2017-05-05 20:43:31', '2017-05-21 14:55:43'),
(3, 'Tag demo1', 'tag-demo1', 0, 1, '2017-05-06 00:16:11', '2017-05-21 14:55:46'),
(4, 'Tag demo', 'tag-demo', 0, 1, '2017-05-06 00:17:43', '2017-05-21 14:55:49'),
(5, 'Wallet', 'wallet', 1, 1, '2017-05-06 20:45:51', '2017-05-21 14:55:51'),
(6, 'Wallet Trending', 'wallet-trending', 1, 1, '2017-05-06 20:48:16', '2017-05-21 14:55:54'),
(7, 'Wallet Trending2', 'wallet-trending2', 1, 1, '2017-05-06 20:56:29', '2017-05-21 14:55:56'),
(8, 'Men', 'men', 1, 0, '2017-05-21 14:56:17', '2017-05-21 14:56:17'),
(9, 'Menx', 'menx', 1, 0, '2017-05-21 14:56:45', '2017-05-21 14:56:45'),
(10, 'Nammo', 'nammo', 1, 0, '2017-05-22 03:37:03', '2017-05-22 03:37:03'),
(11, 'Liam', 'liam', 1, 0, '2017-05-22 03:40:37', '2017-05-22 03:40:37'),
(12, 'Sieu nhan', 'sieu-nhan', 1, 0, '2017-05-22 04:49:23', '2017-05-22 04:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activated_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `activated_code`, `is_active`, `status`, `is_deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Nam', '6f92fd79e1a023d9d013cb2673e05df4.png', 'nam@gmail.com', '$2y$10$uMXih/kK6pBOqgQgfMQ2l.L4eXbhZiQcDEHlDGWtWcXX59Ic3lRFu', '104de87c682093294309cce3b30fddf2', 0, 1, 1, NULL, '2017-05-24 03:09:07', '2017-05-24 03:16:55'),
(10, 'cuongdm', 'avatar.png', 'sieunhan@gmail.com', '$2y$10$T9F41IkSH1s5gtPvcaJRn.6U5nBajz7M6ukZ4xw8T6vgg/adBrWkC', 'd7eef4d2bee64716716fec1cedf53504', 0, 1, 1, NULL, '2017-05-24 03:09:59', '2017-05-24 03:13:33'),
(11, 'nam123456', 'bg.png', 'huy1@gmail.com', '', '75a65de47a572be779d5c8d3fa30c16a', 0, 1, 1, 'M4610KxA6UI6LJcYFBmexxZYpYYYbaxhkoZjzHMeTPc2t5MwdYBJAheNtQcU', '2017-05-24 03:15:34', '2017-05-24 08:16:47'),
(12, 'Sieunhan3', 'avatar.png', 'huy2@gmail.com', '1234567', 'da0671ef763f53a18c456d3364ef6c01', 0, 1, 0, 'QJ8Kq7adhG4EwcwoWdhV2gLpfH4h9NZDqXVw8lYvBtTqUO9BXTVjv3sKtIVt', '2017-05-24 03:17:21', '2017-05-24 07:46:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_collection`
--
ALTER TABLE `product_collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `oders_detail`
--
ALTER TABLE `oders_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_collection`
--
ALTER TABLE `product_collection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
