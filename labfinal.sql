-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 09:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `contactno` int(100) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contactno`, `designation`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 19999, 'Admin', 'admin', 'admin', '0000-00-00', '0000-00-00'),
(2, 'test', 1111, 'test', 'test', 'test', '0001-11-30', '0001-11-30'),
(3, 'tanvir', 1111, 'Admin', 'tanvir', '123', '2019-12-12', '2019-12-12'),
(4, 'test1', 1111, 'test', 'test1', 'admin', '2019-12-12', '2019-12-12'),
(5, 'test1', 1111, 'test', 'test1', 'admin', '2019-12-12', '2019-12-12'),
(6, 'test1', 1111, 'test', 'test1', 'admin', '2019-12-12', '2019-12-12'),
(7, 'shb', 34456, 'Admin', 'yyy', '123', '2019-12-12', '2019-12-12'),
(8, 'test', 1111, 'Admin', '777', '55', '2019-12-12', '2019-12-12'),
(9, 'test2', 1111, 'Admin', 'tw', 'admin', '2019-12-12', '2019-12-12'),
(10, 'test3', 1111, 'Admin', 'test3', 'admin', '2019-12-12', '2019-12-12'),
(11, 'ttttttt', 1111, 'test', 'rrrr', 'admin', '2019-12-12', '2019-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
