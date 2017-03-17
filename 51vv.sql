-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-16 15:57:43
-- 服务器版本： 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8*/;
--
-- Database: `51vv`
--

-- --------------------------------------------------------

--
-- 表的结构 `51_user`
--

CREATE TABLE `51_user` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(32, '112344', 'sfasdfs', '127.0.0.1', '2017-03-16 14:48:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `51_user`
--
ALTER TABLE `51_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `51_user`
--
ALTER TABLE `51_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
