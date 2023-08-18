-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 06:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `createddt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `content`, `createddt`) VALUES
(7, 'myss', '23aaasd', '2021-11-03'),
(8, 'rieee', 'asasdasd', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `yrlevel` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `username`, `email`, `yrlevel`, `institution`, `schoolname`, `occupation`, `password`, `role`) VALUES
(1, '', '', 'rietorres@gmail.com', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(2, '', 'admin', 'admin@gmail.com', '', '', '', '', 'admin', 0),
(3, '', '', 'rietorres11@gmail.com', '4th', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(4, '', '', 'torres11222@gmail.com', '43th', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(5, 'rie torres', '', 'rietorres33@gmail.com', '4th', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(6, 'rie torres', '', 'rietorres112323@gmail.com', '4th', '', 'cavsu', '', '202cb962ac59075b964b07152d234b70', 0),
(7, 'Mark', '', 'mary.nocon@cvsu.edu.ph', '4th', '', 'dgzdsg', '', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(8, 'jghgfjh', '', 'mary@cvsu.edu.ph', '', 'dfsdg', 'dsfg', '', '827ccb0eea8a706c4c34a16891f84e7b', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`id`, `fname`, `email`, `institution`, `schoolname`, `password`) VALUES
(1, '', 'rietorres11@gmail.com', 'dcit', 'cavsu', '202cb962ac59075b964b07152d234b70'),
(2, 'rie torres', 'rietorres132@gmail.com', 'dcit', 'cavsu', '202cb962ac59075b964b07152d234b70'),
(3, 'MG', 'mary.nocon@cvsu.edu.ph', 'dsfs', 'dsgdhg', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `login2`
--

CREATE TABLE `login2` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`id`, `fname`, `email`, `occupation`, `password`) VALUES
(0, 'rie torres', 'rietorres11@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(0, 'rie torres', 'rietorres3232@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(0, 'rie torres', 'rietorres33@gmail.com', 'wala', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `thesis_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `yrsec` varchar(50) NOT NULL,
  `thtitle` varchar(50) NOT NULL,
  `yrsubmit` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `tc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`thesis_id`, `name`, `yrsec`, `thtitle`, `yrsubmit`, `type`, `adviser`, `tc`) VALUES
(1, 'rie and friends', 'it4f', 'archive', '0000-00-00', 'thesis', 'maam alma', 'maam tess'),
(2, 'ace', 'ass', 'asdasdasasdasdasd', '0000-00-00', 'asdasdasdasd', 'adasdasd', 'asdasdasdasd'),
(3, 'ace', 'ass', 'asdasdasasdasdasd', '0000-00-00', 'asdasdasdasd', 'adasdasd', 'asdasdasdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`thesis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login1`
--
ALTER TABLE `login1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `thesis_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
