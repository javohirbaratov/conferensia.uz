-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2023 г., 12:15
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `conferensia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `parol`) VALUES
(1, 'javohir', '1234');

-- --------------------------------------------------------

--
-- Структура таблицы `fayl`
--

CREATE TABLE `fayl` (
  `id` int NOT NULL,
  `nomi` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `fayl`
--

INSERT INTO `fayl` (`id`, `nomi`, `user_id`, `status`) VALUES
(2, 'f6916a4487179801d12dd9dd0ec9dc04.pdf', 3, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `speaker`
--

CREATE TABLE `speaker` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otm` varchar(255) NOT NULL,
  `mavzu` varchar(255) NOT NULL,
  `rasm` varchar(255) NOT NULL,
  `davlat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `speaker`
--

INSERT INTO `speaker` (`id`, `fio`, `email`, `otm`, `mavzu`, `rasm`, `davlat`) VALUES
(5, 'Javohir', 'asa@gmail.com', 'sasa', 'sasa', 'd3607bac8c60ce733a1726bf90832698.png', 'Uzb');

-- --------------------------------------------------------

--
-- Структура таблицы `txt`
--

CREATE TABLE `txt` (
  `id` int NOT NULL,
  `txt` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `txt`
--

INSERT INTO `txt` (`id`, `txt`, `category`) VALUES
(15, '<p>qumita</p>\r\n', 'qumita'),
(16, '<p>mualiflarga</p>\r\n', 'mualif');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `davlat` varchar(255) NOT NULL,
  `otm` varchar(255) NOT NULL,
  `fayl` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `fio`, `davlat`, `otm`, `fayl`, `status`, `email`, `parol`) VALUES
(3, 'Javohir', 'Uzb', 'Samdu', '0', '0', 's@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fayl`
--
ALTER TABLE `fayl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `txt`
--
ALTER TABLE `txt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `fayl`
--
ALTER TABLE `fayl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `txt`
--
ALTER TABLE `txt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
