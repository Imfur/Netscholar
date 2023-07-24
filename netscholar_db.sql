-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2023 at 11:50 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netscholar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `email`, `password`) VALUES
(1, 'jrbruce30@gmail.com', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`co_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`co_id`, `fullname`, `username`, `email`, `category`, `message`) VALUES
(8, 'ruton', 'PREETI', 'e30@gmail.com', 'Scholarship', 'wertyui'),
(6, 'ruton', 'kara', 'jrbre30@gmail.com', 'Internship', 'thank you');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `agent` varchar(30) NOT NULL,
  `price` varchar(10) DEFAULT NULL,
  `county` varchar(20) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `details` varchar(200) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name`, `agent`, `price`, `county`, `category`, `details`, `image`, `link`) VALUES
(22, 'McDonald s Internship', 'McDonald', '$250 - $50', 'Australia', 'internship', 'Food beverage internship', '64a449a58f157.jpg', NULL),
(19, 'volkswagen Internship', 'volkswagen', '$500 - $10', 'Rwanda', 'internship', 'Mechanics with Bachelors', '64a4452a6c858.jpg', 'https://mail.google.com/mail/u/0/?q=vedaste#inbox/FMfcgzGtvsZDplKRXslJZrnlJwbkWwJF'),
(18, 'Vanessa College Scholorship', 'Vanessa College', '$100 - $25', 'Qatar', 'scholarshi', 'for diploma holders', '64a442ceb53b5.jpg', NULL),
(21, 'San-B Fashion', 'San-B', '$100 - $25', 'Rwanda', 'internship', 'Senior student in college or University.', '64a4462f998de.jpg', NULL),
(20, 'Havard University', 'Havard University', 'free', 'United States', 'scholarshi', 'High grades student  in Math and Computer ', '64a445bb0765d.jpg', NULL),
(23, 'McDonald s Internship', 'McDonald', '$250 - $50', 'Australia', 'internship', 'Food beverage internship', '64a44a6d56d2c.jpg', ''),
(24, 'Kigali Christian scholarship', 'kCS', '$100 - $25', 'American Samoa', 'scholarshi', 'mwiriwe', '64a7340a14284.jpg', 'https://unsplash.com/s/photos/twitter?orientation=landscape');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(8) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `tel` varchar(14) NOT NULL,
  `country` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `education` varchar(25) DEFAULT NULL,
  `major` varchar(25) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`stu_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `fullname`, `username`, `gender`, `email`, `tel`, `country`, `city`, `education`, `major`, `password`) VALUES
(14, 'mn', 'jun', 'on', 'ksks@gmail.com', '27284556677888', 'American Samoa', 'Kigali', 'Doctoral', 'plm', '1234'),
(15, 'kalisa', 'ang', 'Male', 'kalisa@gmail.com', '0786205515', 'Rwanda', 'Kigali', 'Doctoral', 'plm', '4321');
