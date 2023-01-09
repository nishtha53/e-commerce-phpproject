-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 08:32 PM
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
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'hiii working'),
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'query submitted'),
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'submitted'),
('divya', 'thakkar', 'divya@gmail.com', 225251, 'testing contact us'),
('Nishtha', 'thakkar', 'nishthathakkar0503@gmail.com', 0, 'working '),
('mragank', 'verma', 'mragank@gmail.com', 2147483647, 'testing');

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
(2, 'Omnigel', 'Omnigel is scientifically formulated, Diclofenac G', '1', 150, 'assets/img/3.jpeg'),
(3, 'Cofsils Lozenges Ora', 'Cofsils Lozenges contains Amylmetacresol and Dichl', '1', 60, 'assets/img/4.jpeg'),
(4, 'Isotine Eye Drop (10', 'This eye drop contains potent ayurvedic herbs It c', '1', 150, 'assets/img/5.jpeg'),
(5, 'Moov Pain Relief Cre', 'The mint leaves in Moov pain relief cream gives a ', '1', 50, 'assets/img/6 (2).jpg'),
(6, 'Neurobion Forte Tabl', 'Supports the nervous system functioning Strengthen', '1', 100, 'assets/img/8.jpg'),
(7, 'Saridon Headache Rel', 'Helps to treat headache Effective for different he', '1', 200, 'assets/img/7.jpg'),
(8, 'Organic India Flaxse', 'Indicated in high cholesterol, low immune states, ', '1', 250, 'assets/img/10.jpg'),
(9, 'Ascoril LS Syrup', 'Ascoril LS Syrup is a combination medicine used in', '1', 135, 'assets/img/9.jpg');

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
(1, 'user', 'nish', '0', 2147483647, NULL, 'nishtha@gmail.com'),
(2, 'nish', 'nish', '0', 13225154, NULL, 'nish12@gmail.com'),
(3, 'admin', '12345', '12345', 1252, NULL, 'admin@gmail.com'),
(4, 'mragank', 'mragank', '0', 2147483647, NULL, 'mragank@gmail.com'),
(5, 'jenisha', 'jenisha', '', 452525, NULL, 'jenisha@gmail.com'),
(6, 'akash', 'akash', '', 2147483647, NULL, 'akash@gmail.com');

--
-- Indexes for dumped tables
--

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
  MODIFY `prod_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
