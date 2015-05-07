-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 07 maj 2015 kl 16:27
-- Serverversion: 5.5.43
-- PHP-version: 5.4.39-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `nbt11nsn`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `ansokning`
--

DROP TABLE IF EXISTS `ansokning`;
CREATE TABLE IF NOT EXISTS `ansokning` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `ansokning`
--

INSERT INTO `ansokning` (`ID`, `datum`) VALUES
(771, '2015-05-04'),
(3173, '2015-05-04'),
(8176, '2015-05-04'),
(9089, '2015-05-07');

-- --------------------------------------------------------

--
-- Tabellstruktur `borrfirma`
--

DROP TABLE IF EXISTS `borrfirma`;
CREATE TABLE IF NOT EXISTS `borrfirma` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `borr_namn` varchar(50) NOT NULL,
  `borr_tele` varchar(20) NOT NULL,
  `borr_certifiering` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `borrfirma`
--

INSERT INTO `borrfirma` (`ID`, `borr_namn`, `borr_tele`, `borr_certifiering`) VALUES
(771, 'rew', 'ewr', 'Nej'),
(3173, '232132321321312', 'd', 'Ja'),
(8176, 'dsasads', '214214', 'Nej'),
(9089, 'hgfhfg', 'gfhfg', 'Nej');

-- --------------------------------------------------------

--
-- Tabellstruktur `fakturamottagare`
--

DROP TABLE IF EXISTS `fakturamottagare`;
CREATE TABLE IF NOT EXISTS `fakturamottagare` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fakt_namn` varchar(50) NOT NULL,
  `fakt_persnum` varchar(50) NOT NULL,
  `fakt_adress` varchar(50) NOT NULL,
  `fakt_postnum` varchar(20) NOT NULL,
  `fakt_postort` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `fakturamottagare`
--

INSERT INTO `fakturamottagare` (`ID`, `fakt_namn`, `fakt_persnum`, `fakt_adress`, `fakt_postnum`, `fakt_postort`) VALUES
(771, 'rew', 'rew', 'rew', 'wre', 'rwe'),
(3173, '', '', '', '', ''),
(8176, '', '', '', '', ''),
(9089, 'gfg', 'fdgd', 'f', '', 'g');

-- --------------------------------------------------------

--
-- Tabellstruktur `fastighet`
--

DROP TABLE IF EXISTS `fastighet`;
CREATE TABLE IF NOT EXISTS `fastighet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fastighetsbeteckning` varchar(50) NOT NULL,
  `fastighet_adress` varchar(30) NOT NULL,
  `fastighet_postnr` varchar(10) NOT NULL,
  `fastighet_postort` varchar(30) NOT NULL,
  `q1_avlopp` varchar(10) NOT NULL,
  `q2_vatten` varchar(10) NOT NULL,
  `q3_skyddsomrade` varchar(10) NOT NULL,
  `q4_oljeuppvarmning` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `fastighet`
--

INSERT INTO `fastighet` (`ID`, `fastighetsbeteckning`, `fastighet_adress`, `fastighet_postnr`, `fastighet_postort`, `q1_avlopp`, `q2_vatten`, `q3_skyddsomrade`, `q4_oljeuppvarmning`) VALUES
(771, 'wre', 'rew', 'rew', 'rew', 'Ja, yttre', 'Nej', 'Nej', 'Ja, cistern kvar'),
(3173, '11111111', '', '', '', 'Ja, inre', 'Ja', 'Ja', 'Ja, cistern tas bort'),
(4784, 'fsdfdfsddfsfdsfsd', '', '', '', 'Ja, yttre', 'Nej', 'Nej', 'Ja, cistern kvar'),
(8176, 'asdads', '', '', '', 'Nej', 'Nej', 'Nej', 'Nej'),
(9089, 'retert', 'rter', 'rettre', 'ret', 'Ja, inre', 'Ja', 'Ja', 'Ja, cistern tas bort');

-- --------------------------------------------------------

--
-- Tabellstruktur `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `infotext` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9875 ;

--
-- Dumpning av Data i tabell `information`
--

INSERT INTO `information` (`ID`, `infotext`) VALUES
(9874, 'sdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfdssdasfdfsdfsdfds');

-- --------------------------------------------------------

--
-- Tabellstruktur `installator`
--

DROP TABLE IF EXISTS `installator`;
CREATE TABLE IF NOT EXISTS `installator` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `install_namn` varchar(50) NOT NULL,
  `install_tele` varchar(20) NOT NULL,
  `install_certifiering` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `installator`
--

INSERT INTO `installator` (`ID`, `install_namn`, `install_tele`, `install_certifiering`) VALUES
(771, 'rew', 'wre', 'Nej'),
(3173, 'rwererwerewewrewrew', '111111', 'Nej'),
(8176, 'adsads', '214412', 'Nej'),
(9089, 'fghfgh', 'fghfgh', 'Nej');

-- --------------------------------------------------------

--
-- Tabellstruktur `karta`
--

DROP TABLE IF EXISTS `karta`;
CREATE TABLE IF NOT EXISTS `karta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `namn` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `svar` varchar(3) NOT NULL,
  `agarid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
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

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fornamn` varchar(50) NOT NULL,
  `efternamn` varchar(50) NOT NULL,
  `persnum` varchar(12) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `postnum` varchar(10) NOT NULL,
  `postort` varchar(50) NOT NULL,
  `tele` varchar(20) NOT NULL,
  `alt_tele` varchar(20) NOT NULL,
  `epost` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `person`
--

INSERT INTO `person` (`ID`, `fornamn`, `efternamn`, `persnum`, `adress`, `postnum`, `postort`, `tele`, `alt_tele`, `epost`) VALUES
(771, 'wre', 'rew', 'rew', 'rew', 'ewr', 'rew', 'rew', 'rew', 'erw'),
(3173, '111111111', '222222222', '3fds', 'dfsdf', 'dfs', 'dsf', 'fds', 'fds', 'fds'),
(8176, 'adsdas', 'adssda', '124142142', 'adsdas', '412412', 'dasdas', '142214', '', ''),
(9089, 'niklas', 'sjögren', '8806087550', 'dfs', 'dfs', 'dsf', 'dsf', 'dfs', 'fd');

-- --------------------------------------------------------

--
-- Tabellstruktur `varmepump`
--

DROP TABLE IF EXISTS `varmepump`;
CREATE TABLE IF NOT EXISTS `varmepump` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `anlaggning` varchar(50) NOT NULL,
  `vinkel` varchar(3) NOT NULL,
  `effekt` varchar(100) NOT NULL,
  `borrdjup` varchar(50) NOT NULL,
  `typ_koldbarare` varchar(50) NOT NULL,
  `typ_koldmedium` varchar(50) NOT NULL,
  `mangd_koldmedium` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9740 ;

--
-- Dumpning av Data i tabell `varmepump`
--

INSERT INTO `varmepump` (`ID`, `anlaggning`, `vinkel`, `effekt`, `borrdjup`, `typ_koldbarare`, `typ_koldmedium`, `mangd_koldmedium`) VALUES
(771, 'Bergvärme', 'rew', 'rew', 'rew', 'rew', 'rwe', 'rew'),
(3173, 'Bergvärme', '21', '213213', '', '142241', 'asddas', '214421'),
(8176, 'Bergvärme', '424', '241112', '', 'adsdas', 'ffasfsa', '214'),
(9089, 'Bergvärme', 'gff', 'gfdfdg', 'gfdgf', 'dgfdfg', 'dfgfd', 'hgfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
