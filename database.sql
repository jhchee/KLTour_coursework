-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 06:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1
CREATE DATABASE kltour;
use kltour;

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
  `Food_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total_food_price` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_order`
--

CREATE TABLE `main_order` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Main_order_ID` int(11) NOT NULL,
  `Package_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Total_price` float DEFAULT NULL,
  `Paid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Package_name` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `Time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Package_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `State` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name_on_card` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Payment_card` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Expire_year` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Expire_month` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Full_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`Food_order_ID`),
  ADD KEY `Food_Order` (`Main_order_ID`),
  ADD KEY `Has food` (`Food_ID`);

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
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `Food_order_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_order`
--
ALTER TABLE `main_order`
  MODIFY `Main_order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `Has food` FOREIGN KEY (`Food_ID`) REFERENCES `food` (`Food_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Has food order` FOREIGN KEY (`Main_order_ID`) REFERENCES `main_order` (`Main_order_ID`) ON DELETE CASCADE;

--
-- Constraints for table `main_order`
--
ALTER TABLE `main_order`
  ADD CONSTRAINT `Has order` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON DELETE CASCADE,
  ADD CONSTRAINT `Package_Details` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`) ON UPDATE CASCADE;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `package` (`Package_ID`, `Package_name`, `Time`, `Package_price`) VALUES
('1.1', 'Landmark Tour', '8.00 AM', 80),
('1.2', 'Landmark Tour', '9.00 AM', 80),
('1.3', 'Landmark Tour', '10.00 AM', 80),
('1.4', 'Landmark Tour', '11.00 AM', 80),
('1.5', 'Landmark Tour', '1.00 PM', 80),
('1.6', 'Landmark Tour', '2.00 PM', 80),
('2.1', 'Cultural Tour', '8.00 AM', 90),
('2.2', 'Cultural Tour', '9.00 AM', 90),
('2.3', 'Cultural Tour', '10.00 AM', 90),
('2.4', 'Cultural Tour', '11.00 AM', 90),
('2.5', 'Cultural Tour', '1.00 PM', 90),
('2.6', 'Cultural Tour', '2.00 PM', 90),
('3.1', 'Natural Tour', '8.00 AM', 120),
('3.2', 'Natural Tour', '9.00 AM', 120),
('3.3', 'Natural Tour', '10.00 AM', 120),
('3.4', 'Natural Tour', '11.00 AM', 120),
('3.5', 'Natural Tour', '1.00 PM', 120),
('3.6', 'Natural Tour', '2.00 PM', 120),
('4.1', 'Modern Tour', '8.00 AM', 130),
('4.2', 'Modern Tour', '9.00 AM', 130),
('4.3', 'Modern Tour', '10.00 AM', 130),
('4.4', 'Modern Tour', '10.00 AM', 130),
('4.5', 'Modern Tour', '1.00 PM', 130),
('4.6', 'Modern Tour', '2.00 PM', 130);



INSERT INTO `food` (`Food_ID`, `Food_name`, `Price`) VALUES
(1, 'Twisties', 1.2),
(2, 'London Choco Roll', 1.6),
(3, 'Tiger Biscuit', 2.6),
(4, 'Snickers Bar', 3),
(5, 'Kitkat', 3.2),
(6, 'Mamee Noodles', 1.5),
(7, 'Rice Cracker', 3.3),
(8, 'Lipton Green Tea', 2.7),
(9, 'Coca-cola', 2.5),
(10, 'Mineral Water', 1.1);

COMMIT;