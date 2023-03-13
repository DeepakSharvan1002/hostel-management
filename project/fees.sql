-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 08:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fees`
--

-- --------------------------------------------------------

--
-- Table structure for table `feb23`
--

CREATE TABLE `feb23` (
  `appli_no` bigint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `amount` bigint(6) DEFAULT NULL,
  `status` bigint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jan23`
--

CREATE TABLE `jan23` (
  `appli_no` bigint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `amount` bigint(6) DEFAULT NULL,
  `status` bigint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mar23`
--

CREATE TABLE `mar23` (
  `appli_no` bigint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `amount` bigint(6) DEFAULT NULL,
  `status` bigint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mar23`
--

INSERT INTO `mar23` (`appli_no`, `name`, `amount`, `status`) VALUES
(83, 'b1  b2', 3200, 0),
(84, 'c1  c2', 3200, 0),
(87, 'guna selan k', 3200, 0),
(88, 'sri bhavan k', 3200, 0),
(91, 'Johnson  Jeeva', 3200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `appli_no` bigint(6) NOT NULL,
  `date` date NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`appli_no`, `date`, `name`) VALUES
(83, '2023-03-12', 'b1  b2'),
(84, '2023-03-12', 'c1  c2'),
(87, '2023-03-12', 'guna selan k'),
(88, '2023-03-12', 'sri bhavan k'),
(91, '2023-03-12', 'Johnson  Jeeva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feb23`
--
ALTER TABLE `feb23`
  ADD PRIMARY KEY (`appli_no`);

--
-- Indexes for table `jan23`
--
ALTER TABLE `jan23`
  ADD PRIMARY KEY (`appli_no`);

--
-- Indexes for table `mar23`
--
ALTER TABLE `mar23`
  ADD PRIMARY KEY (`appli_no`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`appli_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
