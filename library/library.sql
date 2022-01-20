--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `b_id` int(6) UNSIGNED NOT NULL,
  `s_roll` int(11) DEFAULT NULL,
  `s_class` varchar(10) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `b_name` varchar(50) DEFAULT NULL,
  `b_author` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`b_id`, `s_roll`, `s_class`, `issue_date`, `return_date`, `b_name`, `b_author`) VALUES
(101, 1, '5th', '2021-11-17', '2021-11-26', 'kj', 'jhb');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(6) UNSIGNED NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL,
  `staff_phn` bigint(20) DEFAULT NULL,
  `staff_pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_name`, `staff_phn`, `staff_pass`) VALUES
(1, 'admin', 8765432190, 'nikki');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) UNSIGNED NOT NULL,
  `stud_roll` int(11) DEFAULT NULL,
  `stud_name` varchar(50) DEFAULT NULL,
  `stud_class` varchar(10) DEFAULT NULL,
  `stud_phn` bigint(20) DEFAULT NULL,
  `stud_addr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stud_roll`, `stud_name`, `stud_class`, `stud_phn`, `stud_addr`) VALUES
(1, 1, 'nikitaa', '5th', 9876543210, 'solapur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `b_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
