-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2018 at 01:57 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homeaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `category_id` varchar(5) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `expectedpay` int(7) NOT NULL,
  `overview` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`category_id`, `skill`, `start_date`, `end_date`, `expectedpay`, `overview`) VALUES
('maid', '0', '2018-12-31', '2018-12-31', 0, '2000'),
('teach', '0', '2018-09-29', '2018-12-31', 0, '2000');
