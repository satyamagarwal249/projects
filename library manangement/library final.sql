-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2018 at 05:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `give` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `give`) VALUES
('s', 's', '2018-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `allbook`
--

CREATE TABLE `allbook` (
  `id` varchar(15) NOT NULL,
  `issue` tinyint(1) NOT NULL default '0',
  `sid` varchar(10) default NULL,
  `issuedate` date NOT NULL,
  `issuetime` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allbook`
--

INSERT INTO `allbook` (`id`, `issue`, `sid`, `issuedate`, `issuetime`) VALUES
('00', 0, NULL, '0000-00-00', '00:00:00'),
('100', 0, NULL, '0000-00-00', '00:00:00'),
('100700', 0, NULL, '0000-00-00', '00:00:00'),
('100800', 0, NULL, '0000-00-00', '00:00:00'),
('101', 0, NULL, '0000-00-00', '00:00:00'),
('136900', 0, NULL, '0000-00-00', '00:00:00'),
('1787700', 0, NULL, '0000-00-00', '00:00:00'),
('1900', 0, NULL, '0000-00-00', '00:00:00'),
('1901', 0, NULL, '0000-00-00', '00:00:00'),
('3300', 0, NULL, '0000-00-00', '00:00:00'),
('3301', 0, NULL, '0000-00-00', '00:00:00'),
('3302', 0, NULL, '0000-00-00', '00:00:00'),
('3303', 0, NULL, '0000-00-00', '00:00:00'),
('3304', 0, NULL, '0000-00-00', '00:00:00'),
('3701', 0, NULL, '0000-00-00', '00:00:00'),
('3702', 0, NULL, '0000-00-00', '00:00:00'),
('37700', 0, NULL, '0000-00-00', '00:00:00'),
('37800', 0, NULL, '0000-00-00', '00:00:00'),
('37801', 0, NULL, '0000-00-00', '00:00:00'),
('37802', 0, NULL, '0000-00-00', '00:00:00'),
('400', 0, NULL, '0000-00-00', '00:00:00'),
('600', 0, NULL, '0000-00-00', '00:00:00'),
('601', 0, NULL, '0000-00-00', '00:00:00'),
('602', 0, NULL, '0000-00-00', '00:00:00'),
('603', 0, NULL, '0000-00-00', '00:00:00'),
('604', 0, NULL, '0000-00-00', '00:00:00'),
('605', 0, NULL, '0000-00-00', '00:00:00'),
('606', 0, NULL, '0000-00-00', '00:00:00'),
('74100', 0, NULL, '0000-00-00', '00:00:00'),
('800', 0, NULL, '0000-00-00', '00:00:00'),
('801', 0, NULL, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(7) NOT NULL,
  `accession` int(7) NOT NULL,
  `title` varchar(35) NOT NULL,
  `author` varchar(30) NOT NULL,
  `edition` int(2) default NULL,
  `publication` varchar(10) default NULL,
  `price` int(5) NOT NULL,
  `keyword` varchar(40) default NULL,
  `date` date default NULL,
  `status` varchar(9) default NULL,
  `member` int(6) default NULL,
  `issue` date default NULL,
  `give` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `accession`, `title`, `author`, `edition`, `publication`, `price`, `keyword`, `date`, `status`, `member`, `issue`, `give`) VALUES
(1, 123, '123', '13', 123, '1', 99, '32', '0000-00-00', 'available', NULL, NULL, NULL),
(7, 0, '8', '8', 8, '88', 8, '8', '2018-05-25', 'available', NULL, NULL, NULL),
(11, 8, '78', '78', 78, '7', 878, '78', '2018-06-02', 'available', NULL, NULL, NULL),
(13, 12, '123', '123', 1, '123', 123, '123', '2018-06-01', 'available', NULL, NULL, NULL),
(15, 12, '123', '123', 1, '123', 123, '123', '2018-06-01', 'available', NULL, NULL, NULL),
(19, 0, '2', '3', 2, '1', 2, '2', '2018-05-27', 'available', NULL, '0000-00-00', '0000-00-00'),
(33, 0, 'satyam is back', 'saty', 8, '7', 700, '45', '2018-05-26', 'available', NULL, NULL, NULL),
(46, 0, '8', '8', 8, '88', 8, '8', '2018-05-25', 'available', NULL, '0000-00-00', '0000-00-00'),
(78, 45, '45', '45', 0, '', 45, '', '2018-06-02', 'available', NULL, NULL, NULL),
(89, 0, '8', '8', 8, '88', 8, '8', '2018-05-25', 'available', NULL, '0000-00-00', '0000-00-00'),
(96, 9, '69', '69', 69, '69', 66, '9', '2018-06-02', 'available', NULL, NULL, NULL),
(135, 12, '123', '123', 1, '123', 123, '123', '2018-06-01', 'available', NULL, NULL, NULL),
(201, 0, '1', '1', 1, '1', 1, '1', '2018-05-25', 'available', NULL, NULL, NULL),
(377, 0, '7', '7', 7, '5', 2, '2', '2018-05-25', 'available', NULL, '0000-00-00', '0000-00-00'),
(378, 0, '7', '7', 7, '5', 2, '2', '2018-05-25', 'available', NULL, '0000-00-00', '0000-00-00'),
(741, 0, 'satyam is great ', 'satanm', 7, '8', 100, 'cat iift', '2018-05-27', 'available', NULL, '0000-00-00', '0000-00-00'),
(789, 456, '456', '456', 45, '456', 456, '456', '2018-06-02', 'available', NULL, NULL, NULL),
(809, 0, '8', '8', 8, '88', 8, '8', '2018-05-25', 'issued', 12, '0000-00-00', '2018-06-15'),
(1007, 0, 'Let Us C', 'Yashawant Kushawaha', 9, 'pbc', 400, 'Computer-BCA-BTech', '2018-05-27', 'available', NULL, NULL, NULL),
(1008, 0, 'Let Us C', 'Yashawant Kushawaha', 5, 'pbc', 200, 'Computer-BCA-BTech', '2018-05-27', 'available', NULL, NULL, NULL),
(1369, 0, 'satya', 'satym', 7, '8', 96, 'rc shingh saty iit', '2018-05-28', 'available', NULL, '0000-00-00', '0000-00-00'),
(3000, 0, '1', '1', 1, '1', 1, '1', '2018-05-25', 'available', NULL, NULL, NULL),
(7000, 0, '1', '1', 1, '1', 1, '1', '2018-05-25', 'issued', 96, '0000-00-00', '2018-06-15'),
(7894, 456, '45', '45', 45, '45', 45, '45', '2018-06-02', 'available', NULL, NULL, NULL),
(17877, 0, 'physics', 'h.k. verma', 7, 'jbs', 200, 'physics, 10=2,', '2018-05-27', 'available', NULL, '0000-00-00', '0000-00-00'),
(2147483647, 0, '1', '1', 1, '1', 1, '1', '2018-05-25', 'available', NULL, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat` varchar(20) NOT NULL,
  PRIMARY KEY  (`cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat`) VALUES
('Accession No.'),
('Serial No.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL default '1' COMMENT '1=Active, 0=Block',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `events`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date default NULL,
  `address` varchar(40) default NULL,
  `phone` int(10) default NULL,
  `email` varchar(30) default NULL,
  `fees` int(4) NOT NULL,
  `caution` int(4) NOT NULL,
  `category` varchar(8) default NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `available` int(4) NOT NULL,
  `books` tinyint(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `dob`, `address`, `phone`, `email`, `fees`, `caution`, `category`, `start`, `end`, `available`, `books`) VALUES
(7, '78', '2018-05-22', '95', 2147483647, 'satyamagarwal249@gmail.com', 88, 85, 'student', '2018-05-27', '2019-05-27', 85, 0),
(8, '8', '0000-00-00', '', 2147483647, '', 0, 0, 'student', '0000-00-00', '0000-00-00', 0, 0),
(10, 'satyam', '2018-05-17', 'gf', 2147483647, 'satyamagarwal249@gmail.com', 852, 52, 'student', '0000-00-00', '0000-00-00', 52, 0),
(12, '12', '1233-12-12', '12', 1234567891, 'satyamagarwal249@gmail.com', 12, 12, 'student', '2018-06-01', '2019-06-01', 4, 1),
(13, '123', '1977-09-24', '123', 1234567891, 'satyamagarwal249@gmail.com', 123, 132, 'student', '2018-06-01', '2019-06-01', 132, 0),
(70, '78', '2018-05-22', '95', 5, 'satyamagarwal249@gmail.com', 88, 85, 'general', '2018-05-27', '2019-05-27', 85, 0),
(80, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 0, 0, '', '0000-00-00', '0000-00-00', 0, 0),
(96, '56', '1997-01-15', '12', 789, 'satyamagarwal249@gmail.in', 89, 8520, 'student', '2018-05-27', '2019-05-27', 9981, -4),
(704, '78', '2018-05-22', '95', 5, 'satyamagarwal249@gmail.com', 88, 85, 'general', '2018-05-27', '2019-05-27', 85, 0),
(807, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 5, 0, '', '0000-00-00', '0000-00-00', 0, 0),
(930, 'jg', '2018-06-07', 'p.roadd', 214748647, 'satyamagdarwal249@gmail.com', 5000, 0, '5', '2018-05-17', '2019-05-30', 0, 9),
(1235, 'satyam agarwal', '1997-09-24', '104ug ', 96371, 'satyamagarwal249@gmail.com', 85, 236, 'student', '2018-05-27', '2019-05-27', 236, 0),
(7041, '78', '2018-05-22', '95', 5, 'satyamagarwal249@gmail.com', 88, 85, 'general', '2018-05-27', '2019-05-27', 85, 0),
(7071, '78', '2018-05-22', '95', 5, 'satyamagarwal249@gmail.com', 88, 85, 'general', '2018-05-27', '2019-05-27', 85, 0),
(8071, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 5, 15, 'general', '0000-00-00', '0000-00-00', 15, 0),
(8120, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 5, 15, 'general', '2018-03-26', '2019-05-26', 15, 0),
(8712, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 5, 15, 'general', '2018-03-26', '2019-05-26', 15, 0),
(80712, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 5, 15, 'general', '2018-03-26', '2011-05-26', 15, 0),
(87120, '8', '2018-12-30', 'q', 7, 'satyamagarwal249@gmail.com', 5, 15, 'general', '2018-03-26', '2019-05-26', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `memcategory`
--

CREATE TABLE `memcategory` (
  `cat` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memcategory`
--

INSERT INTO `memcategory` (`cat`) VALUES
('student'),
('general');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `department` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `department`, `date`, `time`) VALUES
('1', 'library is closed', 'cs', '2017-11-23', '08:14:24'),
('2', 'ojoiwdqwd', 'cs', '2017-11-24', '04:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `remove`
--

CREATE TABLE `remove` (
  `id` int(7) NOT NULL,
  `accession` int(7) NOT NULL,
  `title` varchar(35) NOT NULL,
  `author` varchar(30) default NULL,
  `publication` varchar(10) default NULL,
  `edition` tinyint(2) default NULL,
  `price` int(5) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(30) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remove`
--

INSERT INTO `remove` (`id`, `accession`, `title`, `author`, `publication`, `edition`, `price`, `date`, `reason`) VALUES
(1, 2, '3', '2', '5', 4, 1, '2018-06-01', '12'),
(2, 0, '1', '1', '1', 1, 1, '2018-06-01', 'removed from library'),
(4, 0, '1', '1', '1', 1, 100, '2018-06-01', 'null'),
(6, 0, '6', '6', '6', 6, 700, '2018-06-01', 'null'),
(6, 0, '', '', '', 0, 0, '2018-06-01', 'null'),
(9, 0, '5', '5', '55', 127, 5, '2018-06-01', 'removed from library'),
(8, 0, '8', '8', '88', 8, 8, '2018-06-01', 'removed');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `branch`, `email`, `address`, `pass`) VALUES
('1', 'shubham', 'cs', 's.shubhamgarwal@gmail.com', '104/425 a proad', 'k'),
('2', 'kapil', 'en', 's', 'ss', '5'),
('3', 'dsds', 'cs', 's.shubhamgarwal@gmail.com', 'dwd', 'a'),
('4', 'shubham', 'cs', 's.shubhamgarwal@gmail.com', 's', 'a'),
('5', 'satyam', 'it', 'satyam@gmail.com', 'as', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `firstname`, `lastname`, `email`) VALUES
('1', '1', '1', '1'),
('2', '5', '36', '5'),
('2', '2', '25', '5'),
('15', '111', '11', '11'),
('saty', 'saty agarw', '5', '5'),
('5', 'saty ahat', '5', '6'),
('855', 'asrt saty', '5', '5'),
('sa', 'saty agar', 'sa', 'sa'),
('sart', 'satyam  ag', 's', 's'),
('s', 'asatya', 'agarwal', 'ag');
