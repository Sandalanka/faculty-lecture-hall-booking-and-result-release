-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 07:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail', 'password'),
(2, 'admin', 'admin@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg_num` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `hall_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `reg_num`, `contact`, `reason`, `hall_name`, `date`, `is_deleted`) VALUES
(1, 'sandalanka', '8784589', 714220524, 'tdxdfcygvuhbj', '', '2019-02-21', 2),
(2, 'kalana', '8784589', 4565789, 'zdxfrctvybuhijo', '', '2019-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `complain` varchar(2000) NOT NULL,
  `date` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `complain`, `date`, `is_deleted`) VALUES
(1, 'hjikjkokok', '0000-00-00 00:00:00', 0),
(2, 'jij', '0000-00-00 00:00:00', 0),
(3, 'jij', '0000-00-00 00:00:00', 0),
(4, 'jij', '0000-00-00 00:00:00', 0),
(5, 'jij', '0000-00-00 00:00:00', 0),
(6, 'jij', '2019-02-21 00:00:00', 0),
(7, 'jij', '2019-02-21 00:00:00', 0),
(8, 'jij', '2019-02-21 00:00:00', 0),
(9, 'jij', '2019-02-21 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lecture_hall`
--

CREATE TABLE `lecture_hall` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg_num` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `index_number` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `reg_num`, `subject`, `result`, `index_number`, `is_deleted`) VALUES
(1, 'sandalanka', '8784589', 'data mining', 'B', 1415, 1),
(2, 'kalana', '8784589', 'data mining', 'A', 1412, 1),
(3, 'saman', '8784589', 'data mining', 'B', 1410, 1),
(4, 'kamal', '8784589', 'data mining', 'c-', 1411, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `idcard`, `department`, `contact`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'kalana', '', '', 0, 'kalana@gmail.com', 'password', '2019-02-21 01:09:18', 1),
(2, 'sandalanka', '838473489555909', 'pst', 714220524, '1415sandalanka@gmail.com', '00000', '2019-02-21 10:28:36', 0),
(3, 'sandalanka', '838473489555909', 'nr', 4565789, 'admin@gmail.com', 'password', '2019-02-21 11:08:06', 1),
(4, 'kalana', '1732687426968531', 'nr', 714220524, 'admin@gmail.com', 'password', '0000-00-00 00:00:00', 1),
(5, 'sandalanka', '838473489555909', 'pst', 714220524, '1415sandalanka@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(6, 'sandalanka', '838473489555909', 'pst', 714220524, '1415sandalanka@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(7, 'saman', '116935752050016', 'spt', 8410852, 'saman@gmail.com', '111', '2019-02-21 11:04:16', 0),
(8, 'kalana', '1233020020073056', 'nr', 4565789, 'admin@gmail.com', 'password', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` varchar(100) NOT NULL,
  `reg_number` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `idcard`, `reg_number`, `department`, `email`, `contact`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'sandalanka', '1233020020073056', 'pst', '8784589', '0714220524', 1415, '00000', '0000-00-00 00:00:00', 1),
(2, 'kalana', '1732687426968531', '8784589', 'pst', 'kalana@gmail.com', 714220524, 'password', '0000-00-00 00:00:00', 1),
(3, 'kalana', '1233020020073056', '8784589', 'pst', 'kalana@gmail.com', 714220524, 'password', '0000-00-00 00:00:00', 0),
(4, 'sandalanka', '838473489555909', '8784589', 'nr', '1415sandalanka@gmail.com', 714220524, '00000', '2019-02-21 11:09:30', 0),
(5, 'kalana', '116935752050016', '789456', 'spt', 'kamal@gmail.com', 4565789, '00000', '2019-02-21 11:06:07', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_hall`
--
ALTER TABLE `lecture_hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lecture_hall`
--
ALTER TABLE `lecture_hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
