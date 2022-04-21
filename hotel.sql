/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3307
 Source Schema         : ujikom

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 09/04/2022 17:24:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bukti_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `bukti_pembayaran`;
CREATE TABLE `bukti_pembayaran`  (
  `id` bigint NOT NULL,
  `user_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bukti_pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for facilities
-- ----------------------------
DROP TABLE IF EXISTS `facilities`;
CREATE TABLE `facilities`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `facility_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of facilities
-- ----------------------------
INSERT INTO `facilities` VALUES (2, 'kolam renang', 'kolam renang degan air terbersih dan luar 20 meter', '2022-04-08 14:17:12', '2022-04-09 09:26:42', 'image_6.jpg');

-- ----------------------------
-- Table structure for facility_rooms
-- ----------------------------
DROP TABLE IF EXISTS `facility_rooms`;
CREATE TABLE `facility_rooms`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `facility_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of facility_rooms
-- ----------------------------
INSERT INTO `facility_rooms` VALUES (6, 'tv', '2022-03-31 07:31:57', '2022-04-09 10:01:45');
INSERT INTO `facility_rooms` VALUES (7, 'kasur', '2022-03-31 07:32:00', '2022-03-31 07:32:00');
INSERT INTO `facility_rooms` VALUES (8, 'kulkas', '2022-03-31 07:32:05', '2022-03-31 07:32:05');
INSERT INTO `facility_rooms` VALUES (9, 'ac', '2022-03-31 07:32:10', '2022-03-31 07:32:10');
INSERT INTO `facility_rooms` VALUES (10, 'sova', '2022-03-31 07:32:14', '2022-03-31 07:32:14');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for log_activities
-- ----------------------------
DROP TABLE IF EXISTS `log_activities`;
CREATE TABLE `log_activities`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `informaiton` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 98 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of log_activities
-- ----------------------------
INSERT INTO `log_activities` VALUES (70, '11', '27', 'Anda melakukan check in pada waktu2022-04-09 10:09:52', '2022-04-09 10:09:52', '2022-04-09 10:09:52');
INSERT INTO `log_activities` VALUES (71, '11', '27', 'Anda melakukan check out pada waktu 2022-04-09 10:11:02', '2022-04-09 10:11:02', '2022-04-09 10:11:02');
INSERT INTO `log_activities` VALUES (72, '13', '28', 'Proses pembayaran pada waktu 2022-04-09 10:13:47', '2022-04-09 10:13:47', '2022-04-09 10:13:47');
INSERT INTO `log_activities` VALUES (73, '17', '32', 'Anda telah melakukan booked dengan id transaksi 32 pada waktu 2022-04-09 10:27:47', '2022-04-09 10:27:47', '2022-04-09 10:27:47');
INSERT INTO `log_activities` VALUES (74, '17', '33', 'Anda telah melakukan booked dengan id transaksi 33 pada waktu 2022-04-09 10:28:31', '2022-04-09 10:28:31', '2022-04-09 10:28:31');
INSERT INTO `log_activities` VALUES (75, '13', '32', 'Proses pembayaran pada waktu 2022-04-09 10:33:09', '2022-04-09 10:33:09', '2022-04-09 10:33:09');
INSERT INTO `log_activities` VALUES (76, '13', '32', 'Proses pembayaran pada waktu 2022-04-09 10:33:17', '2022-04-09 10:33:17', '2022-04-09 10:33:17');
INSERT INTO `log_activities` VALUES (77, '17', '32', 'Customer melakukan check in pada waktu 2022-04-09 10:40:22', '2022-04-09 10:40:22', '2022-04-09 10:40:22');
INSERT INTO `log_activities` VALUES (78, '17', '32', 'Customer melakukan check out pada waktu 2022-04-09 10:43:15', '2022-04-09 10:43:15', '2022-04-09 10:43:15');
INSERT INTO `log_activities` VALUES (79, '17', '32', 'Customer melakukan check out pada waktu 2022-04-09 10:49:46', '2022-04-09 10:49:46', '2022-04-09 10:49:46');
INSERT INTO `log_activities` VALUES (80, '18', '34', 'Anda telah melakukan booked dengan id transaksi 34 pada waktu 2022-04-09 11:05:23', '2022-04-09 11:05:23', '2022-04-09 11:05:23');
INSERT INTO `log_activities` VALUES (81, '17', '33', 'Anda telah melakukan pengiriman bukti pembayaran pada waktu 2022-04-09 10:28:31', '2022-04-09 14:06:28', '2022-04-09 14:06:28');
INSERT INTO `log_activities` VALUES (82, '17', '33', 'Anda telah melakukan pengiriman bukti pembayaran pada waktu 2022-04-09 10:28:31', '2022-04-09 14:10:15', '2022-04-09 14:10:15');
INSERT INTO `log_activities` VALUES (83, '17', '33', 'Anda telah melakukan pengiriman bukti pembayaran pada waktu 2022-04-09 10:28:31', '2022-04-09 14:11:56', '2022-04-09 14:11:56');
INSERT INTO `log_activities` VALUES (84, '13', '33', 'Proses pembayaran pada waktu 2022-04-09 14:29:36', '2022-04-09 14:29:36', '2022-04-09 14:29:36');
INSERT INTO `log_activities` VALUES (85, '13', '33', 'Proses pembayaran pada waktu 2022-04-09 14:30:31', '2022-04-09 14:30:31', '2022-04-09 14:30:31');
INSERT INTO `log_activities` VALUES (86, '17', '33', 'Customer melakukan check in pada waktu 2022-04-09 14:30:35', '2022-04-09 14:30:35', '2022-04-09 14:30:35');
INSERT INTO `log_activities` VALUES (87, '17', '33', 'Customer melakukan check out pada waktu 2022-04-09 14:30:44', '2022-04-09 14:30:44', '2022-04-09 14:30:44');
INSERT INTO `log_activities` VALUES (88, '21', '35', 'Anda telah melakukan booked dengan id transaksi 35 pada waktu 2022-04-09 14:35:10', '2022-04-09 14:35:10', '2022-04-09 14:35:10');
INSERT INTO `log_activities` VALUES (89, '21', '35', 'Anda telah melakukan pengiriman bukti pembayaran pada waktu 2022-04-09 14:35:10', '2022-04-09 14:35:23', '2022-04-09 14:35:23');
INSERT INTO `log_activities` VALUES (90, '13', '35', 'Proses pembayaran pada waktu 2022-04-09 14:36:25', '2022-04-09 14:36:25', '2022-04-09 14:36:25');
INSERT INTO `log_activities` VALUES (91, '21', '35', 'Customer melakukan check in pada waktu 2022-04-09 14:36:30', '2022-04-09 14:36:30', '2022-04-09 14:36:30');
INSERT INTO `log_activities` VALUES (92, '21', '35', 'Customer melakukan check out pada waktu 2022-04-09 14:36:34', '2022-04-09 14:36:34', '2022-04-09 14:36:34');
INSERT INTO `log_activities` VALUES (93, '23', '36', 'Anda telah melakukan booked dengan id transaksi 36 pada waktu 2022-04-09 14:44:47', '2022-04-09 14:44:47', '2022-04-09 14:44:47');
INSERT INTO `log_activities` VALUES (94, '23', '36', 'Anda telah melakukan pengiriman bukti pembayaran pada waktu 2022-04-09 14:44:47', '2022-04-09 14:45:02', '2022-04-09 14:45:02');
INSERT INTO `log_activities` VALUES (95, '13', '36', 'Proses pembayaran pada waktu 2022-04-09 14:45:30', '2022-04-09 14:45:30', '2022-04-09 14:45:30');
INSERT INTO `log_activities` VALUES (96, '23', '36', 'Customer melakukan check in pada waktu 2022-04-09 14:45:33', '2022-04-09 14:45:33', '2022-04-09 14:45:33');
INSERT INTO `log_activities` VALUES (97, '23', '36', 'Customer melakukan check out pada waktu 2022-04-09 14:45:35', '2022-04-09 14:45:35', '2022-04-09 14:45:35');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 59 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (11, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (12, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (14, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (46, '2022_03_29_013654_create_fasilities_table', 2);
INSERT INTO `migrations` VALUES (47, '2022_03_29_013731_create_facility_rooms_table', 2);
INSERT INTO `migrations` VALUES (48, '2022_03_29_013800_create_payments_table', 2);
INSERT INTO `migrations` VALUES (49, '2022_03_29_013822_create_rooms_table', 2);
INSERT INTO `migrations` VALUES (54, '2022_03_29_013836_create_transactions_table', 3);
INSERT INTO `migrations` VALUES (55, '2022_03_29_013850_create_type_rooms_table', 3);
INSERT INTO `migrations` VALUES (56, '2022_03_31_014334_add_role_to_users_table', 4);
INSERT INTO `migrations` VALUES (57, '2022_03_31_061529_create_log_activities_table', 4);
INSERT INTO `migrations` VALUES (58, '2022_03_31_131953_add_image_to_facilities_table', 5);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for payments
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of payments
-- ----------------------------
INSERT INTO `payments` VALUES (1, '8', '1', '6000788', '2022-03-31 02:30:53', '2022-03-31 02:30:53');
INSERT INTO `payments` VALUES (2, '8', '2', '3000616', '2022-03-31 02:32:18', '2022-03-31 02:32:18');
INSERT INTO `payments` VALUES (3, '8', '3', '16000266', '2022-03-31 03:58:00', '2022-03-31 03:58:00');
INSERT INTO `payments` VALUES (4, '8', '4', '3000887', '2022-03-31 04:19:46', '2022-03-31 04:19:46');
INSERT INTO `payments` VALUES (5, '11', '1', '6000124', '2022-03-31 07:34:51', '2022-03-31 07:34:51');
INSERT INTO `payments` VALUES (6, '11', '2', '6000411', '2022-03-31 07:35:51', '2022-03-31 07:35:51');
INSERT INTO `payments` VALUES (7, '11', '3', '6000165', '2022-03-31 07:38:02', '2022-03-31 07:38:02');
INSERT INTO `payments` VALUES (8, '11', '4', '6000796', '2022-03-31 07:39:55', '2022-03-31 07:39:55');
INSERT INTO `payments` VALUES (9, '11', '5', '6000730', '2022-03-31 07:41:35', '2022-03-31 07:41:35');
INSERT INTO `payments` VALUES (10, '11', '6', '342000986', '2022-03-31 07:42:34', '2022-03-31 07:42:34');
INSERT INTO `payments` VALUES (11, '11', '7', '342000203', '2022-03-31 07:45:35', '2022-03-31 07:45:35');
INSERT INTO `payments` VALUES (12, '11', '8', '342000690', '2022-03-31 07:47:24', '2022-03-31 07:47:24');
INSERT INTO `payments` VALUES (13, '11', '9', '3000199', '2022-03-31 07:49:16', '2022-03-31 07:49:16');
INSERT INTO `payments` VALUES (14, '11', '10', '3000834', '2022-03-31 07:50:16', '2022-03-31 07:50:16');
INSERT INTO `payments` VALUES (15, '11', '11', '3000695', '2022-03-31 07:51:16', '2022-03-31 07:51:16');
INSERT INTO `payments` VALUES (16, '11', '12', '3000402', '2022-03-31 10:30:10', '2022-03-31 10:30:10');
INSERT INTO `payments` VALUES (17, '11', '13', '3000483', '2022-03-31 13:02:30', '2022-03-31 13:02:30');
INSERT INTO `payments` VALUES (18, '12', '14', '4000359', '2022-03-31 13:40:10', '2022-03-31 13:40:10');
INSERT INTO `payments` VALUES (19, '11', '15', '3000173', '2022-03-31 13:47:30', '2022-03-31 13:47:30');
INSERT INTO `payments` VALUES (20, '11', '16', '15000799', '2022-03-31 14:04:36', '2022-03-31 14:04:36');
INSERT INTO `payments` VALUES (21, '11', '17', '6000503', '2022-03-31 14:11:55', '2022-03-31 14:11:55');
INSERT INTO `payments` VALUES (22, '11', '18', '8000232', '2022-03-31 14:23:17', '2022-03-31 14:23:17');
INSERT INTO `payments` VALUES (23, '11', '19', '8000229', '2022-03-31 14:25:00', '2022-03-31 14:25:00');
INSERT INTO `payments` VALUES (24, '11', '20', '8000221', '2022-03-31 14:31:13', '2022-03-31 14:31:13');
INSERT INTO `payments` VALUES (25, '11', '21', '8000553', '2022-04-08 03:05:47', '2022-04-08 03:05:47');
INSERT INTO `payments` VALUES (26, '11', '22', '8000446', '2022-04-08 03:06:07', '2022-04-08 03:06:07');
INSERT INTO `payments` VALUES (27, '11', '23', '8000260', '2022-04-08 03:40:27', '2022-04-08 03:40:27');
INSERT INTO `payments` VALUES (28, '11', '24', '8000637', '2022-04-08 06:32:56', '2022-04-08 06:32:56');
INSERT INTO `payments` VALUES (29, '11', '25', '4000971', '2022-04-08 06:35:25', '2022-04-08 06:35:25');
INSERT INTO `payments` VALUES (30, '11', '26', '8000840', '2022-04-08 06:41:10', '2022-04-08 06:41:10');
INSERT INTO `payments` VALUES (31, '11', '27', '4000306', '2022-04-08 13:46:52', '2022-04-08 13:46:52');
INSERT INTO `payments` VALUES (32, '11', '28', '4000310', '2022-04-08 16:42:16', '2022-04-08 16:42:16');
INSERT INTO `payments` VALUES (33, '11', '29', '4000958', '2022-04-08 16:50:54', '2022-04-08 16:50:54');
INSERT INTO `payments` VALUES (34, '11', '30', '4000831', '2022-04-09 08:30:47', '2022-04-09 08:30:47');
INSERT INTO `payments` VALUES (35, '16', '31', '4000357', '2022-04-09 09:56:11', '2022-04-09 09:56:11');
INSERT INTO `payments` VALUES (36, '17', '32', '8000816', '2022-04-09 10:27:47', '2022-04-09 10:27:47');
INSERT INTO `payments` VALUES (37, '17', '33', '4000587', '2022-04-09 10:28:31', '2022-04-09 10:28:31');
INSERT INTO `payments` VALUES (38, '18', '34', '4000181', '2022-04-09 11:05:23', '2022-04-09 11:05:23');
INSERT INTO `payments` VALUES (39, '21', '35', '4000760', '2022-04-09 14:35:10', '2022-04-09 14:35:10');
INSERT INTO `payments` VALUES (40, '23', '36', '4000257', '2022-04-09 14:44:47', '2022-04-09 14:44:47');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for rooms
-- ----------------------------
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('v','r','o','os') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'v',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rooms
-- ----------------------------
INSERT INTO `rooms` VALUES (37, '6', '203', 'v', '2022-03-31 14:21:50', '2022-04-09 08:35:33');
INSERT INTO `rooms` VALUES (38, '6', '202', 'v', '2022-03-31 14:21:59', '2022-04-09 09:56:11');
INSERT INTO `rooms` VALUES (39, '5', '103', 'v', '2022-03-31 14:22:05', '2022-04-09 14:45:35');
INSERT INTO `rooms` VALUES (40, '5', '104', 'v', '2022-03-31 14:22:14', '2022-04-09 14:36:34');
INSERT INTO `rooms` VALUES (41, '5', '105', 'v', '2022-03-31 14:22:21', '2022-04-09 14:30:44');
INSERT INTO `rooms` VALUES (42, '6', '201', 'v', '2022-03-31 14:22:29', '2022-04-08 03:46:22');
INSERT INTO `rooms` VALUES (45, '5', '106', 'v', '2022-04-09 09:58:13', '2022-04-09 09:58:13');

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `many_room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('waiting for payment','process','verified','failed','cenceled','check in','check out') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting for payment',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES (33, '17', '41', '1', '2022-04-11 00:00:00', '2022-04-12 00:00:00', 'check out', '2022-04-09 10:28:31', '2022-04-09 14:30:44', 'image_6.jpg');
INSERT INTO `transactions` VALUES (35, '21', '40', '1', '2022-04-09 00:00:00', '2022-04-10 00:00:00', 'check out', '2022-04-09 14:35:10', '2022-04-09 14:36:34', 'room-1.jpg');
INSERT INTO `transactions` VALUES (36, '23', '39', '1', '2022-04-09 00:00:00', '2022-04-10 00:00:00', 'check out', '2022-04-09 14:44:47', '2022-04-09 14:45:35', 'room-5.jpg');

-- ----------------------------
-- Table structure for type_rooms
-- ----------------------------
DROP TABLE IF EXISTS `type_rooms`;
CREATE TABLE `type_rooms`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilities` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of type_rooms
-- ----------------------------
INSERT INTO `type_rooms` VALUES (5, 'Standar', '4000000', 'kulkas, ac', 'Hotel ini menyediakan fasilitas pendukung berupa ruang konferensi (meeting room), banquet hall, dan bar.', 'room-3.jpg', '2022-03-31 14:20:50', '2022-04-08 17:31:13');
INSERT INTO `type_rooms` VALUES (6, 'Deluxe', '4000000', 'tv, kasur', 'Hotel Winer is a budget hotel situated 3 km from the Palembang Indah Mall. The hotel offers free wifi and has a dining area as well as an in-house restaurant. It is 4 km from Ampera Bridge and provides standardised amenities at the best value.', 'room-4.jpg', '2022-03-31 14:21:29', '2022-04-08 17:34:23');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `role` enum('admin','resepsionis') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (11, 'Aziz muhammad fikhri', 'fikhrimuhammadaziz@gmail.com', NULL, '$2y$10$kYt0XD9sATrKVOrAdWwXLO6R7V6UBdtmGkdWCzMZ9qFXb1fzcuvVO', NULL, '2022-04-09 09:50:48', '2022-04-09 09:50:48', NULL, NULL);
INSERT INTO `users` VALUES (12, 'Muhammad Jikri Ramadhan', 'jikri@gmail.com', NULL, '$2y$10$005/pM2y6mDOtbDvRftGcu0EpTfHrJL4.ohpQaxhJ3y0W.UUptFgG', NULL, '2022-03-31 06:54:18', '2022-03-31 06:54:18', 'admin', '');
INSERT INTO `users` VALUES (13, 'Arjuna Arasyid', 'arjuna@gmail.com', NULL, '$2y$10$2FAZVxhgTvLnkUhhO/JWR.2Xjunv09rSSfKIemjdPtIilR5ztRHbS', NULL, '2022-03-31 06:54:18', '2022-03-31 06:54:18', 'resepsionis', '');
INSERT INTO `users` VALUES (16, 'fauzan', 'fauzan@gmail.com', NULL, '$2y$10$XXdL4Qg3BUcixvlPYSzWz.a96Q5WDlDJ4oBrZN.FpW..j6W6HxeVq', NULL, '2022-04-09 09:55:46', '2022-04-09 09:55:46', NULL, NULL);
INSERT INTO `users` VALUES (17, 'ilham', 'Ilham@gamail.com', NULL, '$2y$10$PFaQjYEwQjcJeItT0ULxiOaqhlrSkCBq1XJlUqHk2VCU/eU8PcinS', NULL, '2022-04-09 10:26:49', '2022-04-09 10:26:49', NULL, NULL);
INSERT INTO `users` VALUES (18, 'faatir', 'fatir@gmail.com', NULL, '$2y$10$VlYqNE5dgjagXSI8/M5AFeGdGsNl5ogfwPYUlYnUeCNU9OmTzwSAW', NULL, '2022-04-09 10:55:09', '2022-04-09 10:55:09', NULL, NULL);
INSERT INTO `users` VALUES (19, 'syukri', 'syukri@gmail.com', NULL, '$2y$10$/ihHwEITqDFRynQ9YPwPg.duH5xA4Ibs49ufM6j5tbboFa4qflHK.', NULL, '2022-04-09 12:51:26', '2022-04-09 12:51:26', NULL, NULL);
INSERT INTO `users` VALUES (20, 'umar', 'umar@gmail.com', NULL, '$2y$10$.nMZazvRdXiUxV3LlaY/JuXWgRbLI1wMCg61G1yVlnXeDsZnwgs9a', NULL, '2022-04-09 14:33:52', '2022-04-09 14:33:52', NULL, NULL);
INSERT INTO `users` VALUES (21, 'Fidyat', 'fidyat@gmail.com', NULL, '$2y$10$AuPq4Ph87aj4qyeBjE9chOQ/gF6EeVKtxpClmMSaap4KTfu3ONl.W', NULL, '2022-04-09 14:34:30', '2022-04-09 14:34:30', NULL, NULL);
INSERT INTO `users` VALUES (22, 'farhan', 'farhan@gmail.com', NULL, '$2y$10$psN/.npDQ6ZNMwKAIJbPNuzoysEOT0tLn/DCo/3a/BZ5YLFJLWirW', NULL, '2022-04-09 14:44:03', '2022-04-09 14:44:03', NULL, NULL);
INSERT INTO `users` VALUES (23, 'adam', 'adam@gmail.com', NULL, '$2y$10$zsr/9faKWdewVAYo9NnPruSsWP4rH4h8B52cuNyQT4TwQJTXrJ2fy', NULL, '2022-04-09 14:44:35', '2022-04-09 14:44:35', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
