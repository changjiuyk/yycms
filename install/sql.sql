/*
Navicat MySQL Data Transfer

Source Server         : 123
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : yycms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2021-05-14 00:30:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `yycms_gg`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_gg`;
CREATE TABLE `yycms_gg` (
  `gg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gg_pingtai` varchar(12) DEFAULT NULL,
  `gg_gg1` text,
  `gg_gg2` text,
  `gg_gg3` text,
  `gg_gg4` text,
  `gg_gg5` text,
  `gg_gg6` text,
  `gg_gg7` text,
  `gg_gg8` text,
  `gg_gg9` text,
  `gg_gg10` text,
  `gg_gg11` text,
  PRIMARY KEY (`gg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_gg
-- ----------------------------
INSERT INTO `yycms_gg` VALUES ('1', '1', '', '', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `yycms_hy`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_hy`;
CREATE TABLE `yycms_hy` (
  `ug_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `ug_name` varchar(32) NOT NULL DEFAULT '',
  `ug_type` varchar(255) NOT NULL DEFAULT '',
  `ug_popedom` varchar(32) NOT NULL DEFAULT '',
  `ug_upgrade` smallint(6) NOT NULL DEFAULT '0',
  `ug_popvalue` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ug_id`),
  KEY `ug_upgrade` (`ug_upgrade`),
  KEY `ug_popvalue` (`ug_popvalue`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_hy
-- ----------------------------
INSERT INTO `yycms_hy` VALUES ('1', '普通会员', '', '', '0', '1');
INSERT INTO `yycms_hy` VALUES ('2', '超级会员', '', '', '500', '0');

-- ----------------------------
-- Table structure for `yycms_hytc`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_hytc`;
CREATE TABLE `yycms_hytc` (
  `tc_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `tc_name` varchar(32) NOT NULL DEFAULT '',
  `tc_jf` varchar(255) NOT NULL DEFAULT '',
  `tc_na` varchar(32) NOT NULL DEFAULT '',
  `tc_type` varchar(10) NOT NULL,
  `tc_rmb` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_hytc
-- ----------------------------
INSERT INTO `yycms_hytc` VALUES ('1', 'VIP月卡会员', '10', '包月', '30', '1');
INSERT INTO `yycms_hytc` VALUES ('2', 'VIP季卡会员', '50', '包季', '180', '2');
INSERT INTO `yycms_hytc` VALUES ('3', 'VIP年卡会员', '100', '包年', '365', '3');
INSERT INTO `yycms_hytc` VALUES ('6', 'VIP周卡会员', '5', '周卡', '70', '1');

-- ----------------------------
-- Table structure for `yycms_km`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_km`;
CREATE TABLE `yycms_km` (
  `km_id` int(11) NOT NULL AUTO_INCREMENT,
  `km_name` text,
  `km_tc` varchar(255) DEFAULT NULL,
  `km_zt` varchar(5) DEFAULT NULL,
  `km_syz` varchar(255) DEFAULT NULL,
  `km_time` datetime DEFAULT NULL,
  `km_bs` varchar(255) DEFAULT NULL,
  `km_dl` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`km_id`)
) ENGINE=MyISAM AUTO_INCREMENT=588 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_km
-- ----------------------------
INSERT INTO `yycms_km` VALUES ('381', 'xEq2raAVT3', '30', '1', '123456', '2021-05-12 05:31:09', '194', '46');
INSERT INTO `yycms_km` VALUES ('382', 'b04cdNnF8O', '30', '0', '0', null, '194', '46');
INSERT INTO `yycms_km` VALUES ('383', 'y98dS3XwZ1', '30', '0', '0', null, '194', '46');
INSERT INTO `yycms_km` VALUES ('384', 'DLhu3b8fbU', '30', '0', '0', null, '194', '46');
INSERT INTO `yycms_km` VALUES ('385', '7OznGwdpTW', '30', '0', '0', null, '194', '46');
INSERT INTO `yycms_km` VALUES ('386', 'eQ2OaKpDRu', '30', '0', '0', null, '194', '46');
INSERT INTO `yycms_km` VALUES ('387', 'b8vF478FbQ', '30', '1', '798701067', '2019-12-19 17:41:49', '194', '46');
INSERT INTO `yycms_km` VALUES ('388', 'DFL3xlEICp', '30', '1', '798701067', '2019-12-19 17:40:09', '194', '46');
INSERT INTO `yycms_km` VALUES ('389', 'qd1QA7lAd9', '30', '1', '', '2019-12-19 05:36:27', '194', '46');
INSERT INTO `yycms_km` VALUES ('390', 'ZvjyuCsY0P', '30', '1', '798701067', '2019-12-19 05:36:20', '194', '46');
INSERT INTO `yycms_km` VALUES ('402', 'V39A3k0fI1', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('403', 'N70a06QYeU', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('404', '5KkoLLlxxF', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('405', 'oobwRVIWaD', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('406', 'kXC0tgmQDT', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('407', 'r0ESa4KgMl', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('408', 'ZowtH4lb4Q', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('409', 'BQQQuvAWaQ', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('410', 'AxhWuawYer', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('411', 'ytAqEHi5PT', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('412', '0bFmeOwoNw', '30', '0', '0', null, '381', '');
INSERT INTO `yycms_km` VALUES ('413', 'CHBYPZBTtU', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('414', 'FLKxvr4etv', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('415', 'LCm0qoEyKO', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('416', 'UKqisc7XJ0', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('417', 'joxlKMmm5y', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('418', '1YXFJiZHH2', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('419', '4T9QdeeX8r', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('420', 'YjFcby0npq', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('421', 'bt8eotGC5D', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('422', '8zE9Dge7WO', '30', '0', '0', null, '124', '');
INSERT INTO `yycms_km` VALUES ('423', 'CblGe4galI', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('424', 'C4EK3EmgB5', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('425', 'kzIO85cozR', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('426', 'Ktn99TlCZp', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('427', 'gMbkfKkuDg', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('428', '970AZQKQ4Q', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('429', 'y2CSC6O9LG', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('430', 'rbjixx3CMy', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('431', 'OeyUeLsEY8', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('432', '2TOpfo3IKW', '30', '0', '0', null, '99', '');
INSERT INTO `yycms_km` VALUES ('433', 'fXfehbCB73', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('434', 'fhUGO6GfyE', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('435', 'XyeRtrNmxw', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('436', 'ZVcvpU1noC', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('437', 'jZWQEkhx1n', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('438', 'K0JKNOeOW1', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('439', 'sFxTFyTenE', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('440', 'B7wYZVdydd', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('441', 'mbwBg8doC5', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('442', 'HSccrCgT0t', '30', '0', '0', null, '916', '');
INSERT INTO `yycms_km` VALUES ('443', 'TbdrjZpPtk', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('444', '4YykT5UBhY', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('445', 'RyVy136GPP', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('446', 'MeKdDwxKRD', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('447', 'XHSfIs3eE2', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('448', 'gf53gwQ28z', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('449', 'KkILQyNrTl', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('450', 'ExjiX2Orsu', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('451', 'fSQdbBxGaw', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('452', 'Xak7pIhazy', '30', '0', '0', null, '163', '');
INSERT INTO `yycms_km` VALUES ('453', 'SVz7c7Pdh4', '30', '0', '0', null, '336', '');
INSERT INTO `yycms_km` VALUES ('454', 'V4QHemfIXO', '30', '0', '0', null, '336', '');
INSERT INTO `yycms_km` VALUES ('455', 'zK13xYZ0aM', '30', '0', '0', null, '336', '');
INSERT INTO `yycms_km` VALUES ('456', 'Q1hGJ1HYSO', '30', '0', '0', null, '336', '');
INSERT INTO `yycms_km` VALUES ('457', 'pmtrZvT1Fe', '30', '0', '0', null, '336', '');
INSERT INTO `yycms_km` VALUES ('458', 'LxXOqaZh2Z', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('459', 'qCHkLxj1yv', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('460', 'kAQNTateQg', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('461', 'BcWr7FUgwM', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('462', 'j8rxXFSrzM', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('463', 'Z1zbiVFkWM', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('464', 'TEbkG8N87z', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('465', 'kmjnbldhwL', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('466', '4q5qvPpFzW', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('467', 'EYFEOiNyTc', '30', '0', '0', null, '822', '');
INSERT INTO `yycms_km` VALUES ('468', 'fA4caJrnPz', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('469', 'JCzaXGYaMI', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('470', 'C2Z2aThxNN', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('471', 'cbW1vSu2sC', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('472', 'vTeVmcsvah', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('473', 'YArs2y8h55', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('474', 'bbyh3xoBxg', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('475', '9rTVxRlipF', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('476', 'DlCEsorghX', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('477', 'EJiqDuJwlW', '30', '0', '0', null, '915', '');
INSERT INTO `yycms_km` VALUES ('478', 'GLXct54RDv', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('479', 'M9T2wrP8Ie', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('480', 'R2fAKo0KMb', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('481', 'IjKQnJgAHB', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('482', '5P5p5ZhVpb', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('483', 'mv5LzyMtF6', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('484', '9ItNPEe8v0', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('485', 'NuI2d0zie8', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('486', 'bW84q3WxI6', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('487', 'CPW9LwXYNA', '30', '0', '0', null, '709', '');
INSERT INTO `yycms_km` VALUES ('488', 'Owwb2ip26nq', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('489', 'WphXaffxZE9', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('490', 'nZ9F0yDgTcv', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('491', 'oRUeGAnGTiC', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('492', 'DfEXeMGxVsb', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('493', 'iMvB90kgmTu', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('494', 'wUylMmsPDVu', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('495', 'OD9Bm4bmOpb', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('496', 'ICKkeV1ojIF', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('497', 'M2iZCdJIUyv', '30', '0', '0', null, '977', '46');
INSERT INTO `yycms_km` VALUES ('498', 'tzZyaZ9HJA', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('499', 'GbScVjmZZx', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('500', 'V4uxwSkFHq', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('501', 'eBWsw08gVV', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('502', 'XO5VBjrh6L', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('503', 'UBDZy6knt8', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('504', 'pIUIm4FD9m', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('505', '8pXid5oN57', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('506', 'A8M6K9I4HI', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('507', 'oYMSyHSFVD', '30', '0', '0', null, '395', '');
INSERT INTO `yycms_km` VALUES ('508', 'ubDZo56fsx', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('509', 'uCqYb9xxqZ', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('510', 'UoX6Vpp1Ui', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('511', 'jmx1t7daLF', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('512', 'rWW4fGKOCQ', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('513', 'oSceJq0yG5', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('514', 'nrSY5fN5ci', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('515', 'rjKpTGBraC', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('516', '7r0qqqu3vQ', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('517', 'WJUiRHMioC', '30', '0', '0', null, '113', '');
INSERT INTO `yycms_km` VALUES ('518', 'g4q0v8JKs3', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('519', 'IfJ4CCch4d', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('520', 'rmRIT9ZhD2', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('521', 'VLSDsrWc2k', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('522', 'zAjorlVaG2', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('523', '7oNSt4ix4W', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('524', 'GrBgKuzgSB', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('525', '15Co9Psf5z', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('526', 'Kr3Ij6dqoT', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('527', 'ERE355w8j6', '30', '0', '0', null, '963', '');
INSERT INTO `yycms_km` VALUES ('528', '6dx3klNR8v', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('529', 'alZ18KmZka', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('530', 'FDpV25Ljlm', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('531', 'hjAm2ctzOv', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('532', 'QCbx7V51lR', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('533', 'zyRwQfM3Wm', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('534', 'zlOhIxITY7', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('535', 'PDBMXG1Jcj', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('536', 'jmwFAyA9Oz', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('537', '2aDkfbTQFe', '30', '0', '0', null, '624', '0');
INSERT INTO `yycms_km` VALUES ('538', 'qFLGNGS4F2', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('539', 'Qo5SOuipH1', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('540', 'YxaPqMF2Do', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('541', 'HXTXqtxPpA', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('542', '1OBjMlTY9G', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('543', 'fPT1adv40H', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('544', 'cgfM04octn', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('545', '6yPHiau347', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('546', 'Uu8uy0emtA', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('547', 'DzqqCh8kpf', '30', '0', '0', null, '716', '0');
INSERT INTO `yycms_km` VALUES ('548', 'R0aC4oRJ7l', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('549', 'ZAdCrprCDM', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('550', 'K8a7enwaL2', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('551', '9XGwWgcV7R', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('552', 'ZqbUjFsNHq', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('553', 'dvuxdCoKil', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('554', 'OBZgmCemGY', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('555', 'KyEMqGzh5j', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('556', 'XneYaUykbR', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('557', 'iKSy3gXbEs', '30', '0', '0', null, '329', '');
INSERT INTO `yycms_km` VALUES ('558', 'D7LFgOvKDA', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('559', 'BlDwkV22QF', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('560', 'IHu3sJ0WbN', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('561', 'gU1dwcKLSp', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('562', 'NlE6P6wwpm', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('563', 'uXHbnSoXZz', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('564', 'L6rUpENpnq', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('565', 'JKmmalmcJj', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('566', 'hFxPJf4364', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('567', 'HlhNmUjAAI', '30', '0', '0', null, '575', '');
INSERT INTO `yycms_km` VALUES ('568', 'OZnBSFGrYy', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('569', 'YXtFWOKNV2', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('570', 'OteSSgfzXp', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('571', 'DmnA8DOCrF', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('572', '7t5fjTPEV0', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('573', 'YqsRqNAb24', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('574', 'VvHk3U2mTW', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('575', 'vxceGWo64C', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('576', 'gMKb2IDubn', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('577', 'tOwuAFziZy', '30', '0', '0', null, '777', '');
INSERT INTO `yycms_km` VALUES ('578', 'CJF1X84OnC', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('579', 'oDTtp56uNf', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('580', 'kRURucxNvA', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('581', 'P4r23Opu8N', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('582', 'qr0Bhuzn4W', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('583', 'tshyG3A9rP', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('584', 'lNMiwwm4Vs', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('585', 'tqOvWJkqtL', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('586', 'EuBHDE6AjT', '30', '0', '0', null, '119', '0');
INSERT INTO `yycms_km` VALUES ('587', '10qyYUpsEh', '30', '0', '0', null, '119', '0');

-- ----------------------------
-- Table structure for `yycms_kmadd`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_kmadd`;
CREATE TABLE `yycms_kmadd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sl` varchar(255) DEFAULT NULL,
  `tc` varchar(255) DEFAULT NULL,
  `bs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_kmadd
-- ----------------------------
INSERT INTO `yycms_kmadd` VALUES ('5', '10', '10', '30', '587');
INSERT INTO `yycms_kmadd` VALUES ('13', '测试', '10', '30', '113');
INSERT INTO `yycms_kmadd` VALUES ('14', 'YYCMS', '10', '30', '963');
INSERT INTO `yycms_kmadd` VALUES ('15', '梦幻影视', '10', '30', '624');
INSERT INTO `yycms_kmadd` VALUES ('16', 'YYCMS', '10', '30', '716');
INSERT INTO `yycms_kmadd` VALUES ('17', '10', '10', '30', '329');
INSERT INTO `yycms_kmadd` VALUES ('18', '测试', '10', '30', '575');
INSERT INTO `yycms_kmadd` VALUES ('19', '测试', '10', '30', '777');
INSERT INTO `yycms_kmadd` VALUES ('20', '测试', '10', '30', '119');

-- ----------------------------
-- Table structure for `yycms_ly`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_ly`;
CREATE TABLE `yycms_ly` (
  `ly_id` int(11) NOT NULL AUTO_INCREMENT,
  `ly_name` varchar(10) DEFAULT NULL,
  `ly_nr` text,
  `ly_time` datetime DEFAULT NULL,
  `ly_hf` text,
  `ly_sh` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`ly_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_ly
-- ----------------------------
INSERT INTO `yycms_ly` VALUES ('28', '游客', '南宫', '2021-06-07 02:27:16', null, '1');

-- ----------------------------
-- Table structure for `yycms_news`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_news`;
CREATE TABLE `yycms_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(80) DEFAULT '' COMMENT '名称',
  `pic` varchar(255) DEFAULT NULL COMMENT '封面',
  `content` text COMMENT '介绍',
  `create_time` int(10) unsigned DEFAULT '0' COMMENT '创建时间',
  `reurl` char(255) DEFAULT NULL COMMENT '来源',
  `link` varchar(255) DEFAULT '' COMMENT '外链地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻表';

-- ----------------------------
-- Records of yycms_news
-- ----------------------------
INSERT INTO `yycms_news` VALUES ('136', '《九零后》：16位“九零后”讲述西南联大故事', 'https://image11.m1905.cn/uploadfile/2021/0510/thumb_1_320_174_20210510113851938341.jpg', '<p style=\"text-align: center;\">我不知道你想干嘛<br/></p>', '1620629098', null, '');

-- ----------------------------
-- Table structure for `yycms_pintai`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_pintai`;
CREATE TABLE `yycms_pintai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_bt` varchar(50) DEFAULT NULL,
  `a_name` varchar(80) DEFAULT NULL,
  `a_url` varchar(80) DEFAULT NULL,
  `a_keywords` varchar(80) DEFAULT NULL,
  `a_description` varchar(250) DEFAULT NULL,
  `a_bfqgg` varchar(5) DEFAULT NULL,
  `a_jzt` varchar(250) DEFAULT NULL,
  `a_hckg` smallint(6) DEFAULT NULL,
  `a_dbdh` varchar(5) DEFAULT NULL,
  `a_dst` varchar(250) DEFAULT NULL,
  `a_dylb` varchar(5) DEFAULT NULL,
  `a_hcsj` varchar(10) DEFAULT NULL,
  `a_logo` varchar(250) DEFAULT NULL,
  `a_fhkg` smallint(6) DEFAULT NULL,
  `a_mrjx` varchar(50) DEFAULT NULL,
  `a_jxjk` text,
  `a_zyjk` text,
  `a_ggkg` varchar(2) DEFAULT NULL,
  `a_gg` text,
  `a_qqsp` text,
  `a_tj` text,
  `a_bq` text,
  `a_mb` varchar(10) DEFAULT NULL,
  `a_uare` varchar(10) DEFAULT NULL,
  `a_pass` varchar(10) DEFAULT NULL,
  `gg_gg1` text,
  `gg_gg2` text,
  `gg_gg3` text,
  `gg_gg4` text,
  `gg_gg5` text,
  `gg_gg6` text,
  `gg_gg7` text,
  `gg_gg8` text,
  `gg_gg9` text,
  `gg_gg10` text,
  `gg_gg11` text,
  `zf_kg` varchar(5) DEFAULT NULL,
  `zf_user` varchar(10) DEFAULT NULL,
  `zf_pass` varchar(150) DEFAULT NULL,
  `zf_pay` text,
  `a_user_user` varchar(20) DEFAULT NULL,
  `a_user_pass` varchar(20) DEFAULT NULL,
  `a_sfkg` varchar(10) DEFAULT NULL,
  `a_wximg` varchar(255) DEFAULT NULL,
  `s_bftitle` text,
  `s_bfkeywords` text,
  `s_bfdescription` text,
  `a_kg1` varchar(5) DEFAULT NULL,
  `a_kg2` varchar(5) DEFAULT NULL,
  `a_kg3` varchar(5) DEFAULT NULL,
  `a_kg4` varchar(5) DEFAULT NULL,
  `a_kg5` varchar(5) DEFAULT NULL,
  `a_ylcs1` varchar(255) DEFAULT NULL,
  `a_ylcs2` varchar(255) DEFAULT NULL,
  `a_baidu` varchar(255) DEFAULT NULL,
  `a_xzh` varchar(255) DEFAULT NULL,
  `a_gjcpb` text,
  `a_gjcth` text,
  `a_mjgjc` text,
  `a_zdyurl` text,
  `a_mjlm` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_pintai
-- ----------------------------
INSERT INTO `yycms_pintai` VALUES ('1', '雨雨cms影视-全网免费在线观看-在线播放付费-神马影院', '雨雨cms影视', '127.0.0.1', '雨雨cms影视在线观看', '雨雨cms影视全网免费看', '0', '/uploadfile/load.png', '1', '1', '/uploadfile/image/20191011/20191011175729_62281.png', '0', '5', '/uploadfile/image/20190928/20190928230208_12287.png', '0', '/ck/index.php?url=', '线路一$/ck/index.php?url=', '', '1', '公告：欢迎光临XX影视，建议手机安装app观看，麻烦多多推荐身边人用！让本站走的更远！', '保留', '', '责任声明：本网站为非赢利性站点，本网站所有内容均来源于互联网相关站点自动搜索采集信息，版权归原创者所有，相关链接已经注明来源。本站只提供web页面服务,并不提供影片资源存储,也不参与录制', 'yycms', 'admin', 'admin12', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, 'admin', '123456', '0', '/uploadfile/image/20191014/20191014124116_75640.png', '{$bftitlezl}-在线观看-{$lx}-{$yycms_a_name}', '{$bftitlezl},{$timu}在线观看,{$bftitlezl}免费在线播放,{$bftitlezl}完整版', '{$bftitlezl}在线观看,{$bfjjzl}', '0', '1', '0', '0', '0', null, null, '122', '123', '你麻痹|什么玩意|你他妈', '123', '韩国美女,写真美女,展会美女,论理片,动作片', 'vod', null);

-- ----------------------------
-- Table structure for `yycms_sc`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_sc`;
CREATE TABLE `yycms_sc` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_user` varchar(10) DEFAULT NULL,
  `sc_name` varchar(10) NOT NULL,
  `sc_url` text NOT NULL,
  `sc_time` datetime NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_sc
-- ----------------------------
INSERT INTO `yycms_sc` VALUES ('1', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:49:53');
INSERT INTO `yycms_sc` VALUES ('2', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:55:17');
INSERT INTO `yycms_sc` VALUES ('3', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:55:20');
INSERT INTO `yycms_sc` VALUES ('4', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:55:38');
INSERT INTO `yycms_sc` VALUES ('5', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:56:07');
INSERT INTO `yycms_sc` VALUES ('6', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:56:51');
INSERT INTO `yycms_sc` VALUES ('7', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:57:51');
INSERT INTO `yycms_sc` VALUES ('8', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:57:56');
INSERT INTO `yycms_sc` VALUES ('9', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:58:10');
INSERT INTO `yycms_sc` VALUES ('10', '798701067', '送我上青云', '/vod/m/gqLnaBH5RXn6TB.html', '2019-10-12 02:58:17');
INSERT INTO `yycms_sc` VALUES ('16', '798701067', '超级兵王之战狼归来', '/qxplay/69.html', '2019-10-12 07:30:54');
INSERT INTO `yycms_sc` VALUES ('17', '798701067', '战狼特攻队', '/qxplay/82.html', '2019-11-09 04:34:37');
INSERT INTO `yycms_sc` VALUES ('18', '798701067', '', '', '2019-11-21 10:29:34');
INSERT INTO `yycms_sc` VALUES ('19', '123456', '速度与激情：特别行动', '/vod/m/fqfiYxH5RXn1SB.html', '2019-11-23 04:13:55');
INSERT INTO `yycms_sc` VALUES ('20', '123456', '你是我的城池营垒', '/vod/tv/59019.html', '2021-05-13 12:09:36');

-- ----------------------------
-- Table structure for `yycms_shoufei`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_shoufei`;
CREATE TABLE `yycms_shoufei` (
  `sf_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sf_pingtai` int(10) DEFAULT NULL,
  `sf_kg` varchar(11) NOT NULL DEFAULT '',
  `sf_cs` varchar(11) NOT NULL DEFAULT '',
  `sf_bl` varchar(11) DEFAULT '',
  `sf_zc` varchar(11) DEFAULT '',
  `sf_gk` varchar(11) DEFAULT '',
  `sf_km` text NOT NULL,
  `zf_kg` varchar(10) DEFAULT NULL,
  `zf_user` varchar(10) DEFAULT NULL,
  `zf_pass` varchar(255) DEFAULT NULL,
  `zf_pay` text,
  `sf_hyts` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sf_id`),
  KEY `d_letter` (`sf_zc`),
  KEY `d_name` (`sf_kg`),
  KEY `d_enname` (`sf_bl`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_shoufei
-- ----------------------------
INSERT INTO `yycms_shoufei` VALUES ('1', '1', '0', '6', '500', '6', '1', '', '1', '1368', '9uvNaidiDsnH7IukY7kiEYvdQUoDV7ib', '3', '5');

-- ----------------------------
-- Table structure for `yycms_slider`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_slider`;
CREATE TABLE `yycms_slider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(80) NOT NULL DEFAULT '',
  `type` tinyint(2) DEFAULT '0',
  `picpath` varchar(255) NOT NULL DEFAULT '0',
  `link` varchar(255) DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='幻灯';

-- ----------------------------
-- Records of yycms_slider
-- ----------------------------

-- ----------------------------
-- Table structure for `yycms_user`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_user`;
CREATE TABLE `yycms_user` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_pingtai` int(11) DEFAULT NULL,
  `b_user` varchar(30) DEFAULT NULL,
  `b_pass` varchar(50) DEFAULT NULL,
  `b_email` varchar(20) DEFAULT NULL,
  `b_ip` varchar(50) DEFAULT NULL,
  `b_jf` varchar(10) DEFAULT NULL,
  `b_hy` varchar(6) DEFAULT NULL,
  `b_zt` varchar(6) DEFAULT NULL,
  `b_cs` varchar(6) DEFAULT NULL,
  `b_tg` varchar(6) DEFAULT NULL,
  `b_start` datetime DEFAULT NULL,
  `b_end` datetime DEFAULT NULL,
  `b_type` datetime DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_user
-- ----------------------------
INSERT INTO `yycms_user` VALUES ('1', '1', '', '', null, null, '0', '2', '1', null, '0', '2021-05-12 01:20:09', null, '2021-05-12 01:20:09');
INSERT INTO `yycms_user` VALUES ('2', '1', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', null, null, '0', '2', '1', null, '0', '2021-05-12 01:22:36', null, '2021-05-12 01:22:36');
INSERT INTO `yycms_user` VALUES ('3', '1', '123456', 'e10adc3949ba59abbe56e057f20f883e', null, '127.0.0.1', '100', '2', '1', null, '0', '2021-05-12 01:23:07', '2021-05-12 14:23:31', '2022-06-16 01:23:07');

-- ----------------------------
-- Table structure for `yycms_user_pay`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_user_pay`;
CREATE TABLE `yycms_user_pay` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_pingtai` varchar(10) DEFAULT NULL,
  `p_dd` varchar(255) NOT NULL DEFAULT '0',
  `p_user` varchar(255) NOT NULL DEFAULT '0',
  `p_jf` varchar(255) NOT NULL DEFAULT '0',
  `p_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `p_lx` varchar(255) NOT NULL DEFAULT '0',
  `p_zt` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `p_order` (`p_dd`),
  KEY `p_uid` (`p_user`),
  KEY `p_status` (`p_zt`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_user_pay
-- ----------------------------
INSERT INTO `yycms_user_pay` VALUES ('1', '1', '123456', '798701067', '100', '2019-10-11 21:09:29', '0', '1');
INSERT INTO `yycms_user_pay` VALUES ('6', '46', '20191125192149232', '798701067', '0.01', '2019-11-25 19:21:49', '0', '0');

-- ----------------------------
-- Table structure for `yycms_vod`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_vod`;
CREATE TABLE `yycms_vod` (
  `b_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `b_name` varchar(255) NOT NULL DEFAULT '',
  `b_tp` varchar(255) NOT NULL DEFAULT '',
  `b_zy` varchar(255) DEFAULT '',
  `b_jf` varchar(11) DEFAULT '',
  `b_hy` varchar(11) DEFAULT '',
  `b_fl` varchar(255) DEFAULT '',
  `b_tj` varchar(255) DEFAULT '',
  `b_pass` varchar(0) DEFAULT NULL,
  `b_url` text,
  `b_jj` text,
  `b_time` datetime DEFAULT NULL,
  `b_baidu` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `d_letter` (`b_jf`),
  KEY `d_name` (`b_name`),
  KEY `d_enname` (`b_zy`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_vod
-- ----------------------------

-- ----------------------------
-- Table structure for `yycms_vod_class`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_vod_class`;
CREATE TABLE `yycms_vod_class` (
  `c_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(64) NOT NULL DEFAULT '',
  `c_pid` smallint(6) NOT NULL DEFAULT '0',
  `c_sort` smallint(6) NOT NULL DEFAULT '0',
  `c_hide` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`c_id`),
  KEY `c_sort` (`c_sort`),
  KEY `c_pid` (`c_pid`),
  KEY `c_hide` (`c_hide`)
) ENGINE=MyISAM AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_vod_class
-- ----------------------------
INSERT INTO `yycms_vod_class` VALUES ('1', '科幻', '0', '1', '0');
INSERT INTO `yycms_vod_class` VALUES ('2', '惊悚', '0', '2', '0');
INSERT INTO `yycms_vod_class` VALUES ('3', '犯罪', '0', '3', '0');
INSERT INTO `yycms_vod_class` VALUES ('4', '战争', '0', '4', '0');
INSERT INTO `yycms_vod_class` VALUES ('12', '日韩剧', '0', '12', '0');
INSERT INTO `yycms_vod_class` VALUES ('5', '剧情', '0', '5', '0');
INSERT INTO `yycms_vod_class` VALUES ('6', '动作', '0', '6', '0');
INSERT INTO `yycms_vod_class` VALUES ('7', '爱情', '0', '7', '0');
INSERT INTO `yycms_vod_class` VALUES ('8', '动漫', '0', '8', '0');
INSERT INTO `yycms_vod_class` VALUES ('9', '喜剧', '0', '9', '0');
INSERT INTO `yycms_vod_class` VALUES ('10', '动漫', '0', '10', '0');
INSERT INTO `yycms_vod_class` VALUES ('11', '欧美剧', '0', '11', '0');

-- ----------------------------
-- Table structure for `yycms_wx`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_wx`;
CREATE TABLE `yycms_wx` (
  `wx_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wx_pingtai` varchar(12) DEFAULT NULL,
  `wx_url` varchar(111) DEFAULT '',
  `wx_appid` varchar(150) DEFAULT '',
  `wx_appsecret` varchar(150) DEFAULT '',
  `wx_token` varchar(11) DEFAULT '',
  `wx_hf` text,
  `wx_ts` text,
  PRIMARY KEY (`wx_id`),
  KEY `d_letter` (`wx_token`),
  KEY `d_name` (`wx_url`),
  KEY `d_enname` (`wx_appsecret`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_wx
-- ----------------------------
INSERT INTO `yycms_wx` VALUES ('1', '1', 'http://v.lxh5068.com/', 'wxbe0a32b6499b', 'c9a7666817f884d', '1993', '欢迎加入公众号:SSN5068.回复你想看的影片关键词就行了', '资源没找到,请更改关键词,或者等待更新1');

-- ----------------------------
-- Table structure for `yycms_yl`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_yl`;
CREATE TABLE `yycms_yl` (
  `yl_id` int(11) NOT NULL AUTO_INCREMENT,
  `yl_name` varchar(10) NOT NULL,
  `yl_url` text NOT NULL,
  PRIMARY KEY (`yl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_yl
-- ----------------------------
INSERT INTO `yycms_yl` VALUES ('2', '影视资讯', '/zx-zn-1.html');

-- ----------------------------
-- Table structure for `yycms_zhifu`
-- ----------------------------
DROP TABLE IF EXISTS `yycms_zhifu`;
CREATE TABLE `yycms_zhifu` (
  `zf_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `zf_kg` int(10) DEFAULT NULL,
  `zf_user` varchar(11) NOT NULL DEFAULT '',
  `zf_pass` varchar(250) NOT NULL DEFAULT '',
  `zf_pay` text,
  PRIMARY KEY (`zf_id`),
  KEY `d_name` (`zf_user`),
  KEY `d_enname` (`zf_pay`(11))
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yycms_zhifu
-- ----------------------------
INSERT INTO `yycms_zhifu` VALUES ('1', '1', '2507', 'BAhV7SvsBtQqc78Taa7q9Ww7S8ZBA997', '2');
