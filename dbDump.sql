-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 10:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
  `dateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `repairNumber` bigint(20) NOT NULL,
  `deviceType` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `IMEI` varchar(255) NOT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `fault` varchar(255) NOT NULL,
  `cost` double NOT NULL,
  `paid` double NOT NULL DEFAULT '0',
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

INSERT INTO `repairs` (`dateCreated`, `repairNumber`, `deviceType`, `brand`, `model`, `colour`, `IMEI`, `pin`, `fault`, `cost`, `paid`, `due`, `customerName`, `customerContact`, `dateComplete`, `completeBy`, `collectionDate`, `notified`, `comments`) VALUES
('2019-06-04 15:01:58', 1, 'Phone', 'Samsung', 's8', 'black', '12345678912344', '1234', 'screen and body', 220, 0, 220, 'Mike Hunt', '0987465320', '04/06/19', 'Zed', '04/06/19', 'yes', 'It fucked tbh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`repairNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `repairNumber` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
