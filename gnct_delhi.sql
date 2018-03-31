-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 01:51 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gnct_delhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `emailid` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `training_dept` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(60) NOT NULL DEFAULT 'default.jpg',
  `role` varchar(19) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'notverified',
  PRIMARY KEY (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`emailid`, `name`, `password`, `training_dept`, `phone`, `image`, `role`, `status`) VALUES
('abc@abc.com', 'sd', '1234', 'CSE', 'sdfsd', 'default.jpg', 'HOD', 'verified'),
('abc@gmail.com', 'sdfgt', 'abc', 'CSE', '567788', 'default.jpg', 'HOD', 'verified'),
('dd@dd.com', 'dfgf', '1234', 'CSE', 'efsf', 'default.jpg', 'HOD', 'verified'),
('h12345', 'admin', '1234', 'CSE', '1234567', 'default.jpg', 'HOD', 'verified'),
('h134455', 'abc', 'abc123', 'ECE', '234345465656', 'default.jpg', 'HOD', 'verified'),
('n12345', 'sndns', 'abc123', 'ADMIN', '928927873', 'default.jpg', 'NODAL', 'verified'),
('xyz@xyz.com', 'xyz', 'xyz', 'EE', '12345', 'default.jpg', 'HOD', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phone`, `password`) VALUES
('a', 'a@a.com', '1234', '12'),
('abc', 'abc@abc.com', '12345', 'abc'),
('', 'jassja', '2147483647', 'dddddddd'),
('xyz', 'xyz@xyz.com', '12345', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `training_applicant`
--

CREATE TABLE IF NOT EXISTS `training_applicant` (
  `application_id` int(6) NOT NULL AUTO_INCREMENT,
  `t_sub` varchar(200) NOT NULL,
  `training_dept` varchar(50) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `hsc` varchar(200) NOT NULL,
  `hsc1` varchar(200) NOT NULL,
  `hsc2` varchar(200) NOT NULL,
  `ssc` varchar(200) NOT NULL,
  `ssc1` varchar(200) NOT NULL,
  `ssc2` varchar(200) NOT NULL,
  `graduation` varchar(200) NOT NULL,
  `graduation1` varchar(200) NOT NULL,
  `graduation2` varchar(200) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `signature` varchar(300) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `application_id` (`application_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1068 ;

--
-- Dumping data for table `training_applicant`
--

INSERT INTO `training_applicant` (`application_id`, `t_sub`, `training_dept`, `duration`, `fname`, `mname`, `lname`, `dob`, `gender`, `nationality`, `email`, `phone`, `designation`, `organization`, `department`, `address`, `hsc`, `hsc1`, `hsc2`, `ssc`, `ssc1`, `ssc2`, `graduation`, `graduation1`, `graduation2`, `image`, `signature`, `date`) VALUES
(1001, '', '', '', '', '', '', '', '', '', '1001@123.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(1067, 'SCADA', 'CSE ', '5 ', 'sdds', 'dsd', 'sad', '02/05/78', 'male', 'angolan', 'ccxvcvcx@sd.cv', '5464644', 'dscdsd', 'dsds', 'dsfds', 'dsfds', 'sdf', 'dsfd', '1987', 'ds', 'sd', '2018', 'ds', 'dsf', '2015', 'upload_images/ccxvcvcx3151manu.jpg', 'upload_images/ccxvcvcx403sign.jpg', '28-03-2018');

-- --------------------------------------------------------

--
-- Table structure for table `training_subject`
--

CREATE TABLE IF NOT EXISTS `training_subject` (
  `t_id` int(5) NOT NULL AUTO_INCREMENT,
  `t_code` varchar(20) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `t_sub` varchar(200) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `s_date` varchar(20) NOT NULL,
  `l_date` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `detail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `training_subject`
--

INSERT INTO `training_subject` (`t_id`, `t_code`, `post_date`, `t_sub`, `dept`, `s_date`, `l_date`, `duration`, `detail`) VALUES
(17, 'GNCT09 ', '02/01/2015 ', 'SCADA', 'CSE ', '02/02/2018 ', '05/05/2018 ', '5 ', 'C:fakepath910cb496-5f84-4cbf-96bc-3231008783e4.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `s_no` int(50) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '1234',
  `role` varchar(40) DEFAULT 'USER',
  PRIMARY KEY (`emailid`),
  UNIQUE KEY `s_no` (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `emailid`, `password`, `role`) VALUES
(8, 'abc@abc.com', '1234', 'USER'),
(7, 'advocatesanjaysharma8@gmail.com', '1234', 'USER'),
(37, 'amam.kec@gmail.com', '1234', 'USER'),
(35, 'aman.kec1@aman.com', '1234', 'USER'),
(23, 'aman.kec@aman.com', '1234', 'USER'),
(10, 'aman.kec@gmail.com', '1234', 'USER'),
(21, 'aman@aman.com', '1234', 'USER'),
(4, 'asd', '1234', 'USER'),
(38, 'ccxvcvcx@sd.cv', '1234', 'USER'),
(20, 'df', '1234', 'USER'),
(26, 'dfdgfg', '1234', 'USER'),
(9, 'dffd', '1234', 'USER'),
(19, 'dfffffff', '1234', 'USER'),
(3, 'dfsdf', '1234', 'USER'),
(6, 'dfv', '1234', 'USER'),
(36, 'dsad@adas.con', '1234', 'USER'),
(2, 'dsdfsd', '1234', 'USER'),
(13, 'dsfdsf', '1234', 'USER'),
(22, 'ererewr', '1234', 'USER'),
(11, 'gfgfg', '1234', 'USER'),
(1, 'ghyhy', '1234', 'USER'),
(5, 'sacsa', '1234', 'USER'),
(25, 'sddffghg', '1234', 'USER'),
(27, 'tanu@tanu.com', '1234', 'USER'),
(28, 'xzccxxzc@asd.com', '1234', 'USER');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
