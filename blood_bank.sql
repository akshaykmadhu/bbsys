-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 06:37 AM
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
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `request_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `g_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`request_id`, `p_name`, `g_name`, `email`, `phone`, `address`, `state`, `district`, `pincode`, `age`, `hospital`, `bloodgroup`, `gender`, `weight`, `reason`, `status`) VALUES
(7, 'Ajith BTK', 'Ajith BTK', 'btkajith@gmail.com', '9074911104', 'Thekkedath', 'Kerala', 'Thrissur', '680519', '20', 'Govt. Hospital', 'B+', 'Male', '50', 'Accident', '');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`user_id`, `username`, `password`, `name`, `email`, `phone`, `age`, `blood_group`, `gender`, `weight`) VALUES
(70, 'ajith', 'aji', 'Ajith BTK', 'btkajith@gmail.com', '9074911104', '20', 'B+', 'Male', '50'),
(83, 'akshay', 'aks', 'akshay', 'akshay@gmail.com', '1234567890', '23', 'O+', 'Male', '60');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`user_id`, `username`, `password`, `name`, `email`, `phone`, `age`, `blood_group`, `gender`, `weight`) VALUES
(20, 'athira', 'athira', 'Athira BTK', 'athira@gmail.com', '123456789', '23', 'O+', 'Female', '60'),
(22, 'ajith', 'aji', 'Ajith', 'ajith@gmail.com', '1234567890', '22', 'O+', 'Male', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
