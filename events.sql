-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 08:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img`, `title`, `date`) VALUES
(0, 'https://www.kreedon.com/wp-content/uploads/2019/11/atk-celebration1.jpg', 'title1', '08 AUG. 2020'),
(1, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'RFYS National Championship Day', '08 AUG. 2021'),
(2, 'https://www.kreedon.com/wp-content/uploads/2019/04/117311-tszrikphru-1555044084-696x365.jpg', 'RFYS National Championship Day223', '21 AUG. 2020'),
(3, 'https://www.kreedon.com/wp-content/uploads/2020/08/Untitled-design-696x387.jpg', 'RFYS National Championship vsddv', '08 AUG. 2020'),
(4, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'RFYS National Championship Dayadd', '45 AUG. 2020'),
(5, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'RFYS National Championship Dayn', '08 AUG. 2034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
