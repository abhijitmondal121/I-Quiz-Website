-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 03:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slno` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slno`, `email`, `password`, `time`) VALUES
(1, 'flyingspace120@gmail.com', '1', '2021-06-19 08:41:42'),
(2, 'a@gmail.com', '$2y$10$31MoqzYI306g8Wi.zSXXVupV2pCK6zXM7gQUtSeFsaPTfOWftqpoi', '2021-06-19 09:00:52'),
(3, '', '$2y$10$wFla5iMnPpWLMjyvOEbxzOLKu84jW96nJ7LxGdMb51toOqKF2BCMK', '2021-06-19 09:01:20'),
(4, 'abhijit@gmail.com', '$2y$10$qidjQ3EfBXA/z70.Stbq5.XE0A27BCYHAE540UTEN5GAHGRH56Oq.', '2021-06-19 09:10:17'),
(5, 'sahelimitra.bca2019@nsec.ac.in', '$2y$10$CddM6OqKQYQLEt0/1YlrY.03LQ7k2EUYTSTX8iJPUHIuiYrxf3Kxi', '2021-06-19 09:14:40'),
(6, 'abg@gmail.com', '1', '2021-06-19 14:06:42'),
(7, 'good@gmail.com', '1', '2021-06-19 15:42:53'),
(8, 'rahon@gmail.com', '12345', '2021-06-20 10:45:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
