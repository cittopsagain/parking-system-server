-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 04:01 PM
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
  `available_slots` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_area`
--

INSERT INTO `parking_area` (`id`, `area`, `available_slots`) VALUES
(1, 'academic', '2, 20, 52, 59, 3, 4, 11'),
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
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;

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
(45, 'academic ', '1', '2017-08-21 17:38:28'),
(46, 'academic ', '9', '2017-08-24 22:08:33'),
(47, 'academic ', '1', '2017-08-24 22:18:55'),
(48, 'academic ', '2', '2017-08-24 22:19:03'),
(49, 'academic ', '3', '2017-08-24 22:19:16'),
(50, 'academic ', '4', '2017-08-24 22:19:22'),
(51, 'academic ', '4', '2017-08-24 22:19:49'),
(52, 'academic ', '2', '2017-08-24 22:19:54'),
(53, 'academic ', '5', '2017-08-24 22:36:01'),
(54, 'academic ', '5', '2017-08-24 22:36:10'),
(55, 'academic ', '4', '2017-08-24 22:36:23'),
(56, 'academic ', '5', '2017-08-24 22:36:44'),
(57, 'academic ', '4', '2017-08-24 22:37:01'),
(58, 'academic ', '4', '2017-08-24 22:37:32'),
(59, 'academic ', '2', '2017-08-24 22:37:43'),
(60, 'academic ', '2', '2017-08-24 22:37:50'),
(61, 'academic ', '1', '2017-08-24 22:38:14'),
(62, 'academic ', '1', '2017-08-24 22:40:27'),
(63, 'academic ', '5', '2017-08-24 22:40:49'),
(64, 'academic ', '2', '2017-08-24 22:43:26'),
(65, 'academic ', '3', '2017-08-24 22:43:28'),
(66, 'academic ', '4', '2017-08-24 22:43:30'),
(67, 'academic ', '5', '2017-08-24 22:43:33'),
(68, 'academic ', '1', '2017-08-24 22:43:41'),
(69, 'academic ', '24', '2017-08-30 20:09:28'),
(70, 'academic ', '24', '2017-08-30 20:09:40'),
(71, 'academic ', '23', '2017-08-30 20:09:55'),
(72, 'academic ', '22', '2017-08-30 20:10:02'),
(73, 'academic ', '21', '2017-08-30 20:10:07'),
(74, 'academic ', '20', '2017-08-30 20:10:13'),
(75, 'academic ', '19', '2017-08-30 20:10:19'),
(76, 'academic ', '36', '2017-08-30 20:19:01'),
(77, 'academic ', '47', '2017-08-30 20:19:13'),
(78, 'academic ', '46', '2017-08-30 20:19:15'),
(79, 'academic ', '34', '2017-08-30 20:43:01'),
(80, 'academic ', '43', '2017-08-30 20:43:06'),
(81, 'academic ', '47', '2017-08-30 20:59:24'),
(82, 'academic ', '70', '2017-08-30 21:32:59'),
(83, 'academic ', '61', '2017-08-30 21:43:58'),
(84, 'academic ', '61', '2017-09-02 11:08:53'),
(85, 'academic ', '51', '2017-09-02 11:09:08'),
(86, 'academic ', '2', '2017-09-02 12:09:05'),
(87, 'academic ', '3', '2017-09-02 14:26:36'),
(88, 'academic ', '4', '2017-09-02 14:26:38'),
(89, 'academic ', '6', '2017-09-02 14:26:44'),
(90, 'academic ', '10', '2017-09-02 14:26:46'),
(91, 'academic ', '11', '2017-09-02 14:26:47'),
(92, 'academic ', '15', '2017-09-02 14:26:50'),
(93, 'academic ', '18', '2017-09-02 14:26:51'),
(94, 'academic ', '19', '2017-09-02 14:26:52'),
(95, 'academic ', '20', '2017-09-02 14:26:53'),
(96, 'academic ', '51', '2017-09-02 14:27:01'),
(97, 'academic ', '52', '2017-09-02 14:27:04'),
(98, 'academic ', '24', '2017-09-02 14:27:05'),
(99, 'academic ', '34', '2017-09-02 14:27:07'),
(100, 'academic ', '40', '2017-09-02 14:27:09'),
(101, 'academic ', '43', '2017-09-02 14:27:10'),
(102, 'academic ', '45', '2017-09-02 14:27:11'),
(103, 'academic ', '46', '2017-09-02 14:27:11'),
(104, 'academic ', '48', '2017-09-02 14:27:12'),
(105, 'academic ', '49', '2017-09-02 14:27:13'),
(106, 'academic ', '26', '2017-09-02 14:27:15'),
(107, 'academic ', '57', '2017-09-02 14:27:17'),
(108, 'academic ', '55', '2017-09-02 14:27:19'),
(109, 'academic ', '54', '2017-09-02 14:27:19'),
(110, 'academic ', '53', '2017-09-02 14:27:23'),
(111, 'academic ', '50', '2017-09-02 14:27:26'),
(112, 'academic ', '1', '2017-09-02 14:39:04'),
(113, 'academic ', '18', '2017-09-02 14:48:36'),
(114, 'academic ', '61', '2017-09-02 14:49:59'),
(115, 'academic ', '50', '2017-09-04 19:21:19');

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
  `violation_type` varchar(100) NOT NULL,
  `area` varchar(20) NOT NULL,
  `violation_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `plate_number`, `violation_type`, `area`, `violation_date`) VALUES
(1, 'Plate number-1', 'The quick brown fox jumps over the lazy dog', 'academic', '2017-09-01 00:00:00'),
(2, 'Plate number-2', 'Violation-200', 'academic', '2017-09-07 00:00:00'),
(3, 'Plate number-3', 'Violation-300', 'academic', '2017-08-13 14:10:36'),
(4, 'Plate number-4', 'Violation-400', ' area1 ', '2017-09-02 11:59:39'),
(5, 'Plate number-5', 'Violation-500', ' area2 ', '2017-09-02 12:07:14'),
(6, 'Plate number-6', 'Violation-600', ' area1 ', '2017-09-04 18:39:30'),
(7, 'Test plate number', 'Test violation', 'area4', '2017-09-04 19:18:20');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
