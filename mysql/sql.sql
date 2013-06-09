-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 06 月 09 日 08:47
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_certificate`
--

CREATE TABLE IF NOT EXISTS `t_certificate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='签证表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `t_certificate`
--

INSERT INTO `t_certificate` (`id`, `name`) VALUES
(1, '定居签证'),
(2, '学习签证'),
(3, '过境签证'),
(4, '职业签证'),
(5, '旅游签证');

-- --------------------------------------------------------

--
-- 表的结构 `t_city`
--

CREATE TABLE IF NOT EXISTS `t_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '地市id',
  `name` varchar(60) NOT NULL COMMENT '地市名称',
  `parent_id` int(11) NOT NULL COMMENT '上级地市',
  `sort` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=265 ;

--
-- 转存表中的数据 `t_city`
--

INSERT INTO `t_city` (`id`, `name`, `parent_id`, `sort`) VALUES
(1, '中国', 0, 0),
(2, '美国', 0, 0),
(3, '广东', 1, 0),
(4, '深圳', 3, 0),
(5, '湖北', 1, 0),
(51, 'AD The Principality of Andorra[2]安道尔', 0, 0),
(52, 'AE UNITED EMIRATES阿拉伯联合酋长国', 0, 0),
(53, 'AF Afghanistan阿富汗', 0, 0),
(54, 'AL Albania阿尔巴尼亚', 0, 0),
(55, 'AD Andorra安道尔', 0, 0),
(56, 'AO Angola安哥拉', 0, 0),
(57, 'AQ Antarctica南极洲', 0, 0),
(58, 'AG ANtigua and Barbuda安提瓜和巴布达', 0, 0),
(59, 'AR Argentina阿根廷', 0, 0),
(60, 'AM Armenia亚美尼亚', 0, 0),
(61, 'AU Australia澳大利亚', 0, 0),
(62, 'AT Austria奥地利', 0, 0),
(63, 'AZ Azerbaijan阿塞拜疆', 0, 0),
(64, 'AE United Arab Emirates阿拉伯联合酋长国', 0, 0),
(65, 'BS Bahamas巴哈马', 0, 0),
(66, 'BH Bahrain巴林', 0, 0),
(67, 'BD Bangladesh孟加拉国', 0, 0),
(68, 'BB Barbados巴巴多斯', 0, 0),
(69, 'BY Belarus白俄罗斯', 0, 0),
(70, 'BZ Belize伯利兹', 0, 0),
(71, 'BE Belgium比利时', 0, 0),
(72, 'BJ Benin贝宁', 0, 0),
(73, 'BM Bermuda百慕大', 0, 0),
(74, 'BT Bhutan不丹', 0, 0),
(75, 'BO Bolivia玻利维亚', 0, 0),
(76, 'BA Bosnia and Herzegovina波斯尼亚和黑塞哥维那', 0, 0),
(77, 'BW Botswana博茨瓦纳', 0, 0),
(78, 'BV Bouvet Island布维岛', 0, 0),
(79, 'BR Brazil巴西', 0, 0),
(80, 'BN Brunei Darussalam文莱', 0, 0),
(81, 'BG Bulgaria保加利亚', 0, 0),
(82, 'BF Burkina Faso布基纳法索', 0, 0),
(83, 'BI Burundi布隆迪', 0, 0),
(84, 'CM Cameroon喀麦隆', 0, 0),
(85, 'CA Canada加拿大', 0, 0),
(86, 'CV Cape Verde佛得角', 0, 0),
(87, 'CF The Central African Republic中非共和国', 0, 0),
(88, 'CL Chile智利', 0, 0),
(89, 'CN China中国', 0, 0),
(90, 'CX Christmas Island圣诞岛', 0, 0),
(91, 'CO Colombia哥伦比亚', 0, 0),
(92, 'CH Switzerland瑞士', 0, 0),
(93, 'CG Congo刚果共和国，刚果（布）', 0, 0),
(94, 'CK Cook Island库克群岛', 0, 0),
(95, 'CR Costa rica哥斯达黎加', 0, 0),
(96, 'CI Coate d&Ivorie科特迪瓦', 0, 0),
(97, 'CU Cuba古巴', 0, 0),
(98, 'CY Cyprus塞浦路斯', 0, 0),
(99, 'CZ Czech捷克', 0, 0),
(100, 'DK Denmark丹麦', 0, 0),
(101, 'DJ Djibouti吉布提', 0, 0),
(102, 'DM Dominica多米尼加共和国', 0, 0),
(103, 'DE Germany德国', 0, 0),
(104, 'DO Dominica多米尼加', 0, 0),
(105, 'DZ Algeria阿尔及利亚', 0, 0),
(106, 'EC Ecuador厄瓜多尔', 0, 0),
(107, 'EG Egypt埃及', 0, 0),
(108, 'EH West Sahara西撒哈拉', 0, 0),
(109, 'ES Spain西班牙', 0, 0),
(110, 'EE Estonia爱沙尼亚', 0, 0),
(111, 'ET Ethiopia埃塞俄比亚', 0, 0),
(112, 'FJ Fiji斐济', 0, 0),
(113, 'FI Finland芬兰', 0, 0),
(114, 'FR France法国', 0, 0),
(115, 'FM Micronesia密克罗尼西亚联邦', 0, 0),
(116, 'GA Gabon加蓬', 0, 0),
(117, 'GQ Equatorial Guinea赤道几内亚', 0, 0),
(118, 'GF French Guiana法属圭亚那', 0, 0),
(119, 'GM Gambia冈比亚', 0, 0),
(120, 'GE Georgia格鲁吉亚', 0, 0),
(121, 'GH Ghana加纳', 0, 0),
(122, 'GI Gibraltar直布罗陀', 0, 0),
(123, 'GR Greece希腊', 0, 0),
(124, 'GL Greenland格陵兰', 0, 0),
(125, 'GB United Kingdom英国[3]', 0, 0),
(126, 'GD Grenada格林纳达', 0, 0),
(127, 'GU Guam关岛', 0, 0),
(128, 'GT Guatemala危地马拉', 0, 0),
(129, 'GN Guinea几内亚', 0, 0),
(130, 'GW Guinea-Bissau几内亚比绍', 0, 0),
(131, 'GY Guyana圭亚那', 0, 0),
(132, 'HR Croatia克罗地亚', 0, 0),
(133, 'HT Haiti海地', 0, 0),
(134, 'HN Honduras洪都拉斯', 0, 0),
(135, 'HU Hungary匈牙利', 0, 0),
(136, 'IS Iceland冰岛', 0, 0),
(137, 'IN India印度', 0, 0),
(138, 'ID Indonesia印度尼西亚', 0, 0),
(139, 'IR Iran伊朗', 0, 0),
(140, 'IQ Iraq伊拉克', 0, 0),
(141, 'IE Ireland爱尔兰', 0, 0),
(142, 'IL Israel以色列', 0, 0),
(143, 'IT Italy意大利', 0, 0),
(144, 'JM Jamaica牙买加', 0, 0),
(145, 'JP Japan日本', 0, 0),
(146, 'JO Jordan约旦', 0, 0),
(147, 'KZ Kazakhstan哈萨克斯坦', 0, 0),
(148, 'KE Kenya肯尼亚', 0, 0),
(149, 'KI Kiribati基里巴斯', 0, 0),
(150, 'KP North Korea朝鲜', 0, 0),
(151, 'KR Korea韩国', 0, 0),
(152, 'KH Cambodia柬埔寨', 0, 0),
(153, 'KM Comoros科摩罗', 0, 0),
(154, 'KW Kuwait科威特', 0, 0),
(155, 'KG Kyrgyzstan吉尔吉斯斯坦', 0, 0),
(156, 'KY Cayman Islands开曼群岛', 0, 0),
(157, 'LA Laos老挝', 0, 0),
(158, 'LK Sri Lanka斯里兰卡', 0, 0),
(159, 'LV Latvia拉托维亚', 0, 0),
(160, 'LB Lebanon黎巴嫩', 0, 0),
(161, 'LS Lesotho莱索托', 0, 0),
(162, 'LR Liberia利比里亚', 0, 0),
(163, 'LY Libya利比亚', 0, 0),
(164, 'LI Liechtenstein列支敦士登', 0, 0),
(165, 'LT Lithuania立陶宛', 0, 0),
(166, 'LU Luxembourg卢森堡', 0, 0),
(167, 'LC St. Lucia圣卢西亚', 0, 0),
(168, 'MG Madagascar马达加斯加', 0, 0),
(169, 'MW Malawi马拉维', 0, 0),
(170, 'MY Malaysia马来西亚', 0, 0),
(171, 'MV Maldives马尔代夫', 0, 0),
(172, 'ML Mali马里', 0, 0),
(173, 'MT Malta马耳他', 0, 0),
(174, 'MH Marshall Islands马绍尔群岛', 0, 0),
(175, 'MR Mauritania毛里塔尼亚', 0, 0),
(176, 'MU Mauritius毛里求斯', 0, 0),
(177, 'MX Mexico墨西哥', 0, 0),
(178, 'MD Moldova摩尔多瓦', 0, 0),
(179, 'MC Monaco摩纳哥', 0, 0),
(180, 'MN Mongolia蒙古', 0, 0),
(181, 'MS Montserrat蒙特塞拉特', 0, 0),
(182, 'MA Morocco摩洛哥', 0, 0),
(183, 'MZ Mozambique莫桑比克', 0, 0),
(184, 'MM Burma缅甸', 0, 0),
(185, 'MP Northern Mariana Islands北马里亚那群岛', 0, 0),
(186, 'NA Namibia纳米比亚', 0, 0),
(187, 'NR Naura瑙鲁', 0, 0),
(188, 'NP Nepal尼泊尔', 0, 0),
(189, 'NL Netherlands荷兰', 0, 0),
(190, 'NC New Caledonia新喀里多尼亚', 0, 0),
(191, 'NZ New Zealand新西兰', 0, 0),
(192, 'NI Nicaragua尼加拉瓜', 0, 0),
(193, 'NE Niger尼日尔', 0, 0),
(194, 'NG Nigeria尼日利亚', 0, 0),
(195, 'NU Niue纽埃', 0, 0),
(196, 'NF Norfolk Island诺福克岛', 0, 0),
(197, 'NO Norway挪威', 0, 0),
(198, 'OM Oman阿曼', 0, 0),
(199, 'PK Pakistan巴基斯坦', 0, 0),
(200, 'PF French Polynesia法属波利尼西亚', 0, 0),
(201, 'PW Palau帕劳', 0, 0),
(202, 'PA Panama巴拿马', 0, 0),
(203, 'PG Papua New Guinea巴布亚新几内亚', 0, 0),
(204, 'PY Paraguay巴拉圭', 0, 0),
(205, 'PE Peru秘鲁', 0, 0),
(206, 'PH Philippines菲律宾', 0, 0),
(207, 'PN Pitcairn Islands皮特开恩群岛', 0, 0),
(208, 'PL Poland波兰', 0, 0),
(209, 'PT Portugal葡萄牙', 0, 0),
(210, 'PR Puerto Rico波多黎各（美）', 0, 0),
(211, 'QA Qatar卡塔尔', 0, 0),
(212, 'RO Romania罗马尼亚', 0, 0),
(213, 'RU Russia俄罗斯联邦', 0, 0),
(214, 'RW Rwanda卢旺达', 0, 0),
(215, 'SV El Salvador萨尔瓦多', 0, 0),
(216, 'SH St.Helena圣赫勒拿', 0, 0),
(217, 'SM San Marino圣马力诺', 0, 0),
(218, 'ST Sao Tome and Principe圣多美和普林西比', 0, 0),
(219, 'SA Saudi Arabia沙特阿拉伯', 0, 0),
(220, 'SN Senegal塞内加尔', 0, 0),
(221, 'SC Seychelles塞舌尔', 0, 0),
(222, 'SL Sierra leone塞拉利昂', 0, 0),
(223, 'SG Singapore新加坡', 0, 0),
(224, 'SK Slovakia斯洛伐克', 0, 0),
(225, 'SI Slovene斯洛文尼亚', 0, 0),
(226, 'SB Solomon Islands所罗门群岛', 0, 0),
(227, 'SO Somali索马里', 0, 0),
(228, 'SD Sudan苏丹', 0, 0),
(229, 'SR Surinam苏里南', 0, 0),
(230, 'SZ Swaziland斯威士兰', 0, 0),
(231, 'SE Sweden瑞典', 0, 0),
(232, 'SY Syria叙利亚', 0, 0),
(233, 'TD Chad乍得', 0, 0),
(234, 'TJ Tajikistan塔吉克斯坦', 0, 0),
(235, 'TZ Tanzania坦桑尼亚', 0, 0),
(236, 'TH Thailand泰国', 0, 0),
(237, 'TG Togo多哥', 0, 0),
(238, 'TK Tokela托克劳', 0, 0),
(239, 'TO Tonga汤加', 0, 0),
(240, 'TT Trinidad and Tobago特立尼达和多巴哥', 0, 0),
(241, 'TN Tunisia突尼斯', 0, 0),
(242, 'TR Turkey土耳其', 0, 0),
(243, 'TP East Timor东帝汶', 0, 0),
(244, 'TM Turkmenistan土库曼斯坦', 0, 0),
(245, 'TC Turks and Caicos Islands特克斯和凯科斯群岛', 0, 0),
(246, 'TV Tuvalu图瓦卢', 0, 0),
(247, 'UG Uganda乌干达', 0, 0),
(248, 'UA Ukraine乌克兰', 0, 0),
(249, 'UK United Kingdom英国', 0, 0),
(250, 'US United States of America美国', 0, 0),
(251, 'UY Uruguay乌拉圭', 0, 0),
(252, 'UZ Uzbekistan乌兹别克斯坦', 0, 0),
(253, 'VA Vatican City梵蒂冈', 0, 0),
(254, 'VE Venezuela委内瑞拉', 0, 0),
(255, 'VN Vietnam越南', 0, 0),
(256, 'VG Virgin Islands(British)英属维尔京群岛', 0, 0),
(257, 'VI Vigin Islands(U.S.)美属维尔京群岛', 0, 0),
(258, 'WS Western Samoa西萨摩亚', 0, 0),
(259, 'YE Yemen也门', 0, 0),
(260, 'ZA South Africa南非', 0, 0),
(261, 'ZR Zaire扎伊尔', 0, 0),
(262, 'ZM Zambia赞比亚', 0, 0),
(263, 'ZW Zimbabwe津巴布韦', 0, 0),
(264, 'Republic of South Sudan南苏丹', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `t_contry_certificate`
--

CREATE TABLE IF NOT EXISTS `t_contry_certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contry_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='国家对应的签证种类' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `t_contry_certificate`
--

