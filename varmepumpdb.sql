-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 15 apr 2015 kl 11:38
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

-- --------------------------------------------------------

--
-- Tabellstruktur `borrfirma`
--

CREATE TABLE IF NOT EXISTS `borrfirma` (
`ID` int(11) NOT NULL,
  `cert_num` varchar(50) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `kontaktperson` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `postnum` varchar(20) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` varchar(20) NOT NULL,
  `alt_tele` varchar(20) NOT NULL,
  `epost` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `borrfirma`
--

INSERT INTO `borrfirma` (`ID`, `cert_num`, `namn`, `kontaktperson`, `adress`, `postnum`, `postort`, `tele`, `alt_tele`, `epost`) VALUES
(1, '54875485454', 'borr AB', 'borrnisse', 'apansson', '85458', 'Gävle', '0215478548', '', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `fastighet`
--

CREATE TABLE IF NOT EXISTS `fastighet` (
`ID` int(11) NOT NULL,
  `fastighetsbeteckning` varchar(50) NOT NULL,
  `fastighet_adress` varchar(30) NOT NULL,
  `fastighet_postnr` varchar(10) NOT NULL,
  `fastighet_postort` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `fastighet`
--

INSERT INTO `fastighet` (`ID`, `fastighetsbeteckning`, `fastighet_adress`, `fastighet_postnr`, `fastighet_postort`) VALUES
(1, 'Eldkvarnen 1', 'Eldgatan 51', '78452', 'Stockholm');

-- --------------------------------------------------------

--
-- Tabellstruktur `installator`
--

CREATE TABLE IF NOT EXISTS `installator` (
`ID` int(11) NOT NULL,
  `kontaktperson` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `postnum` varchar(20) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` varchar(20) NOT NULL,
  `alt_tele` varchar(20) NOT NULL,
  `epost` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `installator`
--

INSERT INTO `installator` (`ID`, `kontaktperson`, `adress`, `postnum`, `postort`, `tele`, `alt_tele`, `epost`) VALUES
(1, 'hans huldt', 'hulish', '8598', 'Gefle', '0261452145', '074587821', '');

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

INSERT INTO `person` (`ID`, `namn`, `persnum`, `adress`, `postnum`, `postort`, `tele`, `alt_tele`, `epost`) VALUES
(1, 'Niklas Sjögren', '8806087550', 'Brunnsgatan 59A', '80252', 'Gävle', '0730384158', '', 'Niklas@hotmail.com');

-- --------------------------------------------------------

--
-- Tabellstruktur `varmepump`
--

CREATE TABLE IF NOT EXISTS `varmepump` (
`ID` int(11) NOT NULL,
  `anlaggning` varchar(50) NOT NULL,
  `fabrikat` varchar(50) NOT NULL,
  `modell` varchar(50) NOT NULL,
  `vinkel` varchar(3) NOT NULL,
  `effekt` varchar(100) NOT NULL,
  `typ_koldmedium` varchar(50) NOT NULL,
  `mangd_koldmedium` int(100) NOT NULL,
  `volym_koldbararvatska` varchar(10) NOT NULL,
  `namn_koldbararvatska` varchar(50) NOT NULL,
  `fabrikat_koldbararvatska` varchar(50) NOT NULL,
  `andel_frostskyddsmedel` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `varmepump`
--

INSERT INTO `varmepump` (`ID`, `anlaggning`, `fabrikat`, `modell`, `vinkel`, `effekt`, `typ_koldmedium`, `mangd_koldmedium`, `volym_koldbararvatska`, `namn_koldbararvatska`, `fabrikat_koldbararvatska`, `andel_frostskyddsmedel`) VALUES
(1, 'Bergvärme', 'AP73', 'bergvärme200', '20', '50', 'superkallt', 5, '30', 'superfrostskyddet', 'H2Okiller', '15');

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `borrfirma`
--
ALTER TABLE `borrfirma`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `fastighet`
--
ALTER TABLE `fastighet`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT för tabell `installator`
--
ALTER TABLE `installator`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `karta`
--
ALTER TABLE `karta`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `person`
--
ALTER TABLE `person`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `varmepump`
--
ALTER TABLE `varmepump`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
