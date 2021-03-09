-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 10:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Food_ID` int(5) NOT NULL,
  `Food_Name` varchar(13) COLLATE utf8_bin NOT NULL,
  `Food_Description` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Food_ID`, `Food_Name`, `Food_Description`) VALUES
(1, 'ต้มยำกุ้ง', 'อาหารประเภทต้มยำ'),
(2, 'ส้มตำ', '1 000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `Recipe_ID` int(5) NOT NULL,
  `USER_ACCOUNT` varchar(13) COLLATE utf8_bin NOT NULL,
  `Food_ID` int(5) NOT NULL,
  `Ingredient` text COLLATE utf8_bin NOT NULL,
  `How_to_Cook` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`Recipe_ID`, `USER_ACCOUNT`, `Food_ID`, `Ingredient`, `How_to_Cook`) VALUES
(1, '10', 1, 'ก้ง\r\nตะไคร้ ข่า มะกรุด\r\nพริก\r\nหัวหอม', '1 0000000000000000\r\n2 1111111111111111\r\n3 00000000000000000'),
(2, '10', 2, '0000000000000', '000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TYPE_ID` int(3) NOT NULL,
  `TYPE_DESCRIPTION` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TYPE_ID`, `TYPE_DESCRIPTION`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(5) NOT NULL,
  `USER_ACCOUNT` varchar(13) COLLATE utf8_bin NOT NULL,
  `USER_NAME` varchar(100) COLLATE utf8_bin NOT NULL,
  `PASS` varchar(100) COLLATE utf8_bin NOT NULL,
  `IMAGE` mediumblob NOT NULL,
  `TYPE` int(3) NOT NULL,
  `TIME_CREATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_ACCOUNT`, `USER_NAME`, `PASS`, `IMAGE`, `TYPE`, `TIME_CREATE`) VALUES
(20, 'Admin', 'Admin', '202cb962ac59075b964b07152d234b70', '', 1, '2021-03-02 08:33:03'),
(21, 'user', 'user', '202cb962ac59075b964b07152d234b70', '', 0, '2021-03-02 08:33:31'),
(22, '11111', '1111', '96e79218965eb72c92a549dd5a330112', '', 0, '2021-03-02 08:56:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`Recipe_ID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `USER_ACCOUNT` (`USER_ACCOUNT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Food_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `Recipe_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `TYPE_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
