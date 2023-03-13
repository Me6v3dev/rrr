-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2023 г., 12:04
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `donbas`
--

CREATE TABLE `donbas` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `donbas`
--

INSERT INTO `donbas` (`id`, `filename`) VALUES
(1, '/photos/kucha/300px-Karte_-_Donezbecken-Operation_1943.png');

-- --------------------------------------------------------

--
-- Структура таблицы `istoriya`
--

CREATE TABLE `istoriya` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `istoriya`
--

INSERT INTO `istoriya` (`id`, `filename`) VALUES
(1, '/photos/kucha/Табло.jpg'),
(2, '/photos/kucha/800px-Даты_Великой_Отечественной.jpg'),
(3, '/photos/kucha/Second_world_war_europe_1941_map_de.jpg'),
(4, '/photos/kucha/Invasion1941.jpg'),
(5, '/photos/kucha/Map_of_dnieper_battle_grand.jpg'),
(6, '/photos/kucha/Second_World_War_Europe_11_1942_de.jpg'),
(7, '/photos/kucha/Eastern_Front_1943-08_to_1944-12.jpg'),
(8, '/photos/kucha/Eastern_Front_1945-01_to_1945-05.jpg'),
(9, '');

-- --------------------------------------------------------

--
-- Структура таблицы `msk`
--

CREATE TABLE `msk` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Info-battles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `msk`
--

INSERT INTO `msk` (`id`, `filename`, `Info-battles`) VALUES
(1, '/photos/kucha/RIAN_archive_887721_Defense_of_M.jpg', ''),
(2, '/photos/kucha/Karte_-_Kesselschlacht_bei_Brjansk_1941.png', ''),
(3, '/photos/kucha/Georgy_Zhukov_8.jpg', ''),
(4, '/photos/kucha/Karte_-_Kesselschlacht_bei_Vjasma_1941.png', ''),
(5, '/photos/kucha/Оборона_Москвы._30_сентября_-_5_декабря.jpg', ''),
(6, '/photos/kucha/Можайско-Малоярославецкая_оборонительная_операция._10-30_октября_1941_г.jpg', ''),
(7, '/photos/kucha/RIAN_archive_3500_Muscovites_building_fortifications.jpg', ''),
(8, '/photos/kucha/RIAN_archive_2551_Tanks_in_a_liberated_village.jpg', ''),
(9, '/photos/kucha/Пулемётный_противоосколочный_колпак_(1941)_в_Битцевском_парке_01.jpg', ''),
(10, '/photos/kucha/Kalinin.jpg', ''),
(11, '/photos/kucha/Schlamm1941.jpg', ''),
(12, '/photos/kucha/Бронебойщики_выходят_на_огневую_позицию_в_районе_Звенигорода._Зима_1941_г.jpg', ''),
(13, '/photos/kucha/Schlamm1941.jpg', ''),
(14, '/photos/kucha/RIAN_archive_267_Troops_going_to_the_front.jpg', ''),
(15, '/photos/kucha/RIAN_archive_884162_German_armor_unit_defeated_in_the_vicinity_of_Skirmanovo_village.jpg', ''),
(16, '/photos/kucha/Bundesarchiv_Bild_183-B17220,_Sowjetunion,_Panzerangriff_bei_Istra.jpg', ''),
(17, '/photos/kucha/800px-Battle_of_Moscow_1.jpg', ''),
(18, '/photos/kucha/RIAN_archive_1417_The_examination_of_trophies.jpg', ''),
(19, '/photos/kucha/', '');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `filename`, `caption`) VALUES
(1, '/photos/Geroi/korzun.jpg', 'Корзун Андрей Григорьевич'),
(2, '/photos/Geroi/Leonid_Golikov.jpg', 'Голиков Леонид Александрович'),
(3, '/photos/Geroi/Alexander_Matveyevich_Matrosov.jpg', 'Матросов Александр Матвеевич'),
(4, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(5, '/photos/Geroi/Gastello_Nikolay_Francievich.jpg', 'Гастелло Николай Францевич'),
(6, '/photos/Geroi/Alexey_Maresyev_1940s.jpg', 'Маресьев Алексей Петрович'),
(7, '/photos/Geroi/Zoya_Kosmodemyanskaya,_1941.jpg', 'Космодемьянская Зоя\nАнатольевна'),
(8, '/photos/Geroi/Osipenko_EI.jpg', 'Осипенко Ефим\nИльич'),
(9, '/photos/Geroi/A_V_German1.jpg', 'Герман Александр\nВикторович'),
(10, '/photos/Geroi/Hrustitsky_VlV.jpg', 'Хрустицкий Владислав\nВладиславович'),
(11, '/photos/Geroi/Matvey_Kuzmin.jpg', 'Кузьмин Матвей\nКузьмич'),
(12, '/photos/Geroi/Victor_Talalihkin.jpg', 'Талалихин Виктор\nВасильевич'),
(13, '/photos/Geroi/1944_CPA_887.jpg', 'Молодая гвардия (подпольная организация)'),
(14, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(15, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(16, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(17, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(18, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(19, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(20, '/photos/Geroi/Зина_Портнова.jpg', 'Портнова Зинаида Мартыновна'),
(21, '/photos/kucha/table.jpg', ''),
(22, '/photos/kucha/', ''),
(23, '/photos/Geroi/', ''),
(24, '/photos/Geroi/', ''),
(25, '/photos/Geroi/', ''),
(26, '/photos/Geroi/', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Василий', 'Медведев', 'gb1k@bk.ru', '16Tipopa'),
(2, 'Илья', 'Скоров', 'test2@bk.ru', '123'),
(3, 'Алексей', 'Смуглый', 'test3@bk.ru', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `donbas`
--
ALTER TABLE `donbas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `istoriya`
--
ALTER TABLE `istoriya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `msk`
--
ALTER TABLE `msk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `donbas`
--
ALTER TABLE `donbas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `istoriya`
--
ALTER TABLE `istoriya`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `msk`
--
ALTER TABLE `msk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
