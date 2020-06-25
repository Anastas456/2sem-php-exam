-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: std-mysql
-- Время создания: Июн 25 2020 г., 12:43
-- Версия сервера: 5.7.26-0ubuntu0.16.04.1
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `std_949`
--

-- --------------------------------------------------------

--
-- Структура таблицы `2sem_php_exam`
--

CREATE TABLE `2sem_php_exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `text1` varchar(30) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `radio` varchar(50) NOT NULL,
  `checkbox` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `2sem_php_exam`
--

INSERT INTO `2sem_php_exam` (`id`, `num1`, `num2`, `text1`, `text2`, `radio`, `checkbox`) VALUES
(22, 8, 8, 'some text1', 'some text2', 'radio1', 'checkbox1checkbox2'),
(23, 8, 8, 'some text1', 'some text2', 'radio1', 'checkbox1checkbox2'),
(24, 13, 12, 'some text1', 'some text2', 'radio1', 'checkbox1checkbox2checkbox3'),
(25, 9, 10, 'some text1', 'some text2', 'radio1', 'checkbox2checkbox3'),
(26, 9, 10, 'some text1', 'some text2', 'radio1', 'checkbox2checkbox3'),
(27, 8, 9, 'some text1', 'some text2', 'radio2', 'checkbox2checkbox3'),
(28, -11, 8, 'some text1', 'some text2', 'radio2', 'checkbox2checkbox3'),
(29, -9, 11, 'some text1', 'some text2', 'radio2', 'checkbox2checkbox3'),
(30, -11, 6, 'some text1', 'some text2', 'radio2', 'checkbox1checkbox2checkbox3'),
(31, -10, 9, 'some text1', 'some text2', 'radio2', 'checkbox2checkbox3'),
(32, -9, 8, 'some text1', 'some text2', 'radio2', 'checkbox2checkbox3'),
(33, 8, 8, 'some text1', 'some text2', 'radio2', 'checkbox1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `2sem_php_exam`
--
ALTER TABLE `2sem_php_exam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `2sem_php_exam`
--
ALTER TABLE `2sem_php_exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
