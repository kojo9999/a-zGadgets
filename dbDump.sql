
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `comments` (
  `mainIndex` bigint(20) NOT NULL,
  `commentId` bigint(20) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
  'serial' varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `fault` varchar(255) NOT NULL,
  `cost` double NOT NULL,
  `paid` double NOT NULL DEFAULT 0,
  `due` double NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerContact` varchar(255) NOT NULL,
  'customerEmail' varchar(255) DEFAULT NULL
  `dateComplete` varchar(255) NOT NULL,
  `completeBy` varchar(255) NOT NULL,
  `collectionDate` varchar(255) NOT NULL,
  `notified` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `repairs` (`mainIndex`, `dateCreated`, `receiptNumber`, `deviceType`, `brand`, `model`, `colour`, `IMEI`, `pin`, `fault`, `cost`, `paid`, `due`, `customerName`, `customerContact`, `dateComplete`, `completeBy`, `collectionDate`, `notified`) VALUES
(0, '2019-06-04 15:01:58', 1, 'Phone', 'Samsung', 's8', 'black', '12345678912344', '1234', 'screen and body', 220, 0, 220, 'Mike Hunt', '0987465320', '04/06/19', 'Zed', '04/06/19', 'yes');

ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`);


ALTER TABLE `repairs`
  ADD PRIMARY KEY (`mainIndex`);


ALTER TABLE `comments`
  MODIFY `commentId` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

ALTER TABLE `repairs`
  MODIFY `mainIndex` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;
