-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:21 PM
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
  `Hobbie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Password`, `Gender`, `Hobbie`) VALUES
(1, 'Anand', 'anand@gmail.com', 'anand', '0', 'Cricket,Singing,Swimming'),
(2, 'Niyati', 'niyati@gmail.com', 'niyati', '1', 'Singing,Shopping'),
(3, 'Yashvi', 'yashvi@gmail.com', 'yashvi', '1', 'Cricket,Swimming');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Email`, `Password`) VALUES
('testuser@kcsitglobal.com', 'secret');

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
(1, 'Phone', 'Yes'),
(2, 'Makeup', 'Yes'),
(3, 'Clothes', 'Yes'),
(4, 'Grocery', 'Yes'),
(6, 'Shampoo', 'Yes'),
(7, 'Hair Care Products', 'Yes');

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
(1, 'Fruits', 4, 'fruits.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(2, 'Lipstic', 2, 'mackup.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(3, 'Mamaearth Hair Mask', 7, 'mamaearth.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(4, 'iPhone', 1, 'iPhone.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(5, 'T-Shirts', 3, 'clothes.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(6, 'Dove 2 in 1', 6, 'dove.PNG', 'testuser@kcsitglobal.com', 'Yes'),
(7, 'Vegetables', 4, 'vagetable.PNG', 'testuser@kcsitglobal.com', 'Yes');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
