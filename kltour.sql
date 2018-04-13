-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 11:05 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kltour`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Food_order_ID` int(10) NOT NULL,
  `Food_ID` int(11) NOT NULL,
  `Food_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `Main_order_ID` int(11) NOT NULL,
  `Food_order_ID` int(10) NOT NULL,
  `Total_food_price` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_order`
--

CREATE TABLE `main_order` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Main_order_ID` int(11) NOT NULL,
  `Package_ID` float NOT NULL,
  `Total_price` float DEFAULT NULL,
  `Paid` tinyint(1) NOT NULL DEFAULT '0',
  `Meal` tinyint(1) NOT NULL DEFAULT '0',
  `time_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_order`
--

INSERT INTO `main_order` (`Username`, `Main_order_ID`, `Package_ID`, `Total_price`, `Paid`, `Meal`, `time_created`) VALUES
('Chee ', 7, 1.2, 11, 0, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` float NOT NULL,
  `Package_name` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `Time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Package_price` float NOT NULL,
  `Quantity_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Package_name`, `Time`, `Package_price`, `Quantity_in_stock`) VALUES
(1.2, 'Shopping Spree', '10.00am', 80, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Payment_card` int(12) DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Full_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email`, `Phone`, `Address`, `Payment_card`, `Password`, `Full_name`) VALUES
('Chee', '', NULL, NULL, NULL, '123', ''),
('ffffffffffffffffffff', 'ioi@gmail.comfefwfewfewfewf', NULL, NULL, NULL, 'ffffffffffffff', ''),
('fsdfdsf', 'fdsfdsfsd@gmail.com', NULL, NULL, NULL, '123', ''),
('Hey', 'hey@gmail.com', NULL, NULL, NULL, '123', ''),
('hlee', 'lee@gmail.com', NULL, NULL, NULL, '123', ''),
('ioi', 'ioi@gmail.com', NULL, NULL, NULL, '123', ''),
('vdsvsdc', 'cheehong05090@gmail.com', NULL, NULL, NULL, '123', ''),
('Vincent', 'Vincent', NULL, NULL, NULL, '123', ''),
('zc', 'qw@hotmail.com', NULL, NULL, NULL, '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Food_ID`),
  ADD KEY `Food_Type` (`Food_order_ID`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`Food_order_ID`),
  ADD KEY `Food_Order` (`Main_order_ID`);

--
-- Indexes for table `main_order`
--
ALTER TABLE `main_order`
  ADD PRIMARY KEY (`Main_order_ID`),
  ADD KEY `FK` (`Username`),
  ADD KEY `Package_Details` (`Package_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_order`
--
ALTER TABLE `main_order`
  MODIFY `Main_order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `main_order`
--
ALTER TABLE `main_order`
  ADD CONSTRAINT `Has_Order` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`),
  ADD CONSTRAINT `Package_Details` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
