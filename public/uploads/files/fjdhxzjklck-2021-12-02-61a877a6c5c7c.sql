-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 07:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismoo_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletable` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `deletable`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'hemel@gmail.com', NULL, '$2y$10$RqkCPlPPEe7nIjiQpochg.rUqH2vd1m.RqWlEWOt.YDsf9.04HF4W', 0, NULL, '2021-11-30 05:23:07', '2021-11-30 05:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leftsidebar_id` int(11) NOT NULL,
  `rightsidebar_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `image`, `desc`, `leftsidebar_id`, `rightsidebar_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Printers', 'printers', 0, 'printers-2021-11-30-61a60b36104d0.png', 'we', 0, 0, 1, '2021-11-30 05:29:58', '2021-11-30 05:29:58'),
(2, 'Biscuittttt', 'biscuittttt', 0, 'biscuittttt-2021-11-30-61a60b41ead68.png', 'qwe', 0, 0, 1, '2021-11-30 05:30:09', '2021-11-30 05:30:09'),
(3, 'Dry Cake', 'dry-cake', 2, 'dry-cake-2021-11-30-61a60b5112ed4.png', 'fg', 0, 0, 1, '2021-11-30 05:30:25', '2021-12-01 00:15:37'),
(4, 'test', 'test', 1, 'test-2021-12-01-61a7101358b06.png', 'arg', 0, 0, 1, '2021-12-01 00:02:59', '2021-12-01 00:08:14'),
(5, 'child category 1', 'child-category-1', 1, 'child-category-1-2021-12-01-61a7135188856.png', 'ert', 0, 1, 1, '2021-12-01 00:16:49', '2021-12-01 00:16:49'),
(6, 'child category 2', 'child-category-2', 1, 'child-category-2-2021-12-01-61a71360ebf73.png', 'df', 0, 1, 1, '2021-12-01 00:17:04', '2021-12-01 00:17:04'),
(7, 'child category 3', 'child-category-3', 2, 'child-category-3-2021-12-01-61a7137c1db91.png', 'srg', 0, 0, 1, '2021-12-01 00:17:32', '2021-12-01 00:17:32'),
(8, 'child category 4', 'child-category-4', 2, 'child-category-4-2021-12-01-61a7138a70db4.png', 'sryju', 0, 0, 1, '2021-12-01 00:17:46', '2021-12-01 00:17:46'),
(9, 'Youtube Video', 'youtube-video', 0, 'https://www.youtube.com/watch?v=bCtlituS9p8', 'Here we will post youtube video link', 0, 1, 0, '2021-12-01 05:19:25', '2021-12-01 06:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 5, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contentcategories`
--

CREATE TABLE `contentcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leftsidebar_id` int(11) NOT NULL,
  `rightsidebar_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contentcategory_contentpost`
--

CREATE TABLE `contentcategory_contentpost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contentpost_id` bigint(20) UNSIGNED NOT NULL,
  `contentcategory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contentposts`
--

CREATE TABLE `contentposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallaryimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `rightsidebar_id` int(11) NOT NULL,
  `leftsidebar_id` int(11) NOT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `filemanager`
--

CREATE TABLE `filemanager` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `absolute_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filemanager`
--

INSERT INTO `filemanager` (`id`, `name`, `ext`, `file_size`, `user_id`, `absolute_url`, `extra`, `created_at`, `updated_at`) VALUES
(1, 'bullet_arrow.png', 'png', 11513.00, 1, 'http://localhost/kodepress/public/filemanager/uploads/bullet_arrow.png', '{\"width\":1024,\"height\":1706}', '2021-12-01 01:14:43', '2021-12-01 01:14:43'),
(2, 'National-Portal-Card-PM.jpeg', 'jpeg', 72342.00, 1, 'http://localhost/kodepress/public/filemanager/uploads/National-Portal-Card-PM.jpeg', '{\"width\":1024,\"height\":581}', '2021-12-01 01:22:52', '2021-12-01 01:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `frontmenuitems`
--

CREATE TABLE `frontmenuitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `frontmenu_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divider_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontmenuitems`
--

INSERT INTO `frontmenuitems` (`id`, `frontmenu_id`, `type`, `parent_id`, `order`, `title`, `divider_title`, `slug`, `target`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 0, 1, 'home', NULL, 'home', NULL, '2021-11-30 05:30:57', '2021-11-30 06:00:30'),
(2, 1, NULL, 0, 2, 'about-us', NULL, 'about-us', NULL, '2021-11-30 05:30:57', '2021-11-30 22:41:50'),
(3, 2, NULL, 0, 1, 'printers', NULL, 'printers', NULL, '2021-11-30 06:00:14', '2021-11-30 22:48:43'),
(4, 2, NULL, 0, 2, 'biscuittttt', NULL, 'biscuittttt', NULL, '2021-11-30 06:00:15', '2021-11-30 22:48:43'),
(5, 2, NULL, 4, 1, 'dry-cake', NULL, 'dry-cake', NULL, '2021-11-30 06:00:15', '2021-11-30 22:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `frontmenus`
--

CREATE TABLE `frontmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontmenus`
--

INSERT INTO `frontmenus` (`id`, `title`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test2', 'main-menu', 1, '2021-11-30 05:27:11', '2021-12-01 06:13:25'),
(2, 'footer', 'main-menu', 0, '2021-11-30 06:00:02', '2021-12-01 06:13:25'),
(5, 'sdfg', 'main-menu', 0, '2021-11-30 22:46:02', '2021-12-01 06:13:25');

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
(4, '2020_05_02_100001_create_filemanager_table', 1),
(5, '2021_11_13_082206_create_modules_table', 1),
(6, '2021_11_13_082255_create_permissions_table', 1),
(7, '2021_11_13_082312_create_roles_table', 1),
(8, '2021_11_13_082357_create_permission_role_table', 1),
(9, '2021_11_13_101402_create_admins_table', 1),
(10, '2021_11_15_051524_create_categories_table', 1),
(11, '2021_11_16_061038_create_sidebars_table', 1),
(12, '2021_11_16_120238_create_widgets_table', 1),
(13, '2021_11_17_103409_create_posts_table', 1),
(14, '2021_11_17_103808_create_category_post_table', 1),
(15, '2021_11_20_093651_create_contentcategories_table', 1),
(16, '2021_11_20_113758_create_contentposts_table', 1),
(17, '2021_11_20_121500_create_contentcategory_contentpost_table', 1),
(18, '2021_11_22_052344_create_pages_table', 1),
(19, '2021_11_25_083817_create_frontmenus_table', 1),
(20, '2021_11_25_084358_create_frontmenuitems_table', 1),
(21, '2021_11_27_102443_create_sliders_table', 1),
(23, '2021_11_27_111153_create_slides_table', 2),
(25, '2021_12_01_130834_create_videos_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin Dashboard', '2021-11-30 05:22:44', '2021-11-30 05:22:44'),
(2, 'Role Management', '2021-11-30 05:22:45', '2021-11-30 05:22:45'),
(3, 'User Management', '2021-11-30 05:22:46', '2021-11-30 05:22:46'),
(4, 'Blog-Category Management', '2021-11-30 05:22:48', '2021-11-30 05:22:48'),
(5, 'Blog-Post Management', '2021-11-30 05:22:49', '2021-11-30 05:22:49'),
(6, 'Content-Category Management', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(7, 'Content-Post Management', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(8, 'Page Management', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(9, 'Sidebar Management', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(10, 'Widget Management', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(11, 'Front Menu Management', '2021-11-30 05:22:55', '2021-11-30 05:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `gallaryimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `rightsidebar_id` int(11) NOT NULL,
  `leftsidebar_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `admin_id`, `title`, `slug`, `image`, `gallaryimage`, `body`, `status`, `is_approved`, `rightsidebar_id`, `leftsidebar_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home', 'home', 'home-2021-11-30-61a60b27cb97e.png', 'home--61a60b27cbc16.png', '<p>wef</p>', 1, 1, 0, 0, '2021-11-30 05:29:43', '2021-11-30 05:29:43'),
(2, 1, 'about us', 'about-us', 'about-us-2021-11-30-61a60b64d7ec3.png', 'about-us--61a60b64d809d.png', '<p>wf</p>', 1, 1, 0, 0, '2021-11-30 05:30:44', '2021-11-30 05:30:44');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `module_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Access Dashboard', 'app.dashboard', '2021-11-30 05:22:44', '2021-11-30 05:22:44'),
(2, 2, 'View (Global)', 'app.roles.global', '2021-11-30 05:22:45', '2021-11-30 05:22:45'),
(3, 2, 'View (Self)', 'app.roles.self', '2021-11-30 05:22:45', '2021-11-30 05:22:45'),
(4, 2, 'Create Role', 'app.roles.create', '2021-11-30 05:22:46', '2021-11-30 05:22:46'),
(5, 2, 'Edit Role', 'app.roles.edit', '2021-11-30 05:22:46', '2021-11-30 05:22:46'),
(6, 2, 'Delete Role', 'app.roles.destroy', '2021-11-30 05:22:46', '2021-11-30 05:22:46'),
(7, 3, 'View (Global)', 'app.users.global', '2021-11-30 05:22:46', '2021-11-30 05:22:46'),
(8, 3, 'View (Self)', 'app.users.self', '2021-11-30 05:22:46', '2021-11-30 05:22:46'),
(9, 3, 'Create User', 'app.users.create', '2021-11-30 05:22:47', '2021-11-30 05:22:47'),
(10, 3, 'Edit User', 'app.users.edit', '2021-11-30 05:22:47', '2021-11-30 05:22:47'),
(11, 3, 'Delete User', 'app.users.destroy', '2021-11-30 05:22:47', '2021-11-30 05:22:47'),
(12, 4, 'View (Global)', 'app.blog.categories.global', '2021-11-30 05:22:48', '2021-11-30 05:22:48'),
(13, 4, 'View (Self)', 'app.blog.categories.self', '2021-11-30 05:22:48', '2021-11-30 05:22:48'),
(14, 4, 'Create BlogCategory', 'app.blog.categories.create', '2021-11-30 05:22:48', '2021-11-30 05:22:48'),
(15, 4, 'Edit BlogCategory', 'app.blog.categories.edit', '2021-11-30 05:22:48', '2021-11-30 05:22:48'),
(16, 4, 'Delete BlogCategory', 'app.blog.categories.destroy', '2021-11-30 05:22:48', '2021-11-30 05:22:48'),
(17, 4, 'Approve BlogCategory', 'app.blog.categories.approve', '2021-11-30 05:22:49', '2021-11-30 05:22:49'),
(18, 5, 'View (Global)', 'app.blog.posts.global', '2021-11-30 05:22:49', '2021-11-30 05:22:49'),
(19, 5, 'View (Self)', 'app.blog.posts.self', '2021-11-30 05:22:49', '2021-11-30 05:22:49'),
(20, 5, 'Create BlogPost', 'app.blog.posts.create', '2021-11-30 05:22:49', '2021-11-30 05:22:49'),
(21, 5, 'Edit BlogPost', 'app.blog.posts.edit', '2021-11-30 05:22:49', '2021-11-30 05:22:49'),
(22, 5, 'Details BlogPost', 'app.blog.posts.details', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(23, 5, 'Delete BlogPost', 'app.blog.posts.destroy', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(24, 5, 'Approve BlogPost', 'app.blog.posts.status', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(25, 5, 'Approve BlogPost', 'app.blog.posts.approve', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(26, 6, 'View (Global)', 'app.content.categories.global', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(27, 6, 'View (Self)', 'app.content.categories.self', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(28, 6, 'Create ContentCategory', 'app.content.categories.create', '2021-11-30 05:22:50', '2021-11-30 05:22:50'),
(29, 6, 'Edit ContentCategory', 'app.content.categories.edit', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(30, 6, 'Delete ContentCategory', 'app.content.categories.destroy', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(31, 6, 'Approve ContentCategory', 'app.content.categories.approve', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(32, 7, 'View (Global)', 'app.content.posts.global', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(33, 7, 'View (Self)', 'app.content.posts.self', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(34, 7, 'Create ContentPost', 'app.content.posts.create', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(35, 7, 'Edit ContentPost', 'app.content.posts.edit', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(36, 7, 'Details ContentPost', 'app.content.posts.details', '2021-11-30 05:22:51', '2021-11-30 05:22:51'),
(37, 7, 'Delete ContentPost', 'app.content.posts.destroy', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(38, 7, 'Approve ContentPost', 'app.content.posts.status', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(39, 7, 'Approve ContentPost', 'app.content.posts.approve', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(40, 8, 'View (Global)', 'app.pages.global', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(41, 8, 'View (Self)', 'app.pages.self', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(42, 8, 'Create Page', 'app.pages.create', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(43, 8, 'Edit Page', 'app.pages.edit', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(44, 8, 'Details Page', 'app.pages.details', '2021-11-30 05:22:52', '2021-11-30 05:22:52'),
(45, 8, 'Delete Page', 'app.pages.destroy', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(46, 8, 'Approve Page', 'app.pages.status', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(47, 8, 'Approve Page', 'app.pages.approve', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(48, 9, 'View (Global)', 'app.sidebars.global', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(49, 9, 'View (Self)', 'app.sidebars.self', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(50, 9, 'Create Sidebar', 'app.sidebars.create', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(51, 9, 'Edit Sidebar', 'app.sidebars.edit', '2021-11-30 05:22:53', '2021-11-30 05:22:53'),
(52, 9, 'Delete Sidebar', 'app.sidebars.destroy', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(53, 9, 'Approve Sidebar', 'app.sidebars.status', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(54, 9, 'Sidebar Builder', 'app.sidebars.widgetbuilder', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(55, 10, 'View (Global)', 'app.widgets.global', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(56, 10, 'View (Self)', 'app.widgets.self', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(57, 10, 'Create Widget', 'app.widgets.create', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(58, 10, 'Edit Widget', 'app.widgets.edit', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(59, 10, 'Delete Widget', 'app.widgets.destroy', '2021-11-30 05:22:54', '2021-11-30 05:22:54'),
(60, 10, 'Widget Builder', 'app.widgets.widgetbuilder', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(61, 11, 'View (Global)', 'app.front.menus.global', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(62, 11, 'View (Self)', 'app.front.menus.self', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(63, 11, 'Create Frontmenu', 'app.front.menus.create', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(64, 11, 'Edit Frontmenu', 'app.front.menus.edit', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(65, 11, 'Delete Frontmenu', 'app.front.menus.destroy', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(66, 11, 'Approve Frontmenu', 'app.front.menus.status', '2021-11-30 05:22:55', '2021-11-30 05:22:55'),
(67, 11, 'Menu Builder', 'app.front.menus.widgetbuilder', '2021-11-30 05:22:56', '2021-11-30 05:22:56'),
(68, 10, 'View (Global)', 'app.front.menuitems.global', '2021-11-30 05:22:56', '2021-11-30 05:22:56'),
(69, 10, 'View (Self)', 'app.front.menuitems.self', '2021-11-30 05:22:56', '2021-11-30 05:22:56'),
(70, 10, 'Create Frontmenuitem', 'app.front.menuitems.create', '2021-11-30 05:22:56', '2021-11-30 05:22:56'),
(71, 10, 'Edit Frontmenuitem', 'app.front.menuitems.edit', '2021-11-30 05:22:56', '2021-11-30 05:22:56'),
(72, 10, 'Delete Frontmenuitem', 'app.front.menuitems.destroy', '2021-11-30 05:22:56', '2021-11-30 05:22:56'),
(73, 10, 'menuitem Builder', 'app.front.menuitems.widgetbuilder', '2021-11-30 05:22:56', '2021-11-30 05:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 1, NULL, NULL),
(17, 17, 1, NULL, NULL),
(18, 18, 1, NULL, NULL),
(19, 19, 1, NULL, NULL),
(20, 20, 1, NULL, NULL),
(21, 21, 1, NULL, NULL),
(22, 22, 1, NULL, NULL),
(23, 23, 1, NULL, NULL),
(24, 24, 1, NULL, NULL),
(25, 25, 1, NULL, NULL),
(26, 26, 1, NULL, NULL),
(27, 27, 1, NULL, NULL),
(28, 28, 1, NULL, NULL),
(29, 29, 1, NULL, NULL),
(30, 30, 1, NULL, NULL),
(31, 31, 1, NULL, NULL),
(32, 32, 1, NULL, NULL),
(33, 33, 1, NULL, NULL),
(34, 34, 1, NULL, NULL),
(35, 35, 1, NULL, NULL),
(36, 36, 1, NULL, NULL),
(37, 37, 1, NULL, NULL),
(38, 38, 1, NULL, NULL),
(39, 39, 1, NULL, NULL),
(40, 40, 1, NULL, NULL),
(41, 41, 1, NULL, NULL),
(42, 42, 1, NULL, NULL),
(43, 43, 1, NULL, NULL),
(44, 44, 1, NULL, NULL),
(45, 45, 1, NULL, NULL),
(46, 46, 1, NULL, NULL),
(47, 47, 1, NULL, NULL),
(48, 48, 1, NULL, NULL),
(49, 49, 1, NULL, NULL),
(50, 50, 1, NULL, NULL),
(51, 51, 1, NULL, NULL),
(52, 52, 1, NULL, NULL),
(53, 53, 1, NULL, NULL),
(54, 54, 1, NULL, NULL),
(55, 55, 1, NULL, NULL),
(56, 56, 1, NULL, NULL),
(57, 57, 1, NULL, NULL),
(58, 58, 1, NULL, NULL),
(59, 59, 1, NULL, NULL),
(60, 60, 1, NULL, NULL),
(61, 61, 1, NULL, NULL),
(62, 62, 1, NULL, NULL),
(63, 63, 1, NULL, NULL),
(64, 64, 1, NULL, NULL),
(65, 65, 1, NULL, NULL),
(66, 66, 1, NULL, NULL),
(67, 67, 1, NULL, NULL),
(68, 68, 1, NULL, NULL),
(69, 69, 1, NULL, NULL),
(70, 70, 1, NULL, NULL),
(71, 71, 1, NULL, NULL),
(72, 72, 1, NULL, NULL),
(73, 73, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallaryimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `rightsidebar_id` int(11) DEFAULT NULL,
  `leftsidebar_id` int(11) DEFAULT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `admin_id`, `title`, `slug`, `image`, `youtube_link`, `gallaryimage`, `body`, `view_count`, `status`, `is_approved`, `rightsidebar_id`, `leftsidebar_id`, `files`, `created_at`, `updated_at`) VALUES
(1, 1, 'শিক্ষা মন্ত্রণালয়', 'siksha-mntrnaly', 'siksha-mntrnaly-2021-12-01-61a7246d7c6ae.png', NULL, 'siksha-mntrnaly--61a7246d7c99b.png', '<p>ashdflakdjhf</p>', 0, 1, 1, 1, 0, 'siksha-mntrnaly-2021-12-01-61a7246d7cbd0.txt', '2021-12-01 01:29:49', '2021-12-01 01:29:49'),
(2, 1, 'rerg', 'rerg', NULL, 'http://localhost/phpmyadmin/index.php?route=/sql&db=sismoo_cms&table=posts&pos=0', 'rerg--61a754623aa23.png', '<p>aerg</p>', 0, 1, 1, 0, 2, 'rerg-2021-12-01-61a754623ad17.txt', '2021-12-01 04:54:26', '2021-12-01 04:54:26'),
(3, 1, 'erg', 'erg', 'erg-2021-12-01-61a7547a52e98.png', NULL, 'erg--61a7547a5315a.png', '<p>ergqrg</p>', 0, 1, 1, 1, 0, 'erg-2021-12-01-61a7547a534b2.txt', '2021-12-01 04:54:50', '2021-12-01 04:54:50'),
(5, 1, NULL, '', NULL, 'https://www.youtube.com/embed/bCtlituS9p8', '', NULL, 0, 0, 1, NULL, NULL, NULL, '2021-12-01 05:51:40', '2021-12-01 05:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletable` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `deletable`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 0, '2021-11-30 05:22:57', '2021-11-30 05:22:57'),
(2, 'User', 'user', 0, '2021-11-30 05:23:06', '2021-11-30 05:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE `sidebars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `title`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, 'Right Side Bar', '2021-11-30 06:03:08', '2021-11-30 06:03:08'),
(2, 'left', 1, 'Left Side Bar', '2021-12-01 04:02:42', '2021-12-01 04:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(11) DEFAULT NULL,
  `fullwidth` tinyint(1) NOT NULL DEFAULT 0,
  `width` int(11) DEFAULT NULL,
  `padding` int(11) DEFAULT NULL,
  `margin` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `height`, `fullwidth`, `width`, `padding`, `margin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home', 5, 1, 5, 5, 5, 1, '2021-11-30 05:53:05', '2021-11-30 05:53:05'),
(2, 'Banner', NULL, 1, NULL, NULL, NULL, 1, '2021-12-01 06:52:25', '2021-12-01 06:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slideimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slider_id`, `title`, `type`, `url`, `content`, `slideimage`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', 'home-banner', 'http://localhost:8080/zaraPharma/public', NULL, 'test-61a770669a231.jpeg', 1, '2021-12-01 06:53:58', '2021-12-01 06:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletable` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `deletable`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'author', 'author@gmail.com', NULL, '$2y$10$l1iqCtJfjtnsQSQ6.h6j7eslKCW1lgFnL/gZlCTkAUvgswFz8Snv2', 0, NULL, '2021-11-30 05:23:07', '2021-11-30 05:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sidebar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_of_post` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `sidebar_id`, `category_id`, `no_of_post`, `title`, `body`, `status`, `type`, `image`, `gallary_image`, `order`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 5, 'notice', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://dshe.portal.gov.bd/sites/default/files/files/dshe.portal.gov.bd/npfblock//nirdesika.pdf\">অনলাইন আবেদন ফরম পূরণ নির্দেশিকা</a></li>\r\n	<li><a href=\"http://202.72.235.210/mpo-shed/mpo_login\">অনলাইন এম.পি.ও আবেদন</a><a href=\"http://202.72.235.210/mpo-shed\">&nbsp;ফরম</a></li>\r\n	<li><img alt=\"\" src=\"http://localhost/kodepress/public/filemanager/uploads/bullet_arrow.png\" style=\"height:10px; width:6px\" />&nbsp;<a href=\"https://laracasts.com/discuss/channels/code-review/array-merge-expected-parameter-2-to-be-an-array-string-given\">rakibul</a></li>\r\n</ul>', NULL, 'Text Widget', NULL, NULL, 3, '2021-12-01 00:53:27', '2021-12-01 06:18:09'),
(2, 1, 0, 5, 'গুরুত্বপূর্ণ লিংক', '<ul>\r\n	<li>sadf</li>\r\n	<li>faer</li>\r\n	<li>dfv</li>\r\n</ul>', NULL, 'Text Widget', NULL, NULL, 4, '2021-12-01 01:21:04', '2021-12-01 06:18:09'),
(4, 1, 1, 5, 'blog category', NULL, NULL, 'Blog Category', NULL, NULL, 5, '2021-12-01 01:24:25', '2021-12-01 06:18:09'),
(7, 1, 0, NULL, 'মহাপরিচালক', '<p><strong>MD Hemel Raihan</strong></p>', NULL, 'Image Widget', 'mhapricalk-2021-12-01-61a741f26a31b.png', NULL, 2, '2021-12-01 03:35:46', '2021-12-01 06:18:08'),
(8, 2, 0, NULL, 'awer', '<p>wr</p>', NULL, 'Image Widget', 'awer-2021-12-01-61a748567224a.png', NULL, NULL, '2021-12-01 04:03:02', '2021-12-01 04:03:02'),
(9, 1, 0, 1, 'Recent Post', NULL, NULL, 'Recent Post', NULL, NULL, 1, '2021-12-01 05:02:17', '2021-12-01 06:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`),
  ADD KEY `category_post_category_id_foreign` (`category_id`);

--
-- Indexes for table `contentcategories`
--
ALTER TABLE `contentcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contentcategory_contentpost`
--
ALTER TABLE `contentcategory_contentpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contentcategory_contentpost_contentpost_id_foreign` (`contentpost_id`),
  ADD KEY `contentcategory_contentpost_contentcategory_id_foreign` (`contentcategory_id`);

--
-- Indexes for table `contentposts`
--
ALTER TABLE `contentposts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contentposts_slug_unique` (`slug`),
  ADD KEY `contentposts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filemanager`
--
ALTER TABLE `filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontmenuitems`
--
ALTER TABLE `frontmenuitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontmenus`
--
ALTER TABLE `frontmenus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontmenus_title_unique` (`title`);

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
  ADD UNIQUE KEY `modules_name_unique` (`name`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_module_id_foreign` (`module_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sidebars_title_unique` (`title`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_slider_id_foreign` (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contentcategories`
--
ALTER TABLE `contentcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contentcategory_contentpost`
--
ALTER TABLE `contentcategory_contentpost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contentposts`
--
ALTER TABLE `contentposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filemanager`
--
ALTER TABLE `filemanager`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `frontmenuitems`
--
ALTER TABLE `frontmenuitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `frontmenus`
--
ALTER TABLE `frontmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contentcategory_contentpost`
--
ALTER TABLE `contentcategory_contentpost`
  ADD CONSTRAINT `contentcategory_contentpost_contentcategory_id_foreign` FOREIGN KEY (`contentcategory_id`) REFERENCES `contentcategories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contentcategory_contentpost_contentpost_id_foreign` FOREIGN KEY (`contentpost_id`) REFERENCES `contentposts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contentposts`
--
ALTER TABLE `contentposts`
  ADD CONSTRAINT `contentposts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
