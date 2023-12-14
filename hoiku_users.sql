-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 12 月 14 日 07:49
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `hoikunomikata`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `hoiku_users`
--

CREATE TABLE `hoiku_users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `genre` varchar(20) NOT NULL,
  `skill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `hoiku_users`
--

INSERT INTO `hoiku_users` (`id`, `name`, `email`, `phone`, `sex`, `city`, `address`, `genre`, `skill`) VALUES
(1, '保育　太郎', 'sasaki@iii.jp', '09088887676', 'man', '北海道', '札幌市中央区３−３−３ー', '認可保育園', '保育士'),
(2, '相澤　誠', 'aizawa@aizawamakto.jp', '09088997890', '男性', '北海道', '札幌市中央区7−7−7', '企業主導型保育園', '保育士'),
(3, '佐々木', 'feverrvreve@gegergregr.jp', '090-8278-0000', '男性', '北海道', '旭川市ままま', '認可保育園', '保育士'),
(4, '米沢　孝俊', 'gegegedigj@hoiku.kp', '1123456', '男性', '青森県', '八戸市', '認可外保育園', 'じはつかん');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `hoiku_users`
--
ALTER TABLE `hoiku_users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `hoiku_users`
--
ALTER TABLE `hoiku_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
