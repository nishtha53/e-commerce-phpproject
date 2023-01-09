-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 01:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `prod_no` int(4) NOT NULL,
  `cart_no` int(4) NOT NULL,
  `qty_odered` int(4) NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `contact`, `message`) VALUES
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'working '),
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'query submitted'),
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'hiii working'),
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'submitted');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_no` int(4) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_no`, `prod_name`, `description`, `unit`, `price`, `image`) VALUES
(1, 'Dolo 650mg Strip Of ', 'Dolo 650 Tablet is a medicine used to relieve pain', '1', 100, 'assets/img/1.jpeg'),
(2, 'Omnigel', 'Omnigel is scientifically formulated, Diclofenac G', '1', 150, 'assets/img/3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `confirm_password`, `contact_no`, `address`, `email`) VALUES
(1, 'nish', 'nish', '0', 2147483647, NULL, 'nishthathakkar0503@g'),
(2, 'user', 'nish', '0', 2147483647, NULL, 'nishtha@gmail.com'),
(4, 'abc', 'nish', '0', 2147483647, NULL, 'abc@gmail.com'),
(5, 'nish', 'nish', '0', 13225154, NULL, 'nish12@gmail.com'),
(6, 'simruti', 'simruti', '0', 1252, NULL, 'simruti@gmail.com'),
(7, 'avani', 'avani', '0', 5551, NULL, 'avani@gmail.com'),
(8, 'nishu', 'nish', '0', 4525, NULL, 'nishu@gmail.com'),
(9, 'admin', '12345', '12345', 1252, NULL, 'admin@gmail.com'),
(10, 'nishtha', 'nish', '0', 2147483647, NULL, 'nishtha.work0503@gma'),
(11, 'mragank', 'mragank', '0', 2147483647, NULL, 'mragank@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
