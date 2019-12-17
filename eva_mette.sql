-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2019 at 09:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mette`
--

-- --------------------------------------------------------

--
-- Table structure for table `beloeb`
--

CREATE TABLE `beloeb` (
  `beloeb_id` tinyint(4) NOT NULL,
  `beloeb` int(10) NOT NULL,
  `enhed_key` varchar(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beloeb`
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
-- Table structure for table `bindingsperiode`
--

CREATE TABLE `bindingsperiode` (
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `loebetid` int(4) NOT NULL,
  `enhed_key` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bindingsperiode`
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
-- Table structure for table `enhedstabel`
--

CREATE TABLE `enhedstabel` (
  `enhed_key` tinyint(4) NOT NULL,
  `enhed` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enhedstabel`
--

INSERT INTO `enhedstabel` (`enhed_key`, `enhed`) VALUES
(1, 'DKK'),
(2, '%'),
(3, 'måned'),
(4, 'mdr.');

-- --------------------------------------------------------

--
-- Table structure for table `kontrakt`
--

CREATE TABLE `kontrakt` (
  `kontrakt_id` int(10) NOT NULL,
  `oprettetaf` int(10) NOT NULL,
  `laangiver_user_id` int(10) NOT NULL,
  `laantager_user_id` int(10) NOT NULL,
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `rente_id` tinyint(4) NOT NULL,
  `beloeb_id` tinyint(4) NOT NULL,
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `maanedlig_afdrag` float(15,10) NOT NULL,
  `laangiver_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_1` timestamp NULL DEFAULT current_timestamp(),
  `laantager_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_2` timestamp NULL DEFAULT current_timestamp(),
  `gebyr_id` tinyint(4) NOT NULL,
  `reg` datetime NOT NULL DEFAULT current_timestamp(),
  `value` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kontraktbrud`
--

CREATE TABLE `kontraktbrud` (
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `brud` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontraktbrud`
--

INSERT INTO `kontraktbrud` (`kontraktbrud_id`, `brud`) VALUES
(1, 'Løsning1'),
(2, 'Løsning2'),
(3, 'Din kontraktslige forpligtigelse overføres til \'Likvido\'');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `mail` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `key` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rente`
--

CREATE TABLE `rente` (
  `rente_id` tinyint(4) NOT NULL,
  `rente` float NOT NULL,
  `enhed_key` varchar(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rente`
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
-- Table structure for table `stiftelsesgebyr`
--

CREATE TABLE `stiftelsesgebyr` (
  `gebyr_id` tinyint(4) NOT NULL,
  `minlaan` int(10) NOT NULL,
  `maxlaan` int(10) NOT NULL,
  `gebyr` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stiftelsesgebyr`
--

INSERT INTO `stiftelsesgebyr` (`gebyr_id`, `minlaan`, `maxlaan`, `gebyr`) VALUES
(1, 1, 1000, 50),
(2, 1001, 5000, 70),
(3, 5001, 10000, 200),
(4, 10001, 20000, 400);

-- --------------------------------------------------------

--
-- Table structure for table `underskrift`
--

CREATE TABLE `underskrift` (
  `underskrift_id` tinyint(4) NOT NULL,
  `type` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `underskrift`
--

INSERT INTO `underskrift` (`underskrift_id`, `type`) VALUES
(1, 'Nej'),
(2, 'Ja');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fornavn` varchar(40) NOT NULL,
  `efternavn` varchar(40) NOT NULL,
  `mobil` int(12) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fornavn`, `efternavn`, `mobil`, `mail`, `password`) VALUES
(11, 'Poul', 'Hansen', 33443344, 'poul@test.dk', '$2y$10$jyI/GSdisc1ZG77cBfxHO.z8O5W4So2F65klqV9lOHONV.Jr5OJ52'),
(12, 'Signe', 'Henriksen', 22332233, 'signe@test.dk', '$2y$10$ByXvHDzgHbO1GHwS.ThPP.RVsscB/15LoqPe5Ul2KulRplT8mpYci'),
(13, 'Eva', 'P', 12345678, 'eva@btech.au.dk', '$2y$10$a96U18mmTks36Ts2kibLdODx4ngvQLFS3K4ZF/3uf51KGyWSyx3ru'),
(14, 'Eva Sørum', 'Poulsen', 12345678, 'eva@auhe.au.dk', '$2y$10$mEq9H/JDMZj6vLRSVRTbb.2ZbGDlsoOfe067ZnFBM0nDBxuhMcS3C'),
(15, 'TestUser', 'UserTest', 12345678, 'test@test.com', '$2y$10$ugTS2VtfVtgghBn3tlSw.ukYbzeNbNf4px5y3U9pLi7a1GxbznXru'),
(17, 'Test', 'User', 12345678, 'testuser@test.com', '$2y$10$GfWRbtI6.Ps85szlbNQps.dj4HdnA3QWvrdHYzikgR3Pd519fcmN6'),
(18, 'TEST1', 'TEST1', 12345678, 'test1@test.com', '$2y$10$hCGBRRz7VtrdYamtTqlDnOFZVbbyFA2dvczZM5JAjhXxqAUa8QHgi'),
(19, 'TEST2', 'TEST2', 12345678, 'test2@test.com', '$2y$10$j3gbo.YsN9a7V/INEU5Hkez.lALmnsqQzUUTQbzwr9hL7SGnyp1hm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beloeb`
--
ALTER TABLE `beloeb`
  ADD PRIMARY KEY (`beloeb_id`);

--
-- Indexes for table `bindingsperiode`
--
ALTER TABLE `bindingsperiode`
  ADD PRIMARY KEY (`bindingsperiode_id`);

--
-- Indexes for table `enhedstabel`
--
ALTER TABLE `enhedstabel`
  ADD PRIMARY KEY (`enhed_key`);

--
-- Indexes for table `kontrakt`
--
ALTER TABLE `kontrakt`
  ADD PRIMARY KEY (`kontrakt_id`);

--
-- Indexes for table `kontraktbrud`
--
ALTER TABLE `kontraktbrud`
  ADD PRIMARY KEY (`kontraktbrud_id`);

--
-- Indexes for table `rente`
--
ALTER TABLE `rente`
  ADD PRIMARY KEY (`rente_id`);

--
-- Indexes for table `stiftelsesgebyr`
--
ALTER TABLE `stiftelsesgebyr`
  ADD PRIMARY KEY (`gebyr_id`);

--
-- Indexes for table `underskrift`
--
ALTER TABLE `underskrift`
  ADD PRIMARY KEY (`underskrift_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beloeb`
--
ALTER TABLE `beloeb`
  MODIFY `beloeb_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bindingsperiode`
--
ALTER TABLE `bindingsperiode`
  MODIFY `bindingsperiode_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `enhedstabel`
--
ALTER TABLE `enhedstabel`
  MODIFY `enhed_key` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontrakt`
--
ALTER TABLE `kontrakt`
  MODIFY `kontrakt_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rente`
--
ALTER TABLE `rente`
  MODIFY `rente_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stiftelsesgebyr`
--
ALTER TABLE `stiftelsesgebyr`
  MODIFY `gebyr_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `underskrift`
--
ALTER TABLE `underskrift`
  MODIFY `underskrift_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
