-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 03:34 PM
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
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(16, 'user', 'user1', 'user@gmail.com', 790717714, 'user'),
(17, 'user', 'user1', 'user@gmail.com', 790717714, '123'),
(18, 'gasasira', 'edu', 'gasas@gmail.com', 790732714, '12345'),
(19, 'gasasira', 'edu', 'gasas@gmail.com', 790732714, '12345'),
(20, 'rwigamba', 'remy', 'rwigamba@gmail.com', 782345671, '9876'),
(21, 'us', 'uss', 'us@gmail.com', 9999, '$2y$10$Cs2TldSlCSIKllde6YbOdelk7uUKeTcNG3P0gn6UmvYBAtoSomhqu'),
(22, 'nelso', 'muhire', 'muh@gmail.com', 782013214, '$2y$10$6XG3Bg4Jx1olVwzWpquiJ.sYe5AvFWREPT4xDqvJVrj325dy5pPeq');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `product_name` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`product_name`, `product_type`, `quantity`, `price`) VALUES
('Wheat', 'Grain', 10, 500.00),
('tomatoes', 'vigetables', 5, 200.00),
('cotton', 'fiber', 8, 750.00),
('soybeans', 'legume', 12, 900.00),
('apple', 'fruits', 3, 1200.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
