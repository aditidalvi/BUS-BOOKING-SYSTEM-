-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 17, 2020 at 03:39 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `d` varchar(10) NOT NULL,
  `bus_no` int(3) NOT NULL,
  `travels` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `dept_time` varchar(10) NOT NULL,
  `seats` int(2) NOT NULL,
  `fare` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`d`, `bus_no`, `travels`, `type`, `dept_time`, `seats`, `fare`) VALUES
('05-12-2020', 101, 'Paulo Travels', 'seater', '6.30 p.m', 25, 'Rs. 750'),
('05-12-2020', 102, 'Paulo Travels', 'seater', '6.30 p.m', 24, 'Rs. 750'),
('05-12-2020', 201, 'Neeta Travels', 'sleeper', '7.30 p.m', 16, 'Rs. 1000'),
('05-12-2020', 202, 'Neeta Travels', 'sleeper', '7.30 p.m', 16, 'Rs. 1000');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `ticket_no` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(2) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `card_no` int(10) NOT NULL,
  `card_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`ticket_no`, `name`, `gender`, `age`, `mobile`, `email`, `card_no`, `card_name`) VALUES
(10012, 'uzma', 'F', 23, 12345678, 'newuser4@company.com', 1234567, 'uz');

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`name`, `email`, `mobile`, `message`) VALUES
('', '', '987658900', 'done'),
('', '', '987658900', 'done'),
('', '', '987658900', 'done'),
('uzma', 'newuser4@company.com', '987658900', 'done'),
('uzma', 'newuser4@company.com', '987658900', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `bus_no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`from`, `to`, `date`, `bus_no`) VALUES
('Goa', 'Bombay', '05-12-2020', 101),
('Goa ', 'Bombay', '05-12-2020', 201),
('Bombay', 'Goa', '05-12-2020', 102),
('Bombay', 'Goa', '05-12-2020', 202);

-- --------------------------------------------------------

--
-- Table structure for table `seat_details`
--

