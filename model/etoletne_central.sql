-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2020 at 03:12 PM
-- Server version: 10.3.24-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etoletne_central`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8989898980, 'admin@gmail.com', '829312dae7d871e02a368ba139c035ea', '2019-08-05 07:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `ID` int(10) NOT NULL,
  `CountryID` int(5) DEFAULT NULL,
  `StateID` int(5) NOT NULL,
  `CityName` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`ID`, `CountryID`, `StateID`, `CityName`, `EnterDate`) VALUES
(1, 1, 1, 'Moghbazar', '2020-08-22 13:44:07'),
(19, 1, 1, 'Adabor', '2020-09-06 18:23:45'),
(21, 1, 1, 'Badda', '2020-09-06 18:24:15'),
(22, 1, 1, 'Bangshal', '2020-09-06 18:24:30'),
(23, 1, 1, 'Biman Bandar', '2020-09-06 19:31:56'),
(24, 1, 1, 'Cantonment ', '2020-09-06 19:32:11'),
(25, 1, 1, 'chawkbazar', '2020-09-06 19:32:33'),
(26, 1, 1, 'Dakshinkhan', '2020-09-06 19:32:54'),
(27, 1, 1, 'Darus Salam', '2020-09-06 19:33:05'),
(28, 1, 1, 'Demra', '2020-09-06 19:33:16'),
(29, 1, 1, 'Dhanmondi ', '2020-09-06 19:33:24'),
(30, 1, 1, 'Gazipur Sadar', '2020-09-06 19:34:24'),
(31, 1, 1, 'Gendaria', '2020-09-06 19:34:38'),
(32, 1, 1, 'Gulshan', '2020-09-06 19:34:46'),
(33, 1, 1, 'Hazaribagh', '2020-09-06 19:34:59'),
(34, 1, 1, 'Jatrabari ', '2020-09-06 19:35:09'),
(35, 1, 1, 'Kadamtali ', '2020-09-06 19:35:21'),
(36, 1, 1, 'Kafrul', '2020-09-06 19:35:28'),
(38, 1, 1, 'kalabagan', '2020-09-06 19:36:50'),
(39, 1, 1, 'Kamrangirchar', '2020-09-06 19:37:18'),
(40, 1, 1, 'Keraniganj', '2020-09-06 19:37:27'),
(41, 1, 1, 'khilgaon', '2020-09-06 19:37:38'),
(42, 1, 1, 'khilkhet', '2020-09-06 19:37:51'),
(43, 1, 1, 'kotwali', '2020-09-06 19:38:09'),
(45, 1, 1, 'Mirpur', '2020-09-06 19:38:48'),
(47, 1, 1, 'Mohammadpur', '2020-09-06 19:40:13'),
(48, 1, 1, 'Motijheel', '2020-09-06 19:40:24'),
(49, 1, 1, 'Narayanganj Sadar', '2020-09-06 19:40:36'),
(50, 1, 1, 'New Market', '2020-09-06 19:40:53'),
(51, 1, 1, 'Pallabi', '2020-09-06 19:41:02'),
(52, 1, 1, 'Lalbagh', '2020-09-06 19:41:28'),
(59, 1, 1, 'Motijheel', '2020-09-06 19:47:53'),
(62, 1, 1, 'paltan', '2020-09-06 19:49:58'),
(63, 1, 1, 'Ramna', '2020-09-06 19:50:06'),
(64, 1, 1, 'Rampura', '2020-09-06 19:50:16'),
(65, 1, 1, 'Sabujbagh', '2020-09-06 19:50:38'),
(66, 1, 1, 'Savar', '2020-09-06 19:50:43'),
(67, 1, 1, 'Shahabagh', '2020-09-06 19:50:54'),
(68, 1, 1, 'Sher-e-Bangla Nagar', '2020-09-06 19:51:08'),
(69, 1, 1, 'Sutrapur', '2020-09-06 19:51:17'),
(70, 1, 1, 'Tejgaon', '2020-09-06 19:51:28'),
(71, 1, 1, 'Turag', '2020-09-06 19:51:39'),
(72, 1, 1, 'Uttara', '2020-09-06 19:51:46'),
(73, 1, 1, 'Uttar Khan', '2020-09-06 19:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblconfirmusers`
--

