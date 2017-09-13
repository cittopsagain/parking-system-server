-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 04:29 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit_parking_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `parking_area`
--

CREATE TABLE IF NOT EXISTS `parking_area` (
  `id` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `available_slots` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_area`
--

INSERT INTO `parking_area` (`id`, `area`, `available_slots`) VALUES
(1, 'Highschool Area', '20, 3, 4, 51, 2, 8, 7, 14, 13, 21, 23, 37, 35, 34, 33, 32, 31, 30, 29, 28, 27, 26, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 58, 56, 60, 17, 19, 18, 10, 9'),
(2, 'Academic Area', '1, 2, 3, 4, 5');

-- --------------------------------------------------------

--
-- Table structure for table `parking_history`
--

CREATE TABLE IF NOT EXISTS `parking_history` (
  `id` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `slot_no` varchar(10) NOT NULL,
  `date_time_park` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_history`
--

INSERT INTO `parking_history` (`id`, `area`, `slot_no`, `date_time_park`) VALUES
(1, 'Academic Area', '8', '2017-08-09 22:09:06'),
(2, 'Academic Area', '6', '2017-08-10 17:22:18'),
(3, 'Academic Area', '7', '2017-08-10 17:22:18'),
(4, 'Academic Area', '5', '2017-08-10 17:22:18'),
(5, 'Academic Area', '1', '2017-08-10 17:36:56'),
(6, 'Academic Area', '1', '2017-08-10 20:42:17'),
(7, 'Academic Area', '1', '2017-08-10 22:15:22'),
(8, 'Academic Area', '3', '2017-08-10 22:33:40'),
(9, 'Academic Area', '4', '2017-08-10 23:16:34'),
(10, 'Academic Area', '2', '2017-08-10 23:16:39'),
(11, 'Academic Area', '3', '2017-08-10 23:16:40'),
(12, 'Academic Area', '6', '2017-08-10 23:16:45'),
(13, 'Academic Area', '5', '2017-08-13 15:05:47'),
(14, 'Academic Area', '2', '2017-08-14 22:33:09'),
(18, 'Academic Area', '6', '2017-08-17 19:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `img_path` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `user_type`, `img_path`) VALUES
(1, 'Dave', 'Tolentin', 'dave', '1610838743cc90e3e4fdda748282d9b8', 0, 'images/default.jpg'),
(2, 'Walter', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE IF NOT EXISTS `violations` (
  `id` int(11) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `violation_type` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `violation_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `plate_number`, `violation_type`, `area`, `violation_date`) VALUES
(1, 'Plate number-1', 'The quick brown fox jumps over the lazy dog', 'Highschool Area', '2017-09-01 00:00:00'),
(2, 'Plate number-2', 'Violation-200', 'Highschool Area', '2017-09-07 00:00:00'),
(3, 'Plate number-3', 'Violation-300', 'Highschool Area', '2017-08-13 14:10:36'),
(4, 'Plate number-4', 'Violation-400', 'Highschool Area', '2017-09-02 11:59:39'),
(5, 'Plate number-5', 'Violation-500', 'Highschool Area', '2017-09-02 12:07:14'),
(6, 'Plate number-6', 'Violation-600', 'Academic Area', '2017-09-04 18:39:30'),
(7, 'Test plate number', 'Test violation', 'Academic Area', '2017-09-04 19:18:20'),
(8, '1', '1', 'Academic Area', '2017-09-09 13:36:57'),
(9, '2', '2', 'ST Building Area', '2017-09-09 13:37:10'),
(10, '2', '2', 'ST Building Area', '2017-09-09 13:38:17'),
(11, '3', '3', 'Backgate Area', '2017-09-09 13:38:28'),
(12, '5', '5', 'Highschool Area', '2017-09-09 13:41:33'),
(13, '56', '6', 'Canteen Area', '2017-09-09 13:41:47'),
(14, '4', '5', 'Backgate Area', '2017-09-09 13:44:31'),
(15, 'Test', 'Tset', 'Academic Area', '2017-09-09 13:52:29'),
(16, 'Adsf', 'Adf', 'Academic Area', '2017-09-09 13:52:41'),
(17, 'Test pnumber', 'Test violation', 'Highschool Area', '2017-09-09 13:52:56'),
(18, 'A', 'B', 'ST Building Area', '2017-09-09 20:54:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking_area`
--
ALTER TABLE `parking_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_history`
--
ALTER TABLE `parking_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking_area`
--
ALTER TABLE `parking_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parking_history`
--
ALTER TABLE `parking_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
