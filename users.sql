-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 03:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` text NOT NULL,
  `aavhan_number` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL,
  `gender` text NOT NULL,
  `phone` int(11) NOT NULL,
  `fb_url` text NOT NULL,
  `ig_url` text NOT NULL,
  `clg_state` text NOT NULL,
  `clg_district` text NOT NULL,
  `clg_name` text NOT NULL,
  `year_study` int(11) NOT NULL,
  `pass_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `aavhan_number`, `name`, `email`, `image`, `gender`, `phone`, `fb_url`, `ig_url`, `clg_state`, `clg_district`, `clg_name`, `year_study`, `pass_year`) VALUES
('102953889980857240586', '', 'Tanmay Hiremath', 'tanmay.hiremath@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GhHSiHHFIiS6ALZLCWt6Oj3PeC6nwYRGcMIcKcAhQ=s96-c', 'male', 1234567890, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 3, 2222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `userid` (`userid`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
