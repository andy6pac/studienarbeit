-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 06. Jun 2013 um 18:16
-- Server Version: 5.5.29
-- PHP-Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `locatebillard`
--
CREATE DATABASE `locatebillard` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `locatebillard`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Locations`
--

CREATE TABLE `Locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lokalitaet` varchar(15) NOT NULL,
  `bewertung` int(1) NOT NULL,
  `strasse` varchar(50) NOT NULL,
  `hausnummer` varchar(6) NOT NULL,
  `plz` varchar(5) NOT NULL,
  `ort` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `internet` varchar(50) NOT NULL,
  `zeiten` varchar(100) NOT NULL,
  `snooker` int(2) NOT NULL,
  `pool` int(2) NOT NULL,
  `carambol` int(2) NOT NULL,
  `sieben_ft` tinyint(1) NOT NULL,
  `acht_ft` tinyint(1) NOT NULL,
  `neun_ft` tinyint(1) NOT NULL,
  `snooker_preis` double(5,2) NOT NULL,
  `pool_preis` double(5,2) NOT NULL,
  `carambol_preis` double(5,2) NOT NULL,
  `speisen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `Locations`
--

INSERT INTO `Locations` (`id`, `name`, `lokalitaet`, `bewertung`, `strasse`, `hausnummer`, `plz`, `ort`, `telefon`, `email`, `internet`, `zeiten`, `snooker`, `pool`, `carambol`, `sieben_ft`, `acht_ft`, `neun_ft`, `snooker_preis`, `pool_preis`, `carambol_preis`, `speisen`) VALUES
(1, 'Parapluie', 'Billardbistro', 4, 'Raigeringer Strasse', '25a', '92224', 'Amberg', '09621/83322', 'info@parapluie.de', 'www.parapluie.de', 'täglich von 10.00 bis 1.00 Uhr', 0, 9, 0, 0, 0, 1, 0.00, 6.00, 0.00, 1),
(2, 'Hallenbad', 'Spielothek', 3, 'Rosenbachstraße', '12', '92237', 'Sulzbach-Rosenberg', '09661/874999', 'info@hallenbad.de', 'www.hallenbad.de', 'täglich von 9.00 bis 3.00 Uhr', 2, 7, 0, 0, 0, 1, 6.00, 6.00, 0.00, 0),
(3, 'Sportland Erlangen', 'Sonstige', 5, 'Münchener Strasse', '55', '91054', 'Erlangen', '09131/22024', 'info@sportland.de', 'www.sportland.de', 'täglich von 9.00 bis 2.00 Uhr', 4, 10, 0, 0, 1, 1, 9.50, 8.50, 0.00, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
