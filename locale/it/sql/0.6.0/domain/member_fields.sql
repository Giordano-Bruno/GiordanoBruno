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
-- Struttura della tabella `member_fields`
--

CREATE TABLE IF NOT EXISTS `member_fields` (
  `mbrid` int(11) NOT NULL,
  `code` varchar(16) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`mbrid`,`code`),
  KEY `code_index` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `member_fields`
--

INSERT INTO `member_fields` (`mbrid`, `code`, `data`) VALUES
(1, 'schoolGrade', ''),
(1, 'schoolTeacher', ''),
(2, 'schoolGrade', '4C'),
(2, 'schoolTeacher', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
