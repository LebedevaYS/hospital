-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 31 2019 г., 15:36
-- Версия сервера: 10.1.40-MariaDB
-- Версия PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hospital`
--

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `FirstName` varchar(225) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(225) COLLATE utf8_bin NOT NULL,
  `ReceptionSchedule` varchar(225) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`Id`, `ServiceId`, `FirstName`, `LastName`, `ReceptionSchedule`) VALUES
(1, 1, 'Жагбат', 'Омарова', ''),
(2, 1, 'Валерия', 'Швыркина', ''),
(3, 2, 'Алексей', 'Вилков', ''),
(4, 2, 'Елена', 'Виноградова', ''),
(5, 3, 'Ирина', 'Егорова', ''),
(6, 3, 'Светлана', 'Журова', ''),
(7, 4, 'Наталья', 'Игнатенкова', ''),
(8, 4, 'Оксана', 'Кузина', ''),
(9, 5, 'Раиса', 'Лесникова', ''),
(10, 5, 'Александр', 'Нестеров', ''),
(11, 6, 'Тамара', 'Синькова', ''),
(12, 6, 'Марина', 'Смирнова', ''),
(13, 7, 'Мария', 'Фильчагина', ''),
(14, 7, 'Мария', 'Бариева', ''),
(15, 8, 'Марина', 'Кумирова', ''),
(16, 8, 'Елена', 'Романова', ''),
(17, 9, 'Ильяс', 'Магомедов', ''),
(18, 9, 'Шахрух', 'Хабибуллаев', '');

-- --------------------------------------------------------

--
-- Структура таблицы `generalinformation`
--

CREATE TABLE `generalinformation` (
  `Id` int(11) NOT NULL,
  `Service` varchar(225) COLLATE utf8_bin NOT NULL,
  `PersonalDate` varchar(225) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `generalinformation`
--

INSERT INTO `generalinformation` (`Id`, `Service`, `PersonalDate`) VALUES
(1, 'Инфекционные болезни', ''),
(2, 'Кардиология', ''),
(3, 'Оториноларингология', ''),
(4, 'Офтальмология', ''),
(5, 'Терапия', ''),
(6, 'Травматология и ортопедия', ''),
(7, 'Урология', ''),
(8, 'Хирургия', ''),
(9, 'Эндокринология', '');

-- --------------------------------------------------------

--
-- Структура таблицы `personaldate`
--

CREATE TABLE `personaldate` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(225) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(225) COLLATE utf8_bin NOT NULL,
  `BirthDate` date NOT NULL,
  `E - mail` varchar(225) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(225) COLLATE utf8_bin NOT NULL,
  `DoctorId` varchar(225) COLLATE utf8_bin NOT NULL,
  `ReceptionScheduleId` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `personaldate`
--

INSERT INTO `personaldate` (`Id`, `FirstName`, `LastName`, `BirthDate`, `E - mail`, `Phone`, `DoctorId`, `ReceptionScheduleId`) VALUES
(4, 'Петр', 'Рожков', '2001-01-01', 'ыжшопзу', '345-458', 'Валерия Швыркина', '12:32'),
(5, 'asritjqw', 'we;r;jt', '2001-01-01', 'qerwot[q3', '787-594', 'Валерия Швыркина', '12:38'),
(6, 'erjtie', 'ereyr', '2001-01-01', 'ewiyeir', '745-475', 'Жагбат Омарова', '12:32');

-- --------------------------------------------------------

--
-- Структура таблицы `receptionschedule`
--

CREATE TABLE `receptionschedule` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `generalinformation`
--
ALTER TABLE `generalinformation`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `personaldate`
--
ALTER TABLE `personaldate`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `receptionschedule`
--
ALTER TABLE `receptionschedule`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `generalinformation`
--
ALTER TABLE `generalinformation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `personaldate`
--
ALTER TABLE `personaldate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `receptionschedule`
--
ALTER TABLE `receptionschedule`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
