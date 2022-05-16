-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 06:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Gender` enum('0','1') NOT NULL,
  `File` varchar(255) NOT NULL,
  `Hobbie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Fname`, `Lname`, `Email`, `Password`, `Address`, `Designation`, `Gender`, `File`, `Hobbie`) VALUES
(1, 'Niyati', 'Patel', 'niyati@gmail.com', 'niyati', 'Mehsana', 'Project Manager', '1', 'Technical_exercise (1).docx', 'Reading, Travelling'),
(3, 'Shreyas', 'Patel', 'shreyas@gmail.com', 'shreyu', 'Ahmedabad', 'Jr. Developer', '0', 'Annual.docx', 'Playing, Watching Movie'),
(4, 'Anand', 'Patel', 'anand@gmail.com', 'anand', 'Mehsana', 'Humman resource', '0', 'report.docx', 'Travelling, Watching Movie'),
(5, 'Yashvi', 'Suthar', 'yashvi@gmail.com', 'yashvi', 'Kalol', 'Jr. Developer', '1', 'flow.docx', 'Reading, Playing'),
(6, 'Nitya', 'Patel', 'nitya@gmail.com', 'nitya', 'Patan', 'Sr. Developer', '1', 'Niyati Patel.pdf', 'Playing, Watching Movie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
