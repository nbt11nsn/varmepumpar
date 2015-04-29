-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 apr 2015 kl 09:58
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `varmepumpdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `fakturamottagare`
--

DROP TABLE IF EXISTS `fakturamottagare`;
CREATE TABLE IF NOT EXISTS `fakturamottagare` (
`ID` int(11) NOT NULL,
  `fakt_namn` varchar(50) NOT NULL,
  `fakt_persnum` varchar(50) NOT NULL,
  `fakt_adress` varchar(50) NOT NULL,
  `fakt_postnum` varchar(20) NOT NULL,
  `fakt_postort` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `fakturamottagare`
--

INSERT INTO `fakturamottagare` (`ID`, `fakt_namn`, `fakt_persnum`, `fakt_adress`, `fakt_postnum`, `fakt_postort`) VALUES
(1, 'Måns Lundh', '2512147885', 'Pizzagatan 3', '87548', 'Fribbeland');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `fakturamottagare`
--
ALTER TABLE `fakturamottagare`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `fakturamottagare`
--
ALTER TABLE `fakturamottagare`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
