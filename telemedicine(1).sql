-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 09:42 AM
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
-- Database: `telemedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_name`, `patient_name`, `appointment_date`, `appointment_time`, `status`, `created_at`, `updated_at`, `approved`) VALUES
(1, 'johndoe@gmail.com', 'lucy@gmail.com', '2023-11-15', '15:30:00', 'Pending', '2023-11-07 09:04:23', '2023-11-07 09:04:23', 0),
(2, 'janesmith@gmail.com', 'lucy@gmail.com', '2023-11-20', '11:06:00', 'Approved', '2023-11-07 09:07:42', '2023-11-07 09:07:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`user_id`, `full_name`, `gender`, `email`, `password`, `dob`, `phone`, `role_id`, `date_created`, `date_updated`) VALUES
(1, 'Daniel Munene', 'Male', 'dan@gmail.com', '$2y$10$eejmoXayKprqpWgEoJ.d4e1mjn8vcZywNetX33KiBSB2fiFWsXUkS', '2023-09-14', 713507242, 1, '2021-10-15 10:34:00', '2021-10-15 12:58:34'),
(2, 'Barack Adams', 'Female', 'barack@gmail.com', '$2y$10$Gb9.v2fjU8YySqf6EwzG8e/m4dDgejeYrbwgWpOMqUoa4iG96WvRi', '2023-09-18', 110530914, 0, '2021-10-15 11:34:00', NULL),
(3, 'Jones Joshua', 'Male', 'jones@gmail.com', '$2y$10$nUQGQtuF419391KG6ywXE.uoglGCU/1chVAKmanVDzrQeu3H7Hlme', '2023-09-11', 746294664, 0, '2021-10-15 12:34:00', NULL),
(4, 'Ngumbau Muthoki', 'Male', 'muthokingumbau@zetech.ac.ke', '$2y$10$hlaX1gzx0jkNPCenFCVGMed.V6W.XBVMrEkhzHOxu3jnk68BWqLra', '2001-02-14', 713507242, 0, '2021-10-15 13:34:00', NULL),
(5, 'Rennyx Calyx', 'Male', 'rennyx@gmail.com', '$2y$10$J0oTPz9lFqgyjhH9kuhcfu4Lt2v97zzvsIh7WSUibiLmU7tkz8I72', '2023-09-06', 713507242, 0, '2021-10-15 14:34:00', NULL),
(6, 'Dr. Jane Smith', '', 'janesmith@gmail.com', '$2y$10$LjxeJRZK8KGR4YwuJ5Colu3t9sMeCeeWOUcJxoBmqUiIhY/NQdsL6', '2023-02-14', 712346523, 1, '2023-09-26 13:29:40', '2023-09-26 13:32:45'),
(7, 'Dr. John Doe', '', 'johndoe@gmail.com', '$2y$10$ABmVoPmnMZ7vfHIoBDnkaOqkEf955AA5vycgEA91CJV7Ci2w.eY0G', '2001-02-14', 713507241, 1, '2023-09-27 15:32:01', '2023-09-27 15:32:46'),
(8, 'Dr. Sarah Johnson', '', 'sarahjohnson@gmail.com', '$2y$10$iuG3u5Mh/n2LX0v7WGnsq.ecu0I4ANI7Yvq138lbaYmYWrcG7lSB.', '1997-04-23', 110530914, 1, '2023-09-27 17:00:50', '2023-09-27 17:01:22'),
(9, 'Keziah Rennyx', 'Female', 'kezziah@gmail.com', '$2y$10$LgHsSl/tH2i0s/79w6pRuOlycQ40.a4ZMwPBtb.5Md.HywaRwrIX.', '2023-09-27', 746294664, 0, '2023-10-02 09:42:54', NULL),
(10, 'Lucy', 'Female', 'lucy@gmail.com', '$2y$10$v4xugmlGrFO6zibPV1bY1OwXqMgxAs9cpVB3ip59jrJ40O7TBQrJa', '2023-11-01', 723547642, 0, '2023-11-02 08:12:47', NULL),
(11, 'Rennyx Calyx', 'Male', 'calyx@gmail.com', '$2y$10$wUJtLFxv4Ig7U98vFcaKE.MwSv2to.lQoeQ9Jxv4irnO45zO0BLU.', '2023-11-01', 123456789, 1, '2023-11-03 15:07:51', '2023-11-03 15:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `consultant` varchar(100) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `consultant`, `doctor_name`, `appointment_date`, `description`) VALUES
(1, 'michaelmbuvi@gmail.com', 'Buza', '2023-09-25 08:00:00', 'Kindly if possible'),
(3, 'reubenngumbau@gmail.com', 'Dan', '2023-09-30 15:30:00', 'Kindly sir');

-- --------------------------------------------------------

--
-- Table structure for table `convo_list`
--

CREATE TABLE `convo_list` (
  `user_id` int(30) NOT NULL,
  `from_user` int(30) NOT NULL,
  `to_user` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`, `service`) VALUES
(1, 'Dr. Smith', 'Mental Health Services'),
(2, 'Dr. Johnson', 'Mental Health Services'),
(3, 'Dr. Davis', 'Chronic Disease Management'),
(4, 'Dr. Wilson', 'Chronic Disease Management'),
(5, 'Dr. Brown', 'Medical Education and Information');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area_of_treatment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `area_of_treatment`) VALUES
(1, 'johndoe@gmail.com', 'Cardiology'),
(2, 'janesmith@gmail.com', 'Orthopedics'),
(3, 'sarahjohnson@gmail.com', 'Pediatrics');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Default User');

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` text DEFAULT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `name`, `email`, `rating`, `feedback`, `submission_time`) VALUES
(1, 'Barrack Adams', 'barack@gmail.com', 5, 'Very good one', '2023-09-28 06:22:06'),
(2, 'Barack Adams', 'barack@gmail.com', 4, 'Woow', '2023-09-28 06:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `tinypesa`
--

CREATE TABLE `tinypesa` (
  `ID` int(11) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `MpesaReceiptNumber` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinypesa`
--
ALTER TABLE `tinypesa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tinypesa`
--
ALTER TABLE `tinypesa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
