-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 10:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(0, 'chrisK', 'kingchristopher345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(0, 'chrisK123', 'Christopher.king@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(0, 'chrisK23', 'ck@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(0, 'chrisK', 'd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(0, '123456', '123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(0, '1234567', '1234567@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(0, 'chrisK', '1334@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
