-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 02:45 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vital`
--
CREATE DATABASE IF NOT EXISTS `vital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vital`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `lga_id` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `sex` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`lga_id`, `name`, `password`, `sex`, `email`, `phone`) VALUES
('LG1', 'admin', 'admin', 'male', 'admin@admin.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `vsn` varchar(500) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `othername` varchar(40) NOT NULL,
  `p_sex` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `job` varchar(40) NOT NULL,
  `mobile` int(16) NOT NULL,
  `email` varchar(60) NOT NULL,
  `homeaddress` varchar(60) NOT NULL,
  `workaddress` varchar(60) NOT NULL,
  `nextofkin` varchar(40) NOT NULL,
  PRIMARY KEY (`vsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`vsn`, `lastname`, `firstname`, `othername`, `p_sex`, `dob`, `job`, `mobile`, `email`, `homeaddress`, `workaddress`, `nextofkin`) VALUES
('', 'hdiu', 'iodh', 'iughd', 'male', '1/September/2015', 'iohji', 39749, 'toyeboluwatife@gmail.com', 'dklh', 'ihd', 'fdklh'),
('1', 'charles', 'gyu', 'ggug', 'male', '30/September/2015', 'GG', 7655555, 'toyeboluwatife@gmail.com', 'NHJIH', 'HHJ', '87yhH'),
('VSN97', 'charles', 'HNK', 'HJH', 'female', '1/September/2015', 'IH', 0, 'JHI@T.CO', 'S', 'J', 'SKLH');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vsn` varchar(500) NOT NULL,
  `temp` int(11) NOT NULL,
  `pulse` int(11) NOT NULL,
  `resp` int(11) NOT NULL,
  `press` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `vsn`, `temp`, `pulse`, `resp`, `press`, `date`) VALUES
(11, 'VSN97', 35, 50, 12, 80, '2016/Jun/09'),
(12, 'VSN97', 35, 50, 12, 80, '2016/Jun/09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
