-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 11:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textilegarmentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_hours` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `work_othours` int(11) NOT NULL,
  `basic_pay` double NOT NULL,
  `allowances` double NOT NULL,
  `earinings` double NOT NULL,
  `deductions` double NOT NULL,
  `net_salary` double NOT NULL,
  `total_salary` double NOT NULL,
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `user_name`, `email`, `work_hours`, `password`, `firstname`, `lastname`, `work_othours`, `basic_pay`, `allowances`, `earinings`, `deductions`, `net_salary`, `total_salary`, `join_date`) VALUES
(1, 4292, 'chathuu', 'chathurangapriyadarshana29@gmail.com', 765906262, 'Cc2000@@', 'chathu', 'perera', 23, 0, 0, 150, 56, 0, 0, NULL),
(2, 5073700692, 'sakila', 'sakila@gmail.com', 35, 'Sakila123', 'sakila', 'athapaththu', 10, 1000, 10, 170, 55, 100, 1000, '2023-06-01'),
(4, 1534408141965486, 'admin', 'kalana@gmail.com', 765906262, 'Cc2000@', 'kalana', 'kasun', 27, 0, 0, 160, 50, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `holidaydetails`
--

CREATE TABLE `holidaydetails` (
  `ID` int(11) NOT NULL,
  `Holiday_Name` text NOT NULL,
  `Date` date NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holidaydetails`
--

INSERT INTO `holidaydetails` (`ID`, `Holiday_Name`, `Date`, `Status`) VALUES
(2, 'Vesak Poya Day', '2023-06-16', 'Full Day'),
(3, 'New year\'s Day', '2023-06-16', 'Full Day'),
(5, 'Poson Poya Day', '2023-06-03', 'Full Day'),
(6, 'Chrismas Day', '2023-12-25', 'Full Day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidaydetails`
--
ALTER TABLE `holidaydetails`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `holidaydetails`
--
ALTER TABLE `holidaydetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
