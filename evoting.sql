-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--
CREATE DATABASE IF NOT EXISTS `evoting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `evoting`;

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `cont_id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `post` int(11) NOT NULL,
  `nickname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `log` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, '17/03/16 05:14:53', 0),
(2, '19/12/17 10:46:18', 1),
(2, '19/12/17 11:07:47', 1),
(2, '19/12/17 11:59:02', 0),
(2, '19/12/17 11:59:42', 1),
(2, '20/12/17 12:01:40', 0),
(2, '20/12/17 12:01:43', 1),
(2, '20/12/17 12:01:45', 0),
(2, '20/12/17 12:02:02', 1),
(2, '20/12/17 12:02:10', 0),
(2, '20/12/17 12:02:34', 1),
(2, '20/12/17 12:03:38', 0),
(2, '20/12/17 12:03:40', 1),
(2, '20/12/17 12:06:01', 0),
(2, '20/12/17 12:06:18', 1),
(2, '20/12/17 12:06:41', 0),
(2, '20/12/17 12:10:06', 1),
(2, '20/12/17 12:14:38', 0),
(2, '20/12/17 12:14:50', 1),
(2, '20/12/17 12:19:36', 0),
(1, '20/12/17 12:36:49', 0),
(19, '20/12/17 12:37:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `id` int(11) NOT NULL,
  `postname` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `id` int(11) NOT NULL,
  `matric_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `matric_no`, `phone_no`, `password`, `status`) VALUES
(1, '10/52ha109', '', 'ola', 0),
(2, '07/50043', '', 'charex', 1),
(19, '321999', '09011111111', 'tosin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `post` int(4) NOT NULL,
  `userid` int(4) NOT NULL,
  `cont_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(75, 4, 2, 9),
(76, 1, 2, 0),
(77, 2, 2, 0),
(78, 3, 2, 0),
(79, 4, 2, 0),
(80, 1, 2, 0),
(81, 2, 2, 0),
(82, 3, 2, 0),
(83, 4, 2, 0),
(84, 1, 2, 0),
(85, 2, 2, 0),
(86, 3, 2, 0),
(87, 4, 2, 0),
(88, 1, 2, 0),
(89, 2, 2, 0),
(90, 3, 2, 0),
(91, 4, 2, 0),
(92, 1, 2, 0),
(93, 2, 2, 0),
(94, 3, 2, 0),
(95, 4, 2, 0),
(96, 1, 2, 0),
(97, 2, 2, 0),
(98, 3, 2, 0),
(99, 4, 2, 0),
(100, 1, 2, 0),
(101, 2, 2, 0),
(102, 3, 2, 0),
(103, 4, 2, 0),
(104, 1, 2, 0),
(105, 2, 2, 0),
(106, 3, 2, 0),
(107, 4, 2, 0),
(108, 1, 2, 0),
(109, 2, 2, 0),
(110, 3, 2, 0),
(111, 4, 2, 0),
(112, 1, 2, 0),
(113, 2, 2, 0),
(114, 3, 2, 0),
(115, 4, 2, 0),
(116, 1, 2, 0),
(117, 2, 2, 0),
(118, 3, 2, 0),
(119, 4, 2, 0),
(120, 1, 2, 0),
(121, 2, 2, 0),
(122, 3, 2, 0),
(123, 4, 2, 0),
(124, 1, 2, 0),
(125, 2, 2, 0),
(126, 3, 2, 0),
(127, 4, 2, 0),
(128, 1, 2, 0),
(129, 2, 2, 0),
(130, 3, 2, 0),
(131, 4, 2, 0),
(132, 1, 2, 0),
(133, 2, 2, 0),
(134, 3, 2, 0),
(135, 4, 2, 0),
(136, 1, 2, 0),
(137, 2, 2, 0),
(138, 3, 2, 0),
(139, 4, 2, 0),
(140, 1, 2, 0),
(141, 2, 2, 0),
(142, 3, 2, 0),
(143, 4, 2, 0),
(144, 1, 2, 0),
(145, 2, 2, 0),
(146, 3, 2, 0),
(147, 4, 2, 0),
(148, 1, 2, 0),
(149, 2, 2, 0),
(150, 3, 2, 0),
(151, 4, 2, 0),
(152, 1, 2, 0),
(153, 2, 2, 0),
(154, 3, 2, 0),
(155, 4, 2, 0),
(156, 1, 2, 0),
(157, 2, 2, 0),
(158, 3, 2, 0),
(159, 4, 2, 0),
(160, 1, 2, 0),
(161, 2, 2, 0),
(162, 3, 2, 0),
(163, 4, 2, 0),
(164, 1, 2, 0),
(165, 2, 2, 0),
(166, 3, 2, 0),
(167, 4, 2, 0),
(168, 1, 2, 0),
(169, 2, 2, 0),
(170, 3, 2, 0),
(171, 4, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