CREATE TABLE `tblconfirmusers` (
  `ID` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `PropertyID` int(11) NOT NULL,
  `confirmationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblconfirmusers`
--

INSERT INTO `tblconfirmusers` (`ID`, `uid`, `PropertyID`, `confirmationDate`) VALUES
(5, 8, 629126491, '2020-08-21 07:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblcountry`
--

CREATE TABLE `tblcountry` (
  `ID` int(10) NOT NULL,
  `CountryName` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcountry`
--

INSERT INTO `tblcountry` (`ID`, `CountryName`, `EnterDate`) VALUES
(1, 'Bangladesh', '2020-09-06 10:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(11) NOT NULL,
  `PropertyID` int(10) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryNumber` varchar(200) DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(10) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `RemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `PropertyID`, `FullName`, `Email`, `MobileNumber`, `Message`, `EnquiryNumber`, `EnquiryDate`, `Status`, `Remark`, `RemarkDate`) VALUES
(1, 1, 'Akash Chandra', 'ac@gmail.com', 7894561239, 'When I will come to you to see the property', '283495176', '2019-08-13 05:36:13', 'Answer', 'Fine You will come tomorrow morning i.e 17 aug', '2019-08-16 11:17:25'),
(2, 2, 'Ramesh Kumar', 'ramesh@gmail.com', 8989889898, 'Give me best prices of this property', '295692123', '2019-08-16 11:58:27', NULL, NULL, NULL),
(3, 2, 'Akash', 'akash@gmail.com', 5656565656, 'hgfhf gy f ', '611895685', '2019-08-18 16:02:03', NULL, NULL, NULL),
(4, 4, 'Simple user', 'testuser2@gmail.com', 1231231231, 'Test Enquiry', '558385754', '2019-09-30 19:00:26', 'Answer', 'This is for testing', '2019-09-30 19:28:09'),
(5, 2, 'Simple user', 'testuser2@gmail.com', 1231231231, 'I want some discount on this property.', '203492977', '2019-09-30 19:33:22', NULL, NULL, NULL),
(6, 6, 'Adil Hossain', 'adilhossain227@gmail.com', 1712916062, 'i want to see', '196331073', '2020-08-22 13:51:42', 'Answer', 'ok you can meet tomorrow', '2020-08-22 13:53:26'),
(7, 6, 'Adil Hossain', 'adilhossain227@gmail.com', 1712916066, 'testing the second pahse on datasbe anmdn server . lets see ', '122973832', '2020-08-24 16:04:43', NULL, NULL, NULL),
(8, 6, 'Adil Hossain', '', 1712916066, 'final testing ', '958515200', '2020-08-24 16:27:01', NULL, NULL, NULL),
(9, 6, 'Mokles', 'adilhossain227@gmail.com', 1712916066, 'bhai abasha ta dekhbo ', '587376661', '2020-08-26 13:45:16', NULL, NULL, NULL),
(10, 1, 'Adil Hossain', 'adilhossain227@gmail.com', 1712916062, 'basha ta dekhte chai ', '845027020', '2020-08-29 07:37:22', NULL, NULL, NULL),
(11, 1, 'Adil Hossain', 'adilhossain227@gmail.com', 1712916062, 'Testing for Etolet \r\n', '758959603', '2020-09-07 18:52:16', NULL, NULL, NULL),
(12, 10, 'Adil Hossain', 'adilhossain227@gmail.com', 1712916062, 'if you have received this txt . txt me back in my number .', '984538031', '2020-09-13 06:56:33', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PropertyId` int(11) NOT NULL,
  `UserRemark` mediumtext NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Is_Publish` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`id`, `UserId`, `PropertyId`, `UserRemark`, `PostingDate`, `Is_Publish`) VALUES
(1, 3, 1, 'This review is for testing.', '2019-09-20 19:15:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblnid`
--

CREATE TABLE `tblnid` (
  `ID` int(11) NOT NULL,
  `uid` int(20) NOT NULL,
  `idpic1` varchar(200) NOT NULL,
  `idpic2` varchar(200) NOT NULL,
  `uservarified` int(10) NOT NULL,
  `adminvarified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblotp`
--

CREATE TABLE `tblotp` (
  `ID` int(11) NOT NULL,
  `MobileNumber` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblotp`
--

INSERT INTO `tblotp` (`ID`, `MobileNumber`, `otp`) VALUES
(12, 1712916062, 'SjXv2N'),
(22, 1625975405, '777443'),
(23, 1912004779, '288753'),
(25, 1959518188, '479637');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(120) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<b><font color=\"#003399\">ETo-Let | Bangladesh </font></b><div><br></div><div><b><font color=\"#003399\">Our Vision:</font></b></div><div><span style=\"color: rgb(170, 170, 170); font-family: Poppins, sans-serif;\">â€œBecome The Leading E-Commerce Renting Site In Bangladeshâ€\r\n</span><br></div><div><span style=\"color: rgb(170, 170, 170); font-family: Poppins, sans-serif;\"><br></span></div><div><span style=\"font-family: Poppins, sans-serif;\"><b style=\"\"><font color=\"#003399\">Our Goal:</font></b></span></div><div><span style=\"color: rgb(170, 170, 170); font-family: Poppins, sans-serif;\">â€œeTo-let is an e-commerce rental site which intents to create a bridge between the house owners & tenants. We develop a relationship between house owners and tenants and provide house rental services to our valuable customers. eTo-letâ€™s app & website provides all vacant residences and properties to those who need them. This site is operating all over the Dhaka city. \r\n\r\nHome is a place where people finds security and soundness. Our belief is to give quality and secured services in renting properties to all of our customers & clients. Our site allows anyone to rent in his or her region simply and conveniently. eTo-let connects millions of housee owners and rentels in Bangladesh every month by delivering remarkable user experience on the site. Every Bangladeshi can find properties to rent on etolet.net.â€</span><span style=\"color: rgb(170, 170, 170); font-family: Poppins, sans-serif;\"><b><br></b></span></div><div><br></div>', 'info@gmsil.com', 8989899898, '2020-08-31 18:49:08'),
(2, 'contactus', 'Contact Us', 'Plot #41 & 43,Road #5/1, Block #B, Banasree , East Rampura, Dhaka-1219', 'contact@etolet.net', 1777617054, '2020-09-04 02:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `ID` int(11) NOT NULL,
  `uid` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `paymentNumber` int(11) NOT NULL,
  `trnxID` varchar(50) NOT NULL,
  `PropertyID` int(11) NOT NULL,
  `paymentDate` datetime NOT NULL,
  `adminConfirm` int(5) NOT NULL,
  `ownerPayment` int(10) NOT NULL,
  `ownerPaymentDate` datetime NOT NULL,
  `ownerTrnxID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`ID`, `uid`, `type`, `paymentNumber`, `trnxID`, `PropertyID`, `paymentDate`, `adminConfirm`, `ownerPayment`, `ownerPaymentDate`, `ownerTrnxID`) VALUES
(1, 5, 'baskh', 1711523099, 'AD23145698', 838670647, '2020-08-29 09:09:28', 1, 0, '0000-00-00 00:00:00', ''),
(5, 22, 'baskh', 1959518188, 'AD23145699', 780669755, '2020-09-14 19:39:52', 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblproperty`
--

CREATE TABLE `tblproperty` (
  `ID` int(10) NOT NULL,
  `UserID` char(20) DEFAULT NULL,
  `PropertyTitle` mediumtext DEFAULT NULL,
  `PropertDescription` mediumtext DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Bedrooms` varchar(200) DEFAULT NULL,
  `Bathrooms` varchar(200) DEFAULT NULL,
  `Floors` varchar(200) DEFAULT NULL,
  `Garages` varchar(200) DEFAULT NULL,
  `Area` varchar(50) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `RentorsalePrice` varchar(120) DEFAULT NULL,
  `BeforePricelabel` varchar(120) DEFAULT NULL,
  `AfterPricelabel` varchar(120) DEFAULT NULL,
  `PropertyID` varchar(120) DEFAULT NULL,
  `CenterCooling` char(4) DEFAULT NULL,
  `Balcony` char(4) DEFAULT NULL,
  `PetFriendly` char(4) DEFAULT NULL,
  `Barbeque` char(4) DEFAULT NULL,
  `FireAlarm` char(4) DEFAULT NULL,
  `ModernKitchen` char(4) DEFAULT NULL,
  `Storage` char(4) DEFAULT NULL,
  `Dryer` char(4) DEFAULT NULL,
  `Heating` char(4) DEFAULT NULL,
  `Pool` char(4) DEFAULT NULL,
  `Laundry` char(4) DEFAULT NULL,
  `Sauna` varchar(4) DEFAULT NULL,
  `Gym` char(4) DEFAULT NULL,
  `Elevator` char(4) DEFAULT NULL,
  `DishWasher` char(4) DEFAULT NULL,
  `EmergencyExit` char(4) DEFAULT NULL,
  `FeaturedImage` varchar(200) DEFAULT NULL,
  `GalleryImage1` varchar(200) DEFAULT NULL,
  `GalleryImage2` varchar(200) DEFAULT NULL,
  `GalleryImage3` varchar(200) DEFAULT NULL,
  `GalleryImage4` varchar(200) DEFAULT NULL,
  `GalleryImage5` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Country` varchar(200) DEFAULT NULL,
  `City` varchar(220) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `ZipCode` varchar(200) DEFAULT NULL,
  `Neighborhood` varchar(200) DEFAULT NULL,
  `ListingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproperty`
--

INSERT INTO `tblproperty` (`ID`, `UserID`, `PropertyTitle`, `PropertDescription`, `Type`, `Status`, `Location`, `Bedrooms`, `Bathrooms`, `Floors`, `Garages`, `Area`, `Size`, `RentorsalePrice`, `BeforePricelabel`, `AfterPricelabel`, `PropertyID`, `CenterCooling`, `Balcony`, `PetFriendly`, `Barbeque`, `FireAlarm`, `ModernKitchen`, `Storage`, `Dryer`, `Heating`, `Pool`, `Laundry`, `Sauna`, `Gym`, `Elevator`, `DishWasher`, `EmergencyExit`, `FeaturedImage`, `GalleryImage1`, `GalleryImage2`, `GalleryImage3`, `GalleryImage4`, `GalleryImage5`, `Address`, `Country`, `City`, `State`, `ZipCode`, `Neighborhood`, `ListingDate`) VALUES
(9, '17', 'Gentle Breeze', '', 'Apartments', '10000-20000', 'Dhaka', '3', '3', '4th', '2', '1200', '1200', '15300', 'October', 'monthly', '838670647', '1', '1', '1', '', '1', '', '', '', '', '', '', NULL, NULL, '1', '', '1', '6e3bfda26e219cb42f6d6cc0650ca2811599580528.jpg', 'a54dee63574a2246657101f8a228447d1599580528.jpg', 'd1d8db7fc9b33efb54386ff1267715d01599580528.jpg', '47825f589b52ab5a7c501b72e77641551599580528.jpg', 'fa362d605e918667997bb7f58e60c11d1599580528.jpg', '3b589e740533c0b3b0941abb5ad93a781599580528.jpg', 'H-12, Road-5/1, Block-A, Banasree', '1', 'Rampura', '1', '1219', 'Banasree', '2020-09-08 15:55:28'),
(10, '17', 'Peace Dawn', '', 'Apartments', '10000-20000', 'Dhaka', '2', '2', '3rd', 'no', '1100', '1100', '18360', 'October', 'monthly', '780669755', '1', '', '', '', '1', '', '', '', '', '', '', '', '1', '1', '', '1', '66e039a93e819c2c08aabd4c77e09f631599706414.jpg', '265478d92f240c2d563c97f04a08789c1599706414.jpg', '3b589e740533c0b3b0941abb5ad93a781599706414.jpg', 'fa362d605e918667997bb7f58e60c11d1599706414.jpg', '6e3bfda26e219cb42f6d6cc0650ca2811599706414.jpg', 'b7ef1e96e85eddbc0383198e863277ac1599706414.jpg', '33/2, Rahaman Mansion, Post Office Road', '1', 'Gulshan', '1', '1212', 'Middle Badda', '2020-09-10 02:53:34'),
(11, '20', 'Office/House for Rent', '', 'Apartments', '80000-100000', 'Gulshan, Dhaka', '3', '2', '4th', 'no', '3200', '3200', '81600', '', '', '372339772', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2b1090656b4c7a87cc035f126a29e6811599925318.jpg', 'ccaf462d54b107ef651ba4aea5c698ad1599924504jpeg', 'e5e892f7ef840e22ddc74e19e6a9e6dd1599924504jpeg', '0a5e508e360bd6fd4bfc7cffdcfe435e1599924504jpeg', '57c2cb9075c612c927f88d8f2833cee01599924504.jpg', 'd034d66a6c032fae10df1979166438611599924504.jpg', 'House-60/B, Road-131, Gulshan-1', '1', 'Gulshan', '1', '1212', ' Gulshan Lake Circle-1', '2020-09-12 15:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblpropertytype`
--

CREATE TABLE `tblpropertytype` (
  `ID` int(10) NOT NULL,
  `PropertType` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpropertytype`
--

INSERT INTO `tblpropertytype` (`ID`, `PropertType`, `EnterDate`) VALUES
(1, 'Apartments', '2019-08-06 06:31:56'),
(3, 'Offices', '2019-08-06 06:32:32'),
(4, 'Bachelors', '2019-08-06 06:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `ID` int(10) NOT NULL,
  `CountryID` int(5) DEFAULT NULL,
  `StateName` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`ID`, `CountryID`, `StateName`, `EnterDate`) VALUES
(1, 1, 'Dhaka', '2019-08-06 10:48:36'),
(2, 1, 'Chittagong', '2019-08-06 10:48:58'),
(3, 1, 'Barishal', '2019-08-06 10:49:07'),
(4, 1, 'Rangpur', '2019-08-06 10:49:29'),
(5, 1, 'Mymensingh', '2019-08-06 10:49:39'),
(6, 1, 'Khulna', '2019-08-06 10:49:50'),
(7, 1, 'RajshahI', '2019-08-06 10:51:29'),
(8, 1, 'Chadpur', '2019-08-06 10:51:49'),
(9, 1, 'Sylhet', '2019-08-06 10:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `UserType` int(5) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Aboutme` mediumtext DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `UserType`, `PostingDate`, `Aboutme`, `UpdationDate`) VALUES
(13, 'Adil Hossain', 'adilhossain227@gmail.com', 1712916062, 'e10adc3949ba59abbe56e057f20f883e', 2, '2020-08-21 09:08:21', '', NULL),
(17, 'Farhan Khan', '', 1625975405, '09e74e10780933407ce1407028270a87', 2, '2020-09-12 06:39:43', NULL, NULL),
(20, 'Sattar Mollah', '', 1912004779, '45f559a61abf4bce15a69fa3f7a8e6f0', 2, '2020-09-12 12:53:07', '', NULL),
(22, 'Shaikat', '', 1959518188, '7afad7a527a4b97610ad50822c55c5c5', 3, '2020-09-14 19:38:28', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblconfirmusers`
--
ALTER TABLE `tblconfirmusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcountry`
--
ALTER TABLE `tblcountry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnid`
--
ALTER TABLE `tblnid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblotp`
--
ALTER TABLE `tblotp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblproperty`
--
ALTER TABLE `tblproperty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpropertytype`
--
ALTER TABLE `tblpropertytype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tblconfirmusers`
--
ALTER TABLE `tblconfirmusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcountry`
--
ALTER TABLE `tblcountry`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblnid`
--
ALTER TABLE `tblnid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblotp`
--
ALTER TABLE `tblotp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproperty`
--
ALTER TABLE `tblproperty`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblpropertytype`
--
ALTER TABLE `tblpropertytype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
