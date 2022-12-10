/*
 Navicat Premium Data Transfer

 Source Server         : Lamdik
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : momong

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 10/12/2022 15:30:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jenis_kelamin
-- ----------------------------
DROP TABLE IF EXISTS `jenis_kelamin`;
CREATE TABLE `jenis_kelamin`  (
  `id` int NOT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_kelamin
-- ----------------------------
INSERT INTO `jenis_kelamin` VALUES (1, 'L', 'Laki-laki');
INSERT INTO `jenis_kelamin` VALUES (2, 'P', 'Perempuan');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Keluarga');
INSERT INTO `kategori` VALUES (2, 'Bayi');
INSERT INTO `kategori` VALUES (3, 'Usia Sekolah');
INSERT INTO `kategori` VALUES (4, 'Orangtua');

-- ----------------------------
-- Table structure for m_konsultasi
-- ----------------------------
DROP TABLE IF EXISTS `m_konsultasi`;
CREATE TABLE `m_konsultasi`  (
  `id` int NOT NULL,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_singkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keluhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jadwal` date NULL DEFAULT NULL,
  `id_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis_kelamin` int NULL DEFAULT NULL,
  `id_media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bukti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_konsultasi
-- ----------------------------
INSERT INTO `m_konsultasi` VALUES (1, '1', 'User', 'User', '62895366330303', 'Banyak sekali masalah yang saya hadapi', '2022-12-09', '2022-12-09', '1', 1, '1', 'img/bukti-bayar\\User1.jpg', '1');
INSERT INTO `m_konsultasi` VALUES (2, '3', 'User2', 'User2', '6287760501737', 'Masalahku banyak sekali tolongg', '2022-12-14', '2022-12-06', '1', 1, '1', 'img/bukti-bayar\\User2.jpg', NULL);
INSERT INTO `m_konsultasi` VALUES (3, '4', 'User3', 'User3', '62895366330303', 'Udara mana kini yang kau hirup', '2022-12-05', '2022-12-06', '1', NULL, '1', 'img/bukti-bayar\\User3.jpg', NULL);

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media`  (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES (1, 'Chat WhatsApp');
INSERT INTO `media` VALUES (2, 'Video Call WhatsApp');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (2, '2022_11_26_152826_create_tb_user_table', 1);

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
  `expires_at` timestamp(0) NULL DEFAULT NULL,
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
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tb_user_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `tb_user_password_unique`(`password`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'user', 'user@gmail.com', '$2y$10$XFvXhqO6NhgwysCBpATF1u6/p4FVi57.Oi0MdOxwyBN5u3BWMVA.C', 'user', '2022-12-09 16:26:37', '2022-12-09 16:26:37');
INSERT INTO `tb_user` VALUES (2, 'admin', 'admin@gmail.com', '$2y$10$XQtb0fAgd/.nrQsAUDXYlePYI0FgKqnmN9Kibtb6szaebCQxaLDEi', 'admin', '2022-12-09 16:34:24', '2022-12-09 16:34:24');
INSERT INTO `tb_user` VALUES (3, 'User2', 'user2@gmail.com', '$2y$10$.hpB2blKcKEgQce/HCdbU.EiBrvAZfzn2vj9/8kHJsxCcMrlL1zAi', 'user', '2022-12-09 16:50:57', '2022-12-09 16:50:57');
INSERT INTO `tb_user` VALUES (4, 'User3', 'user3@gmail.com', '$2y$10$SO2u8klRjvzttxjl7/qNAevePkOlIEq8b/dlCBcE1DrpPUWzXQqsK', 'user', '2022-12-10 02:28:16', '2022-12-10 02:28:16');

SET FOREIGN_KEY_CHECKS = 1;
