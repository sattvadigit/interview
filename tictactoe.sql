-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 30 2016 г., 16:02
-- Версия сервера: 5.6.26-log
-- Версия PHP: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tictactoe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_results`
--

CREATE TABLE IF NOT EXISTS `tbl_results` (
`id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL COMMENT 'Имя игрока',
  `time` float NOT NULL COMMENT 'Время в микросекундах',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `tbl_results`
--

INSERT INTO `tbl_results` (`id`, `name`, `time`, `timestamp`) VALUES
(1, 'я', 3.26, '2016-05-30 10:25:52'),
(2, 'кто то', 4.2, '2016-05-30 10:25:52'),
(3, '33', 4.82721, '2016-05-30 11:16:21'),
(4, '444', 5.11024, '2016-05-30 11:16:54'),
(5, 'ttt', 5.11024, '2016-05-30 11:20:28'),
(6, '123', 5.11024, '2016-05-30 11:20:44'),
(7, '123', 4.42822, '2016-05-30 11:32:00'),
(8, 'undefined', 6.91323, '2016-05-30 11:40:22'),
(9, 'еку', 6.56729, '2016-05-30 12:31:35'),
(10, 'tre', 4.31423, '2016-05-30 12:32:04'),
(11, 'vvv', 4.31423, '2016-05-30 12:32:38'),
(12, 'vvv', 4.31423, '2016-05-30 12:33:55'),
(13, 'test', 4.58923, '2016-05-30 12:34:10'),
(14, 'bbbb', 4.58923, '2016-05-30 12:34:49'),
(15, 'Ник', 5.31426, '2016-05-30 12:35:04'),
(16, '111', 4.71723, '2016-05-30 12:37:59'),
(17, '123', 5.04923, '2016-05-30 12:48:23'),
(18, 'bbb', 19.7804, '2016-05-30 12:48:53'),
(19, 'b', 5.71626, '2016-05-30 12:49:30'),
(20, 'hhh', 5.23224, '2016-05-30 12:51:43'),
(21, 'nnn', 9.53129, '2016-05-30 12:51:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_results`
--
ALTER TABLE `tbl_results`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_results`
--
ALTER TABLE `tbl_results`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
