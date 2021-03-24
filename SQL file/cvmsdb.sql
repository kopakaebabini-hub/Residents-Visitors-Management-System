-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2020 at 09:59 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`ID`, `Res_name`, `warden_name`, `wadern_contact`, `House_parent_name`, `House_parent_cont`) VALUES
(1, 'Lost City (Boys)', 'Dr. Albert', '0625008389', 'Prof. Thato', '0848433820'),
(2, 'Lost City (Girls)', '', '', '', ''),
(3, 'Mbada', '', '', '', ''),
(4, 'Kgosi Dick Montshioa', '', '', '', ''),
(5, 'Hopeville', '', '', '', ''),
(6, 'Khayelitsha', '', '', '', ''),
(7, 'Dr James Moroka', '', '', '', ''),
(8, 'Sol Plaatje', '', '', '', ''),
(9, 'Sedibeng', '', '', '', ''),
(10, 'Ngaka Modiri Molema', '', '', '', ''),
(11, 'Dr Nelson Mandela', '', '', '', ''),
(12, 'Biko House', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `Usertype`) VALUES
(2, 'uyt', 'yt', 765765, 'hgsds@jj.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-07-16 08:13:37', 'employee'),
(3, 'uyu', 'uytyut', 5765, 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '2020-07-16 08:13:53', 'employee'),
(4, 'iuyiu', 'ytyut', 5465654, 'kp@gmail.com', 'ytytuytyut', '2020-07-16 10:26:02', 'employee'),
(5, 'qw', 'qw', 98989, 'admin@admin.com', 'c20ad4d76fe97759aa27a0c99bff6710', '2020-07-16 08:39:09', 'employee'),
(6, 'qw', 'qw', 6676, 'admin@admin.com', 'c20ad4d76fe97759aa27a0c99bff6710', '2020-07-16 08:40:05', 'employee'),
(7, 'employee', 'employee', 7253787286, 'empl@gmail.com', 'ac8be4aee61f5f6e21b8c5afffb52939', '2020-07-16 08:41:12', 'employee'),
(8, 'my commissar ', 't', 1234567890, 'employee@admin.com', 'e358efa489f58062f10dd7316b65649e', '2020-07-16 12:28:00', 'employee'),
(9, 'Mr Albert Kopakae', 'kopakaebabini@gmail.com', 625008389, 'kopakaebabini@gmail.com', 'a1cdd2ef92e510daccb49729b1bef964', '2020-07-24 18:57:16', 'admin'),
(10, 'TAKATSO MARTIN', 'TEEKAY', 656453829, 'takatsom16@gmail.com', '165f7d7847e2870e1f259638c3431528', '2020-08-01 11:22:17', 'employee'),
(11, 'Refiloe', 'Fifi', 749174459, 'refiloephetoe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-09-23 17:14:43', 'admin');

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
  PRIMARY KEY (`stud_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`stud_ID`, `Student_num`, `std_fullname`, `std_surname`, `std_DOB`, `std_pnumber`, `std_email`, `std_addr`) VALUES
(1, 29855462, 'Thato', 'Motloung', '2019-09-09', '0625008389', 'thatomotloung@gmail.com', 'Lost jaive'),
(2, 29134897, 'Rebaone', 'Matlou', '1997-10-20', '0749174459', 'rebaone50@gmail.com', '145 Zabalaza Straat');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Student_num`, `Block`, `Room`, `WhomtoMeet`, `EnterDate`, `remark`, `outtime`, `Res`) VALUES
(1, 'Mthatos', 29855462, 9, 5, 'babs', '2020-10-03 21:20:53', 'Out', '2020-10-03 21:57:38', 'Lost City (Boys)'),
(2, 'phetoe', 29134897, 1, 9, 'shaka', '2020-10-03 21:46:12', 'Out', '2020-10-03 21:57:42', 'Hopeville');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
