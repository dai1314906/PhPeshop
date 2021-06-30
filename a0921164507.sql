/*
Navicat MySQL Data Transfer

Source Server         : PHPstudy
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : db_ebusiness

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-20 23:52:52
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tb_address`
-- ----------------------------
DROP TABLE IF EXISTS `tb_address`;
CREATE TABLE `tb_address` (
  `adid` int(10) NOT NULL AUTO_INCREMENT,
  `consigner` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `ad_content` varchar(30) DEFAULT NULL,
  `deid` int(10) DEFAULT '0',
  `uid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adid`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_address
-- ----------------------------
INSERT INTO tb_address VALUES ('11', '陈睿龙', '15320205418', '四川凉山州', '0', '1');
INSERT INTO tb_address VALUES ('12', '陈', '15900001111', '重庆市沙坪坝区', null, '1');
INSERT INTO tb_address VALUES ('14', '戴林', '15310563225', '四川巴中', null, '2');
INSERT INTO tb_address VALUES ('16', '刘洋洲', '15656893889', '四川巴中', null, '3');

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) DEFAULT NULL,
  `admin_pwd` varchar(20) DEFAULT NULL,
  `createtime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO tb_admin VALUES ('1', 'dai', '123', null);

-- ----------------------------
-- Table structure for `tb_advertising`
-- ----------------------------
DROP TABLE IF EXISTS `tb_advertising`;
CREATE TABLE `tb_advertising` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) DEFAULT NULL,
  `apic` varchar(255) DEFAULT NULL,
  `alink` varchar(255) DEFAULT NULL,
  `aprice` varchar(255) DEFAULT NULL,
  `aoprice` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_advertising
-- ----------------------------
INSERT INTO tb_advertising VALUES ('1', '小米10', 'images/t6.png', 'https://www.mi.com/index.html', '2500', '3000');
INSERT INTO tb_advertising VALUES ('2', 'HP', 'images/t5.png', 'https://www.hpstore.cn/', '5999', '6800');
INSERT INTO tb_advertising VALUES ('3', '红米', 'images/t2.png', 'https://www.mi.com/index.html', '1600', '2000');
INSERT INTO tb_advertising VALUES ('4', 'DELL主机', 'images/t1.png', 'https://eshop.dell-brand.com/2019promo/', '2000', '2300');
INSERT INTO tb_advertising VALUES ('5', '罗技键盘', 'images/t3.png', 'https://www.taobao.com/', '139', '160');
INSERT INTO tb_advertising VALUES ('6', 'DELL笔记本', 'images/t4.png', 'brand.com/2019promo/', '6800', '7000');
INSERT INTO tb_advertising VALUES ('7', 'oppo5G', 'images/t7.png', 'https://www.oppo.com/cn/', '2900', '3100');
INSERT INTO tb_advertising VALUES ('8', '华为5G', 'images/t8.png', 'https://www.huawei.com/', '1900', '2100');

-- ----------------------------
-- Table structure for `tb_buy`
-- ----------------------------
DROP TABLE IF EXISTS `tb_buy`;
CREATE TABLE `tb_buy` (
  `bid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `state` int(1) DEFAULT NULL,
  `payway` varchar(50) DEFAULT NULL,
  `content` text,
  `btime` datetime DEFAULT NULL,
  `re_status` varchar(10) DEFAULT NULL,
  `ship_status` varchar(10) DEFAULT NULL,
  `ship_data` varchar(50) DEFAULT NULL,
  `commoney` int(50) DEFAULT NULL,
  `caid` int(10) NOT NULL,
  PRIMARY KEY (`bid`,`uid`,`caid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_buy
-- ----------------------------
INSERT INTO tb_buy VALUES ('1', '1', null, '支付宝', null, '2020-06-05 23:04:45', null, null, '顺丰快递', null, '0');
INSERT INTO tb_buy VALUES ('2', '2', null, '微信', null, '2020-06-05 23:05:46', null, null, '圆通快递', null, '0');
INSERT INTO tb_buy VALUES ('3', '1', null, '中国工商', null, '2020-06-06 09:37:47', null, null, '圆通快递', null, '0');
INSERT INTO tb_buy VALUES ('4', '1', null, null, null, '2020-06-06 10:23:15', null, null, null, null, '0');
INSERT INTO tb_buy VALUES ('5', '1', null, '中国银行', null, '2020-06-06 10:24:01', null, null, '邮政快递', null, '0');
INSERT INTO tb_buy VALUES ('6', '2', null, '中国银行', null, '2020-06-06 10:24:43', null, null, '圆通快递', null, '0');
INSERT INTO tb_buy VALUES ('7', '1', null, '中国工商', null, '2020-06-15 15:04:41', null, null, '邮政快递', null, '0');
INSERT INTO tb_buy VALUES ('8', '1', null, '中国银行', null, '2020-06-16 19:09:04', null, null, '天天快递', null, '0');
INSERT INTO tb_buy VALUES ('9', '2', null, null, null, '2020-06-16 19:14:34', null, null, null, null, '0');
INSERT INTO tb_buy VALUES ('10', '2', null, null, null, '2020-06-17 15:43:48', null, null, null, null, '0');
INSERT INTO tb_buy VALUES ('11', '3', null, '中国银行', null, '2020-06-18 00:07:37', null, null, '顺丰快递', null, '0');
INSERT INTO tb_buy VALUES ('12', '2', null, '中国银行', null, '2020-06-18 00:59:58', null, null, '圆通快递', null, '0');
INSERT INTO tb_buy VALUES ('13', '2', null, '中国银行', null, '2020-06-18 01:04:05', null, null, '天天快递', null, '0');
INSERT INTO tb_buy VALUES ('14', '3', null, '中国银行', null, '2020-06-18 01:07:14', null, null, '天天快递', null, '0');
INSERT INTO tb_buy VALUES ('15', '3', null, '', null, '2020-06-18 01:11:21', null, null, '', null, '0');
INSERT INTO tb_buy VALUES ('16', '3', null, '', null, '2020-06-18 01:13:35', null, null, '', null, '0');
INSERT INTO tb_buy VALUES ('17', '3', null, '中国工商', null, '2020-06-18 01:24:43', null, null, '顺丰快递', null, '0');
INSERT INTO tb_buy VALUES ('18', '3', null, null, null, '2020-06-18 12:28:51', null, null, null, null, '0');
INSERT INTO tb_buy VALUES ('19', '3', null, '中国工商', null, '2020-06-18 15:09:48', null, null, '天天快递', null, '0');
INSERT INTO tb_buy VALUES ('20', '3', null, null, null, '2020-06-19 01:28:27', null, null, null, null, '0');
INSERT INTO tb_buy VALUES ('21', '2', null, '中国银行', null, '2020-06-19 18:15:08', null, null, '天天快递', null, '0');
INSERT INTO tb_buy VALUES ('22', '3', null, '中国银行', null, '2020-06-20 12:58:47', null, null, '邮政快递', null, '125');
INSERT INTO tb_buy VALUES ('23', '1', null, '中国工商', null, '2020-06-20 13:20:30', null, null, '邮政快递', null, '85');
INSERT INTO tb_buy VALUES ('24', '1', null, '中国工商', null, '2020-06-20 13:30:10', null, null, '天天快递', null, '127');
INSERT INTO tb_buy VALUES ('25', '1', null, '中国工商', null, '2020-06-20 13:31:41', null, null, '天天快递', null, '127');
INSERT INTO tb_buy VALUES ('26', '3', null, '中国银行', null, '2020-06-20 13:35:56', null, null, '圆通快递', null, '125');
INSERT INTO tb_buy VALUES ('27', '2', null, '中国工商', null, '2020-06-20 18:18:43', null, null, '天天快递', null, '88');
INSERT INTO tb_buy VALUES ('28', '2', null, '中国工商', null, '2020-06-20 18:39:21', null, null, '邮政快递', null, '0');
INSERT INTO tb_buy VALUES ('29', '2', null, '中国工商', null, '2020-06-20 18:40:20', null, null, '天天快递', null, '129');

-- ----------------------------
-- Table structure for `tb_cart`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cart`;
CREATE TABLE `tb_cart` (
  `caid` int(10) NOT NULL AUTO_INCREMENT,
  `catime` datetime DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  `canum` int(20) DEFAULT '1',
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`caid`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of tb_cart
-- ----------------------------
INSERT INTO tb_cart VALUES ('85', '2020-06-01 13:25:46', '3', '1', '1');
INSERT INTO tb_cart VALUES ('68', '2020-05-28 11:17:44', '2', '1', '1');
INSERT INTO tb_cart VALUES ('124', '2020-06-20 12:36:10', '4', '1', '3');
INSERT INTO tb_cart VALUES ('118', '2020-06-18 11:52:55', '3', '1', '3');
INSERT INTO tb_cart VALUES ('119', '2020-06-18 11:54:32', '5', '1', '3');
INSERT INTO tb_cart VALUES ('120', null, null, null, null);
INSERT INTO tb_cart VALUES ('121', '2020-06-18 14:32:58', null, '1', null);
INSERT INTO tb_cart VALUES ('123', '2020-06-20 12:31:20', '7', '1', '3');
INSERT INTO tb_cart VALUES ('125', '2020-06-20 12:44:00', '6', '2', '3');
INSERT INTO tb_cart VALUES ('126', '2020-06-20 12:44:04', '6', '1', '3');
INSERT INTO tb_cart VALUES ('127', '2020-06-20 13:30:01', '7', '1', '1');
INSERT INTO tb_cart VALUES ('128', '2020-06-20 18:18:11', '4', '1', '2');
INSERT INTO tb_cart VALUES ('129', '2020-06-20 18:39:52', '7', '12', '2');

-- ----------------------------
-- Table structure for `tb_commodity`
-- ----------------------------
DROP TABLE IF EXISTS `tb_commodity`;
CREATE TABLE `tb_commodity` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `cpic` varchar(255) DEFAULT NULL,
  `cprice` varchar(50) DEFAULT NULL,
  `cgrade` varchar(50) DEFAULT NULL,
  `cnum` varchar(50) DEFAULT NULL,
  `cconsult` varchar(50) DEFAULT NULL,
  `ccomment` varchar(50) DEFAULT NULL,
  `cdetail` varchar(50) DEFAULT NULL,
  `csale` varchar(50) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_commodity
-- ----------------------------
INSERT INTO tb_commodity VALUES ('2', 'AAA', 'images/c1.png', '3000', null, '894', null, null, '为发烧而生', '999', '2020-05-27 21:50:15', null, '电脑');
INSERT INTO tb_commodity VALUES ('3', 'BBB', 'images/c2.png', '10000', null, '630', null, null, 'hadvjgagshgdhfvdh', '8999', '2020-06-01 21:23:58', null, '电脑');
INSERT INTO tb_commodity VALUES ('4', 'CCC', 'images/c3.png', '2000', null, '750', null, null, 'sdbfabjfbjb', '999', '2020-06-01 21:24:44', null, '电脑');
INSERT INTO tb_commodity VALUES ('5', 'DDD', 'images/c4.png', '8000', null, '300', null, null, 'dshfhnbdcnbn', '899', '2020-06-06 10:38:40', null, '电脑');
INSERT INTO tb_commodity VALUES ('6', 'EEE', 'images/c5.png', '3000', null, '600', null, null, 'sdjhfjsdbnvbdndsz', '6999', '2020-06-06 10:39:34', null, '电脑');
INSERT INTO tb_commodity VALUES ('7', 'FFF', 'images/c6.png', '7000', null, '560', null, null, 'asjdbsnabhbh', '8888', '2020-06-06 10:40:04', null, '电脑');
INSERT INTO tb_commodity VALUES ('8', 'GGG', 'images/c7.png', '6500', null, '890', null, null, 'sdkfdnk', '1233', '2020-06-06 14:31:45', null, '电脑');
INSERT INTO tb_commodity VALUES ('9', 'HHH', 'images/c8.png', '5130', null, '4612', null, null, 'zxdffgzdrh', '999', null, null, '电脑');
INSERT INTO tb_commodity VALUES ('10', 'III', 'images/c9.png', '8900', null, '121', null, null, 'arhareh', '630', null, null, '电脑');
INSERT INTO tb_commodity VALUES ('11', 'JJJ', 'images/c10.png', '3600', null, '126126', null, null, 'dzrhre', '998', null, null, '电脑');
INSERT INTO tb_commodity VALUES ('12', 'KKK', 'images/c11.png', '5600', null, '5216', null, null, 'rhgearh', '6323', null, null, '电脑');
INSERT INTO tb_commodity VALUES ('13', 'LLL', 'images/c12.png', '7800', null, '12313', null, null, 'adrherh', '131313', null, null, '电脑');
INSERT INTO tb_commodity VALUES ('14', 'MMM', 'images/p1.png', '2000', null, '45343', null, null, 'sagagewag', '33332', null, null, '手机');
INSERT INTO tb_commodity VALUES ('15', 'NNN', 'images/p2.png', '3000', null, '123123', null, null, 'ashfjadjgg', '1546', null, null, '手机');
INSERT INTO tb_commodity VALUES ('16', 'OOO', 'images/p3.png', '2300', null, '534', null, null, 'fgdry', '546', null, null, '手机');
INSERT INTO tb_commodity VALUES ('17', 'PPP', 'images/p4.png', '2400', null, '34554', null, null, 'ewg', '543', null, null, '手机');
INSERT INTO tb_commodity VALUES ('18', 'QQQ', 'images/p5.png', '2500', null, '3543', null, null, 'gEW', '453', null, null, '手机');
INSERT INTO tb_commodity VALUES ('19', 'RRR', 'images/p6.png', '1900', null, '535', null, null, 'Wge', '453', null, null, '手机');
INSERT INTO tb_commodity VALUES ('20', 'SSS', 'images/p7.png', '1600', null, '453', null, null, 'grg', '43', null, null, '手机');
INSERT INTO tb_commodity VALUES ('21', 'TTT', 'images/p8.png', '3600', null, '4353', null, null, 'GGREA', '2345', null, null, '手机');
INSERT INTO tb_commodity VALUES ('22', 'UUU', 'images/p9.png', '1800', null, '4534', null, null, 'AGrg', '34', null, null, '手机');
INSERT INTO tb_commodity VALUES ('23', 'VVV', 'images/p10.png', '1230', null, '38738', null, null, 'srgh', '354', null, null, '手机');
INSERT INTO tb_commodity VALUES ('24', 'WWW', 'images/p11.png', '1640', null, '455', null, null, 'hreh', '234', null, null, '手机');
INSERT INTO tb_commodity VALUES ('25', 'XXX', 'images/p12.png', '1650', null, '423', null, null, 'ardsh', '4563', null, null, '手机');
INSERT INTO tb_commodity VALUES ('26', 'ABC', 'images/b1.png', '120', null, '453', null, null, 'dfhjrstn', '453', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('27', 'QWE', 'images/b2.png', '360', null, '543', null, null, 'aerhatn', '35453', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('28', 'ASS', 'images/b3.png', '240', null, '35', null, null, 'arehbatehn', '435545', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('29', 'SDF', 'images/b4.png', '46', null, '453', null, null, 'sdbgsdns', '453', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('30', 'XCV', 'images/b5.png', '69', null, '13', null, null, 'zdgngsrnw', '25', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('31', 'TYU', 'images/b6.png', '780', null, '934', null, null, 'tdfnyerjdfazb', '7834', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('32', 'UIO', 'images/b7.png', '390', null, '834', null, null, 'gdfnasdntrjn', '435', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('33', 'FGH', 'images/b8.png', '230', null, '735', null, null, 'rehtrsn', '453', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('34', 'HJK', 'images/b9.png', '150', null, '64', null, null, 'dafhbstdhn', '1252', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('35', 'BNM', 'images/b10.png', '132', null, '53444', null, null, 'adrbnthnt', '78638', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('36', 'JKL', 'images/b11.png', '156', null, '4538', null, null, 'jwyrj', '78632', null, null, '键盘');
INSERT INTO tb_commodity VALUES ('37', 'RTY', 'images/b12.png', '198', null, '8242', null, null, 'yjrjetuykj', '4537', null, null, '键盘');

-- ----------------------------
-- Table structure for `tb_commodity_category`
-- ----------------------------
DROP TABLE IF EXISTS `tb_commodity_category`;
CREATE TABLE `tb_commodity_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  `father_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_commodity_category
-- ----------------------------
INSERT INTO tb_commodity_category VALUES ('1', '电脑', null);
INSERT INTO tb_commodity_category VALUES ('2', '手机', null);
INSERT INTO tb_commodity_category VALUES ('3', '键盘', null);

-- ----------------------------
-- Table structure for `tb_consult`
-- ----------------------------
DROP TABLE IF EXISTS `tb_consult`;
CREATE TABLE `tb_consult` (
  `conid` int(10) NOT NULL AUTO_INCREMENT,
  `concontent` text,
  `contime` datetime DEFAULT NULL,
  `reptext` text,
  `reptime` datetime DEFAULT NULL,
  `uid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  PRIMARY KEY (`conid`,`uid`,`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_consult
-- ----------------------------
INSERT INTO tb_consult VALUES ('1', '123', '2020-06-17 22:38:51', ' qwefq3rghrt5h', '2020-06-20 02:30:35', '3', '3');
INSERT INTO tb_consult VALUES ('2', '1221213', '2020-06-17 22:42:02', 'zjdbsjbjadrfb', '2020-06-20 02:26:13', '3', '3');
INSERT INTO tb_consult VALUES ('3', '输入内容...', '2020-06-17 22:55:56', null, null, '2', '7');
INSERT INTO tb_consult VALUES ('4', 'shfsjsndks', '2020-06-17 23:00:43', null, null, '2', '4');
INSERT INTO tb_consult VALUES ('5', 'shnadfivsnjfb', '2020-06-17 23:00:48', null, null, '2', '4');
INSERT INTO tb_consult VALUES ('6', 'sjadnjkbndfkbt', '2020-06-17 23:01:20', null, null, '2', '4');
INSERT INTO tb_consult VALUES ('7', 'gjgsdfjjfvafsd', '2020-06-17 23:02:14', null, null, '1', '5');
INSERT INTO tb_consult VALUES ('8', 'sbdajbfhbndb', '2020-06-17 23:02:21', null, null, '1', '5');
INSERT INTO tb_consult VALUES ('9', 'wefqerhg', '2020-06-20 18:42:44', '            DGERGH4', '2020-06-20 18:43:00', '2', '15');

-- ----------------------------
-- Table structure for `tb_essay`
-- ----------------------------
DROP TABLE IF EXISTS `tb_essay`;
CREATE TABLE `tb_essay` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `econtent` text,
  `eheadline` text,
  `etime` datetime DEFAULT NULL,
  `tec_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_essay
-- ----------------------------
INSERT INTO tb_essay VALUES ('1', null, '公司简介', '2020-04-24 21:58:48', '公司简介');
INSERT INTO tb_essay VALUES ('2', null, null, null, null);
INSERT INTO tb_essay VALUES ('3', '系统将于2020-6-8更新！给您带来不便，请谅解！', '系统更新通知', '2020-06-06 17:10:18', '系统升级');

-- ----------------------------
-- Table structure for `tb_essay_category`
-- ----------------------------
DROP TABLE IF EXISTS `tb_essay_category`;
CREATE TABLE `tb_essay_category` (
  `tec_id` int(10) NOT NULL AUTO_INCREMENT,
  `tec_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_essay_category
-- ----------------------------
INSERT INTO tb_essay_category VALUES ('1', '系统升级');

-- ----------------------------
-- Table structure for `tb_evaluate`
-- ----------------------------
DROP TABLE IF EXISTS `tb_evaluate`;
CREATE TABLE `tb_evaluate` (
  `evid` int(10) NOT NULL AUTO_INCREMENT,
  `evcontent` text,
  `evtime` datetime DEFAULT NULL,
  `bid` int(10) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`evid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_evaluate
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_leaveword`
-- ----------------------------
DROP TABLE IF EXISTS `tb_leaveword`;
CREATE TABLE `tb_leaveword` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `lcontent` text CHARACTER SET gb2312,
  `ltime` datetime DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_leaveword
-- ----------------------------
INSERT INTO tb_leaveword VALUES ('18', 'sdjhfjbdsjb', '2020-06-06 21:28:05');
INSERT INTO tb_leaveword VALUES ('19', 'sdbhfjsebfjwbfjwBHRJF', '2020-06-16 19:17:23');

-- ----------------------------
-- Table structure for `tb_link`
-- ----------------------------
DROP TABLE IF EXISTS `tb_link`;
CREATE TABLE `tb_link` (
  `liid` int(10) NOT NULL AUTO_INCREMENT,
  `liname` varchar(50) DEFAULT NULL,
  `liurl` varchar(50) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`liid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_link
-- ----------------------------
INSERT INTO tb_link VALUES ('1', '淘宝', 'https://www.taobao.com/', '2020-04-23 23:30:50');
INSERT INTO tb_link VALUES ('2', '京东', 'https://www.jd.com/', '2020-06-06 10:44:47');
INSERT INTO tb_link VALUES ('3', '小米', 'https://www.mi.com/', '2020-06-06 10:46:07');

-- ----------------------------
-- Table structure for `tb_order_details`
-- ----------------------------
DROP TABLE IF EXISTS `tb_order_details`;
CREATE TABLE `tb_order_details` (
  `od_id` int(10) NOT NULL AUTO_INCREMENT,
  `bid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `num` varchar(50) DEFAULT '1',
  `price` varchar(50) DEFAULT NULL,
  `rateing` int(10) DEFAULT NULL,
  PRIMARY KEY (`od_id`,`bid`,`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order_details
-- ----------------------------
INSERT INTO tb_order_details VALUES ('1', '1', '3', null, '1', null, null);
INSERT INTO tb_order_details VALUES ('2', '2', '3', null, '78', null, null);
INSERT INTO tb_order_details VALUES ('3', '3', '3', null, '56', null, null);
INSERT INTO tb_order_details VALUES ('4', '4', '4', null, null, null, null);
INSERT INTO tb_order_details VALUES ('5', '5', '2', null, '12', null, null);
INSERT INTO tb_order_details VALUES ('6', '6', '4', null, '23', null, null);
INSERT INTO tb_order_details VALUES ('7', '7', '3', null, '18', null, null);
INSERT INTO tb_order_details VALUES ('8', '8', '2', null, '899', null, null);
INSERT INTO tb_order_details VALUES ('9', '9', '5', null, null, null, null);
INSERT INTO tb_order_details VALUES ('10', '10', '3', null, null, null, null);
INSERT INTO tb_order_details VALUES ('11', '11', '3', null, '1', null, null);
INSERT INTO tb_order_details VALUES ('12', '12', '6', null, '45', null, null);
INSERT INTO tb_order_details VALUES ('13', '13', '5', null, null, null, null);
INSERT INTO tb_order_details VALUES ('14', '14', '8', null, null, null, '5');
INSERT INTO tb_order_details VALUES ('15', '15', '4', null, '78', null, null);
INSERT INTO tb_order_details VALUES ('16', '16', '3', null, '1', null, null);
INSERT INTO tb_order_details VALUES ('17', '17', '5', null, '12', null, null);
INSERT INTO tb_order_details VALUES ('18', '18', '8', null, '1', null, null);
INSERT INTO tb_order_details VALUES ('19', '20', '3', null, '1', null, null);
INSERT INTO tb_order_details VALUES ('20', '21', '3', null, '1', null, null);
INSERT INTO tb_order_details VALUES ('21', '28', '27', null, '1', null, null);

-- ----------------------------
-- Table structure for `tb_pay_method`
-- ----------------------------
DROP TABLE IF EXISTS `tb_pay_method`;
CREATE TABLE `tb_pay_method` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `ppic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_pay_method
-- ----------------------------
INSERT INTO tb_pay_method VALUES ('1', '中国工商', null);
INSERT INTO tb_pay_method VALUES ('2', '中国银行', null);

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `truename` varchar(50) DEFAULT NULL,
  `usertel` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO tb_user VALUES ('1', 'dailin', '戴林', '15983982132', '456', '女', '789@qq.com', '2020-05-27 21:50:15');
INSERT INTO tb_user VALUES ('2', 'chen', '陈波', '15310563225', '123', '女', '963@qq.com', '2020-06-01 21:24:44');
INSERT INTO tb_user VALUES ('3', 'liu', '刘辰', '18878964523', '789', '女', '753@qq.com', '2020-06-06 14:31:45');
