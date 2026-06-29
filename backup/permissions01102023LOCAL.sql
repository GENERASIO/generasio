/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : generasio

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 01/10/2023 12:38:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 120;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'role-list', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (2, 'role-create', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (3, 'role-edit', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (4, 'role-delete', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (5, 'role-show', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (9, 'user-list', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (10, 'user-create', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (11, 'user-edit', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (12, 'user-delete', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (13, 'user-show', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (24, 'profile-list', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (25, 'profile-create', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (26, 'profile-edit', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (27, 'profile-delete', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (28, 'profile-show', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (29, 'activity-log-list', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (30, 'activity-log-create', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (31, 'activity-log-edit', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (32, 'activity-log-delete', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (33, 'activity-log-show', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (34, 'announcement-list', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (35, 'announcement-create', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (36, 'announcement-edit', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (37, 'announcement-delete', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (38, 'announcement-show', 'web', '2023-08-11 09:50:59', '2023-08-11 09:50:59');
INSERT INTO `permissions` VALUES (39, 'menu-list', 'web', '2023-09-04 09:06:00', '2023-09-04 09:06:00');
INSERT INTO `permissions` VALUES (40, 'menu-create', 'web', '2023-09-04 09:06:00', '2023-09-04 09:06:00');
INSERT INTO `permissions` VALUES (41, 'menu-edit', 'web', '2023-09-04 09:06:00', '2023-09-04 09:06:00');
INSERT INTO `permissions` VALUES (42, 'menu-delete', 'web', '2023-09-04 09:06:00', '2023-09-04 09:06:00');
INSERT INTO `permissions` VALUES (43, 'menu-show', 'web', '2023-09-04 09:06:00', '2023-09-04 09:06:00');
INSERT INTO `permissions` VALUES (44, 'content-list', 'web', '2023-09-04 09:26:14', '2023-09-04 09:26:14');
INSERT INTO `permissions` VALUES (45, 'content-create', 'web', '2023-09-04 09:26:14', '2023-09-04 09:26:14');
INSERT INTO `permissions` VALUES (46, 'content-edit', 'web', '2023-09-04 09:26:14', '2023-09-04 09:26:14');
INSERT INTO `permissions` VALUES (47, 'content-delete', 'web', '2023-09-04 09:26:14', '2023-09-04 09:26:14');
INSERT INTO `permissions` VALUES (48, 'content-show', 'web', '2023-09-04 09:26:14', '2023-09-04 09:26:14');
INSERT INTO `permissions` VALUES (49, 'company-socmed-list', 'web', '2023-09-04 10:05:22', '2023-09-04 10:05:22');
INSERT INTO `permissions` VALUES (50, 'company-socmed-create', 'web', '2023-09-04 10:05:22', '2023-09-04 10:05:22');
INSERT INTO `permissions` VALUES (51, 'company-socmed-edit', 'web', '2023-09-04 10:05:22', '2023-09-04 10:05:22');
INSERT INTO `permissions` VALUES (52, 'company-socmed-delete', 'web', '2023-09-04 10:05:22', '2023-09-04 10:05:22');
INSERT INTO `permissions` VALUES (53, 'company-socmed-show', 'web', '2023-09-04 10:05:22', '2023-09-04 10:05:22');
INSERT INTO `permissions` VALUES (54, 'company-profile-list', 'web', '2023-09-04 10:05:59', '2023-09-04 10:05:59');
INSERT INTO `permissions` VALUES (55, 'company-profile-create', 'web', '2023-09-04 10:05:59', '2023-09-04 10:05:59');
INSERT INTO `permissions` VALUES (56, 'company-profile-edit', 'web', '2023-09-04 10:05:59', '2023-09-04 10:05:59');
INSERT INTO `permissions` VALUES (57, 'company-profile-delete', 'web', '2023-09-04 10:05:59', '2023-09-04 10:05:59');
INSERT INTO `permissions` VALUES (58, 'company-profile-show', 'web', '2023-09-04 10:05:59', '2023-09-04 10:05:59');
INSERT INTO `permissions` VALUES (59, 'advantage-list', 'web', '2023-09-04 11:24:59', '2023-09-04 11:24:59');
INSERT INTO `permissions` VALUES (60, 'advantage-create', 'web', '2023-09-04 11:24:59', '2023-09-04 11:24:59');
INSERT INTO `permissions` VALUES (61, 'advantage-edit', 'web', '2023-09-04 11:24:59', '2023-09-04 11:24:59');
INSERT INTO `permissions` VALUES (62, 'advantage-delete', 'web', '2023-09-04 11:24:59', '2023-09-04 11:24:59');
INSERT INTO `permissions` VALUES (63, 'advantage-show', 'web', '2023-09-04 11:24:59', '2023-09-04 11:24:59');
INSERT INTO `permissions` VALUES (64, 'user-feedback-list', 'web', '2023-09-04 11:58:39', '2023-09-04 11:58:39');
INSERT INTO `permissions` VALUES (65, 'user-feedback-create', 'web', '2023-09-04 11:58:39', '2023-09-04 11:58:39');
INSERT INTO `permissions` VALUES (66, 'user-feedback-edit', 'web', '2023-09-04 11:58:39', '2023-09-04 11:58:39');
INSERT INTO `permissions` VALUES (67, 'user-feedback-delete', 'web', '2023-09-04 11:58:39', '2023-09-04 11:58:39');
INSERT INTO `permissions` VALUES (68, 'user-feedback-show', 'web', '2023-09-04 11:58:39', '2023-09-04 11:58:39');
INSERT INTO `permissions` VALUES (69, 'service-list', 'web', '2023-09-04 12:40:05', '2023-09-04 12:40:05');
INSERT INTO `permissions` VALUES (70, 'service-create', 'web', '2023-09-04 12:40:05', '2023-09-04 12:40:05');
INSERT INTO `permissions` VALUES (71, 'service-edit', 'web', '2023-09-04 12:40:05', '2023-09-04 12:40:05');
INSERT INTO `permissions` VALUES (72, 'service-delete', 'web', '2023-09-04 12:40:05', '2023-09-04 12:40:05');
INSERT INTO `permissions` VALUES (73, 'service-show', 'web', '2023-09-04 12:40:05', '2023-09-04 12:40:05');
INSERT INTO `permissions` VALUES (74, 'company-corporation-list', 'web', '2023-09-04 14:29:41', '2023-09-04 14:29:41');
INSERT INTO `permissions` VALUES (75, 'company-corporation-create', 'web', '2023-09-04 14:29:41', '2023-09-04 14:29:41');
INSERT INTO `permissions` VALUES (76, 'company-corporation-edit', 'web', '2023-09-04 14:29:41', '2023-09-04 14:29:41');
INSERT INTO `permissions` VALUES (77, 'company-corporation-delete', 'web', '2023-09-04 14:29:41', '2023-09-04 14:29:41');
INSERT INTO `permissions` VALUES (78, 'company-corporation-show', 'web', '2023-09-04 14:29:41', '2023-09-04 14:29:41');
INSERT INTO `permissions` VALUES (79, 'blog-category-list', 'web', '2023-09-05 10:51:57', '2023-09-05 10:51:57');
INSERT INTO `permissions` VALUES (80, 'blog-category-create', 'web', '2023-09-05 10:51:57', '2023-09-05 10:51:57');
INSERT INTO `permissions` VALUES (81, 'blog-category-edit', 'web', '2023-09-05 10:51:57', '2023-09-05 10:51:57');
INSERT INTO `permissions` VALUES (82, 'blog-category-delete', 'web', '2023-09-05 10:51:57', '2023-09-05 10:51:57');
INSERT INTO `permissions` VALUES (83, 'blog-category-show', 'web', '2023-09-05 10:51:57', '2023-09-05 10:51:57');
INSERT INTO `permissions` VALUES (84, 'blog-list', 'web', '2023-09-05 10:54:35', '2023-09-05 10:54:35');
INSERT INTO `permissions` VALUES (85, 'blog-create', 'web', '2023-09-05 10:54:35', '2023-09-05 10:54:35');
INSERT INTO `permissions` VALUES (86, 'blog-edit', 'web', '2023-09-05 10:54:35', '2023-09-05 10:54:35');
INSERT INTO `permissions` VALUES (87, 'blog-delete', 'web', '2023-09-05 10:54:35', '2023-09-05 10:54:35');
INSERT INTO `permissions` VALUES (88, 'blog-show', 'web', '2023-09-05 10:54:35', '2023-09-05 10:54:35');
INSERT INTO `permissions` VALUES (89, 'visitor-dashboard', 'web', '2023-09-05 14:29:08', '2023-09-05 14:29:08');
INSERT INTO `permissions` VALUES (90, 'visitor-list', 'web', '2023-09-05 14:29:08', '2023-09-05 14:29:08');
INSERT INTO `permissions` VALUES (91, 'visitor-create', 'web', '2023-09-05 14:29:08', '2023-09-05 14:29:08');
INSERT INTO `permissions` VALUES (92, 'visitor-edit', 'web', '2023-09-05 14:29:08', '2023-09-05 14:29:08');
INSERT INTO `permissions` VALUES (93, 'visitor-delete', 'web', '2023-09-05 14:29:08', '2023-09-05 14:29:08');
INSERT INTO `permissions` VALUES (94, 'visitor-show', 'web', '2023-09-05 14:29:08', '2023-09-05 14:29:08');
INSERT INTO `permissions` VALUES (105, 'transaction-list', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (106, 'transaction-create', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (107, 'transaction-edit', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (108, 'transaction-delete', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (109, 'transaction-show', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (110, 'service-catalog-list', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (111, 'service-catalog-create', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (112, 'service-catalog-edit', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (113, 'service-catalog-delete', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (114, 'service-catalog-show', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (115, 'service-product-list', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (116, 'service-product-create', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (117, 'service-product-edit', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (118, 'service-product-delete', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');
INSERT INTO `permissions` VALUES (119, 'service-product-show', 'web', '2023-09-30 22:36:55', '2023-09-30 22:36:55');

SET FOREIGN_KEY_CHECKS = 1;
