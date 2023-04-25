-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 08:24 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Recipe_name` varchar(255) NOT NULL,
  `Recipe_steps` varchar(255) NOT NULL,
  `Recipe_details` varchar(255) NOT NULL,
  `Recipe_ingredients` varchar(255) NOT NULL,
  `Recipe_image` varchar(255) NOT NULL,
  `Recipe_maker` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `Recipe_name`, `Recipe_steps`, `Recipe_details`, `Recipe_ingredients`, `Recipe_image`, `Recipe_maker`, `created_at`, `updated_at`) VALUES
(10, 'Ma', '1.Cook\r\n 2.Cook\r\n 3.Cook\r\n 4.Cook\r\n 5.Cook', 'HELLOO WORLD', '1.Cook\r\n 2.Cook\r\n 3.Cook\r\n 4.Cook\r\n 5.Cook', '1682400592.jpg', 'dddd', '2023-04-23 01:46:07', '2023-04-24 21:29:52'),
(11, 'dwdwa', 'dwdwdwd', 'wdawda', 'awda', '1682243232.jpg', 'wdawdaw', '2023-04-23 01:47:12', '2023-04-23 02:49:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
