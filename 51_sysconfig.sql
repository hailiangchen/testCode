-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-27 12:36:46
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `51vv`
--

-- --------------------------------------------------------

--
-- 表的结构 `51_sysconfig`
--

CREATE TABLE IF NOT EXISTS `51_sysconfig` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `emailaccount` varchar(50) DEFAULT NULL,
  `emailpass` varchar(50) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `smtphost` varchar(50) DEFAULT NULL,
  `port` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `51_sysconfig`
--

INSERT INTO `51_sysconfig` (`id`, `emailaccount`, `emailpass`, `qq`, `smtphost`, `port`) VALUES
(1, 'm13841056971_1@163.com', 'm13841056971', '2556756555', 'smtp.163.com', 25);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
