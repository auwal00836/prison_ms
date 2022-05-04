-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2022 at 07:13 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  `pw_status` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `username`, `password`, `pw_status`) VALUES
(1, 'admin', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bio_data`
--

DROP TABLE IF EXISTS `bio_data`;
CREATE TABLE IF NOT EXISTS `bio_data` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `nin` int(11) NOT NULL,
  `fame` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `state_origin` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `state_res` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `picture` varchar(30) NOT NULL,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `nin` (`nin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cell_details`
--

DROP TABLE IF EXISTS `cell_details`;
CREATE TABLE IF NOT EXISTS `cell_details` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `inmate_nin` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cell_no` varchar(5) NOT NULL,
  `cell_mate` varchar(10) NOT NULL,
  `jail_from` datetime(6) NOT NULL,
  `jail_to` datetime(6) NOT NULL,
  `connviction` varchar(50) NOT NULL,
  `release_date` datetime(6) NOT NULL,
  `release_time` varchar(8) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crime_commited`
--

DROP TABLE IF EXISTS `crime_commited`;
CREATE TABLE IF NOT EXISTS `crime_commited` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `nin` int(11) NOT NULL,
  `crime_commited` varchar(50) NOT NULL,
  `crime_type` varchar(20) NOT NULL,
  `crime_date` date NOT NULL,
  `crime_time` varchar(6) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `nin` (`nin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `victime_details`
--

DROP TABLE IF EXISTS `victime_details`;
CREATE TABLE IF NOT EXISTS `victime_details` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `victime_nin` int(11) NOT NULL,
  `inmate_nin` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `picture` varchar(30) NOT NULL,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `victime_nin` (`victime_nin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `victime_family`
--

DROP TABLE IF EXISTS `victime_family`;
CREATE TABLE IF NOT EXISTS `victime_family` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `family_nin` int(11) NOT NULL,
  `inmate_nin` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `witness_details`
--

DROP TABLE IF EXISTS `witness_details`;
CREATE TABLE IF NOT EXISTS `witness_details` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `witness_nin` int(11) NOT NULL,
  `victime_nin` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `statement` varchar(50) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
