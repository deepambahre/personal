-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 06:34 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `admin_id` int(11) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `First Name`, `Last Name`, `Username`, `Password`, `Email`, `Contact`) VALUES
(1, 'Deepam', 'Bahre', 'deepambahre', 'Deepam@1492', 'deepambahre@gmail.com', '8989898989'),
(2, 'Sandeep', 'Singh', 'sandeepsingh', 'Sandeep09.14', 'sandeepsingh@gmail.com', '8885612478'),
(3, 'Neha', 'Rao', 'neharao', 'Neha01.14', 'neharao@outlook.com', '8547621444');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `careersId` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Resume` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`careersId`, `FirstName`, `LastName`, `Email`, `Password`, `Contact`, `Resume`) VALUES
(3, 'deepak', 'Singh', 'deepaksinha@yahoo.com', 'Deepak.14', '9406667499', 'images/H'),
(4, 'Amar', 'shukla', 'amarshukla14@gmail.com', 'Amae@14', '9898989898', 'images/C'),
(5, 'Aman', 'verma', 'amanverma@outlook.com', 'Aman@1492', '8585858585', 'images/D');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `contactId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `inventoryId` int(11) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `MedicineMFD` date NOT NULL,
  `MedicineEXP` date NOT NULL,
  `MedicinePrice` bigint(60) NOT NULL,
  `MedicineStatus` varchar(255) NOT NULL,
  `MedicineQuantity` bigint(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryId`, `MedicineName`, `MedicineMFD`, `MedicineEXP`, `MedicinePrice`, `MedicineStatus`, `MedicineQuantity`) VALUES
(1, 'Abacavir', '2015-09-09', '2016-02-09', 40, 'Available', 90),
(2, 'Elavil', '2016-01-05', '2016-04-16', 140, 'Available', 89),
(3, 'Januvia\r\n\r\n', '2012-11-30', '2015-10-07', 77, 'Available', 180),
(4, 'Glipizide', '2015-11-19', '2017-06-17', 80, 'Available', 95),
(5, 'Guaifenesin', '2015-05-13', '2016-04-16', 100, 'Available', 248),
(6, 'Hcg', '2016-01-20', '2017-09-17', 190, 'Available', 100),
(7, 'Hydroxyzine', '2015-05-19', '2017-03-15', 125, 'Available', 87),
(8, 'Hyzaar', '2016-01-30', '2019-07-28', 150, 'Available', 96),
(9, 'Invega', '2015-12-07', '2017-08-13', 130, 'Available', 196),
(10, 'Inderal', '2013-10-01', '2016-03-15', 86, 'Available', 85),
(11, 'Dextromethorphan', '2015-12-03', '2016-04-16', 100, 'Available', 98),
(12, 'Depakote', '2016-02-12', '2017-10-13', 80, 'Available', 85),
(13, 'Coreg', '2016-01-05', '2016-10-06', 50, 'Available', 160),
(14, 'Acyclovir', '2015-12-15', '2016-04-15', 80, 'Available', 43),
(15, 'Cialis', '2015-11-19', '2017-04-15', 180, 'Available', 173),
(16, 'Aliskiren', '2015-03-12', '2016-03-24', 110, 'Available', 93),
(17, 'Baclofen', '2014-08-13', '2016-03-18', 90, 'Available', 110),
(18, 'Jakafi', '2016-01-24', '2017-10-12', 150, 'Available', 200),
(19, 'Jublia', '2015-07-10', '2019-10-19', 85, 'Available', 150),
(20, 'Keppra', '2014-09-07', '2014-09-07', 130, 'Available', 120),
(21, 'Kyprolis', '2016-12-27', '2020-07-15', 100, 'Available', 110),
(22, 'Lorazepam', '2016-02-21', '2016-10-24', 79, 'Available', 130),
(23, 'Lantus', '2016-04-25', '2018-11-12', 120, 'Available', 125),
(24, 'Motrin', '2016-01-24', '2017-10-12', 150, 'Available', 155),
(25, 'Mybetriq', '2015-07-10', '2019-10-19', 85, 'Available', 98),
(26, 'Novolog', '2014-09-07', '2014-09-07', 130, 'Available', 85),
(27, 'Niacin', '2016-12-27', '2020-07-15', 100, 'Available', 95),
(28, 'Osphena', '2016-02-21', '2016-10-24', 79, 'Available', 105),
(29, 'Opdivo', '2016-04-25', '2018-11-12', 120, 'Available', 89),
(30, 'Phentermine', '2016-02-12', '2018-05-24', 200, 'Available', 120),
(31, 'Qsymia', '2014-08-13', '2016-03-11', 90, 'Available', 220),
(32, 'Relafen', '2015-03-15', '2018-06-10', 150, 'Available', 255),
(33, 'Sildenafil', '2013-12-27', '2017-03-15', 225, 'Available', 220),
(34, 'Topamax', '2016-01-15', '2022-05-02', 150, 'Available', 248),
(35, 'Ultresa', '2013-05-08', '2016-04-15', 160, 'Available', 250),
(36, 'Vicodin', '2015-08-13', '2020-04-15', 140, 'Available', 280),
(37, 'Vancomycin', '2014-05-13', '2019-10-19', 200, 'Available', 208),
(38, 'Wilate', '2015-11-19', '2020-07-15', 190, 'Available', 290),
(39, 'Xopenex', '2014-05-12', '2016-10-24', 125, 'Available', 190),
(40, 'Xgeva', '2013-05-08', '2018-07-25', 77, 'Available', 235),
(41, 'Yondelis', '2016-09-27', '2021-04-20', 130, 'Available', 225),
(42, 'Ziac', '2014-09-07', '2020-07-15', 190, 'Available', 289);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `FirstName`, `LastName`, `Username`, `Password`, `Email`, `Contact`) VALUES
(1, 'Deepam', 'Bahre', 'deepambahre', 'Deepam@1492', 'deepambahre@gmail.com', '8989898989'),
(2, 'rahul', 'singh', 'rahulsingh', 'Rahul04@92', 'rahulsingh@gmail.com', '8588585858'),
(3, 'yogesh', 'shukla', 'yogesh', 'Yogesh@09', 'shuklayogesh065@gmail.com', '9301720064'),
(5, 'Amar', 'Singh', 'amarsingh', 'Amar@14', 'amarsingh14@gmail.com', '9301720064'),
(6, 'ankit', 'jain', 'ankitjain', 'Ankit.1492', 'ankitjain@gmail.com', '7854962458'),
(7, 'Govind', 'Kumar', 'govindkumar', 'Govind.14', 'govindkumar@yahoo.com', '9864528525');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturedetail`
--

CREATE TABLE IF NOT EXISTS `manufacturedetail` (
  `ManufactureId` int(11) NOT NULL,
  `ManufactureBrand` varchar(255) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `MedicinePrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicinedetail`
--

CREATE TABLE IF NOT EXISTS `medicinedetail` (
  `MedicineId` int(11) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `MedicineMFD` date NOT NULL,
  `MedicineEXP` date NOT NULL,
  `MedicinePrice` bigint(80) NOT NULL,
  `MedicineStatus` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicinedetail`
--

INSERT INTO `medicinedetail` (`MedicineId`, `MedicineName`, `MedicineMFD`, `MedicineEXP`, `MedicinePrice`, `MedicineStatus`) VALUES
(1, 'Abacavir', '2015-09-09', '2016-02-09', 40, 'Available'),
(2, 'Acyclovir', '2015-12-15', '2016-04-15', 80, 'Available'),
(3, 'Adrenochrome ', '2016-01-14', '2016-12-16', 150, 'Not Available'),
(4, 'Aliskiren', '2015-03-12', '2016-03-24', 110, 'Available'),
(5, 'Baclofen', '2014-08-13', '2016-03-18', 90, 'Available'),
(6, 'Bactroban', '2015-05-13', '2017-06-10', 70, 'Not Available'),
(7, 'Biaxin', '2015-08-13', '2016-11-17', 70, 'Not Available'),
(8, 'Cialis', '2015-11-19', '2017-04-15', 180, 'Available'),
(9, 'Cipro', '2015-12-14', '2016-03-11', 40, 'Not Available'),
(10, 'Coreg', '2016-01-05', '2016-10-06', 50, 'Available'),
(11, 'Depakote', '2016-02-12', '2017-10-13', 80, 'Available'),
(12, 'Dextromethorphan', '2015-12-03', '2016-04-16', 100, 'Available'),
(13, 'Elavil', '2016-01-05', '2016-04-16', 140, 'Available'),
(14, 'Erythromycin', '2016-01-04', '2016-06-23', 120, 'Not Available'),
(15, 'Fetzima', '2015-09-16', '2016-05-14', 130, 'Not Available'),
(16, 'Glipizide', '2015-11-19', '2017-06-17', 80, 'Available'),
(17, 'Gleevec', '2015-09-09', '2017-10-13', 140, 'Not Available'),
(18, 'Guaifenesin', '2015-05-13', '2016-04-16', 100, 'Available'),
(19, 'Humira', '2015-03-15', '2017-03-15', 85, 'Not Available'),
(20, 'Hcg', '2016-01-20', '2017-09-17', 190, 'Available'),
(21, 'Hydroxyzine', '2015-05-19', '2017-03-15', 125, 'Available'),
(22, 'Hyzaar', '2016-01-30', '2019-07-28', 150, 'Available'),
(23, 'Invega', '2015-12-07', '2017-08-13', 130, 'Available'),
(24, 'Inderal', '2013-10-01', '2016-03-15', 86, 'Available'),
(25, 'Intuniv', '2014-12-07', '2018-09-26', 49, 'Not Available'),
(26, 'Januvia', '2012-11-30', '2015-10-07', 77, 'Available'),
(27, 'Jakafi ', '2016-01-24', '2017-10-12', 150, 'Available'),
(28, 'Juxtapid', '2015-05-22', '2018-12-16', 80, 'Not  Available'),
(29, 'Jublia ', '2015-07-10', '2019-10-19', 85, 'Available'),
(30, 'Keppra', '2014-09-07', '2014-09-07', 130, 'Available'),
(31, 'Kyprolis', '2016-12-27', '2020-07-15', 100, 'Available'),
(32, 'Keflex', '2014-10-31', '2018-01-31', 75, 'Not  Available'),
(33, 'Losartan', '2016-01-15', '2019-05-22', 100, 'Not  Available'),
(34, 'Lorazepam', '2016-02-21', '2016-10-24', 79, 'Available'),
(35, 'Lantus', '2016-04-25', '2018-11-12', 120, 'Available'),
(55, 'Motrin', '2016-01-24', '2017-10-12', 150, 'Available'),
(56, 'Meloxicam', '2015-05-22', '2018-12-16', 80, 'Not  Available'),
(57, 'Mybetriq', '2015-07-10', '2019-10-19', 85, 'Available'),
(58, 'Novolog', '2014-09-07', '2014-09-07', 130, 'Available'),
(59, 'Niacin', '2016-12-27', '2020-07-15', 100, 'Available'),
(60, 'Norco', '2014-10-31', '2018-01-31', 75, 'Not  Available'),
(61, 'Oseltamivir', '2016-01-15', '2019-05-22', 100, 'Not  Available'),
(62, 'Osphena', '2016-02-21', '2016-10-24', 79, 'Available'),
(63, 'Opdivo', '2016-04-25', '2018-11-12', 120, 'Available'),
(64, 'Qsymia', '2014-08-13', '2016-03-11', 90, 'Available'),
(65, 'Quillivant XR', '2016-01-05', '2019-06-23', 120, 'Not Available'),
(66, 'Relafen', '2015-03-15', '2018-06-10', 150, 'Available'),
(67, 'Rocephin', '2015-12-07', '2020-07-15', 100, 'Not Available'),
(68, 'Sildenafil', '2013-12-27', '2017-03-15', 225, 'Available'),
(69, 'Spironolactone', '2014-10-31', '2019-07-28', 260, 'Not Available'),
(70, 'Topamax', '2016-01-15', '2022-05-02', 150, 'Available'),
(71, 'Tylenol', '2013-10-01', '2019-10-19', 240, 'Not Available'),
(72, 'Ultresa', '2013-05-08', '2016-04-15', 160, 'Available'),
(73, 'Uptravi', '2014-04-03', '2017-04-15', 120, 'Not Available'),
(74, 'Vicodin', '2015-08-13', '2020-04-15', 140, 'Available'),
(75, 'Vancomycin', '2014-05-13', '2019-10-19', 200, 'Available'),
(76, 'Warfarin', '2013-12-27', '2018-06-10', 170, 'Not Available'),
(77, 'Wilate', '2015-11-19', '2020-07-15', 190, 'Available'),
(78, 'Xopenex', '2014-05-12', '2016-10-24', 125, 'Available'),
(79, 'Xgeva', '2013-05-08', '2018-07-25', 77, 'Available'),
(80, 'Yaz', '2015-12-03', '2019-10-19', 50, 'Not Available'),
(81, 'Yondelis', '2016-09-27', '2021-04-20', 130, 'Available'),
(82, 'Ziac', '2014-09-07', '2020-07-15', 190, 'Available'),
(83, 'Zosyn', '2016-12-27', '2020-02-15', 165, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `orderId` int(11) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `MedicineQuantity` bigint(30) NOT NULL,
  `BuyDate` date NOT NULL,
  `MedicinePrice` bigint(60) NOT NULL,
  `inventoryId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderId`, `MedicineName`, `MedicineQuantity`, `BuyDate`, `MedicinePrice`, `inventoryId`) VALUES
(24, 'Cialis', 10, '2016-02-05', 1800, 15),
(29, 'Aliskiren', 2, '2016-02-08', 220, 16),
(100, 'Invega', 2, '2016-02-09', 260, 0),
(102, 'Coreg', 9, '2016-02-09', 450, 0),
(105, 'Cialis', 2, '2016-02-09', 360, 0),
(108, 'Invega,Januvia', 1, '2016-02-11', 130, 9),
(109, 'Invega,Januvia', 1, '2016-02-11', 130, 9);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptionsdetail`
--

CREATE TABLE IF NOT EXISTS `prescriptionsdetail` (
  `prescriptionsId` int(11) NOT NULL,
  `prescriptions` varchar(255) NOT NULL,
  `Report` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescriptionsdetail`
--

INSERT INTO `prescriptionsdetail` (`prescriptionsId`, `prescriptions`, `Report`) VALUES
(12, '', 'images/prescriptions/Tulips.jpg'),
(13, 'images/prescriptions/Lighthouse.jpg', ''),
(14, '', 'images/prescriptions/Jellyfish.jpg'),
(17, 'images/prescriptions/Chrysanthemum.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetail`
--

CREATE TABLE IF NOT EXISTS `staffdetail` (
  `staffId` int(11) NOT NULL,
  `staffName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockdetail`
--

CREATE TABLE IF NOT EXISTS `stockdetail` (
  `storeId` int(15) NOT NULL,
  `MedicineId` int(15) NOT NULL,
  `MedicineMFD` date NOT NULL,
  `MedicineEXP` date NOT NULL,
  `MedicineStock` bigint(80) NOT NULL,
  `MedicinePrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `UserId` int(15) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserContact` varchar(255) NOT NULL,
  `BuyDate` date NOT NULL,
  `MedicineId` int(11) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `MedicinePrice` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserId`, `UserName`, `Password`, `UserContact`, `BuyDate`, `MedicineId`, `MedicineName`, `MedicinePrice`) VALUES
(65, 'ajayrao', ' ajay', '8989898989', '2016-02-01', 10, 'Coreg', '50');

-- --------------------------------------------------------

--
-- Table structure for table `vendordetail`
--

CREATE TABLE IF NOT EXISTS `vendordetail` (
  `VendorId` int(11) NOT NULL,
  `VendorName` varchar(255) NOT NULL,
  `MedicineName` varchar(255) NOT NULL,
  `MedicinePrice` varchar(255) NOT NULL,
  `Quantity` bigint(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendordetail`
--

INSERT INTO `vendordetail` (`VendorId`, `VendorName`, `MedicineName`, `MedicinePrice`, `Quantity`) VALUES
(1, 'rahul', 'Hyzaar', '150', 96);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`careersId`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `manufacturedetail`
--
ALTER TABLE `manufacturedetail`
  ADD PRIMARY KEY (`ManufactureId`);

--
-- Indexes for table `medicinedetail`
--
ALTER TABLE `medicinedetail`
  ADD PRIMARY KEY (`MedicineId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `prescriptionsdetail`
--
ALTER TABLE `prescriptionsdetail`
  ADD PRIMARY KEY (`prescriptionsId`);

--
-- Indexes for table `staffdetail`
--
ALTER TABLE `staffdetail`
  ADD PRIMARY KEY (`staffId`);

--
-- Indexes for table `stockdetail`
--
ALTER TABLE `stockdetail`
  ADD PRIMARY KEY (`storeId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserId`), ADD KEY `MedicineId` (`MedicineId`), ADD KEY `MedicineName` (`MedicineName`,`MedicinePrice`);

--
-- Indexes for table `vendordetail`
--
ALTER TABLE `vendordetail`
  ADD PRIMARY KEY (`VendorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `careersId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `manufacturedetail`
--
ALTER TABLE `manufacturedetail`
  MODIFY `ManufactureId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicinedetail`
--
ALTER TABLE `medicinedetail`
  MODIFY `MedicineId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `prescriptionsdetail`
--
ALTER TABLE `prescriptionsdetail`
  MODIFY `prescriptionsId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staffdetail`
--
ALTER TABLE `staffdetail`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stockdetail`
--
ALTER TABLE `stockdetail`
  MODIFY `storeId` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserId` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `vendordetail`
--
ALTER TABLE `vendordetail`
  MODIFY `VendorId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
