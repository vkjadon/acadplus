-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2025 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `fullname` varchar(40) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` enum('student','faculty') NOT NULL,
  `rollnoempid` varchar(20) NOT NULL,
  `department` enum('DME','DCE','DEE','DMCE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`fullname`, `gender`, `email`, `password`, `usertype`, `rollnoempid`, `department`) VALUES
('', 'male', 'keshav@gmail.com', '$2y$10$O2.9UPMxicqA0zQktJTXTOO6Z9QGFkb1GoByS5ZhyIJtc32ye6OhG', 'student', '2310996502', 'DEE'),
('', 'male', 'naveen@gmail.com', '$2y$10$kU5/xyRkuI8w9Vk/zbzf2eHhGkpxBRphtgjbV8i4w2Au1cqgrEdta', 'student', '2410996501', 'DME'),
('', 'male', 'ram@gmail.com', '$2y$10$q4rK8ytnldKIhknc13ZiNOI/wSeuatY263xyS7AKcTXrlqQO8XkE.', 'student', '2410996502', 'DMCE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `rollnoempid` (`rollnoempid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
