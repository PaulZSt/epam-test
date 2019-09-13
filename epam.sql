-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 13 2019 г., 14:13
-- Версия сервера: 5.5.37
-- Версия PHP: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `epam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type_id` int(11) NOT NULL,
  `worker_count` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `production_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `product_type_id`, `worker_count`, `department_name`, `production_price`) VALUES
(1, 1, 10, 'TV sets department', 1000),
(2, 2, 10, 'Computers department', 1500),
(3, 3, 10, 'Mobile phones department', 500);

-- --------------------------------------------------------

--
-- Структура таблицы `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_id` int(11) NOT NULL,
  `department_id` int(1) NOT NULL,
  `produced` int(11) NOT NULL,
  `salary` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `payroll`
--

INSERT INTO `payroll` (`id`, `worker_id`, `department_id`, `produced`, `salary`) VALUES
(1, 37, 2, 2, 300),
(12, 65, 3, 1, 75),
(9, 67, 3, 33, 1500),
(13, 64, 1, 4, 600),
(14, 69, 3, 10, 750),
(15, 4, 3, 5, 375);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'TV sets', 1000),
(2, 'computers', 1500),
(3, 'Mobile phones', 500);

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `department_id` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `name`, `department_id`) VALUES
(4, 'Alexand', 2),
(37, 'Petra', 2),
(65, 'Vasya', 3),
(66, 'Sasha', 2),
(64, 'Marina', 1),
(67, 'Lesya', 1),
(68, 'Sasha s.', NULL),
(69, 'Masha S.', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
