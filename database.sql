-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2020 г., 00:34
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `future_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments_tb`
--

CREATE TABLE `comments_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `c_date` date NOT NULL,
  `time` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments_tb`
--

INSERT INTO `comments_tb` (`id`, `name`, `text`, `c_date`, `time`) VALUES
(95, 'Михаил', 'Отлично! ', '2020-12-09', '00:22'),
(93, 'Vitaly', 'Hi, nice test, thx)', '2020-12-09', '00:21'),
(94, 'Анна', 'Для меня было сложно(', '2020-12-09', '00:21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments_tb`
--
ALTER TABLE `comments_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments_tb`
--
ALTER TABLE `comments_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
