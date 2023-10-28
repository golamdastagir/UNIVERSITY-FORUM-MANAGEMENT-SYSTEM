-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 04:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_forum_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course_materials`
--

CREATE TABLE `course_materials` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `material_type` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_materials`
--

INSERT INTO `course_materials` (`id`, `course_code`, `material_type`, `material`) VALUES
(6, 'C1', 'course slides', 'a random link');

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found`
--

CREATE TABLE `lost_and_found` (
  `id` int(11) NOT NULL,
  `reporter_email` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `report_date` date NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_and_found`
--

INSERT INTO `lost_and_found` (`id`, `reporter_email`, `item_name`, `report_date`, `place`) VALUES
(15, 'user1@user.com', 'Bottle', '2023-10-03', 'around here');

-- --------------------------------------------------------

--
-- Table structure for table `q_and_a`
--

CREATE TABLE `q_and_a` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `q_and_a`
--

INSERT INTO `q_and_a` (`id`, `question`, `answer`) VALUES
(5, 'Who are you?', 'Anonymous            ');

-- --------------------------------------------------------

--
-- Table structure for table `review_course`
--

CREATE TABLE `review_course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(6) NOT NULL,
  `department` varchar(50) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_course`
--

INSERT INTO `review_course` (`id`, `name`, `course`, `department`, `rating`, `review`) VALUES
(3, 'Course 1', 'C1', 'CS', 5, 'Very Productive');

-- --------------------------------------------------------

--
-- Table structure for table `review_faculty`
--

CREATE TABLE `review_faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(6) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_faculty`
--

INSERT INTO `review_faculty` (`id`, `name`, `course`, `department`, `email`, `rating`, `review`) VALUES
(4, 'Faculty 1', 'C1', 'CS', 'user1@user.com', 5, 'Good person.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `type` varchar(10) NOT NULL,
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `credit` int(3) NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`type`, `id`, `name`, `gender`, `email`, `institution`, `department`, `credit`, `birthdate`, `password`) VALUES
('Student', 1, 'User1', 'Male', 'user1@user.com', 'N/A', 'CS', 110, '2012-01-02', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `id` int(12) NOT NULL,
  `course` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`id`, `course`) VALUES
(1, 'C1'),
(1, 'C2'),
(1, 'C3'),
(1, 'C4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q_and_a`
--
ALTER TABLE `q_and_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_course`
--
ALTER TABLE `review_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_faculty`
--
ALTER TABLE `review_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_materials`
--
ALTER TABLE `course_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `q_and_a`
--
ALTER TABLE `q_and_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review_course`
--
ALTER TABLE `review_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review_faculty`
--
ALTER TABLE `review_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
