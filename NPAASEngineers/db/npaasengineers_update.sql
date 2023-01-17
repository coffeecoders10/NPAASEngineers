-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 08:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

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
(1, 'Ashida', 'delerships/good_old_days.png', 'Ashida Desc', 'delerships/default.jpg'),
(5, 'dsdsa', 'delerships/Wedding_Invitation_Chan.png', 'dsdsdsds', 'delerships/Wedding_Invitation_F.pdf');

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
(0, 'NPAAS Engineers1', 'Numerical Protection and Automation Application Support Engineers1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit1', '', '', 'Magnam dolores commodi suscipit. N1ecessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit.1', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,1', 2321, 4321, 229, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui1', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui1', 'A108 Adam Street, New York, NY 5350221', '+1 5589 55488 551', 'contact@example.com1', 'xyz', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(8000) NOT NULL,
  `product_service` varchar(8000) NOT NULL,
  `product_description` varchar(8000) NOT NULL,
  `product_image` varchar(8000) NOT NULL,
  `product_filter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_service`, `product_description`, `product_image`, `product_filter`) VALUES
(1, 'Test11', 'Test1_service', 'Test1_desc', 'a', 'fdfd'),
(2, 'Test2', 'Test22_ser', 'Test22_sadghsadghsjagd', 'a', 'qqq'),
(11, 'sadsad', 'sadsadsa', 'dsadsad', 'asdsadds', 'sdfgh'),
(12, 'ccc', 'cccc', 'cccc', 'products/default.jpg', 'cccccc'),
(13, 'ttttttt', 'tttttttttttt', 'ttttttttttttt', 'products/default.jpg', 'ttttttttttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_list_id` int(11) NOT NULL,
  `product_list_product_id` int(11) NOT NULL,
  `product_list_name` varchar(8000) NOT NULL,
  `product_list_link` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_list_id`, `product_list_product_id`, `product_list_name`, `product_list_link`) VALUES
(1, 1, 'pqqqqqqqqqqqqqqqr', 'https://www.google.com/'),
(3, 2, 'dfdf', 'https://www.youtube.com/'),
(4, 1, 'aersdgj', 'https://www.youtube.com/'),
(8, 1, 'sdfvf', 'sdsdsds'),
(9, 1, '11111', '222222'),
(10, 2, '33333333', '333333333333'),
(11, 11, 'd', 'dd'),
(12, 13, 'ggg', 'gggg'),
(13, 13, 'iii', 'iiii');

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
(1, 'ddd', 'dddddddd'),
(2, 'Service A1', 'Description A'),
(3, 'Service B', 'Description B'),
(4, 'Service C', 'Description C');

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
(1, 'Pravin Talekar', 'Director', '987654321', 'example@example.com', 'linkedin.com', 'team/good_old_days.png'),
(2, 'xyz', 'sasss', '3456789876', 'dfds@dsd.com', 'ssasas', 'team/Dazai-Osamu-At-The-Detective-Agency-Bungo-Stray-Dogs.png'),
(3, 'tttdddd', 'ttt', '444', 'fdf@dsd.com', 'dsdsd', 'team/20211016_152712.jpg');

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
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`product_list_id`),
  ADD KEY `product_list_product_id` (`product_list_product_id`);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `product_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_list_ibfk_1` FOREIGN KEY (`product_list_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
