-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 07:30 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_name` varchar(20) NOT NULL,
  `Dnum` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_name`, `Dnum`) VALUES
('Mens_shop', 101),
('Womens_shop', 101),
('MEDICAL', 102),
('Mens_wear', 103),
('Womens_wear', 103);

-- --------------------------------------------------------

--
-- Table structure for table `custoffers`
--

CREATE TABLE `custoffers` (
  `Cust_num` int(5) NOT NULL,
  `Offer_no` int(5) NOT NULL,
  `Credits` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custoffers`
--

INSERT INTO `custoffers` (`Cust_num`, `Offer_no`, `Credits`) VALUES
(9001, 1234, 5000),
(9002, 1235, 6000),
(9003, 1236, 7438),
(9004, 1237, 9132),
(9005, 1238, 6122);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_num` int(5) NOT NULL,
  `Cust_name` varchar(20) NOT NULL,
  `Mobile_num` bigint(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_num`, `Cust_name`, `Mobile_num`, `Address`) VALUES
(9001, 'AVINASH', 7869509877, 'PODILI'),
(9002, 'Indra', 8795623140, 'Raipur'),
(9003, 'Bhavin', 7863251678, 'Bangalore'),
(9004, 'Druva', 9132895162, 'Hyderabad'),
(9005, 'Jayesh', 9933415278, 'Vijag');

-- --------------------------------------------------------

--
-- Table structure for table `departmemt`
--

CREATE TABLE `departmemt` (
  `Dnum` int(5) NOT NULL,
  `D_name` varchar(20) DEFAULT NULL,
  `Bills` decimal(8,2) DEFAULT NULL,
  `Manager_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmemt`
--

INSERT INTO `departmemt` (`Dnum`, `D_name`, `Bills`, `Manager_id`) VALUES
(101, 'Clothing', '120000.00', 501),
(102, 'Health', '170000.00', 502),
(103, 'Footwear', '600000.00', 502);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Empl_id` int(5) NOT NULL,
  `Empl_name` varchar(20) DEFAULT NULL,
  `Mobile_num` varchar(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Points` int(5) DEFAULT NULL,
  `Email_id` varchar(25) DEFAULT NULL,
  `Hire_date` date DEFAULT NULL,
  `Dnum` int(5) DEFAULT NULL,
  `working_hours` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empl_id`, `Empl_name`, `Mobile_num`, `Address`, `Points`, `Email_id`, `Hire_date`, `Dnum`, `working_hours`) VALUES
(501, 'Roy', '9586471235', 'Bhopal', 1500, 'Roy@gmail.com', '2015-02-01', 101, 16),
(502, 'Vipul', '9372563191', 'Raipur', 1720, 'Vi@gmail.vcom', '2016-11-09', 101, 12),
(503, 'Raj', '9391080875', 'Hyderabad', 1100, 'Raj@gmail.com', '2012-11-09', 101, 10),
(504, 'Shiva', '9391019192', 'Vijayawada', 900, 'SS@gmail.com', '2009-06-03', 102, 8),
(505, 'Sai', '9391016142', 'Goa', 600, 'Sai@gmail.com', '2006-01-01', 103, 14);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Date_placed` date NOT NULL,
  `Order_num` char(5) NOT NULL,
  `Cust_num` int(5) NOT NULL,
  `Total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Date_placed`, `Order_num`, `Cust_num`, `Total`) VALUES
('2017-11-10', 'A0001', 9001, 5000),
('2017-11-14', 'A0002', 9005, 7000),
('2017-11-11', 'B0001', 9002, 15000),
('2017-11-12', 'B0002', 9003, 6000),
('2017-11-13', 'B0003', 9004, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `Offer_no` int(5) NOT NULL,
  `Scale` int(2) DEFAULT NULL,
  `cat_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`Offer_no`, `Scale`, `cat_name`) VALUES
(1234, 10, 'MEDICAL'),
(1235, 20, 'Mens_shop'),
(1236, 50, 'Womens_wear'),
(1237, 25, 'Womens_shop'),
(1238, 30, 'Womens_wear');

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `Order_num` char(5) NOT NULL,
  `Product_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`Order_num`, `Product_id`) VALUES
('A0001', 701),
('A0001', 702),
('B0002', 702),
('A0002', 703),
('A0002', 704),
('B0003', 704),
('B0001', 705),
('B0001', 706);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_name` varchar(20) NOT NULL,
  `Product_Id` int(15) NOT NULL,
  `Cat_Name` varchar(20) NOT NULL,
  `Price` decimal(8,2) DEFAULT NULL,
  `Mfr_date` date NOT NULL,
  `Exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_name`, `Product_Id`, `Cat_Name`, `Price`, `Mfr_date`, `Exp_date`) VALUES
('Antibiotic', 701, 'MEDICAL', '1500.00', '2017-07-10', '2019-01-01'),
('Paragon5132', 702, 'Mens_wear', '10000.00', '2016-01-31', '2020-11-21'),
('Bata6191', 703, 'Womens_wear', '110000.00', '2015-03-12', '2019-11-12'),
('Vkc91', 704, 'Mens_wear', '9000.00', '2016-02-11', '2018-06-07'),
('Raymond', 705, 'Mens_shop', '51000.00', '2015-09-12', '2018-09-12'),
('Sonam sarees', 706, 'Womens_shop', '480000.00', '2016-11-01', '2018-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_name`),
  ADD KEY `Dnum` (`Dnum`);

--
-- Indexes for table `custoffers`
--
ALTER TABLE `custoffers`
  ADD PRIMARY KEY (`Cust_num`,`Offer_no`),
  ADD KEY `Cust_num` (`Cust_num`),
  ADD KEY `Offer_no` (`Offer_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_num`);

--
-- Indexes for table `departmemt`
--
ALTER TABLE `departmemt`
  ADD PRIMARY KEY (`Dnum`),
  ADD KEY `Manager_id` (`Manager_id`),
  ADD KEY `Manager_id_2` (`Manager_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Empl_id`),
  ADD KEY `Dnum` (`Dnum`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Order_num`),
  ADD KEY `Cust_num` (`Cust_num`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`Offer_no`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`Order_num`,`Product_id`),
  ADD KEY `Order_num` (`Order_num`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`),
  ADD KEY `Cat_Name` (`Cat_Name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`Dnum`) REFERENCES `departmemt` (`Dnum`);

--
-- Constraints for table `custoffers`
--
ALTER TABLE `custoffers`
  ADD CONSTRAINT `custoffers_ibfk_1` FOREIGN KEY (`Cust_num`) REFERENCES `customer` (`Cust_num`),
  ADD CONSTRAINT `custoffers_ibfk_2` FOREIGN KEY (`Offer_no`) REFERENCES `offers` (`Offer_no`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Dnum`) REFERENCES `departmemt` (`Dnum`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`Cust_num`) REFERENCES `customer` (`Cust_num`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`cat_name`) REFERENCES `category` (`Cat_name`);

--
-- Constraints for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD CONSTRAINT `orderproducts_ibfk_3` FOREIGN KEY (`Order_num`) REFERENCES `invoice` (`Order_num`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_Name`) REFERENCES `category` (`Cat_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
