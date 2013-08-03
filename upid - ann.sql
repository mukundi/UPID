-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2013 at 05:28 AM
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
-- Table structure for table `constituencies`
--

CREATE TABLE IF NOT EXISTS `constituencies` (
  `constituency_id` int(11) NOT NULL AUTO_INCREMENT,
  `constituency_name` varchar(1000) NOT NULL,
  `constituency_population` int(11) NOT NULL,
  PRIMARY KEY (`constituency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `constituencies`
--

INSERT INTO `constituencies` (`constituency_id`, `constituency_name`, `constituency_population`) VALUES
(1, 'hurlingham', 0),
(2, 'westlands', 0);

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`county_id`, `county_name`) VALUES
(1, 'kiambu'),
(2, 'nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `dim_security_incidences`
--

CREATE TABLE IF NOT EXISTS `dim_security_incidences` (
  `securityIncidenceID` int(11) NOT NULL AUTO_INCREMENT,
  `incidenceType` varchar(45) NOT NULL,
  `dateOfReporting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporterEmail` varchar(45) DEFAULT NULL,
  `incidenceDescription` text NOT NULL,
  PRIMARY KEY (`securityIncidenceID`),
  KEY `fk_dim_security_incidence_dim_security_incidence_type` (`incidenceType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dim_security_incidence_type`
--

CREATE TABLE IF NOT EXISTS `dim_security_incidence_type` (
  `incidenceTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `incidenceName` varchar(45) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`incidenceTypeID`),
  UNIQUE KEY `incidenceName_UNIQUE` (`incidenceName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dim_time`
--

CREATE TABLE IF NOT EXISTS `dim_time` (
  `timeID` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(11) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`timeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `education_summary`
--

CREATE TABLE IF NOT EXISTS `education_summary` (
  `es_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_school_id` int(11) DEFAULT NULL,
  `es_performance_id` int(11) DEFAULT NULL,
  `es_dropouts_id` int(11) DEFAULT NULL,
  `es_teachers_id` int(11) DEFAULT NULL,
  `es_enrolment_id` int(11) DEFAULT NULL,
  `es_expenditure_id` int(11) DEFAULT NULL,
  `es_time_id` int(11) NOT NULL,
  PRIMARY KEY (`es_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `education_summary`
--

INSERT INTO `education_summary` (`es_id`, `es_school_id`, `es_performance_id`, `es_dropouts_id`, `es_teachers_id`, `es_enrolment_id`, `es_expenditure_id`, `es_time_id`) VALUES
(1, 1, NULL, NULL, NULL, 22, NULL, 18),
(2, 1, NULL, NULL, NULL, 23, NULL, 19),
(3, 1, NULL, 3, NULL, 29, NULL, 28),
(4, 1, NULL, NULL, NULL, 30, NULL, 29),
(5, 1, NULL, NULL, NULL, 31, NULL, 31),
(6, 1, NULL, 5, NULL, NULL, NULL, 32),
(7, 1, NULL, NULL, NULL, 32, NULL, 33),
(8, 1, NULL, 6, NULL, NULL, NULL, 34);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_type` varchar(250) DEFAULT NULL,
  `exam_average` int(11) DEFAULT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_type`, `exam_average`) VALUES
(1, '23', NULL),
(2, '9', NULL),
(3, 'kcse', 90);

-- --------------------------------------------------------

--
-- Table structure for table `fact_security_summary`
--

CREATE TABLE IF NOT EXISTS `fact_security_summary` (
  `factSecuritySummaryID` int(11) NOT NULL AUTO_INCREMENT,
  `timeID` int(11) DEFAULT NULL,
  `locationID` int(11) DEFAULT NULL,
  `incidenceID` int(11) DEFAULT NULL,
  `county_id` int(11) NOT NULL,
  `constituency_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  PRIMARY KEY (`factSecuritySummaryID`),
  UNIQUE KEY `incidenceID_UNIQUE` (`incidenceID`),
  KEY `fk_fact_security_summary_dim_time1` (`timeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `income_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_average` int(11) NOT NULL,
  PRIMARY KEY (`income_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_id`, `income_average`) VALUES
(1, 78),
(2, 78);

-- --------------------------------------------------------

--
-- Table structure for table `life_expectancy`
--

CREATE TABLE IF NOT EXISTS `life_expectancy` (
  `life_id` int(11) NOT NULL AUTO_INCREMENT,
  `life_expectancy` varchar(250) NOT NULL,
  PRIMARY KEY (`life_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `life_expectancy`
--

INSERT INTO `life_expectancy` (`life_id`, `life_expectancy`) VALUES
(1, '20'),
(2, '20'),
(3, '20'),
(4, '20'),
(5, '20'),
(6, '20'),
(7, '20'),
(8, '20'),
(9, '20'),
(10, '20'),
(11, '20'),
(12, '20'),
(13, '20'),
(14, '20'),
(15, '20'),
(16, '20');

-- --------------------------------------------------------

--
-- Table structure for table `poverty_summary`
--

CREATE TABLE IF NOT EXISTS `poverty_summary` (
  `ps_id` int(11) NOT NULL AUTO_INCREMENT,
  `ps_school_id` int(11) DEFAULT NULL,
  `ps_enrolment_id` int(11) DEFAULT NULL,
  `ps_life_id` int(11) DEFAULT NULL,
  `ps_income_id` int(11) DEFAULT NULL,
  `Ps_time_id` int(11) NOT NULL,
  PRIMARY KEY (`ps_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `poverty_summary`
--

INSERT INTO `poverty_summary` (`ps_id`, `ps_school_id`, `ps_enrolment_id`, `ps_life_id`, `ps_income_id`, `Ps_time_id`) VALUES
(1, 1, NULL, NULL, NULL, 19),
(2, 2, NULL, NULL, NULL, 20),
(3, 3, NULL, NULL, NULL, 21),
(4, 4, NULL, NULL, NULL, 24),
(5, 5, NULL, NULL, NULL, 25),
(6, 1, 1, NULL, NULL, 28),
(7, 1, 2, NULL, NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(45) NOT NULL,
  `school_level` varchar(255) DEFAULT NULL,
  `school_category` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `school_level`, `school_category`) VALUES
(1, 'qwerty', 'Primary', NULL),
(2, 'qwerty', 'Primary', 'Primary'),
(3, 'some technical school', 'Tertiary', 'University'),
(4, '677', '', NULL),
(5, '677', 'Primary', 'University');

-- --------------------------------------------------------

--
-- Table structure for table `school_dropouts`
--

CREATE TABLE IF NOT EXISTS `school_dropouts` (
  `sd_id` int(11) NOT NULL AUTO_INCREMENT,
  `sd_male_dropouts` varchar(250) NOT NULL,
  `sd_female_dropouts` int(11) NOT NULL,
  PRIMARY KEY (`sd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `school_dropouts`
--

INSERT INTO `school_dropouts` (`sd_id`, `sd_male_dropouts`, `sd_female_dropouts`) VALUES
(1, '4', 2),
(2, '4', 2),
(3, '4', 2),
(4, '4', 32),
(5, '4', 32),
(6, '4', 32);

-- --------------------------------------------------------

--
-- Table structure for table `school_enrolments`
--

CREATE TABLE IF NOT EXISTS `school_enrolments` (
  `se_id` int(11) NOT NULL AUTO_INCREMENT,
  `se_male_enrolments` varchar(250) NOT NULL,
  `se_female_enrolments` int(11) NOT NULL,
  PRIMARY KEY (`se_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `school_enrolments`
--

INSERT INTO `school_enrolments` (`se_id`, `se_male_enrolments`, `se_female_enrolments`) VALUES
(1, '3', 1),
(2, '3', 1),
(3, '3', 1),
(4, '3', 1),
(5, '3', 1),
(6, '3', 1),
(7, '3', 1),
(8, '3', 1),
(9, '3', 1),
(10, '3', 1),
(11, '3', 1),
(12, '3', 1),
(13, '3', 1),
(14, '3', 1),
(15, '3', 1),
(16, '3', 1),
(17, '3', 1),
(18, '3', 1),
(19, '3', 1),
(20, '3', 1),
(21, '3', 1),
(22, '3', 1),
(23, '3', 1),
(24, '3', 1),
(25, '3', 1),
(26, '3', 1),
(27, '3', 1),
(28, '3', 1),
(29, '3', 1),
(30, '2', 1),
(31, '2', 1),
(32, '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `security_incidencies`
--

CREATE TABLE IF NOT EXISTS `security_incidencies` (
  `security_incidenct_id` int(11) NOT NULL AUTO_INCREMENT,
  `security_dor` date NOT NULL,
  `security_reporter_contact` varchar(250) NOT NULL,
  `security_incidenct_description` text NOT NULL,
  PRIMARY KEY (`security_incidenct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `security_incident_types`
--

CREATE TABLE IF NOT EXISTS `security_incident_types` (
  `incident_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `incident_type_name` varchar(250) NOT NULL,
  PRIMARY KEY (`incident_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `security_summary`
--

CREATE TABLE IF NOT EXISTS `security_summary` (
  `ss_id` int(11) NOT NULL AUTO_INCREMENT,
  `ss_time_id` int(11) NOT NULL,
  `ss_location_id` int(11) NOT NULL,
  `ss_incident_id` int(11) NOT NULL,
  `ss_county_id` int(11) NOT NULL,
  `ss_constituency_id` int(11) NOT NULL,
  `ss_station_id` int(11) NOT NULL,
  PRIMARY KEY (`ss_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
  `station_id` int(11) NOT NULL AUTO_INCREMENT,
  `station_name` varchar(255) NOT NULL,
  `station_officers` int(11) NOT NULL,
  PRIMARY KEY (`station_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_day` int(11) NOT NULL,
  `time_week` int(11) NOT NULL,
  `time_month` int(11) NOT NULL,
  `time_year` int(11) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time_day`, `time_week`, `time_month`, `time_year`) VALUES
(1, 1, 0, 8, 13),
(2, 1, 0, 8, 13),
(3, 1, 0, 8, 13),
(4, 1, 0, 8, 13),
(5, 1, 0, 8, 13),
(6, 1, 0, 8, 13),
(7, 1, 0, 8, 13),
(8, 1, 0, 8, 13),
(9, 1, 0, 8, 13),
(10, 1, 0, 8, 13),
(11, 1, 0, 8, 13),
(12, 1, 0, 8, 13),
(13, 1, 0, 8, 13),
(14, 1, 0, 8, 13),
(15, 1, 0, 8, 13),
(16, 1, 0, 8, 13),
(17, 1, 0, 8, 13),
(18, 1, 0, 8, 13),
(19, 1, 0, 8, 13),
(20, 3, 0, 8, 13),
(21, 3, 0, 8, 13),
(22, 3, 0, 8, 13),
(23, 3, 0, 8, 13),
(24, 3, 0, 8, 13),
(25, 3, 0, 8, 13),
(26, 3, 0, 8, 13),
(27, 3, 0, 8, 13),
(28, 3, 0, 8, 13),
(29, 3, 0, 8, 13),
(30, 3, 0, 8, 13),
(31, 3, 0, 8, 13),
(32, 3, 0, 8, 13),
(33, 3, 0, 8, 13),
(34, 3, 0, 8, 13);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dim_security_incidences`
--
ALTER TABLE `dim_security_incidences`
  ADD CONSTRAINT `fk_dim_security_incidence_dim_security_incidence_type` FOREIGN KEY (`incidenceType`) REFERENCES `dim_security_incidence_type` (`incidenceName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fact_security_summary`
--
ALTER TABLE `fact_security_summary`
  ADD CONSTRAINT `fk_fact_security_summary_dim_security_incidence1` FOREIGN KEY (`incidenceID`) REFERENCES `dim_security_incidences` (`securityIncidenceID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fact_security_summary_dim_time1` FOREIGN KEY (`timeID`) REFERENCES `dim_time` (`timeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
