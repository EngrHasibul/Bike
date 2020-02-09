-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 12:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bike`
--
CREATE DATABASE IF NOT EXISTS `db_bike` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_bike`;

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `Id` int(20) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`Id`, `Model`, `Company`, `Description`) VALUES
(1, 'Honda CBR150R Repsol', 'Honda', 'Honda CBR150R Repsol is a product of Honda. Honda is the brand of Japan. This bike is powered by 149.16 engine which generates Maximum power 12.6 KW @ 9000 rpm and its maximum torque is 13.7 Nm @ 7000 rpm. Honda CBR150R Repsol can runs 160 KM per hour and it burns fuel 40 KM per Liter (approx). Its price is Tk 452000.'),
(2, 'Bajaj Avenger 150 Street', 'Bajaj ', 'Bajaj Avenger 150 Street is a product of Bajaj. Bajaj is the brand of India. Bajaj Avenger 150 Street is Assemble/Made in Bangladesh. This bike is powered by 149 engine which generates Maximum power 14.30 bhp @ 9,000 rpm and its maximum torque is 12.50 Nm @ 6,500 rpm . Bajaj Avenger 150 Street can runs 110 KM per hour and it burns fuel 50 KM per Liter (approx). Its price is Tk 199500.'),
(3, '', '', ''),
(4, 'Hero Hunk', 'Hero', 'Hero Hunk is a product of Hero. Hero is the brand of India. Hero Hunk is Assemble/Made in Bangladesh. This bike is powered by 149.2 engine which generates Maximum power 10.6 kW (14.4 Ps) @ 8500rpm and its maximum torque is 12.80 N - m @ 6500 rpm . Hero Hunk can runs 120 KM per hour and it burns fuel 50 KM per Liter (approx). Its price is Tk 149990.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Contact` text NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Address`, `Contact`, `Email`) VALUES
(1, 'Md', 'Dhaka', '01711111112', 'tohid11@gmail.com'),
(2, 'Md Monir Islam', 'Pabna', '01741551125', 'monir55@gmail.com'),
(3, 'Imran', 'Gaibandha', '01704298038', 'imranmondal129@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(20) NOT NULL,
  `Date` text NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Vat` varchar(10) NOT NULL,
  `Total_Cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Date`, `Type`, `Price`, `Vat`, `Total_Cost`) VALUES
(1, '15-10-2018', 'Credit', '135100', '300 Tk', '135400 Tk'),
(2, '10-10-2018', 'Credit Card', '450000 Tk', '200 Tk', '452200 Tk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
