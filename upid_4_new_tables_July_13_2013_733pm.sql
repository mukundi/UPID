-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2013 at 07:33 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upid`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `alertId` int(11) NOT NULL AUTO_INCREMENT,
  `alertType` int(11) NOT NULL,
  `alertDateTime` datetime NOT NULL,
  `alertContent` text NOT NULL,
  `alertLocation` int(11) NOT NULL,
  PRIMARY KEY (`alertId`),
  KEY `alertType` (`alertType`,`alertLocation`),
  KEY `alertLocation` (`alertLocation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `filed_reports`
--

CREATE TABLE IF NOT EXISTS `filed_reports` (
  `reportID` int(11) NOT NULL,
  `reportTitle` varchar(255) NOT NULL,
  `reportUrl` varchar(255) NOT NULL,
  `dateModified` date NOT NULL,
  PRIMARY KEY (`reportID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resourceId` int(11) NOT NULL AUTO_INCREMENT,
  `resourceName` varchar(255) NOT NULL,
  PRIMARY KEY (`resourceId`),
  UNIQUE KEY `resourceName` (`resourceName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resourceId`, `resourceName`) VALUES
(4, 'Correction Facilities'),
(2, 'Emergency Medical Services'),
(1, 'Fire Stations'),
(3, 'Police Stations'),
(5, 'Service Industries');

-- --------------------------------------------------------

--
-- Table structure for table `resource_map`
--

CREATE TABLE IF NOT EXISTS `resource_map` (
  `resourceMapId` int(11) NOT NULL AUTO_INCREMENT,
  `resourceId` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  `resourceCount` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  PRIMARY KEY (`resourceMapId`),
  KEY `resourceId` (`resourceId`,`locationId`),
  KEY `locationId` (`locationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resource_map`
--
ALTER TABLE `resource_map`
  ADD CONSTRAINT `resource_map_ibfk_1` FOREIGN KEY (`resourceId`) REFERENCES `resources` (`resourceId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
