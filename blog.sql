-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 24 2020 г., 19:46
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headpost` varchar(300) NOT NULL,
  `bodypost` varchar(3000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `headpost`, `bodypost`, `author`, `date`) VALUES
(2, 'Какой то заголовок', 'Однажды в студёную зимнюю пору', 'den', '24:09:2020 20:40:12'),
(3, 'ddddddd', 'ввввввввввв', 'den', '24:09:2020 20:45:27'),
(4, 'фывфвфвфывфыв', 'фыыыыыыыыыыыыыыыыыыыыссммчаимавиапи', 'den', '24:09:2020 20:46:10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(60, 'gontik', '$2y$10$CCuDZdLpBJOWHIrKLd8WVeqC1J8GgvO3ty1VMhuZQzjdc/2PtCiJq'),
(61, 'shimerT', '$2y$10$yHeEmtoIkwlBOyIgA/qXtOPTZdQ/9Wid0i4K3QpQ2JoDJ7Uirci36'),
(62, 'goSHA', '$2y$10$w1XGq2cK.wXRnHQVl8tT1ulVs0po4yqBNwrmYqCL01K7JAeTzqQpK'),
(63, 'den', '$2y$10$x.a6aFbn4FphETr5emZ4bOPvDkLFkfhSIm.rpB3dDs73IlukgxISe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
