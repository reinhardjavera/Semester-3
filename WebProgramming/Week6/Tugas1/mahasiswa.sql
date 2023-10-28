-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 02:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro_w6`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `user_card` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `uploaded` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`user_card`, `first_name`, `last_name`, `prodi`, `image`, `uploaded`, `id`) VALUES
('1', 'mahiru', 'ijo', 'informatika', 'Cecilia edited.jpeg', '2023-10-08 23:12:06', ''),
('123', 'hu', 'tao', 'teknik liyue', 'hutao 4.png', '2023-10-08 23:18:00', ''),
('123123', 'keqing', 'wow', 'teknik ungu', 'keqing.jpeg', '2023-10-11 19:22:28', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`user_card`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
