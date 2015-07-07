-- phpMyAdmin SQL Dump
-- version 3.4.0-beta3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.0.3
-- Generato il: 23 Feb, 2011 at 10:21 PM
-- Versione MySQL: 5.1.51
-- Versione PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `openbiblio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `material_type_dm`
--

CREATE TABLE IF NOT EXISTS `material_type_dm` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `image_file` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dump dei dati per la tabella `material_type_dm`
--

INSERT INTO `material_type_dm` (`code`, `description`, `default_flg`, `image_file`) VALUES
(1, 'audio cassetta', 'N', 'tape.gif'),
(2, 'libro', 'N', 'book.gif'),
(3, 'cd audio', 'N', 'dvd.png'),
(4, 'cd computer', 'N', 'dvd.png'),
(5, 'raccoglitore', 'N', 'case.gif'),
(6, 'rivista', 'N', 'mag.gif'),
(7, 'mappa', 'N', 'map.gif'),
(8, 'video DVD', 'N', 'dvd.png'),
(9, 'video VHS', 'N', 'vhs.gif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
