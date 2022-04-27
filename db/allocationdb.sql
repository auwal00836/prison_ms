-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 06:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allocationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `allocation_id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `hall` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`allocation_id`, `timetable_id`, `staff`, `hall`) VALUES
(1, 1, 'Umar Ibrahim Bugaje,Adam Musa Yau', 'HARDWARE-LAB'),
(2, 2, 'Yasir Murtala,Hafsat Mora', 'SOFTWARE-LAB'),
(3, 3, 'Ndagi Muhammad,Shehu Isah', 'HND-II'),
(4, 4, 'Sani Abdullahi,Adam Musa Yau', 'ND-II'),
(5, 5, 'Umar Ibrahim Bugaje,Sani Abdullahi', 'HND-I'),
(6, 6, 'Hafsat Mora,Ndagi Muhammad', 'ND-I'),
(7, 7, 'Shehu Isah,Yasir Murtala', 'HARDWARE-LAB'),
(8, 8, 'Shehu Isah,Adam Musa Yau', 'SOFTWARE-LAB'),
(9, 9, 'Yasir Murtala,Umar Ibrahim Bugaje', 'HND-II'),
(10, 10, 'Sani Abdullahi,Ndagi Muhammad', 'ND-II'),
(11, 11, 'Hafsat Mora,Adam Musa Yau', 'HND-I'),
(12, 12, 'Sani Abdullahi,Hafsat Mora', 'ND-I');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `PW_STATUS` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `USERNAME`, `PASSWORD`, `PW_STATUS`) VALUES
(1, 'admin', 'admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `phone`, `email`, `position`, `date_registered`) VALUES
(11, 'Adam Musa Yau', '8063017470', 'adammusa89@gmail.com', 'Senior Lecturer', '2021-02-16 17:20:47'),
(12, 'Sani Abdullahi', '8165213987', 'saniabdullahi440@gmail.com', 'Chief Lecturer', '2021-02-16 17:20:47'),
(16, 'Yasir Murtala', '08102564648', 'yasirmurtalageneral@gmail.com', 'Lecturer 2', '2021-08-07 13:39:05'),
(17, 'Umar Ibrahim Bugaje', '09025206265', 'umar@gmail.com', 'Lecturer 1', '2021-08-07 13:39:23'),
(19, 'Shehu Isah', '09094519994', 'shehuisah007@gmail.com', 'Record Officer', '2021-08-07 13:40:16'),
(20, 'Ndagi Muhammad', '0806456345', 'operator@gmail.com', 'Staff ', '2021-08-07 13:41:05'),
(21, 'Hafsat Mora', '08102564648', 'odfeluser@32323123', 'Senior Lecturer', '2021-08-07 13:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `course`, `semester`, `level`, `date`, `time`) VALUES
(1, 'COURSE', 'SEMESTER', 'LEVEL', 'DATE', 'TIME'),
(2, 'Introduction to Computer', 'First Semester', 'ND-1', '17/02/2021', '8:30 AM'),
(3, 'Introduction to Progamming', 'First Semester', 'ND-1', '17/02/2021', '8:30 AM'),
(4, 'Statistical Theory', 'First Semester', 'ND-1', '17/02/2021', '8:30 AM'),
(5, 'Function and Geometry', 'First Semester', 'ND-1', '17/02/2021', '11:00 AM'),
(6, 'English Language', 'First Semester', 'ND-1', '18/02/2021', '11:00 AM'),
(7, 'System Analysis', 'First Semester', 'ND-2', '19/02/2021', '8:30 AM'),
(8, 'Artificial Intelligence', 'First Semester', 'HND-2', '19/02/2021', '8:30 AM'),
(9, 'Operation Research', 'First Semester', 'HND-1', '19/02/2021', '8:30 AM'),
(10, 'Database Design II', 'First Semester', 'HND-2', '20/02/2021', '11:00 AM'),
(11, 'Web Technology', 'First Semester', 'ND-2', '20/02/2021', '11:00 AM'),
(12, 'Operating System I', 'First Semester', 'HND-1', '20/02/2021', '11:00 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
