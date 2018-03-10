/*
Navicat MySQL Data Transfer

Source Server         : lem
Source Server Version : 50711
Source Host           : 127.0.0.1:3306
Source Database       : php

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2018-03-10 18:08:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sys_user
-- ----------------------------
DROP TABLE IF EXISTS `sys_user`;
CREATE TABLE `sys_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_user
-- ----------------------------
INSERT INTO `sys_user` VALUES ('1', '悟空', '123', 'wukong', '2016-08-03 17:25:06');
INSERT INTO `sys_user` VALUES ('2', '八戒', '', 'bajie', '2016-08-03 17:25:06');
INSERT INTO `sys_user` VALUES ('3', '林冲', '', 'linchong', '2016-08-03 17:25:06');
INSERT INTO `sys_user` VALUES ('4', '刘备', '', 'liubei', '2016-08-03 17:25:06');
INSERT INTO `sys_user` VALUES ('5', '林黛玉', '', 'lindaiyu', '2016-08-04 16:15:44');
INSERT INTO `sys_user` VALUES ('6', '林黛玉', '', 'lindaiyu', '2016-08-04 17:39:46');
