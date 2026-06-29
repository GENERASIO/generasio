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

 Date: 01/10/2023 12:56:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `invoice_id` text NULL,
  `snap_token` varchar(255) NULL DEFAULT NULL,
  `vip_invoice` varchar(255) NULL DEFAULT NULL,
  `status` varchar(100) NULL DEFAULT NULL,
  `description` text NULL,
  `invoice_url` text NULL,
  `expire_date` datetime NULL DEFAULT NULL,
  `service_catalog_slug` varchar(255) NULL DEFAULT NULL,
  `service_product_code` varchar(255) NULL DEFAULT NULL,
  `price` decimal(15, 2) NULL DEFAULT NULL,
  `gamer_tag` varchar(255) NULL DEFAULT NULL,
  `player_id` varchar(255) NULL DEFAULT NULL,
  `server_id` varchar(255) NULL DEFAULT NULL,
  `whatsapp` varchar(100) NULL DEFAULT NULL,
  `email` varchar(255) NULL DEFAULT NULL,
  `merchant_name` varchar(100) NULL DEFAULT NULL,
  `payment_method` varchar(100) NULL DEFAULT NULL,
  `payment_channel` varchar(100) NULL DEFAULT NULL,
  `payment_destination` varchar(100) NULL DEFAULT NULL,
  `paid_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_by` int NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES (6, 'GS14516956914145', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-11 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '0838-7945-3415', 'asasas', 'Gopay', 'qris', 'qris', 'qris', '2023-09-11 09:03:11', '2023-09-11 09:01:21', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (7, 'GS23562356270390', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-11 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-11 18:10:45', '2023-09-11 18:10:34', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (8, 'GS89438283283684', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-12 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-12 14:23:51', '2023-09-12 14:23:02', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (9, 'GS19191928323781', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-13 23:01:21', 'mobile-legends-b', 'ML10_1-S1234', 2669.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'asa', 'Gopay', 'qris', 'qris', 'qris', '2023-09-13 10:05:11', '2023-09-13 10:03:14', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (10, 'GS12367238824783', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-14 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-14 12:24:01', '2023-09-14 12:23:30', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (11, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-15 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-15 20:21:56', '2023-09-15 20:21:28', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (12, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-17 23:01:21', 'mobile-legends-b', 'ML10_1-S1234', 2669.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-17 17:01:58', '2023-09-17 17:01:14', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (13, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-18 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-18 10:14:12', '2023-09-18 10:13:22', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (14, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-18 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-18 12:23:53', '2023-09-18 12:23:34', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (15, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-19 23:01:21', 'mobile-legends-b', 'ML10_1-S1234', 2669.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-19 20:25:02', '2023-09-19 20:23:34', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (16, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-21 23:01:21', 'mobile-legends-b', 'MLWEEKLYDIAMONDPASS-S1234', 24303.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-21 14:40:52', '2023-09-21 14:40:00', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (17, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-22 23:01:21', 'mobile-legends-b', 'ML5_0-S50A', 1406.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-22 19:24:50', '2023-09-22 19:23:12', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (18, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-23 23:01:21', 'mobile-legends-b', 'ML10_1-S1234', 2669.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-23 20:25:21', '2023-09-23 20:23:34', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (19, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-24 23:01:21', 'mobile-legends-b', 'MLWEEKLYDIAMONDPASS-S1234', 24303.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-24 07:13:12', '2023-09-24 07:12:39', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (20, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-28 23:01:21', 'mobile-legends-b', 'MLWEEKLYDIAMONDPASS-S1234', 24303.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-28 10:24:36', '2023-09-28 10:23:52', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (21, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-29 23:01:21', 'mobile-legends-b', 'MLWEEKLYDIAMONDPASS-S1234', 24303.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-29 04:25:53', '2023-09-29 04:23:34', '2023-09-26 08:28:33', NULL, NULL);
INSERT INTO `transactions` VALUES (22, 'GS93727382429320', 'https://api.midtrans.com/v2/qris/3ce3b55f-1203-430f-9bd1-f9062f7be602/qr-code', '20230926082832', 'PAID', 'Segera Lakukan Pembayaran!', NULL, '2023-09-30 23:01:21', 'mobile-legends-b', 'MLWEEKLYDIAMONDPASS-S1234', 24303.00, '[LC] GENERASIO', '36308194', '2056', '6281380262890', 'dynastina@gmail.com', 'Gopay', 'qris', 'qris', 'qris', '2023-09-30 17:12:59', '2023-09-30 17:12:20', '2023-09-26 08:28:33', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
