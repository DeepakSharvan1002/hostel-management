-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 05:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boys_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_fees`
--

CREATE TABLE `ad_fees` (
  `appli_no` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `jan23` bigint(6) NOT NULL,
  `jan23status` bigint(2) NOT NULL,
  `feb23` bigint(6) NOT NULL,
  `feb23status` bigint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_fees`
--

INSERT INTO `ad_fees` (`appli_no`, `name`, `jan23`, `jan23status`, `feb23`, `feb23status`) VALUES
(82, 'a1 a2 a3', 0, 0, 0, 0),
(87, 'guna selan k', 0, 0, 0, 0),
(86, 'Deepak Sharvan S', 0, 0, 0, 0),
(85, 'd1 d2 d3', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appli_no` int(5) NOT NULL,
  `SFName` text DEFAULT NULL,
  `SMName` text NOT NULL,
  `SLName` text DEFAULT NULL,
  `FFName` text DEFAULT NULL,
  `FMName` text NOT NULL,
  `FLName` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `house_no` varchar(20) DEFAULT NULL,
  `area` text DEFAULT NULL,
  `street` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `pincode` bigint(6) DEFAULT NULL,
  `Sphone` bigint(10) DEFAULT NULL,
  `Fphone` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `religious` text DEFAULT NULL,
  `caste` text DEFAULT NULL,
  `nationality` text DEFAULT NULL,
  `aadhar` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appli_no`, `SFName`, `SMName`, `SLName`, `FFName`, `FMName`, `FLName`, `dob`, `house_no`, `area`, `street`, `state`, `district`, `pincode`, `Sphone`, `Fphone`, `email`, `status`, `religious`, `caste`, `nationality`, `aadhar`) VALUES
(82, 'a1', 'a2', 'a3', '\r\na4', 'a5', 'a6', '2023-02-22', 'a7', 'a8', 'a9', 'a10', 'a11', 654656, 9895921921, 9595959595, 'a@gmial.com', 'single', 'a12', 'a13', 'a14', 789545326559),
(83, 'b1', '', 'b2', '\r\nb3', '', 'b4', '2023-02-07', 'b5', 'b6', 'b7', 'b8', 'b9', 894894, 8441619196, 8870028390, 'b@gmail.com', 'Married', 'b10', 'b11', 'b12', 852963741456),
(84, 'c1', '', 'c2', '\r\nc3', '', 'c4', '2023-02-08', 'c5', 'c6', 'c7', 'c8', 'c9', 848464, 8849816516, 7886496165, 'c@gmial.com', 'single', 'c10', 'c11', 'c12', 658468986198),
(85, 'd1', 'd2', 'd3', '\r\nd4', '', 'd5', '2023-02-01', 'd6', 'd7', 'd8', 'd9', 'd10', 592952, 8978949865, 9787489654, 'd@gmail.com', 'single', 'd11', 'd12', 'd13', 789654636396),
(86, 'Deepak', 'Sharvan', 'S', '\r\nsundar', '', 'T', '2023-02-01', '2/24', 'anna nagar', 'kanakam paalaayam', 'tamil nadu', 'tirupur', 987456, 8845656262, 9047884219, 'deepak@gmial.com', 'single', 'christian', 'nill', 'indian', 787987987984),
(87, 'guna', 'selan', 'k', '\r\nkumar', 'raj', 'y', '2023-02-17', '4/65 u1', 'pandiyan nagar', '4th street', 'tamil nadu', 'namakal', 897495, 7418529638, 9541752852, 'gun@gmial.com', 'single', 'hindu', 'no', 'indian', 789645654195),
(88, 'sri', 'bhavan', 'k', '\r\nsri', 'daran', 's', '2023-02-10', '2/2', 'poiyam palayam', 'kumaran street', 'tamil nadu', 'salem', 654959, 9638527417, 8524598741, 'bhavan@gmail.com', 'Married', 'hindu', 'no', 'indian', 879798749849);

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `appli_no` varchar(5) NOT NULL,
  `pass` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`appli_no`, `pass`) VALUES
('82', '123456'),
('ADMIN', 'BH2@23');

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `appli_no` int(11) NOT NULL,
  `boys` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`appli_no`, `boys`) VALUES
(82, 1),
(83, 0),
(84, 0),
(85, 1),
(86, 1),
(87, 1),
(88, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appli_no`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`appli_no`);

--
-- Indexes for table `selected`
--
ALTER TABLE `selected`
  ADD PRIMARY KEY (`appli_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appli_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
