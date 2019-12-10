-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 03:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imgmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `parent`) VALUES
(1, 'Vehicles', 0),
(2, 'Boats', 1),
(3, 'Cars', 1),
(4, 'Trucks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `imagelists`
--

CREATE TABLE `imagelists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT 1,
  `sort` int(11) NOT NULL DEFAULT 5,
  `userid` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `des` varchar(255) DEFAULT NULL,
  `enable` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagelists`
--

INSERT INTO `imagelists` (`id`, `name`, `title`, `category`, `sort`, `userid`, `date_added`, `date_modified`, `des`, `enable`) VALUES
(1, 'moon-in-the-sky-3284294.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 15:27:15', NULL, 1),
(2, 'person-in-desert-3320155.jpg', 'test', 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 16:44:44', NULL, 1),
(3, 'selective-focus-photography-of-brown-leafed-trees-1590551.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 17:17:26', NULL, 1),
(4, 'solar-panel-on-rocky-mountain-during-day-3312555.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 18:02:28', NULL, 1),
(5, 'an-open-red-flush-door-3303491.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 17:17:31', NULL, 1),
(6, 'assorted-color-dice-decors-3311235.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 17:17:33', NULL, 1),
(7, 'assorted-cooked-foods-3071816.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 18:51:45', NULL, 1),
(8, 'flatlay-photography-of-vegetables-1437655.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 18:03:13', NULL, 1),
(9, 'l-opticien-building-shopfront-during-day-3293415.jpg', NULL, 1, 5, 1, '2019-12-09 15:27:03', '2019-12-09 15:27:03', NULL, 0),
(10, 'assorted-cooked-foods-3071816.jpg', 'abc', 1, 5, 1, '2019-12-09 18:20:58', '2019-12-09 18:48:27', NULL, 0),
(11, 'assorted-cooked-foods-3071816.jpg', NULL, 1, 5, 1, '2019-12-09 18:49:13', '2019-12-09 18:49:13', NULL, 0),
(12, 'solar-panel-on-rocky-mountain-during-day-3312555.jpg', NULL, 1, 5, 1, '2019-12-09 18:51:32', '2019-12-09 18:51:32', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `api_key`) VALUES
(1, 'admin', 'admin', '123456'),
(2, 'ffff', 'ffff', '34325345'),
(3, 'test', 'test', '3adcf18f6801a29b246e443e62dc6c27'),
(4, 'saif', 'saif', 'eae5884acd695f3cdf4d36f6a18ac5f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagelists`
--
ALTER TABLE `imagelists`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imagelists`
--
ALTER TABLE `imagelists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
