-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 02:49 PM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `category` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `author`, `description`, `date`, `category`, `content`) VALUES
(0, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'Captain Cool – MS Dhoni | Mister Chill almost Iced', 'Trishna Bose', 'Captain Cool - Mahendra Singh Dhoni may have retired from all forms of International cricket, but he will perhaps never retire from people’s hearts. ', 'December 16,2019', 'lostindianplayers', '<h1>test</h1>'),
(1, 'https://www.kreedon.com/wp-content/uploads/2019/04/117311-tszrikphru-1555044084-696x365.jpg', 'MSD', 'Manan Dharamshi', 'read blog', 'December 16,2019', 'impactofcorona', '<h1>test</h1>'),
(2, 'https://www.kreedon.com/wp-content/uploads/2020/08/Untitled-design-696x387.jpg', 'Sharma', 'Trishna Bose', 'blog desc', 'December 16,2019', 'evolutionofsports', '<h1>test</h1>'),
(3, 'https://www.kreedon.com/wp-content/uploads/2019/11/atk-celebration1.jpg', 'IPL', 'Trishna Bose', 'desc2', 'December 16,2019', 'lostindianplayers', '<h1>test</h1>'),
(4, 'http://localhost/sports/images/picture2.jpg', 'Dhawan', 'Tanmay Hiremath', 'Shikhar Dhawan', 'December 16,2019', 'lostindianplayers', '<h1>test</h1>'),
(5, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'Captain Cool – MS Dhoni | Mister Chill almost Iced', 'Trishna Bose', 'Captain Cool - Mahendra Singh Dhoni may have retired from all forms of International cricket, but he will perhaps never retire from people’s hearts. ', 'December 16,2019', 'lostindianplayers', '<h1>test</h1>'),
(6, 'https://www.kreedon.com/wp-content/uploads/2020/08/Cricket-Dhoni-walks-back-20190711_16bdfd0aeff_large-696x522.jpg', 'Captain Cool – MS Dhoni | Mister Chill almost Iced', 'Trishna Bose', 'Captain Cool - Mahendra Singh Dhoni may have retired from all forms of International cricket, but he will perhaps never retire from people’s hearts. ', 'December 16,2019', 'lostindianplayers', '<h1>test</h1>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
