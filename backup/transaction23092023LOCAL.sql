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

 Date: 23/09/2023 23:03:19
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
) ENGINE = InnoDB AUTO_INCREMENT = 1;

SET FOREIGN_KEY_CHECKS = 1;
