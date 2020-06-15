-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2020 г., 20:17
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ozon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attributes`
--

CREATE TABLE `attributes` (
  `attr_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `attributes`
--

INSERT INTO `attributes` (`attr_id`, `product_id`, `id`, `value`) VALUES
(1, '3', '8229', '4747'),
(2, '3', '9048', 'Samsung Galaxy S9'),
(3, '3', '4742', '512 ГБ'),
(4, '3', '4413', '');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `default` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `product_id`, `name`, `file_name`, `default`) VALUES
(1, '3', '', 'https://i12.fotocdn.net/s117/b524167ea6c2fd93/gallery_s/2672407957.jpg', 1),
(2, '3', '', 'https://i.pinimg.com/236x/17/d5/dd/17d5dde49e71556216f68198c1b3505b--portrait-poses-beautiful-creatures.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `product_id` int(11) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `offer_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `premium_price` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `vendor_code` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `depth` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `dimension_unit` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `weight_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`product_id`, `barcode`, `description`, `category_id`, `name`, `offer_id`, `price`, `old_price`, `premium_price`, `vat`, `vendor`, `vendor_code`, `height`, `depth`, `width`, `dimension_unit`, `weight`, `weight_unit`) VALUES
(3, '5623983566890', 'Samsung Galaxy S9 51', '17030819', 'Samsung Galaxy', 'REDSGS9-112', '73390', '89990', '75555', '0', 'Samsung', 'TE-G960UZPA', '77', '11', '120', 'mm', '120', 'g');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`attr_id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attributes`
--
ALTER TABLE `attributes`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
