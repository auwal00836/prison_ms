-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2022 at 07:09 PM
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
  `nin` bigint(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `state_origin` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `state_res` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `jail_time` date DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `picture` varchar(30) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_data`
--

INSERT INTO `bio_data` (`sn`, `nin`, `fname`, `lname`, `oname`, `address`, `phone`, `dob`, `marital_status`, `state_origin`, `gender`, `state_res`, `nationality`, `status`, `jail_time`, `release_date`, `picture`) VALUES
(1, 23232222222, 'test', 'testttt', 't', 'ewwwwwwwwwwwq', '08166011219', '2022-05-07', 'single', 'k', 'male', 'k', 'n', 1, NULL, NULL, ''),
(2, 2313212, 'test', 'testttt', 'ed', 'wefqwe', '08166011219', '2022-05-07', 'devorce', 'd', 'female', 'mj', 'n', 1, NULL, NULL, ''),
(3, 23232222222, 'test', 'testttt', 'ed', 'JJ', '08166011219', '2022-05-07', 'single', 'k', 'male', 'k', 'n', 1, NULL, NULL, ''),
(4, 66777777, 'nmnm', '', '', 'nhgf', '08166011219', '2022-05-07', 'single', 'e', 'male', 'd', 'f', 1, NULL, NULL, ''),
(5, 9999, 'nmnm', '', '', '', '', '2022-05-07', 'married', '', 'male', '', '', 1, NULL, NULL, 'mybsc.jpg'),
(6, 23232222222, 'weD', 'WES', 'WAS', 'SS', '08166011219', '2022-05-08', 'married', 'e', 'male', 'd', 'n', 1, NULL, NULL, ''),
(7, 525525522, 'test', 'd', 'fd', 'hjkml,.kjjjkjjkjk', '08166011219', '2022-05-09', 'single', 'k', 'male', 'd', 'n', 1, NULL, NULL, 'lgmine.png'),
(8, 5254555, 'test', 'testttt', 'WAS', 'fxcgvbhnjm', '08166011219', '2022-05-09', 'married', 'd', 'male', 'd', 'n', 1, NULL, NULL, 'lgmine.png'),
(9, 4444554, 'test', 'd', '', '', '', '2022-05-09', 'single', 'e', 'male', '', 'f', 1, NULL, NULL, 'neco_s.png'),
(10, 45522, 'test', 'as', '', 'cgbvnm,.', '', '2022-05-09', 'single', 'mm', 'male', 'd', 'n', 1, NULL, NULL, 'mypic.jpg'),
(11, 4565244, 'test', 'testttt', '', 'sdfghj', '08166011219', '2022-05-09', 'single', 'd', 'male', 'k', 'n', 1, NULL, NULL, 'lgmine.png'),
(12, 454211, 'test', 'testttt', '', 'dsfghjk', '08166011219', '2022-05-09', 'single', 'mm', 'male', 'k', 'n', 1, '2022-05-09', '2022-05-16', 'neco_s.png');

-- --------------------------------------------------------

--
-- Table structure for table `cell_details`
--

DROP TABLE IF EXISTS `cell_details`;
CREATE TABLE IF NOT EXISTS `cell_details` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `inmate_nin` bigint(20) NOT NULL,
  `cell_no` int(5) NOT NULL,
  `cell_mate` int(10) NOT NULL,
  `jail_time` date NOT NULL,
  `conviction` varchar(150) NOT NULL,
  `release_date` date NOT NULL,
  `release_time` varchar(8) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell_details`
--

INSERT INTO `cell_details` (`sn`, `inmate_nin`, `cell_no`, `cell_mate`, `jail_time`, `conviction`, `release_date`, `release_time`) VALUES
(1, 354, 45, 55, '2022-05-08', 'iop;iop[', '2022-05-15', '13:51'),
(2, 12345678909, 345, 44, '2022-05-09', 'asdfghhhhhhhhgfd dfgggghjgjjgjgjgj', '2022-05-16', '07:57');

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

DROP TABLE IF EXISTS `crime`;
CREATE TABLE IF NOT EXISTS `crime` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `nin` bigint(20) NOT NULL,
  `crime_commited` varchar(50) NOT NULL,
  `crime_type` varchar(20) NOT NULL,
  `crime_date` date NOT NULL,
  `crime_time` varchar(6) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `nin` (`nin`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`sn`, `nin`, `crime_commited`, `crime_type`, `crime_date`, `crime_time`, `address`) VALUES
(1, 23232222222, 'jjjj', 'jjj', '2022-05-05', '09:42', ',mmmmmm'),
(2, 232322222220, '', '', '2022-05-04', '10:37', 'nnn'),
(3, 56856523665, 'tessttt', 'w', '2022-05-07', '23:29', 'cxfgvnhjk');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `sn` int(2) NOT NULL AUTO_INCREMENT,
  `nin` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`sn`, `nin`, `name`) VALUES
