-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: medicare
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_contact` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (7,'Hani Siddiqui','hani@gmail.com','031256','admin123','adminimages/hani.jpg'),(8,'Mark','abc@gmail.com','49827','abc123','adminimages/62c8846fdd292img.jpg');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `app_date` date NOT NULL,
  `app_createiondate` date NOT NULL,
  `doc_remarks` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `app_status` varchar(50) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`app_id`),
  KEY `patient_id` (`patient_id`),
  KEY `doctor_id` (`doctor_id`),
  CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`P_id`),
  CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (2,1,4,'2022-06-30','2022-08-22','i want check my heart up....','Momin','03116302224','sheikhmomin836@gmail.com','Pending'),(5,1,4,'2022-05-05','2022-08-22',',mCQNJ','hani','03126238275','hanisiddiqui101@gmail.com','Approved'),(7,1,3,'2022-08-25','2022-08-22','wksj','hani','03126238275','hanisiddiqui101@gmail.com','Approved'),(9,1,3,'2022-08-26','2022-08-22','mm,zxcna','hani siddiqui','03126238275','hanisiddiqui101@gmail.com','Approved'),(10,1,5,'2022-04-01','2022-08-22','n admbyqi','hani siddiqui','03126238275','hanisiddiqui101@gmail.com','Canceled'),(13,1,3,'2022-05-12','2022-08-22','nnjgy','hani siddiqui','03126238275','hanisiddiqui101@gmail.com','Pending'),(15,1,3,'2022-05-19','2022-08-22',',nbguyt','hani siddiqui','03126238275','hanisiddiqui101@gmail.com','Pending'),(17,1,3,'2022-08-24','2022-08-22','n,cbx','hani siddiqui','03126238275','hanisiddiqui101@gmail.com','Approved'),(20,1,3,'2022-08-27','2022-08-22','nnbaid','hani siddiqui','03126238275','hanisiddiqui101@gmail.com','Approved'),(21,1,3,'2022-09-02','2022-08-22','i got sick','ali','03116302224','ali@gmail.com','Canceled'),(22,1,4,'2022-09-01','2022-08-27','hey i am ill','Aveeza','03453202365','adnanamber568@gmail.com','Approved'),(23,7,3,'2022-09-23','2022-09-07','i got fever','ali','03453202365','hanisiddiqui101@gmail.com','Pending'),(24,1,4,'2022-09-21','2022-09-10','nbidhfdy','zainab','03453202365','hanisiddiqui101@gmail.com','Approved'),(25,1,3,'2022-09-20','2022-09-10','znmzxaa','hani','03453202365','hanisiddiqui101@gmail.com','Pending'),(26,1,4,'2022-09-15','2022-09-10',',,cmfndj','hani','03453202365','hanisiddiqui101@gmail.com','Approved'),(27,1,3,'2022-09-28','2022-09-18','im so ill','ali','03453202365','hanisiddiqui101@gmail.com','Approved');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` blob NOT NULL,
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES ('ali','03453202365','hanisiddiqui101@gmail.com',_binary 'nnzdwyw',9),('zainab','03453202365','hanisiddiqui101@gmail.com',_binary ',mm,cvnsi',8),('sakeena','031262383','sakeena@gmail.com',_binary 'i got good experience',4),('umer','03126238275','umer@gmail.com',_binary ',msKDKHIDUH ',5),('ali','03453202365','hanisiddiqui101@gmail.com',_binary 'i got issue',7);
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(100) NOT NULL,
  `dep_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (2,'dermatalogy ','Provides medical care to patients who have problems with their heart or circulation.'),(3,'Naturopath','Naturopaths use natural therapies to support the body and bones of patients'),(4,'surgery','Provides medical care to patients who have problems with their heart or circulation.'),(5,'cancer\r\n','Provides medical care to patients who have problems with their heart or circulation.'),(12,'cardiology','Provides medical care to patients who have problems with their heart or circulation.'),(13,'Gayeneology','Investigates and treats problems relating to the female urinary tract and alot of things.');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disease`
--

DROP TABLE IF EXISTS `disease`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disease` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_name` varchar(100) NOT NULL,
  `dis_description` blob,
  `dis_prevention` blob,
  `dis_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disease`
--

