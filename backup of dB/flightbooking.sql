-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 02:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `flightid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `passengers` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `departure` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`flightid`, `name`, `email`, `phone`, `address`, `destination`, `passengers`, `arrivals`, `departure`) VALUES
(1, 'Shanice Callus', 'shanicallus@outlook.com', '12345678', 'Triq it-triq, Malta', 'Rome', 2, '2022-11-16', '2022-11-18'),
(2, '', '', '', '', '', 0, '0000-00-00', '0000-00-00'),
(3, 'a', 'a@gmail.com', '123456', 'dnjkc', 'paris', 2, '0000-00-00', '2001-12-21'),
(4, 'Shanice Callus', 'shanicallus@outlook.com', '99565388', 'Ent B, Flat 4, Triq l-Ajkla', 'Malta', 1, '2022-11-30', '2022-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `pwd`) VALUES
(1, 'a', 'b', 'a@b.com', '$2y$10$scZCnduQdvJfhdUhQ956..pjWzve61b9TmxL4Gc54w7z1v38lMqk.'),
(2, 'ab', 'ab', 'aaa@bbb.com', '$2y$10$KV5v3X40CMUdHddidBQVX.0bcDZ.pwqtzeo7P7hOSVNOgRhOkXAt.'),
(3, 'giorgia', 'meloni', 'giorgia@meloni.com', '$2y$10$ACUuqXm9j2TMMsqd3g4MoO8oXSFYq8pjNgdBdt/3NXHOaR37cFz3W'),
(4, 'shanice', 'callus', 'shanicallus@outlook.com', '$2y$10$/GrxPoGrAscuD9LAnZCPK.LGcLl9XVBycr5uy0tnqnTDKunDESUj6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `flightid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
