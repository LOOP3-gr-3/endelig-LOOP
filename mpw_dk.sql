-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: mpw.dk.mysql.service.one.com:3306
-- Genereringstid: 17. 12 2019 kl. 14:16:33
-- Serverversion: 10.3.17-MariaDB-1:10.3.17+maria~bionic
-- PHP-version: 7.2.24-0ubuntu0.18.04.1

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

CREATE TABLE `beloeb` (
  `beloeb_id` tinyint(4) NOT NULL,
  `beloeb` int(10) NOT NULL,
  `enhed_key` varchar(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `bindingsperiode` (
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `loebetid` int(4) NOT NULL,
  `enhed_key` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `enhedstabel` (
  `enhed_key` tinyint(4) NOT NULL,
  `enhed` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `reg_underskrift_1` timestamp NULL DEFAULT NULL,
  `laantager_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_2` timestamp NULL DEFAULT NULL,
  `gebyr_id` tinyint(4) NOT NULL,
  `reg` datetime NOT NULL DEFAULT current_timestamp(),
  `value` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kontrakt`
--

INSERT INTO `kontrakt` (`kontrakt_id`, `oprettetaf`, `laangiver_user_id`, `laantager_user_id`, `kontraktbrud_id`, `rente_id`, `beloeb_id`, `bindingsperiode_id`, `maanedlig_afdrag`, `laangiver_underskrift_id`, `reg_underskrift_1`, `laantager_underskrift_id`, `reg_underskrift_2`, `gebyr_id`, `reg`, `value`) VALUES
(2, 12, 11, 12, 1, 4, 4, 6, 351.6700134277, '2', '2019-12-17 08:56:01', '2', '2019-12-17 08:53:53', 2, '2019-12-17 08:22:41', 3),
(3, 12, 11, 12, 2, 5, 3, 4, 401.8800048828, '2', '2019-12-17 08:56:45', '2', '2019-12-17 08:59:47', 2, '2019-12-17 08:24:39', 3),
(4, 12, 12, 11, 1, 7, 6, 6, 529.1699829102, '2', '2019-12-17 10:10:58', '2', '2019-12-17 08:57:57', 2, '2019-12-17 08:33:45', 3),
(5, 12, 11, 12, 1, 3, 4, 5, 420.0000000000, '1', NULL, '2', '2019-12-17 10:12:24', 2, '2019-12-17 09:03:09', 2),
(6, 11, 12, 11, 1, 2, 5, 5, 519.0000000000, '1', NULL, '2', '2019-12-17 09:35:42', 2, '2019-12-17 09:35:33', 2),
(7, 12, 12, 11, 3, 6, 6, 10, 316.0000000000, '1', NULL, '1', NULL, 2, '2019-12-17 10:28:50', 1),
(8, 13, 13, 13, 2, 41, 3, 4, 392.5000000000, '1', NULL, '1', NULL, 2, '2019-12-17 13:36:23', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontraktbrud`
--

CREATE TABLE `kontraktbrud` (
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `brud` varchar(80) NOT NULL
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

CREATE TABLE `password_reset_temp` (
  `mail` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `key` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`mail`, `key`, `expDate`) VALUES
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf15374', '2019-12-13 08:28:57'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf75218', '2019-12-13 08:48:55'),
('michelle.pedersen@outlook.dk', 'ec32fc84e723141d283817984eedcc8b86171', '2019-12-13 15:44:35'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf14969', '2019-12-14 10:18:20'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf63265', '2019-12-14 10:19:38'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf59625', '2019-12-14 10:20:10'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf20815', '2019-12-14 10:20:25'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf26811', '2019-12-14 10:21:17'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf70185', '2019-12-14 10:23:35'),
('lassehvisthule@outlook.dk', '1bd8e71a8c33df890b432a37a93fcedf86452', '2019-12-14 14:41:38'),
('mhniklassen@gmail.com', '0e4f837897ee375f29b052751773990e69297', '2019-12-16 14:15:08');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `rente`
--

CREATE TABLE `rente` (
  `rente_id` tinyint(4) NOT NULL,
  `rente` float NOT NULL,
  `enhed_key` varchar(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `stiftelsesgebyr` (
  `gebyr_id` tinyint(4) NOT NULL,
  `gebyr` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `stiftelsesgebyr`
--

INSERT INTO `stiftelsesgebyr` (`gebyr_id`, `gebyr`) VALUES
(1, 50),
(2, 70),
(3, 200),
(4, 400);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `underskrift`
--

CREATE TABLE `underskrift` (
  `underskrift_id` tinyint(4) NOT NULL,
  `type` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fornavn` varchar(40) NOT NULL,
  `efternavn` varchar(40) NOT NULL,
  `mobil` int(12) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `fornavn`, `efternavn`, `mobil`, `mail`, `password`) VALUES
(11, 'Poul', 'Hansen', 33443344, 'poul@test.dk', '$2y$10$jyI/GSdisc1ZG77cBfxHO.z8O5W4So2F65klqV9lOHONV.Jr5OJ52'),
(12, 'Signe', 'Henriksen', 22332233, 'signe@test.dk', '$2y$10$ByXvHDzgHbO1GHwS.ThPP.RVsscB/15LoqPe5Ul2KulRplT8mpYci'),
(13, 'Lasse', 'Hvisthule', 53540889, 'lassehvisthule@outlook.dk', '$2y$10$U2t3H1ViQZHWeSkqMJohKOtP4Rxa8Nj4v5Hd58ceWCMeLYG1RnW2m'),
(14, 'Wasfia', 'Hashemi', 56892356, 'Wasfia@gmail.dk', '$2y$10$2pfwX94bspQU1c7i.XUs4.1QH93mkFbSibq8/3ggAywU4C/Och1pW'),
(15, 'Michelle', 'Pedersen', 40682034, 'michelle.pedersen@outlook.dk', '$2y$10$vhUxHFWhjLw4J86U5peITukJU7Fv3lX6z9ocadh6pzrPIp0Qej02a'),
(17, 'Louise', 'Jensen', 12345678, '123@hotmail.com', '$2y$10$LeuVQiLjLzwmKM9phOuIy.rKgoGVcGY845.R1B/EfZheT9LRX72wm'),
(18, 'J', 'H', 55, 'h', '$2y$10$gchlnywHYBgwgM/S8/P6meKOg3PDaN0t6wSqHsqJ5GS8dRR4Yjq5m'),
(19, 'K', 'H', 2, 's@s.dk', '$2y$10$DyUOVqICeZrH58Cu8U41de4EaDIypUoiHZul0owvcMHppghxxQLW.'),
(20, 'Lasse', 'Hvisthule', 12345678, 'lasse@live.dk', '$2y$10$/E15ktzxKrV7439yG9XgEeRQuZOI3Bkfg7AAmMkum.l1AorIuWd8y'),
(21, 'Lars ', 'Mikkelsen', 20639622, 'janma@btech.au.dk', '$2y$10$raB/.Ad5awiwjhlm/9ZkMeNGWQDIve4vVYQ2AbfV2RCYuhUVjULHW'),
(22, 'Christian Paaske', 'Lind', 26178790, 'christian.paaske.lind@gmail.com', '$2y$10$zYz5RA.6bxXewplxSggvluWv9x9E4OADLoiOdZgvH3EAt4.XL5RMC'),
(23, 'Morten', 'Refsgaard', 28723411, 'morten.refsgaard@gmail.com', '$2y$10$V6Nmkm9.Jwc9aF1JCnF8U.9/E5UnAe7vzB9TwjH.tggveGp5ricH6'),
(24, 'Mikkel', 'holt', 22332233, 'mhniklassen@gmail.com', '$2y$10$LutzdS75OawSIlGQpuQZW.EmgrRORDAncmmhNvmMH4p0VLJUmiifK');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `beloeb`
--
ALTER TABLE `beloeb`
  ADD PRIMARY KEY (`beloeb_id`);

--
-- Indeks for tabel `bindingsperiode`
--
ALTER TABLE `bindingsperiode`
  ADD PRIMARY KEY (`bindingsperiode_id`);

--
-- Indeks for tabel `enhedstabel`
--
ALTER TABLE `enhedstabel`
  ADD PRIMARY KEY (`enhed_key`);

--
-- Indeks for tabel `kontrakt`
--
ALTER TABLE `kontrakt`
  ADD PRIMARY KEY (`kontrakt_id`);

--
-- Indeks for tabel `kontraktbrud`
--
ALTER TABLE `kontraktbrud`
  ADD PRIMARY KEY (`kontraktbrud_id`);

--
-- Indeks for tabel `rente`
--
ALTER TABLE `rente`
  ADD PRIMARY KEY (`rente_id`);

--
-- Indeks for tabel `stiftelsesgebyr`
--
ALTER TABLE `stiftelsesgebyr`
  ADD PRIMARY KEY (`gebyr_id`);

--
-- Indeks for tabel `underskrift`
--
ALTER TABLE `underskrift`
  ADD PRIMARY KEY (`underskrift_id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `beloeb`
--
ALTER TABLE `beloeb`
  MODIFY `beloeb_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tilføj AUTO_INCREMENT i tabel `bindingsperiode`
--
ALTER TABLE `bindingsperiode`
  MODIFY `bindingsperiode_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tilføj AUTO_INCREMENT i tabel `enhedstabel`
--
ALTER TABLE `enhedstabel`
  MODIFY `enhed_key` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tilføj AUTO_INCREMENT i tabel `kontrakt`
--
ALTER TABLE `kontrakt`
  MODIFY `kontrakt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tilføj AUTO_INCREMENT i tabel `rente`
--
ALTER TABLE `rente`
  MODIFY `rente_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tilføj AUTO_INCREMENT i tabel `stiftelsesgebyr`
--
ALTER TABLE `stiftelsesgebyr`
  MODIFY `gebyr_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tilføj AUTO_INCREMENT i tabel `underskrift`
--
ALTER TABLE `underskrift`
  MODIFY `underskrift_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
