-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 07:05 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cumo`
--

-- --------------------------------------------------------

--
-- Table structure for table `routine_details`
--

CREATE TABLE `routine_details` (
  `id` int(10) NOT NULL,
  `routine_id` int(10) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `duration` varchar(50) NOT NULL,
  `work` varchar(250) DEFAULT NULL,
  `IsActive` char(1) NOT NULL DEFAULT 'Y' COMMENT 'Y=Active, N=Inactive',
  `CreatedBy` int(11) DEFAULT NULL,
  `UpdatedBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routine_details`
--

INSERT INTO `routine_details` (`id`, `routine_id`, `startTime`, `endTime`, `duration`, `work`, `IsActive`, `CreatedBy`, `UpdatedBy`, `created_at`, `updated_at`) VALUES
(1, 1, '09:00:00', '09:15:00', '0 hour, 15 minute', 'Assembly', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(2, 1, '09:15:00', '10:30:00', '1 hour, 15 minute', 'Breakfast', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(3, 1, '10:30:00', '13:30:00', '3 hour, 0 minute', 'Follow ITP ( focus on ADL ), therapy/ gym / exercise', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(4, 1, '13:30:00', '14:15:00', '0 hour, 45 minute', 'Lunch', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(5, 1, '14:15:00', '14:45:00', '0 hour, 30 minute', 'Rest', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(6, 1, '14:45:00', '16:45:00', '2 hour, 0 minute', 'Cultural Activity / Continue Vocational work', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(7, 1, '16:45:00', '17:00:00', '0 hour, 15 minute', 'Snacks', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(8, 1, '17:00:00', '17:00:00', '0 hour, 0 minute', 'Return Home', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(9, 2, '09:00:00', '10:45:00', '1 hour, 45 minute', 'Vocational work', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(10, 2, '10:45:00', '11:00:00', '0 hour, 15 minute', 'Snacks', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(11, 2, '11:00:00', '13:30:00', '2 hour, 30 minute', 'Vocational work', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(12, 2, '13:30:00', '13:45:00', '0 hour, 15 minute', 'Pay food bill', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(13, 2, '13:45:00', '14:15:00', '0 hour, 30 minute', 'Lunch', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(14, 2, '14:15:00', '15:50:00', '1 hour, 35 minute', 'Cultural Activity / Continue Vocational work', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(15, 2, '15:50:00', '16:45:00', '0 hour, 55 minute', 'Exercise', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(16, 2, '16:45:00', '17:00:00', '0 hour, 15 minute', 'Snacks/Grooming', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(17, 2, '17:00:00', '17:00:00', '0 hour, 0 minute', 'Return Home', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(18, 3, '09:00:00', '10:45:00', '1 hour, 45 minute', 'Vocational work', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(19, 3, '10:45:00', '11:00:00', '0 hour, 15 minute', 'Snacks', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(20, 3, '11:00:00', '13:30:00', '2 hour, 30 minute', 'Vocational work', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(21, 3, '13:30:00', '13:45:00', '0 hour, 15 minute', 'Pay food bill', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(22, 3, '13:45:00', '14:15:00', '0 hour, 30 minute', 'Lunch', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(23, 3, '14:15:00', '15:50:00', '1 hour, 35 minute', 'Cultural Activity / Continue Vocational work', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(24, 3, '15:50:00', '16:45:00', '0 hour, 55 minute', 'Exercise', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(25, 3, '16:45:00', '17:00:00', '0 hour, 15 minute', 'Snacks/Grooming', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51'),
(26, 3, '17:00:00', '17:00:00', '0 hour, 0 minute', 'Return Home', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routine_details`
--
ALTER TABLE `routine_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routine_details`
--
ALTER TABLE `routine_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
