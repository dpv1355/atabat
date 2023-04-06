-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 11:57 PM
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
-- Database: `atabat`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtotalpackcomp`
--

CREATE TABLE `addtotalpackcomp` (
  `id` int(11) NOT NULL,
  `id_packages` int(11) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `escan_naj` int(11) DEFAULT NULL,
  `escan_karb` int(11) DEFAULT NULL,
  `escan_kaz` int(11) DEFAULT NULL,
  `naghl` int(11) DEFAULT NULL,
  `dorchin` int(11) DEFAULT NULL,
  `siaheh` int(11) DEFAULT NULL,
  `airport_food` int(11) DEFAULT NULL,
  `airport_avz` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtotalpackcomp`
--

INSERT INTO `addtotalpackcomp` (`id`, `id_packages`, `id_company`, `escan_naj`, `escan_karb`, `escan_kaz`, `naghl`, `dorchin`, `siaheh`, `airport_food`, `airport_avz`) VALUES
(1, 1, 1, 1200, 134, 10000, 4000, 5000, 700, 45, 23),
(2, 2, 31, 1200, 3, 4, 54, 32, 235, 235, 235),
(3, 3, 1, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `namecompany` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `namecompany`) VALUES
(1, 'شمسا'),
(2, 'سفیر آسمان ملل'),
(3, 'صدرا گشت'),
(31, 'یگانه سیر شیراز');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `namepakage` varchar(255) NOT NULL,
  `codepakage` int(11) NOT NULL,
  `firstdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `namepakage`, `codepakage`, `firstdate`, `enddate`) VALUES
(1, 'قبل از نوروزی ', 1, '1401-12-09', '1401-12-22'),
(2, 'نوروزی', 2, '1401-12-23', '1402-01-02'),
(3, 'رمضانی', 3, '1402-01-03', '1402-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtotalpackcomp`
--
ALTER TABLE `addtotalpackcomp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtotalpackcomp`
--
ALTER TABLE `addtotalpackcomp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
