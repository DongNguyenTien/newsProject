-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2017 at 11:49 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebaohiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_types`
--

CREATE TABLE `beneficiary_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiary_types`
--

INSERT INTO `beneficiary_types` (`id`, `name`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Người', 1, NULL, '2017-06-26 15:32:14'),
(2, 'Xe', 1, NULL, '2017-06-26 15:35:18'),
(3, 'Nhà', 1, NULL, '2017-06-26 15:41:42'),
(4, 'Siêu nhân', 1, '2017-07-22 12:10:08', '2017-07-22 12:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_type_attributes`
--

CREATE TABLE `beneficiary_type_attributes` (
  `id` int(11) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Attribute name',
  `is_required` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: required',
  `default_value` text COLLATE utf8mb4_unicode_ci COMMENT 'Giá trị mặc định, hoặc sẽ là list giá trị cho loại thuộc tính select/list-checkbox/list-radio',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiary_type_attributes`
--

INSERT INTO `beneficiary_type_attributes` (`id`, `type_id`, `name`, `is_required`, `default_value`, `created_at`, `updated_at`) VALUES
(2, 1, 'Tên', 1, 'Khoa', '2017-07-22 06:48:23', '2017-07-22 06:54:32'),
(3, 1, 'Tuổi', 0, '30', '2017-07-22 06:53:33', '2017-07-22 06:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `price` float(12,2) UNSIGNED DEFAULT NULL COMMENT 'Current price',
  `engine_config` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_seat` int(10) UNSIGNED NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_agencies`
--

CREATE TABLE `car_agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

CREATE TABLE `car_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_price`
--

CREATE TABLE `car_price` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` int(10) UNSIGNED NOT NULL,
  `price_date` date NOT NULL,
  `price` float(12,2) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `identity_card` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'Updated user''s id',
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL COMMENT 'Created user''id',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `type_id`, `email`, `name`, `phone_number`, `password`, `identity_card`, `address`, `status`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 2, 'khoada18788@gmail.com', 'Dao Anh Khoa', '096682878', '$2y$10$yUFkwcZEdX.qB20GM9MA/ObTG1/jHuhctGk2EirGBBbmmQOPlwyNG', '001088002322', 'Dong Anh, Ha Noi', 1, 1, '2017-07-23 10:20:32', 1, '2017-07-23 10:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `meta_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_types`
--

CREATE TABLE `customer_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_types`
--

INSERT INTO `customer_types` (`id`, `name`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Cá nhân', 1, NULL, NULL),
(2, 'Doanh nghiệp', 1, '2017-07-23 10:25:03', NULL),
(3, 'Khác (Other)', 0, '2017-07-23 10:25:09', '2017-07-23 09:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_agencies`
--

CREATE TABLE `insurance_agencies` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_id` int(10) UNSIGNED NOT NULL COMMENT 'manager user id',
  `created_id` int(10) UNSIGNED NOT NULL COMMENT 'created user id',
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_agencies`
--

INSERT INTO `insurance_agencies` (`id`, `name`, `email`, `username`, `password`, `description`, `address`, `avatar`, `manager_id`, `created_id`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(1, 'Khoa', 'khoada18788@gmail.com', 'khoada', '$2y$10$qsOh9BVFza6eA/hw/OHbCudcHmnnfueIKisuEe46.xgrndS75TP1y', 'Best of the best', 'To 17, Thi Tran Dong Anh', 'abcde', 2, 0, '2017-07-23 00:14:27', 1, '2017-07-22 15:13:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_logo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_companies`
--

INSERT INTO `insurance_companies` (`id`, `name`, `description`, `brand_logo`, `email`, `tax_code`, `phone_number`, `address`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Erocare', NULL, NULL, '	contact@eroscare.com', NULL, '	093 12 79 799', '	Tầng 4, AF - Building, số 87 Vương Thừa Vũ, P.Khương Mai, Q.Thanh Xuân, Hà Nội', NULL, '2017-06-01 09:20:31', NULL),
(2, 'Liberty', NULL, NULL, '', NULL, '(84-24) 3 7557 111', 'Tầng 10, Tháp Đông, Tòa nhà Lotte Center Hà Nội, số 54, đường Liễu Giai, Quận Ba Đình', NULL, '2017-06-01 09:25:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_contracts`
--

CREATE TABLE `insurance_contracts` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Số hợp đồng bảo hiểm',
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL COMMENT 'Sản phẩm',
  `type_id` int(10) UNSIGNED NOT NULL COMMENT 'Loại hình bảo hiểm',
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `gross_amount` float(12,2) DEFAULT NULL COMMENT 'Phí bảo hiểm chưa thuế',
  `net_amount` float(12,2) DEFAULT NULL COMMENT 'Phí bảo hiểm sau thuế',
  `start_time` datetime DEFAULT NULL COMMENT 'Thời gian bắt đầu hợp đồng',
  `end_time` datetime DEFAULT NULL COMMENT 'Thời gian kết thúc hợp đồng',
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT '0' COMMENT 'Id người tạo hợp đồng, nếu là hệ thống tự động thì sẽ có giá trị: 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_contract_beneficiaries`
--

CREATE TABLE `insurance_contract_beneficiaries` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `contract_id` bigint(10) UNSIGNED NOT NULL,
  `beneficiary_type_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_contract_files`
--

CREATE TABLE `insurance_contract_files` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `contract_id` bigint(10) UNSIGNED NOT NULL,
  `file_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `file_info` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'JSON - file info: extension, size..',
  `file_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_formulas`
--

CREATE TABLE `insurance_formulas` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mã công thức',
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `formula` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_price_attributes`
--

CREATE TABLE `insurance_price_attributes` (
  `id` int(11) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text' COMMENT 'text|number|currency|timestamp|date|datetime',
  `after_string` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_price_attributes`
--

INSERT INTO `insurance_price_attributes` (`id`, `type_id`, `code`, `title`, `data_type`, `after_string`, `updated_at`, `created_at`) VALUES
(1, 3, 'gdfgadasdadg', 'asdadasdgfgfd', 'text', NULL, '2017-07-13 13:27:38', '2017-07-13 13:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_price_types`
--

CREATE TABLE `insurance_price_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `insurance_type_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1: is primary price_type',
  `default_require` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1: default add to total price',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_price_types`
--

INSERT INTO `insurance_price_types` (`id`, `insurance_type_id`, `code`, `name`, `is_primary`, `default_require`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'code1', 'Loai gia 1', 1, 1, 1, '2017-07-22 03:32:38', '2017-07-22 03:59:38'),
(4, 1, 'code2', 'Loai gia 2', 0, 1, 1, '2017-07-22 03:58:18', '2017-07-22 03:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_types`
--

CREATE TABLE `insurance_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(2) DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_types`
--

INSERT INTO `insurance_types` (`id`, `name`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Bảo hiểm sức khỏe', 1, NULL, NULL),
(2, 'Bảo hiểm ô tô', 1, NULL, NULL),
(3, 'Bảo hiểm du lịch', 1, NULL, NULL),
(4, 'Bảo hiểm nhà', 1, NULL, NULL),
(5, 'thich thi mua :)', -1, '2017-07-13 10:53:35', '2017-07-13 10:50:50'),
(6, 'abc', 1, '2017-07-19 22:29:26', '2017-07-19 22:29:26'),
(7, 'dasdd', -1, '2017-07-19 22:32:49', '2017-07-19 22:29:55');

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
(3, '2017_07_17_083912_create_table_insurance_price_types', 2),
(4, '2017_07_18_090727_add_data_type_table_insurance_price_attributes', 2),
(5, '2017_07_18_091509_add_after_string_table_insurance_price_attributes', 2),
(6, '2017_07_18_140942_add_status_insurance_price_types', 2),
(7, '2017_07_17_083544_add_attr_max_min_value_table_product_type_conditions', 3),
(8, '2017_07_17_084325_add_column_price_detail', 3),
(9, '2017_07_19_120403_create_table_product_category_classes', 3),
(10, '2017_07_19_120429_add_product_class_id', 3),
(11, '2017_07_19_121235_add_category_id_to_product_category_classes', 3),
(12, '2017_07_19_133034_add_order_number_to_product_category_classes', 3),
(13, '2017_07_19_174557_change_data_type_category_id_table_product', 3),
(14, '2017_07_20_091634_rename_table_product_categories_to_categories', 4),
(15, '2017_07_20_093839_add_prefix_table_product_agency_commissions', 4),
(16, '2017_07_20_093950_add_prefix_table_product_attributes', 4),
(17, '2017_07_20_094050_create_table_product_categories', 4),
(18, '2017_07_20_094329_rename_table_product_category_attributes', 4),
(19, '2017_07_20_094501_rename_table_product_category_classes', 4),
(20, '2017_07_20_094719_add_prefix_table_product_commissions', 4),
(21, '2017_07_20_094851_add_prefix_table_product_price_conditions', 4),
(22, '2017_07_20_094942_add_prefix_table_product_prices', 4),
(23, '2017_07_20_095059_add_prefix_table_products', 4),
(24, '2017_07_20_133600_alter_table_products_change_product_category_class_id', 4),
(25, '2017_07_20_134132_alter_table_category_classes_column_product_category_id', 4),
(26, '2017_07_21_171135_rename_table_insurance_fomulas_to_insurance_formulas', 5),
(27, '2017_07_21_171817_add_column_formulas_table_insurance_formular', 5),
(28, '2017_07_22_091509_add_timestamp_table_beneficiary_type_attributes', 6),
(29, '2017_07_18_140942_add_status_customer_types', 7),
(30, '2017_07_23_140942_add_name_customer', 8),
(31, '2017_07_23_103719_add_avatar_to_products', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mp_categories`
--

CREATE TABLE `mp_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `insurance_type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED DEFAULT '0',
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category logo',
  `status` tinyint(2) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_categories`
--

INSERT INTO `mp_categories` (`id`, `insurance_type_id`, `name`, `parent_id`, `description`, `avatar`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'Bảo hiểm sức khỏe', NULL, '', NULL, 1, '2017-07-13 18:22:40', NULL),
(2, 2, 'Bảo hiểm ô tô', NULL, '', NULL, 1, '2017-07-13 18:22:15', NULL),
(3, 3, 'Bảo hiểm du lịch', NULL, '', NULL, 1, '2017-07-13 18:22:26', NULL),
(4, 4, 'Bảo hiểm nhà', NULL, '', NULL, 1, '2017-07-13 18:22:34', NULL),
(5, 1, 'asdasdads', 1, 'adsasdad', NULL, -1, '2017-07-13 18:23:06', '2017-07-13 18:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `mp_category_attributes`
--

CREATE TABLE `mp_category_attributes` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL COMMENT 'product category id',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'attribute name',
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'textbox' COMMENT 'textbox | select | radio | checkbox | textarea',
  `is_required` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: required',
  `default_value` text COLLATE utf8mb4_unicode_ci COMMENT 'Giá trị mặc định, hoặc sẽ là list giá trị cho select box',
  `compare_flg` tinyint(1) DEFAULT '0' COMMENT '1: use for compare',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_category_attributes`
--

INSERT INTO `mp_category_attributes` (`id`, `category_id`, `name`, `title`, `data_type`, `is_required`, `default_value`, `compare_flg`, `updated_at`, `created_at`) VALUES
(1, 1, 'year_old', 'Độ tuổi tham gia', 'textbox', 1, NULL, 1, NULL, NULL),
(2, 1, 'quyen_loi_noi_tru', 'Quyền lợi nội trú', 'radio', 0, 'a1dasdad|bdasdsad1|cadsads1', 1, NULL, NULL),
(3, 1, 'vien_phi_ngay', 'Viện phí ngày', 'select', 0, 'a|b|c', 1, NULL, NULL),
(4, 3, 'tai_nan_ca_nhan', 'Tai nạn cá nhân', 'textbox', 1, NULL, 0, '2017-07-11 06:49:29', '2017-07-11 06:49:29'),
(5, 3, 'tro_giup_y_te', 'Trợ giúp y tế', 'textbox', 1, NULL, 1, '2017-07-11 06:50:20', '2017-07-11 06:50:20'),
(6, 1, 'vien_phi_ngay_moi', 'Viện phí ngày moi', 'textarea', 1, 'a|b|c', 1, NULL, NULL),
(7, 1, 'tro_giup_y_te', 'Trợ giúp y tế', 'checkbox', 1, NULL, 1, '2017-07-11 06:50:20', '2017-07-11 06:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `mp_category_classes`
--

CREATE TABLE `mp_category_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `order_number` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_category_classes`
--

INSERT INTO `mp_category_classes` (`id`, `category_id`, `code`, `name`, `status`, `order_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'abc', 'Class1', 1, 1, '2017-07-22 17:00:00', '2017-07-22 17:00:00'),
(2, 2, 'abcdef', 'Class2', 1, 2, '2017-07-22 17:00:00', '2017-07-22 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mp_products`
--

CREATE TABLE `mp_products` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'List category id, separator: , ',
  `category_class_id` int(10) UNSIGNED DEFAULT '0',
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '-1: deleted; 0: unactive; 1: active',
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_products`
--

INSERT INTO `mp_products` (`id`, `name`, `company_id`, `category_id`, `category_class_id`, `description`, `avatar`, `status`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(1, 'EROSCARE', 1, '1', 1, NULL, NULL, 1, '2017-07-14 08:40:58', 1, NULL, NULL),
(2, 'UIC', 2, '1', 2, 'fsfs', NULL, 1, '2017-07-23 12:04:47', 1, NULL, NULL),
(3, 'LIBERTY', 2, '1', 1, 'asdasd', NULL, 1, '2017-07-14 08:41:09', 1, NULL, NULL),
(4, 'BLUE', 1, '1', 2, 'adasdasd', NULL, 1, '2017-07-14 08:41:15', 1, NULL, NULL),
(5, 'BV', 1, '1', 1, 'adsdasdasd', NULL, 1, '2017-07-14 08:41:21', 1, NULL, NULL),
(6, 'sdasda', 1, '2', 1, 'adsdas', 'fsfsdf', 1, '2017-07-23 14:00:21', 1, '2017-07-14 13:25:16', 1),
(7, 'Tuyệt', 2, '', 1, 'No1', 'abc.com', 1, '2017-07-23 14:06:17', 1, '2017-07-23 14:03:55', 1),
(8, 'No1', 1, '', 1, 'no1', NULL, 1, '2017-07-23 14:11:00', 1, '2017-07-23 14:06:30', 1),
(9, 'Number 1', 1, '', 1, NULL, NULL, 1, '2017-07-23 14:07:17', 1, '2017-07-23 14:07:17', 1),
(10, 'Liberty2', 2, '', 2, NULL, NULL, 1, '2017-07-23 14:10:15', 1, '2017-07-23 14:10:15', 1),
(11, 'Product', 1, '', 2, 'product 1', 'abc.com', 1, '2017-07-23 22:32:25', 1, '2017-07-23 22:31:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mp_product_agency_commissions`
--

CREATE TABLE `mp_product_agency_commissions` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `commission_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: fix amount; 1: by percent',
  `commission_amount` float(12,2) DEFAULT '0.00',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_product_attributes`
--

CREATE TABLE `mp_product_attributes` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_data` text COLLATE utf8mb4_unicode_ci,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_product_attributes`
--

INSERT INTO `mp_product_attributes` (`id`, `product_id`, `attribute_id`, `attribute_data`, `updated_at`, `created_at`) VALUES
(74, 2, 1, 'sfdfsfsdfsdf', '2017-07-14 14:56:00', '2017-07-14 14:56:00'),
(75, 2, 2, NULL, '2017-07-14 14:56:00', '2017-07-14 14:56:00'),
(76, 2, 3, '1', '2017-07-14 14:56:00', '2017-07-14 14:56:00'),
(77, 2, 6, 'fsdfsf', '2017-07-14 14:56:00', '2017-07-14 14:56:00'),
(78, 2, 7, 'tro_giup_y_te', '2017-07-14 14:56:00', '2017-07-14 14:56:00'),
(83, 1, 1, 'Thuoc tinh text', '2017-07-14 17:49:17', '2017-07-14 17:49:17'),
(84, 1, 2, 'bdasdsad1', '2017-07-14 17:49:17', '2017-07-14 17:49:17'),
(85, 1, 3, '3', '2017-07-14 17:49:17', '2017-07-14 17:49:17'),
(86, 1, 6, 'fsdfsdfsfdsadsdasdfs\r\nfs1111111111111\r\ndfs\r\ndf\r\nsf\r\ns\r\nfs\r\nf\r\nsf\r\ns\r\nfds\r\nfd', '2017-07-14 17:49:17', '2017-07-14 17:49:17'),
(87, 1, 7, 'on', '2017-07-14 17:49:17', '2017-07-14 17:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `mp_product_categories`
--

CREATE TABLE `mp_product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_product_categories`
--

INSERT INTO `mp_product_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-07-23 04:57:52', '2017-07-23 04:57:52'),
(2, 1, 2, '2017-07-23 04:57:52', '2017-07-23 04:57:52'),
(3, 2, 1, '2017-07-23 04:57:52', '2017-07-23 04:57:52'),
(4, 3, 1, '2017-07-23 04:57:52', '2017-07-23 04:57:52'),
(8, 6, 1, '2017-07-23 07:00:21', '2017-07-23 07:00:21'),
(9, 6, 2, '2017-07-23 07:00:21', '2017-07-23 07:00:21'),
(10, 6, 3, '2017-07-23 07:00:21', '2017-07-23 07:00:21'),
(11, 6, 4, '2017-07-23 07:00:21', '2017-07-23 07:00:21'),
(12, 7, 1, '2017-07-23 07:06:17', '2017-07-23 07:06:17'),
(13, 7, 2, '2017-07-23 07:06:17', '2017-07-23 07:06:17'),
(14, 7, 3, '2017-07-23 07:06:17', '2017-07-23 07:06:17'),
(15, 7, 4, '2017-07-23 07:06:17', '2017-07-23 07:06:17'),
(21, 9, 1, '2017-07-23 07:07:17', '2017-07-23 07:07:17'),
(22, 9, 4, '2017-07-23 07:07:17', '2017-07-23 07:07:17'),
(23, 10, 1, '2017-07-23 07:10:15', '2017-07-23 07:10:15'),
(34, 8, 1, '2017-07-23 07:11:00', '2017-07-23 07:11:00'),
(35, 8, 5, '2017-07-23 07:11:00', '2017-07-23 07:11:00'),
(36, 8, 2, '2017-07-23 07:11:00', '2017-07-23 07:11:00'),
(37, 8, 3, '2017-07-23 07:11:00', '2017-07-23 07:11:00'),
(38, 8, 4, '2017-07-23 07:11:00', '2017-07-23 07:11:00'),
(41, 11, 1, '2017-07-23 15:32:25', '2017-07-23 15:32:25'),
(42, 11, 2, '2017-07-23 15:32:25', '2017-07-23 15:32:25'),
(43, 11, 3, '2017-07-23 15:32:25', '2017-07-23 15:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `mp_product_commissions`
--

CREATE TABLE `mp_product_commissions` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `commission_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: fix amount; 1: by percent',
  `commission_amount` float(12,2) DEFAULT '0.00',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mp_product_prices`
--

CREATE TABLE `mp_product_prices` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` float(12,2) DEFAULT '0.00',
  `price_detail` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_product_prices`
--

INSERT INTO `mp_product_prices` (`id`, `product_id`, `price`, `price_detail`, `conditions`, `updated_at`, `created_at`) VALUES
(11, 1, 1213209984.00, NULL, NULL, '2017-07-14 14:12:09', '2017-07-14 14:04:30'),
(12, 1, 1000000000.00, NULL, NULL, '2017-07-14 14:09:59', '2017-07-14 14:09:14'),
(13, 2, 12321.00, NULL, NULL, '2017-07-14 14:22:08', '2017-07-14 14:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `mp_product_price_conditions`
--

CREATE TABLE `mp_product_price_conditions` (
  `id` int(11) UNSIGNED NOT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL,
  `attr_key` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `attr_value` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_min_value` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_max_value` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_operator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mp_product_price_conditions`
--

INSERT INTO `mp_product_price_conditions` (`id`, `price_id`, `attr_key`, `attr_value`, `attr_min_value`, `attr_max_value`, `attr_operator`, `updated_at`, `created_at`) VALUES
(4, 12, '2ada', 'dasd', NULL, NULL, 'adasdas', '2017-07-14 14:09:59', '2017-07-14 14:09:59'),
(5, 12, 'dasda', 'dasda', NULL, NULL, 'dasdad', '2017-07-14 14:09:59', '2017-07-14 14:09:59'),
(6, 12, 'adasd', 'adasd', NULL, NULL, 'adasd', '2017-07-14 14:09:59', '2017-07-14 14:09:59'),
(7, 11, 'adsasd', 'adasd', NULL, NULL, 'asdasda', '2017-07-14 14:12:09', '2017-07-14 14:12:09'),
(8, 11, 'asdad', 'asda', NULL, NULL, 'as', '2017-07-14 14:12:09', '2017-07-14 14:12:09'),
(9, 13, 'adsad', 'adsad', NULL, NULL, 'adasd', '2017-07-14 14:22:08', '2017-07-14 14:22:08');

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission name: controller.action',
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='List roles for user';

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='List permissions for role';

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `setting_key` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `setting_value` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='ebaohiem-user';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `remember_token`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'phongbd@paditech.org', 'administrator', '$2y$10$gEQIKZzlF7fqcGUVKgHOi.fCvROujscoDB1y3tJhH1Qzm2uCvSeka', NULL, '2017-07-12 11:17:08', '2017-07-12 11:17:08', NULL),
(2, 'phongbd@paditech.org', 'administrator1', '$2y$10$gEQIKZzlF7fqcGUVKgHOi.fCvROujscoDB1y3tJhH1Qzm2uCvSeka', NULL, '2017-07-12 11:17:08', '2017-07-12 11:17:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='List user roles';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiary_types`
--
ALTER TABLE `beneficiary_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary_type_attributes`
--
ALTER TABLE `beneficiary_type_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`,`number_seat`);

--
-- Indexes for table `car_agencies`
--
ALTER TABLE `car_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_price`
--
ALTER TABLE `car_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_types`
--
ALTER TABLE `customer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_agencies`
--
ALTER TABLE `insurance_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_contracts`
--
ALTER TABLE `insurance_contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_contract_beneficiaries`
--
ALTER TABLE `insurance_contract_beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_contract_files`
--
ALTER TABLE `insurance_contract_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_formulas`
--
ALTER TABLE `insurance_formulas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_price_attributes`
--
ALTER TABLE `insurance_price_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_price_types`
--
ALTER TABLE `insurance_price_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_types`
--
ALTER TABLE `insurance_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_categories`
--
ALTER TABLE `mp_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_category_attributes`
--
ALTER TABLE `mp_category_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_category_classes`
--
ALTER TABLE `mp_category_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_products`
--
ALTER TABLE `mp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_product_agency_commissions`
--
ALTER TABLE `mp_product_agency_commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_product_attributes`
--
ALTER TABLE `mp_product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_product_categories`
--
ALTER TABLE `mp_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_product_commissions`
--
ALTER TABLE `mp_product_commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_product_prices`
--
ALTER TABLE `mp_product_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mp_product_price_conditions`
--
ALTER TABLE `mp_product_price_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiary_types`
--
ALTER TABLE `beneficiary_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `beneficiary_type_attributes`
--
ALTER TABLE `beneficiary_type_attributes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_agencies`
--
ALTER TABLE `car_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_brands`
--
ALTER TABLE `car_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_price`
--
ALTER TABLE `car_price`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_types`
--
ALTER TABLE `customer_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `insurance_agencies`
--
ALTER TABLE `insurance_agencies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `insurance_contracts`
--
ALTER TABLE `insurance_contracts`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurance_contract_beneficiaries`
--
ALTER TABLE `insurance_contract_beneficiaries`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurance_contract_files`
--
ALTER TABLE `insurance_contract_files`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurance_formulas`
--
ALTER TABLE `insurance_formulas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurance_price_attributes`
--
ALTER TABLE `insurance_price_attributes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `insurance_price_types`
--
ALTER TABLE `insurance_price_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `insurance_types`
--
ALTER TABLE `insurance_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `mp_categories`
--
ALTER TABLE `mp_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mp_category_attributes`
--
ALTER TABLE `mp_category_attributes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mp_category_classes`
--
ALTER TABLE `mp_category_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mp_products`
--
ALTER TABLE `mp_products`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mp_product_agency_commissions`
--
ALTER TABLE `mp_product_agency_commissions`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mp_product_attributes`
--
ALTER TABLE `mp_product_attributes`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `mp_product_categories`
--
ALTER TABLE `mp_product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `mp_product_commissions`
--
ALTER TABLE `mp_product_commissions`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mp_product_prices`
--
ALTER TABLE `mp_product_prices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mp_product_price_conditions`
--
ALTER TABLE `mp_product_price_conditions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
