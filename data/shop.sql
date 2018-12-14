-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2018 г., 21:00
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`, `user_id`) VALUES
(27, 2, 1, '8'),
(28, 1, 1, '8'),
(29, 4, 1, '8'),
(30, 1, 7, '7'),
(32, 4, 3, '7'),
(33, 2, 4, '7'),
(37, 2, 2, '7'),
(38, 2, 2, '7'),
(40, 2, 1, '0ab472e167946b5e7a3c08790e0fd096'),
(42, 3, 1, '0ab472e167946b5e7a3c08790e0fd096'),
(45, 1, 1, '74db692ad7a36bd1483eb2c1a9fa963f'),
(47, 4, 1, '74db692ad7a36bd1483eb2c1a9fa963f'),
(52, 3, 2, 'bb24bce265864df73d123ab15dfaeca3'),
(53, 2, 4, 'bb24bce265864df73d123ab15dfaeca3'),
(54, 1, 39, 'bb24bce265864df73d123ab15dfaeca3'),
(55, 4, 1, 'bb24bce265864df73d123ab15dfaeca3');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'мышь', 'компьютерная мышь', 450),
(2, 'ноутбук', 'нотбук Dell', 15000),
(3, 'клавиатура', 'компьютерная клавиатура', 1200),
(4, 'моноблок', 'моноблок Asus', 23000);

-- --------------------------------------------------------

--
-- Структура таблицы `product_img`
--

CREATE TABLE `product_img` (
  `id_img` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_img`
--

INSERT INTO `product_img` (`id_img`, `title`, `path`, `size`, `views`, `product_id`) VALUES
(2, '81XXEEAAaAL._SX355_.jpg', '81XXEEAAaAL._SX355_.jpg', 8993, 0, 1),
(3, 'gm-m5050-large.jpg', 'gm-m5050-large.jpg', 64652, 0, 1),
(4, 'ImgW.jpg', 'ImgW.jpg', 62242, 0, 2),
(5, '352614-das-keyboard-4.jpg', '352614-das-keyboard-4.jpg', 46449, 0, 2),
(6, 'NP940X5M-X01US_KV.webp', 'NP940X5M-X01US_KV.webp', 23710, 0, 3),
(7, 'mbp13-silver-select-201807_GEO_TH.jpg', 'mbp13-silver-select-201807_GEO_TH.jpg', 61544, 3, 3),
(8, 'surface-studio-halowars.jpg', 'surface-studio-halowars.jpg', 105216, 0, 4),
(9, 'xps-27-2017-stand.jpg', 'xps-27-2017-stand.jpg', 49551, 0, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(7, 'admin', 'admin'),
(8, 'guest1', 'qwerty');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
