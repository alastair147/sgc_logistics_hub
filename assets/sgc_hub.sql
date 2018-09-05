-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 07:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgc_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard User', ''),
(2, 'Administrator', '{\r\n\"admin\": 1,\r\n\"moderator\" : 1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `loa`
--

CREATE TABLE `loa` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `date` varchar(25) NOT NULL,
  `leaving` varchar(10) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loa`
--

INSERT INTO `loa` (`id`, `username`, `date`, `leaving`, `reason`) VALUES
(1, 'sshadmin', '23/08/2018', 'yes', 'noone likes the coo, they love the ceo '),
(2, 'sshadmin', '28/08/2018', 'no', 'staying cause J-M is best helper :D');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_jobs`
--

CREATE TABLE `user_jobs` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `date` varchar(32) NOT NULL,
  `pickup_city` varchar(25) NOT NULL,
  `destination_city` varchar(25) NOT NULL,
  `pickup_company` varchar(25) NOT NULL,
  `destination_company` varchar(25) NOT NULL,
  `distance` varchar(10) NOT NULL,
  `convoy` varchar(10) NOT NULL,
  `cargo` varchar(32) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `potential_income` varchar(10) NOT NULL,
  `total_income` varchar(10) NOT NULL,
  `total_damage` varchar(10) NOT NULL,
  `notes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jobs`
--

INSERT INTO `user_jobs` (`id`, `username`, `date`, `pickup_city`, `destination_city`, `pickup_company`, `destination_company`, `distance`, `convoy`, `cargo`, `weight`, `potential_income`, `total_income`, `total_damage`, `notes`) VALUES
(1, 'sshadmin', '23/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test1'),
(2, '2', '23/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test2'),
(3, '3', '23/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test3'),
(4, '4', '24/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test4'),
(5, '5', '24/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test5'),
(6, '6', '24/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test6'),
(7, '', '24/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test7'),
(8, '', '25/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test8'),
(9, '', '25/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test9'),
(10, '', '25/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test10'),
(11, '', '26/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test11'),
(12, '', '26/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test12'),
(13, '', '26/08/2018', 'Auckland', 'Auckland2', 'Test', 'Test2', '1km', 'yes', 'nothing', '1ton', '$1', '$2', '0%', 'test13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loa`
--
ALTER TABLE `loa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_jobs`
--
ALTER TABLE `user_jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loa`
--
ALTER TABLE `loa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_jobs`
--
ALTER TABLE `user_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
