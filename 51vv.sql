-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-26 12:52:59
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
(1, 'admin', 'b23877f42b7630934e969496e6793b54', 'AQfVOeKdUPhckaLF', 1, '系统管理员', '13555555555', '2017-03-17 08:09:46');

-- --------------------------------------------------------

--
-- 表的结构 `51_bankcard`
--

CREATE TABLE IF NOT EXISTS `51_bankcard` (
  `id` int(32) NOT NULL,
  `bankname` varchar(20) NOT NULL,
  `cardname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `51_log`
--

CREATE TABLE IF NOT EXISTS `51_log` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `addtime` varchar(20) DEFAULT NULL,
  `record` varchar(500) DEFAULT NULL,
  `recordcontent` varchar(500) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `51_log`
--

INSERT INTO `51_log` (`id`, `addtime`, `record`, `recordcontent`, `username`) VALUES
(1, '2017-03-26 11:08:10', '后台登录', '用户名：admin；用户密码：admin', ''),
(2, '2017-03-26 11:13:12', '修改密码', '修改密码为：123qwe', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `51_user`
--

CREATE TABLE IF NOT EXISTS `51_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `51_user`
--

INSERT INTO `51_user` (`id`, `username`, `password`, `ip`, `addtime`) VALUES
(1, '112344', 'sdfsdf', '127.0.0.1', '2016-07-30 15:43:18'),
(2, '112344', 'sfasdfs', '127.0.0.1', '2016-07-30 15:43:18'),
(3, '112344', 'sfasdfs', '127.0.0.1', '2016-08-07 11:26:49'),
(4, '11234124', 'sfasdfs', '127.0.0.1', '2016-08-07 11:27:06'),
(5, '124124', 'sdfsdfsdf', '127.0.0.1', '2016-08-07 11:27:18'),
(6, '124124', 'sdfsdf3', '127.0.0.1', '2016-08-07 11:27:23'),
(7, '1234124', 'sdfsdvsd', '127.0.0.1', '2016-08-07 11:27:28'),
(8, '141234', 'sdfsdfsdf', '127.0.0.1', '2016-08-07 11:27:36'),
(9, '2443534', 'gsrf4fsf', '127.0.0.1', '2016-08-07 11:27:44'),
(10, '4345345', 'dfsdfsd', '127.0.0.1', '2016-08-07 11:27:50'),
(11, '3467', 'sdfsdf', '127.0.0.1', '2016-08-07 11:28:04'),
(12, '3467656', 'xcvx', '127.0.0.1', '2016-08-07 11:28:09'),
(13, '634574567', 'bdfhkuiio', '127.0.0.1', '2016-08-07 11:28:15'),
(14, '634574', 'vzxvz', '127.0.0.1', '2016-08-07 11:28:22'),
(15, '634574534', 'asdfaw4gweh6j45h', '127.0.0.1', '2016-08-07 11:28:30'),
(16, '111111', 'dfsdfs', '127.0.0.1', '2016-08-07 11:28:37'),
(17, '222222', 'dfsdfsdf', '127.0.0.1', '2016-08-07 11:28:43'),
(18, '33333', 'fsdfsd', '127.0.0.1', '2016-08-07 11:28:48'),
(19, '44444', 'dfsdfsd', '127.0.0.1', '2016-08-07 11:28:53'),
(20, '5646545', 'sfsfds', '127.0.0.1', '2016-08-07 11:28:57'),
(21, '4234234', 'sdfsdfsdf', '127.0.0.1', '2016-08-07 11:29:03'),
(22, '87978967', 'sdfsdf', '127.0.0.1', '2016-08-07 11:29:09'),
(23, '12131', 'sdfsdfsdf', '127.0.0.1', '2016-08-07 11:29:15'),
(24, '142342', 'sdfsdd', '127.0.0.1', '2016-08-07 11:29:30'),
(25, '4534534', 'dfsdfsdf', '127.0.0.1', '2016-08-07 11:29:36'),
(26, '43242', 'dsewew', '127.0.0.1', '2016-08-07 11:29:42'),
(27, '4324234', 'erwerwer', '127.0.0.1', '2016-08-07 11:29:47'),
(28, '4324234', 'fsdfasdfasf', '127.0.0.1', '2016-08-07 11:29:51'),
(29, '4324234', 'hdfgh5sdfsgdfge', '127.0.0.1', '2016-08-07 11:29:55'),
(30, '43234234324', 'dsdfgsdfbsdf', '127.0.0.1', '2016-08-07 11:30:01'),
(31, '112344', 'sfasdfs', '127.0.0.1', '2016-12-12 14:10:46'),
(32, '112344', 'sfasdfs', '127.0.0.1', '2017-03-16 14:48:02'),
(33, '12133444', '123qwe', '127.0.0.1', '2017-03-26 09:24:48');

-- --------------------------------------------------------

--
-- 表的结构 `51_userinfo`
--

CREATE TABLE IF NOT EXISTS `51_userinfo` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `realname` varchar(10) DEFAULT NULL,
  `usercard` varchar(20) DEFAULT NULL,
  `bankno` varchar(20) DEFAULT NULL,
  `bankname` varchar(50) DEFAULT NULL,
  `cardtype` varchar(10) DEFAULT NULL,
  `cardno` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `usermobile` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `51_userinfo`
--

INSERT INTO `51_userinfo` (`id`, `realname`, `usercard`, `bankno`, `bankname`, `cardtype`, `cardno`, `username`, `usermobile`) VALUES
(1, '的说法', '111111111111111111', NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
