-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 10:35 PM
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
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagelists`
--

INSERT INTO `imagelists` (`id`, `name`, `title`, `category`, `sort`, `userid`, `date_added`, `date_modified`, `des`) VALUES
(1, 'https://getuikit.com/docs/images/photo.jpg', 'weqwe', 1, 1, 1, '2019-12-04 15:43:48', '2019-12-04 15:43:48', ''),
(2, 'https://getuikit.com/docs/images/dark.jpg', 'weqwe', 4, 1, 1, '2019-12-04 15:43:48', '2019-12-04 15:43:48', ''),
(3, 'https://getuikit.com/docs/images/light.jpg', 'weqwe', 2, 1, 1, '2019-12-04 15:43:48', '2019-12-04 15:43:48', ''),
(4, 'https://getuikit.com/docs/images/photo.jpg', 'weqwe', 3, 1, 1, '2019-12-04 15:43:48', '2019-12-04 15:43:48', ''),
(6, 'blackfriday.png', 'About', 1, 1, 1, '2019-12-04 15:23:51', '2019-12-04 15:23:51', 'wqevwqgeytyqwv e  bwqmehuwqioequwy'),
(7, 'blackfriday.png', 'About', 1, 1, 1, '2019-12-04 15:24:24', '2019-12-04 15:24:24', 'wqevwqgeytyqwv e  bwqmehuwqioequwy');

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
(1, 'admin', 'admin', '123456');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
