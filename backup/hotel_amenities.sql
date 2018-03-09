CREATE DATABASE  IF NOT EXISTS `hotel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hotel`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: hotel
-- ------------------------------------------------------
-- Server version	5.1.41

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
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `amenities` (
  `amenities_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`amenities_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities`
--

LOCK TABLES `amenities` WRITE;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
INSERT INTO `amenities` VALUES (1,'images/IconAC.jpg','Every room in at Bergwater Hotel has Air Conditioning. Each room has an easy-to-use remote control to set your comfort level without having to leave the bed.'),(2,'images/IconBkfst.jpg','Upon your arrival, you will recieve a complimentary \"Welcome Drink\" for your travel here. Also, there is Free Breakfast for all accomodations.'),(3,'images/IconCocktail.jpg','Located in the lobby, we offer a full-service Bar & Coffee Shop with a variety of beverages. '),(4,'images/IconFunction.jpg',' we hold many activities for all occasions here in the Function Room. One can reserve this room for conferences, parties, and more.'),(5,'images/IconGen.jpg','We have generators on standby 24 hours a day, 7 days a week in an event of a \"Brown Out\", providing uninterrupted electricity service to the building.'),(6,'images/IconLaundry.jpg','Whether on business or pleasure, we provide laundry and pressing service here. We deliver your clothes to your room, or in person to accomodate your schedule.'),(7,'images/IconLongDist.jpg','Need to call home or send documents? We provide Fax services and phones equipped for Long Distance calls to home, the office, or anywhere in between.'),(8,'images/restaurantLG.jpg','Not only a great place to eat, but has great street-side view of Bacolod City. Try the famous \"Tamera Chicken\", great for the whole family!'),(9,'images/IconShower.jpg','Every room is individualy equipped with personal water heaters in the showers. Fully adjustable, you\'ll always have a comfortable shower without burning or freezing yourself.'),(10,'images/IconTaxi.jpg','Have a meeting to go to or just want to go out? You can schedule trips anywhere around Limpoo by utilizing our transportation service offered here.'),(11,'images/IconTV.jpg','No room would be complete without complimentary Cable TV and telephone service in every room. Channels may vary.'),(12,'images/SmIconWiFi.png','All area of Bergwater Hotel is wifi ready');
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-23 17:32:16
