-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 07:31 AM
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
-- Database: `db_bike_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `anm` varchar(255) DEFAULT NULL,
  `apass` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `anm`, `apass`, `created_dt`, `updated_dt`) VALUES
(1, 'priyanka', 'priyanka@gmail.com', '1234', '2022-12-19 16:52:45', '2022-12-30 16:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `adv_tbl`
--

CREATE TABLE `adv_tbl` (
  `adv_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `bike_title` varchar(255) DEFAULT NULL,
  `driver_type` varchar(255) DEFAULT NULL,
  `bike_no` int(11) DEFAULT NULL,
  `rc_book` varchar(255) DEFAULT NULL,
  `licence_no` int(11) DEFAULT NULL,
  `bike_pickup_add` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `rent_type` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `rent_des` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `t_and_c` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `book_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `adv_id` int(11) DEFAULT NULL,
  `from_book_dt` datetime DEFAULT NULL,
  `to_book_dt` datetime DEFAULT NULL,
  `spec_comment` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) DEFAULT NULL,
  `cate_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_img`) VALUES
(19, '  bike11', 'bike3.jpeg'),
(20, ' Honda2', 'bike2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `city_id` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`city_id`, `city`, `state_id`) VALUES
(2, 'Surat', 7),
(3, 'Ahmedabad', 7),
(4, 'Rajkot', 8);

-- --------------------------------------------------------

--
-- Table structure for table `country_tbl`
--

CREATE TABLE `country_tbl` (
  `cid` int(11) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_tbl`
--

INSERT INTO `country_tbl` (`cid`, `country`) VALUES
(1, 'India'),
(2, 'America'),
(3, 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`emp_id`, `emp_name`, `email`, `pass`, `created_dt`, `updated_dt`) VALUES
(2, 'Priyanka', 'priyanka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `feed_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `feed_des` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`feed_id`, `uid`, `feed_des`) VALUES
(1, 6, 'good'),
(2, 5, 'good'),
(3, 5, 'good'),
(4, 5, ''),
(5, 5, ''),
(6, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `state_id` int(11) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`state_id`, `state`, `cid`) VALUES
(7, 'Gujarat', 1),
(8, 'Madhya Pradesh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `unm` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL,
  `status` enum('Blocked','Unblocked') NOT NULL DEFAULT 'Unblocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `mobile`, `unm`, `pass`, `gen`, `lang`, `cid`, `file`, `created_dt`, `updated_dt`, `status`) VALUES
(5, 'priyanka', 9979159804, 'priya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', 'English,Hindi,Gujarati', 1, 'Lord Shiva1.jfif', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Unblocked'),
(6, 'priyanka', 9979159804, 'priyanka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', 'Hindi,English,Gujarati', 1, 'testimonial-4.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Blocked'),
(8, 'sejal', 9979159804, 'sejal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', 'English,Gujarati', 1, 'car-rent-2.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Unblocked');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `mob_no` bigint(11) DEFAULT NULL,
  `adhar_no` bigint(11) DEFAULT NULL,
  `dl_no` bigint(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pincode` bigint(11) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adv_tbl`
--
ALTER TABLE `adv_tbl`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `FK_adv_cate_id` (`cate_id`),
  ADD KEY `FK_adv_uid` (`uid`);

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `FK_booking_adv_id` (`adv_id`),
  ADD KEY `FK_booking_uid` (`uid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `FK_state_state_id` (`state_id`);

--
-- Indexes for table `country_tbl`
--
ALTER TABLE `country_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `FK_feedback_uid` (`uid`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `FK_state_cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adv_tbl`
--
ALTER TABLE `adv_tbl`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `country_tbl`
--
ALTER TABLE `country_tbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adv_tbl`
--
ALTER TABLE `adv_tbl`
  ADD CONSTRAINT `FK_adv_cate_id` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_adv_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD CONSTRAINT `FK_booking_adv_id` FOREIGN KEY (`adv_id`) REFERENCES `adv_tbl` (`adv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_booking_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD CONSTRAINT `FK_state_state_id` FOREIGN KEY (`state_id`) REFERENCES `state_tbl` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD CONSTRAINT `FK_feedback_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD CONSTRAINT `FK_state_cid` FOREIGN KEY (`cid`) REFERENCES `country_tbl` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
