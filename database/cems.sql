-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 02:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(4, 'Admin', 'admin@123'),
(5, 'Rajesh', 'rajesh@123');

-- --------------------------------------------------------

--
-- Table structure for table `nominis`
--

CREATE TABLE `nominis` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stdyr` varchar(50) NOT NULL,
  `posting` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `description` varchar(180) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nominis`
--

INSERT INTO `nominis` (`id`, `name`, `stdyr`, `posting`, `regno`, `description`, `profile`) VALUES
(9, 'Rajesh', 'III', 'STUDENT CHAIRMAN', '25413', 'vote For Me!!\r\n', 'nominations/Rajesh.jpeg'),
(10, 'Abishek', 'III', 'TREASURER', '2541', 'im Contesting For A Treasurer Posting Vote For Me!!', 'nominations/Abishek.jpeg'),
(11, 'User1', 'II', 'SECRETARY1', '246810', '', 'nominations/User1.jpg'),
(12, 'User2', 'III', 'VICE CHAIRMAN', '108642', '', 'nominations/User2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postings`
--

CREATE TABLE `postings` (
  `postid` int(11) NOT NULL,
  `postname` varchar(25) DEFAULT NULL,
  `qualify_year` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `postings`
--

INSERT INTO `postings` (`postid`, `postname`, `qualify_year`) VALUES
(1, 'STUDENT CHAIRMAN', 'III'),
(2, 'SECRETARY1', 'II'),
(3, 'VICE CHAIRMAN', 'III'),
(4, 'SECRETARY2', 'I'),
(5, 'TREASURER', 'III'),
(6, 'SPORTS SECRETARY', NULL),
(7, 'FINE ARTS SECRETARY', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `password`, `regno`, `mob`, `profile`) VALUES
(43, 'Abishek', '202cb962ac59075b964b07152d234b70', '2541', '85749610', 'user_profile/Abishek.png'),
(46, 'Birundha', '202cb962ac59075b964b07152d234b70', '28240204', '7904703371', 'user_profile/Briundha.png'),
(47, 'User1', '202cb962ac59075b964b07152d234b70', '246810', '9696969696', 'user_profile/User1.png'),
(48, 'User2', '202cb962ac59075b964b07152d234b70', '108642', '9797979797', 'user_profile/User2.png'),
(49, 'Rajesh', '202cb962ac59075b964b07152d234b70', '2940', '9384542808', 'user_profile/Rajesh.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominis`
--
ALTER TABLE `nominis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nominis`
--
ALTER TABLE `nominis`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `postings`
--
ALTER TABLE `postings`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