INSERT INTO `t_contry_certificate` (`id`, `contry_id`, `certificate_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- 表的结构 `t_drink`
--

CREATE TABLE IF NOT EXISTS `t_drink` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='是否喝酒' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `t_drink`
--

INSERT INTO `t_drink` (`id`, `name`) VALUES
(1, '是'),
(2, '否');

-- --------------------------------------------------------

--
-- 表的结构 `t_education`
--

CREATE TABLE IF NOT EXISTS `t_education` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='学历' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `t_education`
--

INSERT INTO `t_education` (`id`, `name`) VALUES
(1, '本科'),
(2, '硕士'),
(3, '博士'),
(4, '本科以下');

-- --------------------------------------------------------

--
-- 表的结构 `t_english`
--

CREATE TABLE IF NOT EXISTS `t_english` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='英语水平' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `t_english`
--

INSERT INTO `t_english` (`id`, `name`) VALUES
(1, '熟练'),
(2, '一般'),
(3, '差');

-- --------------------------------------------------------

--
-- 表的结构 `t_gender`
--

CREATE TABLE IF NOT EXISTS `t_gender` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` char(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `t_gender`
--

INSERT INTO `t_gender` (`id`, `name`) VALUES
(1, '男'),
(2, '女');

-- --------------------------------------------------------

--
-- 表的结构 `t_has_child`
--

CREATE TABLE IF NOT EXISTS `t_has_child` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='有无子女' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `t_has_child`
--

INSERT INTO `t_has_child` (`id`, `name`) VALUES
(1, '有'),
(2, '没有');

-- --------------------------------------------------------

--
-- 表的结构 `t_house`
--

CREATE TABLE IF NOT EXISTS `t_house` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='住房情况' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `t_house`
--

INSERT INTO `t_house` (`id`, `name`) VALUES
(1, '租房'),
(2, '买房'),
(3, '服务同住或公司提供');

-- --------------------------------------------------------

--
-- 表的结构 `t_income_type`
--

CREATE TABLE IF NOT EXISTS `t_income_type` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='收入类型' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `t_income_type`
--

INSERT INTO `t_income_type` (`id`, `name`) VALUES
(1, '美元'),
(2, '加拿大元'),
(3, '新西兰元'),
(4, '港币'),
(5, '人民币');

-- --------------------------------------------------------

--
-- 表的结构 `t_marital_status`
--

CREATE TABLE IF NOT EXISTS `t_marital_status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='婚姻状况' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `t_marital_status`
--

INSERT INTO `t_marital_status` (`id`, `name`) VALUES
(1, '未婚'),
(2, '已婚'),
(3, '准备离婚'),
(4, '正在离婚'),
(5, '丧偶');

-- --------------------------------------------------------

--
-- 表的结构 `t_member`
--

CREATE TABLE IF NOT EXISTS `t_member` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(100) NOT NULL COMMENT '用户昵称',
  `email` varchar(100) NOT NULL COMMENT '用户邮箱',
  `password` varchar(100) NOT NULL COMMENT '用户密码（md5加密）',
  `real_name` varchar(60) NOT NULL COMMENT '真实姓名',
  `gender` tinyint(3) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '生日',
  `phone` varchar(60) NOT NULL COMMENT '电话',
  `mobile_phone` varchar(60) DEFAULT NULL COMMENT '手机',
  `Im_qq` varchar(60) DEFAULT NULL COMMENT 'QQ',
  `Im_msn` varchar(60) DEFAULT NULL COMMENT 'MSN',
  `Im_skype` varchar(60) DEFAULT NULL COMMENT 'SKYPE',
  `Im_yahoo` varchar(60) DEFAULT NULL COMMENT 'Yahoo',
  `Im_aliww` varchar(60) DEFAULT NULL COMMENT '阿里旺旺',
  `registered_on` datetime DEFAULT NULL COMMENT '注册时间',
  `last_login` datetime DEFAULT NULL COMMENT '最后一次登录时间',
  `last_ip` varchar(15) NOT NULL COMMENT '最后一次登录IP',
  `Logins` int(10) NOT NULL COMMENT '登录次数',
  `user_level` tinyint(3) NOT NULL COMMENT '用户等级',
  `portrait` varchar(255) DEFAULT NULL COMMENT '形象图',
  `activation` varchar(60) NOT NULL COMMENT '激活（0为未激活，1为已激活，注：邮箱激活）',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `t_member`
--

INSERT INTO `t_member` (`user_id`, `user_name`, `email`, `password`, `real_name`, `gender`, `birthday`, `phone`, `mobile_phone`, `Im_qq`, `Im_msn`, `Im_skype`, `Im_yahoo`, `Im_aliww`, `registered_on`, `last_login`, `last_ip`, `Logins`, `user_level`, `portrait`, `activation`) VALUES
(31, 'aaaaa', 'wsf_123456@126.com', '4297f44b13955235245b2497399d7a93', '0', 1, '0000-00-00', '0', '', '0', '0', '0', '0', '0', '2013-06-06 10:45:58', '2013-06-06 10:45:58', '127.0.0.1', 1, 1, 'headimg.jpg', '1');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `t_memberfullmsg`
--
CREATE TABLE IF NOT EXISTS `t_memberfullmsg` (
`id` int(11)
,`country` varchar(60)
,`state` varchar(60)
,`city` varchar(60)
,`certificate` varchar(100)
,`age` smallint(4)
,`height` varchar(9)
,`marital_status` varchar(100)
,`has_child` varchar(100)
,`income` varchar(125)
,`education` varchar(100)
,`house` varchar(100)
,`english` varchar(100)
,`smoke` varchar(100)
,`drink` varchar(100)
,`birth_city` varchar(60)
,`nationality` varchar(60)
);
-- --------------------------------------------------------

--
-- 表的结构 `t_member_condition`
--

CREATE TABLE IF NOT EXISTS `t_member_condition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `match_name` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `match_value` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `match_weight` varchar(10) COLLATE utf8_estonian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci AUTO_INCREMENT=192 ;

--
-- 转存表中的数据 `t_member_condition`
--

INSERT INTO `t_member_condition` (`id`, `member_id`, `match_name`, `match_value`, `match_weight`) VALUES
(147, 31, 'country', '1', '1'),
(148, 31, 'state', '3', '1'),
(149, 31, 'city', '4', '1'),
(150, 31, 'certificate', '1', '1'),
(151, 31, 'age_begin', '21', '1'),
(152, 31, 'age_end', '27', '1'),
(153, 31, 'height_begin', '175', '1'),
(154, 31, 'height_end', '179', '1'),
(155, 31, 'marital_status', '1', '1'),
(156, 31, 'has_child', '2', '1'),
(157, 31, 'income_type', '5', '1'),
(158, 31, 'income_begin', '6', '1'),
(159, 31, 'income_end', '7', '1'),
(160, 31, 'education', '1', '1'),
(161, 31, 'house', '2', '1'),
(162, 31, 'country', '1', '1'),
(163, 31, 'state', '3', '1'),
(164, 31, 'city', '4', '1'),
(165, 31, 'certificate', '1', '1'),
(166, 31, 'age_begin', '21', '1'),
(167, 31, 'age_end', '27', '1'),
(168, 31, 'height_begin', '175', '1'),
(169, 31, 'height_end', '179', '1'),
(170, 31, 'marital_status', '1', '1'),
(171, 31, 'has_child', '2', '1'),
(172, 31, 'income_type', '5', '1'),
(173, 31, 'income_begin', '6', '1'),
(174, 31, 'income_end', '7', '1'),
(175, 31, 'education', '1', '1'),
(176, 31, 'house', '2', '1'),
(177, 31, 'country', '1', '1'),
(178, 31, 'state', '3', '1'),
(179, 31, 'city', '4', '1'),
(180, 31, 'certificate', '1', '1'),
(181, 31, 'age_begin', '21', '1'),
(182, 31, 'age_end', '27', '1'),
(183, 31, 'height_begin', '175', '1'),
(184, 31, 'height_end', '179', '1'),
(185, 31, 'marital_status', '1', '1'),
(186, 31, 'has_child', '2', '1'),
(187, 31, 'income_type', '5', '1'),
(188, 31, 'income_begin', '6', '1'),
(189, 31, 'income_end', '7', '1'),
(190, 31, 'education', '1', '1'),
(191, 31, 'house', '2', '1');

-- --------------------------------------------------------

--
-- 表的结构 `t_member_extends`
--

CREATE TABLE IF NOT EXISTS `t_member_extends` (
  `member_extends_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `member_id` int(10) unsigned NOT NULL COMMENT '会员id',
  `work_status` tinyint(2) DEFAULT NULL COMMENT '工作状态',
  `english` tinyint(2) DEFAULT NULL COMMENT '英语水平',
  `smoke` tinyint(2) DEFAULT NULL COMMENT '是否吸烟',
  `drink` tinyint(2) DEFAULT NULL COMMENT '是否喝酒',
  `birth_city` int(10) DEFAULT NULL COMMENT '出生地',
  `nationality` int(10) DEFAULT NULL COMMENT '国籍',
  `intro` text COMMENT '个人简介',
  `profession` int(10) DEFAULT NULL COMMENT '职业',
  `industry` int(10) DEFAULT NULL COMMENT '所在行业',
  `treaty` tinyint(2) DEFAULT NULL COMMENT '你对婚前协议的态度',
  `religion` tinyint(2) DEFAULT NULL COMMENT '宗教',
  `disposition` tinyint(2) DEFAULT NULL COMMENT '性格',
  `pet` tinyint(2) DEFAULT NULL COMMENT '宠物',
  `brother` tinyint(2) DEFAULT NULL COMMENT '兄妹几人',
  `child` tinyint(2) DEFAULT NULL COMMENT '是否想要小孩',
  `aa` tinyint(2) DEFAULT NULL COMMENT 'AA 制（1为AA制）',
  `constellation` tinyint(2) DEFAULT NULL COMMENT '星座',
  `wife_work` tinyint(2) DEFAULT NULL COMMENT '是否愿意妻子工作',
  PRIMARY KEY (`member_extends_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员信息拓展表' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `t_member_extends`
--

INSERT INTO `t_member_extends` (`member_extends_id`, `member_id`, `work_status`, `english`, `smoke`, `drink`, `birth_city`, `nationality`, `intro`, `profession`, `industry`, `treaty`, `religion`, `disposition`, `pet`, `brother`, `child`, `aa`, `constellation`, `wife_work`) VALUES
(19, 31, 2, 2, 2, 2, 3, 1, 'ii', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `t_member_match`
--

CREATE TABLE IF NOT EXISTS `t_member_match` (
  `member_match_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `member_id` int(10) NOT NULL COMMENT '会员ID',
  `country` int(10) NOT NULL COMMENT '国家',
  `state` int(10) NOT NULL COMMENT '州',
  `city` int(10) NOT NULL COMMENT '市',
  `certificate` tinyint(2) NOT NULL COMMENT '签证种类',
  `age` smallint(4) NOT NULL COMMENT '年龄',
  `height` smallint(4) NOT NULL COMMENT '身高(单位：厘米)',
  `marital_status` tinyint(2) NOT NULL COMMENT '婚姻状态(0为未婚，1为已婚)',
  `has_child` tinyint(2) NOT NULL COMMENT '是否有小孩',
  `income_type` int(3) NOT NULL COMMENT '币种',
  `income_begin` int(3) NOT NULL COMMENT '最少收入',
  `income_end` int(3) NOT NULL COMMENT '最大收入',
  `education` tinyint(2) NOT NULL COMMENT '学历:1.本科 2.硕士 3.博士 4.本科以下',
  `house` tinyint(2) NOT NULL,
  PRIMARY KEY (`member_match_id`),
  UNIQUE KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `t_member_match`
--

INSERT INTO `t_member_match` (`member_match_id`, `member_id`, `country`, `state`, `city`, `certificate`, `age`, `height`, `marital_status`, `has_child`, `income_type`, `income_begin`, `income_end`, `education`, `house`) VALUES
(21, 31, 1, 3, 4, 1, 29, 182, 1, 2, 5, 10, 20, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `t_smoke`
--

CREATE TABLE IF NOT EXISTS `t_smoke` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='是否吸烟' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `t_smoke`
--

INSERT INTO `t_smoke` (`id`, `name`) VALUES
(1, '是'),
(2, '否');



-- --------------------------------------------------------

--
-- 视图结构 `v_memberfullmsg`
--
CREATE or replace view v_memberfullmsg (
	id, 
	country,
	state,
	city,
	certificate,
	age,
	height,
	marital_status,
	has_child,
	income,
	education,
	house,
	english,
	smoke,
	drink,
	birth_city,
	nationality

	) as 

select 

m.user_id, 
mm_country.name,
mm_state.name,
mm_city.name,
mm_certificate.name,
mm.age,
concat(mm.height,' cm'),
mm_marital_status.name,
mm_has_child.name,
concat(mm.income_begin,'-',mm.income_end,'万 ',mm_income_type.name),
mm_education.name,
mm_house.name,
me_english.name,
me_smoke.name,
me_drink.name,
me_birth_city.name,
me_nationality.name

from t_member m 
join t_gender m_gender on m.gender=m_gender.id
join t_member_match mm on m.user_id=mm.member_id
join t_member_extends me on m.user_id=me.member_id
join t_city mm_country on mm.country=mm_country.id 
join t_city mm_state on mm.state=mm_state.id
join t_city mm_city on mm.city=mm_city.id
join t_certificate mm_certificate on mm.certificate=mm_certificate.id
join t_marital_status mm_marital_status on mm.marital_status=mm_marital_status.id
join t_has_child mm_has_child on mm.has_child=mm_has_child.id
join t_income_type  mm_income_type on mm.income_type=mm_income_type.id
join t_education mm_education on mm.education=mm_education.id
join t_house mm_house on mm.house=mm_house.id
join t_english me_english on me.english=me_english.id
join t_smoke me_smoke on me.smoke=me_smoke.id
join t_drink me_drink on me.drink=me_drink.id
join t_city me_birth_city on me.birth_city=me_birth_city.id
join t_city me_nationality on me.nationality=me_nationality.id;


drop table if exists t_items;
create table t_items (
    id tinyint(3) auto_increment,
    item varchar(200) not null,
    name varchar(200) not null,
    primary key (id)
) charset=utf8 auto_increment=1;
insert into t_items (item,name) values 
('country','国家'),
('state','州'),
('city','市');


drop procedure p_member;
delimiter //
create procedure p_member(out o varchar(500))
begin
  select * into o from t_member where user_id=31;
end
//
delimiter ;

call p_member(@a);
select @a;