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
  `HOSTNAME` text NOT NULL,
  `PORT` int(11) NOT NULL,
  `PHPPROXYTYPE` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UHN` (`HOSTNAME`(100))
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shift.proxies: 131 rows
/*!40000 ALTER TABLE `proxies` DISABLE KEYS */;
INSERT INTO `proxies` (`ID`, `HOSTNAME`, `PORT`, `PHPPROXYTYPE`) VALUES
	(1, '92.42.12.245', 64101, 5),
	(2, '94.41.25.144', 1080, 5),
	(4, '46.165.220.77', 2503, 5),
	(5, '178.26.151.26', 10200, 5),
	(6, '93.90.215.49', 64101, 5),
	(8, '95.131.70.197', 60088, 5),
	(9, '31.184.242.195', 3130, 5),
	(12, '94.137.50.114', 55788, 5),
	(48, '37.26.64.80', 64101, 5),
	(15, '24.240.56.148', 10200, 5),
	(49, '37.26.64.75', 64101, 5),
	(18, '168.167.173.5', 64101, 5),
	(20, '24.24.127.124', 1080, 5),
	(45, '91.187.88.8', 64101, 5),
	(22, '138.36.61.152', 64101, 5),
	(23, '212.57.179.193', 2214, 5),
	(25, '91.187.65.226', 64101, 5),
	(30, '91.187.73.142', 64101, 5),
	(32, '91.187.66.76', 64101, 5),
	(34, '12.154.108.26', 10200, 5),
	(36, '168.167.173.24', 64101, 5),
	(37, '85.94.161.241', 64101, 5),
	(39, '85.94.170.62', 64101, 5),
	(42, '91.187.82.212', 64101, 5),
	(53, '37.26.64.81', 64101, 5),
	(54, '37.26.64.97', 64101, 5),
	(57, '185.27.10.152', 43437, 5),
	(58, '31.16.40.133', 64101, 5),
	(61, '46.227.99.83', 10200, 5),
	(62, '5.61.163.38', 10200, 5),
	(65, '5.61.178.12', 10200, 5),
	(66, '5.9.121.109', 60088, 5),
	(69, '78.42.54.178', 64101, 5),
	(70, '78.46.93.189', 32784, 5),
	(73, '85.214.61.81', 2235, 5),
	(74, '88.150.32.252', 10200, 5),
	(77, '88.150.6.126', 10200, 5),
	(78, '94.23.166.246', 60088, 5),
	(79, '67.14.221.48', 64101, 5),
	(82, '78.46.44.49', 2235, 5),
	(83, '149.202.68.167', 38486, 5),
	(84, '121.41.93.201', 1080, 5),
	(85, '64.130.182.37', 64101, 5),
	(86, '75.76.62.53', 10200, 5),
	(87, '65.182.61.197', 64101, 5),
	(88, '64.130.188.28', 64101, 5),
	(89, '216.171.25.10', 10200, 5),
	(90, '202.80.222.116', 1080, 5),
	(91, '190.234.11.77', 9000, 5),
	(92, '117.239.192.70', 1080, 5),
	(93, '181.131.90.119', 9000, 5),
	(94, '166.62.82.206', 18628, 5),
	(95, '177.11.17.175', 64101, 5),
	(96, '166.62.97.240', 18628, 5),
	(97, '166.62.97.244', 18628, 5),
	(98, '166.62.97.24', 18628, 5),
	(99, '31.193.239.212', 60088, 5),
	(100, '137.118.141.50', 10200, 5),
	(101, '24.112.4.114', 10200, 5),
	(102, '204.111.249.140', 10200, 5),
	(103, '46.216.0.204', 1080, 5),
	(104, '38.124.60.49', 64101, 5),
	(105, '138.36.62.225', 64101, 5),
	(106, '31.154.240.7', 1080, 5),
	(107, '138.36.141.123', 64101, 5),
	(108, '138.36.141.176', 64101, 5),
	(109, '41.191.216.211', 64101, 5),
	(110, '138.36.140.115', 64101, 5),
	(111, '138.36.142.221', 64101, 5),
	(112, '138.36.142.30', 64101, 5),
	(113, '138.36.141.168', 64101, 5),
	(114, '138.36.143.190', 64101, 5),
	(115, '138.36.143.8', 64101, 5),
	(116, '190.104.43.28', 64101, 5),
	(117, '187.108.6.236', 64101, 5),
	(118, '186.64.92.50', 64101, 5),
	(119, '138.36.143.132', 64101, 5),
	(120, '138.36.143.212', 64101, 5),
	(121, '138.36.60.126', 64101, 5),
	(122, '187.111.63.12', 64101, 5),
	(123, '138.36.143.84', 64101, 5),
	(124, '187.109.182.16', 64101, 5),
	(125, '187.109.189.69', 64101, 5),
	(126, '138.36.60.226', 64101, 5),
	(127, '168.167.86.166', 64101, 5),
	(128, '46.149.182.141', 64101, 5),
	(129, '190.104.33.63', 64101, 5),
	(130, '190.104.41.100', 64101, 5),
	(131, '187.121.146.235', 64101, 5),
	(132, '182.54.222.76', 64101, 5),
	(133, '186.64.71.88', 64101, 5),
	(134, '187.120.218.180', 64101, 5),
	(135, '187.111.53.59', 64101, 5),
	(136, '187.111.54.61', 64101, 5),
	(137, '187.111.51.30', 64101, 5),
	(138, '41.188.30.148', 64101, 5),
	(139, '138.36.140.97', 64101, 5),
	(140, '46.40.37.33', 64101, 5),
	(141, '37.77.105.210', 64101, 5),
	(142, '37.140.112.36', 64101, 5),
	(143, '5.165.118.147', 64101, 5),
	(144, '46.63.98.77', 64101, 5),
	(145, '46.54.162.26', 64101, 5),
	(146, '46.54.160.118', 64101, 5),
	(147, '46.54.162.58', 64101, 5),
	(148, '46.54.168.70', 64101, 5),
	(149, '46.54.197.10', 64101, 5),
	(150, '5.166.48.242', 64101, 5),
	(151, '177.8.153.125', 64101, 5),
	(152, '5.248.33.191', 64101, 5),
	(153, '110.78.159.94', 64101, 5),
	(154, '110.78.159.222', 64101, 5),
	(155, '138.36.60.244', 64101, 5),
	(156, '176.107.198.59', 64101, 5),
	(157, '177.37.192.172', 64101, 5),
	(158, '191.243.23.56', 64101, 5),
	(159, '177.38.254.98', 64101, 5),
	(160, '177.37.188.225', 64101, 5),
	(161, '177.38.254.239', 64101, 5),
	(162, '166.62.97.245', 18628, 5),
	(163, '186.17.171.10', 9000, 5),
	(164, '194.186.181.206', 64101, 5),
	(165, '109.251.162.7', 1080, 5),
	(166, '46.243.66.50', 64101, 5),
	(167, '37.19.91.217', 64101, 5),
	(168, '37.57.118.187', 64101, 5),
	(169, '46.241.85.167', 3060, 5),
	(170, '76.124.41.9', 36722, 5),
	(171, '46.151.64.74', 64101, 5),
	(172, '98.247.121.3', 29187, 5),
	(173, '191.5.195.197', 64101, 5);
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
