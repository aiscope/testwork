-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cinema
-- ------------------------------------------------------
-- Server version	5.5.35-0+wheezy1

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
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buy` (
  `buy_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` int(11) unsigned NOT NULL,
  `places` varchar(255) NOT NULL,
  `rejected` tinyint(1) NOT NULL DEFAULT '0',
  `uniq_key` int(10) unsigned NOT NULL,
  PRIMARY KEY (`buy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy`
--

LOCK TABLES `buy` WRITE;
/*!40000 ALTER TABLE `buy` DISABLE KEYS */;
INSERT INTO `buy` VALUES (1,3,'1',1,3364735116),(2,4,'1,3,4',1,1509902928),(3,9,'10,11,12',0,1827441825),(4,4,'1,3,4',0,2634359585);
/*!40000 ALTER TABLE `buy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cinema`
--

DROP TABLE IF EXISTS `cinema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cinema` (
  `cinema_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`cinema_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cinema`
--

LOCK TABLES `cinema` WRITE;
/*!40000 ALTER TABLE `cinema` DISABLE KEYS */;
INSERT INTO `cinema` VALUES (1,'им. Горького'),(2,'Киномакс'),(3,'Родина'),(4,'Октябрь'),(5,'IMAX');
/*!40000 ALTER TABLE `cinema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hall` (
  `hall_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cinema_id` int(11) unsigned NOT NULL,
  `places_number` int(2) unsigned NOT NULL,
  PRIMARY KEY (`hall_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hall`
--

LOCK TABLES `hall` WRITE;
/*!40000 ALTER TABLE `hall` DISABLE KEYS */;
INSERT INTO `hall` VALUES (1,'1',1,35),(2,'2',1,53),(3,'3',1,49),(4,'4',1,46),(5,'1',2,41),(6,'2',2,43),(7,'3',2,35),(8,'4',2,36),(9,'1',3,46),(10,'2',3,53),(11,'3',3,43),(12,'4',3,33),(13,'1',4,38),(14,'2',4,34),(15,'3',4,44),(16,'4',4,51),(17,'1',5,33),(18,'2',5,34),(19,'3',5,45),(20,'4',5,58);
/*!40000 ALTER TABLE `hall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie` (
  `movie_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES (1,'Терминатор'),(2,'Шрек'),(3,'Назад в будущее'),(4,'Титаник 3D'),(5,'День Сурка'),(6,'Дублер'),(7,'Сияние');
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `session_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `movie_id` int(11) unsigned NOT NULL,
  `hall_id` int(11) unsigned NOT NULL,
  `places` text NOT NULL,
  `empty_places` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES (1,'2014-04-19 02:00:00','2014-04-19 04:00:00',6,1,'14,19,18,31,4,8,32,25,5,1,2,3,6,7,9','10,11,12,13,15,16,17,20,21,22,23,24,26,27,28,29,30,33,34,35'),(2,'2014-04-18 09:00:00','2014-04-18 11:00:00',4,2,'3,6,12,24,23,1,2,4','5,7,8,9,10,11,13,14,15,16,17,18,19,20,21,22,25,26,27,28,29,30,31,32,33,34,35'),(3,'2014-04-24 04:00:00','2014-04-24 06:00:00',3,3,'20,9,5,6,21,34,2,3','4,7,8,10,11,12,13,14,15,16,17,18,19,22,23,24,25,26,27,28,29,30,31,32,33,35,1'),(4,'2014-04-16 05:00:00','2014-04-16 07:00:00',5,4,'22,11,7,25,2,1,3,4','5,6,8,9,10,12,13,14,15,16,17,18,19,20,21,23,24,26,27,28,29,30,31,32,33,34,35'),(5,'2014-04-25 22:00:00','2014-04-26 00:00:00',1,5,'24,8,10,2,6,25','1,3,4,5,7,9,11,12,13,14,15,16,17,18,19,20,21,22,23,26,27,28,29,30,31,32,33,34,35'),(6,'2014-04-18 09:00:00','2014-04-18 11:00:00',6,6,'5,3,32,14,4,24','1,2,6,7,8,9,10,11,12,13,15,16,17,18,19,20,21,22,23,25,26,27,28,29,30,31,33,34,35'),(7,'2014-04-22 14:00:00','2014-04-22 16:00:00',3,7,'4,33,8,28,21,17,31,6','1,2,3,5,7,9,10,11,12,13,14,15,16,18,19,20,22,23,24,25,26,27,29,30,32,34,35'),(8,'2014-04-20 16:00:00','2014-04-20 18:00:00',3,8,'10,8,25,19,20,35,17,30','1,2,3,4,5,6,7,9,11,12,13,14,15,16,18,21,22,23,24,26,27,28,29,31,32,33,34'),(9,'2014-04-19 08:00:00','2014-04-19 10:00:00',3,9,'6,29,23,13,33,30,5,1,10,11,12','2,3,4,7,8,9,14,15,16,17,18,19,20,21,22,24,25,26,27,28,31,32,34,35'),(10,'2014-04-23 00:00:00','2014-04-23 02:00:00',2,10,'29,26,33,10','1,2,3,4,5,6,7,8,9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,27,28,30,31,32,34,35'),(11,'2014-04-15 10:00:00','2014-04-15 12:00:00',5,11,'1,30,21,33,14','2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20,22,23,24,25,26,27,28,29,31,32,34,35'),(12,'2014-04-23 09:00:00','2014-04-23 11:00:00',6,12,'24,31,21,1,28,17','2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,18,19,20,22,23,25,26,27,29,30,32,33,34,35'),(13,'2014-04-20 03:00:00','2014-04-20 05:00:00',1,13,'24,27,30,9,31,2,16,20,6','1,3,4,5,7,8,10,11,12,13,14,15,17,18,19,21,22,23,25,26,28,29,32,33,34,35'),(14,'2014-04-20 03:00:00','2014-04-20 05:00:00',7,14,'5,30,3,9,29,12,17','1,2,4,6,7,8,10,11,13,14,15,16,18,19,20,21,22,23,24,25,26,27,28,31,32,33,34,35'),(15,'2014-04-22 07:00:00','2014-04-22 09:00:00',1,15,'33,32,16','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,34,35'),(16,'2014-04-17 10:00:00','2014-04-17 12:00:00',5,16,'9,35,18','1,2,3,4,5,6,7,8,10,11,12,13,14,15,16,17,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34'),(17,'2014-04-23 17:00:00','2014-04-23 19:00:00',3,17,'26,32,19,6,25,30,35,5,29','1,2,3,4,7,8,9,10,11,12,13,14,15,16,17,18,20,21,22,23,24,27,28,31,33,34'),(18,'2014-04-18 03:00:00','2014-04-18 05:00:00',6,18,'8,32,21,30,27,14,4,33,17,19','1,2,3,5,6,7,9,10,11,12,13,15,16,18,20,22,23,24,25,26,28,29,31,34,35'),(19,'2014-04-18 17:00:00','2014-04-18 19:00:00',3,19,'31,1,21,25,23,18,10,24,16,8,14,9,11','2,3,4,5,6,7,12,13,15,17,19,20,22,26,27,28,29,30,32,33,34,35'),(20,'2014-04-23 15:00:00','2014-04-23 17:00:00',2,20,'30,12,28,4,1,29,18,25,22','2,3,5,6,7,8,9,10,11,13,14,15,16,17,19,20,21,23,24,26,27,31,32,33,34,35');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-16 13:25:03
