-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-17 09:25:27
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
-- 表的结构 `51_admin`
--

CREATE TABLE IF NOT EXISTS `51_admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `beizhu` varchar(500) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `addtime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `51_admin`
--

INSERT INTO `51_admin` (`id`, `username`, `userpass`, `salt`, `status`, `beizhu`, `telephone`, `addtime`) VALUES
(1, 'admin', 'd86eb09d26ec2a3dbf058576b69aa779', 'AQfVOeKdUPhckaLF', 1, '系统管理员', '13555555555', '2017-03-17 08:09:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
