-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.45 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных db_shift
DROP DATABASE IF EXISTS `db_shift`;
CREATE DATABASE IF NOT EXISTS `db_shift` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_shift`;


-- Дамп структуры для таблица db_shift.zakupki_gov_ru
DROP TABLE IF EXISTS `zakupki_gov_ru`;
CREATE TABLE IF NOT EXISTS `zakupki_gov_ru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text,
  `response` longtext,
  `request` text,
  `page_no` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица db_shift.zakupki_gov_ru_descripttenders
DROP TABLE IF EXISTS `zakupki_gov_ru_descripttenders`;
CREATE TABLE IF NOT EXISTS `zakupki_gov_ru_descripttenders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DT` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TENDERID` text,
  `TENDERURL` text,
  PRIMARY KEY (`ID`),
  KEY `Индекс 2` (`TENDERID`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица db_shift.zakupki_gov_ru_requests
DROP TABLE IF EXISTS `zakupki_gov_ru_requests`;
CREATE TABLE IF NOT EXISTS `zakupki_gov_ru_requests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DT` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `URL` text,
  `PAGETEXT` text,
  `PAGETEXTSRLFLESS` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица db_shift.zakupki_gov_ru_sessions
DROP TABLE IF EXISTS `zakupki_gov_ru_sessions`;
CREATE TABLE IF NOT EXISTS `zakupki_gov_ru_sessions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DT` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SESSIONTYPE` tinytext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица db_shift.zakupki_gov_ru_tendertd
DROP TABLE IF EXISTS `zakupki_gov_ru_tendertd`;
CREATE TABLE IF NOT EXISTS `zakupki_gov_ru_tendertd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DT` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TenderDT` text,
  `TenderDD` text,
  PRIMARY KEY (`ID`),
  KEY `Индекс 2` (`TenderDT`(100),`TenderDD`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
