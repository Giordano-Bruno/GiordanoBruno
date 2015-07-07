-- phpMyAdmin SQL Dump
-- version 3.4.0-beta3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.0.3
-- Generato il: 23 Feb, 2011 at 10:22 PM
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
-- Struttura della tabella `mbr_classify_dm`
--

CREATE TABLE IF NOT EXISTS `mbr_classify_dm` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `max_fines` decimal(4,2) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `mbr_classify_dm`
--

INSERT INTO `mbr_classify_dm` (`code`, `description`, `default_flg`, `max_fines`) VALUES
(1, 'adulto', 'N', '0.00'),
(2, 'giovanile', 'N', '0.00'),
(3, 'Docenti', 'N', '0.00'),
(4, 'Studenti', 'N', '0.00'),
(5, 'Genitori', 'N', '0.00'),
(6, 'Personale ATA', 'N', '0.00'),
(7, 'Dirigente scolastico', 'N', '0.00'),
(8, 'Altri', 'N', '0.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
