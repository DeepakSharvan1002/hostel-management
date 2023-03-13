-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 07:58 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pass`
--

CREATE TABLE `admin_pass` (
  `id` varchar(5) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_pass`
--

INSERT INTO `admin_pass` (`id`, `pass`) VALUES
('ADMIN', 'BH2@23');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appli_no` int(5) NOT NULL,
  `date` date DEFAULT NULL,
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

INSERT INTO `application` (`appli_no`, `date`, `SFName`, `SMName`, `SLName`, `FFName`, `FMName`, `FLName`, `dob`, `house_no`, `area`, `street`, `state`, `district`, `pincode`, `Sphone`, `Fphone`, `email`, `status`, `religious`, `caste`, `nationality`, `aadhar`) VALUES
(83, '2023-01-21', 'b1', '', 'b2', '\r\nb3', '', 'b4', '2023-02-07', 'b5', 'b6', 'b7', 'b8', 'b9', 894894, 8441619196, 8870028390, NULL, 'Married', 'b10', 'b11', 'b12', 852963741456),
(84, '2023-01-21', 'c1', '', 'c2', '\r\nc3', '', 'c4', '2023-02-08', 'c5', 'c6', 'c7', 'c8', 'c9', 848464, 8849816516, 7886496165, NULL, 'single', 'c10', 'c11', 'c12', 658468986198),
(87, '2023-02-06', 'guna', 'selan', 'k', '\r\nkumar', 'raj', 'y', '2023-02-17', '4/65 u1', 'pandiyan nagar', '4th street', 'tamil nadu', 'namakal', 897495, 7418529638, 9541752852, NULL, 'single', 'hindu', 'no', 'indian', 789645654195),
(88, '2023-02-09', 'sri', 'bhavan', 'k', '\r\nsri', 'daran', 's', '2023-02-10', '2/2', 'poiyam palayam', 'kumaran street', 'tamil nadu', 'salem', 654959, 9638527417, 8524598741, NULL, 'Married', 'hindu', 'no', 'indian', 879798749849),
(89, '2023-02-08', 'infant', '', 'tdytty', '\r\nraj', '', 'fbfdfg', '2023-02-01', 'hhedt', 'gts', 'srtwr', 'gdhgd', 'fgffd', 435211, 9346451452, 9548461949, NULL, 'single', 'ytf', 'vgfzgz', 'bfdfb', 454444444444),
(90, '2023-03-02', 'sriman ', 'subash', 'p', '\r\nfather', '', 'name', '2023-02-08', '2/3 nadf', 'ywvycbfuy', 'wefwiug8', 'weocfjiu', 'tri', 899444, 8484948484, 9878985955, 'sriman@gmail.com', 'Married', 'whvrfyuwg i', 'wjenu', ' wioefjiwo w', 684874513854),
(91, '2023-03-02', 'Johnson', '', 'Jeeva', '\r\nLukas', '', 'Divyanathan', '2003-08-10', 'EB:NO 1950', 'LALGUDI', 'KN GARDEN,MELAVALADI', 'TAMILNADU', 'TRICHY', 621218, 7339130312, 9843655358, 'johnsonjeevalukas@gmail.com', 'Married', 'Christian', 'nill', 'India', 538190217408);

-- --------------------------------------------------------

--
-- Table structure for table `compliant`
--

CREATE TABLE `compliant` (
  `appli_no` bigint(6) DEFAULT NULL,
  `compliant` varchar(50) DEFAULT NULL,
  `type_c` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `double_bed`
--

CREATE TABLE `double_bed` (
  `room_no` bigint(6) NOT NULL,
  `1st_person` bigint(3) NOT NULL,
  `2nd_person` bigint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `double_bed`
--

INSERT INTO `double_bed` (`room_no`, `1st_person`, `2nd_person`) VALUES
(101, 0, 0),
(102, 0, 0),
(103, 0, 0),
(104, 0, 0),
(105, 0, 0),
(106, 0, 0),
(107, 0, 0),
(108, 0, 0),
(109, 0, 0),
(110, 0, 0),
(111, 0, 0),
(112, 0, 0),
(113, 0, 0),
(114, 0, 0),
(115, 0, 0),
(116, 0, 0),
(117, 0, 0),
(118, 0, 0),
(119, 0, 0),
(120, 0, 0),
(121, 0, 0),
(122, 0, 0),
(123, 0, 0),
(124, 0, 0),
(125, 0, 0),
(126, 0, 0),
(127, 0, 0),
(128, 0, 0),
(129, 0, 0),
(130, 0, 0),
(131, 0, 0),
(132, 0, 0),
(133, 0, 0),
(134, 0, 0),
(135, 0, 0),
(136, 0, 0),
(137, 0, 0),
(138, 0, 0),
(139, 0, 0),
(140, 0, 0),
(141, 0, 0),
(142, 0, 0),
(143, 0, 0),
(144, 0, 0),
(145, 0, 0),
(146, 0, 0),
(147, 0, 0),
(148, 0, 0),
(149, 0, 0),
(150, 0, 0),
(151, 0, 0),
(152, 0, 0),
(153, 0, 0),
(154, 0, 0),
(155, 0, 0),
(156, 0, 0),
(157, 0, 0),
(158, 0, 0),
(159, 0, 0),
(160, 0, 0),
(161, 0, 0),
(162, 0, 0),
(163, 0, 0),
(164, 0, 0),
(165, 0, 0),
(166, 0, 0),
(167, 0, 0),
(168, 0, 0),
(169, 0, 0),
(170, 0, 0),
(171, 0, 0),
(172, 0, 0),
(173, 0, 0),
(174, 0, 0),
(175, 0, 0),
(176, 0, 0),
(177, 0, 0),
(178, 0, 0),
(179, 0, 0),
(180, 0, 0),
(181, 0, 0),
(182, 0, 0),
(183, 0, 0),
(184, 0, 0),
(185, 0, 0),
(186, 0, 0),
(187, 0, 0),
(188, 0, 0),
(189, 0, 0),
(190, 0, 0),
(191, 0, 0),
(192, 0, 0),
(193, 0, 0),
(194, 0, 0),
(195, 0, 0),
(196, 0, 0),
(197, 0, 0),
(198, 0, 0),
(199, 0, 0),
(200, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `appli_no` varchar(6) NOT NULL,
  `name` text NOT NULL,
  `amount` bigint(6) NOT NULL,
  `status` bigint(1) NOT NULL,
  `month` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`appli_no`, `name`, `amount`, `status`, `month`) VALUES
('83', 'b1  b2', 3200, 0, 'mar23');

-- --------------------------------------------------------

--
-- Table structure for table `leaveform`
--

CREATE TABLE `leaveform` (
  `appli_no` bigint(6) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `lfrom` date DEFAULT NULL,
  `lto` date DEFAULT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `left_student`
--

CREATE TABLE `left_student` (
  `appli_no` int(5) NOT NULL,
  `date` date DEFAULT NULL,
  `SFName` text DEFAULT NULL,
  `SMName` text DEFAULT NULL,
  `SLName` text DEFAULT NULL,
  `FFName` text DEFAULT NULL,
  `FMName` text DEFAULT NULL,
  `FLName` text DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `sno` bigint(6) NOT NULL,
  `month` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`sno`, `month`) VALUES
(1, 'mar23');

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
('83', '12345'),
('84', '12345'),
('87', '12345'),
('88', '12345'),
('91', '12345'),
('ADMIN', 'BH2@23');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `appli_no` bigint(6) DEFAULT NULL,
  `query` varchar(300) DEFAULT NULL,
  `ans` varchar(300) NOT NULL,
  `status` bigint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `appli_no` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `boys` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`appli_no`, `date`, `boys`) VALUES
(83, '2023-03-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `single_bed`
--

CREATE TABLE `single_bed` (
  `room_no` bigint(3) NOT NULL,
  `appli_no` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `single_bed`
--

INSERT INTO `single_bed` (`room_no`, `appli_no`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 0),
(82, 0),
(83, 0),
(84, 0),
(85, 0),
(86, 0),
(87, 0),
(88, 0),
(89, 0),
(90, 0),
(91, 0),
(92, 0),
(93, 0),
(94, 0),
(95, 0),
(96, 0),
(97, 0),
(98, 0),
(99, 0),
(100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `appli_no` bigint(6) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`appli_no`, `date`, `name`) VALUES
(83, '2023-03-12', 'b1  b2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appli_no`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- Indexes for table `double_bed`
--
ALTER TABLE `double_bed`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `left_student`
--
ALTER TABLE `left_student`
  ADD PRIMARY KEY (`appli_no`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`sno`);

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
-- Indexes for table `single_bed`
--
ALTER TABLE `single_bed`
  ADD PRIMARY KEY (`room_no`,`appli_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appli_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `double_bed`
--
ALTER TABLE `double_bed`
  MODIFY `room_no` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `sno` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `single_bed`
--
ALTER TABLE `single_bed`
  MODIFY `room_no` bigint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
