-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 06:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `img`, `name`, `price`) VALUES
(8, '..\\img\\product1.jpg', 'Laptop Apple MacBook Pro 16, 16.2\", M1 Pro 10-bërthamor, 16GB RAM LPDDR4X, 1TB SSD, GPU 16-bërthamor, i hirtë.', 2979),
(31, '..\\img\\product4.jpg', 'Earbuds QCY T1C', 20),
(32, '..\\img\\product5.jpg', 'Kamerë GoPro HERO9, e zezë', 580),
(33, '..\\img\\product6.jpg', 'Intel Core i5-11400 Procesor', 580),
(34, '..\\img\\product7.jpg', 'Xiaomi Mi band 6', 50),
(35, '..\\img\\product10.jpg', 'Logitech MX Keys for Mac - Keyboard ', 140),
(36, '..\\img\\product11.jpg', 'DELL 27\" 4K U2723QE ', 990),
(37, '..\\img\\product12.jpg', 'MSI RTX 3070 Ti GAMING', 1300),
(38, '..\\img\\product13.jpg', 'Apple MacBook Pro 13', 1800),
(39, '..\\img\\product14.jpg', ' Logitech G920 Driving Force ', 440),
(40, '..\\img\\product15.jpg', 'DELL Vostro 3510 15.6\" FHD', 1100),
(41, '..\\img\\product16.jpg', ' Samsung 870 EVO 1TB 2.5\", Internal SSD ', 150),
(42, '../img/slider2.jpg', 'TEST 2', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(24, 'Blini', 'blinimujka@gmail.com', 'blinimujka@gmail.com', 0),
(27, 'blini1', 'blinimujka3@gmail.com', '$2y$10$RQo2aG.wkoAJzLLto1rzJO/ZiDhSaxk2EOlBPgCobIqczUIdgA9pW', 0),
(52, 'user2', 'blini123@gmail.com', '$2y$10$QjBdfmb8XtYQlfeLuasOZ.KvkXfdnoD0hdETpaCM8u6wDEJG.3Eyi', 0),
(54, 'admin', 'admin@gmail.com', '$2y$10$8LdhJN6XeqFh9SOhCpyrb.g4LZlYlFiZKFsm0egVy0XtZjWtw27K.', 1),
(55, 'blini', 'blini99@gmail.com', '$2y$10$Z7Im8QuOmcRs3GajKn0RdehxoepSD2wQx/XLCXTrTeTpYEginGM0u', 0),
(58, 'admin2', 'admin2@gmail.com', '$2y$10$HFOLSxSAWX4sgvLV7tksEu.c1fkL8cKj9u7ae.bSUFglJrDLLkwBy', 1),
(59, 'user3', 'user@gmail.com', '$2y$10$WyhUm8GIY5weAhvAVthagehIZsS7V9nN9UNfD/Pfxfp.VcP5QsUPa', 0),
(60, 'user99', 'user99@gmail.com', '$2y$10$Ilpia9Tsd9i5AK8VL0Y3SuZPAEvzW3wqudTb93Nvyp.h5DVtK4D7O', 0),
(61, 'blini', 'blini111@gmail.com', '$2y$10$459eWulDfKHWk3kx3wYGV.cWgJ.VsO0d.KVp74gsx52Uc4BoL6FXS', 0),
(62, 'blini', 'blini0@gmail.com', '$2y$10$Z1/hdadfhcSOjuDbMe3KvOBYJPupQAoX56NMkJBjLiS3V55aU/XiG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
