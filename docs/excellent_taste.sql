-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 04:33 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excellent_taste`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikelen`
--

CREATE TABLE `artikelen` (
  `artikel_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL,
  `prijs` decimal(4,2) NOT NULL,
  `artikeltype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikelen`
--

INSERT INTO `artikelen` (`artikel_id`, `omschrijving`, `prijs`, `artikeltype_id`) VALUES
(1, 'Baklava', '2.99', 2),
(2, 'Opgewarmde walnoten', '4.99', 1),
(3, 'Feta tapenade', '5.99', 4),
(4, 'Opgewarmde cornflakes', '1.99', 3),
(5, 'Heineke 110ml', '4.75', 5);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_soorten`
--

CREATE TABLE `artikel_soorten` (
  `artikelsoort_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel_soorten`
--

INSERT INTO `artikel_soorten` (`artikelsoort_id`, `omschrijving`) VALUES
(1, 'Voorgerecht'),
(2, 'Hoofdgerecht'),
(3, 'Dranken');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_types`
--

CREATE TABLE `artikel_types` (
  `artikeltype_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL,
  `artikelsoort_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel_types`
--

INSERT INTO `artikel_types` (`artikeltype_id`, `omschrijving`, `artikelsoort_id`) VALUES
(1, 'Warm', 1),
(2, 'Koud', 1),
(3, 'Warm', 2),
(4, 'Koud', 2),
(5, 'Bier', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bestellingen`
--

CREATE TABLE `bestellingen` (
  `bestelling_id` int(11) NOT NULL,
  `tafel_nummer` int(11) NOT NULL,
  `datum_aangemaakt` date NOT NULL,
  `tijd` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestellingen`
--

INSERT INTO `bestellingen` (`bestelling_id`, `tafel_nummer`, `datum_aangemaakt`, `tijd`) VALUES
(1, 2, '2019-11-21', '00:00:00'),
(2, 6, '2019-11-23', '00:00:00'),
(3, 7, '2019-11-22', '00:00:00'),
(4, 7, '2019-11-22', '00:00:00'),
(5, 4, '2019-11-21', '00:00:00'),
(7, 8, '2019-11-22', '00:38:00'),
(8, 5, '2019-11-05', '00:00:00'),
(9, 5, '2019-11-29', '10:15:00'),
(10, 3, '2019-11-27', '19:20:00'),
(11, 3, '2019-11-27', '19:20:00'),
(12, 4, '2019-11-28', '19:20:00'),
(13, 4, '2019-11-28', '19:20:00'),
(14, 4, '2019-11-28', '19:20:00'),
(15, 14, '2019-11-25', '00:00:00'),
(16, 14, '2019-11-25', '02:01:00'),
(17, 9, '2019-11-23', '01:01:00'),
(18, 10, '2019-11-26', '17:00:00'),
(19, 102, '2019-11-20', '00:22:00'),
(20, 102, '2019-11-20', '00:22:00'),
(21, 5, '2019-11-27', '10:00:00'),
(22, 150, '2019-11-27', '10:00:00'),
(23, 125, '2019-11-28', '10:24:00'),
(24, 122, '2020-12-28', '23:24:00'),
(25, 10, '2019-11-28', '11:24:00'),
(26, 15, '2019-11-20', '11:26:00'),
(27, 15, '2019-11-27', '10:28:00'),
(28, 10, '2019-11-27', '10:00:00'),
(29, 1220, '2020-12-28', '23:24:00'),
(30, 1330, '2019-11-27', '10:59:00'),
(31, 1234, '2019-11-27', '10:06:00'),
(32, 103, '2019-11-27', '10:20:00'),
(33, 10400, '2019-11-27', '10:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `bestelling_artikelen`
--

CREATE TABLE `bestelling_artikelen` (
  `bestelling_id` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestelling_artikelen`
--

INSERT INTO `bestelling_artikelen` (`bestelling_id`, `artikel_id`, `aantal`) VALUES
(1, 1, 98),
(1, 4, 62),
(1, 3, 54),
(1, 2, 92),
(1, 5, 36),
(2, 5, 14),
(2, 2, 31),
(2, 3, 33),
(2, 1, 48),
(2, 4, 36),
(4, 2, 11),
(4, 1, 22),
(4, 4, 12),
(4, 3, 1),
(4, 5, 1),
(5, 4, 1),
(5, 3, 1),
(5, 5, 1),
(5, 1, 2),
(15, 5, 4),
(16, 1, 4),
(17, 1, 2),
(17, 4, 1),
(17, 3, 1),
(17, 5, 1),
(17, 2, 3),
(18, 2, 1),
(18, 1, 1),
(18, 4, 5),
(18, 3, 5),
(14, 4, 1),
(14, 3, 3),
(14, 2, 1),
(14, 1, 1),
(10, 2, 1),
(10, 1, 1),
(10, 4, 2),
(10, 3, 2),
(10, 5, 1),
(16, 4, 2),
(16, 3, 1),
(16, 5, 1),
(16, 2, 2),
(7, 1, 1),
(7, 4, 2),
(7, 3, 1),
(3, 2, 4),
(3, 1, 9),
(22, 2, 1),
(22, 1, 4),
(22, 4, 2),
(22, 5, 2),
(3, 4, 7),
(3, 3, 7),
(23, 3, 4),
(23, 4, 1),
(23, 1, 1),
(23, 2, 1),
(23, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservering`
--

CREATE TABLE `reservering` (
  `reservering_id` int(11) NOT NULL,
  `voornaam` varchar(256) NOT NULL,
  `achternaam` varchar(256) NOT NULL,
  `tel` int(13) NOT NULL,
  `aantal_personen` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `tafel_nummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservering`
--

INSERT INTO `reservering` (`reservering_id`, `voornaam`, `achternaam`, `tel`, `aantal_personen`, `datum`, `tijd`, `tafel_nummer`) VALUES
(1, 'Saif', 'Rashed', 640727257, 7, '2019-12-13', '05:00:00', 5),
(2, 'new', 'rnws', 640727248, 12, '2019-11-27', '01:08:00', 3),
(3, 'Richard', 'van Dijk', 342408392, 5, '2019-12-18', '18:11:28', 10),
(4, 'Hans', 'Rothchild', 366684383, 5, '2019-12-13', '06:00:00', 4),
(5, 'Adriaan', 'Van Brugge', 393292432, 8, '2019-12-19', '09:00:00', 5),
(6, 'Saif', 'new', 60405934, 23, '2019-12-11', '03:23:00', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikelen`
--
ALTER TABLE `artikelen`
  ADD PRIMARY KEY (`artikel_id`),
  ADD KEY `artikeltype_id` (`artikeltype_id`);

--
-- Indexes for table `artikel_soorten`
--
ALTER TABLE `artikel_soorten`
  ADD PRIMARY KEY (`artikelsoort_id`);

--
-- Indexes for table `artikel_types`
--
ALTER TABLE `artikel_types`
  ADD PRIMARY KEY (`artikeltype_id`),
  ADD KEY `artikelsoort_id` (`artikelsoort_id`);

--
-- Indexes for table `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`bestelling_id`);

--
-- Indexes for table `bestelling_artikelen`
--
ALTER TABLE `bestelling_artikelen`
  ADD KEY `bestelling_id` (`bestelling_id`,`artikel_id`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- Indexes for table `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`reservering_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikelen`
--
ALTER TABLE `artikelen`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artikel_soorten`
--
ALTER TABLE `artikel_soorten`
  MODIFY `artikelsoort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artikel_types`
--
ALTER TABLE `artikel_types`
  MODIFY `artikeltype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `bestelling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reservering`
--
ALTER TABLE `reservering`
  MODIFY `reservering_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikelen`
--
ALTER TABLE `artikelen`
  ADD CONSTRAINT `artikelen_ibfk_1` FOREIGN KEY (`artikeltype_id`) REFERENCES `artikel_types` (`artikeltype_id`);

--
-- Constraints for table `artikel_types`
--
ALTER TABLE `artikel_types`
  ADD CONSTRAINT `artikel_types_ibfk_1` FOREIGN KEY (`artikelsoort_id`) REFERENCES `artikel_soorten` (`artikelsoort_id`);

--
-- Constraints for table `bestelling_artikelen`
--
ALTER TABLE `bestelling_artikelen`
  ADD CONSTRAINT `bestelling_artikelen_ibfk_1` FOREIGN KEY (`artikel_id`) REFERENCES `artikelen` (`artikel_id`),
  ADD CONSTRAINT `bestelling_artikelen_ibfk_2` FOREIGN KEY (`bestelling_id`) REFERENCES `bestellingen` (`bestelling_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
