-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 01:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medgenome`
--

-- --------------------------------------------------------

--
-- Table structure for table `oncopept_download_users`
--

CREATE TABLE `oncopept_download_users` (
`id` int(10) NOT NULL,
`name` varchar(128) NOT NULL,
`email` varchar(128) NOT NULL,
`organization` varchar(128) NOT NULL,
`created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `oncopept_download_users`
--

INSERT INTO `oncopept_download_users` (`id`, `name`, `email`, `organization`, `created_date`) VALUES
(1, 'undefined', 'undefined', 'undefined', '2016-09-19 11:01:11'),
(2, 'testing', 'sdsffsfds@gmail.com', 'dsdgdgdgfgfdggdg', '2016-09-19 11:08:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oncopept_download_users`
--
ALTER TABLE `oncopept_download_users`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oncopept_download_users`
--
ALTER TABLE `oncopept_download_users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
