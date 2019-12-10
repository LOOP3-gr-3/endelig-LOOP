-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 10. 12 2019 kl. 14:25:39
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
  PRIMARY KEY (`beloeb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `beloeb`
--

INSERT INTO `beloeb` (`beloeb_id`, `beloeb`) VALUES
(1, 500),
(2, 1000),
(3, 1500),
(4, 2000),
(5, 2500),
(6, 3000),
(7, 3500),
(8, 4000),
(9, 4500),
(10, 5000),
(11, 5500),
(12, 6000),
(13, 6500),
(14, 7000),
(15, 7500),
(16, 8000),
(17, 8500),
(18, 9000),
(19, 9500),
(20, 10000),
(21, 10500),
(22, 11000),
(23, 11500),
(24, 12000),
(25, 12500),
(27, 13000),
(28, 13500),
(29, 14000),
(30, 14500),
(31, 15000);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bindingsperiode`
--

DROP TABLE IF EXISTS `bindingsperiode`;
CREATE TABLE IF NOT EXISTS `bindingsperiode` (
  `bindingsperiode_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `loebetid` int(4) NOT NULL,
  `value` varchar(5) NOT NULL DEFAULT 'mdr',
  PRIMARY KEY (`bindingsperiode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `bindingsperiode`
--

INSERT INTO `bindingsperiode` (`bindingsperiode_id`, `loebetid`, `value`) VALUES
(1, 1, 'måned'),
(2, 2, 'mdr'),
(3, 3, 'mdr'),
(4, 4, 'mdr'),
(5, 5, 'mdr'),
(6, 6, 'mdr'),
(7, 7, 'mdr'),
(8, 8, 'mdr'),
(9, 9, 'mdr'),
(10, 10, 'mdr'),
(11, 11, 'mdr'),
(12, 12, 'mdr'),
(13, 13, 'mdr'),
(14, 14, 'mdr'),
(15, 15, 'mdr'),
(16, 16, 'mdr'),
(17, 17, 'mdr'),
(18, 18, 'mdr'),
(19, 19, 'mdr'),
(20, 20, 'mdr'),
(21, 21, 'mdr'),
(22, 22, 'mdr'),
(23, 23, 'mdr'),
(24, 24, 'mdr'),
(25, 25, 'mdr'),
(26, 26, 'mdr'),
(27, 27, 'mdr'),
(28, 28, 'mdr'),
(29, 29, 'mdr'),
(30, 30, 'mdr'),
(31, 31, 'mdr'),
(32, 32, 'mdr'),
(33, 33, 'mdr'),
(34, 34, 'mdr'),
(35, 35, 'mdr'),
(36, 36, 'mdr'),
(37, 37, 'mdr'),
(38, 38, 'mdr'),
(39, 39, 'mdr'),
(40, 40, 'mdr'),
(41, 41, 'mdr'),
(42, 42, 'mdr'),
(43, 43, 'mdr'),
(44, 44, 'mdr'),
(45, 45, 'mdr'),
(46, 46, 'mdr'),
(47, 47, 'mdr'),
(48, 48, 'mdr'),
(49, 49, 'mdr'),
(50, 50, 'mdr'),
(51, 51, 'mdr'),
(52, 52, 'mdr'),
(53, 53, 'mdr'),
(54, 54, 'mdr'),
(55, 55, 'mdr'),
(56, 56, 'mdr'),
(57, 57, 'mdr'),
(58, 58, 'mdr'),
(59, 59, 'mdr'),
(60, 60, 'mdr');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontrakt`
--

DROP TABLE IF EXISTS `kontrakt`;
CREATE TABLE IF NOT EXISTS `kontrakt` (
  `kontrakt_id` int(10) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`kontrakt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kontrakt`
--

INSERT INTO `kontrakt` (`kontrakt_id`, `laangiver_user_id`, `laantager_user_id`, `kontraktbrud_id`, `rente_id`, `beloeb_id`, `bindingsperiode_id`, `maanedlig_afdrag`, `laangiver_underskrift_id`, `reg_underskrift_1`, `laantager_underskrift_id`, `reg_underskrift_2`) VALUES
(13, 11, 12, 1, 2, 3, 3, 1, '1', '2019-12-10 11:23:26', '1', '2019-12-10 11:23:26'),
(14, 11, 12, 1, 2, 3, 3, 1, '1', '2019-12-10 11:23:31', '1', '2019-12-10 11:23:31'),
(15, 11, 12, 1, 2, 3, 3, 1, '1', '2019-12-10 11:23:54', '1', '2019-12-10 11:23:54'),
(16, 11, 12, 1, 2, 3, 3, 1, '1', '2019-12-10 11:23:59', '1', '2019-12-10 11:23:59');

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
  PRIMARY KEY (`rente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `rente`
--

INSERT INTO `rente` (`rente_id`, `rente`) VALUES
(1, 0.5),
(2, 1),
(3, 1.5),
(4, 2),
(5, 2.5),
(6, 3),
(7, 3.5),
(8, 4),
(9, 4.5),
(10, 5),
(11, 5.5),
(12, 6),
(13, 6.5),
(14, 7),
(15, 7.5),
(16, 8),
(17, 8.5),
(18, 9),
(19, 9.5),
(20, 10),
(21, 10.5),
(22, 11),
(23, 11.5),
(24, 12),
(25, 12.5),
(26, 13),
(27, 13.5),
(28, 14),
(29, 14.5),
(30, 15),
(31, 15.5),
(32, 16),
(33, 16.5),
(34, 17),
(35, 17.5),
(36, 18),
(37, 18.5),
(38, 19),
(39, 19.5),
(40, 20),
(41, 0);

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
