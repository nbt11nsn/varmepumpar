-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 07 maj 2015 kl 16:27
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
-- Tabellstruktur `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
`ID` int(20) NOT NULL,
  `infotext` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9875 ;

--
-- Dumpning av Data i tabell `information`
--

INSERT INTO `information` (`ID`, `infotext`) VALUES
(9874, 'sdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfds');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `information`
--
ALTER TABLE `information`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `information`
--
ALTER TABLE `information`
MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9875;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
