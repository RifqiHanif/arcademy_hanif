-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 02:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_programmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_skills`
--
CREATE DATABASE data_programmer;
USE data_programmer;

CREATE TABLE `tabel_skills` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_skills`
--

INSERT INTO `tabel_skills` (`id`, `name`, `user_id`) VALUES
(1, 'Java', 1),
(2, 'Java', 2),
(3, 'PHP', 3),
(4, 'PHP', 1),
(5, 'Android', 2),
(6, 'Android', 3),
(7, 'HTML/CSS', 1),
(8, 'HTML/CSS', 2),
(9, 'HTML/CSS', 3),
(10, 'Java', 4),
(11, 'Android', 4),
(12, 'IoT', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_users`
--

CREATE TABLE `tabel_users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_users`
--

INSERT INTO `tabel_users` (`id`, `name`) VALUES
(1, 'Rifqi Hanif'),
(2, 'Fira Samawa'),
(3, 'Alya Sabrina'),
(4, 'test'),
(5, 'Didit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_skills`
--
ALTER TABLE `tabel_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tabel_users`
--
ALTER TABLE `tabel_users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_skills`
--
ALTER TABLE `tabel_skills`
  ADD CONSTRAINT `tabel_skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tabel_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
