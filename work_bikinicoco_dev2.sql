/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : work_bikinicoco_dev2

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-04-08 01:33:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for work_atts
-- ----------------------------
DROP TABLE IF EXISTS `work_atts`;
CREATE TABLE `work_atts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `att_category_id` int(10) unsigned NOT NULL,
  `att_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `atts_att_category_id_index` (`att_category_id`) USING BTREE,
  CONSTRAINT `work_atts_ibfk_1` FOREIGN KEY (`att_category_id`) REFERENCES `work_att_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_atts
-- ----------------------------
INSERT INTO `work_atts` VALUES ('1', '1', '', 'Red', null, '0', '2', '2', '2016-02-23 20:42:04', '2016-02-23 20:42:04');
INSERT INTO `work_atts` VALUES ('2', '1', '', 'Black', null, '0', '2', '2', '2016-02-23 20:42:10', '2016-02-23 20:42:10');
INSERT INTO `work_atts` VALUES ('3', '1', '', 'Blue', null, '0', '2', '2', '2016-02-23 20:42:16', '2016-02-23 20:42:16');
INSERT INTO `work_atts` VALUES ('4', '2', '', 'M', null, '0', '1', '1', '2016-03-06 17:31:29', '2016-03-06 17:31:29');
INSERT INTO `work_atts` VALUES ('5', '2', '', 'L', null, '0', '1', '1', '2016-03-06 17:31:40', '2016-03-06 17:31:40');

-- ----------------------------
-- Table structure for work_att_categories
-- ----------------------------
DROP TABLE IF EXISTS `work_att_categories`;
CREATE TABLE `work_att_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_att_categories
-- ----------------------------
INSERT INTO `work_att_categories` VALUES ('1', 'Color', '', '0', '2', '2', '2016-02-23 20:41:50', '2016-02-23 20:41:50');
INSERT INTO `work_att_categories` VALUES ('2', 'Size', '', '0', '1', '1', '2016-03-06 17:30:06', '2016-03-06 17:30:06');

-- ----------------------------
-- Table structure for work_categories
-- ----------------------------
DROP TABLE IF EXISTS `work_categories`;
CREATE TABLE `work_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` int(10) unsigned NOT NULL,
  `father_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `categories_module_id_index` (`module_id`) USING BTREE,
  CONSTRAINT `work_categories_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `work_role_module` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_categories
-- ----------------------------
INSERT INTO `work_categories` VALUES ('1', '1', '0', 'Áo', 'ao', 'Áo', '2016-04-07Picture 977.jpg', 'Áo', 'Áo', '0', '1', '1', '2016-02-23 20:40:45', '2016-04-07 21:26:16');
INSERT INTO `work_categories` VALUES ('2', '1', '0', 'Quần', 'quan', 'Quần', '2016-04-07Picture 1417.jpg', 'Quần', 'Quần', '0', '1', '1', '2016-02-23 20:41:07', '2016-04-07 21:26:59');
INSERT INTO `work_categories` VALUES ('3', '1', '0', 'Mix', 'mix', 'Bikini coco', '2016-04-07Picture 1894.jpg', 'Mix', 'Mix', '0', '1', '1', '0000-00-00 00:00:00', '2016-04-07 21:27:57');
INSERT INTO `work_categories` VALUES ('4', '1', '0', 'Triangle', 'triangle', 'Bikini coco', '2016-02-231.jpg', '', '', '0', '1', '1', '0000-00-00 00:00:00', '2016-04-07 21:28:15');

-- ----------------------------
-- Table structure for work_categories_article
-- ----------------------------
DROP TABLE IF EXISTS `work_categories_article`;
CREATE TABLE `work_categories_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `categories_article_module_id_index` (`module_id`) USING BTREE,
  CONSTRAINT `work_categories_article_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `work_role_module` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_categories_article
