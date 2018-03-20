-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 05:12 PM
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
  `Price` float DEFAULT NULL,
  `Quantity_in_stock` int(11) DEFAULT NULL
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
  `Package_ID` int(11) NOT NULL,
  `Total_price` float DEFAULT NULL,
  `Paid/Unpaid` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Main_order_ID` int(11) NOT NULL,
  `Package_ID` int(20) NOT NULL,
  `Package_name` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `Package_price` float NOT NULL,
  `Quantity_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `First_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Payment_card` int(11) DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD KEY `FK` (`Username`,`Package_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`),
  ADD KEY `Package_Type` (`Main_order_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `Food_Type` FOREIGN KEY (`Food_order_ID`) REFERENCES `food_order` (`Food_order_ID`);

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `Food_Order` FOREIGN KEY (`Main_order_ID`) REFERENCES `main_order` (`Main_order_ID`);

--
-- Constraints for table `main_order`
--
ALTER TABLE `main_order`
  ADD CONSTRAINT `Has_Order` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `Package_Type` FOREIGN KEY (`Main_order_ID`) REFERENCES `main_order` (`Main_order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
