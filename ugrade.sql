-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.96-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema ugrade
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ ugrade;
USE ugrade;

--
-- Table structure for table `ugrade`.`cost`
--

DROP TABLE IF EXISTS `cost`;
CREATE TABLE `cost` (
  `id` tinyint(4) NOT NULL,
  `description` varchar(45) default NULL,
  `min` int(10) unsigned default NULL,
  `max` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrade`.`cost`
--

/*!40000 ALTER TABLE `cost` DISABLE KEYS */;
/*!40000 ALTER TABLE `cost` ENABLE KEYS */;


--
-- Table structure for table `ugrade`.`program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(100) default NULL,
  `ammission` tinyint(1) default NULL,
  `cost` int(11) default NULL,
  `university_id` int(11) NOT NULL,
  `program_type_id` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_program_university_idx` (`university_id`),
  KEY `fk_program_type1_idx` (`program_type_id`),
  CONSTRAINT `fk_program_university` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_program_type1` FOREIGN KEY (`program_type_id`) REFERENCES `program_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrade`.`program`
--

/*!40000 ALTER TABLE `program` DISABLE KEYS */;
INSERT INTO `program` (`id`,`name`,`ammission`,`cost`,`university_id`,`program_type_id`) VALUES 
 (1,'Patacologia Applicata',0,10,1,1),
 (2,'Fancazzismo',0,100,1,2),
 (3,'Megacorso figo',1,20000,4,1),
 (4,'Megacorso figo 2',1,30000,4,2),
 (5,'Megacorso figo 3',1,40000,4,3);
/*!40000 ALTER TABLE `program` ENABLE KEYS */;


--
-- Table structure for table `ugrade`.`program_type`
--

DROP TABLE IF EXISTS `program_type`;
CREATE TABLE `program_type` (
  `id` tinyint(4) NOT NULL,
  `description` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrade`.`program_type`
--

/*!40000 ALTER TABLE `program_type` DISABLE KEYS */;
INSERT INTO `program_type` (`id`,`description`) VALUES 
 (1,'Bachelor Degree'),
 (2,'Master Degree'),
 (3,'MBA'),
 (4,'PHD');
/*!40000 ALTER TABLE `program_type` ENABLE KEYS */;


--
-- Table structure for table `ugrade`.`university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(50) default NULL,
  `country` varchar(45) default NULL,
  `city` varchar(45) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrade`.`university`
--

/*!40000 ALTER TABLE `university` DISABLE KEYS */;
INSERT INTO `university` (`id`,`name`,`country`,`city`) VALUES 
 (1,'Università degli Studi di Honolulu','Hawaii','Honolulu'),
 (2,'Patacca University','Italy','Milan'),
 (3,'Cheap University','Italy','Rome'),
 (4,'Cool University','Italy','Rome');
/*!40000 ALTER TABLE `university` ENABLE KEYS */;


--
-- Table structure for table `ugrade`.`user_account`
--

DROP TABLE IF EXISTS `user_account`;
CREATE TABLE `user_account` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) character set big5 default NULL,
  `password` varchar(20) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugrade`.`user_account`
--

/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
