-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 08:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profiling`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`) VALUES
(1, 'BSIT'),
(2, 'BSBA'),
(3, 'BEED');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`) VALUES
(18, '2ND YEAR'),
(19, '3RD YEAR'),
(20, '4TH YEAR'),
(21, '1ST YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`) VALUES
(18, 'A'),
(19, 'B'),
(20, 'C'),
(21, 'D'),
(22, 'E'),
(23, 'F'),
(24, 'G'),
(25, 'H'),
(26, 'I');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_nopad_bin NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `year_level` int(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `photo` text NOT NULL,
  `id_number` varchar(200) NOT NULL,
  `pwd` text NOT NULL,
  `course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `middle_name`, `last_name`, `age`, `date_of_birth`, `gender`, `address`, `contact_number`, `email_address`, `religion`, `nationality`, `year_level`, `section`, `photo`, `id_number`, `pwd`, `course`) VALUES
(6, 'Ginebra', 'Matapang', 'San miguel', '30', '2022-04-28', 'Male', 'mamburao occidental mindoro', '12345678199', 'gin@gmail.com', 'secret', 'Filipino', 19, 24, 'OMSC-OMSC-626ad56dc3ad38.76787473.png', 'MB0-CIT18-006300', '09773381637', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
