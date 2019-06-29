-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 06:19 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a&zgadgets`
--

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `mainIndex` bigint(20) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `receiptNumber` bigint(20) NOT NULL,
  `deviceType` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `dName` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `IMEI` varchar(255) NOT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `fault` varchar(255) NOT NULL,
  `cost` double NOT NULL,
  `paid` double NOT NULL DEFAULT 0,
  `due` double NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerContact` varchar(255) NOT NULL,
  `dateComplete` varchar(255) NOT NULL,
  `completeBy` varchar(255) NOT NULL,
  `collectionDate` varchar(255) NOT NULL,
  `notified` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`mainIndex`, `dateCreated`, `receiptNumber`, `deviceType`, `brand`, `dName`, `model`, `colour`, `IMEI`, `pin`, `fault`, `cost`, `paid`, `due`, `customerName`, `customerContact`, `dateComplete`, `completeBy`, `collectionDate`, `notified`, `comments`) VALUES
(0, '2019-06-04 15:01:58', 1, 'Phone', 'Samsung', '', 's8', 'black', '12345678912344', '1234', 'screen and body', 220, 0, 220, 'Mike Hunt', '0987465320', '04/06/19', 'Zed', '04/06/19', 'yes', 'It fucked tbh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`mainIndex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
