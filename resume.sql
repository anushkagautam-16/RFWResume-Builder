-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 09:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `users977`
--

CREATE TABLE `users977` (
  `name` varchar(20) NOT NULL,
  `profilePhoto` varchar(60) NOT NULL,
  `address` varchar(70) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `description` varchar(555) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users977`
--

INSERT INTO `users977` (`name`, `profilePhoto`, `address`, `state`, `city`, `email`, `mobile`, `description`, `gender`, `dateTime`, `id`) VALUES
('banti patel', 'dgdfg', 'khana indore mushakedhi', 'mp', 'indore', 'patelvn2002@gmai.com', '9770606527', 'hii m er banru u', 'make', '2023-06-12 23:20:40', 1),
('', 'fsyfguysfg', 'sdfdf', 'sfsd', 'sdfdf', 'patelaay12@gmail.com', '7894561236', 'gerge', 'male', '2023-06-13 16:25:11', 2),
('aakash gour', 'profile photo/WhatsApp Image 2023-06-13 at 6.36.10 AM (1).jp', 'ertwrvi', 'sdc', 'sdc', 'vijay123@gmail.com', '245254345345', 'sdcdc', 'male', '2023-06-13 16:29:41', 3),
('aakash gour', 'profile photo/WhatsApp Image 2023-06-13 at 6.36.10 AM (1).jp', 'ertwrvi', 'sdc', 'sdc', 'vijay123@gmail.com', '245254345345', 'sdcdc', 'male', '2023-06-13 17:11:30', 4),
('aakash gour', 'profile photo/WhatsApp Image 2023-06-13 at 6.36.10 AM (1).jp', 'ertwrvi', 'sdc', 'sdc', 'vijay123@gmail.com', '245254345345', 'sdcdc', 'male', '2023-06-13 17:12:18', 5),
('aakash gour', 'profile photo/WhatsApp Image 2023-06-13 at 6.36.10 AM (1).jp', 'ertwrvi', 'sdc', 'sdc', 'vijay123@gmail.com', '245254345345', 'sdcdc', 'male', '2023-06-13 17:12:41', 6),
('manish gour', 'profile photo/banti resume photo.jpg', 'khandwa', 'uhj', 'khandwa', 'patelvn2002@gmail.com', '9770606527', 'hkhgkhgk', 'male', '2023-06-13 17:49:48', 7),
('vinay sadh', 'profile photo/dp.jpeg', 'uhkhg', 'khandwa', 'khandwa', 'vijay123@gmail.com', '9770606527', 'gfjfh', 'male', '2023-06-13 17:56:28', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users977`
--
ALTER TABLE `users977`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users977`
--
ALTER TABLE `users977`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
