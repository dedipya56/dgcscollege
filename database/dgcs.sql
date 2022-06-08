-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 10:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(6) NOT NULL,
  `admin_password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
('admin1', 'admin_01'),
('admin2', 'admin_02');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `branch` varchar(50) NOT NULL,
  `fees` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`branch`, `fees`) VALUES
('CHEMICAL ENGINEERING', 12000),
('CIVIL ENGINEERING', 15000),
('COMPUTER SCIENCE ENGINEERING', 20000),
('ELECTRICAL AND ELECTRONICS ENGINEERING', 17000),
('ELECTROICS AND COMMUNICATION ENGINEERING', 16000),
('INFORMATION TECHNOLOGY ENGINEERING', 25000),
('MECHANICAL ENGINEERING', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `email_id` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `expiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `schoolName` varchar(255) DEFAULT NULL,
  `tenthPercentage` varchar(4) NOT NULL,
  `InterCollege` varchar(50) NOT NULL,
  `InterMarks` varchar(4) NOT NULL,
  `DOB` date NOT NULL,
  `gender` text NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year_join` year(4) NOT NULL,
  `yearOfStudying` int(1) NOT NULL,
  `EamcetRank` int(10) NOT NULL,
  `total_fee` int(11) NOT NULL,
  `fee_paid` int(11) NOT NULL,
  `email_id` varchar(254) NOT NULL,
  `address` varchar(255) NOT NULL,
  `picsource` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `password`, `FirstName`, `LastName`, `fatherName`, `motherName`, `schoolName`, `tenthPercentage`, `InterCollege`, `InterMarks`, `DOB`, `gender`, `branch`, `year_join`, `yearOfStudying`, `EamcetRank`, `total_fee`, `fee_paid`, `email_id`, `address`, `picsource`) VALUES
(3191001, 'lahari01', 'lahari', 'pachipulusula', 'satyanarayana', 'ramavathi', 'oxford high school                                ', '85%', 'Sri Chaitanya Jr College', '90%', '2002-06-05', 'female', 'INFORMATION TECHNOLOGY ENGINEERING', 2019, 3, 10000, 25000, 15000, 'pachipulusula@gmail.com', 'D.no:10-5-34,kalyani nagar,gajuwaka,visakhapatnam', 'photos/student2.png'),
(3191002, 'krishna02', 'krishna', 'gantala', 'srinivas', 'padmavathi', 'sfs high school                        ', '74%', 'Sri Gayathri Jr College', '80%', '2002-04-10', 'male', 'COMPUTER SCIENCE ENGINEERING', 2020, 2, 2000, 20000, 18000, 'gantala@gmail.com', 'D.no:112-2332-3,kailash nagar,yendada,visakhapatnam', 'photos/boy1.png'),
(3191003, 'harry03', 'Harry', 'Potter', 'james', 'lilly', 'Hogwarts school                        ', '90%', 'st joseph college', '80%', '2000-05-14', 'male', 'CHEMICAL ENGINEERING', 0000, 0, 20000, 12000, 25000, 'dedipya0506@gmail.com', 'Dno: 4-56-56 ,ashok nagar,hyderabad.', 'photos/boy2.jpg'),
(3191004, 'james04', 'James', 'gobi', 'satyanarayana', 'ramavathi', 'oxford high school                        ', '85%', 'Sri Chaitanya Jr College', '90%', '2002-06-05', 'female', 'INFORMATION TECHNOLOGY ENGINEERING', 0000, 0, 10000, 25000, 25000, 'jamesgobi@gmail.com', 'D.no:11-5-34,kalyani nagar,gajuwaka,visakhapatnam', 'photos/student1.png'),
(3191005, 'ganesh05', 'Ganesh', 'Devudu', 'Shiva', 'Parvathi', 'Hogwarts school                        ', '74%', 'sri chaitanya jr college', '86%', '2000-06-07', 'male', 'ELECTRICAL AND ELECTRONICS ENGINEERING', 0000, 0, 15000, 17000, 25000, 'ganesh@gmail.com', '', 'photos/boy3.jpg'),
(3191006, 'hari06', 'Hari', 'Kovvuri', 'Madhu', 'Keerthi', 'Oxford EM High School                ', '89%', 'Gayathri jr college', '81%', '2001-11-23', 'male', 'ELECTROICS AND COMMUNICATION ENGINEERING', 0000, 0, 20000, 16000, 25000, 'hari06@gmail.com', 'kokatha', 'photos/admin1.jpg'),
(3191007, 'harisha07', 'Harisha', 'puthaboyina', 'Harsha', 'Ramani', 'SFS school        ', '78%', 'ST Ans college', '81%', '2000-12-16', 'female', 'MECHANICAL ENGINEERING', 0000, 0, 50000, 18000, 25000, 'harisha23@gmail.com', '', 'photos/student2.png');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `student_id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL DEFAULT '1',
  `due` int(11) NOT NULL DEFAULT 0,
  `payment_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`student_id`, `year`, `due`, `payment_id`) VALUES
(3191001, '3', 10000, 'MOJO2119N05N53414631'),
(3191003, '1', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD UNIQUE KEY `branch` (`branch`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD KEY `id` (`email_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD UNIQUE KEY `student_id_2` (`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `attendance`.`subjects` (`Branch`);

--
-- Constraints for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `reset_password_ibfk_1` FOREIGN KEY (`email_id`) REFERENCES `student_details` (`email_id`);

--
-- Constraints for table `year`
--
ALTER TABLE `year`
  ADD CONSTRAINT `year_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
