-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?01 �?03 �?14:24
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `daycost`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_myuser`
--

CREATE TABLE IF NOT EXISTS `tp_myuser` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(20) NOT NULL,
  `Psw` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `pro` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `join` datetime DEFAULT NULL,
  `motto` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_myuser`
--

INSERT INTO `tp_myuser` (`Id`, `UserID`, `Psw`, `email`, `status`, `pro`, `city`, `join`, `motto`, `age`, `phone`) VALUES
(2, 'walkerz', '123456', '2448038829@qq.com', '1', '四川', '宜宾', '2017-06-16 00:00:00', '生活', 20, '15769395589'),
(3, 'zhaomeng', '123456', '2662365897@qq.com', NULL, '新疆', '石河子', NULL, '随便弄弄', NULL, '15769393371'),
(4, '201471010235', '123456', '2448038829@qq.com', NULL, NULL, NULL, NULL, NULL, NULL, '15769395589');

-- --------------------------------------------------------

--
-- 表的结构 `tp_records`
--

CREATE TABLE IF NOT EXISTS `tp_records` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(20) NOT NULL,
  `Type` int(2) NOT NULL,
  `Money` int(10) NOT NULL,
  `Time` datetime NOT NULL,
  `Remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- 转存表中的数据 `tp_records`
--

INSERT INTO `tp_records` (`Id`, `UserID`, `Type`, `Money`, `Time`, `Remarks`) VALUES
(1, 'walkerz', 2, 20, '2017-06-01 00:00:00', '收入1'),
(2, 'walkerz', 2, 19, '2017-06-01 00:00:00', '顾客1'),
(3, 'walkerz', 2, 37, '2017-06-02 00:00:00', '顾客a'),
(4, 'walkerz', 2, 15, '2017-06-02 00:00:00', '顾客'),
(5, 'walkerz', 2, 34, '2017-06-03 00:00:00', '顾客a'),
(6, 'walkerz', 2, 19, '2017-06-03 00:00:00', '顾客a'),
(7, 'walkerz', 2, 27, '2017-06-04 00:00:00', '顾客a'),
(8, 'walkerz', 2, 37, '2017-06-05 00:00:00', '顾客a'),
(9, 'walkerz', 2, 29, '2017-06-06 00:00:00', '顾客a'),
(10, 'walkerz', 2, 45, '2017-06-06 00:00:00', '顾客a'),
(11, 'walkerz', 2, 39, '2017-06-07 00:00:00', '顾客a'),
(12, 'walkerz', 2, 49, '2017-06-06 00:00:00', '顾客a'),
(13, 'walkerz', 2, 37, '2017-06-07 00:00:00', '顾客a'),
(14, 'walkerz', 2, 48, '2017-06-08 00:00:00', '顾客a'),
(15, 'walkerz', 2, 35, '2017-06-09 00:00:00', '顾客a'),
(16, 'walkerz', 2, 66, '2017-06-10 00:00:00', '顾客a'),
(17, 'walkerz', 2, 75, '2017-06-11 00:00:00', '顾客a'),
(18, 'walkerz', 2, 55, '2017-06-12 00:00:00', '顾客a'),
(19, 'walkerz', 2, 64, '2017-06-13 00:00:00', '顾客a'),
(20, 'walkerz', 2, 75, '2017-06-14 00:00:00', '顾客a'),
(21, 'walkerz', 1, 33, '2017-06-01 00:00:00', '吃饭'),
(22, 'walkerz', 1, 15, '2017-06-02 00:00:00', '吃饭'),
(23, 'walkerz', 1, 17, '2017-06-03 00:00:00', '吃饭'),
(24, 'walkerz', 1, 30, '2017-06-04 00:00:00', '吃饭加上打车'),
(25, 'walkerz', 1, 20, '2017-06-05 00:00:00', '吃饭'),
(26, 'walkerz', 1, 17, '2017-06-06 00:00:00', '吃饭'),
(27, 'walkerz', 1, 19, '2017-06-07 00:00:00', '吃饭'),
(28, 'walkerz', 1, 20, '2017-06-08 00:00:00', '吃饭'),
(29, 'walkerz', 1, 15, '2017-06-09 00:00:00', '吃饭'),
(30, 'walkerz', 1, 17, '2017-06-10 00:00:00', '吃饭'),
(31, 'walkerz', 1, 20, '2017-06-11 00:00:00', '吃饭'),
(32, 'walkerz', 1, 20, '2017-06-12 00:00:00', '吃饭'),
(33, 'walkerz', 1, 16, '2017-06-11 00:00:00', '9'),
(34, 'walkerz', 1, 15, '2017-06-12 00:00:00', '吃饭'),
(35, 'walkerz', 1, 17, '2017-06-13 00:00:00', '红包'),
(36, 'walkerz', 1, 30, '2017-06-14 00:00:00', '吃饭加上打车'),
(37, '', 0, 12345, '2017-06-04 00:00:00', 'asd'),
(38, '', 0, 12345, '2017-06-04 00:00:00', 'asd'),
(39, '', 0, 12345, '2017-06-04 00:00:00', 'asd'),
(40, 'walkerz', 2, 123, '2017-06-12 00:00:00', 'sad'),
(41, 'walkerz', 2, 123, '2017-06-05 00:00:00', 'asd'),
(42, 'walkerz', 2, 123, '2017-06-05 00:00:00', 'asd'),
(43, 'walkerz', 2, 123, '2017-06-05 00:00:00', 'asd'),
(44, 'walkerz', 2, 123, '2017-06-05 00:00:00', 'asd'),
(45, 'walkerz', 2, 77, '2017-06-18 00:00:00', '曾俊涛测试'),
(46, 'walkerz', 2, 55, '2017-06-18 00:00:00', '曾俊涛'),
(47, 'walkerz', 1, 55, '2017-06-18 00:00:00', '曾俊涛'),
(48, '201471010235', 2, 20, '2018-01-01 00:00:00', '0123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
