-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: 19_ivanov
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Galleries`
--

DROP TABLE IF EXISTS `Galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Galleries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Galleries`
--

LOCK TABLES `Galleries` WRITE;
/*!40000 ALTER TABLE `Galleries` DISABLE KEYS */;
INSERT INTO `Galleries` VALUES (1,'2022-09-05 11:51:31','2022-07-15 23:43:00','aut','aut'),(2,'2022-07-20 11:48:23','2022-08-15 14:40:06','quia','quia'),(3,'2022-08-15 19:33:23','2022-08-13 15:30:22','facere','facere'),(4,'2022-08-08 23:03:22','2022-07-02 10:22:46','quia','quia-1'),(5,'2022-08-20 05:22:40','2022-06-25 12:44:37','ab','ab'),(6,'2022-07-02 03:30:49','2022-06-05 09:51:00','quia','quia-2'),(7,'2022-06-14 22:15:10','2022-06-28 23:37:34','praesentium','praesentium'),(8,'2022-07-26 14:47:29','2022-07-09 11:51:14','dolorem','dolorem'),(10,'2022-07-30 10:15:31','2022-07-30 06:39:48','velit','velit'),(11,'2022-06-12 13:51:40','2022-07-07 14:22:32','quo','quo'),(12,'2022-07-20 01:00:01','2022-09-07 04:28:29','officia','officia'),(13,'2022-06-14 15:12:48','2022-07-15 10:50:25','minima','minima'),(14,'2022-08-04 13:46:48','2022-06-03 19:09:54','exercitationem','exercitationem'),(15,'2022-08-24 06:58:59','2022-06-29 13:42:08','amet','amet'),(16,'2022-08-26 13:32:40','2022-09-06 04:48:49','minus','minus'),(17,'2022-08-09 14:21:43','2022-08-04 08:25:25','dolores','dolores'),(18,'2022-06-21 07:39:06','2022-07-25 20:23:24','ut','ut'),(19,'2022-06-30 04:56:08','2022-08-11 13:51:02','nesciunt','nesciunt'),(20,'2022-07-01 14:50:45','2022-06-18 08:47:43','ad','ad'),(21,'2022-08-22 02:05:35','2022-06-01 09:31:43','rerum','rerum'),(22,'2022-07-14 22:23:57','2022-08-11 22:10:02','repellendus','repellendus'),(23,'2022-07-10 11:25:50','2022-06-03 05:10:42','veritatis','veritatis'),(24,'2022-07-31 04:53:13','2022-06-11 00:30:00','sit','sit'),(25,'2022-06-02 04:07:23','2022-06-28 08:33:54','sed','sed'),(26,'2022-06-20 05:18:36','2022-08-20 10:39:25','dignissimos','dignissimos'),(27,'2022-06-29 03:48:56','2022-06-24 20:33:52','repellat','repellat'),(28,'2022-09-06 05:55:13','2022-07-25 05:07:17','eum','eum'),(29,'2022-09-02 13:27:52','2022-06-07 15:23:29','eos','eos'),(30,'2022-06-14 04:24:15','2022-06-14 21:08:45','minus','minus-1'),(31,'2022-08-26 11:18:55','2022-08-31 12:59:04','voluptatem','voluptatem'),(32,'2022-07-02 21:39:15','2022-07-21 09:11:32','molestiae','molestiae'),(34,'2022-06-05 07:55:34','2022-08-20 18:06:24','unde','unde'),(35,'2022-07-03 19:22:04','2022-07-30 04:13:53','quia','quia-3'),(36,'2022-07-01 15:01:07','2022-08-02 14:53:31','illo','illo'),(37,'2022-07-26 22:28:31','2022-07-27 23:29:34','aperiam','aperiam-1'),(38,'2022-07-26 05:09:48','2022-08-04 13:51:10','facilis','facilis'),(39,'2022-07-30 07:48:51','2022-07-24 02:14:46','officia','officia-1'),(40,'2022-06-26 23:59:46','2023-06-18 10:34:27','ration1','ration1'),(41,'2022-06-01 04:49:16','2022-09-06 18:25:55','quae','quae'),(42,'2022-06-19 17:56:23','2022-06-12 22:19:47','et','et'),(43,'2022-07-22 14:20:13','2022-06-26 01:10:33','voluptas','voluptas'),(44,'2022-08-24 09:57:30','2022-08-08 19:58:11','non','non'),(45,'2022-06-15 14:22:52','2022-07-16 07:20:36','veritatis','veritatis-1'),(46,'2022-07-22 05:01:39','2022-08-17 21:17:10','et','et-1'),(47,'2022-06-13 22:10:30','2022-07-04 12:39:04','reiciendis','reiciendis'),(48,'2022-06-17 16:29:53','2022-06-20 04:13:22','aut','aut-1'),(49,'2022-09-03 01:30:58','2022-06-30 18:12:20','ut','ut-1'),(50,'2022-07-08 04:28:24','2022-09-05 20:04:48','odit','odit'),(51,'2022-09-09 09:26:47','2023-05-29 15:03:14','Nowe zdjęcia1','nowe-zdjecia1'),(52,'2022-09-09 15:07:51','2022-09-09 15:07:51','Nowa Galeria','nowa-galeria'),(54,'2023-05-29 15:03:56','2023-06-12 09:52:41','New','new'),(56,'2023-06-12 09:53:10','2023-06-12 09:53:10','Nowe koty','nowe-koty'),(57,'2023-06-15 19:36:53','2023-06-18 09:49:50','dbquery1','dbquery1'),(60,'2025-06-20 15:19:17','2025-06-20 15:19:17','2025','2025');
/*!40000 ALTER TABLE `Galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Photos`
--

DROP TABLE IF EXISTS `Photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Photos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gallery_id` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FDAE5EF4E7AF8F` (`gallery_id`),
  CONSTRAINT `FK_FDAE5EF4E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `Galleries` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Photos`
--

