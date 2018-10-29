-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2018 at 03:39 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(5) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('1', 'personal and more');

-- --------------------------------------------------------

--
-- Table structure for table `fulltime`
--

CREATE TABLE `fulltime` (
  `worker_id` int(5) NOT NULL,
  `education` varchar(10) NOT NULL,
  `married` tinyint(1) NOT NULL,
  `child` smallint(2) default NULL,
  `hrperday` smallint(2) default NULL,
  `start` date default NULL,
  `end` date default NULL,
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fulltime`
--


-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `category_id` varchar(5) NOT NULL,
  `subcategory_id` varchar(5) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `type` smallint(1) NOT NULL,
  `start` date NOT NULL,
  `end` date default NULL,
  `overview` varchar(100) default NULL,
  `status_flag` tinyint(2) NOT NULL,
  `user_id` int(5) NOT NULL,
  `jobpost_id` int(5) NOT NULL,
  `worker_id` int(5) NOT NULL,
  PRIMARY KEY  (`jobpost_id`),
  KEY `user_id` (`user_id`),
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--


-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` varchar(5) NOT NULL,
  `category_id` varchar(5) NOT NULL,
  `subcategory_name` varchar(20) NOT NULL,
  `type` int(1) default NULL,
  PRIMARY KEY  (`subcategory_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `type`) VALUES
('1', '1', 'tutor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `reg_id` int(5) NOT NULL auto_increment,
  `uname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) default NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY  (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`reg_id`, `uname`, `dob`, `phone`, `gender`, `address`, `password`, `email`, `regdate`) VALUES
(12, '12', '0000-00-00', 1, 21, '21', '21', '21', '0000-00-00'),
(13, 'stayam', '0000-00-00', 993550602, 0, '104/425', 'EVU_3T3', 'satyamagarwal208012@gmail.com', '2018-08-14'),
(14, 'riok', '0000-00-00', 2147483647, 0, 'oih', 'Zq@9XER', 'shivamagarwal090820@gmail.com', '2018-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(5) NOT NULL auto_increment,
  `wname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) default NULL,
  `category_id` varchar(5) NOT NULL,
  `subcategory_id` varchar(5) NOT NULL,
  `skill` varchar(50) default NULL,
  `type` varchar(15) NOT NULL,
  `experience` varchar(100) default NULL,
  `expectedpay` int(7) default NULL,
  PRIMARY KEY  (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `worker`
--


-- --------------------------------------------------------

--
-- Table structure for table `worker_reg`
--

CREATE TABLE `worker_reg` (
  `reg_id` int(5) NOT NULL auto_increment,
  `wname` varchar(25) NOT NULL,
  `dob` date default NULL,
  `phone` int(10) default NULL,
  `gender` tinyint(4) default NULL,
  `address` varchar(50) default NULL,
  `password` varchar(30) default NULL,
  `email` varchar(30) default NULL,
  `regdate` date default NULL,
  PRIMARY KEY  (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `worker_reg`
--

INSERT INTO `worker_reg` (`reg_id`, `wname`, `dob`, `phone`, `gender`, `address`, `password`, `email`, `regdate`) VALUES
(12, '12', '2018-08-07', 21, 21, '21', '21', '21', '2018-08-08'),
(13, '12', '2018-08-07', 21, 21, '21', '21', '21', '2018-08-08'),
(14, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '12', '0000-00-00', 12, 0, '12', 'ATfoWaF', 'satyamagarwal208012@gmail.com', '2018-08-14'),
(17, '12', '0000-00-00', 12, 0, '12', 'TyD5oQp', 'satyamagarwal208012@gmail.com', '2018-08-14'),
(18, '12', '0000-00-00', 12, 0, '12', '6ZiVh4@', 'satyamagarwal208012@gmail.com', '2018-08-14'),
(19, '12', '0000-00-00', 12, 0, '12', 'VI4e4bh', 'satyamagarwal208012@gmail.com', '2018-08-14'),
(20, 'stayam', '0000-00-00', 993550602, 0, '104/425', 'Qefkt0x', 'satyamagarwal208012@gmail.com', '2018-08-14'),
(21, 'rohit', '0000-00-00', 2147483647, 0, '456', 'Wxvw6sZ', 'shivamagarwal090820@gmail.com', '2018-08-14');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fulltime`
--
ALTER TABLE `fulltime`
  ADD CONSTRAINT `fulltime_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `job_post_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`),
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`reg_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
