/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : quan_ly_sinh_vien

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-07 16:13:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sinhviendh7c1
-- ----------------------------
DROP TABLE IF EXISTS `sinhviendh7c1`;
CREATE TABLE `sinhviendh7c1` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1244 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sinhviendh7c1
-- ----------------------------
INSERT INTO `sinhviendh7c1` VALUES ('14', 'fdsfdsf', 'nam', '12', '{\"python\":\"5\",\"java\":\"6\",\"php\":\"7\",\"c\":\"8\",\"sql\":\"9\",\"html\":\"10\",\"css\":\"6\"}');
INSERT INTO `sinhviendh7c1` VALUES ('123', 'kim thúy hoàn', 'nữ', '09/11', null);
INSERT INTO `sinhviendh7c1` VALUES ('1234', 'kim thúy hoàn', 'nữ', '09/11', null);
INSERT INTO `sinhviendh7c1` VALUES ('1241', '', '', '', null);
INSERT INTO `sinhviendh7c1` VALUES ('1242', '', '', '', null);
INSERT INTO `sinhviendh7c1` VALUES ('1243', 'Ã¡nh', 'nam', '12', '{\"python\":\"1\",\"java\":\"2\",\"php\":\"3\",\"c\":\"4\",\"sql\":\"5\",\"html\":\"6\",\"css\":\"7\"}');
