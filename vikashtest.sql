-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2023 at 02:58 PM
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
-- Database: `vikashtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `post`, `salary`) VALUES
(1, 'Ram', 'Director', 85000),
(2, 'Mohan', 'Clerk', 20000),
(3, 'Amit', 'Accountant', 25000),
(4, 'Soniya', 'Clerk', 24000),
(5, 'Vishal Malkhan', 'Software Developer', 60000),
(6, 'John Wick', 'Software Engineer', 70000),
(7, 'Purnima', 'Manager', 80000),
(8, 'Rekha', 'Clerk', 23000),
(9, 'Rajesh', 'Manager', 25000),
(10, 'Garima', 'Manager', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `photo`, `age`, `city`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vaibhav', 'Singh', '1680518543.jpg', 7, 'Jaipur', 1, '2023-04-03 05:12:23', '2023-04-03 09:28:45', NULL),
(2, 'Garima', 'Singh', '1680580365.jpg', 22, 'Bikaner', 1, '2023-04-03 05:13:50', '2023-04-03 22:23:18', NULL),
(3, 'Rudransh', 'Singh', '1680526763.jpg', 2, 'Varanasi', 1, '2023-04-03 07:29:23', '2023-04-03 07:29:23', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
