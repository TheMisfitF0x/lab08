-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: mysql.iu.edu:3704
-- Generation Time: Mar 18, 2017 at 12:40 PM
-- Server version: 5.0.83
-- PHP Version: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guestbook`
--
CREATE DATABASE `guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `guestbook`;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE IF NOT EXISTS `guests` (
  `guest_id` smallint(6) NOT NULL auto_increment,
  `last_name` varchar(40) default NULL,
  `first_name` varchar(40) default NULL,
  `birth_date` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY  (`guest_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `last_name`, `first_name`, `birth_date`, `email`) VALUES
(2, 'Higgins', 'Brian', '08/25/1978', 'hbrian@example.com'),
(4, 'Sweets', 'Chris', '06/14/1980', 'schris@example.com'),
(5, 'Meggs', 'Peter', '04/10/1984', 'mpeter@mydomain.com'),
(9, 'Carter', 'Megan', '10/05/1978', 'cmegan@mydomain.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
