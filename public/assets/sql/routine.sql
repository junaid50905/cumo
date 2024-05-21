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
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` int(10) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `stdStage` char(10) NOT NULL,
  `IsActive` char(1) NOT NULL DEFAULT 'Y' COMMENT 'Y=Active, N=Inactive',
  `CreatedBy` int(11) DEFAULT NULL,
  `UpdatedBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `title`, `stdStage`, `IsActive`, `CreatedBy`, `UpdatedBy`, `created_at`, `updated_at`) VALUES
(1, 'Pre-vocational Routine', 'PV', 'Y', 2, 12, '2019-01-03 07:28:33', '2019-01-13 03:53:16'),
(2, 'Vocational Routine', 'V', 'Y', 12, NULL, '2019-01-10 08:57:29', '2019-01-10 08:57:29'),
(3, 'Independent Routine', 'I', 'Y', 12, NULL, '2019-01-13 00:58:51', '2019-01-13 00:58:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