LOCK TABLES `Photos` WRITE;
/*!40000 ALTER TABLE `Photos` DISABLE KEYS */;
INSERT INTO `Photos` VALUES (1,18,'2022-09-08 22:38:41','2022-09-13 09:07:15','NO Cat!','Not a cat cat','cat12-631af6bec6ed4.jpeg'),(6,1,'2022-09-09 10:02:21','2022-09-09 10:02:21','Cute cat','Very cute','cat8-631af30d523c3.jpeg'),(8,49,'2022-09-09 10:13:00','2022-09-13 08:17:41','HmmmM','Caaaat???','cat9-631af58c48dfd.jpeg'),(10,1,'2022-09-13 11:08:40','2022-09-25 13:22:02','title12 - 25.09','descr','cat-632048ba93b15.jpeg'),(11,19,'2022-09-13 11:39:21','2022-09-13 11:39:21','Happy cat','Cat','cat30-63204fc932c4d.jpeg'),(12,52,'2022-09-13 11:47:16','2022-09-13 11:47:50','New cat!','White','cat13-632051c6e1e4d.jpeg'),(13,49,'2022-09-13 11:59:04','2022-09-13 11:59:37','Weee~~','Noo!','cat27-63205468c8bc4.jpeg'),(14,12,'2022-09-18 12:03:45','2022-09-25 16:58:23','Cat1r','Catcat','cat19-6326ed01a22fd.jpeg'),(16,12,'2022-09-21 22:06:47','2023-06-09 14:27:52','Cat!!!!','Kot2','cat18-632b6ed793791.jpeg'),(18,13,'2022-09-24 16:54:47','2022-09-25 17:39:03','aaa','aaa','cat4-632f1a37e2be1.jpeg'),(19,54,'2023-05-29 15:04:37','2025-06-25 23:05:18','Bardzo Czarny Kot','Nowy kot1','cat26-6474a2e64d7cb.jpeg'),(21,57,'2023-06-15 19:42:30','2025-06-25 21:10:55','dasd','dasdad','catm1-685c65df19921.jpg'),(22,57,'2023-06-17 16:42:42','2023-06-18 10:34:55','New Cats 122','Nowy cot 17','cat6-648dc66366172.jpg'),(23,57,'2023-06-18 10:38:41','2023-06-18 10:38:41','1806','1806','cat30-648ec2915a9b4.jpg'),(24,60,'2025-06-25 23:06:24','2025-06-25 23:06:25','Flashbang','I see light','catmeme-685c80f15741c.jpg');
/*!40000 ALTER TABLE `Photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photos_id` int DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F9E962A301EC62` (`photos_id`),
  CONSTRAINT `FK_5F9E962A301EC62` FOREIGN KEY (`photos_id`) REFERENCES `Photos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (41,21,'jin@gmail.com','jin','Wow','2023-06-18 10:38:04','2023-06-18 10:38:04'),(42,22,'F@gmail.com','Fena','Cool','2023-06-18 10:39:26','2023-06-18 10:39:26'),(43,21,'2025@gamil.com','2025','wowzers','2025-06-25 21:09:58','2025-06-25 21:09:58');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220908143416','2022-09-08 22:13:08',8904);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets`
--

DROP TABLE IF EXISTS `mdl_adminpresets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `comments` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `site` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `moodleversion` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `moodlerelease` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `iscore` tinyint(1) NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timeimported` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COMMENT='Table to store presets data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets`
--

LOCK TABLES `mdl_adminpresets` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets` DISABLE KEYS */;
INSERT INTO `mdl_adminpresets` VALUES (1,0,'Zestaw początkowy','Moodle ze wszystkimi najpopularniejszymi funkcjami, takimi jak aktywności, informacja zwrotna, forum, H5P, quiz i śledzenie ukończenia.','https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle','','','',1,1712824117,0),(2,0,'Pełen','Wszystkie funkcje podstawowe oraz narzędzie zewnętrzne (LTI), SCORM, warsztaty, analizy, odznaki, kompetencje, plany nauki i wiele więcej.','https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle','','','',2,1712824122,0);
/*!40000 ALTER TABLE `mdl_adminpresets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_app`
--

DROP TABLE IF EXISTS `mdl_adminpresets_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_app` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adminpresetid` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `time` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_admiapp_adm_ix` (`adminpresetid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Applied presets';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_app`
--

LOCK TABLES `mdl_adminpresets_app` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_app` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_adminpresets_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_app_it`
--

DROP TABLE IF EXISTS `mdl_adminpresets_app_it`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_app_it` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adminpresetapplyid` bigint NOT NULL,
  `configlogid` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_admiappit_con_ix` (`configlogid`),
  KEY `mdl_admiappit_adm_ix` (`adminpresetapplyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Admin presets applied items. To maintain the relation with c';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_app_it`
--

LOCK TABLES `mdl_adminpresets_app_it` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_app_it` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_adminpresets_app_it` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_app_it_a`
--

DROP TABLE IF EXISTS `mdl_adminpresets_app_it_a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_app_it_a` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adminpresetapplyid` bigint NOT NULL,
  `configlogid` bigint NOT NULL,
  `itemname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_admiappita_con_ix` (`configlogid`),
  KEY `mdl_admiappita_adm_ix` (`adminpresetapplyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Attributes of the applied items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_app_it_a`
--

LOCK TABLES `mdl_adminpresets_app_it_a` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_app_it_a` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_adminpresets_app_it_a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_app_plug`
--

DROP TABLE IF EXISTS `mdl_adminpresets_app_plug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_app_plug` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adminpresetapplyid` bigint NOT NULL,
  `plugin` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `value` smallint NOT NULL DEFAULT '0',
  `oldvalue` smallint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_admiappplug_adm_ix` (`adminpresetapplyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Admin presets plugins applied';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_app_plug`
--

LOCK TABLES `mdl_adminpresets_app_plug` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_app_plug` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_adminpresets_app_plug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_it`
--

DROP TABLE IF EXISTS `mdl_adminpresets_it`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_it` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adminpresetid` bigint NOT NULL,
  `plugin` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `value` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_admiit_adm_ix` (`adminpresetid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3 COMMENT='Table to store settings';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_it`
--

LOCK TABLES `mdl_adminpresets_it` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_it` DISABLE KEYS */;
INSERT INTO `mdl_adminpresets_it` VALUES (1,1,'none','usecomments','0'),(2,1,'none','usetags','0'),(3,1,'none','enablenotes','0'),(4,1,'none','enableblogs','0'),(5,1,'none','enablebadges','0'),(6,1,'none','enableanalytics','0'),(7,1,'core_competency','enabled','0'),(8,1,'core_competency','pushcourseratingstouserplans','0'),(9,1,'tool_dataprivacy','showdataretentionsummary','0'),(10,1,'none','forum_maxattachments','3'),(11,1,'none','guestloginbutton','0'),(12,1,'none','activitychoosertabmode','4'),(13,2,'none','usecomments','1'),(14,2,'none','usetags','1'),(15,2,'none','enablenotes','1'),(16,2,'none','enableblogs','1'),(17,2,'none','enablebadges','1'),(18,2,'none','enableanalytics','1'),(19,2,'core_competency','enabled','1'),(20,2,'core_competency','pushcourseratingstouserplans','1'),(21,2,'tool_dataprivacy','showdataretentionsummary','1'),(22,2,'none','forum_maxattachments','9'),(23,2,'none','guestloginbutton','1'),(24,2,'none','activitychoosertabmode','3');
/*!40000 ALTER TABLE `mdl_adminpresets_it` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_it_a`
--

DROP TABLE IF EXISTS `mdl_adminpresets_it_a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_it_a` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `itemid` bigint NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `value` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_admiita_ite_ix` (`itemid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Admin presets items attributes. For settings with attributes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_it_a`
--

LOCK TABLES `mdl_adminpresets_it_a` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_it_a` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_adminpresets_it_a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_adminpresets_plug`
--

DROP TABLE IF EXISTS `mdl_adminpresets_plug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_adminpresets_plug` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adminpresetid` bigint NOT NULL,
  `plugin` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `enabled` smallint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_admiplug_adm_ix` (`adminpresetid`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb3 COMMENT='Admin presets plugins status, to store information about whe';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_adminpresets_plug`
--

LOCK TABLES `mdl_adminpresets_plug` WRITE;
/*!40000 ALTER TABLE `mdl_adminpresets_plug` DISABLE KEYS */;
INSERT INTO `mdl_adminpresets_plug` VALUES (1,1,'mod','chat',0),(2,1,'mod','data',0),(3,1,'mod','lti',0),(4,1,'mod','imscp',0),(5,1,'mod','lesson',0),(6,1,'mod','scorm',0),(7,1,'mod','survey',0),(8,1,'mod','wiki',0),(9,1,'mod','workshop',0),(10,1,'availability','grouping',0),(11,1,'availability','profile',0),(12,1,'block','activity_modules',0),(13,1,'block','blog_menu',0),(14,1,'block','blog_tags',0),(15,1,'block','comments',0),(16,1,'block','completionstatus',0),(17,1,'block','course_summary',0),(18,1,'block','course_list',0),(19,1,'block','tag_flickr',0),(20,1,'block','globalsearch',0),(21,1,'block','badges',0),(22,1,'block','lp',0),(23,1,'block','myprofile',0),(24,1,'block','login',0),(25,1,'block','site_main_menu',0),(26,1,'block','mentees',0),(27,1,'block','mnet_hosts',0),(28,1,'block','private_files',0),(29,1,'block','blog_recent',0),(30,1,'block','rss_client',0),(31,1,'block','search_forums',0),(32,1,'block','section_links',0),(33,1,'block','selfcompletion',0),(34,1,'block','social_activities',0),(35,1,'block','tags',0),(36,1,'block','tag_youtube',0),(37,1,'block','feedback',0),(38,1,'block','online_users',0),(39,1,'block','recentlyaccessedcourses',0),(40,1,'block','starredcourses',0),(41,1,'format','social',0),(42,1,'dataformat','json',0),(43,1,'enrol','cohort',0),(44,1,'enrol','guest',0),(45,1,'filter','mathjaxloader',-9999),(46,1,'filter','activitynames',-9999),(47,1,'qbehaviour','adaptivenopenalty',0),(48,1,'qbehaviour','deferredcbm',0),(49,1,'qbehaviour','immediatecbm',0),(50,1,'qtype','calculated',0),(51,1,'qtype','calculatedmulti',0),(52,1,'qtype','calculatedsimple',0),(53,1,'qtype','ddmarker',0),(54,1,'qtype','ddimageortext',0),(55,1,'qtype','multianswer',0),(56,1,'qtype','numerical',0),(57,1,'qtype','randomsamatch',0),(58,1,'repository','local',0),(59,1,'repository','url',0),(60,1,'repository','wikimedia',0),(61,2,'mod','data',1),(62,2,'mod','lti',1),(63,2,'mod','imscp',1),(64,2,'mod','lesson',1),(65,2,'mod','scorm',1),(66,2,'mod','wiki',1),(67,2,'mod','workshop',1),(68,2,'availability','grouping',1),(69,2,'availability','profile',1),(70,2,'block','activity_modules',1),(71,2,'block','blog_menu',1),(72,2,'block','blog_tags',1),(73,2,'block','comments',1),(74,2,'block','completionstatus',1),(75,2,'block','course_list',1),(76,2,'block','tag_flickr',1),(77,2,'block','globalsearch',1),(78,2,'block','badges',1),(79,2,'block','lp',1),(80,2,'block','myprofile',1),(81,2,'block','login',1),(82,2,'block','site_main_menu',1),(83,2,'block','mentees',1),(84,2,'block','mnet_hosts',1),(85,2,'block','private_files',1),(86,2,'block','blog_recent',1),(87,2,'block','search_forums',1),(88,2,'block','section_links',1),(89,2,'block','social_activities',1),(90,2,'block','tags',1),(91,2,'block','online_users',1),(92,2,'block','recentlyaccessedcourses',1),(93,2,'block','starredcourses',1),(94,2,'format','social',1),(95,2,'dataformat','json',1),(96,2,'enrol','cohort',1),(97,2,'enrol','guest',1),(98,2,'filter','mathjaxloader',1),(99,2,'filter','activitynames',1),(100,2,'qbehaviour','adaptivenopenalty',1),(101,2,'qbehaviour','deferredcbm',1),(102,2,'qbehaviour','immediatecbm',1),(103,2,'qtype','calculated',1),(104,2,'qtype','calculatedmulti',1),(105,2,'qtype','calculatedsimple',1),(106,2,'qtype','ddmarker',1),(107,2,'qtype','ddimageortext',1),(108,2,'qtype','multianswer',1),(109,2,'qtype','numerical',1),(110,2,'qtype','randomsamatch',1),(111,2,'repository','local',1),(112,2,'repository','url',1),(113,2,'repository','wikimedia',1);
/*!40000 ALTER TABLE `mdl_adminpresets_plug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_indicator_calc`
--

DROP TABLE IF EXISTS `mdl_analytics_indicator_calc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_indicator_calc` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `starttime` bigint NOT NULL,
  `endtime` bigint NOT NULL,
  `contextid` bigint NOT NULL,
  `sampleorigin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `sampleid` bigint NOT NULL,
  `indicator` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `value` decimal(10,2) DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_analindicalc_staendcon_ix` (`starttime`,`endtime`,`contextid`),
  KEY `mdl_analindicalc_con_ix` (`contextid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stored indicator calculations';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_indicator_calc`
--

LOCK TABLES `mdl_analytics_indicator_calc` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_indicator_calc` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_indicator_calc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_models`
--

DROP TABLE IF EXISTS `mdl_analytics_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_models` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `trained` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(1333) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `target` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `indicators` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timesplitting` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `predictionsprocessor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `version` bigint NOT NULL,
  `contextids` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `timecreated` bigint DEFAULT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_analmode_enatra_ix` (`enabled`,`trained`),
  KEY `mdl_analmode_use_ix` (`usermodified`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COMMENT='Analytic models.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_models`
--

LOCK TABLES `mdl_analytics_models` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_models` DISABLE KEYS */;
INSERT INTO `mdl_analytics_models` VALUES (1,0,0,NULL,'\\core_course\\analytics\\target\\course_dropout','[\"\\\\core\\\\analytics\\\\indicator\\\\any_access_after_end\",\"\\\\core\\\\analytics\\\\indicator\\\\any_access_before_start\",\"\\\\core\\\\analytics\\\\indicator\\\\any_write_action_in_course\",\"\\\\core\\\\analytics\\\\indicator\\\\read_actions\",\"\\\\core_course\\\\analytics\\\\indicator\\\\completion_enabled\",\"\\\\core_course\\\\analytics\\\\indicator\\\\potential_cognitive_depth\",\"\\\\core_course\\\\analytics\\\\indicator\\\\potential_social_breadth\",\"\\\\mod_assign\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_assign\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_book\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_book\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_chat\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_chat\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_choice\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_choice\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_data\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_data\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_feedback\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_feedback\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_folder\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_folder\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_forum\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_forum\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_glossary\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_glossary\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_imscp\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_imscp\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_label\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_label\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_lesson\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_lesson\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_lti\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_lti\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_page\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_page\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_quiz\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_quiz\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_resource\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_resource\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_scorm\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_scorm\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_survey\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_survey\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_url\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_url\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_wiki\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_wiki\\\\analytics\\\\indicator\\\\social_breadth\",\"\\\\mod_workshop\\\\analytics\\\\indicator\\\\cognitive_depth\",\"\\\\mod_workshop\\\\analytics\\\\indicator\\\\social_breadth\"]',NULL,NULL,1712824158,NULL,1712824158,1712824158,0),(2,1,1,NULL,'\\core_course\\analytics\\target\\no_teaching','[\"\\\\core_course\\\\analytics\\\\indicator\\\\no_teacher\",\"\\\\core_course\\\\analytics\\\\indicator\\\\no_student\"]','\\core\\analytics\\time_splitting\\single_range',NULL,1712824158,NULL,1712824158,1712824158,0),(3,1,1,NULL,'\\core_user\\analytics\\target\\upcoming_activities_due','[\"\\\\core_course\\\\analytics\\\\indicator\\\\activities_due\"]','\\core\\analytics\\time_splitting\\upcoming_week',NULL,1712824158,NULL,1712824158,1712824158,0),(4,1,1,NULL,'\\core_course\\analytics\\target\\no_access_since_course_start','[\"\\\\core\\\\analytics\\\\indicator\\\\any_course_access\"]','\\core\\analytics\\time_splitting\\one_month_after_start',NULL,1712824158,NULL,1712824158,1712824158,0),(5,1,1,NULL,'\\core_course\\analytics\\target\\no_recent_accesses','[\"\\\\core\\\\analytics\\\\indicator\\\\any_course_access\"]','\\core\\analytics\\time_splitting\\past_month',NULL,1712824158,NULL,1712824158,1712824158,0);
/*!40000 ALTER TABLE `mdl_analytics_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_models_log`
--

DROP TABLE IF EXISTS `mdl_analytics_models_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_models_log` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `modelid` bigint NOT NULL,
  `version` bigint NOT NULL,
  `evaluationmode` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `target` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `indicators` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timesplitting` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `score` decimal(10,5) NOT NULL DEFAULT '0.00000',
  `info` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `dir` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timecreated` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_analmodelog_mod_ix` (`modelid`),
  KEY `mdl_analmodelog_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Analytic models changes during evaluation.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_models_log`
--

LOCK TABLES `mdl_analytics_models_log` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_models_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_models_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_predict_samples`
--

DROP TABLE IF EXISTS `mdl_analytics_predict_samples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_predict_samples` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `modelid` bigint NOT NULL,
  `analysableid` bigint NOT NULL,
  `timesplitting` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `rangeindex` bigint NOT NULL,
  `sampleids` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_analpredsamp_modanatimr_ix` (`modelid`,`analysableid`,`timesplitting`,`rangeindex`),
  KEY `mdl_analpredsamp_mod_ix` (`modelid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Samples already used for predictions.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_predict_samples`
--

LOCK TABLES `mdl_analytics_predict_samples` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_predict_samples` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_predict_samples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_prediction_actions`
--

DROP TABLE IF EXISTS `mdl_analytics_prediction_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_prediction_actions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `predictionid` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `actionname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `timecreated` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_analpredacti_preuseact_ix` (`predictionid`,`userid`,`actionname`),
  KEY `mdl_analpredacti_pre_ix` (`predictionid`),
  KEY `mdl_analpredacti_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Register of user actions over predictions.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_prediction_actions`
--

LOCK TABLES `mdl_analytics_prediction_actions` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_prediction_actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_prediction_actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_predictions`
--

DROP TABLE IF EXISTS `mdl_analytics_predictions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_predictions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `modelid` bigint NOT NULL,
  `contextid` bigint NOT NULL,
  `sampleid` bigint NOT NULL,
  `rangeindex` mediumint NOT NULL,
  `prediction` decimal(10,2) NOT NULL,
  `predictionscore` decimal(10,5) NOT NULL,
  `calculations` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timestart` bigint DEFAULT NULL,
  `timeend` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_analpred_modcon_ix` (`modelid`,`contextid`),
  KEY `mdl_analpred_mod_ix` (`modelid`),
  KEY `mdl_analpred_con_ix` (`contextid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Predictions';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_predictions`
--

LOCK TABLES `mdl_analytics_predictions` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_predictions` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_predictions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_train_samples`
--

DROP TABLE IF EXISTS `mdl_analytics_train_samples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_train_samples` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `modelid` bigint NOT NULL,
  `analysableid` bigint NOT NULL,
  `timesplitting` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `sampleids` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timecreated` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_analtraisamp_modanatim_ix` (`modelid`,`analysableid`,`timesplitting`),
  KEY `mdl_analtraisamp_mod_ix` (`modelid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Samples used for training';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_train_samples`
--

LOCK TABLES `mdl_analytics_train_samples` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_train_samples` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_train_samples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_used_analysables`
--

DROP TABLE IF EXISTS `mdl_analytics_used_analysables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_used_analysables` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `modelid` bigint NOT NULL,
  `action` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `analysableid` bigint NOT NULL,
  `firstanalysis` bigint NOT NULL,
  `timeanalysed` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_analusedanal_modact_ix` (`modelid`,`action`),
  KEY `mdl_analusedanal_ana_ix` (`analysableid`),
  KEY `mdl_analusedanal_mod_ix` (`modelid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='List of analysables used by each model';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_used_analysables`
--

LOCK TABLES `mdl_analytics_used_analysables` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_used_analysables` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_used_analysables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_analytics_used_files`
--

DROP TABLE IF EXISTS `mdl_analytics_used_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_analytics_used_files` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `modelid` bigint NOT NULL DEFAULT '0',
  `fileid` bigint NOT NULL DEFAULT '0',
  `action` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_analusedfile_modactfil_ix` (`modelid`,`action`,`fileid`),
  KEY `mdl_analusedfile_mod_ix` (`modelid`),
  KEY `mdl_analusedfile_fil_ix` (`fileid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Files that have already been used for training and predictio';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_analytics_used_files`
--

LOCK TABLES `mdl_analytics_used_files` WRITE;
/*!40000 ALTER TABLE `mdl_analytics_used_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_analytics_used_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign`
--

DROP TABLE IF EXISTS `mdl_assign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `course` bigint NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `intro` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `introformat` smallint NOT NULL DEFAULT '0',
  `alwaysshowdescription` tinyint NOT NULL DEFAULT '0',
  `nosubmissions` tinyint NOT NULL DEFAULT '0',
  `submissiondrafts` tinyint NOT NULL DEFAULT '0',
  `sendnotifications` tinyint NOT NULL DEFAULT '0',
  `sendlatenotifications` tinyint NOT NULL DEFAULT '0',
  `duedate` bigint NOT NULL DEFAULT '0',
  `allowsubmissionsfromdate` bigint NOT NULL DEFAULT '0',
  `grade` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `requiresubmissionstatement` tinyint NOT NULL DEFAULT '0',
  `completionsubmit` tinyint NOT NULL DEFAULT '0',
  `cutoffdate` bigint NOT NULL DEFAULT '0',
  `gradingduedate` bigint NOT NULL DEFAULT '0',
  `teamsubmission` tinyint NOT NULL DEFAULT '0',
  `requireallteammemberssubmit` tinyint NOT NULL DEFAULT '0',
  `teamsubmissiongroupingid` bigint NOT NULL DEFAULT '0',
  `blindmarking` tinyint NOT NULL DEFAULT '0',
  `hidegrader` tinyint NOT NULL DEFAULT '0',
  `revealidentities` tinyint NOT NULL DEFAULT '0',
  `attemptreopenmethod` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'none',
  `maxattempts` mediumint NOT NULL DEFAULT '-1',
  `markingworkflow` tinyint NOT NULL DEFAULT '0',
  `markingallocation` tinyint NOT NULL DEFAULT '0',
  `markinganonymous` tinyint NOT NULL DEFAULT '0',
  `sendstudentnotifications` tinyint NOT NULL DEFAULT '1',
  `preventsubmissionnotingroup` tinyint NOT NULL DEFAULT '0',
  `activity` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `activityformat` smallint NOT NULL DEFAULT '0',
  `timelimit` bigint NOT NULL DEFAULT '0',
  `submissionattachments` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assi_cou_ix` (`course`),
  KEY `mdl_assi_tea_ix` (`teamsubmissiongroupingid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='This table saves information about an instance of mod_assign';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign`
--

LOCK TABLES `mdl_assign` WRITE;
/*!40000 ALTER TABLE `mdl_assign` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign_grades`
--

DROP TABLE IF EXISTS `mdl_assign_grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign_grades` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `grader` bigint NOT NULL DEFAULT '0',
  `grade` decimal(10,5) DEFAULT '0.00000',
  `attemptnumber` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_assigrad_assuseatt_uix` (`assignment`,`userid`,`attemptnumber`),
  KEY `mdl_assigrad_use_ix` (`userid`),
  KEY `mdl_assigrad_att_ix` (`attemptnumber`),
  KEY `mdl_assigrad_ass_ix` (`assignment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Grading information about a single assignment submission.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign_grades`
--

LOCK TABLES `mdl_assign_grades` WRITE;
/*!40000 ALTER TABLE `mdl_assign_grades` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign_grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign_overrides`
--

DROP TABLE IF EXISTS `mdl_assign_overrides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign_overrides` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignid` bigint NOT NULL DEFAULT '0',
  `groupid` bigint DEFAULT NULL,
  `userid` bigint DEFAULT NULL,
  `sortorder` bigint DEFAULT NULL,
  `allowsubmissionsfromdate` bigint DEFAULT NULL,
  `duedate` bigint DEFAULT NULL,
  `cutoffdate` bigint DEFAULT NULL,
  `timelimit` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_assiover_ass_ix` (`assignid`),
  KEY `mdl_assiover_gro_ix` (`groupid`),
  KEY `mdl_assiover_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='The overrides to assign settings.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign_overrides`
--

LOCK TABLES `mdl_assign_overrides` WRITE;
/*!40000 ALTER TABLE `mdl_assign_overrides` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign_overrides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign_plugin_config`
--

DROP TABLE IF EXISTS `mdl_assign_plugin_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign_plugin_config` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `plugin` varchar(28) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `subtype` varchar(28) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `name` varchar(28) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `value` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_assiplugconf_plu_ix` (`plugin`),
  KEY `mdl_assiplugconf_sub_ix` (`subtype`),
  KEY `mdl_assiplugconf_nam_ix` (`name`),
  KEY `mdl_assiplugconf_ass_ix` (`assignment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Config data for an instance of a plugin in an assignment.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign_plugin_config`
--

LOCK TABLES `mdl_assign_plugin_config` WRITE;
/*!40000 ALTER TABLE `mdl_assign_plugin_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign_plugin_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign_submission`
--

DROP TABLE IF EXISTS `mdl_assign_submission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign_submission` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `timestarted` bigint DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `groupid` bigint NOT NULL DEFAULT '0',
  `attemptnumber` bigint NOT NULL DEFAULT '0',
  `latest` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_assisubm_assusegroatt_uix` (`assignment`,`userid`,`groupid`,`attemptnumber`),
  KEY `mdl_assisubm_use_ix` (`userid`),
  KEY `mdl_assisubm_att_ix` (`attemptnumber`),
  KEY `mdl_assisubm_assusegrolat_ix` (`assignment`,`userid`,`groupid`,`latest`),
  KEY `mdl_assisubm_ass_ix` (`assignment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='This table keeps information about student interactions with';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign_submission`
--

LOCK TABLES `mdl_assign_submission` WRITE;
/*!40000 ALTER TABLE `mdl_assign_submission` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign_submission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign_user_flags`
--

DROP TABLE IF EXISTS `mdl_assign_user_flags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign_user_flags` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL DEFAULT '0',
  `assignment` bigint NOT NULL DEFAULT '0',
  `locked` bigint NOT NULL DEFAULT '0',
  `mailed` smallint NOT NULL DEFAULT '0',
  `extensionduedate` bigint NOT NULL DEFAULT '0',
  `workflowstate` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `allocatedmarker` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assiuserflag_mai_ix` (`mailed`),
  KEY `mdl_assiuserflag_use_ix` (`userid`),
  KEY `mdl_assiuserflag_ass_ix` (`assignment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='List of flags that can be set for a single user in a single ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign_user_flags`
--

LOCK TABLES `mdl_assign_user_flags` WRITE;
/*!40000 ALTER TABLE `mdl_assign_user_flags` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign_user_flags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assign_user_mapping`
--

DROP TABLE IF EXISTS `mdl_assign_user_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assign_user_mapping` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assiusermapp_ass_ix` (`assignment`),
  KEY `mdl_assiusermapp_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Map an assignment specific id number to a user';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assign_user_mapping`
--

LOCK TABLES `mdl_assign_user_mapping` WRITE;
/*!40000 ALTER TABLE `mdl_assign_user_mapping` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assign_user_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignfeedback_comments`
--

DROP TABLE IF EXISTS `mdl_assignfeedback_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignfeedback_comments` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `grade` bigint NOT NULL DEFAULT '0',
  `commenttext` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `commentformat` smallint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assicomm_ass_ix` (`assignment`),
  KEY `mdl_assicomm_gra_ix` (`grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Text feedback for submitted assignments';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignfeedback_comments`
--

LOCK TABLES `mdl_assignfeedback_comments` WRITE;
/*!40000 ALTER TABLE `mdl_assignfeedback_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignfeedback_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignfeedback_editpdf_annot`
--

DROP TABLE IF EXISTS `mdl_assignfeedback_editpdf_annot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignfeedback_editpdf_annot` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `gradeid` bigint NOT NULL DEFAULT '0',
  `pageno` bigint NOT NULL DEFAULT '0',
  `x` bigint DEFAULT '0',
  `y` bigint DEFAULT '0',
  `endx` bigint DEFAULT '0',
  `endy` bigint DEFAULT '0',
  `path` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'line',
  `colour` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'black',
  `draft` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `mdl_assieditanno_grapag_ix` (`gradeid`,`pageno`),
  KEY `mdl_assieditanno_gra_ix` (`gradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='stores annotations added to pdfs submitted by students';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignfeedback_editpdf_annot`
--

LOCK TABLES `mdl_assignfeedback_editpdf_annot` WRITE;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_annot` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_annot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignfeedback_editpdf_cmnt`
--

DROP TABLE IF EXISTS `mdl_assignfeedback_editpdf_cmnt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignfeedback_editpdf_cmnt` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `gradeid` bigint NOT NULL DEFAULT '0',
  `x` bigint DEFAULT '0',
  `y` bigint DEFAULT '0',
  `width` bigint DEFAULT '120',
  `rawtext` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `pageno` bigint NOT NULL DEFAULT '0',
  `colour` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'black',
  `draft` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `mdl_assieditcmnt_grapag_ix` (`gradeid`,`pageno`),
  KEY `mdl_assieditcmnt_gra_ix` (`gradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores comments added to pdfs';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignfeedback_editpdf_cmnt`
--

LOCK TABLES `mdl_assignfeedback_editpdf_cmnt` WRITE;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_cmnt` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_cmnt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignfeedback_editpdf_quick`
--

DROP TABLE IF EXISTS `mdl_assignfeedback_editpdf_quick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignfeedback_editpdf_quick` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL DEFAULT '0',
  `rawtext` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `width` bigint NOT NULL DEFAULT '120',
  `colour` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'yellow',
  PRIMARY KEY (`id`),
  KEY `mdl_assieditquic_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores teacher specified quicklist comments';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignfeedback_editpdf_quick`
--

LOCK TABLES `mdl_assignfeedback_editpdf_quick` WRITE;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_quick` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_quick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignfeedback_editpdf_rot`
--

DROP TABLE IF EXISTS `mdl_assignfeedback_editpdf_rot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignfeedback_editpdf_rot` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `gradeid` bigint NOT NULL DEFAULT '0',
  `pageno` bigint NOT NULL DEFAULT '0',
  `pathnamehash` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `isrotated` tinyint(1) NOT NULL DEFAULT '0',
  `degree` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_assieditrot_grapag_uix` (`gradeid`,`pageno`),
  KEY `mdl_assieditrot_gra_ix` (`gradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores rotation information of a page.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignfeedback_editpdf_rot`
--

LOCK TABLES `mdl_assignfeedback_editpdf_rot` WRITE;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_rot` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignfeedback_editpdf_rot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignfeedback_file`
--

DROP TABLE IF EXISTS `mdl_assignfeedback_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignfeedback_file` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `grade` bigint NOT NULL DEFAULT '0',
  `numfiles` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assifile_ass2_ix` (`assignment`),
  KEY `mdl_assifile_gra_ix` (`grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores info about the number of files submitted by a student';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignfeedback_file`
--

LOCK TABLES `mdl_assignfeedback_file` WRITE;
/*!40000 ALTER TABLE `mdl_assignfeedback_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignfeedback_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignsubmission_file`
--

DROP TABLE IF EXISTS `mdl_assignsubmission_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignsubmission_file` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `submission` bigint NOT NULL DEFAULT '0',
  `numfiles` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assifile_ass_ix` (`assignment`),
  KEY `mdl_assifile_sub_ix` (`submission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Info about file submissions for assignments';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignsubmission_file`
--

LOCK TABLES `mdl_assignsubmission_file` WRITE;
/*!40000 ALTER TABLE `mdl_assignsubmission_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignsubmission_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_assignsubmission_onlinetext`
--

DROP TABLE IF EXISTS `mdl_assignsubmission_onlinetext`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_assignsubmission_onlinetext` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `assignment` bigint NOT NULL DEFAULT '0',
  `submission` bigint NOT NULL DEFAULT '0',
  `onlinetext` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `onlineformat` smallint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_assionli_ass_ix` (`assignment`),
  KEY `mdl_assionli_sub_ix` (`submission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Info about onlinetext submission';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_assignsubmission_onlinetext`
--

LOCK TABLES `mdl_assignsubmission_onlinetext` WRITE;
/*!40000 ALTER TABLE `mdl_assignsubmission_onlinetext` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_assignsubmission_onlinetext` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_auth_lti_linked_login`
--

DROP TABLE IF EXISTS `mdl_auth_lti_linked_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_auth_lti_linked_login` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `issuer` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `issuer256` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `sub` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `sub256` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_authltilinklogi_useiss_uix` (`userid`,`issuer256`,`sub256`),
  KEY `mdl_authltilinklogi_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Accounts linked to a users Moodle account.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_auth_lti_linked_login`
--

LOCK TABLES `mdl_auth_lti_linked_login` WRITE;
/*!40000 ALTER TABLE `mdl_auth_lti_linked_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_auth_lti_linked_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_auth_oauth2_linked_login`
--

DROP TABLE IF EXISTS `mdl_auth_oauth2_linked_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_auth_oauth2_linked_login` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `issuerid` bigint NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `confirmtoken` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `confirmtokenexpires` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_authoautlinklogi_useis_uix` (`userid`,`issuerid`,`username`),
  KEY `mdl_authoautlinklogi_issuse_ix` (`issuerid`,`username`),
  KEY `mdl_authoautlinklogi_use_ix` (`usermodified`),
  KEY `mdl_authoautlinklogi_use2_ix` (`userid`),
  KEY `mdl_authoautlinklogi_iss_ix` (`issuerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Accounts linked to a users Moodle account.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_auth_oauth2_linked_login`
--

LOCK TABLES `mdl_auth_oauth2_linked_login` WRITE;
/*!40000 ALTER TABLE `mdl_auth_oauth2_linked_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_auth_oauth2_linked_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_backup_controllers`
--

DROP TABLE IF EXISTS `mdl_backup_controllers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_backup_controllers` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `backupid` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `operation` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'backup',
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `itemid` bigint NOT NULL,
  `format` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `interactive` smallint NOT NULL,
  `purpose` smallint NOT NULL,
  `userid` bigint NOT NULL,
  `status` smallint NOT NULL,
  `execution` smallint NOT NULL,
  `executiontime` bigint NOT NULL,
  `checksum` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `progress` decimal(15,14) NOT NULL DEFAULT '0.00000000000000',
  `controller` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_backcont_bac_uix` (`backupid`),
  KEY `mdl_backcont_typite_ix` (`type`,`itemid`),
  KEY `mdl_backcont_useite_ix` (`userid`,`itemid`),
  KEY `mdl_backcont_use_ix` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COMMENT='To store the backup_controllers as they are used';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_backup_controllers`
--

LOCK TABLES `mdl_backup_controllers` WRITE;
/*!40000 ALTER TABLE `mdl_backup_controllers` DISABLE KEYS */;
INSERT INTO `mdl_backup_controllers` VALUES (1,'6f5465fd44a4e522bb92f233425e8ddb','backup','course',3,'moodle2',0,50,2,1000,1,0,'2694ee42c818665de20028f55d73028f',1718265297,1718265303,0.00000000000000,''),(2,'2e6dc4892156b1224399148a215717d2','backup','course',2,'moodle2',0,50,2,1000,1,0,'f044560c65b02aa5ab0326188bc438a5',1718265336,1718265337,0.00000000000000,''),(3,'85f34faf96bb229803b376c348b9bc35','backup','course',8,'moodle2',0,50,2,1000,1,0,'486a05c78299a4d8d02409cb69123670',1718265353,1718265359,0.00000000000000,''),(4,'74e1c11d839ac84dec6ad8cd3ea71c20','backup','course',4,'moodle2',0,50,2,1000,1,0,'f63dedc4d0ed2034a3ddcf0d58cf79be',1718265433,1718265435,0.00000000000000,''),(5,'c28b2f82afb2be55b160baca8771ad38','backup','course',5,'moodle2',0,50,2,1000,1,0,'bdaaaf90c3a4e5e4926255735a7175d6',1718265450,1718265450,0.00000000000000,''),(6,'f946a19a530bea8489dd20999286bb7b','backup','course',6,'moodle2',0,50,2,1000,1,0,'303485fdc07f804be8c331bd514d8c14',1718265461,1718265464,0.00000000000000,''),(7,'32bec87304ea8d00c36ed537ad941972','backup','course',7,'moodle2',0,50,2,1000,1,0,'6ff02ebc8ea15cd4784a14ea170435c8',1718265479,1718265479,0.00000000000000,'');
/*!40000 ALTER TABLE `mdl_backup_controllers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_backup_courses`
--

DROP TABLE IF EXISTS `mdl_backup_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_backup_courses` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL DEFAULT '0',
  `laststarttime` bigint NOT NULL DEFAULT '0',
  `lastendtime` bigint NOT NULL DEFAULT '0',
  `laststatus` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '5',
  `nextstarttime` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_backcour_cou_uix` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='To store every course backup status';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_backup_courses`
--

LOCK TABLES `mdl_backup_courses` WRITE;
/*!40000 ALTER TABLE `mdl_backup_courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_backup_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_backup_logs`
--

DROP TABLE IF EXISTS `mdl_backup_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_backup_logs` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `backupid` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `loglevel` smallint NOT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timecreated` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_backlogs_bacid_uix` (`backupid`,`id`),
  KEY `mdl_backlogs_bac_ix` (`backupid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='To store all the logs from backup and restore operations (by';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_backup_logs`
--

LOCK TABLES `mdl_backup_logs` WRITE;
/*!40000 ALTER TABLE `mdl_backup_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_backup_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge`
--

DROP TABLE IF EXISTS `mdl_badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `usercreated` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  `issuername` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `issuerurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `issuercontact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `expiredate` bigint DEFAULT NULL,
  `expireperiod` bigint DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `courseid` bigint DEFAULT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `messagesubject` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `attachment` tinyint(1) NOT NULL DEFAULT '1',
  `notification` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `nextcron` bigint DEFAULT NULL,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `imageauthorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `imageauthoremail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `imageauthorurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `imagecaption` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_badg_typ_ix` (`type`),
  KEY `mdl_badg_cou_ix` (`courseid`),
  KEY `mdl_badg_use_ix` (`usermodified`),
  KEY `mdl_badg_use2_ix` (`usercreated`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPRESSED COMMENT='Defines badge';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge`
--

LOCK TABLES `mdl_badge` WRITE;
/*!40000 ALTER TABLE `mdl_badge` DISABLE KEYS */;
INSERT INTO `mdl_badge` VALUES (1,'Wow','Zakończyłeś kurs z odznaką',1717663570,1717663674,2,2,'Kolokwium nr 2','https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/','',NULL,NULL,1,NULL,'<p>Otrzymałeś odznakę \"%badgename%\"!</p>\n<p>Więcej informacji możesz znaleźć na stronie odznaki %badgelink%.</p>\n<p>Możesz zarządzać i pobrać odznakę ze strony <a href=\"https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/badges/mybadges.php\">Zarządzaj odznakami</a>.</p>','Gratulacje! Właśnie zdobyłeś odznakę!',1,0,4,NULL,'','pl','','','',''),(2,'Meh','Meh',1717663956,1717663997,2,2,'Kolokwium nr 2','https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/','',NULL,NULL,1,NULL,'<p>Otrzymałeś odznakę \"%badgename%\"!</p>\n<p>Więcej informacji możesz znaleźć na stronie odznaki %badgelink%.</p>\n<p>Możesz zarządzać i pobrać odznakę ze strony <a href=\"https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/badges/mybadges.php\">Zarządzaj odznakami</a>.</p>','Gratulacje! Właśnie zdobyłeś odznakę!',1,0,4,NULL,'','pl','','','',''),(3,'Nowa','Nowa odznaka',1717665199,1717665246,2,2,'Kolokwium nr 2','https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/','',NULL,NULL,1,NULL,'<p>Otrzymałeś odznakę \"%badgename%\"!</p>\n<p>Więcej informacji możesz znaleźć na stronie odznaki %badgelink%.</p>\n<p>Możesz zarządzać i pobrać odznakę ze strony <a href=\"https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/badges/mybadges.php\">Zarządzaj odznakami</a>.</p>','Gratulacje! Właśnie zdobyłeś odznakę!',1,0,4,NULL,'','pl','','','',''),(4,'Odznaka za ukończenie lekcji 1','Odznaka',1718268501,1718268756,2,2,'E-learning','https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/','',NULL,NULL,2,9,'<p>Otrzymałeś odznakę \"%badgename%\"!</p>\n<p>Więcej informacji możesz znaleźć na stronie odznaki %badgelink%.</p>\n<p>Możesz zarządzać i pobrać odznakę ze strony <a href=\"https://wierzba.wzks.uj.edu.pl/~19_ivanov/moodle/badges/mybadges.php\">Zarządzaj odznakami</a>.</p>','Gratulacje! Właśnie zdobyłeś odznakę!',1,0,1,NULL,'','pl','','','','');
/*!40000 ALTER TABLE `mdl_badge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_alignment`
--

DROP TABLE IF EXISTS `mdl_badge_alignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_alignment` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `badgeid` bigint NOT NULL DEFAULT '0',
  `targetname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `targeturl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `targetdescription` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `targetframework` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `targetcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_badgalig_bad_ix` (`badgeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Defines alignment for badges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_alignment`
--

LOCK TABLES `mdl_badge_alignment` WRITE;
/*!40000 ALTER TABLE `mdl_badge_alignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_alignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_backpack`
--

DROP TABLE IF EXISTS `mdl_badge_backpack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_backpack` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL DEFAULT '0',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `backpackuid` bigint NOT NULL,
  `autosync` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `externalbackpackid` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_badgback_useext_uix` (`userid`,`externalbackpackid`),
  KEY `mdl_badgback_use_ix` (`userid`),
  KEY `mdl_badgback_ext_ix` (`externalbackpackid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Defines settings for connecting external backpack';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_backpack`
--

LOCK TABLES `mdl_badge_backpack` WRITE;
/*!40000 ALTER TABLE `mdl_badge_backpack` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_backpack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_backpack_oauth2`
--

DROP TABLE IF EXISTS `mdl_badge_backpack_oauth2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_backpack_oauth2` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usermodified` bigint NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL,
  `issuerid` bigint NOT NULL,
  `externalbackpackid` bigint NOT NULL,
  `token` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `refreshtoken` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `expires` bigint DEFAULT NULL,
  `scope` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_badgbackoaut_use_ix` (`usermodified`),
  KEY `mdl_badgbackoaut_use2_ix` (`userid`),
  KEY `mdl_badgbackoaut_iss_ix` (`issuerid`),
  KEY `mdl_badgbackoaut_ext_ix` (`externalbackpackid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Default comment for the table, please edit me';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_backpack_oauth2`
--

LOCK TABLES `mdl_badge_backpack_oauth2` WRITE;
/*!40000 ALTER TABLE `mdl_badge_backpack_oauth2` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_backpack_oauth2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_criteria`
--

DROP TABLE IF EXISTS `mdl_badge_criteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_criteria` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `badgeid` bigint NOT NULL DEFAULT '0',
  `criteriatype` bigint DEFAULT NULL,
  `method` tinyint(1) NOT NULL DEFAULT '1',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `descriptionformat` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_badgcrit_badcri_uix` (`badgeid`,`criteriatype`),
  KEY `mdl_badgcrit_cri_ix` (`criteriatype`),
  KEY `mdl_badgcrit_bad_ix` (`badgeid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COMMENT='Defines criteria for issuing badges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_criteria`
--

LOCK TABLES `mdl_badge_criteria` WRITE;
/*!40000 ALTER TABLE `mdl_badge_criteria` DISABLE KEYS */;
INSERT INTO `mdl_badge_criteria` VALUES (1,1,0,1,'',1),(2,1,1,1,'',1),(3,2,0,1,'',1),(4,2,2,2,'',1),(5,3,0,1,'',1),(6,3,1,2,'',1),(7,4,0,1,'',1),(8,4,1,2,'',1);
/*!40000 ALTER TABLE `mdl_badge_criteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_criteria_met`
--

DROP TABLE IF EXISTS `mdl_badge_criteria_met`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_criteria_met` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `issuedid` bigint DEFAULT NULL,
  `critid` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `datemet` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_badgcritmet_cri_ix` (`critid`),
  KEY `mdl_badgcritmet_use_ix` (`userid`),
  KEY `mdl_badgcritmet_iss_ix` (`issuedid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COMMENT='Defines criteria that were met for an issued badge';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_criteria_met`
--

LOCK TABLES `mdl_badge_criteria_met` WRITE;
/*!40000 ALTER TABLE `mdl_badge_criteria_met` DISABLE KEYS */;
INSERT INTO `mdl_badge_criteria_met` VALUES (1,1,4,12,1717663997),(2,1,3,12,1717663997);
/*!40000 ALTER TABLE `mdl_badge_criteria_met` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_criteria_param`
--

DROP TABLE IF EXISTS `mdl_badge_criteria_param`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_criteria_param` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `critid` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_badgcritpara_cri_ix` (`critid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COMMENT='Defines parameters for badges criteria';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_criteria_param`
--

LOCK TABLES `mdl_badge_criteria_param` WRITE;
/*!40000 ALTER TABLE `mdl_badge_criteria_param` DISABLE KEYS */;
INSERT INTO `mdl_badge_criteria_param` VALUES (1,2,'module_18','18'),(2,4,'role_3','3'),(3,6,'module_18','18'),(4,8,'module_20','20'),(5,8,'module_24','24'),(6,8,'module_25','25'),(7,8,'module_26','26');
/*!40000 ALTER TABLE `mdl_badge_criteria_param` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_endorsement`
--

DROP TABLE IF EXISTS `mdl_badge_endorsement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_endorsement` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `badgeid` bigint NOT NULL DEFAULT '0',
  `issuername` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `issuerurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `issueremail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `claimid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `claimcomment` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `dateissued` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_badgendo_bad_ix` (`badgeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Defines endorsement for badge';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_endorsement`
--

LOCK TABLES `mdl_badge_endorsement` WRITE;
/*!40000 ALTER TABLE `mdl_badge_endorsement` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_endorsement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_external`
--

DROP TABLE IF EXISTS `mdl_badge_external`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_external` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `backpackid` bigint NOT NULL,
  `collectionid` bigint NOT NULL,
  `entityid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `assertion` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_badgexte_bac_ix` (`backpackid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Setting for external badges display';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_external`
--

LOCK TABLES `mdl_badge_external` WRITE;
/*!40000 ALTER TABLE `mdl_badge_external` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_external` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_external_backpack`
--

DROP TABLE IF EXISTS `mdl_badge_external_backpack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_external_backpack` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `backpackapiurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `backpackweburl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `apiversion` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1.0',
  `sortorder` bigint NOT NULL DEFAULT '0',
  `oauth2_issuerid` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_badgexteback_bac_uix` (`backpackapiurl`),
  UNIQUE KEY `mdl_badgexteback_bac2_uix` (`backpackweburl`),
  KEY `mdl_badgexteback_oau_ix` (`oauth2_issuerid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COMMENT='Defines settings for site level backpacks that a user can co';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_external_backpack`
--

LOCK TABLES `mdl_badge_external_backpack` WRITE;
/*!40000 ALTER TABLE `mdl_badge_external_backpack` DISABLE KEYS */;
INSERT INTO `mdl_badge_external_backpack` VALUES (1,'https://api.badgr.io/v2','https://badgr.io','2',1,NULL);
/*!40000 ALTER TABLE `mdl_badge_external_backpack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_external_identifier`
--

DROP TABLE IF EXISTS `mdl_badge_external_identifier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_external_identifier` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `sitebackpackid` bigint NOT NULL,
  `internalid` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `externalid` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `type` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_badgexteiden_sitintext_uix` (`sitebackpackid`,`internalid`,`externalid`,`type`),
  KEY `mdl_badgexteiden_sit_ix` (`sitebackpackid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Setting for external badges mappings';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_external_identifier`
--

LOCK TABLES `mdl_badge_external_identifier` WRITE;
/*!40000 ALTER TABLE `mdl_badge_external_identifier` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_external_identifier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_issued`
--

DROP TABLE IF EXISTS `mdl_badge_issued`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_issued` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `badgeid` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `uniquehash` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dateissued` bigint NOT NULL DEFAULT '0',
  `dateexpire` bigint DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `issuernotified` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_badgissu_baduse_uix` (`badgeid`,`userid`),
  KEY `mdl_badgissu_bad_ix` (`badgeid`),
  KEY `mdl_badgissu_use_ix` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COMMENT='Defines issued badges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_issued`
--

LOCK TABLES `mdl_badge_issued` WRITE;
/*!40000 ALTER TABLE `mdl_badge_issued` DISABLE KEYS */;
INSERT INTO `mdl_badge_issued` VALUES (1,2,12,'dcbe7c3821708a675ebcfd6784a095e501791cb0',1717663997,NULL,1,NULL);
/*!40000 ALTER TABLE `mdl_badge_issued` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_manual_award`
--

DROP TABLE IF EXISTS `mdl_badge_manual_award`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_manual_award` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `badgeid` bigint NOT NULL,
  `recipientid` bigint NOT NULL,
  `issuerid` bigint NOT NULL,
  `issuerrole` bigint NOT NULL,
  `datemet` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_badgmanuawar_bad_ix` (`badgeid`),
  KEY `mdl_badgmanuawar_rec_ix` (`recipientid`),
  KEY `mdl_badgmanuawar_iss_ix` (`issuerid`),
  KEY `mdl_badgmanuawar_iss2_ix` (`issuerrole`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COMMENT='Track manual award criteria for badges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_manual_award`
--

LOCK TABLES `mdl_badge_manual_award` WRITE;
/*!40000 ALTER TABLE `mdl_badge_manual_award` DISABLE KEYS */;
INSERT INTO `mdl_badge_manual_award` VALUES (1,2,12,2,3,1717663996);
/*!40000 ALTER TABLE `mdl_badge_manual_award` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_badge_related`
--

DROP TABLE IF EXISTS `mdl_badge_related`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_badge_related` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `badgeid` bigint NOT NULL DEFAULT '0',
  `relatedbadgeid` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_badgrela_badrel_uix` (`badgeid`,`relatedbadgeid`),
  KEY `mdl_badgrela_bad_ix` (`badgeid`),
  KEY `mdl_badgrela_rel_ix` (`relatedbadgeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Defines badge related for badges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_badge_related`
--

LOCK TABLES `mdl_badge_related` WRITE;
/*!40000 ALTER TABLE `mdl_badge_related` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_badge_related` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_bigbluebuttonbn`
--

DROP TABLE IF EXISTS `mdl_bigbluebuttonbn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_bigbluebuttonbn` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `type` tinyint NOT NULL DEFAULT '0',
  `course` bigint NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `intro` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `introformat` smallint NOT NULL DEFAULT '1',
  `meetingid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `moderatorpass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `viewerpass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `wait` tinyint(1) NOT NULL DEFAULT '0',
  `record` tinyint(1) NOT NULL DEFAULT '0',
  `recordallfromstart` tinyint(1) NOT NULL DEFAULT '0',
  `recordhidebutton` tinyint(1) NOT NULL DEFAULT '0',
  `welcome` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `voicebridge` mediumint NOT NULL DEFAULT '0',
  `openingtime` bigint NOT NULL DEFAULT '0',
  `closingtime` bigint NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `presentation` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `participants` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `userlimit` smallint NOT NULL DEFAULT '0',
  `recordings_html` tinyint(1) NOT NULL DEFAULT '0',
  `recordings_deleted` tinyint(1) NOT NULL DEFAULT '1',
  `recordings_imported` tinyint(1) NOT NULL DEFAULT '0',
  `recordings_preview` tinyint(1) NOT NULL DEFAULT '0',
  `clienttype` tinyint(1) NOT NULL DEFAULT '0',
  `muteonstart` tinyint(1) NOT NULL DEFAULT '0',
  `disablecam` tinyint(1) NOT NULL DEFAULT '0',
  `disablemic` tinyint(1) NOT NULL DEFAULT '0',
  `disableprivatechat` tinyint(1) NOT NULL DEFAULT '0',
  `disablepublicchat` tinyint(1) NOT NULL DEFAULT '0',
  `disablenote` tinyint(1) NOT NULL DEFAULT '0',
  `hideuserlist` tinyint(1) NOT NULL DEFAULT '0',
  `completionattendance` int NOT NULL DEFAULT '0',
  `completionengagementchats` int NOT NULL DEFAULT '0',
  `completionengagementtalks` int NOT NULL DEFAULT '0',
  `completionengagementraisehand` int NOT NULL DEFAULT '0',
  `completionengagementpollvotes` int NOT NULL DEFAULT '0',
  `completionengagementemojis` int NOT NULL DEFAULT '0',
  `guestallowed` tinyint DEFAULT '0',
  `mustapproveuser` tinyint DEFAULT '1',
  `guestlinkuid` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `guestpassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPRESSED COMMENT='The bigbluebuttonbn table to store information about a meeti';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_bigbluebuttonbn`
--

LOCK TABLES `mdl_bigbluebuttonbn` WRITE;
/*!40000 ALTER TABLE `mdl_bigbluebuttonbn` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_bigbluebuttonbn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_bigbluebuttonbn_logs`
--

DROP TABLE IF EXISTS `mdl_bigbluebuttonbn_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_bigbluebuttonbn_logs` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL,
  `bigbluebuttonbnid` bigint NOT NULL,
  `userid` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL DEFAULT '0',
  `meetingid` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `log` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `meta` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_bigblogs_cou_ix` (`courseid`),
  KEY `mdl_bigblogs_log_ix` (`log`),
  KEY `mdl_bigblogs_coubiguselog_ix` (`courseid`,`bigbluebuttonbnid`,`userid`,`log`),
  KEY `mdl_bigblogs_uselog_ix` (`userid`,`log`),
  KEY `mdl_bigblogs_coubig_ix` (`courseid`,`bigbluebuttonbnid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='The bigbluebuttonbn table to store meeting activity events';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_bigbluebuttonbn_logs`
--

LOCK TABLES `mdl_bigbluebuttonbn_logs` WRITE;
/*!40000 ALTER TABLE `mdl_bigbluebuttonbn_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_bigbluebuttonbn_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_bigbluebuttonbn_recordings`
--

DROP TABLE IF EXISTS `mdl_bigbluebuttonbn_recordings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_bigbluebuttonbn_recordings` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL,
  `bigbluebuttonbnid` bigint NOT NULL,
  `groupid` bigint DEFAULT NULL,
  `recordingid` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `headless` tinyint(1) NOT NULL DEFAULT '0',
  `imported` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `importeddata` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `timecreated` bigint NOT NULL DEFAULT '0',
  `usermodified` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_bigbreco_cou_ix` (`courseid`),
  KEY `mdl_bigbreco_rec_ix` (`recordingid`),
  KEY `mdl_bigbreco_big_ix` (`bigbluebuttonbnid`),
  KEY `mdl_bigbreco_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='The bigbluebuttonbn table to store references to recordings';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_bigbluebuttonbn_recordings`
--

LOCK TABLES `mdl_bigbluebuttonbn_recordings` WRITE;
/*!40000 ALTER TABLE `mdl_bigbluebuttonbn_recordings` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_bigbluebuttonbn_recordings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_block`
--

DROP TABLE IF EXISTS `mdl_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_block` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `cron` bigint NOT NULL DEFAULT '0',
  `lastcron` bigint NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_bloc_nam_uix` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3 COMMENT='contains all installed blocks';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_block`
--

LOCK TABLES `mdl_block` WRITE;
/*!40000 ALTER TABLE `mdl_block` DISABLE KEYS */;
INSERT INTO `mdl_block` VALUES (1,'accessreview',0,0,1),(2,'activity_modules',0,0,1),(3,'activity_results',0,0,1),(4,'admin_bookmarks',0,0,1),(5,'badges',0,0,1),(6,'blog_menu',0,0,1),(7,'blog_recent',0,0,1),(8,'blog_tags',0,0,1),(9,'calendar_month',0,0,1),(10,'calendar_upcoming',0,0,1),(11,'comments',0,0,1),(12,'completionstatus',0,0,1),(13,'course_list',0,0,1),(14,'course_summary',0,0,0),(15,'feedback',0,0,0),(16,'globalsearch',0,0,1),(17,'glossary_random',0,0,1),(18,'html',0,0,1),(19,'login',0,0,1),(20,'lp',0,0,1),(21,'mentees',0,0,1),(22,'mnet_hosts',0,0,1),(23,'myoverview',0,0,1),(24,'myprofile',0,0,1),(25,'navigation',0,0,1),(26,'news_items',0,0,1),(27,'online_users',0,0,1),(28,'private_files',0,0,1),(29,'recent_activity',0,0,1),(30,'recentlyaccessedcourses',0,0,1),(31,'recentlyaccesseditems',0,0,1),(32,'rss_client',0,0,0),(33,'search_forums',0,0,1),(34,'section_links',0,0,1),(35,'selfcompletion',0,0,0),(36,'settings',0,0,1),(37,'site_main_menu',0,0,1),(38,'social_activities',0,0,1),(39,'starredcourses',0,0,1),(40,'tag_flickr',0,0,1),(41,'tag_youtube',0,0,0),(42,'tags',0,0,1),(43,'timeline',0,0,1);
/*!40000 ALTER TABLE `mdl_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_block_instances`
--

DROP TABLE IF EXISTS `mdl_block_instances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_block_instances` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `blockname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `parentcontextid` bigint NOT NULL,
  `showinsubcontexts` smallint NOT NULL,
  `requiredbytheme` smallint NOT NULL DEFAULT '0',
  `pagetypepattern` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `subpagepattern` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `defaultregion` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `defaultweight` bigint NOT NULL,
  `configdata` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_blocinst_parshopagsub_ix` (`parentcontextid`,`showinsubcontexts`,`pagetypepattern`,`subpagepattern`),
  KEY `mdl_blocinst_tim_ix` (`timemodified`),
  KEY `mdl_blocinst_blo_ix` (`blockname`),
  KEY `mdl_blocinst_par_ix` (`parentcontextid`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb3 COMMENT='This table stores block instances. The type of block this is';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_block_instances`
--

LOCK TABLES `mdl_block_instances` WRITE;
/*!40000 ALTER TABLE `mdl_block_instances` DISABLE KEYS */;
INSERT INTO `mdl_block_instances` VALUES (1,'admin_bookmarks',1,0,0,'admin-*',NULL,'side-pre',2,'',1712824533,1712824533),(2,'recentlyaccesseditems',1,0,0,'my-index','2','side-post',0,'',1712824534,1712824534),(3,'timeline',1,0,0,'my-index','2','content',0,'',1712824534,1712824534),(4,'calendar_month',1,0,0,'my-index','2','content',1,'',1712824534,1712824534),(5,'myoverview',1,0,0,'my-index','3','content',0,'',1712824534,1712824534),(10,'recentlyaccesseditems',17,0,0,'my-index','6','side-post',0,'',1715244248,1715244248),(11,'timeline',17,0,0,'my-index','6','content',0,'',1715244248,1715244248),(12,'calendar_month',17,0,0,'my-index','6','content',1,'',1715244248,1715244248),(13,'recentlyaccesseditems',21,0,0,'my-index','8','side-post',0,'',1715245170,1715245170),(14,'timeline',21,0,0,'my-index','8','content',0,'',1715245171,1715245171),(15,'calendar_month',21,0,0,'my-index','8','content',1,'',1715245171,1715245171),(16,'recentlyaccesseditems',43,0,0,'my-index','9','side-post',0,'',1715245521,1715245521),(17,'timeline',43,0,0,'my-index','9','content',0,'',1715245521,1715245521),(18,'calendar_month',43,0,0,'my-index','9','content',1,'',1715245522,1715245522),(19,'recentlyaccesseditems',18,0,0,'my-index','10','side-post',0,'',1715245942,1715245942),(20,'timeline',18,0,0,'my-index','10','content',0,'',1715245942,1715245942),(21,'calendar_month',18,0,0,'my-index','10','content',1,'',1715245942,1715245942),(32,'navigation',1,1,1,'*',NULL,'side-post',0,'',1715848196,1715848196),(33,'settings',1,1,1,'*',NULL,'side-post',0,'',1715848196,1715848196),(34,'recentlyaccesseditems',5,0,0,'my-index','14','side-post',0,'',1715848360,1715848360),(35,'timeline',5,0,0,'my-index','14','content',0,'',1715848360,1715848360),(36,'calendar_month',5,0,0,'my-index',NULL,'content',-10,'Tzo4OiJzdGRDbGFzcyI6MDp7fQ==',1715848360,1715848420),(37,'myoverview',5,0,0,'my-index',NULL,'content',-9,'Tzo4OiJzdGRDbGFzcyI6MDp7fQ==',1715848427,1715848436),(38,'recentlyaccesseditems',69,0,0,'my-index','15','side-post',0,'',1715850117,1715850117),(39,'timeline',69,0,0,'my-index','15','content',0,'',1715850117,1715850117),(40,'calendar_month',69,0,0,'my-index','15','content',1,'',1715850117,1715850117),(41,'recentlyaccesseditems',85,0,0,'my-index','16','side-post',0,'',1716452727,1716452727),(42,'timeline',85,0,0,'my-index','16','content',0,'',1716452727,1716452727),(43,'calendar_month',85,0,0,'my-index','16','content',1,'',1716452728,1716452728),(44,'recentlyaccesseditems',26,0,0,'my-index','18','side-post',0,'',1717662371,1717662371),(45,'timeline',26,0,0,'my-index','18','content',0,'',1717662371,1717662371),(46,'calendar_month',26,0,0,'my-index','18','content',1,'',1717662371,1717662371),(47,'recentlyaccesseditems',31,0,0,'my-index','20','side-post',0,'',1717664106,1717664106),(48,'timeline',31,0,0,'my-index','20','content',0,'',1717664106,1717664106),(49,'calendar_month',31,0,0,'my-index','20','content',1,'',1717664106,1717664106),(50,'recentlyaccesseditems',28,0,0,'my-index','21','side-post',0,'',1717665384,1717665384),(51,'timeline',28,0,0,'my-index','21','content',0,'',1717665384,1717665384),(52,'calendar_month',28,0,0,'my-index','21','content',1,'',1717665384,1717665384);
/*!40000 ALTER TABLE `mdl_block_instances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_block_positions`
--

DROP TABLE IF EXISTS `mdl_block_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_block_positions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `blockinstanceid` bigint NOT NULL,
  `contextid` bigint NOT NULL,
  `pagetype` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `subpage` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `visible` smallint NOT NULL,
  `region` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `weight` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_blocposi_bloconpagsub_uix` (`blockinstanceid`,`contextid`,`pagetype`,`subpage`),
  KEY `mdl_blocposi_blo_ix` (`blockinstanceid`),
  KEY `mdl_blocposi_con_ix` (`contextid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COMMENT='Stores the position of a sticky block_instance on a another ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_block_positions`
--

LOCK TABLES `mdl_block_positions` WRITE;
/*!40000 ALTER TABLE `mdl_block_positions` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_block_positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_block_recent_activity`
--

DROP TABLE IF EXISTS `mdl_block_recent_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_block_recent_activity` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL,
  `cmid` bigint NOT NULL,
  `timecreated` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `action` tinyint(1) NOT NULL,
  `modname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_blocreceacti_coutim_ix` (`courseid`,`timecreated`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3 COMMENT='Recent activity block';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_block_recent_activity`
--

LOCK TABLES `mdl_block_recent_activity` WRITE;
/*!40000 ALTER TABLE `mdl_block_recent_activity` DISABLE KEYS */;
INSERT INTO `mdl_block_recent_activity` VALUES (1,1,2,1714027097,2,0,NULL),(2,2,3,1715244609,2,0,NULL),(3,3,5,1715245722,2,0,NULL),(4,3,6,1715245846,2,0,NULL),(5,3,7,1715245895,2,0,NULL),(6,3,7,1715245915,2,1,NULL),(7,7,12,1716452897,2,0,NULL),(8,7,13,1716452949,2,0,NULL),(9,7,14,1716454139,2,0,NULL),(10,7,14,1716455454,2,1,NULL),(11,7,14,1716455620,2,1,NULL),(12,8,16,1717660779,2,0,NULL),(13,8,16,1717660865,2,1,NULL),(14,8,16,1717660923,2,1,NULL),(15,8,17,1717660984,2,0,NULL),(16,8,18,1717662611,2,0,NULL),(17,8,18,1717662632,2,1,NULL),(18,8,18,1717662820,2,1,NULL),(19,8,17,1717663310,2,1,NULL),(20,8,17,1717663336,2,1,NULL),(21,8,18,1717663475,2,1,NULL),(22,8,18,1717664782,2,1,NULL),(23,8,18,1717665343,2,1,NULL),(24,9,20,1718267089,2,0,NULL),(25,9,21,1718267138,2,0,NULL),(26,9,22,1718267250,2,0,NULL),(27,9,20,1718267256,2,1,NULL),(28,9,23,1718267276,2,0,NULL),(29,9,20,1718267449,2,1,NULL),(30,9,24,1718268120,2,0,NULL),(31,9,25,1718268180,2,0,NULL),(32,9,26,1718268192,2,0,NULL),(33,9,20,1718268644,2,1,NULL),(34,9,24,1718268663,2,1,NULL),(35,9,20,1718268675,2,1,NULL),(36,9,25,1718268686,2,1,NULL),(37,9,26,1718268700,2,1,NULL),(38,9,27,1718269054,2,0,NULL);
/*!40000 ALTER TABLE `mdl_block_recent_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_block_recentlyaccesseditems`
--

DROP TABLE IF EXISTS `mdl_block_recentlyaccesseditems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_block_recentlyaccesseditems` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL,
  `cmid` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `timeaccess` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_blocrece_usecoucmi_uix` (`userid`,`courseid`,`cmid`),
  KEY `mdl_blocrece_use_ix` (`userid`),
  KEY `mdl_blocrece_cou_ix` (`courseid`),
  KEY `mdl_blocrece_cmi_ix` (`cmid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3 COMMENT='Most recently accessed items accessed by a user';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_block_recentlyaccesseditems`
--

LOCK TABLES `mdl_block_recentlyaccesseditems` WRITE;
/*!40000 ALTER TABLE `mdl_block_recentlyaccesseditems` DISABLE KEYS */;
INSERT INTO `mdl_block_recentlyaccesseditems` VALUES (14,9,21,2,1718267392),(15,9,23,2,1718267280),(16,9,20,2,1718268092),(17,9,24,2,1718268292),(18,9,26,2,1718268314),(19,9,20,12,1718268878),(20,9,27,2,1718269971),(21,9,27,12,1718270047),(22,9,24,12,1718269673);
/*!40000 ALTER TABLE `mdl_block_recentlyaccesseditems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_block_rss_client`
--

DROP TABLE IF EXISTS `mdl_block_rss_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_block_rss_client` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL DEFAULT '0',
  `title` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `preferredtitle` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `shared` tinyint NOT NULL DEFAULT '0',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `skiptime` bigint NOT NULL DEFAULT '0',
  `skipuntil` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Remote news feed information. Contains the news feed id, the';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_block_rss_client`
--

LOCK TABLES `mdl_block_rss_client` WRITE;
/*!40000 ALTER TABLE `mdl_block_rss_client` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_block_rss_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_blog_association`
--

DROP TABLE IF EXISTS `mdl_blog_association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_blog_association` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `contextid` bigint NOT NULL,
  `blogid` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_blogasso_con_ix` (`contextid`),
  KEY `mdl_blogasso_blo_ix` (`blogid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Associations of blog entries with courses and module instanc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_blog_association`
--

LOCK TABLES `mdl_blog_association` WRITE;
/*!40000 ALTER TABLE `mdl_blog_association` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_blog_association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_blog_external`
--

DROP TABLE IF EXISTS `mdl_blog_external`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_blog_external` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `url` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `filtertags` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `failedlastsync` tinyint(1) NOT NULL DEFAULT '0',
  `timemodified` bigint DEFAULT NULL,
  `timefetched` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_blogexte_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='External blog links used for RSS copying of blog entries to ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_blog_external`
--

LOCK TABLES `mdl_blog_external` WRITE;
/*!40000 ALTER TABLE `mdl_blog_external` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_blog_external` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_book`
--

DROP TABLE IF EXISTS `mdl_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_book` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `course` bigint NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `intro` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `introformat` smallint NOT NULL DEFAULT '0',
  `numbering` smallint NOT NULL DEFAULT '0',
  `navstyle` smallint NOT NULL DEFAULT '1',
  `customtitles` tinyint NOT NULL DEFAULT '0',
  `revision` bigint NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_book_cou_ix` (`course`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Defines book';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_book`
--

LOCK TABLES `mdl_book` WRITE;
/*!40000 ALTER TABLE `mdl_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_book_chapters`
--

DROP TABLE IF EXISTS `mdl_book_chapters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_book_chapters` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `bookid` bigint NOT NULL DEFAULT '0',
  `pagenum` bigint NOT NULL DEFAULT '0',
  `subchapter` bigint NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contentformat` smallint NOT NULL DEFAULT '0',
  `hidden` tinyint NOT NULL DEFAULT '0',
  `timecreated` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `importsrc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `mdl_bookchap_boo_ix` (`bookid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Defines book_chapters';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_book_chapters`
--

LOCK TABLES `mdl_book_chapters` WRITE;
/*!40000 ALTER TABLE `mdl_book_chapters` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_book_chapters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_cache_filters`
--

DROP TABLE IF EXISTS `mdl_cache_filters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_cache_filters` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `filter` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `version` bigint NOT NULL DEFAULT '0',
  `md5key` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `rawtext` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_cachfilt_filmd5_ix` (`filter`,`md5key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='For keeping information about cached data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_cache_filters`
--

LOCK TABLES `mdl_cache_filters` WRITE;
/*!40000 ALTER TABLE `mdl_cache_filters` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_cache_filters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_cache_flags`
--

DROP TABLE IF EXISTS `mdl_cache_flags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_cache_flags` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `flagtype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `value` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `expiry` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_cachflag_fla_ix` (`flagtype`),
  KEY `mdl_cachflag_nam_ix` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb3 COMMENT='Cache of time-sensitive flags';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_cache_flags`
--

LOCK TABLES `mdl_cache_flags` WRITE;
/*!40000 ALTER TABLE `mdl_cache_flags` DISABLE KEYS */;
INSERT INTO `mdl_cache_flags` VALUES (1,'userpreferenceschanged','2',1718270109,'1',1718298909),(2,'userpreferenceschanged','3',1715244290,'1',1715273090),(3,'userpreferenceschanged','4',1715245946,'1',1715274746),(4,'userpreferenceschanged','5',1715242155,'1',1715270955),(5,'userpreferenceschanged','6',1715242199,'1',1715270999),(6,'userpreferenceschanged','7',1715245177,'1',1715273977),(7,'userpreferenceschanged','8',1715243479,'1',1715272279),(8,'userpreferenceschanged','9',1715243479,'1',1715272279),(9,'userpreferenceschanged','10',1715243480,'1',1715272280),(10,'userpreferenceschanged','11',1715243480,'1',1715272280),(11,'userpreferenceschanged','12',1718270040,'1',1718298840),(12,'userpreferenceschanged','13',1718270010,'1',1718298810),(13,'userpreferenceschanged','14',1717665444,'1',1717694244),(14,'userpreferenceschanged','15',1715243481,'1',1715272281),(15,'userpreferenceschanged','16',1718270030,'1',1718298830),(16,'userpreferenceschanged','17',1718270035,'1',1718298835),(17,'accesslib/dirtyusers','2',1718265797,'1',1718294597),(18,'accesslib/dirtycontexts','/1/35/36',1715244955,'1',1715273755),(19,'accesslib/dirtyusers','6',1718265342,'1',1718294142),(20,'accesslib/dirtyusers','5',1718265342,'1',1718294142),(21,'accesslib/dirtyusers','7',1718265342,'1',1718294142),(22,'accesslib/dirtyusers','4',1718265341,'1',1718294141),(23,'accesslib/dirtyusers','3',1718265341,'1',1718294141),(24,'accesslib/dirtycontexts','/1/35/41',1715245402,'1',1715274202),(25,'userpreferenceschanged','18',1715245962,'1',1715274762),(26,'accesslib/dirtyusers','18',1718265317,'1',1718294117),(27,'accesslib/dirtycontexts','/1/3/36',1718265343,'1',1718294143),(28,'accesslib/dirtycontexts','/1/3/41',1718265317,'1',1718294117),(29,'userpreferenceschanged','19',1715850117,'1',1715878917),(30,'accesslib/dirtycontexts','/1/70/71',1715849675,'1',1715878475),(31,'accesslib/dirtycontexts','/1/70/73',1715849866,'1',1715878666),(32,'accesslib/dirtycontexts','/1/82/83',1716452391,'1',1716481191),(33,'userpreferenceschanged','20',1716455635,'1',1716484435),(34,'accesslib/dirtyusers','20',1718265484,'1',1718294284),(35,'accesslib/dirtyusers','12',1718268867,'1',1718297667),(36,'accesslib/dirtyusers','14',1718265384,'1',1718294184),(37,'accesslib/dirtyusers','16',1718265385,'1',1718294185),(38,'accesslib/dirtyusers','17',1718265386,'1',1718294186),(39,'accesslib/dirtycontexts','/1/3/92',1718265387,'1',1718294187),(40,'accesslib/dirtycontexts','/1/3/83',1718265484,'1',1718294284),(41,'accesslib/dirtycontexts','/1/3/71',1718265439,'1',1718294239),(42,'accesslib/dirtycontexts','/1/3/73',1718265453,'1',1718294253),(43,'accesslib/dirtycontexts','/1/3/75',1718265468,'1',1718294268),(44,'accesslib/dirtycontexts','/1/108',1718265725,'1',1718294525),(45,'accesslib/dirtycontexts','/1/108/109',1718266143,'1',1718294943);
/*!40000 ALTER TABLE `mdl_cache_flags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_capabilities`
--

DROP TABLE IF EXISTS `mdl_capabilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_capabilities` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `captype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `contextlevel` bigint NOT NULL DEFAULT '0',
  `component` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `riskbitmask` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_capa_nam_uix` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=725 DEFAULT CHARSET=utf8mb3 COMMENT='this defines all capabilities';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_capabilities`
--

LOCK TABLES `mdl_capabilities` WRITE;
/*!40000 ALTER TABLE `mdl_capabilities` DISABLE KEYS */;
INSERT INTO `mdl_capabilities` VALUES (1,'moodle/site:config','write',10,'moodle',62),(2,'moodle/site:configview','read',10,'moodle',0),(3,'moodle/site:readallmessages','read',10,'moodle',8),(4,'moodle/site:manageallmessaging','write',10,'moodle',8),(5,'moodle/site:deleteanymessage','write',10,'moodle',32),(6,'moodle/site:sendmessage','write',10,'moodle',16),(7,'moodle/site:senderrormessage','write',10,'moodle',16),(8,'moodle/site:deleteownmessage','write',10,'moodle',0),(9,'moodle/site:approvecourse','write',40,'moodle',4),(10,'moodle/backup:backupcourse','write',50,'moodle',28),(11,'moodle/backup:backupsection','write',50,'moodle',28),(12,'moodle/backup:backupactivity','write',70,'moodle',28),(13,'moodle/backup:backuptargetimport','read',50,'moodle',28),(14,'moodle/backup:downloadfile','write',50,'moodle',28),(15,'moodle/backup:configure','write',50,'moodle',28),(16,'moodle/backup:userinfo','read',50,'moodle',8),(17,'moodle/backup:anonymise','read',50,'moodle',8),(18,'moodle/restore:restorecourse','write',50,'moodle',28),(19,'moodle/restore:restoresection','write',50,'moodle',28),(20,'moodle/restore:restoreactivity','write',50,'moodle',28),(21,'moodle/restore:viewautomatedfilearea','write',50,'moodle',28),(22,'moodle/restore:restoretargetimport','write',50,'moodle',28),(23,'moodle/restore:uploadfile','write',50,'moodle',28),(24,'moodle/restore:configure','write',50,'moodle',28),(25,'moodle/restore:rolldates','write',50,'moodle',0),(26,'moodle/restore:userinfo','write',50,'moodle',30),(27,'moodle/restore:createuser','write',10,'moodle',24),(28,'moodle/site:manageblocks','write',80,'moodle',20),(29,'moodle/site:accessallgroups','read',70,'moodle',0),(30,'moodle/site:viewanonymousevents','read',70,'moodle',8),(31,'moodle/site:viewfullnames','read',70,'moodle',0),(32,'moodle/site:viewuseridentity','read',70,'moodle',0),(33,'moodle/site:viewreports','read',50,'moodle',8),(34,'moodle/site:trustcontent','write',70,'moodle',4),(35,'moodle/site:uploadusers','write',10,'moodle',24),(36,'moodle/filter:manage','write',50,'moodle',0),(37,'moodle/user:create','write',10,'moodle',24),(38,'moodle/user:delete','write',10,'moodle',40),(39,'moodle/user:update','write',10,'moodle',24),(40,'moodle/user:viewdetails','read',50,'moodle',0),(41,'moodle/user:viewalldetails','read',30,'moodle',8),(42,'moodle/user:viewlastip','read',30,'moodle',8),(43,'moodle/user:viewhiddendetails','read',50,'moodle',8),(44,'moodle/user:loginas','write',50,'moodle',30),(45,'moodle/user:managesyspages','write',10,'moodle',0),(46,'moodle/user:manageblocks','write',30,'moodle',0),(47,'moodle/user:manageownblocks','write',10,'moodle',0),(48,'moodle/user:manageownfiles','write',10,'moodle',0),(49,'moodle/user:ignoreuserquota','write',10,'moodle',0),(50,'moodle/my:configsyspages','write',10,'moodle',0),(51,'moodle/role:assign','write',50,'moodle',28),(52,'moodle/role:review','read',50,'moodle',8),(53,'moodle/role:override','write',50,'moodle',28),(54,'moodle/role:safeoverride','write',50,'moodle',16),(55,'moodle/role:manage','write',10,'moodle',28),(56,'moodle/role:switchroles','read',50,'moodle',12),(57,'moodle/category:manage','write',40,'moodle',4),(58,'moodle/category:viewcourselist','read',40,'moodle',0),(59,'moodle/category:viewhiddencategories','read',40,'moodle',0),(60,'moodle/cohort:manage','write',40,'moodle',0),(61,'moodle/cohort:assign','write',40,'moodle',0),(62,'moodle/cohort:view','read',50,'moodle',0),(63,'moodle/cohort:configurecustomfields','write',10,'moodle',16),(64,'moodle/group:configurecustomfields','write',10,'moodle',16),(65,'moodle/course:create','write',40,'moodle',4),(66,'moodle/course:creategroupconversations','write',50,'moodle',4),(67,'moodle/course:request','write',40,'moodle',0),(68,'moodle/course:delete','write',50,'moodle',32),(69,'moodle/course:update','write',50,'moodle',4),(70,'moodle/course:view','read',50,'moodle',0),(71,'moodle/course:enrolreview','read',50,'moodle',8),(72,'moodle/course:enrolconfig','write',50,'moodle',8),(73,'moodle/course:reviewotherusers','read',50,'moodle',0),(74,'moodle/course:bulkmessaging','write',50,'moodle',16),(75,'moodle/course:viewhiddenuserfields','read',50,'moodle',8),(76,'moodle/course:viewhiddencourses','read',50,'moodle',0),(77,'moodle/course:visibility','write',50,'moodle',0),(78,'moodle/course:managefiles','write',50,'moodle',4),(79,'moodle/course:ignoreavailabilityrestrictions','read',70,'moodle',0),(80,'moodle/course:ignorefilesizelimits','write',50,'moodle',0),(81,'moodle/course:manageactivities','write',70,'moodle',4),(82,'moodle/course:activityvisibility','write',70,'moodle',0),(83,'moodle/course:viewhiddenactivities','read',70,'moodle',0),(84,'moodle/course:viewparticipants','read',50,'moodle',0),(85,'moodle/course:changefullname','write',50,'moodle',4),(86,'moodle/course:changeshortname','write',50,'moodle',4),(87,'moodle/course:changelockedcustomfields','write',50,'moodle',16),(88,'moodle/course:configurecustomfields','write',10,'moodle',16),(89,'moodle/course:renameroles','write',50,'moodle',0),(90,'moodle/course:changeidnumber','write',50,'moodle',4),(91,'moodle/course:changecategory','write',50,'moodle',4),(92,'moodle/course:changesummary','write',50,'moodle',4),(93,'moodle/course:setforcedlanguage','write',50,'moodle',0),(94,'moodle/site:viewparticipants','read',10,'moodle',0),(95,'moodle/course:isincompletionreports','read',50,'moodle',0),(96,'moodle/course:viewscales','read',50,'moodle',0),(97,'moodle/course:managescales','write',50,'moodle',0),(98,'moodle/course:managegroups','write',50,'moodle',4),(99,'moodle/course:viewhiddengroups','READ',50,'moodle',8),(100,'moodle/course:reset','write',50,'moodle',32),(101,'moodle/course:viewsuspendedusers','read',50,'moodle',0),(102,'moodle/course:tag','write',50,'moodle',16),(103,'moodle/blog:view','read',10,'moodle',0),(104,'moodle/blog:search','read',10,'moodle',0),(105,'moodle/blog:viewdrafts','read',10,'moodle',8),(106,'moodle/blog:create','write',10,'moodle',16),(107,'moodle/blog:manageentries','write',10,'moodle',16),(108,'moodle/blog:manageexternal','write',10,'moodle',16),(109,'moodle/calendar:manageownentries','write',50,'moodle',16),(110,'moodle/calendar:managegroupentries','write',50,'moodle',16),(111,'moodle/calendar:manageentries','write',50,'moodle',16),(112,'moodle/user:editprofile','write',30,'moodle',24),(113,'moodle/user:editownprofile','write',10,'moodle',16),(114,'moodle/user:changeownpassword','write',10,'moodle',0),(115,'moodle/user:readuserposts','read',30,'moodle',0),(116,'moodle/user:readuserblogs','read',30,'moodle',0),(117,'moodle/user:viewuseractivitiesreport','read',30,'moodle',8),(118,'moodle/user:editmessageprofile','write',30,'moodle',16),(119,'moodle/user:editownmessageprofile','write',10,'moodle',0),(120,'moodle/question:managecategory','write',50,'moodle',20),(121,'moodle/question:add','write',50,'moodle',20),(122,'moodle/question:editmine','write',50,'moodle',20),(123,'moodle/question:editall','write',50,'moodle',20),(124,'moodle/question:viewmine','read',50,'moodle',0),(125,'moodle/question:viewall','read',50,'moodle',0),(126,'moodle/question:usemine','read',50,'moodle',0),(127,'moodle/question:useall','read',50,'moodle',0),(128,'moodle/question:movemine','write',50,'moodle',0),(129,'moodle/question:moveall','write',50,'moodle',0),(130,'moodle/question:config','write',10,'moodle',2),(131,'moodle/question:flag','write',50,'moodle',0),(132,'moodle/question:tagmine','write',50,'moodle',0),(133,'moodle/question:tagall','write',50,'moodle',0),(134,'moodle/site:doclinks','read',10,'moodle',0),(135,'moodle/course:sectionvisibility','write',50,'moodle',0),(136,'moodle/course:useremail','write',50,'moodle',0),(137,'moodle/course:viewhiddensections','read',50,'moodle',0),(138,'moodle/course:setcurrentsection','write',50,'moodle',0),(139,'moodle/course:movesections','write',50,'moodle',0),(140,'moodle/site:mnetlogintoremote','read',10,'moodle',0),(141,'moodle/grade:viewall','read',50,'moodle',8),(142,'moodle/grade:view','read',50,'moodle',0),(143,'moodle/grade:viewhidden','read',50,'moodle',8),(144,'moodle/grade:import','write',50,'moodle',12),(145,'moodle/grade:export','read',50,'moodle',8),(146,'moodle/grade:manage','write',50,'moodle',12),(147,'moodle/grade:edit','write',50,'moodle',12),(148,'moodle/grade:managegradingforms','write',50,'moodle',12),(149,'moodle/grade:sharegradingforms','write',10,'moodle',4),(150,'moodle/grade:managesharedforms','write',10,'moodle',4),(151,'moodle/grade:manageoutcomes','write',50,'moodle',0),(152,'moodle/grade:manageletters','write',50,'moodle',0),(153,'moodle/grade:hide','write',50,'moodle',0),(154,'moodle/grade:lock','write',50,'moodle',0),(155,'moodle/grade:unlock','write',50,'moodle',0),(156,'moodle/my:manageblocks','write',10,'moodle',0),(157,'moodle/notes:view','read',50,'moodle',0),(158,'moodle/notes:manage','write',50,'moodle',16),(159,'moodle/tag:manage','write',10,'moodle',16),(160,'moodle/tag:edit','write',10,'moodle',16),(161,'moodle/tag:flag','write',10,'moodle',16),(162,'moodle/tag:editblocks','write',10,'moodle',0),(163,'moodle/block:view','read',80,'moodle',0),(164,'moodle/block:edit','write',80,'moodle',20),(165,'moodle/portfolio:export','read',10,'moodle',0),(166,'moodle/comment:view','read',50,'moodle',0),(167,'moodle/comment:post','write',50,'moodle',24),(168,'moodle/comment:delete','write',50,'moodle',32),(169,'moodle/webservice:createtoken','write',10,'moodle',62),(170,'moodle/webservice:managealltokens','write',10,'moodle',42),(171,'moodle/webservice:createmobiletoken','write',10,'moodle',24),(172,'moodle/rating:view','read',50,'moodle',0),(173,'moodle/rating:viewany','read',50,'moodle',8),(174,'moodle/rating:viewall','read',50,'moodle',8),(175,'moodle/rating:rate','write',50,'moodle',0),(176,'moodle/course:markcomplete','write',50,'moodle',0),(177,'moodle/course:overridecompletion','write',50,'moodle',0),(178,'moodle/badges:manageglobalsettings','write',10,'moodle',34),(179,'moodle/badges:viewbadges','read',50,'moodle',0),(180,'moodle/badges:manageownbadges','write',30,'moodle',0),(181,'moodle/badges:viewotherbadges','read',30,'moodle',0),(182,'moodle/badges:earnbadge','write',50,'moodle',0),(183,'moodle/badges:createbadge','write',50,'moodle',16),(184,'moodle/badges:deletebadge','write',50,'moodle',32),(185,'moodle/badges:configuredetails','write',50,'moodle',16),(186,'moodle/badges:configurecriteria','write',50,'moodle',4),(187,'moodle/badges:configuremessages','write',50,'moodle',16),(188,'moodle/badges:awardbadge','write',50,'moodle',16),(189,'moodle/badges:revokebadge','write',50,'moodle',16),(190,'moodle/badges:viewawarded','read',50,'moodle',8),(191,'moodle/site:forcelanguage','read',10,'moodle',0),(192,'moodle/search:query','read',10,'moodle',0),(193,'moodle/competency:competencymanage','write',40,'moodle',0),(194,'moodle/competency:competencyview','read',40,'moodle',0),(195,'moodle/competency:competencygrade','write',50,'moodle',0),(196,'moodle/competency:coursecompetencymanage','write',50,'moodle',0),(197,'moodle/competency:coursecompetencyconfigure','write',70,'moodle',0),(198,'moodle/competency:coursecompetencygradable','read',50,'moodle',0),(199,'moodle/competency:coursecompetencyview','read',50,'moodle',0),(200,'moodle/competency:evidencedelete','write',30,'moodle',0),(201,'moodle/competency:planmanage','write',30,'moodle',0),(202,'moodle/competency:planmanagedraft','write',30,'moodle',0),(203,'moodle/competency:planmanageown','write',30,'moodle',0),(204,'moodle/competency:planmanageowndraft','write',30,'moodle',0),(205,'moodle/competency:planview','read',30,'moodle',0),(206,'moodle/competency:planviewdraft','read',30,'moodle',0),(207,'moodle/competency:planviewown','read',30,'moodle',0),(208,'moodle/competency:planviewowndraft','read',30,'moodle',0),(209,'moodle/competency:planrequestreview','write',30,'moodle',0),(210,'moodle/competency:planrequestreviewown','write',30,'moodle',0),(211,'moodle/competency:planreview','write',30,'moodle',0),(212,'moodle/competency:plancomment','write',30,'moodle',0),(213,'moodle/competency:plancommentown','write',30,'moodle',0),(214,'moodle/competency:usercompetencyview','read',30,'moodle',0),(215,'moodle/competency:usercompetencyrequestreview','write',30,'moodle',0),(216,'moodle/competency:usercompetencyrequestreviewown','write',30,'moodle',0),(217,'moodle/competency:usercompetencyreview','write',30,'moodle',0),(218,'moodle/competency:usercompetencycomment','write',30,'moodle',0),(219,'moodle/competency:usercompetencycommentown','write',30,'moodle',0),(220,'moodle/competency:templatemanage','write',40,'moodle',0),(221,'moodle/analytics:listinsights','read',50,'moodle',8),(222,'moodle/analytics:managemodels','write',10,'moodle',2),(223,'moodle/competency:templateview','read',40,'moodle',0),(224,'moodle/competency:userevidencemanage','write',30,'moodle',0),(225,'moodle/competency:userevidencemanageown','write',30,'moodle',0),(226,'moodle/competency:userevidenceview','read',30,'moodle',0),(227,'moodle/site:maintenanceaccess','write',10,'moodle',0),(228,'moodle/site:messageanyuser','write',10,'moodle',16),(229,'moodle/site:managecontextlocks','write',70,'moodle',0),(230,'moodle/course:togglecompletion','write',70,'moodle',0),(231,'moodle/analytics:listowninsights','read',10,'moodle',0),(232,'moodle/h5p:setdisplayoptions','write',70,'moodle',0),(233,'moodle/h5p:deploy','write',70,'moodle',4),(234,'moodle/h5p:updatelibraries','write',70,'moodle',4),(235,'moodle/course:recommendactivity','write',10,'moodle',0),(236,'moodle/contentbank:access','read',50,'moodle',0),(237,'moodle/contentbank:upload','write',50,'moodle',16),(238,'moodle/contentbank:deleteanycontent','write',50,'moodle',32),(239,'moodle/contentbank:deleteowncontent','write',50,'moodle',0),(240,'moodle/contentbank:manageanycontent','write',50,'moodle',32),(241,'moodle/contentbank:manageowncontent','write',50,'moodle',0),(242,'moodle/contentbank:useeditor','write',50,'moodle',16),(243,'moodle/contentbank:downloadcontent','read',50,'moodle',0),(244,'moodle/contentbank:copyanycontent','write',50,'moodle',16),(245,'moodle/contentbank:copycontent','write',50,'moodle',16),(246,'moodle/course:downloadcoursecontent','read',50,'moodle',0),(247,'moodle/course:configuredownloadcontent','write',50,'moodle',0),(248,'moodle/payment:manageaccounts','write',50,'moodle',42),(249,'moodle/payment:viewpayments','read',50,'moodle',8),(250,'moodle/contentbank:viewunlistedcontent','read',50,'moodle',0),(251,'moodle/reportbuilder:view','read',10,'moodle',0),(252,'moodle/reportbuilder:viewall','read',10,'moodle',0),(253,'moodle/reportbuilder:edit','write',10,'moodle',0),(254,'moodle/reportbuilder:editall','write',10,'moodle',0),(255,'moodle/reportbuilder:scheduleviewas','read',10,'moodle',0),(256,'moodle/moodlenet:shareactivity','read',50,'moodle',0),(257,'moodle/course:configurecoursecommunication','write',50,'moodle',0),(258,'moodle/moodlenet:sharecourse','read',50,'moodle',0),(259,'mod/assign:view','read',70,'mod_assign',0),(260,'mod/assign:submit','write',70,'mod_assign',0),(261,'mod/assign:grade','write',70,'mod_assign',4),(262,'mod/assign:exportownsubmission','read',70,'mod_assign',0),(263,'mod/assign:addinstance','write',50,'mod_assign',4),(264,'mod/assign:editothersubmission','write',70,'mod_assign',41),(265,'mod/assign:grantextension','write',70,'mod_assign',0),(266,'mod/assign:revealidentities','write',70,'mod_assign',0),(267,'mod/assign:reviewgrades','write',70,'mod_assign',0),(268,'mod/assign:releasegrades','write',70,'mod_assign',0),(269,'mod/assign:managegrades','write',70,'mod_assign',0),(270,'mod/assign:manageallocations','write',70,'mod_assign',0),(271,'mod/assign:viewgrades','read',70,'mod_assign',0),(272,'mod/assign:viewblinddetails','write',70,'mod_assign',8),(273,'mod/assign:receivegradernotifications','read',70,'mod_assign',0),(274,'mod/assign:manageoverrides','write',70,'mod_assign',0),(275,'mod/assign:showhiddengrader','read',70,'mod_assign',0),(276,'mod/assign:viewownsubmissionsummary','read',70,'mod_assign',0),(277,'mod/bigbluebuttonbn:addinstance','write',50,'mod_bigbluebuttonbn',4),(278,'mod/bigbluebuttonbn:addinstancewithmeeting','write',70,'mod_bigbluebuttonbn',0),(279,'mod/bigbluebuttonbn:addinstancewithrecording','write',70,'mod_bigbluebuttonbn',0),(280,'mod/bigbluebuttonbn:join','read',70,'mod_bigbluebuttonbn',0),(281,'mod/bigbluebuttonbn:view','read',70,'mod_bigbluebuttonbn',0),(282,'mod/bigbluebuttonbn:managerecordings','write',70,'mod_bigbluebuttonbn',0),(283,'mod/bigbluebuttonbn:viewallrecordingformats','read',70,'mod_bigbluebuttonbn',0),(284,'mod/bigbluebuttonbn:publishrecordings','write',70,'mod_bigbluebuttonbn',0),(285,'mod/bigbluebuttonbn:unpublishrecordings','write',70,'mod_bigbluebuttonbn',0),(286,'mod/bigbluebuttonbn:protectrecordings','write',70,'mod_bigbluebuttonbn',0),(287,'mod/bigbluebuttonbn:unprotectrecordings','write',70,'mod_bigbluebuttonbn',0),(288,'mod/bigbluebuttonbn:deleterecordings','write',70,'mod_bigbluebuttonbn',0),(289,'mod/bigbluebuttonbn:importrecordings','write',70,'mod_bigbluebuttonbn',0),(290,'mod/book:addinstance','write',50,'mod_book',4),(291,'mod/book:read','read',70,'mod_book',0),(292,'mod/book:viewhiddenchapters','read',70,'mod_book',0),(293,'mod/book:edit','write',70,'mod_book',4),(294,'mod/chat:addinstance','write',50,'mod_chat',4),(295,'mod/chat:chat','write',70,'mod_chat',16),(296,'mod/chat:readlog','read',70,'mod_chat',0),(297,'mod/chat:deletelog','write',70,'mod_chat',0),(298,'mod/chat:exportparticipatedsession','read',70,'mod_chat',8),(299,'mod/chat:exportsession','read',70,'mod_chat',8),(300,'mod/chat:view','read',70,'mod_chat',0),(301,'mod/choice:addinstance','write',50,'mod_choice',4),(302,'mod/choice:choose','write',70,'mod_choice',0),(303,'mod/choice:readresponses','read',70,'mod_choice',0),(304,'mod/choice:deleteresponses','write',70,'mod_choice',0),(305,'mod/choice:downloadresponses','read',70,'mod_choice',0),(306,'mod/choice:view','read',70,'mod_choice',0),(307,'mod/data:addinstance','write',50,'mod_data',4),(308,'mod/data:viewentry','read',70,'mod_data',0),(309,'mod/data:writeentry','write',70,'mod_data',16),(310,'mod/data:comment','write',70,'mod_data',16),(311,'mod/data:rate','write',70,'mod_data',0),(312,'mod/data:viewrating','read',70,'mod_data',0),(313,'mod/data:viewanyrating','read',70,'mod_data',8),(314,'mod/data:viewallratings','read',70,'mod_data',8),(315,'mod/data:approve','write',70,'mod_data',16),(316,'mod/data:manageentries','write',70,'mod_data',16),(317,'mod/data:managecomments','write',70,'mod_data',16),(318,'mod/data:managetemplates','write',70,'mod_data',20),(319,'mod/data:viewalluserpresets','read',70,'mod_data',0),(320,'mod/data:manageuserpresets','write',70,'mod_data',20),(321,'mod/data:exportentry','read',70,'mod_data',8),(322,'mod/data:exportownentry','read',70,'mod_data',0),(323,'mod/data:exportallentries','read',70,'mod_data',8),(324,'mod/data:exportuserinfo','read',70,'mod_data',8),(325,'mod/data:view','read',70,'mod_data',0),(326,'mod/feedback:addinstance','write',50,'mod_feedback',4),(327,'mod/feedback:view','read',70,'mod_feedback',0),(328,'mod/feedback:complete','write',70,'mod_feedback',16),(329,'mod/feedback:viewanalysepage','read',70,'mod_feedback',8),(330,'mod/feedback:deletesubmissions','write',70,'mod_feedback',0),(331,'mod/feedback:mapcourse','write',70,'mod_feedback',0),(332,'mod/feedback:edititems','write',70,'mod_feedback',20),(333,'mod/feedback:createprivatetemplate','write',70,'mod_feedback',16),(334,'mod/feedback:createpublictemplate','write',70,'mod_feedback',16),(335,'mod/feedback:deletetemplate','write',70,'mod_feedback',0),(336,'mod/feedback:viewreports','read',70,'mod_feedback',8),(337,'mod/feedback:receivemail','read',70,'mod_feedback',8),(338,'mod/folder:addinstance','write',50,'mod_folder',4),(339,'mod/folder:view','read',70,'mod_folder',0),(340,'mod/folder:managefiles','write',70,'mod_folder',20),(341,'mod/forum:addinstance','write',50,'mod_forum',4),(342,'mod/forum:viewdiscussion','read',70,'mod_forum',0),(343,'mod/forum:viewhiddentimedposts','read',70,'mod_forum',0),(344,'mod/forum:startdiscussion','write',70,'mod_forum',16),(345,'mod/forum:replypost','write',70,'mod_forum',16),(346,'mod/forum:addnews','write',70,'mod_forum',16),(347,'mod/forum:replynews','write',70,'mod_forum',16),(348,'mod/forum:viewrating','read',70,'mod_forum',0),(349,'mod/forum:viewanyrating','read',70,'mod_forum',8),(350,'mod/forum:viewallratings','read',70,'mod_forum',8),(351,'mod/forum:rate','write',70,'mod_forum',0),(352,'mod/forum:postprivatereply','write',70,'mod_forum',0),(353,'mod/forum:readprivatereplies','read',70,'mod_forum',0),(354,'mod/forum:createattachment','write',70,'mod_forum',16),(355,'mod/forum:deleteownpost','write',70,'mod_forum',0),(356,'mod/forum:deleteanypost','write',70,'mod_forum',0),(357,'mod/forum:splitdiscussions','write',70,'mod_forum',0),(358,'mod/forum:movediscussions','write',70,'mod_forum',0),(359,'mod/forum:pindiscussions','write',70,'mod_forum',0),(360,'mod/forum:editanypost','write',70,'mod_forum',16),(361,'mod/forum:viewqandawithoutposting','read',70,'mod_forum',0),(362,'mod/forum:viewsubscribers','read',70,'mod_forum',0),(363,'mod/forum:managesubscriptions','write',70,'mod_forum',16),(364,'mod/forum:postwithoutthrottling','write',70,'mod_forum',16),(365,'mod/forum:exportdiscussion','read',70,'mod_forum',8),(366,'mod/forum:exportforum','read',70,'mod_forum',8),(367,'mod/forum:exportpost','read',70,'mod_forum',8),(368,'mod/forum:exportownpost','read',70,'mod_forum',8),(369,'mod/forum:addquestion','write',70,'mod_forum',16),(370,'mod/forum:allowforcesubscribe','read',70,'mod_forum',0),(371,'mod/forum:canposttomygroups','write',70,'mod_forum',0),(372,'mod/forum:canoverridediscussionlock','write',70,'mod_forum',0),(373,'mod/forum:canoverridecutoff','write',70,'mod_forum',0),(374,'mod/forum:cantogglefavourite','write',70,'mod_forum',0),(375,'mod/forum:grade','write',70,'mod_forum',0),(376,'mod/forum:canmailnow','write',70,'mod_forum',16),(377,'mod/glossary:addinstance','write',50,'mod_glossary',4),(378,'mod/glossary:view','read',70,'mod_glossary',0),(379,'mod/glossary:write','write',70,'mod_glossary',16),(380,'mod/glossary:manageentries','write',70,'mod_glossary',16),(381,'mod/glossary:managecategories','write',70,'mod_glossary',16),(382,'mod/glossary:comment','write',70,'mod_glossary',16),(383,'mod/glossary:managecomments','write',70,'mod_glossary',16),(384,'mod/glossary:import','write',70,'mod_glossary',16),(385,'mod/glossary:export','read',70,'mod_glossary',0),(386,'mod/glossary:approve','write',70,'mod_glossary',16),(387,'mod/glossary:rate','write',70,'mod_glossary',0),(388,'mod/glossary:viewrating','read',70,'mod_glossary',0),(389,'mod/glossary:viewanyrating','read',70,'mod_glossary',8),(390,'mod/glossary:viewallratings','read',70,'mod_glossary',8),(391,'mod/glossary:exportentry','read',70,'mod_glossary',8),(392,'mod/glossary:exportownentry','read',70,'mod_glossary',0),(393,'mod/h5pactivity:view','read',70,'mod_h5pactivity',0),(394,'mod/h5pactivity:addinstance','write',50,'mod_h5pactivity',0),(395,'mod/h5pactivity:submit','write',70,'mod_h5pactivity',0),(396,'mod/h5pactivity:reviewattempts','read',70,'mod_h5pactivity',0),(397,'mod/imscp:view','read',70,'mod_imscp',0),(398,'mod/imscp:addinstance','write',50,'mod_imscp',4),(399,'mod/label:addinstance','write',50,'mod_label',4),(400,'mod/label:view','read',70,'mod_label',0),(401,'mod/lesson:addinstance','write',50,'mod_lesson',4),(402,'mod/lesson:edit','write',70,'mod_lesson',4),(403,'mod/lesson:grade','write',70,'mod_lesson',20),(404,'mod/lesson:viewreports','read',70,'mod_lesson',8),(405,'mod/lesson:manage','write',70,'mod_lesson',0),(406,'mod/lesson:manageoverrides','write',70,'mod_lesson',0),(407,'mod/lesson:view','read',70,'mod_lesson',0),(408,'mod/lti:view','read',70,'mod_lti',0),(409,'mod/lti:addinstance','write',50,'mod_lti',4),(410,'mod/lti:manage','write',70,'mod_lti',8),(411,'mod/lti:admin','write',70,'mod_lti',8),(412,'mod/lti:addcoursetool','write',50,'mod_lti',0),(413,'mod/lti:addpreconfiguredinstance','write',50,'mod_lti',0),(414,'mod/lti:requesttooladd','write',50,'mod_lti',0),(415,'mod/page:view','read',70,'mod_page',0),(416,'mod/page:addinstance','write',50,'mod_page',4),(417,'mod/quiz:view','read',70,'mod_quiz',0),(418,'mod/quiz:addinstance','write',50,'mod_quiz',4),(419,'mod/quiz:attempt','write',70,'mod_quiz',16),(420,'mod/quiz:reviewmyattempts','read',70,'mod_quiz',0),(421,'mod/quiz:manage','write',70,'mod_quiz',16),(422,'mod/quiz:manageoverrides','write',70,'mod_quiz',0),(423,'mod/quiz:viewoverrides','read',70,'mod_quiz',0),(424,'mod/quiz:preview','write',70,'mod_quiz',0),(425,'mod/quiz:grade','write',70,'mod_quiz',20),(426,'mod/quiz:regrade','write',70,'mod_quiz',16),(427,'mod/quiz:viewreports','read',70,'mod_quiz',8),(428,'mod/quiz:deleteattempts','write',70,'mod_quiz',32),(429,'mod/quiz:reopenattempts','write',70,'mod_quiz',0),(430,'mod/quiz:ignoretimelimits','read',70,'mod_quiz',0),(431,'mod/quiz:emailconfirmsubmission','read',70,'mod_quiz',0),(432,'mod/quiz:emailnotifysubmission','read',70,'mod_quiz',0),(433,'mod/quiz:emailwarnoverdue','read',70,'mod_quiz',0),(434,'mod/quiz:emailnotifyattemptgraded','read',70,'mod_quiz',0),(435,'mod/resource:view','read',70,'mod_resource',0),(436,'mod/resource:addinstance','write',50,'mod_resource',4),(437,'mod/scorm:addinstance','write',50,'mod_scorm',4),(438,'mod/scorm:viewreport','read',70,'mod_scorm',0),(439,'mod/scorm:skipview','read',70,'mod_scorm',0),(440,'mod/scorm:savetrack','write',70,'mod_scorm',0),(441,'mod/scorm:viewscores','read',70,'mod_scorm',0),(442,'mod/scorm:deleteresponses','write',70,'mod_scorm',0),(443,'mod/scorm:deleteownresponses','write',70,'mod_scorm',0),(444,'mod/survey:addinstance','write',50,'mod_survey',4),(445,'mod/survey:participate','read',70,'mod_survey',0),(446,'mod/survey:readresponses','read',70,'mod_survey',0),(447,'mod/survey:download','read',70,'mod_survey',0),(448,'mod/url:view','read',70,'mod_url',0),(449,'mod/url:addinstance','write',50,'mod_url',4),(450,'mod/wiki:addinstance','write',50,'mod_wiki',4),(451,'mod/wiki:viewpage','read',70,'mod_wiki',0),(452,'mod/wiki:editpage','write',70,'mod_wiki',16),(453,'mod/wiki:createpage','write',70,'mod_wiki',16),(454,'mod/wiki:viewcomment','read',70,'mod_wiki',0),(455,'mod/wiki:editcomment','write',70,'mod_wiki',16),(456,'mod/wiki:managecomment','write',70,'mod_wiki',0),(457,'mod/wiki:managefiles','write',70,'mod_wiki',0),(458,'mod/wiki:overridelock','write',70,'mod_wiki',0),(459,'mod/wiki:managewiki','write',70,'mod_wiki',0),(460,'mod/workshop:view','read',70,'mod_workshop',0),(461,'mod/workshop:addinstance','write',50,'mod_workshop',4),(462,'mod/workshop:switchphase','write',70,'mod_workshop',0),(463,'mod/workshop:editdimensions','write',70,'mod_workshop',4),(464,'mod/workshop:submit','write',70,'mod_workshop',0),(465,'mod/workshop:peerassess','write',70,'mod_workshop',0),(466,'mod/workshop:manageexamples','write',70,'mod_workshop',0),(467,'mod/workshop:allocate','write',70,'mod_workshop',0),(468,'mod/workshop:publishsubmissions','write',70,'mod_workshop',0),(469,'mod/workshop:viewauthornames','read',70,'mod_workshop',0),(470,'mod/workshop:viewreviewernames','read',70,'mod_workshop',0),(471,'mod/workshop:viewallsubmissions','read',70,'mod_workshop',0),(472,'mod/workshop:viewpublishedsubmissions','read',70,'mod_workshop',0),(473,'mod/workshop:viewauthorpublished','read',70,'mod_workshop',0),(474,'mod/workshop:viewallassessments','read',70,'mod_workshop',0),(475,'mod/workshop:overridegrades','write',70,'mod_workshop',0),(476,'mod/workshop:ignoredeadlines','write',70,'mod_workshop',0),(477,'mod/workshop:deletesubmissions','write',70,'mod_workshop',0),(478,'mod/workshop:exportsubmissions','read',70,'mod_workshop',0),(479,'auth/oauth2:managelinkedlogins','write',30,'auth_oauth2',0),(480,'communication/matrix:moderator','read',50,'communication_matrix',0),(481,'enrol/category:synchronised','write',10,'enrol_category',0),(482,'enrol/category:config','write',50,'enrol_category',0),(483,'enrol/cohort:config','write',50,'enrol_cohort',0),(484,'enrol/cohort:unenrol','write',50,'enrol_cohort',0),(485,'enrol/database:unenrol','write',50,'enrol_database',0),(486,'enrol/database:config','write',50,'enrol_database',0),(487,'enrol/fee:config','write',50,'enrol_fee',0),(488,'enrol/fee:manage','write',50,'enrol_fee',0),(489,'enrol/fee:unenrol','write',50,'enrol_fee',0),(490,'enrol/fee:unenrolself','write',50,'enrol_fee',0),(491,'enrol/flatfile:manage','write',50,'enrol_flatfile',0),(492,'enrol/flatfile:unenrol','write',50,'enrol_flatfile',0),(493,'enrol/guest:config','write',50,'enrol_guest',0),(494,'enrol/imsenterprise:config','write',50,'enrol_imsenterprise',0),(495,'enrol/ldap:manage','write',50,'enrol_ldap',0),(496,'enrol/lti:config','write',50,'enrol_lti',0),(497,'enrol/lti:unenrol','write',50,'enrol_lti',0),(498,'enrol/manual:config','write',50,'enrol_manual',0),(499,'enrol/manual:enrol','write',50,'enrol_manual',0),(500,'enrol/manual:manage','write',50,'enrol_manual',0),(501,'enrol/manual:unenrol','write',50,'enrol_manual',0),(502,'enrol/manual:unenrolself','write',50,'enrol_manual',0),(503,'enrol/meta:config','write',50,'enrol_meta',0),(504,'enrol/meta:selectaslinked','read',50,'enrol_meta',0),(505,'enrol/meta:unenrol','write',50,'enrol_meta',0),(506,'enrol/mnet:config','write',50,'enrol_mnet',0),(507,'enrol/paypal:config','write',50,'enrol_paypal',0),(508,'enrol/paypal:manage','write',50,'enrol_paypal',0),(509,'enrol/paypal:unenrol','write',50,'enrol_paypal',0),(510,'enrol/paypal:unenrolself','write',50,'enrol_paypal',0),(511,'enrol/self:config','write',50,'enrol_self',0),(512,'enrol/self:manage','write',50,'enrol_self',0),(513,'enrol/self:holdkey','write',50,'enrol_self',0),(514,'enrol/self:unenrolself','write',50,'enrol_self',0),(515,'enrol/self:unenrol','write',50,'enrol_self',0),(516,'enrol/self:enrolself','write',50,'enrol_self',0),(517,'message/airnotifier:managedevice','write',10,'message_airnotifier',0),(518,'block/accessreview:addinstance','write',80,'block_accessreview',0),(519,'block/accessreview:view','read',80,'block_accessreview',0),(520,'block/activity_modules:addinstance','write',80,'block_activity_modules',20),(521,'block/activity_results:addinstance','write',80,'block_activity_results',20),(522,'block/admin_bookmarks:myaddinstance','write',10,'block_admin_bookmarks',0),(523,'block/admin_bookmarks:addinstance','write',80,'block_admin_bookmarks',20),(524,'block/badges:addinstance','read',80,'block_badges',0),(525,'block/badges:myaddinstance','read',10,'block_badges',8),(526,'block/blog_menu:addinstance','write',80,'block_blog_menu',20),(527,'block/blog_recent:addinstance','write',80,'block_blog_recent',20),(528,'block/blog_tags:addinstance','write',80,'block_blog_tags',20),(529,'block/calendar_month:myaddinstance','write',10,'block_calendar_month',0),(530,'block/calendar_month:addinstance','write',80,'block_calendar_month',20),(531,'block/calendar_upcoming:myaddinstance','write',10,'block_calendar_upcoming',0),(532,'block/calendar_upcoming:addinstance','write',80,'block_calendar_upcoming',20),(533,'block/comments:myaddinstance','write',10,'block_comments',0),(534,'block/comments:addinstance','write',80,'block_comments',20),(535,'block/completionstatus:addinstance','write',80,'block_completionstatus',20),(536,'block/course_list:myaddinstance','write',10,'block_course_list',0),(537,'block/course_list:addinstance','write',80,'block_course_list',20),(538,'block/course_summary:addinstance','write',80,'block_course_summary',20),(539,'block/feedback:addinstance','write',80,'block_feedback',20),(540,'block/globalsearch:myaddinstance','write',10,'block_globalsearch',0),(541,'block/globalsearch:addinstance','write',80,'block_globalsearch',0),(542,'block/glossary_random:myaddinstance','write',10,'block_glossary_random',0),(543,'block/glossary_random:addinstance','write',80,'block_glossary_random',20),(544,'block/html:myaddinstance','write',10,'block_html',0),(545,'block/html:addinstance','write',80,'block_html',20),(546,'block/login:addinstance','write',80,'block_login',20),(547,'block/lp:addinstance','write',10,'block_lp',0),(548,'block/lp:myaddinstance','write',10,'block_lp',0),(549,'block/mentees:myaddinstance','write',10,'block_mentees',0),(550,'block/mentees:addinstance','write',80,'block_mentees',20),(551,'block/mnet_hosts:myaddinstance','write',10,'block_mnet_hosts',0),(552,'block/mnet_hosts:addinstance','write',80,'block_mnet_hosts',20),(553,'block/myoverview:myaddinstance','write',10,'block_myoverview',0),(554,'block/myprofile:myaddinstance','write',10,'block_myprofile',0),(555,'block/myprofile:addinstance','write',80,'block_myprofile',20),(556,'block/navigation:myaddinstance','write',10,'block_navigation',0),(557,'block/navigation:addinstance','write',80,'block_navigation',20),(558,'block/news_items:myaddinstance','write',10,'block_news_items',0),(559,'block/news_items:addinstance','write',80,'block_news_items',20),(560,'block/online_users:myaddinstance','write',10,'block_online_users',0),(561,'block/online_users:addinstance','write',80,'block_online_users',20),(562,'block/online_users:viewlist','read',80,'block_online_users',0),(563,'block/private_files:myaddinstance','write',10,'block_private_files',0),(564,'block/private_files:addinstance','write',80,'block_private_files',20),(565,'block/recent_activity:addinstance','write',80,'block_recent_activity',20),(566,'block/recent_activity:viewaddupdatemodule','read',50,'block_recent_activity',0),(567,'block/recent_activity:viewdeletemodule','read',50,'block_recent_activity',0),(568,'block/recentlyaccessedcourses:myaddinstance','write',10,'block_recentlyaccessedcourses',0),(569,'block/recentlyaccesseditems:myaddinstance','write',10,'block_recentlyaccesseditems',0),(570,'block/rss_client:myaddinstance','write',10,'block_rss_client',0),(571,'block/rss_client:addinstance','write',80,'block_rss_client',20),(572,'block/rss_client:manageownfeeds','write',80,'block_rss_client',0),(573,'block/rss_client:manageanyfeeds','write',80,'block_rss_client',16),(574,'block/search_forums:addinstance','write',80,'block_search_forums',20),(575,'block/section_links:addinstance','write',80,'block_section_links',20),(576,'block/selfcompletion:addinstance','write',80,'block_selfcompletion',20),(577,'block/settings:myaddinstance','write',10,'block_settings',0),(578,'block/settings:addinstance','write',80,'block_settings',20),(579,'block/site_main_menu:addinstance','write',80,'block_site_main_menu',20),(580,'block/social_activities:addinstance','write',80,'block_social_activities',20),(581,'block/starredcourses:myaddinstance','write',10,'block_starredcourses',0),(582,'block/tag_flickr:addinstance','write',80,'block_tag_flickr',20),(583,'block/tag_youtube:addinstance','write',80,'block_tag_youtube',20),(584,'block/tags:myaddinstance','write',10,'block_tags',0),(585,'block/tags:addinstance','write',80,'block_tags',20),(586,'block/timeline:myaddinstance','write',10,'block_timeline',0),(587,'report/completion:view','read',50,'report_completion',8),(588,'report/courseoverview:view','read',10,'report_courseoverview',8),(589,'report/log:view','read',50,'report_log',8),(590,'report/log:viewtoday','read',50,'report_log',8),(591,'report/loglive:view','read',50,'report_loglive',8),(592,'report/outline:view','read',50,'report_outline',8),(593,'report/outline:viewuserreport','read',50,'report_outline',8),(594,'report/participation:view','read',50,'report_participation',8),(595,'report/performance:view','read',10,'report_performance',2),(596,'report/progress:view','read',50,'report_progress',8),(597,'report/questioninstances:view','read',10,'report_questioninstances',0),(598,'report/security:view','read',10,'report_security',2),(599,'report/stats:view','read',50,'report_stats',8),(600,'report/status:view','read',10,'report_status',2),(601,'report/usersessions:manageownsessions','write',30,'report_usersessions',0),(602,'gradeexport/ods:view','read',50,'gradeexport_ods',8),(603,'gradeexport/ods:publish','read',50,'gradeexport_ods',8),(604,'gradeexport/txt:view','read',50,'gradeexport_txt',8),(605,'gradeexport/txt:publish','read',50,'gradeexport_txt',8),(606,'gradeexport/xls:view','read',50,'gradeexport_xls',8),(607,'gradeexport/xls:publish','read',50,'gradeexport_xls',8),(608,'gradeexport/xml:view','read',50,'gradeexport_xml',8),(609,'gradeexport/xml:publish','read',50,'gradeexport_xml',8),(610,'gradeimport/csv:view','write',50,'gradeimport_csv',0),(611,'gradeimport/direct:view','write',50,'gradeimport_direct',0),(612,'gradeimport/xml:view','write',50,'gradeimport_xml',0),(613,'gradeimport/xml:publish','write',50,'gradeimport_xml',0),(614,'gradereport/grader:view','read',50,'gradereport_grader',8),(615,'gradereport/history:view','read',50,'gradereport_history',8),(616,'gradereport/outcomes:view','read',50,'gradereport_outcomes',8),(617,'gradereport/overview:view','read',50,'gradereport_overview',8),(618,'gradereport/singleview:view','read',50,'gradereport_singleview',8),(619,'gradereport/summary:view','read',50,'gradereport_summary',8),(620,'gradereport/user:view','read',50,'gradereport_user',8),(621,'webservice/rest:use','read',50,'webservice_rest',0),(622,'webservice/soap:use','read',50,'webservice_soap',0),(623,'repository/areafiles:view','read',70,'repository_areafiles',0),(624,'repository/contentbank:view','read',70,'repository_contentbank',0),(625,'repository/contentbank:accesscoursecontent','read',50,'repository_contentbank',0),(626,'repository/contentbank:accesscoursecategorycontent','read',40,'repository_contentbank',0),(627,'repository/contentbank:accessgeneralcontent','read',40,'repository_contentbank',0),(628,'repository/coursefiles:view','read',70,'repository_coursefiles',0),(629,'repository/dropbox:view','read',70,'repository_dropbox',0),(630,'repository/equella:view','read',70,'repository_equella',0),(631,'repository/filesystem:view','read',70,'repository_filesystem',0),(632,'repository/flickr:view','read',70,'repository_flickr',0),(633,'repository/flickr_public:view','read',70,'repository_flickr_public',0),(634,'repository/googledocs:view','read',70,'repository_googledocs',0),(635,'repository/local:view','read',70,'repository_local',0),(636,'repository/merlot:view','read',70,'repository_merlot',0),(637,'repository/nextcloud:view','read',70,'repository_nextcloud',0),(638,'repository/onedrive:view','read',70,'repository_onedrive',0),(639,'repository/recent:view','read',70,'repository_recent',0),(640,'repository/s3:view','read',70,'repository_s3',0),(641,'repository/upload:view','read',70,'repository_upload',0),(642,'repository/url:view','read',70,'repository_url',0),(643,'repository/user:view','read',70,'repository_user',0),(644,'repository/webdav:view','read',70,'repository_webdav',0),(645,'repository/wikimedia:view','read',70,'repository_wikimedia',0),(646,'repository/youtube:view','read',70,'repository_youtube',0),(647,'moodle/question:commentmine','write',50,'qbank_comment',0),(648,'moodle/question:commentall','write',50,'qbank_comment',0),(649,'qbank/customfields:changelockedcustomfields','write',50,'qbank_customfields',16),(650,'qbank/customfields:configurecustomfields','write',10,'qbank_customfields',16),(651,'qbank/customfields:viewhiddencustomfields','read',50,'qbank_customfields',0),(652,'tool/brickfield:viewcoursetools','read',50,'tool_brickfield',8),(653,'tool/brickfield:viewsystemtools','read',10,'tool_brickfield',2),(654,'tool/customlang:view','read',10,'tool_customlang',2),(655,'tool/customlang:edit','write',10,'tool_customlang',6),(656,'tool/customlang:export','read',10,'tool_customlang',2),(657,'tool/dataprivacy:managedatarequests','write',10,'tool_dataprivacy',60),(658,'tool/dataprivacy:requestdeleteforotheruser','write',10,'tool_dataprivacy',60),(659,'tool/dataprivacy:managedataregistry','write',10,'tool_dataprivacy',60),(660,'tool/dataprivacy:makedatarequestsforchildren','write',30,'tool_dataprivacy',24),(661,'tool/dataprivacy:makedatadeletionrequestsforchildren','write',30,'tool_dataprivacy',24),(662,'tool/dataprivacy:downloadownrequest','read',30,'tool_dataprivacy',0),(663,'tool/dataprivacy:downloadallrequests','read',30,'tool_dataprivacy',8),(664,'tool/dataprivacy:requestdelete','write',30,'tool_dataprivacy',32),(665,'tool/lpmigrate:frameworksmigrate','write',10,'tool_lpmigrate',0),(666,'tool/mfa:mfaaccess','write',30,'tool_mfa',0),(667,'tool/monitor:subscribe','read',50,'tool_monitor',8),(668,'tool/monitor:managerules','write',50,'tool_monitor',4),(669,'tool/monitor:managetool','write',10,'tool_monitor',4),(670,'tool/policy:accept','write',10,'tool_policy',0),(671,'tool/policy:acceptbehalf','write',30,'tool_policy',8),(672,'tool/policy:managedocs','write',10,'tool_policy',0),(673,'tool/policy:viewacceptances','read',10,'tool_policy',0),(674,'tool/recyclebin:deleteitems','write',50,'tool_recyclebin',32),(675,'tool/recyclebin:restoreitems','write',50,'tool_recyclebin',0),(676,'tool/recyclebin:viewitems','read',50,'tool_recyclebin',0),(677,'tool/uploadcourse:use','write',40,'tool_uploadcourse',16),(678,'tool/uploaduser:uploaduserpictures','write',10,'tool_uploaduser',16),(679,'tool/usertours:managetours','write',10,'tool_usertours',4),(680,'contenttype/h5p:access','read',50,'contenttype_h5p',0),(681,'contenttype/h5p:upload','write',50,'contenttype_h5p',16),(682,'contenttype/h5p:useeditor','write',50,'contenttype_h5p',16),(683,'booktool/exportimscp:export','read',70,'booktool_exportimscp',0),(684,'booktool/importhtml:import','write',70,'booktool_importhtml',4),(685,'booktool/print:print','read',70,'booktool_print',0),(686,'forumreport/summary:view','read',70,'forumreport_summary',0),(687,'forumreport/summary:viewall','read',70,'forumreport_summary',8),(688,'quiz/grading:viewstudentnames','read',70,'quiz_grading',0),(689,'quiz/grading:viewidnumber','read',70,'quiz_grading',0),(690,'quiz/statistics:view','read',70,'quiz_statistics',0),(691,'quizaccess/seb:managetemplates','write',10,'quizaccess_seb',0),(692,'quizaccess/seb:bypassseb','read',70,'quizaccess_seb',0),(693,'quizaccess/seb:manage_seb_requiresafeexambrowser','write',70,'quizaccess_seb',0),(694,'quizaccess/seb:manage_seb_templateid','read',70,'quizaccess_seb',0),(695,'quizaccess/seb:manage_filemanager_sebconfigfile','write',70,'quizaccess_seb',0),(696,'quizaccess/seb:manage_seb_showsebdownloadlink','write',70,'quizaccess_seb',0),(697,'quizaccess/seb:manage_seb_allowedbrowserexamkeys','write',70,'quizaccess_seb',0),(698,'quizaccess/seb:manage_seb_linkquitseb','write',70,'quizaccess_seb',0),(699,'quizaccess/seb:manage_seb_userconfirmquit','write',70,'quizaccess_seb',0),(700,'quizaccess/seb:manage_seb_allowuserquitseb','write',70,'quizaccess_seb',0),(701,'quizaccess/seb:manage_seb_quitpassword','write',70,'quizaccess_seb',0),(702,'quizaccess/seb:manage_seb_allowreloadinexam','write',70,'quizaccess_seb',0),(703,'quizaccess/seb:manage_seb_showsebtaskbar','write',70,'quizaccess_seb',0),(704,'quizaccess/seb:manage_seb_showreloadbutton','write',70,'quizaccess_seb',0),(705,'quizaccess/seb:manage_seb_showtime','write',70,'quizaccess_seb',0),(706,'quizaccess/seb:manage_seb_showkeyboardlayout','write',70,'quizaccess_seb',0),(707,'quizaccess/seb:manage_seb_showwificontrol','write',70,'quizaccess_seb',0),(708,'quizaccess/seb:manage_seb_enableaudiocontrol','write',70,'quizaccess_seb',0),(709,'quizaccess/seb:manage_seb_muteonstartup','write',70,'quizaccess_seb',0),(710,'quizaccess/seb:manage_seb_allowspellchecking','write',70,'quizaccess_seb',0),(711,'quizaccess/seb:manage_seb_activateurlfiltering','write',70,'quizaccess_seb',0),(712,'quizaccess/seb:manage_seb_filterembeddedcontent','write',70,'quizaccess_seb',0),(713,'quizaccess/seb:manage_seb_expressionsallowed','write',70,'quizaccess_seb',0),(714,'quizaccess/seb:manage_seb_regexallowed','write',70,'quizaccess_seb',0),(715,'quizaccess/seb:manage_seb_expressionsblocked','write',70,'quizaccess_seb',0),(716,'quizaccess/seb:manage_seb_regexblocked','write',70,'quizaccess_seb',0),(717,'atto/h5p:addembed','write',70,'atto_h5p',0),(718,'atto/recordrtc:recordaudio','write',70,'atto_recordrtc',0),(719,'atto/recordrtc:recordvideo','write',70,'atto_recordrtc',0),(720,'tiny/h5p:addembed','write',70,'tiny_h5p',0),(721,'tiny/premium:accesspremium','read',30,'tiny_premium',0),(722,'tiny/recordrtc:recordaudio','write',70,'tiny_recordrtc',0),(723,'tiny/recordrtc:recordvideo','write',70,'tiny_recordrtc',0),(724,'factor/capability:cannotpassfactor','read',10,'factor_capability',0);
/*!40000 ALTER TABLE `mdl_capabilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_chat`
--

DROP TABLE IF EXISTS `mdl_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_chat` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `course` bigint NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `intro` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `introformat` smallint NOT NULL DEFAULT '0',
  `keepdays` bigint NOT NULL DEFAULT '0',
  `studentlogs` smallint NOT NULL DEFAULT '0',
  `chattime` bigint NOT NULL DEFAULT '0',
  `schedule` smallint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_chat_cou_ix` (`course`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Each of these is a chat room';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_chat`
--

LOCK TABLES `mdl_chat` WRITE;
/*!40000 ALTER TABLE `mdl_chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_chat_messages`
--

DROP TABLE IF EXISTS `mdl_chat_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_chat_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `chatid` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `groupid` bigint NOT NULL DEFAULT '0',
  `issystem` tinyint(1) NOT NULL DEFAULT '0',
  `message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timestamp` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_chatmess_use_ix` (`userid`),
  KEY `mdl_chatmess_gro_ix` (`groupid`),
  KEY `mdl_chatmess_timcha_ix` (`timestamp`,`chatid`),
  KEY `mdl_chatmess_cha_ix` (`chatid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores all the actual chat messages';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_chat_messages`
--

LOCK TABLES `mdl_chat_messages` WRITE;
/*!40000 ALTER TABLE `mdl_chat_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_chat_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_chat_messages_current`
--

DROP TABLE IF EXISTS `mdl_chat_messages_current`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_chat_messages_current` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `chatid` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `groupid` bigint NOT NULL DEFAULT '0',
  `issystem` tinyint(1) NOT NULL DEFAULT '0',
  `message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timestamp` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_chatmesscurr_use_ix` (`userid`),
  KEY `mdl_chatmesscurr_gro_ix` (`groupid`),
  KEY `mdl_chatmesscurr_timcha_ix` (`timestamp`,`chatid`),
  KEY `mdl_chatmesscurr_cha_ix` (`chatid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores current session';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_chat_messages_current`
--

LOCK TABLES `mdl_chat_messages_current` WRITE;
/*!40000 ALTER TABLE `mdl_chat_messages_current` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_chat_messages_current` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_chat_users`
--

DROP TABLE IF EXISTS `mdl_chat_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_chat_users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `chatid` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `groupid` bigint NOT NULL DEFAULT '0',
  `version` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ip` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `firstping` bigint NOT NULL DEFAULT '0',
  `lastping` bigint NOT NULL DEFAULT '0',
  `lastmessageping` bigint NOT NULL DEFAULT '0',
  `sid` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `course` bigint NOT NULL DEFAULT '0',
  `lang` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `mdl_chatuser_use_ix` (`userid`),
  KEY `mdl_chatuser_las_ix` (`lastping`),
  KEY `mdl_chatuser_gro_ix` (`groupid`),
  KEY `mdl_chatuser_cha_ix` (`chatid`),
  KEY `mdl_chatuser_cou_ix` (`course`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Keeps track of which users are in which chat rooms';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_chat_users`
--

LOCK TABLES `mdl_chat_users` WRITE;
/*!40000 ALTER TABLE `mdl_chat_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_chat_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_choice`
--

DROP TABLE IF EXISTS `mdl_choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_choice` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `course` bigint NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `intro` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `introformat` smallint NOT NULL DEFAULT '0',
  `publish` tinyint NOT NULL DEFAULT '0',
  `showresults` tinyint NOT NULL DEFAULT '0',
  `display` smallint NOT NULL DEFAULT '0',
  `allowupdate` tinyint NOT NULL DEFAULT '0',
  `allowmultiple` tinyint NOT NULL DEFAULT '0',
  `showunanswered` tinyint NOT NULL DEFAULT '0',
  `includeinactive` tinyint NOT NULL DEFAULT '1',
  `limitanswers` tinyint NOT NULL DEFAULT '0',
  `timeopen` bigint NOT NULL DEFAULT '0',
  `timeclose` bigint NOT NULL DEFAULT '0',
  `showpreview` tinyint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  `completionsubmit` tinyint(1) NOT NULL DEFAULT '0',
  `showavailable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_choi_cou_ix` (`course`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Available choices are stored here';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_choice`
--

LOCK TABLES `mdl_choice` WRITE;
/*!40000 ALTER TABLE `mdl_choice` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_choice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_choice_answers`
--

DROP TABLE IF EXISTS `mdl_choice_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_choice_answers` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `choiceid` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `optionid` bigint NOT NULL DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_choiansw_use_ix` (`userid`),
  KEY `mdl_choiansw_cho_ix` (`choiceid`),
  KEY `mdl_choiansw_opt_ix` (`optionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='choices performed by users';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_choice_answers`
--

LOCK TABLES `mdl_choice_answers` WRITE;
/*!40000 ALTER TABLE `mdl_choice_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_choice_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_choice_options`
--

DROP TABLE IF EXISTS `mdl_choice_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_choice_options` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `choiceid` bigint NOT NULL DEFAULT '0',
  `text` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `maxanswers` bigint DEFAULT '0',
  `timemodified` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_choiopti_cho_ix` (`choiceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='available options to choice';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_choice_options`
--

LOCK TABLES `mdl_choice_options` WRITE;
/*!40000 ALTER TABLE `mdl_choice_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_choice_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_cohort`
--

DROP TABLE IF EXISTS `mdl_cohort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_cohort` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `contextid` bigint NOT NULL,
  `name` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `idnumber` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `descriptionformat` tinyint NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `component` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `theme` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_coho_con_ix` (`contextid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Each record represents one cohort (aka site-wide group).';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_cohort`
--

LOCK TABLES `mdl_cohort` WRITE;
/*!40000 ALTER TABLE `mdl_cohort` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_cohort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_cohort_members`
--

DROP TABLE IF EXISTS `mdl_cohort_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_cohort_members` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `cohortid` bigint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL DEFAULT '0',
  `timeadded` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_cohomemb_cohuse_uix` (`cohortid`,`userid`),
  KEY `mdl_cohomemb_coh_ix` (`cohortid`),
  KEY `mdl_cohomemb_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Link a user to a cohort.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_cohort_members`
--

LOCK TABLES `mdl_cohort_members` WRITE;
/*!40000 ALTER TABLE `mdl_cohort_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_cohort_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_comments`
--

DROP TABLE IF EXISTS `mdl_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_comments` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `contextid` bigint NOT NULL,
  `component` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `commentarea` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `itemid` bigint NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `format` tinyint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL,
  `timecreated` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_comm_concomite_ix` (`contextid`,`commentarea`,`itemid`),
  KEY `mdl_comm_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='moodle comments module';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_comments`
--

LOCK TABLES `mdl_comments` WRITE;
/*!40000 ALTER TABLE `mdl_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_communication`
--

DROP TABLE IF EXISTS `mdl_communication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_communication` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `contextid` bigint NOT NULL,
  `instanceid` bigint NOT NULL,
  `component` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `instancetype` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `provider` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `roomname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `avatarfilename` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `avatarsynced` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_comm_con_ix` (`contextid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Communication records';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_communication`
--

LOCK TABLES `mdl_communication` WRITE;
/*!40000 ALTER TABLE `mdl_communication` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_communication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_communication_customlink`
--

DROP TABLE IF EXISTS `mdl_communication_customlink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_communication_customlink` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `commid` bigint NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_commcust_com_ix` (`commid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Stores the link associated with a custom link communication ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_communication_customlink`
--

LOCK TABLES `mdl_communication_customlink` WRITE;
/*!40000 ALTER TABLE `mdl_communication_customlink` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_communication_customlink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_communication_user`
--

DROP TABLE IF EXISTS `mdl_communication_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_communication_user` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `commid` bigint NOT NULL,
  `userid` bigint NOT NULL,
  `synced` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mdl_commuser_com_ix` (`commid`),
  KEY `mdl_commuser_use_ix` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Communication user records mapping';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_communication_user`
--

LOCK TABLES `mdl_communication_user` WRITE;
/*!40000 ALTER TABLE `mdl_communication_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_communication_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency`
--

DROP TABLE IF EXISTS `mdl_competency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `shortname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `descriptionformat` smallint NOT NULL DEFAULT '0',
  `idnumber` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `competencyframeworkid` bigint NOT NULL,
  `parentid` bigint NOT NULL DEFAULT '0',
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `sortorder` bigint NOT NULL,
  `ruletype` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ruleoutcome` tinyint NOT NULL DEFAULT '0',
  `ruleconfig` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `scaleid` bigint DEFAULT NULL,
  `scaleconfiguration` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_comp_comidn_uix` (`competencyframeworkid`,`idnumber`),
  KEY `mdl_comp_rul_ix` (`ruleoutcome`),
  KEY `mdl_comp_sca_ix` (`scaleid`),
  KEY `mdl_comp_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='This table contains the master record of each competency in ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency`
--

LOCK TABLES `mdl_competency` WRITE;
/*!40000 ALTER TABLE `mdl_competency` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_coursecomp`
--

DROP TABLE IF EXISTS `mdl_competency_coursecomp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_coursecomp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `ruleoutcome` tinyint NOT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  `sortorder` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compcour_coucom_uix` (`courseid`,`competencyid`),
  KEY `mdl_compcour_courul_ix` (`courseid`,`ruleoutcome`),
  KEY `mdl_compcour_cou2_ix` (`courseid`),
  KEY `mdl_compcour_com_ix` (`competencyid`),
  KEY `mdl_compcour_use2_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Link a competency to a course.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_coursecomp`
--

LOCK TABLES `mdl_competency_coursecomp` WRITE;
/*!40000 ALTER TABLE `mdl_competency_coursecomp` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_coursecomp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_coursecompsetting`
--

DROP TABLE IF EXISTS `mdl_competency_coursecompsetting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_coursecompsetting` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `courseid` bigint NOT NULL,
  `pushratingstouserplans` tinyint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compcour_cou_uix` (`courseid`),
  KEY `mdl_compcour_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='This table contains the course specific settings for compete';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_coursecompsetting`
--

LOCK TABLES `mdl_competency_coursecompsetting` WRITE;
/*!40000 ALTER TABLE `mdl_competency_coursecompsetting` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_coursecompsetting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_evidence`
--

DROP TABLE IF EXISTS `mdl_competency_evidence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_evidence` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usercompetencyid` bigint NOT NULL,
  `contextid` bigint NOT NULL,
  `action` tinyint NOT NULL,
  `actionuserid` bigint DEFAULT NULL,
  `descidentifier` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `desccomponent` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `desca` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `grade` bigint DEFAULT NULL,
  `note` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_compevid_use_ix` (`usercompetencyid`),
  KEY `mdl_compevid_con_ix` (`contextid`),
  KEY `mdl_compevid_act_ix` (`actionuserid`),
  KEY `mdl_compevid_use2_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='The evidence linked to a user competency';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_evidence`
--

LOCK TABLES `mdl_competency_evidence` WRITE;
/*!40000 ALTER TABLE `mdl_competency_evidence` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_evidence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_framework`
--

DROP TABLE IF EXISTS `mdl_competency_framework`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_framework` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `shortname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contextid` bigint NOT NULL,
  `idnumber` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `descriptionformat` smallint NOT NULL DEFAULT '0',
  `scaleid` bigint DEFAULT NULL,
  `scaleconfiguration` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `visible` tinyint NOT NULL DEFAULT '1',
  `taxonomies` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compfram_idn_uix` (`idnumber`),
  KEY `mdl_compfram_con_ix` (`contextid`),
  KEY `mdl_compfram_sca_ix` (`scaleid`),
  KEY `mdl_compfram_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='List of competency frameworks.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_framework`
--

LOCK TABLES `mdl_competency_framework` WRITE;
/*!40000 ALTER TABLE `mdl_competency_framework` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_framework` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_modulecomp`
--

DROP TABLE IF EXISTS `mdl_competency_modulecomp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_modulecomp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `cmid` bigint NOT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  `sortorder` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `ruleoutcome` tinyint NOT NULL,
  `overridegrade` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compmodu_cmicom_uix` (`cmid`,`competencyid`),
  KEY `mdl_compmodu_cmirul_ix` (`cmid`,`ruleoutcome`),
  KEY `mdl_compmodu_cmi_ix` (`cmid`),
  KEY `mdl_compmodu_com_ix` (`competencyid`),
  KEY `mdl_compmodu_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Link a competency to a module.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_modulecomp`
--

LOCK TABLES `mdl_competency_modulecomp` WRITE;
/*!40000 ALTER TABLE `mdl_competency_modulecomp` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_modulecomp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_plan`
--

DROP TABLE IF EXISTS `mdl_competency_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_plan` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `descriptionformat` smallint NOT NULL DEFAULT '0',
  `userid` bigint NOT NULL,
  `templateid` bigint DEFAULT NULL,
  `origtemplateid` bigint DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `duedate` bigint DEFAULT '0',
  `reviewerid` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL DEFAULT '0',
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_compplan_usesta_ix` (`userid`,`status`),
  KEY `mdl_compplan_tem_ix` (`templateid`),
  KEY `mdl_compplan_stadue_ix` (`status`,`duedate`),
  KEY `mdl_compplan_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Learning plans';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_plan`
--

LOCK TABLES `mdl_competency_plan` WRITE;
/*!40000 ALTER TABLE `mdl_competency_plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_plancomp`
--

DROP TABLE IF EXISTS `mdl_competency_plancomp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_plancomp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `planid` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `sortorder` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint DEFAULT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compplan_placom_uix` (`planid`,`competencyid`),
  KEY `mdl_compplan_use2_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Plan competencies';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_plancomp`
--

LOCK TABLES `mdl_competency_plancomp` WRITE;
/*!40000 ALTER TABLE `mdl_competency_plancomp` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_plancomp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_relatedcomp`
--

DROP TABLE IF EXISTS `mdl_competency_relatedcomp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_relatedcomp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `competencyid` bigint NOT NULL,
  `relatedcompetencyid` bigint NOT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint DEFAULT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_comprela_com_ix` (`competencyid`),
  KEY `mdl_comprela_rel_ix` (`relatedcompetencyid`),
  KEY `mdl_comprela_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Related competencies';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_relatedcomp`
--

LOCK TABLES `mdl_competency_relatedcomp` WRITE;
/*!40000 ALTER TABLE `mdl_competency_relatedcomp` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_relatedcomp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_template`
--

DROP TABLE IF EXISTS `mdl_competency_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_template` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `shortname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contextid` bigint NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `descriptionformat` smallint NOT NULL DEFAULT '0',
  `visible` tinyint NOT NULL DEFAULT '1',
  `duedate` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_comptemp_con_ix` (`contextid`),
  KEY `mdl_comptemp_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Learning plan templates.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_template`
--

LOCK TABLES `mdl_competency_template` WRITE;
/*!40000 ALTER TABLE `mdl_competency_template` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_templatecohort`
--

DROP TABLE IF EXISTS `mdl_competency_templatecohort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_templatecohort` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `templateid` bigint NOT NULL,
  `cohortid` bigint NOT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_comptemp_temcoh_uix` (`templateid`,`cohortid`),
  KEY `mdl_comptemp_tem2_ix` (`templateid`),
  KEY `mdl_comptemp_use3_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Default comment for the table, please edit me';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_templatecohort`
--

LOCK TABLES `mdl_competency_templatecohort` WRITE;
/*!40000 ALTER TABLE `mdl_competency_templatecohort` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_templatecohort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_templatecomp`
--

DROP TABLE IF EXISTS `mdl_competency_templatecomp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_templatecomp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `templateid` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint NOT NULL,
  `usermodified` bigint NOT NULL,
  `sortorder` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mdl_comptemp_tem_ix` (`templateid`),
  KEY `mdl_comptemp_com_ix` (`competencyid`),
  KEY `mdl_comptemp_use2_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Link a competency to a learning plan template.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_templatecomp`
--

LOCK TABLES `mdl_competency_templatecomp` WRITE;
/*!40000 ALTER TABLE `mdl_competency_templatecomp` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_templatecomp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_usercomp`
--

DROP TABLE IF EXISTS `mdl_competency_usercomp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_usercomp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `reviewerid` bigint DEFAULT NULL,
  `proficiency` tinyint DEFAULT NULL,
  `grade` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint DEFAULT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compuser_usecom_uix` (`userid`,`competencyid`),
  KEY `mdl_compuser_use_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='User competencies';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_usercomp`
--

LOCK TABLES `mdl_competency_usercomp` WRITE;
/*!40000 ALTER TABLE `mdl_competency_usercomp` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_usercomp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_usercompcourse`
--

DROP TABLE IF EXISTS `mdl_competency_usercompcourse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_usercompcourse` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `courseid` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `proficiency` tinyint DEFAULT NULL,
  `grade` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint DEFAULT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compuser_usecoucom_uix` (`userid`,`courseid`,`competencyid`),
  KEY `mdl_compuser_use2_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='User competencies in a course';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_usercompcourse`
--

LOCK TABLES `mdl_competency_usercompcourse` WRITE;
/*!40000 ALTER TABLE `mdl_competency_usercompcourse` DISABLE KEYS */;
/*!40000 ALTER TABLE `mdl_competency_usercompcourse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdl_competency_usercompplan`
--

DROP TABLE IF EXISTS `mdl_competency_usercompplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mdl_competency_usercompplan` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `competencyid` bigint NOT NULL,
  `planid` bigint NOT NULL,
  `proficiency` tinyint DEFAULT NULL,
  `grade` bigint DEFAULT NULL,
  `sortorder` bigint DEFAULT NULL,
  `timecreated` bigint NOT NULL,
  `timemodified` bigint DEFAULT NULL,
  `usermodified` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mdl_compuser_usecompla_uix` (`userid`,`competencyid`,`planid`),
  KEY `mdl_compuser_use3_ix` (`usermodified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='User competencies plans';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdl_competency_usercompplan`
--

LOCK TABLES `mdl_competency_usercompplan` WRITE;
/*!40000 ALTER TABLE `mdl_competency_usercompplan` DISABLE KEYS */;
