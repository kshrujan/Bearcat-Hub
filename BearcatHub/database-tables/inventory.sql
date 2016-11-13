-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 03:22 AM
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
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `studentId` int(4) NOT NULL,
  `productId` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `category` int(40) NOT NULL,
  `description` text NOT NULL,
  `offerType` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `images` varchar(200) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`studentId`, `productId`, `title`, `category`, `description`, `offerType`, `price`, `images`) VALUES
(14, 7, 'Fridge', 3, 'I have a great fridge. Black. 2 cubic feet. Great condition.', 'Set Price', 25, 'http://localhost/bearcathub/upload/testfridge.jpg'),
(18, 8, 'Great Tennis Racket!', 5, 'Brand new tennis racket. I never get out anymore, so why not sell it?', 'Best Offer', 125, 'http://localhost/bearcathub/upload/Roger-Federer-9-1800x2880.jpg'),
(26, 11, 'New Car', 1, 'Great car. Runs well.', 'Set Price', 5, 'http://localhost/bearcathub/upload/Jaguar-F-Type-R-Coupe-AWD-2015-2560x1440-002.jpg'),
(28, 31, 'testing again', 1, '', 'Best Offer', 5, 'http://localhost/BearcatHub/upload/matriMult.PNG#####http://localhost/BearcatHub/upload/matrixRecursive.PNG'),
(28, 34, 'new test', 1, 'making sure', 'Best Offer', 1, 'http://localhost/BearcatHub/upload/food.PNG'),
(28, 35, 'Levenicks Test', 1, 'Just a small change is all.', 'Best Offer', 2, 'http://localhost/BearcatHub/upload/binarysearchtree.PNG#####http://localhost/BearcatHub/upload/buick.jpg'),
(28, 36, 'BMW M4 GTS For Sale', 1, 'Great car. Not a lot of miles. Helluva lot of fun to drive.', 'Set Price', 75, 'http://localhost/BearcatHub/upload/2016_bmw_m4_gts_1_2560x1440.jpg'),
(28, 37, 'Toyota Prius', 1, 'Great car. Much hp.', 'Set Price', 25000, 'http://localhost/BearcatHub/upload/hub_test.jpg#####http://localhost/BearcatHub/upload/hub_test2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
