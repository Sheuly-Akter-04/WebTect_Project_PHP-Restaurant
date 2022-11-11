-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 03:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `veg` varchar(100) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `pro` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `spi` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `veg`, `q1`, `pro`, `q2`, `spi`, `q3`) VALUES
(1, 'Potato', '10 KG', 'Beef', '15 KG', 'Chili-powder', '100 GM'),
(3, 'Carrot', '8 KG', 'Mutton', '6 KG', 'Turmeric-powder', '150 GM'),
(5, 'Papaya', '3 KG', 'Rui-fish', '4 KG', 'Garam-masala', '50 GM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `veg` (`veg`),
  ADD KEY `q1` (`q1`),
  ADD KEY `pro` (`pro`),
  ADD KEY `q2` (`q2`),
  ADD KEY `spi` (`spi`),
  ADD KEY `q3` (`q3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
