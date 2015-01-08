-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2015 at 12:00 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(10) NOT NULL,
  `age_group` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `frequency` varchar(30) NOT NULL,
  `media` varchar(255) NOT NULL,
  `sachibalaya` varchar(10) NOT NULL,
  `water` varchar(10) NOT NULL,
  `toilet` varchar(10) NOT NULL,
  `communication` varchar(10) NOT NULL,
  `security` varchar(10) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `gender`, `age_group`, `location`, `profession`, `purpose`, `frequency`, `media`, `sachibalaya`, `water`, `toilet`, `communication`, `security`, `date_time`) VALUES
(3, 'male', '25-54', 'nawalparasi', 'business', 'agriculture, IT, entertainment', 'one time', 'newspaper, television, fm radio', '3', '2', '2', '0', '0', '2015-01-08 11:47:35'),
(4, 'male', '25-54', 'nepal', 'other', 'purchase', 'two times', 'other', '0', '0', '0', '0', '2', '2015-01-08 11:59:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
