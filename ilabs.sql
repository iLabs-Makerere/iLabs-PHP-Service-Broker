-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 02:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'Computer'),
(2, 'Electrical'),
(3, 'Telecom');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `marks` varchar(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `activated` tinyint(1) DEFAULT NULL,
  `regtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `regno`, `course_id`, `year_id`, `password`, `marks`, `code`, `activated`, `regtime`) VALUES
(1, 'Gideon', 'sewanyana', '', '16/u/123', 2, 3, '827ccb0eea8a706c4c34a16891f84e7b', '', '', 0, '2018-09-24 19:16:09.740925'),
(3, 'seki', 'cle', 'g@gmail.com', '16/u/001', 1, 2, '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, '2018-09-24 19:16:09.740925'),
(4, 'jerry', 'kakoza', 'k@gmail.com', '16/u/123', 1, 4, '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, '2018-09-24 19:16:09.740925'),
(5, 'roni', 'ogwang', 'g@gmail.com', '16/u/123', 1, 1, '202cb962ac59075b964b07152d234b70', '', '', 0, '2018-09-24 19:16:09.740925'),
(6, 'and', 'tebuseke', 'g@gmail.com', '12/u/78', 2, 2, '5eac43aceba42c8757b54003a58277b5', '', '', 0, '2018-09-24 19:16:09.740925'),
(7, 'jude', 'sewanyana', 'g0@gmail.com', '16/u/123', 1, 1, '81dc9bdb52d04dc20036dbd8313ed055', '', '', NULL, '2018-09-24 19:16:09.740925'),
(10, 'RONALD', 'OGWANG', 'rogwang123@gmail.com', '16/u/123', 3, 4, '202cb962ac59075b964b07152d234b70', '0', 'gtnARFIOMehm', 1, '2018-10-02 08:26:37.090208');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `name`) VALUES
(1, 'Year 1'),
(2, 'Year 2'),
(3, 'Year 3'),
(4, 'Year 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
