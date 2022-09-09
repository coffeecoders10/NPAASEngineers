-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 06:14 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npaasengineers`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealerships`
--

CREATE TABLE `dealerships` (
  `dealer_id` int(20) NOT NULL,
  `dealer_name` varchar(200) NOT NULL,
  `dealer_image` varchar(200) NOT NULL,
  `dealer_desc` varchar(200) NOT NULL,
  `dealer_cert` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealerships`
--

INSERT INTO `dealerships` (`dealer_id`, `dealer_name`, `dealer_image`, `dealer_desc`, `dealer_cert`) VALUES
(1, 'Ashida', 'delerships/default.jpg', 'Ashida Desc', 'delerships/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info_id` int(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL,
  `imp_point1` varchar(500) NOT NULL,
  `imp_point2` varchar(500) NOT NULL,
  `services_desc` varchar(500) NOT NULL,
  `inquires` varchar(500) NOT NULL,
  `client_no` int(200) NOT NULL,
  `product_no` int(200) NOT NULL,
  `members_no` int(200) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `team_desc` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `user_name` varchar(8000) NOT NULL,
  `password` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `name`, `full_name`, `about`, `imp_point1`, `imp_point2`, `services_desc`, `inquires`, `client_no`, `product_no`, `members_no`, `product_desc`, `team_desc`, `address`, `phone`, `email`, `user_name`, `password`) VALUES
(0, 'NPAAS Engineers', 'Numerical Protection and Automation Application Support Engineers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit', '', '', 'Magnam dolores commodi suscipit. N1ecessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit.', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,', 232, 432, 229, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui', 'B-503, Pruthvi Enclave 2, Opp. Bhor Industries, Borivali (E), Mum-400066', '+91 99675805444', 'pravintalekar@npaasengineers.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(8000) NOT NULL,
  `product_service` varchar(8000) NOT NULL,
  `product_description` varchar(8000) NOT NULL,
  `product_list` varchar(500) NOT NULL,
  `product_image` varchar(8000) NOT NULL,
  `product_filter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_service`, `product_description`, `product_list`, `product_image`, `product_filter`) VALUES
(1, 'Sample Product 1', 'Sample Service Desc', 'Sample Product Desc', 'prod_1|prod_2', 'products/default.jpg', 'one'),
(2, 'Sample Product 2', 'Sample Service Desc 2', 'Sample Product Desc 2', 'prod_11|prod_12|prod_13', 'products/default.jpg', 'two');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(200) NOT NULL,
  `service_name` varchar(500) NOT NULL,
  `service_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_desc`) VALUES
(2, 'Service A', 'Description A'),
(3, 'Service B', 'Description B'),
(4, 'Service C', 'Description C'),
(5, 'Service D', 'Description D');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(8000) NOT NULL,
  `team_designation` varchar(8000) NOT NULL,
  `team_phone` varchar(200) NOT NULL,
  `team_email` varchar(8000) NOT NULL,
  `team_linkedin` varchar(8000) NOT NULL,
  `team_image` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_designation`, `team_phone`, `team_email`, `team_linkedin`, `team_image`) VALUES
(1, 'Pravin Talekar', 'Director', '919967580544', 'pravintalekar@npaasengineers.com', 'linkedin.com', 'team/default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealerships`
--
ALTER TABLE `dealerships`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealerships`
--
ALTER TABLE `dealerships`
  MODIFY `dealer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