(1, 1, '2'),
(2, 22, '2'),
(3, 1, '3'),
(4, 2, '2'),
(5, 12, 'GIMBA S IDRIS'),
(6, 122, 'GIMBA S IDRIS'),
(7, 1111, 'GIMBA S IDRIS'),
(8, 22222, 'nn'),
(9, 432123, 'jjjj'),
(10, 6543213, 'nn'),
(11, 87654321, 'Dd'),
(12, 123456789, 'ccc'),
(13, 123456787, 'nn'),
(14, 22, 'nn'),
(15, 22, 'auwal kdksdksdk kyauta'),
(16, 23232222222, 'GIMBA S IDRIS'),
(17, 33464789076, 'kate ogenyi'),
(18, 232322222225, 'nn vfvff bggg');

-- --------------------------------------------------------

--
-- Table structure for table `victime_details`
--

DROP TABLE IF EXISTS `victime_details`;
CREATE TABLE IF NOT EXISTS `victime_details` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `victime_nin` bigint(20) NOT NULL,
  `inmate_nin` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victime_details`
--

INSERT INTO `victime_details` (`sn`, `victime_nin`, `inmate_nin`, `name`, `address`, `phone`, `nationality`, `state`, `gender`, `marital_status`) VALUES
(1, 77, 77, '', '', '', '', '', 'male', 'married'),
(2, 12345678965, 90876567876, 'test', 'no 89 iouoojuy huikjyuikkoijj', '08166011219', 'mnn', 'e', 'male', 'married'),
(3, 212, 222, 'nmnm', 'hgjkl', '08166011219', 'n', 'k', 'male', 'single'),
(4, 45682245652, 54875698745, 'test', ';lkjhnbgvf567890-54', '08166011219', 'tyiftyifyi', 'd', 'female', 'married');

-- --------------------------------------------------------

--
-- Table structure for table `victime_family`
--

DROP TABLE IF EXISTS `victime_family`;
CREATE TABLE IF NOT EXISTS `victime_family` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `family_nin` bigint(11) NOT NULL,
  `inmate_nin` bigint(11) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victime_family`
--

INSERT INTO `victime_family` (`sn`, `family_nin`, `inmate_nin`, `name`, `dob`, `nationality`, `state`, `marital_status`, `address`, `gender`, `relationship`, `phone`) VALUES
(1, 22, 22, 'df', '2022-05-07', 'ff', 'fdfd', 'single', 'hdtyjftykj', 'female', 'dtyjty', '08166011219'),
(2, 43456754323, 34343234566, 'test', '2022-05-07', 'mnn', 'mm', 'single', '6e65ue56ue56', 'female', 'e56ue56', '08166011219'),
(3, 3445, 434, 'test', '2022-05-08', 'ed', 'k', 'single', 'we4t', 'male', 'e4trwe', '08166011219');

-- --------------------------------------------------------

--
-- Table structure for table `witness_details`
--

DROP TABLE IF EXISTS `witness_details`;
CREATE TABLE IF NOT EXISTS `witness_details` (
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `witness_nin` bigint(11) NOT NULL,
  `inmate_nin` bigint(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(70) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `statement` varchar(250) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `witness_details`
--

INSERT INTO `witness_details` (`sn`, `witness_nin`, `inmate_nin`, `name`, `address`, `phone`, `gender`, `status`, `nationality`, `state`, `statement`) VALUES
(1, 87787787787, 78787878778, 'nmnm', 'yjfyj', '08166011219', 'male', 'single', 'f', 'fyifyo', 'vhjfyukfy jyfykf'),
(2, 45687985236, 85647525987, 'auwal ismail muhammed', 'no az 2 kadpoly road kaduna', '02025855522', 'male', 'married', 'Ghanian', 'Kumasi', 'i was there at the time of the incidence '),
(3, 85476932514, 89522522523, 'test', 'vcnbn,m.,.//', '08166011219', 'male', 'single', 'n', 'k', 'gvbhnm,1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
