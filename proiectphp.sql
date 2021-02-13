-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 06:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiectphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `angajati`
--

CREATE TABLE `angajati` (
  `id` int(5) UNSIGNED NOT NULL,
  `nume` tinytext DEFAULT NULL,
  `prenume` tinytext DEFAULT NULL,
  `sex` tinytext DEFAULT NULL,
  `telefon` varchar(12) DEFAULT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `functia` varchar(12) DEFAULT NULL,
  `departament` varchar(12) DEFAULT NULL,
  `salar` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angajati`
--

INSERT INTO `angajati` (`id`, `nume`, `prenume`, `sex`, `telefon`, `adresa`, `functia`, `departament`, `salar`) VALUES
(1, 'Gozman-Pop', 'Dumitru', 'masculin', '+40756642058', 'strada gradinarilor nr. 54, bl D44, ap 9', 'Programator', 'IT', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `un` tinytext DEFAULT NULL,
  `nume` tinytext DEFAULT NULL,
  `prenume` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `un`, `nume`, `prenume`, `email`, `pass`) VALUES
(1, 'admin', 'admin_nume', 'admin_prenume', 'admin_email@email.com', '$2y$10$ytxXk08z3.oXMtH8hPYhuObUT79ZaF.GxzzHKKlK4/yWmQBQx.VY.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angajati`
--
ALTER TABLE `angajati`
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
-- AUTO_INCREMENT for table `angajati`
--
ALTER TABLE `angajati`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
