-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: OBSystem_db
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `regestration_number` varchar(12) NOT NULL,
  `job_role` tinytext NOT NULL,
  `started_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`regestration_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Bulk_Messages`
--

DROP TABLE IF EXISTS `Bulk_Messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bulk_Messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(12) NOT NULL COMMENT 'registration number of the admin sent the message ',
  `timestamp` datetime NOT NULL,
  `description` mediumtext,
  `Bulk_Messagescol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`message_id`),
  KEY `fk_Bulk_Messages_Admin_idx` (`sender`),
  CONSTRAINT `fk_Bulk_Messages_Admin` FOREIGN KEY (`sender`) REFERENCES `Admin` (`regestration_number`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Document`
--

DROP TABLE IF EXISTS `Document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` mediumtext,
  `document_url` mediumtext NOT NULL,
  `event_id` int(11) NOT NULL,
  `uploader` varchar(12) NOT NULL COMMENT 'registration number of the person ulpoaded the document ',
  PRIMARY KEY (`document_id`),
  KEY `fk_Document_Admin_idx` (`uploader`),
  KEY `fk_Document_Event_idx` (`event_id`),
  CONSTRAINT `fk_Document_Admin` FOREIGN KEY (`uploader`) REFERENCES `Admin` (`regestration_number`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Document_Event` FOREIGN KEY (`event_id`) REFERENCES `Events` (`event_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Events`
--

DROP TABLE IF EXISTS `Events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Events` (
  `event_id` int(11) NOT NULL,
  `name` tinytext,
  `date` date DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `description` mediumtext,
  `location` tinytext,
  `status` int(11) DEFAULT NULL,
  `created_by` varchar(12) DEFAULT NULL COMMENT 'reistration number of the admin',
  PRIMARY KEY (`event_id`),
  KEY `fk_Events_Admin_idx` (`created_by`),
  CONSTRAINT `fk_Events_Admin` FOREIGN KEY (`created_by`) REFERENCES `Admin` (`regestration_number`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Inquiry`
--

DROP TABLE IF EXISTS `Inquiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inquiry` (
  `inquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `send_by` varchar(12) NOT NULL COMMENT 'registration number of the sendng person',
  `description` mediumtext NOT NULL,
  `timestamp` datetime NOT NULL,
  `reply` mediumtext,
  `reply_by` varchar(12) DEFAULT NULL COMMENT 'regestration number of the replying admin',
  PRIMARY KEY (`inquiry_id`),
  KEY `fk_Inquiry_User_idx` (`send_by`),
  KEY `fk_Inquiry_Admin_idx` (`reply_by`),
  CONSTRAINT `fk_Inquiry_Admin` FOREIGN KEY (`reply_by`) REFERENCES `Admin` (`regestration_number`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_Inquiry_User` FOREIGN KEY (`send_by`) REFERENCES `User` (`regestration_number`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Member`
--

DROP TABLE IF EXISTS `Member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Member` (
  `regestration_number` varchar(12) NOT NULL,
  `name` tinytext NOT NULL,
  `address` mediumtext,
  `email address` tinytext NOT NULL,
  `contact_number` tinytext,
  `olevel_year` int(11) DEFAULT NULL,
  `alevel_yeat` int(11) DEFAULT NULL,
  `profile_picture_url` mediumtext,
  `birthday` date DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`regestration_number`)
) ENGINE=InnoDB DEFAULT CHARSET=dec8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Participant`
--

DROP TABLE IF EXISTS `Participant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Participant` (
  `participant_id` int(11) NOT NULL AUTO_INCREMENT,
  `participation_status` tinyint(1) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user` varchar(12) NOT NULL,
  PRIMARY KEY (`participant_id`),
  KEY `fk_Participant_Event_idx` (`event_id`),
  KEY `fk_Participant_User_idx` (`user`),
  CONSTRAINT `fk_Participant_Event` FOREIGN KEY (`event_id`) REFERENCES `Events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Participant_User` FOREIGN KEY (`user`) REFERENCES `User` (`regestration_number`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Payment`
--

DROP TABLE IF EXISTS `Payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `type` tinytext COMMENT 'onlline paymnt , cash',
  `regestration_number` varchar(12) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `fk_payment_1_idx` (`regestration_number`),
  CONSTRAINT `fk_payment_user` FOREIGN KEY (`regestration_number`) REFERENCES `User` (`regestration_number`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `regestration_number` varchar(12) NOT NULL,
  `status` int(11) NOT NULL COMMENT ' 0 - inactive \n1 - active',
  PRIMARY KEY (`regestration_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-17 18:08:20
