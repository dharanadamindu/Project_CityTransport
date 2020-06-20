/*
 Navicat Premium Data Transfer

 Source Server         : Localhost mysql
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : citytransport

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 21/06/2020 00:57:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bus_employees
-- ----------------------------
DROP TABLE IF EXISTS `bus_employees`;
CREATE TABLE `bus_employees`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bus_employees_bus_id_foreign`(`bus_id`) USING BTREE,
  INDEX `bus_employees_employee_id_foreign`(`employee_id`) USING BTREE,
  CONSTRAINT `bus_employees_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `bus_employees_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bus_employees
-- ----------------------------
INSERT INTO `bus_employees` VALUES (1, 1, 2, '2020-06-20 22:10:57', '2020-06-20 22:11:00');

-- ----------------------------
-- Table structure for buses
-- ----------------------------
DROP TABLE IF EXISTS `buses`;
CREATE TABLE `buses`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `b_regno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buses
-- ----------------------------
INSERT INTO `buses` VALUES (1, 'MTB-001', 'LONG', 'LUxcery', '2020-06-20 21:26:59', '2020-06-20 21:27:01');

-- ----------------------------
-- Table structure for cardpayments
-- ----------------------------
DROP TABLE IF EXISTS `cardpayments`;
CREATE TABLE `cardpayments`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cardNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `expire` date NOT NULL,
  `cvv` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `balance` decimal(6, 2) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bdate` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES (2, 'charitha', 'Address1,Address2,Address 3.', 'Driver', '9329444056', 'm', '0789700346', '1993-10-20', '2020-06-20 16:36:52', '2020-06-20 16:36:52');

-- ----------------------------
-- Table structure for fair_halt
-- ----------------------------
DROP TABLE IF EXISTS `fair_halt`;
CREATE TABLE `fair_halt`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `fair_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `halt_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fair_halt_fair_id_foreign`(`fair_id`) USING BTREE,
  INDEX `fair_halt_halt_id_foreign`(`halt_id`) USING BTREE,
  CONSTRAINT `fair_halt_fair_id_foreign` FOREIGN KEY (`fair_id`) REFERENCES `fairs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fair_halt_halt_id_foreign` FOREIGN KEY (`halt_id`) REFERENCES `halts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fair_halt
-- ----------------------------
INSERT INTO `fair_halt` VALUES (1, '20', '2020-06-20 22:11:44', '2020-06-20 22:11:47', 1, 1);

-- ----------------------------
-- Table structure for fairs
-- ----------------------------
DROP TABLE IF EXISTS `fairs`;
CREATE TABLE `fairs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `from` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bfair` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fairs
-- ----------------------------
INSERT INTO `fairs` VALUES (1, 'Piliyandala', 'Kohuwala', '20', '45', '2020-06-20 22:12:29', '2020-06-20 22:12:31');
INSERT INTO `fairs` VALUES (2, 'Piliyandala', 'Bokundara', '10', '15', '2020-06-20 23:24:10', '2020-06-20 23:24:14');

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `feedback_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for halts
-- ----------------------------
DROP TABLE IF EXISTS `halts`;
CREATE TABLE `halts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `haddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lat` double NULL DEFAULT NULL,
  `lng` double NULL DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `timetable` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `halts_bus_id_foreign`(`bus_id`) USING BTREE,
  INDEX `halts_route_id_foreign`(`route_id`) USING BTREE,
  CONSTRAINT `halts_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `halts_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `route_rs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of halts
-- ----------------------------
INSERT INTO `halts` VALUES (1, 'Piliyandala', 'PILI1', 72.32658, 86.32568, 'main bus tand ', '8.00 A.M', '2020-06-20 22:14:13', '2020-06-20 22:14:15', 1, 1);
INSERT INTO `halts` VALUES (2, 'Bokundara', 'BOK1', 73.216, 72.59855, 'bokundra halt', '8.15 A.M', '2020-06-20 22:36:20', '2020-06-20 22:36:22', 1, 1);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_05_01_171931_create_nearbies_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_07_073309_create_cardpayments_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_07_083503_create_buses_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_12_07_083642_create_seats_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_12_07_083811_create_routetimes_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_12_07_084011_create_route_rs_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_07_084227_create_profiles_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_12_07_084609_create_halts_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_12_07_084927_create_feedback_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_12_07_085044_create_fairs_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_12_07_085140_create_employees_table', 1);
INSERT INTO `migrations` VALUES (14, '2019_12_07_110336_create_fair_halt_table', 1);
INSERT INTO `migrations` VALUES (15, '2019_12_25_044706_create_bus_employees_table', 1);

-- ----------------------------
-- Table structure for nearbies
-- ----------------------------
DROP TABLE IF EXISTS `nearbies`;
CREATE TABLE `nearbies`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lat` double(10, 6) NULL DEFAULT NULL,
  `lng` double(10, 6) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for route_rs
-- ----------------------------
DROP TABLE IF EXISTS `route_rs`;
CREATE TABLE `route_rs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `routeNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `startLocation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endLocation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `halts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of route_rs
-- ----------------------------
INSERT INTO `route_rs` VALUES (1, '120', 'Kesbawa', 'Pettah', 'Piliyandala,Bokundara,Boralasgamuwa,Raththanapitiya,Papiliyana,Kohuwala,Pettah', 30, '2020-06-20 22:17:07', '2020-06-20 22:17:10');

-- ----------------------------
-- Table structure for routetimes
-- ----------------------------
DROP TABLE IF EXISTS `routetimes`;
CREATE TABLE `routetimes`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `trip_time` datetime(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `routetimes_bus_id_foreign`(`bus_id`) USING BTREE,
  CONSTRAINT `routetimes_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of routetimes
-- ----------------------------
INSERT INTO `routetimes` VALUES (1, '2020-06-20 22:18:28', '2020-06-20 22:18:32', '2020-06-20 22:18:34', 1);

-- ----------------------------
-- Table structure for seats
-- ----------------------------
DROP TABLE IF EXISTS `seats`;
CREATE TABLE `seats`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `seatNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `bus_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `seats_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `seats_bus_id_foreign`(`bus_id`) USING BTREE,
  CONSTRAINT `seats_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `seats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Dharana Damindu', '1', 'admin@mail.com', NULL, '$2y$10$ejYsg8tsSUSIviO5MM.zvuz8zyYFuRDyAtPxe3jPgFPvUW0PPyzw2', NULL, '2020-06-20 14:47:46', '2020-06-20 14:47:46');

SET FOREIGN_KEY_CHECKS = 1;
