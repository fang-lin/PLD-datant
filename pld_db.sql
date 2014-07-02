/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50617
 Source Host           : localhost
 Source Database       : pld_db

 Target Server Type    : MySQL
 Target Server Version : 50617
 File Encoding         : utf-8

 Date: 07/02/2014 23:48:59 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `config`
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `config_key` varchar(64) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`config_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `dishes`
-- ----------------------------
DROP TABLE IF EXISTS `dishes`;
CREATE TABLE `dishes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dishes_name` varchar(255) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`,`category_id`),
  FULLTEXT KEY `dishes_name` (`dishes_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `dishes_cates`
-- ----------------------------
DROP TABLE IF EXISTS `dishes_cates`;
CREATE TABLE `dishes_cates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `pid` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`pid`),
  FULLTEXT KEY `category_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `dishes_cates`
-- ----------------------------
BEGIN;
INSERT INTO `dishes_cates` VALUES ('1', '粤菜', '0'), ('2', '西餐', '0'), ('3', '自助餐', '0'), ('4', '其他', '0');
COMMIT;

-- ----------------------------
--  Table structure for `districts`
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) NOT NULL,
  `pid` bigint(20) unsigned NOT NULL,
  `level` varchar(3) NOT NULL COMMENT 'province:0, city:1, district:2',
  PRIMARY KEY (`id`,`pid`),
  FULLTEXT KEY `district_name` (`district_name`)
) ENGINE=MyISAM AUTO_INCREMENT=10019 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `districts`
-- ----------------------------
BEGIN;
INSERT INTO `districts` VALUES ('10000', '上海', '0', '1'), ('10001', '浦东新区', '10000', '2'), ('10002', '徐汇区', '10000', '2'), ('10003', '长宁区', '10000', '2'), ('10004', '普陀区', '10000', '2'), ('10005', '闸北区', '10000', '2'), ('10006', '虹口区', '10000', '2'), ('10007', '杨浦区', '10000', '2'), ('10008', '黄浦区', '10000', '2'), ('10009', '卢湾区', '10000', '2'), ('10010', '静安区', '10000', '2'), ('10011', '宝山区', '10000', '2'), ('10012', '闵行区', '10000', '2'), ('10013', '嘉定区', '10000', '2'), ('10014', '金山区', '10000', '2'), ('10015', '松江区', '10000', '2'), ('10016', '青浦区', '10000', '2'), ('10017', '奉贤区', '10000', '2'), ('10018', '崇明县', '10000', '2');
COMMIT;

-- ----------------------------
--  Table structure for `restaurant_cates`
-- ----------------------------
DROP TABLE IF EXISTS `restaurant_cates`;
CREATE TABLE `restaurant_cates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `pid` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`,`pid`),
  FULLTEXT KEY `category_name` (`category_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `restaurant_dishes`
-- ----------------------------
DROP TABLE IF EXISTS `restaurant_dishes`;
CREATE TABLE `restaurant_dishes` (
  `restaurant_id` bigint(20) unsigned NOT NULL,
  `dishes_id` bigint(20) unsigned NOT NULL,
  `dishes_price` float(8,2) unsigned zerofill DEFAULT NULL,
  `dishes_description` text,
  PRIMARY KEY (`restaurant_id`,`dishes_id`),
  KEY `dishes_price` (`dishes_price`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `restaurant_dishes`
-- ----------------------------
BEGIN;
INSERT INTO `restaurant_dishes` VALUES ('10000000', '100000000', '123456.00', null);
COMMIT;

-- ----------------------------
--  Table structure for `restaurants`
-- ----------------------------
DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE `restaurants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `is_chain` tinyint(1) NOT NULL DEFAULT '0',
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_subname` varchar(255) DEFAULT NULL,
  `restaurant_description` text,
  `district_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `category_id` bigint(20) unsigned NOT NULL,
  `restaurant_address` varchar(255) DEFAULT NULL,
  `phone_numbers` varchar(255) DEFAULT NULL COMMENT '000-12345678|000-12345678',
  `spend_per_head` tinyint(6) DEFAULT NULL,
  `score` float(2,1) NOT NULL DEFAULT '0.0',
  `dianping_id` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`,`district_id`,`category_id`),
  FULLTEXT KEY `restaurant_name` (`restaurant_name`)
) ENGINE=MyISAM AUTO_INCREMENT=10000001 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `restaurants`
-- ----------------------------
BEGIN;
INSERT INTO `restaurants` VALUES ('10000000', '1', '年代秀饭堂', null, null, '0', '0', '徐家汇路618号日月光中心广场5F-泰康区02-03号铺', '54250881', null, '7.3', null);
COMMIT;

-- ----------------------------
--  Table structure for `user_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `user_sessions`;
CREATE TABLE `user_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
