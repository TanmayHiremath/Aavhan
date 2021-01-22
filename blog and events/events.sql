-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 11:07 PM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `about` text NOT NULL,
  `rules` text NOT NULL,
  `registration` text NOT NULL,
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`gallery`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img`, `title`, `date`, `about`, `rules`, `registration`, `gallery`) VALUES
(0, 'https://forum.skift.com/skift-aviation-forum/wp-content/uploads/sites/23/2020/01/SGF2019_Delta_CEO_Bastian-e1568836087218.jpg', 'title1', '08 AUG. 2020', 'abcd', '<h1>rules</h1>', '<iframe src=\'https://docs.google.com/forms/d/e/1FAIpQLSeMsFwnUsRMv8PhjPjUaDfszNpcuFl-0uV2v2JnnxJTD3C23g/viewform?embedded=true\' width=\'640\' height=\'403\' frameborder=\'0\' marginheight=\'0\' scrolling=\'no\' marginwidth=\'0\'>Loading…</iframe>', '{\"aa\":[\"https://www.rfyouthsports.com/static-resources/waf-images/content/4d/90/7b/16-9/1035-512/UjwS4jdZ91.jpg\",\"https://www.rfyouthsports.com/static-resources/waf-images/content/61/b9/a9/16-9/592-444/TfEJlrfKSd.jpg\",\"https://www.rfyouthsports.com/static-resources/waf-images/content/da/58/9d/16-9/592-444/B7EUSGIpWV.png\"]}'),
(1, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'RFYS National Championship Day', '08 AUG. 2021', '', '', '', ''),
(2, 'https://www.kreedon.com/wp-content/uploads/2019/04/117311-tszrikphru-1555044084-696x365.jpg', 'RFYS National Championship Day223', '21 AUG. 2020', '', '', '', ''),
(3, 'https://www.kreedon.com/wp-content/uploads/2020/08/Untitled-design-696x387.jpg', 'RFYS National Championship vsddv', '08 AUG. 2020', '', '', '', ''),
(4, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'RFYS National Championship Dayadd', '45 AUG. 2020', '', '', '', ''),
(5, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'RFYS National Championship Dayn', '08 AUG. 2034', '', '', '', '');

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
