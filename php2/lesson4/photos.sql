-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3305
-- Время создания: Янв 19 2019 г., 18:54
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php2lesson4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addr` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `addr`) VALUES
(1, '1', '1.jpg'),
(2, '1', '1.jpg'),
(3, '1', '1.jpg'),
(4, '1', '1.jpg'),
(5, '1', '1.jpg'),
(6, '1', '1.jpg'),
(7, '1', '1.jpg'),
(8, '1', '1.jpg'),
(9, '1', '1.jpg'),
(10, '1', '1.jpg'),
(11, '1', '1.jpg'),
(12, '1', '1.jpg'),
(13, '1', '1.jpg'),
(14, '1', '1.jpg'),
(15, '1', '1.jpg'),
(16, '1', '1.jpg'),
(17, '1', '1.jpg'),
(18, '1', '1.jpg'),
(19, '1', '1.jpg'),
(20, '1', '1.jpg'),
(21, '1', '1.jpg'),
(22, '1', '1.jpg'),
(23, '1', '1.jpg'),
(24, '1', '1.jpg'),
(25, '1', '1.jpg'),
(26, '1', '1.jpg'),
(27, '1', '1.jpg'),
(28, '1', '1.jpg'),
(29, '1', '1.jpg'),
(30, '1', '1.jpg'),
(31, '1', '1.jpg'),
(32, '1', '1.jpg'),
(33, '1', '1.jpg'),
(34, '1', '1.jpg'),
(35, '1', '1.jpg'),
(36, '1', '1.jpg'),
(37, '1', '1.jpg'),
(38, '1', '1.jpg'),
(39, '1', '1.jpg'),
(40, '1', '1.jpg'),
(41, '1', '1.jpg'),
(42, '1', '1.jpg'),
(43, '1', '1.jpg'),
(44, '1', '1.jpg'),
(45, '1', '1.jpg'),
(46, '1', '1.jpg'),
(47, '1', '1.jpg'),
(48, '1', '1.jpg'),
(49, '1', '1.jpg'),
(50, '1', '1.jpg'),
(51, '1', '1.jpg'),
(52, '1', '1.jpg'),
(53, '1', '1.jpg'),
(54, '1', '1.jpg'),
(55, '1', '1.jpg'),
(56, '1', '1.jpg'),
(57, '1', '1.jpg'),
(58, '1', '1.jpg'),
(59, '1', '1.jpg'),
(60, '1', '1.jpg'),
(61, '1', '1.jpg'),
(62, '1', '1.jpg'),
(63, '1', '1.jpg'),
(64, '1', '1.jpg'),
(65, '1', '1.jpg'),
(66, '1', '1.jpg'),
(67, '1', '1.jpg'),
(68, '1', '1.jpg'),
(69, '1', '1.jpg'),
(70, '1', '1.jpg'),
(71, '1', '1.jpg'),
(72, '1', '1.jpg'),
(73, '1', '1.jpg'),
(74, '1', '1.jpg'),
(75, '1', '1.jpg'),
(76, '1', '1.jpg'),
(77, '1', '1.jpg'),
(78, '1', '1.jpg'),
(79, '1', '1.jpg'),
(80, '1', '1.jpg'),
(81, '1', '1.jpg'),
(82, '1', '1.jpg'),
(83, '1', '1.jpg'),
(84, '1', '1.jpg'),
(85, '1', '1.jpg'),
(86, '1', '1.jpg'),
(87, '1', '1.jpg'),
(88, '1', '1.jpg'),
(89, '1', '1.jpg'),
(90, '1', '1.jpg'),
(91, '1', '1.jpg'),
(92, '1', '1.jpg'),
(93, '1', '1.jpg'),
(94, '1', '1.jpg'),
(95, '1', '1.jpg'),
(96, '1', '1.jpg'),
(97, '1', '1.jpg'),
(98, '1', '1.jpg'),
(99, '1', '1.jpg'),
(100, '1', '1.jpg'),
(101, '1', '1.jpg'),
(102, '1', '1.jpg'),
(103, '1', '1.jpg'),
(104, '1', '1.jpg'),
(105, '1', '1.jpg'),
(106, '1', '1.jpg'),
(107, '1', '1.jpg'),
(108, '1', '1.jpg'),
(109, '1', '1.jpg'),
(110, '1', '1.jpg'),
(111, '1', '1.jpg'),
(112, '1', '1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
