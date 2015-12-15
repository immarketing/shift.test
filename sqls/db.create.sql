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


-- Дамп структуры для таблица db_shift.proxies
DROP TABLE IF EXISTS `proxies`;
CREATE TABLE IF NOT EXISTS `proxies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HOSTNAME` text,
  `PORT` int(11) NOT NULL,
  `PHPPROXYTYPE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shift.proxies: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `proxies` DISABLE KEYS */;
INSERT INTO `proxies` (`ID`, `HOSTNAME`, `PORT`, `PHPPROXYTYPE`) VALUES
	(1, '92.42.12.245', 64101, 5),
	(2, '94.41.25.144', 1080, 5),
	(3, '94.23.166.246', 60088, 5);
/*!40000 ALTER TABLE `proxies` ENABLE KEYS */;


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

-- Дамп данных таблицы db_shift.zakupki_gov_ru: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `zakupki_gov_ru` DISABLE KEYS */;
/*!40000 ALTER TABLE `zakupki_gov_ru` ENABLE KEYS */;


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

-- Дамп данных таблицы db_shift.zakupki_gov_ru_descripttenders: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `zakupki_gov_ru_descripttenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `zakupki_gov_ru_descripttenders` ENABLE KEYS */;


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

-- Дамп данных таблицы db_shift.zakupki_gov_ru_requests: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `zakupki_gov_ru_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `zakupki_gov_ru_requests` ENABLE KEYS */;


-- Дамп структуры для таблица db_shift.zakupki_gov_ru_sessions
DROP TABLE IF EXISTS `zakupki_gov_ru_sessions`;
CREATE TABLE IF NOT EXISTS `zakupki_gov_ru_sessions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DT` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SESSIONTYPE` tinytext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shift.zakupki_gov_ru_sessions: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `zakupki_gov_ru_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `zakupki_gov_ru_sessions` ENABLE KEYS */;


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

-- Дамп данных таблицы db_shift.zakupki_gov_ru_tendertd: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `zakupki_gov_ru_tendertd` DISABLE KEYS */;
/*!40000 ALTER TABLE `zakupki_gov_ru_tendertd` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
