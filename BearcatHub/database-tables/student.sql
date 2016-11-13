-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 03:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentId` int(4) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(80) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dateOfBirth` varchar(10) NOT NULL,
  PRIMARY KEY (`studentId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `firstName`, `lastName`, `email`, `gender`, `password`, `dateOfBirth`) VALUES
(19, 'Devin', 'Abney', 'dabney@willamette.edu', 'Male', 'Myw0KjdONSkCAA==', '04/15/1992'),
(24, 'shrujan', 'kalidin', 'shrujank123@gmail.com', 'Male', 'S8xLzEtJtLQEAA==', '06/07/1993'),
(25, 'Shrujan', 'Kalidindi', 'shrujank@will.com', 'Male', 'S8xLzEtJtLQEAA==', '06/15/1994'),
(26, 'scroo', 'boo', 'sk@willamette.edu', 'Male', 'S8xLzEtJtLQEAA==', '06/23/1993'),
(27, 'shrujan', 'k', 's@gmail.com', 'Male', 'S8xLzEtJtLQEAA==', '06/33/1993'),
(28, 'as', 'asa', 'sk@gmail.com', 'Male', 'y0vNTy+tNDMHAA==', '05/23/1992'),
(30, 'test2', 'hey', 'hey@willamette.edu', '', 'y8vPTwIA', ''),
(31, 'Jim', 'Levenick', 'jlevenick@willamette.edu', 'Male', 'y8gEAA==', '05/13/1992');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
