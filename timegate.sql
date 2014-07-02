-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2014 at 05:42 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timegate`
--
CREATE DATABASE IF NOT EXISTS `timegate` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `timegate`;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `datetime` datetime NOT NULL,
  `personal_id` int(5) NOT NULL,
  `is_manually_entered` bit(1) NOT NULL COMMENT 'has the user entered the time manually or the system has entered it automatically',
  `out_or_in` bit(1) NOT NULL COMMENT 'out means logged out and in means logged in',
  PRIMARY KEY (`datetime`,`personal_id`),
  KEY `personal_id` (`personal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `personal_id` int(5) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`personal_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `times_ibfk_1` FOREIGN KEY (`personal_id`) REFERENCES `users` (`personal_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
