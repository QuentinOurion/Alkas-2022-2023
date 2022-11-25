-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: localhost    Database: alkas2023
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Current Database: `alkas2023`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `alkas2023` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `alkas2023`;

--
-- Table structure for table `premieretable`
--

DROP TABLE IF EXISTS `premieretable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `premieretable` (
  `entier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `premieretable`
--

LOCK TABLES `premieretable` WRITE;
/*!40000 ALTER TABLE `premieretable` DISABLE KEYS */;
/*!40000 ALTER TABLE `premieretable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seconde_table`
--

DROP TABLE IF EXISTS `seconde_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seconde_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chaine` varchar(50) DEFAULT NULL,
  `chaine_bis` varchar(10) NOT NULL DEFAULT 'test',
  `nouveau` date NOT NULL DEFAULT '2022-12-12',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seconde_table`
--

LOCK TABLES `seconde_table` WRITE;
/*!40000 ALTER TABLE `seconde_table` DISABLE KEYS */;
INSERT INTO `seconde_table` VALUES (1,'premier enregistrement','test','2022-12-12'),(2,'val','val pr ma ','2022-12-12');
/*!40000 ALTER TABLE `seconde_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-25 12:18:48
