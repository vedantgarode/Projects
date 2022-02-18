-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 04:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `cus_id` int(6) UNSIGNED NOT NULL,
  `cus_name` varchar(50) DEFAULT NULL,
  `cus_mobno` bigint(20) DEFAULT NULL,
  `cus_balance` bigint(20) DEFAULT NULL,
  `cus_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`cus_id`, `cus_name`, `cus_mobno`, `cus_balance`, `cus_email`) VALUES
(1, 'Vedant', 12345677890, 100000, 'vedant@gmail.com'),
(2, 'Raj', 1234523542, 20000, 'raj@gmail.com'),
(3, 'John', 1122334455, 12000, 'john@gmail.com'),
(4, 'Rin', 1112223331, 23000, 'rin@gmail.com'),
(5, 'Sasuke', 1111222211, 400000, 'sasuke@gmail.com'),
(6, 'emma', 1111122222, 122000, 'emma@gmail.com'),
(7, 'Cris', 2222211111, 100000, 'cris@gmail.com'),
(8, 'Popa', 9876543210, 42000, 'Popa@gmail.com'),
(9, 'Tom', 7878787878, 25000, 'tom@gmail.com'),
(10, 'Jerry', 1231231231, 350000, 'jerry@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sender` int(11) NOT NULL,
  `Receiver` int(11) NOT NULL,
  `Amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `cus_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
