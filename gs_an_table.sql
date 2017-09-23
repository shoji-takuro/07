-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 9 朁E23 日 11:05
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db24`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf32_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf32_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, 'shoji', 'test1@test.jp', '質問1', '2017-09-23 15:11:02'),
(2, '田中', 'test1@test.jp', '質問2', '2017-09-23 15:31:39'),
(3, '佐藤', 'test2@test.jp', '質問1', '2017-09-23 15:31:39'),
(4, '斉藤', 'test3@test.jp', '質問1', '2017-09-23 15:31:39'),
(5, '山田', 'test4@test.jp', '質問1', '2017-09-23 15:31:39'),
(6, '筒香', 'test5@test.jp', '質問1', '2017-09-23 15:31:39'),
(7, 'たなか', 'test1@test.jp', '質問1', '2017-09-23 15:39:58'),
(8, 'たさき', 'test2@test.jp', '質問1', '2017-09-23 15:39:59'),
(9, 'たになか', 'test3@test.jp', '質問1', '2017-09-23 15:39:59'),
(10, 'たけ', 'test4@test.jp', '質問1', '2017-09-23 15:39:59'),
(11, 'たけだ', 'test5@test.jp', '質問1', '2017-09-23 15:39:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