CREATE TABLE `seat_details` (
  `d` varchar(10) NOT NULL,
  `bus_no` int(3) NOT NULL,
  `seat_no` int(2) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ticket_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_details`
--

INSERT INTO `seat_details` (`d`, `bus_no`, `seat_no`, `status`, `ticket_no`) VALUES
('05-12-2020', 101, 1, 'available', 0),
('05-12-2020', 101, 2, 'available', 0),
('05-12-2020', 101, 3, 'available', 0),
('05-12-2020', 101, 4, 'available', 0),
('05-12-2020', 101, 5, 'available', 0),
('05-12-2020', 101, 6, 'available', 0),
('05-12-2020', 101, 7, 'available', 0),
('05-12-2020', 101, 8, 'available', 0),
('05-12-2020', 101, 9, 'available', 0),
('05-12-2020', 101, 10, 'available', 0),
('05-12-2020', 101, 11, 'available', 0),
('05-12-2020', 101, 12, 'available', 0),
('05-12-2020', 101, 13, 'available', 0),
('05-12-2020', 101, 14, 'available', 0),
('05-12-2020', 101, 15, 'available', 0),
('05-12-2020', 101, 16, 'available', 0),
('05-12-2020', 101, 17, 'available', 0),
('05-12-2020', 101, 18, 'available', 0),
('05-12-2020', 101, 19, 'available', 0),
('05-12-2020', 101, 20, 'available', 0),
('05-12-2020', 101, 21, 'available', 0),
('05-12-2020', 101, 22, 'available', 0),
('05-12-2020', 101, 23, 'available', 0),
('05-12-2020', 101, 24, 'available', 0),
('05-12-2020', 101, 25, 'available', 0),
('05-12-2020', 102, 1, 'booked', 10012),
('05-12-2020', 102, 2, 'available', 0),
('05-12-2020', 102, 3, 'available', 0),
('05-12-2020', 102, 4, 'available', 0),
('05-12-2020', 102, 5, 'available', 0),
('05-12-2', 102, 6, 'available', 0),
('05-12-2020', 102, 7, 'available', 0),
('05-12-2020', 102, 8, 'available', 0),
('05-12-2020', 102, 9, 'available', 0),
('05-12-2020', 102, 10, 'available', 0),
('05-12-2020', 102, 11, 'available', 0),
('05-12-2020', 102, 12, 'available', 0),
('05-12-2020', 102, 13, 'available', 0),
('05-12-2020', 102, 14, 'available', 0),
('05-12-2020', 102, 15, 'available', 0),
('05-12-2020', 102, 16, 'available', 0),
('05-12-2020', 102, 17, 'available', 0),
('05-12-2020', 102, 18, 'available', 0),
('05-12-2020', 102, 19, 'available', 0),
('05-12-2020', 102, 20, 'available', 0),
('05-12-2020', 102, 21, 'available', 0),
('05-12-2020', 102, 22, 'available', 0),
('05-12-2020', 102, 23, 'available', 0),
('05-12-2020', 102, 24, 'available', 0),
('05-12-2020', 102, 25, 'available', 0),
('05-12-2020', 201, 1, 'available', 0),
('05-12-2020', 201, 2, 'available', 0),
('05-12-2020', 201, 3, 'available', 0),
('05-12-2020', 201, 4, 'available', 0),
('05-12-2020', 201, 5, 'available', 0),
('05-12-2020', 201, 6, 'available', 0),
('05-12-2020', 201, 7, 'available', 0),
('05-12-2020', 201, 8, 'available', 0),
('05-12-2020', 201, 9, 'available', 0),
('05-12-2020', 201, 10, 'available', 0),
('05-12-2020', 201, 11, 'available', 0),
('05-12-2020', 201, 12, 'available', 0),
('05-12-2020', 201, 13, 'available', 0),
('05-12-2020', 201, 14, 'available', 0),
('05-12-2020', 201, 15, 'available', 0),
('05-12-2020', 201, 16, 'available', 0),
('05-12-2020', 201, 17, 'available', 0),
('05-12-2020', 201, 18, 'available', 0),
('05-12-2020', 201, 19, 'available', 0),
('05-12-2020', 201, 20, 'available', 0),
('05-12-2020', 201, 21, 'available', 0),
('05-12-2020', 201, 22, 'available', 0),
('05-12-2020', 201, 23, 'available', 0),
('05-12-2020', 201, 24, 'available', 0),
('05-12-2020', 201, 25, 'available', 0),
('05-12-2020', 202, 1, 'available', 0),
('05-12-2020', 202, 2, 'available', 0),
('05-12-2020', 202, 3, 'available', 0),
('05-12-2020', 202, 4, 'available', 0),
('05-12-2020', 202, 5, 'available', 0),
('05-12-2020', 202, 6, 'available', 0),
('05-12-2020', 202, 7, 'available', 0),
('05-12-2020', 202, 8, 'available', 0),
('05-12-2020', 202, 9, 'available', 0),
('05-12-2020', 202, 10, 'available', 0),
('05-12-2020', 202, 11, 'available', 0),
('05-12-2020', 202, 12, 'available', 0),
('05-12-2020', 202, 13, 'available', 0),
('05-12-2020', 202, 14, 'available', 0),
('05-12-2020', 202, 15, 'available', 0),
('05-12-2020', 202, 16, 'available', 0),
('05-12-2020', 202, 17, 'available', 0),
('05-12-2020', 202, 18, 'available', 0),
('05-12-2020', 202, 19, 'available', 0),
('05-12-2020', 202, 20, 'available', 0),
('05-12-2020', 202, 21, 'available', 0),
('05-12-2020', 202, 22, 'available', 0),
('05-12-2020', 202, 23, 'available', 0),
('05-12-2020', 202, 24, 'available', 0),
('05-12-2020', 202, 25, 'available', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_no`
--

CREATE TABLE `ticket_no` (
  `x` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_no`
--

INSERT INTO `ticket_no` (`x`) VALUES
(10012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`d`,`bus_no`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`ticket_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
