-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 21, 2020 at 11:02 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackjaipur`
--

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `comp_id` int(11) NOT NULL,
  `company` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `website` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `profile` varchar(500) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`comp_id`, `company`, `email`, `website`, `linkedin`, `profile`, `password`) VALUES
(1, 'Ricos', 'ricos@lalala.com', 'asdasd.com', 'asdas.com', 'Naukar', 'Naukar123'),
(2, 'Google', 'muskan@gmail.com', 'http//google.com', '', 'Software Developer', 'Anjali123');

-- --------------------------------------------------------

--
-- Table structure for table `shortlists`
--

CREATE TABLE `shortlists` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `resume` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `score` int(10) DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shortlists`
--

INSERT INTO `shortlists` (`id`, `fname`, `resume`, `linkedin`, `email`, `score`, `company`) VALUES
(1, 'Anjali', 'anjali.com', 'linkedin.in/anjali.com', 'anjali@gmail.com', 44, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstn` varchar(250) DEFAULT NULL,
  `lastn` varchar(250) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `resume` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstn`, `lastn`, `email`, `dob`, `linkedin`, `resume`, `password`) VALUES
(1, 'Anjali', 'Singh', 'muskan@gmail.com', '1999-12-03', 'naaaaaaaaaaa.com', 'www.google.com', 'Anjali123'),
(3, 'Taniya', 'Rawat', 'tanu2599@gmail.com', '1999-06-25', 'blah', 'blah', 'Lalala123'),
(4, 'CUTE ', 'BABY', 'cutestbabyintheworld@cutebaby.com', '2003-06-04', 'NAAAAAAAA.com', 'CUTEBABY.com', 'Cutestbaby1'),
(5, 'Taniya', 'Rawat ', 'louveju@gmail.com', '1999-06-25', 'https//kyakrogedekhkeurl.com', 'None', 'Blah1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `shortlists`
--
ALTER TABLE `shortlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shortlists`
--
ALTER TABLE `shortlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
