-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 04:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comit`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `npm` char(10) NOT NULL,
  `place_of_birth` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `major` varchar(30) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whatsapp` char(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `uniform_size` varchar(5) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `npm`, `place_of_birth`, `date_of_birth`, `major`, `semester`, `gender`, `email`, `whatsapp`, `address`, `uniform_size`, `skill`, `image`) VALUES
(11, 'Ariyan Lukita Surya Pratama', '2016804113', 'Purwokerto', '1996-03-25', 'Sistem Informasi', '8', 'L', 'pratamaariyan@gmail.com', '081314566393', 'Perum Taman Walet, Blok R4 No,1 RT 001 RW 009 Kel. Sindangsari Kec. Pasarkemis Kab. Tangerang - Bant', 'XL', 'Graphic Design', '5ec7771d24b3b.jpg'),
(12, 'Yufi Zulfa', '2018804100', 'Pandeglang', '1998-07-14', 'Sistem Informasi', '5', 'L', 'yufizulfa@gmail.com', '081311113333', 'Perum Puri Jaya', 'L', 'Programming', '5ec77b9a133ff.jpg'),
(13, 'Aulia Zahra Salsabila', '2016804101', 'Lampung', '2020-02-07', 'Teknik Informatika', '6', 'P', 'auliazahra@gmail.com', '081256569292', 'Jatiuwung', 'M', 'Belum Ada', '5ec7d59882873.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ariyan', '$2y$10$6dnu/ejw6iCQoqZoZaXQ6ON1OpRg/IYriL0NrH0jTFa1xkcH0Klt.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
