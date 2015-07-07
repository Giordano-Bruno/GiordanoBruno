-- phpMyAdmin SQL Dump
-- version 3.4.0-beta3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.0.3
-- Generato il: 23 Feb, 2011 at 10:23 PM
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
-- Struttura della tabella `member_fields_dm`
--

CREATE TABLE IF NOT EXISTS `member_fields_dm` (
  `code` varchar(16) NOT NULL,
  `description` char(32) NOT NULL,
  `default_flg` char(1) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `member_fields_dm`
--

INSERT INTO `member_fields_dm` (`code`, `description`, `default_flg`) VALUES
('schoolGrade', 'Classe', 'N'),
('schoolTeacher', 'Docente di', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
