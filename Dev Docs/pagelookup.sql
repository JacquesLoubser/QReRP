-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2014 at 12:55 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coolfusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagelookup`
--

CREATE TABLE IF NOT EXISTS `pagelookup` (
  `ID` int(10) unsigned NOT NULL,
  `Address` varchar(100) NOT NULL,
  `titleLarge` varchar(45) DEFAULT NULL,
  `titleSmall` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagelookup`
--

INSERT INTO `pagelookup` (`ID`, `Address`, `titleLarge`, `titleSmall`) VALUES
(0, 'initPage.php', 'Main', 'Menu'),
(1, 'Clients/index.php', 'Clients', 'Index'),
(2, 'Jobs/index.php', 'Jobcard', 'Menu'),
(3, 'Email/index.php', 'Email', 'Menu'),
(4, 'Clients/Editor.php', 'Add', 'Client'),
(5, 'Clients/Editor.php', 'Edit', 'Client');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
