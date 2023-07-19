-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 06:46 PM
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
-- Database: `todo-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(9999) NOT NULL,
  `deadline` date NOT NULL,
  `prioritas` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `waktu-dibuat` date NOT NULL DEFAULT current_timestamp(),
  `waktu-diupdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `judul`, `deskripsi`, `deadline`, `prioritas`, `status`, `waktu-dibuat`, `waktu-diupdate`) VALUES
(60, 'Kasih Makan Kucing', 'Kasih makan kucing nanti sore', '2023-07-18', 'sedang', 'Complete', '2023-07-17', '2023-07-17'),
(64, 'Nanya teman masih hidup', 'gue nanya dia apakah masih hidup dia\r\ndia bilang udah mati\r\nUpdate:ternyata masi hidup', '2023-07-17', 'tinggi', 'Complete', '2023-07-17', '2023-07-19'),
(79, 'Makan', 'Nanti makan', '2023-07-19', 'rendah', 'Complete', '2023-07-19', '2023-07-19'),
(81, 'Belajar', 'Belajar Coding', '2023-07-28', 'tinggi', 'Not Completed', '2023-07-19', '2023-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`) VALUES
(1, 'admin', '$2y$10$S8anRlz55b3hwVlfvxIPh.SNqhAhUoB6uhQzndF3y9ovZUl5bRcIa'),
(2, 'testing', '$2y$10$ujzVH.Fi/iRkoq93cI8OP.bWXJtTR7FG1C3vlCl5Z5bvtn4zqeK2i'),
(3, 'testingg', '$2y$10$tYdZQmqbtzu6APmldz5br.mMczZ631EiemWD446tJ3InJ2wsDTTna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
