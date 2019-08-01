-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 02:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `a&z_gadgets_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `mainIndex` bigint(20) NOT NULL,
  `commentId` bigint(20) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`mainIndex`, `commentId`, `comment`, `dateCreated`) VALUES
(21, 60, 'dfg', '2019-07-29 10:59:51'),
(21, 61, 'poop', '2019-07-29 11:05:01'),
(22, 62, 'screen', '2019-07-29 11:56:15'),
(23, 63, '', '2019-07-29 11:58:07'),
(24, 64, 'battery', '2019-07-30 08:44:12'),
(25, 65, 'dcfv', '2019-07-30 08:49:32'),
(26, 66, '', '2019-07-30 08:49:57'),
(27, 67, '', '2019-07-30 08:52:43'),
(28, 68, '', '2019-07-30 08:52:56'),
(29, 69, '', '2019-07-30 08:54:47'),
(30, 70, '', '2019-07-30 08:56:03'),
(31, 71, '', '2019-07-30 09:10:15'),
(21, 72, 'woah dude', '2019-07-30 09:13:43'),
(32, 73, '', '2019-08-01 10:50:22'),
(33, 74, '', '2019-08-01 11:07:54'),
(33, 75, 'Device Collected By Customer', '2019-08-01 12:12:17'),
(33, 76, 'Device repair finished and ready for collection.', '2019-08-01 12:13:50'),
(33, 77, 'Device Collected By Customer', '2019-08-01 12:13:54'),
(33, 78, 'Repair NOT FINISHED ready for collection', '2019-08-01 12:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `mainIndex` bigint(20) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp(),
  `receiptNumber` bigint(20) NOT NULL,
  `deviceType` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `dName` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `IMEI` varchar(255) NOT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerContact` varchar(255) NOT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `state` int(1) NOT NULL DEFAULT 0,
  `devInShop` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`mainIndex`, `dateCreated`, `dateAdded`, `receiptNumber`, `deviceType`, `brand`, `dName`, `model`, `colour`, `IMEI`, `serial`, `pin`, `customerName`, `customerContact`, `customerEmail`, `state`, `devInShop`) VALUES
(21, '2019-07-29 11:59:50', '0000-00-00 00:00:00', 0, 'phone', 'asdf', 'sdf', 'sdfg', 'black', 'sdfg', 'sdf', 'sdfg', 'sdf', 'sdf', 'sdf', 1, 1),
(22, '2019-07-29 12:56:14', '0000-00-00 00:00:00', 69, 'phone', 'Samsung', 'A5', 'SM-A500FN', 'black', '7361', '1234', '9999', 'Robert DeNiro', '083 123 4567', 'robbiedefaro@email.com', 1, 1),
(23, '2019-07-29 12:58:07', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(24, '2019-07-30 09:44:11', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(25, '2019-07-30 09:49:32', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(26, '2019-07-30 09:49:57', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(27, '2019-07-30 09:52:43', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 1, 1),
(28, '2019-07-30 09:52:56', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(29, '2019-07-30 09:54:47', '0000-00-00 00:00:00', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(30, '2019-07-30 09:56:03', '2019-07-30 09:56:03', 0, 'phone', '', '', '', 'black', '', '', '', '', '', '', 0, 1),
(31, '2019-07-30 10:10:14', '2019-07-30 10:10:14', 0, 'phone', '', '', '', 'pink', '', '', '', '', '', '', 1, 1),
(32, '2019-08-01 11:50:22', '2019-08-01 11:50:22', 0, 'phone', '', '', '', '', '', '', '', '', '', '', 0, 0),
(33, '2019-08-01 12:07:54', '2019-08-01 12:07:54', 0, 'phone', '', '', '', '', '', '', '', '', '', '', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`mainIndex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `mainIndex` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;
