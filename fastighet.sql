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
-- Tabellstruktur `fastighet`
--

DROP TABLE IF EXISTS `fastighet`;
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

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `fastighet`
--
ALTER TABLE `fastighet`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `fastighet`
--
ALTER TABLE `fastighet`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
