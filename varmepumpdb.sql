-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 27 apr 2015 kl 14:49
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
  `borr_namn` varchar(50) NOT NULL,
  `borr_tele` varchar(20) NOT NULL,
  `borr_certifiering` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `borrfirma`
--

INSERT INTO `borrfirma` (`ID`, `borr_namn`, `borr_tele`, `borr_certifiering`) VALUES
(1, 'Borr AB', '0731254878', 'Ja');

-- --------------------------------------------------------

--
-- Tabellstruktur `fakturamottagare`
--

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

-- --------------------------------------------------------

--
-- Tabellstruktur `fastighet`
--

CREATE TABLE IF NOT EXISTS `fastighet` (
`ID` int(11) NOT NULL,
  `fastighetsbeteckning` varchar(50) NOT NULL,
  `fastighet_adress` varchar(30) NOT NULL,
  `fastighet_postnr` varchar(10) NOT NULL,
  `fastighet_postort` varchar(30) NOT NULL,
  `q1_avlopp` varchar(10) NOT NULL,
  `q2_vatten` varchar(10) NOT NULL,
  `q3_skyddsomrade` varchar(10) NOT NULL,
  `q4_oljeuppvarmning` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `fastighet`
--

INSERT INTO `fastighet` (`ID`, `fastighetsbeteckning`, `fastighet_adress`, `fastighet_postnr`, `fastighet_postort`, `q1_avlopp`, `q2_vatten`, `q3_skyddsomrade`, `q4_oljeuppvarmning`) VALUES
(1, 'Eldkvarnen 1', 'Brunnsgatan 59A', '80252', 'Gävle', 'Ja, inre', 'Ja', 'Ja', 'Ja, cistern tas bort');

-- --------------------------------------------------------

--
-- Tabellstruktur `installator`
--

CREATE TABLE IF NOT EXISTS `installator` (
`ID` int(11) NOT NULL,
  `install_namn` varchar(50) NOT NULL,
  `install_tele` varchar(20) NOT NULL,
  `install_certifiering` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `installator`
--

INSERT INTO `installator` (`ID`, `install_namn`, `install_tele`, `install_certifiering`) VALUES
(1, 'VVS AB', '0768545454', 'Nej');

-- --------------------------------------------------------

--
-- Tabellstruktur `karta`
--

CREATE TABLE IF NOT EXISTS `karta` (
`ID` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `svar` varchar(3) NOT NULL,
  `agarid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `karta`
--

INSERT INTO `karta` (`ID`, `namn`, `url`, `svar`, `agarid`) VALUES
(1, 'karta', '.../karta', 'Nej', 27);

-- --------------------------------------------------------

--
-- Tabellstruktur `person`
--

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

-- --------------------------------------------------------

--
-- Tabellstruktur `varmepump`
--

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
-- Index för tabell `fakturamottagare`
--
ALTER TABLE `fakturamottagare`
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
-- AUTO_INCREMENT för tabell `fakturamottagare`
--
ALTER TABLE `fakturamottagare`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `fastighet`
--
ALTER TABLE `fastighet`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `installator`
--
ALTER TABLE `installator`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `karta`
--
ALTER TABLE `karta`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `person`
--
ALTER TABLE `person`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `varmepump`
--
ALTER TABLE `varmepump`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
