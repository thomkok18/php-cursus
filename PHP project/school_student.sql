-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: school
-- ------------------------------------------------------
-- Server version	5.6.27

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
-- Table structure for table `student`
--

CREATE DATABASE school;
USE school;

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Sawyer','Berg','Ijebu Ode'),(2,'Orson','Haynes','Berg'),(3,'Merrill','Salinas','Bath'),(4,'Knox','Norman','Bonneville'),(5,'Colt','Carey','Bègles'),(6,'Omar','Johnson','Tintange'),(7,'Baxter','Mckinney','Martigues'),(8,'Cullen','Miranda','Loncoche'),(9,'Hammett','Mclaughlin','Frigento'),(10,'Hu','Lowery','Quinte West'),(11,'Palmer','Dunlap','Dilbeek'),(12,'Jared','Hebert','Schepdaal'),(13,'Ralph','Gibbs','Piagge'),(14,'Neville','Woodward','Ravels'),(15,'Colorado','Wilcox','Forres'),(16,'Zahir','Horton','Kamalia'),(17,'Cairo','Cruz','Coihaique'),(18,'Brody','Fuentes','Bearberry'),(19,'Christopher','Waters','Lidingo'),(20,'Kelly','Luna','Toronto'),(21,'Castor','Ewing','Buin'),(22,'Gareth','Bush','Eyemouth'),(23,'Josiah','Whitehead','Castle Douglas'),(24,'Igor','Hess','Châtellerault'),(25,'Ethan','Townsend','Mysore'),(26,'Nasim','Morales','Hawick'),(27,'Lev','Cox','Salerno'),(28,'Branden','Ellison','Newtonmore'),(29,'Lars','Holder','Turriff'),(30,'Oliver','Livingston','Spoleto'),(31,'Kennan','Wilder','Schaarbeek'),(32,'Brendan','Whitley','Gaya'),(33,'Connor','Cameron','Kano'),(34,'Quentin','Gutierrez','João Pessoa'),(35,'Yuli','Le','Redruth'),(36,'Rajah','Davis','Hamme'),(37,'Carter','Mathis','Bathgate'),(38,'Jerry','Shepherd','Saint-Dizier'),(39,'Todd','Hurley','Etobicoke'),(40,'Oliver','Fuentes','Keith'),(41,'William','Mitchell','Stendal'),(42,'Jonas','Wong','Walhain-Saint-Paul'),(43,'Brent','Stewart','Murdochville'),(44,'Henry','Cohen','Torchiarolo'),(45,'Elmo','Kelley','Bay Roberts'),(46,'Driscoll','Whitehead','Spermalie'),(47,'Duncan','Barlow','Groß-Gerau'),(48,'Damon','Morales','P?ock'),(49,'Kermit','Nielsen','Fogo'),(50,'Kibo','Hester','Fort Laird'),(51,'Upton','Suarez','Cottbus'),(52,'Honorato','Whitley','Castelvecchio Calvisio'),(53,'Donovan','Coffey','Langford'),(54,'Colby','Quinn','Raichur'),(55,'Rogan','Parrish','Castello di Godego'),(56,'Christian','Knox','Finkenstein am Faaker See'),(57,'Laith','Russell','Shaftesbury'),(58,'Keefe','Workman','Minturno'),(59,'Ralph','Hodges','Culemborg'),(60,'Len','Savage','Itanagar'),(61,'Xanthus','Glover','Vellore'),(62,'Palmer','Clayton','Castello dell\'Acqua'),(63,'Cade','Vargas','Candidoni'),(64,'Hyatt','Montoya','Heule'),(65,'Oscar','Donaldson','San Felice a Cancello'),(66,'Tyler','Ryan','Pozant?'),(67,'Leroy','Johns','Plauen'),(68,'Reed','Washington','Gambolò'),(69,'Ivor','Rush','Gloucester'),(70,'Dylan','Bird','Bastogne'),(71,'Elton','Gilliam','Witney'),(72,'Gabriel','Lee','Lewiston'),(73,'Amal','Bryant','Anzio'),(74,'Dexter','David','Belgrave'),(75,'Jeremy','Haynes','Cuglieri'),(76,'Nathaniel','Boone','Neubrandenburg'),(77,'Arden','Floyd','Ch‰telet'),(78,'Driscoll','Anthony','PiŽtrain'),(79,'Ira','Albert','Fontanellato'),(80,'Benjamin','Summers','Fort Saskatchewan'),(81,'Phillip','Fitzpatrick','Turgutlu'),(82,'Upton','Arnold','Genk'),(83,'Vance','Leblanc','Geest-GŽrompont-Petit-RosiŽre'),(84,'Hiram','Blankenship','Teno'),(85,'Fulton','Meyers','Fauvillers'),(86,'Colorado','Duran','Värnamo'),(87,'Elliott','Morrison','Provo'),(88,'Solomon','Howard','Akron'),(89,'Nolan','Cherry','Yahyal?'),(90,'Chadwick','Blevins','North Battleford'),(91,'Forrest','Cleveland','Cap-de-la-Madeleine'),(92,'Slade','Gibbs','Las Cabras'),(93,'Herman','Burgess','Moncrivello'),(94,'Cyrus','Le','Martelange'),(95,'Kareem','Burke','Motala'),(96,'Fritz','Cobb','Cap-Saint-Ignace'),(97,'Coby','Lloyd','Pont-Saint-Martin'),(98,'Caleb','Gamble','Aylesbury'),(99,'Kyle','Newton','Pont-de-Loup'),(100,'Stewart','Walker','Silvan');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-07 20:05:58
