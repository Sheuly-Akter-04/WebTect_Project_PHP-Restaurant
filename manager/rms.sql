-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 03:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `userid` int(11) NOT NULL,
  `netb` varchar(250) CHARACTER SET latin1 NOT NULL,
  `credit` varchar(250) CHARACTER SET latin1 NOT NULL,
  `withdraw` varchar(250) CHARACTER SET latin1 NOT NULL,
  `arrears` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `netb`, `credit`, `withdraw`, `arrears`) VALUES
(1, '12000', '9000', '2000', '1000'),
(2, '9000', '4000', '2500', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `userid` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`userid`, `name`, `username`, `email`, `phone`, `address`) VALUES
(2, 'Test', 'Test', 'test@gmail.com', '017xxxxxxxx', 'Dhaka'),
(4, 'Nishat', 'Nishat', 'n@gmail.com', '018000000000', 'Jatrabari');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `userid` int(15) NOT NULL,
  `pname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `have` varchar(255) CHARACTER SET latin1 NOT NULL,
  `exdate` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`userid`, `pname`, `have`, `exdate`) VALUES
(1, 'Rice', '20 kg', '27-04-22'),
(2, 'Water', '12 bottle', '24-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `userid` int(15) NOT NULL,
  `pname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` varchar(255) CHARACTER SET latin1 NOT NULL,
  `quantity` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ddate` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dtime` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `userid` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`userid`, `name`, `username`, `email`, `phone`, `address`) VALUES
(2, 'Test1', 'testuser1', 'test@gmail.com', '017xxxxxxxx', 'Dhaka'),
(4, 'zaman', 'zaman', 'zaman@gmail.com', '018000000000', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `username`, `password`, `repassword`, `gender`, `dob`) VALUES
(2, 'sheuly', 'sheuly@gmail.com', 'sheuly', '123', '123', 'Female', '2000-01-07'),
(4, 'Manager', 'manager@gmail.com', 'Manager', '1234', '1234', 'Female', '1999-09-02'),
(5, 'manager1', 'manager2@gmil.com', 'manager1', '123', '123', 'Female', '1999-07-19'),
(6, 'Nishat', 'n@gmail.com', 'Nishat', '123', '123', 'Female', '2006-12-12'),
(8, 'manager2', 'm@gmail.com', 'manager2', '123', '123', 'Female', '2021-04-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
