-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 07:46 AM
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
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` enum('0','1') NOT NULL,
  `Hobbie` varchar(255) NOT NULL,
  `utype` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Password`, `Gender`, `Hobbie`, `utype`) VALUES
(1, '', 'testuser@kcsitglobal.com', 'secret', '', '', '1'),
(6, 'Niyati', 'niyati@gmail.com', 'niyati', '1', 'Singing,Shopping', '2'),
(7, 'Anand', 'anand@gmail.com', 'anand', '0', 'Swimming,Shopping', '2'),
(8, 'Zalak11', 'zalak11@gmail.com', 'zalak123', '1', 'Cricket,Singing,Swimming,Shopping', '2');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catagory_id` int(11) NOT NULL,
  `CName` varchar(255) NOT NULL,
  `Active` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catagory_id`, `CName`, `Active`) VALUES
(1, 'Phones', 'Yes'),
(2, 'Grocery', 'Yes'),
(3, 'Makeup', 'Yes'),
(4, 'Clothes', 'Yes'),
(5, 'Hair Care Products', 'Yes'),
(6, 'Foods', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Catagory` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Created_By_User_id` varchar(255) NOT NULL,
  `Active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Name`, `Catagory`, `Image`, `Created_By_User_id`, `Active`) VALUES
(1, 'Fruits', 2, 'fruits.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(2, 'Lipstic', 3, 'mackup.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(3, 'iPhone', 1, 'iPhone.PNG', 'niyati@gmail.com', 'Yes'),
(4, 'Eye Shadow', 3, 'eyeshadow.PNG', 'niyati@gmail.com', 'Yes'),
(5, 'Vegetables', 2, 'vagetable.PNG', 'anand@gmail.com', 'Yes'),
(6, 'Jeans', 4, 'jeans.PNG', 'anand@gmail.com', 'Yes'),
(7, 'T-Shirts', 4, 'clothes.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(8, 'Redmi Note 11 pro', 1, 'redmi.PNG', 'niyati@gmail.com', 'Yes'),
(9, 'Idali-Dosa', 6, 'food.PNG', 'zalak11@gmail.com', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
