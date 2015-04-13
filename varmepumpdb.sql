-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 13 apr 2015 kl 10:43
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
CREATE DATABASE IF NOT EXISTS `varmepumpdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `varmepumpdb`;

-- --------------------------------------------------------

--
-- Tabellstruktur `ansokning`
--

CREATE TABLE IF NOT EXISTS `ansokning` (
`ID` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `kart_ID` int(11) NOT NULL,
  `installator_ID` int(11) NOT NULL,
  `varmepump_ID` int(11) NOT NULL,
  `borrfirma_ID` int(11) NOT NULL,
  `fastighet_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `borrfirma`
--

CREATE TABLE IF NOT EXISTS `borrfirma` (
`ID` int(11) NOT NULL,
  `cert_num` int(50) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `kontaktperson` varchar(50) NOT NULL,
  `adress` int(50) NOT NULL,
  `postnum` int(20) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` int(20) NOT NULL,
  `alt_tele` int(20) NOT NULL,
  `epost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `fastighet`
--

CREATE TABLE IF NOT EXISTS `fastighet` (
`ID` int(11) NOT NULL,
  `fastighetsbetackning` varchar(50) NOT NULL,
  `fastighet_adress` varchar(30) NOT NULL,
  `fastighet_postnr` int(10) NOT NULL,
  `fastighet_postort` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `installator`
--

CREATE TABLE IF NOT EXISTS `installator` (
`ID` int(11) NOT NULL,
  `kontaktperson` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `postnum` int(20) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` int(20) NOT NULL,
  `alt_tele` int(20) NOT NULL,
  `epost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `karta`
--

CREATE TABLE IF NOT EXISTS `karta` (
`ID` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `agarid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`ID` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `persnum` int(12) NOT NULL,
  `orgnummer` int(20) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `postnum` int(10) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` int(20) NOT NULL,
  `alt_tele` int(20) NOT NULL,
  `epost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `varmepump`
--

CREATE TABLE IF NOT EXISTS `varmepump` (
`ID` int(11) NOT NULL,
  `anlaggning` varchar(50) NOT NULL,
  `fabrikat` varchar(50) NOT NULL,
  `modell` varchar(50) NOT NULL,
  `vinkel` int(3) NOT NULL,
  `effekt` int(100) NOT NULL,
  `typ_koldmedium` varchar(50) NOT NULL,
  `mangd_koldmedium` int(100) NOT NULL,
  `volym_koldbararvatska` int(10) NOT NULL,
  `namn_koldbararvatska` varchar(50) NOT NULL,
  `fakribat_koldbararvatska` varchar(50) NOT NULL,
  `andel_frostskyddsmedel` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `ansokning`
--
ALTER TABLE `ansokning`
 ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `borrfirma`
--
ALTER TABLE `borrfirma`
 ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `fastighet`
--
ALTER TABLE `fastighet`
 ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `installator`
--
ALTER TABLE `installator`
 ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `karta`
--
ALTER TABLE `karta`
 ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `varmepump`
--
ALTER TABLE `varmepump`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `ansokning`
--
ALTER TABLE `ansokning`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `borrfirma`
--
ALTER TABLE `borrfirma`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `fastighet`
--
ALTER TABLE `fastighet`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `installator`
--
ALTER TABLE `installator`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `karta`
--
ALTER TABLE `karta`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `person`
--
ALTER TABLE `person`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `varmepump`
--
ALTER TABLE `varmepump`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
