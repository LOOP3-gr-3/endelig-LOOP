-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 14. 12 2019 kl. 15:41:13
-- Serverversion: 5.7.26
-- PHP-version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpw_dk`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `beloeb`
--

DROP TABLE IF EXISTS `beloeb`;
CREATE TABLE IF NOT EXISTS `beloeb` (
  `beloeb_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `beloeb` int(10) NOT NULL,
  `enhed_key` varchar(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`beloeb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `beloeb`
--

INSERT INTO `beloeb` (`beloeb_id`, `beloeb`, `enhed_key`) VALUES
(1, 500, '1'),
(2, 1000, '1'),
(3, 1500, '1'),
(4, 2000, '1'),
(5, 2500, '1'),
(6, 3000, '1'),
(7, 3500, '1'),
(8, 4000, '1'),
(9, 4500, '1'),
(10, 5000, '1'),
(11, 5500, '1'),
(12, 6000, '1'),
(13, 6500, '1'),
(14, 7000, '1'),
(15, 7500, '1'),
(16, 8000, '1'),
(17, 8500, '1'),
(18, 9000, '1'),
(19, 9500, '1'),
(20, 10000, '1'),
(21, 10500, '1'),
(22, 11000, '1'),
(23, 11500, '1'),
(24, 12000, '1'),
(25, 12500, '1'),
(27, 13000, '1'),
(28, 13500, '1'),
(29, 14000, '1'),
(30, 14500, '1'),
(31, 15000, '1');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bindingsperiode`
--

DROP TABLE IF EXISTS `bindingsperiode`;
CREATE TABLE IF NOT EXISTS `bindingsperiode` (
  `bindingsperiode_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `loebetid` int(4) NOT NULL,
  `enhed_key` varchar(11) NOT NULL,
  PRIMARY KEY (`bindingsperiode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `bindingsperiode`
--

INSERT INTO `bindingsperiode` (`bindingsperiode_id`, `loebetid`, `enhed_key`) VALUES
(1, 1, '3'),
(2, 2, '4'),
(3, 3, '4'),
(4, 4, '4'),
(5, 5, '4'),
(6, 6, '4'),
(7, 7, '4'),
(8, 8, '4'),
(9, 9, '4'),
(10, 10, '4'),
(11, 11, '4'),
(12, 12, '4'),
(13, 13, '4'),
(14, 14, '4'),
(15, 15, '4'),
(16, 16, '4'),
(17, 17, '4'),
(18, 18, '4'),
(19, 19, '4'),
(20, 20, '4'),
(21, 21, '4'),
(22, 22, '4'),
(23, 23, '4'),
(24, 24, '4'),
(25, 25, '4'),
(26, 26, '4'),
(27, 27, '4'),
(28, 28, '4'),
(29, 29, '4'),
(30, 30, '4'),
(31, 31, '4'),
(32, 32, '4'),
(33, 33, '4'),
(34, 34, '4'),
(35, 35, '4'),
(36, 36, '4'),
(37, 37, '4'),
(38, 38, '4'),
(39, 39, '4'),
(40, 40, '4'),
(41, 41, '4'),
(42, 42, '4'),
(43, 43, '4'),
(44, 44, '4'),
(45, 45, '4'),
(46, 46, '4'),
(47, 47, '4'),
(48, 48, '4'),
(49, 49, '4'),
(50, 50, '4'),
(51, 51, '4'),
(52, 52, '4'),
(53, 53, '4'),
(54, 54, '4'),
(55, 55, '4'),
(56, 56, '4'),
(57, 57, '4'),
(58, 58, '4'),
(59, 59, '4'),
(60, 60, '4');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `enhedstabel`
--

DROP TABLE IF EXISTS `enhedstabel`;
CREATE TABLE IF NOT EXISTS `enhedstabel` (
  `enhed_key` tinyint(4) NOT NULL AUTO_INCREMENT,
  `enhed` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`enhed_key`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `enhedstabel`
--

INSERT INTO `enhedstabel` (`enhed_key`, `enhed`) VALUES
(1, 'DKK'),
(2, '%'),
(3, 'måned'),
(4, 'mdr.');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontrakt`
--

DROP TABLE IF EXISTS `kontrakt`;
CREATE TABLE IF NOT EXISTS `kontrakt` (
  `kontrakt_id` int(10) NOT NULL AUTO_INCREMENT,
  `oprettetaf` int(10) NOT NULL,
  `laangiver_user_id` int(10) NOT NULL,
  `laantager_user_id` int(10) NOT NULL,
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `rente_id` tinyint(4) NOT NULL,
  `beloeb_id` tinyint(4) NOT NULL,
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `maanedlig_afdrag` float NOT NULL,
  `laangiver_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `laantager_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gebyr_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`kontrakt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kontrakt`
--

INSERT INTO `kontrakt` (`kontrakt_id`, `oprettetaf`, `laangiver_user_id`, `laantager_user_id`, `kontraktbrud_id`, `rente_id`, `beloeb_id`, `bindingsperiode_id`, `maanedlig_afdrag`, `laangiver_underskrift_id`, `reg_underskrift_1`, `laantager_underskrift_id`, `reg_underskrift_2`, `gebyr_id`) VALUES
(43, 0, 11, 12, 1, 5, 2, 3, 341.67, '1', '2019-12-14 15:21:51', '2', '2019-12-14 15:21:51', 1),
(44, 0, 11, 12, 3, 1, 6, 10, 301.5, '1', '2019-12-14 14:17:19', '1', '2019-12-14 14:17:19', 2),
(45, 0, 11, 12, 1, 5, 4, 5, 424, '1', '2019-12-14 14:44:49', '1', '2019-12-14 14:44:49', 2),
(46, 0, 11, 12, 3, 5, 2, 4, 268.75, '1', '2019-12-14 14:45:52', '1', '2019-12-14 14:45:52', 1),
(47, 0, 11, 12, 3, 3, 8, 6, 688.33, '1', '2019-12-14 14:46:06', '1', '2019-12-14 14:46:06', 2),
(48, 0, 12, 11, 2, 4, 1, 4, 140, '2', '2019-12-14 15:11:01', '1', '2019-12-14 15:11:01', 1),
(49, 12, 12, 12, 3, 5, 4, 3, 706.67, '1', '2019-12-14 15:32:13', '1', '2019-12-14 15:32:13', 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontraktbrud`
--

DROP TABLE IF EXISTS `kontraktbrud`;
CREATE TABLE IF NOT EXISTS `kontraktbrud` (
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `brud` varchar(80) NOT NULL,
  PRIMARY KEY (`kontraktbrud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kontraktbrud`
--

INSERT INTO `kontraktbrud` (`kontraktbrud_id`, `brud`) VALUES
(1, 'Løsning1'),
(2, 'Løsning2'),
(3, 'Din kontraktslige forpligtigelse overføres til \'Likvido\'');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `password_reset_temp`
--

DROP TABLE IF EXISTS `password_reset_temp`;
CREATE TABLE IF NOT EXISTS `password_reset_temp` (
  `mail` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `key` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `rente`
--

DROP TABLE IF EXISTS `rente`;
CREATE TABLE IF NOT EXISTS `rente` (
  `rente_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `rente` float NOT NULL,
  `enhed_key` varchar(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`rente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `rente`
--

INSERT INTO `rente` (`rente_id`, `rente`, `enhed_key`) VALUES
(1, 0.5, '2'),
(2, 1, '2'),
(3, 1.5, '2'),
(4, 2, '2'),
(5, 2.5, '2'),
(6, 3, '2'),
(7, 3.5, '2'),
(8, 4, '2'),
(9, 4.5, '2'),
(10, 5, '2'),
(11, 5.5, '2'),
(12, 6, '2'),
(13, 6.5, '2'),
(14, 7, '2'),
(15, 7.5, '2'),
(16, 8, '2'),
(17, 8.5, '2'),
(18, 9, '2'),
(19, 9.5, '2'),
(20, 10, '2'),
(21, 10.5, '2'),
(22, 11, '2'),
(23, 11.5, '2'),
(24, 12, '2'),
(25, 12.5, '2'),
(26, 13, '2'),
(27, 13.5, '2'),
(28, 14, '2'),
(29, 14.5, '2'),
(30, 15, '2'),
(31, 15.5, '2'),
(32, 16, '2'),
(33, 16.5, '2'),
(34, 17, '2'),
(35, 17.5, '2'),
(36, 18, '2'),
(37, 18.5, '2'),
(38, 19, '2'),
(39, 19.5, '2'),
(40, 20, '2'),
(41, 0, '2');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `stiftelsesgebyr`
--

DROP TABLE IF EXISTS `stiftelsesgebyr`;
CREATE TABLE IF NOT EXISTS `stiftelsesgebyr` (
  `gebyr_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `minlaan` int(10) NOT NULL,
  `maxlaan` int(10) NOT NULL,
  `gebyr` int(10) NOT NULL,
  PRIMARY KEY (`gebyr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `stiftelsesgebyr`
--

INSERT INTO `stiftelsesgebyr` (`gebyr_id`, `minlaan`, `maxlaan`, `gebyr`) VALUES
(1, 1, 1000, 50),
(2, 1001, 5000, 70),
(3, 5001, 10000, 200),
(4, 10001, 20000, 400);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `underskrift`
--

DROP TABLE IF EXISTS `underskrift`;
CREATE TABLE IF NOT EXISTS `underskrift` (
  `underskrift_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`underskrift_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `underskrift`
--

INSERT INTO `underskrift` (`underskrift_id`, `type`) VALUES
(1, 'Nej'),
(2, 'Ja');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fornavn` varchar(40) NOT NULL,
  `efternavn` varchar(40) NOT NULL,
  `mobil` int(12) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `fornavn`, `efternavn`, `mobil`, `mail`, `password`) VALUES
(11, 'Poul', 'Hansen', 33443344, 'poul@test.dk', '$2y$10$jyI/GSdisc1ZG77cBfxHO.z8O5W4So2F65klqV9lOHONV.Jr5OJ52'),
(12, 'Signe', 'Henriksen', 22332233, 'signe@test.dk', '$2y$10$ByXvHDzgHbO1GHwS.ThPP.RVsscB/15LoqPe5Ul2KulRplT8mpYci');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
