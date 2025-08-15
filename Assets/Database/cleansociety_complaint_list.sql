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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-28 17:32:26
