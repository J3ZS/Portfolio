-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 11:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Date` datetime NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `message` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Date`, `Name`, `Email`, `message`) VALUES
('2021-04-15 01:07:51', 'Jay-Lee Sykes', '', 'Your Awesome'),
('2021-04-15 01:10:00', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Your Awesome'),
('2021-04-15 01:10:16', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Hi Nice website'),
('2021-04-15 01:10:26', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Hi Nice website'),
('2021-04-15 01:10:30', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Hi Nice website'),
('2021-04-15 01:11:52', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Hi Nice website'),
('2021-04-15 01:12:03', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Awesome'),
('2021-04-15 01:13:04', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Awesome'),
('2021-04-15 11:20:48', 'Jay-Lee Sykes', 'jayleesykes@gmail.com', 'Your Awesome');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
