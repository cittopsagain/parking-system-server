-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 12:48 PM
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
  `area` varchar(20) NOT NULL,
  `available_slots` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_area`
--

INSERT INTO `parking_area` (`id`, `area`, `available_slots`) VALUES
(1, 'academic', '6, 4, 9, 10, 20, 26, 24, 36, 5, 11, 43, 2'),
(2, 'area1', '1, 2, 3, 4, 5');

-- --------------------------------------------------------

--
-- Table structure for table `parking_history`
--

CREATE TABLE IF NOT EXISTS `parking_history` (
  `id` int(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  `slot_no` varchar(10) NOT NULL,
  `date_time_park` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_history`
--

INSERT INTO `parking_history` (`id`, `area`, `slot_no`, `date_time_park`) VALUES
(1, 'academic', '8', '2017-08-09 22:09:06'),
(2, 'academic', '6', '2017-08-10 17:22:18'),
(3, 'academic', '7', '2017-08-10 17:22:18'),
(4, 'academic', '5', '2017-08-10 17:22:18'),
(5, 'academic', '1', '2017-08-10 17:36:56'),
(6, 'academic', '1', '2017-08-10 20:42:17'),
(7, 'academic', '1', '2017-08-10 22:15:22'),
(8, 'academic', '3', '2017-08-10 22:33:40'),
(9, 'academic', '4', '2017-08-10 23:16:34'),
(10, 'academic', '2', '2017-08-10 23:16:39'),
(11, 'academic', '3', '2017-08-10 23:16:40'),
(12, 'academic', '6', '2017-08-10 23:16:45'),
(13, 'academic', '5', '2017-08-13 15:05:47'),
(14, 'academic ', '2', '2017-08-14 22:33:09'),
(15, 'academic ', '5', '2017-08-14 22:33:58'),
(16, 'academic ', '8', '2017-08-17 19:21:48'),
(17, 'academic ', '1', '2017-08-17 19:47:35'),
(18, 'academic ', '6', '2017-08-17 19:51:05'),
(19, 'academic ', '7', '2017-08-17 19:51:17'),
(20, 'academic ', '10', '2017-08-17 20:17:48'),
(21, 'academic ', '10', '2017-08-17 20:18:17'),
(22, 'academic ', '29', '2017-08-17 20:24:42'),
(23, 'academic ', '19', '2017-08-17 21:03:33'),
(24, 'academic ', '20', '2017-08-17 21:03:47'),
(25, 'academic ', '21', '2017-08-17 21:03:54'),
(26, 'academic ', '33', '2017-08-17 21:05:31'),
(27, 'academic ', '14', '2017-08-17 21:33:07'),
(28, 'academic ', '14', '2017-08-17 21:33:11'),
(29, 'academic ', '34', '2017-08-20 21:58:56'),
(30, 'academic ', '40', '2017-08-20 22:00:16'),
(31, 'academic ', '33', '2017-08-20 22:00:25'),
(32, 'academic ', '33', '2017-08-20 22:00:26'),
(33, 'academic ', '33', '2017-08-20 22:00:28'),
(34, 'academic ', '33', '2017-08-20 22:00:29'),
(35, 'academic ', '33', '2017-08-20 22:00:30'),
(36, 'academic ', '37', '2017-08-21 11:35:34'),
(37, 'academic ', '34', '2017-08-21 17:32:47'),
(38, 'academic ', '34', '2017-08-21 17:32:50'),
(39, 'academic ', '34', '2017-08-21 17:32:54'),
(40, 'academic ', '34', '2017-08-21 17:32:58'),
(41, 'academic ', '35', '2017-08-21 17:33:05'),
(42, 'academic ', '35', '2017-08-21 17:33:24'),
(43, 'academic ', '43', '2017-08-21 17:38:08'),
(44, 'academic ', '42', '2017-08-21 17:38:10'),
(45, 'academic ', '1', '2017-08-21 17:38:28');

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
(2, 'Admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE IF NOT EXISTS `violations` (
  `id` int(11) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `violation_type` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `violation_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `plate_number`, `violation_type`, `area`, `violation_date`) VALUES
(1, 'P-101', 'Violation 1000', '', '0000-00-00 00:00:00'),
(2, 'P-102', 'Violation 10001', '', '0000-00-00 00:00:00'),
(3, 'P-103', 'Test', '', '2017-08-13 14:10:36');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;