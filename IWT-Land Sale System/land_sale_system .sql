-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land_sale_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrers`
--

CREATE TABLE `carrers` (
  `carrers_ID` int(11) NOT NULL,
  `JOB_Title` varchar(100) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Employee_Email` varchar(100) NOT NULL,
  `Employee_Mobile` int(10) NOT NULL,
  `Employee_Message` varchar(100) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(11) NOT NULL,
  `CEmail` varchar(100) NOT NULL,
  `CPassword` varchar(100) NOT NULL,
  `CFName` varchar(100) NOT NULL,
  `CLName` varchar(100) NOT NULL,
  `CMNumber` int(10) NOT NULL,
  `CAddress` varchar(255) NOT NULL,
  `CDOB` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `CEmail`, `CPassword`, `CFName`, `CLName`, `CMNumber`, `CAddress`, `CDOB`) VALUES
(2, 'amiladevin@gmail.com', 'haha', 'Amila', 'Devin Sena', 777469628, 'kakakjam', '2020-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `FAQID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Massages` varchar(100) NOT NULL,
  `CID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`FAQID`, `Name`, `Telephone`, `Email`, `Subject`, `Massages`, `CID`) VALUES
(2, 'adsd', 0, 'amiladevin@gmail.com', '', 'Massages', 1),
(3, 'Amila', 0, 'amiladevin@gmail.com', 'ad', 'adwawdaw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `Land_Id` int(11) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `LAddress` varchar(100) NOT NULL,
  `LCity` varchar(100) NOT NULL,
  `LDistrict` varchar(100) NOT NULL,
  `LProvince` varchar(100) NOT NULL,
  `LPerches` int(100) NOT NULL,
  `LPrice` int(11) NOT NULL,
  `Lmessage` varchar(255) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Payment_ID` int(11) NOT NULL,
  `Name_on_Card` varchar(100) NOT NULL,
  `Credit_card_number` varchar(100) NOT NULL,
  `Exp_Date` varchar(100) NOT NULL,
  `CVV` int(3) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Payment_ID`, `Name_on_Card`, `Credit_card_number`, `Exp_Date`, `CVV`, `Email`) VALUES
(9, 'awdawdad', '11111', '2020-07', 111, 'amiladevin@gmail.com'),
(10, 'awdawdad', '777', '2020-07', 111, 'adsdas@gmail.com'),
(11, 'sadsd', '12312', '2020-04', 111, 'amiladevin@gmail.com'),
(12, 'sdfsdfdsf', '111', '2020-07', 123, 'amila_devin@yahoo.com'),
(13, 'asdasd', '2222222', '2020-04', 111, 'adsdas@gmail.com'),
(14, 'sfsfed', '3333333333', '2020-07', 111, 'adsdas@gmail.com'),
(15, 'adsdasd', '1111111111', '2020-04', 111, 'amila_devin@yahoo.com'),
(16, '44444444', '44444444', '2020-06', 111, 'amila_devin@yahoo.com'),
(17, 'awdawdad', '111111111111', '2020-07', 111, 'amiladevin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `RID` int(11) NOT NULL,
  `RName` varchar(100) NOT NULL,
  `RTEL` varchar(100) NOT NULL,
  `REmail` varchar(100) NOT NULL,
  `RMassage` varchar(100) NOT NULL,
  `CID` int(11) NOT NULL,
  `Land_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`RID`, `RName`, `RTEL`, `REmail`, `RMassage`, `CID`, `Land_Id`) VALUES
(1, 'amila', '0111', 'amjhbb', 'sfass', 1, 0),
(2, 'yadhasjkdajskdjkashdasdasd', '56456454541', 'asdasdasdasd', 'asdasdasdasdnkjldfasnfmsdan.fsdfsd', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrers`
--
ALTER TABLE `carrers`
  ADD PRIMARY KEY (`carrers_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`,`CEmail`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FAQID`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`Land_Id`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrers`
--
ALTER TABLE `carrers`
  MODIFY `carrers_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FAQID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `Land_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lands`
--
ALTER TABLE `lands`
  ADD CONSTRAINT `CID` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
