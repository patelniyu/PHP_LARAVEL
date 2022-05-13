-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 08:22 AM
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
-- Database: `checkboxes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablea`
--

CREATE TABLE `tablea` (
  `id` int(11) NOT NULL,
  `checkbox_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablea`
--

INSERT INTO `tablea` (`id`, `checkbox_data`) VALUES
(5, 'Checkbox5'),
(6, 'Checkbox1'),
(7, 'Checkbox2');

-- --------------------------------------------------------

--
-- Table structure for table `tableb`
--

CREATE TABLE `tableb` (
  `id` int(11) NOT NULL,
  `checkbox_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableb`
--

INSERT INTO `tableb` (`id`, `checkbox_data`) VALUES
(3, 'Checkbox3'),
(4, 'Checkbox4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablea`
--
ALTER TABLE `tablea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableb`
--
ALTER TABLE `tableb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablea`
--
ALTER TABLE `tablea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tableb`
--
ALTER TABLE `tableb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
