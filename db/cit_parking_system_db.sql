-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 11:42 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_area`
--

INSERT INTO `parking_area` (`id`, `area`, `available_slots`) VALUES
(1, 'High School Area', '2,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,53,54,55,56,57,58,59,60,61');

-- --------------------------------------------------------

--
-- Table structure for table `parking_history`
--

CREATE TABLE IF NOT EXISTS `parking_history` (
  `id` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `slot_no` varchar(10) NOT NULL,
  `date_time_park` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=749 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_history`
--

INSERT INTO `parking_history` (`id`, `area`, `slot_no`, `date_time_park`) VALUES
(432, 'High School Area', '1', '2017-09-18 23:33:17'),
(433, 'High School Area', '3', '2017-09-18 23:33:51'),
(434, 'High School Area', '2', '2017-09-18 23:33:59'),
(435, 'High School Area', '7', '2017-09-18 23:34:00'),
(436, 'High School Area', '8', '2017-09-18 23:34:02'),
(437, 'High School Area', '6', '2017-09-18 23:42:14'),
(438, 'High School Area', '7', '2017-09-18 23:42:16'),
(439, 'High School Area', '8', '2017-09-18 23:42:16'),
(440, 'High School Area', '9', '2017-09-18 23:42:18'),
(441, 'High School Area', '1', '2017-09-19 14:21:56'),
(442, 'High School Area', '1', '2017-09-19 14:24:53'),
(443, 'High School Area', '1', '2017-09-19 14:24:54'),
(444, 'High School Area', '1', '2017-09-19 14:25:36'),
(445, 'High School Area', '2', '2017-09-19 14:25:40'),
(446, 'High School Area', '1', '2017-09-19 14:26:19'),
(447, 'High School Area', '1', '2017-09-19 14:26:30'),
(448, 'High School Area', '1', '2017-09-19 14:27:15'),
(449, 'High School Area', '2', '2017-09-19 14:27:16'),
(450, 'High School Area', '1', '2017-09-19 14:27:42'),
(451, 'High School Area', '1', '2017-09-19 14:28:01'),
(452, 'High School Area', '1', '2017-09-19 14:28:02'),
(453, 'High School Area', '1', '2017-09-19 14:29:21'),
(454, 'High School Area', '1', '2017-09-19 14:29:35'),
(455, 'High School Area', '2', '2017-09-19 14:29:46'),
(456, 'High School Area', '1', '2017-09-19 14:30:09'),
(457, 'High School Area', '1', '2017-09-19 14:32:24'),
(458, 'High School Area', '2', '2017-09-19 14:32:25'),
(459, 'High School Area', '2', '2017-09-19 14:32:26'),
(460, 'High School Area', '2', '2017-09-19 14:32:26'),
(461, 'High School Area', '2', '2017-09-19 14:32:27'),
(462, 'High School Area', '2', '2017-09-19 14:32:27'),
(463, 'High School Area', '1', '2017-09-19 14:33:07'),
(464, 'High School Area', '2', '2017-09-19 14:33:08'),
(465, 'High School Area', '1', '2017-09-19 14:33:28'),
(466, 'High School Area', '1', '2017-09-19 14:33:29'),
(467, 'High School Area', '1', '2017-09-19 14:33:29'),
(468, 'High School Area', '1', '2017-09-19 14:33:29'),
(469, 'High School Area', '1', '2017-09-19 14:34:00'),
(470, 'High School Area', '1', '2017-09-19 14:34:26'),
(471, 'High School Area', '1', '2017-09-19 14:34:28'),
(472, 'High School Area', '1', '2017-09-19 14:34:29'),
(473, 'High School Area', '1', '2017-09-19 14:34:34'),
(474, 'High School Area', '1', '2017-09-19 14:34:35'),
(475, 'High School Area', '1', '2017-09-19 14:34:36'),
(497, 'High School Area', '2', '2017-09-19 17:25:34'),
(498, 'High School Area', '1', '2017-09-19 17:25:45'),
(499, 'High School Area', '3', '2017-09-19 17:25:59'),
(500, 'High School Area', '6', '2017-09-19 17:31:15'),
(501, 'High School Area', '7', '2017-09-19 17:31:18'),
(502, 'High School Area', '4', '2017-09-19 17:31:21'),
(503, 'High School Area', '12', '2017-09-19 17:31:23'),
(504, 'High School Area', '61', '2017-09-19 17:31:31'),
(505, 'High School Area', '8', '2017-09-19 17:32:27'),
(506, 'High School Area', '1', '2017-09-19 17:34:04'),
(507, 'High School Area', '2', '2017-09-19 17:37:40'),
(508, 'High School Area', '1', '2017-09-19 17:40:18'),
(509, 'High School Area', '6', '2017-09-19 17:40:21'),
(510, 'High School Area', '7', '2017-09-19 17:40:22'),
(511, 'High School Area', '8', '2017-09-19 17:40:25'),
(512, 'High School Area', '9', '2017-09-19 17:40:26'),
(513, 'High School Area', '5', '2017-09-19 17:40:29'),
(514, 'High School Area', '15', '2017-09-19 17:40:31'),
(515, 'High School Area', '16', '2017-09-19 17:40:33'),
(516, 'High School Area', '20', '2017-09-19 17:40:36'),
(517, 'High School Area', '24', '2017-09-19 17:40:37'),
(518, 'High School Area', '37', '2017-09-19 17:40:38'),
(519, 'High School Area', '36', '2017-09-19 17:40:39'),
(520, 'High School Area', '31', '2017-09-19 17:40:41'),
(521, 'High School Area', '30', '2017-09-19 17:40:43'),
(522, 'High School Area', '26', '2017-09-19 17:40:44'),
(523, 'High School Area', '25', '2017-09-19 17:40:47'),
(524, 'High School Area', '42', '2017-09-19 17:40:51'),
(525, 'High School Area', '45', '2017-09-19 17:40:53'),
(526, 'High School Area', '59', '2017-09-19 17:40:55'),
(527, 'High School Area', '56', '2017-09-19 17:40:56'),
(528, 'High School Area', '55', '2017-09-19 17:40:57'),
(529, 'High School Area', '54', '2017-09-19 17:40:59'),
(530, 'High School Area', '53', '2017-09-19 17:41:01'),
(531, 'High School Area', '52', '2017-09-19 17:41:05'),
(532, 'High School Area', '50', '2017-09-19 17:41:11'),
(533, 'High School Area', '1', '2017-09-19 20:33:20'),
(534, 'High School Area', '1', '2017-09-19 20:33:22'),
(535, 'High School Area', '1', '2017-09-19 20:33:26'),
(536, 'High School Area', '5', '2017-09-19 20:35:16'),
(537, 'High School Area', '7', '2017-09-19 20:35:22'),
(538, 'High School Area', '7', '2017-09-19 20:35:24'),
(539, 'High School Area', '1', '2017-09-19 20:40:57'),
(540, 'High School Area', '1', '2017-09-19 20:40:59'),
(541, 'High School Area', '1', '2017-09-19 20:41:01'),
(542, 'High School Area', '1', '2017-09-19 20:41:03'),
(543, 'High School Area', '2', '2017-09-19 20:41:07'),
(544, 'High School Area', '2', '2017-09-19 20:41:11'),
(545, 'High School Area', '2', '2017-09-19 20:41:14'),
(546, 'High School Area', '3', '2017-09-19 20:41:52'),
(547, 'High School Area', '4', '2017-09-19 20:41:55'),
(548, 'High School Area', '5', '2017-09-19 20:41:56'),
(549, 'High School Area', '6', '2017-09-19 20:41:58'),
(550, 'High School Area', '7', '2017-09-19 20:42:00'),
(551, 'High School Area', '8', '2017-09-19 20:42:02'),
(552, 'High School Area', '9', '2017-09-19 20:42:02'),
(553, 'High School Area', '10', '2017-09-19 20:42:04'),
(554, 'High School Area', '11', '2017-09-19 20:42:06'),
(555, 'High School Area', '30', '2017-09-19 20:42:10'),
(556, 'High School Area', '31', '2017-09-19 20:42:12'),
(557, 'High School Area', '32', '2017-09-19 20:42:13'),
(558, 'High School Area', '33', '2017-09-19 20:42:14'),
(559, 'High School Area', '34', '2017-09-19 20:42:16'),
(560, 'High School Area', '35', '2017-09-19 20:42:17'),
(561, 'High School Area', '36', '2017-09-19 20:42:19'),
(562, 'High School Area', '37', '2017-09-19 20:42:20'),
(563, 'High School Area', '38', '2017-09-19 20:42:21'),
(564, 'High School Area', '38', '2017-09-19 20:42:22'),
(565, 'High School Area', '38', '2017-09-19 20:42:23'),
(566, 'High School Area', '1', '2017-09-19 20:53:12'),
(567, 'High School Area', '1', '2017-09-19 20:54:13'),
(568, 'High School Area', '4', '2017-09-21 20:22:14'),
(569, 'High School Area', '1', '2017-09-21 20:26:55'),
(570, 'High School Area', '1', '2017-09-21 20:29:10'),
(571, 'High School Area', '2', '2017-09-24 10:24:58'),
(572, 'High School Area', '1', '2017-09-24 10:24:59'),
(573, 'High School Area', '4', '2017-09-24 10:25:01'),
(574, 'High School Area', '7', '2017-09-24 10:25:02'),
(575, 'High School Area', '8', '2017-09-24 10:25:03'),
(576, 'High School Area', '9', '2017-09-24 10:25:04'),
(577, 'High School Area', '11', '2017-09-24 10:25:05'),
(578, 'High School Area', '5', '2017-09-24 10:25:06'),
(579, 'High School Area', '1', '2017-09-24 20:24:37'),
(580, 'High School Area', '2', '2017-09-24 20:43:49'),
(581, 'High School Area', '1', '2017-09-24 20:46:36'),
(582, 'High School Area', '3', '2017-09-24 20:46:52'),
(583, 'High School Area', '3', '2017-09-24 20:46:54'),
(584, 'High School Area', '3', '2017-09-24 20:46:59'),
(585, 'High School Area', '1', '2017-09-24 20:47:12'),
(586, 'High School Area', '1', '2017-09-24 20:48:57'),
(587, 'High School Area', '2', '2017-09-24 20:49:09'),
(588, 'High School Area', '5', '2017-09-24 20:49:23'),
(589, 'High School Area', '1', '2017-09-24 21:01:51'),
(590, 'High School Area', '1', '2017-09-24 21:11:17'),
(591, 'High School Area', '1', '2017-09-24 21:11:54'),
(592, 'High School Area', '5', '2017-09-24 21:12:38'),
(593, 'Academic Area', '5', '2017-09-24 21:14:22'),
(594, 'High School Area', '5', '2017-09-24 21:14:31'),
(595, 'High School Area', '3', '2017-09-27 19:28:51'),
(596, 'High School Area', '1', '2017-09-27 19:29:59'),
(597, 'High School Area', '2', '2017-09-27 19:30:00'),
(598, 'High School Area', '3', '2017-09-27 19:30:00'),
(599, 'High School Area', '2', '2017-09-27 19:33:09'),
(600, 'High School Area', '1', '2017-09-27 20:18:25'),
(601, 'High School Area', '2', '2017-09-27 20:18:29'),
(602, 'High School Area', '3', '2017-09-27 20:18:43'),
(603, 'High School Area', '1', '2017-09-27 20:18:48'),
(604, 'High School Area', '3', '2017-09-27 20:21:17'),
(605, 'High School Area', '4', '2017-09-27 20:21:18'),
(606, 'High School Area', '5', '2017-09-27 20:21:19'),
(607, 'High School Area', '3', '2017-09-27 20:27:37'),
(608, 'High School Area', '5', '2017-09-27 20:27:40'),
(609, 'High School Area', '3', '2017-09-27 20:27:50'),
(610, 'High School Area', '4', '2017-09-27 20:27:52'),
(611, 'High School Area', '2', '2017-09-27 20:27:56'),
(612, 'High School Area', '1', '2017-09-28 19:10:41'),
(613, 'High School Area', '3', '2017-09-28 19:10:41'),
(614, 'High School Area', '6', '2017-09-28 19:10:41'),
(615, 'High School Area', '7', '2017-09-28 19:10:41'),
(616, 'High School Area', '8', '2017-09-28 19:10:41'),
(617, 'High School Area', '9', '2017-09-28 19:10:41'),
(618, 'High School Area', '10', '2017-09-28 19:10:41'),
(619, 'High School Area', '11', '2017-09-28 19:10:41'),
(620, 'High School Area', '12', '2017-09-28 19:10:41'),
(621, 'High School Area', '13', '2017-09-28 19:10:41'),
(622, 'High School Area', '14', '2017-09-28 19:10:41'),
(623, 'High School Area', '15', '2017-09-28 19:10:41'),
(624, 'High School Area', '16', '2017-09-28 19:10:41'),
(625, 'High School Area', '17', '2017-09-28 19:10:41'),
(626, 'High School Area', '18', '2017-09-28 19:10:41'),
(627, 'High School Area', '19', '2017-09-28 19:10:41'),
(628, 'High School Area', '20', '2017-09-28 19:10:41'),
(629, 'High School Area', '21', '2017-09-28 19:10:41'),
(630, 'High School Area', '22', '2017-09-28 19:10:41'),
(631, 'High School Area', '23', '2017-09-28 19:10:41'),
(632, 'High School Area', '24', '2017-09-28 19:10:41'),
(633, 'High School Area', '25', '2017-09-28 19:10:41'),
(634, 'High School Area', '26', '2017-09-28 19:10:41'),
(635, 'High School Area', '27', '2017-09-28 19:10:41'),
(636, 'High School Area', '28', '2017-09-28 19:10:41'),
(637, 'High School Area', '29', '2017-09-28 19:10:41'),
(638, 'High School Area', '30', '2017-09-28 19:10:41'),
(639, 'High School Area', '31', '2017-09-28 19:10:41'),
(640, 'High School Area', '32', '2017-09-28 19:10:41'),
(641, 'High School Area', '33', '2017-09-28 19:10:41'),
(642, 'High School Area', '34', '2017-09-28 19:10:41'),
(643, 'High School Area', '35', '2017-09-28 19:10:41'),
(644, 'High School Area', '36', '2017-09-28 19:10:41'),
(645, 'High School Area', '37', '2017-09-28 19:10:41'),
(646, 'High School Area', '38', '2017-09-28 19:10:41'),
(647, 'High School Area', '39', '2017-09-28 19:10:41'),
(648, 'High School Area', '40', '2017-09-28 19:10:41'),
(649, 'High School Area', '41', '2017-09-28 19:10:41'),
(650, 'High School Area', '42', '2017-09-28 19:10:41'),
(651, 'High School Area', '43', '2017-09-28 19:10:41'),
(652, 'High School Area', '44', '2017-09-28 19:10:41'),
(653, 'High School Area', '45', '2017-09-28 19:10:41'),
(654, 'High School Area', '46', '2017-09-28 19:10:41'),
(655, 'High School Area', '47', '2017-09-28 19:10:41'),
(656, 'High School Area', '48', '2017-09-28 19:10:41'),
(657, 'High School Area', '49', '2017-09-28 19:10:41'),
(658, 'High School Area', '50', '2017-09-28 19:10:41'),
(659, 'High School Area', '51', '2017-09-28 19:10:41'),
(660, 'High School Area', '52', '2017-09-28 19:10:41'),
(661, 'High School Area', '53', '2017-09-28 19:10:41'),
(662, 'High School Area', '54', '2017-09-28 19:10:41'),
(663, 'High School Area', '55', '2017-09-28 19:10:41'),
(664, 'High School Area', '56', '2017-09-28 19:10:41'),
(665, 'High School Area', '57', '2017-09-28 19:10:41'),
(666, 'High School Area', '58', '2017-09-28 19:10:41'),
(667, 'High School Area', '59', '2017-09-28 19:10:41'),
(668, 'High School Area', '60', '2017-09-28 19:10:41'),
(669, 'High School Area', '61', '2017-09-28 19:10:41'),
(670, 'High School Area', '1', '2017-09-28 19:42:40'),
(671, 'High School Area', '3', '2017-09-28 19:45:32'),
(672, 'High School Area', '1', '2017-09-28 19:47:22'),
(673, 'High School Area', '2', '2017-09-28 19:47:22'),
(674, 'High School Area', '3', '2017-09-28 19:47:22'),
(675, 'High School Area', '4', '2017-09-28 19:47:22'),
(676, 'High School Area', '5', '2017-09-28 19:47:22'),
(677, 'High School Area', '6', '2017-09-28 19:47:22'),
(678, 'High School Area', '7', '2017-09-28 19:47:22'),
(679, 'High School Area', '8', '2017-09-28 19:47:22'),
(680, 'High School Area', '9', '2017-09-28 19:47:22'),
(681, 'High School Area', '10', '2017-09-28 19:47:22'),
(682, 'High School Area', '11', '2017-09-28 19:47:22'),
(683, 'High School Area', '12', '2017-09-28 19:47:22'),
(684, 'High School Area', '13', '2017-09-28 19:47:22'),
(685, 'High School Area', '14', '2017-09-28 19:47:22'),
(686, 'High School Area', '15', '2017-09-28 19:47:22'),
(687, 'High School Area', '16', '2017-09-28 19:47:22'),
(688, 'High School Area', '17', '2017-09-28 19:47:22'),
(689, 'High School Area', '18', '2017-09-28 19:47:22'),
(690, 'High School Area', '19', '2017-09-28 19:47:22'),
(691, 'High School Area', '20', '2017-09-28 19:47:22'),
(692, 'High School Area', '21', '2017-09-28 19:47:22'),
(693, 'High School Area', '22', '2017-09-28 19:47:22'),
(694, 'High School Area', '23', '2017-09-28 19:47:22'),
(695, 'High School Area', '24', '2017-09-28 19:47:22'),
(696, 'High School Area', '25', '2017-09-28 19:47:22'),
(697, 'High School Area', '26', '2017-09-28 19:47:22'),
(698, 'High School Area', '27', '2017-09-28 19:47:22'),
(699, 'High School Area', '28', '2017-09-28 19:47:22'),
(700, 'High School Area', '29', '2017-09-28 19:47:22'),
(701, 'High School Area', '30', '2017-09-28 19:47:22'),
(702, 'High School Area', '31', '2017-09-28 19:47:22'),
(703, 'High School Area', '32', '2017-09-28 19:47:22'),
(704, 'High School Area', '33', '2017-09-28 19:47:22'),
(705, 'High School Area', '34', '2017-09-28 19:47:22'),
(706, 'High School Area', '35', '2017-09-28 19:47:22'),
(707, 'High School Area', '36', '2017-09-28 19:47:22'),
(708, 'High School Area', '37', '2017-09-28 19:47:22'),
(709, 'High School Area', '38', '2017-09-28 19:47:22'),
(710, 'High School Area', '39', '2017-09-28 19:47:22'),
(711, 'High School Area', '40', '2017-09-28 19:47:22'),
(712, 'High School Area', '41', '2017-09-28 19:47:22'),
(713, 'High School Area', '42', '2017-09-28 19:47:22'),
(714, 'High School Area', '43', '2017-09-28 19:47:22'),
(715, 'High School Area', '44', '2017-09-28 19:47:22'),
(716, 'High School Area', '45', '2017-09-28 19:47:22'),
(717, 'High School Area', '46', '2017-09-28 19:47:22'),
(718, 'High School Area', '47', '2017-09-28 19:47:22'),
(719, 'High School Area', '48', '2017-09-28 19:47:22'),
(720, 'High School Area', '49', '2017-09-28 19:47:22'),
(721, 'High School Area', '50', '2017-09-28 19:47:22'),
(722, 'High School Area', '51', '2017-09-28 19:47:22'),
(723, 'High School Area', '52', '2017-09-28 19:47:22'),
(724, 'High School Area', '53', '2017-09-28 19:47:22'),
(725, 'High School Area', '54', '2017-09-28 19:47:22'),
(726, 'High School Area', '55', '2017-09-28 19:47:22'),
(727, 'High School Area', '56', '2017-09-28 19:47:22'),
(728, 'High School Area', '57', '2017-09-28 19:47:22'),
(729, 'High School Area', '58', '2017-09-28 19:47:22'),
(730, 'High School Area', '59', '2017-09-28 19:47:22'),
(731, 'High School Area', '60', '2017-09-28 19:47:22'),
(732, 'High School Area', '61', '2017-09-28 19:47:22'),
(733, 'High School Area', '61', '2017-09-28 20:07:54'),
(734, 'High School Area', '1', '2017-09-29 17:17:27'),
(735, 'High School Area', '2', '2017-09-29 17:17:40'),
(736, 'High School Area', '3', '2017-09-29 17:17:55'),
(737, 'High School Area', '4', '2017-09-29 17:18:01'),
(738, 'High School Area', '5', '2017-09-29 17:34:03'),
(739, 'High School Area', '5', '2017-09-29 17:34:11'),
(740, 'High School Area', '6', '2017-09-29 17:34:12'),
(741, 'High School Area', '7', '2017-09-29 17:34:23'),
(742, 'High School Area', '8', '2017-09-29 17:34:36'),
(743, 'High School Area', '52', '2017-09-29 17:39:01'),
(744, 'High School Area', '5', '2017-09-29 17:41:46'),
(745, 'High School Area', '10', '2017-09-29 17:41:48'),
(746, 'High School Area', '9', '2017-09-29 17:41:51'),
(747, 'High School Area', '11', '2017-09-29 17:41:53'),
(748, 'High School Area', '3', '2017-09-29 17:41:56');

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
(2, 'Walter', 'Ybanez', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE IF NOT EXISTS `violations` (
  `id` int(11) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `violation_type` varchar(100) NOT NULL,
  `additional_details` text NOT NULL,
  `car_model` varchar(20) NOT NULL,
  `car_color` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `violation_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `plate_number`, `violation_type`, `additional_details`, `car_model`, `car_color`, `area`, `violation_date`) VALUES
(1, 'Plate number-1', 'The quick brown fox jumps over the lazy dog', '', 'Car model', 'Car color1', 'ST Building Area', '2017-09-01 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parking_history`
--
ALTER TABLE `parking_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=749;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
