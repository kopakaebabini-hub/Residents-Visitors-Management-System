-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: cvmsdb
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `image_table`
--

DROP TABLE IF EXISTS `image_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_table` (
  `ID` int(11) NOT NULL,
  `image` blob NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_table`
--

LOCK TABLES `image_table` WRITE;
/*!40000 ALTER TABLE `image_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `image_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residents`
--

DROP TABLE IF EXISTS `residents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residents` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `Res_name` varchar(20) NOT NULL,
  `warden_name` varchar(20) NOT NULL,
  `wadern_contact` varchar(20) NOT NULL,
  `House_parent_name` varchar(20) NOT NULL,
  `House_parent_cont` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residents`
--

LOCK TABLES `residents` WRITE;
/*!40000 ALTER TABLE `residents` DISABLE KEYS */;
INSERT INTO `residents` VALUES (1,'Lost City (Males)','Dr. Albert','0625008389','Prof. Thato','0848433820'),(2,'Lost City (Females)','Kim Foster','(454)7555325','Namso','(968)2462495'),(3,'Mbada','Abigail Gray',' (968)2462495','Paterson','(149)5204841'),(4,'Kgosi Dick Montshioa','Joshua Garrett','(458)3841608','Alaska Spantito','(352)1565734'),(5,'Hopeville','kenny','(972)7886160','Alfred Gutierrez','(546)8820315'),(6,'Khayelitsha',' Robert Weaver','(356)4170685','Legole John','(636)1198950'),(7,'Dr James Moroka','Riley Rhodes','(713)4227499','John Vuli gate','(850)0922379'),(8,'Sol Plaatje','Alberto Mccoy','(636)9770546','Khuli Chana','(649)4743913'),(9,'Sedibeng','Brent Wallace','(420)9290103','kantse Fele','(801)6053341'),(10,'Ngaka Modiri Molema','Joel Pearson','(363)3992351','Loje kobe','(084)2928935'),(11,'Dr Nelson Mandela','Ted Sutton','(806)6560216','Yung Boi','(144)5655053'),(12,'Biko House','Ken Gray','(752)9604851','Areece the King','(509)2036253');
/*!40000 ALTER TABLE `residents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladmin`
--

LOCK TABLES `tbladmin` WRITE;
/*!40000 ALTER TABLE `tbladmin` DISABLE KEYS */;
INSERT INTO `tbladmin` VALUES (2,'uyt','yt',765765,'hgsds@jj.com','81dc9bdb52d04dc20036dbd8313ed055','2020-07-16 08:13:37','employee'),(3,'uyu','uytyut',5765,'admin@admin.com','0192023a7bbd73250516f069df18b500','2020-07-16 08:13:53','employee'),(4,'iuyiu','ytyut',5465654,'kp@gmail.com','ytytuytyut','2020-07-16 10:26:02','employee'),(5,'qw','qw',98989,'admin@admin.com','c20ad4d76fe97759aa27a0c99bff6710','2020-07-16 08:39:09','employee'),(6,'qw','qw',6676,'admin@admin.com','c20ad4d76fe97759aa27a0c99bff6710','2020-07-16 08:40:05','employee'),(7,'employee','employee',7253787286,'empl@gmail.com','ac8be4aee61f5f6e21b8c5afffb52939','2020-07-16 08:41:12','employee'),(8,'Employee','t',1234567890,'employee@admin.com','e358efa489f58062f10dd7316b65649e','2020-07-16 12:28:00','employee'),(9,'Mr Albert Kopakae','kopakaebabini@gmail.com',625008389,'kopakaebabini@gmail.com','202cb962ac59075b964b07152d234b70','2020-07-24 18:57:16','admin'),(10,'TAKATSO MARTIN','TEEKAY',656453829,'takatsom16@gmail.com','165f7d7847e2870e1f259638c3431528','2020-08-01 11:22:17','employee'),(11,'Refiloe','Fifi',749174459,'refiloephetoe@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','2020-09-23 17:14:43','admin'),(12,'User','user',127363414,'User@gmail.com','448ddd517d3abb70045aea6929f02367','2020-10-21 17:52:59','admin');
/*!40000 ALTER TABLE `tbladmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstudent` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudent`
--

LOCK TABLES `tblstudent` WRITE;
/*!40000 ALTER TABLE `tblstudent` DISABLE KEYS */;
INSERT INTO `tblstudent` VALUES (1,29855462,'Thato','Motloung','2019-09-09','0625008389','thatomotloung@gmail.com','Lost jaive',''),(2,29195780,'Remo','Matlou','1997-10-20','0749174459','rebaone50@gmail.com','145 Zabalaza Straat','');
/*!40000 ALTER TABLE `tblstudent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblvisitor`
--

DROP TABLE IF EXISTS `tblvisitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblvisitor` (
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblvisitor`
--

LOCK TABLES `tblvisitor` WRITE;
/*!40000 ALTER TABLE `tblvisitor` DISABLE KEYS */;
INSERT INTO `tblvisitor` VALUES (1,'Mthatos',29855462,9,5,'babs','2020-10-03 21:20:53','Out','2020-10-04 21:33:21','Lost City (Boys)'),(2,'phetoe',29134897,1,9,'shaka','2020-10-03 21:46:12','Out','2020-10-03 21:57:42','Hopeville'),(3,'Thato',29855462,9,9,'ban','2020-10-08 09:55:49','Out','2020-10-08 17:58:27','Hopeville'),(4,'Albert Leshaedi',29195780,8,5,'Babini','2020-10-09 08:13:50','Out','2020-10-09 08:14:50','Lost City (Boys)'),(5,'Albert Leshaedi',29195780,8,5,'Babini','2020-10-12 21:44:15','Out','2020-11-01 05:57:15','Lost City (Boys)'),(6,'Albert Leshaedi',29855462,8,9,'V','2020-10-12 21:44:43','Out','2020-11-01 05:57:19','Mbada'),(7,'Thato Motloung',29855462,8,5,'Babini','2020-10-23 09:46:20','Out','2020-11-01 05:57:22','Lost City (Boys)'),(8,'ben',2222,4,2,'medi','2020-10-26 07:14:04','Out','2020-10-26 07:14:55','Sedibeng'),(9,'bb',65,5,2,'b','2020-10-26 07:14:31','Out','2020-11-01 05:57:27','Lost City (Boys)'),(10,'Poloko',31153118,9,5,'plk','2020-10-29 19:52:15','Out','2020-10-30 08:17:24','Dr James Moroka'),(11,'mm',29855462,0,0,'bb','2020-10-29 19:54:42','Out','2020-10-31 19:59:20','Lost City (Boys)'),(12,'Albert Leshaedi',292929,9,9,'Babini','2020-10-30 08:20:25','Out','2020-10-31 19:59:24','Kgosi Dick Montshioa'),(13,'bbbbbbb',29134897,0,9,'Babini','2020-10-31 19:48:07','Out','2020-10-31 19:59:29','Lost City (Boys)'),(14,'hhg',29195780,9,9,'b','2020-10-31 20:02:24','Out','2020-11-01 05:57:43','Lost City (Boys)'),(15,'ww',29195780,90,9,'BB','2020-10-31 21:42:46','Out','2020-11-01 05:57:37','Lost City (Males)'),(16,'bbbbbbb',29195780,9,8,'Babini','2020-11-01 05:48:13','Out','2020-11-01 05:57:31','Lost City (Males)'),(17,'Albert Leshaedi',29195780,9,9,'Babini','2020-11-01 06:13:40','Out','2020-11-15 11:58:09','Lost City (Males)'),(18,'uyuyuy',29195780,8,5,'Babini','2020-11-06 07:23:21','Out','2020-11-15 11:58:12','Lost City (Males)'),(19,'Albert Leshaedi',29195780,8,9,'Babini','2020-11-14 20:38:02','Out','2020-11-14 21:36:01','Hopeville'),(20,'SDS',21212121,9,9,'HGHGHG','2020-11-14 21:26:13','Out','2020-11-14 21:36:05','Mbada'),(21,'Albert Leshaedi',29195780,8,5,'Babini','2020-11-15 11:32:59','Out','2020-11-15 11:58:16','Lost City (Males)'),(22,'Albert Leshaedi',29195780,8,8,'Babini','2020-11-15 12:00:46',NULL,NULL,'Mbada'),(23,'Dumi',2323232,9,9,'Babini','2020-11-18 12:32:05',NULL,NULL,'Lost City (Males)'),(24,'Albert Leshaedi',29134897,8,8,'Babini','2020-11-22 20:26:49',NULL,NULL,'Lost City (Males)');
/*!40000 ALTER TABLE `tblvisitor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-25  8:48:01
