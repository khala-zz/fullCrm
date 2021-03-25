-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 06:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `referral_source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `budget` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_zipcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED NOT NULL,
  `modified_by_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `middle_name`, `last_name`, `status`, `referral_source`, `position_title`, `industry`, `project_type`, `company`, `project_description`, `description`, `budget`, `website`, `linkedin`, `address_street`, `address_city`, `address_state`, `address_country`, `address_zipcode`, `created_by_id`, `modified_by_id`, `assigned_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tran', 'Van', 'Tuan', 1, 'google', 'staff', 'CONG NGHIEP', 'Du an A', 'ABC', 'mo ta du an A', NULL, '6000000', 'gmail.com', NULL, '346/13/5 Mã Lò P.Bình Trị Đông A Q.Bình Tân', 'HCM', '11', 'Vietnam', '123', 4, 4, 5, '2021-03-23 03:44:27', '2021-03-23 10:08:56', NULL),
(2, 'Nguyen', 'thi', 'Hien', 1, 'google', 'sale', 'NGAN HANG', 'Du an B', 'DEF', 'mo ta du an B', NULL, '7890', NULL, NULL, '346 le van quoi', 'HCM', '11', 'Vietnam', '1234', 1, NULL, 4, '2021-03-23 09:24:39', '2021-03-23 09:24:39', NULL),
(3, 'Vo', 'Van', 'Sau', 2, 'danh ba vn', 'giam doc', 'NGAN HANG', 'Du an C', 'vingroup', 'mo ta du an C', NULL, '123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 4, '2021-03-23 09:48:57', '2021-03-23 10:18:41', NULL),
(4, 'Ngo', 'thi', 'quyen', 3, 'danh ba vn', 'staff', 'NGAN HANG', 'Du an D', 'dong a', 'mo ta du an D', NULL, '6000000', 'gmail.com', NULL, '567 Mã Lò P.Bình Trị Đông A Q.Bình Tân', 'HCM', '11', 'Vietnam', '123', 1, NULL, 5, '2021-03-24 10:04:56', '2021-03-24 10:04:56', NULL),
(5, 'Le', 'Minh', 'Thanh', 2, 'danh ba vn', 'sale', 'NGAN HANG', 'Du an A', 'dong a', 'mo ta du an A', NULL, '6000000', 'gmail.com', NULL, '67 Mã Lò P.Bình Trị Đông A Q.Bình Tân', 'HCM', '11', 'Vietnam', '123', 5, NULL, NULL, '2021-03-24 10:12:52', '2021-03-24 10:12:52', NULL),
(6, 'nguyen', 'thy', 'binh', 1, 'danh ba vn', 'giam doc', 'giao duc', 'Du an C', 'apu', 'mo ta du an C', NULL, '555555555555555', NULL, NULL, '567 Lac Long quan', 'HCM', '11', 'Vietnam', '123', 5, NULL, NULL, '2021-03-24 21:36:13', '2021-03-24 21:36:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_document`
--

CREATE TABLE `contact_document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_document`
--