LOCK TABLES `disease` WRITE;
/*!40000 ALTER TABLE `disease` DISABLE KEYS */;
INSERT INTO `disease` VALUES (6,'Dengue Fever 2',_binary 'Monsoon rains create stagnant pools of water which are the perfect breeding grounds for mosquitoes. This gives rise to diseases such as dengue. Dengue fever is caused by the dengue virus and is spread through the bite of mosquitoes belonging to the Aides species',_binary 'During outdoor activities, mosquito repellents may be applied to exposed skin or to clothing. Insecticide-treated nets offer good protection to people who sleep outside or during the day (e.g., infants, bedridden and night workers) including dengue patients in hospitals and at night to prevent mosquito bites','disease/62fe74e499448dengue.jpg'),(8,'Diarhoea',_binary 'Diarrhoea is usually a symptom of an infection in the intestinal tract, which can be caused by a variety of bacterial, viral and parasitic organisms. Infection is spread through contaminated food or drinking-water, or from person-to-person as a result of poor hygiene.',_binary 'Interventions to prevent diarrhoea, including safe drinking-water, use of improved sanitation and hand washing with soap can reduce disease risk. Diarrhoea should be treated with oral rehydration solution (ORS), a solution of clean water, sugar and salt. In addition, a 10-14 day supplemental treatment course of dispersible 20 mg zinc tablets shortens diarrhoea duration and improves outcomes.','disease/62ff999272919diarea.jpg'),(9,'cold and flu',_binary 'Both of these illnesses are upper respiratory infections, meaning they involve your nose, throat, and lungs. Viruses cause both colds and flu by increasing inflammation of the membranes in the nose and throat.  Most transmission of these viruses occurs via hand-to-hand contact.',_binary 'UHS offers flu shots to Princeton students at a reduced cost every fall. Even though getting a flu shot will not completely eliminate your chances of developing the flu, it will certainly reduce the risk. Each year, a new vaccine made from inactivated (killed) influenza viruses is formulated. Since it may take the immune system time to respond to the vaccination, the inactivated vaccine should be given 6 to 8 weeks before flu season begins in order to prevent infection or reduce the severity of the illness.','disease/62ff9d0a210cfcold.png'),(10,'Chicken Pox',_binary 'There is also strong evidence that microbes may contribute to many non–infectious chronic diseases such as some forms of cancer and coronary heart disease.',_binary 'reach their target site in the body; attach to the target site they are trying to infect so that they are not dislodged; multiply rapidly','disease/6318d8e971a79vaccine.jpg');
/*!40000 ALTER TABLE `disease` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(50) NOT NULL,
  `doc_lname` varchar(50) NOT NULL,
  `doc_email` varchar(200) NOT NULL,
  `doc_pic` varchar(255) NOT NULL,
  `doc_address` varchar(200) NOT NULL,
  `doc_contact` varchar(50) NOT NULL,
  `doc_depid` int(11) DEFAULT NULL,
  `doc_status` varchar(50) NOT NULL DEFAULT 'active',
  `doc_description` blob,
  `doc_password` varchar(100) NOT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `doc_depid` (`doc_depid`),
  CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`doc_depid`) REFERENCES `departments` (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES (2,'Mark','thomas','abc@gmail.com','doctor/_970img1.jpg','unit 6 Latifabad hyderabad','32907498',12,'active',_binary 'this beautiful and classy sunglassses will potect YOUR EYES','otto123'),(3,'Marky','Otto','abc@gmail.com','doctor/_82562c8810e00a8662c342423f46aimg-1.jpg','unit 6 Latifabad hyderabad','0893177',5,'active',_binary 'this beautiful and classy sunglassses will potect YOUR EYES','marky123'),(4,'Nasim','Ashraf','nasim@gmail.com','doctor/62fe6bddd2f2edr nasim.jpg','First floor, Saudi Pak Towers, 61-A Jinnah Avenue, Islamabad','031278208',2,'active',_binary 'Dr. Nasim Ashraf is one of the most experienced Gynecologists, Obstetrician, and Fertility Consultants in Islamabad. He practices at two clinics and offers the latest, safest, and least intrusive methods for the treatment of infertility issues and pregnancy issues. He is often present in panels, conferences, and events that talk about women’s reproductive health.','nasim123'),(5,'Faisal','Masud','faisal@gmail.com','doctor/62fe6d36e4305faisal.jpg','First floor, Saudi Pak Towers, 61-A Jinnah Avenue, Islamabad','031893177',12,'active',_binary 'Dr. Faisal Masud is one of the most experienced Gynecologists, Obstetrician, and Fertility Consultants in Islamabad. He practices at two clinics and offers the latest, safest, and least intrusive methods for the treatment of infertility issues and pregnancy issues. He is often present in panels, conferences, and events that talk about women’s reproductive health.','faisal123'),(6,'Amna','Buttar','amna@gmail.com','doctor/62fe726133253amna.jpg','First floor, Saudi Pak Towers, 61-A Jinnah Avenue, Islamabad','0893177',13,'active',_binary 'Dr. Amna Buttar is one of the most experienced Gynecologists, Obstetrician, and Fertility Consultants in Islamabad. He practices at two clinics and offers the latest, safest, and least intrusive methods for the treatment of infertility issues and pregnancy issues. He is often present in panels, conferences, and events that talk about women’s reproductive health.','amna123'),(7,'Bari','Khan','bari@gmail.com','doctor/6318d3b1274f4bari.jpg','unit 8 latifabad hyderabad','3290744',3,'active',_binary 'Dr. Abdul Bari Khan. Home Team Member Dr. Abdul Bari Khan. Dr. Abdul Bari Khan. Chief Executive Officer. Address. INDUS HOSPITAL & HEALTH NETWORK, ...Interview with Dr. Abdul Bari Khan — Chief Executive Officer, Indus Health Network · PAGE: Tell me something about yourself and Indus Hospital & ...','bari123');
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `pat_id` int(11) DEFAULT NULL,
  `feedback` blob,
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`f_id`),
  KEY `pat_id` (`pat_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`P_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,_binary 'i love this',1),(1,_binary 'why there is arrow?',2),(1,_binary 'why there is arrow?',3),(1,_binary 'why there is arrow?',4),(1,_binary 'heyyy',5),(1,_binary 'heyyy',6);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `P_id` int(11) NOT NULL AUTO_INCREMENT,
  `P_name` varchar(50) NOT NULL,
  `p_lname` varchar(50) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_password` varchar(100) NOT NULL,
  `p_contact` varchar(100) NOT NULL,
  `p_dob` varchar(50) NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (1,'hani','siddiqui','house 165/d unit 5 hyderabad sindh','hanisiddiqui101@gmail.com','hanip123','0893177','2003-10-12'),(2,'areeba','khan','unit 8','areeba@gmail.com','areeba123','0893177','2002-10-05'),(3,'Aveeza','adnan','house 165 latifabad hyderabd','hani@gmail.com','admin123','03126238275','2002-09-10'),(4,'Aveeza','adnan','house 165 latifabad hyderabd','hani@gmail.com','admin123','03126238275','2002-09-10'),(5,'khalad','sheikh','house 165 latifabad hyderabd','khalad@gmail.com','khalad123','03126238275','2002-09-09'),(6,'teham','sheikh','house 165/d unit 5 hyderabad','teham@gmail.com','teham123','03126238275','2010-12-17'),(7,'ali','haider','house 165 latifabad hyderabd','hanisiddiqui101@gmail.com','ali123','32907498','2022-12-20');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_number` int(11) NOT NULL,
  `r_date` date DEFAULT NULL,
  `r_udate` date DEFAULT NULL,
  `r_name` varchar(100) DEFAULT NULL,
  `r_report` blob,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `r_number` (`r_number`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` VALUES (2,1,'2022-08-03','2022-08-21','hani siddiqui',_binary 'reports/63024ce0b58031.pdf'),(3,2,'2022-07-06','2022-08-21','Nasim',_binary 'reports/63026f8c64df01 - Copy (2).pdf'),(4,3,'2022-09-01','2022-09-07','Ali Haider',_binary 'reports/6318d846898b5dummy.pdf');
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saved_reports`
--

DROP TABLE IF EXISTS `saved_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saved_reports` (
  `save_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `rep_id` int(11) DEFAULT NULL,
  `s_rep` blob,
  PRIMARY KEY (`save_id`),
  KEY `patient_id` (`patient_id`),
  KEY `rep_id` (`rep_id`),
  CONSTRAINT `saved_reports_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`P_id`),
  CONSTRAINT `saved_reports_ibfk_2` FOREIGN KEY (`rep_id`) REFERENCES `reports` (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_reports`
--

LOCK TABLES `saved_reports` WRITE;
/*!40000 ALTER TABLE `saved_reports` DISABLE KEYS */;
INSERT INTO `saved_reports` VALUES (4,1,2,_binary 'reports/63024ce0b58031.pdf'),(6,1,4,_binary 'reports/6318d846898b5dummy.pdf'),(8,1,3,_binary 'reports/63026f8c64df01 - Copy (2).pdf'),(9,1,4,_binary 'reports/6318d846898b5dummy.pdf'),(11,1,3,_binary 'reports/63026f8c64df01 - Copy (2).pdf'),(12,1,3,_binary 'reports/63026f8c64df01 - Copy (2).pdf'),(13,1,4,_binary 'reports/6318d846898b5dummy.pdf');
/*!40000 ALTER TABLE `saved_reports` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-19  8:57:13
