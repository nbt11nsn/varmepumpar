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
-- Tabellstruktur `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
`ID` int(11) NOT NULL,
  `fornamn` varchar(50) NOT NULL,
  `efternamn` varchar(50) NOT NULL,
  `persnum` varchar(12) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `postnum` varchar(10) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` varchar(20) NOT NULL,
  `alt_tele` varchar(20) NOT NULL,
  `epost` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `person`
--

INSERT INTO `person` (`ID`, `fornamn`, `efternamn`, `persnum`, `adress`, `postnum`, `postort`, `tele`, `alt_tele`, `epost`) VALUES
(1, 'Niklas', 'Sjögren', '8806087550', 'Brunnsgatan 59A', '80252', 'Gävle', '0730384158', '', 'Niklas@hotmail.com');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `person`
--
ALTER TABLE `person`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
