-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitchenette`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ORDER_ID` varchar(10) NOT NULL,
  `CUST_ID` varchar(10) NOT NULL,
  `CUST_NAME` varchar(100) DEFAULT NULL,
  `CUST_PHONE_NUM` varchar(11) DEFAULT NULL,
  `PACKAGE` varchar(11) DEFAULT NULL,
  `PACKAGE_PRICE` decimal(7,2) DEFAULT NULL,
  `ROOM_WIDTH` decimal(5,2) DEFAULT NULL,
  `ROOM_LENGTH` decimal(5,2) DEFAULT NULL,
  `STAFF_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ORDER_ID`, `CUST_ID`, `CUST_NAME`, `CUST_PHONE_NUM`, `PACKAGE`, `PACKAGE_PRICE`, `ROOM_WIDTH`, `ROOM_LENGTH`, `STAFF_ID`) VALUES
('12343', '1002', 'Merry', '0157668793', 'D', '300.00', '9.00', '12.00', '003'),
('12345', '1001', 'Mony', '0194687844', 'A', '800.00', '8.00', '10.00', '001'),
('56381', '1110', 'Nana', '0182744021', 'A', '1500.00', '800.00', '200.00', '011');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `STAFF_ID` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `STAFF_NAME` varchar(100) DEFAULT NULL,
  `STAFF_PHONE_NUM` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`STAFF_ID`, `PASSWORD`, `STAFF_NAME`, `STAFF_PHONE_NUM`) VALUES
('001', '1234', 'Abu', '0123456789'),
('002', '1234', 'Ali', '0168783645'),
('003', '1234', 'Amin', '0193486866'),
('005', '1234', 'Ara', '0175635392'),
('006', '1234', 'Aqila', '0183528763'),
('007', '1234', 'Anna', '01155078014'),
('011', '1234', 'Aishah', '0134493707');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `STAFF_ID` (`STAFF_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`STAFF_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`STAFF_ID`) REFERENCES `staff` (`STAFF_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
