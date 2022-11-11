-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 03:16 PM
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
-- Table structure for table `multilog`
--

CREATE TABLE `multilog` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` enum('Admin','Manager','Supplier','Delivery') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multilog`
--

INSERT INTO `multilog` (`user_id`, `name`, `user_name`, `password`, `repass`, `email`, `type`) VALUES
(12, 'KAZI REZAUL KARIM', 'Rezaul', '1234', '1234', 'rezaul123@gmail.com', 'Admin'),
(13, 'SHEULY AKTER', 'Sheuly', '1234', '1234', 'sheuly0181@gmail.com', 'Manager'),
(17, 'KAZI AHASANUL KARIM', 'Moin', '5678', '5678', 'mkazi1922@gmail.com ', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multilog`
--
ALTER TABLE `multilog`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `email` (`email`),
  ADD KEY `id` (`name`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multilog`
--
ALTER TABLE `multilog`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
