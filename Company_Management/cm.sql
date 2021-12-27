-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 10:35 PM
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
-- Database: `cm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_main`
--

CREATE TABLE `ad_main` (
  `id` int(6) UNSIGNED NOT NULL,
  `ad_name` varchar(50) DEFAULT NULL,
  `ad_pass` varchar(50) DEFAULT NULL,
  `ad_city` varchar(50) DEFAULT NULL,
  `ad_email` varchar(50) DEFAULT NULL,
  `ad_mobno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_main`
--

INSERT INTO `ad_main` (`id`, `ad_name`, `ad_pass`, `ad_city`, `ad_email`, `ad_mobno`) VALUES
(1, 'Admin', 'vedant', 'Amravati', 'admin@gmail.com', '8149336088');

-- --------------------------------------------------------

--
-- Table structure for table `clt`
--

CREATE TABLE `clt` (
  `clt_id` int(6) UNSIGNED NOT NULL,
  `clt_name` varchar(50) DEFAULT NULL,
  `clt_address` varchar(50) DEFAULT NULL,
  `clt_mobno` bigint(20) DEFAULT NULL,
  `clt_branch` varchar(50) DEFAULT NULL,
  `clt_work` varchar(50) DEFAULT NULL,
  `clt_email` varchar(50) DEFAULT NULL,
  `emp_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clt`
--

INSERT INTO `clt` (`clt_id`, `clt_name`, `clt_address`, `clt_mobno`, `clt_branch`, `clt_work`, `clt_email`, `emp_id`) VALUES
(1, 'Dunmore Highschool', 'Singapore', 1111111111, 'IT', 'Pending', 'dunmorehighschool@gmail.com', 2),
(2, 'Lackawana Country', 'India', 1212121212, 'IT', 'Pending', 'lackwana@gmail.com', 2),
(3, 'FedEx', 'US', 7878787878, 'FIN', 'Pending', 'fedex@gmail.com', 1),
(4, 'John Daly Law, LLC', 'Nepal', 1234567890, 'MRK', 'Done', 'johndaly@gmail.com', 3),
(5, 'Scranton Whitepages', 'China', 3030303030, 'IT', 'Pending', 'scranton@gmail.com', 2),
(6, 'Times Newspaper', 'Canada', 8989898989, 'MRK', 'Done', 'timesnews@gmail.com', 3),
(7, 'HAcomp', 'Mexico', 5656565656, 'IT', 'Done', 'HAComp@gmail.com', 1),
(9, 'democlient', 'demo', 1234567891, 'IT', 'Pending', 'demo@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(6) UNSIGNED NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_pass` varchar(50) DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `emp_mobno` bigint(20) DEFAULT NULL,
  `emp_joining` date DEFAULT NULL,
  `emp_salary` bigint(20) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_pass`, `emp_address`, `emp_mobno`, `emp_joining`, `emp_salary`, `emp_email`) VALUES
(1, 'Vedant Garode', '100', 'Pune', 8149336088, '2020-06-25', 8900000, 'vedantgarode11@gmail.com'),
(2, 'Angelia Martin', '101', 'Pune', 8237456712, '1971-06-25', 63000, 'angeliamartin@gmail.com'),
(3, 'Kelly Kapoor', '102', 'Pune', 3445634523, '1980-02-05', 55000, 'kellykapoor@gmail.com'),
(4, 'Stanley Hudson', '103', 'Pune', 2345678901, '1958-02-19', 69000, 'stanleyhudson@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_main`
--
ALTER TABLE `ad_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clt`
--
ALTER TABLE `clt`
  ADD PRIMARY KEY (`clt_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_main`
--
ALTER TABLE `ad_main`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clt`
--
ALTER TABLE `clt`
  MODIFY `clt_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
