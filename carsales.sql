-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 09:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsales`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `ID` int(12) NOT NULL,
  `carname` varchar(12) NOT NULL,
  `model` enum('BMW','VOLVO','TOYOTA','NISSAN','MERCEDES') NOT NULL,
  `year` varchar(25) NOT NULL,
  `price` int(12) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`ID`, `carname`, `model`, `year`, `price`, `descr`, `img`) VALUES
(18, 'COROLLA', 'MERCEDES', '2002-01-09', 99999999, 'Black', 'pic.jpg'),
(19, 'MARK X', 'NISSAN', '2020-09-07', 90000000, 'Black\r\nWhite ', 'car1.png'),
(20, 'MARK X', 'NISSAN', '2024-01-02', 897666666, 'Black\r\n3000 CC', 'car3.jpg'),
(21, 'X 6 ', 'MERCEDES', '2024-01-01', 1000000, 'Chuma\r\nNyeusi', 'car4.jpg'),
(22, 'x 456', 'MERCEDES', '2024-01-01', 56000000, 'Black\r\nLeather Silhoutte', 'car2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carproduct`
--

CREATE TABLE `carproduct` (
  `ID` int(12) NOT NULL,
  `car_name` varchar(15) NOT NULL,
  `car_model` varchar(15) NOT NULL,
  `car_year` date NOT NULL,
  `car_price` int(100) NOT NULL,
  `Car_description` varchar(15) NOT NULL,
  `car_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carproduct`
--

INSERT INTO `carproduct` (`ID`, `car_name`, `car_model`, `car_year`, `car_price`, `Car_description`, `car_image`) VALUES
(1, '1', '1', '0000-00-00', 1, '1', ''),
(2, '1', '1', '0000-00-00', 1, '1', ''),
(3, '1', '1', '0000-00-00', 1, '1', ''),
(4, '1', '1', '0000-00-00', 1, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `ID` int(5) NOT NULL,
  `p_name` varchar(15) NOT NULL,
  `p_image` varchar(20) NOT NULL,
  `p_quant` int(5) NOT NULL,
  `p_model` varchar(20) NOT NULL,
  `p_price` int(30) NOT NULL,
  `p_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`ID`, `p_name`, `p_image`, `p_quant`, `p_model`, `p_price`, `p_desc`) VALUES
(1, 'COROLLA', 'pic.jpg', 1, 'MERCEDES', 99999999, 'Black'),
(2, 'MARK X', 'car1.png', 1, 'NISSAN', 90000000, 'Black\r\nWhite '),
(3, 'COROLLA', 'pic.jpg', 1, 'MERCEDES', 99999999, 'Black'),
(15, 'COROLLA', 'pic.jpg', 1, 'MERCEDES', 99999999, 'Black'),
(16, 'COROLLA', 'pic.jpg', 1, 'MERCEDES', 99999999, 'Black'),
(17, 'COROLLA', 'pic.jpg', 1, 'MERCEDES', 99999999, 'Black'),
(18, 'MARK X', 'car1.png', 1, 'NISSAN', 90000000, 'Black\r\nWhite '),
(19, 'COROLLA', 'pic.jpg', 5, 'MERCEDES', 499999995, 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `sname`, `phone`, `email`, `password`) VALUES
('Kevin', 'Lksks', 7898902, 'h@gmail', 'sdcdssf'),
('caspal', 'Wendo', 714571469, 'josphatmuchemi346@gm', '12345678'),
('k', 'l', 714571469, 'k@gmail.com', '1234'),
('jokov', 'astro', 7899098, 'b@gmail.com', '1234'),
('j', 'k', 2147483647, 'jk@gmail.com', '12345678'),
('judy', 'kash', 2147483647, 'judy@gmail.com', '87654321'),
('y', 'j', 714571469, 'y@gmail.com', '12345678'),
('laban', 'njau', 2147483647, 'laban@gmail.com', '12345678'),
('laban', 'njau', 2147483647, 'laban@gmail.com', '12345678'),
('purity', 'mureithi', 2147483647, 'purity@gmail.com', '12345678'),
('hazel', 'mwangi', 2147483647, 'hazel@gmail.com', '12345678'),
('DAVID', 'MUTUMA', 115110800, 'david@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `order_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `total_amount` int(50) NOT NULL,
  `order_status` enum('pending','completed','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `transaction_id` int(100) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `car_id` int(50) NOT NULL,
  `transaction_date` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_method` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ID` int(5) NOT NULL,
  `Vname` varchar(15) NOT NULL,
  `Vemail` varchar(15) NOT NULL,
  `brandname` varchar(100) NOT NULL,
  `Vpassword` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ID`, `Vname`, `Vemail`, `brandname`, `Vpassword`) VALUES
(1, 'yy', 'w@gmail.com', 'BMW', 'kjkj'),
(2, 'DAVID MUTUMA', 'david@gmail.com', 'MERCEDES', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `carproduct`
--
ALTER TABLE `carproduct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `carproduct`
--
ALTER TABLE `carproduct`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `transaction_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
