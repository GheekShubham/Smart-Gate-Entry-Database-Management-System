-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 03:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Phone`, `Password`) VALUES
(73, 'Sanskar', 88402545, 'Sri'),
(83, 'Shubham', 82174860, 'Arora');

-- --------------------------------------------------------

--
-- Table structure for table `authorized`
--

CREATE TABLE `authorized` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Phone` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authorized`
--

INSERT INTO `authorized` (`id`, `Name`, `Category`, `Gender`, `Phone`) VALUES
(73, 'Sanskar', 'Student', 'M', 821748),
(83, 'Shubham', 'Student', 'M', 4563215),
(200, 'Vijay', 'Faculty', 'M', 456215),
(202, 'Satish', 'Faculty', 'M', 986215);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `Comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Comment`) VALUES
('', '', '', ''),
('Lori Srivastava', 'Lori@gmail.com', 'Feedback', 'Wonderful...'),
('Papu', 'Papu@gmail.com', 'Job seeker', 'I want job'),
('Sriyansh', 'Sriyansh@gmail.com', 'About Guard', 'Guard was not there '),
('Supriya', 'Sup@gmail.com', 'Com', 'Good '),
('Suraj', 'suraj1997@gmail.com', 'Guard Behavior', 'He treated very badl'),
('Suresh', 'Suresh@gmail.com', 'change of password', 'I want to change my password.');

-- --------------------------------------------------------

--
-- Table structure for table `gate`
--

CREATE TABLE `gate` (
  `GateNo` int(5) NOT NULL,
  `GateName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gate`
--

INSERT INTO `gate` (`GateNo`, `GateName`) VALUES
(100, 'Main Gate'),
(101, 'Back Gate');

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE `guard` (
  `Guardid` int(20) NOT NULL,
  `GuardName` varchar(20) DEFAULT NULL,
  `GuardGender` varchar(5) DEFAULT NULL,
  `GuardPhone` int(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`Guardid`, `GuardName`, `GuardGender`, `GuardPhone`, `Password`) VALUES
(401, 'Suresh', 'M', 54164455, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `Guestid` int(20) NOT NULL,
  `GuestName` varchar(20) DEFAULT NULL,
  `GuestGender` varchar(5) DEFAULT NULL,
  `GuestPhone` int(20) DEFAULT NULL,
  `Referenceid` int(20) DEFAULT NULL,
  `Purpose` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`Guestid`, `GuestName`, `GuestGender`, `GuestPhone`, `Referenceid`, `Purpose`) VALUES
(11, 'Sunil', 'O', 452361, 83, 'hilna'),
(12, 'raunak', 'm', 93937833, 73, 'anything'),
(13, 'punkaj', 'm', 2147483647, 73, 'hsihshk'),
(21, 'Mukesh', 'M', 2147483647, 83, 'Meet'),
(22, 'Lori Srivastava', 'F', 2147483647, 73, 'Sis');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `Guestid` int(20) NOT NULL,
  `GuestName` varchar(20) NOT NULL,
  `Guardid` int(20) NOT NULL,
  `GateNo` int(5) NOT NULL,
  `Login` datetime DEFAULT current_timestamp(),
  `LogOut` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Guestid`, `GuestName`, `Guardid`, `GateNo`, `Login`, `LogOut`) VALUES
(11, 'Sunil', 401, 100, '2019-12-08 12:00:23', '2019-12-08 12:25:59'),
(12, 'raunak', 401, 100, '2019-12-08 12:26:57', '2019-12-08 12:27:56'),
(13, 'punkaj', 401, 100, '2019-12-08 12:27:21', '2019-12-08 12:27:35'),
(21, 'Mukesh', 401, 100, '2019-12-11 17:52:35', '2019-12-12 01:34:21'),
(22, 'Lori Srivastava', 401, 100, '2019-12-12 01:33:57', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_logs`
-- (See below for the actual view)
--
CREATE TABLE `v_logs` (
`Guestid` int(20)
,`GuestName` varchar(20)
,`Guardid` int(20)
,`GateNo` int(5)
,`Login` datetime
,`LogOut` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `v_logs`
--
DROP TABLE IF EXISTS `v_logs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_logs`  AS  select `l`.`Guestid` AS `Guestid`,`g`.`GuestName` AS `GuestName`,`l`.`Guardid` AS `Guardid`,`l`.`GateNo` AS `GateNo`,`l`.`Login` AS `Login`,`l`.`LogOut` AS `LogOut` from (`guest` `g` join `logs` `l`) where `l`.`Guestid` = `g`.`Guestid` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorized`
--
ALTER TABLE `authorized`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Name`,`Email`);

--
-- Indexes for table `gate`
--
ALTER TABLE `gate`
  ADD PRIMARY KEY (`GateNo`);

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
  ADD PRIMARY KEY (`Guardid`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`Guestid`),
  ADD KEY `Referenceid` (`Referenceid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Guestid`,`Guardid`,`GateNo`),
  ADD KEY `Guardid` (`Guardid`),
  ADD KEY `GateNo` (`GateNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `Guestid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`Referenceid`) REFERENCES `authorized` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`Guestid`) REFERENCES `guest` (`Guestid`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`Guardid`) REFERENCES `guard` (`Guardid`),
  ADD CONSTRAINT `logs_ibfk_3` FOREIGN KEY (`GateNo`) REFERENCES `gate` (`GateNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
