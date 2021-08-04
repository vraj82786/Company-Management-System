-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 11:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegeproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `productionform`
--

CREATE TABLE `productionform` (
  `id` int(100) NOT NULL,
  `available` int(100) NOT NULL,
  `sold` int(100) NOT NULL,
  `wasted` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productionform`
--

INSERT INTO `productionform` (`id`, `available`, `sold`, `wasted`, `date`) VALUES
(2, 5000, 20000, 100, '2021-05-22'),
(3, 5000, 4500, 100, '2021-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseform`
--

CREATE TABLE `purchaseform` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `product` varchar(20) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaseform`
--

INSERT INTO `purchaseform` (`id`, `name`, `product`, `quantity`, `date`) VALUES
(27, 'Kushal farms', 'Tomato', '5000', '2021-05-22'),
(28, 'Mamta farms', 'onion', '5000', '2021-05-21'),
(29, 'Varun Farms', 'Kiwi', '50', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `salesform`
--

CREATE TABLE `salesform` (
  `id` int(11) NOT NULL,
  `totalkgsold` int(100) NOT NULL,
  `todayscollection` int(100) NOT NULL,
  `totalexpences` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesform`
--

INSERT INTO `salesform` (`id`, `totalkgsold`, `todayscollection`, `totalexpences`, `date`) VALUES
(2, 5000, 200000, 150000, '2021-05-22'),
(3, 10000, 20000, 0, '2021-05-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productionform`
--
ALTER TABLE `productionform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseform`
--
ALTER TABLE `purchaseform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesform`
--
ALTER TABLE `salesform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productionform`
--
ALTER TABLE `productionform`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchaseform`
--
ALTER TABLE `purchaseform`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `salesform`
--
ALTER TABLE `salesform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
