/*
Navicat MySQL Data Transfer

Source Server         : c2010g1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : electronicedevice

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-10-08 10:05:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO migrations VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO migrations VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO migrations VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO migrations VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO migrations VALUES ('5', '2021_09_02_145021_create_tbl_category_table', '1');
INSERT INTO migrations VALUES ('6', '2021_09_04_090659_create_tbl_useradmin_table', '2');
INSERT INTO migrations VALUES ('7', '2021_09_04_130442_create_tbl_useradmin_table', '3');
INSERT INTO migrations VALUES ('8', '2021_09_06_062041_create_tbl_color_table', '4');
INSERT INTO migrations VALUES ('9', '2021_09_06_062055_create_tbl_brand_table', '4');
INSERT INTO migrations VALUES ('10', '2021_09_06_084038_create_tbl_procolor_table', '5');
INSERT INTO migrations VALUES ('11', '2021_09_06_084827_create_tbl_product_table', '6');
INSERT INTO migrations VALUES ('12', '2021_09_06_090023_create_tbl_product_table', '7');
INSERT INTO migrations VALUES ('13', '2021_09_06_141945_create_tbl_productimg_table', '8');
INSERT INTO migrations VALUES ('14', '2021_09_07_145648_create_tbl_cart_table', '9');
INSERT INTO migrations VALUES ('15', '2021_09_08_132526_create_tbl_banner_table', '10');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_banner`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_banner`;
CREATE TABLE `tbl_banner` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_banner
-- ----------------------------
INSERT INTO tbl_banner VALUES ('3', 'M75 Sport Watch', '1632967092-30-09-2021-NSWCFXPTKG.jpg', 'http://localhost:8080/electronice/Product-detail/54', 'No restocking fee (đ.350.000 savings)', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet impedit sapiente adipisci, ea error omnis corrupti. Quia consectetur labore enim excepturi! Aliquid, quisquam dolorum impedit officia ad optio rerum.</p><h3 style=\"margin: 20px 0px 0px; font-weight: 800; font-size: 25px; font-family: Manrope, sans-serif; padding: 0px; color: rgb(8, 24, 40);\"><span style=\"margin: 0px 12px 0px 0px; padding: 0px; display: inline-block; transition: all 0.4s ease 0s; font-size: 16px; color: rgb(138, 138, 138);\">Now Only</span>&nbsp;$320.99</h3>', '1', '1', '1', '2021-09-30 01:58:12', '2021-10-07 09:12:51');
INSERT INTO tbl_banner VALUES ('4', 'Noã restocking fee ($35 savings) giảm 50%', '1632967576-30-09-2021-EVWSASSXNN.jpg', 'http://localhost:8080/electronice/Product-detail/54', 'Big Sale Offer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><h3 style=\"margin: 20px 0px 0px; padding: 0px; font-weight: 800; font-size: 25px; color: rgb(8, 24, 40); font-family: Manrope, sans-serif;\"><span style=\"margin: 0px 12px 0px 0px; padding: 0px; display: inline-block; transition: all 0.4s ease 0s; font-size: 16px; color: rgb(138, 138, 138);\">Combo Only:</span>&nbsp;$590.00</h3>', '1', '2', '1', '2021-09-30 02:06:16', '2021-10-07 09:12:58');
INSERT INTO tbl_banner VALUES ('5', 'iPhone 12 Pro Max', '1632967636-30-09-2021-ILODOYHCPR.jpg', 'http://localhost:8080/electronice/Product-detail/7', 'New line required', 'đ.25.900.000', '2', '1', '1', '2021-09-30 02:07:16', '2021-09-30 02:07:49');
INSERT INTO tbl_banner VALUES ('6', 'Weekly Sale!', '1632967723-30-09-2021-JSLORO6BC4.png', 'http://localhost:8080/electronice/Product-detail/7', 'Saving up to 50% off all online store items this week.', 'không có gì', '3', '1', '1', '2021-09-30 02:08:43', '2021-09-30 02:09:09');
INSERT INTO tbl_banner VALUES ('7', 'Samsung Notebook 9', '1633615183-07-10-2021-2HYOQVCDDK.jpg', 'http://localhost:8080/electronice/Product-detail/53', 'đ.59.000.000', '<p>Lorem ipsum dolor sit amet,</p><p>eiusmod tempor incididunt ut labore.</p>', '5', '1', '1', '2021-10-07 13:59:43', '2021-10-07 14:00:42');

-- ----------------------------
-- Table structure for `tbl_blog`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE `tbl_blog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_conten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) unsigned NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_blog_category_foreign` (`category`),
  CONSTRAINT `tbl_blog_category_foreign` FOREIGN KEY (`category`) REFERENCES `tbl_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_blog
-- ----------------------------
INSERT INTO tbl_blog VALUES ('2', 'What information is needed for shipping?', '1631958976-18-09-2021-GVWGWJOI4H.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n                                    incididunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n                                    incididunt.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n                                    incididunt.', '8', '1', '2021-09-15 16:21:16', '2021-09-18 09:56:16');
INSERT INTO tbl_blog VALUES ('3', 'scsbgnfnm', '1632322154-22-09-2021-GBW7MADUEI.jpg', 'vvdgdhrf', 'đvv', '9', '1', '2021-09-22 14:49:14', '2021-09-22 14:49:14');
INSERT INTO tbl_blog VALUES ('4', 'What information is needed for shipping?', '1632322170-22-09-2021-ZIFSGWOCXS.jpg', 'ssgeg', 'xacs', '10', '1', '2021-09-22 14:49:30', '2021-09-22 14:49:30');

-- ----------------------------
-- Table structure for `tbl_brand`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE `tbl_brand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_brand` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_brand
-- ----------------------------
INSERT INTO tbl_brand VALUES ('1', 'Panasonic', '1632969560-30-09-2021-T29XFMH3T4.jpg', '1', '2021-09-30 02:39:20', '2021-09-30 02:39:20');
INSERT INTO tbl_brand VALUES ('2', 'Cannon', '1632969570-30-09-2021-1KQZNP63M9.png', '1', '2021-09-30 02:39:30', '2021-09-30 02:39:30');
INSERT INTO tbl_brand VALUES ('3', 'Sony', '1632969580-30-09-2021-IARWZDKX68.png', '1', '2021-09-30 02:39:40', '2021-09-30 02:39:40');
INSERT INTO tbl_brand VALUES ('4', 'Samsung', '1632969591-30-09-2021-CZNGDNXBT4.png', '1', '2021-09-30 02:39:51', '2021-09-30 02:39:51');
INSERT INTO tbl_brand VALUES ('5', 'Bosch', '1632969630-30-09-2021-LSQZQH0TAJ.png', '1', '2021-09-30 02:40:30', '2021-09-30 02:40:30');
INSERT INTO tbl_brand VALUES ('6', 'HP', '1632969670-30-09-2021-RSGH1ZHSEB.png', '1', '2021-09-30 02:41:10', '2021-09-30 02:41:10');
INSERT INTO tbl_brand VALUES ('7', 'Dell', '1632969679-30-09-2021-OULA5S54LC.png', '1', '2021-09-30 02:41:19', '2021-09-30 02:41:19');
INSERT INTO tbl_brand VALUES ('8', 'Yoosee', '1633534911-06-10-2021-BRRLVZPUKX.jpg', '1', '2021-10-06 15:41:51', '2021-10-06 15:41:51');

-- ----------------------------
-- Table structure for `tbl_cart`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE `tbl_cart` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pro_id` bigint(20) unsigned NOT NULL,
  `classify` bigint(20) unsigned DEFAULT NULL,
  `type_id` bigint(20) unsigned DEFAULT NULL,
  `price` int(150) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `cus_id` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_cart_pro_id_foreign` (`pro_id`),
  CONSTRAINT `tbl_cart_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_cart
-- ----------------------------
INSERT INTO tbl_cart VALUES ('10', '54', '6', '9', '4999000', '0', '1', '1');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `parden_id` bigint(5) NOT NULL DEFAULT 0,
  `typecat` bigint(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO tbl_category VALUES ('8', 'Thiết bị điện tử', '1', '0', '2', '2021-09-02 15:58:56', '2021-10-05 15:49:03');
INSERT INTO tbl_category VALUES ('9', 'Máy tính và Phụ kiện', '1', '0', '2', '2021-09-03 13:47:41', '2021-10-07 08:51:20');
INSERT INTO tbl_category VALUES ('10', 'tivi', '1', '0', '2', '2021-09-03 13:52:10', '2021-10-05 15:50:13');
INSERT INTO tbl_category VALUES ('18', 'Điên thoại & Máy tính bảng', '1', '0', '2', '2021-10-05 16:09:39', '2021-10-07 08:28:40');
INSERT INTO tbl_category VALUES ('19', 'Tai nghe', '1', '0', '2', '2021-10-05 16:16:36', '2021-10-05 16:16:36');
INSERT INTO tbl_category VALUES ('20', 'Flycamere', '1', '0', '2', '2021-10-05 16:17:27', '2021-10-07 16:13:05');
INSERT INTO tbl_category VALUES ('21', 'Máy ảnh ,Hình ảnh & video', '1', '0', '2', '2021-10-05 16:19:30', '2021-10-05 16:19:30');
INSERT INTO tbl_category VALUES ('22', 'Mp3 players', '1', '8', '2', '2021-10-07 08:38:36', '2021-10-07 08:38:36');

-- ----------------------------
-- Table structure for `tbl_color`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_color`;
CREATE TABLE `tbl_color` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `color_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_color
-- ----------------------------
INSERT INTO tbl_color VALUES ('1', 'màu đen', '1', '2021-09-06 06:39:48', '2021-09-06 07:39:49');
INSERT INTO tbl_color VALUES ('3', 'màu đỏ', '1', '2021-09-06 09:23:46', '2021-09-06 09:23:46');
INSERT INTO tbl_color VALUES ('4', 'màu xanh', '1', '2021-09-06 09:23:50', '2021-09-06 09:23:50');
INSERT INTO tbl_color VALUES ('5', 'màu trắng', '1', '2021-09-06 09:23:54', '2021-09-06 09:23:54');
INSERT INTO tbl_color VALUES ('6', 'màu hồng', '1', '2021-09-06 09:24:00', '2021-09-06 09:24:00');
INSERT INTO tbl_color VALUES ('7', 'màu vàng', '1', '2021-10-06 14:14:23', '2021-10-06 14:14:23');

-- ----------------------------
-- Table structure for `tbl_comment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE `tbl_comment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_customer` bigint(20) unsigned NOT NULL,
  `id_blog` bigint(20) unsigned NOT NULL,
  `ND_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_comment_id_customer_foreign` (`id_customer`),
  KEY `tbl_comment_id_blog_foreign` (`id_blog`),
  CONSTRAINT `tbl_comment_id_blog_foreign` FOREIGN KEY (`id_blog`) REFERENCES `tbl_blog` (`id`),
  CONSTRAINT `tbl_comment_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_coupon`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_coupon`;
CREATE TABLE `tbl_coupon` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_coupon
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_customer`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE `tbl_customer` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_customer_cus_email_unique` (`cus_email`),
  UNIQUE KEY `tbl_customer_cus_phone_unique` (`cus_phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_customer
-- ----------------------------
INSERT INTO tbl_customer VALUES ('1', 'phihuukien', 'phihuukien0807@gmail.com', '0982345623', '$2y$10$jQHeF5aq0YThJyclXXDuW.Ug6HkZtMXaSG8tSFsvGXGcF27g57NRG', '1633253943-03-10-2021-Z1RPRAVDLS.jpg', 'U80NDXPVt6GdoWfTq8Ek70OHyY75whhuFPYYRb4hpgUCDHBtFOQvLJcNHI4b', null, '1', '2021-10-03 09:39:03', '2021-10-03 09:40:20');

-- ----------------------------
-- Table structure for `tbl_favorite`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_favorite`;
CREATE TABLE `tbl_favorite` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cus_id` bigint(20) unsigned NOT NULL,
  `pro_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_favorite_cus_id_foreign` (`cus_id`),
  KEY `tbl_favorite_pro_id_foreign` (`pro_id`),
  CONSTRAINT `tbl_favorite_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tbl_favorite_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_favorite
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_order`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `order_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(20) DEFAULT NULL,
  `status` smallint(10) NOT NULL DEFAULT 1,
  `coupon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_order_customer_id_foreign` (`customer_id`),
  CONSTRAINT `tbl_order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_order
-- ----------------------------
INSERT INTO tbl_order VALUES ('2', '1', 'phihuukien', 'phihuukien0807@gmail.com', '0982345623', 'Hà Nội', 'quốc oai', 'Hà Nội', 'Đồng Quangwfasgfasgsa d dx', 'câcqcvqac', '3500000', '1', null, '2021-10-07 03:05:27', '2021-10-07 03:05:27');

-- ----------------------------
-- Table structure for `tbl_orderdetail`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_orderdetail`;
CREATE TABLE `tbl_orderdetail` (
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `classfy` bigint(20) unsigned DEFAULT NULL,
  `type_id` bigint(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`,`product_id`),
  KEY `tbl_orderdetail_product_id_foreign` (`product_id`),
  CONSTRAINT `tbl_orderdetail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`),
  CONSTRAINT `tbl_orderdetail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_orderdetail
-- ----------------------------
INSERT INTO tbl_orderdetail VALUES ('2', '40', '3500000', '1', null, null, '2021-10-07 03:05:27', '2021-10-07 03:05:27');

-- ----------------------------
-- Table structure for `tbl_procolor`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_procolor`;
CREATE TABLE `tbl_procolor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pro_id` bigint(20) unsigned NOT NULL,
  `color_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_procolor_pro_id_forenign` (`pro_id`),
  KEY `tbl_procolor_color_id_forenign` (`color_id`),
  CONSTRAINT `tbl_procolor_color_id_forenign` FOREIGN KEY (`color_id`) REFERENCES `tbl_color` (`id`),
  CONSTRAINT `tbl_procolor_pro_id_forenign` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_procolor
-- ----------------------------
INSERT INTO tbl_procolor VALUES ('81', '21', '1', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_procolor VALUES ('82', '21', '3', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_procolor VALUES ('83', '21', '6', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_procolor VALUES ('84', '21', '5', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_procolor VALUES ('85', '21', '7', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_procolor VALUES ('86', '21', '4', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_procolor VALUES ('87', '22', '1', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_procolor VALUES ('88', '22', '3', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_procolor VALUES ('89', '22', '6', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_procolor VALUES ('90', '22', '5', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_procolor VALUES ('91', '23', '3', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_procolor VALUES ('92', '23', '6', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_procolor VALUES ('93', '23', '4', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_procolor VALUES ('94', '24', '1', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_procolor VALUES ('95', '24', '5', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_procolor VALUES ('96', '24', '7', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_procolor VALUES ('97', '25', '1', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_procolor VALUES ('98', '25', '3', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_procolor VALUES ('99', '25', '4', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_procolor VALUES ('100', '26', '1', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_procolor VALUES ('101', '26', '6', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_procolor VALUES ('102', '26', '5', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_procolor VALUES ('103', '27', '1', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_procolor VALUES ('104', '27', '6', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_procolor VALUES ('105', '27', '5', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_procolor VALUES ('106', '28', '1', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_procolor VALUES ('107', '28', '3', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_procolor VALUES ('108', '28', '5', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_procolor VALUES ('109', '28', '4', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_procolor VALUES ('110', '29', '1', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_procolor VALUES ('111', '29', '6', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_procolor VALUES ('112', '29', '5', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_procolor VALUES ('113', '29', '7', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_procolor VALUES ('114', '30', '1', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_procolor VALUES ('115', '30', '5', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_procolor VALUES ('116', '31', '1', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_procolor VALUES ('117', '31', '5', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_procolor VALUES ('118', '31', '7', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_procolor VALUES ('119', '32', '1', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_procolor VALUES ('120', '32', '5', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_procolor VALUES ('121', '33', '1', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_procolor VALUES ('122', '33', '5', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_procolor VALUES ('123', '34', '1', '2021-10-06 16:17:21', '2021-10-06 16:17:21');
INSERT INTO tbl_procolor VALUES ('124', '34', '3', '2021-10-06 16:17:21', '2021-10-06 16:17:21');
INSERT INTO tbl_procolor VALUES ('125', '34', '5', '2021-10-06 16:17:21', '2021-10-06 16:17:21');
INSERT INTO tbl_procolor VALUES ('126', '36', '1', '2021-10-06 16:24:17', '2021-10-06 16:24:17');
INSERT INTO tbl_procolor VALUES ('127', '36', '5', '2021-10-06 16:24:17', '2021-10-06 16:24:17');
INSERT INTO tbl_procolor VALUES ('128', '37', '1', '2021-10-06 16:26:49', '2021-10-06 16:26:49');
INSERT INTO tbl_procolor VALUES ('129', '37', '5', '2021-10-06 16:26:49', '2021-10-06 16:26:49');
INSERT INTO tbl_procolor VALUES ('130', '39', '1', '2021-10-06 16:30:48', '2021-10-06 16:30:48');
INSERT INTO tbl_procolor VALUES ('131', '39', '5', '2021-10-06 16:30:48', '2021-10-06 16:30:48');
INSERT INTO tbl_procolor VALUES ('132', '42', '1', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_procolor VALUES ('133', '42', '3', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_procolor VALUES ('134', '42', '6', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_procolor VALUES ('135', '42', '5', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_procolor VALUES ('136', '43', '1', '2021-10-07 08:12:25', '2021-10-07 08:12:25');
INSERT INTO tbl_procolor VALUES ('137', '43', '6', '2021-10-07 08:12:25', '2021-10-07 08:12:25');
INSERT INTO tbl_procolor VALUES ('138', '43', '5', '2021-10-07 08:12:25', '2021-10-07 08:12:25');
INSERT INTO tbl_procolor VALUES ('139', '44', '1', '2021-10-07 08:14:28', '2021-10-07 08:14:28');
INSERT INTO tbl_procolor VALUES ('140', '44', '4', '2021-10-07 08:14:28', '2021-10-07 08:14:28');
INSERT INTO tbl_procolor VALUES ('141', '45', '1', '2021-10-07 08:18:47', '2021-10-07 08:18:47');
INSERT INTO tbl_procolor VALUES ('142', '45', '3', '2021-10-07 08:18:48', '2021-10-07 08:18:48');
INSERT INTO tbl_procolor VALUES ('143', '45', '4', '2021-10-07 08:18:48', '2021-10-07 08:18:48');
INSERT INTO tbl_procolor VALUES ('144', '46', '3', '2021-10-07 08:20:41', '2021-10-07 08:20:41');
INSERT INTO tbl_procolor VALUES ('145', '46', '6', '2021-10-07 08:20:41', '2021-10-07 08:20:41');
INSERT INTO tbl_procolor VALUES ('146', '46', '5', '2021-10-07 08:20:41', '2021-10-07 08:20:41');
INSERT INTO tbl_procolor VALUES ('147', '47', '1', '2021-10-07 08:23:08', '2021-10-07 08:23:08');
INSERT INTO tbl_procolor VALUES ('148', '47', '6', '2021-10-07 08:23:08', '2021-10-07 08:23:08');
INSERT INTO tbl_procolor VALUES ('149', '48', '1', '2021-10-07 08:26:32', '2021-10-07 08:26:32');
INSERT INTO tbl_procolor VALUES ('150', '48', '3', '2021-10-07 08:26:32', '2021-10-07 08:26:32');
INSERT INTO tbl_procolor VALUES ('151', '48', '5', '2021-10-07 08:26:32', '2021-10-07 08:26:32');
INSERT INTO tbl_procolor VALUES ('152', '49', '1', '2021-10-07 08:27:50', '2021-10-07 08:27:50');
INSERT INTO tbl_procolor VALUES ('153', '49', '6', '2021-10-07 08:27:50', '2021-10-07 08:27:50');
INSERT INTO tbl_procolor VALUES ('154', '50', '1', '2021-10-07 08:41:46', '2021-10-07 08:41:46');
INSERT INTO tbl_procolor VALUES ('155', '50', '6', '2021-10-07 08:41:46', '2021-10-07 08:41:46');
INSERT INTO tbl_procolor VALUES ('156', '51', '1', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_procolor VALUES ('157', '51', '5', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_procolor VALUES ('158', '52', '1', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_procolor VALUES ('159', '52', '3', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_procolor VALUES ('160', '53', '1', '2021-10-07 08:56:09', '2021-10-07 08:56:09');
INSERT INTO tbl_procolor VALUES ('161', '53', '3', '2021-10-07 08:56:09', '2021-10-07 08:56:09');
INSERT INTO tbl_procolor VALUES ('162', '54', '6', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_procolor VALUES ('163', '54', '5', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_procolor VALUES ('164', '55', '1', '2021-10-07 16:14:56', '2021-10-07 16:14:56');
INSERT INTO tbl_procolor VALUES ('165', '55', '5', '2021-10-07 16:14:56', '2021-10-07 16:14:56');

-- ----------------------------
-- Table structure for `tbl_product`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) unsigned NOT NULL,
  `images` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `id_brands` bigint(20) unsigned NOT NULL,
  `sold` bigint(20) NOT NULL DEFAULT 0,
  `warehouse` bigint(20) NOT NULL,
  `favorite` bigint(20) unsigned NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_product_cat_id_foreign` (`cat_id`),
  KEY `tbl_product_id_brands_foreign` (`id_brands`),
  CONSTRAINT `tbl_product_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`id`),
  CONSTRAINT `tbl_product_id_brands_foreign` FOREIGN KEY (`id_brands`) REFERENCES `tbl_brand` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------
INSERT INTO tbl_product VALUES ('21', 'DH Series Curved 27-Inch FHD Monitor', '19', '1633530383-06-10-2021-OTHNJ8LBEL.jpg', '100000', '80000', '5', '123', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Battery capacity 250MAH+ protection board\r\nCharging power supply: DC5V power supply [round hole interface] (computer USB port,  charger, car charger)\r\nCompatible s: Compatible with 99% of s with Bluetooth function on Android, Apple, Microsoft and Symbian systems\r\nImpedance: 32 OHM\r\nBluetooth version: Bluetooth v5.0\r\nBluetooth use frequency band: 2.4GHz\r\nPower level: CLASS II\r\nBluetooth distance: 10 meters without barriers\r\nFrequency response: 20-20000Hz\r\nWith A2DP/AVRCP high-quality stereo audio transmission and remote control protocol\r\nCharging time is about 2 hours (power indicator charging: red light is on, full charge: red light is off (blue light is on).)\r\nThe talk time is about 8-10 hours\r\nMusic time is about 8-10 hours\r\nStandby time is about 120 hours\r\nColour:red/Golden/Sier/blue\r\nMaterial:ABS \r\nSize:17 x 11 x 9cm\r\n\r\nPackage Contents:\r\n1 x Bluetooth headset\r\n1 x audio cable\r\n1 x charging cable&lt;br /&gt;Only the above package content, other products are not included.&lt;br /&gt;Note: Light shooting and different displays may cause the color of the item in the picture a little different from the real thing. The measurement allowed error is +/- 1-3cm.</span>', '1', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_product VALUES ('22', 'Globe Head Electric & Appliances HD WiFi', '19', '1633531028-06-10-2021-A4RXBFH3ME.jpg', '120000', '80000', '2', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Product:ONIKUMA K1B Pro Wired Head-mounted Gaming Headphones \r\n\r\nFeatures:\r\n1:The external rotatable high-definition microphone can be rotated at a suitable angle\r\n2:It effectively blocks external noise interference, allowing you to wear it for a long time without pressure\r\n3:The memory foam wrap design allows you to wear it lightly, comfortably, breathable and not stuffy\r\n4:Soft earmuffs fit the ears of different sizes, skin-friendly and comfortable\r\n\r\n\r\nCommunicationWired\r\nOriginCN(Origin)\r\nImpedance RangeEarcups TypeCharging MethodHeadphone Pads MaterialMagnet TypeBluetooth VersionFeaturesCodecsWith MicrophoneIs wirelessSupport APPSupport Memory CardWaterproofResistanceLine LengthFrequency Response RangeSensitivityPlug TypeStyleHeadphone\r\nConnectors3.5mm\r\nActive Noise-CancellationYes\r\nVolume ControlYes\r\nControl ButtonYes\r\nVocalism PrincipleDynamic\r\nWireless TypeNone\r\n\r\nPackList:1*product\r\n\r\n\r\nSeller Sku:850474-803511</span>', '1', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_product VALUES ('23', 'Head Series Curved 27-Inch FHD Monitor', '19', '1633531166-06-10-2021-TXEIEPPKIX.jpg', '100000', '0', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày\r\n\r\n? Xin chào, chào mừng bạn đến với cửa hàng chính thức ONIKUMA.\r\n? Chúng tôi sẽ cung cấp cho bạn các sản phẩm được ủy quyền chính hãng 100% của Onikuma.\r\n? Nếu bạn thích một trong những sản phẩm tai nghe của chúng tôi, đừng ngần ngại, hãy đặt hàng ngay.\r\n\r\n⭐ Đặc điểm sản phẩm:\r\n\r\n1. Chất lượng âm thanh\r\n-Chất lượng âm thanh tai nghe chơi game cực kỳ chính xác.\r\n-Các âm thanh vụ nổ, tiếng súng và hiệu ứng âm thanh thực sự thăng hoa đầy phấn khích.\r\n-Các trình điều khiển âm thanh mạnh mẽ rộng rãi và có thể mang đến cho bạn một \"cú đấm\" đẹp mắt khiến bạn cảm thấy như đang ở trong chính trò chơi.\r\n\r\n2. Đèn RGB\r\n-Bạn sẽ trông cực kỳ sành điệu với thiết kế đẹp mắt và đèn RGB tuyệt vời từ bên trong tai nghe.\r\n\r\n3. Chụp tai mềm mại\r\n-Tai nghe mang lại sự chắc chắn, vừa vặn thoải mái, cách ly tiếng ồn hoàn hảo.\r\n-Những chiếc tai nghe siêu vừa vặn với khả năng kéo dài và vòng đeo đầu có thể điều chỉnh trượt lên.\r\n-Đệm tai và đệm vòng đeo đầu rất thoải mái.\r\n-Đệm mềm và dày hơn so với hình ảnh hiển thị. Thích hợp cho các trận game thời gian dài.\r\n\r\n⭐ Lưu ý:\r\n\r\n1. USB chỉ dành cho đèn RGB, khi bạn cắm USB, đèn LED sẽ hoạt động.\r\n2. Nếu bạn không muốn bật đèn, chỉ cần không cắm cáp USB vào.\r\n3. Gói hàng của chúng tôi bao gồm dây cáp chia (2 giắc cắm âm thanh)\r\nKhi sử dụng tai nghe chơi game cho PC, bạn cần sử dụng dây cáp chia.\r\n1 đầu dành cho micrô và 1 đầu cho âm thanh.\r\nDây xanh lá là dây cho âm thanh và dây hồng là giắc cắm micrô.\r\n\r\n⭐ Thông số sản phẩm:\r\n\r\nMẫu mã: K10 PRO\r\nKích thước loa: 50mm\r\nĐộ nhạy: 106 +/- 3db\r\nMicrô: 6.0 * 2.7mm\r\nTrở kháng: 16Ω +/- 15%\r\nChiều dài dây cáp: 2.2M +/- 15%\r\nĐịnh hướng: Đa hướng\r\nTrở kháng micrô: 2.2k\r\nDải tần số: 20Hz-20 KHz\r\nĐiện áp hoạt động LED: DC5V\r\nĐộ nhạy của micrô: -38 +/- 1dB\r\nDòng điện hoạt động: Giắc cắm tai nghe: USB + 3.5mm 4 chấu\r\nChiều dài dây cáp: Khoảng 2.2m / 7.22ft\r\n\r\n⭐ Gói hàng bao gồm\r\n\r\n1 x Tai nghe chơi game\r\n1 x Dây cáp chia cổng\r\n1 x Hướng dẫn sử dụng</span>', '1', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_product VALUES ('24', 'Header Globe Electric House & Appliances', '19', '1633531887-06-10-2021-U3CCSBFPPQ.jpg', '34500000', '0', '6', '145', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">? Xin chào, chào mừng bạn đến với cửa hàng chính thức của ONIKUMA.\r\n? Chúng tôi sẽ cung cấp cho bạn các sản phẩm được ủy quyền chính hãng 100% của onikuma.\r\n? Hiện đang có chiết khấu một nửa giá tại cửa hàng của chúng tôi. Nếu bạn thích một trong những tai nghe của chúng tôi, đừng ngần ngại đặt hàng ngay bây giờ.\r\n\r\n⭐ Tính năng:\r\n\r\n1. chất lượng âm thanh\r\n-Chất lượng âm thanh tai nghe chơi game này rất chính xác.\r\n-Các vụ nổ, tiếng súng và hiệu ứng âm thanh thực sự phát triển mạnh mẽ với sự dũng cảm.\r\n-Các trình điều khiển âm thanh mạnh mẽ rộng rãi và có thể mang lại cho bạn một cú đấm đẹp mắt khiến bạn cảm thấy như đang ở trong chính trò chơi.\r\n\r\n2.RGB ánh sáng\r\n-Bạn sẽ trông cực kỳ phong cách với thiết kế đẹp mắt và ánh sáng RGB tuyệt vời từ nội thất của nó.\r\n\r\n3. chụp tai mềm\r\n-Với sự chắc chắn, vừa vặn thoải mái mà những chiếc tai nghe này mang lại, sự cách ly mà chúng mang lại là hoàn hảo.\r\n-Những chiếc tai nghe này rất vừa vặn với khả năng kéo dài và băng đô có thể điều chỉnh trượt lên.\r\n- Đệm tai và đệm băng đô rất thoải mái.\r\n-Chúng mềm hơn và dày hơn như hình ảnh hiển thị. Hoàn hảo cho các phiên chơi game dài.\r\n\r\n⭐ Lưu ý:\r\n\r\n1. USB chỉ dành cho đèn RGB, khi bạn cắm USB, đèn LED sẽ hoạt động.\r\n2.Nếu bạn không muốn bật, chỉ cần không cắm cáp USB vào.\r\n3. gói của chúng tôi bao gồm cáp bộ chia (2 giắc cắm âm thanh)\r\nKhi sử dụng Tai nghe chơi game cho PC, bạn cần sử dụng cáp bộ chia.\r\n1 dành cho micrô và 1 dành cho âm thanh.\r\nDây màu xanh lá cây dành cho âm thanh và dây màu hồng ở giắc cắm micrô.\r\n\r\n⭐ Thông số kỹ thuật:\r\n\r\nMô hình: ONIKUMA K19\r\nKích thước loa: 40mm\r\nĐộ nhạy: 118 +/- 3db\r\nMicrô: 6.0 * 5.0mm\r\nTrở kháng: 32Ω +/- 15%\r\nChiều dài cáp: 2.1M +/- 15%\r\nĐịnh hướng: Omi-directional\r\nTrở kháng micrô: 2,2k\r\nDải tần số: 15Hz-20 KHz\r\nĐiện áp làm việc LED: DC5V\r\nĐộ nhạy của micrô: -36 +/- 3dB\r\nLàm việc hiện tại: Jack tai nghe: USB + 3.5mm 4Pin\r\nChiều dài cáp: Xấp xỉ. 2,1m / 0,15ft\r\nKích thước gói: 21 * 11 * 22.5cm /6.8*3.85*8.38in\r\nTrọng lượng gói hàng: 483g / 1.06Lb\r\n\r\n⭐ Nội dung gói\r\n\r\n1 x Tai nghe chơi game\r\n1 x cáp Splitter\r\n1 x Hướng dẫn sử dụng</span>', '1', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_product VALUES ('25', 'Powerbeats Wireless In Ear Head Full', '19', '1633532133-06-10-2021-WOVEYMNNHG.jpg', '1725000', '0', '2', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">? Xin chào, chào mừng bạn đến với cửa hàng chính thức của ONIKUMA.\r\n? Chúng tôi sẽ cung cấp cho bạn các sản phẩm được ủy quyền chính hãng 100% của onikuma.\r\n? Hiện đang có chiết khấu một nửa giá tại cửa hàng của chúng tôi. Nếu bạn thích một trong những tai nghe của chúng tôi, đừng ngần ngại đặt hàng ngay bây giờ.\r\n\r\n⭐ Tính năng:\r\n\r\n1. chất lượng âm thanh\r\n-Chất lượng âm thanh tai nghe chơi game này rất chính xác.\r\n-Các vụ nổ, tiếng súng và hiệu ứng âm thanh thực sự phát triển mạnh mẽ với sự dũng cảm.\r\n-Các trình điều khiển âm thanh mạnh mẽ rộng rãi và có thể mang lại cho bạn một cú đấm đẹp mắt khiến bạn cảm thấy như đang ở trong chính trò chơi.\r\n\r\n2.RGB ánh sáng\r\n-Bạn sẽ trông cực kỳ phong cách với thiết kế đẹp mắt và ánh sáng RGB tuyệt vời từ nội thất của nó.\r\n\r\n3. chụp tai mềm\r\n-Với sự chắc chắn, vừa vặn thoải mái mà những chiếc tai nghe này mang lại, sự cách ly mà chúng mang lại là hoàn hảo.\r\n-Những chiếc tai nghe này rất vừa vặn với khả năng kéo dài và băng đô có thể điều chỉnh trượt lên.\r\n- Đệm tai và đệm băng đô rất thoải mái.\r\n-Chúng mềm hơn và dày hơn như hình ảnh hiển thị. Hoàn hảo cho các phiên chơi game dài.\r\n\r\n⭐ Lưu ý:\r\n\r\n1. USB chỉ dành cho đèn RGB, khi bạn cắm USB, đèn LED sẽ hoạt động.\r\n2.Nếu bạn không muốn bật, chỉ cần không cắm cáp USB vào.\r\n3. gói của chúng tôi bao gồm cáp bộ chia (2 giắc cắm âm thanh)\r\nKhi sử dụng Tai nghe chơi game cho PC, bạn cần sử dụng cáp bộ chia.\r\n1 dành cho micrô và 1 dành cho âm thanh.\r\nDây màu xanh lá cây dành cho âm thanh và dây màu hồng ở giắc cắm micrô.\r\n\r\n⭐ Thông số kỹ thuật:\r\n\r\nMô hình: ONIKUMA K19\r\nKích thước loa: 40mm\r\nĐộ nhạy: 118 +/- 3db\r\nMicrô: 6.0 * 5.0mm\r\nTrở kháng: 32Ω +/- 15%\r\nChiều dài cáp: 2.1M +/- 15%\r\nĐịnh hướng: Omi-directional\r\nTrở kháng micrô: 2,2k\r\nDải tần số: 15Hz-20 KHz\r\nĐiện áp làm việc LED: DC5V\r\nĐộ nhạy của micrô: -36 +/- 3dB\r\nLàm việc hiện tại: Jack tai nghe: USB + 3.5mm 4Pin\r\nChiều dài cáp: Xấp xỉ. 2,1m / 0,15ft\r\nKích thước gói: 21 * 11 * 22.5cm /6.8*3.85*8.38in\r\nTrọng lượng gói hàng: 483g / 1.06Lb\r\n\r\n⭐ Nội dung gói\r\n\r\n1 x Tai nghe chơi game\r\n1 x cáp Splitter\r\n1 x Hướng dẫn sử dụng</span>', '1', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_product VALUES ('26', 'Head Silicon Band Electronic Cigarette', '19', '1633532612-06-10-2021-ISSKMBAKIJ.jpg', '999999', '0', '2', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">? Xin chào, chào mừng bạn đến với cửa hàng chính thức của ONIKUMA. \r\n ?Chúng tôi sẽ cung cấp cho bạn các sản phẩm được ủy quyền chính hãng 100% của onikuma.\r\n\r\nTai nghe chơi game thể thao điện tử\r\n7.1 Hiệu ứng âm thanh vòm Micro đa hướng Micrô đa hướng Chip chơi game Chùm tia đầu cánh bay Hiệu ứng âm thanh chấn động đa chiều Đèn nền Symphony rgb\r\n\r\n⭐ Tính năng:\r\n\r\n1. chất lượng âm thanh\r\n-Chất lượng âm thanh tai nghe chơi game này rất chính xác.\r\n-Các vụ nổ, tiếng súng và hiệu ứng âm thanh thực sự phát triển mạnh mẽ với sự dũng cảm.\r\n-Các trình điều khiển âm thanh mạnh mẽ rộng rãi và có thể mang lại cho bạn một cú đấm đẹp mắt khiến bạn cảm thấy như đang ở trong chính trò chơi.\r\n\r\n2.RGB ánh sáng\r\n-Bạn sẽ trông cực kỳ phong cách với thiết kế đẹp mắt và ánh sáng RGB tuyệt vời từ nội thất của nó.\r\n\r\n3. chụp tai mềm\r\n-Với sự chắc chắn, vừa vặn thoải mái mà những chiếc tai nghe này mang lại, sự cách ly mà chúng mang lại là hoàn hảo.\r\n-Những chiếc tai nghe này rất vừa vặn với khả năng kéo dài và băng đô có thể điều chỉnh trượt lên.\r\n- Đệm tai và đệm băng đô rất thoải mái.\r\n-Chúng mềm hơn và dày hơn như hình ảnh hiển thị. Hoàn hảo cho các phiên chơi game dài.</span>', '1', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_product VALUES ('27', 'Tai nghe Chơi Game ONIKUMA X20 Có Micro Giảm Ồn, Tương Thích Với PC/Laptop/PS4/', '19', '1633533120-06-10-2021-VEJOWDROY2.jpg', '596000', '0', '1', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày\r\n Miêu tả sản phẩm:\r\n  Tai nghe cổng USB + 3.5mm chất lượng cao với micrô để sử dụng máy tính chuyên nghiệp\r\n  Tai nghe có đèn LED nhiều màu sắc thoáng khí, giúp tai nghe của bạn trở nên cá tính và phong cách.\r\n  Thiết kế có đèn sáng trên đầu, nhẹ và không tạo áp lực cho đầu, rất thích hợp cho các game thủ.\r\n  Bộ loa lớn 50mm với âm thanh stereo 4D, HD và tai nghe hiệu ứng giảm tiếng ồn tích hợp giúp âm thanh rõ ràng hơn,\r\n  Thích hợp cho máy tính xách tay và máy tính để bàn.\r\n  Chi tiết sản phẩm:\r\n  Tên sản phẩm: Tai nghe gaming Q3\r\n  Điện áp: USB 5V\r\n  Trọng lượng: 281 g\r\n  Công suất: 20mw (1KHZ 0db)\r\n  Hướng: Đa hướng\r\n  Độ nhạy: -42-e3 db\r\n  Đường kính loa: 50 mm\r\n  Cáp: 1.67m\r\n  Tần số 20-20000 Hz\r\n  Giắc cắm tai nghe: Cổng USB + cáp cổng 3.5mm\r\n  Sản phẩm tương thích: Thích hợp cho máy tính xách tay hai lỗ / máy tính để bàn\r\n  Kích thước: Xấp xỉ 23x20x11cm / 9x7.87x4.33 inch\r\n  Gói hàng bao gồm:\r\n  1x Tai nghe gaming</span>', '1', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_product VALUES ('28', 'Amazfit Equator Activity Tracker', '19', '1633533909-06-10-2021-OMNPZAYK4J.jpg', '576000', '0', '2', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày\r\n\r\nChi tiết sản phẩm:\r\n Tai nghe có đèn LED nhiều màu sắc, giúp tai nghe của quý khách trở nên sành điệu và phong cách.\r\n Với micro nhạy, rất thích hợp cho các game thủ.\r\n Thiết kế loa lớn 50mm với âm thanh nổi 4D giúp âm thanh rõ ràng hơn.\r\n Sản phẩm phù hợp cho máy tính xách tay và máy tính để bàn.\r\n \r\n Tên sản phẩm: Tai nghe có dây\r\n Chất liệu: Nhựa ABS\r\n Hiệu ứng âm thanh: 4D\r\n Kích thước loa: 50mm\r\n Ánh sáng: Màu sắc dễ chịu\r\n Độ nhạy loa: 109dB; 3dB\r\n Trở kháng: 21 Omega; 15%\r\n Dải tần số phù hợp: 20Hz-20KHz\r\n Công suất định mức: 20mW\r\n Giắc cắm tai nghe: Cổng USB + Cổng 3,5 mm\r\n Đặc trưng: Có dây, có đèn LED, Âm thanh nổi\r\n Chiều dài cáp: 2m / 78,74 \" (Xấp xỉ)\r\n Kích thước: 26cm x 14cm x 6cm / 10,24 \" x 5,51 \" x 2,36 \" (Xấp xỉ)\r\n \r\n Lưu ý:\r\n Do sự khác biệt về ánh sáng và các màn hình, màu sắc của sản phẩm có chút khác so với hình ảnh sản phẩm.\r\n Vui lòng thông cảm cho sự chênh lệch về kích thước do cách đo lường thủ công.\r\n \r\n Gói hàng bao gồm:\r\n 1 x Tai nghe có dây</span>', '1', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_product VALUES ('29', 'Tai Nghe Chụp Tai Redsu P47 Kết Nối Bluetooth 4.2 Và Phụ Kiện', '19', '1633534395-06-10-2021-UD8GJEKOF2.jpg', '123000', '0', '2', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày\r\n\r\nChi tiết sản phẩm: \r\nKết nối Bluetooth 4.2, thưởng thức âm nhạc stereo không dây.\r\nThiết kế chụp tai, thoải mái khi đeo.\r\nHỗ trợ cuộc gọi rảnh tay.\r\n\r\nLoại sản phẩm: Tai nghe Bluetooth\r\nChất liệu: ABS\r\nBluetooth: 4.2\r\nPin: Pin có thể sạc được (Bao gồm)\r\nKhoảng cách không dây: 20m\r\nĐặc trưng: Chụp tai, không dây, Âm thanh nổi, Cuộc gọi rảnh tay\r\nKích thước: 16cm x 8cm x 4cm / 6.30 \" x 3.15 \" x 1.57 \" (Xấp xỉ)\r\n\r\nLưu ý: \r\nDo chênh lệch cài đặt ánh sáng và màn hình, màu sắc sản phẩm có thể hơi khác so với hình ảnh. \r\nVui lòng cho phép sai số một chút về số đo do cách đo lường thủ công. \r\n\r\nGói hàng bao gồm:\r\n1 x Tai nghe Bluetooth\r\n1 x Cáp sạc</span>', '1', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_product VALUES ('30', 'Blue Yeti USB Microphone Black HD', '21', '1633535855-06-10-2021-TJFOXWDSXC.jpg', '2300000', '0', '8', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Thông tin sản phẩm:\r\nCamera IP WIFI YooSee - IPCZ16H là sản phẩm mới nhất, Cài đặt nói tiếng việt dễ hiểu và thiết kết hiện đại - chắc chắn.\r\n\r\nTên sản phẩm: Camera IP Yoosee\r\nKích thước sản phẩm (D x R x C): 99.5 x 99 x 125mm\r\nĐộ phân giải hình ảnh: HD720P (1280*720) / 640*360\r\nNhiệt độ khả dụng: -10 ~ 50 Độ C\r\nCường độ ánh sáng tối thiểu: 0.1Lux\r\nCổng đầu vào / Đầu ra: Wifi\r\nTần số ánh sáng: 50Hz, 60Hz\r\nTốc độ chuyển khung hình/s: 1~25 fps\r\nĐộ phân giải Video: 720P (1280*720)\r\nTùy chỉnh hình ảnh: Brightness, Contrast, Saturation, Chromaticity\r\nNăng lượng đầu vào: DC 5V / 2.0A\r\nCân bằng màu sắc: Có thể điều chỉnh tự động hoặc tự điều chỉnh\r\nHồng ngoại xem đêm: 20m\r\nHỗ trợ địa chỉ IP: IP tĩnh, IP động.\r\nChức năng nổi bật\r\n\r\nCHỨC NĂNG SẢN PHẨM:\r\nPlug &amp; Play: không cần đầu thu, không dây tín hiệu, chỉ cần cắm điện và bắt wifi là chạy\r\n- Quay quét 360 độ ( 360 độ ngang - 120 độ đọc)\r\n- Đàm thoại 2 chiều \r\n- xem đêm hồng ngoại\r\n- Báo động chuyển động. (Thông báo về điện thoại, hú còi báo động)\r\nSản phẩm bảo hành 6 tháng\r\n- Chất lượng hình ảnh HD rõ nét\r\n- Hỗ trợ nhiều thiết bị ( IOS, android, máy tính)\r\n\r\n\r\nCamera Yoosee IP có chức năng quay quét 360 độ ngang, 120 độ dọc có khả năng quan sát mọi góc nhìn trong nhà bạn. giúp bạn tăng thêm khả năng quan sát cũng như bảo vệ tài sản của mình.\r\n\r\nViệc điều chỉnh Camera sẽ dễ dàng hơn rất nhiều với App Yoosee. Bạn sẽ luôn có thể tương tác với các thành viên trong gia đình hay các nhân viên của bạn mọi lúc mọi nơi chỉ bằng vài phút điều chỉnh ứng dụng trên điện thoại.\r\n\r\nCamera IP Yoosee i sẽ giúp bạn quan sát mọi lúc, mọi nơi và hỗ trợ bạn ghi lại những phút giây quan trọng mà bạn luôn có thể xem lại bất cứ lúc nào.\r\n\r\nHình ảnh từ Camera Yoosee luôn đạt chuẩn chất lượng hình ảnh đẹp, rõ nét hơn các loại camera thường nên bạn có thể đảm bảo các thước Video ghi lại từ Yoosee sẽ luôn cho thông tin chính xác, rõ ràng và chi tiết.</span>', '1', '2021-10-06 15:57:35', '2021-10-06 15:57:35');
INSERT INTO tbl_product VALUES ('31', 'Camera Series Curved 27-Inch FHD Monitor', '21', '1633536447-06-10-2021-TI35YW1R5M.jpg', '989990', '0', '8', '0', '100', '0', '<div><br></div><div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">\r\n?BẠN ĐANG TÌM KIẾM 1 CHIẾC CAMERA CÓ KHẢ NĂNG CHỐNG CHỊU VỚI THỜI TIẾT NẮNG – MƯA LẠI CÓ KHẢ NĂNG QUAN SÁT BAN ĐÊM CÓ MÀU SẮC + CÓ ĐÈN LED CHIẾU SÁNG KHU VỰC.\r\n?CAMERA YOOSEE NGOÀI TRỜI TÍCH HỢP LED CHIẾU SÁNG LÀ LỰA CHỌN SỐ 1\r\n---------------------------------------------------------------------------------------\r\nTHÔNG TIN CHI TIẾT\r\n- App:YOOSEE \r\n- Chất lượng hình ảnh: 1080p -2.0mpx Siêu nét\r\nTích hớp 2 Led chiếu sáng - 2 led hồng ngoại\r\n- Ống kính: 2.8mm\r\n- Tích hơp 6 đèn led trong đó có 4 led chiếu sáng với công suất 20w và 2 led hồng ngoại xem đêm\r\n- Tích hợp micro: nghe đc âm thanh khi xem\r\n- Tích hợp 2 anten thu sóng wifi cực khỏe\r\n- Nguồn điện vào: 12v-2a\r\n- Cổng mạng J45: có\r\n► Xem được qua mạng Wifi, 3G dù bạn ở bất cứ nơi đâu với các thiết bị như: điện thoại, máy tính bảng, ipad, laptop, PC...\r\n?️ Bảo hành 6 tháng.\r\nBộ sản phẩm bao gồm:\r\n01 camera\r\n01 nguồn 12v -2a\r\n01 chân đế.\r\n?️ Không cần: đầu thu, đầu ghi, ổ cứng, đi dây vướng víu\r\n➡ Tất cả đều TỰ ĐỘNG &amp; MIỄN PHÍ.\r\n► Chỉ cần: Đặt vào vị trí cần giám sát, Kết nối với modem WIFI\r\n✔️ Chip HI3518e, 2.0mpx, Độ phân giải: 1080p\r\n✔️ Chuẩn H.264, cho hình ảnh trong trẻo với chất lượng HD\r\n✔️ Có 04 đèn Led hồng ngoại cỡ đại hỗ trợ quan sát ban đêm, tự cân bằng sáng cho chất lượng quan sát ban đêm đẹp hơn, có màu sắc sống động\r\n✔️ Ống kính tiêu chuẩn cố định: 2.8mm cho góc nhìn rộng hơn\r\n✔️ Wi-Fi/802.11/b/g/n , Không cần tên miền DNS, chỉ cần cắm điện là chạy.</span><br></div>', '1', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_product VALUES ('32', 'Blue Yeti USB Microphone Black HD', '21', '1633536782-06-10-2021-Z80UFGCTQW.jpg', '135000', '0', '8', '150', '100', '0', '<div><br></div><div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">\r\n?BẠN ĐANG TÌM KIẾM 1 CHIẾC CAMERA CÓ KHẢ NĂNG CHỐNG CHỊU VỚI THỜI TIẾT NẮNG – MƯA LẠI CÓ KHẢ NĂNG QUAN SÁT BAN ĐÊM CÓ MÀU SẮC + CÓ ĐÈN LED CHIẾU SÁNG KHU VỰC.\r\n?CAMERA YOOSEE NGOÀI TRỜI TÍCH HỢP LED CHIẾU SÁNG LÀ LỰA CHỌN SỐ 1\r\n---------------------------------------------------------------------------------------\r\nTHÔNG TIN CHI TIẾT\r\n- App:YOOSEE \r\n- Chất lượng hình ảnh: 1080p -2.0mpx Siêu nét\r\nTích hớp 2 Led chiếu sáng - 2 led hồng ngoại\r\n- Ống kính: 2.8mm\r\n- Tích hơp 6 đèn led trong đó có 4 led chiếu sáng với công suất 20w và 2 led hồng ngoại xem đêm\r\n- Tích hợp micro: nghe đc âm thanh khi xem\r\n- Tích hợp 2 anten thu sóng wifi cực khỏe\r\n- Nguồn điện vào: 12v-2a\r\n- Cổng mạng J45: có\r\n► Xem được qua mạng Wifi, 3G dù bạn ở bất cứ nơi đâu với các thiết bị như: điện thoại, máy tính bảng, ipad, laptop, PC...\r\n?️ Bảo hành 6 tháng.\r\nBộ sản phẩm bao gồm:\r\n01 camera\r\n01 nguồn 12v -2a\r\n01 chân đế.\r\n?️ Không cần: đầu thu, đầu ghi, ổ cứng, đi dây vướng víu\r\n➡ Tất cả đều TỰ ĐỘNG &amp; MIỄN PHÍ.\r\n► Chỉ cần: Đặt vào vị trí cần giám sát, Kết nối với modem WIFI\r\n✔️ Chip HI3518e, 2.0mpx, Độ phân giải: 1080p\r\n✔️ Chuẩn H.264, cho hình ảnh trong trẻo với chất lượng HD\r\n✔️ Có 04 đèn Led hồng ngoại cỡ đại hỗ trợ quan sát ban đêm, tự cân bằng sáng cho chất lượng quan sát ban đêm đẹp hơn, có màu sắc sống động\r\n✔️ Ống kính tiêu chuẩn cố định: 2.8mm cho góc nhìn rộng hơn\r\n✔️ Wi-Fi/802.11/b/g/n , Không cần tên miền DNS, chỉ cần cắm điện là chạy.</span><br></div>', '1', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_product VALUES ('33', 'Newby 3.3mm Lens 720P HD WiFi Smart', '21', '1633536936-06-10-2021-S2TI9YE4TY.jpg', '1340000', '0', '8', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">CAMERA THÔNG MINH THẾ HỆ MỚI DAHUA 3.0Mpx- SIÊU NÉT - ỐNG KÍNH 2.6mm GÓC NHÌN RỘNG HƠN \r\nTHÔNG TIN SẢN PHẨM\r\nTên SP: Camera DAHUA lắp ngoài trời W26S - 3.0mpx\r\n- App:YOOSEE \r\n- Chất lượng hình ảnh: 2304P x 1296P - 3.0mpx Siêu nét\r\nTích hợp cụm đèn 6Led:  4 Led chiếu sáng - 2 led hồng ngoại\r\n- Ống kính: 2.6mm\r\n- Tích hơp 6 đèn led trong đó có 4 led chiếu sáng và 2 led hồng ngoại xem đêm\r\n- Tích hợp micro: nghe đc âm thanh khi xem\r\n- Tích hợp 2 anten thu sóng wifi cực khỏe\r\n- Nguồn điện vào: 12v-2a\r\n- Cổng mạng J45: có\r\n► Xem được qua mạng Wifi, 3G dù bạn ở bất cứ nơi đâu với các thiết bị như: điện thoại, máy tính bảng, ipad, laptop, PC...\r\n?️ Bảo hành 6 tháng.\r\nBộ sản phẩm bao gồm:\r\n01 camera\r\n01 nguồn 12v -2a\r\n01 chân đế.\r\n?️ Không cần: đầu thu, đầu ghi, ổ cứng, đi dây vướng víu\r\n➡ Tất cả đều TỰ ĐỘNG &amp; MIỄN PHÍ.\r\n► Chỉ cần: Đặt vào vị trí cần giám sát, Kết nối với modem WIFI\r\n✔️ Chip HI3518e, 3.0mpx, Độ phân giải: 2304p x 1296P\r\n✔️ Chuẩn H.264, cho hình ảnh trong trẻo với chất lượng QHD\r\n✔️ Có 04 đèn Led hồng ngoại cỡ đại hỗ trợ quan sát ban đêm, tự cân bằng sáng cho chất lượng quan sát ban đêm đẹp hơn, có màu sắc sống động\r\n✔️ Ống kính tiêu chuẩn cố định: 2.6mm cho góc nhìn rộng hơn các dòng 2.0mpx 2.8mm\r\n✔️ Wi-Fi/802.11/b/g/n , Không cần tên miền DNS, chỉ cần cắm điện là chạy.\r\n==============================================\r\nSản phẩm bảo hành 6 tháng bằng tem dán trực tiếp vào sản phẩm.</span>', '1', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_product VALUES ('34', 'Cemara Smart Charger 5V 2A US Back', '21', '1633537041-06-10-2021-A7KONJG6DC.jpg', '1340000', '0', '8', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">CAMERA THÔNG MINH THẾ HỆ MỚI IMOUI 3.0Mpx- SIÊU NÉT - ỐNG KÍNH 2.6mm GÓC NHÌN RỘNG HƠN \r\nTHÔNG TIN SẢN PHẨM\r\nTên SP: Camera IMOUI lắp ngoài trời W26S - 3.0mpx\r\n- App:YOOSEE \r\n- Chất lượng hình ảnh: 2304P x 1296P - 3.0mpx Siêu nét\r\nTích hợp cụm đèn 6Led:  4 Led chiếu sáng - 2 led hồng ngoại\r\n- Ống kính: 2.6mm\r\n- Tích hơp 6 đèn led trong đó có 4 led chiếu sáng và 2 led hồng ngoại xem đêm\r\n- Tích hợp micro: nghe đc âm thanh khi xem\r\n- Tích hợp 2 anten thu sóng wifi cực khỏe\r\n- Nguồn điện vào: 12v-2a\r\n- Cổng mạng J45: có\r\n► Xem được qua mạng Wifi, 3G dù bạn ở bất cứ nơi đâu với các thiết bị như: điện thoại, máy tính bảng, ipad, laptop, PC...\r\n?️ Bảo hành 6 tháng.\r\nBộ sản phẩm bao gồm:\r\n01 camera\r\n01 nguồn 12v -2a\r\n01 chân đế.\r\n?️ Không cần: đầu thu, đầu ghi, ổ cứng, đi dây vướng víu\r\n➡ Tất cả đều TỰ ĐỘNG &amp; MIỄN PHÍ.\r\n► Chỉ cần: Đặt vào vị trí cần giám sát, Kết nối với modem WIFI\r\n✔️ Chip HI3518e, 3.0mpx, Độ phân giải: 2304p x 1296P\r\n✔️ Chuẩn H.264, cho hình ảnh trong trẻo với chất lượng QHD\r\n✔️ Có 04 đèn Led hồng ngoại cỡ đại hỗ trợ quan sát ban đêm, tự cân bằng sáng cho chất lượng quan sát ban đêm đẹp hơn, có màu sắc sống động\r\n✔️ Ống kính tiêu chuẩn cố định: 2.6mm cho góc nhìn rộng hơn các dòng 2.0mpx 2.8mm\r\n✔️ Wi-Fi/802.11/b/g/n , Không cần tên miền DNS, chỉ cần cắm điện là chạy.\r\n==============================================\r\nSản phẩm bảo hành 6 tháng bằng tem dán trực tiếp vào sản phẩm.</span>', '1', '2021-10-06 16:17:21', '2021-10-06 16:17:21');
INSERT INTO tbl_product VALUES ('35', 'Camera IP YooSee lắp NGOÀI TRỜI - Ultra HD Siêu nét 3.0Mpx', '21', '1633537314-06-10-2021-ERLFVIDZTL.jpg', '900000', '0', '8', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">CAMERA THÔNG MINH THẾ HỆ MỚI YOOSEE 3.0Mpx- SIÊU NÉT - ỐNG KÍNH 2.6mm GÓC NHÌN RỘNG HƠN \r\nTHÔNG TIN SẢN PHẨM\r\nTên SP: Camera HIKVISION lắp ngoài trời W26S - 3.0mpx\r\n- App:YOOSEE \r\n- Chất lượng hình ảnh: 2304P x 1296P - 3.0mpx Siêu nét\r\nTích hợp cụm đèn 6Led:  4 Led chiếu sáng - 2 led hồng ngoại\r\n- Ống kính: 2.6mm\r\n- Tích hơp 6 đèn led trong đó có 4 led chiếu sáng và 2 led hồng ngoại xem đêm\r\n- Tích hợp micro: nghe đc âm thanh khi xem\r\n- Tích hợp 2 anten thu sóng wifi cực khỏe\r\n- Nguồn điện vào: 12v-2a\r\n- Cổng mạng J45: có\r\n► Xem được qua mạng Wifi, 3G dù bạn ở bất cứ nơi đâu với các thiết bị như: điện thoại, máy tính bảng, ipad, laptop, PC...\r\n?️ Bảo hành 6 tháng.\r\nBộ sản phẩm bao gồm:\r\n01 camera\r\n01 nguồn 12v -2a\r\n01 chân đế.\r\n?️ Không cần: đầu thu, đầu ghi, ổ cứng, đi dây vướng víu\r\n➡ Tất cả đều TỰ ĐỘNG &amp; MIỄN PHÍ.\r\n► Chỉ cần: Đặt vào vị trí cần giám sát, Kết nối với modem WIFI\r\n✔️ Chip HI3518e, 3.0mpx, Độ phân giải: 2304p x 1296P\r\n✔️ Chuẩn H.264, cho hình ảnh trong trẻo với chất lượng QHD\r\n✔️ Có 04 đèn Led hồng ngoại cỡ đại hỗ trợ quan sát ban đêm, tự cân bằng sáng cho chất lượng quan sát ban đêm đẹp hơn, có màu sắc sống động\r\n✔️ Ống kính tiêu chuẩn cố định: 2.6mm cho góc nhìn rộng hơn các dòng 2.0mpx 2.8mm\r\n✔️ Wi-Fi/802.11/b/g/n , Không cần tên miền DNS, chỉ cần cắm điện là chạy.\r\n==============================================\r\nSản phẩm bảo hành 6 tháng bằng tem dán trực tiếp vào sản phẩm.</span>', '1', '2021-10-06 16:21:54', '2021-10-06 16:21:54');
INSERT INTO tbl_product VALUES ('36', 'Smart Tivi Full HD Coocaa 42 inch - Android 9.0 - Model 42S3G - Miễn phí lắp đặt', '10', '1633537457-06-10-2021-MHY4USICZ1.jpg', '52900000', '0', '3', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lưu ý: Do tình hình dịch giãn cách theo Chỉ thị của Cơ quan chức năng nên việc hỗ trợ lắp đặt tạm ngưng đến khi có thông báo mới (bộ phận lắp đặt sẽ chủ động liên hệ với khách hàng để thông báo). Rất tiếc vì sự bất tiện này, mong Quý khách thông cảm.\r\n\r\n▶️ Smart TV tích hợp Netflix 5.1\r\nFull HD (1920*1080)&nbsp;\r\nHệ Điều Hành Android 9.0\r\nBluetooth 5.0\r\nCông nghệ FOCL (Tràn viền vô cực- mở rộng 97% hình ảnh hiển thị)\r\nÂm thanh Dolby với DTS TruSurround\r\nHDMI1.4 * 2; USB2.0 *2 AV-in SPIDIF out RF Wifi Digital TV\r\nDigital TV DVB T/T2, Wifi &amp; Lan\r\nYoutube app/ Open Browsers/ Live TV\r\nKhông đi kèm remote voice search.\r\n\r\n▶️ Coocaa S3G phản hồi nhanh với các thiết bị gia đình \r\n42\"FHD Android 9.0 Smart TV\r\n_ Điều khiển giọng nói bằng hệ điều hành android TV mới nhất\r\nVới hệ điều hành Android ủy quyền chính thức của google bạn có thể tải tất cả các app bạn muốn và điều khiển dễ dàng bằng giọng nói.\r\n* Tải xuống ứng dụng \"Android TV\" trên Google play store và Apple store.\r\n_ Google Ecosystem nội dung phong phú\r\nCung cấp hơn 1000 nội dung phát trực tuyến, và có hơn 5000 ứng dụng Android TV phù hợp với nhiều sự lựa chọn. \r\n_ Nâng cao chất lượng của hình ảnh \r\nThông qua công nghệ điều chỉnh đèn nền, độ tương phản và độ bão hòa của màn hình hiển thị được cải thiện đáng kể.\r\n_ 1080 FHD khôi phục tầm nhìn tuyệt vời \r\n178 độ góc nhìn rộng mang lại sự tận hưởng tuyệt vời cho bạn.\r\n_ 2 x 8W âm thanh loa kép độc lập\r\nTạo nên âm thanh sống động và thu hút hơn.\r\n_ 1G + 8G sức chứa lớn\r\nMở rộng thêm không gian lưu trữ và giúp TV chạy mượt mà và nhanh chóng hơn.\r\n_ Chromecast Built-in\r\nẢnh và video cục bộ, màn hình điện thoại di động và máy tính có thể được đồng bộ hóa trên TV và bạn có thể thưởng thức màn hình lớn cùng gia đình.\r\n_ Các nút điều khiển thao tác nhanh\r\nNgoài các nút cơ bản, còn có các nút trực tiếp cho Netflix, Youtube, Prime Video, Google Play rất tiện lợi để điều khiển.\r\n_ Đa kết nối - Đa phương tiện\r\nThuận tiện cho việc kết nối với máy tính, set-top box, máy chơi game, ổ cứng và màn hình.\r\nCác cổng: RF x 1; USB 2.0 x 2; HDMI 1.4 x 2; AV x 1;  LAN x 1; OPTICAL x 1\r\n\r\n▶️ Bảo hành chính hãng 24 tháng trên toàn quốc.\r\nHotline: 1800.1180( miễn phí cuộc gọi)\r\nThời gian: 8h-17h, từ Thứ 2- Thứ 7\r\n▶️ CÁCH ĐĂNG KÍ/ KIỂM TRA BẢO HÀNH ĐIỆN TỬ: \r\nvui lòng liên hệ CSKH coocaa qua mục chat (trò chuyện) để chúng tôi có thể hướng dẫn bạn tốt nhất.\r\n\r\n ▶️ Coocaa luôn cố gắng cung cấp sản phẩm TV chất lượng và dịch vụ tuyệt vời. Nhận xét đánh giá 5 sao sẽ có ý nghĩa cực kỳ lớn đối với chúng tôi!\r\n\r\n***Công lắp đặt:\r\n**Lưu ý: Do tình hình dịch giãn cách theo Chỉ thị của Cơ quan chức năng nên việc hỗ trợ lắp đặt tạm ngưng đến khi có thông báo mới (bộ phận lắp đặt sẽ chủ động liên hệ với khách hàng để thông báo). Rất tiếc vì sự bất tiện này, mong Quý khách thông cảm.\r\n- Miễn phí cho nội thành HCM (Quận 1, 2, 3, 4, 5, 6, 7, 8, 10, 11, Tân Bình, Tân Phú, Phú Nhuận, Bình Thạnh, Gò Vấp, Quận 9, 12, Thủ Đức, Bình Tân, Hóc Môn) và nội thành Hà Nội (Quận Ba Đình, Quận Bắc Từ Liêm, Quận Cầu Giấy, Quận Hà Đông, Quận Hai Bà Trưng, Quận Hoàn Kiếm, Quận Hoàng Mai, Quận Long Biên, Quận Nam Từ Liêm, Quận Tây Hồ, Quận Thanh Xuân, Quận Đống Đa)\r\n- Chi phí vật tư: Nhân viên sẽ thông báo phí vật tư (ống đồng, dây điện v.v...) khi khảo sát lắp đặt (Bảng kê xem tại ảnh 2). Khách hàng sẽ thanh toán trực tiếp cho nhân viên kỹ thuật sau khi việc lắp đặt hoàn thành - chi phí này sẽ không hoàn lại trong bất cứ trường hợp nào.\r\n- Quý khách hàng có thể trì hoãn việc lắp đặt tối đa là 7 ngày lịch kể từ ngày giao hàng thành công (không tính ngày Lễ). Nếu nhân viên hỗ trợ không thể liên hệ được với Khách hàng quá 3 lần, hoặc Khách hàng trì hoãn việc lắp đặt quá thời hạn trên, Dịch vụ lắp đặt sẽ được hủy bỏ.\r\n- Đơn vị vận chuyển giao hàng cho bạn KHÔNG có nghiệp vụ lắp đặt sản phẩm.\r\n- Thời gian bộ phận lắp đặt liên hệ (không bao gồm thời gian lắp đặt): trong vòng 24h kể từ khi nhận hàng (Trừ Chủ nhật/ Ngày Lễ). Trong trường hợp bạn chưa được liên hệ sau thời gian này, vui lòng gọi lên hotline của Shopee (19001221) để được tư vấn.\r\n- Tìm hiểu thêm về Dịch vụ lắp đặt:\r\nhelp.shopee.vn/vn/s/article/Làm-thế-nào-để-tôi-có-thể-sử-dụng-dịch-vụ-lắp-đặt-tại-nhà-cho-các-sản-phẩm-tivi-điện-máy-lớn-1542942683961\r\n\r\n- Quy định đổi trả: Chỉ đổi/trả sản phẩm, từ chối nhận hàng tại thời điểm nhận hàng trong trường hợp sản phẩm giao đến không còn nguyên vẹn, thiếu phụ kiện hoặc nhận được sai hàng. Khi sản phẩm đã được cắm điện sử dụng và/hoặc lắp đặt, và gặp lỗi kĩ thuật, sản phẩm sẽ được hưởng chế độ bảo hành theo đúng chính sách của nhà sản xuất.</span>', '1', '2021-10-06 16:24:17', '2021-10-06 16:24:17');
INSERT INTO tbl_product VALUES ('37', 'Dual usb Car battery charger Factory', '10', '1633537609-06-10-2021-KUB67QFHFL.jpg', '6000000', '0', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"> Smart TV tích hợp Netflix 5.1&nbsp;\r\nUltra HD (3840x2160)\r\n4k HDR-10 &amp; HLG Supported\r\nCông nghệ FOCL (Tràn viền vô cực- mở rộng 97% hình ảnh hiển thị)\r\nÂm thanh Dolby với DTS TruSurround\r\nHDMI1.4 * 3; USB2.0 *2 AV-in SPIDIF out RF Wifi Digital TV\r\nDigital TV DVB T/T2, Wifi &amp; Lan\r\nYoutube app/ Open Browsers/ Live TV\r\n\r\n▶️ Tivi Netflix 4K UHD Coocaa 50 inch Wifi - Tràn Viền - Model 50S3N - Miễn phí lắp đặt\r\n_ Smart TV, Netflix built-in luôn hợp xu hướng\r\n_ Nội dung Netflix cao cấp theo yêu cầu, với Youtube - thế giới gần bạn hơn.\r\n_ Duyệt những gì bạn muốn\r\nVới một cú click, bạn có thể truy cập các trang yêu thích bao gồm Facebook, Wikipedia, Instagram và nhiều hơn thế nữa.\r\n_ Phát theo cách bạn muốn\r\nChỉ cần click vào biểu tượng phát trên điện thoại của bạn để truyền video và hình ảnh lên TV và có được trải nghiệm xem tốt hơn.\r\n* Hãy chắc chắc rằng TV và điện thoại của bạn kết nối dưới cùng thiết bị wifi.\r\n* Hỗ trợ chia sẻ màn hình.\r\n_ Xem rõ hơn, chất lượng tuyệt vời\r\n_ Thiết kế thời thượng\r\nKết cấu đáy viền bằng chất liệu da \r\n_ Khung hình tràn viền cho cái nhìn vô cực\r\nTỉ lệ màn hình so với thân máy là 97%. TV coocaa 50S3N sử dụng công nghệ FOCL để phân giải các khung hình trên/trái và phải để tối ưu không gian giải trí của gia đình bạn, trong khi 50 inch thông thường có tỉ lệ màn hình so với thân máy là 94%.\r\n* Frameless Open-cell Lock-in Technology\r\n_ Mở rộng thế giới quan của bạn \r\nTivi Coocaa 50 inch 50S3N sở hữu độ phân giải 4K cho chất lượng hình ảnh trung thực nhất khi hiển thị trên màn hình.\r\n_ Điều chỉnh để hoàn thiện\r\nLắng nghe - Cảm nhận - Thấu hiểu - Kết nối\r\n* Powerful Stereo Speaker\r\n_ Đa kết nối - Đa phương tiện \r\nSử dụng USB để phát phim hoặc nhạc ở nhiều định dạng, kết nối HDMI để mở rộng màn hình máy tính, kết nối loa ngoài để thưởng thức âm thanh vòm.\r\nCác cổng: HDMI x 3; S/PDIF out; AV INPUT; USB x 2; LAN.\r\n▶️ Bộ sản phẩm đầy đủ:\r\n2 x Chân đế, 1 x Remote, 1 x Sách HDSD, 1 x Dây nguồn.\r\n\r\n▶️ Bảo hành chính hãng 24 tháng trên toàn quốc.\r\nHotline: 1800.1180( miễn phí cuộc gọi)\r\nThời gian: 8h-17h, từ Thứ 2- Thứ 7\r\n▶️ CÁCH ĐĂNG KÍ/ KIỂM TRA BẢO HÀNH ĐIỆN TỬ: \r\nvui lòng liên hệ CSKH coocaa qua mục chat (trò chuyện) để chúng tôi có thể hướng dẫn bạn tốt nhất.\r\n\r\n▶️ Về Coocaa:\r\nCoocaa là thương hiệu cao cấp trong ngành hàng điện tử, chuyên cung cấp các sản phẩm với đặc điểm kỹ thuật vượt trội và dịch vụ hậu mãi đi đầu. Coocaa có mặt trên 40 quốc gia, sở hữu 9 nhà máy sản xuất và 6 trung tâm nghiên cứu sản phẩm, sản xuất trực tiếp tại nhà máy ở Jakarta, Indonesia theo tiêu chuẩn Nhật Bản hơn 23 năm qua. \r\n_ Thương hiệu toàn cầu và những thành tựu quốc tế: 25 giải thưởng quốc tế toàn cầu\r\n* 5166 Applied for patents; 968 Invention patents; 1326 Innovation patents; 833 Design patents \r\n* 2018 Design Award from AWE\r\n* 2017 Red-dot Design Award\r\n ▶️ Coocaa luôn cố gắng cung cấp sản phẩm TV chất lượng và dịch vụ tuyệt vời. Nhận xét đánh giá 5 sao sẽ có ý nghĩa cực kỳ lớn đối với chúng tôi!</span>', '1', '2021-10-06 16:26:49', '2021-10-06 16:26:49');
INSERT INTO tbl_product VALUES ('38', 'TV Factory Supply Charger 5V 2A US', '10', '1633537760-06-10-2021-9G2DJCUS4K.jpg', '9000000', '500000', '1', '498', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">▶️ Smart TV tích hợp Netflix 5.1&nbsp;\r\nUltra HD (3840x2160)\r\n4k HDR-10 &amp; HLG Supported\r\nCông nghệ FOCL (Tràn viền vô cực- mở rộng 97% hình ảnh hiển thị)\r\nÂm thanh Dolby với DTS TruSurround\r\nHDMI1.4 * 3; USB2.0 *2 AV-in SPIDIF out RF Wifi Digital TV\r\nDigital TV DVB T/T2, Wifi &amp; Lan\r\nYoutube app/ Open Browsers/ Live TV\r\n\r\n▶️ Tivi Netflix 4K UHD Coocaa 50 inch Wifi - Tràn Viền - Model 50S3N - Miễn phí lắp đặt\r\n_ Smart TV, Netflix built-in luôn hợp xu hướng\r\n_ Nội dung Netflix cao cấp theo yêu cầu, với Youtube - thế giới gần bạn hơn.\r\n_ Duyệt những gì bạn muốn\r\nVới một cú click, bạn có thể truy cập các trang yêu thích bao gồm Facebook, Wikipedia, Instagram và nhiều hơn thế nữa.\r\n_ Phát theo cách bạn muốn\r\nChỉ cần click vào biểu tượng phát trên điện thoại của bạn để truyền video và hình ảnh lên TV và có được trải nghiệm xem tốt hơn.\r\n* Hãy chắc chắc rằng TV và điện thoại của bạn kết nối dưới cùng thiết bị wifi.\r\n* Hỗ trợ chia sẻ màn hình.\r\n_ Xem rõ hơn, chất lượng tuyệt vời\r\n_ Thiết kế thời thượng\r\nKết cấu đáy viền bằng chất liệu da \r\n_ Khung hình tràn viền cho cái nhìn vô cực\r\nTỉ lệ màn hình so với thân máy là 97%. TV coocaa 50S3N sử dụng công nghệ FOCL để phân giải các khung hình trên/trái và phải để tối ưu không gian giải trí của gia đình bạn, trong khi 50 inch thông thường có tỉ lệ màn hình so với thân máy là 94%.\r\n* Frameless Open-cell Lock-in Technology\r\n_ Mở rộng thế giới quan của bạn \r\nTivi Coocaa 50 inch 50S3N sở hữu độ phân giải 4K cho chất lượng hình ảnh trung thực nhất khi hiển thị trên màn hình.\r\n_ Điều chỉnh để hoàn thiện\r\nLắng nghe - Cảm nhận - Thấu hiểu - Kết nối\r\n* Powerful Stereo Speaker\r\n_ Đa kết nối - Đa phương tiện \r\nSử dụng USB để phát phim hoặc nhạc ở nhiều định dạng, kết nối HDMI để mở rộng màn hình máy tính, kết nối loa ngoài để thưởng thức âm thanh vòm.\r\nCác cổng: HDMI x 3; S/PDIF out; AV INPUT; USB x 2; LAN.\r\n▶️ Bộ sản phẩm đầy đủ:\r\n2 x Chân đế, 1 x Remote, 1 x Sách HDSD, 1 x Dây nguồn.\r\n\r\n▶️ Bảo hành chính hãng 24 tháng trên toàn quốc.\r\nHotline: 1800.1180( miễn phí cuộc gọi)\r\nThời gian: 8h-17h, từ Thứ 2- Thứ 7\r\n▶️ CÁCH ĐĂNG KÍ/ KIỂM TRA BẢO HÀNH ĐIỆN TỬ: \r\nvui lòng liên hệ CSKH coocaa qua mục chat (trò chuyện) để chúng tôi có thể hướng dẫn bạn tốt nhất.\r\n\r\n▶️ Về Coocaa:\r\nCoocaa là thương hiệu cao cấp trong ngành hàng điện tử, chuyên cung cấp các sản phẩm với đặc điểm kỹ thuật vượt trội và dịch vụ hậu mãi đi đầu. Coocaa có mặt trên 40 quốc gia, sở hữu 9 nhà máy sản xuất và 6 trung tâm nghiên cứu sản phẩm, sản xuất trực tiếp tại nhà máy ở Jakarta, Indonesia theo tiêu chuẩn Nhật Bản hơn 23 năm qua. \r\n_ Thương hiệu toàn cầu và những thành tựu quốc tế: 25 giải thưởng quốc tế toàn cầu\r\n* 5166 Applied for patents; 968 Invention patents; 1326 Innovation patents; 833 Design patents \r\n* 2018 Design Award from AWE\r\n* 2017 Red-dot Design Award</span>', '1', '2021-10-06 16:29:20', '2021-10-06 16:29:20');
INSERT INTO tbl_product VALUES ('39', 'Smart TV Coocaa - Model 50S6G PRO Android 10 - UHD 50 Inch - Miễn phí lắp đặt', '10', '1633537848-06-10-2021-ZOOTTMQIFK.jpg', '7999000', '0', '1', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Smart TV Coocaa - Model 50S6G PRO Android 10.0 -4k UHD 50 Inch - Miễn phí lắp đặt\r\n(Ưu đãi tháng 8: 2 năm cliptv membership ,18 tháng fpt family membership)\r\n\r\n▶️ Bluetooth 5.0\r\nTrợ lý ảo Google\r\nGiải mã Dolby &amp; DTS\r\nChip xử lý Chameleon Extreme 2.0\r\nCPU A53*4-1.5GHZ , GPU MALI-G52\r\nHDMI 2.0 x3 , USB 2.0 x3\r\nChức năng phát nhạc khi màn hình tắt\r\nTV casting Chromecast\r\nYoutube apps , Netflix , Prime video\r\nRemote voice search\r\n\r\n▶️ Coocaa S6G Pro \r\n_ Flash cực đỉnh\r\n2+32G Android 10.0 TV thông minh và màn hình vô cực\r\n_ Sức mạnh mạnh mẽ từ bên trong\r\nVới chip mới nhất và bộ nhớ lớn 2+32GB, TV hoạt động và khả năng xử lý chất lượng hình ảnh được cải thiện đáng kể và hiệu suất tổng thể được cải thiện 38,3%.\r\n_ Nội dung phong phú, trải nghiệm nghe nhìn hoàn hảo\r\nS6G Pro được tích hợp sẵn youtube x Netflix x Prime video,.. hàng nghìn App và nội dung có thể cài đặt theo ý muốn.\r\n_ Được trang bị hệ thống Android 10.0 mới nhất, phản hồi nhanh hơn, nhiều chức năng mạnh mẽ hơn với nội dung phong phú.\r\nGiao diện thân thiện, bàn phím đa ngôn ngữ, Trình duyệt bên thứ ba, Đa phương tiện định dạng tương thích, Giám sát lưu lượng mạng\r\n_ Điều khiển giọng nói\r\nChỉ cần nhất nút thoại, sau đó có thể nói mọi thứ bạn muốn xem, điều này rất thuận tiện cho bạn.\r\n_ AI thông minh: các ứng dụng và phim phổ biến nhất sẽ được đề xuất cho bạn theo quốc gia hoặc khu vực nơi bạn sinh sống.\r\n_ TV casting: Truyền ảnh, video từ điện thoại di động của bạn lên màn hình TV thông qua Chromecast và  CastPlay để có thể chia sẻ giải trí với gia đình của bạn tại nhà.\r\n_ Màn hình vô cực đem lại trải nghiệm thị giác vô biên\r\n_ pure HDR tầm nhìn đầy màu sắc\r\ncông nghệ giải mã pure HDR 10, mang đến cho bạn tầm nhìn rực rỡ tươi mới.\r\n_ Giải mã Dolby&amp;DTS - Hiệu ứng âm thanh rạp hát\r\n_ Có thể kết nối các thiết bị bên ngoài khác để mở rộng các chức năng:\r\nCác cổng: HDMI 2.0 x 3 ; S/PDIF x1 ; AV IN x 1 ; USB 2.0 x 3 ; LAN x 1\r\n\r\n▶️ Bộ sản phẩm đầy đủ:\r\n2 x Chân đế, 1 x Remote, 1 x Sách HDSD, 1 x Dây nguồn.</span>', '1', '2021-10-06 16:30:48', '2021-10-06 16:30:48');
INSERT INTO tbl_product VALUES ('40', 'Smart Tivi Coocaa Android 10.0 4K UHD 65inch - Model 65S6G PRO', '10', '1633537933-06-10-2021-SYOING7UDE.jpg', '4000000', '3500000', '1', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">▶️ Bluetooth 5.0\r\nTrợ lý ảo Google\r\nGiải mã Dolby &amp; DTS\r\nChip xử lý Chameleon Extreme 2.0\r\nCPU A53*4-1.5GHZ , GPU MALI-G52\r\nHDMI 2.0 x3 , USB 2.0 x3\r\nChức năng phát nhạc khi màn hình tắt\r\nTV casting Chromecast\r\nYoutube apps , Netflix , Prime video\r\nRemote voice search\r\n\r\n▶️ Coocaa S6G Pro \r\n_ Flash cực đỉnh\r\n2+32G Android 10.0 TV thông minh và màn hình vô cực\r\n_ Sức mạnh mạnh mẽ từ bên trong\r\nVới chip mới nhất và bộ nhớ lớn 2+32GB, TV hoạt động và khả năng xử lý chất lượng hình ảnh được cải thiện đáng kể và hiệu suất tổng thể được cải thiện 38,3%.\r\n_ Nội dung phong phú, trải nghiệm nghe nhìn hoàn hảo\r\nS6G Pro được tích hợp sẵn youtube x Netflix x Prime video,.. hàng nghìn App và nội dung có thể cài đặt theo ý muốn.\r\n_ Được trang bị hệ thống Android 10.0 mới nhất, phản hồi nhanh hơn, nhiều chức năng mạnh mẽ hơn với nội dung phong phú.\r\nGiao diện thân thiện, bàn phím đa ngôn ngữ, Trình duyệt bên thứ ba, Đa phương tiện định dạng tương thích, Giám sát lưu lượng mạng\r\n_ Điều khiển giọng nói\r\nChỉ cần nhất nút thoại, sau đó có thể nói mọi thứ bạn muốn xem, điều này rất thuận tiện cho bạn.\r\n_ AI thông minh: các ứng dụng và phim phổ biến nhất sẽ được đề xuất cho bạn theo quốc gia hoặc khu vực nơi bạn sinh sống.\r\n_ TV casting: Truyền ảnh, video từ điện thoại di động của bạn lên màn hình TV thông qua Chromecast và  CastPlay để có thể chia sẻ giải trí với gia đình của bạn tại nhà.\r\n_ Màn hình vô cực đem lại trải nghiệm thị giác vô biên\r\n_ pure HDR tầm nhìn đầy màu sắc\r\ncông nghệ giải mã pure HDR 10, mang đến cho bạn tầm nhìn rực rỡ tươi mới.\r\n_ Giải mã Dolby&amp;DTS - Hiệu ứng âm thanh rạp hát\r\n_ Có thể kết nối các thiết bị bên ngoài khác để mở rộng các chức năng:\r\nCác cổng: HDMI 2.0 x 3 ; S/PDIF x1 ; AV IN x 1 ; USB 2.0 x 3 ; LAN x 1\r\n\r\n▶️ Bộ sản phẩm đầy đủ:\r\n2 x Chân đế, 1 x Remote, 1 x Sách HDSD, 1 x Dây nguồn.</span>', '1', '2021-10-06 16:32:13', '2021-10-07 03:04:19');
INSERT INTO tbl_product VALUES ('41', 'Smart NanoCell Tivi LG 43 inch 4K 43NANO77TPA - Model 2021', '10', '1633538060-06-10-2021-CCYASLXSPT.jpg', '1278900', '1000000', '1', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">8 triệu điểm ảnh cùng thể hiện trong 1 bức tranh. Màu sắc Pure Colors truyệt đẹp trên màn hình Real 4K của TV NanoCell. Với khoảng 8 triệu điểm ảnh, TV 4K đích thực truyền tải hình ảnh sắc nét hơn và chi tiết hơn rõ rệt so với TV HD thông thường. \r\n\r\nTV LG NanoCell sử dụng các hạt nano, công nghệ Nano đặc biệt của riêng chúng tôi, để lọc và tinh chỉnh màu sắc, loại bỏ tín hiệu gây nhiễu khỏi các bước sóng RGB. Nghĩa là, chỉ những màu sắc tinh khiết, chính xác mới được hiển thị trên màn hình. \r\n\r\nThiết kế tinh tế, thêm gu thẩm mỹ\r\nTác phẩm nghệ thuật đẹp như tranh vẽ không chỉ dành để treo trên các bức tường nữa. Chân đỡ Gallery cho phép bạn tự do đặt TV và biến ngôi nhà của bạn thành một phòng trưng bày hiện đại.\r\n\r\nNano Cinema - Chất lượng ngang tầm với màn chiếu lớn\r\n\r\nPure Colors và một loạt các công nghệ màn hình mới nhất mang cả rạp phim về nhà bạn với LG NanoCell TV. Với công nghệ HDR nâng cao của chúng tôi, và các công nghệ được nâng cấp của Dolby, cùng một chế độ điện ảnh mới vừa được hãng công bố đã mang đến trải nghiệm điện ảnh thực sự.\r\n\r\nNơi hội tụ những gì bạn yêu thích: Truy cập Ứng dụng Apple TV, Disney+, Netflix và LG Channels\r\n\r\nHiện thực hóa góc nhìn của đạo diễn. FILMMAKER MODE™ tắt tính năng làm mịn chuyển động trong khi vẫn giữ nguyên tỷ lệ khung hình, màu sắc và tốc độ khung hình ban đầu\r\n\r\nCông nghệ dải màu động của riêng LG, HDR 10 Pro, điều chỉnh độ sáng để tăng cường màu sắc, thể hiện mọi chi tiết nhỏ nhất, và mang lại độ chi tiết rõ như thật cho mọi hình ảnh - công nghệ này cũng tăng cường nội dung HDR thông thường\r\n\r\nNano Gaming: Trang hoàng thế giới Game với TV\r\n\r\nTừ những hang động tối tăm nhất đến những thế giới mới tươi sáng nhất, LG NanoCell TV trang hoàng trò chơi của bạn với màu sắc sống động. Công nghệ chơi game đám mây và tự động điều chỉnh hình ảnh chất lượng cao mang đến trải nghiệm chơi game thực sự thú vị.\r\n\r\nÂm thanh hoành tráng như tại sân vận động: Dễ dàng kết nối loa Bluetooth để có trải nghiệm âm thanh vòm không dây thực sự\r\n\r\nThông số kỹ thuật\r\nTHÔNG SỐ TẤM NỀN\r\nLoại màn hình hiển thị: 4K NanoCell\r\nKích thước: 43\r\nĐộ phân giải: 3840 x 2160\r\nNanoCell Color: Có\r\nMàu sắc / Wide Color Gamut: Nano Color\r\nMotion / Refresh Rate: Refresh Rate 60Hz\r\nCÔNG NGHỆ ÂM THANH\r\nLoa (Âm thanh đầu ra): 20W\r\nHệ thống loa: 2.0ch\r\nNGUỒN &amp; TIÊU THỤ ĐIỆN\r\nPower Supply: AC 100~240V 50-60Hz\r\nTiêu thụ năng lượng ờ chế độ chờ: Dưới 0.5W\r\nChế độ tiết kiệm năng lượng: Có\r\nCảm biến ánh sáng xanh lá cây: Có\r\nTRỌNG LƯỢNG &amp; KÍCH THƯỚC\r\nKích thước (Rộng x Cao x Sâu) mm: 967 x 564 x 57.7\r\nKích thước có chân đế (Rộng x Cao x Sâu) mm: 967 x 622 x 216\r\nTrọng lượng (kg): 9.2\r\nTrọng lượng có chân đế (kg): 9.3\r\n\r\nThông tin bảo hành: \r\nThời hạn bảo hành: 24 tháng\r\nTrung Tâm Thông Tin Khách Hàng / Customer Information Center\r\nQuý khách vui lòng truy cập vào link https://www.lg.com/vn/tro-giup/bao-hanh Hotline: 18001503 (Miễn phí cước gọi/Toll free)</span>', '1', '2021-10-06 16:34:20', '2021-10-06 16:34:20');
INSERT INTO tbl_product VALUES ('42', 'Điện thoại thông minh Xiaomi Mi 9T FULL BOX đủ Phụ Kiện 128gb Bảo Hành 1 Năm', '18', '1633594156-07-10-2021-QHNLWP69CB.jpg', '4165000', '1874250', '4', '100', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">ông số kỹ thuật\r\nMàn hình:	AMOLED, 6.39\", Full HD+\r\nHệ điều hành:	Android 9.0 (Pie)\r\nCamera sau:	Chính 48 MP &amp; Phụ 13 MP, 8 MP\r\nCamera trước:	20 MP\r\nCPU:	Snapdragon 730 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ SIM:  2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:	4000 mAh, có sạc nhan</span>', '1', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_product VALUES ('43', 'Điện Thoại Oppo Reno 5 - Hàng chính hãng', '18', '1633594345-07-10-2021-CHWENHXK7U.jpg', '8690000', '7359000', '3', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">quynhvienthong - oppo reno5\r\nThông số kỹ thuật\r\n\r\nMàn hình:AMOLED; 90Hz, Gorilla Glass 3+; 1080 x 2400 (FHD+); 16 triệu màu; 6.43 inch, màn hình đục lỗ\r\nCPU:Qualcomm Snapdragon 720G, tối đa 2.3GHz; Adreno 618\r\nRAM:	8 GB\r\nCamera sau:	64 MP + 8 MP + 2 MP + 2 MP, 4 camera; F/1.7 + F/2.2 + F/2.4 + F/2.4; Đèn flash sau\r\nCamera trước:	44 MP + Cảm biến thông minh AI; F/2.4\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	Hỗ trợ thẻ nhớ tối đa 256GB\r\nHỗ trợ đa sim:	Dual nano-SIM + 1 thẻ nhớ\r\nHệ điều hành:	ColorOS 11.1, nền tảng Android 11\r\nWifi:	2.4G/5G, 802.11 a/b/g/n/ac; Bluetooth 5.1; GPS\r\nPin:	4310mAh (Typ); Sạc siêu nhanh 50W\r\n\r\n*quynhvien cam kết sp là chính hãng ,nguyên seal mới 100%.\r\n*Sp được bảo hành ,đổi trả miễn phí tại tất cả các trung tâm bảo hành của hãng trên toàn quốc.\r\n*chi tiết xin liên hệ ĐT: 0342232288,0911142789,Zalo :0986164099\r\n#điện_thoại_chính _hãng#điện_thoại_giá_rẻ#điện_thoại_chính_hãng#di_động_thông_minh#quynhvienthong\r\n#realmi5i#c3i#realmic3#oppo#realmi6i#6pro#c11 #c15#pin600mAh #oppoa52#oppoa31#samsunga11#a21s#a12#samsunga12#oppo#reno4#reno5#a93#a92#a53</span>', '1', '2021-10-07 08:12:25', '2021-10-07 08:12:25');
INSERT INTO tbl_product VALUES ('44', 'Điện thoại Samsung Galaxy M51 (8GB/128GB) - Hàng chính hãng', '18', '1633594468-07-10-2021-YOVFQHVJJR.jpg', '8400000', '7690000', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Thông số kỹ thuật\r\nMàn hình:	Super AMOLED Plus, 6.7\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 64 MP &amp; Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước:	32 MP\r\nCPU:	Snapdragon 730 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:	2 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	7000 mAh, có sạc nhanh\r\n*quynhvienthong cam kết sp là chính hãng ,nguyên seal mới 100%.\r\n*Sp được bảo hành ,đổi trả miễn phí tại tất cả các trung tâm bảo hành của hãng trên toàn quốc.\r\n*chi tiết xin liên hệ ĐT: 0342232288,0911142789,Zalo :0986164099\r\n#điện_thoại_chính _hãng#điện_thoại_giá_rẻ#điện_thoại_chính_hãng#di_động_thông_minh#quynhvienthong \r\n#realmi5i#c3i#realmic3#oppo#realmi6i#6pro#c11 #c15#pin600mAh #oppoa52#oppoa31#samsunga11#a21s#a12#samsunga12#m51#galaxym51</span>', '1', '2021-10-07 08:14:28', '2021-10-07 08:14:28');
INSERT INTO tbl_product VALUES ('45', 'Điện thoại Samsung Galaxy M32 8GB/128GB - Pin 5.000 mAH - 25W - Freeship |', '18', '1633594727-07-10-2021-UCJXTZROQ7.jpg', '5290000', '0', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Điện thoại Samsung Galaxy M32 8GB/128GB  - Pin 5.000 mAH - Sạc nhanh 25W - Miễn phí vận chuyển | Hàng Chính Hãng - Nguyên Seal - Nguyên Niêm Phong - Đã Kích Hoạt Bảo Hành Điện Tử\r\n\r\n[NGUYÊN SEAL] \r\nĐiện thoại Samsung Galaxy M32 8GB/128GB\r\nHÀNG CHÍNH HÃNG - BH 18 THÁNG CHÍNH HÃNG | TTC MOBILE HCM SHOP - ĐIỆN THOẠI CHÍNH HÃNG\r\nPHÂN PHỐI SỈ LẺ ĐIỆN THOẠI XIAOMI - VSMART - ASUS - SAMSUNG - VIVO - APPLE\r\n\r\nLƯU Ý: \r\n- SẢN PHẨM NHIỀU CẤU HÌNH, LƯU Ý CHỌN ĐÚNG PHÂN LOẠI\r\n- HÀNG NGUYÊN SEAL + GIÁ TRỊ CAO, VUI LÒNG QUAY VIDEO KHI MỞ HÀNG ĐỂ ĐƯỢC HỖ TRỢ KHIẾU NẠI NẾU CÓ SỰ CỐ PHÁT SINH THEO QUY ĐỊNH.\r\n- TRƯỜNG HỢP KHÁCH HÀNG KHÔNG QUAY VIDEO, SHOP SẼ KHÔNG HỖ TRỢ KHIẾU NẠI.\r\n- KHÔNG ĐỒNG KIỂM \r\n- KHÔNG ĐỔI TRẢ KHI ĐÃ BÓC SEAL SỬ DỤNG.\r\n\r\nCấu hình Điện thoại Samsung Galaxy M32 8GB/128GB\r\n\r\nMàn hình:AMOLED 6.4 \"Full HD+, 90Hz\r\nHệ điều hành:Android 11\r\nCamera sau: Chính 64 MP &amp; Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước: 20 MP\r\nChip: Helio G80\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 2 Nano SIM Hỗ trợ 4G\r\nPin, Sạc: 5000 mAh - 25 W\r\n\r\nTTC MOBILE HCM SHOP - ĐIỆN THOẠI CHÍNH HÃNG\r\n PHÂN PHỐI SỈ LẺ ĐIỆN THOẠI XIAOMI - VSMART - ASUS - SAMSUNG - VIVO - APPLE\r\n----------------------------------------------------------------\r\nLƯU Ý: SẢN PHẨM CÓ NHIỀU CẤU HÌNH CÓ MỨC GIÁ KHÁC NHAU, QUÝ KHÁCH VUI LÒNG CHÚ Ý LỰA CHỌN CHÍNH XÁC.\r\nẢNH BÌA CHỈ MANG TÍNH MINH HOẠ CHUNG CHO SẢN PHẨM NHIỀU CẤU HÌNH.\r\n\r\nCHÍNH SÁCH BẢO HÀNH - ĐỔI TRẢ\r\nLƯU Ý KHI MUA HÀNG: Cảm ơn quý khách đã quan tâm đến sản phẩm bên shop, quý khách vui lòng dành ít thời gian đọc kĩ chính sách bảo hành đổi trả:\r\nÁp dụng sản phẩm Mobile/Tablet/Laptop\r\n✔️ Sản phẩm lỗi kĩ thuật được xác nhận bởi trung tâm bảo hành ủy quyền chính hãng (bằng văn bản); khách hàng có thể gửi lại shop để xác nhận lỗi hoặc tới trung tâm bảo hành ủy quyền gần nhất để thẩm định lỗi.\r\n✔️ Sản phẩm đổi-trả phải còn nguyên hiện trạng máy không trầy xước, không bể vỡ, vô nước, gãy chân sim, khung thẻ nhớ… (tất cả các tác động ngoại lực từ phía khách hàng đều TỪ CHỐI BẢO HÀNH)\r\n✔️ Sản phẩm đổi trả phải còn nguyên hộp trùng imei, phụ kiện kèm theo máy không trầy xước, cháy nổ, đứt dây (nếu trầy xước shop không đổi phụ kiện mới)\r\n✔️Sản phẩm vẫn nhận chính sách bảo hành theo quy định của nhà sản xuất kể từ ngày mua (khách chịu phí vận chuyển tới shop bảo hành hộ hoặc tự đến trung tâm bảo hành gần nhất).</span>', '1', '2021-10-07 08:18:47', '2021-10-07 08:18:47');
INSERT INTO tbl_product VALUES ('46', 'Điện thoại Samsung Galaxy M32 Ram 8G Bộ nhớ 128 G - Màu ĐEN - Pin 5.000 mAH', '18', '1633594841-07-10-2021-GSLKJXFXNJ.jpg', '4890000', '0', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Cấu hình Điện thoại Samsung Galaxy M32\r\n\r\nMàn hình: Super AMOLED6.4\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP &amp; Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước: 20 MP\r\nChip: MediaTek Helio G80\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 2 Nano SIM\r\nPin, Sạc: 6000 mAh, sạc nhanh 25 W\r\nMàu sắc: Đen\r\n* Bảo hành chính hãng: bảo hành điện tử 12 tháng</span>', '1', '2021-10-07 08:20:41', '2021-10-07 08:20:41');
INSERT INTO tbl_product VALUES ('47', 'máy tính bảng Pad 2 Chính Hãng tablet 16G/32G Wifi Quốc tế Máy tính bảng cũ giá rẻ Bảo hành 12 tháng', '18', '1633594988-07-10-2021-ST5GDED1J1.jpg', '2000000', '1560000', '4', '201', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Kính Chào Quý Khách Hàng Shopee  \r\nTình trạng:  Màu 95% - 98%\r\nCấu hình   Pad 2 Wifi 16GB\r\n* 		Màn hìnhLED, 9.7\"\r\n* 		Hệ điều hànhiOS 9\r\n* 		CPU A5, 1 GHz\r\n* 		RAM512 MB\r\n* 		Bộ nhớ trong16 GB\r\n* 		Camera sau 0.5 MP\r\n* 		Camera trước0.3 MP\r\n* 		Kết nối mạng wifi\r\n*               Pin : 6800\r\nTất cả các máy đều ko 1 lỗi lầm gì   \r\n***Cam kết nguyên zin, chưa sửa chữa,  \r\nshop không bán hàng dựng, kém chất lượng.  \r\nmáy đã được test kỹ trước khi bán ra nên khách hàng hãy yên tâm về sp.  \r\n\r\nChức năng: ổn định, mượt mà, không 1 lỗi nhỏ,   \r\n(tất cả chức năng đều tốt)  \r\nGồm: máy+cáp+sạc+hộp đựng :  \r\n*** bao đổi trả nếu máy lỗi:  \r\n_lỗi 1 đổi 1 trong 7 ngày đầu sử dụng   \r\n_bảo hành 12 tháng  \r\n CHân Thành Cảm Ơn   </span>', '1', '2021-10-07 08:23:08', '2021-10-07 08:23:08');
INSERT INTO tbl_product VALUES ('48', 'máy tính bảng Pad mini 1 Chính Hãng tablet 16G/32G Wifi Quốc tế Máy tính bảng cũ giá rẻ Bảo hành 12 tháng', '18', '1633595192-07-10-2021-HFJZWFX07C.jpg', '3000000', '1750000', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"> Kính Chào Quý Khách Hàng Shopee  \r\nTình trạng:  Màu 95% - 98%\r\nCấu hình  Pad mini1 Wifi 16GB\r\n* 		Màn hìnhLED, 7.9\"\r\n* 		Hệ điều hànhiOS 9.3.5\r\n* 		CPU A5, 1 GHz\r\n* 		RAM512 MB\r\n* 		Bộ nhớ trong16 GB\r\n* 		Camera sau5.0 MP\r\n* 		Camera trước0.3 MP\r\n* 		Kết nối mạng wifi\r\n*               Pin : 6440\r\nTất cả các máy đều ko 1 lỗi lầm gì   \r\n***Cam kết nguyên zin, chưa sửa chữa,  \r\nshop không bán hàng dựng, kém chất lượng.  \r\nmáy đã được test kỹ trước khi bán ra nên khách hàng hãy yên tâm về sp.  \r\n\r\nChức năng: ổn định, mượt mà, không 1 lỗi nhỏ,   \r\n(tất cả chức năng đều tốt)  \r\nGồm: máy+cáp+sạc+hộp đựng :  \r\n*** bao đổi trả nếu máy lỗi:  \r\n_lỗi 1 đổi 1 trong 7 ngày đầu sử dụng   \r\n_bảo hành 12 tháng  \r\n CHân Thành Cảm Ơn </span>', '1', '2021-10-07 08:26:32', '2021-10-07 08:26:32');
INSERT INTO tbl_product VALUES ('49', 'Máy Tính Bảng NABI XD NV10B 10.1 inch IPS', '18', '1633595270-07-10-2021-L6QRCBD9M2.jpg', '1200000', '0', '2', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">NABI XD là mẫu máy tính bảng chạy Android 4.2 có mức giá hấp dẫn được FUHU thiết kế hướng đến người dùng trẻ. Do sở hữu màn hình 10.1 inch (1366 x 768 pixel) nên Nabi XD thể hiện khả năng hiển thị và chạy phim HD mượt mà.\r\nChi tiết thông số kỹ thuật :\r\nMáy tính bảng FUHU Nabi XD\r\nMàn hình Màn hình IPS 10.1 inch\r\nĐộ phân giải: 1366 x 768\r\nCảm ứng Điện dung đa điểm 10 điểm cùng lúc\r\nKích thước: 11 x 0.4 x 7.3 inches\r\nHệ điều hành: Android 4.1.2\r\nBộ nhớ trong: 16GB\r\nRAM: 1GB\r\nChip: Chip Tegra 3 4 nhân x 1.3 GHZ\r\nCamera: Camera trước 2.0 Mpx, Sau 5.0 Mpx\r\nOut tivi: Cổng HDMI\r\nĐồ họa: GPU\r\nKết nối internet: Wifi b/g/n\r\nPin: 8.000mAH\r\nHỗ trợ kết nối máy tính: Có\r\nHỗ trợ OTG: Có\r\nGPS: Có\r\nBluetooth: Có\r\nHỗ trợ xem video: 3GP, MPEG1/2/4, FLV, MJPG, H263, H264 etc. formats HD video playback, support H.263, MPEG-1/2 MP/HP, MPEG 4-ASP, VC-1, Real Video 8/9/10, H.264(AVC) HP viedo decoding\r\nHỗ trợ Audio: MP3, WMA, MP2, OGG, AAC, M4A, MA4, FLAC, APE etc. formats với phụ đề và lời bài hát\r\nAudio Ouput: Có\r\nỨng dụng văn phòng: E-book, Office, Microsoft Word, Excel, PPT và PDF\r\nỨng dụng chat: MSN, Yahoo, SKYPE, fring.v.v.\r\nMạng xã hội: Facebook, ZingMe,…\r\nEbook TXT, CHM, UMD, PDB, PDF etc. formats\r\nHỗ trợ FLASH: Có\r\nGhi âm: Có</span>', '1', '2021-10-07 08:27:50', '2021-10-07 08:27:50');
INSERT INTO tbl_product VALUES ('50', 'Máy nghe nhạc mp3 thời trang-có loa-tặng tai nghe và dây sạc', '22', '1633596106-07-10-2021-0U9YDZYIPV.jpg', '200000', '179000', '6', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">MÁY NGHE NHẠC MP3 THỜI TRANG-CÓ LOA-TẶNG TAI NGHE VÀ DÂY SẠC\r\n\r\n* Sản phẩm cơ bản chưa bao gồm thẻ nhớ và không có bộ nhớ trong. Sẽ có các combo với nhiều lựa chọn mua thêm.\r\n* Đóng gói theo phân loại:\r\n       + Đen/Xanh/Trắng sẽ bao gồm: 1 máy theo màu bạn chọn + 1 tai nghe+ 1 dây sạc+ 1 hướng dẫn sử dụng.\r\n       + Đen/Xanh/Trắng + thẻ 8GB sẽ bao gồm: 1 máy theo màu bạn chọn + 1 thẻ nhớ 8GB+ 1 tai nghe+ 1 dây sạc+ 1 hướng dẫn sử dụng.\r\n       + Đen/Xanh/Trắng + 8GB+ sạc+ đầu đọc sẽ bao gồm: 1 máy theo màu bạn chọn + 1 thẻ nhớ 8GB+ 1 tai nghe+ 1 dây sạc+ 1 củ sạc+ 1 đầu đọc thẻ+ 1 hướng dẫn sử dụng (đây là combo đầy đủ không cần mua thêm phụ kiện nào khác)\r\n* Phân loại thẻ 8GB có thể sẽ có sẵn hơn 100 bài hát tiếng Trung, kiểm tra hoạt động của MP3. Hộp, tai nghe thay đổi theo từng đợt hàng.\r\n* Khe cắm thẻ nhớ microSD, tùy chỉnh dung lượng lên đến 16GB.\r\n* Thiết kế thời trang, hài hòa, màu sắc trẻ trung, cổng tai nghe 3.5mm, loa ngoài 12mm.\r\n* Dạng máy pin sạc, hết pin sạc đầy có thể tiếp tục sử dụng.\r\n* Kích thước: 8.5x2.5x1cm, trọng lượng 50gram.\r\n* Thời gian sử dụng: 2-3h.\r\n* Thời gian sạc: 1h30p . Lưu ý thời gian sạc đảm bảo đúng qui định tránh trai pin, phồng pin, giảm tuổi thọ pin.\r\n* Dòng điện sạc 5V-1A. Tuyệt đối không dùng sạc trên 1A để tránh quá tải ảnh hưởng đến pin của máy. Sử dụng tương tự với cục sạc dự phòng.\r\n* Cách sử dụng: lắp thẻ nhớ có sẵn bài hát, cắm tai nghe, gạt công tắc nguồn để sử dụng.\r\n-----</span>', '1', '2021-10-07 08:41:46', '2021-10-07 08:41:46');
INSERT INTO tbl_product VALUES ('51', 'Loa Tắm Ngôn Ngữ Cho Bé, Học Tiếng Anh, Tiếng Ồn Trắng, Máy Nghe Nhạc Craven CR 853 3 Pin', '22', '1633596401-07-10-2021-VJHGDSRRTY.jpg', '239000', '0', '6', '90', '100', '0', '<div><br></div><div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">\r\nTHÔNG TIN SẢN PHẨM:\r\n- Model: Loa 853-3 PIN\r\n- AnTen: Không\r\n- Jack cắm tai nghe: Không\r\n- Nghe nhạc bằng USB: Có hỗ trợ.\r\n- Nghe nhạc bằng thẻ nhớ: Có hỗ trợ tới 2 khe cắm thẻ nhớ\r\n- Đèn Pin: Không.\r\n- Thời gian nghe: Nghe liên tục cả ngày cũng không hết PIN.\r\n- Thời gian sạc: 5-6 tiếng.\r\n- Báo hiệu đầy Pin: đèn không chớp tắt.\r\n- Bluetooth: Không.\r\n- Nghe đài FM: Có.\r\n- Chế độ lặp lại bài hát: Có.\r\n- Chuyển đổi giữa 2 khe thẻ nhớ,            \r\n- Chọn bài, lặp bài, phát lần lượt,           \r\n- Chuyển đổi Foler, Lặp Foler\r\n- Kích thước: 12 x 5 x 5 Cm\r\n- Trọng lượng: 300g\r\n\r\nTHÀNH PHẦN COMBO: \r\n1 bộ loa 853 \r\n1 thẻ nhớ tắm ngôn nhữ \r\n1 menu tắm ngôn ngữ \r\n\r\n\r\n✅ CAM KẾT VỀ CHẤT LƯỢNG VÀ DỊCH VỤ BÁN HÀNG: \r\n1. Hàng thật như hình. \r\n2. Kiểm tra hàng trước khi thanh toán. \r\n3. Cung cấp các sản phẩm chất lượng \r\n✅ QUY ĐỊNH ĐỔI TRẢ: 1 ĐỔI 1 trong vòng 7 ngày nếu lỗi do nhà sản xuất \r\n1. Sản phẩm bị lỗi do nhà sản xuất \r\n2. Hư hỏng trong quá trình vận chuyển \r\n3. Khách hàng đưa ra lý do hợp lý về sự không hài lòng đối với sản phẩm và được sự đồng ý từ Shop </span><br></div>', '1', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_product VALUES ('52', 'Máy nghe nhạc mp3 Bluetooth H90 bộ nhớ 8GB vỏ kim loại có loa ngoài, FM, ghi âm', '22', '1633596495-07-10-2021-GXLX7FWFB9.jpg', '525000', '429000', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Máy nghe nhạc mp3 Bluetooth H90 bộ nhớ 8GB vỏ kim loại có loa ngoài, FM, ghi âm\r\n\r\n* Sản phẩm có bộ nhớ trong 8GB khả năng lưu trữ hơn 1500 bài hát, khe cắm thẻ nhớ hỗ trợ dung lượng tối đa 128GB.\r\n* Đóng gói: 1 máy nghe nhạc+ 1 tai nghe+ 1 dây sạc+ 1 củ sạc+ 1 hướng dẫn sử dụng.\r\n* Chất liệu hợp kim nhôm nhẹ, bền, cứng, chịu va đập cùng thiết kế tinh tế, năng động, giao diện thông minh, hiện đại.\r\n* Thiết kế 7 nút cảm ứng, 3 nút vật lý cạnh sườn bật, ghi âm và khóa màn hình.\r\n* Cổng kết nối tai nghe 3.5mm, màn hình 1.8 inch, có loa ngoài.\r\n* Chức năng FM, ghi âm, báo thức, đồng hồ bấm giờ, hiển thị ngày giờ, tùy chỉnh chế độ phát ngẫu nhiên hoặc lặp lại. Bluetooth 4.2 khả năng kết nối tai nghe không dây.\r\n* Hỗ trợ nghe nhạc lossless : MP3/WMA/OGG/APE(Normal/Fast)/FLAC/WAV/AAC-LC/ACELP.(Requirements for APE and FLAC: 8KHz-48KHz, 16bit).\r\n* Kích thước: 9x4x1cm. Trọng lượng: 50gram.\r\n* Thời gian sử dụng: 7-10h.\r\n* Thời gian sạc: 3-5h. Lưu ý thời gian sạc đảm bảo đúng qui định tránh trai pin, phồng pin, giảm tuổi thọ pin.\r\n* Dòng điện sạc 5V-1A. Tuyệt đối không dùng sạc trên 1A để tránh quá tải ảnh hưởng đến pin của máy. Sử dụng tương tự với cục sạc dự phòng.\r\n* Cách sử dụng: Copy nhạc vào bộ nhớ máy hoặc lắp thẻ nhớ có sẵn bài hát, cắm tai nghe, gạt công tắc nguồn để sử dụng.\r\n-----\r\n#maynghenhac #mp3 #mp4 #comanhinh #theduc #camung #bluetooth #vokimloai #8gb #bonhotrong #hatakashop</span>', '1', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_product VALUES ('53', 'Apple MacBook Pro (2020) M1 Chip, 13 inch, 8GB, 256GB SSD', '9', '1633596969-07-10-2021-MRWSYUY09P.jpg', '36000000', '31200000', '7', '40', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Chip Apple M1 định nghĩa lại MacBook Pro 13 inch. Sở hữu CPU 8 lõi xử lý siêu tốc các luồng công việc phức tạp về hình ảnh, mã hóa, biên tập video cùng nhiều việc khác. GPU 8 lõi siêu mạnh xử lý gọn các tác vụ đồ họa khủng và chạy game siêu mượt. Neural Engine 16 lõi tiên tiến tăng cường sức mạnh công nghệ máy học tích hợp trong các ứng dụng yêu thích của bạn. Bộ nhớ thống nhất siêu nhanh cho mọi hoạt động mượt mà. Và thời lượng pin dài nhất từng có trên máy Mac, lên đến 20 giờ. (2) Đây chính là chiếc máy tính xách tay chuyên nghiệp thịnh hành nhất của Apple. Hiệu năng cao hơn hẳn, pro hơn hẳn. \r\n\r\nTính năng nổi bật \r\n•        Chip M1 do Apple thiết kế tạo ra một cú nhảy vọt về hiệu năng máy học, CPU và GPU \r\n•        Làm được nhiều việc hơn với thời lượng pin lên đến 20 giờ, thời lượng pin lâu nhất trong các dòng máy tính Mac từ trước đến nay (2) \r\n•        CPU 8 lõi cho hiệu năng nhanh hơn đến 2.8x, xử lý các luồng công việc nhanh hơn bao giờ hết (1) \r\n•        GPU 8 lõi với tốc độ xử lý đồ họa nhanh gấp 5x cho các ứng dụng và game có đồ họa khủng (1) \r\n•        Neural Engine 16 lõi cho công nghệ máy học hiện đại \r\n•        Bộ nhớ thống nhất 8GB giúp bạn làm việc gì cũng nhanh chóng và trôi chảy \r\n•        Ổ lưu trữ SSD siêu nhanh giúp mở các ứng dụng và tập tin chỉ trong tích tắc \r\n•        Hệ thống tản nhiệt chủ động mang lại hiệu năng tuyệt vời \r\n•        Màn hình Retina với độ sáng 500 nit cho màu sắc sống động và chi tiết ấn tượng (3) \r\n•        Camera FaceTime HD với bộ xử lý tín hiệu hình ảnh tiên tiến cho các cuộc gọi video đẹp hình, rõ tiếng hơn \r\n•        Ba micro phối hợp chuẩn studio thu giọng nói của bạn rõ hơn \r\n•        Wi-Fi 6 thế hệ mới giúp kết nối nhanh hơn \r\n•        Hai cổng Thunderbolt / USB 4 để sạc và kết nối phụ kiện \r\n•        Bàn phím Magic Keyboard có đèn nền và Touch ID giúp mở khóa và thanh toán an toàn hơn \r\n•        macOS Big Sur với thiết kế mới đầy táo bạo cùng nhiều cập nhật quan trọng cho các ứng dụng Safari, Messages và Maps \r\n•        Hiện có màu xám bạc và bạc  \r\n\r\nPháp lý \r\nHiện có sẵn các lựa chọn để nâng cấp. \r\n(1) So với thế hệ máy trước. \r\n(2) Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập apple.com/batteries để biết thêm thông tin. \r\n(3) Kích thước màn hình tính theo đường chéo.</span>', '1', '2021-10-07 08:56:09', '2021-10-07 08:56:09');
INSERT INTO tbl_product VALUES ('54', 'Bộ máy tính I5 Siêu nhanh chơi game Liên Minh, Đột Kích ,Free Fire ,Truy Kích, Audition MỚI 95% Window 10, Màn 19 Ich', '9', '1633597237-07-10-2021-CJV3H5PYH2.jpg', '4999000', '0', '4', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"> \r\n   Cấu hình chi tiết:\r\n* Main : H61  Hỗ trợ chip Intel  i7 , i5 , i3. \r\n* Bộ xử lý : Chip intel  i5 3470/3330  6M bộ nhớ đệm, tối đa 3,40 GHz 4 nhân , 4 luồng  (hoặc cấu hình 2 giá tương đương H81 kèm i3 4150/4160 )  \r\n* Ram :  4gb bus 1600 Kington, Gkill , Kingmax  \r\n* SSd ( ổ cứng ) : 128g mới chính hãng tốc độc đọc /ghi 400 Mb/400Mb vào win nhanh 1 2s(bên mình cài sẵn win 10  mới nhất)\r\n* Card đồ họa :  VGA intel hd 2500/ 4400    chiến game  tốt fps Liên minh,CF,game web, truy kích\r\n* Màn hình : 19 ich đẹp ,độ phân giải cao \r\n\r\nChú ý : mấy bạn chơi game Lol, gta 5 ,csgo có thể chơi được mình khuyên bạn dùng i3 4160 kèm H81 tích hợp vga intel hd 4400 chơi lol fps cao 90-100, gta 5 25-30, csgo  50-60 .\r\n    \r\n   Shop mình luôn đặt lợi ích khách hàng lên hàng đầu, nếu có bất cứ xung đột lợi ích nào, shop mình sẽ chịu phần thiệt nhiều hơn, sản phẩm đi đường vận chuyển vỡ shop hoàn toàn chịu trách nhiệm, sản phẩm do chập điện , cháy nổ 30 ngày đầu được đổi mới sản phẩm khác  không cần lý do.\r\n    \r\n   BỘ MÁY TÍNH BAO GỒM  : 1 cây vỏ MỚI FULL HỘP 100% , 1 màn hình 19 ich   đẹp độ phân giải cao.\r\n 1 bộ phím chuột MỚI , lót chuột MỚI , dây cáp kêt nối ,cáp mạng 6m .Vỏ led có 4 fan led kèm đẹp sang trọng đặc biệt có 3 màu để lựa chọn màu đen, màu trắng, màu hồng giá màu trắng , màu hồng thêm 50k thôi ạ \r\n</span> <div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"><br></span></div>', '1', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_product VALUES ('55', 'FLYCAM S609 có camera bay 20-25 phút ( máy bay điều khiển từ xa)', '20', '1633623296-07-10-2021-LGKY4YUTST.jpg', '1400000', '765000', '8', '0', '100', '0', '<span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Flycam S609 bay 20-25p cực khỏe giá rẻ\r\nLà mẫu Flycam phù hợp cho người mới tập chơi\r\nCamera 2.0 Full HD là mẫu Drone giá rẻ nhưng được trang bị rất nhiều tính năng mới.\r\nPin 3.7V 1800mAh bay lâu hơn, tích hợp công nghệ sạc nhanh tiên tiến hàng đầu.\r\nCamera Full HD tích hợp cho phép người chơi ghi lại video FPV, chụp ảnh trên không, và thậm chí có thể chụp selfie.\r\nKết nối Wifi trên điện thoại, truyền tải hình ảnh thời gian thực với màn hình điện thoại một cách dễ dàng\r\nChế độ không đầu (Headlees Mode) cho phép người điều khiển tự do bay lượn, không cần quan tâm hướng của máy bay.\r\nChế độ nhào lộn 360 độ kinh điển đáng kinh ngạc cung cấp một show diễn trên truyền hình đặc sắc cho bạn phút giây thoải mái.\r\nChế độ G-cảm biến cho phép Quadcopter tự động bay theo điện thoại (như chơi game đua xe trên điện thoại).\r\nChế độ giữ độ cao cho phép máy bay giữ độ cao cân bằng tốtvà lơ lửng trên không.\r\nS609 là một sản phẩm tốt, giá rẻ, phù hợp cho anh em mới tập chơi</span>', '1', '2021-10-07 16:14:56', '2021-10-07 16:14:56');

-- ----------------------------
-- Table structure for `tbl_productimg`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_productimg`;
CREATE TABLE `tbl_productimg` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_productimg_product_id_foreign` (`product_id`),
  CONSTRAINT `tbl_productimg_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_productimg
-- ----------------------------
INSERT INTO tbl_productimg VALUES ('6', '1633530383-0-06-10-2021-UZ55B7NJQN.jpg', '21', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_productimg VALUES ('7', '1633530383-1-06-10-2021-SPMC9A9ZHV.jpg', '21', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_productimg VALUES ('8', '1633530383-2-06-10-2021-OEEYK6WXDS.jpg', '21', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_productimg VALUES ('9', '1633530383-3-06-10-2021-3DX9ZZTMTZ.jpg', '21', '2021-10-06 14:26:23', '2021-10-06 14:26:23');
INSERT INTO tbl_productimg VALUES ('10', '1633531028-0-06-10-2021-XT8F52IEJG.jpg', '22', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_productimg VALUES ('11', '1633531028-1-06-10-2021-XIH1PDEMKH.jpg', '22', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_productimg VALUES ('12', '1633531028-2-06-10-2021-6VDZT3EHDT.jpg', '22', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_productimg VALUES ('13', '1633531028-3-06-10-2021-EKTPCXY9JD.jpg', '22', '2021-10-06 14:37:08', '2021-10-06 14:37:08');
INSERT INTO tbl_productimg VALUES ('14', '1633531166-0-06-10-2021-PE3UD7ZT5V.jpg', '23', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_productimg VALUES ('15', '1633531166-1-06-10-2021-T9TEWLVXSR.jpg', '23', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_productimg VALUES ('16', '1633531166-2-06-10-2021-WLK3JWJCMM.jpg', '23', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_productimg VALUES ('17', '1633531166-3-06-10-2021-E7OUMZELQ1.jpg', '23', '2021-10-06 14:39:26', '2021-10-06 14:39:26');
INSERT INTO tbl_productimg VALUES ('18', '1633531887-0-06-10-2021-YWPZAN4BWE.jpg', '24', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_productimg VALUES ('19', '1633531887-1-06-10-2021-2MMJDGLXPD.jpg', '24', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_productimg VALUES ('20', '1633531887-2-06-10-2021-NLMKCWLUZ1.jpg', '24', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_productimg VALUES ('21', '1633531887-3-06-10-2021-OPFLCPWLMN.jpg', '24', '2021-10-06 14:51:27', '2021-10-06 14:51:27');
INSERT INTO tbl_productimg VALUES ('22', '1633532133-0-06-10-2021-NFSU9JXDG5.jpg', '25', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_productimg VALUES ('23', '1633532133-1-06-10-2021-P2Z3MBSJGI.jpg', '25', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_productimg VALUES ('24', '1633532133-2-06-10-2021-TA2ORLDKY0.jpg', '25', '2021-10-06 14:55:33', '2021-10-06 14:55:33');
INSERT INTO tbl_productimg VALUES ('25', '1633532612-0-06-10-2021-32LTGV4FLR.jpg', '26', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_productimg VALUES ('26', '1633532612-1-06-10-2021-2TKO3EAT0A.jpg', '26', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_productimg VALUES ('27', '1633532612-2-06-10-2021-F9X0H5ESDO.jpg', '26', '2021-10-06 15:03:32', '2021-10-06 15:03:32');
INSERT INTO tbl_productimg VALUES ('28', '1633533120-0-06-10-2021-BJAJDEHATX.jpg', '27', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_productimg VALUES ('29', '1633533120-1-06-10-2021-TMZSEJTCVX.jpg', '27', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_productimg VALUES ('30', '1633533120-2-06-10-2021-EFTQ806EL8.jpg', '27', '2021-10-06 15:12:00', '2021-10-06 15:12:00');
INSERT INTO tbl_productimg VALUES ('31', '1633533909-0-06-10-2021-SMNSTR24ZF.jpg', '28', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_productimg VALUES ('32', '1633533909-1-06-10-2021-GLYENLDZBX.jpg', '28', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_productimg VALUES ('33', '1633533909-2-06-10-2021-X62XH9DRKX.jpg', '28', '2021-10-06 15:25:09', '2021-10-06 15:25:09');
INSERT INTO tbl_productimg VALUES ('34', '1633534395-0-06-10-2021-XHUVUJT83P.jpg', '29', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_productimg VALUES ('35', '1633534395-1-06-10-2021-SOKFLYYEKN.jpg', '29', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_productimg VALUES ('36', '1633534395-2-06-10-2021-QLNYCTVYVN.jpg', '29', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_productimg VALUES ('37', '1633534395-3-06-10-2021-OPOUCUANWS.jpg', '29', '2021-10-06 15:33:15', '2021-10-06 15:33:15');
INSERT INTO tbl_productimg VALUES ('38', '1633535856-0-06-10-2021-GEQG83XSVC.jpg', '30', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_productimg VALUES ('39', '1633535856-1-06-10-2021-QXFOWDWRJW.jpg', '30', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_productimg VALUES ('40', '1633535856-2-06-10-2021-YEADSO5S3S.jpg', '30', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_productimg VALUES ('41', '1633536447-0-06-10-2021-ERJVZCXQRR.jpg', '31', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_productimg VALUES ('42', '1633536447-1-06-10-2021-NPV9387VX3.jpg', '31', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_productimg VALUES ('43', '1633536782-0-06-10-2021-LLFHEH1LR8.jpg', '32', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_productimg VALUES ('44', '1633536782-1-06-10-2021-GKX4TN7SKW.jpg', '32', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_productimg VALUES ('45', '1633536782-2-06-10-2021-XMBVGKO37S.jpg', '32', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_productimg VALUES ('46', '1633536936-0-06-10-2021-D624APSWIH.jpg', '33', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_productimg VALUES ('47', '1633536936-1-06-10-2021-AGS3G1KGOH.jpg', '33', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_productimg VALUES ('48', '1633537041-0-06-10-2021-9CRHLYRQET.jpg', '34', '2021-10-06 16:17:21', '2021-10-06 16:17:21');
INSERT INTO tbl_productimg VALUES ('49', '1633537041-1-06-10-2021-UPGU2XMJ7X.jpg', '34', '2021-10-06 16:17:21', '2021-10-06 16:17:21');
INSERT INTO tbl_productimg VALUES ('50', '1633537314-0-06-10-2021-JGM16AZ7S5.jpg', '35', '2021-10-06 16:21:54', '2021-10-06 16:21:54');
INSERT INTO tbl_productimg VALUES ('51', '1633537314-1-06-10-2021-OIJFGYEWRM.jpg', '35', '2021-10-06 16:21:54', '2021-10-06 16:21:54');
INSERT INTO tbl_productimg VALUES ('52', '1633537609-0-06-10-2021-I1LJR3DKHA.jpg', '37', '2021-10-06 16:26:49', '2021-10-06 16:26:49');
INSERT INTO tbl_productimg VALUES ('53', '1633537609-1-06-10-2021-QGF9Q3L11B.jpg', '37', '2021-10-06 16:26:49', '2021-10-06 16:26:49');
INSERT INTO tbl_productimg VALUES ('54', '1633537609-2-06-10-2021-WQN9ZTVZMJ.jpg', '37', '2021-10-06 16:26:49', '2021-10-06 16:26:49');
INSERT INTO tbl_productimg VALUES ('55', '1633537760-0-06-10-2021-VQNZKEV8YU.jpg', '38', '2021-10-06 16:29:20', '2021-10-06 16:29:20');
INSERT INTO tbl_productimg VALUES ('56', '1633537760-1-06-10-2021-0RVMZS0RM8.jpg', '38', '2021-10-06 16:29:20', '2021-10-06 16:29:20');
INSERT INTO tbl_productimg VALUES ('57', '1633537760-2-06-10-2021-7PWGUPEWBT.jpg', '38', '2021-10-06 16:29:20', '2021-10-06 16:29:20');
INSERT INTO tbl_productimg VALUES ('58', '1633537848-0-06-10-2021-NCEBGQATV7.jpg', '39', '2021-10-06 16:30:48', '2021-10-06 16:30:48');
INSERT INTO tbl_productimg VALUES ('59', '1633537848-1-06-10-2021-O7BCL0Q6XT.jpg', '39', '2021-10-06 16:30:48', '2021-10-06 16:30:48');
INSERT INTO tbl_productimg VALUES ('60', '1633537848-2-06-10-2021-8TWAMMSIDK.jpg', '39', '2021-10-06 16:30:48', '2021-10-06 16:30:48');
INSERT INTO tbl_productimg VALUES ('61', '1633537933-0-06-10-2021-4PX1BCUAUC.jpg', '40', '2021-10-06 16:32:13', '2021-10-06 16:32:13');
INSERT INTO tbl_productimg VALUES ('62', '1633537933-1-06-10-2021-PFB4G3IDXF.jpg', '40', '2021-10-06 16:32:13', '2021-10-06 16:32:13');
INSERT INTO tbl_productimg VALUES ('63', '1633537933-2-06-10-2021-TULEEHGAX0.jpg', '40', '2021-10-06 16:32:13', '2021-10-06 16:32:13');
INSERT INTO tbl_productimg VALUES ('64', '1633538060-0-06-10-2021-2BTPQBALDG.jpg', '41', '2021-10-06 16:34:20', '2021-10-06 16:34:20');
INSERT INTO tbl_productimg VALUES ('65', '1633538060-1-06-10-2021-73WHSHK6WF.jpg', '41', '2021-10-06 16:34:20', '2021-10-06 16:34:20');
INSERT INTO tbl_productimg VALUES ('66', '1633538060-2-06-10-2021-YYWHEOFMP2.png', '41', '2021-10-06 16:34:20', '2021-10-06 16:34:20');
INSERT INTO tbl_productimg VALUES ('67', '1633594156-0-07-10-2021-VQPKH5HMHO.jpg', '42', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_productimg VALUES ('68', '1633594156-1-07-10-2021-NFUGOAUTCU.jpg', '42', '2021-10-07 08:09:16', '2021-10-07 08:09:16');
INSERT INTO tbl_productimg VALUES ('69', '1633594345-0-07-10-2021-HR2WFJIVQX.jpg', '43', '2021-10-07 08:12:25', '2021-10-07 08:12:25');
INSERT INTO tbl_productimg VALUES ('70', '1633594345-1-07-10-2021-K081PMZFKP.jpg', '43', '2021-10-07 08:12:25', '2021-10-07 08:12:25');
INSERT INTO tbl_productimg VALUES ('71', '1633594468-0-07-10-2021-LVRU6KXPED.jpg', '44', '2021-10-07 08:14:28', '2021-10-07 08:14:28');
INSERT INTO tbl_productimg VALUES ('72', '1633594468-1-07-10-2021-W1WKY8D50O.jpg', '44', '2021-10-07 08:14:28', '2021-10-07 08:14:28');
INSERT INTO tbl_productimg VALUES ('73', '1633594728-0-07-10-2021-PWOHKTCPCR.jpg', '45', '2021-10-07 08:18:48', '2021-10-07 08:18:48');
INSERT INTO tbl_productimg VALUES ('74', '1633594728-1-07-10-2021-JOM3Z89TBZ.jpg', '45', '2021-10-07 08:18:48', '2021-10-07 08:18:48');
INSERT INTO tbl_productimg VALUES ('75', '1633594841-0-07-10-2021-PKG8DIRW0F.jpg', '46', '2021-10-07 08:20:41', '2021-10-07 08:20:41');
INSERT INTO tbl_productimg VALUES ('76', '1633594841-1-07-10-2021-C5F70TI9TB.jpg', '46', '2021-10-07 08:20:41', '2021-10-07 08:20:41');
INSERT INTO tbl_productimg VALUES ('77', '1633594988-0-07-10-2021-AM1RVPDS7H.jpg', '47', '2021-10-07 08:23:08', '2021-10-07 08:23:08');
INSERT INTO tbl_productimg VALUES ('78', '1633594988-1-07-10-2021-5R4ZOZMCDC.jpg', '47', '2021-10-07 08:23:08', '2021-10-07 08:23:08');
INSERT INTO tbl_productimg VALUES ('79', '1633595192-0-07-10-2021-FTDMSCHFUK.jpg', '48', '2021-10-07 08:26:32', '2021-10-07 08:26:32');
INSERT INTO tbl_productimg VALUES ('80', '1633595192-1-07-10-2021-GFIDISL5LG.jpg', '48', '2021-10-07 08:26:32', '2021-10-07 08:26:32');
INSERT INTO tbl_productimg VALUES ('81', '1633595270-0-07-10-2021-56SNMXW3F8.jpg', '49', '2021-10-07 08:27:50', '2021-10-07 08:27:50');
INSERT INTO tbl_productimg VALUES ('82', '1633595270-1-07-10-2021-Y0KT3SCD3S.jpg', '49', '2021-10-07 08:27:50', '2021-10-07 08:27:50');
INSERT INTO tbl_productimg VALUES ('83', '1633596106-0-07-10-2021-BQO9UIOB6D.jpg', '50', '2021-10-07 08:41:46', '2021-10-07 08:41:46');
INSERT INTO tbl_productimg VALUES ('84', '1633596106-1-07-10-2021-ZEJAUUVACP.jpg', '50', '2021-10-07 08:41:46', '2021-10-07 08:41:46');
INSERT INTO tbl_productimg VALUES ('85', '1633596401-0-07-10-2021-GZSVFIIDYY.jpg', '51', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_productimg VALUES ('86', '1633596401-1-07-10-2021-XT057I4JZZ.jpg', '51', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_productimg VALUES ('87', '1633596495-0-07-10-2021-2NFZRAJ1BG.jpg', '52', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_productimg VALUES ('88', '1633596495-1-07-10-2021-1ALEYXNHCW.jpg', '52', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_productimg VALUES ('89', '1633596495-2-07-10-2021-HLLXPRQJNJ.jpg', '52', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_productimg VALUES ('90', '1633596969-0-07-10-2021-HDT2BLETIZ.jpg', '53', '2021-10-07 08:56:09', '2021-10-07 08:56:09');
INSERT INTO tbl_productimg VALUES ('91', '1633596969-1-07-10-2021-GRAVIR30RH.jpg', '53', '2021-10-07 08:56:09', '2021-10-07 08:56:09');
INSERT INTO tbl_productimg VALUES ('92', '1633596969-2-07-10-2021-GJKE6AZXCP.jpg', '53', '2021-10-07 08:56:09', '2021-10-07 08:56:09');
INSERT INTO tbl_productimg VALUES ('93', '1633597237-0-07-10-2021-Q1APITNKCP.jpg', '54', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_productimg VALUES ('94', '1633597237-1-07-10-2021-SQWHATK5NC.jpg', '54', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_productimg VALUES ('95', '1633597237-2-07-10-2021-EJKUUHQXCN.jpg', '54', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_productimg VALUES ('96', '1633623296-0-07-10-2021-CDIDASEPPO.jpg', '55', '2021-10-07 16:14:56', '2021-10-07 16:14:56');
INSERT INTO tbl_productimg VALUES ('97', '1633623296-1-07-10-2021-ELILREF5T6.jpg', '55', '2021-10-07 16:14:56', '2021-10-07 16:14:56');
INSERT INTO tbl_productimg VALUES ('98', '1633623296-2-07-10-2021-MPPW5PQDNJ.jpg', '55', '2021-10-07 16:14:56', '2021-10-07 16:14:56');
INSERT INTO tbl_productimg VALUES ('99', '1633623296-3-07-10-2021-GLSRJCGQCH.jpg', '55', '2021-10-07 16:14:56', '2021-10-07 16:14:56');
INSERT INTO tbl_productimg VALUES ('100', '1633623296-4-07-10-2021-JR6PNITXY4.jpg', '55', '2021-10-07 16:14:56', '2021-10-07 16:14:56');

-- ----------------------------
-- Table structure for `tbl_protype`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_protype`;
CREATE TABLE `tbl_protype` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pro_id` bigint(20) unsigned NOT NULL,
  `type_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_protype_pro_id_foreign` (`pro_id`),
  KEY `tb-_protype_type_id_foreign` (`type_id`),
  CONSTRAINT `tb-_protype_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `tbl_type` (`id`),
  CONSTRAINT `tbl_protype_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_protype
-- ----------------------------
INSERT INTO tbl_protype VALUES ('1', '30', '1', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_protype VALUES ('2', '30', '2', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_protype VALUES ('3', '30', '3', '2021-10-06 15:57:36', '2021-10-06 15:57:36');
INSERT INTO tbl_protype VALUES ('4', '31', '1', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_protype VALUES ('5', '31', '2', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_protype VALUES ('6', '31', '3', '2021-10-06 16:07:27', '2021-10-06 16:07:27');
INSERT INTO tbl_protype VALUES ('7', '32', '1', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_protype VALUES ('8', '32', '2', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_protype VALUES ('9', '32', '3', '2021-10-06 16:13:02', '2021-10-06 16:13:02');
INSERT INTO tbl_protype VALUES ('10', '33', '1', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_protype VALUES ('11', '33', '2', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_protype VALUES ('12', '33', '3', '2021-10-06 16:15:36', '2021-10-06 16:15:36');
INSERT INTO tbl_protype VALUES ('13', '51', '6', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_protype VALUES ('14', '51', '7', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_protype VALUES ('15', '51', '8', '2021-10-07 08:46:41', '2021-10-07 08:46:41');
INSERT INTO tbl_protype VALUES ('16', '52', '7', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_protype VALUES ('17', '52', '8', '2021-10-07 08:48:15', '2021-10-07 08:48:15');
INSERT INTO tbl_protype VALUES ('18', '54', '9', '2021-10-07 09:00:37', '2021-10-07 09:00:37');
INSERT INTO tbl_protype VALUES ('19', '54', '10', '2021-10-07 09:00:37', '2021-10-07 09:00:37');

-- ----------------------------
-- Table structure for `tbl_reply`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_reply`;
CREATE TABLE `tbl_reply` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL,
  `cus_id` bigint(20) unsigned NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_reply_comment_id_foreign` (`comment_id`),
  KEY `tbl_reply_cus_id_foreign` (`cus_id`),
  CONSTRAINT `tbl_reply_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `tbl_comment` (`id`),
  CONSTRAINT `tbl_reply_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `tbl_customer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_reply
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_roles`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE `tbl_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_roles
-- ----------------------------
INSERT INTO tbl_roles VALUES ('1', 'admin', '[\"admin.backend.Home\",\"admin.profile\",\"admin.up.profile\",\"admin.add.category\",\"admin.save.category\",\"admin.list.category\",\"admin.delete.category\",\"admin.edit.category\",\"admin.update.category\",\"admin.add.subcat\",\"admin.save.catsub\",\"admin.add.product\",\"admin.save.product\",\"admin.list.product\",\"admin.delete.product\",\"admin.edit.product\",\"admin.update.product\",\"admin.Protdetail\",\"admin.productimage.delete\",\"admin.pro_img.edit\",\"admin.proimg.update\",\"admin.list.order\",\"admin.order.edit\",\"admin.order.update\",\"admin.stats\",\"admin.banner\",\"admin.save.banner\",\"admin.list.banner\",\"admin.edit.baner\",\"admin.update.baner\",\"admin.delete.baner\",\"admin.Blog\",\"admin.save.blog\",\"admin.list.blog\",\"admin.edit.blog\",\"admin.update.blog\",\"admin.delete.bog\",\"admin.add.color\",\"admin.save.color\",\"admin.edit.color\",\"admin.update.color\",\"admin.delete.color\",\"admin.add.type\",\"admin.save.type\",\"admin.edit.type\",\"admin.update.type\",\"admin.delete.type\",\"admin.add.Brand\",\"admin.save.brand\",\"admin.edit.brand\",\"admin.update.brand\",\"admin.delete.brand\",\"admin.list.roles\",\"admin.add.roles\",\"admin.save.roles\",\"admin.edit.roles\",\"admin.update.roles\",\"admin.list.user\",\"admin.roles.user\",\"admin.save.rolesuser\",\"admin.edit.user\",\"admin.update.user\",\"admin.add.coupon\",\"admin.save.coupon\",\"admin.list.coupon\",\"admin.delete.coupon\",\"admin.edit.coupon\",\"admin.update.coupon\"]', '2021-09-09 16:47:50', '2021-09-29 13:57:38');
INSERT INTO tbl_roles VALUES ('2', 'admin2', '[\"admin.backend.Home\",\"admin.profile\",\"admin.up.profile\",\"admin.add.category\",\"admin.save.category\",\"admin.list.category\",\"admin.delete.category\",\"admin.edit.category\",\"admin.update.category\"]', '2021-09-09 16:48:04', '2021-09-18 09:06:33');
INSERT INTO tbl_roles VALUES ('4', 'admin3', '[\"admin.backend.Home\",\"admin.add.product\",\"admin.save.product\",\"admin.list.product\",\"admin.delete.product\",\"admin.edit.product\",\"admin.update.product\",\"admin.productimage.delete\",\"admin.pro_img.edit\",\"admin.proimg.update\"]', '2021-09-10 09:26:24', '2021-09-12 05:36:43');

-- ----------------------------
-- Table structure for `tbl_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_type`;
CREATE TABLE `tbl_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` bigint(20) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_type
-- ----------------------------
INSERT INTO tbl_type VALUES ('1', '21', 'camera không ảnh', '1', '2021-09-30 02:43:56', '2021-10-06 15:51:20');
INSERT INTO tbl_type VALUES ('2', '21', 'camere thẻ 23 GB', '1', '2021-09-30 02:44:02', '2021-10-06 15:51:33');
INSERT INTO tbl_type VALUES ('3', '21', 'camere kèm thẻ 64 GB', '1', '2021-09-30 02:44:10', '2021-10-06 15:51:29');
INSERT INTO tbl_type VALUES ('6', '22', '853 -The-Tn- 8G+sạc', '1', '2021-10-07 08:44:37', '2021-10-07 08:44:37');
INSERT INTO tbl_type VALUES ('7', '22', '853 -The-Tn- 8G', '1', '2021-10-07 08:45:04', '2021-10-07 08:45:04');
INSERT INTO tbl_type VALUES ('8', '22', '826s -The-Tn- 8G+sạc', '1', '2021-10-07 08:45:23', '2021-10-07 08:45:23');
INSERT INTO tbl_type VALUES ('9', '9', 'Bộ pc thường 99%', '1', '2021-10-07 08:58:34', '2021-10-07 08:58:34');
INSERT INTO tbl_type VALUES ('10', '9', 'Bộ pc game-led 99%', '1', '2021-10-07 08:59:04', '2021-10-07 08:59:04');

-- ----------------------------
-- Table structure for `tbl_useradmin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_useradmin`;
CREATE TABLE `tbl_useradmin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_useradmin_user_email_unique` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_useradmin
-- ----------------------------
INSERT INTO tbl_useradmin VALUES ('1', 'phihuukien', 'kien01@gmail.com', '0237665222', '$2y$10$c2cqXoQW3q9bvgXuKB1WgOKE4Ack4yQJipagMCp2uA0O169ZtDYlO', 'face11.jpg', null, 'SYrkm8wslroEYHm5zVC3K1NRKGrHM5IUjzD0xNJa53EM8QImXvvBosSa9MwP', '2021-09-04 13:37:30', '2021-09-30 02:34:41');
INSERT INTO tbl_useradmin VALUES ('2', 'kienphi', 'kien91@gmail.com', '0237665200', '$2y$10$JT9qMY7rlNLk2QVI8SWmt.otYJQASj.IXXO/kcb2jAB1eIADQhuIK', 'face1.jpg', null, 'm3yH0C1WV5sio92xYVVqdy3C052vN3bjZJFwVfrG14RSeKbyyOYwhHzgFF4O', '2021-09-30 01:38:01', '2021-09-30 01:38:01');

-- ----------------------------
-- Table structure for `tbl_user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user_roles`;
CREATE TABLE `tbl_user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `tbl_user_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `tbl_user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`),
  CONSTRAINT `tbl_user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tbl_useradmin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_user_roles
-- ----------------------------
INSERT INTO tbl_user_roles VALUES ('1', '2');
INSERT INTO tbl_user_roles VALUES ('2', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
