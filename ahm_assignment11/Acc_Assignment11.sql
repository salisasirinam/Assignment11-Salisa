-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2018 at 03:35 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Acc_Assignment11`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(50) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `shipping_addr` varchar(500) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `qty` int(250) NOT NULL,
  `unit_cost` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `supplier`, `shipping_addr`, `purchase_order_date`, `product`, `description`, `qty`, `unit_cost`) VALUES
(1, '', '', '0000-00-00', 'cake', 'cake for bd', 1, '4'),
(2, '', '', '0000-00-00', 'a', 'b', 2, '2'),
(3, '', '', '0000-00-00', '2', '4', 5, '6'),
(4, 'ratana', 'home', '0000-00-00', 'test', '4', 5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `Vendor_id` int(20) NOT NULL,
  `Vendor_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_number` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Zipcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`Vendor_id`, `Vendor_name`, `Address`, `Email`, `Phone_number`, `Zipcode`) VALUES
(16, 'ratana1', 'home', 'ratana@gmial.com', '345678', '4567'),
(17, 'test2', 'home2', 'Test1@gmail.com', '3456', '3465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`Vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `Vendor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
