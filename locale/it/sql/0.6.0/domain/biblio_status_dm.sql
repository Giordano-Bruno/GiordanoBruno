-- phpMyAdmin SQL Dump
-- version 3.4.0-beta3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.0.3
-- Generato il: 23 Feb, 2011 at 10:20 PM
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
-- Struttura della tabella `biblio_status_dm`
--

CREATE TABLE IF NOT EXISTS `biblio_status_dm` (
  `code` char(3) NOT NULL,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `biblio_status_dm`
--

INSERT INTO `biblio_status_dm` (`code`, `description`, `default_flg`) VALUES
('in', 'nello scaffale', 'Y'),
('out', 'in prestito', 'N'),
('mnd', 'danneggiato/fuori per riparazione', 'N'),
('dis', 'in vetrina', 'N'),
('hld', 'prenotato', 'N'),
('lst', 'perso', 'N'),
('ln', 'in sala lettura', 'N'),
('ord', 'in ordinazione', 'N'),
('crt', 'da archiviare', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
