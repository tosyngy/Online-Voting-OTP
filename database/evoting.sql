-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2016 at 04:16 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `cont_id` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `post` int(11) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `photo` varchar(30) NOT NULL,
  PRIMARY KEY  (`cont_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`cont_id`, `name`, `post`, `nickname`, `photo`) VALUES
(1, 'Inyang Charles John', 1, 'Charex', '1340959994'),
(3, 'Excellent Charles', 1, 'Chief', '1340960262'),
(4, 'Divine Nwachuku', 2, 'Analyste', '1340960375'),
(5, 'Olatunji Yusuf', 2, 'YS', '1340960413'),
(6, 'Olwafemi Fadesewa', 3, 'Sewa', '1340969900'),
(8, 'Abdulazeez Abdulmajeed', 3, 'Olofa', '1341032134'),
(9, 'Amuzat Abdulakeem', 4, 'HayKay 99', '1341033367'),
(10, 'Abdulsalam Wasiu', 1, 'Waslamk1', '1341033439'),
(11, 'OMOTOLA SOLAPE', 3, 'SHOLAY', '1341077530'),
(12, 'Meddy Yanky', 4, 'meddy', '1341113327');

-- --------------------------------------------------------

--
-- Table structure for table `log_details`
--

CREATE TABLE `log_details` (
  `userid` int(3) NOT NULL,
  `date` varchar(30) NOT NULL,
  `log` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_details`
--

INSERT INTO `log_details` (`userid`, `date`, `log`) VALUES
(1, '16/03/16 07:11:56', 0),
(2, '16/03/16 07:14:02', 1),
(2, '16/03/16 07:14:49', 0),
(1, '16/03/16 07:20:43', 0),
(2, '16/03/16 07:20:55', 1),
(1, '17/03/16 05:12:30', 0),
(2, '17/03/16 05:12:59', 1),
(2, '17/03/16 05:13:48', 0),
(1, '17/03/16 05:14:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL auto_increment,
  `postname` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `postname`) VALUES
(1, 'President'),
(2, 'General Secretary'),
(3, 'Treasurer'),
(4, 'Financial Secretary'),
(5, 'Welfare Director');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL auto_increment,
  `matric_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `matric_no`, `password`, `status`) VALUES
(1, '10/52ha109', 'ola', 1),
(2, '07/50043', 'charex', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL auto_increment,
  `post` int(4) NOT NULL,
  `userid` int(4) NOT NULL,
  `cont_id` int(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `post`, `userid`, `cont_id`) VALUES
(47, 4, 3, 9),
(46, 3, 3, 8),
(45, 2, 3, 5),
(44, 1, 3, 3),
(43, 4, 1, 9),
(42, 3, 1, 6),
(41, 2, 1, 4),
(40, 1, 1, 1),
(39, 4, 13, 9),
(38, 3, 13, 6),
(37, 2, 13, 4),
(65, 2, 16, 5),
(64, 1, 16, 1),
(63, 4, 15, 9),
(62, 3, 15, 8),
(61, 2, 15, 4),
(60, 1, 15, 1),
(59, 4, 14, 0),
(58, 3, 14, 8),
(57, 2, 14, 5),
(56, 1, 14, 1),
(55, 4, 4, 0),
(54, 3, 4, 0),
(53, 2, 4, 0),
(52, 1, 4, 0),
(51, 4, 4, 0),
(50, 3, 4, 6),
(49, 2, 4, 5),
(48, 1, 4, 10),
(36, 1, 13, 1),
(66, 3, 16, 6),
(67, 4, 16, 9),
(68, 1, 2, 1),
(69, 2, 2, 4),
(70, 3, 2, 11),
(71, 4, 2, 12),
(72, 1, 2, 1),
(73, 2, 2, 5),
(74, 3, 2, 11),
(75, 4, 2, 9);
