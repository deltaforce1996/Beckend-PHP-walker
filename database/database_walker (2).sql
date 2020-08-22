-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 05:54 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_walker`
--

-- --------------------------------------------------------

--
-- Table structure for table `templateslevel`
--

CREATE TABLE `templateslevel` (
  `LevelNumber` int(2) NOT NULL,
  `StepNumber` int(4) NOT NULL,
  `CounterTime` int(10) NOT NULL,
  `Distance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `templateslevel`
--

INSERT INTO `templateslevel` (`LevelNumber`, `StepNumber`, `CounterTime`, `Distance`) VALUES
(1, 8, 1500, 3),
(2, 15, 2000, 5),
(3, 22, 2500, 12),
(4, 29, 3000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tracing`
--

CREATE TABLE `tracing` (
  `Number` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL COMMENT 'อีเมล',
  `StepsNumber` int(10) NOT NULL COMMENT 'จำนวนก้าว',
  `Time` int(20) NOT NULL COMMENT 'เวลา',
  `Distance` int(3) NOT NULL COMMENT 'ระยะทาง',
  `Date` date NOT NULL COMMENT 'วันที่',
  `Level` int(2) NOT NULL COMMENT 'ระดับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tracing`
--

INSERT INTO `tracing` (`Number`, `Email`, `StepsNumber`, `Time`, `Distance`, `Date`, `Level`) VALUES
(5, 'Del@gmail.com', 0, 0, 0, '2018-11-24', 1),
(6, 'Acer@gmail.com', 0, 0, 0, '2018-11-24', 1),
(7, 'Acer@gmail.com', 15, 10, 14, '2018-11-24', 2),
(8, 'Acer@gmail.com', 22, 67, 21, '2018-11-24', 3),
(9, 'Del@gmail.com', 15, 15, 1, '2018-11-24', 2),
(10, 'Del@gmail.com', 22, 14, 3, '2018-11-24', 3),
(11, 'Del@gmail.com', 29, 17, 4, '2018-11-24', 4),
(12, 'Acer@gmail.com', 29, 16, 4, '2018-11-24', 4),
(13, 'Asus@gmail.com', 0, 0, 0, '2018-11-24', 1),
(37, 'Asus@gmail.com', 13, 12, 2, '2018-11-26', 1),
(38, 'Asus@gmail.com', 14, 17, 2, '2018-11-26', 1),
(39, 'Asus@gmail.com', 15, 12, 2, '2018-11-26', 2),
(47, 'Asus@gmail.com', 11, 16, 2, '2018-11-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `userID` int(50) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userEmail` varchar(40) NOT NULL,
  `userPass` varchar(6) NOT NULL,
  `userAge` int(3) NOT NULL,
  `userGender` varchar(8) NOT NULL,
  `userLevel` varchar(5) NOT NULL DEFAULT '1',
  `userImg` varchar(400) DEFAULT NULL,
  `deviceID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`userID`, `userName`, `userEmail`, `userPass`, `userAge`, `userGender`, `userLevel`, `userImg`, `deviceID`) VALUES
(68, 'del', 'Del@gmail.com', '123456', 55, 'MALE', '4', 'http://192.168.15.105/Test_php/uploadsImage/68.png', NULL),
(69, 'acer', 'Acer@gmail.com', '112233', 62, 'FEMALE', '4', 'http://192.168.15.105/Test_php/uploadsImage/69.png', NULL),
(70, 'Asus', 'Asus@gmail.com', '332211', 25, 'MALE', '2', 'http://192.168.15.105/Test_php/uploadsImage/70.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `templateslevel`
--
ALTER TABLE `templateslevel`
  ADD PRIMARY KEY (`LevelNumber`);

--
-- Indexes for table `tracing`
--
ALTER TABLE `tracing`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tracing`
--
ALTER TABLE `tracing`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
