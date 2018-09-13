-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 05:35 PM
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

ALTER TABLE `test` ADD `id` INT(10) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);

CREATE TABLE `oncopept_download_users` (
`id` INT(10) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`),
`name` varchar(128) NOT NULL,
`email` varchar(128) NOT NULL,
`organization` varchar(128) NOT NULL,
`designation` varchar(50) NOT NULL,
`created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oncopept_download_users`
--

INSERT INTO `oncopept_download_users` (`id`, `name`, `email`, `organization`, `designation`, `created_date`) VALUES
(1, 'undefined', 'undefined', 'undefined', '', '2016-09-19 11:01:11'),
(2, 'testing', 'sdsffsfds@gmail.com', 'dsdgdgdgfgfdggdg', '', '2016-09-19 11:08:50'),
(3, 'raggy', 's=tes@stest.com', 'sahdskhkfsadhfsdfs', '', '2016-09-19 12:17:57'),
(4, 'ADSad', 'asrasesa@AFSAFSA.COM', 'ASDF', '', '2016-09-19 12:18:59'),
(5, 'fsdfddsf', 'sdfsfsd@gmail.com', 'rthtry5575', '', '2016-09-20 07:54:37'),
(6, 'dasdsa', 'dsfss@gmail.com', 'sfgffdd', '', '2016-09-20 10:30:10'),
(7, 'csdfsfsfds', 'fdsfdsfds@gmail.com', 'weetegdgdgdf', '', '2016-09-20 10:31:57'),
(8, 'rtretet', 'eterer@gmail.com', 'eterterterter', '', '2016-09-20 11:29:15'),
(9, 'werewrw', 'undefined', 'rwrwr', 'rwrwrwwrw', '2016-09-21 06:42:02'),
(10, 'rewrwrwr', 'undefined', 'rwrwrw', 'rwrewrwr', '2016-09-21 06:42:58'),
(11, 'sfsdfsd', 'undefined', 'sdfsfds', 'fsfsfsfs', '2016-09-21 06:43:38'),
(12, 'vcvcxv', 'vxcvxcv@test.com', 'cxvxcv', 'cxvcxvcxvx', '2016-09-21 06:44:49'),
(13, '46464565464', 'test@gmail.com', 'sfdssfsf', 'sfsfsfs', '2016-09-21 06:45:08'),
(14, '435435453', 'tes@gmail.com', 'tertrete', 'tertetrtre', '2016-09-21 06:46:43'),
(15, 'sddfsfsdf', 'sfsfsd@gmail.com', 'wffdgdg', 'fdgdgfdgfd', '2016-09-21 09:41:12');

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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
