-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2022 г., 10:16
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bkd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `author_id` bigint(20) NOT NULL,
  `category_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `communities`
--

CREATE TABLE `communities` (
  `id` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `creator_id` bigint(20) NOT NULL,
  `communities_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `communities_categories`
--

CREATE TABLE `communities_categories` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `price` double DEFAULT NULL,
  `saler_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `city` varchar(100) NOT NULL,
  `organization` varchar(1000) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `author_id` (`author_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `creator_id` (`creator_id`),
  ADD UNIQUE KEY `communities_category_id` (`communities_category_id`);

--
-- Индексы таблицы `communities_categories`
--
ALTER TABLE `communities_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `saler_id` (`saler_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `communities`
--
ALTER TABLE `communities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `communities_categories`
--
ALTER TABLE `communities_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `communities`
--
ALTER TABLE `communities`
  ADD CONSTRAINT `communities_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `communities_ibfk_2` FOREIGN KEY (`communities_category_id`) REFERENCES `communities_categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`saler_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
