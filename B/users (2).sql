-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2023 at 06:49 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userlevel` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'somxai', 'ngakhamphithoun', 'A'),
(2, 'user', '202cb962ac59075b964b07152d234b70', 'somxai', 'ngakhamphithoun', 'M'),
(3, 'Somxai', '202cb962ac59075b964b07152d234b70', 'xai', 'xai', 'M'),
(4, 'assasa', '202cb962ac59075b964b07152d234b70', 'dssdds', 'dsds', 'M'),
(5, 'dsds', '4ab47e54c2f73ad4c0eb3974709721cd', 'sdds', 'sdds', 'M'),
(6, 'dss', '0412ffc5e7e1a19d8d23b4e288b3ced4', 'sdds', 'sdds', 'M'),
(7, 'sdds', '0412ffc5e7e1a19d8d23b4e288b3ced4', 'sdds', 'sdsd', 'M'),
(8, '222', '202cb962ac59075b964b07152d234b70', '232', '232', 'M');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
