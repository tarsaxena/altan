-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 12:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Fashion', 'Category for anything related to fashion.', '2014-06-01 00:35:07', '2014-05-31 00:34:33'),
(2, 'Electronics', 'Gadgets, drones and more.', '2014-06-01 00:35:07', '2014-05-31 00:34:33'),
(3, 'Motors', 'Motor sports and more', '2014-06-01 00:35:07', '2014-05-31 00:34:54'),
(5, 'Movies', 'Movie products.', '0000-00-00 00:00:00', '2016-01-08 21:27:26'),
(6, 'Books', 'Kindle books, audio books and more.', '0000-00-00 00:00:00', '2016-01-08 21:27:47'),
(13, 'Sports', 'Drop into new winter gear.', '2016-01-09 02:24:24', '2016-01-09 09:24:24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `copy_image`
-- (See below for the actual view)
--
CREATE TABLE `copy_image` (
`title` varchar(255)
,`alt` varchar(255)
,`thumb_img` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alt` varchar(255) NOT NULL,
  `thumb_img` varchar(255) DEFAULT NULL,
  `large_img` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `alt`, `thumb_img`, `large_img`) VALUES
(1, 'Title 1', 'IMG 1Wr\r\n', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(5, 'Title 5', 'IMG 5', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(6, 'Title 6', 'IMG 6', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(7, 'Title 7', 'IMG 7', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(8, 'Title 8', 'IMG 8', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(9, 'Title 9', 'IMG 9', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(10, 'Title 10', 'IMG 10', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(11, 'Title 11', 'IMG 11', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(12, 'Title 12', 'IMG 12', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(13, 'Title 13', 'IMG 13', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(14, 'Title 14', 'IMG 14dd', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(15, 'Title 15', 'IMG 15', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(16, 'Title 16', 'IMG 16', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(17, 'Title 17', 'IMG 17', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(18, 'Title 18', 'IMG 18', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(19, 'Title 19', 'IMG 19', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(20, 'Title 20', 'IMG 20', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(21, 'Title 21', 'IMG 21', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(22, 'Title 22', 'IMG 22', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(23, 'Title 23', 'IMG 23', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(24, 'Title 24', 'IMG 24', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(25, 'Title 25', 'IMG 25', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(26, 'Title 26', 'IMG 26', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(27, 'Title 27', 'IMG 27', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(28, 'Title 28', 'IMG 28', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(29, 'Title 29', 'IMG 29', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(30, 'Title 30', 'IMG 30', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(31, 'Title 31', 'IMG 31', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(32, 'Title 32', 'IMG 32', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(33, 'Title 33', 'IMG 33', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(34, 'Title 34', 'IMG 34', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(35, 'Title 35', 'IMG 35', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(36, 'Title 36', 'IMG 36', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(37, 'Title 37', 'IMG 37', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(38, 'Title 38', 'IMG 38', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(39, 'Title 39', 'IMG 39', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(40, 'Title 40', 'IMG 40', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(41, 'Title 41', 'IMG 41', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(42, 'Title 42', 'IMG 42', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(43, 'Title 43', 'IMG 43', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(44, 'Title 44t', 'IMG 44', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(45, 'Title 45', 'IMG 45', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(46, 'Title 46', 'IMG 46', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(47, 'Title 47', 'IMG 47', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(48, 'Title 48', 'IMG 48', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(49, 'Title 49', 'IMG 49', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(50, 'Title 50', 'IMG 50', 'img/thumb_img.jpg', 'img/large_img.jpg'),
(51, 'sas', 'asAS', 'img/nature2.jfif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `copy_image`
--
DROP TABLE IF EXISTS `copy_image`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `copy_image`  AS  select `images`.`title` AS `title`,`images`.`alt` AS `alt`,`images`.`thumb_img` AS `thumb_img` from `images` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
