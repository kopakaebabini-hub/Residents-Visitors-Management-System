-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2021 at 12:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

DROP TABLE IF EXISTS `image_table`;
CREATE TABLE IF NOT EXISTS `image_table` (
  `ID` int(11) NOT NULL,
  `image` blob NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

DROP TABLE IF EXISTS `residents`;
CREATE TABLE IF NOT EXISTS `residents` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `Res_name` varchar(20) NOT NULL,
  `warden_name` varchar(20) NOT NULL,
  `wadern_contact` varchar(20) NOT NULL,
  `House_parent_name` varchar(20) NOT NULL,
  `House_parent_cont` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`ID`, `Res_name`, `warden_name`, `wadern_contact`, `House_parent_name`, `House_parent_cont`) VALUES
(1, 'Lost City (Males)', 'Dr. Albert', '0625008389', 'Prof. Thato', '0848433820'),
(2, 'Lost City (Females)', 'Kim Foster', '(454)7555325', 'Namso', '(968)2462495'),
(3, 'Mbada', 'Abigail Gray', ' (968)2462495', 'Paterson', '(149)5204841'),
(4, 'Kgosi Dick Montshioa', 'Joshua Garrett', '(458)3841608', 'Alaska Spantito', '(352)1565734'),
(5, 'Hopeville', 'kenny', '(972)7886160', 'Alfred Gutierrez', '(546)8820315'),
(6, 'Khayelitsha', ' Robert Weaver', '(356)4170685', 'Legole John', '(636)1198950'),
(7, 'Dr James Moroka', 'Riley Rhodes', '(713)4227499', 'John Vuli gate', '(850)0922379'),
(8, 'Sol Plaatje', 'Alberto Mccoy', '(636)9770546', 'Khuli Chana', '(649)4743913'),
(9, 'Sedibeng', 'Brent Wallace', '(420)9290103', 'kantse Fele', '(801)6053341'),
(10, 'Ngaka Modiri Molema', 'Joel Pearson', '(363)3992351', 'Loje kobe', '(084)2928935'),
(11, 'Dr Nelson Mandela', 'Ted Sutton', '(806)6560216', 'Yung Boi', '(144)5655053'),
(12, 'Biko House', 'Ken Gray', '(752)9604851', 'Areece the King', '(509)2036253');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `Usertype`) VALUES
(9, 'Mr Albert Kopakae', 'kopakaebabini@gmail.com', 625008389, 'kopakaebabini@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-24 18:57:16', 'admin'),
(10, 'TAKATSO MARTIN', 'TEEKAY', 656453829, 'takatsom16@gmail.com', '165f7d7847e2870e1f259638c3431528', '2020-08-01 11:22:17', 'employee'),
(12, 'Employee Sensei', 'emp', 127363414, 'User@gmail.com', 'e358efa489f58062f10dd7316b65649e', '2020-10-21 17:52:59', 'employee'),
(13, 'Admin', 'Admin@mail.com', 625008389, 'Admin@mail.com', '2176f6aa3b7547fe25df53f8c74a879c', '2021-03-24 10:49:35', 'admin'),
(14, 'Emp@mail.com', 'Emp@mail.com', 625008389, 'Emp@mail.com', 'f50df5dc7a9acfed6d0cb7bc520ff3a0', '2021-03-24 10:50:02', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `stud_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_num` int(11) NOT NULL,
  `std_fullname` varchar(20) NOT NULL,
  `std_surname` varchar(20) NOT NULL,
  `std_DOB` date NOT NULL,
  `std_pnumber` varchar(12) NOT NULL,
  `std_email` varchar(40) NOT NULL,
  `std_addr` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`stud_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`stud_ID`, `Student_num`, `std_fullname`, `std_surname`, `std_DOB`, `std_pnumber`, `std_email`, `std_addr`, `image`) VALUES
(1, 29195781, 'Thato', 'Motloung', '2019-09-09', '0625008389', 'thatomotloung@gmail.com', 'Lost jaive', ''),
(2, 29195780, 'Remo', 'Matlou', '1997-10-20', '0749174459', 'rebaone50@gmail.com', '145 Zabalaza Straat', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

DROP TABLE IF EXISTS `tblvisitor`;
CREATE TABLE IF NOT EXISTS `tblvisitor` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `Student_num` int(120) NOT NULL,
  `Block` int(250) NOT NULL,
  `Room` int(11) NOT NULL,
  `WhomtoMeet` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` varchar(255) DEFAULT NULL,
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Res` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Student_num`, `Block`, `Room`, `WhomtoMeet`, `EnterDate`, `remark`, `outtime`, `Res`) VALUES
(1, 'Mthatos', 29855462, 9, 5, 'babs', '2020-10-03 21:20:53', 'Out', '2020-10-04 21:33:21', 'Lost City (Boys)'),
(2, 'phetoe', 29134897, 1, 9, 'shaka', '2020-10-03 21:46:12', 'Out', '2020-10-03 21:57:42', 'Hopeville'),
(3, 'Thato', 29855462, 9, 9, 'ban', '2020-10-08 09:55:49', 'Out', '2020-10-08 17:58:27', 'Hopeville'),
(7, 'Thato Motloung', 29855462, 8, 5, 'Babini', '2020-10-23 09:46:20', 'Out', '2020-11-01 05:57:22', 'Lost City (Boys)'),
(8, 'ben', 2222, 4, 2, 'medi', '2020-10-26 07:14:04', 'Out', '2020-10-26 07:14:55', 'Sedibeng'),
(10, 'Poloko', 31153118, 9, 5, 'plk', '2020-10-29 19:52:15', 'Out', '2020-10-30 08:17:24', 'Dr James Moroka'),
(12, 'Albert Leshaedi', 292929, 9, 9, 'Babini', '2020-10-30 08:20:25', 'Out', '2020-10-31 19:59:24', 'Kgosi Dick Montshioa'),
(23, 'Dumi', 2323232, 9, 9, 'Babini', '2020-11-18 12:32:05', 'Out', '2020-12-01 16:19:21', 'Lost City (Males)'),
(26, 'Remo', 29195780, 8, 5, 'Babini', '2020-12-01 18:20:34', 'Out', '2020-12-01 19:34:58', 'Lost City (Males)'),
(27, 'Fifi', 29195780, 8, 5, 'BABS', '2020-12-01 19:34:00', NULL, NULL, 'Lost City (Males)'),
(28, 'Remo', 29195780, 8, 5, 'Babini', '2020-12-02 06:34:21', 'Out', '2020-12-02 06:35:29', 'Lost City (Males)'),
(29, 'Remo', 29195780, 8, 5, 'Babini', '2020-12-02 07:26:23', 'Out', '2020-12-02 07:27:36', 'Lost City (Males)'),
(30, 'Albert Leshaedi', 29195780, 9, 45, 'Babini', '2020-12-29 18:25:20', NULL, NULL, 'Dr James Moroka'),
(31, 'bbbbbbb', 29855462, 89, 98, 'b', '2020-12-29 18:25:45', NULL, NULL, 'Lost City (Males)'),
(32, 'yy', 545654, 7, 7, '88', '2021-03-18 19:29:51', 'Out', '2021-03-18 19:32:08', 'Dr Nelson Mandela'),
(33, 'Albert Leshaedi', 29195780, 9, 78, 'FE', '2021-03-18 19:30:50', 'Out', '2021-03-18 19:32:12', 'Biko House'),
(34, 'Palsesa', 1212, 9, 9, 'jh', '2021-03-18 19:33:08', 'Out', '2021-03-18 19:33:30', 'Biko House');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
