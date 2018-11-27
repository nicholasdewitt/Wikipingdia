CREATE DATABASE  IF NOT EXISTS `wikipingdia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wikipingdia`;
-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: wikipingdia
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `classfields`
--

DROP TABLE IF EXISTS `classfields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classfields` (
  `type_ID` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classfields`
--

LOCK TABLES `classfields` WRITE;
/*!40000 ALTER TABLE `classfields` DISABLE KEYS */;
INSERT INTO `classfields` VALUES (1,'Core'),(2,'Elective'),(3,'Elective- Data Science Specialization');
/*!40000 ALTER TABLE `classfields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `course_code` varchar(8) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES ('INST126','Introduction to Programming for Information Science','An introduction to computer programming for students with very limited or no previous programming experience. Topics include fundamental programming concepts such as variables, data types, assignments, arrays, conditionals, loops, functions, and I/O opera'),('INST201','Introduction to Information Science','Examining the effects of new information technologies on how we conduct business, interact with friends, and go through our daily lives. Understanding how technical and social factors have influenced the evolution of information society. Evaluating the tr'),('INST311','Information Organization','Examines the theories, concepts, and principles of information, information representation and organization, record structures, description, and classification. Topics to be covered in this course include the methods and strategies to develop systems for '),('INST314','Statistics for Information Science','Basic concepts in statistics including measure construction, data exploration, hypothesis development, hypothesis testing, pattern identification, and statistical analysis. The course also provides an overview of commonly used data manipulation and analyt'),('INST326','Object-Oriented Programming for Information Science','An introduction to programming, emphasizing understanding and implementation of applications using object-oriented techniques. Topics to be covered include program design and testing as well as implementation of programs.'),('INST327','Database Design and Modelling','Introduction to databases, the relational model, entity-relationship diagrams, user-oriented database design and normalization, and Structured Query Language (SQL). Through labs, tests, and a project, students develop both theoretical and practical knowle'),('INST335','Teams and Organizations','Team development and the principles, methods and types of leadership will be a focus with an emphasis on goal setting, motivation, problem solving, and conflict resolution. This course examines the principles of managing team projects in organizations thr'),('INST346','Technologies Infrastructure and Architecture','Examines the basic concepts of local and wide-area computer networking including an overview of services provided by networks, network topologies and hardware, packet switching, client/server architectures, network protocols, and network servers and appli'),('INST352','Information User Needs and Assessment','Focuses on use of information by individuals, including the theories, concepts, and principles of information, information behavior and mental models. Methods for determining information behavior and user needs, including accessibility issues will be exam'),('INST354','Decision-Making for Information Science','Examines the use of information in organizational and individual decision-making, including the roles of information professionals and information systems in informed decision-making through techniques such as data analysis and regression, optimization, s'),('INST362','User-Centered Design','Introduction to human-computer interaction (HCI), with a focus on how HCI connects psychology, information systems, computer science, and human factors. User-centered design and user interface implementation methods discussed include identifying user need'),('INST377','Dynamic Web Applications','An exploration of the basic methods and tools for developing dynamic, database-driven websites, including acquiring, installing, and running web servers, database servers, and connectability applications.'),('INST408B','Special Topics in Information Science; Design and Humanity Disability and Aging','-None Provided-'),('INST408C','Special Topics in Information Science; Book Lab: The History of the Book & The Future of Reading','-None Provided-'),('INST414','Data Science Techniques','An exploration of how to extract insights from large-scale datasets. The course will cover the complete analytical funnel from data extraction and cleaning to data analysis and insights interpretation and visualization. The data analysis component will fo'),('INST447','Data Sources and Manipulation','Examines approaches to locating, acquiring, manipulating, and disseminating data. Imperfection, biases, and other problems in data are examined, and methods for identifying and correcting such problems are introduced. The course covers other topics such a'),('INST448','Digital Curation Research in Cultural Big Data Collections','-None Provided-'),('INST462','Introduction to Data Visualization','Exploration of the theories, methods, and techniques of visualization of information, including the effects of human perception, the aesthetics of information design, the mechanics of visual display, and the semiotics of iconography.'),('INST466','Technology, Culture, and Society','Individual, cultural, and societal outcomes associated with development of information & communication technologies (ICTs), including pro- and anti-social factors. Unpacking how gender, race, ethnicity, sexual orientation, disabilities, and political affi'),('INST490','Integrated Capstone for Information Science','The capstone provides a platform for Information Science students where they can apply a subset of the concepts, methods, and tools they learn as part of the Information Science program to addressing an information problem or fulfilling an information nee');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coursetype`
--

DROP TABLE IF EXISTS `coursetype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coursetype` (
  `coursetype_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(8) NOT NULL,
  `type_ID` int(11) NOT NULL,
  PRIMARY KEY (`coursetype_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursetype`
--

LOCK TABLES `coursetype` WRITE;
/*!40000 ALTER TABLE `coursetype` DISABLE KEYS */;
INSERT INTO `coursetype` VALUES (1,'INST126',1),(2,'INST201',1),(3,'INST311',1),(4,'INST314',1),(5,'INST326',1),(6,'INST327',1),(7,'INST335',1),(8,'INST346',1),(9,'INST352',1),(10,'INST354',3),(11,'INST362',1),(12,'INST377',3),(13,'INST408B',2),(14,'INST408C',2),(15,'INST414',3),(16,'INST447',3),(17,'INST448',2),(18,'INST462',3),(19,'INST466',2),(20,'INST490',1);
/*!40000 ALTER TABLE `coursetype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prereqs`
--

DROP TABLE IF EXISTS `prereqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prereqs` (
  `prereq_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(8) NOT NULL,
  `pre_course_code` varchar(8) NOT NULL,
  PRIMARY KEY (`prereq_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prereqs`
--

LOCK TABLES `prereqs` WRITE;
/*!40000 ALTER TABLE `prereqs` DISABLE KEYS */;
INSERT INTO `prereqs` VALUES (1,'INST126','MATH115'),(2,'INST311','INST201'),(3,'INST314','INST201'),(4,'INST314','MATH115'),(5,'INST314','STAT100'),(6,'INST326','INST126'),(7,'INST326','INST201'),(8,'INST327','INST126'),(9,'INST327','INST201'),(10,'INST335','INST201'),(11,'INST335','PSYC100'),(12,'INST346','INST201'),(13,'INST346','INST326'),(14,'INST346','INST327'),(15,'INST352','INST201'),(16,'INST352','INST311'),(17,'INST354','INST314'),(18,'INST362','INST201'),(19,'INST362','INST326'),(20,'INST362','PSYC100'),(21,'INST377','INST327'),(22,'INST414','INST314'),(23,'INST447','INST326'),(24,'INST447','INST327'),(25,'INST462','INST314'),(26,'INST466','INST201'),(27,'INST490','INST314'),(28,'INST490','INST335'),(29,'INST490','INST346'),(30,'INST491','INST352'),(31,'INST492','INST362');
/*!40000 ALTER TABLE `prereqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_class`
--

DROP TABLE IF EXISTS `review_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_class` (
  `review_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(8) NOT NULL,
  `num_stars` int(11) NOT NULL,
  `review_text` varchar(255) NOT NULL,
  PRIMARY KEY (`review_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_class`
--

LOCK TABLES `review_class` WRITE;
/*!40000 ALTER TABLE `review_class` DISABLE KEYS */;
INSERT INTO `review_class` VALUES (1,'INST414',1,'this class is really really hard'),(2,'INST126',2,'only 2 people liked it'),(3,'INST490',3,'It was only a little fun');
/*!40000 ALTER TABLE `review_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_teacher`
--

DROP TABLE IF EXISTS `review_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_teacher` (
  `review_ID` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_ID` int(11) NOT NULL,
  `num_stars` int(11) NOT NULL,
  `review_text` varchar(255) NOT NULL,
  PRIMARY KEY (`review_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_teacher`
--

LOCK TABLES `review_teacher` WRITE;
/*!40000 ALTER TABLE `review_teacher` DISABLE KEYS */;
INSERT INTO `review_teacher` VALUES (14,8,5,'This is rad!'),(15,40,5,'Top Notch!'),(16,1,1,'This guy sucks'),(17,40,5,'10/10 would take any class with her again'),(18,40,-3,'the bees knees'),(19,3,5,'awesome!');
/*!40000 ALTER TABLE `review_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `section_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(8) NOT NULL,
  `teacher_ID` int(11) NOT NULL,
  PRIMARY KEY (`section_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (1,'INST126',1),(2,'INST126',12),(3,'INST201',2),(5,'INST201',30),(6,'INST201',31),(7,'INST201',32),(8,'INST311',3),(9,'INST314',4),(10,'INST314',10),(11,'INST314',13),(12,'INST314',26),(13,'INST314',27),(14,'INST314',45),(15,'INST326',1),(16,'INST326',11),(17,'INST326',14),(18,'INST326',15),(19,'INST326',33),(20,'INST326',28),(21,'INST326',34),(22,'INST326',35),(23,'INST326',36),(24,'INST327',5),(25,'INST327',16),(26,'INST327',17),(27,'INST335',6),(28,'INST335',18),(29,'INST335',29),(30,'INST346',19),(31,'INST346',11),(32,'INST346',37),(33,'INST352',7),(34,'INST352',20),(35,'INST352',38),(36,'INST354',21),(37,'INST362',8),(38,'INST362',22),(39,'INST362',23),(40,'INST362',39),(41,'INST408B',9),(42,'INST408C',41),(43,'INST377',24),(44,'INST377',40),(45,'INST414',42),(46,'INST447',16),(47,'INST447',45),(48,'INST448',46),(49,'INST462',25),(50,'INST462',43),(51,'INST466',2),(52,'INST490',44),(54,'INST490',5),(55,'INST201',47),(56,'INST490',47);
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `teacher_ID` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_fname` varchar(30) NOT NULL,
  `teacher_lname` varchar(30) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  PRIMARY KEY (`teacher_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'Bill','Kules','wmk@umd.edu'),(2,'Jessica','Vitak','jvitak@umd.edu'),(3,'Katy','Lawley','katyn@umd.edu'),(4,'Susan','Winter','sjwinter@umd.edu'),(5,'Vedat','Diker','vdiker@umd.edu'),(6,'Ping','Wang','pwang@umd.edu'),(7,'Ursula','Gorham-Oscilowski','ugorham@umd.edu'),(8,'Chi','Oh','coh@umd.edu'),(9,'Gregg','Vanderheiden','greggvan@umd.edu'),(10,'Joo','Choi','jchoi27@umd.edu'),(11,'Cody','Buntain','cbuntain@umd.edu'),(12,'Jonathan','Brier','brierjon@umd.edu'),(13,'Brian','Butler','bsbutler@umd.edu'),(14,'Timothy','Richards','trichards@umd.edu'),(15,'Dimitri','Wolford','dwolford@umd.edu'),(16,'Donal','Heidenblad','dheidenb@umd.edu'),(17,'Tammie','Nelson','tnelson7@umd.edu'),(18,'Philip','Piety','ppiety@umd.edu'),(19,'Douglas','Oard','oard@glue.umd.edu'),(20,'Beth','St Jean','bstjean@umd.edu'),(21,'Christopher','Antoun','antoun@umd.edu'),(22,'Amanda','Lazar','lazar@umd.edu'),(23,'Tamara','Clegg','tclegg@umd.edu'),(24,'Myeong','Lee','myeong@umd.edu'),(25,'Niklas','Elmqvist','elm@umd.edu'),(26,'Shawn','Janzen','sjanzen@umd.edu'),(27,'Aditya','Bhat','adi1710@umd.edu'),(28,'Lingzi','Hong','lzhong@umd.edu'),(29,'Taverekere','Srikantaiah','tsrikant@umd.edu'),(30,'Kelly','Hoffman','kmhinmd@umd.edu'),(31,'Laudan','Kalantary','lkalant@umd.edu'),(32,'Joel','Chan','joelchan@umd.edu'),(33,'Joshua','Westgard','westgard@umd.edu'),(34,'C','Rytting','crytting@umd.edu'),(35,'Aric','Bills','abills@umd.edu'),(36,'Leonard','Mayfield','lnmay3@umd.edu'),(37,'Christopher','Ajiri','cajiri@umd.edu'),(38,'Carol','Boston','cboston@umd.edu'),(39,'David','Weintrop','weintrop@umd.edu'),(40,'Rebecca','Follman','rfollman@umd.edu'),(41,'Kari','Kraus','kkraus@umd.edu'),(42,'Jordan','Boyd-Graber','jbg@umiacs.umd.edu'),(43,'Deok','Park','intuinno@umd.edu'),(44,'Timothy','Summers','tsummers@umd.edu'),(45,'Yla','Tausczik','ylatau@umd.edu'),(46,'Richard','Marciano','marciano@umd.edu'),(47,'Elizabeth','Bonsignore','ebonsign@umd.edu');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-26 21:55:36