-- ----------------------------
INSERT INTO `work_categories_article` VALUES ('1', '2', 'Blog Nhà Đẹp', 'blog-nha-dep', '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_categories_article` VALUES ('2', '2', 'Tin Tức', 'tin-tuc', '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_categories_article` VALUES ('3', '2', 'Thiết Kế', 'thiet-ke', '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');

-- ----------------------------
-- Table structure for work_categories_custom
-- ----------------------------
DROP TABLE IF EXISTS `work_categories_custom`;
CREATE TABLE `work_categories_custom` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_custom_count_unique` (`count`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_categories_custom
-- ----------------------------

-- ----------------------------
-- Table structure for work_consults
-- ----------------------------
DROP TABLE IF EXISTS `work_consults`;
CREATE TABLE `work_consults` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_consults
-- ----------------------------

-- ----------------------------
-- Table structure for work_contact
-- ----------------------------
DROP TABLE IF EXISTS `work_contact`;
CREATE TABLE `work_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_contact
-- ----------------------------

-- ----------------------------
-- Table structure for work_groups
-- ----------------------------
DROP TABLE IF EXISTS `work_groups`;
CREATE TABLE `work_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_groups
-- ----------------------------

-- ----------------------------
-- Table structure for work_group_product
-- ----------------------------
DROP TABLE IF EXISTS `work_group_product`;
CREATE TABLE `work_group_product` (
  `group_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  KEY `group_product_group_id_index` (`group_id`) USING BTREE,
  KEY `group_product_product_id_index` (`product_id`) USING BTREE,
  CONSTRAINT `work_group_product_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `work_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_group_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `work_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_group_product
-- ----------------------------

-- ----------------------------
-- Table structure for work_migrations
-- ----------------------------
DROP TABLE IF EXISTS `work_migrations`;
CREATE TABLE `work_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_migrations
-- ----------------------------
INSERT INTO `work_migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `work_migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_06_26_085420_create_roles_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_06_26_085446_create_user_roles_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_06_26_085447_create_role_module_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_06_26_085448_create_categories_article_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_14_033500_create_post_lang_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_14_033509_create_posts_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_14_033524_create_tags_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_14_033537_create_post_tag_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_23_161750_create_user_info_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_28_083130_create_categories_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_28_083149_create_products_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_30_093533_create_groups_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_30_094938_create_atts_categories_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_30_095654_create_atts_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_30_095728_create_product_att_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_30_103020_create_group_product_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_07_30_110319_create_product_galery_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_04_221212_create_orders_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_04_221304_create_order_items_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_11_084619_create_consults_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_11_084651_create_contact_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_11_084714_create_theme_options_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_11_091036_create_scripts_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_11_091115_create_slides_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_19_095725_create_product_rate_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_19_095901_create_post_comment_table', '1');
INSERT INTO `work_migrations` VALUES ('2015_08_25_082917_create_categories_custom_table', '1');

-- ----------------------------
-- Table structure for work_orders
-- ----------------------------
DROP TABLE IF EXISTS `work_orders`;
CREATE TABLE `work_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `order_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Chờ xử lý',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=499 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_orders
-- ----------------------------
INSERT INTO `work_orders` VALUES ('1', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-03-06 23:51:37', '2016-03-06 23:51:37');
INSERT INTO `work_orders` VALUES ('2', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-03-09 20:47:03', '2016-03-09 20:47:03');
INSERT INTO `work_orders` VALUES ('375', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-03 21:20:39', '2016-04-03 21:20:39');
INSERT INTO `work_orders` VALUES ('376', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-03 21:23:49', '2016-04-03 21:23:49');
INSERT INTO `work_orders` VALUES ('377', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-03 21:24:34', '2016-04-03 21:24:34');
INSERT INTO `work_orders` VALUES ('378', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-03 21:24:59', '2016-04-03 21:24:59');
INSERT INTO `work_orders` VALUES ('379', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-03 21:25:21', '2016-04-03 21:25:21');
INSERT INTO `work_orders` VALUES ('380', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-04 17:35:30', '2016-04-04 17:35:30');
INSERT INTO `work_orders` VALUES ('381', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:00:33', '2016-04-06 00:00:33');
INSERT INTO `work_orders` VALUES ('382', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:03:41', '2016-04-06 00:03:41');
INSERT INTO `work_orders` VALUES ('383', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:03:50', '2016-04-06 00:03:50');
INSERT INTO `work_orders` VALUES ('384', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:03:52', '2016-04-06 00:03:52');
INSERT INTO `work_orders` VALUES ('385', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:03:55', '2016-04-06 00:03:55');
INSERT INTO `work_orders` VALUES ('386', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:03:58', '2016-04-06 00:03:58');
INSERT INTO `work_orders` VALUES ('387', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 00:06:26', '2016-04-06 00:06:26');
INSERT INTO `work_orders` VALUES ('388', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:21', '2016-04-06 21:46:21');
INSERT INTO `work_orders` VALUES ('389', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:27', '2016-04-06 21:46:27');
INSERT INTO `work_orders` VALUES ('390', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:45', '2016-04-06 21:46:45');
INSERT INTO `work_orders` VALUES ('391', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:45', '2016-04-06 21:46:45');
INSERT INTO `work_orders` VALUES ('392', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:46', '2016-04-06 21:46:46');
INSERT INTO `work_orders` VALUES ('393', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:55', '2016-04-06 21:46:55');
INSERT INTO `work_orders` VALUES ('394', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:46:58', '2016-04-06 21:46:58');
INSERT INTO `work_orders` VALUES ('395', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:47:01', '2016-04-06 21:47:01');
INSERT INTO `work_orders` VALUES ('396', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:47:04', '2016-04-06 21:47:04');
INSERT INTO `work_orders` VALUES ('397', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:47:07', '2016-04-06 21:47:07');
INSERT INTO `work_orders` VALUES ('398', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:47:09', '2016-04-06 21:47:09');
INSERT INTO `work_orders` VALUES ('399', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 21:50:23', '2016-04-06 21:50:23');
INSERT INTO `work_orders` VALUES ('400', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:09:09', '2016-04-06 22:09:09');
INSERT INTO `work_orders` VALUES ('401', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:13:55', '2016-04-06 22:13:55');
INSERT INTO `work_orders` VALUES ('402', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:15:07', '2016-04-06 22:15:07');
INSERT INTO `work_orders` VALUES ('403', 'Nguyen', 'Lương', '', '', '0978811522', 'luongnv93@gmail.com', '', '', '0.00', 'Chờ xử lý', '1', '2016-04-06 22:16:53', '2016-04-06 22:30:07');
INSERT INTO `work_orders` VALUES ('404', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:30:07', '2016-04-06 22:30:07');
INSERT INTO `work_orders` VALUES ('405', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:33:33', '2016-04-06 22:33:33');
INSERT INTO `work_orders` VALUES ('406', 'Nguyen', 'Van Luong', 'Gam cau', '', '0988888888', 'luongnv93@gmail.com', '', '', '0.00', 'Chờ xử lý', '1', '2016-04-06 22:40:27', '2016-04-06 22:42:38');
INSERT INTO `work_orders` VALUES ('407', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:41:54', '2016-04-06 22:41:54');
INSERT INTO `work_orders` VALUES ('408', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:42:38', '2016-04-06 22:42:38');
INSERT INTO `work_orders` VALUES ('409', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:45:27', '2016-04-06 22:45:27');
INSERT INTO `work_orders` VALUES ('410', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:45:30', '2016-04-06 22:45:30');
INSERT INTO `work_orders` VALUES ('411', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:16', '2016-04-06 22:47:16');
INSERT INTO `work_orders` VALUES ('412', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:20', '2016-04-06 22:47:20');
INSERT INTO `work_orders` VALUES ('413', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:22', '2016-04-06 22:47:22');
INSERT INTO `work_orders` VALUES ('414', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:29', '2016-04-06 22:47:29');
INSERT INTO `work_orders` VALUES ('415', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:32', '2016-04-06 22:47:32');
INSERT INTO `work_orders` VALUES ('416', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:38', '2016-04-06 22:47:38');
INSERT INTO `work_orders` VALUES ('417', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:44', '2016-04-06 22:47:44');
INSERT INTO `work_orders` VALUES ('418', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:47', '2016-04-06 22:47:47');
INSERT INTO `work_orders` VALUES ('419', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:50', '2016-04-06 22:47:50');
INSERT INTO `work_orders` VALUES ('420', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:54', '2016-04-06 22:47:54');
INSERT INTO `work_orders` VALUES ('421', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:57', '2016-04-06 22:47:57');
INSERT INTO `work_orders` VALUES ('422', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:47:59', '2016-04-06 22:47:59');
INSERT INTO `work_orders` VALUES ('423', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:48:02', '2016-04-06 22:48:02');
INSERT INTO `work_orders` VALUES ('424', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:49:14', '2016-04-06 22:49:14');
INSERT INTO `work_orders` VALUES ('425', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:49:20', '2016-04-06 22:49:20');
INSERT INTO `work_orders` VALUES ('426', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:49:23', '2016-04-06 22:49:23');
INSERT INTO `work_orders` VALUES ('427', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:49:25', '2016-04-06 22:49:25');
INSERT INTO `work_orders` VALUES ('428', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 22:49:27', '2016-04-06 22:49:27');
INSERT INTO `work_orders` VALUES ('429', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:23', '2016-04-06 23:01:23');
INSERT INTO `work_orders` VALUES ('430', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:26', '2016-04-06 23:01:26');
INSERT INTO `work_orders` VALUES ('431', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:32', '2016-04-06 23:01:32');
INSERT INTO `work_orders` VALUES ('432', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:35', '2016-04-06 23:01:35');
INSERT INTO `work_orders` VALUES ('433', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:37', '2016-04-06 23:01:37');
INSERT INTO `work_orders` VALUES ('434', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:40', '2016-04-06 23:01:40');
INSERT INTO `work_orders` VALUES ('435', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:01:42', '2016-04-06 23:01:42');
INSERT INTO `work_orders` VALUES ('436', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:08:28', '2016-04-06 23:08:28');
INSERT INTO `work_orders` VALUES ('437', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:08:30', '2016-04-06 23:08:30');
INSERT INTO `work_orders` VALUES ('438', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:08:32', '2016-04-06 23:08:32');
INSERT INTO `work_orders` VALUES ('439', 'Nguyen', 'Luong', '186 Hoa Bang', '', '0978811522', 'luongnv93@gmail.com', '', '', '0.00', 'Chờ xử lý', '1', '2016-04-06 23:08:34', '2016-04-06 23:18:04');
INSERT INTO `work_orders` VALUES ('440', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-06 23:18:04', '2016-04-06 23:18:04');
INSERT INTO `work_orders` VALUES ('441', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:14:28', '2016-04-07 21:14:28');
INSERT INTO `work_orders` VALUES ('442', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:34:51', '2016-04-07 21:34:51');
INSERT INTO `work_orders` VALUES ('443', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:34:51', '2016-04-07 21:34:51');
INSERT INTO `work_orders` VALUES ('444', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:34:56', '2016-04-07 21:34:56');
INSERT INTO `work_orders` VALUES ('445', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:43:29', '2016-04-07 21:43:29');
INSERT INTO `work_orders` VALUES ('446', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:44:41', '2016-04-07 21:44:41');
INSERT INTO `work_orders` VALUES ('447', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:44:56', '2016-04-07 21:44:56');
INSERT INTO `work_orders` VALUES ('448', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:46:10', '2016-04-07 21:46:10');
INSERT INTO `work_orders` VALUES ('449', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:46:29', '2016-04-07 21:46:29');
INSERT INTO `work_orders` VALUES ('450', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:46:44', '2016-04-07 21:46:44');
INSERT INTO `work_orders` VALUES ('451', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 21:47:45', '2016-04-07 21:47:45');
INSERT INTO `work_orders` VALUES ('452', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:38:12', '2016-04-07 22:38:12');
INSERT INTO `work_orders` VALUES ('453', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:38:22', '2016-04-07 22:38:22');
INSERT INTO `work_orders` VALUES ('454', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:38:23', '2016-04-07 22:38:23');
INSERT INTO `work_orders` VALUES ('455', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:38:27', '2016-04-07 22:38:27');
INSERT INTO `work_orders` VALUES ('456', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:49:38', '2016-04-07 22:49:38');
INSERT INTO `work_orders` VALUES ('457', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:50:06', '2016-04-07 22:50:06');
INSERT INTO `work_orders` VALUES ('458', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:54:22', '2016-04-07 22:54:22');
INSERT INTO `work_orders` VALUES ('459', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:54:24', '2016-04-07 22:54:24');
INSERT INTO `work_orders` VALUES ('460', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 22:54:28', '2016-04-07 22:54:28');
INSERT INTO `work_orders` VALUES ('461', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:01:16', '2016-04-07 23:01:16');
INSERT INTO `work_orders` VALUES ('462', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:09', '2016-04-07 23:03:09');
INSERT INTO `work_orders` VALUES ('463', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:38', '2016-04-07 23:03:38');
INSERT INTO `work_orders` VALUES ('464', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:40', '2016-04-07 23:03:40');
INSERT INTO `work_orders` VALUES ('465', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:41', '2016-04-07 23:03:41');
INSERT INTO `work_orders` VALUES ('466', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:42', '2016-04-07 23:03:42');
INSERT INTO `work_orders` VALUES ('467', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:43', '2016-04-07 23:03:43');
INSERT INTO `work_orders` VALUES ('468', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:46', '2016-04-07 23:03:46');
INSERT INTO `work_orders` VALUES ('469', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:47', '2016-04-07 23:03:47');
INSERT INTO `work_orders` VALUES ('470', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:03:49', '2016-04-07 23:03:49');
INSERT INTO `work_orders` VALUES ('471', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:05:25', '2016-04-07 23:05:25');
INSERT INTO `work_orders` VALUES ('472', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:05:27', '2016-04-07 23:05:27');
INSERT INTO `work_orders` VALUES ('473', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:05:35', '2016-04-07 23:05:35');
INSERT INTO `work_orders` VALUES ('474', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:48:59', '2016-04-07 23:48:59');
INSERT INTO `work_orders` VALUES ('475', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:49:01', '2016-04-07 23:49:01');
INSERT INTO `work_orders` VALUES ('476', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:49:03', '2016-04-07 23:49:03');
INSERT INTO `work_orders` VALUES ('477', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:49:06', '2016-04-07 23:49:06');
INSERT INTO `work_orders` VALUES ('478', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:49:11', '2016-04-07 23:49:11');
INSERT INTO `work_orders` VALUES ('479', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-07 23:49:14', '2016-04-07 23:49:14');
INSERT INTO `work_orders` VALUES ('480', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:01:13', '2016-04-08 00:01:13');
INSERT INTO `work_orders` VALUES ('481', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:01:18', '2016-04-08 00:01:18');
INSERT INTO `work_orders` VALUES ('482', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:01:19', '2016-04-08 00:01:19');
INSERT INTO `work_orders` VALUES ('483', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:01:21', '2016-04-08 00:01:21');
INSERT INTO `work_orders` VALUES ('484', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:01:26', '2016-04-08 00:01:26');
INSERT INTO `work_orders` VALUES ('485', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:50:33', '2016-04-08 00:50:33');
INSERT INTO `work_orders` VALUES ('486', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:50:54', '2016-04-08 00:50:54');
INSERT INTO `work_orders` VALUES ('487', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:51:27', '2016-04-08 00:51:27');
INSERT INTO `work_orders` VALUES ('488', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:51:37', '2016-04-08 00:51:37');
INSERT INTO `work_orders` VALUES ('489', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:56:09', '2016-04-08 00:56:09');
INSERT INTO `work_orders` VALUES ('490', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:56:12', '2016-04-08 00:56:12');
INSERT INTO `work_orders` VALUES ('491', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:56:14', '2016-04-08 00:56:14');
INSERT INTO `work_orders` VALUES ('492', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:56:14', '2016-04-08 00:56:14');
INSERT INTO `work_orders` VALUES ('493', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:56:16', '2016-04-08 00:56:16');
INSERT INTO `work_orders` VALUES ('494', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:56:25', '2016-04-08 00:56:25');
INSERT INTO `work_orders` VALUES ('495', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:59:14', '2016-04-08 00:59:14');
INSERT INTO `work_orders` VALUES ('496', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:59:19', '2016-04-08 00:59:19');
INSERT INTO `work_orders` VALUES ('497', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 00:59:27', '2016-04-08 00:59:27');
INSERT INTO `work_orders` VALUES ('498', '', '', '', '', '', '', '', '', '0.00', 'Chờ xử lý', '0', '2016-04-08 01:01:29', '2016-04-08 01:01:29');

-- ----------------------------
-- Table structure for work_order_items
-- ----------------------------
DROP TABLE IF EXISTS `work_order_items`;
CREATE TABLE `work_order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_index` (`order_id`) USING BTREE,
  KEY `order_items_product_id_index` (`product_id`) USING BTREE,
  CONSTRAINT `work_order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `work_orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `work_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1026 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_order_items
-- ----------------------------
INSERT INTO `work_order_items` VALUES ('1', '2', '1', '1', '0', '2016-03-09 20:47:03', '2016-03-09 20:47:03');
INSERT INTO `work_order_items` VALUES ('874', '375', '9', '3', '0', '2016-04-03 21:20:39', '2016-04-03 21:20:39');
INSERT INTO `work_order_items` VALUES ('875', '375', '7', '5', '0', '2016-04-03 21:20:39', '2016-04-03 21:20:39');
INSERT INTO `work_order_items` VALUES ('876', '375', '4', '1', '0', '2016-04-03 21:20:39', '2016-04-03 21:20:39');
INSERT INTO `work_order_items` VALUES ('877', '376', '9', '3', '0', '2016-04-03 21:23:49', '2016-04-03 21:23:49');
INSERT INTO `work_order_items` VALUES ('878', '376', '7', '5', '0', '2016-04-03 21:23:49', '2016-04-03 21:23:49');
INSERT INTO `work_order_items` VALUES ('879', '376', '4', '1', '0', '2016-04-03 21:23:49', '2016-04-03 21:23:49');
INSERT INTO `work_order_items` VALUES ('880', '377', '9', '3', '0', '2016-04-03 21:24:34', '2016-04-03 21:24:34');
INSERT INTO `work_order_items` VALUES ('881', '377', '7', '5', '0', '2016-04-03 21:24:34', '2016-04-03 21:24:34');
INSERT INTO `work_order_items` VALUES ('882', '377', '4', '1', '0', '2016-04-03 21:24:34', '2016-04-03 21:24:34');
INSERT INTO `work_order_items` VALUES ('883', '378', '9', '3', '0', '2016-04-03 21:24:59', '2016-04-03 21:24:59');
INSERT INTO `work_order_items` VALUES ('884', '378', '7', '5', '0', '2016-04-03 21:24:59', '2016-04-03 21:24:59');
INSERT INTO `work_order_items` VALUES ('885', '378', '4', '1', '0', '2016-04-03 21:24:59', '2016-04-03 21:24:59');
INSERT INTO `work_order_items` VALUES ('886', '379', '9', '3', '0', '2016-04-03 21:25:21', '2016-04-03 21:25:21');
INSERT INTO `work_order_items` VALUES ('887', '379', '7', '5', '0', '2016-04-03 21:25:21', '2016-04-03 21:25:21');
INSERT INTO `work_order_items` VALUES ('888', '379', '4', '1', '0', '2016-04-03 21:25:21', '2016-04-03 21:25:21');
INSERT INTO `work_order_items` VALUES ('889', '382', '8', '1', '0', '2016-04-06 00:03:41', '2016-04-06 00:03:41');
INSERT INTO `work_order_items` VALUES ('890', '383', '8', '1', '0', '2016-04-06 00:03:50', '2016-04-06 00:03:50');
INSERT INTO `work_order_items` VALUES ('891', '383', '4', '1', '0', '2016-04-06 00:03:50', '2016-04-06 00:03:50');
INSERT INTO `work_order_items` VALUES ('892', '384', '8', '1', '0', '2016-04-06 00:03:52', '2016-04-06 00:03:52');
INSERT INTO `work_order_items` VALUES ('893', '384', '4', '1', '0', '2016-04-06 00:03:52', '2016-04-06 00:03:52');
INSERT INTO `work_order_items` VALUES ('894', '385', '8', '1', '0', '2016-04-06 00:03:55', '2016-04-06 00:03:55');
INSERT INTO `work_order_items` VALUES ('895', '385', '4', '1', '0', '2016-04-06 00:03:55', '2016-04-06 00:03:55');
INSERT INTO `work_order_items` VALUES ('896', '386', '8', '1', '0', '2016-04-06 00:03:58', '2016-04-06 00:03:58');
INSERT INTO `work_order_items` VALUES ('897', '386', '4', '1', '0', '2016-04-06 00:03:58', '2016-04-06 00:03:58');
INSERT INTO `work_order_items` VALUES ('898', '387', '8', '1', '0', '2016-04-06 00:06:26', '2016-04-06 00:06:26');
INSERT INTO `work_order_items` VALUES ('899', '387', '4', '1', '0', '2016-04-06 00:06:26', '2016-04-06 00:06:26');
INSERT INTO `work_order_items` VALUES ('900', '390', '11', '1', '0', '2016-04-06 21:46:45', '2016-04-06 21:46:45');
INSERT INTO `work_order_items` VALUES ('901', '391', '11', '2', '0', '2016-04-06 21:46:46', '2016-04-06 21:46:46');
INSERT INTO `work_order_items` VALUES ('902', '392', '11', '2', '0', '2016-04-06 21:46:46', '2016-04-06 21:46:46');
INSERT INTO `work_order_items` VALUES ('903', '393', '11', '2', '0', '2016-04-06 21:46:55', '2016-04-06 21:46:55');
INSERT INTO `work_order_items` VALUES ('904', '393', '10', '1', '0', '2016-04-06 21:46:55', '2016-04-06 21:46:55');
INSERT INTO `work_order_items` VALUES ('905', '394', '11', '2', '0', '2016-04-06 21:46:58', '2016-04-06 21:46:58');
INSERT INTO `work_order_items` VALUES ('906', '394', '10', '2', '0', '2016-04-06 21:46:58', '2016-04-06 21:46:58');
INSERT INTO `work_order_items` VALUES ('907', '395', '11', '3', '0', '2016-04-06 21:47:01', '2016-04-06 21:47:01');
INSERT INTO `work_order_items` VALUES ('908', '395', '10', '2', '0', '2016-04-06 21:47:01', '2016-04-06 21:47:01');
INSERT INTO `work_order_items` VALUES ('909', '396', '11', '3', '0', '2016-04-06 21:47:04', '2016-04-06 21:47:04');
INSERT INTO `work_order_items` VALUES ('910', '396', '10', '2', '0', '2016-04-06 21:47:04', '2016-04-06 21:47:04');
INSERT INTO `work_order_items` VALUES ('911', '397', '11', '3', '0', '2016-04-06 21:47:07', '2016-04-06 21:47:07');
INSERT INTO `work_order_items` VALUES ('912', '397', '10', '2', '0', '2016-04-06 21:47:07', '2016-04-06 21:47:07');
INSERT INTO `work_order_items` VALUES ('913', '398', '11', '3', '0', '2016-04-06 21:47:09', '2016-04-06 21:47:09');
INSERT INTO `work_order_items` VALUES ('914', '398', '10', '2', '0', '2016-04-06 21:47:09', '2016-04-06 21:47:09');
INSERT INTO `work_order_items` VALUES ('915', '399', '11', '3', '0', '2016-04-06 21:50:23', '2016-04-06 21:50:23');
INSERT INTO `work_order_items` VALUES ('916', '399', '10', '2', '0', '2016-04-06 21:50:23', '2016-04-06 21:50:23');
INSERT INTO `work_order_items` VALUES ('917', '400', '11', '3', '0', '2016-04-06 22:09:09', '2016-04-06 22:09:09');
INSERT INTO `work_order_items` VALUES ('918', '400', '10', '2', '0', '2016-04-06 22:09:09', '2016-04-06 22:09:09');
INSERT INTO `work_order_items` VALUES ('919', '401', '11', '3', '0', '2016-04-06 22:13:55', '2016-04-06 22:13:55');
INSERT INTO `work_order_items` VALUES ('920', '401', '10', '2', '0', '2016-04-06 22:13:55', '2016-04-06 22:13:55');
INSERT INTO `work_order_items` VALUES ('921', '402', '11', '3', '0', '2016-04-06 22:15:07', '2016-04-06 22:15:07');
INSERT INTO `work_order_items` VALUES ('922', '402', '10', '2', '0', '2016-04-06 22:15:07', '2016-04-06 22:15:07');
INSERT INTO `work_order_items` VALUES ('923', '403', '11', '3', '0', '2016-04-06 22:16:53', '2016-04-06 22:16:53');
INSERT INTO `work_order_items` VALUES ('924', '403', '10', '2', '0', '2016-04-06 22:16:53', '2016-04-06 22:16:53');
INSERT INTO `work_order_items` VALUES ('925', '404', '11', '3', '0', '2016-04-06 22:30:07', '2016-04-06 22:30:07');
INSERT INTO `work_order_items` VALUES ('926', '404', '10', '2', '0', '2016-04-06 22:30:07', '2016-04-06 22:30:07');
INSERT INTO `work_order_items` VALUES ('927', '405', '11', '3', '0', '2016-04-06 22:33:33', '2016-04-06 22:33:33');
INSERT INTO `work_order_items` VALUES ('928', '405', '10', '2', '0', '2016-04-06 22:33:33', '2016-04-06 22:33:33');
INSERT INTO `work_order_items` VALUES ('929', '406', '11', '3', '0', '2016-04-06 22:40:28', '2016-04-06 22:40:28');
INSERT INTO `work_order_items` VALUES ('930', '406', '10', '2', '0', '2016-04-06 22:40:28', '2016-04-06 22:40:28');
INSERT INTO `work_order_items` VALUES ('931', '407', '11', '3', '0', '2016-04-06 22:41:54', '2016-04-06 22:41:54');
INSERT INTO `work_order_items` VALUES ('932', '407', '10', '2', '0', '2016-04-06 22:41:54', '2016-04-06 22:41:54');
INSERT INTO `work_order_items` VALUES ('933', '408', '11', '3', '0', '2016-04-06 22:42:38', '2016-04-06 22:42:38');
INSERT INTO `work_order_items` VALUES ('934', '408', '10', '2', '0', '2016-04-06 22:42:38', '2016-04-06 22:42:38');
INSERT INTO `work_order_items` VALUES ('935', '409', '11', '3', '0', '2016-04-06 22:45:27', '2016-04-06 22:45:27');
INSERT INTO `work_order_items` VALUES ('936', '409', '10', '2', '0', '2016-04-06 22:45:27', '2016-04-06 22:45:27');
INSERT INTO `work_order_items` VALUES ('937', '410', '11', '3', '0', '2016-04-06 22:45:30', '2016-04-06 22:45:30');
INSERT INTO `work_order_items` VALUES ('938', '410', '10', '2', '0', '2016-04-06 22:45:30', '2016-04-06 22:45:30');
INSERT INTO `work_order_items` VALUES ('939', '411', '11', '3', '0', '2016-04-06 22:47:16', '2016-04-06 22:47:16');
INSERT INTO `work_order_items` VALUES ('940', '411', '10', '2', '0', '2016-04-06 22:47:16', '2016-04-06 22:47:16');
INSERT INTO `work_order_items` VALUES ('941', '412', '11', '3', '0', '2016-04-06 22:47:20', '2016-04-06 22:47:20');
INSERT INTO `work_order_items` VALUES ('942', '412', '10', '2', '0', '2016-04-06 22:47:20', '2016-04-06 22:47:20');
INSERT INTO `work_order_items` VALUES ('943', '413', '11', '4', '0', '2016-04-06 22:47:22', '2016-04-06 22:47:22');
INSERT INTO `work_order_items` VALUES ('944', '413', '10', '2', '0', '2016-04-06 22:47:22', '2016-04-06 22:47:22');
INSERT INTO `work_order_items` VALUES ('945', '414', '11', '4', '0', '2016-04-06 22:47:29', '2016-04-06 22:47:29');
INSERT INTO `work_order_items` VALUES ('946', '415', '11', '1', '0', '2016-04-06 22:47:32', '2016-04-06 22:47:32');
INSERT INTO `work_order_items` VALUES ('947', '416', '11', '1', '0', '2016-04-06 22:47:38', '2016-04-06 22:47:38');
INSERT INTO `work_order_items` VALUES ('948', '417', '11', '1', '0', '2016-04-06 22:47:44', '2016-04-06 22:47:44');
INSERT INTO `work_order_items` VALUES ('949', '418', '11', '1', '0', '2016-04-06 22:47:47', '2016-04-06 22:47:47');
INSERT INTO `work_order_items` VALUES ('950', '419', '11', '1', '0', '2016-04-06 22:47:50', '2016-04-06 22:47:50');
INSERT INTO `work_order_items` VALUES ('951', '421', '11', '1', '0', '2016-04-06 22:47:58', '2016-04-06 22:47:58');
INSERT INTO `work_order_items` VALUES ('952', '422', '11', '1', '0', '2016-04-06 22:47:59', '2016-04-06 22:47:59');
INSERT INTO `work_order_items` VALUES ('953', '423', '11', '1', '0', '2016-04-06 22:48:02', '2016-04-06 22:48:02');
INSERT INTO `work_order_items` VALUES ('954', '424', '11', '1', '0', '2016-04-06 22:49:14', '2016-04-06 22:49:14');
INSERT INTO `work_order_items` VALUES ('955', '425', '11', '1', '0', '2016-04-06 22:49:21', '2016-04-06 22:49:21');
INSERT INTO `work_order_items` VALUES ('956', '427', '11', '1', '0', '2016-04-06 22:49:25', '2016-04-06 22:49:25');
INSERT INTO `work_order_items` VALUES ('957', '428', '11', '1', '0', '2016-04-06 22:49:27', '2016-04-06 22:49:27');
INSERT INTO `work_order_items` VALUES ('958', '429', '11', '1', '0', '2016-04-06 23:01:24', '2016-04-06 23:01:24');
INSERT INTO `work_order_items` VALUES ('959', '430', '11', '1', '0', '2016-04-06 23:01:26', '2016-04-06 23:01:26');
INSERT INTO `work_order_items` VALUES ('960', '431', '11', '2', '0', '2016-04-06 23:01:32', '2016-04-06 23:01:32');
INSERT INTO `work_order_items` VALUES ('961', '432', '11', '1', '0', '2016-04-06 23:01:35', '2016-04-06 23:01:35');
INSERT INTO `work_order_items` VALUES ('962', '434', '11', '1', '0', '2016-04-06 23:01:40', '2016-04-06 23:01:40');
INSERT INTO `work_order_items` VALUES ('963', '435', '11', '1', '0', '2016-04-06 23:01:42', '2016-04-06 23:01:42');
INSERT INTO `work_order_items` VALUES ('964', '436', '11', '1', '0', '2016-04-06 23:08:29', '2016-04-06 23:08:29');
INSERT INTO `work_order_items` VALUES ('965', '438', '11', '1', '0', '2016-04-06 23:08:32', '2016-04-06 23:08:32');
INSERT INTO `work_order_items` VALUES ('966', '439', '11', '1', '0', '2016-04-06 23:08:34', '2016-04-06 23:08:34');
INSERT INTO `work_order_items` VALUES ('967', '440', '11', '1', '0', '2016-04-06 23:18:04', '2016-04-06 23:18:04');
INSERT INTO `work_order_items` VALUES ('968', '449', '12', '1', '0', '2016-04-07 21:46:29', '2016-04-07 21:46:29');
INSERT INTO `work_order_items` VALUES ('969', '450', '12', '1', '0', '2016-04-07 21:46:44', '2016-04-07 21:46:44');
INSERT INTO `work_order_items` VALUES ('970', '451', '12', '1', '0', '2016-04-07 21:47:45', '2016-04-07 21:47:45');
INSERT INTO `work_order_items` VALUES ('971', '452', '12', '1', '0', '2016-04-07 22:38:12', '2016-04-07 22:38:12');
INSERT INTO `work_order_items` VALUES ('972', '453', '12', '1', '0', '2016-04-07 22:38:22', '2016-04-07 22:38:22');
INSERT INTO `work_order_items` VALUES ('973', '454', '12', '1', '0', '2016-04-07 22:38:23', '2016-04-07 22:38:23');
INSERT INTO `work_order_items` VALUES ('974', '455', '12', '1', '0', '2016-04-07 22:38:27', '2016-04-07 22:38:27');
INSERT INTO `work_order_items` VALUES ('975', '456', '12', '1', '0', '2016-04-07 22:49:38', '2016-04-07 22:49:38');
INSERT INTO `work_order_items` VALUES ('976', '457', '12', '1', '0', '2016-04-07 22:50:06', '2016-04-07 22:50:06');
INSERT INTO `work_order_items` VALUES ('977', '458', '12', '1', '0', '2016-04-07 22:54:22', '2016-04-07 22:54:22');
INSERT INTO `work_order_items` VALUES ('978', '459', '12', '1', '0', '2016-04-07 22:54:24', '2016-04-07 22:54:24');
INSERT INTO `work_order_items` VALUES ('979', '460', '12', '1', '0', '2016-04-07 22:54:29', '2016-04-07 22:54:29');
INSERT INTO `work_order_items` VALUES ('980', '461', '12', '1', '0', '2016-04-07 23:01:16', '2016-04-07 23:01:16');
INSERT INTO `work_order_items` VALUES ('981', '462', '12', '1', '0', '2016-04-07 23:03:09', '2016-04-07 23:03:09');
INSERT INTO `work_order_items` VALUES ('982', '463', '12', '1', '0', '2016-04-07 23:03:38', '2016-04-07 23:03:38');
INSERT INTO `work_order_items` VALUES ('983', '464', '12', '1', '0', '2016-04-07 23:03:40', '2016-04-07 23:03:40');
INSERT INTO `work_order_items` VALUES ('984', '465', '12', '1', '0', '2016-04-07 23:03:41', '2016-04-07 23:03:41');
INSERT INTO `work_order_items` VALUES ('985', '466', '12', '1', '0', '2016-04-07 23:03:42', '2016-04-07 23:03:42');
INSERT INTO `work_order_items` VALUES ('986', '467', '12', '1', '0', '2016-04-07 23:03:43', '2016-04-07 23:03:43');
INSERT INTO `work_order_items` VALUES ('987', '468', '12', '1', '0', '2016-04-07 23:03:47', '2016-04-07 23:03:47');
INSERT INTO `work_order_items` VALUES ('988', '469', '12', '1', '0', '2016-04-07 23:03:47', '2016-04-07 23:03:47');
INSERT INTO `work_order_items` VALUES ('989', '470', '12', '1', '0', '2016-04-07 23:03:49', '2016-04-07 23:03:49');
INSERT INTO `work_order_items` VALUES ('990', '471', '12', '1', '0', '2016-04-07 23:05:25', '2016-04-07 23:05:25');
INSERT INTO `work_order_items` VALUES ('991', '472', '12', '1', '0', '2016-04-07 23:05:27', '2016-04-07 23:05:27');
INSERT INTO `work_order_items` VALUES ('992', '473', '12', '1', '0', '2016-04-07 23:05:35', '2016-04-07 23:05:35');
INSERT INTO `work_order_items` VALUES ('993', '474', '12', '1', '0', '2016-04-07 23:49:00', '2016-04-07 23:49:00');
INSERT INTO `work_order_items` VALUES ('994', '475', '12', '1', '0', '2016-04-07 23:49:01', '2016-04-07 23:49:01');
INSERT INTO `work_order_items` VALUES ('995', '476', '12', '1', '0', '2016-04-07 23:49:03', '2016-04-07 23:49:03');
INSERT INTO `work_order_items` VALUES ('996', '477', '12', '2', '0', '2016-04-07 23:49:06', '2016-04-07 23:49:06');
INSERT INTO `work_order_items` VALUES ('997', '478', '12', '1', '0', '2016-04-07 23:49:11', '2016-04-07 23:49:11');
INSERT INTO `work_order_items` VALUES ('998', '479', '12', '1', '0', '2016-04-07 23:49:14', '2016-04-07 23:49:14');
INSERT INTO `work_order_items` VALUES ('999', '480', '12', '1', '0', '2016-04-08 00:01:13', '2016-04-08 00:01:13');
INSERT INTO `work_order_items` VALUES ('1000', '481', '12', '1', '0', '2016-04-08 00:01:18', '2016-04-08 00:01:18');
INSERT INTO `work_order_items` VALUES ('1001', '482', '12', '1', '0', '2016-04-08 00:01:19', '2016-04-08 00:01:19');
INSERT INTO `work_order_items` VALUES ('1002', '483', '12', '1', '0', '2016-04-08 00:01:21', '2016-04-08 00:01:21');
INSERT INTO `work_order_items` VALUES ('1003', '484', '12', '1', '0', '2016-04-08 00:01:26', '2016-04-08 00:01:26');
INSERT INTO `work_order_items` VALUES ('1004', '485', '12', '1', '0', '2016-04-08 00:50:33', '2016-04-08 00:50:33');
INSERT INTO `work_order_items` VALUES ('1005', '486', '12', '1', '0', '2016-04-08 00:50:54', '2016-04-08 00:50:54');
INSERT INTO `work_order_items` VALUES ('1006', '487', '12', '1', '0', '2016-04-08 00:51:27', '2016-04-08 00:51:27');
INSERT INTO `work_order_items` VALUES ('1007', '488', '12', '1', '0', '2016-04-08 00:51:37', '2016-04-08 00:51:37');
INSERT INTO `work_order_items` VALUES ('1008', '489', '12', '1', '0', '2016-04-08 00:56:09', '2016-04-08 00:56:09');
INSERT INTO `work_order_items` VALUES ('1009', '490', '12', '1', '0', '2016-04-08 00:56:12', '2016-04-08 00:56:12');
INSERT INTO `work_order_items` VALUES ('1010', '491', '12', '1', '0', '2016-04-08 00:56:14', '2016-04-08 00:56:14');
INSERT INTO `work_order_items` VALUES ('1011', '492', '12', '1', '0', '2016-04-08 00:56:15', '2016-04-08 00:56:15');
INSERT INTO `work_order_items` VALUES ('1012', '493', '12', '1', '0', '2016-04-08 00:56:16', '2016-04-08 00:56:16');
INSERT INTO `work_order_items` VALUES ('1013', '494', '12', '1', '0', '2016-04-08 00:56:25', '2016-04-08 00:56:25');
INSERT INTO `work_order_items` VALUES ('1014', '495', '12', '2', '0', '2016-04-08 00:59:14', '2016-04-08 00:59:14');
INSERT INTO `work_order_items` VALUES ('1015', '495', '4', '1', '0', '2016-04-08 00:59:14', '2016-04-08 00:59:14');
INSERT INTO `work_order_items` VALUES ('1016', '495', '2', '1', '0', '2016-04-08 00:59:14', '2016-04-08 00:59:14');
INSERT INTO `work_order_items` VALUES ('1017', '496', '12', '2', '0', '2016-04-08 00:59:19', '2016-04-08 00:59:19');
INSERT INTO `work_order_items` VALUES ('1018', '496', '4', '1', '0', '2016-04-08 00:59:19', '2016-04-08 00:59:19');
INSERT INTO `work_order_items` VALUES ('1019', '496', '2', '1', '0', '2016-04-08 00:59:19', '2016-04-08 00:59:19');
INSERT INTO `work_order_items` VALUES ('1020', '497', '12', '2', '0', '2016-04-08 00:59:27', '2016-04-08 00:59:27');
INSERT INTO `work_order_items` VALUES ('1021', '497', '4', '1', '0', '2016-04-08 00:59:27', '2016-04-08 00:59:27');
INSERT INTO `work_order_items` VALUES ('1022', '497', '2', '1', '0', '2016-04-08 00:59:27', '2016-04-08 00:59:27');
INSERT INTO `work_order_items` VALUES ('1023', '498', '12', '2', '0', '2016-04-08 01:01:29', '2016-04-08 01:01:29');
INSERT INTO `work_order_items` VALUES ('1024', '498', '4', '1', '0', '2016-04-08 01:01:29', '2016-04-08 01:01:29');
INSERT INTO `work_order_items` VALUES ('1025', '498', '2', '1', '0', '2016-04-08 01:01:29', '2016-04-08 01:01:29');

-- ----------------------------
-- Table structure for work_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `work_password_resets`;
CREATE TABLE `work_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`) USING BTREE,
  KEY `password_resets_token_index` (`token`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for work_posts
-- ----------------------------
DROP TABLE IF EXISTS `work_posts`;
CREATE TABLE `work_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `lang_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isHot` tinyint(1) NOT NULL DEFAULT '0',
  `isSticky` tinyint(1) NOT NULL DEFAULT '0',
  `isPublish` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `publish_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `posts_user_id_index` (`user_id`) USING BTREE,
  KEY `posts_lang_id_index` (`lang_id`) USING BTREE,
  KEY `posts_category_id_index` (`category_id`) USING BTREE,
  CONSTRAINT `work_posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `work_categories_article` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_posts_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `work_post_langs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_posts_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `work_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_posts
-- ----------------------------

-- ----------------------------
-- Table structure for work_post_comments
-- ----------------------------
DROP TABLE IF EXISTS `work_post_comments`;
CREATE TABLE `work_post_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `post_comments_post_id_index` (`post_id`) USING BTREE,
  CONSTRAINT `work_post_comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `work_posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_post_comments
-- ----------------------------

-- ----------------------------
-- Table structure for work_post_langs
-- ----------------------------
DROP TABLE IF EXISTS `work_post_langs`;
CREATE TABLE `work_post_langs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_post_langs
-- ----------------------------

-- ----------------------------
-- Table structure for work_post_tag
-- ----------------------------
DROP TABLE IF EXISTS `work_post_tag`;
CREATE TABLE `work_post_tag` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `post_tag_post_id_index` (`post_id`) USING BTREE,
  KEY `post_tag_tag_id_index` (`tag_id`) USING BTREE,
  CONSTRAINT `work_post_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `work_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_post_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `work_tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_post_tag
-- ----------------------------

-- ----------------------------
-- Table structure for work_products
-- ----------------------------
DROP TABLE IF EXISTS `work_products`;
CREATE TABLE `work_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `listed_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `selling_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `feature_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT '1',
  `promotion` int(11) NOT NULL DEFAULT '0',
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `products_category_id_index` (`category_id`) USING BTREE,
  CONSTRAINT `work_products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `work_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_products
-- ----------------------------
INSERT INTO `work_products` VALUES ('1', '4', '#trangle#1', 'Bikini coco Triangle #1', 'bikini-coco-triangle-1', '300000.00', '0.00', '<p>Bikini coco Triangle #1</p>\r\n', '<p><img alt=\"\" src=\"/uploads/images/feedback/Picture%201371.jpg\" style=\"height:500px; width:500px\" /></p>\r\n', '2016-02-23-1.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-02-23 20:43:00', '2016-04-07 23:56:17');
INSERT INTO `work_products` VALUES ('2', '3', '#mix#2', 'Bikini coco Mix #2', 'bikini-coco-mix-2', '270000.00', '0.00', '<p>Bikini coco Mix #2</p>\r\n', '<p><img alt=\"\" src=\"/uploads/images/feedback/Picture%202290.jpg\" style=\"height:667px; width:500px\" /></p>\r\n', '2016-03-06Picture 1541.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-02-23 20:43:19', '2016-04-07 23:56:45');
INSERT INTO `work_products` VALUES ('3', '3', '#', 'Bikini coco Mix #3', 'bikini-coco-mix-3', '270000.00', '0.00', '<p>Bikini coco Mix #3</p>\r\n', '<p><img alt=\"\" src=\"/uploads/images/feedback/Picture%204693.jpg\" style=\"height:500px; width:500px\" /></p>\r\n', '2016-03-06Picture 1240.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-02-23 20:44:12', '2016-04-07 23:58:00');
INSERT INTO `work_products` VALUES ('4', '1', '#Ao2', 'Bikini coco Áo #2', 'bikini-coco-ao-2', '140000.00', '0.00', '<p>Bikini coco Áo #2</p>\r\n', '', '2016-03-0211088191_838228129582378_1481948740939677179_n.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-02 00:22:30', '2016-04-07 23:56:31');
INSERT INTO `work_products` VALUES ('5', '3', '#mix1', 'Bikini coco mix #1', 'bikini-coco-mix-1', '270000.00', '0.00', '<p>Bikini coco mix #1</p>\r\n', '<p><img alt=\"\" src=\"/uploads/images/feedback/Picture%204693.jpg\" style=\"height:500px; width:500px\" /></p>\r\n', '2016-03-02-11091385_838228072915717_2920743502012332087_n.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-02 00:23:05', '2016-04-07 23:58:12');
INSERT INTO `work_products` VALUES ('6', '3', '#mix4', 'Bikini coco Mix #4', 'bikini-coco-mix-4', '270000.00', '0.00', '<p>Bikini coco Mix #4</p>\r\n', '', '2016-03-06Picture 1894.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-02 00:23:18', '2016-04-07 23:58:25');
INSERT INTO `work_products` VALUES ('7', '3', '#', 'Bikini coco Mix #5', 'bikini-coco-mix-5', '270000.00', '0.00', '<p>Bikini coco Mix #</p>\r\n', '', '2016-03-06-Picture 2280.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-06 16:12:56', '2016-04-07 23:58:27');
INSERT INTO `work_products` VALUES ('8', '3', '#', 'Bikini coco Mix #6', 'bikini-coco-mix-6', '270000.00', '0.00', '<p>Bikini coco Mix #5</p>\r\n', '', '2016-03-06-Picture 2395.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-06 16:13:32', '2016-04-07 23:58:30');
INSERT INTO `work_products` VALUES ('9', '3', '#', 'Bikini coco Mix #6', 'bikini-coco-mix-6', '270000.00', '0.00', '<p>Bikini coco Mix #</p>\r\n', '', '2016-03-06-Picture 2342.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-06 16:14:53', '2016-04-07 23:58:53');
INSERT INTO `work_products` VALUES ('10', '3', '#', 'Bikini coco Mix #7', 'bikini-coco-mix-7', '270000.00', '0.00', '<p>Bikini coco Mix #7</p>\r\n', '', '2016-03-06-Picture 2362.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-06 16:15:14', '2016-04-07 23:58:58');
INSERT INTO `work_products` VALUES ('11', '3', '#', 'bikini coco #thanhtoan', 'bikini-coco-thanhtoan', '2000.00', '0.00', '<p>bikini coco #thanhtoan</p>\r\n', '<p><img alt=\"\" src=\"/uploads/images/Picture%20871.jpg\" style=\"height:500px; width:500px\" /><img alt=\"\" src=\"/uploads/images/Picture%20917.png\" style=\"height:667px; width:500px\" /></p>\r\n', '2016-03-06-Picture 1541-003.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-03-06 17:36:08', '2016-04-07 23:05:16');
INSERT INTO `work_products` VALUES ('12', '1', '#ao1', 'Bikini coco áo #1', 'bikini-coco-ao-1', '140000.00', '0.00', '<p>Bikini coco áo #1</p>\r\n', '<p><img alt=\"\" src=\"/uploads/images/feedback/Picture%20935.png\" style=\"height:667px; width:500px\" /><img alt=\"\" src=\"/uploads/images/feedback/Picture%20936.png\" style=\"height:667px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-04-07-Picture 977.jpg', '1', '0', null, '', '', '0', '1', '1', '2016-04-07 21:34:41', '2016-04-07 23:59:03');
INSERT INTO `work_products` VALUES ('13', '1', '#132', 'luogn test', 'luogn-test', '123123.00', '0.00', 'dess', '<p>123</p>\r\n', '2016-04-08-Biniki_coco   Admin site.png', '1', '0', null, 'bikini coco', 'bikini coco', '0', '1', '1', '2016-04-08 01:15:53', '2016-04-08 01:15:53');

-- ----------------------------
-- Table structure for work_product_att
-- ----------------------------
DROP TABLE IF EXISTS `work_product_att`;
CREATE TABLE `work_product_att` (
  `product_id` int(10) unsigned NOT NULL,
  `att_id` int(10) unsigned NOT NULL,
  KEY `product_att_product_id_index` (`product_id`) USING BTREE,
  KEY `product_att_att_id_index` (`att_id`) USING BTREE,
  CONSTRAINT `work_product_att_ibfk_1` FOREIGN KEY (`att_id`) REFERENCES `work_atts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_product_att_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `work_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_product_att
-- ----------------------------
INSERT INTO `work_product_att` VALUES ('1', '1');
INSERT INTO `work_product_att` VALUES ('2', '1');
INSERT INTO `work_product_att` VALUES ('3', '1');
INSERT INTO `work_product_att` VALUES ('3', '2');
INSERT INTO `work_product_att` VALUES ('7', '2');
INSERT INTO `work_product_att` VALUES ('11', '1');
INSERT INTO `work_product_att` VALUES ('11', '2');
INSERT INTO `work_product_att` VALUES ('11', '4');
INSERT INTO `work_product_att` VALUES ('11', '5');

-- ----------------------------
-- Table structure for work_product_galeries
-- ----------------------------
DROP TABLE IF EXISTS `work_product_galeries`;
CREATE TABLE `work_product_galeries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_galeries_product_id_index` (`product_id`) USING BTREE,
  CONSTRAINT `work_product_galeries_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `work_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_product_galeries
-- ----------------------------
INSERT INTO `work_product_galeries` VALUES ('1', '3', '1.jpg', '0', '2', '2', '2016-02-23 20:44:12', '2016-02-23 20:44:12');
INSERT INTO `work_product_galeries` VALUES ('2', '3', '11088191_838228129582378_1481948740939677179_n.jpg', '0', '2', '2', '2016-02-23 20:44:12', '2016-02-23 20:44:12');
INSERT INTO `work_product_galeries` VALUES ('3', '3', '11091385_838228072915717_2920743502012332087_n.jpg', '0', '2', '2', '2016-02-23 20:44:12', '2016-02-23 20:44:12');
INSERT INTO `work_product_galeries` VALUES ('4', '6', '11091385_838228072915717_2920743502012332087_n.jpg', '0', '1', '1', '2016-03-02 00:23:18', '2016-03-02 00:23:18');
INSERT INTO `work_product_galeries` VALUES ('5', '7', 'Picture 2280.jpg', '0', '1', '1', '2016-03-06 16:12:56', '2016-03-06 16:12:56');
INSERT INTO `work_product_galeries` VALUES ('6', '8', 'Picture 2395.jpg', '0', '1', '1', '2016-03-06 16:13:32', '2016-03-06 16:13:32');
INSERT INTO `work_product_galeries` VALUES ('7', '9', 'Picture 2342.jpg', '0', '1', '1', '2016-03-06 16:14:53', '2016-03-06 16:14:53');
INSERT INTO `work_product_galeries` VALUES ('8', '10', 'Picture 2362.jpg', '0', '1', '1', '2016-03-06 16:15:14', '2016-03-06 16:15:14');
INSERT INTO `work_product_galeries` VALUES ('9', '11', 'Picture 1541-001.jpg', '0', '1', '1', '2016-03-06 17:36:09', '2016-03-06 17:36:09');
INSERT INTO `work_product_galeries` VALUES ('10', '11', 'Picture 1541-002.jpg', '0', '1', '1', '2016-03-06 17:36:09', '2016-03-06 17:36:09');
INSERT INTO `work_product_galeries` VALUES ('11', '11', 'Picture 1541-003.jpg', '0', '1', '1', '2016-03-06 17:36:09', '2016-03-06 17:36:09');
INSERT INTO `work_product_galeries` VALUES ('12', '11', 'Picture 1541-004.jpg', '0', '1', '1', '2016-03-06 17:36:09', '2016-03-06 17:36:09');
INSERT INTO `work_product_galeries` VALUES ('13', '12', 'Picture 977.jpg', '0', '1', '1', '2016-04-07 21:34:41', '2016-04-07 21:34:41');
INSERT INTO `work_product_galeries` VALUES ('14', '13', 'Biniki_coco   Admin site.png', '0', '1', '1', '2016-04-08 01:15:53', '2016-04-08 01:15:53');

-- ----------------------------
-- Table structure for work_product_rates
-- ----------------------------
DROP TABLE IF EXISTS `work_product_rates`;
CREATE TABLE `work_product_rates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_rates_product_id_index` (`product_id`) USING BTREE,
  CONSTRAINT `work_product_rates_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `work_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_product_rates
-- ----------------------------

-- ----------------------------
-- Table structure for work_roles
-- ----------------------------
DROP TABLE IF EXISTS `work_roles`;
CREATE TABLE `work_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_roles
-- ----------------------------
INSERT INTO `work_roles` VALUES ('1', 'admin', '100', '0', '2016-02-22 00:04:03', '2016-02-22 00:04:03');
INSERT INTO `work_roles` VALUES ('2', 'shop_manager', '80', '0', '2016-02-22 00:04:03', '2016-02-22 00:04:03');
INSERT INTO `work_roles` VALUES ('3', 'article_manager', '60', '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_roles` VALUES ('4', 'customer', '10', '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');

-- ----------------------------
-- Table structure for work_role_module
-- ----------------------------
DROP TABLE IF EXISTS `work_role_module`;
CREATE TABLE `work_role_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_id` int(10) unsigned NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role_module_role_id_index` (`role_id`) USING BTREE,
  KEY `role_module_father_id_foreign` (`father_id`) USING BTREE,
  CONSTRAINT `work_role_module_ibfk_1` FOREIGN KEY (`father_id`) REFERENCES `work_role_module` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_role_module_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `work_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_role_module
-- ----------------------------
INSERT INTO `work_role_module` VALUES ('1', '2', 'shop_manager', '1', null, null, '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_role_module` VALUES ('2', '3', 'article_manager', '2', null, null, '0', '2016-02-22 00:04:04', '2016-02-22 00:04:04');

-- ----------------------------
-- Table structure for work_scripts
-- ----------------------------
DROP TABLE IF EXISTS `work_scripts`;
CREATE TABLE `work_scripts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `script` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_scripts
-- ----------------------------

-- ----------------------------
-- Table structure for work_slides
-- ----------------------------
DROP TABLE IF EXISTS `work_slides`;
CREATE TABLE `work_slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_slides
-- ----------------------------

-- ----------------------------
-- Table structure for work_tags
-- ----------------------------
DROP TABLE IF EXISTS `work_tags`;
CREATE TABLE `work_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lang_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tags_lang_id_index` (`lang_id`) USING BTREE,
  CONSTRAINT `work_tags_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `work_post_langs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_tags
-- ----------------------------

-- ----------------------------
-- Table structure for work_theme_options
-- ----------------------------
DROP TABLE IF EXISTS `work_theme_options`;
CREATE TABLE `work_theme_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `showroom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_google_plus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_pinterest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_theme_options
-- ----------------------------
INSERT INTO `work_theme_options` VALUES ('1', '2016-02-26-logo2.png', 'www.mir.vn', 'bikinicoco@gmail.com', '1900 0000', 'Ha Noi', 'facebook.com', 'twitter.com', 'google.com', 'pinterest.com', '2016-02-22 00:04:04', '2016-04-07 22:55:36');

-- ----------------------------
-- Table structure for work_users
-- ----------------------------
DROP TABLE IF EXISTS `work_users`;
CREATE TABLE `work_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_users
-- ----------------------------
INSERT INTO `work_users` VALUES ('1', 'admin', 'admin@gmail.com', '$2y$10$SY2gq8mTSJzJLA/4tzu9C.j0vG.y5QErrGKzpP4tV4bRB4spLrjI6', null, '2016-02-22 00:04:03', '2016-02-22 00:04:03');
INSERT INTO `work_users` VALUES ('2', 'ShopManager', 'shop_manager@shop.vn', '$2y$10$fGocapDCwwo3s5oaPn.Ieuj0z8sF9rc923.XQPQjKo1/PNRDHq7VS', null, '2016-02-22 00:04:03', '2016-02-22 00:04:03');
INSERT INTO `work_users` VALUES ('3', 'ArticleManager', 'article_manager@shop.vn', '$2y$10$aZKyI.8MKeLfRgayl1hqceW7DGevvaZhKD.tlMNGV6CdNsbqxhwRu', null, '2016-02-22 00:04:03', '2016-02-22 00:04:03');
INSERT INTO `work_users` VALUES ('4', 'MyNguyen', 'mynguyen@gmail.com', '$2y$10$598/WKf5puJQdNW7lDXqweInNWA.qGRrseQFUkx/6nnkSGmJP3K8O', null, '2016-03-06 17:28:13', '2016-03-06 17:28:13');

-- ----------------------------
-- Table structure for work_user_info
-- ----------------------------
DROP TABLE IF EXISTS `work_user_info`;
CREATE TABLE `work_user_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_info_user_id_index` (`user_id`) USING BTREE,
  CONSTRAINT `work_user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `work_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_user_info
-- ----------------------------
INSERT INTO `work_user_info` VALUES ('1', '1', '', '', '', '', '0000-00-00', '2016-02-22 00:04:03', '2016-02-22 00:04:03');

-- ----------------------------
-- Table structure for work_user_role
-- ----------------------------
DROP TABLE IF EXISTS `work_user_role`;
CREATE TABLE `work_user_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_role_user_id_index` (`user_id`) USING BTREE,
  KEY `user_role_role_id_index` (`role_id`) USING BTREE,
  CONSTRAINT `work_user_role_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `work_roles` (`id`),
  CONSTRAINT `work_user_role_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `work_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of work_user_role
-- ----------------------------
INSERT INTO `work_user_role` VALUES ('1', '1', '1', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_user_role` VALUES ('2', '2', '2', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_user_role` VALUES ('3', '3', '3', '2016-02-22 00:04:04', '2016-02-22 00:04:04');
INSERT INTO `work_user_role` VALUES ('4', '4', '1', '2016-03-06 17:28:14', '2016-03-06 17:28:14');
