-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 apr 2015 kl 09:56
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
-- Tabellstruktur `ansokning`
--

DROP TABLE IF EXISTS `ansokning`;
CREATE TABLE IF NOT EXISTS `ansokning` (
`ID` int(11) NOT NULL,
  `person_id` varchar(20) NOT NULL,
  `kart_ID` varchar(20) NOT NULL,
  `installator_ID` varchar(20) NOT NULL,
  `varmepump_ID` varchar(20) NOT NULL,
  `borrfirma_ID` varchar(20) NOT NULL,
  `fastighet_ID` varchar(20) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `ansokning`
--

INSERT INTO `ansokning` (`ID`, `person_id`, `kart_ID`, `installator_ID`, `varmepump_ID`, `borrfirma_ID`, `fastighet_ID`, `datum`) VALUES
(1, '8806087550', '8806087550', '8806087550', '8806087550', '8806087550', '8806087550', '0000-00-00');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `ansokning`
--
ALTER TABLE `ansokning`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `ansokning`
--
ALTER TABLE `ansokning`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;