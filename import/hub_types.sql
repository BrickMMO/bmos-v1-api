-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 01, 2023 at 04:24 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brickmmo_bmos`
--

-- --------------------------------------------------------

--
-- Table structure for table `hub_types`
--

CREATE TABLE `hub_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hub_types`
--

INSERT INTO `hub_types` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Mindstorms EV3', 'ev3', '2023-12-01 04:19:27', '2023-12-01 04:20:42'),
(2, 'Spike Prime', 'prime', '2023-12-01 04:19:27', '2023-12-01 04:20:45'),
(3, 'Spike Essentials', 'essentials', '2023-12-01 04:19:34', '2023-12-01 04:20:49'),
(4, 'Mindstorms Robot Inventor', 'inventor', '2023-12-01 04:20:08', '2023-12-01 04:20:55'),
(5, 'BrickPi', 'pi', '2023-12-01 04:20:08', '2023-12-01 04:20:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hub_types`
--
ALTER TABLE `hub_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hub_types`
--
ALTER TABLE `hub_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
