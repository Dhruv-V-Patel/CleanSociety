-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: cleansociety
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `complaint_list`
--

DROP TABLE IF EXISTS `complaint_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaint_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Complaint_ID` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Waste_Type` varchar(45) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` varchar(45) NOT NULL,
  `District` varchar(45) NOT NULL,
  `Photos` varchar(1024) NOT NULL,
  `Status` enum('Resolved','Pending','In Progress','Rejected') NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`,`Complaint_ID`),
  UNIQUE KEY `Complaint_ID_UNIQUE` (`Complaint_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint_list`
--

LOCK TABLES `complaint_list` WRITE;
/*!40000 ALTER TABLE `complaint_list` DISABLE KEYS */;
INSERT INTO `complaint_list` VALUES (1,'CMTID994226','Dhruv V Patel','dhruvpatel@gmail.com','9984512360','Solid Waste','vadipara chowk','Unjha','384170','mehsana','[\"67d2d85449766.webp\",\"67d2d85449cf5.webp\"]','In Progress','2025-03-13 18:36:28'),(2,'CMTID603844','Dhruv V Patel','dhruvpatel@gmail.com','9984512360','Recyclable Waste','80 Feet Ring Road','Unjha','384170','mehsana','[\"67e42b8ddde92.jpg\",\"67e42b8dde57b.jpg\"]','Pending','2025-03-26 22:00:05'),(3,'CMTID582035','Ayush RPatel','ayush@gmail.com','7845100250','Organic Waste','kansa Chokdi','Visnagar','384315','mehsana','[\"67e42fe6ae58d.jpg\",\"67e42fe6ae8e8.jpg\"]','Resolved','2025-03-26 22:18:38');
/*!40000 ALTER TABLE `complaint_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `official_list`
--

DROP TABLE IF EXISTS `official_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `official_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Pincode` varchar(45) NOT NULL,
  `District` varchar(45) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`,`User_ID`),
  UNIQUE KEY `User_ID_UNIQUE` (`User_ID`),
  UNIQUE KEY `Email_UNIQUE` (`Email`),
  UNIQUE KEY `Phone_UNIQUE` (`Phone`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `official_list`
--

LOCK TABLES `official_list` WRITE;
/*!40000 ALTER TABLE `official_list` DISABLE KEYS */;
INSERT INTO `official_list` VALUES (1,'UNJ01','unjha@gmail.com','7845120300','Unjha','384170','Mehasana','$2y$10$G5CkB4ezL/SwHSCxnbGPFOUVnzjUhWjxPWfPx1X4JyHIvq703bvj2','2025-03-12 18:44:29'),(2,'ADMIN','admin@gmail.com','9913362680','Unjha','384170','Mehasana','$2y$10$g2j/2kC./c81Wpf7bH3eeurZuQc6FcpI3eGeGzpiyZKbeKqRAndaa','2025-03-26 19:05:11'),(3,'VIS01','visnagar@gmail.com','7845123005','Visnagar','384315','Mehasana','$2y$10$qZ7lZx7RLtUrc./aF8xU1.4H8r5rrYKjDmcmFAUrBIdDa2LDDQL8q','2025-03-26 20:45:30');
/*!40000 ALTER TABLE `official_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_list`
--

DROP TABLE IF EXISTS `user_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FName` varchar(45) NOT NULL,
  `MName` varchar(45) NOT NULL,
  `LName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Pincode` varchar(45) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`Email`),
  UNIQUE KEY `Phone_UNIQUE` (`Phone`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_list`
--

LOCK TABLES `user_list` WRITE;
/*!40000 ALTER TABLE `user_list` DISABLE KEYS */;
INSERT INTO `user_list` VALUES (1,'Dhruv','V ','Patel','dhruvpatel@gmail.com','9984512360','Unjha','384170','$2y$10$14CqiRSDPyTFRjtIbWrH4eRKMb6dE9GG3WBSbt9aPkptLl1IoPeMK','2025-03-26 19:25:26'),(2,'Ayush','R','Patel','ayush@gmail.com','7845100250','Visnagar','384315','$2y$10$94Ocyt2ZDvL.Pd4GyUlXne1DlAaVjshvPTC/lujRA/Kyf87nhU4L6','2025-03-26 22:16:04');
/*!40000 ALTER TABLE `user_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-12 19:01:24