INSERT INTO `contact_document` (`id`, `contact_id`, `document_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '2021-03-23 09:24:40', '2021-03-23 09:24:40'),
(2, 3, 1, '2021-03-23 09:55:42', '2021-03-23 09:55:42'),
(3, 3, 4, '2021-03-23 09:55:42', '2021-03-23 09:55:42'),
(4, 4, 1, '2021-03-24 10:04:56', '2021-03-24 10:04:56'),
(5, 5, 6, '2021-03-24 10:12:52', '2021-03-24 10:12:52'),
(6, 6, 7, '2021-03-24 21:36:13', '2021-03-24 21:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email`
--

CREATE TABLE `contact_email` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_email`
--

INSERT INTO `contact_email` (`id`, `email`, `contact_id`, `created_at`, `updated_at`) VALUES
(2, 'tranvantuan@gmail.com', 1, '2021-03-23 03:48:20', '2021-03-23 03:48:20'),
(3, 'hien@gmail.com', 2, '2021-03-23 09:24:39', '2021-03-23 09:24:39'),
(7, 'sau@gmail.com', 3, '2021-03-23 09:55:42', '2021-03-23 09:55:42'),
(8, '6sau@yahoo.com', 3, '2021-03-23 09:55:42', '2021-03-23 09:55:42'),
(9, 'quyen@gmail.com', 4, '2021-03-24 10:04:56', '2021-03-24 10:04:56'),
(10, 'thanh@gmail.com', 5, '2021-03-24 10:12:52', '2021-03-24 10:12:52'),
(11, 'nguyenthybinh@gmail.com', 6, '2021-03-24 21:36:13', '2021-03-24 21:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_phone`
--

CREATE TABLE `contact_phone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_phone`
--

INSERT INTO `contact_phone` (`id`, `phone`, `contact_id`, `created_at`, `updated_at`) VALUES
(2, '9090090909', 1, '2021-03-23 03:48:20', '2021-03-23 03:48:20'),
(3, '0906', 2, '2021-03-23 09:24:40', '2021-03-23 09:24:40'),
(8, '0907089', 3, '2021-03-23 09:55:42', '2021-03-23 09:55:42'),
(9, '0908077', 3, '2021-03-23 09:55:42', '2021-03-23 09:55:42'),
(10, '090898098', 4, '2021-03-24 10:04:56', '2021-03-24 10:04:56'),
(11, '787687686', 5, '2021-03-24 10:12:52', '2021-03-24 10:12:52'),
(12, '5423', 6, '2021-03-24 21:36:13', '2021-03-24 21:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_status`
--

CREATE TABLE `contact_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_status`
--

INSERT INTO `contact_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lead', NULL, NULL),
(2, 'Opportunity', NULL, NULL),
(3, 'Customer', NULL, NULL),
(4, 'Close', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 2=not active',
  `type` bigint(20) UNSIGNED DEFAULT NULL,
  `publish_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiration_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED NOT NULL,
  `modified_by_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `file`, `status`, `type`, `publish_date`, `expiration_date`, `created_by_id`, `modified_by_id`, `assigned_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tai lieu cua Cuong', '1616477472.docx', 1, 1, '03/23/2021', '03/24/2021', 2, NULL, 3, '2021-03-22 22:31:12', '2021-03-23 01:04:36', NULL),
(2, 'tai lieu cua Cuong 2', '1616478780.docx', 2, 2, '03/23/2021', '03/25/2021', 2, 1, 3, '2021-03-22 22:53:00', '2021-03-23 01:16:57', NULL),
(3, 'tai lieu cua Cuong 33', '1616482770.docx', 2, 3, '03/23/2021', '03/26/2021', 2, 2, NULL, '2021-03-22 23:36:29', '2021-03-23 00:09:33', '2021-03-23 00:09:33'),
(4, 'tai lieu Lam assign den Thy', '1616483610.pdf', 1, 2, '03/23/2021', '03/30/2021', 1, 1, 3, '2021-03-23 00:13:30', '2021-03-23 00:17:54', NULL),
(5, 'tai lieu Lam assign den Cuong', '1616484031.docx', 2, 1, '03/23/2021', '03/25/2021', 1, 2, 1, '2021-03-23 00:20:31', '2021-03-23 01:21:54', NULL),
(6, 'tai lieu cua admin', '1616605592.docx', 1, 1, '03/25/2021', '03/26/2021', 1, NULL, 2, '2021-03-24 10:06:32', '2021-03-24 10:06:32', NULL),
(7, 'tai lieu cua tran vangiau', '1616606035.docx', 1, 2, '03/25/2021', '03/27/2021', 5, NULL, NULL, '2021-03-24 10:13:55', '2021-03-24 10:13:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_type`
--

INSERT INTO `document_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Contract', NULL, NULL),
(2, 'License Agreement', NULL, NULL),
(3, 'EULA', NULL, NULL),
(4, 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mailboxes`
--

CREATE TABLE `mailboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `time_sent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailboxes`
--

INSERT INTO `mailboxes` (`id`, `subject`, `body`, `sender_id`, `time_sent`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'admin gui den tran van giau', '<p>noi dung gui den tran van giau</p>', 1, '2021-03-25 16:14:27', 0, '2021-03-25 09:14:27', '2021-03-25 09:14:27'),
(2, 'admin gui den tran van giau', '<p>noi dung gui den tran van giau</p>', 1, '2021-03-25 16:21:17', 0, '2021-03-25 09:21:17', '2021-03-25 09:21:17'),
(3, 'admin gui den tran van giau', '<p>noi dung gui den tran van giau</p>', 1, '2021-03-25 16:23:15', 0, '2021-03-25 09:23:15', '2021-03-25 09:23:15'),
(4, 'admin gui ten cuong', '<p>noi dung gui toi cuong</p>', 1, '2021-03-25 16:26:31', 0, '2021-03-25 09:26:31', '2021-03-25 09:26:31'),
(5, 'admin gui ten cuong', '<p>noi dung gui toi cuong</p>', 1, '2021-03-25 16:27:26', 0, '2021-03-25 09:27:26', '2021-03-25 09:27:26'),
(6, 'admin gui ten cuong', '<p>noi dung gui toi cuong</p>', 1, '2021-03-25 16:37:24', 0, '2021-03-25 09:37:24', '2021-03-25 09:37:24'),
(7, 'admin gui den tran van giau', '<p>noi dung gui den tran van giau</p>', 1, '2021-03-25 16:38:10', 0, '2021-03-25 09:38:10', '2021-03-25 09:38:10'),
(8, 'test drafts', '<p>test drafts</p>', 1, '2021-03-25 16:40:28', 0, '2021-03-25 09:40:28', '2021-03-25 09:40:28'),
(9, 'test drafts', '<p>test drafts</p>', 1, '2021-03-25 16:41:37', 0, '2021-03-25 09:41:37', '2021-03-25 09:41:37'),
(10, 'tran van giau goi toi admin', '<p>noi dung tran van giau gui den admin</p>', 5, '2021-03-25 16:50:11', 0, '2021-03-25 09:50:11', '2021-03-25 09:50:11'),
(11, 'RE: tran van giau goi toi admin', '<p>admin tra loi tran van giau</p>', 1, '2021-03-25 16:59:28', 10, '2021-03-25 09:59:28', '2021-03-25 09:59:28'),
(12, 'RE: tran van giau goi toi admin', '<p>ok admin</p>', 5, '2021-03-25 17:01:16', 11, '2021-03-25 10:01:16', '2021-03-25 10:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_attachments`
--

CREATE TABLE `mailbox_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailbox_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailbox_attachments`
--

INSERT INTO `mailbox_attachments` (`id`, `mailbox_id`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cv-1616689277.docx', '2021-03-25 09:21:17', '2021-03-25 09:21:17'),
(2, 3, 'Cv-1616689395.docx', '2021-03-25 09:23:15', '2021-03-25 09:23:15'),
(3, 4, 'Full Stack Developer JD-1616689591.docx', '2021-03-25 09:26:31', '2021-03-25 09:26:31'),
(4, 6, 'Full Stack Developer JD-1616689591-1616690244.docx', '2021-03-25 09:37:24', '2021-03-25 09:37:24'),
(5, 10, 'fade-1616691012.gif', '2021-03-25 09:50:12', '2021-03-25 09:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_flags`
--

CREATE TABLE `mailbox_flags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_unread` tinyint(4) NOT NULL DEFAULT '0',
  `is_important` tinyint(4) NOT NULL DEFAULT '0',
  `mailbox_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailbox_flags`
--

INSERT INTO `mailbox_flags` (`id`, `is_unread`, `is_important`, `mailbox_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 1, '2021-03-25 09:14:27', '2021-03-25 09:39:23'),
(2, 1, 0, 1, 5, '2021-03-25 09:14:27', '2021-03-25 09:14:27'),
(3, 0, 0, 2, 1, '2021-03-25 09:21:17', '2021-03-25 09:21:17'),
(4, 1, 0, 2, 5, '2021-03-25 09:21:17', '2021-03-25 09:21:17'),
(5, 0, 1, 3, 1, '2021-03-25 09:23:15', '2021-03-25 09:39:23'),
(6, 0, 0, 3, 5, '2021-03-25 09:23:15', '2021-03-25 09:42:53'),
(7, 0, 0, 4, 1, '2021-03-25 09:26:31', '2021-03-25 09:39:23'),
(8, 1, 0, 4, 2, '2021-03-25 09:26:31', '2021-03-25 09:26:31'),
(9, 0, 0, 5, 1, '2021-03-25 09:27:26', '2021-03-25 09:39:23'),
(10, 1, 0, 5, 3, '2021-03-25 09:27:26', '2021-03-25 09:27:26'),
(11, 0, 0, 6, 1, '2021-03-25 09:37:24', '2021-03-25 09:39:23'),
(12, 1, 0, 6, 3, '2021-03-25 09:37:24', '2021-03-25 09:37:24'),
(13, 0, 0, 7, 1, '2021-03-25 09:38:11', '2021-03-25 09:39:23'),
(14, 1, 0, 7, 3, '2021-03-25 09:38:11', '2021-03-25 09:38:11'),
(15, 0, 0, 8, 1, '2021-03-25 09:40:28', '2021-03-25 09:40:28'),
(16, 0, 0, 9, 1, '2021-03-25 09:41:38', '2021-03-25 09:41:38'),
(17, 0, 0, 10, 5, '2021-03-25 09:50:11', '2021-03-25 09:50:11'),
(18, 0, 0, 10, 1, '2021-03-25 09:50:12', '2021-03-25 09:50:43'),
(19, 0, 0, 11, 1, '2021-03-25 09:59:28', '2021-03-25 09:59:28'),
(20, 0, 0, 11, 5, '2021-03-25 09:59:28', '2021-03-25 10:00:09'),
(21, 0, 0, 12, 5, '2021-03-25 10:01:16', '2021-03-25 10:01:16'),
(22, 1, 0, 12, 1, '2021-03-25 10:01:16', '2021-03-25 10:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_folders`
--

CREATE TABLE `mailbox_folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailbox_folders`
--

INSERT INTO `mailbox_folders` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Inbox', 'fa fa-inbox', NULL, NULL),
(2, 'Sent', 'fa fa-envelope-o', NULL, NULL),
(3, 'Drafts', 'fa fa-file-text-o', NULL, NULL),
(4, 'Trash', 'fa fa-trash-o', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_receivers`
--

CREATE TABLE `mailbox_receivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailbox_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailbox_receivers`
--

INSERT INTO `mailbox_receivers` (`id`, `mailbox_id`, `receiver_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2021-03-25 09:14:27', '2021-03-25 09:14:27'),
(2, 2, 5, '2021-03-25 09:21:17', '2021-03-25 09:21:17'),
(3, 3, 5, '2021-03-25 09:23:15', '2021-03-25 09:23:15'),
(4, 4, 2, '2021-03-25 09:26:31', '2021-03-25 09:26:31'),
(5, 5, 3, '2021-03-25 09:27:26', '2021-03-25 09:27:26'),
(6, 6, 3, '2021-03-25 09:37:24', '2021-03-25 09:37:24'),
(7, 7, 3, '2021-03-25 09:38:11', '2021-03-25 09:38:11'),
(8, 10, 1, '2021-03-25 09:50:11', '2021-03-25 09:50:11'),
(9, 11, 5, '2021-03-25 09:59:28', '2021-03-25 09:59:28'),
(10, 12, 1, '2021-03-25 10:01:16', '2021-03-25 10:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_tmp_receivers`
--

CREATE TABLE `mailbox_tmp_receivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailbox_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailbox_tmp_receivers`
--

INSERT INTO `mailbox_tmp_receivers` (`id`, `mailbox_id`, `receiver_id`, `created_at`, `updated_at`) VALUES
(1, 9, 4, '2021-03-25 09:41:38', '2021-03-25 09:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_user_folders`
--

CREATE TABLE `mailbox_user_folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mailbox_id` bigint(20) UNSIGNED NOT NULL,
  `folder_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mailbox_user_folders`
--

INSERT INTO `mailbox_user_folders` (`id`, `user_id`, `mailbox_id`, `folder_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2021-03-25 09:14:27', '2021-03-25 09:14:27'),
(2, 5, 1, 1, '2021-03-25 09:14:27', '2021-03-25 09:14:27'),
(3, 1, 2, 4, '2021-03-25 09:21:17', '2021-03-25 09:25:04'),
(4, 5, 2, 1, '2021-03-25 09:21:17', '2021-03-25 09:21:17'),
(5, 1, 3, 2, '2021-03-25 09:23:15', '2021-03-25 09:23:15'),
(6, 5, 3, 1, '2021-03-25 09:23:15', '2021-03-25 09:23:15'),
(7, 1, 4, 2, '2021-03-25 09:26:31', '2021-03-25 09:26:31'),
(8, 2, 4, 1, '2021-03-25 09:26:31', '2021-03-25 09:26:31'),
(9, 1, 5, 2, '2021-03-25 09:27:26', '2021-03-25 09:27:26'),
(10, 3, 5, 1, '2021-03-25 09:27:26', '2021-03-25 09:27:26'),
(11, 1, 6, 2, '2021-03-25 09:37:24', '2021-03-25 09:37:24'),
(12, 3, 6, 1, '2021-03-25 09:37:24', '2021-03-25 09:37:24'),
(13, 1, 7, 2, '2021-03-25 09:38:10', '2021-03-25 09:38:10'),
(14, 3, 7, 1, '2021-03-25 09:38:11', '2021-03-25 09:38:11'),
(15, 1, 8, 3, '2021-03-25 09:40:28', '2021-03-25 09:40:28'),
(16, 1, 9, 3, '2021-03-25 09:41:38', '2021-03-25 09:41:38'),
(17, 5, 10, 2, '2021-03-25 09:50:11', '2021-03-25 09:50:11'),
(18, 1, 10, 1, '2021-03-25 09:50:12', '2021-03-25 09:50:12'),
(19, 1, 11, 2, '2021-03-25 09:59:28', '2021-03-25 09:59:28'),
(20, 5, 11, 1, '2021-03-25 09:59:28', '2021-03-25 09:59:28'),
(21, 5, 12, 2, '2021-03-25 10:01:16', '2021-03-25 10:01:16'),
(22, 1, 12, 1, '2021-03-25 10:01:16', '2021-03-25 10:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_09_113328_create_permission_tables', 1),
(5, '2021_03_10_155226_create_setting_table', 1),
(6, '2021_03_10_155614_create_document_type_table', 1),
(7, '2021_03_10_155656_create_document_table', 1),
(8, '2021_03_10_155742_create_task_status_table', 1),
(9, '2021_03_10_155843_create_task_type_table', 1),
(10, '2021_03_10_155951_create_contact_status_table', 1),
(11, '2021_03_10_160524_create_contact_table', 1),
(12, '2021_03_10_160652_create_contact_phone_table', 1),
(13, '2021_03_10_160838_create_contact_email_table', 1),
(14, '2021_03_10_161025_create_contact_document_table', 1),
(15, '2021_03_10_161336_create_task_table', 1),
(16, '2021_03_10_161704_create_task_document_table', 1),
(17, '2021_03_10_184540_add_column_to_users_table', 2),
(18, '2021_03_10_185031_add_column_to_users_table', 3),
(19, '2021_03_17_173533_create_mailbox_folders_table', 4),
(20, '2021_03_17_173547_create_mailboxes_table', 4),
(21, '2021_03_17_173559_create_mailbox_user_folders_table', 4),
(22, '2021_03_17_173611_create_mailbox_receivers_table', 4),
(23, '2021_03_17_173623_create_mailbox_attachments_table', 4),
(24, '2021_03_17_173635_create_mailbox_flags_table', 4),
(25, '2021_03_17_174036_create_mailbox_tmp_receivers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dokhaclam@gmail.com', '$2y$10$OAYAKVpa2.7JDqQCApSUeucjGpuewA1hSEFBBzVYM0Q7.q7.WYNlW', '2021-03-20 03:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create_contact', 'web', '2021-03-10 12:01:22', '2021-03-10 12:01:22'),
(2, 'edit_contact', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(3, 'delete_contact', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(4, 'list_contacts', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(5, 'view_contact', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(6, 'assign_contact', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(7, 'create_document', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(8, 'edit_document', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(9, 'delete_document', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(10, 'list_documents', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(11, 'view_document', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(12, 'assign_document', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(13, 'create_task', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(14, 'edit_task', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(15, 'delete_task', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(16, 'list_tasks', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(17, 'view_task', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(18, 'assign_task', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(19, 'update_task_status', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(20, 'edit_profile', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(21, 'compose_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(22, 'list_emails', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(23, 'view_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(24, 'toggle_important_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(25, 'trash_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(26, 'send_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(27, 'reply_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(28, 'forward_email', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(29, 'show_email_notifications', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(30, 'show_calendar', 'web', '2021-03-10 12:01:23', '2021-03-10 12:01:23'),
(31, 'test', 'web', '2021-03-21 04:37:40', '2021-03-21 04:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Manage documents', 'web', '2021-03-21 20:26:09', '2021-03-21 20:26:09'),
(2, 'Manage Tasks', 'web', '2021-03-21 21:08:07', '2021-03-21 21:08:07'),
(3, 'Manage documents - Tasks', 'web', '2021-03-23 01:02:16', '2021-03-23 01:02:16'),
(4, 'Manage Contacts', 'web', '2021-03-23 03:27:38', '2021-03-23 03:27:38'),
(5, 'Manage Contacts - Documents', 'web', '2021-03-23 03:28:15', '2021-03-23 03:28:15'),
(6, 'CEO', 'web', '2021-03-23 10:06:12', '2021-03-23 10:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(1, 5),
(1, 6),
(2, 4),
(2, 5),
(2, 6),
(3, 4),
(3, 5),
(3, 6),
(4, 4),
(4, 5),
(4, 6),
(5, 4),
(5, 5),
(5, 6),
(6, 4),
(6, 5),
(6, 6),
(7, 1),
(7, 3),
(7, 5),
(7, 6),
(8, 1),
(8, 3),
(8, 5),
(8, 6),
(9, 1),
(9, 3),
(9, 5),
(9, 6),
(10, 1),
(10, 3),
(10, 5),
(10, 6),
(11, 1),
(11, 3),
(11, 5),
(11, 6),
(12, 1),
(12, 3),
(12, 5),
(12, 6),
(13, 2),
(13, 3),
(13, 6),
(14, 2),
(14, 3),
(14, 6),
(15, 2),
(15, 3),
(15, 6),
(16, 2),
(16, 3),
(16, 6),
(17, 2),
(17, 3),
(17, 6),
(18, 2),
(18, 3),
(18, 6),
(19, 2),
(19, 3),
(19, 6),
(20, 6),
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `setting_key`, `setting_value`, `created_at`, `updated_at`) VALUES
(1, 'crm_email', 'noreply@mini-crm.com', NULL, NULL),
(2, 'enable_email_notification', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Low Normal High Urgent',
  `status` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complete_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Lead Opportunity Customer Close',
  `contact_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_by_id` bigint(20) UNSIGNED NOT NULL,
  `modified_by_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `name`, `priority`, `status`, `type_id`, `start_date`, `end_date`, `complete_date`, `contact_type`, `contact_id`, `description`, `created_by_id`, `modified_by_id`, `assigned_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nhiem vu 1', 'Low', 1, 2, '03/24/2021', '03/27/2021', '03/30/2021', 'Lead', NULL, NULL, 5, NULL, 4, '2021-03-23 11:19:16', '2021-03-23 11:22:49', NULL),
(2, 'nhiem vu 2', 'High', 2, 2, '03/24/2021', '03/25/2021', '03/30/2021', 'Lead', 1, NULL, 1, NULL, 1, '2021-03-23 11:26:09', '2021-03-23 11:26:09', NULL),
(3, 'nhiem vu 3', 'Urgent', 2, 2, '03/25/2021', '03/30/2021', '03/31/2021', 'Lead', 1, NULL, 5, 5, NULL, '2021-03-24 10:36:01', '2021-03-24 10:41:50', NULL),
(4, 'nhiem vu 4', 'Low', 1, 1, '03/25/2021', '03/29/2021', '03/30/2021', 'Lead', 1, NULL, 5, NULL, NULL, '2021-03-24 21:37:12', '2021-03-24 21:37:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_document`
--

CREATE TABLE `task_document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_document`
--

INSERT INTO `task_document` (`id`, `task_id`, `document_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2021-03-23 11:19:16', '2021-03-23 11:19:16'),
(2, 2, 4, '2021-03-23 11:26:09', '2021-03-23 11:26:09'),
(4, 3, 6, '2021-03-24 10:41:50', '2021-03-24 10:41:50'),
(5, 4, 6, '2021-03-24 21:37:13', '2021-03-24 21:37:13'),
(6, 4, 7, '2021-03-24 21:37:13', '2021-03-24 21:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `task_status`
--

CREATE TABLE `task_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_status`
--

INSERT INTO `task_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Not Started', NULL, NULL),
(2, 'Started', NULL, NULL),
(3, 'Completed', NULL, NULL),
(4, 'Cancelled', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_type`
--

CREATE TABLE `task_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_type`
--

INSERT INTO `task_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Task', NULL, NULL),
(2, 'Meeting', NULL, NULL),
(3, 'Phone call', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `position_title`, `phone`, `image`, `is_admin`, `is_active`) VALUES
(1, 'admin', 'dokhaclam@gmail.com', NULL, '$2y$10$6cvjzgCllYN/Iz0.CMxT5eRBxbHFAfHHAWrfPLKoJbsDPbf4dTuoS', NULL, NULL, '2021-03-22 03:55:48', 'sales manager', '090607709987', '1616410548.jpg', 1, 1),
(2, 'Do Chi Cuong', 'cuong@gmail.com', NULL, '$2y$10$QJGbcBaoiFHj3Tjggn2eyexIDTNcb0dUI.X45FlBm/WTALYnaTrgS', NULL, '2021-03-21 22:16:58', '2021-03-21 22:16:58', 'Sale', '0906000', '1616390218.png', 0, 1),
(3, 'Do Khanh Thy', 'docuongthy@gmail.com', NULL, '$2y$10$h1K/EtTDCiUssPCjd8NNYeFHwbeoVxD0LjR4rvTCt.jBjyv2TcVD2', NULL, '2021-03-21 22:50:49', '2021-03-23 01:02:57', 'Sale', '0906077099', '1616392249.png', 0, 1),
(4, 'Minh Chau', 'minhchau@gmail.com', NULL, '$2y$10$tvkEOXDXjogHgW0lQDqaWebHQviU64zWBDrcHVVLsVhjJMIxaFV/S', NULL, '2021-03-23 03:26:51', '2021-03-23 03:26:51', 'Manager contacts', '090607709744', '1616495211.png', 0, 1),
(5, 'Tran Van Giau', 'tranvangiau@gmail.com', NULL, '$2y$10$IDo4P83oQRbdtNJ9enNwTO1EQ/QSHFRcrqvqxdpfTn6GmVA9.EU4G', NULL, '2021-03-23 10:07:28', '2021-03-23 10:07:28', 'giam doc dieu hanh', '764675765756', '1616519248.png', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_created_by_id_foreign` (`created_by_id`),
  ADD KEY `contact_modified_by_id_foreign` (`modified_by_id`),
  ADD KEY `contact_assigned_user_id_foreign` (`assigned_user_id`);

--
-- Indexes for table `contact_document`
--
ALTER TABLE `contact_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_document_contact_id_foreign` (`contact_id`),
  ADD KEY `contact_document_document_id_foreign` (`document_id`);

--
-- Indexes for table `contact_email`
--
ALTER TABLE `contact_email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_email_contact_id_foreign` (`contact_id`);

--
-- Indexes for table `contact_phone`
--
ALTER TABLE `contact_phone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_phone_contact_id_foreign` (`contact_id`);

--
-- Indexes for table `contact_status`
--
ALTER TABLE `contact_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_type_foreign` (`type`),
  ADD KEY `document_created_by_id_foreign` (`created_by_id`),
  ADD KEY `document_modified_by_id_foreign` (`modified_by_id`),
  ADD KEY `document_assigned_user_id_foreign` (`assigned_user_id`);

--
-- Indexes for table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mailboxes`
--
ALTER TABLE `mailboxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailboxes_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `mailbox_attachments`
--
ALTER TABLE `mailbox_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailbox_attachments_mailbox_id_foreign` (`mailbox_id`);

--
-- Indexes for table `mailbox_flags`
--
ALTER TABLE `mailbox_flags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailbox_flags_mailbox_id_foreign` (`mailbox_id`),
  ADD KEY `mailbox_flags_user_id_foreign` (`user_id`);

--
-- Indexes for table `mailbox_folders`
--
ALTER TABLE `mailbox_folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailbox_receivers`
--
ALTER TABLE `mailbox_receivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailbox_receivers_mailbox_id_foreign` (`mailbox_id`),
  ADD KEY `mailbox_receivers_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `mailbox_tmp_receivers`
--
ALTER TABLE `mailbox_tmp_receivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailbox_tmp_receivers_mailbox_id_foreign` (`mailbox_id`),
  ADD KEY `mailbox_tmp_receivers_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `mailbox_user_folders`
--
ALTER TABLE `mailbox_user_folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailbox_user_folders_user_id_foreign` (`user_id`),
  ADD KEY `mailbox_user_folders_mailbox_id_foreign` (`mailbox_id`),
  ADD KEY `mailbox_user_folders_folder_id_foreign` (`folder_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_setting_key_unique` (`setting_key`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_status_foreign` (`status`),
  ADD KEY `task_type_id_foreign` (`type_id`),
  ADD KEY `task_contact_id_foreign` (`contact_id`),
  ADD KEY `task_created_by_id_foreign` (`created_by_id`),
  ADD KEY `task_modified_by_id_foreign` (`modified_by_id`),
  ADD KEY `task_assigned_user_id_foreign` (`assigned_user_id`);

--
-- Indexes for table `task_document`
--
ALTER TABLE `task_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_document_task_id_foreign` (`task_id`),
  ADD KEY `task_document_document_id_foreign` (`document_id`);

--
-- Indexes for table `task_status`
--
ALTER TABLE `task_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_type`
--
ALTER TABLE `task_type`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_document`
--
ALTER TABLE `contact_document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_email`
--
ALTER TABLE `contact_email`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_phone`
--
ALTER TABLE `contact_phone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_status`
--
ALTER TABLE `contact_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailboxes`
--
ALTER TABLE `mailboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mailbox_attachments`
--
ALTER TABLE `mailbox_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mailbox_flags`
--
ALTER TABLE `mailbox_flags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mailbox_folders`
--
ALTER TABLE `mailbox_folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mailbox_receivers`
--
ALTER TABLE `mailbox_receivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mailbox_tmp_receivers`
--
ALTER TABLE `mailbox_tmp_receivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mailbox_user_folders`
--
ALTER TABLE `mailbox_user_folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task_document`
--
ALTER TABLE `task_document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task_status`
--
ALTER TABLE `task_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task_type`
--
ALTER TABLE `task_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_assigned_user_id_foreign` FOREIGN KEY (`assigned_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contact_created_by_id_foreign` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contact_modified_by_id_foreign` FOREIGN KEY (`modified_by_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `contact_document`
--
ALTER TABLE `contact_document`
  ADD CONSTRAINT `contact_document_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`),
  ADD CONSTRAINT `contact_document_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`);

--
-- Constraints for table `contact_email`
--
ALTER TABLE `contact_email`
  ADD CONSTRAINT `contact_email_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`);

--
-- Constraints for table `contact_phone`
--
ALTER TABLE `contact_phone`
  ADD CONSTRAINT `contact_phone_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_assigned_user_id_foreign` FOREIGN KEY (`assigned_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `document_created_by_id_foreign` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `document_modified_by_id_foreign` FOREIGN KEY (`modified_by_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `document_type_foreign` FOREIGN KEY (`type`) REFERENCES `document_type` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `mailboxes`
--
ALTER TABLE `mailboxes`
  ADD CONSTRAINT `mailboxes_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mailbox_attachments`
--
ALTER TABLE `mailbox_attachments`
  ADD CONSTRAINT `mailbox_attachments_mailbox_id_foreign` FOREIGN KEY (`mailbox_id`) REFERENCES `mailboxes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mailbox_flags`
--
ALTER TABLE `mailbox_flags`
  ADD CONSTRAINT `mailbox_flags_mailbox_id_foreign` FOREIGN KEY (`mailbox_id`) REFERENCES `mailboxes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mailbox_flags_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mailbox_receivers`
--
ALTER TABLE `mailbox_receivers`
  ADD CONSTRAINT `mailbox_receivers_mailbox_id_foreign` FOREIGN KEY (`mailbox_id`) REFERENCES `mailboxes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mailbox_receivers_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mailbox_tmp_receivers`
--
ALTER TABLE `mailbox_tmp_receivers`
  ADD CONSTRAINT `mailbox_tmp_receivers_mailbox_id_foreign` FOREIGN KEY (`mailbox_id`) REFERENCES `mailboxes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mailbox_tmp_receivers_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mailbox_user_folders`
--
ALTER TABLE `mailbox_user_folders`
  ADD CONSTRAINT `mailbox_user_folders_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `mailbox_folders` (`id`),
  ADD CONSTRAINT `mailbox_user_folders_mailbox_id_foreign` FOREIGN KEY (`mailbox_id`) REFERENCES `mailboxes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mailbox_user_folders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_assigned_user_id_foreign` FOREIGN KEY (`assigned_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `task_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `task_created_by_id_foreign` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `task_modified_by_id_foreign` FOREIGN KEY (`modified_by_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `task_status_foreign` FOREIGN KEY (`status`) REFERENCES `task_status` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `task_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `task_type` (`id`);

--
-- Constraints for table `task_document`
--
ALTER TABLE `task_document`
  ADD CONSTRAINT `task_document_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`),
  ADD CONSTRAINT `task_document_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
