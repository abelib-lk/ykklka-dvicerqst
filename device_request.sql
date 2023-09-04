-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 04:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `device_request`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `DepartmentID` int(2) NOT NULL,
  `DepartmentName` text NOT NULL,
  `HeadOfDepartment` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Departments with HOD email address';

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`DepartmentID`, `DepartmentName`, `HeadOfDepartment`, `Email`) VALUES
(1, 'Finance', 'Mr. Amal Perera', 'amal_p@domain.com'),
(2, 'Dispatch', 'Mrs.Tharanga ', 'tharanga@domain.com'),
(101, 'Utility', 'Mr.Chandana', 'chandana@domain.com'),
(102, 'MF Chanin', 'Mr. Benadict', 'benadict@domain.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `EPFNo` int(4) NOT NULL,
  `FristName` varchar(12) NOT NULL,
  `LastName` varchar(18) NOT NULL,
  `DepartmentID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='employers'' details with unique epf';

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`EPFNo`, `FristName`, `LastName`, `DepartmentID`) VALUES
(1, 'Request', 'Employer1', 1),
(2, 'Request', 'Employer2', 2),
(101, 'Request', 'Employer3', 2),
(102, 'Request', 'Employer4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`EPFNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
