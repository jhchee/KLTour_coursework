-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 05:53 PM
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
  `Food_ID` int(11) NOT NULL,
  `Food_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Food_ID`, `Food_name`, `Price`) VALUES
(1, 'twisties', 1.2),
(2, 'london_roll', 1.6),
(3, 'cola', 2.5),
(4, 'ring', 2.3);

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

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`Main_order_ID`, `Food_order_ID`, `Food_ID`, `Quantity`, `Total_food_price`) VALUES
(55, 1, 1, 0, 1),
(55, 2, 2, 0, 1),
(55, 3, 3, 0, 1),
(55, 4, 4, 0, 1),
(56, 5, 1, 0, 0),
(56, 6, 2, 0, 0),
(56, 7, 3, 0, 0),
(56, 8, 4, 0, 0),
(57, 9, 1, 1, 0),
(57, 10, 2, 1, 0),
(57, 11, 3, 1, 0),
(57, 12, 4, 1, 0),
(61, 13, 1, 1, 0),
(61, 14, 2, 1, 0),
(61, 15, 3, 1, 0),
(61, 16, 4, 1, 0),
(62, 17, 1, 1, 0),
(62, 18, 2, 1, 0),
(62, 19, 3, 1, 0),
(62, 20, 4, 1, 0),
(63, 21, 1, 1, 1.2),
(63, 22, 2, 1, 1.6),
(63, 23, 3, 1, 2.5),
(63, 24, 4, 1, 2.3),
(64, 25, 1, 2, 1.2),
(64, 26, 2, 2, 1.6),
(64, 27, 3, 2, 2.5),
(64, 28, 4, 2, 2.3),
(65, 29, 1, 2, 2.4),
(65, 30, 2, 2, 3.2),
(65, 31, 3, 2, 5),
(65, 32, 4, 2, 4.6),
(0, 33, 1, 2, 2.4),
(0, 34, 2, 2, 3.2),
(0, 35, 3, 3, 7.5),
(0, 36, 4, 3, 6.9),
(135, 37, 1, 2, 2.4),
(135, 38, 2, 2, 3.2),
(135, 39, 3, 2, 5),
(135, 40, 4, 2, 4.6),
(136, 41, 2, 2, 3.2),
(136, 42, 3, 2, 5),
(137, 43, 1, 2, 2.4),
(137, 44, 2, 2, 3.2),
(137, 45, 3, 2, 5),
(137, 46, 4, 5, 11.5),
(168, 47, 1, 5, 6),
(168, 48, 2, 5, 8),
(168, 49, 4, 5, 11.5),
(169, 50, 1, 5, 6),
(169, 51, 2, 5, 8),
(169, 52, 4, 5, 11.5),
(170, 53, 1, 5, 6),
(170, 54, 2, 5, 8),
(170, 55, 4, 5, 11.5),
(0, 56, 1, 5, 6),
(0, 57, 2, 5, 8),
(0, 58, 4, 5, 11.5),
(0, 59, 1, 5, 6),
(0, 60, 2, 5, 8),
(0, 61, 4, 5, 11.5),
(0, 62, 1, 5, 6),
(0, 63, 2, 5, 8),
(0, 64, 4, 5, 11.5),
(0, 65, 1, 5, 6),
(0, 66, 2, 5, 8),
(0, 67, 4, 5, 11.5),
(0, 68, 1, 5, 6),
(0, 69, 2, 5, 8),
(0, 70, 4, 5, 11.5),
(176, 71, 1, 2, 2.4),
(176, 72, 2, 2, 3.2),
(176, 73, 3, 2, 5),
(176, 74, 4, 2, 4.6),
(177, 75, 1, 2, 2.4),
(177, 76, 2, 2, 3.2),
(177, 77, 3, 2, 5),
(177, 78, 4, 2, 4.6),
(0, 79, 1, 3, 3.6),
(0, 80, 2, 1, 1.6),
(0, 81, 3, 3, 7.5),
(0, 82, 4, 3, 6.9),
(0, 83, 1, 3, 3.6),
(0, 84, 2, 1, 1.6),
(0, 85, 3, 3, 7.5),
(0, 86, 4, 3, 6.9),
(236, 87, 1, 3, 3.6),
(236, 88, 2, 1, 1.6),
(236, 89, 3, 3, 7.5),
(236, 90, 4, 3, 6.9),
(304, 91, 1, 5, 6),
(304, 92, 2, 5, 8),
(304, 93, 3, 5, 12.5),
(304, 94, 4, 5, 11.5),
(306, 95, 1, 3, 3.6),
(306, 96, 2, 5, 8),
(306, 97, 3, 5, 12.5),
(306, 98, 4, 5, 11.5),
(307, 99, 1, 5, 6),
(307, 100, 2, 5, 8),
(307, 101, 3, 5, 12.5),
(307, 102, 4, 5, 11.5);

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

