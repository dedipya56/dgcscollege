-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 10:11 AM
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
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date`) VALUES
('2021-12-01'),
('2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `branch` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `101` tinyint(1) NOT NULL DEFAULT 0,
  `102` tinyint(1) NOT NULL DEFAULT 0,
  `103` tinyint(1) NOT NULL DEFAULT 0,
  `104` tinyint(1) NOT NULL DEFAULT 0,
  `105` tinyint(1) NOT NULL DEFAULT 0,
  `106` tinyint(1) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`branch`, `date`, `student_id`, `101`, `102`, `103`, `104`, `105`, `106`, `total`) VALUES
('INFORMATION TECHNOLOGY ENGINEERING', '2021-12-01', 3191001, 1, 1, 1, 1, 1, 0, 5),
('COMPUTER SCIENCE ENGINEERING', '2021-12-01', 3191002, 1, 0, 1, 1, 1, 1, 5),
('INFORMATION TECHNOLOGY ENGINEERING', '2021-12-01', 3191004, 1, 1, 0, 1, 0, 1, 4),
('INFORMATION TECHNOLOGY ENGINEERING', '2021-12-02', 3191001, 1, 1, 0, 1, 1, 1, 5),
('INFORMATION TECHNOLOGY ENGINEERING', '2021-12-02', 3191004, 1, 0, 0, 1, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `201` tinyint(1) NOT NULL DEFAULT 0,
  `202` tinyint(1) NOT NULL DEFAULT 0,
  `203` tinyint(1) NOT NULL DEFAULT 0,
  `204` tinyint(1) NOT NULL DEFAULT 0,
  `205` tinyint(1) NOT NULL DEFAULT 0,
  `206` tinyint(1) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`branch`, `date`, `student_id`, `201`, `202`, `203`, `204`, `205`, `206`, `total`) VALUES
('INFORMATION TECHNOLOGY ENGINEERING', '2021-12-01', 3191001, 1, 1, 1, 1, 1, 1, 6),
('COMPUTER SCIENCE ENGINEERING', '2021-12-02', 3191002, 0, 1, 1, 0, 1, 0, 3),
('COMPUTER SCIENCE ENGINEERING', '2021-12-01', 3191002, 1, 1, 1, 1, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `301` tinyint(1) NOT NULL,
  `302` tinyint(1) NOT NULL,
  `303` tinyint(1) NOT NULL,
  `304` tinyint(1) NOT NULL,
  `305` tinyint(1) NOT NULL,
  `306` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `401` tinyint(1) NOT NULL,
  `402` tinyint(1) NOT NULL,
  `403` tinyint(1) NOT NULL,
  `404` tinyint(1) NOT NULL,
  `405` tinyint(1) NOT NULL,
  `406` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `501` tinyint(1) NOT NULL,
  `502` tinyint(1) NOT NULL,
  `503` tinyint(1) NOT NULL,
  `504` tinyint(1) NOT NULL,
  `505` tinyint(1) NOT NULL,
  `506` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `601` tinyint(1) NOT NULL,
  `602` tinyint(1) NOT NULL,
  `603` tinyint(1) NOT NULL,
  `604` tinyint(1) NOT NULL,
  `605` tinyint(1) NOT NULL,
  `606` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `701` tinyint(1) NOT NULL,
  `702` tinyint(1) NOT NULL,
  `703` tinyint(1) NOT NULL,
  `704` tinyint(1) NOT NULL,
  `705` tinyint(1) NOT NULL,
  `706` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `branch` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `801` tinyint(1) NOT NULL,
  `802` tinyint(1) NOT NULL,
  `803` tinyint(1) NOT NULL,
  `804` tinyint(1) NOT NULL,
  `805` tinyint(1) NOT NULL,
  `806` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Branch` varchar(50) NOT NULL,
  `101` text NOT NULL,
  `102` text NOT NULL,
  `103` text NOT NULL,
  `104` text NOT NULL,
  `105` text NOT NULL,
  `106` text NOT NULL,
  `201` text NOT NULL,
  `202` text NOT NULL,
  `203` text NOT NULL,
  `204` text NOT NULL,
  `205` text NOT NULL,
  `206` text NOT NULL,
  `301` text NOT NULL,
  `302` text NOT NULL,
  `303` text NOT NULL,
  `304` text NOT NULL,
  `305` text NOT NULL,
  `306` text NOT NULL,
  `401` text NOT NULL,
  `402` text NOT NULL,
  `403` text NOT NULL,
  `404` text NOT NULL,
  `405` text NOT NULL,
  `406` text NOT NULL,
  `501` text NOT NULL,
  `502` text NOT NULL,
  `503` text NOT NULL,
  `504` text NOT NULL,
  `505` text NOT NULL,
  `506` text NOT NULL,
  `601` text NOT NULL,
  `602` text NOT NULL,
  `603` text NOT NULL,
  `604` text NOT NULL,
  `605` text NOT NULL,
  `606` text NOT NULL,
  `701` text NOT NULL,
  `702` text NOT NULL,
  `703` text NOT NULL,
  `704` text NOT NULL,
  `705` text NOT NULL,
  `706` text NOT NULL,
  `801` text NOT NULL,
  `802` text NOT NULL,
  `803` text NOT NULL,
  `804` text NOT NULL,
  `805` text NOT NULL,
  `806` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Branch`, `101`, `102`, `103`, `104`, `105`, `106`, `201`, `202`, `203`, `204`, `205`, `206`, `301`, `302`, `303`, `304`, `305`, `306`, `401`, `402`, `403`, `404`, `405`, `406`, `501`, `502`, `503`, `504`, `505`, `506`, `601`, `602`, `603`, `604`, `605`, `606`, `701`, `702`, `703`, `704`, `705`, `706`, `801`, `802`, `803`, `804`, `805`, `806`) VALUES
('CHEMICAL ENGINEERING', 'M1', 'M2', 'English', 'Chemistry', 'clang', 'clab', 'M3', 'Physics', 'ED', 'EIT', 'PhysicsLab', 'workshop', 'CHE301', 'CHE302', 'CHE303', 'CHE304', 'CHE305', 'CHE306', 'CHE401', 'CHE402', 'CHE403', 'CHE404', 'CHE405', 'CHE406', 'CHE501', 'CHE502', 'CHE503', 'CHE504', 'CHE505', 'CHE506', 'CHE601', 'CHE602', 'CHE603', 'CHE604', 'CHE605', 'CHE606', 'CHE701', 'CHE702', 'CHE703', 'CHE704', 'CHE705', 'CHE706', 'CHE801', 'CHE802', 'CHE803', 'CHE804', 'CHE805', 'CHE806'),
('CIVIL ENGINEERING', 'M1', 'M2', 'English', 'Chemistry', 'clang', 'clab', 'M3', 'Physics', 'ED', 'EIT', 'PhysicsLab', 'workshop', 'CIV301', 'CIV302', 'CIV303', 'CIV304', 'CIV305', 'CIV306', 'CIV401', 'CIV402', 'CIV403', 'CIV404', 'CIV405', 'CIV406', 'CIV501', 'CIV502', 'CIV503', 'CIV504', 'CIV505', 'CIV506', 'CIV601', 'CIV602', 'CIV603', 'CIV604', 'CIV605', 'CIV606', 'CIV701', 'CIV702', 'CIV703', 'CIV704', 'CIV705', 'CIV706', 'CIV801', 'CIV802', 'CIV803', 'CIV804', 'CIV805', 'CIV806'),
('COMPUTER SCIENCE ENGINEERING', 'M1', 'M2', 'Chemistry', 'English', 'Clanguage', 'Clab', 'M3', 'Physics', 'ED', 'EIT', 'physicsLab', 'Workshop', 'EEE', 'DSA', 'DLD', 'OOP', 'SP', 'PEM', 'DMS', 'COA', 'DBMS', 'DAA', 'JAVA', 'Ethics', 'CN', 'OS', 'FLAT', 'OOSE', 'OR', 'PPL', 'CD', 'WT', 'IT', 'AI', 'DM', 'Project', 'dataAnalytics', 'IOT', 'GPS', 'BioINFORMATICS', 'Project2', 'CS706', 'Ecommerce', 'Enterpreneurship', 'Mobile', 'project3', 'CS805', 'CS806'),
('ELECTRICAL AND ELECTRONICS ENGINEERING', 'M1', 'M2', 'Physics', 'ED', 'EIT', 'PhysicsLab', 'M3', 'English', 'Chemistry', 'clang', 'clab', 'workshop', 'EEE301', 'EEE302', 'EEE303', 'EEE304', 'EEE305', 'EEE306', 'EEE401', 'EEE402', 'EEE403', 'EEE404', 'EEE405', 'EEE406', 'EEE501', 'EEE502', 'EEE503', 'EEE504', 'EEE505', 'EEE506', 'EEE601', 'EEE602', 'EEE603', 'EEE604', 'EEE605', 'EEE606', 'EEE701', 'EEE702', 'EEE703', 'EEE704', 'EEE705', 'EEE706', 'EEE801', 'EEE802', 'EEE803', 'EEE804', 'EEE805', 'EEE806'),
('ELECTROICS AND COMMUNICATION ENGINEERING', 'M1', 'M2', 'Physics', 'ED', 'EIT', 'PhysicsLab', 'M3', 'English', 'Chemistry', 'clang', 'clab', 'workshop', 'ECE301', 'ECE302', 'ECE303', 'ECE304', 'ECE305', 'ECE306', 'ECE401', 'ECE402', 'ECE403', 'ECE404', 'ECE405', 'ECE406', 'ECE501', 'ECE502', 'ECE503', 'ECE504', 'ECE505', 'ECE506', 'ECE601', 'ECE602', 'ECE603', 'ECE604', 'ECE605', 'ECE606', 'ECE701', 'ECE702', 'ECE703', 'ECE704', 'ECE705', 'ECE706', 'ECE801', 'ECE802', 'ECE803', 'ECE804', 'ECE805', 'ECE806'),
('INFORMATION TECHNOLOGY ENGINEERING', 'M1', 'M2', 'Chemistry', 'English', 'Clanguage', 'Clab', 'M3', 'Physics', 'ED', 'EIT', 'physicsLab', 'Workshop', 'EEE', 'DSA', 'DLD', 'OOP', 'SP', 'PEM', 'DMS', 'COA', 'DBMS', 'DAA', 'JAVA', 'Ethics', 'CN', 'OS', 'FLAT', 'OOSE', 'OR', 'PPL', 'CD', 'WT', 'IT', 'AI', 'DM', 'Project', 'dataAnalytics', 'IOT', 'GPS', 'BioINFORMATICS', 'Project2', 'IT706', 'Ecommerce', 'Enterpreneurship', 'Mobile', 'project3', 'IT805', 'IT806'),
('MECHANICAL ENGINEERING', 'M1', 'M2', 'Physics', 'ED', 'EIT', 'PhysicsLab', 'M3', 'English', 'Chemistry', 'clang', 'clab', 'workshop', 'MEC301', 'MEC302', 'MEC303', 'MEC304', 'MEC305', 'MEC306', 'MEC401', 'MEC402', 'MEC403', 'MEC404', 'MEC405', 'MEC406', 'MEC501', 'MEC502', 'MEC503', 'MEC504', 'MEC505', 'MEC506', 'MEC601', 'MEC602', 'MEC603', 'MEC604', 'MEC605', 'MEC606', 'MEC701', 'MEC702', 'MEC703', 'MEC704', 'MEC705', 'MEC706', 'MEC801', 'MEC802', 'MEC803', 'MEC804', 'MEC805', 'MEC806');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD KEY `id` (`branch`),
  ADD KEY `branch` (`student_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD KEY `id` (`branch`),
  ADD KEY `branch` (`student_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD KEY `student_id` (`branch`),
  ADD KEY `branch` (`student_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD KEY `id` (`branch`),
  ADD KEY `branch` (`student_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD KEY `id` (`branch`),
  ADD KEY `branch` (`student_id`),
  ADD KEY `date` (`date`),
  ADD KEY `branch_2` (`branch`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD KEY `student_id` (`branch`),
  ADD KEY `branch` (`student_id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `sem7`
--
ALTER TABLE `sem7`
  ADD KEY `date` (`date`),
  ADD KEY `branch` (`branch`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `sem8`
--
ALTER TABLE `sem8`
  ADD KEY `date` (`date`),
  ADD KEY `branch` (`branch`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Branch`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sem1`
--
ALTER TABLE `sem1`
  ADD CONSTRAINT `sem1_ibfk_1` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `sem1_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`),
  ADD CONSTRAINT `sem1_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `dgcs`.`student_details` (`student_id`);

--
-- Constraints for table `sem2`
--
ALTER TABLE `sem2`
  ADD CONSTRAINT `sem2_ibfk_1` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `sem2_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`);

--
-- Constraints for table `sem3`
--
ALTER TABLE `sem3`
  ADD CONSTRAINT `sem3_ibfk_1` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `sem3_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`);

--
-- Constraints for table `sem4`
--
ALTER TABLE `sem4`
  ADD CONSTRAINT `sem4_ibfk_1` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `sem4_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`);

--
-- Constraints for table `sem5`
--
ALTER TABLE `sem5`
  ADD CONSTRAINT `sem5_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`);

--
-- Constraints for table `sem6`
--
ALTER TABLE `sem6`
  ADD CONSTRAINT `sem6_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`);

--
-- Constraints for table `sem7`
--
ALTER TABLE `sem7`
  ADD CONSTRAINT `sem7_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`),
  ADD CONSTRAINT `sem7_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `dgcs`.`student_details` (`student_id`);

--
-- Constraints for table `sem8`
--
ALTER TABLE `sem8`
  ADD CONSTRAINT `sem8_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `subjects` (`Branch`),
  ADD CONSTRAINT `sem8_ibfk_2` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `sem8_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `dgcs`.`student_details` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
