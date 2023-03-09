-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 09 2023 г., 07:21
-- Версия сервера: 5.6.51
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crmvector`
--

-- --------------------------------------------------------

--
-- Структура таблицы `crmvector_tbl`
--

CREATE TABLE `crmvector_tbl` (
  `id` int(100) NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` int(10) DEFAULT NULL,
  `count` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `crmvector_tbl`
--

INSERT INTO `crmvector_tbl` (`id`, `location`, `zone`, `count`) VALUES
(1, 'Москва-Новосибирск', 1, 500),
(2, 'Москва-Владивосток', 2, 750),
(3, 'Новосибирск-Москва', 1, 500),
(4, 'Новосибирск-Владивосток', 1, 500),
(5, 'Владивосток-Москва', 3, 1000),
(6, 'Владивосток-Новосибирск', 1, 500);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `crmvector_tbl`
--
ALTER TABLE `crmvector_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `crmvector_tbl`
--
ALTER TABLE `crmvector_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
