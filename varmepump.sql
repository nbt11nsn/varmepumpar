-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 apr 2015 kl 09:59
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
-- Tabellstruktur `varmepump`
--

DROP TABLE IF EXISTS `varmepump`;
CREATE TABLE IF NOT EXISTS `varmepump` (
`ID` int(11) NOT NULL,
  `anlaggning` varchar(50) NOT NULL,
  `vinkel` varchar(3) NOT NULL,
  `effekt` varchar(100) NOT NULL,
  `borrdjup` varchar(50) NOT NULL,
  `typ_koldbarare` varchar(50) NOT NULL,
  `typ_koldmedium` varchar(50) NOT NULL,
  `mangd_koldmedium` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `varmepump`
--

INSERT INTO `varmepump` (`ID`, `anlaggning`, `vinkel`, `effekt`, `borrdjup`, `typ_koldbarare`, `typ_koldmedium`, `mangd_koldmedium`) VALUES
(1, 'Ytvärme', '10', '25', '150', 'köldbärare2000', 'köldmedium2000', '50');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `varmepump`
--
ALTER TABLE `varmepump`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `varmepump`
--
ALTER TABLE `varmepump`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