--
-- Dumping data for table `main_order`
--

INSERT INTO `main_order` (`Username`, `Main_order_ID`, `Package_ID`, `Total_price`, `Paid`) VALUES
('Chee', 10, '1.1', 80.5, 1),
('Chee', 11, '1.2', 80.5, 1),
('Chee', 13, '1.1', 80.5, 1),
('Chee', 14, '1.1', 80.5, 1),
('Chee', 15, '1.1', 80.5, 1),
('Chee', 16, '1.1', 80.5, 1),
('Chee', 17, '1.1', 80.5, 1),
('Chee', 18, '1.1', 80.5, 1),
('Chee', 19, '1.1', 80.5, 1),
('Chee', 20, '1.1', 80.5, 1),
('Chee', 21, '1.1', 80.5, 1),
('Chee ', 23, '1.2', 80.5, 1),
('Chee ', 24, '1.2', 80.5, 1),
('Chee ', 25, '1.2', 80.5, 1),
('Chee ', 26, '1.2', 80.5, 1),
('Chee ', 28, '1.2', 80.5, 1),
('Chee ', 29, '1.2', 80.5, 1),
('Chee ', 30, '1.2', 80.5, 1),
('Chee ', 31, '1.2', 80.5, 1),
('Chee ', 32, '1.2', 80.5, 1),
('Chee ', 33, '1.2', 80.5, 1),
('Chee ', 34, '1.2', 80.5, 1),
('Chee ', 35, '1.2', 80.5, 1),
('Chee ', 36, '1.2', 80.5, 1),
('Chee ', 37, '1.2', 80.5, 1),
('Chee ', 38, '1.2', 80.5, 1),
('Chee ', 39, '1.2', 80.5, 1),
('Chee ', 40, '1.2', 80.5, 1),
('Chee ', 41, '1.2', 80.5, 1),
('Chee ', 42, '1.2', 80.5, 1),
('Chee ', 43, '1.2', 80.5, 1),
('Chee ', 44, '1.2', 80.5, 1),
('Chee ', 45, '1.2', 80.5, 1),
('Chee ', 46, '1.2', 80.5, 1),
('Chee ', 47, '1.2', 80.5, 1),
('Chee ', 48, '1.2', 80.5, 1),
('Chee ', 49, '1.2', 80.5, 1),
('Chee ', 50, '1.2', 80.5, 1),
('Chee ', 51, '1.2', 80.5, 1),
('Chee ', 52, '1.2', 80.5, 1),
('Chee ', 53, '1.2', 80.5, 1),
('Chee', 54, '1.2', 80.5, 1),
('Chee', 55, '1.2', 80.5, 1),
('Chee', 56, '1.2', 80.5, 1),
('Chee', 57, '1.2', 80.5, 1),
('Chee', 58, '1.2', 80.5, 1),
('Chee', 59, '1.2', 80.5, 1),
('Chee', 60, '1.2', 80.5, 1),
('Chee', 61, '1.2', 80.5, 1),
('Chee', 62, '1.2', 80.5, 1),
('Chee', 63, '1.2', 80.5, 1),
('Chee', 64, '1.2', 80.5, 1),
('Chee', 65, '1.2', 80.5, 1),
('Chee', 66, '1.2', 80.5, 1),
('Chee', 67, '1.2', 80.5, 1),
('Chee', 68, '1.2', 80.5, 1),
('Chee', 69, '1.2', 80.5, 1),
('Chee', 70, '1.2', 80.5, 1),
('Chee', 71, '1.2', 80.5, 1),
('Chee', 72, '1.2', 80.5, 1),
('Chee', 73, '1.2', 80.5, 1),
('Chee', 74, '1.2', 80.5, 1),
('Chee', 75, '1.2', 80.5, 1),
('Chee', 76, '1.2', 80.5, 1),
('Chee', 77, '1.2', 80.5, 1),
('Chee', 78, '1.2', 80.5, 1),
('Chee', 79, '1.2', 80.5, 1),
('Chee', 80, '1.2', 80.5, 1),
('Chee', 81, '1.2', 80.5, 1),
('Chee', 97, '1.2', 80.5, 1),
('Chee', 98, '1.2', 80.5, 1),
('Chee', 99, '1.2', 80.5, 1),
('Chee', 100, '1.2', 80.5, 1),
('Chee', 101, '1.2', 80.5, 1),
('Chee', 127, '1.2', 80.5, 1),
('Chee', 128, '1.2', 80.5, 1),
('Chee', 129, '1.2', 80.5, 1),
('Chee', 130, '1.2', 80.5, 1),
('Chee', 131, '1.2', 80.5, 1),
('Chee', 132, '1.2', 80.5, 1),
('Chee', 133, '1.2', 80.5, 1),
('Chee', 134, '1.2', 80.5, 1),
('Chee', 136, '1.2', 88.2, 1),
('Chee', 137, '1.2', 102.1, 1),
('Chee', 138, '1.2', 80, 1),
('Chee', 139, '1.2', 80, 1),
('Chee', 140, '1.2', 80, 1),
('Chee', 141, '1.2', 80, 1),
('Chee', 142, '1.2', 80, 1),
('Chee', 143, '1.2', 80, 1),
('Chee', 144, '1.2', 80, 1),
('Chee', 145, '1.2', 80, 1),
('Chee', 146, '1.2', 80, 1),
('Chee', 147, '1.2', 80, 1),
('Chee', 148, '1.2', 80, 1),
('Chee', 149, '1.2', 80, 1),
('Chee', 150, '1.2', 80, 1),
('Chee', 151, '1.2', 80, 1),
('Chee', 152, '1.2', 80, 1),
('Chee', 153, '1.2', 80, 1),
('Chee', 154, '1.2', 80, 1),
('Chee', 155, '1.2', 80, 1),
('Chee', 156, '1.2', 80, 1),
('Chee', 157, '1.2', 80, 1),
('Chee', 158, '1.2', 80, 1),
('Chee', 159, '1.2', 80, 1),
('Chee', 160, '1.2', 80, 1),
('Chee', 161, '1.2', 80, 1),
('Chee', 162, '1.2', 80, 1),
('Chee', 163, '1.2', 80, 1),
('Chee', 164, '1.2', 80, 1),
('Chee', 165, '1.2', 80, 1),
('Chee', 166, '1.2', 80, 1),
('Chee', 167, '1.2', 80, 1),
('Chee', 168, '1.2', 105.5, 1),
('Chee', 169, '1.2', 105.5, 1),
('Chee', 170, '1.1', 105.5, 1),
('Chee', 176, '1.2', 95.2, 1),
('Chee', 177, '1.2', 95.2, 1),
('Chee', 184, '1.2', 80, 1),
('Chee', 185, '1.1', 80, 1),
('Chee', 189, '1.2', 80, 1),
('Chee', 190, '1.1', 80, 1),
('Chee', 191, '1.1', 80, 1),
('Chee', 192, '1.1', 80, 1),
('Chee', 193, '1.1', 80, 1),
('Chee', 194, '1.1', 80, 1),
('Chee', 195, '1.1', 80, 1),
('Chee', 196, '1.1', 80, 1),
('Chee', 197, '1.1', 80, 1),
('Chee', 198, '1.1', 80, 1),
('Chee', 199, '1.1', 80, 1),
('Chee', 200, '1.1', 80, 1),
('Chee', 201, '1.2', 80, 1),
('Chee', 202, '1.2', 80, 1),
('Chee', 203, '1.2', 80, 1),
('Chee', 204, '1.2', 80, 1),
('Chee', 205, '1.2', 80, 1),
('Chee', 206, '1.2', 80, 1),
('Chee', 207, '1.2', 80, 1),
('Chee', 208, '1.2', 80, 1),
('Chee', 209, '1.2', 80, 1),
('Chee', 210, '1.2', 80, 1),
('Chee', 211, '1.2', 80, 1),
('Chee', 212, '1.2', 80, 1),
('Chee', 213, '1.2', 80, 1),
('Chee', 214, '1.2', 80, 1),
('Chee', 215, '1.2', 80, 1),
('Chee', 216, '1.2', 80, 1),
('Chee', 217, '1.2', 80, 1),
('Chee', 218, '1.2', 80, 1),
('Chee', 219, '1.2', 80, 1),
('Chee', 220, '1.2', 80, 1),
('Chee', 221, '1.2', 80, 1),
('Chee', 222, '1.2', 80, 1),
('Chee', 223, '1.2', 80, 1),
('Chee', 224, '1.2', 80, 1),
('Chee', 225, '1.2', 80, 1),
('Chee', 226, '1.2', 80, 1),
('Chee', 227, '1.2', 80, 1),
('Chee', 228, '1.2', 80, 1),
('Chee', 229, '1.2', 80, 1),
('Chee', 230, '1.2', 80, 1),
('Chee', 231, '1.2', 80, 1),
('Chee', 232, '1.2', 80, 1),
('Chee', 233, '1.2', 80, 1),
('Chee', 236, '1.3', 99.6, 1),
('Chee', 237, '1.2', 80, 1),
('Chee', 238, '1.2', 80, 1),
('Chee', 239, '1.2', 80, 1),
('Chee', 240, '1.2', 80, 1),
('Chee', 241, '1.2', 80, 1),
('Chee', 242, '1.2', 80, 1),
('Chee', 243, '1.2', 80, 1),
('Chee', 244, '1.2', 80, 1),
('Chee', 245, '1.2', 80, 1),
('Chee', 246, '1.2', 80, 1),
('Chee', 247, '1.2', 80, 1),
('Chee', 248, '1.2', 80, 1),
('Chee', 249, '1.2', 80, 1),
('Chee', 250, '1.2', 80, 1),
('Chee', 251, '1.2', 80, 1),
('Chee', 252, '1.2', 80, 1),
('Chee', 253, '1.2', 80, 1),
('Chee', 254, '1.2', 80, 1),
('Chee', 255, '1.2', 80, 1),
('Chee', 256, '1.2', 80, 1),
('Chee', 257, '1.2', 80, 1),
('Chee', 258, '1.2', 80, 1),
('Chee', 259, '1.2', 80, 1),
('Chee', 260, '1.2', 80, 1),
('Chee', 261, '1.1', 80, 1),
('Chee', 262, '1.1', 80, 1),
('Chee', 263, '1.1', 80, 1),
('Chee', 264, '1.1', 80, 1),
('Chee', 265, '1.1', 80, 1),
('Chee', 266, '1.1', 80, 1),
('Chee', 267, '1.1', 80, 1),
('Chee', 268, '1.1', 80, 1),
('Chee', 269, '1.1', 80, 1),
('Chee', 270, '1.1', 80, 1),
('Chee', 271, '1.1', 80, 1),
('Chee', 272, '1.1', 80, 1),
('Chee', 273, '1.1', 80, 1),
('Chee', 274, '1.1', 80, 1),
('Chee', 275, '1.1', 80, 1),
('Chee', 276, '1.1', 80, 1),
('Chee', 277, '1.1', 80, 1),
('Chee', 278, '1.1', 80, 1),
('Chee', 279, '1.1', 80, 1),
('Chee', 280, '1.1', 80, 1),
('Chee', 281, '1.1', 80, 1),
('Chee', 282, '1.1', 80, 1),
('Chee', 283, '1.1', 80, 1),
('Chee', 284, '1.1', 80, 1),
('Chee', 285, '1.1', 80, 1),
('Chee', 286, '1.1', 80, 1),
('Chee', 287, '1.1', 80, 1),
('Chee', 288, '1.1', 80, 1),
('Chee', 289, '1.1', 80, 1),
('Chee', 290, '1.1', 80, 1),
('Chee', 291, '1.1', 80, 1),
('Chee', 292, '1.1', 80, 1),
('Chee', 293, '1.1', 80, 1),
('Chee', 295, '1.1', 80, 1),
('Chee', 296, '1.1', 80, 1),
('Chee', 297, '1.1', 80, 1),
('Chee', 298, '1.1', 80, 1),
('Chee', 299, '1.1', 80, 1),
('Chee', 300, '1.1', 80, 1),
('Chee', 301, '1.1', 80, 1),
('Chee', 302, '1.1', 80, 1),
('Chee', 303, '1.1', 80, 1),
('Chee', 304, '1.1', 118, 1),
('Chee', 306, '1.1', 115.6, 1),
('Chee', 307, '1.2', 118, 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Package_name` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `Time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Package_price` float NOT NULL,
  `Quantity_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Package_name`, `Time`, `Package_price`, `Quantity_in_stock`) VALUES
('1.1', 'Shopping Spree', '8.00am', 80, 15),
('1.2', 'Shopping Spree', '09.00am', 80, 15),
('1.3', 'Shopping Spree', '10.00am', 80, 15),
('2.2', 'Hello', '9.00am', 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) DEFAULT NULL,
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email`, `Phone`, `Address`, `City`, `State`, `Zip`, `Name_on_card`, `Payment_card`, `Expire_year`, `Expire_month`, `Password`, `Full_name`) VALUES
('Chee', '', 106638513, '23, Jalan Gaya 9', 'Ulu Tiram', 'Johor', '81800', 'Chee Jia Hong', '7190512065611510', '2022', 'January', '123', 'Chee Jia Hong'),
('zc', 'qw@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '');

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
  MODIFY `Food_order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `main_order`
--
ALTER TABLE `main_order`
  MODIFY `Main_order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `Has food` FOREIGN KEY (`Food_ID`) REFERENCES `food` (`Food_ID`);

--
-- Constraints for table `main_order`
--
ALTER TABLE `main_order`
  ADD CONSTRAINT `Has order` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON DELETE CASCADE,
  ADD CONSTRAINT `Package_Details` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
