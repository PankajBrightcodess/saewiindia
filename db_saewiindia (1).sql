-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 12:13 PM
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
-- Database: `db_saewiindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `sa_registration`
--

CREATE TABLE `sa_registration` (
  `id` int(11) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `middlename` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `fathername` varchar(50) DEFAULT NULL,
  `mothername` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `address3` varchar(100) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `contactno` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `amount` decimal(11,0) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `payment_details` varchar(50) DEFAULT NULL,
  `payment_status` int(11) DEFAULT 0,
  `added_on` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sa_registration`
--

INSERT INTO `sa_registration` (`id`, `order_no`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `dob`, `occupation`, `address1`, `address2`, `address3`, `town`, `state`, `pincode`, `contactno`, `email`, `amount`, `photo`, `payment_id`, `payment_details`, `payment_status`, `added_on`, `status`) VALUES
(1, 'JFHLIHQA83497250UzVP', 'Pankaj', 'Mani', 'Tiwari', 'nbnbv', 'ghnfghfg', '2021-08-06', 'gfdy', 'JSQ4,', 'ACC COLONY', 'Ranchi Jharkhand', 'Ranchi', 'Jharkhand', '829205', '9297827636', 'pmt.pankaj29@GMAIL.COM', '2000', NULL, NULL, NULL, 0, '2021-08-05 17:37:44', 1),
(2, 'IXRGLEYT80253619sJkb', 'Ajay', 'singh', 'Singh', 'sanjay singh', 'veena tiwari', '2021-08-12', 'teacher', 'ranchi', '', '', 'ranchi', 'ranchi', '85964', '7894562587', 'adb@gmail.com', '1582', NULL, NULL, NULL, 0, '2021-08-06 14:37:42', 1),
(3, 'AKZXHEVU26479508dwTS', 'Ajay', '', 'Singh', 'sanjay singh', 'neha singh', '2021-06-29', 'abcd', 'ranchi', '', '', 'ranchi', 'ranchi', '85964', '7894562587', 'adb@gmail.com', '2', NULL, NULL, NULL, 0, '2021-08-06 14:51:46', 1),
(4, 'RHHIFPFX68307951XUOw', 'Ajay', 'singh', 'Singh', 'sanjay singh', 'neha singh', '2021-06-29', 'abcd', 'ranchi', '', '', 'ranchi', 'ranchi', '85964', '7894562587', 'adb@gmail.com', '200', NULL, 'pay_HhrcBOXMbsKILC', '{\"razorpay_payment_id\":\"pay_HhrcBOXMbsKILC\",\"merch', 1, '2021-08-06 15:01:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sa_users`
--

CREATE TABLE `sa_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sa_users`
--

INSERT INTO `sa_users` (`id`, `username`, `pass`, `email`, `phone`, `role`, `added_on`, `status`) VALUES
(1, 'admin', '123456', 'seawinindia@gmail.com', '7894561256', '\"admin\"', '2021-08-05 00:00:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sa_registration`
--
ALTER TABLE `sa_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sa_users`
--
ALTER TABLE `sa_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sa_registration`
--
ALTER TABLE `sa_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sa_users`
--
ALTER TABLE `sa_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
