-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 2 月 24 日 08:24
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_ec_table`
--

CREATE TABLE IF NOT EXISTS `gs_ec_table` (
`id` int(12) NOT NULL,
  `productName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(6) NOT NULL,
  `productIntro` text COLLATE utf8_unicode_ci,
  `pictureName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_ec_table`
--

INSERT INTO `gs_ec_table` (`id`, `productName`, `value`, `productIntro`, `pictureName`, `datetime`) VALUES
(1, 'gs book', 1500, 'gs academy original book', 'gsbook.jpg', '2018-02-24 16:01:59'),
(2, 'gs apple', 100, 'gs academy original apple', 'gsapple.jpg', '2018-02-24 16:01:59'),
(3, 'PY', 10000, 'gs academy original desk', 'gsdesk.jpg', '2018-02-24 16:01:59'),
(4, 'gs pc', 50000, 'gs academy original pc', 'gspc.jpg', '2018-02-24 16:01:59'),
(5, 'gs pen', 100, 'gs academy original pen', 'gspen.jpg', '2018-02-24 16:01:59'),
(6, 'gs test6', 600, 'gs academy original test6', 'gstest6.jpg', '2018-02-24 16:03:26'),
(7, 'RB', 600, 'gs academy original test7', 'gstest7.jpg', '2018-02-24 16:03:26'),
(8, 'gs test8', 600, 'gs academy original test8', 'gstest8.jpg', '2018-02-24 16:03:26'),
(9, 'PY', 600, 'gs academy original test9', 'gstest9.jpg', '2018-02-24 16:01:59'),
(10, 'gs test10', 600, 'gs academy original test10', 'gstest10.jpg', '2018-02-24 16:01:59'),
(11, 'PHP本', 2200, '基本を網羅した本', 'php.jpg', '2018-02-24 16:01:59'),
(12, 'PHP&JS', 2000, '中級者以上が読む本', 'js.jpg', '2018-02-24 16:01:59'),
(13, 'kharuka VA', 1, 'VALU of kharuka', 'kharukaVA.jpg', '2018-02-24 16:01:59'),
(14, 'kharuka PHP book', 1000, 'PHP book of kharuka', 'kharukaPHPbook.jpg', '2018-02-24 16:01:59'),
(15, 'hoge1', 100, '未入力', 'hoge1.jpg', '2018-02-24 16:11:46'),
(16, 'hoge2', 100, 'hoge2', 'hoge2.jpg', '2018-02-24 16:11:46'),
(17, 'hoge3', 100, '未入力', 'hoge3.jpg', '2018-02-24 16:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_ec_table`
--
ALTER TABLE `gs_ec_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_ec_table`
--
ALTER TABLE `gs_ec_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
