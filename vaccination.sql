-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2021 at 08:44 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `pass` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `c_name` varchar(15) NOT NULL,
  `c_gender` varchar(8) DEFAULT NULL,
  `c_city` varchar(30) DEFAULT NULL,
  `c_birth` date DEFAULT NULL,
  `c_age` int(3) DEFAULT NULL,
  `c_weight` int(5) DEFAULT NULL,
  `c_height` int(5) DEFAULT NULL,
  `c_vaccine` varchar(100) DEFAULT NULL,
  `p_username` varchar(15) DEFAULT NULL,
  KEY `p_username` (`p_username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--


-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `p_username` varchar(15) NOT NULL,
  `p_lastname` varchar(15) DEFAULT NULL,
  `p_gender` varchar(8) NOT NULL,
  `p_city` varchar(30) DEFAULT NULL,
  `p_birth` date DEFAULT NULL,
  `p_email` varchar(30) DEFAULT NULL,
  `p_pass` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--


-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
  `name` varchar(50) NOT NULL,
  `timing` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--


-- --------------------------------------------------------

--
-- Table structure for table `vaccine_dates`
--

CREATE TABLE IF NOT EXISTS `vaccine_dates` (
  `name` varchar(50) NOT NULL,
  `v_date` date DEFAULT NULL,
  `timing` varchar(20) NOT NULL,
  `c_name` varchar(15) DEFAULT NULL,
  `p_username` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  KEY `p_username` (`p_username`),
  KEY `c_name` (`c_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine_dates`
--

