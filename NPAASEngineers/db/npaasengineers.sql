-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 01:26 PM
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
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `name`, `full_name`, `about`, `imp_point1`, `imp_point2`, `services_desc`, `inquires`, `client_no`, `product_no`, `members_no`, `product_desc`, `team_desc`, `address`, `phone`, `email`) VALUES
(0, 'NPAAS Engineers', 'Numerical Protection and Automation Application Support Engineers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit', 'ImpPoint1| sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', 'ImpPoint2|Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit.', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,', 232, 432, 23, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui', 'A108 Adam Street, New York, NY 535022', '+1 5589 55488 55', 'contact@example.com');

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
(1, 'Test1', 'Test1_service', 'Test1_desc', 'a', 'assets/img/products/default.jpg', 'a123|b1234'),
(2, 'Test22', 'Test22_ser', 'Test22_sadghsadghsjagd', 'a', 'assets/img/products/default.jpg', 'aasd123|bds1234|nbn12');

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
(1, 'Service A', 'Description A'),
(2, 'Service B', 'Description B'),
(3, 'Service C', 'Description C'),
(4, 'Service D', 'Description D');

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
  `team_linkedin` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_designation`, `team_phone`, `team_email`, `team_linkedin`) VALUES
(1, 'Pravin Talekar', 'Director', '987654321', 'example@example.com', 'linkedin.com');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
